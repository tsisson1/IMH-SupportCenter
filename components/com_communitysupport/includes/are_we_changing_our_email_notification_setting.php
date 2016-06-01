<?






if(
	$_POST['sc_task'] == "change_email_notification_settings" AND
	$user->id == $_POST['user_id'] AND
	is_numeric( $_POST['question_id'] ) AND
	( $_POST['get_emails'] == "yes" OR $_POST['get_emails'] == "no" )
)
{
	switch( $_POST['get_emails'] )
	{
		case "yes":
			$query = "DELETE FROM #__questions_do_not_email_me WHERE `question_id` = '" . $_POST['question_id'] . "' AND `user_id` = '" . $user->id . "';";
			$update_email_notification = "Email notifications for this question have been ENABLED.";
			break;
		case "no":
			$query = "INSERT INTO #__questions_do_not_email_me (`id` ,`user_id` ,`question_id`)VALUES (NULL , '" . $user->id . "', '" . $_POST['question_id'] . "');";
			$update_email_notification = "Email notifications for this question have been DISABLED.";
			break;
	}

	$db->setQuery($query);
	try
	{
 		// Execute the query in Joomla 2.5.
		$result = $db->query();
		JFactory::getApplication()->enqueueMessage("$update_email_notification", 'success');
	}
	catch (Exception $e)
	{
		// catch any database errors.
		JFactory::getApplication()->enqueueMessage('Error - your email notification settings for this question have not changed.', 'error');
	}
}






?>
