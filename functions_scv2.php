<?


/**
 * return "global function" variables
 * This is going to be used mainly to help between dev and prod environments
 */
function rgfv()
{
        $server_name = gethostname();
        $s = new stdClass();

        switch($server_name)
        {
                // DEV ENVIRONMENT
                case "ash-cct-pro-srv1.inmotionhosting.com":
                        $s->user_ip = $_SERVER['REMOTE_ADDR'];
                        $s->server = "dev";
                        break;
                // PROD ENVIRONMENT
                default:
                        $s->user_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                        $s->server = "prod";
                        break;
        }

        return $s;
}






function pass_question_id_return_question_url($id)
{
        if( ! is_numeric($id) )
                JError::raiseError( 404, 'Question not found' );

        $db = JFactory::getDbo();

        // grab category information
        $query = "
SELECT `q`.`question_alias`, `qc`.*
FROM #__question_categories qc, #__questions q
WHERE   `q`.`id` = $id AND
        `q`.`category_id` = `qc`.`id`
        ";
        $db->setQuery($query);
        $category_info = $db->loadObjectList();

        if( $category_info[0]->parent_id == 0 )
                // return JURI::base() . "community-support/" . $category_info[0]->alias . "/" . $category_info[0]->question_alias;
		return "/support/community-support/" . $category_info[0]->alias . "/" . $category_info[0]->question_alias;

        $query = "SELECT `alias` FROM #__question_categories WHERE `id` = " . $category_info[0]->parent_id . ";";
        $db->setQuery($query);
        $parent_category_info = $db->loadObjectList();

        // return JURI::base() . "community-support/" . $parent_category_info[0]->alias . "/" . $category_info[0]->alias . "/" . $category_info[0]->question_alias;
	return "/support/community-support/" . $parent_category_info[0]->alias . "/" . $category_info[0]->alias . "/" . $category_info[0]->question_alias;
}












function is_string_pagination_alias($my_string)
{
	$last_url_dir = explode("-",$my_string);

	if(count($last_url_dir) != 2) return false;

        if($last_url_dir[0] == "page" AND is_numeric($last_url_dir[1]) AND $last_url_dir[1] != 1)
                return true;

        return false;
}












function remove_canonical()
{
	$document = JFactory::getDocument();
	foreach($document->_links as $k => $v)
		if( $v['relation'] == "canonical" )
			unset( $document->_links[$k] );
}












function cs_send_email($to,$subject,$body)
{
		/*
                $from = array("customer_experience@inmotionhosting.com", "InMotion Hosting Customer Community Team");

                # Invoke JMail Class
                $mailer = JFactory::getMailer();

                # Set sender array so that my name will show up neatly in your inbox
                $mailer->setSender($from);

                # Add a recipient -- this can be a single address (string) or an array of addresses
                $mailer->addRecipient($to);

                $mailer->setSubject($subject);
                $mailer->setBody($body);

                # If you would like to send as HTML, include this line; otherwise, leave it out
                // $mailer->isHTML();

                # Send once you have set all of your options
                $mailer->send();
		*/

		$db = JFactory::getDbo();
		$query = "
INSERT INTO #__email_queue
(`id`,`created_date`,`been_sent`,`sent_date`,`sent_error_message`,`subject`,`body_text`,`body_html`,`to`)
VALUES (NULL,CURRENT_TIMESTAMP,0,'0000-00-00 00:00:00','','" . addslashes($subject) . "','" . addslashes($body) . "','','" . addslashes($to) . "');
";
		$db->setQuery($query);
		$db->execute();
}
function cs_send_email_with_html($to,$subject,$body_txt,$body_html)
{
                $db = JFactory::getDbo();
                $query = "
INSERT INTO #__email_queue
(`id`,`created_date`,`been_sent`,`sent_date`,`sent_error_message`,`subject`,`body_text`,`body_html`,`to`)
VALUES (NULL,CURRENT_TIMESTAMP,0,'0000-00-00 00:00:00','','" . addslashes($subject) . "','" . addslashes($body_txt) . "','" . addslashes($body_html) . "','" . addslashes($to) . "');
";
                $db->setQuery($query);
                $db->execute();
}












