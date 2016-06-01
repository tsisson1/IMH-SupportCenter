<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

require_once JPATH_COMPONENT.'/helpers/route.php';
cc_clear_page_cache();
$controller = JControllerLegacy::getInstance('Users');
$controller->execute(JFactory::getApplication()->input->get('task', 'display'));
$controller->redirect();
