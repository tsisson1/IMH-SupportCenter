<?






function return_array_of_question_contributors($question_id)
{
	$db = JFactory::getDbo();

	// first, get the asker of the question
	$query = "SELECT `u`.`id`, `u`.`username`, `u`.`email` FROM #__users u, #__questions q WHERE `q`.`asker_id` = `u`.`id` AND `q`.`id` = $question_id;";
	$db->setQuery($query);
	$results_asker = $db->loadObjectList();
	// // echo "<pre>"; print_r($results_asker); echo "</pre>";

	// next, get the answers of the question
	$query = "SELECT DISTINCT `u`.`id`, `u`.`username`, `u`.`email` FROM #__users u, #__answers a WHERE `a`.`answerer_id` = `u`.`id` AND `a`.`question_id` = $question_id;";
	$db->setQuery($query);
        $results_answerer = $db->loadObjectList();
        // // echo "<pre>"; print_r($results_answerer); echo "</pre>";

	// next, get all answer comments
	$query = "
	SELECT DISTINCT `u`.`id`, `u`.`username`, `u`.`email`
	FROM #__users u, #__answers a, #__answer_comments c
	WHERE	`c`.`answer_id` = `a`.`id` AND
		`a`.`question_id` = $question_id AND
		`c`.`user_id` = `u`.`id`;
	";
        $db->setQuery($query);
        $results_answer_comments = $db->loadObjectList();
        // // echo "<pre>"; print_r($results_answer_comments); echo "</pre>";

	// next, get all questions on questions
	$query = "
	SELECT DISTINCT `u`.`id`, `u`.`username`, `u`.`email`
        FROM #__users u, #__question_to_question q
        WHERE	`q`.`question_id` = $question_id AND
		`q`.`user_id` = `u`.`id`
	";
	$db->setQuery($query);
        $results_questions_to_questions = $db->loadObjectList();
        // // echo "<pre>"; print_r($results_questions_to_questions); echo "</pre>";

	$array_of_all_contributors_contains_duplicates = array_merge($results_asker,$results_answerer,$results_answer_comments,$results_questions_to_questions);
	foreach($array_of_all_contributors_contains_duplicates as $k => $v)
	{
		if( ! $array_of_all_contributors_no_duplicates[$v->id] )
			$array_of_all_contributors_no_duplicates[$v->id] = $v;
	}

	return $array_of_all_contributors_no_duplicates;
}






function does_the_user_want_a_qa_email_notification($question_contributors,$user_id,$question_id)
{
	$db = JFactory::getDbo();

	foreach($question_contributors as $k => $v)
        {
                if($k == $user_id)
                {
                        $is_a_contributor = true;

			// does the user NOT want an email?
                        $query = "SELECT * FROM #__questions_do_not_email_me WHERE `user_id` = $user_id AND `question_id` = $question_id;";
                        $db->setQuery($query);
                        $results_do_not_send_me_emails = $db->loadObjectList();
                        if( $results_do_not_send_me_emails )
                        {
				return false;
                        }
                }
        }

	return true;
}






$new_question_email_message = "** THIS IS AN AUTOMATED MESSAGE. PLEASE DO NOT REPLY **

Hello Customer Community Team!

A new question has been submitted:

%s

%s

Thanks,
- Brad";
$new_question_email_message_html = "<p style='text-align:center;font-size:12px;color:red;font-weight:bold;'>** THIS IS AN AUTOMATED MESSAGE. PLEASE DO NOT REPLY **</p>

<p>Hello Customer Community Team!</p>

<p>A new question has been submitted:</p>

<p>
	<strong>%1\$s</strong><br />
	<a href='%2\$s'>%2\$s</a>
</p>

<p>Thanks,<br />
- Brad</p>";







$new_answer_email_message = "** THIS IS AN AUTOMATED MESSAGE. PLEASE DO NOT REPLY **

Hi %s,

The following question:
%s
... has received a new answer!

You can see the answer here:
%s

We hope that you found the Community Support area of the Support Center to be helpful. Please feel free to provide our team with any feedback, positive or negative, by sending an email to manager_feedback@inmotion.net

Best Regards,
InMotion Hosting Support Team

UNSUBSCRIBE:
If you would like to unsubscribe from email alerts about this page, please click this link: %3\$s?%4\$s
";
$new_answer_email_message_html = "<p style='text-align:center;font-size:12px;color:red;font-weight:bold;'>** THIS IS AN AUTOMATED MESSAGE. PLEASE DO NOT REPLY **</p>

<p>Hi %1\$s,</p>

<p>The following question:<br />
<strong>%2\$s</strong><br />
... has received a new answer!</p>

