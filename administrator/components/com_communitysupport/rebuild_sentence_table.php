<h1>Rebuild sentences table</h1>

<p>This script runs through all the content in the database and breaks it down by sentence. Each sentence will become a row in the #__site_sentences table.</p>

<p class='alert alert-warning'>This script is intensive. IE don't run it in the middle of the day.</p>

<form method='post'>
	<input type='hidden' name='task_a' id='task_a' value='run' />
	<input type='submit' class='btn btn-primary' value='Run Script' />
</form>






<?

if( $_POST['task_a'] == "run" )
	run_rebuild_sentences($db);






function run_rebuild_sentences($db)
{
	drop_sentences_table($db);

	grab_sentences_from_articles($db);

	echo "<p class='alert alert-success'>Done. Sentences table has been updated.</p>";
}






function drop_sentences_table($db)
{
	$query = "DELETE FROM #__site_sentences WHERE `id` >= 0;";
	$db->setQuery($query);
	$result = $db->execute();
	echo "<p class='alert alert-success'>All current sentences have been dropped.</p>";
}






function grab_sentences_from_articles($db)
{
	$query = "SELECT `id`, `introtext` FROM #__content;";
	$db->setQuery($query);
	$introtext = $db->loadObjectList();

	foreach($introtext as $k => $v)
	{
		$sentences = pass_string_return_array_of_sentences($v->introtext);
		pass_sentence_array_insert_into_sentences_table($db,$sentences,"com_content","article",$v->id);
	}
}






function pass_string_return_array_of_sentences($text)
{
	$text = strip_tags($text,"<a>");
        $text = str_replace("\r","",$text);
        $text = str_replace("\n","\t",$text);
        while(substr_count($text,"\t\t") > 0 )
                $text = str_replace("\t\t","\t",$text);
        $text = str_replace("\t",". ",$text);
        // http://stackoverflow.com/questions/16377437/split-a-text-into-sentences
	return preg_split('/(?<=[.?!])\s+(?=[a-z])/i', $text);
}






function pass_sentence_array_insert_into_sentences_table($db,$sentences,$option,$view,$option_view_id)
{
	foreach($sentences as $k => $v)
	{
		if( substr_count($v," ") >= 4)
		{
			$query = "	INSERT INTO #__site_sentences
					(`id`,`option`,`view`,`option_view_id`,`sentence`,`sentence_no_html`)
					VALUES (NULL,'$option','$view',$option_view_id,'" . addslashes($v) . "','" . addslashes(strip_tags($v)) . "');
			";
			$db->setQuery($query);
		        $result = $db->execute();
		}
	}
}






?>
