<?

// echo "<pre>"; print_r($data); echo "</pre>"; die();
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
$user = JFactory::getUser();
$db = JFactory::getDbo();






// --------------------------------------------------------------------------------------------------------------------------
// if we don't already have a previous version of this article, let's grab the original content and save it
// --------------------------------------------------------------------------------------------------------------------------
$query = "SELECT * FROM #__content_revisions WHERE `type` = 'article' AND `type_id` = " . $data['id'] . ";";
$db->setQuery($query);
$prior_results = $db->loadObjectList();
if( ! $prior_results )
{
	// we don't currently have a prior version, so let's grab it and save it
	// first, grab it
	$query = "SELECT * FROM #__content WHERE `id` = " . $data['id'] . ";";
	$db->setQuery($query);
	$results = $db->loadObjectList();

	$modified_by = $results[0]->modified_by;
	$modified = $results[0]->modified;

	if( $results )
	{
		$previous_version = $results[0]->title . "\n" . $results[0]->alias . "\n" . $results[0]->metadesc . "\n" . $results[0]->introtext;
		// then save it
		$query = "	INSERT INTO #__content_revisions
				(`id`,`component`,`type`,`type_id`,`timestamp`,`title`,`text`,`author_id`)
				VALUES (NULL,'com_content','article'," . $data['id'] . ",'$modified','" . addslashes($results[0]->title) . "','" . addslashes($previous_version) . "',$modified_by);";
		$db->setQuery($query);
                $result = $db->execute();
	}
}






// --------------------------------------------------------------------------------------------------------------------------
// add the revision
// --------------------------------------------------------------------------------------------------------------------------
if( $data['id'] AND $data['id'] != 0 )
{
	// if we already have a revision from today from the same user, and it's not the original revision, let's delete it
	$query = "	SELECT * FROM #__content_revisions
			WHERE	`type` = 'article' AND
				`type_id` = " . $data['id'] . " AND
				`author_id` = " . $user->id . " AND
				`timestamp` LIKE '" . date("Y-m-d",time()) . "%'
	;";
	$db->setQuery($query);
	$todays_results = $db->loadObjectList();
	if( $todays_results )
	{
		$query = "
			DELETE FROM #__content_revisions
	                WHERE   `type` = 'article' AND
        	                `type_id` = " . $data['id'] . " AND
                	        `author_id` = " . $user->id . " AND
                        	`timestamp` LIKE '" . date("Y-m-d",time()) . "%'
		";
		$db->setQuery($query);
		$result = $db->execute();
	}
	// insert the revision
	$previous_version = $data['title'] . "\n" . $data['alias'] . "\n" . $data['metadesc'] . "\n" . $data['articletext'];
	$query = "      INSERT INTO #__content_revisions
        	        (`id`,`component`,`type`,`type_id`,`timestamp`,`title`,`text`,`author_id`)
                	VALUES (NULL,'com_content','article'," . $data['id'] . ",CURRENT_TIMESTAMP,'" . addslashes($data['title']) . "','" . addslashes($previous_version) . "'," . $user->id . ");
	";
	$db->setQuery($query);
	$result = $db->execute();
}






// die('done');






?>
