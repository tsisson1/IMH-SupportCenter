<?php
// namespace components\com_responsivizer\libraries\framework\dic;
/**
 *
 * @package RESPONSIVIZER::administrator::components::com_responsivizer
 * @subpackage framework
 * @subpackage dic
 * @author Joomla! Extensions Store
 * @copyright (C) 2014 - Joomla! Extensions Store
 * @license GNU/GPLv2 http://www.gnu.org/licenses/gpl-2.0.html  
 */
defined('_JEXEC') or die('Restricted access');

/**
 * Base controller class
 * 
 * @package RESPONSIVIZER::administrator::components::com_responsivizer
 * @subpackage framework
 * @subpackage dic
 * @since 2.0
 */
class ResponsivizerDic {
	private $rules = array();
	private $instances = array();

	public function assign($object) {
		$this->instances[strtolower(get_class($object))] = $object;
	}

	public function addRule($name, ResponsivizerDicRule $rule) {
		$rule->substitutions = array_change_key_case($rule->substitutions);
		$this->rules[strtolower($name)] = $rule;
	}

	public function getRule($name) {
		if (isset($this->rules[strtolower($name)]))
			return $this->rules[strtolower($name)];
		foreach ($this->rules as $key => $value) {
			if ($key !== '*' && is_subclass_of($name, $key) && $value->inherit == true)
				return $value;
		}
		return isset($this->rules['*']) ? $this->rules['*'] : new ResponsivizerDicRule;
	}

	public function create($component, array $args = array(), $callback = null, $forceNewInstance = false) {
		if ($component instanceof ResponsivizerDicInstance)
			$component = $component->name;

		if (!isset($this->rules[strtolower($component)]) && !class_exists($component))
			throw new Exception('Class does not exist for creation: ' . $component);

		if (!$forceNewInstance && isset($this->instances[strtolower($component)]))
			return $this->instances[strtolower($component)];

		$rule = $this->getRule($component);
		$className = (!empty($rule->instanceOf)) ? strtolower($rule->instanceOf) : $component;
		$share = $this->getParams($rule->shareInstances);
		$params = $this->getMethodParams($className, '__construct', $rule, array_merge($share, $args, $this->getParams($rule->constructParams)), $share);

		if (is_callable($callback, true))
			call_user_func_array($callback, array($params));

		$reflection = new ReflectionClass($className);
		$object = (count($params) > 0) ? $reflection->newInstanceArgs($params) : $object = new $className;
		if ($rule->shared == true)
			$this->instances[strtolower($component)] = $object;
		foreach ($rule->call as $call)
			call_user_func_array(array($object, $call[0]), $this->getMethodParams($className, $call[0], $rule, array_merge($this->getParams($call[1]), $args)));
		return $object;
	}

	private function getParams(array $params = array(), array $newInstances = array()) {
		for ($i = 0; $i < count($params); $i++) {
			if ($params[$i] instanceof ResponsivizerDicInstance)
				$params[$i] = $this->create($params[$i]->name, array(), null, in_array(strtolower($params[$i]->name), array_map('strtolower', $newInstances)));
			else
				$params[$i] = (!(is_array($params[$i]) && isset($params[$i][0]) && is_string($params[$i][0])) && is_callable($params[$i])) ? call_user_func($params[$i], $this) : $params[$i];
		}
		return $params;
	}

	private function getMethodParams($className, $method, ResponsivizerDicRule $rule, array $args = array(), array $share = array()) {
		if (!method_exists($className, $method))
			return array();
		$reflectionMethod = new ReflectionMethod($className, $method);
		$params = $reflectionMethod->getParameters();
		$parameters = array();
		foreach ($params as $param) {
			foreach ($args as $argName => $arg) {
				$class = $param->getClass();
				if ($class && is_object($arg) && $arg instanceof $class->name) {
					$parameters[] = $arg;
					unset($args[$argName]);
					continue 2;
				}
			}
			$paramClassName = $param->getClass() ? strtolower($param->getClass()->name) : false;
			if ($paramClassName && isset($rule->substitutions[$paramClassName]))
				$parameters[] = is_string($rule->substitutions[$paramClassName]) ? new ResponsivizerDicInstance($rule->substitutions[$paramClassName]) : $rule->substitutions[$paramClassName];
			else if ($paramClassName && class_exists($paramClassName))
				$parameters[] = $this->create($paramClassName, $share, null, in_array($paramClassName, array_map('strtolower', $rule->newInstances)));
			else if (is_array($args) && count($args) > 0)
				$parameters[] = array_shift($args);
			else
				$parameters[] = $param->isDefaultValueAvailable() ? $param->getDefaultValue() : null;
		}
		return $this->getParams($parameters, $rule->newInstances);
	}
}
