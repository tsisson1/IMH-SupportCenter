<?

$document = JFactory::getDocument();
$document->setMetaData('robots','noindex,follow');
$user =& JFactory::getUser();
$db = JFactory::getDbo();






// ***************************************************************************************
// if we're searching to see if we already have documentation for a question...
// ***************************************************************************************
if( $user->groups[8] == 8 AND is_numeric($_GET['qid']) )
{
	$query = "
		UPDATE #__question_admin_tools
		SET `staff_search` = '" . addslashes($_GET['searchword']) . "'
		WHERE `question_id` = " . $_GET['qid'] . " LIMIT 1
	";
	$db->setQuery($query);
	show_query_for_debug($query);
	$result = $db->query();
}






// ***************************************************************************************
// prep the search words
// ***************************************************************************************
$_GET['searchword'] = htmlspecialchars($_GET['searchword']);
$original_searchword = strtolower($_GET['searchword']);
$searchword = clean_up_searchword();
$searchword_count = substr_count(trim($searchword)," ") + 1;
// if there are 10 or fewer words, loop through them all and look for synoyms
if ($searchword_count <= 10)
	$search_phrases = add_synonyms($searchword);
$_GET['details'] = strtolower($_GET['details']);





// ***************************************************************************************
// deal with unexpected text
// ***************************************************************************************
$unexpected_text = array($original_searchword,$_GET['details']);
foreach($unexpected_text as $unexpected_text_key => $unexpected_text_text)
{
	if($unexpected_text_text)
	{
		$unexpected_result_scores = unexpected_query($unexpected_text_text);
		if($unexpected_result_scores)
		{
			foreach($unexpected_result_scores as $k => $v)
			{
				$result_scores[$k] = $v['score'];
				$result_title[$k] = $v['title'];
				$result_description[$k] = $v['description'];
			}
		}
	}
}






if($_GET['rf'] != "json")
{
        echo "  <div class='item-page'>";
        print_heading($original_searchword,$searchword,$search_phrases);
}

// only permform a search if the user has submitted a search string or the "unexpected text" feature returned some results
if( ! empty($original_searchword) OR count($result_scores)>0 )
{
	$number_of_results = search_and_print_results(1,$searchword,$search_phrases,$result_scores,$result_title,$result_description);

	if($number_of_results === 0)
	{
		$hail_mary = grab_hail_mary_words($original_searchword);
		if($hail_mary)
			$number_of_results = search_and_print_results(2,$hail_mary,null,$result_scores,$result_title,$result_description);
	}
	if($number_of_results === 0)
        {
                $hail_mary = grab_hail_mary_words($_GET['details']);
                if($hail_mary)
                        $number_of_results = search_and_print_results(2,$hail_mary,null,$result_scores,$result_title,$result_description);
        }

	if( $number_of_results === 0 AND $_GET['rf'] != "json" )
	{
		$corrected_misspellings = check_for_misspellings();
	}
}



// after all efforts, if we have no search results...
if( $number_of_results === 0 )
{
	if($_GET['rf'] != "json")
	{
        	echo "
			<div>No search results, but we can still help - <a href='/support/community-support/ask-a-question'>ask us a question</a>!</div>
			<script type=\"text/javascript\">
				_gaq.push(['_setAccount', 'UA-1501988-1']);
				_gaq.push(['_trackEvent', 'community support', 'no search results', '" . addslashes($_GET['searchword']) . "']);
			</script>
		";
		// log which term got no search results
		// disabling this tool as of 2013.12.19 - get's too much spam
		/*
		if(	$user->groups[8] != 8 AND
			$_SERVER['HTTP_X_FORWARDED_FOR'] != '161.69.30.148' AND
			$_SERVER['HTTP_X_FORWARDED_FOR'] != '161.69.46.158' AND
			$_SERVER['HTTP_X_FORWARDED_FOR'] != '161.69.30.157' AND
			$_SERVER['HTTP_X_FORWARDED_FOR'] != '161.69.14.157' AND
			$_SERVER['HTTP_X_FORWARDED_FOR'] != '161.69.30.142' AND
			$_SERVER['HTTP_X_FORWARDED_FOR'] != '161.69.30.138' AND
			$_SERVER['HTTP_X_FORWARDED_FOR'] != '161.69.30.146' AND
			$_SERVER['HTTP_X_FORWARDED_FOR'] != '161.69.30.152'
		)
		{
			$query = "INSERT INTO #__no_search_results (`id`,`terms`,`status`,`timestamp`,`user_ip`) VALUES (NULL,'" . addslashes($_GET['searchword']) . "',0,CURRENT_TIMESTAMP,'" . $_SERVER['HTTP_X_FORWARDED_FOR'] . "');";
			$db->setQuery($query);
	        	$result = $db->query();
		}
		*/
	}
	else
	{
		echo "0";
		die();
	}
}



if($_GET['rf'] != "json")
{
	// grab search phrases who's status = 0
	// load_no_search_results_tool();

	echo "	</div>"; // close the page's div
}












