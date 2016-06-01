<?


/*
** Supports pre-chat 
*/



ini_set("display_errors", 1);






include_once("../includes/includes_functions.php");






if( $_POST['pcm_task'] == "change_message" )
{

	$expire = $_POST['expiration'];
	$expire_date = date('Y-m-d H:i:s', strtotime("+$expire hours"));

	$query = "UPDATE #__prechat_message SET `message` = '" . addslashes($_POST['prechat_message']) . "', `last_update` = CURRENT_TIMESTAMP , `expiration` = '$expire_date'  WHERE `id` = 1;";
	$db->setQuery($query);
	$result = $db->execute();


	$email_body = "MESSAGE:\n" . $_POST['prechat_message'] . "\n\nEXPIRATION: " . $_POST['expiration'] . " hours";
	cc_send_mail("anthonye@inmotionhosting.com","support-leads@inmotionhosting.com","IMH Prechat message EDITED",$email_body);
	echo "<p class='alert alert-success'>PreChat Message <em>should</em> have been updated. Please test it.</p>";
}






$query = "SELECT * FROM #__prechat_message WHERE `id` = 1;";
$db->setQuery($query);
$results = $db->loadObjectList();






$expiration_hours_array = array(1,2,3,4,5,6,7,8,12,16,24,36,48);
foreach($expiration_hours_array as $eh_k => $eh_v)
	$eh_options .= "<option value='$eh_v'>$eh_v hours</option>";





echo "	<h1>Last updated: <span style='color:orange;'>" . $results[0]->last_update . " <em>PST</em></span></h1>";
if ($results[0]->expiration != '0000-00-00 00:00:00'){
echo "	<h1>Expires: <span style='color:orange;'>" . $results[0]->expiration . " <em>PST</em></span></h1>";
}
echo "
	<form method='post'>
		<h1>Message:</h1>
		<p style='color:red;'>Make sure you're closing your tags / etc, you don't want to goof something up.</p>
		<textarea name='prechat_message' id='prechat_message' style=\"font-family:'Courier New', Courier, monospace;width:600px; height:200px; font-size:12px;\">" . $results[0]->message . "</textarea>
		<h2>Message Expiration</h2>
		<select name='expiration' id='expiration' style='display:block;'>
			$eh_options
		</select>
		<input type='submit' class='btn btn-primary' value='Submit' />
		<input type='hidden' name='pcm_task' id='pcm_task' value='change_message' />
	</form>
";





echo "	<h1>Current PreChat Message</h1>";
echo "<pre>"; print_r($results); echo "</pre>";




?>
