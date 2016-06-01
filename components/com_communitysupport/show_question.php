<?

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

JRequest::setVar('view','show_question');

// is the user doing something they shouldn't be doing?
if($_POST['sc_task'] == "vote" AND $user->guest)
	JFactory::getApplication()->enqueueMessage("Please <a href='/support/login'>login</a> to vote.", 'warning');


// Are we choosing a best answer?
include_once("includes/are_we_choosing_a_best_answer.php");


// Are we submitting a question on a question?
include_once("includes/are_we_submitting_a_question_on_a_question.php");


// Are we posting a vote?
include_once("includes/are_we_posting_a_vote.php");


// are we posting a new answer comment?
include_once("includes/are_we_posting_a_new_answer_comment.php");


// are we submitting an answer?
include_once("includes/are_we_submitting_an_answer.php");


// are we changing our email notification settings?
include_once("includes/are_we_changing_our_email_notification_setting.php");






// $question_alias = addslashes( $exploded_url[3] . "/" . $exploded_url[4] );
$question_alias = addslashes( $exploded_url[ count($exploded_url)-1 ] );

$query = "SELECT q.*, u.username, u.email FROM #__questions as q, #__users as u WHERE `question_alias` = '$question_alias' AND `u`.`id` = `q`.`asker_id` LIMIT 1;";
$db->setQuery($query);
$question_details = $db->loadObjectList();

JRequest::setVar('id',$question_details[0]->id);

$document->setTitle( $question_details[0]->question . " | InMotion Hosting" );

if( $question_details[0]->approved == -1 )
	$document->setMetaData('robots','noindex,nofollow');






/**
 * is this the correct url for the question?
 * if not, throw a 404 question does not exist
 *
 * $correct_url_for_question = /support/community-support/general-server-setup/how-can-i-add-multiple-email-addresses-to-the-account-in-amp
 * $current_url_for_question = /support/community-support/general-server-setup/how-can-i-add-multiple-email-addresses-to-the-account-in-amp?us=2
 */
$correct_url_for_question = pass_question_id_return_question_url($question_details[0]->id);
$correct_url_for_question = str_replace("http://","",$correct_url_for_question);
$correct_url_for_question = str_replace("https://","",$correct_url_for_question);

$current_url_for_question = str_replace("/support//support/","/support/",JURI::base() . $_SERVER['REQUEST_URI']);
$current_url_for_question = str_replace("http://www.inmotionhosting.com","",$current_url_for_question);
$current_url_for_question = str_replace("https://www.inmotionhosting.com","",$current_url_for_question);
$current_url_for_question = str_replace("?tsrc=rsbraq","",$current_url_for_question);

// the above 4 lines for "$current_url_for_question" can probably be deleted
$current_url_for_question = JURI::current();
$current_url_for_question = str_replace("http://www.inmotionhosting.com","",$current_url_for_question);
$current_url_for_question = str_replace("https://www.inmotionhosting.com","",$current_url_for_question);

if($correct_url_for_question != $current_url_for_question)
	JError::raiseError( 404, 'Question Does Not Exist' );






// increase the number of hits to a question
/*
$query = "UPDATE #__questions SET `hits` = `hits` + 1 WHERE `question_alias` = '$question_alias';";
$db->setQuery($query);
$result = $db->query();
*/

// if there is only 1 hit to the question, then this is a new question, so log it in analtyics
if( $question_details[0]->hits == 0 )
{
	echo "
		<script type=\"text/javascript\">
			_gaq.push(['_setAccount', 'UA-1501988-1']);
			_gaq.push(['_trackEvent', 'self help', 'new question asked']);
		</script>
	";

	$number_of_ajax_search_results = $question_details[0]->number_ajax_results;
	echo "
       	        <script type=\"text/javascript\">
               	        _gaq.push(['_setAccount', 'UA-1501988-1']);
                       	_gaq.push(['_trackEvent', 'community support', 'number ajax search results on submission', '$number_of_ajax_search_results']);
                </script>
        "; 
}






// if the user is adding an update to their question
include_once("includes/is_the_user_adding_an_update_to_their_question.php");


