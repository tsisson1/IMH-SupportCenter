<?

// load the user
$community_support_user = str_replace("&per;",".",$exploded_url[4]);
$query = "SELECT `id` FROM #__users WHERE `username` = '" . addslashes($community_support_user) . "';";
$db->setQuery($query);
$user_id = $db->loadObjectList();
$profile_of_user = JFactory::getUser($user_id[0]->id);

$user_profile = load_user_profile($db,$profile_of_user);

if( ! $user_id )
{
	die('<p>user does not exist</p>');
}

$document->setTitle("User Profile: " . $profile_of_user->username . " | InMotion Hosting");
$document->setMetaData('robots','noindex,follow');






// grab all questions answer
$query = "SELECT `questions`.`id`, `questions`.`question` FROM #__answers as `answers`
LEFT JOIN #__questions as `questions` ON `questions`.`id` = `answers`.`question_id`
WHERE `answers`.`answerer_id` = " . $profile_of_user->id . " LIMIT 0,10;";
$db->setQuery($query);
$answered_questions = $db->loadObjectList();
if($answered_questions)
{
	$echo_questions_answered = "<ol>";
	foreach($answered_questions as $k => $v)
	{
		$echo_questions_answered .= "<li><a href='" . pass_question_id_return_question_url($v->id) . "'>" . htmlspecialchars($v->question) . "</a></li>";
	}
	$echo_questions_answereed .= "</ol>";
}
else
	$echo_questions_answered = "<div><i>None.</i></div>";






// grab all questions asked
$query = "SELECT `question`,`id` FROM #__questions WHERE `asker_id` = " . $profile_of_user->id . " AND `approved` != -1 LIMIT 0,10;";
$db->setQuery($query);
$questions_asked = $db->loadObjectList();
if($questions_asked)
{
        $echo_questions_asked = "<ol>";
        foreach($questions_asked as $k => $v)
        {
                $echo_questions_asked .= "<li><a href='" . pass_question_id_return_question_url($v->id) . "'>" . htmlspecialchars($v->question) . "</a></li>";
        }
	$echo_questions_asked  .= "</ol>";
}
else
	$echo_questions_asked = "<div><i>None.</i></div>";






// grab all quizes passed
$query = "
	SELECT	`qc`.`time`,`cat`.`title`,`cat`.`path`
	FROM	#__quiz_completions as `qc`,
		#__quiz as `q`,
		#__categories as `cat`
	WHERE	`qc`.`user_id` = " . $profile_of_user->id . " AND
		`qc`.`quiz_id` = `q`.`id` AND
		`q`.`catid` = `cat`.`id`
";
$db->setQuery($query);
$completed_quizes = $db->loadObjectList();

$echo_completed_quizes = "<div><i>None.</i></div>";
if($completed_quizes)
{
	$echo_completed_quizes = "<ol>";
	foreach($completed_quizes as $cq_k => $cq_v)
	{
		$echo_completed_quizes .= "<li><a href='" . JURI::base() . $cq_v->path . "/quiz'>" . htmlentities($cq_v->title) . "</a> on " . date("Y-m-d",$cq_v->time) . "</li>";
	}
	$echo_completed_quizes .= "</ol>";
}






// ---------------------------------------------------------------------------------------
// profile image
$user_avatar_url = pass_userid_get_avatar_url($profile_of_user->id);
// link to twitter
if( $user_profile->twitter_username != "" )
	$link_to_twitter = "<a href='https://twitter.com/" . htmlentities($user_profile->twitter_username,ENT_QUOTES) . "' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' /></a>";
// link to facebook
if( $user_profile->facebook_url != "" )
        $link_to_facebook = "<a href='" . htmlentities($user_profile->facebook_url,ENT_QUOTES) . "' target='_blank'><img src='//www.inmotionhosting.com/img/icon-facebook.png' /></a>";
// link to google+
if( $user_profile->google_url != "" )
        $link_to_google = "<a href='" . htmlentities($user_profile->google_url,ENT_QUOTES) . "' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' /></a>";





echo "
	<table>
		<tr>
			<td valign='top'><img src='$user_avatar_url' style='margin:0px 15px 15px 0px;' class='sc_rc' /></td>
			<td valign='top'>
				<p>
					" . htmlentities($profile_of_user->username,ENT_QUOTES) . "
					$link_to_twitter
					$link_to_facebook
					$link_to_google
				</p>
				" . pass_tinymce_text_and_script_tags(1,$user_profile->bio) . "
			</td>
		</tr>
	</table>

	<h2>Community involvement</h2>

	<div style='float:left; width:48%;'>
        	<h3>Questions Asked</h3>
		$echo_questions_asked
	</div>

	<div style='float:right; width:48%;'>
        	<h3>Questions Answered</h3>
		$echo_questions_answered
	</div>

	<div style='clear:both;'></div>

	<div style='float:left; width:48%;'>
                <h3>Completed Quizes</h3>
		$echo_completed_quizes
	</div>

	<div style='clear:both;'></div>
";






?>
