<?






include("config.php");





$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}
mysql_select_db($old_db_name,$con);

$query = "SELECT * FROM `$old_db_name`.`imh_ec_section_headings`;";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	unset($title);
	unset($description);

	$old_article_id = $row['above_article'];
	$title = $row['title'];
	$description = $row['description'];

	$new_article_id = pass_old_article_id_get_new_article_id($old_article_id,$old_db_name,$new_db_name,$new_db_fix,$db_username,$db_password);






	$get_attribs_query = "SELECT `attribs` FROM `$new_db_name`.`" . $new_db_fix . "content` WHERE `id` = $new_article_id;";
	$result_get_attribs = mysql_query($get_attribs_query);
	while($row_attribs = mysql_fetch_array($result_get_attribs))
	{
		$current_attribs = json_decode($row_attribs[attribs]);

		$current_attribs->edu_above_title = $title;
		$current_attribs->edu_above_description = $description;

		// echo "<pre>"; print_r($current_attribs); echo "</pre>";

		if( is_numeric($new_article_id) )
		{
			$query = "UPDATE `$new_db_name`.`" . $new_db_fix . "content` SET `attribs` = '" . addslashes(json_encode($current_attribs)) . "' WHERE `id` = $new_article_id LIMIT 1;";
			mysql_select_db($new_db_name,$con);
			mysql_query($query);
			echo "<pre>$query</pre>";
		}
	}
}






?>
