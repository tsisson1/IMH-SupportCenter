<?






function return_number_of_published_articles($db)
{
        $query = "      SELECT count(`id`) as 'pa_count'
                        FROM #__content
                        WHERE `state` = 1;
        ";
        $db->setQuery($query);
        $results = $db->loadObjectList();
	return $results[0]->pa_count;
}






function return_number_of_published_articles_that_dont_send_link_juice($db)
{
	$query = "      SELECT count(`id`) as 'pa_count'
                        FROM #__content as `content`
                        WHERE   `introtext` NOT LIKE '%</a>%' AND
                                `state` = 1 AND
				`catid` != 100 AND
				`catid` != 50 AND
				`catid` != 381
        ";
        $db->setQuery($query);
        $results = $db->loadObjectList();
        return $results[0]->pa_count;
}






function return_number_of_published_questions($db)
{
        $query = "      SELECT count(`id`) as 'pa_count'
                        FROM #__questions
                        WHERE `approved` >= 0;
        ";
        $db->setQuery($query);
        $results = $db->loadObjectList();
        return $results[0]->pa_count;
}






function return_number_of_published_questions_that_dont_send_link_juice($db)
{
	$query = "
SELECT `question`.`question_alias` , `question`.`question` , group_concat( `answers`.`answer` ) AS 'all_answers'
FROM #__questions AS `question` , #__answers AS `answers`
WHERE	`answers`.`question_id` = `question`.`id` AND
	`question`.`approved` >= 0
GROUP BY `answers`.`question_id`
HAVING `all_answers` NOT LIKE '%</a>%'
	";
	$db->setQuery($query);
        $results = $db->loadObjectList();
	return count($results);
}






function return_aoo_questions_that_dont_send_link_juice($db)
{
        $query = "
SELECT `question`.`question_alias` , `question`.`question` , group_concat( `answers`.`answer` ) AS 'all_answers'
FROM #__questions AS `question` , #__answers AS `answers`
WHERE   `answers`.`question_id` = `question`.`id` AND
        `question`.`approved` >= 0
GROUP BY `answers`.`question_id`
HAVING `all_answers` NOT LIKE '%</a>%'
        ";
        $db->setQuery($query);
	$results = $db->loadObjectList();
	return $results;
}






function return_select_list_of_authors($db)
{
	$query = "	SELECT `users`.`id`, `users`.`username`
			FROM #__users as `users`, #__user_usergroup_map as `user_usergroup_map`
			WHERE	`users`.`id` = `user_usergroup_map`.`user_id` AND
				`user_usergroup_map`.`group_id` = 8;
	";
	$db->setQuery($query);
	$results = $db->loadObjectList();
	$select = "<select name='author_id' id='author_id'><option></option>";
	foreach($results as $k => $v)
	{
		$selected = "";
		if( $_GET['author_id'] == $v->id )
			$selected = "selected";

		$select .= "<option value='" . $v->id . "' $selected>" . $v->username . "</option>";
	}
	$select .= "</select>";
	return $select;
}






?>
