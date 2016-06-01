<?






// are we posting a new answer comment?
$post_key_of_comment = "answer_comment_" . $_POST['answer_id'];
if($_POST['sc_task'] == 'submit_answer_comment' AND is_numeric($_POST['answer_id']) AND !$user->guest AND does_item_exist_in_database("answer_comments","comment",addslashes($_POST[$post_key_of_comment])) == false)
{
	$post_key_of_comment = "answer_comment_" . $_POST['answer_id'];

	if( $_POST[$post_key_of_comment] == "" )
	{
		JFactory::getApplication()->enqueueMessage('You submitted a blank comment!', 'error');
	}
	else
	{
        	$query = "INSERT INTO #__answer_comments (
`id` ,
`answer_id` ,
`user_id` ,
`utc_n_timestamp` ,
`comment`,
`user_ip`
)
VALUES (
NULL, " . $_POST['answer_id'] . ", " . $user->id . ", $current_utc_n, '" . addslashes($_POST[$post_key_of_comment]) . "', '" . addslashes($_SERVER['HTTP_X_FORWARDED_FOR']) . "'
);";
	        $db->setQuery($query);
        	try
	        {
        	        $result = $db->execute();
                	JFactory::getApplication()->enqueueMessage('Thank you for posting a comment!', 'success');
			$need_to_send_email = "new_answer_comment";
			gf_clear_user_points($user->id);
			cc_clear_page_cache();
        	}
	        catch (Exception $e)
        	{
			// catch any database errors.
	                JFactory::getApplication()->enqueueMessage('Your comment failed to post', 'error');
        	}
	}
}






?>
