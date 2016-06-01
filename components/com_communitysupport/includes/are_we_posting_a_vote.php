<?






// --------------------------------------------------------------------------
// Are we posting a vote?
// --------------------------------------------------------------------------
$possible_vote_values = array(1,-1);
$possible_object_types = array("answer");
if(
        $_POST['sc_task'] == "vote" AND
        !$user->guest AND
        is_numeric($_POST['vote_value']) AND
        in_array($_POST['vote_value'],$possible_vote_values) AND
        is_numeric($_POST['object_id']) AND
        in_array($_POST['object_type'],$possible_object_types) AND
        $_POST['component'] == "qa"
)
{
	cc_clear_page_cache();

        // has this user already voted?
        // $query = "SELECT sum(`vote`) as 'sum_vote' FROM #__votes WHERE `component` = 'com_communitysupport' AND `object_type` = 'answer' AND `object_id` = " . $_POST['object_id'] . ";";
	$query = "SELECT sum(`vote`) as 'sum_vote' FROM #__votes WHERE `component` = 'com_communitysupport' AND `object_type` = 'answer' AND `object_id` = " . $_POST['object_id'] . " AND `voter_id` = " . $user->id . ";";
        $db->setQuery($query);
        $results = $db->loadObjectList();
        $previous_vote = $results[0]->sum_vote;

        // if they have already voted
        if($previous_vote)
        {
                // did they vote the same?
                if($previous_vote == $_POST['vote_value'])
                        JFactory::getApplication()->enqueueMessage('We appreciate your enthusiasm! ...However we only allow one vote per user.', 'warning');
                else
                {
                        $query = "DELETE FROM #__votes WHERE `component` = 'com_communitysupport' AND `object_type` = 'answer' AND `object_id` = " . $_POST['object_id'] . " AND `voter_id` = " . $user->id . ";";
                        $db->setQuery($query);
                        try
                        {
                                $result = $db->execute();
                                JFactory::getApplication()->enqueueMessage('It looks like you changed your mind? Because you previously voted on this, your votes have been zeroed out. Feel free to vote again!', 'warning');
                        }
                        catch (Exception $e)
                        {
                                // catch any database errors.
                                JFactory::getApplication()->enqueueMessage('Your vote failed to post', 'error');
                        }
                }
        }
        // if they have already voted
        else
        {
                $query = "INSERT INTO #__votes (`id` ,`voter_id` ,`component` ,`object_type` ,`object_id` ,`vote`)VALUES (NULL , '" . $user->id . "', 'com_communitysupport', '" . $_POST['object_type'] . "', '" . $_POST['object_id'] . "', '" . $_POST['vote_value'] . "');";
                $db->setQuery($query);
                try
                {
                        $result = $db->execute();
                        JFactory::getApplication()->enqueueMessage('Thank you for voting!', 'success');
                }
                catch (Exception $e)
                {
                        // catch any database errors.
                        JFactory::getApplication()->enqueueMessage('Your vote failed to post', 'error');
                }
        }
}






?>
