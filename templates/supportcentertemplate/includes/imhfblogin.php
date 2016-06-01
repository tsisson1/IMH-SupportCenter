<?

$app_id = "209145459223160";
   $app_secret = "e47d685736a6cdabf0c3791b6c96be4c";
   $my_url = "http://j3.cc-dev.inmotionhosting.com/support/";

   session_start();




 $code = $_REQUEST["code"];

   if(empty($code)) {
     $_SESSION['state'] = md5(uniqid(rand(), TRUE)); // CSRF protection
     $dialog_url = "https://www.facebook.com/dialog/oauth?client_id=" 
       . $app_id . "&redirect_uri=" . urlencode($my_url) . "&state="
       . $_SESSION['state'] . "&scope=email";

     echo("<script> top.location.href='" . $dialog_url . "'</script>");
   }






if($_SESSION['state'] && ($_SESSION['state'] === $_REQUEST['state'])) {
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
     echo("Hello " . $user->name);
	echo "<pre>"; print_r($user); echo "</pre>";
   }
   else {
     echo("The state does not match. You may be a victim of CSRF.");
   }

?>
<h3>Facebook Login</h3>