// do we need to send an email?
include_once("includes/do_we_need_to_send_an_email.php");


// does this user want to unsubscribe from email alerts?
if($_GET['unsubscribe_user'])
	include_once("includes/unsubscribe_user.php");







// created the form for someone to answer a question
if(!$user->guest)
{
	$echo_post_answer_form = "	<form method='post' name='f_submitted_answer' id='f_submitted_answer'>
						<h3>Type your answer below</h3>
						<textarea name='ta_submitted_answer' id='ta_submitted_answer' onKeyUp=\"previewInput('ta_submitted_answer','d_preview_answer');\"></textarea>
						<div name='d_preview_answer' id='d_preview_answer'></div>
						<input class='btn btn-info' type='submit' value='Submit this answer!' />
						<input type='hidden' name='sc_task' id='sc_task' value='submit_answer' />
						<input type='hidden' name='question_id' id='question_id' value='" . $question_details[0]->id . "' />
					</form>
	";
}
else
{
	$echo_post_answer_form = "
	<form method='post' name='f_submitted_answer' id='f_submitted_answer'>
		<div id='system-message-container'><div id='system-message'><div class='alert alert-notice'><div>
			<p>You must <a href='/support/login'>login</a> before you can submit an answer.</p>
                </div></div></div></div>
	</form>
        ";
}






// create the form for someone to post a question about a question
if(!$user->guest)
{
        $echo_post_question_to_question_form = "
<form method='post' name='f_submit_question_to_question' id='f_submit_question_to_question'>
	<h3>Do you have a question about this question?</h3>
	<textarea name='ta_question_to_question' id='ta_question_to_question' onKeyUp=\"previewInput('ta_question_to_question','d_preview_question_to_question');\"></textarea>
	<div name='d_preview_question_to_question' id='d_preview_question_to_question'></div>
	<input class='btn btn-info' type='submit' value='Submit' />
	<input type='hidden' name='sc_task' id='sc_task' value='submit_question_to_question' />
	<input type='hidden' name='question_id' id='question_id' value='" . $question_details[0]->id . "' />
</form>
        ";
}
else
{
	$echo_post_question_to_question_form = "
	<form method='post' name='f_submit_question_to_question' id='f_submit_question_to_question'>
		<div id='system-message-container'><div id='system-message'><div class='alert alert-notice'><div>
                	<p>You must <a href='/support/login'>login</a> before you can ask a follow up question.</p>
		</div></div></div></div>
	</form>
	";
/*
        $echo_post_question_to_question_form = "
<form method='post' name='f_submitted_answer' id='f_submitted_answer'>
	<div id='system-message-container'><div id='system-message'><div class='alert alert-notice'><div>
		<p>You must <a href='/support/login'>login</a> before you can submit an asnwer.</p>
	</div></div></div></div>
</form>
        ";
*/
}






// allow the user to post an update to the question
$echo_question_update = "";
if( !$user->guest AND $user->id == $question_details[0]->asker_id )
	$echo_question_update = "
		<form method='post' name='f_question_update' id='f_question_update' style='display:none;'>
			<h3>Add more information to your question below</h3>
			<textarea name='ta_question_update' id='ta_question_update' onKeyUp=\"previewInput('ta_question_update','d_preview_question_update');\"></textarea>
			<div name='d_preview_question_update' id='d_preview_question_update'></div>
			<input class='std_blue_button' type='submit' value='Add this information to your question' />
			<input type='hidden' name='sc_task' id='sc_task' value='question_update' />
			<input type='hidden' name='question_id' id='question_id' value='" . $question_details[0]->id . "' />
		</form>
	";






// determine the action item under the question
if( !$user->guest AND $user->id == $question_details[0]->asker_id )
	$question_action = "<input class='std_blue_button' type='button' value='Add more details to your question' onClick=\"jQuery('#f_question_update').slideToggle('slow');\">";
else
	$question_action = "
<input class='std_blue_button' type='button' value='Post an answer to this question' onClick=\"jQuery('#f_submitted_answer').slideToggle('slow');\">
<input class='std_blue_button' type='button' value='Or, ask a question about this question' onClick=\"jQuery('#f_submit_question_to_question').slideToggle('slow');\" />
";






