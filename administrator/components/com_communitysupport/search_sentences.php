<h1>Search Sentences</h1>

<p>This script will allow you to search sentences for a phrase.</p>

<form method='post'>
	<input type='hidden' name='task_a' id='task_a' value='search' />
	<textarea name='search_string' id='search_string' style='width:800px; height:150px; display:block;'>(`sentence_no_html` LIKE '%406%')</textarea>
	<input type='submit' class='btn btn-primary' value='Search' />
</form>






<?

if( $_POST['task_a'] == "search" )
{
	perform_sentence_search($db);
}






function perform_sentence_search($db)
{
	$query = "	SELECT * FROM #__site_sentences
			WHERE " . $_POST['search_string'] . "
	";
	$db->setQuery($query);
        $results = $db->loadObjectList();

	if( $results )
		print_sentence_search_results($results);
	else
		echo "<p class='alert alert-warning'>No results.</p>";
}






function print_sentence_search_results($results)
{
	echo "	<table class='table table-striped'>
			<tr>
				<th>option</th>
				<th>view</th>
				<th>id</th>
				<th>sentence</th>
			</tr>
	";
	foreach($results as $k => $v)
	{
		$this_option_view_id = $v->option . "____" . $v->view . "____" . $v->option_view_id;
		if( $this_option_view_id != $last_option_view_id )
			echo "	<tr><td colspan='4' style='background:#000; padding-top:1px;'></td></tr>";

		echo "	<tr>
				<td>" . $v->option . "</td>
				<td>" . $v->view . "</td>
				<td>" . $v->option_view_id . "</td>
				<td>" . $v->sentence . "</td>
			</tr>
		";

		$last_option_view_id = $this_option_view_id;
	}
	echo "</table>";
}






?>
