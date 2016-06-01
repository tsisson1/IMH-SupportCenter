<?

include("config.php");

$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db($old_db_name,$con);

$query = "SELECT * FROM `$old_db_name`.`jos_sections`;";
$result = mysql_query($query);

while($row = mysql_fetch_array($result))
{
	// echo "<pre>"; print_r($row); echo "</pre>";

	$alias = $row['alias'];
	$title = $row['title'];
	$description = $row['description'];
	$description = addslashes($description);

	$meta_keywords = addslashes($row['meta_keywords']);
	$meta_description = addslashes($row['meta_desc']);

	// build query for _categories
	$build_sections[] = "INSERT INTO `" . $new_db_fix . "categories` (`id`, `asset_id`, `parent_id`, `lft`, `rgt`, `level`, `path`, `extension`, `title`, `alias`, `note`, `description`, `published`, `checked_out`, `checked_out_time`, `access`, `params`, `metadesc`, `metakey`, `metadata`, `created_user_id`, `created_time`, `modified_user_id`, `modified_time`, `hits`, `language`, `version`) VALUES
(null, 0, 1, 0, 0, 1, '$alias', 'com_content', '$title', '$alias', '', '$description', 1, 0, '0000-00-00 00:00:00', 1, '{\"category_layout\":\"\",\"image\":\"\"}', '$meta_description', '$meta_keywords', '{\"author\":\"\",\"robots\":\"\"}', 548, 'CURRENT_TIMESTAMP', 0, '0000-00-00 00:00:00', 0, '*', 1);";
}


mysql_select_db($new_db_name,$con);
foreach($build_sections as $k => $v)
{
	echo "<div>Running query...</div>";
	echo "<pre>$v</pre>";
	mysql_query($v);
}


mysql_close($con);

/*
echo "<textarea style='width:800px;height:500px; font-size:10px;'>";
	foreach($build_sections as $k => $v)
		echo "$v\n\n\n\n\n";
echo "</textarea>";
*/

?>