// grab all updates to the question, and questions on the question
$query = "SELECT * FROM #__question_updates WHERE `question_id` = " . $question_details[0]->id . ";";
$db->setQuery($query);
$question_updates = $db->loadObjectList();

if($question_updates)
{
	foreach($question_updates as $k => $v)
	{
		$question_updates_and_questions_on_questions[$v->utc_n_timestamp]['user_text'] = $v->update;
		$question_updates_and_questions_on_questions[$v->utc_n_timestamp]['user_id'] = $question_details[0]->asker_id;
		$question_updates_and_questions_on_questions[$v->utc_n_timestamp]['type'] = "question_updates";
                $question_updates_and_questions_on_questions[$v->utc_n_timestamp]['id'] = $v->id;
	}
}

$query = "SELECT * FROM #__question_to_question WHERE `question_id` = " . $question_details[0]->id . ";";
$db->setQuery($query);
$questions_on_questions = $db->loadObjectList();

if($questions_on_questions)
{
	foreach($questions_on_questions as $k => $v)
	{
		$question_updates_and_questions_on_questions[$v->utc_n_timestamp]['user_text'] = $v->question;
		$question_updates_and_questions_on_questions[$v->utc_n_timestamp]['user_id'] = $v->user_id;
		$question_updates_and_questions_on_questions[$v->utc_n_timestamp]['type'] = "question_to_question";
                $question_updates_and_questions_on_questions[$v->utc_n_timestamp]['id'] = $v->id;
	}
}

if($question_updates_and_questions_on_questions)
{
	ksort($question_updates_and_questions_on_questions);
	$x = 1;
	foreach($question_updates_and_questions_on_questions as $k => $v)
	{
		$this_user_userobject = JFactory::getUser($v['user_id']);
		$link_to_user_profile = "<a href='/support/community-support/users/" . str_replace(".","&per;",$this_user_userobject->username) . "'>" . $this_user_userobject->username . "</a>";

		// delete this line // $this_user_profile = JUserHelper::getProfile($v['user_id']);
		// delete this line // $this_user_avatar_full_url = "/support/images/avatars/" . $this_user_profile->profile['avatar'];
		$this_user_avatar_full_url = pass_userid_get_avatar_url($v['user_id']);

		// should this be the last question on question, give the bottom a rounded corner
		$round_bottom_class = "";
		if( $x == count($question_updates_and_questions_on_questions) )
			$round_bottom_class = "class='round_bottom'";

		$question_update_to_print = pass_user_object_and_text_then_return_clean_text($this_user_userobject,$v['user_text']);

		$staff_edit_this_question_update = "";
                $staff_edit_this_question_to_question = "";
                if( $user->groups[8] == 8 )
                {
                        if($v['type'] == "question_updates")
                                $staff_edit_this_question_update = "<div style='font-size:10px;'><a href='" . JURI::base() . "administrator/index.php?row_id=" . $v['id'] . "&task_a=search_for_edit&option=com_communitysupport&task=database_access&table_name=%23__question_updates' target='_blank'>Edit</a></div>";
                        if($v['type'] == "question_to_question")
                                $staff_edit_this_question_to_question = "<div style='font-size:10px;'><a href='" . JURI::base() . "administrator/index.php?row_id=" . $v['id'] . "&task_a=search_for_edit&option=com_communitysupport&task=database_access&table_name=%23__question_to_question' target='_blank'>Edit</a></div>";
                }

		$commenter_points_text = get_user_points($this_user_userobject->id,"number link");

		$echo_question_updates .= "
<div style='padding:15px; border:1px solid #d6d6d6; border-top:0px; background:#ebebeb;' $round_bottom_class >
	<table style='width:100%;'>
		<tr>
			<td style='padding-right:15px;'>
				<div style='font-size:12px; max-width:500px; overflow:auto;'>$question_update_to_print</div>
				$staff_edit_this_question_update
				$staff_edit_this_question_to_question
			</td>
			<td style='width:100px;' valign='top'>
				<img src='$this_user_avatar_full_url' style='width:40px;' class='user_avatar' />
				<div class='smallgrey'>
					$link_to_user_profile<br />
					$commenter_points_text<br />
					" . date("Y-m-d h:i a",$k - (60*60*4)) . " EST
				</div>
			</td>
		</tr>
	</table>
</div>
";
		$x++;
	}
}