function load_no_search_results_tool()
{
	$user =& JFactory::getUser();
	if( $user->groups[8] == 8 )
	{
		$db = JFactory::getDbo();

		if( $_POST['no_results_action'] )
		{
			$no_result_action = -1;
			if( $_POST['no_results_action'] == "algo updated" )
				$no_result_action = 1;
			if( $_POST['no_results_action'] == "spelling" )
				$no_result_action = -2;
			$query = "UPDATE #__no_search_results SET `status` = $no_result_action WHERE `id` = " . $_POST['no_result_id'] . ";";
			$db->setQuery($query);
			show_query_for_debug($query);
	                $result = $db->query();
		}

		$query = "SELECT * FROM #__no_search_results WHERE `status` = 0;";
	        $db->setQuery($query);
		show_query_for_debug($query);
        	$results = $db->loadObjectList();

		echo "<div style='margin:100px 0px 20px 0px; background:#ddd; border:1px solid #bbb; padding:2px;'>Admin Tools</div>";
		foreach($results as $k => $v)
		{
			echo "
				<form style='border:1px solid #bbb; background:#ddd; padding:5px; margin:2px;' method='post'>
					" . htmlspecialchars($v->terms,ENT_QUOTES) . "
					<input type='submit' name='no_results_action' id='no_results_action' value='algo updated' style='background:#E5FFE5;' />
					<input type='submit' name='no_results_action' id='no_results_action' value='no update' style='background:#FFDBDB;' />
					<input type='submit' name='no_results_action' id='no_results_action' value='spelling' style='background:#FFDBDB;' />
					<input type='hidden' name='no_result_id' id='no_result_id' value='" . $v->id . "' />
				</form>
			";
		}
	}
}












// ------------------------------------------------------------------------------------
// this is dirty, needs to be cleaned up later. There are two identical functions below
// ------------------------------------------------------------------------------------
function clean_up_searchword()
{
	// get the search word
	$searchword = $_GET['searchword'];
	$searchword = trim($searchword);
	// 2013.08.06 fix searches ending with ?
	$searchword = trim($searchword,"?");
	$searchword = str_replace("&quot;","",$searchword);
	$searchword = strtolower($searchword);
	// 406 mod security fixes
	$searchword = str_replace("httpdconf","httpd.conf",$searchword);
	// take out blocked words
	$blocked_words = array("-","afraid","am","and","be","but","can","do","for","from","have","help","how","i","instead","is","it","just","know","like","may","my","need","not","of","on","once","started","that","the","to","via","want","what","where","with","would");
	foreach($blocked_words as $bw_k => $bw_v)
	{
        	// does the string start with word_?
	        if( substr($searchword,0,(strlen($bw_v)+1)) == $bw_v . " " )
        	        $searchword = substr($searchword,(strlen($bw_v)+1));
	        // does the string end with _word?
        	if( substr($searchword,(-1*(strlen($bw_v)+1))) == " " . $bw_v)
                	$searchword = substr($searchword,0, (strlen($searchword)-(strlen($bw_v)+1)));
	        // does the string include it?
        	$searchword = str_replace(" " . $bw_v . " "," ",$searchword);
	}
	$searchword = addslashes(htmlspecialchars($searchword));
	return $searchword;
}
function pass_searchword_clean_up_searchword($searchword)
{
        // get the search word
        $searchword = trim($searchword);
        // 2013.08.06 fix searches ending with ?
        $searchword = trim($searchword,"?");
        $searchword = strtolower($searchword);
        // 406 mod security fixes
        $searchword = str_replace("httpdconf","httpd.conf",$searchword);
        // take out blocked words
        $blocked_words = array("-","afraid","am","and","be","but","can","do","for","from","have","help","how","i","instead","is","it","just","know","like","may","my","need","not","of","on","once","started","that","the","to","via","want","what","where","with","would");
        foreach($blocked_words as $bw_k => $bw_v)
        {
                // does the string start with word_?
                if( substr($searchword,0,(strlen($bw_v)+1)) == $bw_v . " " )
                        $searchword = substr($searchword,(strlen($bw_v)+1));
                // does the string end with _word?
                if( substr($searchword,(-1*(strlen($bw_v)+1))) == " " . $bw_v)
                        $searchword = substr($searchword,0, (strlen($searchword)-(strlen($bw_v)+1)));
                // does the string include it?
                $searchword = str_replace(" " . $bw_v . " "," ",$searchword);
        }
        $searchword = addslashes(htmlspecialchars($searchword));
        return $searchword;
}











function add_synonyms($searchword)
{
	$db = JFactory::getDbo();
	$exploded_searchword = explode(" ",$searchword);
	$x = 0;
	foreach($exploded_searchword as $k => $v)
	{
		// see if there are synonyms
		$query = "SELECT * FROM #__search_synonyms WHERE `data` LIKE '%=$v=%';";
		$db->setQuery($query);
		show_query_for_debug($query);
		$results = $db->loadObjectList();
		if($results)
		{
			$exploded_synonyms = explode("=",$results[0]->data);
				unset($exploded_synonyms[ count($exploded_synonyms) - 1]);
				unset($exploded_synonyms[0]);

			foreach($exploded_synonyms as $es_key => $synonym)
			{
				$tmp_exploded_searchword = $exploded_searchword;
				$tmp_exploded_searchword[$x] = $synonym;
				$search_phrases[] = implode(" ",$tmp_exploded_searchword);
			}
		}
		$x++;
	}
	if($_GET['tell_me_why'] == 1)
	{
			echo "
				<h3 style='color:red;'>Searchword / Synonym Search Phrases</h3>
				<pre style='margin-bottom:20px; color:red;'>$searchword</pre>
				<pre style='margin-bottom:20px; color:red;'>"; print_r($search_phrases); echo "</pre>
			";
	}
	return $search_phrases;
}









