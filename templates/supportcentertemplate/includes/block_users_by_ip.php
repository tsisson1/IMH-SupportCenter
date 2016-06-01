<?php

$view = JRequest::getVar('view');
$id = (int)JRequest::getVar('id');


$db = JFactory::getDBO();
$query = 'SELECT ip FROM bipyv_admintools_ipblock';
$db->setQuery($query);
$result = $db->loadColumn(); 

$ip = $_SERVER['REMOTE_ADDR'];

if( in_array($ip, $result)) {

if (JRequest::getVar('option') == "com_content" AND JRequest::getVar('view') == "article" AND $id = '3541') {
} else {
header( 'Location: http://www.inmotionhosting.com/support/website/blocked' ) ;
}
}
?> 
