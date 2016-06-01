<?

include("config.php");






// grab the ids of the education channels in joomla 3
$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}
mysql_select_db($new_db_name,$con);
$query = "SELECT `id`,`alias` FROM `$new_db_name`.`" . $new_db_fix . "categories` WHERE `extension` = 'com_content' AND `level` = 2 AND `path` like 'edu/%';";
mysql_select_db($old_db_name,$con);
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	$alias = $row['alias'];
	$id = $row['id'];

	$category_alias_to_id[$alias] = $id;
}






// we need to grab a list of all 101 / 102 classes / etc from the old atabase.
// grab id and aliases from new database for sections
$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}
mysql_select_db($old_db_name,$con);
$query = "SELECT `content`.*, `categories`.`alias` as `category_alias` FROM `$old_db_name`.`jos_content` as `content`, `$old_db_name`.`jos_categories` as `categories` WHERE `content`.`sectionid` = 10 AND `content`.`catid` = `categories`.`id` AND `content`.`title` NOT LIKE '3%';";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	$parent_id = $category_alias_to_id[$row['category_alias']];
	$path = "edu/" . $row['category_alias'] . "/" . $row['alias'];
	$title = $row['title'];
	$alias = $row['alias'];
	$introtext = $row['introtext'];
	$introtext = addslashes($introtext);

	$meta_description = addslashes($row['metadesc']);
	$meta_keywords = addslashes($row['metakey']);

	$hits = $row['hits'];
	$publish_up = $row['publish_up'];

	$build_101_categories[] = "INSERT INTO `" . $new_db_fix . "categories` (`id`, `asset_id`, `parent_id`, `lft`, `rgt`, `level`, `path`, `extension`, `title`, `alias`, `note`, `description`, `published`, `checked_out`, `checked_out_time`, `access`, `params`, `metadesc`, `metakey`, `metadata`, `created_user_id`, `created_time`, `modified_user_id`, `modified_time`, `hits`, `language`, `version`) VALUES
(null, 0, $parent_id, 0, 0, 3, '$path', 'com_content', '$title', '$alias', '', '$introtext', 1, 548, '2013-01-08 00:08:11', 1, '{\"category_layout\":\"_:default\",\"image\":\"\"}', '$meta_description', '$meta_keywords', '{\"author\":\"\",\"robots\":\"\"}', 548, '$publish_up', 0, '0000-00-00 00:00:00', $hits, '*', 1);";	
}





mysql_select_db($new_db_name,$con);
foreach($build_101_categories as $k => $v)
{
	echo "<div>running query...</div>";
	mysql_query($v);
}


/*
echo "<textarea style='width:800px;height:500px; font-size:10px;'>";
	foreach($build_101_categories as $k => $v)
		echo "$v\n\n\n\n\n";
echo "</textarea>";
*/





?>