function print_heading($original_searchword,$searchword,$search_phrases)
{
	if( $_GET['searchword'] )
	{
		if( $_GET['mssearchword'] )
		{
			echo "
				<div class='page-header'>
					<h1 style='font-weight:normal; color:#aaa;'>
						<div style='float:left; width:30px; color:red;'>X</div>
						Sorry, we couldn't find any results.
						<div style='font-size:16px;'>Did you misspell something here?</div>
					</h1>
					<div style='font-size:15px; color:#aaa;'><em>" . htmlspecialchars($_GET['mssearchword'],ENT_QUOTES) . "</em></div>
					<h1 style='font-weight:normal; color:#000;'>
						<div style='float:left; color:#78C421; width:30px;'>&#10004;</div>
						Searching instead for:
					</h1>
					<div style='font-size:15px;'>" . stripslashes($original_searchword) . "</div>
                                </div>
				<script type=\"text/javascript\">
                	                _gaq.push(['_setAccount', 'UA-1501988-1']);
        	                        _gaq.push(['_trackEvent', 'community support', 'misspelling redirect', '" . addslashes($_GET['mssearchword']) . "']);
	                        </script>
			";
		}
		else
		{
			echo "
				<div class='page-header'>
					<h1>Search results for:</h1>
					<h1 style='font-weight:normal; color:#aaa;'>" . stripslashes($original_searchword) . "</h1>
				</div>
			";
		}
		echo "
			<form method='get' action='/support/search' >
				<input type='text' name='searchword' id='mod-search-searchword' value=\"" . stripslashes($original_searchword) . "\" style='width:500px;' />
				<button class='button btn btn-info' onclick='this.form.searchword.focus();' style='display:inline-block; width:80px; border-radius:3px; height:32px; line-height:22px; margin:0px;'>Search</button>
			</form>
		";
	}
	else
	{
		echo "
			<form method='get' action='/support/search' >
				<input type='text' name='searchword' id='mod-search-searchword' style='width:500px;' />
				<button class='button btn btn-info' onclick='this.form.searchword.focus();' style='display:inline-block; width:80px; border-radius:3px; height:32px; line-height:22px; margin:0px;'>Search</button>
			</form>
		";
	}
}












