<?






// ---------------------------------------------------------------------------
// Are we submitting a question on a question?
// ---------------------------------------------------------------------------
if(
        $_POST['sc_task'] == "submit_question_to_question" AND
        !$user->guest AND
        is_numeric($_POST['question_id']) AND
	does_item_exist_in_database("question_to_question","question",addslashes($_POST['ta_question_to_question'])) == false
)
{
        $query = "INSERT INTO #__question_to_question (`id` ,`question_id` ,`user_id` ,`question` ,`utc_n_timestamp`)VALUES (NULL , '" . $_POST['question_id'] . "', '" . $user->id . "', '" . addslashes($_POST['ta_question_to_question']) . "', '$current_utc_n');";
        $db->setQuery($query);
        try
        {
                $result = $db->execute();
                JFactory::getApplication()->enqueueMessage('Thank you for your question!', 'success');
                $need_to_send_email = "question_on_question";
		cc_clear_page_cache();
        }
        catch (Exception $e)
        {
                JFactory::getApplication()->enqueueMessage('Your question failed to post', 'error');
        }
}






?>
