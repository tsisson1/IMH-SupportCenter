<?

$db = JFactory::getDbo();

$page_url_for_ip_activity = date("Y.m.d H:i:s") . "\t" . $_SERVER['REQUEST_URI'] . "\t" . $_SERVER['HTTP_REFERER'] . "\n";

// does the user have an entry in the database?
$query = "SELECT `ip_address` FROM #__ip_address_activity WHERE `ip_address` = '" . $_SERVER['HTTP_X_FORWARDED_FOR'] . "'";
$db->setQuery($query);
$results = $db->loadObjectList();

// no, they don't have an entry
if( ! $results )
{
	$query = "INSERT INTO #__ip_address_activity (`ip_address`,`visits`,`activity`) VALUES ('" . $_SERVER['HTTP_X_FORWARDED_FOR'] . "',1,'" . addslashes($page_url_for_ip_activity) . "');";
	$db->setQuery($query);
	try { $result = $db->query(); } catch (Exception $e) { }
}
// yes, they do have an entry
else
{
	$query = "UPDATE #__ip_address_activity SET `activity` = CONCAT(`activity`,'" . addslashes($page_url_for_ip_activity) . "'), `visits` = `visits` + 1 WHERE `ip_address` = '" . $_SERVER['HTTP_X_FORWARDED_FOR'] . "';";
	$db->setQuery($query);
        try { $result = $db->query(); } catch (Exception $e) { }
}

if($_GET['test'] == "bradm")
{
	// echo "<pre>"; print_r($_SERVER); echo "</pre>";
}

?>
