<?

if( $_POST )
{
	// echo "<pre>"; print_r($_POST); echo "</pre>";

	// grab the target keyword data
	$query = "SELECT * FROM #__query_data_target_keyword WHERE `id` = " . $_POST['target_keyword_id'] . ";";
	$db->setQuery($query);
	$target_keyword  = $db->loadObjectList();

	// echo "<pre>"; print_r($target_keyword); echo "</pre>";

	echo "	<form style=float:right;' method='post' action='/support/administrator/index.php?option=com_communitysupport&task=view_targeted_phrases'>
			<input id='target_keyword_id' type='hidden' value='" . $target_keyword[0]->id . "' name='target_keyword_id'></input>
			<input id='task_a' type='hidden' value='find_phrases' name='task_a'></input>
			<input class='btn btn-info' type='submit' value='" . htmlentities($target_keyword[0]->target_keyword,ENT_QUOTES) . "'></input>
		</form>
	";
	echo "<h1><span style='color:#aaa;'>QUERY:</span> " . htmlentities($_POST['search_query'],ENT_QUOTES) . "</h1>";


	$w_clause = explode(" ",addslashes($_POST['search_query']));
	$w_clause = implode("%' AND `query` LIKE '%",$w_clause);
	$w_clause = "(`query` LIKE '%" . $w_clause . "%')";
	// $where_clause = $target_keyword[0]->where;
	$where_clause = $w_clause;

	echo "<pre>$where_clause</pre>";



	// -----------------------------------------------------------------------------------------------------------------------------
	// grab the article data
	// -----------------------------------------------------------------------------------------------------------------------------

	// find all article introtext
	$query = "SELECT `title`,`id`,`alias` FROM #__content WHERE " . str_replace("`query`","`introtext`",$where_clause) . ";";
	$db->setQuery($query);
        $introtext  = $db->loadObjectList();
	foreach( $introtext as $it_k => $it_v )
	{
		$article[$it_v->id]['introtext']++;
		$article_link[$it_v->id] = "<a href='/support/" . $it_v->alias . "' target='_blank'>" . $it_v->title . "</a>";
	}

	// find all article titles
	$query = "SELECT `title`,`id`,`alias` FROM #__content WHERE " . str_replace("`query`","`title`",$where_clause) . ";";
        $db->setQuery($query);
        $title = $db->loadObjectList();
        foreach( $title as $title_k => $title_v )
        {
                $article[$title_v->id]['title']++;
		$article_link[$title_v->id] = "<a href='/support/" . $title_v->alias . "' target='_blank'>" . $title_v->title . "</a>";
        }

	// find all article meta descriptions
	$query = "SELECT `title`,`id`,`alias` FROM #__content WHERE " . str_replace("`query`","`metadesc`",$where_clause) . ";";
        $db->setQuery($query);
        $md = $db->loadObjectList();
        foreach( $md as $md_k => $md_v )
        {
                $article[$md_v->id]['metadesc']++;
                $article_link[$md_v->id] = "<a href='/support/" . $md_v->alias . "' target='_blank'>" . $md_v->title . "</a>";
        }

	// -----------------------------------------------------------------------------------------------------------------------------
        // print the article data
        // -----------------------------------------------------------------------------------------------------------------------------

	$columns = array("title","introtext","metadesc");
	// print the heading
	echo "	<table class='table table-striped'>
			<tr>
				<th><span class='btn btn-info'>Articles</span></th>
	";
        foreach($columns as $col_k => $col_v)
		echo "		<th>$col_v</th>";
	echo "		</tr>";
	// print the data
	foreach($article as $article_id => $article_column)
	{
		echo "	<tr>
				<td>" . $article_link[$article_id] . "</td>
		";
		foreach($columns as $col_k => $col_v)
		{
			$symbol = "";
			if( $article[$article_id][$col_v] )
				$symbol = "<span style='color:green; font-weight:bold; font-size:14px;'>&#x2713;</span>";
			echo "<td>$symbol</td>";
		}
		echo "	</tr>";
	}
	echo "	</table>";






	// -----------------------------------------------------------------------------------------------------------------------------
        // grab the question text
        // -----------------------------------------------------------------------------------------------------------------------------

        // find all question details
        $query = "SELECT `id`,`question`,`question_alias` FROM #__questions WHERE " . str_replace("`query`","`description`",$where_clause) . ";";
        $db->setQuery($query);
        $sr  = $db->loadObjectList();
        foreach( $sr as $sr_k => $sr_v )
        {
                $question[$sr_v->id]['description']++;
                $question_link[$sr_v->id] = "<a href='/support/" . $sr_v->question_alias . "' target='_blank'>" . $sr_v->question . "</a>";
        }

	// find all question titles
        $query = "SELECT `id`,`question`,`question_alias` FROM #__questions WHERE " . str_replace("`query`","`question`",$where_clause) . ";";
        $db->setQuery($query);
        $sr  = $db->loadObjectList();
        foreach( $sr as $sr_k => $sr_v )
        {
                $question[$sr_v->id]['question']++;
                $question_link[$sr_v->id] = "<a href='/support/" . $sr_v->question_alias . "' target='_blank'>" . $sr_v->question . "</a>";
        }



	// -----------------------------------------------------------------------------------------------------------------------------
        // print the question data
        // -----------------------------------------------------------------------------------------------------------------------------

        $columns = array("question","description");
        // print the heading
        echo "  <table class='table table-striped'>
                        <tr>
                                <th><span class='btn btn-info'>Questions</span></th>
        ";
        foreach($columns as $col_k => $col_v)
                echo "          <th>$col_v</th>";
        echo "          </tr>";
        // print the data
        foreach($question as $question_id => $question_column)
        {
                echo "  <tr>
                                <td>" . $question_link[$question_id] . "</td>
                ";
                foreach($columns as $col_k => $col_v)
                {
                        $symbol = "";
                        if( $question[$question_id][$col_v] )
                                $symbol = "<span style='color:green; font-weight:bold; font-size:14px;'>&#x2713;</span>";
                        echo "<td>$symbol</td>";
                }
                echo "  </tr>";
        }
        echo "  </table>";






	unset($page_type);
	unset($page_type_url);
	unset($sr);
	// -----------------------------------------------------------------------------------------------------------------------------
        // grab the answer data
        // -----------------------------------------------------------------------------------------------------------------------------
        // find answers
        $query = "	SELECT `questions`.`id`,`questions`.`question`,`questions`.`question_alias`
			FROM #__answers as `answers`, #__questions as `questions`
			WHERE " . str_replace("`query`","`answers`.`answer`",$where_clause) . " AND
				`questions`.`id` = `answers`.`question_id`
	;";
        $db->setQuery($query);
        $sr  = $db->loadObjectList();
        foreach( $sr as $sr_k => $sr_v )
        {
                $page_type[$sr_v->id]['answer']++;
                $page_type_link[$sr_v->id] = "<a href='/support/" . $sr_v->question_alias . "' target='_blank'>" . $sr_v->question . "</a>";
        }
	// -----------------------------------------------------------------------------------------------------------------------------
        // print the answer data
        // -----------------------------------------------------------------------------------------------------------------------------
        $columns = array("answer");
        // print the heading
        echo "  <table class='table table-striped'>
                        <tr>
                                <th><span class='btn btn-info'>Answers</span></th>
        ";
        foreach($columns as $col_k => $col_v)
                echo "          <th>$col_v</th>";
        echo "          </tr>";
        // print the data
        foreach($page_type as $page_type_id => $page_type_column)
        {
                echo "  <tr>
                                <td>" . $page_type_link[$page_type_id] . "</td>
                ";
                foreach($columns as $col_k => $col_v)
                {
                        $symbol = "";
                        if( $page_type[$page_type_id][$col_v] )
                                $symbol = "<span style='color:green; font-weight:bold; font-size:14px;'>&#x2713;</span>";
                        echo "<td>$symbol</td>";
                }
                echo "  </tr>";
        }
        echo "  </table>";
	// -----------------------------------------------------------------------------------------------------------------------------
	// end printing answer data
	// -----------------------------------------------------------------------------------------------------------------------------






	unset($page_type);
        unset($page_type_url);
        unset($sr);
        // -----------------------------------------------------------------------------------------------------------------------------
        // grab article comments
        // -----------------------------------------------------------------------------------------------------------------------------
        // find answers
	$query = "	SELECT `content`.`id`,`content`.`alias`,`content`.`title`
			FROM #__content as `content`, #__comments as `comments`
			WHERE " . str_replace("`query`","`comments`.`comment`",$where_clause) . " AND
				`comments`.`object_group` = 'com_content' AND
				`comments`.`object_id` = `content`.`id`
	";
	/*
        $query = "      SELECT `questions`.`id`,`questions`.`question`,`questions`.`question_alias`
                        FROM #__answers as `answers`, #__questions as `questions`
                        WHERE " . str_replace("`query`","`answers`.`answer`",$where_clause) . " AND
                                `questions`.`id` = `answers`.`question_id`
        ;";
	*/
        $db->setQuery($query);
        $sr  = $db->loadObjectList();
        foreach( $sr as $sr_k => $sr_v )
        {
                $page_type[$sr_v->id]['comment']++;
                $page_type_link[$sr_v->id] = "<a href='/support/" . $sr_v->alias . "' target='_blank'>" . $sr_v->title . "</a>";
        }
        // -----------------------------------------------------------------------------------------------------------------------------
        // print article comments
        // -----------------------------------------------------------------------------------------------------------------------------
        $columns = array("comment");
        // print the heading
        echo "  <table class='table table-striped'>
                        <tr>
                                <th><span class='btn btn-info'>Article Comments</span></th>
        ";
        foreach($columns as $col_k => $col_v)
                echo "          <th>$col_v</th>";
        echo "          </tr>";
        // print the data
        foreach($page_type as $page_type_id => $page_type_column)
        {
                echo "  <tr>
                                <td>" . $page_type_link[$page_type_id] . "</td>
                ";
                foreach($columns as $col_k => $col_v)
                {
                        $symbol = "";
                        if( $page_type[$page_type_id][$col_v] )
                                $symbol = "<span style='color:green; font-weight:bold; font-size:14px;'>&#x2713;</span>";
                        echo "<td>$symbol</td>";
                }
                echo "  </tr>";
        }
        echo "  </table>";
        // -----------------------------------------------------------------------------------------------------------------------------
        // end printing article comments
        // -----------------------------------------------------------------------------------------------------------------------------






	unset($page_type);
        unset($page_type_url);
        unset($sr);
        // -----------------------------------------------------------------------------------------------------------------------------
        // grab the answer comments data
        // -----------------------------------------------------------------------------------------------------------------------------
        // find answers
        $query = "      SELECT `questions`.`id`,`questions`.`question`,`questions`.`question_alias`
                        FROM #__answer_comments as `answer_comments`, #__answers as `answers`, #__questions as `questions`
                        WHERE " . str_replace("`query`","`answer_comments`.`comment`",$where_clause) . " AND
                                `answer_comments`.`answer_id` = `answers`.`id` AND
				`answers`.`question_id` = `questions`.`id`
        ;";
        $db->setQuery($query);
        $sr  = $db->loadObjectList();
        foreach( $sr as $sr_k => $sr_v )
        {
                $page_type[$sr_v->id]['comment']++;
                $page_type_link[$sr_v->id] = "<a href='/support/" . $sr_v->question_alias . "' target='_blank'>" . $sr_v->question . "</a>";
        }
        // -----------------------------------------------------------------------------------------------------------------------------
        // print the answer comments data
        // -----------------------------------------------------------------------------------------------------------------------------
        $columns = array("comment");
        // print the heading
        echo "  <table class='table table-striped'>
                        <tr>
                                <th><span class='btn btn-info'>Answer Comments</span></th>
        ";
        foreach($columns as $col_k => $col_v)
                echo "          <th>$col_v</th>";
        echo "          </tr>";
        // print the data
        foreach($page_type as $page_type_id => $page_type_column)
        {
                echo "  <tr>
                                <td>" . $page_type_link[$page_type_id] . "</td>
                ";
                foreach($columns as $col_k => $col_v)
                {
                        $symbol = "";
                        if( $page_type[$page_type_id][$col_v] )
                                $symbol = "<span style='color:green; font-weight:bold; font-size:14px;'>&#x2713;</span>";
                        echo "<td>$symbol</td>";
                }
                echo "  </tr>";
        }
        echo "  </table>";
        // -----------------------------------------------------------------------------------------------------------------------------
        // end printing answer comments data
        // -----------------------------------------------------------------------------------------------------------------------------






}

?>
