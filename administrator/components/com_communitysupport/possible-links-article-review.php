<h1>Possible links - article review</h1>

<form method='post'>
	<input type='hidden' name='task_a' id='task_a' value='review_article_id' />
	Article id: <input type='text' name='article_id' id='article_id' value='<? echo $_POST['article_id']; ?>' />
	<input type='submit' value='Review' class='btn btn-primary' />
</form>






<?






if( $_POST['task_a'] == "review_article_id" )
{
	print_link_to_article($db,$_POST['article_id']);

	$sentences = return_sentences_from_article_id($db,$_POST['article_id']);

	$search_queries = return_search_queries($db);

	review_sentences_and_queries($sentences,$search_queries);
}






function return_sentences_from_article_id($db,$id)
{
	$query = "SELECT `sentence`,`sentence_no_html` FROM #__site_sentences WHERE `option` = 'com_content' AND `view` = 'article' AND `option_view_id` = $id;";
	$db->setQuery($query);
	return $db->loadObjectList();	
}






function return_search_queries($db)
{
	$query = "SELECT `query` FROM #__query_data_raw;";
	$db->setQuery($query);
        return $db->loadObjectList();
}






function review_sentences_and_queries($sentences,$search_queries)
{
	foreach($sentences as $sentence_key => $sentence_object)
	{
		$sentence = $sentence_object->sentence_no_html;

		foreach($search_queries as $search_query_key => $search_query_object)
		{
			$exploded_search_query = explode(" ",$search_query_object->query);

			$matches = 0;
			foreach($exploded_search_query as $query_key => $query_value)
				if( substr_count(strtolower($sentence),strtolower($query_value)) > 0 )
					$matches++;

			if( $matches == count($exploded_search_query) )
				$sentence_query_matches[$sentence_key][] = $search_query_object->query;
		}
	}

	if( $sentence_query_matches )
	{
		foreach($sentence_query_matches as $sentence_key => $query_array)
		{
			echo "<p>" . $sentences[$sentence_key]->sentence . "</p>";

			echo "<ul style='margin-bottom:30px;'>";
			foreach($query_array as $query_key => $query_value)
				echo "<li>$query_value</li>";
			echo "</ul>";
		}
	}
	else
		echo "<p class='alert alert-danger'>No results.</p>";
}






function print_link_to_article($db,$id)
{
	$query = "SELECT `id`,`title`,`alias` FROM #__content WHERE `id` = $id;";
	$db->setQuery($query);
        $results = $db->loadObjectList();

	echo "<p><a href='/support/" . $results[0]->alias . "' target='_blank'>" . $results[0]->title . "</a></p>";
}






?>
