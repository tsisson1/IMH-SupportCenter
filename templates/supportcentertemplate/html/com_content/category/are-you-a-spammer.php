<?

$document = JFactory::getDocument();
$document->setMetaData('robots','noindex,follow');


if( $_POST )
{
	$query = "
	INSERT INTO #__are_you_a_spammer (`id`,`timestamp`,`user_ip`,`email_address`,`comment`,`user_agent`)
	VALUES (NULL, CURRENT_TIMESTAMP, '" . addslashes($_SERVER['HTTP_X_FORWARDED_FOR']) . "','" . addslashes($_POST['email_address']) . "','" . addslashes($_POST['comment']) . "','" . addslashes($_SERVER['HTTP_USER_AGENT']) . "');
	";
	gf_run_query($query,"thanks for posting!","sorry, there was a problem");
}
else
{
	$query = "
        INSERT INTO #__are_you_a_spammer (`id`,`timestamp`,`user_ip`,`email_address`,`comment`,`user_agent`)
        VALUES (NULL, CURRENT_TIMESTAMP, '" . addslashes($_SERVER['HTTP_X_FORWARDED_FOR']) . "','n/a','n/a','" . addslashes($_SERVER['HTTP_USER_AGENT']) . "');
        ";
        gf_run_query($query,"","");
}




echo "
<form method='post' style='display:none;'>
	<h1>Leave us feedback!</h1>
	<table class='table table-striped'>
		<tr>
			<th>Email Address</th>
			<td><input type='text' name='email_address' id='email_address' /></td>
		</tr>
		<tr>
			<th>Comment</th>
			<td><textarea name='comment' id='comment'></textarea></td>
		</tr>
	</table>
	<input type='submit' value='Submit' />
</form>
";


?>