function search_and_print_results($run_number,$searchword,$search_phrases,$result_scores,$result_title,$result_description)
{
	$db = JFactory::getDbo();
	$searchword_count = substr_count(trim($searchword), " ") + 1;

	$searchword_word_count = $searchword_count;
	$searchword_word_count_max = 10;
	$searchword_character_count = strlen(trim($searchword));
	$searchword_character_count_max = 20;

	// echo "<pre>"; print_r($searchword); echo "</pre>";
	// echo "<pre>"; print_r($search_phrases); echo "</pre>";


	// // debugging info
	/*
	echo "<div>run number = $run_number</div>";
	echo "<div>searchword = $searchword</div>";
	echo "<div>search_phrases</div>";
	echo "<pre>"; print_r($search_phrases); echo "</pre>";
	*/




	// --------------------------------------------------------------------------------------------
	// point system
	// --------------------------------------------------------------------------------------------
	$points_anchor_exact = 12;
	$points_anchor_all = 10;
	$points_article_exact = 8;
	$points_article_all = 4;
	$points_question_exact = 6;
	$points_question_all = 2;

	if($_GET['tell_me_why'] == 1)
	{
		echo "
			<h3 style='color:red;'>Point System</h3>
			<ul style='color:red;'>
				<li>anchor exact = $points_anchor_exact</li>
				<li>anchor all = $points_anchor_all</li>
				<li>article exact = $points_article_exact</li>
				<li>article all = $points_article_all</li>
				<li>question exact = $points_question_exact</li>
				<li>question all = $points_question_all</li>
			</ul>
		";
	}






	// --------------------------------------------------------------------------------------------
        // EXACT MATCHES WITHIN ANCHOR TEXT INDEX
        // --------------------------------------------------------------------------------------------
	if ($searchword_character_count <= $searchword_character_count_max)
	{
		if( count($search_phrases) >= 1)
        	{
			$tell_me_why_hint = $search_phrases;
	                $imploded_search_phrases_description_exact = implode("%' OR `sci`.`description` LIKE '%",$search_phrases);
        	        $imploded_search_phrases_description_exact = "`sci`.`description` LIKE '%" . $imploded_search_phrases_description_exact . "%'";
		}
		else
		{
			$tell_me_why_hint = $searchword;
			$imploded_search_phrases_description_exact = "`sci`.`description` LIKE '%$searchword%'";
		}

		$query = "
SELECT `content`.`metadesc`, `content`.`catid`, `content`.`alias`, `content`.`title`, `content`.`state`, `sci`.*
FROM	#__search_content_items as `sci`,
	#__content as `content`
WHERE	`content`.`id` = `sci`.`article_id` AND
	($imploded_search_phrases_description_exact) AND (`sci`.`type` = 'article_anchor_text' OR `sci`.`type` = 'answer_anchor_text') ORDER BY LENGTH(`sci`.`description`)
LIMIT 20;
		";
		$db->setQuery($query);
		show_query_for_debug($query);
		$results = $db->loadObjectList();
		if($results)
		{
			foreach($results as $k => $v)
			{
				if($v->state == 1)
				{
					$anchor_text_article_id_results[] = $v->article_id;
					$article_link = JRoute::_(ContentHelperRoute::getArticleRoute($v->article_id . "-" . $v->alias, $v->catid));

					$result_scores[$article_link] += $points_anchor_exact;
					$result_description[$article_link] = $v->metadesc;
					$result_title[$article_link] = $v->title;

					if($v->type == "article_anchor_text")
						$result_reason_for_score[$article_link] .= "<br />-exact anchor within an article: <span style='color:green;'>$tell_me_why_hint</span>-";
					if($v->type == "answer_anchor_text")
        	                                $result_reason_for_score[$article_link] .= "<br />-exact anchor within an answer: <span style='color:green;'>$tell_me_why_hint</span>-";
				}
			}
		}
	}






	// --------------------------------------------------------------------------------------------
        // ALL WORD MATCHES WITHIN ANCHOR TEXT INDEX
        // --------------------------------------------------------------------------------------------
	if ($searchword_word_count <= $searchword_word_count_max)
	{
		if( $searchword_count > 1)
		{
			if( count($search_phrases) >= 1)
	        	{
        	        	foreach($search_phrases as $k => $v)
	        	        {
					$tell_me_why_hint = $v;
        	                	$exploded_search_phrase = explode(" ",$v);

	                	        $imploded_search_phrases_description_allwords = implode("%' AND `description` LIKE '%",$exploded_search_phrase);
        	                	$imploded_search_phrases_description_allwords_array[] = "(`description` LIKE '%" . $imploded_search_phrases_description_allwords . "%')";
				}
				$description_allwords = implode(" OR ",$imploded_search_phrases_description_allwords_array);
			}
			else
			{
				$tell_me_why_hint = $searchword;
				$exploded_search_phrase = explode(" ",$searchword);

                		$imploded_search_phrases_description_allwords = implode("%' AND `description` LIKE '%",$exploded_search_phrase);
		                $description_allwords  = "(`description` LIKE '%" . $imploded_search_phrases_description_allwords . "%')";
			}

			$not_in = "";
	        	if( count($anchor_text_article_id_results) > 0 )
	                	$not_in = " AND (`sci`.`article_id` NOT IN(" . implode(",",$anchor_text_article_id_results) . "))";
			$not_in = "";

			$query = "
SELECT `content`.`catid`, `content`.`alias`, `content`.`title`, `content`.`metadesc`, `content`.`state`, `sci`.*
FROM #__search_content_items as `sci`, #__content as `content`
WHERE	`content`.`id` = `sci`.`article_id` AND
	($description_allwords) AND
	(`sci`.`type` = 'article_anchor_text' OR `sci`.`type` = 'answer_anchor_text')
	$not_in
ORDER BY LENGTH(`sci`.`description`)
LIMIT 20;
		";
		        $db->setQuery($query);
			show_query_for_debug($query);
        		$results = $db->loadObjectList();

		        if($results)
        		{
        		        foreach($results as $k => $v)
                		{
					if($v->state == 1)
					{
	        	                	$article_link = JRoute::_(ContentHelperRoute::getArticleRoute($v->article_id . "-" . $v->alias, $v->catid));

						$result_scores[$article_link] += $points_anchor_all;
	        	        	        $result_description[$article_link] = $v->metadesc;
        	        	        	$result_title[$article_link] = $v->title;
						$result_reason_for_score[$article_link] .= "<br />-all anchor <span style='color:green;'>$tell_me_why_hint</span>-";
					}
        		        }
	        	}
		}
	}






	// --------------------------------------------------------------------------------------------
	// EXACT MATCHES WITH ARTICLES
	// --------------------------------------------------------------------------------------------
	if ($searchword_character_count <= $searchword_character_count_max)
	{
		if( count($search_phrases) >= 1)
		{
			$tell_me_why_hint = $search_phrases;
			$imploded_search_phrases_title_exact = implode("%' OR `title` LIKE '%",$search_phrases);
			$imploded_search_phrases_title_exact = "`title` LIKE '%" . $imploded_search_phrases_title_exact . "%'";

			$imploded_search_phrases_introtext_exact = implode("%' OR `introtext` LIKE '%",$search_phrases);
		        $imploded_search_phrases_introtext_exact = "`introtext` LIKE '%" . $imploded_search_phrases_introtext_exact . "%'";

			$imploded_search_phrases_metadesc_exact = implode("%' OR `metadesc` LIKE '%",$search_phrases);
        		$imploded_search_phrases_metadesc_exact = "`metadesc` LIKE '%" . $imploded_search_phrases_metadesc_exact . "%'";

			/*
			$imploded_search_phrases_metakey_exact = implode("%' OR `metakey` LIKE '%",$search_phrases);
			$imploded_search_phrases_metakey_exact = "`metakey` LIKE '%" . $imploded_search_phrases_metakey_exact . "%'";
			*/
		}
		else
		{
			$tell_me_why_hint = $searchword;
			$imploded_search_phrases_title_exact = "`title` LIKE '%$searchword%'";
			$imploded_search_phrases_introtext_exact = "`introtext` LIKE '%$searchword%'";
			$imploded_search_phrases_metadesc_exact = "`metadesc` LIKE '%$searchword%'";
			// $imploded_search_phrases_metakey_exact = "`metakey` LIKE '%$searchword%'";
		}


		// ARTICLES - EXACT MATCH

		$limit = 5;
		if( $searchword_count == 1)
			$limit = 10;
		$limit = 20;

		$query = "
SELECT `id`,`title`,`alias`,`catid`,`metadesc`
FROM #__content
WHERE	(
		($imploded_search_phrases_title_exact) OR
		($imploded_search_phrases_introtext_exact) OR
		($imploded_search_phrases_metadesc_exact)
	) AND
	`state` = 1
ORDER BY `hits` DESC
LIMIT $limit;
	";
		$db->setQuery($query);
		show_query_for_debug($query);
		$results = $db->loadObjectList();
		$exact_matches = 0;
		if($results)
		{
			foreach($results as $k => $v)
			{
				$title = $v->title;
				$link = JRoute::_(ContentHelperRoute::getArticleRoute($v->id . "-" . $v->alias, $v->catid));
				$description = $v->metadesc;

				$article_id_results[] = $v->id;

				$exact_matches++;

				$result_scores[$link] += $points_article_exact;
        	                $result_description[$link] = $description;
                	        $result_title[$link] = $title;
				$result_reason_for_score[$link] .= "<br />-exact article <span style='color:green;'>$tell_me_why_hint</span>-";
			}
		}
	}






	// --------------------------------------------------------------------------------------------
	// ALL WORDS - ARTICLES
	// --------------------------------------------------------------------------------------------
	if ($searchword_word_count <= $searchword_word_count_max)
	{
		if( $searchword_count > 1 )
		{
			if( count($search_phrases) >= 1)
			{
				$tell_me_why_hint = $search_phrases;
				foreach($search_phrases as $k => $v)
				{
					$exploded_search_phrase = explode(" ",$v);

					$imploded_search_phrases_title_allwords = implode("%' AND `title` LIKE '%",$exploded_search_phrase);
		                	$imploded_search_phrases_title_allwords_array[] = "(`title` LIKE '%" . $imploded_search_phrases_title_allwords . "%')";

					$imploded_search_phrases_introtext_allwords = implode("%' AND `introtext` LIKE '%",$exploded_search_phrase);
        	        	        $imploded_search_phrases_introtext_allwords_array[] = "(`introtext` LIKE '%" . $imploded_search_phrases_introtext_allwords . "%')";

					$imploded_search_phrases_metadesc_allwords = implode("%' AND `metadesc` LIKE '%",$exploded_search_phrase);
        	                	$imploded_search_phrases_metadesc_allwords_array[] = "(`metadesc` LIKE '%" . $imploded_search_phrases_metadesc_allwords . "%')";

					$imploded_search_phrases_metakey_allwords = implode("%' AND `metakey` LIKE '%",$exploded_search_phrase);
        	        	        $imploded_search_phrases_metakey_allwords_array[] = "(`metakey` LIKE '%" . $imploded_search_phrases_metakey_allwords . "%')";
				}

				$title_allwords = implode(" OR ",$imploded_search_phrases_title_allwords_array);
				$introtext_allwords = implode(" OR ",$imploded_search_phrases_introtext_allwords_array);
				$metadesc_allwords = implode(" OR ",$imploded_search_phrases_metadesc_allwords_array);
				$metakey_allwords = implode(" OR ",$imploded_search_phrases_metakey_allwords_array);
			}
			else
			{
				$tell_me_why_hint = $searchword;
				$exploded_search_phrase = explode(" ",$searchword);

                		$imploded_search_phrases_title_allwords = implode("%' AND `title` LIKE '%",$exploded_search_phrase);
		                $title_allwords  = "(`title` LIKE '%" . $imploded_search_phrases_title_allwords . "%')";

        		        $imploded_search_phrases_introtext_allwords = implode("%' AND `introtext` LIKE '%",$exploded_search_phrase);
                		$introtext_allwords = "(`introtext` LIKE '%" . $imploded_search_phrases_introtext_allwords . "%')";

		                $imploded_search_phrases_metadesc_allwords = implode("%' AND `metadesc` LIKE '%",$exploded_search_phrase);
        		        $metadesc_allwords = "(`metadesc` LIKE '%" . $imploded_search_phrases_metadesc_allwords . "%')";

	        	        $imploded_search_phrases_metakey_allwords = implode("%' AND `metakey` LIKE '%",$exploded_search_phrase);
	        	        $metakey_allwords = "(`metakey` LIKE '%" . $imploded_search_phrases_metakey_allwords . "%')";
			}

			$not_in = "";
			if( count($article_id_results) > 0 )
				$not_in = " AND (`id` NOT IN(" . implode(",",$article_id_results) . "))";
			$not_in = "";

			$limit = 10 - $exact_matches;
			$limit = 20;

			$query = "
SELECT `id`,`title`,`alias`,`catid`,`metadesc`
FROM #__content
WHERE 	(
		($title_allwords OR $introtext_allwords OR $metadesc_allwords OR $metakey_allwords)
	) AND
	`state` = 1
	$not_in
ORDER BY `hits` DESC
LIMIT $limit;
        ";
			$db->setQuery($query);
			show_query_for_debug($query);
	        	$results = $db->loadObjectList();
	        	if($results)
		        {
        		        foreach($results as $k => $v)
	                	{
		                        $title = $v->title;
        		                $link = JRoute::_(ContentHelperRoute::getArticleRoute($v->id . "-" . $v->alias, $v->catid));
	                	        $description = $v->metadesc;

					$result_scores[$link] += $points_article_all;
		                        $result_description[$link] = $description;
        		                $result_title[$link] = $title;
					$result_reason_for_score[$link] .= "<br />-all article <span style='color:green;'>$tell_me_why_hint</span>-";
		                }
		        }
		}
	}





	// -----------------------------------------------------------------------------------------------------------
	// Q&A - EXACT MATCH
	// -----------------------------------------------------------------------------------------------------------
	if ($searchword_character_count <= $searchword_character_count_max)
	{
		if( count($search_phrases) >= 1)
        	{
                	$imploded_search_phrases_question_exact = implode("%' OR `question` LIKE '%",$search_phrases);
	                $imploded_search_phrases_question_exact = "`question` LIKE '%" . $imploded_search_phrases_question_exact . "%'";

        	        $imploded_search_phrases_description_exact = implode("%' OR `description` LIKE '%",$search_phrases);
                	$imploded_search_phrases_description_exact = "`description` LIKE '%" . $imploded_search_phrases_description_exact . "%'";

	                $imploded_search_phrases_all_answers_exact = implode("%' OR `answer` LIKE '%",$search_phrases);
        	        $imploded_search_phrases_all_answers_exact = "`answer` LIKE '%" . $imploded_search_phrases_all_answers_exact . "%'";
	        }
        	else
	        {
        	        $imploded_search_phrases_question_exact = "`question` LIKE '%$searchword%'";
                	$imploded_search_phrases_description_exact = "`description` LIKE '%$searchword%'";
	                $imploded_search_phrases_all_answers_exact = "`answer` LIKE '%$searchword%'";
        	}

		$query = "
SELECT	`question`.`question`,
	`question`.`hits`,
	`question`.`id`,
	`question`.`description`,
	group_concat(`answers`.`answer`)
FROM	#__questions AS `question`,
	#__answers AS `answers`
WHERE	`question`.`id` = `answers`.`question_id` AND
	(
		($imploded_search_phrases_question_exact) OR
		($imploded_search_phrases_description_exact) OR
		($imploded_search_phrases_all_answers_exact)
	)
GROUP BY `question`.`id`
ORDER BY `question`.`hits` DESC
LIMIT 5;
	";
		// // echo "<pre>"; print_r($query); echo "</pre>";
		$db->setQuery($query);
		show_query_for_debug($query);
        	$results = $db->loadObjectList();
		if($results)
		{
			foreach($results as $k => $v)
			{
				$question_url = pass_question_id_return_question_url($v->id);

				$all_words_question_id_results[] = $v->id;

				$result_scores[$question_url] += $points_question_exact;
				if($v->description)
				{
					if( strlen(htmlspecialchars($v->description)) > 120)
		        	                $result_description[$question_url] = htmlspecialchars(substr($v->description, 0, 120)) . "...";
					else
						$result_description[$question_url] = htmlspecialchars($v->description);
				}
				else
					$result_description[$question_url] = "";
        	                $result_title[$question_url] = htmlspecialchars($v->question);
				$result_reason_for_score[$question_url] .= " -exact question- ";
			}
		}
	}






	// -----------------------------------------------------------------------------------------------------------
        // Q&A - ALL WORDS
        // -----------------------------------------------------------------------------------------------------------
	if ($searchword_word_count <= $searchword_word_count_max)
	{
		if( $searchword_count > 1 )
        	{
	        	if( count($search_phrases) >= 1)
	        	{
				unset($imploded_search_phrases_description_allwords_array);

                		foreach($search_phrases as $k => $v)
	                	{
	        	                $exploded_search_phrase = explode(" ",$v);

        	        	        $imploded_search_phrases_question_allwords = implode("%' AND `question` LIKE '%",$exploded_search_phrase);
                	        	$imploded_search_phrases_question_allwords_array[] = "(`question` LIKE '%" . $imploded_search_phrases_question_allwords . "%')";

	                	        $imploded_search_phrases_description_allwords = implode("%' AND `description` LIKE '%",$exploded_search_phrase);
        	                	$imploded_search_phrases_description_allwords_array[] = "(`description` LIKE '%" . $imploded_search_phrases_description_allwords . "%')";

	                	        $imploded_search_phrases_answer_allwords = implode("%' AND `answer` LIKE '%",$exploded_search_phrase);
        	                	$imploded_search_phrases_answer_allwords_array[] = "(`answer` LIKE '%" . $imploded_search_phrases_answer_allwords . "%')";
                		}

		                $question_allwords = implode(" OR ",$imploded_search_phrases_question_allwords_array);
        		        $description_allwords = implode(" OR ",$imploded_search_phrases_description_allwords_array);
                		$answer_allwords = implode(" OR ",$imploded_search_phrases_answer_allwords_array);
		        }
        		else
		        {
        		        $exploded_search_phrase = explode(" ",$searchword);

                		$imploded_search_phrases_question_allwords = implode("%' AND `question` LIKE '%",$exploded_search_phrase);
		                $question_allwords  = "(`question` LIKE '%" . $imploded_search_phrases_question_allwords . "%')";

        		        $imploded_search_phrases_description_allwords = implode("%' AND `description` LIKE '%",$exploded_search_phrase);
                		$description_allwords = "(`description` LIKE '%" . $imploded_search_phrases_description_allwords . "%')";

		                $imploded_search_phrases_answer_allwords = implode("%' AND `answer` LIKE '%",$exploded_search_phrase);
        		        $answer_allwords = "(`answer` LIKE '%" . $imploded_search_phrases_answer_allwords . "%')";
		        }

			$not_in = "";
		        if( count($all_words_question_id_results) > 0 )
        		        $not_in = " AND (`question`.`id` NOT IN(" . implode(",",$all_words_question_id_results) . "))";

			$query = "
SELECT  `question`.`question`,
        `question`.`hits`,
	`question`.`id`,
	`question`.`description`,
        group_concat(`answers`.`answer`)
FROM    #__questions AS `question`,
        #__answers AS `answers`
WHERE   `question`.`id` = `answers`.`question_id` AND
        (
                $question_allwords or
                $description_allwords or
                $answer_allwords
        )
	$not_in
GROUP BY `question`.`id`
ORDER BY `question`.`hits` DESC
LIMIT 5;
        ";
		        // echo "<pre>"; print_r($query); echo "</pre>";
        		$db->setQuery($query);
			show_query_for_debug($query);
		        $results = $db->loadObjectList();
		        if($results)
	        	{
        	        	foreach($results as $k => $v)
	        	        {
					$question_url = pass_question_id_return_question_url($v->id);

					$result_scores[$question_url] += $points_question_all;
					if($v->description)
	                	        {
        	                	        if( strlen(htmlspecialchars($v->description)) > 120)
	                	                        $result_description[$question_url] = htmlspecialchars(substr($v->description, 0, 120)) . "...";
        	                	        else
                	                	        $result_description[$question_url] = htmlspecialchars($v->description);
	                	        }
	        	                else
        	        	                $result_description[$question_url] = "";
        		                $result_title[$question_url] = htmlspecialchars($v->question);
					$result_reason_for_score[$question_url] .= " -all question- ";
	        	        }
		        }
		}
	}






	if($result_scores)
	{
		arsort($result_scores);

		/*
		Array
		(
		    [/support/edu/drupal-7/configure-rss-feeds/intro-to-rss] => 4
		    [/support/community-support/server-usage/how-can-i-see-how-many-mobile-visitors-i-have] => 2
		)
		if( $_GET['test'] == "test" )
		{
			echo "<pre>"; print_r($result_scores); echo "</pre>";
		}
		*/


		// ----------------------------------------------------------------------------
		// if we have results and we're returning them in html format
		// ----------------------------------------------------------------------------
		if($_GET['rf'] != "json")
		{
			foreach($result_scores as $k => $v)
			{
				echo "	<div style='margin-bottom:20px;'>
						<div><a href='$k'>" . $result_title[$k] . "</a></div>
						<div>" . $result_description[$k] . "</div>
				";
				if($_GET['tell_me_why'] == 1)
					echo "
						<div style='margin-bottom:20px; color:red;'>
							<strong>POINTS</strong>: $v<br />
							<strong>MATCH TYPES</strong>: " . $result_reason_for_score[$k] . "
						</div>
					";
				echo "	</div>";
			}
			echo "<p class='alert' style='margin-top:20px;'>If you're not finding what you need, feel free to <a href='/support/community-support/ask-a-question'>ask us a question</a>.</p>";
			return count($result_scores);
		}
		// ----------------------------------------------------------------------------
                // if we have results and we're returning them in ajax format
                // ----------------------------------------------------------------------------
		else
		{
			$final_result_count = 0;
	                foreach($result_scores as $k => $v)
        	        {
                	        $final_results[$final_result_count]['url'] = "http://www.inmotionhosting.com" . str_replace("ajax-search-2/","",$k);
                        	$final_results[$final_result_count]['title'] = $result_title[$k];
	                        $final_results[$final_result_count]['description'] = $result_description[$k];

        	                $final_result_count++;
                	        if( $final_result_count >= 3 )
                        	        break;
	                }
	                print_r(json_encode($final_results));
			die();
		}
	}






	if( ! $result_scores )
		return 0;




        



}