function pass_user_object_and_text_then_return_clean_text($user,$text)
{
	$new_text = $text;
        if( $user->groups[8] != 8 )
                $new_text = htmlspecialchars($text);
        return nl2br($new_text);
}












function return_div_with_social_buttons($previous_saying,$url_of_this_page)
{
	// ---------------------------------------------------------------
	// LIKE THIS PAGE - social media
	// ---------------------------------------------------------------
	$like_facebook_html = "<iframe src='//www.facebook.com/plugins/like.php?href=$url_of_this_page&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=209145459223160' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:100px; height:21px;' allowTransparency='true'></iframe>";
	$like_google_html = "
<div class='g-plusone' data-size='medium' data-href='$url_of_this_page'></div>
<script type='text/javascript'>
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>";
	$like_twitter_html = "<a href='https://twitter.com/share' class='twitter-share-button' data-via='inmotionhosting'>Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>";


	return "
<div style='text-align:right; margin:10px 0px;'>
	<span style='padding-right:15px;'>$previous_saying</span>
	$like_facebook_html
	$like_google_html
	$like_twitter_html
</div>
	";
}






function return_vdiv_with_social_buttons($url_of_this_page)
{
        // ---------------------------------------------------------------
        // LIKE THIS PAGE - social media
        // ---------------------------------------------------------------
        $buttons['facebook'] = "<iframe src='//www.facebook.com/plugins/like.php?href=$url_of_this_page&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=209145459223160' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:100px; height:21px;' allowTransparency='true'></iframe>";
        $buttons['google'] = "
<div class='g-plusone' data-size='medium' data-href='$url_of_this_page'></div>
<script type='text/javascript'>
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>";
        $buttons['twitter'] = "<a href='https://twitter.com/share' class='twitter-share-button' data-via='inmotionhosting'>Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>";

	return $buttons;
}






function does_item_exist_in_database($table,$field,$value)
{
	$db = JFactory::getDbo();
	$query = "SELECT * FROM #__" . $table . " WHERE `" . $field . "` = '$value';";
	$db->setQuery($query);
	$results = $db->loadObjectList();
	if( ! $results )
		return false;
	else
		return true;
}






function cc_clear_page_cache()
{
	// return true;
	/*
	$path_to_check = '/home/ccdevinm/public_html/support/cache/page/';
	$needle = "cid:" . md5($_SERVER['REQUEST_URI']);
	foreach(glob($path_to_check.'*.php') as $filename)
	{
		foreach(file($filename) as $fli=>$fl)
		{
			if(strpos($fl, $needle)!==false)
			{
				// echo $filename.' on line '.($fli+1).': '.$fl;
				unlink($filename);
			}
		}
	}
	*/

	// 2014.03.24.1012 - BradM - UPDATED - much faster
	$first_part_of_cache_file = "01d92212ed2309aec84c92d645595998";
	$path_to_check = '/home/ccdevinm/public_html/support/cache/page/';
	$full_file_path = $path_to_check . $first_part_of_cache_file . "-cache-page-" . md5("-" . $_SERVER['REQUEST_URI'] . "-en-GB") . ".php";
	if (file_exists($full_file_path))
		unlink($full_file_path);
}






function return_additional_anchor_text($option,$view,$id)
{
	$db = JFactory::getDbo();

	$query = "
	SELECT *
	FROM #__additional_anchor_text
	WHERE	`option` = '$option' AND
		`view` = '$view' AND
		`option_view_id` = $id
	LIMIT 1;
	";
	$db->setQuery($query);
	$results = $db->loadObject();
	if( $results )
		return $results;
	return false;
}






function load_user_profile($db,$user)
{
	$query = "SELECT * FROM #__user_profile WHERE `user_id` = " . $user->id . ";";
	$db->setQuery($query);
	$user_profile = $db->loadObject();

	if(! $user_profile)
	{
		$query = "INSERT INTO #__user_profile (`id`,`user_id`) VALUES (NULL," . $user->id . ");";
		$db->setQuery($query);
		$db->execute();

		$query = "SELECT * FROM #__user_profile WHERE `user_id` = " . $user->id . ";";
	        $db->setQuery($query);
        	$user_profile = $db->loadObject();
	}

	return $user_profile;
}






