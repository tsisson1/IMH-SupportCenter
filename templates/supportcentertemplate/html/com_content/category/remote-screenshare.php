<?






$this->document->setTitle("Remote ScreenShare Form | InMotion Hosting");




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

echo "<h1>Remote ScreenShare Request Form</h1><p>Simply enter your connection code provided from our support department once you contact them via a <a href='http://www.inmotionhosting.com/support/website/website-troubleshooting/how-to-get-great-technical-support#call-us'>phone call</a> or a <a href='http://www.inmotionhosting.com/support/website/website-troubleshooting/how-to-get-great-technical-support#chat'>chat</a>.</p><br />";


echo "

<form name='logmeinsupport' action='https://secure.logmeinrescue.com/Customer/Code.aspx' method='post'>
    <span>Enter your 6-digit code </span><input type='text' name='Code' /><br />
    <input type='submit' class='btn btn-primary' value='Connect to technician' />
    <input type='hidden' name='tracking0' maxlength='64' /> <!-- optional -->
    <input type='hidden' name='language' maxlength='5' /> <!-- optional -->
    <input type='hidden' name='hostederrorhandling' /> <!-- optional -->
</form>
";

echo "<h2>Using remote screenshare support</h2>
<p>A remote screenshare support session allows our support team to establish a remote connection to view your computer's screen, so we can see everything you see.</p>
<p>Our support team only has the ability to view your screen, and is not able to take control of your computer or make any changes.</p>
<p>Remote screenshare is provided by LogMeIn Rescue, a reactive, permission-based support tool. No permanent software is installed on your PC. Our support team can only view your PC with your explicit permission, which must be granted each time you create a session.</p>";

echo "<h2>How remote screenshare works</h2>
<iframe width='560' height='315' src='https://www.youtube.com/embed/5IsVEDUbDzM' frameborder='0' allowfullscreen></iframe>";

echo " <h3>Starting the Session</h3>
<ol class='article_list'>
    <li> When working with a support representative, they may initiate a screen share session to see exactly what you see on your screen and better resolve the issue.<div style='clear:both;'></div></li>
    <li>They will generate a connection code, and direct you to remote.inmotionhosting.com, where you will enter the code. (which redirects to this page)<div style='clear:both;'></div></li>
    <li>A download will start as the program will not permanently be installed on your system.<div style='clear:both;'></div></li>
    <li>Once the download completes you will need to open the downloaded file.<div style='clear:both;'></div></li>
    <li>A window will pop up and you will need to accept the terms and conditions.<div style='clear:both;'></div></li>
    <li>Depending on your security levels set on your PC, another window may pop up asking if you would like the program to be able to run.<div style='clear:both;'></div></li>
    <li>At this point the connection will start and the technician will be attempting to connect.<div style='clear:both;'></div></li>
    <li>Once both sides are connected a popup will appear asking if you would like to share your screen with our technician.<div style='clear:both;'></div></li>
    <li>Once the connection is established, you can show our support representative where you are getting the error.<div style='clear:both;'></div></li>
</ol>

";

echo " <h3>Closing the Session</h3>
<ol class='article_list'>
    <li>Simply request the technician to terminate the session or just close the window and the screemshare will be disconnected and the program will be uninstalled automaticall.y.<div style='clear:both;'></div></li>
</ol>

";


 ?> 


<? echo "
<a name='like_this_article'></a>
                <div style='margin:30px -22px 0px 0px;'>
                        <span style='padding-right:15px;'>Like this Tool?</span>
                        $like_facebook_html
                        $like_google_html
                        $like_twitter_html
                </div>

";
?>


</div>
