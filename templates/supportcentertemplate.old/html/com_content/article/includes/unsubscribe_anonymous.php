<?

$unable_to_unsubscribe_error_message = "We're sorry, but unfortunately there was a problem unsubscribing you from email alerts for this article.";
$able_to_unsubscribe_message = "You have successfully unsubscribed from email alerts on this article.";

$unsubscribe_data = explode("--",$_GET['unsubscribe_email']);

$email_from_url = $unsubscribe_data[0];
$md5_from_url = $unsubscribe_data[1];

if( count($unsubscribe_data) == 2)
{
        if( md5(substr($email_from_url,0,4).substr($email_from_url,-4)) == $md5_from_url )
        {
                $db = JFactory::getDbo();

                // does this email already exist?
                $query = "SELECT count(`id`) FROM #__content_do_not_email_anonymous WHERE `email` = '" . addslashes($email_from_url) . "' AND `article_id` = " . $this->item->id;
                $db->setQuery($query);
                $email_exists_in_db_for_opt_out = $db->loadResult();

                if($email_exists_in_db_for_opt_out == 0)
                {
                        $query = "INSERT INTO #__content_do_not_email_anonymous (`id`,`email`,`article_id`) VALUES (null,'" . addslashes($email_from_url) . "'," . $this->item->id . ");";
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

?>
