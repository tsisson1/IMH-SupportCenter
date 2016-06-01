<!-- <form method='post'>
	<input type='hidden' name='task_a' id='task_a' value='show_base_results' />
	<p>Enter <strong>base keyword</strong> id: <input type='text' name='base_id' id='base_id' style='width:35px;' /> <input type='submit' value='Go' class='btn btn-primary' />
</form> -->

<p>After selecting a keyword, this script will scan our website and look for objects that contain all of the words in the phrase <em>(<u>all words</u>, <strong>not</strong> the <u>exact phrase</u>)</em>.</p>






<?

switch( $_POST['task_a'] )
{
	case "show_base_results":
		$suggested_keywords_aao = pass_id_return_aoo_google_suggested_keywords($db,$_POST['base_id']);
		print_table_of_gas($db,$suggested_keywords_aao[0]->suggested_keywords);
		break;
}
print_query_list($db);






function pass_id_return_aoo_google_suggested_keywords($db,$id)
{
	$query = "SELECT * FROM #__google_auto_suggest WHERE `id` = $id;";
	$db->setQuery($query);
	$google_auto_suggest = $db->loadObjectList();
	return $google_auto_suggest;
}






function print_table_of_gas($db,$gas)
{
	// init some variables
	// ---------------------------------------------------------------
	// // $gas = str_replace("\n\r","\n",$gas);
	$gas = str_replace("\r\n","\n",$gas);
	$exploded_gas = explode("\n",$gas);
	sort($exploded_gas);
	$exploded_gas = array_unique($exploded_gas);

	$table_start = "	<table class='table table-striped'>
					<tr>
						<th>#</th>
						<th>Suggested Keyword</th>
						<th>Article Title</th>
						<th>Category Title</th>
						<th>Anchor Text</th>
					</tr>
	";

	$not_targeted_x = 0;
	$targeted_x = 0;

	// loop through each keyword
	// ---------------------------------------------------------------
	foreach($exploded_gas as $k => $gas_keyword)
	{
		$exploded_gas_keyword = explode(" ",addslashes(trim($gas_keyword)));

		$article_title_count = PASS_exploded_query_table_column_SEARCH_all_words_RETURN_count($db,$exploded_gas_keyword,"#__content","title","AND `state` = 1");
		$category_title_count = PASS_exploded_query_table_column_SEARCH_all_words_RETURN_count($db,$exploded_gas_keyword,"#__categories","title","AND (`published` = 1 AND `extension` = 'com_content')");
		$anchor_text_count = PASS_exploded_query_table_column_SEARCH_all_words_RETURN_count($db,$exploded_gas_keyword,"#__internal_linking","anchor","");

		if( ($article_title_count + $category_title_count) == 0 )
		{
			$not_targeted_x++;
			$x = $not_targeted_x;
		}
		else
		{
			$targeted_x++;
			$x = $targeted_x;
		}

		$tr_text = "    <tr>
					<td>$x</td>
                                        <td>" . htmlentities($gas_keyword,ENT_QUOTES) . "</td>
                                        <td>$article_title_count</td>
                                        <td>$category_title_count</td>
					<td>$anchor_text_count</td>
                                </tr>
                ";

		if( ($article_title_count + $category_title_count) == 0 )
                        $not_targeted_tr .= $tr_text;
                else
                        $targeted_tr .= $tr_text;
	}

	// print the results
	// ---------------------------------------------------------------
	echo "	<h1>Targeted</h1>$table_start$targeted_tr</table>
		<h1>Not Targeted</h1>$table_start$not_targeted_tr</table>
	";
}






function PASS_exploded_query_table_column_SEARCH_all_words_RETURN_count($db,$query_array,$table,$column,$additional_where)
{
	$where_clause = "(`$column` LIKE '%" . implode("%' AND `$column` LIKE '%",$query_array) . "%')";
	// // echo "<pre>$where_clause</pre>";
	$query = "SELECT COUNT(`$column`) as 'count' FROM $table WHERE $where_clause $additional_where";
	$db->setQuery($query);
        $count = $db->loadObjectList();

	if( $count[0]->count > 0 )
		return $count[0]->count;
	else
		return false;
	// // return($count[0]->count);
}






function print_query_list($db)
{
	$query = "SELECT `id`,`parent_id`,`base_keyword` FROM #__google_auto_suggest ORDER BY `base_keyword` ASC;";
	$db->setQuery($query);
	$results = $db->loadObjectList();

	echo "<h1 style='border-bottom:1px solid #000;'>Keyword lists</h1>";

	foreach($results as $k => $v)
	{
		$form_left_padding = 50;
		if( $v->parent_id == "0" )
                	$form_left_padding = 0;

		echo "	<form method='post' style='padding-left:$form_left_padding" . "px;'>
			        <input type='hidden' name='task_a' id='task_a' value='show_base_results' />
				<input type='hidden' name='base_id' id='base_id' value='" . $v->id . "' />
				<input type='submit' value='" . htmlentities($v->base_keyword,ENT_QUOTES) . "' class='btn btn-primary' />
			</form>
		";
	}
}






?>
