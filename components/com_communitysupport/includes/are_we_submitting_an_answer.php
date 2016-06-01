<?






// are we submitting an answer?
if($_POST['sc_task'] == 'submit_answer' AND is_numeric($_POST['question_id']) AND !$user->guest AND does_item_exist_in_database("answers","answer",addslashes($_POST['ta_submitted_answer'])) == false)
{
        $query = "INSERT INTO #__answers (`id`, `question_id`, `utc_n_answer_date`, `answerer_id`, `answer`, `votes_good`, `votes_bad`, `user_ip`) VALUES
(NULL, " . $_POST['question_id'] . ", $current_utc_n, " . $user->id . ", '" . addslashes($_POST['ta_submitted_answer']) . "', 0, 0, '" . addslashes($_SERVER['HTTP_X_FORWARDED_FOR']) . "');";
        $db->setQuery($query);
        try
        {
                $result = $db->execute();
                JFactory::getApplication()->enqueueMessage('Thank you for submitting an answer!', 'success');
                $need_to_send_email = "new_answer";

		// clear the user's point cache now that they posted an answer
		gf_clear_user_points($user->id);

		cc_clear_page_cache();
        }
        catch (Exception $e)
        {
            // catch any database errors.
                JFactory::getApplication()->enqueueMessage('Your answer failed to post', 'error');
        }
}






?>