function update_user_profile($db,$user)
{
	if( $user->guest )
		return false;

	$twitter_username = addslashes($_POST['twitter_username']);
	$facebook_url = addslashes($_POST['facebook_url']);
	$google_url = addslashes($_POST['google_url']);
	$user_profile_bio = addslashes($_POST['user_profile_bio']);

	$query = "
	UPDATE	#__user_profile
	SET	`twitter_username` = '$twitter_username',
		`facebook_url` = '$facebook_url',
		`google_url` = '$google_url',
		`bio` = '$user_profile_bio'
	WHERE	`user_id` = " . $user->id . ";
	";

	$db->setQuery($query);
	$db->execute();

	JFactory::getApplication()->enqueueMessage('Profile updated!', 'success');
}






function pass_tinymce_text_and_script_tags($level,$text)
{
	switch($level)
	{
		case 1:
			return strip_tags($text,'<div><p><strong><em><span><sub><code><blockquote><ul><ol><li><h1><h2><h3><h4><h5><h6><a><img><pre>');
			break;
		default:
			return false;
	}
}






function gf_pass_userid_get_avatar_url($id)
{
        $db = JFactory::getDbo();

        if(!is_numeric($id))
                die('pugau1 error');

        // is this a facebook account?
        $query = "SELECT `avatar_url` FROM #__login_facebook_userdata as `lfu`, #__users as `users` WHERE `users`.`id` = $id AND `users`.`username` = `lfu`.`username`;";
        $db->setQuery($query);
        $results = $db->loadObjectList();
        if($results[0]->avatar_url != "")
                return str_replace("http://","//",$results[0]->avatar_url);

        // is this a google+ account?
        $query = "SELECT `avatar_url` FROM #__login_google_userdata as `lgu`, #__users as `users` WHERE `users`.`id` = $id AND `users`.`username` = `lgu`.`username`;";
        $db->setQuery($query);
        $results = $db->loadObjectList();
        if($results[0]->avatar_url != "")
                return str_replace("?sz=50","?sz=90",$results[0]->avatar_url);

        // is this a twitter account?
        $query = "SELECT `avatar_url` FROM #__login_twitter_userdata as `ltu`, #__users as `users` WHERE `users`.`id` = $id AND `users`.`username` = `ltu`.`username`;";
        $db->setQuery($query);
        $results = $db->loadObjectList();
        if($results[0]->avatar_url != "")
                return $results[0]->avatar_url;

        // is this an amp account?
        $query = "SELECT `avatar_url` FROM #__login_amp_userdata as `lau`, #__users as `users` WHERE `users`.`id` = $id AND `users`.`username` = `lau`.`username`;";
        $db->setQuery($query);
        $results = $db->loadObjectList();
        if($results[0]->avatar_url != "")
                return $results[0]->avatar_url;

        // when ALL else failes
        return "/support/images/avatars/default_avatar.jpg";
}






function return_list_of_anonymous_comments($db,$object_group,$object_id)
{
	$query = "
	SELECT	DISTINCT `email_address`,
		`name`
	FROM	#__comments
	WHERE	`object_group` = '$object_group' AND
		`object_id` = $object_id AND
		`email_address` != ''
	";
	$db->setQuery($query);
	$results = $db->loadObjectList();
	return $results;
}
function return_array_of_anonymous_commenters_not_wanting_email_alert_on_this_article($db,$object_id)
{
        $query = "
        SELECT  DISTINCT `email`
        FROM    #__content_do_not_email_anonymous
        WHERE   `article_id` = '$object_id' AND
                `email` != ''
        ";
        $db->setQuery($query);
        $results = $db->loadColumn();
        return $results;
}






