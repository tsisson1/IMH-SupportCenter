<?

// write some info to the database
$user_ip = $_SERVER['REMOTE_ADDR'];

if($_SERVER['HTTP_REFERER'])
{
	$referrer = $_SERVER['HTTP_REFERER'];
}
else
{
	$referrer = "unknown";
}


include_once("../../custom_scripts/database.php");
$query = "INSERT INTO `" . $dbs["joomla"]["name"] . "`.`jos_mgr_image` (`id` ,`user_ip` ,`referrer` ,`timestamp`)VALUES (NULL , '$user_ip', '$referrer',CURRENT_TIMESTAMP);";
query_database($dbs,"joomla",$query);

?>
