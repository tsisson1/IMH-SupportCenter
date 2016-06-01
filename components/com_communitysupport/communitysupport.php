<?

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/*
// import joomla controller library
jimport('joomla.application.component.controller');
 
// Get an instance of the controller prefixed by HelloWorld
$controller = JController::getInstance('CommunitySupport');
 
// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));
 
// Redirect if set by the controller
$controller->redirect();
*/

$db = JFactory::getDbo();
$user = JFactory::getUser();

$current_utc_n = strtotime(gmdate('Y-m-d H:i:s'));

include_once("view.php");

?>
