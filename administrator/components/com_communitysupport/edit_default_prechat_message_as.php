<?





ini_set("display_errors", 1);





include_once("../includes/includes_functions.php");






if( $_POST['pcm_task'] == "change_message" )
{
	$query = "UPDATE #__prechat_message SET `message` = '" . addslashes($_POST['prechat_message']) . "', `last_update` = CURRENT_TIMESTAMP WHERE `id` = 8;";
	$db->setQuery($query);
	$result = $db->execute();
	echo "<p class='alert alert-success'><strong>DEFAULT</strong> PreChat Message <em>should</em> have been updated. Please remember this does not actually set it to the current message.</p>";
	$new_default_message = $_POST['prechat_message'];
#	cc_send_mail("customer_experience@inmotionhosting.com","support-leads@inmotionhosting.com","IMH Default Prechat message EDITED",$new_default_message);
}






/* if( $_POST['pcm_task'] == "return_to_default" )
{
	// grab all of the message
	$query = "SELECT * FROM #__prechat_message;";
	$db->setQuery($query);
	$results = $db->loadObjectList();

	// then update the current message
	$query = "	UPDATE #__prechat_message
			SET	`message` = '" . addslashes($results[1]->message) . "',
				`last_update` = CURRENT_TIMESTAMP,
				`expiration` = 0
			WHERE `id` = 1;
	";
	$db->setQuery($query);
        $result = $db->execute();
	cc_send_mail("customer_experience@inmotionhosting.com","support-leads@inmotionhosting.com","IMH Prechat message REVERTED to default message",$results[1]->message);
	echo "<p class='alert alert-success'>Default message has been implemented. Please test</p>";
}
*/





$query = "SELECT * FROM #__prechat_message WHERE `id` = 8;";
$db->setQuery($query);
$results = $db->loadObjectList();






echo "	<p class='alert alert-info'>This page allows you to set / modify the <strong>Default PreChat Message</strong></p>
	<h1 class='alert alert-warning'>OPTION 1: Edit PreChat Default Message</h1>
	<h2>Last updated: <span style='color:orange;'>" . $results[0]->last_update . " <em>PST</em></span></h2>
	<form method='post'>
		<h2>Message:</h2>
		<p style='color:red;'>Make sure you're closing your tags / etc, you don't want to goof something up.</p>
		<textarea name='prechat_message' id='prechat_message' style=\"font-family:'Courier New', Courier, monospace;width:600px; height:200px; font-size:12px;\">" . $results[0]->message . "</textarea><br />
		<input type='submit' class='btn btn-primary' value='Submit' />
		<input type='hidden' name='pcm_task' id='pcm_task' value='change_message' />
	</form>
<!--	<h1 class='alert alert-warning'>OPTION 2: Revert to default message</h1>
	<form method='post'>
		<input type='hidden' name='pcm_task' id='pcm_task' value='return_to_default' />
		<input type='submit' class='btn btn-primary' value='Set Default Message as Current Message' />
	</form> -->
";






?>
