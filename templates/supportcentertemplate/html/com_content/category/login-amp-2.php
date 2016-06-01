<?

$document = JFactory::getDocument();
$document->setMetaData('robots','noindex,follow');





	/*
	$data['email'] = "account74@inmotionhosting.com";
	$data['password'] = "password";
	$data['brand'] = "IMH";
	$data['domain'] = "inmotiontesting.com";
	$data_string = json_encode($data);
	$data_get = implode("&",$data);
	echo "$data_string";
	*/

	$pass_email = "account77@inmotionhosting.com";
	$pass_email = "bradm@inmotionhosting.com";
	$pass_pass = "password";
	$pass_pass = "GetInMotion";
	$pass_brand = "IMH";
	$pass_domain = "techoblivion.com";
	$pass_domain = "inmotiontesting.com";

	$ch = curl_init("https://hotel.imh.imhlabs.net/api/account/authenticate?email=$pass_email&password=$pass_pass&brand=$pass_brand&domain=$pass_domain");
	$ch = curl_init("https://secure1.inmotionhosting.com/api/account/authenticate?email=$pass_email&password=$pass_pass&brand=$pass_brand&domain=$pass_domain");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'Content-Type: application/json',
		'Content-Length: ' . strlen($data_string),
		'Authorization: lax-sup-pro-ctr1.inmotionhosting.com:JKi3Sl8nyHfVe78Ro4Ly91SKNPBO8al6mbhrAcjtRlCF1P724M1RcxxkmqrjMTpH8S81J728diXXPSlZPSqFpbk1J4xuLXYshNSQMnLMumH1QHpONu0ntzeOgpYwnwQqysCgyHI1FjAULoYIIS7Vf2bh1U70iPDbYlrBLaKHNPNkdU4AyZbvw0aegOBBji1P6XaD6EUyPAsr1CORTRYTOp8IbHrvRBPuRyRfGpECLxDCxvyGvLX1lTNDbxnO3aGHJnIfHA6vzEbGVLPQZx5QdZkDabVxMePnejP2kbHDnG3DWXeqqHgd16UGww3ksY3hb94FyIit7ZY0hWDM2KPszH58VHDef6ijn8dmVf4le4kECrohLpn0ZkmfmJ31m5dWxDKJn5dh2Dwde4Gfv0TB6zMEi2LisZQuP2PAmC9PbLQfriHGZrSJPOUh76h7BymAqQ0gYPzCaEwAef4St7QexUW3cXlxtY1HgEuQN2yfzA0EGTrCt6R5GljejDf0t7uH',
		'User-Agent: Support Center CURL Login',
	));
        $result = curl_exec($ch);


        echo "<h1>results...</h1><pre>"; print_r(json_decode($result)); echo "</pre>";
        curl_close($curl);
	die();





$session = JFactory::getSession();
$form_data = "
        <input type='hidden' name='username' value='username' />
        <input type='hidden' name='password' value='password' />
        <input type='hidden' name='option' value='com_users' />
        <input type='hidden' name='task' value='user.login' />
        <input type='hidden' name='login_type' id='login_type' value='amp' />
        <input type='hidden' name='return' id='return' value='" . $session->get('return1') . "' />
        " . JHtml::_('form.token') . "
";






if($_POST)
{
	$print_domain = htmlspecialchars(addslashes($_POST['username']));

	$unique_cookie_filename = time() . "_" . rand(1,100000);
	$cookie_file_path = "tmp/$unique_cookie_filename";

	$curl = curl_init();

	$url_to_curl = "https://secure1.inmotionhosting.com/index/login";
	if($_POST['domain'])
		$url_to_curl = "https://secure1.inmotionhosting.com/index/logindomain/username/" . $_POST['username'];

	curl_setopt($curl, CURLOPT_URL, $url_to_curl);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_USERAGENT, "Support Center CURL Login");

	$fields_wanted = array('username','password','domain','submit','bid');
	foreach($_POST as $k => $v)
	{
		if( in_array($k,$fields_wanted) )
			$fields[$k] = $v;
	}
	$fields['bid'] = 1;
	// // echo "<pre>--fields--"; print_r($fields); echo "</pre>";

	curl_setopt($curl,CURLOPT_POST, true);
	curl_setopt($curl,CURLOPT_POSTFIELDS, $fields);
	curl_setopt($curl,CURLOPT_FOLLOWLOCATION, true); // follow redirects - http://stackoverflow.com/questions/3519939/make-curl-follow-redirects

	curl_setopt($curl, CURLOPT_COOKIEFILE, $cookie_file_path);
	// The name of the file containing the cookie data. The cookie file can be in Netscape format, or just plain HTTP-style headers dumped into a file. 
	curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie_file_path);
	// The name of a file to save all internal cookies to when the connection closes.

	$result = curl_exec($curl);
	// echo "<pre>--results--$result--</pre>";

	$info = curl_getinfo($curl);
	// echo "<pre>--info--"; print_r($info); echo "</pre>";

	$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	// echo "<pre>--code--"; print_r($code); echo "</pre>";

	curl_close($curl);






	// -------------------------------------------------------------------------------------------
	// check for possible errors
	// -------------------------------------------------------------------------------------------
	$email_on_multiple_accounts = "The email address you entered appears on multiple accounts.  Please enter the primary domain name associated with the account you are trying to access.";
	if( substr_count($result,$email_on_multiple_accounts) > 0 )
	{
		$warnings[] = $email_on_multiple_accounts;
		$ask_for_domain = "<input type='text' name='domain' id='domain' placeholder='domain name' />";
	}
	$bad_credentials = "Invalid username and/or password";
	if( substr_count($result,$bad_credentials) > 0 )
	{
		$warnings[] = $bad_credentials;
	}






}