function unexpected_query($original_searchword)
{

	$db = JFactory::getDbo();

	trim($original_searchword);
	$exploded_searchword = explode(" ",$original_searchword);

	$query = "SELECT * FROM #__search_unexpected_query";
	$db->setQuery($query);
	show_query_for_debug($query);
	$results = $db->loadObjectList();

	foreach($results as $k => $data)
	{
		// explode the query because we may have:	=site slow=site speed=
		$exploded_query_string = explode("=",$data->query);
		foreach($exploded_query_string as $eqs_k => $db_query)
		{
			if( $db_query != "" )
			{
				// strip out individual words, so we have "site" and "slow"
				$exploded_db_query = explode(" ",$db_query);
				$words_found = 0;
				foreach( $exploded_db_query as $edqk => $edqv )
				{
					// if "site" is in $original_searchword
					if( $original_searchword AND $edqv )
						if( substr_count($original_searchword,$edqv) > 0 )
							$words_found++;
				}

				if($words_found >= count($exploded_db_query))
				{
					$db_query_without_spaces = str_replace(" ","",$db_query);
						$letters_in_db_query_without_spaces = strlen($db_query_without_spaces);
						$previous_score = $return_array[$data->url]['score'];
                                                $new_score = 500 * $letters_in_db_query_without_spaces;
                                                if( $new_score > $previous_score)
                                                        $return_array[$data->url]['score'] = $new_score;
						// $return_array[$data->url]['score'] = 500 * $letters_in_db_query_without_spaces;
					$return_array[$data->url]['title'] = $data->title;
					$return_array[$data->url]['description'] = $data->description;
					if( $_GET['tell_me_why'] == 1 )
						echo "<h2 style='color:red;'>Unexpected query: <span style='color:green;'>" . htmlspecialchars($db_query,ENT_QUOTES) . "</span></h2>";
				}
			}
		}
	}
	return $return_array;
}












