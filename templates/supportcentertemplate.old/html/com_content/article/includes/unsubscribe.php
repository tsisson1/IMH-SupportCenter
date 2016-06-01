<?

// ####################12343234--md5(email)

$auto_unsubscribe_status = true;

$unable_to_unsubscribe_error_message = "We're sorry, but unfortunately there was a problem unsubscribing you from email alerts for this article.";
$able_to_unsubscribe_message = "You have successfully unsubscribed from email alerts on this article.";

// grab variables from url
$eu = explode("--",$_GET['unsubscribe']);
$user_id_from_url = substr($eu[0],4);
$md5_of_email_from_url = $eu[1];

if (!is_numeric($user_id_from_url))
	$auto_unsubscribe_status = false;

if (strlen($md5_of_email_from_url) != 32)
	$auto_unsubscribe_status = false;

if ($auto_unsubscribe_status == false)
{
	JFactory::getApplication()->enqueueMessage("$unable_to_unsubscribe_error_message", 'Error');
}
else
{
	$db = JFactory::getDbo();

	// grab the user's email address
	$query = "SELECT `email` FROM #__users WHERE `id` = " . addslashes($user_id_from_url) . " LIMIT 1;";
	$db->setQuery($query);
	$email_address_from_database = $db->loadResult();

	if($email_address_from_database)
	{
		// does the hash in the url match up?
		if ($md5_of_email_from_url == md5($email_address_from_database))
		{

			// is this person already unsubscribed?
			$query = "SELECT count(`id`) FROM #__content_do_not_email_me WHERE `user_id` = $user_id_from_url AND `article_id` = " . $this->item->id;
			$db->setQuery($query);
			$already_unsubscribed = $db->loadResult();

			if($already_unsubscribed == 0)
			{
				$query = "INSERT INTO #__content_do_not_email_me (`id`,`user_id`,`article_id`) VALUES(NULL,$user_id_from_url," . $this->item->id . ");";
				gf_run_query($query,$able_to_unsubscribe_message,$unable_to_unsubscribe_error_message);
			}
			else
			{
				JFactory::getApplication()->enqueueMessage("It appears you are already unsubscribed from email alerts on this article.", 'Success');
			}

		}
		else
		{
			JFactory::getApplication()->enqueueMessage("$unable_to_unsubscribe_error_message", 'Error');
		}
	}
	else
	{
		JFactory::getApplication()->enqueueMessage("$unable_to_unsubscribe_error_message", 'Error');
	}
}

?>