function gf_run_query($query,$success_message,$failure_message)
{
        $db = JFactory::getDbo();
	$db->setQuery($query);
	try
	{
		$db->execute();
		if( $success_message != "" )
			JFactory::getApplication()->enqueueMessage($success_message, 'success');
		return true;
	}
	catch (Exception $e)
	{
		if( $failure_message != "" )
			JFactory::getApplication()->enqueueMessage($failure_message, 'warning');
		return false;
	}
}






function get_user_points($user_id,$return_type)
{
        if (!is_numeric($user_id))
                return false;

        $db = JFactory::getDBO();

        // do we already have this information in the database?
        $query = "SELECT * FROM #__user_points WHERE `user_id` = $user_id;";
        $db->setQuery($query);
        $point_data = $db->loadObject();
        if($point_data)
        {
                switch($return_type)
                {
                        case "points":
                                return $point_data->points;
                                break;
                        case "data":
                                return json_decode($point_data->point_data);
                                break;
			case "number link":
				if($user_id == "316002496")
					return "<span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span>";
				else
					return number_format($point_data->points) . " <a href='/support/team/points' target='_blank'>Points</a>";
				break;
                }
        }

        // number of questions asked
        $query = "SELECT count(`id`) FROM #__questions WHERE `asker_id` = $user_id AND `approved` = 0;";
        $db->setQuery($query);
        $question_count = $db->loadResult();

        // number of answers posted
        $query = "SELECT count(`id`) FROM #__answers WHERE `answerer_id` = $user_id;";
        $db->setQuery($query);
        $answer_count = $db->loadResult();

        // number of answer comments
        $query = "SELECT count(`id`) FROM #__answer_comments WHERE `user_id` = $user_id;";
        $db->setQuery($query);
        $answer_comment_count = $db->loadResult();

        // number of comments
        $query = "SELECT count(`id`) FROM #__comments WHERE `user_id` = $user_id AND `hide_comment` = 0;";
        $db->setQuery($query);
        $comment_count = $db->loadResult();

	// best answer count
	$query = "
		SELECT	count(`q`.`id`) as 'best_answer_count'
		FROM	#__questions as `q`,
			#__answers as `a`
		WHERE	`q`.`best_answer_user` != 0 AND
			`q`.`best_answer_user` = `a`.`id` AND
		        `a`.`answerer_id` = '$user_id';
	";
	$db->setQuery($query);
	$best_answer_count = $db->loadResult();

	// points from quizes
	$query = "
		SELECT	sum(`quiz`.`points`) as 'quiz_points'
		FROM	#__quiz as `quiz`,
			#__quiz_completions as `qc`
		WHERE	`qc`.`user_id` = $user_id AND
			`qc`.`quiz_id` = `quiz`.`id` AND
			`qc`.`quiz_version` = `quiz`.`current_version`
	";
	$db->setQuery($query);
	$points_from_quizes = $db->loadResult();
		
	$p['question_count'] = $question_count;
        $p['answer_count'] = $answer_count;
        $p['answer_comment_count'] = $answer_comment_count;
        $p['comment_count'] =  $comment_count;
	$p['best_answer_count'] = $best_answer_count;
	$p['points_from_quizes'] =  $points_from_quizes;

        $points =       ($question_count * 5) +
                        ($answer_count * 10) +
                        ($answer_comment_count * 3) +
                        ($comment_count * 3) +
			($best_answer_count * 30) +
			$points_from_quizes;

        if ($point_data)
                $query = "UPDATE #__user_points SET `points` = $points, `point_data` = '" . addslashes(json_encode($p)) . "' WHERE `user_id` = $user_id;";
        else
                $query = "INSERT INTO #__user_points (`id`,`user_id`,`points`,`point_data`) VALUES (NULL, $user_id, $points, '" . addslashes(json_encode($p)) . "');";
        $db->setQuery($query);
        $db->execute();

        switch($return_type)
        {
                case "points":
                        return $points;
                        break;
                case "data":
                        return $p;
                        break;
		case "number link":
			if($user_id == "316002496")
				return "<span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span>";
			else
				return number_format($points) . " <a href='/support/team/points' target='_blank'>Points</a>";
			break;
        }
}






