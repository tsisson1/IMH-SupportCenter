<?






// ---------------------------------------------------------------------------
// Are we choosing a best answer?
// ---------------------------------------------------------------------------
if(
        ($_POST['sc_task'] == "choose_as_best_answer") AND
        (!$user->guest) AND
        (is_numeric($_POST['answer_id'])) AND
        (is_numeric($_POST['question_id']))
)
{
        $query = "
        UPDATE #__questions SET `best_answer_user` = " . $_POST['answer_id'] . " WHERE `id` = " . $_POST['question_id'] . " AND `asker_id` = " . $user->id . " LIMIT 1;
        ";
        $db->setQuery($query);
        try
        {
                $result = $db->execute();
                JFactory::getApplication()->enqueueMessage('Thank you for choosing a best answer!', 'success');
		$need_to_send_email = "best_answer_chosen";

		// now we need to get the id of the answerer with the best answer so we can clear their point cache
		$query = "SELECT `answerer_id` FROM #__answers WHERE `id` = " . $_POST['answer_id'] . ";";
		$db->setQuery($query);
		$answerer_id = $db->loadResult();
		gf_clear_user_points($answerer_id);

		cc_clear_page_cache();
        }
        catch (Exception $e)
        {
                JFactory::getApplication()->enqueueMessage('Your selection of best answer failed to post.', 'error');
        }
}






?>