<p>You can see the answer here:<br />
<a href='%3\$s'>%3\$s</a>
</p>

<p>We hope that you found the Community Support area of the Support Center to be helpful. Please feel free to provide our team with any feedback, positive or negative, by sending an email to manager_feedback@inmotion.net</p>

<p>Best Regards,<br />
InMotion Hosting Support Team</p>

<p><strong>Unsubscribe</strong>:<br />
If you would like to unsubscribe from email alerts about this page, please <a href='%3\$s?%4\$s'>click here</a>.</p>
";






$new_follow_up_question_email_message = "** THIS IS AN AUTOMATED MESSAGE. PLEASE DO NOT REPLY **

Hi %s,

Your question:
%s
... has received a follow-up question:

- - - - - - - - - - - - - - - - - - - - - - - -
%s
- - - - - - - - - - - - - - - - - - - - - - - -

To respond to this message, please visit the following page:
%s

Best Regards,
InMotion Hosting Support Team

UNSUBSCRIBE:
If you would like to unsubscribe from email alerts about this page, please click this link: %4\$s?%5\$s
";
$new_follow_up_question_email_message_html = "<p style='text-align:center;font-size:12px;color:red;font-weight:bold;'>** THIS IS AN AUTOMATED MESSAGE. PLEASE DO NOT REPLY **</p>

<p>Hi %1\$s,</p>

<p>Your question:<br />
<strong>%2\$s</strong><br />
... has received a follow-up question:</p>

<p style='padding-left:40px;'><em>%3\$s</em></p>

<p>To respond to this message, please visit the following page:<br />
<a href='%4\$s'></a>%4\$s</p>

<p>Best Regards,<br />
InMotion Hosting Support Team</p>

<p><strong>Unsubscribe</strong>:<br />
If you would like to unsubscribe from email alerts about this page, please <a href='%4\$s?%5\$s'>click here</a>.</p>
";







$new_answer_comment_email_message = "** THIS IS AN AUTOMATED MESSAGE. PLEASE DO NOT REPLY **

Hi %s,

An answer posted about this question:
%s
... has received the following comment:

- - - - - - - - - - - - - - - - - - - - - - - -
%s
- - - - - - - - - - - - - - - - - - - - - - - -

To respond to this message, please visit the following page:
%s

Best Regards,
InMotion Hosting Support Team

UNSUBSCRIBE:
If you would like to unsubscribe from email alerts about this page, please click this link: %4\$s?%5\$s
";
$new_answer_comment_email_message_html = "<p style='text-align:center;font-size:12px;color:red;font-weight:bold;'>** THIS IS AN AUTOMATED MESSAGE. PLEASE DO NOT REPLY **</p>

<p>Hi %1\$s,</p>

<p>An answer posted about this question:<br />
<strong>%2\$s</strong><br />
... has received the following comment:</p>

<p style='padding-left:40px;'><em>%3\$s</em></p>

<p>To respond to this message, please visit the following page:<br />
<a href='%4\$s'>%4\$s</a></p>

<p>Best Regards,<br />
InMotion Hosting Support Team</p>

<p><strong>Unsubscribe</strong>:<br />
If you would like to unsubscribe from email alerts about this page, please <a href='%4\$s?%5\$s'>click here</a>.</p>
";






$best_answer_chosen_email_message = "** THIS IS AN AUTOMATED MESSAGE. PLEASE DO NOT REPLY **

Hi %s,

The user who asked this question:
%s
... has selected a \"best answer\"!

To see if it was your answer, please visit the following page:
%s

Best Regards,
InMotion Hosting Support Team

UNSUBSCRIBE:
If you would like to unsubscribe from email alerts about this page, please click this link: %3\$s?%4\$s
";
$best_answer_chosen_email_message_html = "<p style='text-align:center;font-size:12px;color:red;font-weight:bold;'>** THIS IS AN AUTOMATED MESSAGE. PLEASE DO NOT REPLY **</p>

<p>Hi %1\$s,</p>

<p>The user who asked this question:<br />
<strong>%2\$s</strong><br />
... has selected a \"best answer\"!</p>

<p>To see if it was your answer, please visit the following page:<br />
<a href='%3\$s'>%3\$s</a></p>

<p>Best Regards,<br />
InMotion Hosting Support Team</p>

<p><strong>Unsubscribe</strong>:<br />
If you would like to unsubscribe from email alerts about this page, please <a href='%3\$s?%4\$s'>click here</a>.</p>
";






