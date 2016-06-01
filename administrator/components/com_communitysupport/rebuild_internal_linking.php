<?

$example_find_anchor_text_like = "(`anchor` LIKE '%install%' AND `anchor` LIKE '%joomla%' AND `anchor` LIKE '%3%')";
if($_POST['at_query'])
	$example_find_anchor_text_like = htmlentities($_POST['at_query'],ENT_QUOTES);

?>

<!--
<h1>Rebuild Internal Linking Table</h1>
<p>Based on what you select below, we will scan all the selected items, strip out all links that point to internal articles and categories, and insert them into the #__internal_linking table.</p>
<form method='post'>
	<input type='hidden' name='task_a' id='task_a' value='rebuild' />
	<select name='posted_option' id='posted_option'>
		<option value='com_content'>com_content</option>
		<option value='com_communitysupport'>com_communitysupport</option>
	</select>
	<select name='posted_view' id='posted_view'>
		<option value='article'>Article</option>
		<option value='category'>Article Category</option>
		<option value='show_question'>Questions</option>
	</select>
	ID between
	<input type='text' name='id_start' id='id_start' style='width:35px;' />
	... and ...
	<input type='text' name='id_end' id='id_end' style='width:35px;' />
	<input type='submit' value='Rebuild' class='btn btn-primary' />
</form>
-->
<h1>Find links to:</h1>
<form method='post'>
        <input type='hidden' name='task_a' id='task_a' value='find_links' />
        <select name='posted_option' id='posted_option'>
                <option value='com_content'>com_content</option>
        </select>
        <select name='posted_view' id='posted_view'>
                <option value='article'>Article</option>
                <option value='category'>Article Category</option>
        </select>
        ID:
        <input type='text' name='option_view_id' id='option_view_id' style='width:35px;' />
        <input type='submit' value='Find Links' class='btn btn-primary' />
</form>

<h1>Find anchor text like:</h1>

<p>
get links that include the anchor text "install" and "joomla" and "3"<br />
<em>(`anchor` LIKE '%install%' AND `anchor` LIKE '%joomla%' AND `anchor` LIKE '%3%')</em><br />
<br />
<em>get links to sales pages</em><br />
(`url` NOT LIKE 'index.php%' AND `url` NOT LIKE '%/support%')
</p>

<form method='post'>
        <input type='hidden' name='task_a' id='task_a' value='find_anchor_text' />
	<textarea name='at_query' id='at_query' style="font-family:'Courier New', Courier, monospace; display:block; width:800px; height:75px;"><? echo $example_find_anchor_text_like; ?></textarea>
	<input type='submit' value='Find anchor text' class='btn btn-primary' />
</form>






<?






switch( $_POST['task_a'] )
{
	case "rebuild":
		drop_existing_internal_links($db);
		switch( $_POST['posted_option'] )
		{
			case "com_content":
				switch($_POST['posted_view'])
				{
					case "article":
						scan_through_articles($db);
						break;
					case "category":
						scan_through_article_categories($db);
                                                break;
				}
			break;
			case "com_communitysupport":
				switch($_POST['posted_view'])
				{
					case "show_question":
						scan_through_questions($db);
						break;
				}
		}
		break;
	case "find_links":
		find_links($db);
		break;
	case "find_anchor_text":
		find_anchor_text($db);
		break;
}






function scan_through_articles($db)
{
	/*
	// $articles
	Array
	(
	    [0] => stdClass Object
        	(
	            [id] => 1000
        	    [title] => Uploading a Custom Logo in the Premium Website Builder
	            [alias] => uploading-a-custom-logo
        	    [introtext] =>
	*/

	$articles = return_content_aoo_where($db,"(`id` BETWEEN " . $_POST['id_start'] . " AND " . $_POST['id_end'] . ")");
	foreach($articles as $article_k => $article_object)
		scan_text_for_links($db,"com_content","article",$article_object->id,$article_object->introtext);
}






function scan_through_article_categories($db)
{
        $categories = return_content_categories_aoo_where($db,"(`id` BETWEEN " . $_POST['id_start'] . " AND " . $_POST['id_end'] . ")");
        foreach($categories as $category_k => $category_object)
                scan_text_for_links($db,"com_content","category",$category_object->id,$category_object->description);
}






