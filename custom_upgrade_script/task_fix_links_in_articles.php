<?

include("config.php");

$itemid = 101; // main menu item






// from j3, grab a list of all category id's and aliases
$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}
mysql_select_db($new_db_name,$con);


if( $_GET['source'] == "categories" )
	$query = "SELECT `id`,`description` FROM `$new_db_name`.`" . $new_db_fix . "categories` WHERE `published` = 1 AND `extension` = 'com_content';";
else
	$query = "SELECT `id`,`introtext` FROM `$new_db_name`.`" . $new_db_fix . "content` WHERE `state` = 1;";


$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	if( $_GET['source'] == "categories" )
		$introtext = $row['description'];
	else
		$introtext = $row['introtext'];

	$keep_looping_this_article = true;
	$starting_position = 0;

	$run_query_to_update_article = false;

	while( $keep_looping_this_article == true)
	{

		$location_of_indexphp = strpos("$introtext","index.php?option=com_content&amp;view=", $starting_position);

		if( ! $location_of_indexphp )
		{
			// try & instead of &amp;
			$location_of_indexphp = strpos("$introtext","index.php?option=com_content&view=", $starting_position);

			if( ! $location_of_indexphp )
			{
					$keep_looping_this_article = false;
				break;
			}
		}

		$location_of_doublequote = strpos($introtext,"\"",$location_of_indexphp);
		$original_link_text = substr($introtext, $location_of_indexphp, $location_of_doublequote - $location_of_indexphp);
		// index.php?option=com_content&amp;view=article&amp;id=2709:login-to-dashboard&amp;catid=93&amp;Itemid=273

		// replace &amp; with &
		$clean_olt = str_replace("&amp;","&",$original_link_text);
		$clean_olt = str_replace("&aamp;","&",$clean_olt);
		$clean_olt = str_replace("&mmp;","&",$clean_olt);
		$clean_olt = str_replace("&ammmp;","&",$clean_olt);

		// create this
		/*
		Array
		(
		    [index_php?option] => com_content
		    [view] => article
		    [id] => 1
		    [catid] => 9
		    [Itemid] => 102
		)
		*/
		parse_str($clean_olt,$oltp);

		// this must be a link that we already scanned
		if($oltp['Itemid'] == 101 || ! $oltp['Itemid'])
		{
			$starting_position = $location_of_doublequote;
			// echo "<div style='background:orange;'>101 itemid found</div>";
			continue;
		}

		switch($oltp['view'])
		{
			case "article":
				$exploded_id = explode(":",$oltp['id']);
				$old_id = $exploded_id[0];
				$old_alias = $exploded_id[1];

				// are we linking to an article that is a class?
				$query = "SELECT * FROM `$old_db_name`.`imh_ec_sections` WHERE `classid` = $old_id;";
				$result_2 = mysql_query($query);

				$found_row_2_match = false;

                                while($row_2 = mysql_fetch_array($result_2))
                                {
					$found_row_2_match = true;

					// grab the category alias the classid belongs to
					$query = "SELECT `article`.`id` as 'article_id', `article`.`alias` as 'article_alias', `category`.`id` as 'category_id', `category`.`alias` as 'category_alias' FROM `$old_db_name`.`jos_content` as `article`, `$old_db_name`.`jos_categories` as `category` WHERE `article`.`id` = $old_id AND `article`.`catid` = `category`.`id`;";
					$result_3 = mysql_query($query);
	                                while($row_3 = mysql_fetch_array($result_3))
        	                        {


// grab the id and alias of new category
                                                $query = "SELECT `id`,`title`,`alias` FROM `$new_db_name`.`" . $new_db_fix . "categories` WHERE `extension` = 'com_content' AND `alias` = '" . $row_3['article_alias'] . "' AND `level` = 3 AND `path` = 'edu/" . $row_3['category_alias'] . "/" . $row_3['article_alias'] . "'";

                                        	$result_4 = mysql_query($query);
	                                        while($row_4 = mysql_fetch_array($result_4))
        	                                {
                        	                        $new_category_id = $row_4['id'];

                                	                // build this link
                                        	        // index.php?option=com_content&view=category&id=76&Itemid=110

                                                	$new_link_text = "index.php?option=com_content&view=category&id=$new_category_id&Itemid=$itemid";

	                                                $introtext = str_replace($original_link_text,$new_link_text,$introtext);
        	                                        echo "<h1>here</h1>";
                	                                echo "  <div>OLD: $original_link_text</div>
                        	                                <div>NEW: $new_link_text</div>
                                	                        <p></p>
                                        	        ";

                                                	$run_query_to_update_article = true;
	                                        }						
					}
				}
				if( $found_row_2_match == true )
					break;

			










				// grab the title and alias from the old database
				$query = "SELECT `title`,`alias` FROM `$old_db_name`.`jos_content` WHERE `id` = $old_id AND `alias` = '$old_alias' ;";
				// echo "<p>78 - ***** $query *****</p>";
				// echo "<p>$original_link_text</p>";
				// echo "<pre>"; print_r($oltp); echo "</pre>";

				$result_2 = mysql_query($query);
				while($row_2 = mysql_fetch_array($result_2))
				{
					$old_alias = $row_2['alias'];
					$old_title = addslashes($row_2['title']);

					// ok, now grab the id of the new article and the new article catid
					$query = "SELECT `content`.`id`,`content`.`alias`,`category`.`id` as 'catid' FROM `$new_db_name`.`" . $new_db_fix . "content` as `content`, `$new_db_name`.`" . $new_db_fix . "categories` as `category` WHERE `content`.`alias` = '$old_alias' AND `content`.`title` = '$old_title' AND `content`.`catid` = `category`.`id` LIMIT 1;";
					// echo "<p>87 - $query</p>";
					$result_3 = mysql_query($query);
	        	                while($row_3 = mysql_fetch_array($result_3))
	        	                {
						$new_id = $row_3['id'];
						$new_alias = $row_3['alias'];
						$new_catid = $row_3['catid'];

						$new_link_text = "index.php?option=com_content&amp;view=article&amp;id=$new_id:$new_alias&amp;catid=$new_catid&amp;Itemid=$itemid";

						$introtext = str_replace($original_link_text,$new_link_text,$introtext);
						echo "	<div>OLD: $original_link_text</div>
							<div>NEW: $new_link_text</div>
							<p></p>
						";

						$run_query_to_update_article = true;
					}
				}
				break;
			case "category":
				echo "<h1>Category</h1>";
				// echo "<pre>"; print_r($oltp); echo "</pre>";

				if($oltp['Itemid'] == 110)
				{
					$introtext = str_replace("&amp;Itemid=110","&amp;Itemid=101",$introtext);
					$run_query_to_update_article = true;
					break;
				}

				$exploded_id = explode(":",$oltp['id']);
                                $old_id = $exploded_id[0];
                                $old_alias = $exploded_id[1];

				// get the alias of the category from the old db
				$query = "SELECT `title`,`alias`,`section` FROM `$old_db_name`.`jos_categories` WHERE `id` = $old_id LIMIT 1;";
				$result_2 = mysql_query($query);
                                while($row_2 = mysql_fetch_array($result_2))
                                {
					echo "<pre>old db info\n"; print_r($row_2); echo "</pre>";
					$old_category_alias = $row_2['alias'];

					switch( $row_2['section'] )
					{
						// this is an edu category
						case 10:
							$query = "SELECT `id`,`title`,`alias` FROM `$new_db_name`.`" . $new_db_fix . "categories` WHERE `extension` = 'com_content' AND `alias` = '$old_category_alias' AND `level` = 2 AND `path` LIKE 'edu/%'";
							break;
						// this is a standard category
						default:
							// grab the id and alias of new category
							$query = "SELECT `id`,`title`,`alias` FROM `$new_db_name`.`" . $new_db_fix . "categories` WHERE `extension` = 'com_content' AND `alias` = '$old_category_alias' AND `level` = 2 AND `path` NOT LIKE 'edu/%'";
							break;
					}

					$result_3 = mysql_query($query);
                                        while($row_3 = mysql_fetch_array($result_3))
                                        {
						echo "<pre>new db info\n"; print_r($row_3); echo "</pre>";

						$new_category_id = $row_3['id'];

						// build this link
						// index.php?option=com_content&view=category&id=76&Itemid=110

						$new_link_text = "index.php?option=com_content&view=category&id=$new_category_id&Itemid=$itemid";

                                                $introtext = str_replace($original_link_text,$new_link_text,$introtext);
						echo "<h1>here</h1>";
                                                echo "  <div>OLD: $original_link_text</div>
                                                        <div>NEW: $new_link_text</div>
                                                        <p></p>
                                                ";

                                                $run_query_to_update_article = true;
					}
				}
				break;
			case "section":
				echo "<h1>Section code needs to go here</h1>";
				// echo "<pre>"; print_r($row); echo "</pre>";
				echo "<pre>"; print_r($oltp); echo "</pre>";

				// grab the alias of the old section
				$query = "SELECT `alias` FROM `$old_db_name`.`jos_sections` WHERE `id` = " . $oltp['id'] . ";";
				$result_2 = mysql_query($query);
                                while($row_2 = mysql_fetch_array($result_2))
				{
					$old_section_alias = $row_2['alias'];

					// grab the new id
// grab the id and alias of new category
                                        $query = "SELECT `id` FROM `$new_db_name`.`" . $new_db_fix . "categories` WHERE `extension` = 'com_content' AND `alias` = '$old_section_alias' AND `level` = 1 LIMIT 1;";
                                        $result_3 = mysql_query($query);
                                        while($row_3 = mysql_fetch_array($result_3))
                                        {
                                                $new_category_id = $row_3['id'];

                                                // build this link
                                                // index.php?option=com_content&view=category&id=76&Itemid=110

                                                $new_link_text = "index.php?option=com_content&view=category&id=$new_category_id&Itemid=$itemid";

                                                $introtext = str_replace($original_link_text,$new_link_text,$introtext);
                                                echo "<h1>here</h1>";
                                                echo "  <div>OLD: $original_link_text</div>
                                                        <div>NEW: $new_link_text</div>
                                                        <p></p>
                                                ";

                                                $run_query_to_update_article = true;
                                        }
                                }
                                break;















					
			default:
				echo "<h1>Unknown view!</h1>";
				break;
		}

		$starting_position = $location_of_doublequote;

	}

	if( $run_query_to_update_article )
	{
		if( $_GET['source'] == "categories" )
			$query = "UPDATE `$new_db_name`.`" . $new_db_fix . "categories` set `description` = '" . addslashes($introtext) . "' WHERE `id` = " . $row['id'] . ";";
		else
			$query = "UPDATE `$new_db_name`.`" . $new_db_fix . "content` set `introtext` = '" . addslashes($introtext) . "' WHERE `id` = " . $row['id'] . ";";

		mysql_query($query);
		echo "<h1>Updating article id " . $row['id'] . "</h1>";
	}

}




