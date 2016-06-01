<?php

/**
 * Demonstration of the various OAuth flows. You would typically do this
 * when an unknown user is first using your application. Instead of storing
 * the token and secret in the session you would probably store them in a
 * secure database with their logon details for your website.
 *
 * When the user next visits the site, or you wish to act on their behalf,
 * you would use those tokens and skip this entire process.
 *
 * The Sign in with Twitter flow directs users to the oauth/authenticate
 * endpoint which does not support the direct message permission. To obtain
 * direct message permissions you must use the "Authorize Application" flows.
 *
 * Instructions:
 * 1) If you don't have one already, create a Twitter application on
 *      https://dev.twitter.com/apps
 * 2) From the application details page copy the consumer key and consumer
 *      secret into the place in this code marked with (YOUR_CONSUMER_KEY
 *      and YOUR_CONSUMER_SECRET)
 * 3) Visit this page using your web browser.
 *
 * @author themattharris
 */






$document = JFactory::getDocument();
$document->setMetaData('robots','noindex,follow');






if($_GET['denied'])
{
        Header( "HTTP/1.1 301 Moved Permanently" );
        Header( "Location: /support/login" );
        exit();
}






$app = JFactory::getApplication();
$template = $app->getTemplate();

$juser = JFactory::getUser();

require "templates/$template/html/com_content/category/twitter_login/tmhOAuth.php";
require "templates/$template/html/com_content/category/twitter_login/tmhUtilities.php";

$tmhOAuth = new tmhOAuth(array(
  'consumer_key'    => '55UPranHTECzwfQzhRg',
  'consumer_secret' => 'wqbdmyod6OndM08iiUKIY43MVqYm6MKvirNt7nQ0CU',
));





$session = JFactory::getSession();
$form_data = "
        <input type='hidden' name='username' value='username' />
        <input type='hidden' name='password' value='password' />
        <input type='hidden' name='option' value='com_users' />
        <input type='hidden' name='task' value='user.login' />
        <input type='hidden' name='login_type' id='login_type' value='tw' />
        <input type='hidden' name='return' id='return' value='" . $session->get('return1') . "' />
        " . JHtml::_('form.token') . "
";






/*
if(
	$_GET['ls'] != "1" AND
	($_GET['authorize'] != "1" AND $_GET['force'] != "1") AND
	(!$_GET['oauth_token'] AND !$_GET['oauth_verifier'])
)
{
	header( "Location: /support/login-with-twitter?authorize=1&force=1");
}*/
if( ! $_GET )
{
	header( "Location: /support/login-with-twitter?authorize=1&force=1");
	die();
}

$here = tmhUtilities::php_self();
session_start();

function outputError($tmhOAuth) {
  // do not want to display errors // echo 'Error: ' . $tmhOAuth->response['response'] . PHP_EOL;
  tmhUtilities::pr($tmhOAuth);
}

// reset request?
if ( isset($_REQUEST['wipe']))
{
	session_destroy();
	die('redirect4');
	header("Location: {$here}");

// already got some credentials stored?
} elseif ( isset($_SESSION['access_token']) ) {
  $tmhOAuth->config['user_token']  = $_SESSION['access_token']['oauth_token'];
  $tmhOAuth->config['user_secret'] = $_SESSION['access_token']['oauth_token_secret'];

	$code = $tmhOAuth->request('GET', $tmhOAuth->url('1/account/verify_credentials'));
	if ($code == 200)
	{
		$resp = json_decode($tmhOAuth->response['response']);

		// log this twitter user to the database
		process_twitter_login($resp);






		if(twitter_user_have_username($resp->id))
		{
			echo "
	                <form action='/support/' method='post' id='login-form-tw' name='login-form-tw'>
        	                $form_data
                	</form>
	                <script type='text/javascript'>
        	                document.forms['login-form-tw'].submit();
                	</script>
                ";
		}






		else
		{
			$app = JFactory::getApplication();
	                $template = $app->getTemplate();

        	        echo "
                	<form action='/support/' method='post' id='login-form-gplus' name='login-form-gplus'>
                        	$form_data
	                ";
				include_once("templates/$template/includes/you_need_to_give_us_your_email.php");
        	                include_once("templates/$template/includes/you_need_to_create_a_username.php");
                	echo "</form>";
		}






	}
	else
	{
		outputError($tmhOAuth);
	}
// we're being called back by Twitter
} elseif (isset($_REQUEST['oauth_verifier'])) {
  $tmhOAuth->config['user_token']  = $_SESSION['oauth']['oauth_token'];
  $tmhOAuth->config['user_secret'] = $_SESSION['oauth']['oauth_token_secret'];

  $code = $tmhOAuth->request('POST', $tmhOAuth->url('oauth/access_token', ''), array(
    'oauth_verifier' => $_REQUEST['oauth_verifier']
  ));

	if ($code == 200)
	{
		$_SESSION['access_token'] = $tmhOAuth->extract_params($tmhOAuth->response['response']);
		unset($_SESSION['oauth']);

		// bradm  // header("Location: {$here}");
		header("Location: $here?ls=1");
	}
	else
	{
		outputError($tmhOAuth);
	}
// start the OAuth dance
} elseif ( isset($_REQUEST['authenticate']) || isset($_REQUEST['authorize']) ) {
  $callback = isset($_REQUEST['oob']) ? 'oob' : $here;

  $params = array(
    'oauth_callback'     => $callback
  );

  if (isset($_REQUEST['force_write'])) :
    $params['x_auth_access_type'] = 'write';
  elseif (isset($_REQUEST['force_read'])) :
    $params['x_auth_access_type'] = 'read';
  endif;

  $code = $tmhOAuth->request('POST', $tmhOAuth->url('oauth/request_token', ''), $params);

	if ($code == 200)
	{
		$_SESSION['oauth'] = $tmhOAuth->extract_params($tmhOAuth->response['response']);
		$method = isset($_REQUEST['authenticate']) ? 'authenticate' : 'authorize';
		$force  = isset($_REQUEST['force']) ? '&force_login=1' : '';
		$authurl = $tmhOAuth->url("oauth/{$method}", '') .  "?oauth_token={$_SESSION['oauth']['oauth_token']}{$force}";
		// echo '<p>To complete the OAuth flow follow this URL: <a href="'. $authurl . '">' . $authurl . '</a></p>'; // bradm

		header( "Location: $authurl");
		die();
	}
	else
	{
		outputError($tmhOAuth);
	}
}