function scan_through_questions($db)
{
	// grab questions
	$query = "SELECT `id` FROM #__questions WHERE (`id`  BETWEEN " . $_POST['id_start'] . " AND " . $_POST['id_end'] . ")";
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






function return_content_aoo_where($db,$where)
{
	$query = "	SELECT `id`,`title`,`alias`,`introtext`
			FROM #__content
			WHERE	$where AND
				`state` = 1
	";
	$db->setQuery($query);
	$results = $db->loadObjectList();
	return $results;
}






function return_content_categories_aoo_where($db,$where)
{
        $query = "      SELECT `id`,`title`,`alias`,`description`
                        FROM #__categories
                        WHERE   $where AND
                                `published` = 1 AND
				`extension` = 'com_content'
        ";
        $db->setQuery($query);
        $results = $db->loadObjectList();
        return $results;
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

			echo "<li><a href='$ahref' target='_blank'>$anchor_text</a> $ahref</li>";

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






function drop_existing_internal_links($db)
{
	// echo "<pre>"; print_r($_POST); echo "</pre>";
	$query = "	DELETE FROM #__internal_linking
			WHERE	`source_option` = '" . $_POST['posted_option'] . "' AND
				`source_view` = '" . $_POST['posted_view'] . "' AND
				(`source_id` BETWEEN " . $_POST['id_start'] . " AND " . $_POST['id_end'] . ");
	";
	$db->setQuery($query);
	$result = $db->execute();
	echo "<p class='alert alert-success'>Existing logged internal links deleted.</p>";
}






function find_links($db)
{
	$query = "	SELECT *
			FROM #__internal_linking
			WHERE	`dest_option` = '" . addslashes($_POST['posted_option']) . "' AND
				`dest_view` = '" . addslashes($_POST['posted_view']) . "' AND
				`dest_id` = " . addslashes($_POST['option_view_id']) . "
				ORDER BY `anchor` ASC
			;
	";
	$db->setQuery($query);
        $results = $db->loadObjectList();
	if( $results )
		print_results_for_internal_link_search($db,$results);
	else
        	echo "<p class='alert alert-danger'>No links found to this page.</p>";
}






function print_results_for_internal_link_search($db,$results)
{
	// generate the large table of raw results
	$x = 1;
	$large_table .= "	<table class='table table-striped'>
			<tr style='background:#aaa;'>
				<th colspan='4'	style='background:#aaa; border:1px solid #000;'>Source</th>
				<th		style='background:#aaa; border:1px solid #000;'>Anchor Text</th>
				<th colspan='3'	style='background:#aaa; border:1px solid #000;'>Destination</th>
			</tr>
	";
	foreach($results as $k => $v)
	{
		$summary[$v->url]++;

		$large_table .= "	<tr>
				<td>$x</td>
				<td>" . htmlentities($v->source_option,ENT_QUOTES) . "</td>
				<td>" . htmlentities($v->source_view,ENT_QUOTES) . "</td>
				<td>" . return_link_to_source($db,$v,"source") . "</td>
				<td style='color:brown;font-weight:bold;'>" . htmlentities($v->anchor,ENT_QUOTES) . "</td>
				<td>" . htmlentities($v->dest_option,ENT_QUOTES) . "</td>
                                <td>" . htmlentities($v->dest_view,ENT_QUOTES) . "</td>
				<td>" . return_link_to_source($db,$v,"dest") . "</td>
			</tr>
			<tr>
				<td colspan='4' style='padding:0px;'></td>
				<td colspan='4' style='padding:0px 0px 0px 8px;font-size:10px;'>" . $v->url . "</td>
			</tr>
		";
		$x++;
	}
	$large_table .= "	</table>";

	// generate the summary table
	ksort($summary);
	$summary_table .= "
		<h1>Summary of Results</h1>
		<table class='table table-striped table-bordered'>
			<tr>
				<th>URL</th>
				<th># links to it</th>
			</tr>
	";
	foreach($summary as $url => $count)
		$summary_table .= "
			<tr>
				<th>" . htmlentities($url,ENT_QUOTES) . "</td>
				<td>$count</td>
			</tr>
		";
	$summary_table .= "</table>";

	echo "	$summary_table
		$large_table
	";
	
}






function return_link_to_source($db,$v,$type)
{
	if( $type == "source" )
	{
		$option = $v->source_option;
		$view = $v->source_view;
		$id = $v->source_id;
	}
	if( $type == "dest" )
	{
		$option = $v->dest_option;
                $view = $v->dest_view;
                $id = $v->dest_id;
	}

	switch( $option )
	{
		case "com_content":
			switch($view)
			{
				case "article":
					$query = "SELECT `title`,`alias` FROM #__content WHERE `id` = $id;";
					$db->setQuery($query);
				        $results = $db->loadObjectList();
					return "<a href='../" . $results[0]->alias . "' target='_blank'>" . htmlentities($results[0]->title,ENT_QUOTES) . "</a>";
					break;
				case "category":
					$query = "SELECT `path`,`title` FROM #__categories WHERE `id` = " . $v->source_id . " AND `extension` = 'com_content'";
                                        $db->setQuery($query);
                                        $results = $db->loadObjectList();
                                        return "<a href='../" . $results[0]->path . "' target='_blank'>" . htmlentities($results[0]->title,ENT_QUOTES) . "</a>";
                                        break;
					break;
			}
			break;
		case "com_communitysupport":
			switch($view)
			{
				case "show_question":
					$query = "SELECT `question`,`question_alias` FROM #__questions WHERE `id` = $id;";
					$db->setQuery($query);
                                        $results = $db->loadObjectList();
                                        return "<a href='../" . $results[0]->question_alias . "' target='_blank'>" . htmlentities($results[0]->question,ENT_QUOTES) . "</a>";
                                        break;
			}
			break;
	}
}






function find_anchor_text($db)
{
	$query = "SELECT * FROM #__internal_linking WHERE " . $_POST['at_query'] . " ORDER BY `url` ASC;";
	$db->setQuery($query);
        $results = $db->loadObjectList();
        if( $results )
                print_results_for_internal_link_search($db,$results);
        else
                echo "<p class='alert alert-danger'>No anchor text found to this page.</p>";
}





?>