/*
// grab all non edu articles
$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}
mysql_select_db($new_db_name,$con);
$query = "SELECT `sections`.`alias` as 'section_alias', `categories`.`alias` as 'category_alias', `content`.* FROM `$old_db_name`.`jos_content` as `content`,  `$old_db_name`.`jos_categories` as `categories`,  `$old_db_name`.`jos_sections` as `sections` WHERE (`content`.`sectionid` = 10) AND `content`.`sectionid` = `sections`.`id` AND `categories`.`id` = `content`.`catid` AND `content`.`title` LIKE '3%';";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	$title = addslashes($row['title']);
	$alias = $row['alias'];
	$introtext = addslashes($row['introtext']);
	$created = $row['created'];
	$modified = $row['modified'];

	$path = $row['section_alias'] . "/" . $row['category_alias'];
	$category_id = $category_path_to_id[$path];

	$import_articles[] = "INSERT INTO `" . $new_db_fix . "content` (`id`, `asset_id`, `title`, `alias`, `introtext`, `fulltext`, `state`, `catid`, `created`, `created_by`, `created_by_alias`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `publish_up`, `publish_down`, `images`, `urls`, `attribs`, `version`, `ordering`, `metakey`, `metadesc`, `access`, `hits`, `metadata`, `featured`, `language`, `xreference`) VALUES
(null, 0, '$title', '$alias', '$introtext', '', 1, $category_id, '$created', 548, '', '$modified', 548, 0, '0000-00-00 00:00:00', '2013-01-06 22:48:33', '0000-00-00 00:00:00', '{\"image_intro\":\"\",\"float_intro\":\"\",\"image_intro_alt\":\"\",\"image_intro_caption\":\"\",\"image_fulltext\":\"\",\"float_fulltext\":\"\",\"image_fulltext_alt\":\"\",\"image_fulltext_caption\":\"\"}', '{\"urla\":null,\"urlatext\":\"\",\"targeta\":\"\",\"urlb\":null,\"urlbtext\":\"\",\"targetb\":\"\",\"urlc\":null,\"urlctext\":\"\",\"targetc\":\"\"}', '{\"show_title\":\"\",\"link_titles\":\"\",\"show_intro\":\"\",\"info_block_position\":\"0\",\"show_category\":\"\",\"link_category\":\"\",\"show_parent_category\":\"\",\"link_parent_category\":\"\",\"show_author\":\"\",\"link_author\":\"\",\"show_create_date\":\"\",\"show_modify_date\":\"\",\"show_publish_date\":\"\",\"show_item_navigation\":\"\",\"show_icons\":\"\",\"show_print_icon\":\"\",\"show_email_icon\":\"\",\"show_vote\":\"\",\"show_hits\":\"\",\"show_noauth\":\"\",\"urls_position\":\"\",\"alternative_readmore\":\"\",\"article_layout\":\"\",\"show_publishing_options\":\"\",\"show_article_options\":\"\",\"show_urls_images_backend\":\"\",\"show_urls_images_frontend\":\"\"}', 2, 0, '', '', 1, 14, '{\"robots\":\"\",\"author\":\"\",\"rights\":\"\",\"xreference\":\"\"}', 0, '*', '');";
}






echo "<textarea style='width:800px;height:500px; font-size:10px;'>";
        foreach($import_articles as $k => $v)
                echo "$v\n\n\n\n\n";
echo "</textarea>";
*/





?>