function pass_profile_get_sc_links($user_profile,$width)
{
	// link to twitter
	if( $user_profile->twitter_username != "" )
        	$profile_links .= "<a href='https://twitter.com/" . htmlentities($user_profile->twitter_username,ENT_QUOTES) . "' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a>";
	// link to facebook
	if( $user_profile->facebook_url != "" )
        	$profile_links .= "<a href='" . htmlentities($user_profile->facebook_url,ENT_QUOTES) . "' target='_blank'><img src='//www.inmotionhosting.com/img/icon-facebook.png' style='width:20px;' /></a>";
	// link to google+
	if( $user_profile->google_url != "" )
        	$profile_links .= "<a href='" . htmlentities($user_profile->google_url,ENT_QUOTES) . "' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a>";

	return $profile_links;
}






function pass_title_body_return_html_email($title,$body)
{
	return "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"><html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\"/><title>$title</title><style type=\"text/css\"> .ReadMsgBody{width: 100%;}.ExternalClass{width: 100%;}</style></head><body style=\"background-color: #eeeeee;font-family: Verdana, Geneva, sans-serif;color: #000000;margin: 0;padding: 0;\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\" style=\"background-color: #eeeeee;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"600\" style=\"text-align: left;\"><tr><td colspan=\"3\" style=\"font-size: 0;\"><img src=\"https://secure1.inmotionhosting.com/_img/imh-email_header-top-tagline.png\" width=\"600\" height=\"142\" style=\"font-size:12px;\" alt=\"InMotion Hosting\"/></td></tr><tr><td colspan=\"3\" height=\"26\" bgcolor=\"#ad1b20\" style=\"font-size: 24px;font-family: Verdana, Geneva, sans-serif;color: #ffffff;padding-left: 40px;padding-right: 40px;text-align: left;line-height: 26px;background-color: #ad1b20;\">$title</td></tr><tr><td colspan=\"3\" style=\"font-size: 0;\"><img src=\"https://secure1.inmotionhosting.com/_img/imh-email_header-bottom.png\" width=\"600\" height=\"21\" alt=\"\"/></td></tr><tr><td width=\"20\" bgcolor=\"#114861\"><img src=\"https://secure1.inmotionhosting.com/_img/imh-email_bg-gradient_left.png\" width=\"20\" height=\"730\" alt=\"\"/></td><td width=\"560\" bgcolor=\"#ffffff\" valign=\"top\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-left: 20px;padding-right: 20px;padding-top: 15px;\">$body</td></tr></table></td><td width=\"20\" bgcolor=\"#114861\"><img src=\"https://secure1.inmotionhosting.com/_img/imh-email_bg-gradient_right.png\" width=\"20\" height=\"730\" alt=\"\"/></td></tr><tr><td colspan=\"3\" height=\"20\" bgcolor=\"114861\"></td></tr></table></td></tr></table></body></html>";
}






function nl2sp($text)
{
        $text = str_replace("\r\n","\n",$text);
        $text = str_replace("\n\r","\n",$text);
        $text = str_replace("\r","\n",$text);
        $text = str_replace("\n"," ",$text);

        while(substr_count($text,"  ")>0)
                $text = str_replace("  "," ",$text);

        return $text;
}






