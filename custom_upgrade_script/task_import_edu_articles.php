<?

include("config.php");






/*
// from j3, grab a list of all category id's and aliases that are edu channels
$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}
mysql_select_db($new_db_name,$con);
$query = "SELECT `id`,`path` FROM `$new_db_name`.`" . $new_db_fix . "categories` WHERE `path` LIKE 'edu/%/%';";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	$path = $row['path'];
	$id = $row['id'];

	$edu_class_path_to_id[$path] = $id;
}
//echo "<pre>"; print_r($edu_class_path_to_id); echo "<pre>";
//die();
*/







// from j25, grab the edu structures
$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}
mysql_select_db($old_db_name,$con);
$query = "SELECT `categories`.`alias` as 'category_alias', `structure`.*, `content`.`alias` as 'content_alias'
FROM `$old_db_name`.`imh_ec_sections` as structure, `$old_db_name`.`jos_content` as content, `$old_db_name`.`jos_categories` as categories
WHERE	`structure`.`classid` = `content`.`id` AND
	`content`.`catid` = `categories`.`id`;";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	$alias = $row['content_alias'];
	$id = $row['classid'];
	$category_alias = $row['category_alias'];
	$article_id = $row['article_id'];

	$class_alias_to_id[$alias] = $id;
	$class_id_to_path[$id] = "edu/" . $category_alias . "/" . $alias;

	$article_id_to_class_id[$article_id] = $row['classid'];
}






// now that we have [3767] => edu/smf/managing-users, let's find the id of category  edu/smf/managing-users
foreach($class_id_to_path as $class_id => $class_alias)
{
	$con = mysql_connect("localhost",$db_username,$db_password);
	if (!$con)
	{
        	die('Could not connect: ' . mysql_error());
	}
	mysql_select_db($old_db_name,$con);
	$query = "SELECT id FROM  `$new_db_name`.`" . $new_db_fix . "categories` WHERE `path` = '$class_alias';";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result))
	{
		$classid_to_category_id[$class_id] = $row['id'];
	}
}







// grab all non edu articles
$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}
mysql_select_db($new_db_name,$con);
$query = "SELECT * FROM `$old_db_name`.`jos_content` WHERE `sectionid` = 11 AND `state` = 1;";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	$title = addslashes($row['title']);
	$alias = $row['alias'];
	$introtext = addslashes($row['introtext']);
	$created = $row['created'];
	$modified = $row['modified'];

	// first, grab the class id
	$class_id = $article_id_to_class_id[$row['id']];
	// next, grab the j3 category id based upon the class id
	$category_id = $classid_to_category_id[$class_id];

	$meta_description = addslashes($row['metadesc']);
        $meta_keywords = addslashes($row['metakey']);

        $hits = $row['hits'];
        $publish_up = $row['publish_up'];

	if($category_id)
	{
	$import_edu_articles[] = "INSERT INTO `" . $new_db_fix . "content` (`id`, `asset_id`, `title`, `alias`, `introtext`, `fulltext`, `state`, `catid`, `created`, `created_by`, `created_by_alias`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `publish_up`, `publish_down`, `images`, `urls`, `attribs`, `version`, `ordering`, `metakey`, `metadesc`, `access`, `hits`, `metadata`, `featured`, `language`, `xreference`) VALUES
(null, 0, '$title', '$alias', '$introtext', '', 1, $category_id, '$created', 548, '', '$modified', 548, 0, '0000-00-00 00:00:00', '$publish_up', '0000-00-00 00:00:00', '{\"image_intro\":\"\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}', '{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}', '{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"info_block_position\":\"0\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}', 2, 0, '$meta_keywords', '$meta_description', 1, $hits, '{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}', 0, '*', '');";
	}
}



mysql_select_db($new_db_name,$con);
foreach($import_edu_articles as $k => $v)
{
	echo "<div>Running query...</div>";
	mysql_query($v);
}

/*
foreach($import_edu_articles as $k => $v)
	echo "$v\n\n\n\n\n";
*/





?>