if($warnings)
{
	foreach($warnings as $k => $v)
	{
		JFactory::getApplication()->enqueueMessage($v, 'error');
	}
}
elseif( $_POST )
{
	// at this point we feel we have logged in successfull into amp. Let's log in one more time.
	// this time, we will pass the logged in cookie, and check the source code for keywords to
	// indicate we have logged into amp successfully
	$curl = curl_init();
	        $url_to_curl = "https://secure1.inmotionhosting.com/";
        	curl_setopt($curl, CURLOPT_URL, $url_to_curl);
	        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        	curl_setopt($curl, CURLOPT_USERAGENT, "Support Center CURL Login");
		// follow redirects - http://stackoverflow.com/questions/3519939/make-curl-follow-redirects
        	curl_setopt($curl,CURLOPT_FOLLOWLOCATION, true);
		// The name of the file containing the cookie data. The cookie file can be in Netscape format, or just plain HTTP-style headers dumped into a file.
		curl_setopt($curl, CURLOPT_COOKIEFILE, $cookie_file_path);
		// The name of a file to save all internal cookies to when the connection closes.
        	curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie_file_path);
        	$result = curl_exec($curl);

		$text_proves_youve_logged_into_amp = array("Additional Services","/index/addservice","/index/domcntrl");
		foreach($text_proves_youve_logged_into_amp as $tpylia_key => $tpylia_value)
		{
			if(substr_count($result,$tpylia_value) > 0)
				$tpylia_matches++;
		}
		if($tpylia_matches < 2)
		{
			$unknown_error = "We are currently troubleshooting an issue with the AMP login module. In the meantime, feel free to log into the Support Center using <a href='/support/login-with-facebook'>Facebook</a>, <a href='/support/login-with-google'>Google+</a>, or <a href='/support/login-with-twitter'>Twitter.</a>";
			JFactory::getApplication()->enqueueMessage($unknown_error, 'error');
			$warnings[] = "Unknown error";
		}

        	$info = curl_getinfo($curl);
        	$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
}

// At this point, we are no longer using curl. Let's delete the cookies involved with this "session"
if( $_POST )
	unlink($cookie_file_path);






// successful login!!
if($_POST AND $code == "200" AND !$warnings)
{
	log_amp_userdata();






	if(amp_user_have_username())
	{
		echo "
                        <form action='/support/' method='post' id='login-form-amp' name='login-form-amp'>
                                $form_data
                        </form>
                        <script type='text/javascript'>
                                document.forms['login-form-amp'].submit();
                        </script>
                ";
	}






	else
	{
		$app = JFactory::getApplication();
                $template = $app->getTemplate();

                echo "
                	<form action='/support/' method='post' id='login-form-amp' name='login-form-amp'>
                        $form_data
                ";
                include_once("templates/$template/includes/you_need_to_create_a_username.php");
                echo "</form>";
	}






}
// failed login
else
{
	echo "
		<div class='item-page'>
			<div class='page-header'>
				<h1>Support Center: Login with AMP</h1>
			</div>

			<form enctype='application/x-www-form-urlencoded' method='post' class='well-small amp-pill'>
	
				$ask_for_domain

			        <input type='text' name='username' id='username' value='$print_domain' helper='formText' placeholder='email address'>

		        	<input type='password' name='password' id='password' value='' helper='formPassword' placeholder='password'>

				<div style='margin-top:10px;'><input type='submit' name='submit' id='submit' value='Log in' class='btn btn-primary'></div>
			</form>

			<div><a href='https://secure1.inmotionhosting.com/index/forgot'>I don't remember my password</a></div>

			<div><a href='/support/website/how-to/how-to-log-into-amp'>Video Tutorial</a></div>

		</div>
	";
}






function log_amp_userdata()
{
	$db = JFactory::getDbo();

	$current_utc_n = strtotime(gmdate('Y-m-d H:i:s'));

        $token = JSession::getFormToken();
	if(!$token)
		die('ntal');

	$query = "SELECT count(`id`) as 'account_exists' FROM #__login_amp_userdata WHERE `email` = '" . addslashes($_POST['username']) . "';";

	$db->setQuery($query);
	$results = $db->loadObjectList();

	// if the account doesn't exist
	if($results[0]->account_exists == 0)
		$query = "INSERT INTO #__login_amp_userdata (`id` ,`email` ,`username` ,`first_login_utc_n` ,`last_login_utc_n` ,`token`)VALUES (NULL , '" . addslashes($_POST['username']) . "', '', '$current_utc_n', '$current_utc_n', '$token');";
	else
	// if the account does exist
		$query = "UPDATE #__login_amp_userdata SET `last_login_utc_n` = '$current_utc_n', `token` = '$token' WHERE `email` = '" . addslashes($_POST['username']) . "' LIMIT 1;";
	$db->setQuery($query);
	try { $result = $db->execute(); } catch (Exception $e) {  die('lauer'); }
}






function amp_user_have_username()
{
	$db = JFactory::getDbo();

	$token = JSession::getFormToken();
        if(!$token)
                die('ntal2');

	$query = "SELECT `username` FROM #__login_amp_userdata WHERE `email` = '" . addslashes($_POST['username']) . "';";
	$db->setQuery($query);
	$results = $db->loadObjectList();

	if($results[0]->username == "")
		return false;
	else
		return true;
}






?>
