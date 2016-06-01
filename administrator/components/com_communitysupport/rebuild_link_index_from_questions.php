<?

// grab all articles contain a link to another article
$db = JFactory::getDbo();

// clear the database
$query = "DELETE FROM #__search_content_items WHERE `type` = 'answer_anchor_text';";
$db->setQuery($query);
try { echo "<p>deleting 'answer_anchor_text index...</p>"; $result = $db->execute(); } catch (Exception $e) { echo "<h1>ERROR!!!!</h1>"; }


$query = "SELECT * FROM #__answers WHERE `answer` LIKE '%<a%';";
$db->setQuery($query);
$results = $db->loadObjectList();

if( ! $results )
	echo "<h1>Problem, no answers found!</h1>";
else
{
	foreach( $results as $k => $v )
	{
		$doc = new DOMDocument();
                @$doc->loadHTML($v->answer);

		$links = $doc->getElementsByTagName('a');
                for ($i = 0; $i < $links->length; $i++)
                {
                        $link = $links->item($i);
                        $ahref = $link->getAttribute('href');
                        $anchor_text  = $link->nodeValue;

			// if this link goes to an inmotionhosting url
			if( strpos($ahref,"http://www.inmotionhosting.com/support/") === 0 OR strpos($ahref,"/support/") === 0 )
			{
				// clean up url and remove everything after # and ?
				$clean_url = $ahref;
				if( substr_count($ahref,"#") > 0)
					$clean_url = substr($clean_url, 0, strpos($clean_url, "#"));
				if( substr_count($ahref,"?") > 0)
					$clean_url = substr($clean_url, 0, strpos($clean_url, "?"));

				// get the last two parts of the url
				$exploded_url = explode("/",$clean_url);
				$article_alias = $exploded_url[count($exploded_url)-1];
				$category_alias = $exploded_url[count($exploded_url)-2];

				// grab the article title and id
				$query = "
SELECT `content`.`id`,`content`.`title`,`content`.`alias`,`content`.`hits`
FROM #__content as `content`, #__categories as `category`
WHERE	`content`.`alias` = '$article_alias' AND
	`category`.`path` LIKE '%/$category_alias' AND
	`category`.`extension` = 'com_content' AND
	`content`.`catid` = `category`.`id`;
";
				$db->setQuery($query);
				$article_by_id = $db->loadObjectList();

				if($article_by_id)
				{
					echo "<h1>$anchor_text</h1>";
					echo "<pre>"; print_r($article_by_id); echo "</pre>";

					 $query = "INSERT INTO #__search_content_items (`id` ,`type` ,`article_id` ,`description` ,`hits`)VALUES (NULL , 'answer_anchor_text', '" . $article_by_id[0]->id . "', '" . addslashes($anchor_text) . "', '" . $article_by_id[0]->hits . "');";
                                $db->setQuery($query);
                                try { echo "<p>running query...</p>"; $result = $db->execute(); } catch (Exception $e) { echo "<h1>ERROR!!!!</h1>"; }
				}
			}
		}
	}
}






?>
