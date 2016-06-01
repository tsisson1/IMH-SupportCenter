<?

$query = "      SELECT *
		FROM #__content
		WHERE `id` >= 100 AND `id` <= 1000;
";
$db->setQuery($query);
$results = $db->loadObjectList();

foreach($results as $results_k => $results_v)
{
	$total_articles_reviewed++;
	$intro_text = $results_v->title; //$intro_text = $results[0]->introtext;
	// make it lowercase
	$intro_text = strtolower($intro_text);
	// make </h1>Text = </h1> Text
	$intro_text = str_replace(">","> ",$intro_text);
	// remove all html tags
	$intro_text = strip_tags($intro_text);
	// only allow alphanumeric characters
	$intro_text = preg_replace("/[^A-Za-z0-9 ]/", '', $intro_text); // http://stackoverflow.com/questions/659025/removing-non-alphanumeric-characters-with-php
	// make sure each word is only separated by 1 space
	while( substr_count($intro_text,"  ") > 0 )
		$intro_text = str_replace("  "," ",$intro_text);
	// explode by " "
	$exploded_intro_text = explode(" ",$intro_text); // echo "<pre>"; print_r($exploded_intro_text); echo "</pre>";
	// grab word count by word
	foreach($exploded_intro_text as $k => $word)
		$total_word_count[$word]++;
	asort($total_word_count);
}

echo "	<h1>Results</h1>
	<h2>Total articles reviewed: $total_articles_reviewed</h2>
	<h2>WordCount:</h2>
		<pre>"; print_r($total_word_count); echo "</pre>
";



?>
