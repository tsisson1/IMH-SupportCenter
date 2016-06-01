<?

$exploded_tag_alias = explode("+",$tag_alias);






do_we_need_to_301_redirect_multiple_tag_url($exploded_tag_alias);






// create the title for the page
foreach($exploded_tag_alias as $exploded_tag_alias_key => $single_tag_alias)
{
	$query = "SELECT `title` FROM #__tags WHERE `alias` = '" . addslashes($single_tag_alias) . "';";
	$db->setQuery($query);
        $tag_title = $db->loadObjectList();
	$array_of_tag_titles[] = htmlentities($tag_title[0]->title,ENT_QUOTES);
}
$h1_title = implode(" <span style='color:#aaa;'>&</span> ",$array_of_tag_titles);






// grab all pages that belong to all tags
foreach($exploded_tag_alias as $exploded_tag_alias_key => $single_tag_alias)
{
	$query = "	SELECT `tagged`.*
			FROM #__tagged as `tagged`, #__tags as `tags`
			WHERE	`tags`.`alias` = '" . addslashes($single_tag_alias) . "' AND
				`tagged`.`tag_id` = `tags`.`id`;
	";
	$db->setQuery($query);
	$tagged = $db->loadObjectList();

	foreach($tagged as $tagged_k => $tagged_value)
	{
		$page_id = $tagged_value->option . "____" . $tagged_value->view . "____" . $tagged_value->option_view_id;
		$page_score[$page_id]++;
	}
}



$results_count = 0;
if( $page_score )
{
	foreach($page_score as $page_score_id => $page_score_score)
	{
		if($page_score_score == count($exploded_tag_alias))
		{
			$exploded_page_score_id = explode("____",$page_score_id);
			$tag_results[$results_count] = create_tag_results($exploded_page_score_id[0],$exploded_page_score_id[2],$db);
			$results_count++;
		}
	}

	print_tag_page($h1_title,$tag_results,$db);
	// echo "<pre>"; print_r($tag_results); echo "</pre>";
}

?>