function pass_question_id_return_category_array($id)
{
        if( ! is_numeric($id) )
                JError::raiseError( 404, 'Question invalid' );

        $db = JFactory::getDbo();

        // grab category information
        $query = "
SELECT `qc`.*
FROM #__question_categories qc, #__questions q
WHERE   `q`.`id` = $id AND
        `q`.`category_id` = `qc`.`id`
        ";
        $db->setQuery($query);
        $category_info = $db->loadObjectList();
	// BREAKS SSL // $category_info[0]->url = JURI::base() . "community-support/" . $category_info[0]->alias;
	$category_info[0]->url = "/support/community-support/" . $category_info[0]->alias;

        if( $category_info[0]->parent_id == 0 )
		return $category_info;

        $query = "SELECT * FROM #__question_categories WHERE `id` = " . $category_info[0]->parent_id . ";";
        $db->setQuery($query);
        $parent_category_info = $db->loadObjectList();
	// BREAKS SSL // $parent_category_info[0]->url = JURI::base() . "community-support/" . $parent_category_info[0]->alias;
	$parent_category_info[0]->url = "/support/community-support/" . $parent_category_info[0]->alias;
	$category_info[0]->url = $parent_category_info[0]->url . "/" . $category_info[0]->alias;

	return array_merge($parent_category_info,$category_info);
}






function pass_alias_return_total_existing_same_aliases($alias)
{
	$db = JFactory::getDbo();

	$query = "SELECT count(`id`) as 'alias_count' FROM #__questions WHERE `question_alias` = '" . addslashes($alias) . "';";
	$db->setQuery($query);
	$question_alias_count = $db->loadObjectList();

	$query = "SELECT count(`id`) as 'alias_count' FROM #__question_categories WHERE `alias` = '" . addslashes($alias) . "';";
	$db->setQuery($query);
        $category_alias_count = $db->loadObjectList();

	return $question_alias_count[0]->alias_count + $category_alias_count[0]->alias_count;
}






function if_pagination_which_page()
{
	$exploded_url = explode("/",$_SERVER['REDIRECT_URL']);

	$last_url_dir = explode("-",$exploded_url[ count($exploded_url) - 1]);

	if( count($last_url_dir) != 2 ) return false;

	if($last_url_dir[0] == "page" AND is_numeric($last_url_dir[1]) AND $last_url_dir[1] != 1)
		return $last_url_dir[1];

	return false;
}






function remove_pagination_from_exploded_url()
{
	$exploded_url = explode("/",$_SERVER['REDIRECT_URL']);
	$garbage = array_pop($exploded_url);
	return $exploded_url;
}






function print_pagination($current_page,$total_count,$exploded_url)
{
	$total_pages = ceil($total_count / 15);

	$page1 = implode("/",$exploded_url);


	// start page
	if($current_page == 1)
	{
		$start_page = "<li class='pagination-start'><span class='pagenav'>Start</span></li>";
		$previous_page = "<li class='pagination-prev'><span class='pagenav'>Prev</span></li>";
	}
	else
	{
		$start_page = "<li class='pagination-start'><a title='Start' href='$page1' class='pagenav'>Start</a></li>";

		if( $current_page == 2)
			$previous_page = "<li class='pagination-prev'><a title='Prev' href='$page1' class='pagenav' rel='prev'>Prev</a></li>";
		else
			$previous_page = "<li class='pagination-prev'><a title='Prev' href='$page1/page-" . ($current_page - 1) . "' class='pagenav' rel='prev'>Prev</a></li>";
	}

	if( ($total_pages > 1) AND ($current_page < $total_pages) )
	{
        	$next_page = "<li class='pagination-next'><a title='Next' href='$page1/page-" . ($current_page + 1). "' class='pagenav' rel='next'>Next</a></li>";
		$end_page = "<li class='pagination-end'><a title='End' href='$page1/page-$total_pages' class='pagenav'>End</a></li>";
	}
	else
	{
		$next_page = "<li class='pagination-next'><span class='pagenav'>Next</span></li>";
		$end_page = "<li class='pagination-end'><span class='pagenav'>End</span></li>";
	}





	echo "	<div class='pagination'>
			<p class='counter pull-right'>Page $current_page of $total_pages</p>
			<ul>
				$start_page
				$previous_page
	";


	$total_pages_in_pagination = 9;
	$total_pages_before = 4;
	// should we start the cound with 1?
	if( $total_pages <= $total_pages_in_pagination )
	{
		$pagination_start = 1;
		$pagination_end = $total_pages;
	}
	else
	{
		if( $current_page - $total_pages_before < 1 )
		{
			$pagination_start = 1;
			$pagination_end = $total_pages_in_pagination;
		}
		elseif( $current_page + $total_pages_before > $total_pages )
		{
			$pagination_start = $total_pages - $total_pages_in_pagination + 1;
			$pagination_end = $total_pages;
		}
		else
		{
			$pagination_start = $current_page - $total_pages_before;
	                $pagination_end = $current_page + $total_pages_before;
		}
	}



	// die("$pagination_start - $pagination_end");
	for($x = $pagination_start; $x <= $pagination_end; $x++)
	{
		$url_for_this_pagination_link = $page1 . "/page-" . $x;
		if($x == 1)
			$url_for_this_pagination_link = $page1;

		if($x == $current_page)
			echo "\n<li><span class='pagenav'>$x</span></li>";
		else
			echo "\n<li><a title='$x' href='$url_for_this_pagination_link' class='pagenav'>$x</a></li>";
	}



	echo "			$next_page
				$end_page
			</ul>
		</div>
	";
}






