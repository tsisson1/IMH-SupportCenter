#!/usr/bin/php -q
<?php


define( '_JEXEC', 1 );
define( 'JPATH_BASE', "/home/ccdevinm/public_html/support/" );
define( 'DS', '/' );

require_once ( JPATH_BASE .DS.'includes'.DS.'defines.php' );
require_once ( JPATH_BASE .DS.'includes'.DS.'framework.php' );
require_once ( JPATH_BASE .DS.'libraries'.DS.'joomla'.DS.'factory.php' );
$db=JFactory::getDBO();
$db->setQuery($query);

$query = "select expiration from #__prechat_message WHERE `id` = 1;";
        $db->setQuery($query);
        $result = $db->loadObjectList();



$expiration_time = $result[0]->expiration;
if ($expiration_time != '0000-00-00 00:00:00'){
if (new DateTime() > new DateTime("$expiration_time")) {
   $query = "UPDATE #__prechat_message SET `message` = '<p>To help us ensure consistent availability and low wait times for all of our customers, please only contact us by one method at a time. (i.e. Chat, Ticket, or Phone). Thank you for your understanding.</p>', `last_update` = CURRENT_TIMESTAMP , `expiration` = '0000-00-00 00:00:00'  WHERE `id` = 1;";
        $db->setQuery($query);
        $result = $db->execute();
}
}

$query = "select expiration from #__prechat_message WHERE `id` = 3;";
        $db->setQuery($query);
        $result = $db->loadObjectList();



$expiration_time = $result[0]->expiration;
if ($expiration_time != '0000-00-00 00:00:00'){
if (new DateTime() > new DateTime("$expiration_time")) {
   $query = "UPDATE #__prechat_message SET `message` = '', `last_update` = CURRENT_TIMESTAMP , `expiration` = '0000-00-00 00:00:00'  WHERE `id` = 3;";
        $db->setQuery($query);
        $result = $db->execute();
}
}

$query = "select expiration from #__prechat_message WHERE `id` = 5;";
        $db->setQuery($query);
        $result = $db->loadObjectList();



$expiration_time = $result[0]->expiration;
if ($expiration_time != '0000-00-00 00:00:00'){
if (new DateTime() > new DateTime("$expiration_time")) {
   $query = "UPDATE #__prechat_message SET `message` = '', `last_update` = CURRENT_TIMESTAMP , `expiration` = '0000-00-00 00:00:00'  WHERE `id` = 5;";
        $db->setQuery($query);
        $result = $db->execute();
}
}


?>
