<?





if($question_details[0]->id)
	$full_url_to_question = "http://www.inmotionhosting.com" . pass_question_id_return_question_url($question_details[0]->id);

switch($need_to_send_email)
{
        case "new_answer":
		$question_contributors = return_array_of_question_contributors($question_details[0]->id);
		foreach($question_contributors as $k => $v)
		{
			// does this user want a notification?
			if( does_the_user_want_a_qa_email_notification($question_contributors,$k,$question_details[0]->id) == true AND $user->id != $k )
			{
				// anonymous questions - calculate email address
				$recipient_email_address = $v->email;					// normal behavior before anonymous question email addresses
				$recipient_name = $v->username;
				if (	$v->id == $question_details[0]->asker_id AND			// if this question contributor is the asker
					$question_details[0]->user_email != ""				// if they entered an email address
				)
				{
					$recipient_email_address = $question_details[0]->user_email;
					$recipient_name = "there";
				}

				$unsubscribe_url_value = "unsubscribe_user=" . rand(1000,9999) . $v->id . "--" . md5($v->email);
				$mail_body = sprintf(
                                        $new_answer_email_message,
                                        $recipient_name,
                                        $question_details[0]->question,
					$full_url_to_question,
					$unsubscribe_url_value
		                );
				$mail_body_html = sprintf(
                                        $new_answer_email_message_html,
                                        htmlentities($recipient_name,ENT_QUOTES),
                                        htmlentities($question_details[0]->question,ENT_QUOTES),
                                        $full_url_to_question,
					$unsubscribe_url_value
                                );
				$mail_body_html = pass_title_body_return_html_email("New answer received!",$mail_body_html);
				// cs_send_email($v->email,"NEW ANSWER SUBMITTED - " . $question_details[0]->question,$mail_body);
				cs_send_email_with_html($recipient_email_address,"NEW ANSWER SUBMITTED - " . $question_details[0]->question,$mail_body,$mail_body_html);
			}
		}

		$mail_body = sprintf($new_answer_email_message,"STAFF",$question_details[0]->question,$full_url_to_question,"unsubscribe_user=you_cannot");
		$mail_body_html = sprintf($new_answer_email_message_html,"STAFF",$question_details[0]->question,$full_url_to_question,"unsubscribe_user=you_cannot");
		$mail_body_html = pass_title_body_return_html_email("New answer received!",$mail_body_html);
                // cs_send_email("daily_alerts@gadgets.inmotionhosting.com","ADMIN EMAIL - NEW ANSWER SUBMITTED - " . $question_details[0]->question,$mail_body);
		cs_send_email_with_html("daily_alerts@gadgets.inmotionhosting.com","ADMIN EMAIL - NEW ANSWER SUBMITTED - " . $question_details[0]->question,$mail_body,$mail_body_html);
		insert_new_staff_alert("new answer",JURI::current());

                break;
        case "question_on_question":
	case "update_to_question":

		if( $need_to_send_email == "question_on_question" )
			$additional_info_added_to_question = $_POST['ta_question_to_question'];
		elseif ( $need_to_send_email == "update_to_question" )
			$additional_info_added_to_question = $_POST['ta_question_update'];

		$question_contributors = return_array_of_question_contributors($question_details[0]->id);
                foreach($question_contributors as $k => $v)
                {
                        // does this user want a notification?
                        if( does_the_user_want_a_qa_email_notification($question_contributors,$k,$question_details[0]->id) == true AND $user->id != $k )
                        {
				$unsubscribe_url_value = "unsubscribe_user=" . rand(1000,9999) . $v->id . "--" . md5($v->email);
				$mail_body = sprintf(
                                	$new_follow_up_question_email_message,
                                        $v->username,
                                        $question_details[0]->question,
                                        $additional_info_added_to_question,
					$full_url_to_question,
					$unsubscribe_url_value
		                );
				$mail_body_html = sprintf(
                                        $new_follow_up_question_email_message_html,
                                        $v->username,
                                        htmlentities($question_details[0]->question,ENT_QUOTES),
                                        htmlentities($additional_info_added_to_question,ENT_QUOTES),
                                        $full_url_to_question,
					$unsubscribe_url_value
                                );
				$mail_body_html = pass_title_body_return_html_email("A new comment has been submitted!",$mail_body_html);
		                // cs_send_email($v->email,"NEW COMMENT TO QUESTION  - " . $question_details[0]->question,$mail_body);
				cs_send_email_with_html($v->email,"NEW COMMENT TO QUESTION  - " . $question_details[0]->question,$mail_body,$mail_body_html);
			}
		}

		$mail_body = sprintf($new_follow_up_question_email_message,"STAFF",$question_details[0]->question,$additional_info_added_to_question,$full_url_to_question,"unsubscribe_user=you_cannot");
		$mail_body_html = sprintf($new_follow_up_question_email_message_html,"STAFF",htmlentities($question_details[0]->question,ENT_QUOTES),htmlentities($additional_info_added_to_question,ENT_QUOTES),$full_url_to_question,"unsubscribe_user=you_cannot");
		$mail_body_html = pass_title_body_return_html_email("A new comment has been submitted!",$mail_body_html);
		// cs_send_email("daily_alerts@gadgets.inmotionhosting.com","ADMIN EMAIL - NEW COMMENT TO QUESTION  - " . $question_details[0]->question,$mail_body);
		cs_send_email_with_html("daily_alerts@gadgets.inmotionhosting.com","ADMIN EMAIL - NEW COMMENT TO QUESTION  - " . $question_details[0]->question,$mail_body,$mail_body_html);
		insert_new_staff_alert("new question comment",JURI::current());

                break;
	case "new_answer_comment":
                $question_contributors = return_array_of_question_contributors($question_details[0]->id);
                foreach($question_contributors as $k => $v)
                {
                        // does this user want a notification?
                        if( does_the_user_want_a_qa_email_notification($question_contributors,$k,$question_details[0]->id) == true AND $user->id != $k )
                        {
				$unsubscribe_url_value = "unsubscribe_user=" . rand(1000,9999) . $v->id . "--" . md5($v->email);
                                $mail_body = sprintf(
                                        $new_answer_comment_email_message,
                                        $v->username,
                                        $question_details[0]->question,
					$_POST[$post_key_of_comment],
					$full_url_to_question,
					$unsubscribe_url_value
                                );
				$mail_body_html = sprintf(
                                        $new_answer_comment_email_message_html,
                                        $v->username,
                                        htmlentities($question_details[0]->question,ENT_QUOTES),
                                        htmlentities($_POST[$post_key_of_comment],ENT_QUOTES),
                                        $full_url_to_question,
					$unsubscribe_url_value
                                );
				$mail_body_html = pass_title_body_return_html_email("A new comment has been submitted!",$mail_body_html);
                                cs_send_email_with_html($v->email,"NEW COMMENT ON ANSWER - " . $question_details[0]->question,$mail_body,$mail_body_html);
                                // cs_send_email($v->email,"NEW COMMENT ON ANSWER - " . $question_details[0]->question,$mail_body);
                        }
                }

		$mail_body = sprintf($new_answer_comment_email_message,"STAFF",$question_details[0]->question,$_POST[$post_key_of_comment],$full_url_to_question,"unsubscribe_user=you_cannot");
		$mail_body_html = sprintf($new_answer_comment_email_message_html,"STAFF",htmlentities($question_details[0]->question,ENT_QUOTES),htmlentities($_POST[$post_key_of_comment],ENT_QUOTES),$full_url_to_question,"unsubscribe_user=you_cannot");
		$mail_body_html = pass_title_body_return_html_email("A new comment has been submitted!",$mail_body_html);
		// cs_send_email("daily_alerts@gadgets.inmotionhosting.com","ADMIN EMAIL - NEW COMMENT ON ANSWER - " . $question_details[0]->question,$mail_body);
		cs_send_email_with_html("daily_alerts@gadgets.inmotionhosting.com","ADMIN EMAIL - NEW COMMENT ON ANSWER - " . $question_details[0]->question,$mail_body,$mail_body_html);
		insert_new_staff_alert("new answer comment",JURI::current());

                break;
	case "best_answer_chosen":
		$question_contributors = return_array_of_question_contributors($question_details[0]->id);
                foreach($question_contributors as $k => $v)
                {
                        // does this user want a notification?
                        if( does_the_user_want_a_qa_email_notification($question_contributors,$k,$question_details[0]->id) == true AND $user->id != $k )
                        {
				$unsubscribe_url_value = "unsubscribe_user=" . rand(1000,9999) . $v->id . "--" . md5($v->email);
                                $mail_body = sprintf(
                                        $best_answer_chosen_email_message,
                                        $v->username,
                                        $question_details[0]->question,
					$full_url_to_question,
					$unsubscribe_url_value
                                );
				$mail_body_html = sprintf(
                                        $best_answer_chosen_email_message_html,
                                        $v->username,
                                        htmlentities($question_details[0]->question,ENT_QUOTES),
                                        $full_url_to_question,
					$unsubscribe_url_value
                                );
				$mail_body_html = pass_title_body_return_html_email("A Best Answer has been chosen!",$mail_body_html);
                                // cs_send_email($v->email,"BEST ANSWER CHOSEN - " . $question_details[0]->question,$mail_body);
				cs_send_email_with_html($v->email,"BEST ANSWER CHOSEN - " . $question_details[0]->question,$mail_body,$mail_body_html);
                        }
                }

		$mail_body = sprintf($best_answer_chosen_email_message,"STAFF",$question_details[0]->question,$full_url_to_question,"unsubscribe_user=you_cannot");
		$mail_body_html = sprintf($best_answer_chosen_email_message_html,"STAFF",htmlentities($question_details[0]->question,ENT_QUOTES),$full_url_to_question,"unsubscribe_user=you_cannot");
		$mail_body_html = pass_title_body_return_html_email("A Best Answer has been chosen!",$mail_body_html);
		// cs_send_email("daily_alerts@gadgets.inmotionhosting.com","ADMIN EMAIL - BEST ANSWER CHOSEN - " . $question_details[0]->question,$mail_body);
		cs_send_email_with_html("daily_alerts@gadgets.inmotionhosting.com","ADMIN EMAIL - BEST ANSWER CHOSEN - " . $question_details[0]->question,$mail_body,$mail_body_html);
		insert_new_staff_alert("best answer chosen",JURI::current());

		break;
}






?>