function grab_hail_mary_words($original_searchword)
{
	$db = JFactory::getDbo();
	$query = "SELECT * FROM #__search_hail_mary_terms ORDER BY `number_of_terms` DESC, char_length(`terms`) DESC;";
	$db->setQuery($query);
	show_query_for_debug($query);
        $results = $db->loadObjectList();

	foreach($results as $results_key => $results_object)
	{
		$exploded_term = explode(" ",$results_object->terms);

		$matches = 0;
		foreach($exploded_term as $exploded_term_key => $check_this_term)
		{
			if( $original_searchword AND $check_this_term )
				if( substr_count($original_searchword,$check_this_term) > 0 )
					$matches++;
		}

		if($matches >= count($exploded_term))
		{
			if( $_GET['tell_me_why'] == "1")
				echo "<h2 style='color:red;'>Hailmary: <span style='color:green;'>" . htmlspecialchars($results_object->terms,ENT_QUOTES) . "</span></h2>";
			return $results_object->terms;
		}
	}

	return false;
}












function check_for_misspellings()
{
	$db = JFactory::getDbo();
	$search_phrase = trim($_GET['searchword'],"?!");
	$exploded_search_phrase = explode(" ",$search_phrase);
	// ------------------------------------------------------------------
	// loop through each word and check if it exists in the database
	// ------------------------------------------------------------------
	foreach($exploded_search_phrase as $key => $single_word)
	{
		$query = "
		SELECT count(`title`) as 'word_occurrence'
		FROM #__content
		WHERE	`title` LIKE '%" . addslashes($single_word) . "%' OR
			`introtext` LIKE '%" . addslashes($single_word) . "%'
		";
		$db->setQuery($query);
		show_query_for_debug($query);
	        $results = $db->loadObjectList();
		$word_occurrence[$single_word] = $results[0]->word_occurrence;
		if( $results[0]->word_occurrence == 0 )
			$have_a_misspelled_word = true;
	}
	// ------------------------------------------------------------------
	// did we find a misspelled word?
	// ------------------------------------------------------------------
	if( $have_a_misspelled_word == true )
	{
		echo "	<h2>Sorry, we couldn't find any results.</h2>
                        <div>Did you misspell something here?</div>
			<div style='padding-left:25px;'><em>
		";
		foreach( $word_occurrence as $single_word => $occurrence_count )
		{
			if( $occurrence_count == 0 )
				echo "<span style='color:red;'>" . $single_word . "</span>";
			else
				echo $single_word;
			echo " ";
		}
		echo "	</em></div>
			<div style='color:#aaa; margin-bottom:15px; font-size:11px;;'>The words in red above *may* be misspelled. If you are sure the spelling <strong>is correct</strong>, try removing or changing the word(s) and searching again.</div>
			<script type=\"text/javascript\">
                                _gaq.push(['_setAccount', 'UA-1501988-1']);
                                _gaq.push(['_trackEvent', 'community support', 'no results did you misspell something', '" . addslashes($_GET['searchword']) . "']);
                        </script>
		";
		foreach( $word_occurrence as $single_word => $occurrence_count )
                {
                        if( $occurrence_count == 0 )
			{
				if( strlen($single_word) > 3 )
				{
					$half_of_word_length = round((strlen($single_word) / 2),0,PHP_ROUND_HALF_DOWN);
					if( $half_of_word_length == 2 )
						$half_of_word_length = 3;

					unset($possible_new_word);
					
					// ---------------------------------------------------------------------------------
					// first four letters
					// ---------------------------------------------------------------------------------
					$first_four_letters = substr($single_word,0,$half_of_word_length);
						$query = "SELECT `terms` FROM #__search_hail_mary_terms WHERE `terms` LIKE '" . addslashes($first_four_letters) . "%' AND `number_of_terms` = 1;";
						$db->setQuery($query);
						show_query_for_debug($query);
				                $results = $db->loadObjectList();
						// echo "<pre>"; print_r($results); echo "</pre>";
						if($results)
						{
							if( count($results) == 1 )
								$possible_new_word[$results[0]->terms]++;
							else
							{
								// do we have a word that starts with these characters and ends with the last?
                                                                $query = "
                                                                SELECT `terms`
                                                                FROM #__search_hail_mary_terms
                                                                WHERE   `terms` LIKE '" . addslashes($first_four_letters) . "%' AND
                                                                        `number_of_terms` <= 1 AND
                                                                        `terms` LIKE '%" . addslashes(substr($single_word,-1)) . "';
                                                                ";
                                                                $db->setQuery($query);
								show_query_for_debug($query);
                                                                $results = $db->loadObjectList();
                                                                if( count($results) == 1 )
                                                                        $possible_new_word[$results[0]->terms]++;
							}
						}
					// ---------------------------------------------------------------------------------
                                        // last four letters
                                        // ---------------------------------------------------------------------------------
					$last_four_letters = substr($single_word,-1 * $half_of_word_length);
						$query = "SELECT `terms` FROM #__search_hail_mary_terms WHERE `terms` LIKE '%" . addslashes($last_four_letters) . "' AND `number_of_terms` = 1;";
                                                $db->setQuery($query);
						show_query_for_debug($query);
                                                $results = $db->loadObjectList();
						// echo "<pre>"; print_r($results); echo "</pre>";
						if($results)
						{
							// if we only have 1 possible new word...
							if( count($results) == 1 )
                                                                $possible_new_word[$results[0]->terms]++;
							else
							{
								// do we have a word that ends in these characters and begins with the first?
								$query = "
								SELECT `terms`
								FROM #__search_hail_mary_terms
								WHERE	`terms` LIKE '%" . addslashes($last_four_letters) . "' AND
									`number_of_terms` <= 1 AND
									`terms` LIKE '" . addslashes(substr($single_word,0,1)) . "%';
								";
	        	                                        $db->setQuery($query);
								show_query_for_debug($query);
        	        	                                $results = $db->loadObjectList();
								if( count($results) == 1 )
	                                                                $possible_new_word[$results[0]->terms]++;
							}
						}
				}
				if( count($possible_new_word) == 1 )
					$non_misspelled_new_phrase[] = key($possible_new_word);
				else
				{
					// bug fix 2013.10.08 15:16 -------------------------------------------------------------------
                                        // what do we do in this case?
                                        // word: builer
                                        // 1: builder
                                        // 2: reseller
                                        /*
                                                Array
                                                (
                                                    [builder] => 1
                                                    [reseller] => 1
                                                )
                                        */
                                        for($x = $half_of_word_length; $x > 0; $x--)
                                        {
                                                if( $pnw_word_found_match_here != true )
                                                {
							if($possible_new_word) // adding this because causing errors in error_log
							{
	                                                        foreach($possible_new_word as $pnw_word => $pnw_value)
        	                                                {
                	                                                $misspelled_first_x = substr($single_word,0,$x);
                        	                                        $misspelled_last_x = substr($single_word,-1 * $x);
                                	                                $this_possible_new_word_first_x = substr($pnw_word,0,$x);
                                        	                        $this_possible_new_word_last_x = substr($pnw_word,-1 * $x);
                                                	                if( $misspelled_first_x == $this_possible_new_word_first_x AND $misspelled_last_x == $this_possible_new_word_last_x)
                                                        	        {
                                                                	        $matches_for_x[$x]++;
                                                                        	$last_match_for_x = $pnw_word;
	                                                                }
        	                                                }
							}
                                                        if($matches_for_x[$x] == 1)
                                                        {
                                                                $pnw_word_found_match_here = true;
                                                                $non_misspelled_new_phrase[] = $last_match_for_x;
                                                        }
                                                }
                                        }
                                        // END: bug fix 2013.10.08 15:16 ---------------------------------------------------------------

					if( $pnw_word_found_match_here != true )
						$do_not_run_good_spell_search = true;
				}
			}
			else
			{
				$non_misspelled_new_phrase[] = $single_word;
			}
                }

		if($do_not_run_good_spell_search != true)
		{
			$imploded_new_good_spell_search = implode(" ",$non_misspelled_new_phrase);
			header("Location: /support/search?searchword=" . urlencode($imploded_new_good_spell_search) . "&mssearchword=" . urlencode($_GET['searchword']));
			die();
		}
	}

	return false;
}






function show_query_for_debug($query)
{
	if ($_GET['show_queries'] == "sure" AND $_GET['rf'] != "json")
		echo "<pre style='margin:10px 0px; border:1px solid #000; padding:5px;'>" . str_replace("#__","bipyv_",$query) . "</pre>";
}












?>
