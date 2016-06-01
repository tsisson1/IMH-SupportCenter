<?

die("this script only needs to be ran once, it has already been ran.");

$query = "SELECT * FROM #__search_unexpected_query;";
$db->setQuery($query);
$results = $db->loadObjectList();

foreach($results as $k => $v)
{
	// echo "<pre>"; print_r($v); echo "</pre>";
	
	// grab the article id
	$exploded_url = explode("/",$v->url);
	$last_alias = $exploded_url[count($exploded_url)-1];
	$query = "SELECT `id` FROM #__content WHERE `alias` = '" . addslashes($last_alias) . "' LIMIT 1;";
	$db->setQuery($query);
	$article_id = $db->loadResult();
	
	// if we found an article id
	if($article_id)
	{
		
		$query = "
		INSERT INTO #__cse_promotions
		(`id`,`option_view_id`,`phrase`,`title`,`description`,`epc`)
		VALUES
		(NULL,'com_content___article___" . $article_id . "','" . addslashes($v->query) . "','" . addslashes($v->title) . "','" . addslashes($v->description) . "',1)
		";
		$db->setQuery($query);
		$db->execute();
	}
	else
	{
		echo "<h1>Fail</h1>";
		echo "<pre>"; print_r($v); echo "</pre>";
	}

}

?>