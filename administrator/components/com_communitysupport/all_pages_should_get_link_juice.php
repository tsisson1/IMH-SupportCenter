<p>This script will scan for all <strong>articles</strong> and <strong>article categories</strong> that do not have anchor text internally pointing to them.</p>
<form method='post'>
	<input type='hidden' name='task_a' id='task_a' value='run_scan' />
	<input type='submit' value='Run scan' class='btn btn-primary' />
</form>






<?






switch( $_POST['task_a'] )
{
	case "run_scan":
		print_table_of_content_with_no_links($db);
		break;
}






function print_table_of_content_with_no_links($db)
{
	// first, create an array of all articles with links pointing to them
	$query = "SELECT DISTINCT(`dest_id`) FROM #__internal_linking WHERE `dest_option` = 'com_content' AND `dest_view` = 'article'";
	$db->setQuery($query);
	$link_results = $db->loadColumn();

	// then grab all published article id's
	$query = "SELECT `id`,`title`,`alias` FROM #__content WHERE `state` = 1;";
	$db->setQuery($query);
	$published_articles = $db->loadObjectList();

	$table_articles_without_links_to_them = "
		<table class='table table-striped'>
			<tr>
				<th>#</th>
				<th>Article ID</th>
				<th>Article</th>
			</tr>
	";
	$x = 0;
	foreach($published_articles as $pa_key => $pa_v)
	{
		if( ! in_array($pa_v->id,$link_results) )
		{
			$x++;
			$table_articles_without_links_to_them .= "	<tr>
					<td>$x</td>
					<td>" . $pa_v->id . "</td>
					<td><a href='../" . $pa_v->alias . "' target='_blank'>" . htmlentities($pa_v->title,ENT_QUOTES) . "</td>
				</tr>
			";
		}
	}
	$table_articles_without_links_to_them .= "	</table>";

	echo "	<table class='table table-striped'>
			<tr>
				<th>Total # published articles</th>
				<td>" . count($published_articles) . "</td>
				<td></td>
			</tr>
			<tr>
				<th>Total # of articles <u>with links TO them</u></th>
				<td>" . count($link_results) . "</td>
				<td>" . round(count($link_results)/count($published_articles)*100,2) . "%</td>
			</tr>
			<tr>
				<th>Total # of articles <u>without links TO them</u></th>
				<td>$x</td>
				<td>" . round($x/count($published_articles)*100,2) . "%</td>
			</tr>
		</table>
	";
	echo "	<h1>Articles without links to them:</h1>
		$table_articles_without_links_to_them
	";
}






?>