// print the question
//
// generate link to question category
$category_title = str_replace("-"," ",$exploded_url[3]);
// do we need to turn < into %lt; ?
$query = "SELECT `group_id` FROM #__user_usergroup_map WHERE `user_id` = " . $question_details[0]->asker_id . ";";
$db->setQuery($query);
$asker_details = $db->loadObjectList();

$asker = JFactory::getUser($question_details[0]->asker_id);
$asker_profile = JUserHelper::getProfile($question_details[0]->asker_id);
// $asker_avatar_full_url = "/support/images/avatars/" . $asker_profile->profile['avatar'];

$asker_avatar_full_url = pass_userid_get_avatar_url($question_details[0]->asker_id);

if( $asker_details[0]->group_id != 8 )
{
/*
	echo "	<div class='question_details'>
			" . nl2br(htmlspecialchars($question_details[0]->description)) . "
			$echo_question_updates
			$echo_post_question_to_question_form
			$echo_post_answer_form
			$echo_question_update
		</div>
	";
*/
	$question_text = nl2br(htmlspecialchars($question_details[0]->description));
}
else
{
/*
	echo "  <div class='question_details'>
			" . nl2br($question_details[0]->description) . "
			$echo_question_updates
			$echo_post_question_to_question_form
			$echo_post_answer_form
			$echo_question_update
		</div>
	";
*/
	$question_text = nl2br($question_details[0]->description);
}

$asker_avatar_full_url = pass_userid_get_avatar_url($question_details[0]->asker_id);
$link_to_asker = "<a href='/support/community-support/users/" . str_replace('.','&per;',$asker->username) . "'>" . $asker->username . "</a>";
$date_question_asked = date("Y-m-d g:i a",$question_details[0]->utc_n_ask_date - (60*60*4));
$question_hits = number_format($question_details[0]->hits);






// create the html to show within the div that holds the question category
$category_array = pass_question_id_return_category_array($question_details[0]->id);
$category_info_html = "Category: ";
$category_info_html .= "<a href='" . $category_array[0]->url . "'>" . $category_array[0]->title . "</a>";
if($category_array[1])
	$category_info_html .= " &gt;&gt; <a href='" . $category_array[1]->url . "'>" . $category_array[1]->title . "</a>";






// create the html to show if this question is tagged
if( $user->groups[8] == 8 )
{
	$query = "
		SELECT `tags`.*
		FROM #__tags as `tags`, #__tagged as `tagged`
		WHERE	`tagged`.`option` = 'com_communitysupport' AND
			`tagged`.`view` = 'show_question' AND
			`tagged`.`option_view_id` = " . $question_details[0]->id . " AND
			`tagged`.`tag_id` = `tags`.`id`
		;
	";
	$db->setQuery($query);
	$this_question_tags = $db->loadObjectList();
	if( $this_question_tags )
	{
		foreach($this_question_tags as $tqt_k => $tqt_v )
			$this_question_tags_html .= "<a href='/support/tags/" . $tqt_v->alias . "' style='padding-right:8px;'>" . htmlentities($tqt_v->title,ENT_QUOTES) . "</a>";
		$tag_info_html = "<div>Tagged: " . $this_question_tags_html . "</div>";
	}
}






// allow admins to easily edit this article
$staff_edit_this_link = "";
$label_this_question_asker_as_customer = "";
if( $user->groups[8] == 8 )
{
	$staff_edit_this_link = "<div style='font-size:10px;'><a href='" . JURI::base() . "administrator/index.php?row_id=" . $question_details[0]->id . "&task_a=search_for_edit&option=com_communitysupport&task=database_access&table_name=%23__questions' target='_blank'>Edit</a></div>";
	$label_this_question_asker_as_customer = pass_type_and_type_id_return_is_customer_html_form("question",$question_details[0]->id);
}

