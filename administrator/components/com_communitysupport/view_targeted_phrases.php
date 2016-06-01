<?


$query = "      SELECT `u`.`id`,`u`.`username`
                FROM #__users as `u`, #__user_usergroup_map as `uum`
                WHERE `uum`.`group_id` = 8 AND `u`.`id` = `uum`.`user_id`
                ;
";
$db->setQuery($query);
$author_data = $db->loadObjectList();
foreach($author_data as $ad_k => $ad_v)
	$author_id_name[$ad_v->id] = $ad_v->username;






echo "	<h1>Select a search phrase</h1>";
$sql_query = "SELECT * FROM #__query_data_target_keyword ORDER BY `author_id` ASC, `target_keyword` ASC;";
$db->setQuery($sql_query);
$queries = $db->loadObjectList();
foreach($queries as $id => $value)
{
	if( $value->author_id != $last_author_id )
	{
		echo "<div style='clear:both;'></div>";
		echo "<h2>" . $author_id_name[$value->author_id] . "</h2>";
	}
	echo "
		<form method='post' style='float:left; margin-right:10px;'>
			<input type='hidden' name='target_keyword_id' id='target_keyword_id' value='" . $value->id . "' />
			<input type='hidden' name='task_a' id='task_a' value='find_phrases' />
			<input type='submit' value='" . htmlentities($value->target_keyword,ENT_QUOTES) . "' class='btn btn-info' style='display:block;' />
		</form>
	";
	$last_author_id = $value->author_id;
}
echo "<div style='clear:both; margin-bottom:40px;'></div>";






if( $_POST['task_a'] == "find_phrases" )
{
	// find the initial phrase
	$sql_query = "SELECT * FROM #__query_data_target_keyword WHERE `id` = " . $_POST['target_keyword_id'] . ";";
	$db->setQuery($sql_query);
	$results = $db->loadObjectList();

	// echo "<pre>"; print_r($results); echo "</pre>";

	$article_id = $results[0]->article_id;

	// grab and print data about the article
	if( $article_id != 0 )
	{
		$sql_query = "SELECT `title`,`created`,`alias`,`publish_up` FROM #__content WHERE `id` = " . $results[0]->article_id . ";";
		$db->setQuery($sql_query);
		$article_data = $db->loadObjectList();
		$article_publish_date_nn = $article_data[0]->publish_up;
		echo "	<h1 style='color:#bbb;'>Article Data</h1>
			<table class='table'>
				<tr>
					<th>Article:</th>
					<td><a href='/support/" . $article_data[0]->alias . "' target='_blank'>" . htmlentities($article_data[0]->title,ENT_QUOTES) . "</a></td>
				</tr>
				<tr>
					<th>Published:</th>
					<td>$article_publish_date_nn</td>
				</tr>
			</table>
		";
	}

	echo " <h1><span style='color:#bbb;'>QUERY:</span> " . $results[0]->target_keyword . "</h1>";
	// create query to grab similar ones
	$where_clause = $results[0]->where;
	echo "<pre>$where_clause</pre>";
	// grab all the keywords
	$sql_query = "	SELECT * FROM #__query_data_raw
			WHERE $where_clause
	";
	$db->setQuery($sql_query);
        $results = $db->loadObjectList();

	if( $results )
	{
		foreach($results as $rk => $rv )
        	{
			$first_noticed = date_create(str_replace(" 00:00:00","",$rv->first_noticed));

			if( $article_id != 0 )
			{
				$exploded_publish = explode(" ",$article_publish_date_nn);
				$publish_date = date_create($exploded_publish[0]);
				$date_diff = date_diff($publish_date,$first_noticed);
				$days_until_impressions = ($date_diff->days);
				if( $date_diff->invert == 1 )
	                                $dti_class = "warning";
        	                else
                	                $dti_class = "success";
			}
			else
			{
				$days_until_impressions = "n/a";
				$dti_class = "default";
			}
			


			$last_noticed = date_create(str_replace(" 00:00:00","",$rv->last_noticed));
			$now_date = date_create(date("Y-m-d",time()));
			$last_impression_date_diff = date_diff($last_noticed,$now_date);
			$days_since_last_impression = $last_impression_date_diff->days;
                        if( $last_impression_date_diff->days <= 7 AND $last_impression_date_diff->invert != 1 )
                                $dsli_class = "success";
                        elseif( $last_impression_date_diff->days <= 31 AND $last_impression_date_diff->invert != 1 )
                                $dsli_class = "warning";
			else
				$dsli_class = "danger";



			$site_review_link = "
				<form method='post' action='/support/administrator/index.php?option=com_communitysupport&task=query_data_site_review' style='margin:0px; padding:0px; display:inline;'>
					<input type='hidden' name='search_query' id='search_query' value='" . htmlentities($rv->query,ENT_QUOTES) . "' />
					<input type='hidden' name='target_keyword_id' id='target_keyword_id' value='" . $_POST['target_keyword_id'] . "' />
					<input class='btn btn-default' type='submit' value='" . htmlentities($rv->query,ENT_QUOTES) . "' />
				</form>
			";


			// log word count
			$exploded_query = explode(" ",$rv->query);
			unset($last_word);
			unset($last_last_word);
			foreach($exploded_query as $eq_k => $eq_v)
			{
				$eq_v = htmlentities($eq_v,ENT_QUOTES);
				$single_word_count[$eq_v]++;

				if($last_word)
					$double_word_count[$last_word . " " . $eq_v]++;

				if($last_last_word)
					$triple_word_count[$last_last_word . " " . $last_word . " " . $eq_v]++;

				if($eq_k >= 2)
					$last_last_word = $last_word;
				$last_word = $eq_v;
			}



                	$table_data .= "
		        	<tr>
                                	<td style='max-width:400px; overflow:hidden;'>$site_review_link</td>
	                                <td>" . $rv->impressions . "</td>
        	                        <td>" . $rv->clicks . "</td>
                	                <td>" . $rv->average_position . "</td>
					<td>" . date_format($first_noticed,"Y-m-d") . "</td>
					<td><span class='btn btn-$dti_class'>$days_until_impressions</span></td>
					<td>" . date_format($last_noticed,"Y-m-d") . "</td>
					<td><span class='btn btn-$dsli_class'>$days_since_last_impression</span></td>
                        	</tr>
	                ";

			$total_impressions += $rv->impressions;
			$total_clicks += $rv->clicks;
	        }

		echo "	<h1 style='color:#bbb;'>QUERY Data</h1>
			<table class='table table-striped'>
				<tr>
					<th>Query</th>
					<th>Impressions</th>
					<th>Clicks</th>
					<th>Avg Pos</th>
					<th>Query First Noticed</th>
					<th>Days until clicks/impressions</th>
					<th>Query Last Noticed</th>
					<th>Days since last click/impression</th>
				</tr>
				<tr>
					<th></th>
					<th><span class='btn btn-info'>$total_impressions</span></th>
					<th><span class='btn btn-info'>$total_clicks</span></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
				$table_data
			</table>
		";

		arsort($single_word_count);
		echo "<pre style='float:left; width:48%;'>SINGLE WORD COUNT\n"; print_r($single_word_count); echo "</pre>";
		arsort($double_word_count);
		echo "<pre style='float:right; width:48%;'>DOUBLE WORD COUNT\n"; print_r($double_word_count); echo "</pre>";
		echo "<div style='clear:both;'></div>";
		arsort($triple_word_count);
		echo "<pre style='float:left; width:50%;''>TRIPLE WORD COUNT\n"; print_r($triple_word_count); echo "</pre>";
	}

}

?>
