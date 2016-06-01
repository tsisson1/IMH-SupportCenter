<?

$qareas['answer_comments'] = 'comment';
$qareas['comments'] = 'comment';
$qareas['question_to_question'] = 'question';
$qareas['question_updates'] = 'update';

echo "<pre>"; print_r($qareas); echo "</pre>";

foreach($qareas as $table => $field)
{
	$query = "	SELECT `$field`, count(`$field`) as 'comment_count'
			FROM #__$table
			GROUP BY `$field`
	";
	echo "<pre>$query</pre>";
	$db->setQuery($query);
	$results = $db->loadObjectList();
	if($results)
	{
		foreach($results as $k => $v)
		{
			if($v->comment_count > 1)
			{
				echo "<pre>"; print_r($v); echo "</pre>";
				$delete_limit = $v->comment_count - 1;

				$query = "DELETE FROM #__$table WHERE `$field` = '" . addslashes($v->$field) . "' LIMIT $delete_limit;";
				echo "<pre>$query</pre>";
				$db->setQuery($query);
				$result = $db->execute();
			}
		}
	}
}


?>