// asker point count
$asker_points_text = get_user_points($asker->id,"number link");

	




$question_bottom_class = "";
if( count($question_updates_and_questions_on_questions) > 0 )
	$question_bottom_class = "straight_bottom";

echo "
        <div class='white_box $question_bottom_class'>
                <h1 style='font-size:26px;'>" . htmlspecialchars($question_details[0]->question) . "</h1>
		<div style='margin-bottom:20px; margin-top:10px; clear:both; color:#6e6e6e;'>$category_info_html</div>
		<div style='margin-bottom:20px; margin-top:10px; clear:both; color:#6e6e6e;'>$tag_info_html</div>
		<div style='float:right; width:110px; margin:0px 0px 25px 25px;'>
			<img src='$asker_avatar_full_url' class='user_avatar' /><br />
			$link_to_asker
			<div>$asker_points_text</div>
			<div class='smallgrey' style='margin-top:10px;'>
				Asked:<br />
				$date_question_asked EST<br /><br />
				Hits: <span name='page_views' id='page_views'>$question_hits</span>
			</div>
			$label_this_question_asker_as_customer
		</div>
		<div>
			<div style='min-height:110px;'>$question_text</div>
			$staff_edit_this_link
			<div style='margin:20px 0px;'>$question_action</div>
		</div>

		<div style='clear:both;'></div>

		$echo_post_question_to_question_form
	        $echo_post_answer_form
        	$echo_question_update
        </div>
	$echo_question_updates
	<div style='margin-bottom:40px;'></div>
";






// is there a staff best answer?
if( $question_details[0]->best_answer_staff != 0 AND $question_details[0]->best_answer_staff != $question_details[0]->best_answer_user )
{
	$query = "SELECT * FROM #__answers WHERE `id` = " . $question_details[0]->best_answer_staff . ";";
	$db->setQuery($query);
	$staff_best_answer = $db->loadObjectList();
	pass_answer_object_print_answer($staff_best_answer[0],$question_details,"staff_best_answer");
	$document->setMetaData( "description", substr(nl2sp(strip_tags($staff_best_answer[0]->answer)),0,152) . "..." );
}






// is there a user best answer?
if( $question_details[0]->best_answer_user != 0 )
{
        $query = "SELECT * FROM #__answers WHERE `id` = " . $question_details[0]->best_answer_user . ";";
        $db->setQuery($query);
        $user_best_answer = $db->loadObjectList();
        pass_answer_object_print_answer($user_best_answer[0],$question_details,"user_best_answer");
	$document->setMetaData( "description", substr(nl2sp(strip_tags($user_best_answer[0]->answer)),0,152) . "..." );
}






// print all other answers
$query = "SELECT * FROM #__answers WHERE `question_id` = " . $question_details[0]->id . " AND (`id` != " . $question_details[0]->best_answer_user . " AND `id` != " . $question_details[0]->best_answer_staff . ");";
$db->setQuery($query);
$answers = $db->loadObjectList();
if($answers)
{
	echo "<h2 style='border-bottom:1px solid #ddd; margin-top:30px; padding-bottom:10px; margin-bottom:20px; color:#000; font-size:18px;'>OTHER ANSWERS</h2>";
	foreach($answers as $k => $answer_object)
	{
		pass_answer_object_print_answer($answer_object,$question_details);
		$document->setMetaData( "description", substr(nl2sp(strip_tags($answer_object->answer)),0,152) . "..." );
	}
}






