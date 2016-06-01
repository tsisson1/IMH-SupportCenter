<?

if($_POST)
{
	$query = "INSERT INTO #__staff_uploaded_videos (`id`,`user_id`,`timestamp`,`video_url`,`title`) VALUES (NULL," . $user->id . ",CURRENT_TIMESTAMP,'" . addslashes($_POST['video_url']) . "','" . addslashes($_POST['video_title']) . "');";
	$db->setQuery($query);
	$db->execute();
	JFactory::getApplication()->enqueueMessage('Your video has been logged.', 'message');
}

?>


<h1>What youtube video did you just upload?</h1>
<form method='post'>
	URL to YouTube video:<br />
	<input type='text' name='video_url' id='video_url' style='width:98%;' /><br />
	Title of video:<br />
	<input type='text' name='video_title' id='video_title' style='width:98%;' /><br />
	<input type='submit' value='submit' class='btn btn-primary' />
</form>
