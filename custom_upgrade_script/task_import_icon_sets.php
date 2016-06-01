<?
include("config.php");





$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}
mysql_select_db($new_db_name,$con);




$query = "DROP TABLE `$new_db_fix" . "icon_sets_individual`, `$new_db_fix" . "icon_sets_licenses`, `$new_db_fix" . "icon_sets_parents`;";
echo "<pre>$query</pre>";
mysql_query($query);


// first, create the tables
$query = "CREATE TABLE IF NOT EXISTS `$new_db_name`.`" . $new_db_fix . "icon_sets_individual` (
  `icon_id` int(11) NOT NULL AUTO_INCREMENT,
  `icon_name` varchar(255) NOT NULL,
  `icon_urls` mediumtext NOT NULL,
  `icon_article_id` int(11) NOT NULL,
  `icon_parent` int(11) NOT NULL,
  `icon_use_parent_description` int(11) NOT NULL,
  `icon_license` int(11) NOT NULL,
  `icon_use_license_description` int(11) NOT NULL,
  `icon_width` int(11) NOT NULL,
  `icon_height` int(11) NOT NULL,
  `icon_thumb_width` int(11) NOT NULL,
  `icon_thumb_height` int(11) NOT NULL,
  PRIMARY KEY (`icon_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;";
echo "<pre>$query</pre>";
mysql_query($query);
$query = "CREATE TABLE IF NOT EXISTS  `$new_db_name`.`" . $new_db_fix . "icon_sets_licenses` (
  `license_id` int(11) NOT NULL AUTO_INCREMENT,
  `license_name` varchar(255) NOT NULL,
  `license_description` mediumtext NOT NULL,
  PRIMARY KEY (`license_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
echo "<pre>$query</pre>";
mysql_query($query);
$query = "CREATE TABLE IF NOT EXISTS  `$new_db_name`.`" . $new_db_fix . "icon_sets_parents` (
  `parent_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_name` varchar(255) NOT NULL,
  `parent_article_id` int(11) NOT NULL,
  `parent_description` mediumtext NOT NULL,
  `parent_child_description_1` mediumtext NOT NULL,
  `parent_child_description_2` mediumtext NOT NULL,
  `parent_thumb_pre` varchar(255) NOT NULL,
  `parent_license` int(11) NOT NULL,
  PRIMARY KEY (`parent_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
echo "<pre>$query</pre>";
mysql_query($query);






// non article related queries
$query = "INSERT INTO `$new_db_name`.`" . $new_db_fix . "icon_sets_licenses` (`license_id`, `license_name`, `license_description`) VALUES
(1, 'CC BY 3.0 - Single Icon', 'This icon is released under <a href=''http://creativecommons.org/licenses/by/3.0/deed.en'' target=''_blank''>The Creative Commons Attribution 3.0 Unported (CC BY 3.0)</a>. The icon can be used both commercially and for personal use, but you must always add a link to <a href=''http://www.inmotionhosting.com''>www.inmotionhosting.com</a> on at least one prominent page on your site. Include the CC-BY license and the reference to <a href=''http://www.inmotionhosting.com''>www.inmotionhosting.com</a>.'),
(2, 'CC BY 3.0 - Multiple Icons', 'Each icon is released under <a href=''http://creativecommons.org/licenses/by/3.0/deed.en'' target=''_blank''>The Creative Commons Attribution 3.0 Unported (CC BY 3.0)</a>. The icons can be used both commercially and for personal use, but you must always add a link to <a href=''http://www.inmotionhosting.com''>www.inmotionhosting.com</a> on at least one prominent page on your site. Include the CC-BY license and the reference to <a href=''http://www.inmotionhosting.com''>www.inmotionhosting.com</a>.');";
echo "<pre>$query</pre>";
mysql_query($query);






// grab all old icon individuals
$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}
mysql_select_db($old_db_name,$con);
$query = "SELECT `content`.`alias` as 'article_alias', `content`.`title` as 'article_title', `isi`.* FROM `$old_db_name`.`jos_icon_sets_individual` as `isi`, `$old_db_name`.`jos_content` as `content` WHERE `content`.`id` = `isi`.`icon_article_id`;";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	$article_title = $row['article_title'];
	$article_alias = $row['article_alias'];

	// grab the article id from the new database
	$query = "SELECT `id` FROM `$new_db_name`.`" . $new_db_fix . "content` WHERE `title` = '$article_title' AND `alias` = '$article_alias';";
	$result2 = mysql_query($query);
	while($row2 = mysql_fetch_array($result2))
	{
		$new_article_id = $row2['id'];
	}

	$query = "UPDATE `$new_db_name`.`" . $new_db_fix . "content` SET `attribs` = '{\"article_layout\":\"$template_name:icon-sets-individual\"}' WHERE `id` = $new_article_id;";
	mysql_query($query);

	$icon_name = addslashes($row['icon_name']);
	$icon_urls = $row['icon_urls'];
	$icon_parent = $row['icon_parent'];
	$icon_use_parent_description = $row['icon_use_parent_description'];
	$icon_license = $row['icon_license'];
	$icon_use_license_description = addslashes($row['icon_use_license_description']);
	$icon_width = $row['icon_width'];
	$icon_height = $row['icon_height'];
	$icon_thumb_width = $row['icon_thumb_width'];
	$icon_thumb_height = $row['icon_thumb_height'];

	$queries[] = "INSERT INTO `$new_db_name`.`" . $new_db_fix . "icon_sets_individual`
(`icon_id`, `icon_name`, `icon_urls`, `icon_article_id`, `icon_parent`, `icon_use_parent_description`, `icon_license`, `icon_use_license_description`, `icon_width`, `icon_height`, `icon_thumb_width`, `icon_thumb_height`) VALUES
(NULL, '$icon_name', '$icon_urls', $new_article_id, $icon_parent, $icon_use_parent_description, $icon_license, $icon_use_license_description, $icon_width, $icon_height, $icon_thumb_width, $icon_thumb_height)";

}






// grab all the parent icon sets
$query = "SELECT `content`.`alias` as 'article_alias', `content`.`title` as 'article_title', `isi`.* FROM `$old_db_name`.`jos_icon_sets_parents` as `isi`, `$old_db_name`.`jos_content` as `content` WHERE `content`.`id` = `isi`.`parent_article_id`;";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
        $article_title = $row['article_title'];
        $article_alias = $row['article_alias'];

	// grab the article id from the new database
        $query = "SELECT `id` FROM `$new_db_name`.`" . $new_db_fix . "content` WHERE `title` = '$article_title' AND `alias` = '$article_alias';";
        $result2 = mysql_query($query);
        while($row2 = mysql_fetch_array($result2))
        {
                $new_article_id = $row2['id'];
        }

	$parent_name = addslashes($row['parent_name']);
	$parent_article_id = $row['parent_article_id'];
	$parent_description = addslashes($row['parent_description']);
	$parent_child_description_1 = addslashes($row['parent_child_description_1']);
	$parent_child_description_2 = addslashes($row['parent_child_description_2']);
	$parent_thumb_pre = $row['parent_thumb_pre'];
	$parent_license = $row['parent_license'];

	$queries[] = "INSERT INTO `$new_db_name`.`" . $new_db_fix . "icon_sets_parents` (`parent_id`, `parent_name`, `parent_article_id`, `parent_description`, `parent_child_description_1`, `parent_child_description_2`, `parent_thumb_pre`, `parent_license`) VALUES
(NULL, '$parent_name', $parent_article_id, '$parent_description', '$parent_child_description_1', '$parent_child_description_2', '$parent_thumb_pre', $parent_license);";

}






// run all of the magical queries
foreach($queries as $k => $query)
{
	echo "<pre>$query</pre>";
	mysql_query($query);
}




?>
