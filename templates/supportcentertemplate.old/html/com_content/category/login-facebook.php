<div class='item-page'>
	<div class='page-header'>
		<h1>Please wait while you are logged in using FaceBook...</h1>
	</div>
<?

force_this_url_over_ssl();

$app_id = "209145459223160";
$app_secret = "e47d685736a6cdabf0c3791b6c96be4c";
$my_url = "https://www.inmotionhosting.com/support/login-with-facebook";

session_start();






$document = JFactory::getDocument();
$document->setMetaData('robots','noindex,follow');






$session = JFactory::getSession();
$form_data = "
        <input type='hidden' name='username' value='username' />
        <input type='hidden' name='password' value='password' />
        <input type='hidden' name='option' value='com_users' />
        <input type='hidden' name='task' value='user.login' />
	<input type='hidden' name='state' id='state' value='" . addslashes($_GET['state']) . "' />
	<input type='hidden' name='code' id='code' value='" . addslashes($_GET['code']) . "' />
        <input type='hidden' name='login_type' id='login_type' value='fb' />
        <input type='hidden' name='return' id='return' value='" . $session->get('return1') . "' />
        " . JHtml::_('form.token') . "
";






$code = $_REQUEST["code"];
if(empty($code))
{
     $_SESSION['state'] = md5(uniqid(rand(), TRUE)); // CSRF protection
     $dialog_url = "https://www.facebook.com/dialog/oauth?client_id="
       . $app_id . "&redirect_uri=" . urlencode($my_url) . "&state="
       . $_SESSION['state'] . "&scope=email";

     echo("<script> top.location.href='" . $dialog_url . "'</script>");
}






if($_SESSION['state'] && ($_SESSION['state'] === $_REQUEST['state']))
{
     $token_url = "https://graph.facebook.com/oauth/access_token?"
       . "client_id=" . $app_id . "&redirect_uri=" . urlencode($my_url)
       . "&client_secret=" . $app_secret . "&code=" . $code;

     $response = file_get_contents($token_url);
     $params = null;
     parse_str($response, $params);

     $_SESSION['access_token'] = $params['access_token'];

     $graph_url = "https://graph.facebook.com/me?access_token="
       . $params['access_token'];

     $user = json_decode(file_get_contents($graph_url));

	process_facebook_login($user);






	// ------------------------------------------------
        // if the logged in user already has a username set
        // ------------------------------------------------
        if( facebook_user_have_username($user) )
        {
                echo "
                <form action='/support/' method='post' id='login-form-fb' name='login-form-fb'>
                        $form_data
                </form>
                <script type='text/javascript'>
                        document.forms['login-form-fb'].submit();
                </script>
                ";
        }






        // ----------------------------------------------
        // if the logged in user does not have a username
        // ----------------------------------------------
        else
        {
                $app = JFactory::getApplication();
                $template = $app->getTemplate();

                echo "
                <form action='/support/' method='post' id='login-form-fb' name='login-form-fb'>
                        $form_data
                ";
                        include_once("templates/$template/includes/you_need_to_create_a_username.php");
                echo "</form>";
        }






	// bradm - 2013.03.19 - not sure what this is doing here
	/*
	if($user)
	{
		die("here2 - " . $user->username);
		$session = JFactory::getSession();

		echo "
		<form action='/support/' method='post' id='login-form-fb' name='login-form-fb'>
			<input type='hidden' name='username' value='username' />
			<input type='hidden' name='password' value='password' />
			<input type='hidden' name='option' value='com_users' />
			<input type='hidden' name='task' value='user.login' />
			<input type='hidden' name='state' id='state' value='" . addslashes($_GET['state']) . "' />
			<input type='hidden' name='code' id='code' value='" . addslashes($_GET['code']) . "' />
			<input type='hidden' name='login_type' id='login_type' value='fb' />
			<input type='hidden' name='return' id='return' value='" . $session->get('return1') . "' />
			" . JHtml::_('form.token') . "
		</form>
		<script type='text/javascript'>
			document.forms['login-form-fb'].submit();
		</script>
		";
	}
	*/






}
else
{
     // echo("The state does not match. You may be a victim of CSRF.");
	echo "<script type='text/javascript'>window.location = '/support/login-with-facebook?login=" . time() . "';</script>";
}
?>






</div> <!-- item-page -->






<?

function process_facebook_login($user)
{
	$current_utc_n = strtotime(gmdate('Y-m-d H:i:s'));

        $avatar_url = "http://graph.facebook.com/" . addslashes($user->username) . "/picture?type=normal";
        $facebook_id = $user->id;

	$user_details = json_encode($user);

	if(!is_numeric($facebook_id))
		die("fbidnotn");

        $db = JFactory::getDbo();

	// does this user exist in the database already?
	$query = "SELECT count(`id`) as 'existing_users' FROM #__login_facebook_userdata WHERE `facebook_id` = '" . addslashes($facebook_id) . "';";
	$db->setQuery($query);
	$results = $db->loadObjectList();


	switch($results[0]->existing_users)
	{
		// we need to add this user to the database for the first time
		case 0:
			$query = "INSERT INTO #__login_facebook_userdata (`id` ,`facebook_id` ,`username` ,`email` ,`avatar_url` ,`first_login_utc_n` ,`last_login_utc_n` ,`state` ,`code` ,`user_details`)VALUES (NULL , '$facebook_id', '', '" . addslashes($user->email) . "', '$avatar_url', '$current_utc_n', '$current_utc_n', '" . addslashes($_GET['state']) . "', '" . addslashes($_GET['code']) . "', '" . addslashes($user_details) . "');";
			break;
		// this user already exists in the database
		case 1:
			$query = "UPDATE #__login_facebook_userdata set `email` = '" . addslashes($user->email) . "', `avatar_url` = '$avatar_url', `last_login_utc_n` = '$current_utc_n', `state` = '" . addslashes($_GET['state']) . "', `code` = '" . addslashes($_GET['code']) . "', `user_details` = '" . addslashes($user_details) . "' WHERE `facebook_id` = '$facebook_id' LIMIT 1;";
			break;
	}
        $db->setQuery($query);
        try {
            // Execute the query in Joomla 3.0.
            $result = $db->execute();
        } catch (Exception $e) {
                // die($e);
		die('pflfber');
        }
}






function facebook_user_have_username($user)
{
	$facebook_id = $user->id;
        if(!is_numeric($facebook_id))
                die("fbidnotn2");

	$db = JFactory::getDbo();
	$query = "SELECT `username` FROM #__login_facebook_userdata WHERE `facebook_id` = '$facebook_id';";
	$db->setQuery($query);
	$results = $db->loadObjectList();

	if($results[0]->username == '')
		return false;
	return true;
}






?>
