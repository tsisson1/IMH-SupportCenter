<?

// grab all articles contain a link to another article
$db = JFactory::getDbo();

// clear the database
$query = "DELETE FROM #__search_content_items WHERE `type` = 'article_anchor_text';";
$db->setQuery($query);
try { echo "<p>deleting 'article_anchor_text index...</p>"; $result = $db->execute(); } catch (Exception $e) { echo "<h1>ERROR!!!!</h1>"; }


// $query = "SELECT * FROM #__content WHERE `introtext` LIKE '%index.php?option=com_content&amp;view=article&amp;id%';";
$query = "	SELECT *
		FROM #__content
		WHERE	(`introtext` LIKE '%index.php?option=com_content&amp;view=article&amp;id%') OR
			(`introtext` LIKE '%index.php?option=com_content&view=article&id%')
		;
";
$db->setQuery($query);
$results = $db->loadObjectList();

if( ! $results )
	echo "<h1>Problem, no articles found!</h1>";
else
{
	foreach( $results as $k => $v )
	{
		// grab all articles contain a link to another article
		$doc = new DOMDocument();
		@$doc->loadHTML($v->introtext);

		$hits = $v->hits;

		$links = $doc->getElementsByTagName('a');
		for ($i = 0; $i < $links->length; $i++)
		{
		        $link = $links->item($i);
		        $ahref = $link->getAttribute('href');
		        $anchor_text  = $link->nodeValue;

			if(
				substr_count($ahref,"index.php?option=com_content") > 0 AND
				substr_count($ahref,"view=article") > 0
			)
			{
				$cleaned_ahref = str_replace("&amp;","&",$ahref);

				// get the article id
				$exploded_ahref = explode("&",$cleaned_ahref);
				$dirty_id = str_replace("id=","",$exploded_ahref[2]);
				$exploded_dirty = explode(":",$dirty_id);
				$article_id = $exploded_dirty[0];

				$query = "INSERT INTO #__search_content_items (`id` ,`type` ,`article_id` ,`description` ,`hits`)VALUES (NULL , 'article_anchor_text', '$article_id', '" . addslashes($anchor_text) . "', '$hits');";
				$db->setQuery($query);
				try { echo "<p>running query...</p>"; $result = $db->execute(); } catch (Exception $e) { echo "<h1>ERROR!!!!</h1>"; }
			}
		}
	}
}






?>
