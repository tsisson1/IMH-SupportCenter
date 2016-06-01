<?


$submitted_query = "(`text` LIKE '%joomla%' AND `text` LIKE '%install%')";
if( $_POST['submitted_query'] )
	$submitted_query =  $_POST['submitted_query'];



echo "	<h1>Find stuff to Tag</h1>
	<p>Use this page to help find articles and questions to tag.</p>
";



echo "	<h1>Query</h1>
	<form method='post'>
		<input type='hidden' name='task_a' id='task_a' value='submit_query' />
		<p class='alert alert-warning'>If need be, addslashes</p>
		<textarea name='submitted_query' id='submitted_query' style='width:800px; height:100px; display:block; font-family:\"Courier New\", Courier, monospace'>$submitted_query</textarea>
		<input type='submit' value='Search' class='btn btn-primary' />
	</form>
";



// if we're looking for content
if( $_POST['task_a'] == "submit_query" )
{
	echo "	<form method='post'>
			<input type='hidden' name='task_a' id='task_a' value='tag_me' />
	";



	// ----------------------------------------------------------------------------------------
	// FIND ARTICLES INTROTEXT
	$article_query = str_replace("`text`","`introtext`",$_POST['submitted_query']);
	$article_query = "SELECT `id`,`title`,`alias` FROM #__content WHERE $article_query;";
	$db->setQuery($article_query);
	$introtext_matches = $db->loadObjectList();
	echo "	<h2>Articles</h2>
		<table class='table'>
	";
	foreach($introtext_matches as $k => $v)
	{
		$checkbox_value = "com_content" . "____" . "article" . "____" . $v->id;
		echo "	<tr>
				<td><input type='checkbox' name='tag_me[]' value='$checkbox_value' /></td>
				<td><a href='/support/" . $v->alias . "' target='_blank'>" . htmlentities($v->title,ENT_QUOTES) . "</a></td>
			</tr>
		";
	}
	echo "	</table>";

	// ----------------------------------------------------------------------------------------
	// FIND QUESTIONS
	$question_query = str_replace("`text`","`description`",$_POST['submitted_query']);
        $article_query = "SELECT `id`,`question` as 'title',`question_alias` as 'alias' FROM #__questions WHERE $question_query;";
        $db->setQuery($article_query);
        $introtext_matches = $db->loadObjectList();
        echo "  <h2>Question Descriptions</h2>
                <table class='table'>
        ";
        foreach($introtext_matches as $k => $v)
        {
                $checkbox_value = "com_communitysupport" . "____" . "show_question" . "____" . $v->id;
                echo "  <tr>
                                <td><input type='checkbox' name='tag_me[]' value='$checkbox_value' /></td>
                                <td><a href='/support/" . $v->alias . "' target='_blank'>" . htmlentities($v->title,ENT_QUOTES) . "</a></td>
                        </tr>
                ";
        }
        echo "  </table>";



	// ----------------------------------------------------------------------------------------
	// GRAB ALL TAGS
	$query = "SELECT * FROM #__tags ORDER BY `title` ASC";
        $db->setQuery($query);
	$tag_list = $db->loadObjectList();
	echo "	<h2>Tags</h2>
		<table class='table'>
	";
	foreach($tag_list as $k => $v)
	{
		echo "	<tr>
				<td><input type='checkbox' name='tags[]' value='" . $v->id . "' /></td>
				<td>" . htmlentities($v->title) . "</td>
			</tr>
		";
	}
	echo "	</table>";



	echo "          <input type='submit' value='Tag!' class='btn btn-primary' />
                </form>
        ";
	

}






if( $_POST['task_a'] == "tag_me" )
{
	if( $_POST['tag_me'] AND $_POST['tags'] )
	{
		// loop through each tag_me
		foreach($_POST['tag_me'] as $tag_me_k => $tag_me_v)
		{
			$exploded_tag_me_v = explode("____",$tag_me_v);
			$tag_option = $exploded_tag_me_v[0];
			$tag_view = $exploded_tag_me_v[1];
			$tag_option_view_id = $exploded_tag_me_v[2];

			// does this page already belong to this tag?
			foreach($_POST['tags'] as $tag_k => $tag_id)
			{
				$query = "	SELECT count(`id`) as 'count'
						FROM #__tagged
						WHERE	`option` = '$tag_option' AND
							`view` = '$tag_view' AND
							`option_view_id` = $tag_option_view_id AND
							`tag_id` = $tag_id
				";
				$db->setQuery($query);
			        $already_tagged = $db->loadObjectList();

				if( $already_tagged[0]->count == 0 )
				{
					$query = "	INSERT INTO #__tagged (`id`,`tag_id`,`option`,`view`,`option_view_id`)
							VALUES(NULL,$tag_id,'$tag_option','$tag_view',$tag_option_view_id);
					";
					$db->setQuery($query);
					$result = $db->execute();
				}
			}
		}
	}
	echo "<p class='alert alert-success'>Items tagged! Be please double check and make sure it worked.</p>";
}






?>
