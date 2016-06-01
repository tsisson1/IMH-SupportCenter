<?






function print_tag_page($tag_title,$tag_results,$db)
{
	echo "  <div class='item-page'>
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
                $query = "      SELECT `tags`.*
                                FROM #__tagged as `tagged`, #__tags as `tags`
                                WHERE   `tagged`.`option` = '$tag_option' AND
                                        `tagged`.`view` = '$tag_view' AND
                                        `tagged`.`option_view_id` = " . $tr_v['option_view_id'] . " AND
                                        `tagged`.`tag_id` = `tags`.`id`
                ";
                $db->setQuery($query);
                $all_tags_for_this_page = $db->loadObjectList();
                unset($all_tags_for_this_page_html);
                foreach($all_tags_for_this_page as $atftp_k => $atftp_v)
                        $all_tags_for_this_page_html .= "<a href='/support/tags/" . $atftp_v->alias . "' class='label label-info' style='font-weight:normal; margin-right:5px;'>" . htmlentities($atftp_v->title,ENT_QUOTES) . "</a>";


                echo "  <div style='margin-bottom:20px; border-bottom:1px solid #ddd; padding-bottom:15px;'>
                                <a href='" . $tr_v['url'] . "' target='_blank' style='display:block; font-size:16px;'>" . htmlentities($tr_v['title'],ENT_QUOTES) . "</a>
                                <div>" . htmlentities($tr_v['metadesc'],ENT_QUOTES) . "...</div>
                                <div style='margin-top:6px;'>$all_tags_for_this_page_html</div>
                        </div>
                ";
        }
        echo "  </div>";
}






function create_tag_results($option,$option_view_id,$db)
{
	switch($option)
	{
		case "com_content":
			// -----------------------------------------------------------------------------------------------------------------
		        // grab all articles
		        // -----------------------------------------------------------------------------------------------------------------
		        $query = "      SELECT `article`.`catid`, `article`.`id` as `article_id`, `article`.`title` as `article_title`, `article`.`alias` as `article_alias`, LEFT(`article`.`metadesc`,180) as `metadesc`
                		        FROM #__content as `article`
		                        WHERE   `id` = $option_view_id
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
                		        $tag_results['type'] = "article";
		                        $tag_results['url'] = $article_url;
                		        $tag_results['title'] = $al_v->article_title;
		                        $tag_results['metadesc'] = $al_v->metadesc;
                		        $tag_results['option_view_id'] = $option_view_id;
		                }
		        }
			return $tag_results;
			break;
		case "com_communitysupport":
			// -----------------------------------------------------------------------------------------------------------------
		        // grab all questions
		        // -----------------------------------------------------------------------------------------------------------------
		        // pass_question_id_return_question_url($id)
		        $query = "      SELECT `question`.`question`, `question`.`id` as `question_id`, LEFT(`question`.`description`,180) as 'metadesc'
                		        FROM #__questions as `question`
		                        WHERE   `id` = $option_view_id;
		        ";
		        $db->setQuery($query);
		        $question_list = $db->loadObjectList();
		        foreach($question_list as $ql_k => $ql_v)
		        {
		                $question_url = pass_question_id_return_question_url($ql_v->question_id);
                		$tag_results['type'] = "question";
		                $tag_results['url'] = $question_url;
                		$tag_results['title'] = $ql_v->question;
		                $tag_results['metadesc'] = $ql_v->metadesc;
                		$tag_results['option_view_id'] = $option_view_id;
		        }
			return $tag_results;
			break;
	}
}






function do_we_need_to_301_redirect_multiple_tag_url($exploded_tag_alias)
{
	$sorted_tag_aliases = $exploded_tag_alias;
	sort($sorted_tag_aliases);
	if( $exploded_tag_alias != $sorted_tag_aliases )
	{
		Header( "HTTP/1.1 301 Moved Permanently" );
		Header( "Location: /support/tags/" . implode('+',$sorted_tag_aliases) );
		exit();
	}
}







?>
