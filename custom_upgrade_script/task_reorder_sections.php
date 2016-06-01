<?


include("config.php");

$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}

mysql_select_db($old_db_name,$con);

$query = "SELECT * FROM `$old_db_name`.`imh_ec_sections`;";
$result = mysql_query($query);

while($row = mysql_fetch_array($result))
{
	$order = $row['order'];
	$old_article_id = $row['article_id'];
	$new_article_id = pass_old_article_id_get_new_article_id($old_article_id,$old_db_name,$new_db_name,$new_db_fix,$db_username,$db_password);

	if( is_numeric($new_article_id) AND $new_article_id > 0 )
	{
		$update_order_query = "UPDATE `$new_db_name`.`" . $new_db_fix . "content` SET `ordering` = $order WHERE `id` = $new_article_id LIMIT 1;";
		mysql_query($update_order_query);
		echo "<pre>$update_order_query</pre>";
	}


	// echo "<pre>$old_article_id = $order = $new_article_id</pre>";
}




?>
