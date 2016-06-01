<?

$db = JFactory::getDBO();

// grab all comments that need to be processed
$query = "
	SELECT	*
	FROM	#__feedback
	WHERE	`user_name` != '' AND
		`user_email` != '' AND
		`feedback` != '' AND
		`posted_as_comment` = 0 AND
		`option` = 'com_content' AND
		`view` = 'article'
	;
";
$db->setQuery($query);
$feedback_needing_processing = $db->loadObjectList();

if($feedback_needing_processing)
{
	foreach($feedback_needing_processing as $k => $v)
	{
		// turn this feedback into an article
		$query = "
		INSERT INTO	#__comments (`id`,`object_id`,`object_group`,`user_id`,`comment`,`ip`,`utc_n`,`admin_verified`,`name`,`email_address`,`hide_comment`,`comment_type`,`parent_id`,`title`,`phone_number`,`random_number`,`bcomment`)
		VALUES(	null,
			" . $v->page_id . ",
			'com_content',
			316002496,
			'" . addslashes($v->feedback) . "',
			'" . addslashes($v->user_ip) . "',
			'" . strtotime(gmdate('Y-m-d H:i:s')) . "',
			0,
			'" . addslashes($v->user_name) . "',
			'" . addslashes($v->user_email) . "',
			1,
			0,
			0,
			'',
			'',
			2,
			'from article feedback')
		;
		";
		$db->setQuery($query);
		$db->execute();

		// then set `posted_as_comment` = 1
		$query = "UPDATE #__feedback SET `posted_as_comment` = 1 WHERE `id` = " . $v->id . ";";
		$db->setQuery($query);
                $db->execute();
	}
} 

?>
