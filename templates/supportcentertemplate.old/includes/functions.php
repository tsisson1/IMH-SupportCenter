<?






function pass_userid_get_avatar_url_2($id)
{
        $db = JFactory::getDbo();

        if(!is_numeric($id))
	{
		return "/support/images/avatars/default_avatar.jpg";
                die('pugau1 error');
	}

        // is this a facebook account?
        $query = "SELECT `avatar_url` FROM #__login_facebook_userdata as `lfu`, #__users as `users` WHERE `users`.`id` = $id AND `users`.`username` = `lfu`.`username`;";
        $db->setQuery($query);
        $results = $db->loadObjectList();
        if($results[0]->avatar_url != "")
                return $results[0]->avatar_url;

        // is this a google+ account?
        $query = "SELECT `avatar_url` FROM #__login_google_userdata as `lgu`, #__users as `users` WHERE `users`.`id` = $id AND `users`.`username` = `lgu`.`username`;";
        $db->setQuery($query);
        $results = $db->loadObjectList();
        if($results[0]->avatar_url != "")
                return $results[0]->avatar_url;

        // is this a twitter account?
        $query = "SELECT `avatar_url` FROM #__login_twitter_userdata as `ltu`, #__users as `users` WHERE `users`.`id` = $id AND `users`.`username` = `ltu`.`username`;";
        $db->setQuery($query);
        $results = $db->loadObjectList();
        if($results[0]->avatar_url != "")
                return $results[0]->avatar_url;

        // when ALL else failes
        return "/support/images/avatars/default_avatar.jpg";
}






function return_array_of_all_commenters_of_this_page($article_id)
{
	$db = JFactory::getDbo();
	$query = "
	SELECT DISTINCT `u`.`id`, `u`.`username`, `u`.`email`
	FROM #__users u, #__comments c
	WHERE	`c`.`object_group` = 'com_content' AND
		`c`.`object_id` = $article_id AND
		`c`.`user_id` = `u`.`id`;
	";
	$db->setQuery($query);
	$results = $db->loadObjectList();
	return $results;
}






function return_array_of_users_not_wanting_new_comment_notification_emails($article_id)
{
	$db = JFactory::getDbo();
	$query = "
	SELECT DISTINCT `user_id`
	FROM #__content_do_not_email_me
	WHERE `article_id` = $article_id;
	";
	$db->setQuery($query);
        $results = $db->loadObjectList();
	foreach($results as $k => $v)
		$return_array[] = $v->user_id;
	return $return_array;
}






?>
