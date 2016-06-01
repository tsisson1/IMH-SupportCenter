<?

if($_GET['secret'] != "a34FDggfh53")
	die('access denied');

$db = JFactory::getDbo();

$last_digit = substr(date('g',time()),-1);
if (is_numeric($_GET['last_digit']))
        $last_digit = $_GET['last_digit'];

echo "<p><strong>Last digit:</strong> $last_digit</p>";

drop_existing_internal_links($last_digit);

scan_through_articles($db,$last_digit);
scan_through_article_categories($db,$last_digit);
scan_through_questions($db,$last_digit);






function scan_through_articles($db,$last_digit)
{
	$query = "      SELECT `id`,`title`,`alias`,`introtext`
                        FROM #__content
                        WHERE   `id` LIKE '%$last_digit' AND
                                `state` = 1
        ";
        $db->setQuery($query);
        $articles = $db->loadObjectList();
	if($articles)
	{
		foreach($articles as $article_k => $article_object)
		{
			$full_html_for_article = $article_object->introtext;

			$query = "SELECT `comment` FROM #__comments WHERE `object_group` = 'com_content' AND `object_id` = " . $article_object->id . ";";
			$db->setQuery($query);
			$comments = $db->loadObjectList();
			if($comments)
			{
				foreach($comments as $comment_k => $comment_v)
					$full_html_for_article .= $comment_v->comment;
			}

			scan_text_for_links($db,"com_content","article",$article_object->id,$full_html_for_article);
		}
	}
}






function scan_through_article_categories($db,$last_digit)
{
	$query = "      SELECT `id`,`title`,`alias`,`description`
                        FROM #__categories
                        WHERE   `id` LIKE '%$last_digit' AND
                                `published` = 1 AND
                                `extension` = 'com_content'
        ";
        $db->setQuery($query);
        $categories = $db->loadObjectList();
	if($categories)
	        foreach($categories as $category_k => $category_object)
        	        scan_text_for_links($db,"com_content","category",$category_object->id,$category_object->description);
}






function scan_through_questions($db,$last_digit)
{
	// grab questions
	$query = "SELECT `id` FROM #__questions WHERE `id` LIKE '%$last_digit'";
	$db->setQuery($query);
        $questions = $db->loadObjectList();
	foreach($questions as $q_k => $q_v)
	{
		$full_html_for_question = "";

		// grab all answers
		$query = "SELECT `id`,`answer` FROM #__answers WHERE `question_id` = " . $q_v->id;
		$db->setQuery($query);
	        $answers = $db->loadObjectList();
		if( $answers )
		{
			foreach($answers as $a_k => $a_v)
			{
				$full_html_for_question .= " " . $a_v->answer;

				$query = "SELECT `comment` FROM #__answer_comments WHERE `answer_id` = " . $a_v->id;
				$db->setQuery($query);
		                $answer_comments = $db->loadObjectList();
				if( $answer_comments )
					foreach($answer_comments as $ac_k => $ac_v)
						$full_html_for_question .= " " . $ac_v->comment;
			}
		}

		// grab all question to question
		$query = "SELECT `question` FROM #__question_to_question WHERE `question_id` = " . $q_v->id;
		$db->setQuery($query);
                $question_to_question = $db->loadObjectList();
		if( $question_to_question )
		{
			foreach($question_to_question as $qq_k => $qq_v)
				$full_html_for_question .= " " . $qq_v->question;
		}

		if( $full_html_for_question != "" )
		{
			scan_text_for_links($db,"com_communitysupport","show_question",$q_v->id,$full_html_for_question);
		}
	}
}






function scan_text_for_links($db,$option,$view,$option_view_id,$text)
{
		$text = str_replace("ferh=","href=",$text);

		// echo "<pre>here - scan_text_for_links</pre>";
		$doc = new DOMDocument();
                @$doc->loadHTML($text);

                $links = $doc->getElementsByTagName('a');
                for ($i = 0; $i < $links->length; $i++)
                {
                        $link = $links->item($i);
                        $ahref = $link->getAttribute('href');
                        $anchor_text  = $link->nodeValue;

			// echo "<li><a href='$ahref' target='_blank'>$anchor_text</a> $ahref</li>";

			if( $ahref != "" )
			{
				$array_of_data_about_link = pass_url_get_option_view_option_viewid($db,$ahref);
				// echo "<pre>"; print_r($array_of_data_about_link); echo "</pre>";

				if( $array_of_data_about_link != false )
				{
					if( is_numeric($array_of_data_about_link['id']) )
					{
						$db_at = addslashes($anchor_text);
						$db_url = addslashes($ahref);

						$dest_option = addslashes($array_of_data_about_link['option']);
						$dest_view = addslashes($array_of_data_about_link['view']);
						$dest_id = $array_of_data_about_link['id'];

						// echo "<li><a href='$ahref' target='_blank'>$anchor_text</a> $ahref</li>";

						$query = "	INSERT INTO #__internal_linking
								(`id`,`source_option`,`source_view`,`source_id`,`anchor`,`url`,`dest_option`,`dest_view`,`dest_id`)
								VALUES(NULL,'$option','$view','$option_view_id','$db_at','$db_url','$dest_option','$dest_view',$dest_id);
						";
						$db->setQuery($query);
			                        $result = $db->execute();	
					}
					else
					{
						echo "<p class='alert alert-warning'>ID is not numeric in $ahref</p>";
					}
				}
			}
		}
}






