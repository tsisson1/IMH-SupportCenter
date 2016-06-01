<?






$query = "SELECT * FROM #__answers WHERE `answer` LIKE '%index.php?option=com_content&amp;view=article&amp;id%';";
$db->setQuery($query);
$results = $db->loadObjectList();

if( ! $results )
        echo "<h1>Problem, no answers found!</h1>";
else
{
        foreach( $results as $k => $v )
        {
                // grab all articles contain a link to another article
                $doc = new DOMDocument();
                @$doc->loadHTML($v->answer);

                $links = $doc->getElementsByTagName('a');
                for ($i = 0; $i < $links->length; $i++)
                {
                        $link = $links->item($i);
                        $ahref = $link->getAttribute('href');
                        $anchor_text  = $link->nodeValue;

                        if( substr_count($ahref,"index.php?option=com_content") > 0 AND substr_count($ahref,"view=article") > 0
                        )
                        {
                                $cleaned_ahref = str_replace("&amp;","&",$ahref);

				parse_str($cleaned_ahref,$url_vars);

				if( $url_vars['Itemid'] != 101 )
				{
					echo "<pre>"; print_r($url_vars); echo "</pre>";

					// at this point, we need the alias of the article
					$article_alias = explode(":",$url_vars['id']);
					$article_alias = $article_alias[1];

					$query = "
SELECT `content`.`id`, `categories`.`id` as 'catid', `categories`.`path`
FROM #__content as `content`, #__categories as `categories`
WHERE	`content`.`state` = 1 AND
	`content`.`alias` = '$article_alias' AND
	`content`.`catid` = `categories`.`id`
					";
					$db->setQuery($query);
					$new_link_data = $db->loadObjectList();

					if($new_link_data)
					{
						echo "<pre>"; print_r($new_link_data); echo "</pre>";

						$category_alias = explode("/",$new_link_data[0]->path);
						$category_alias = $category_alias[ count($category_alias) - 1];

						$new_link = "index.php?option=com_content&amp;view=article&amp;id=" . $new_link_data[0]->id . ":$article_alias&amp;catid=" . $new_link_data[0]->catid . "&amp;Itemid=101";
						echo "<pre>
							$new_link
							$ahref
							</pre>
						";

						$cleaned_ahref = str_replace("&","&amp;",$cleaned_ahref);
						$new_link = str_replace("&","&amp;",$new_link);

						$query = "update #__answers set `answer` = replace(`answer`,'$cleaned_ahref','$new_link') WHERE `id` = " . $v->id . ";";
						echo "<pre>$query</pre>";
						//execute db object
						$db->setQuery($query);
						try { $result_fix = $db->execute(); } catch (Exception $e) { print_r($e); }
					}
				}
                        }
                }
        }
}



?>
