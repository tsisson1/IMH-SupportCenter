<?

include("config.php");






// grab id and aliases from new database for sections
$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}
mysql_select_db($new_db_name,$con);
$query = "SELECT * FROM `$new_db_name`.`" . $new_db_fix . "content_video`;";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	$old_article_id = $row['article_id'];
	$new_article_id = pass_old_article_id_get_new_article_id($old_article_id,$old_db_name,$new_db_name,$new_db_fix,$db_username,$db_password);

	if( is_numeric($new_article_id) )
	{
		$query = "UPDATE `$new_db_name`.`" . $new_db_fix . "content_video` SET `article_id` = '$new_article_id' WHERE `article_id` = '$old_article_id';";
		mysql_query($query);
	}
	else
	{
		echo "<h1>FAIL</h1>";
	}
}

?>
