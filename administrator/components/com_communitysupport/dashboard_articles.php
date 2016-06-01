<?

if($_POST)
{
	$query = "INSERT INTO #__related_articles (`id`,`title`,`article_id`,`url`) VALUES (NULL,'" . addslashes($_POST['article_title'])"','" . addslashes($_POST['article_id']) . "','" . addslashes($_POST['url']) . "');";
	$db->setQuery($query);
	$db->execute();
	JFactory::getApplication()->enqueueMessage('The article has been added to the dashboard.', 'message');
}

?>


<h1>What youtube video did you just upload?</h1>
<form method='post'>
	Article Title:<br />
	<input type='text' name='article_title' id='article_title' style='width:98%;' /><br />
	ID of Article:<br />
	<input type='text' name='article_id' id='article_id' style='width:98%;' /><br />
        Article URL:<br />
        <input type='text' name='url' id='url' style='width:98%;' /><br />

	<input type='submit' value='submit' class='btn btn-primary' />
</form>
