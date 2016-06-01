<?






$this->document->setTitle("Email Configuration Tool | InMotion Hosting");




// ---------------------------------------------------------------
// LIKE THIS PAGE - social media
// ---------------------------------------------------------------
// ---------------------------------------------------------------
// LIKE THIS PAGE - social media
// ---------------------------------------------------------------
$url_of_this_page = $this->document->base;
$like_facebook_html = "<iframe src='//www.facebook.com/plugins/like.php?href=$url_of_this_page&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=209145459223160' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:100px; height:21px;' allowTransparency='true'></iframe>";
$like_google_html = "
<div class='g-plusone' data-size='medium' data-href='$url_of_this_page'></div>
<script type='text/javascript'>
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>";
$like_twitter_html = "<a href='https://twitter.com/share' class='twitter-share-button' data-via='inmotionhosting'>Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>";



echo "<div class='item-page'>"; // START THE ENTIRE PAGE

echo "<h1>Email Configuration</h1><p>Simply fill out an email address below and click submit to get the universal email client configuration settings.</p>";


  
if(isset($_POST['SubmitButton'])){ //check if form was submitted
$email = $_POST['email']; //get input text
$raw_email = explode('@', $email);
$domain = $raw_email[1];


}    
?>

    
<!-- <form class="well-small domains-pill row-fluid" action="" method="post" style="width:98%">
<div id="domain-input-wrap" class="span8">
 <input style="margin-bottom: 0px;width:400px;" type="text" name="email" value="<?php echo $email ?>" placeholder="example@example.com" ><div class="res-container"></div>
                            <div class="loading-gear gearblk foot-gear1 turn"></div>
                            <div class="loading-gear lowerleft gearblk foot-gear1 turn2"></div>
                        </div>

<span class="span2" style="padding-left:20px; padding-top:5px;">
                        <input id="domain-search-button" type="submit" name="SubmitButton" class="btn btn btn-primary" value="Get My Settings" /></span></form>  
-->


<form class="well-small domains-pill row-fluid" action="" method="post" style="width:93%">
    <div id="domain-input-wrap" class="span8">
     <input type="text" name="email" value="" placeholder="example@example.com" style="margin-bottom: 0px;width:400px;">
    </div>
    <button type="submit" name="SubmitButton" class="btn btn-primary" style="width: 150px; margin-left: 45px; margin-top: 7px;">Get My Settings
    </button>
</form>
<?

// telnet to server over port 587
$fp = fsockopen("$domain", 587, $errno, $errstr, 30);
if (!$fp) {
    #echo "$errstr ($errno)<br />\n";
} else {
    $out = "GET / HTTP/1.1\r\n";
    $out .= "Host: $domain\r\n";
    $out .= "Connection: Close\r\n\r\n";
    fwrite($fp, $out);
    while (!feof($fp)) {
      $raw_fp .= fgets($fp, 128);
	}
	fclose($fp);

}
// grab only the server hostname
$raw_server = explode(" ", $raw_fp);
$server = substr($raw_server[0], 4);


// determine if vps or not and if shared then 
if (0 === strpos($server, 'vps') OR 0 === strpos($server, 'dedicated') OR 0 === strpos($server, 'advanced') OR 0 === strpos($server, 'elite') OR substr($server, 0, 2) === "cc" OR 0 === strpos($server, 'essential')){
	// nothing
}else{

if (0 === strpos($server, 'ecbiz') OR 0 === strpos($server, 'ecres')){
	$server = substr($server, 5);
	$server = "secure" . $server;
}else{
$server = substr($server, 3);
$server = "secure" . $server;

}
}