function process_twitter_login($user)
{
	$db = JFactory::getDbo();

	$current_utc_n = strtotime(gmdate('Y-m-d H:i:s'));

	$twitter_id = $user->id;
	$avatar_url = str_replace("_normal","_bigger",$user->profile_image_url);

	$profile_array = json_encode($user);

	$token = JSession::getFormToken();

	if(!is_numeric($twitter_id))
		die('twidn#');

	// has this user logged in before?
	$query = "SELECT count(`id`) as 'current_usernames' FROM #__login_twitter_userdata WHERE `twitter_id` = '$twitter_id';";
	$db->setQuery($query);
	$results = $db->loadObjectList();

	if($results[0]->current_usernames == 0)
	{
		$query = "INSERT INTO #__login_twitter_userdata (`id` ,`twitter_id` ,`email` ,`username` ,`first_login_utc_n` ,`last_login_utc_n` ,`avatar_url` ,`profile_array`,`token`) VALUES (NULL , '$twitter_id', '', '', '$current_utc_n', '$current_utc_n', '" . addslashes($avatar_url) . "', '" . addslashes($profile_array) . "','$token');";
		$db->setQuery($query);
		try { $result = $db->execute(); } catch (Exception $e) { die('tlaner'); }
	}
	else
	{
		$query = "UPDATE #__login_twitter_userdata SET `last_login_utc_n` = '$current_utc_n', `avatar_url` = '" . addslashes($avatar_url) . "', `profile_array` = '" . addslashes($profile_array) . "', `token` = '$token' WHERE `twitter_id` = '$twitter_id' LIMIT 1;";
		$db->setQuery($query);
		try { $result = $db->execute(); } catch (Exception $e) { die('tlmuer'); }
	}
}






function twitter_user_have_username($id)
{
	$db = JFactory::getDbo();

	if(!is_numeric($id))
		die('sn#4twl');

	$query = "SELECT `username` FROM #__login_twitter_userdata WHERE `twitter_id` = '$id' LIMIT 1;";
	$db->setQuery($query);
        $results = $db->loadObjectList();

        if( $results[0]->username == "" )
                return false;
        else
                return true;
}






/*
<ul>
  <li><a href="?authenticate=1">Sign in with Twitter</a></li>
  <li><a href="?authenticate=1&amp;force=1">Sign in with Twitter (force login)</a></li>
  <li><a href="?authorize=1">Authorize Application (with callback)</a></li>
  <li><a href="?authorize=1&amp;oob=1">Authorize Application (oob - pincode flow)</a></li>
  <li><a href="?authorize=1&amp;force_read=1">Authorize Application (with callback) (force read-only permissions)</a></li>
  <li><a href="?authorize=1&amp;force_write=1">Authorize Application (with callback) (force read-write permissions)</a></li>
  <li><a href="?authorize=1&amp;force=1">Authorize Application (with callback) (force login)</a></li>
  <li><a href="?wipe=1">Start Over and delete stored tokens</a></li>
</ul>
*/






?>
