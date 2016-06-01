<?

// grab the tag id
$query = "SELECT * FROM #__tags WHERE `alias` = '" . addslashes($tag_alias) . "';";
$db->setQuery($query);
$tag_details = $db->loadObjectList();

$result_count = 0;

if( ! $tag_details )
	echo "<p>Tag does not exists</p>";
else
{
	$tag_title = $tag_details[0]->title;







	// -----------------------------------------------------------------------------------------------------------------
	// grab all articles
	// -----------------------------------------------------------------------------------------------------------------
	$query = "	SELECT `tagged`.*, `article`.`catid`, `article`.`id` as `article_id`, `article`.`title` as `article_title`, `article`.`alias` as `article_alias`, LEFT(`article`.`metadesc`,180) as `metadesc`
			FROM #__tagged as `tagged`, #__content as `article`
			WHERE	`tagged`.`tag_id` = " . $tag_details[0]->id . " AND
				`tagged`.`option` = 'com_content' AND `tagged`.`view` = 'article' AND
				`tagged`.`option_view_id` = `article`.`id`
			;
	";
	$db->setQuery($query);
        $article_list = $db->loadObjectList();
	if($article_list)
	{
		// echo "<pre>"; print_r($article_list); echo "</pre>";
		foreach($article_list as $al_k => $al_v)
		{
			$article_url = JRoute::_(ContentHelperRoute::getArticleRoute($al_v->article_id . ":" . $al_v->article_alias, $al_v->catid));
			$tag_results[$result_count]['type'] = "article";
			$tag_results[$result_count]['url'] = $article_url;
			$tag_results[$result_count]['title'] = $al_v->article_title;
			$tag_results[$result_count]['metadesc'] = $al_v->metadesc;
			$tag_results[$result_count]['option_view_id'] = $al_v->option_view_id;
			$result_count++;
		}
	}






	// -----------------------------------------------------------------------------------------------------------------
        // grab all questions
        // -----------------------------------------------------------------------------------------------------------------
	// pass_question_id_return_question_url($id)
	$query = "	SELECT `tagged`.*, `question`.`question`, `question`.`id` as `question_id`, LEFT(`question`.`description`,180) as 'metadesc'
			FROM #__tagged as `tagged`, #__questions as `question`
			WHERE	`tagged`.`tag_id` = " . $tag_details[0]->id . " AND
				`tagged`.`option` = 'com_communitysupport' AND `tagged`.`view` = 'show_question' AND
				`tagged`.`option_view_id` = `question`.`id`
			;
	";
	$db->setQuery($query);
        $question_list = $db->loadObjectList();
	foreach($question_list as $ql_k => $ql_v)
	{
		$question_url = pass_question_id_return_question_url($ql_v->question_id);
		$tag_results[$result_count]['type'] = "question";
                $tag_results[$result_count]['url'] = $question_url;
                $tag_results[$result_count]['title'] = $ql_v->question;
		$tag_results[$result_count]['metadesc'] = $ql_v->metadesc;
		$tag_results[$result_count]['option_view_id'] = $ql_v->option_view_id;
                $result_count++;
	}





	echo "	<div class='item-page'>
			<div class='page-header'>
				<h1>$tag_title</h1>
			</div>
	";


	foreach($tag_results as $tr_k => $tr_v)
	{
		// grab a listing of all other tag categories this page belongs to
		switch($tr_v['type'])
		{
			case "question":
				$tag_option = "com_communitysupport";
				$tag_view = "show_question";
				break;
			case "article":
				$tag_option = "com_content";
				$tag_view = "article";
				break;
		}
		$query = "	SELECT `tags`.*
				FROM #__tagged as `tagged`, #__tags as `tags`
				WHERE	`tagged`.`option` = '$tag_option' AND
					`tagged`.`view` = '$tag_view' AND
					`tagged`.`option_view_id` = " . $tr_v['option_view_id'] . " AND
					`tagged`.`tag_id` = `tags`.`id`
		";
		$db->setQuery($query);
		$all_tags_for_this_page = $db->loadObjectList();
		unset($all_tags_for_this_page_html);
		foreach($all_tags_for_this_page as $atftp_k => $atftp_v)
			$all_tags_for_this_page_html .= "<a href='/support/tags/" . $atftp_v->alias . "' class='label label-info' style='font-weight:normal; margin-right:5px;'>" . htmlentities($atftp_v->title,ENT_QUOTES) . "</a>";


		echo "	<div style='margin-bottom:20px; border-bottom:1px solid #ddd; padding-bottom:15px;'>
				<a href='" . $tr_v['url'] . "' target='_blank' style='display:block; font-size:16px;'>" . htmlentities($tr_v['title'],ENT_QUOTES) . "</a>
				<div>" . htmlentities($tr_v['metadesc'],ENT_QUOTES) . "...</div>
				<div style='margin-top:6px;'>$all_tags_for_this_page_html</div>
			</div>
		";
	}
	echo "	</div>";

}

?>
