<?






// if the user is adding an update to their question
if( $_POST['sc_task'] == "question_update" AND is_numeric($_POST['question_id']) AND !$user->guest AND $user->id == $question_details[0]->asker_id AND does_item_exist_in_database("question_updates","update",addslashes($_POST['ta_question_update'])) == false )
{
        $query = "INSERT INTO #__question_updates (`id` ,`question_id` ,`utc_n_timestamp` ,`update`)VALUES (NULL, " . $_POST['question_id'] . ", $current_utc_n, '" . addslashes($_POST['ta_question_update']) . "');";
        $db->setQuery($query);

        try
       	{
               	$result = $db->execute();
                JFactory::getApplication()->enqueueMessage('Thank you, more information has been added to your question!', 'success');
		$need_to_send_email = "update_to_question";
		cc_clear_page_cache();
        }
       	catch (Exception $e)
        {
       	    // catch any database errors.
               	JFactory::getApplication()->enqueueMessage('Your update failed to post', 'error');
        }
}






?>