function pass_type_and_type_id_return_is_customer_html_form($type,$type_id)
{
	$db = JFactory::getDBO();

	$generic_style="font-size:8px;line-height:8px;margin:0px;padding:0px;height:10px;";
	$input_text_style = "width:50px;box-shadow:0 0px 0;border-radius:0px;";

	$query = "SELECT * FROM #__cxs_checks WHERE `type` = '" . addslashes($type) . "' AND `type_id` = " . addslashes($type_id) . ";";
	$db->setQuery($query);
	$results = $db->loadObject();

	if(!$results)
	{
		$html_form = "
			<form style='display:inline;padding:1px;border:1px solid #B30000;background:#FFE5E5;' method='post' title='Current Customer? If so, enter PP2 username.'>
				<input type='hidden' name='cxs_check_type' id='cxs_check_type' value='" . htmlentities($type,ENT_QUOTES) . "' />
				<input type='hidden' name='cxs_check_type_id' id='cxs_check_type_id' value='" . htmlentities($type_id,ENT_QUOTES) . "' />
				<input type='hidden' name='cxs_check_task' id='cxs_check_task' value='update' />
				<input type='submit' name='cxs_check_customer' id='cxs_check_customer' value='no' style='$generic_style' title='NO' />
				<input type='text' name='cxs_check_username' id='cxs_check_username' value='' style='$generic_style $input_text_style' />
				<input type='submit' name='cxs_check_customer' id='cxs_check_customer' value='yes' style='$generic_style' title='YES' />
			</form>
		";
	}
	else
	{
		$edit_link = "<a href='/support/administrator/index.php?row_id=" . $results->id . "&task_a=search_for_edit&option=com_communitysupport&task=database_access&table_name=%23__cxs_checks' target='_blank' title='EDIT'> (e)</a>";
		switch($results->cxs_username)
		{
			case "-1":
				$html_form = "<div style='font-size:10px;border:1px solid #336633; background:#E5FFE5;padding:1px;display:inline;' title='Last checked " . $results->checked_timestamp . "'>Not a Customer $edit_link</div>";
				break;
			default:
				$html_form = "<div style='font-size:10px;border:1px solid #336633; background:#E5FFE5;padding:1px;display:inline;' title='Confirmed Customer'>" . htmlentities($results->cxs_username,ENT_QUOTES) . " $edit_link</div>";
				break;
		}
	}

	return $html_form;
}






function return_cdn_subdomain()
{
	$cdn_subdomain = "cdn.inmotionhosting.com";
	// return $cdn_subdomain;
	if($_SERVER['HTTP_X_FORWARDED_PROTO'] == "https")
        	$cdn_subdomain = "imh01-inmotionhosting1.netdna-ssl.com";
	return $cdn_subdomain;
}






function return_article_comment_count($article_id)
{
	if (!is_numeric($article_id))
		return 0;

	$db = JFactory::getDBO();

	$query = "
	SELECT	COUNT(`id`) as 'count'
	FROM	#__comments
	WHERE	`object_id` = $article_id AND
		`object_group` = 'com_content';
	";
	$db->setQuery($query);
	return $db->loadResult();
}






function return_article_discussions($article_id)
{
        if (!is_numeric($article_id))
                return 0;

        $db = JFactory::getDBO();

        $query = "
        SELECT  `id`,`title`
        FROM    #__comments
        WHERE	`object_id` = $article_id AND
		`object_group` = 'com_content' AND
		`title` != '';
        ";
        $db->setQuery($query);
        return $db->loadObjectList();
}






function insert_new_staff_alert($type,$url)
{
	// we don't need to get alerts about comments that staff submits
	$user = JFactory::getUser();
	if( $user->groups[8] == 8 )
		return;

	$db = JFactory::getDBO();
	$query = "
		INSERT	INTO #__staff_alerts
			(`id`,`timestamp`,`type`,`url`)
		VALUES	(null,CURRENT_TIMESTAMP,'" . addslashes($type) . "','" . addslashes($url) . "')
	";
	$db->setQuery($query);
	$db->execute();
}






/**
 * force this login page over SSL
 */
function force_this_url_over_ssl()
{
	$rgfv = rgfv();
	if ($rgfv->server == "dev")
		return;

	if($_SERVER['HTTP_X_FORWARDED_PROTO'] != "https")
	{
		header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: " . str_replace('http://','https://',JURI::current()));
		die();
	}
}

/**
 * Delete a user's points so they can be recalculated
 */
function gf_clear_user_points($user_id)
{
	if( ! is_numeric($user_id) OR $user_id < 1 )
		return;

	$db = JFactory::getDBO();

	$query = "DELETE FROM #__user_points WHERE `user_id` = $user_id";
	$db->setQuery($query);
	$db->execute();

	$query = "UPDATE #__user_profile SET `profile_box` = '' WHERE `user_id` = $user_id";
        $db->setQuery($query);
        $db->execute();

	// now, recalculate points
	get_user_points($user_id,"points");
}






/**
 * is this a valid email address?
 */
