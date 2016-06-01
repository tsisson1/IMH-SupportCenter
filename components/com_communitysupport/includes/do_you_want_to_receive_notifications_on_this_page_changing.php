<?

// guests will not see this
if(! $user->guest)
{
	$question_contributors = return_array_of_question_contributors($question_details[0]->id);

	$is_a_contributor = false;

	$wants_email = true;
	$wants_email_yes_checked = "checked";
	$wants_email_no_checked = "";

	foreach($question_contributors as $k => $v)
	{
		if($k == $user->id)
		{
			$is_a_contributor = true;

			$query = "SELECT * FROM #__questions_do_not_email_me WHERE `user_id` = " . $user->id . " AND `question_id` = " . $question_details[0]->id . ";";
			$db->setQuery($query);
			$results_do_not_send_me_emails = $db->loadObjectList();
			if( $results_do_not_send_me_emails )
			{
				$wants_email = false;
				$wants_email_yes_checked = "";
			        $wants_email_no_checked = "checked";
			}
		}
	}

	if( $is_a_contributor == true )
	{
		echo "
		<div class='main_comment_submission_div'>

			<div class='small_full_gear_grey'>
				<a onClick=\"jQuery('#qa_comment_notifications_form').slideToggle('slow');\" style='cursor:pointer;'>Email Notifications</a>
			</div>

			<form style='display:none; margin:15px 0px 0px 0px;' method='post' name='qa_comment_notifications_form' id='qa_comment_notifications_form'>
				<p>Do you want to receive an email whenever this page updates? This would include email notifications when:<p>
				<ul>
					<li>A new answer is submitted</li>
					<li>Comments are made on answers</li>
					<li>A best answer is chosen</li>
				</ul>
				<input type='radio' name='get_emails' id='get_emails' value='yes' $wants_email_yes_checked > Yes<br />
				<input type='radio' name='get_emails' id='get_emails' value='no' $wants_email_no_checked > No <br />
				<input type='hidden' name='sc_task' id='sc_task' value='change_email_notification_settings' />
				<input type='hidden' name='user_id' id='user_id' value='" . $user->id . "' />
				<input type='hidden' name='question_id' id='question_id' value='" . $question_details[0]->id . "' />
				<input type='submit' name='Update' value='Update' class='btn btn-info' />
			</form>

		</div>
		";
	}
}

?>