function create_alias($text)
{
        // clean up html
        $text = htmlspecialchars_decode($text);
        $text = htmlspecialchars_decode($text);
        // remove all non alphanumber characters
        $text = preg_replace("/[^a-zA-Z0-9\s]/", "", $text);
        // clean up white spaces and dashes
        $text = str_replace(" ", "-", $text);
        $text = str_replace("----", "-", $text);
        $text = str_replace("---", "-", $text);
        $text = str_replace("--", "-", $text);
        $text = trim($text,"-");
        // clean it up and make it lower case
        $text = strtolower($text);
        // return that polishing new alias
        return $text;
}






function create_pagination_navigation($start,$limit,$current_page,$total_pages,$total_number_of_questions)
{
$pagination_nav = "
<div class='pagination'>
        <p class='counter pull-right'>Page $current_page of $total_pages<br />Total Questions: $total_number_of_questions</p>
        <ul>
";
// START BUTTON
if( $current_page != 1)
        $pagination_nav .= "<li class='pagination-start'><a title='Start' href='?limitstart=1' class='pagenav'>Start</a></li>";
else
        $pagination_nav .= "<li class='pagination-start'><span class='pagenav'>Start</span></li>";
// PREVIOUS BUTTON
if( $current_page > 1 )
        $pagination_nav .= "<li class='pagination-prev'><a title='Prev' href='?limitstart=" . ($start - $limit) . "' class='pagenav'>Prev</a></li>";
$total_pages_to_show = 5;
$total_pages_printed = 0;
for($x = 1; $x <= $total_pages AND $total_pages_printed < $total_pages_to_show; $x++)
{
        $print_this_page_number = true;

        if( ($current_page - 2) > $x )
                $print_this_page_number = false;



        if($print_this_page_number == true)
        {
                if($x != $current_page)
                        $pagination_nav .= "<li><a title='$x' href='?limitstart=" . ($x * $limit - $limit + 1) . "' class='pagenav'>$x</a></li>";
                else
                        $pagination_nav .= "<li><span class='pagenav'>$x</span></li>";
                $total_pages_printed++;
        }
}
// NEXT AND END BUTTONS
if( $current_page < $total_pages )
        $pagination_nav .= "
<li class='pagination-next'><a href='?limitstart=" . ($current_page * $limit + 1)   . "'>Next</a></li>
<li class='pagination-end'><a href='?limitstart=" . ($total_pages * $limit - $limit + 1)   . "'>End</a></li>
";
else
        $pagination_nav .= "
<li class='pagination-next'><span class='pagenav'>Next</span></li>
<li class='pagination-end'><span class='pagenav'>End</span></li>
";
$pagination_nav .= "
        </ul>
</div>
";
return $pagination_nav;
}






function create_display_button($limit,$sort_by)
{
        $limit_array = array(5,10,15,20,25,30,50,100);

        $display_button = "Display #<select id='limit' name='limit' class='inputbox input-mini' size='1' onchange='this.form.submit()'>";
        foreach($limit_array as $k => $v)
        {
                $selected = "";
                if( $v == $limit )
                        $selected = "selected='selected'";
                $display_button .= "<option value='$v' $selected>$v</option>";
        }
        $display_button .= "</select>";

        $sort_array['# Answers'] = 'number_of_answers';
        $sort_array['Date'] = 'utc_n_ask_date';
        $sort_array['Hits'] = 'hits';

        $display_button .= "Sort by<select id='sort' name='sort' class='inputbox input-mini' onchange='this.form.submit()'>";
        foreach($sort_array as $k => $v)
        {
                $selected = "";
                if( $v == $sort_by )
                        $selected = "selected='selected'";
                $display_button .= "<option value='$v' $selected>$k</option>";
        }
        $display_button .= "</select>";

        return $display_button;
}