function pass_url_get_option_view_option_viewid($db,$url)
{
	$first_one = substr($url,0,1);
	$first_four = substr($url,0,4);
	$first_ten = substr($url,0,10);
	$first_nine = substr($url,0,9);

	$cleaned_url = explode("#",$url);
	$cleaned_url = explode("?",$cleaned_url[0]);

	$exploded_url = explode("/",$cleaned_url[0]);

	$internal_url = false;

	// imh -----------------------------------------------------------------------------
	if( $_SERVER['HTTP_HOST'] == "www.inmotionhosting.com" )
	{
		if ($first_one == "/" AND $first_nine == "/support/")
		{
			$internal_url = true;
			$url_type = "relative";
		}

		if( $first_four == "http" )
		{
			// is this an imh link?
			if( $exploded_url[2] == "www.inmotionhosting.com" OR $exploded_url[2] == "inmotionhosting.com" )
			{
				$last_alias = $exploded_url[count($exploded_url)-1];
				$last_last_alias = $exploded_url[count($exploded_url)-2];

				$internal_url = true;
				$url_type = "absolute";
			}
		}

		if( $first_ten == "index.php?")
		{
			$internal_url = true;
			$url_type = "index";
		}

		if( $first_nine == "/support/" )
		{
			$last_alias = $exploded_url[count($exploded_url)-1];
	                $last_last_alias = $exploded_url[count($exploded_url)-2];

			$internal_url = true;
			$url_type = "folder";

		}
	}
	// end imh ----------------------------------------------------------------------------

	if( $internal_url == true )
	{
		if($url_type == "index")
		{
			parse_str($cleaned_url[1],$parsed_url);

			// fix id's like this = 1310:login-to-dashboard
			$exploded_id = explode(":",$parsed_url['id']);
			$parsed_url['id'] = $exploded_id[0];

                        if( $parsed_url['option'] AND $parsed_url['view'] AND $parsed_url['id'] )
                                return $parsed_url;
		}
		if( $url_type == "absolute" OR $url_type == "folder" OR $url_type == "relative")
		{
			return pass_last_two_parts_return_array_of_url_info($db,$last_alias,$last_last_alias);
		}
	}
	else
		return false;
}






function pass_last_two_parts_return_array_of_url_info($db,$last,$last_last)
{
	// is this an article?
	$query = "	SELECT	`content`.`id`
			FROM #__content as `content`, #__categories as `category`
			WHERE	`content`.`alias` = '" . addslashes($last) . "' AND
				`category`.`alias` = '" . addslashes($last_last) . "' AND
				`content`.`catid` = `category`.`id` AND
				`category`.`extension` = 'com_content'
			;
	";
	$db->setQuery($query);
        $results = $db->loadObjectList();
	if( $results )
	{
		// // echo "<pre>"; print_r($results); echo "</pre>";
		$return_value['option'] = "com_content";
		$return_value['view'] = "article";
		$return_value['id'] = $results[0]->id;
		return $return_value;
	}

	// is this an article category?
	$query = "	SELECT `category`.`id`
			FROM #__categories as `category`
			WHERE	`category`.`extension` = 'com_content' AND
				`category`.`path` LIKE '%" . addslashes($last_last) . "/" . addslashes($last) . "'
	";
	$db->setQuery($query);
        $results = $db->loadObjectList();
        if( $results )
	{
		$return_value['option'] = "com_content";
                $return_value['view'] = "category";
                $return_value['id'] = $results[0]->id;
                return $return_value;
	}

	// is this an unknown link?
	$return_value['option'] = "-1";
	$return_value['view'] = "-1";
	$return_value['id'] = "-1";
	return $return_value;
}






function drop_existing_internal_links($last_digit)
{
	$db = JFactory::getDbo();
	$query = "	DELETE FROM #__internal_linking
			WHERE	`source_id` LIKE '%" . $last_digit . "'
	";
	$db->setQuery($query);
	$result = $db->execute();
	echo "<p class='alert alert-success'>Existing logged internal links deleted.</p>";
}






?>