function pass_answer_object_print_answer($answer_object,$question_details,$best = false)
{
	$user = JFactory::getUser();
	$db = JFactory::getDbo();

	$user_answerer = JFactory::getUser($answer_object->answerer_id);
	$user_answerer_avatar_full_url = pass_userid_get_avatar_url($answer_object->answerer_id);

	$form_id_post_comment_to_answer = "form_comment_on_answer_" . $answer_object->id;
	$comment_on_this_answer_button = "<a name='post_a_comment'></a><input class='std_blue_button' type='button' value='Comment on this answer' onClick=\"jQuery('#$form_id_post_comment_to_answer').slideToggle('slow');\" style='display:inline;'>";






	// VOTING

	// grab the total number of up votes
	$query = "SELECT sum(`vote`) as 'votes' FROM #__votes WHERE `component` = 'com_communitysupport' AND `object_type` = 'answer' AND `object_id` = " . $answer_object->id . " AND `vote` = 1;";
	$db->setQuery($query);
	$results = $db->loadObjectList();
	$total_upvotes = $results[0]->votes;
	// grab the total number of down votes
	$query = "SELECT sum(`vote`) as 'votes' FROM #__votes WHERE `component` = 'com_communitysupport' AND `object_type` = 'answer' AND `object_id` = " . $answer_object->id . " AND `vote` = -1;";
        $db->setQuery($query);
        $results = $db->loadObjectList();
        $total_downvotes = $results[0]->votes;

	$id_answer_upvote = "upvote_answer_" . $answer_object->id;
	$id_answer_downvote = "downvote_answer_" . $answer_object->id;
	$voting = "
<div class='vote_div'>
	<form method='post' name='$id_answer_upvote' id='$id_answer_upvote' class='f_vote_option'>
		<input type='hidden' name='object_type' id='object_type' value='answer' />
		<input type='hidden' name='object_id' id='object_id' value='" . $answer_object->id . "' />
		<input type='hidden' name='component' id='component' value='qa' />
		<input type='hidden' name='vote_value' id='vote_value' value='1' />
		<input type='hidden' name='sc_task' id='sc_task' value='vote' />
		<div class='thumbs_up' onClick=\"document.getElementById('$id_answer_upvote').submit();\"></div>
	</form>
	<div class='vote_sum'>" . ($total_upvotes + $total_downvotes) . "</div>
	<form method='post' name='$id_answer_downvote' id='$id_answer_downvote' class='f_vote_option'>
                <input type='hidden' name='object_type' id='object_type' value='answer' />
                <input type='hidden' name='object_id' id='object_id' value='" . $answer_object->id . "' />
                <input type='hidden' name='component' id='component' value='qa' />
                <input type='hidden' name='vote_value' id='vote_value' value='-1' />
		<input type='hidden' name='sc_task' id='sc_task' value='vote' />
                <div class='thumbs_down' onClick=\"document.getElementById('$id_answer_downvote').submit();\"></div>
        </form>
</div>
	";






	$preview_answer_comment_div_id = "preview_answer_comment_" . $answer_object->id;
	$textarea_answer_comment_id = "answer_comment_" . $answer_object->id;
	if($user->guest)
		$post_your_comment = "  <form name='$form_id_post_comment_to_answer' id='$form_id_post_comment_to_answer' class='form_comment_on_answer'>
						<div id='system-message-container'><div id='system-message'><div class='alert alert-notice'><div>
					                <p>You must <a href='/support/login'>login</a> before you can post a comment about this answer.</p>
					        </div></div></div></div>
					</form>
		";
	else
		$post_your_comment = "	<form name='$form_id_post_comment_to_answer' id='$form_id_post_comment_to_answer' class='form_comment_on_answer' method='post'>
						<div class='unique_answer_comment' name='$preview_answer_comment_div_id' id='$preview_answer_comment_div_id'></div>
						<textarea name='$textarea_answer_comment_id' id='$textarea_answer_comment_id' onKeyUp=\"previewInput('$textarea_answer_comment_id','$preview_answer_comment_div_id');\"></textarea>
						<input type='hidden' name='answer_id' id='answer_id' value='" . $answer_object->id . "' />
						<input type='hidden' name='sc_task' id='sc_task' value='submit_answer_comment' />
						<input class='btn btn-info' type='submit' value='Submit this comment!' />
					</form>
		";






	// do we have any answer comments?
	$query = "SELECT * FROM #__answer_comments WHERE `answer_id` = " . $answer_object->id . ";";
	$db->setQuery($query);
	$answer_comments = $db->loadObjectList();
	$echo_answer_comments = "";
	if($answer_comments)
	{
		// $echo_answer_comments = "<div style='margin-top:10px;'>";
		$echo_answer_comments = "<div>";

		$x = 1;
		foreach($answer_comments as $k => $v)
		{
			$full_url_to_commenter_avatar = pass_userid_get_avatar_url($v->user_id);
			$commenter = JFactory::getUser($v->user_id);

			$link_to_commenter_profile = "<a href='/support/community-support/users/" . str_replace('.','&per;',$commenter->username) . "'>" . $commenter->username . "</a>";
			$date_of_comment = date("Y-m-d g:i a",$v->utc_n_timestamp - (60*60*4));

			// if this is the last comment, it needs to have a round bottom
			$rounded_bottom_class = "";
			if( $x == count($answer_comments) )
				$rounded_bottom_class = "class='round_bottom'";

			// only comments on the best answer will get a border
			$comment_border = "padding:15px 15px 15px 76px; border:1px solid #ddd; border-top:0px;";
			if( $answer_object->id != $question_details[0]->best_answer_user AND $answer_object->id != $question_details[0]->best_answer_staff )
				$comment_border = "padding:15px 15px 15px px; border-top:1px dotted #ccc;";

			$answer_comment_to_print = pass_user_object_and_text_then_return_clean_text($commenter,$v->comment);

			// if staff response, show star
			$is_staff_answer = "<br />";
			if( $commenter->groups[8] == 8 )
			        $is_staff_answer = "<div style='padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 2px;background-size:12px 12px;'>Staff</div>";

			// allow admins to easily edit this answer comment
			$staff_edit_this_answer_comment = "";
			$mark_this_answer_comment_as_customer = "";
			if( $user->groups[8] == 8 )
			{
			        $staff_edit_this_answer_comment = "<div style='font-size:10px;'><a href='" . JURI::base() . "administrator/index.php?row_id=" . $v->id . "&task_a=search_for_edit&option=com_communitysupport&task=database_access&table_name=%23__answer_comments' target='_blank'>Edit</a></div>";

				if( $commenter->groups[8] != 8 )
					$mark_this_answer_comment_as_customer = pass_type_and_type_id_return_is_customer_html_form("answer_comment",$v->id);
			}

			$commenter_points_text = get_user_points($commenter->id,"number link");

			$echo_answer_comments .= "
				<div style='$comment_border ' $rounded_bottom_class>
				        <table style='width:100%'>
				                <tr>
				                        <td style='padding-right:15px;'>
                                				<div style='font-size:12px;'>$answer_comment_to_print</div>
								$staff_edit_this_answer_comment
				                        </td>
							<td style='width:96px;' valign='top'>
								<img src='$full_url_to_commenter_avatar' style='width:40px;' class='user_avatar' />
								<div class='smallgrey'>
									$link_to_commenter_profile<br />
									$commenter_points_text
									$is_staff_answer
									$date_of_comment EST
								</div>
								$mark_this_answer_comment_as_customer
							</td>
				                </tr>
				        </table>
				</div>
			";

			$x++;
		}

		$echo_answer_comments .= "</div>";
	}






	// ---------------------------------------------------------------------------------------------
	// create buttons to allow the user to choose the best answer
	// ---------------------------------------------------------------------------------------------
	$choose_this_as_best_answer = "";
	if(
		($user->id == $question_details[0]->asker_id) AND
		($question_details[0]->best_answer_user == 0)
	)
	{
		$choose_this_as_best_answer = "
		<form method='post' style='display:inline;'>
			<input type='hidden' name='sc_task' id='sc_task' value='choose_as_best_answer' />
			<input type='hidden' name='answer_id' id='answer_id' value='" . $answer_object->id . "' />
			<input type='hidden' name='question_id' id='question_id' value='" . $question_details[0]->id . "' />
			<input class='std_blue_button' type='submit' value='Choose this as Best Answer!' />
		</form>
		";
	}

	
	



	$best_description = "";
	switch($best)
	{
		case "staff_best_answer":
			$best_description = "<h2 class='best_answer_text'>Best answer chosen by InMotion Hosting staff</h2>";
			break;
		case "user_best_answer":
			$best_description = "<h2 class='best_answer_text'>Best answer chosen by User</h2>";
			break;
		default:
			$best_description = "";
	}

	$date_answer_posted = date("Y-m-d g:i a",$answer_object->utc_n_answer_date - (60*60*4));
	$answerer_avatar = "<img src='$user_answerer_avatar_full_url' class='user_avatar' style='max-width:60px;' />";
	$link_to_answerer_profile = "<a href='/support/community-support/users/" . str_replace(".","&per;",$user_answerer->username) . "'>" . $user_answerer->username . "</a>";

	// does this question need a round bottom?
	$rounded_bottom_class = "";
	if( count($answer_comments) > 0 )
		$rounded_bottom_class = "straight_bottom";

	// only best answers get a white box
	$white_box_class = "white_box";
	$not_best_answer_class = "";
	if( $answer_object->id != $question_details[0]->best_answer_user AND $answer_object->id != $question_details[0]->best_answer_staff )
	{
		$white_box_class = "";
		$not_best_answer_class = "not_best_answer";
	}

	$answer_to_print = $answer_object->answer;
	if( $user_answerer->groups[8] != 8 )
		$answer_to_print = htmlspecialchars($answer_object->answer);
	$answer_to_print = nl2br($answer_to_print);
	$answer_to_print = pass_user_object_and_text_then_return_clean_text($user_answerer,$answer_object->answer);


if( $answer_object->id != $question_details[0]->best_answer_user AND $answer_object->id != $question_details[0]->best_answer_staff )
{
        $not_best_answer_comment = $echo_answer_comments;
        $best_answer_comment = "</div>";
}
else
{
        $not_best_answer_comment = "";
        $best_answer_comment = "
                </div>
                $echo_answer_comments
        ";
}


// allow admins to easily edit this article
$staff_edit_this_link = "";
$staff_flag_this_answer_as_customer = "";
if( $user->groups[8] == 8 )
{
        $staff_edit_this_link = "<div style='font-size:10px;'><a href='" . JURI::base() . "administrator/index.php?row_id=" . $answer_object->id . "&task_a=search_for_edit&option=com_communitysupport&task=database_access&table_name=%23__answers' target='_blank'>Edit</a></div>";

	if ($user_answerer->groups[8] != 8)
		$staff_flag_this_answer_as_customer = pass_type_and_type_id_return_is_customer_html_form("answer",$answer_object->id);
}



// if staff response, show star
$is_staff_answer = "";
if( $user_answerer->groups[8] == 8 )
	$is_staff_answer = "<div style='padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 2px;background-size:15px 15px;'>Staff</div>";


// answerer points
$answerer_points_text = get_user_points($user_answerer->id,"number link");


	echo "
<div class='$white_box_class $rounded_bottom_class $not_best_answer_class'>
	$best_description
	<table style='width:100%;'>
		<tr>
			<td style='padding-right:15px; width:50px;' valign='top'>$voting</td>
			<td valign='top'>

				<div style='float:right; width:110px; margin:0px 0px 25px 25px;'>
					$answerer_avatar<br />
                		        $link_to_answerer_profile
					$is_staff_answer
					<div>$answerer_points_text</div>
                        		<div class='smallgrey' style='margin-top:10px;'>
						$date_answer_posted EST
                		        </div>
					$staff_flag_this_answer_as_customer
		                </div>

				$answer_to_print
				$staff_edit_this_link

				<div style='clear:both; margin:10px 0px;'>
					$comment_on_this_answer_button
				        $choose_this_as_best_answer
				        $post_your_comment
				</div>

				$not_best_answer_comment

			</td>
		</tr>
	</table>
$best_answer_comment
";

}





include_once("includes/social_media_buttons.php");






include_once("includes/do_you_want_to_receive_notifications_on_this_page_changing.php");






include_once("includes/admin_tools.php");






// increase the hits for cached pages
// 2014.07.11.0810 bradm - this has been moved to the template's index.php file.
/*
echo "
<script type='text/javascript'>
        jQuery.post('/support/includes/increase_hits.php',
        {
                option:'com_communitysupport',
                view:'show_question',
                id:'" . $question_details[0]->id . "'
        },
	function(data){
		jQuery('#page_views').html(data);
	},
	'text'
	);
</script>
";
*/






?>