// Make sure email is valid, if so print settings
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
	if (empty($email)){
	// nothing
}else {
	echo "$emailErr";
}
}else{
echo "
<h2>Choose a setting that works best for you</h2>
<p>If you plan on checking your email on multiple devices, we recommend using a secure IMAP connection. This setting will reflect any changes, such as emails marked read or sent, across all your devices.  Otherwise, if you plan on checking your email on your computer, we recommend using POP. Read more about the <a target='_blank' href='http://www.inmotionhosting.com/support/email/change-pop3-account-to-imap-or-imap-to-pop3#pop3-vs-imap'>differences between IMAP and POP</a></p>

<div class='moduletable' style='width: 65%;font-size: 13px;'>
<div style='border-bottom:1px solid #ddd;'>
<h1 style='margin-top: 0px;'>IMAP Settings:</h1>
<h3>Standard Non-SSL</h3>
<strong>Username:</strong> $email
<br /><strong>Incoming mail server:</strong> mail.$domain (Port: 143)
<br /><strong>Outgoing mail server:</strong> mail.$domain (Port: 587)
<br />
<br />
</div>
<div style='clear:both; margin-bottom:-20px;'></div>
<h3>Secure SSL</h3>
<strong>Username:</strong> $email
<br /><strong>Incoming mail server:</strong> $server (Port: 993)
<br /><strong>Outgoing mail server:</strong> $server (Port: 465)
</div>
<div class='moduletable' style='width: 65%; font-size: 13px;'>
<div style='border-bottom:1px solid #ddd;'>
<img style='float:right; margin-top: -10px;' src='https://www.inmotionhosting.com/support/templates/supportcentertemplate/images/bgs/bg_top_right_gears.gif' />
<h1 style='margin-top: 0px;'>POP Settings:</h1>
<h3>Standard Non-SSL</h3>
<strong>Username:</strong> $email
<br /><strong>Incoming mail server:</strong> mail.$domain (Port: 110)
<br /><strong>Outgoing mail server:</strong> mail.$domain (Port: 587)
<br />
<br />
</div>
<div style='clear:both; margin-bottom:-20px;'></div>
<h3>Secure SSL</h3>
<strong>Username:</strong> $email
<br /><strong>Incoming mail server:</strong> $server (Port: 995)
<br /><strong>Outgoing mail server:</strong> $server (Port: 465)
</div>";
}
echo"
<br />
<h2>Configuring desktop email client</h2>
<p>Common email clients that most users are familiar with include Microsoft Outlook and Mac Mail. You can use any program you want as long as it can connect to our servers. Below are links to our tutorials for setting up email clients.</p>
<br />
<table border='0' style='width:100%'>
  <tr>
    <td><a href='http://www.inmotionhosting.com/support/email/outlook/2013'>Outlook 2013</a></td>
    <td><a href='http://www.inmotionhosting.com/support/email/outlook/how-to-set-up-outlook-2011'>Outlook 2011 (Mac)</a></td>		
    <td><a href='http://www.inmotionhosting.com/support/email/outlook/how-to-set-up-outlook-2010'>Outlook 2010</a></td>
  </tr>
  <tr>
    <td><a href='http://www.inmotionhosting.com/support/email/outlook/creating-an-email-account-in-outlook-2007'>Outlook 2007</a></td>
    <td><a href='http://www.inmotionhosting.com/support/email/outlook/creating-an-email-account-in-outlook-2003'>Outlook 2003</a></td>		
    <td><a href='http://www.inmotionhosting.com/support/email/outlook/creating-an-email-account-innoutlook-2002'>Outlook 2002</a></td>
  </tr>
  <tr>
    <td><a href='http://www.inmotionhosting.com/support/email/mac-mail/set-up-mac-mail'>Mac Mail</a></td>
    <td><a href='http://www.inmotionhosting.com/support/email/thunderbird/creating-an-email-account-in-thunderbird'>Thunderbird</a></td>		
    <td><a href='http://www.inmotionhosting.com/support/email/email-client-setup/setting-up-windows-live-mail'>Windows Live Mail</a></td>
  </tr>
</table>
<br />
";

echo "

<a name='like_this_article'></a>
                <div style='text-align:right; margin:30px -22px 0px 0px;'>
                        <span style='padding-right:15px;'>Like this Tool?</span>
                        $like_facebook_html
                        $like_google_html
                        $like_twitter_html
                </div>

";


?>


</div>
