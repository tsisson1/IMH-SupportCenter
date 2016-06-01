<?



include("config.php");





$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}
mysql_select_db($old_db_name,$con);

$query = "SELECT * FROM `$old_db_name`.`jos_log_article_edits_2`;";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	echo "<pre>"; print_r($row); echo "</pre>";

	$old_article_id = $row['article_id'];
	$new_article_id = pass_old_article_id_get_new_article_id($old_article_id,$old_db_name,$new_db_name,$new_db_fix,$db_username,$db_password);
	$timestamp = strtotime($row['timestamp']);
	$description = $row['description'];
	$admin_id = $official_old_admin_id_to_new_admin_id[$row['admin_id']];

	$query = "INSERT INTO `$new_db_name`.`" . $new_db_fix . "content_updates` (`id` ,`article_id` ,`utc_n_timestamp` ,`description` ,`admin_id`)VALUES (NULL , '$new_article_id', '$timestamp', '" . addslashes($description) . "', '$admin_id');";
	mysql_select_db($new_db_name,$con);
        mysql_query($query);
	echo "<p>query has been ran...</p>";

}




?>
