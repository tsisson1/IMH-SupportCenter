<?


echo "	<h1>Articles with no internal links <u>TO</u> them.</h1>";


// grab all articles that are published
$query = "SELECT `id`,`title`,`alias` FROM #__content WHERE `state` = 1;";
$db->setQuery($query);
$all_published_articles = $db->loadObjectList();
echo "<pre>"; print_r($all_published_articles); echo "</pre>";



?>
