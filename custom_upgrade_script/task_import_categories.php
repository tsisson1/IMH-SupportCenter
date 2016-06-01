<?

include("config.php");






// grab id and aliases from new database for sections
$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}
mysql_select_db($new_db_name,$con);
$query = "SELECT `id`,`alias` FROM `$new_db_name`.`" . $new_db_fix . "categories` WHERE `parent_id` = 1 AND `extension` = 'com_content';";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	$alias = $row['alias'];
	$id = $row['id'];

	$section_alias_to_id[$alias] = $id;
}






$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db($old_db_name,$con);
$query = "SELECT cat.*, sec.alias as `section_alias` FROM `$old_db_name`.`jos_categories` as cat, `$old_db_name`.`jos_sections` as sec WHERE `cat`.`section` = `sec`.`id`;";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	$alias = $row['alias'];
	$title = $row['title'];
	$description = $row['description'];
	$description = addslashes($description);

	$path = $row['section_alias'] . "/" . $row['alias'];

	$parent_id =  $section_alias_to_id[$row['section_alias']];

	$meta_description = addslashes($row['meta_desc']);
	$meta_keywords = addslashes($row['meta_keywords']);


	// build query for _categories
	$build_categories[ ] = "INSERT INTO `" . $new_db_fix . "categories` (`id`, `asset_id`, `parent_id`, `lft`, `rgt`, `level`, `path`, `extension`, `title`, `alias`, `note`, `description`, `published`, `checked_out`, `checked_out_time`, `access`, `params`, `metadesc`, `metakey`, `metadata`, `created_user_id`, `created_time`, `modified_user_id`, `modified_time`, `hits`, `language`, `version`) VALUES
(null, 0, $parent_id, 0, 0, 2, '$path', 'com_content', '$title', '$alias', '', '$description', 1, 0, '0000-00-00 00:00:00', 1, '{\"category_layout\":\"_:default\",\"image\":\"\"}', '$meta_description', '$meta_keywords', '{\"author\":\"\",\"robots\":\"\"}', 548, CURRENT_TIMESTAMP, 0, '0000-00-00 00:00:00', 8, '*', 1);";
}


mysql_select_db($new_db_name,$con);
foreach($build_categories as $k => $v)
{
	echo "<div>Running query...</div>";
	mysql_query($v);
}






mysql_close($con);





/*
echo "<textarea style='width:800px;height:500px; font-size:10px;'>";
	foreach($build_categories as $k => $v)
		echo "$v\n\n\n\n\n";
echo "</textarea>";
*/


?>