function gf_valid_email_address($email)
{
	$email = trim($email);

        if(     substr_count($email,"@") != 1 OR
                substr_count($email,".") < 1 OR
                substr_count($email," ") >= 1 OR
                strlen(trim($email)) < 5
        )
                return false;
        return true;
}






function generate_html_for_user_profile_box()
{
	$db = JFactory::getDBO();
	$user = JFactory::getUser();

	// do we already have a user profile box?
	$query = "SELECT `profile_box` FROM #__user_profile WHERE `user_id` = " . $user->id;
	$db->setQuery($query);
	$html = $db->loadResult();
	if(trim($html) != "")
		return $html;

	$query = "SELECT * FROM #__user_points WHERE `user_id` = " . $user->id;
	$db->setQuery($query);
	$user_points_object = $db->loadObject();

	$user_profile = load_user_profile($db,$user);
	$user_avatar_url = gf_pass_userid_get_avatar_url($user->id);
	$point_data = json_decode($user_points_object->point_data);

	$best_answer_percentage = "";
	if($point_data->best_answer_count != 0 AND $point_data->answer_count != 0)
		$best_answer_percentage = "<tr><td><span title='" . $point_data->best_answer_count . " best answers'>" . round($point_data->best_answer_count / $point_data->answer_count * 100,0) . "%</span></td><th>best answer rate</th></tr>";

	$points_from_quizes = "";
	if($point_data->points_from_quizes > 0)
		$points_from_quizes = "<tr><td>" . number_format($point_data->points_from_quizes) . "</td><th>quiz points</th></tr>";

	$html = "
		<style>
			table.user_profile {
				width:100%;
			}
			table.user_profile tr td,
			table.user_profile tr th {
				font-size:12px;
				text-align:left;
			}
			table.user_profile tr th {
				color:#aaa;
				padding-left:10px;
				font-weight:normal;
			}
			table.user_profile tr td span.points {
				font-family: 'adelle',sans-serif;
				font-size:14px;
				color:#C52228;
			}
			table.user_profile tr td span.username {
				font-family: 'adelle',sans-serif;
                                font-size:18px;
                                color:#000;
			}
			table.user_profile tr td.heading {
				text-align:right;
			}
		</style>
		<table class='user_profile'>
			<tr><td colspan='2' class='heading'>
				<img src='" . htmlentities($user_avatar_url,ENT_QUOTES) . "' style='width:60px; float:left; margin:0px 15px 15px 0px;' class='sc_rc' />
				<span class='username'>" . htmlentities($user->username,ENT_QUOTES) . "</span>
				<span class='points'><strong>" . number_format($user_points_object->points) . "</strong>&nbsp;points</span>
			</td></tr>
			<tr><td>" . number_format($point_data->question_count) . "</td><th>questions asked</th></tr>
			<tr><td>" . number_format($point_data->answer_count) . "</td><th>answers</th></tr>
			$best_answer_percentage
			<tr><td>" . number_format(($point_data->answer_comment_count + $point_data->comment_count)) . "</td><th>comments</th></tr>
			$points_from_quizes
		</table>
	";

	// save the user profile box into the database
	$query = "UPDATE #__user_profile SET `profile_box` = '" . addslashes($html) . "' WHERE `user_id` = " . $user->id;
        $db->setQuery($query);
        $db->execute();

	return $html;
}






function get_section_number($article_id,$catid)
{
	// security
	if( ! is_numeric($article_id) OR ! is_numeric($catid) )
		return 1;

	$db = JFactory::getDBO();
	$section_number = 0;

	// grab all of the articles in this category
	$query = "
	SELECT `id`,`title`,`alias`,`catid`,`attribs`
	FROM #__content
	WHERE   `catid` = " . $catid . " AND
        	`state` = 1 AND
	        `alias` != 'quiz'
	ORDER BY `ordering` ASC;
	";
	$db->setQuery($query);
	$articles_in_this_category = $db->loadObjectList();

	foreach($articles_in_this_category as $k => $v)
	{
		$section_number++;
		if($article_id == $v->id)
		{
			return $section_number;
		}
	}

	return 1;
}






?>