function create_table_of_questions($question_list,$start)
{
         $echo_question_list = "  <table>
                        <tr>
                                <th></th>
                                <th style='padding-right:10px;'>#&nbsp;Answers</th>
                                <th style='text-align:left;padding-right:10px;'>Question</th>
                                <th style='width:150px; text-align:left;'>Date</th>
                                <th style='width:100px; text-align:left;'>Hits</th>
                        </tr>
        ";
        $x = $start;
        foreach($question_list as $k => $question_object)
        {
                $echo_question_list .= "  <tr>
                                <td style='color:#bbb; padding-right:15px;'>$x.</td>
                                <td>" . $question_object->number_of_answers . "</td>
                                <td><a href='/support/community-support/" . $question_object->url . "'>" . $question_object->question . "</a></td>
                                <td>" . date("Y-m-d g:i a",$question_object->utc_n_ask_date) . "</td>
                                <td>" . number_format($question_object->hits) . "</td>
                        </tr>
                ";
                $x++;
        }
        $echo_question_list .= "  </table>";
        return $echo_question_list;
}






function pass_userid_get_avatar_url($id)
{
        $db = JFactory::getDbo();

        if(!is_numeric($id))
                die('pugau1 error');

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






$base_html_email_template = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"><html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta name=\"generator\" content=\"HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org\"/><meta http-equiv=\"Content-Type\" content=\"text/html;charset=us-ascii\"/><title>%s</title><style type=\"text/css\">.ReadMsgBody{width: 100%%;}.ExternalClass{width: 100%%;}</style></head><body style=\"background-color: #eeeeee;font-family: Verdana, Geneva, sans-serif;color: #000000;margin: 0;padding: 0;\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%%\" style=\"background-color: #eeeeee;\"><tr><td align=\"center\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"600\" style=\"text-align: left;\"><tr><td colspan=\"3\" style=\"font-size: 0;\"><img src=\"data:image/png;base64,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\" width=\"600\" height=\"142\" style=\"font-size:12px;\" alt=\"InMotion Hosting\"/></td></tr><tr><td colspan=\"3\" height=\"26\" bgcolor=\"#AD1B20\" style=\"font-size: 24px;font-family: Verdana, Geneva, sans-serif;color: #ffffff;padding-left: 40px;padding-right: 40px;text-align: left;line-height: 26px;background-color: #ad1b20;\">%s</td></tr><tr><td colspan=\"3\" style=\"font-size: 0;\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAAAVCAMAAACt4WB1AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAMBQTFRF9PT06urq29ra/Pz8EUZgEEFZEERdDzhLED1TEDNGEEJaEEVeEENbEEBXEDBBEDpNETZJEENcDjlOEUVeDTRIDTdLDzpOEUVfETRHED5VEjhMDTFDDjVJDjhNDzVIDzhKD0BXEDxSDjtRDz1UDz5UEDNEED5UEDlMDjFDEUFZEjtQET5TDio4Dy09EDxQDS09vLi4ysjIoRkdmhcbqxsgqBoephoeqRofoBgdqxsfmxcbpRkeoxkenBccqhofnhgcBAyVCAAAAMpJREFUeNrs0kViQkEURcFLgABfcHd3SfD4/neVacOsB292ag2lM2BAH4AB/QIGdAMM6AIY0BUwoC/AgL4BAzoCBnQHDOgPMEAs2MT6AQzoEzCgE2BA63axmXPM8rvtG+Bhu8vP3EPNYnutzb6wyDgG/eXhHfBwWPYH7qFFYb/RKm7Ns45Rvdt5ATx0uvWRe2jeilcqRUHaFU/L1QTgoVqexg+JgqikRhi+uqLhuCbAQ208jB4ShWFDqSeVYNJLAh56k6Dy/OhfgAEAa4zACcwA9WYAAAAASUVORK5CYII=\" width=\"600\" height=\"21\" alt=\"\"/></td></tr><tr><td width=\"20\" bgcolor=\"#114861\"><img src=\"data:image/png;base64,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\" width=\"20\" alt=\"\"/></td><td width=\"560\" bgcolor=\"#FFFFFF\" valign=\"top\"><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr><td style=\"padding-left: 20px;padding-right: 20px;padding-top: 15px;\">%s</td></tr></table></td><td width=\"20\" bgcolor=\"#114861\"><img src=\"data:image/png;base64,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\" width=\"20\" alt=\"\"/></td></tr><tr><td colspan=\"3\" height=\"20\" bgcolor=\"#114861\"></td></tr></table></td></tr></table></body></html>";






?>
