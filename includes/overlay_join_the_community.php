<?
//die();
// http://stackoverflow.com/questions/49547/making-sure-a-web-page-is-not-cached-across-all-browsers
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.
overlay_join_the_community_set_cookies();
send_email_join_the_community();
$task = $_POST['task'];
switch($task)
{
case "show_overlay":
show_overlay();
break;
case "hide_overlay":
hide_overlay();
break;
case "cancel_hide_overlay":
cancel_hide_overlay();
break;
}


/**
* Return all Cookie variables that are 32 characters in length, such as:
* [2eb140e115c8a7259d43dcc255c77264] => 20241d2b0075f68e2e0543117e90648c
*
* @return array
*/
function get_sessionid_cookies()
{
foreach($_COOKIE as $k => $v)
if (strlen($k)==32 AND strlen($v)==32)
$sessionid_cookies[$k]=$v;
return $sessionid_cookies;
}
/**
* Connect to the database to see if this user is logged in
*
* @params array of 32 character cookies that represent session id's
* @return user object (id = 0 if not logged in,username)
*/
function return_user_info($sessionid_cookies)
{
$user = new stdClass();
// if there are no session cookies, return false
if (count($sessionid_cookies) == 0)
{
$user->id = 0;
return $user;
}
// build our IN clause
foreach($sessionid_cookies as $k => $v)
$session_id_in[] = $v;
// grab session data from database
$query = "
SELECT `userid`,`username`
FROM `#__session`
WHERE `session_id` IN ('" . implode("','",$session_id_in) . "');
";
$session_info_from_database = db_loadArrayList($query);
// loop through database results and return the user's id and username
if (count($session_info_from_database) > 0)
{
$logged_in = false;
foreach($session_info_from_database as $k => $v)
{
if (is_numeric($v['userid']) AND $v['userid'] > 0 AND trim($v['username']) != "")
{
$user->id = $v['userid'];
$user->username = $v['username'];
return $user;
}
}
}
else
{
$user->id = 0;
return $user;
}
}
/**
* Pass this function a query and we'll return an array of arrays
*
* @return array
*/
function db_loadArrayList($query)
{
// connect to the database
include_once("../configuration.php");
$cg = new JConfig;
$con = mysqli_connect("localhost",$cg->user,$cg->password,$cg->db);
if (mysqli_connect_errno())
die('cannot connect to database');
// replace #__ with prefix
$query = str_replace("#__",$cg->dbprefix,$query);
// run the query
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result))
$return_rows[] = $row;
// close the connection to the data
mysqli_close($con);
return $return_rows;
}
function db_execute($query)
{
// connect to the database
include_once("../configuration.php");
$cg = new JConfig;
$con = mysqli_connect("localhost",$cg->user,$cg->password,$cg->db);
if (mysqli_connect_errno())
die('cannot connect to database');
// replace #__ with prefix
$query = str_replace("#__",$cg->dbprefix,$query);


// run the query
mysqli_query($con,$query);
// close the connection to the data
mysqli_close($con);
}
function show_overlay()
{
// if the user previously clicked the X to close the advertisement
// EDIT - moving this BELOW
/*
if ($_COOKIE['sc_overlay_join_the_community_hide'] == "yes")
return false;
*/

// actions based on whether the user has a cookie set from logging into AMP.
if($_COOKIE['amplogin'] == '1') {
$sign_in_link = "/support/team/faq/join?membership=c";
$banner_text = "Welcome to the support center! Sign in to get priority community support and earn points for free swag and other prizes.";
$big_button_text = "Sign in!";
$small_button_text = "Sign in";
$small_button_name = "Sign in to the community";
$small_button_width = "63px";
} else {
$sign_in_link = "/support/team/faq/join?membership=m";
$banner_text = "Not a community member yet?  Join today and you'll be eligible for free swag, prizes, and discounts!  Community members also receive free priority support from our Customer Community team.";
$big_button_text = "Join us!";
$small_button_text = "Join the community";
$small_button_name = "Join the community";
$small_button_width = "150px";
}



//Style for bottom banner


echo "
<style>
.close_x {
position:absolute;
top:-5px;
right:12px;
width:40px;
height:40px;
background: url('/support/images/sc-footer-banner/imh-cc-support-banner-view-close-btn-red.png') no-repeat scroll transparent;
z-index:1108;
}

.show_x {
position: absolute;
top: -25px;
right: 5px;
color: #888;
font-size: 24px;
cursor: pointer;
z-index: 1103;
} 

div.overlay_join_community {
position:fixed;
left:0px;
bottom:0px;
width:100%;
color:#fff;
padding-top:10px;
}

div.overlay_join_community.small {
bottom: -4px;
left: auto;
right: 0px;
width: 150px;
padding: 5px 5px 5px 5px;
background: url('/support/templates/supportcentertemplate/images/bgs/overlay_gears_2.gif') no-repeat scroll right bottom, url('/support/templates/supportcentertemplate/images/bgs/blue-horz-striped-2.gif') repeat scroll 0% 0% transparent;
height: 25px;
} 

div.overlay_join_community.small a.btn.btn-primary {
position:static;
}
.member_type_header {
display:block;
font-size:15px;
color:#fff;
font-weight:bold;
padding-bottom:8px;
letter-spacing:.5px;
}
</style>

<style>
div.overlay_join_community {
    position: fixed;
    left: 0px;
    bottom: 0px;
    width: 100%;
    color: #FFF;
    padding-top: 10px;
}

#sc-footer-text .btn.btn-primary {
    display:inline-block;
    line-height:1.20em;
    background:#fff;
    color:#3a77a2;
    padding:2px 10px;
    font-size:1.20em;
    font-weight:bold;
}


div.overlay_join_community.small a.btn.btn-primary {
background:#fff;
color:#3a77a2;
padding:2px 10px;
font-size:12px;
font-weight:bold;
position:absolute;
bottom:5px;
right:5px;
}

#sc-footer-container {
    height:auto;
}

#sc-footer-bg {
    height: 135px;
    background-color: #4390BF;
    width:100%;
    /* Firefox */
    width: -moz-calc(100% - 150px);
    /* WebKit */
    width: -webkit-calc(100% - 150px);
    /* Opera */
    width: -o-calc(100% - 150px);
    /* Standard */
    width: calc(100% - 150px);
    position: absolute;
    bottom: 0px;
    left: 75px;
}

#sc-footer-text {
    margin: 0 auto;
    padding: 10px 205px 10px 205px;
    font-size: 1.8em;
    line-height:1.1em;
    
}

.banner-join-img {
    z-index: 1106;
    position:relative;
}

@media only screen and (max-width: 1400px) {
    #sc-footer-text {
        font-size:1.6em;
    }
}

@media only screen and (max-width: 1200px) {
    #sc-footer-text {
     font-size:1.4em;
    }
}

@media only screen and (max-width: 1024px) {
    .banner-join-img{
        display: none;
    }

    #sc-footer-container {
        min-height:105px;
    }

    #sc-footer-bg {
        height: auto;

    }

    #sc-footer-bg {
        width:100%;
        left: 0px;
    }
    #sc-footer-text {
        margin: 0 auto;
        padding: 0 0 0 0;
        font-size:1.25em;
    }

    #sc-footer-text .btn.btn-primary {
    line-height:1em;
    background:#fff;
    color:#3a77a2;
    padding:2px 10px;
    font-size:1em;
    font-weight:bold;
}


}
</style>
";




// if the user is logged in, do not show the overlay
$sessionid_cookies = get_sessionid_cookies();
$user = return_user_info($sessionid_cookies);



$userid = $user->id;





if($user->id > 0) {



include_once("../configuration.php");
$cg2 = new JConfig;
$con2 = new mysqli("localhost",$cg2->user,$cg2->password,$cg2->db);


$query = "SELECT member FROM bipyv_users where id = $userid";
$result = mysqli_query($con2, $query);

$row2 = mysqli_fetch_array($result, MYSQLI_NUM);
$member = sprintf($row2[0]);
}



if ($user->id > 0)
{
        
        //Record member to db
        if ($_COOKIE['sc_overlay_join_the_community_membership'] == 'm'){

                $query = "SELECT member FROM bipyv_users WHERE id = " . $userid;
                $result= mysqli_query($con2,$query);
        $row3 = mysqli_fetch_array($result, MYSQLI_NUM);
        $member2 = sprintf($row3[0]);
//              $member2 = mysqli_fetch_row($result);
              

                if ($member2 == '0'){
                        $query = "UPDATE bipyv_users SET member=1 WHERE id = $userid";
                        mysqli_query($con2,$query) or die(mysqli_error());
                }
        }
}


if ($user->id > 0)
{

        //Record member to db
        if ($_COOKIE['amplogin'] == '1'){

                $query = "SELECT member FROM bipyv_users WHERE id = " . $userid;
                $result= mysqli_query($con2,$query);
        $row4 = mysqli_fetch_array($result, MYSQLI_NUM);
        $member3 = sprintf($row4[0]);
//              $member2 = mysqli_fetch_row($result);


                if ($member3 == '1'){
                        $query = "UPDATE bipyv_users SET member=0 WHERE id = $userid";
                        mysqli_query($con2,$query) or die(mysqli_error());
                }
        }
mysql_close($con2);
}



if (($userid > 0) && ($member == 0)){
return;
}



// else {
// if we've already sent the user an email
#if ($_COOKIE['sc_overlay_join_the_community_sent_email_on_login'] == "yes"){
#return;
#}

// if the user is at the "Join the Community!" page, don't show the message
if( $_POST['option'] == "com_content" AND
$_POST['view'] == "article" AND
$_POST['id'] == 3283 )
return;
// if the user is at the "login with facebook" page, don't show the message
if( $_POST['option'] == "com_content" AND
$_POST['view'] == "category" AND
($_POST['id'] == 352 OR $_POST['id'] == 353) )
return;
// if we've already sent the user an email
//if ($_COOKIE['sc_overlay_join_the_community_sent_email_on_login'] == "yes")
//return;




// if the user previously clicked the X to close the advertisement
if ($_COOKIE['sc_overlay_join_the_community_hide'] == "yes")
{
$ojc_large_style = "style='display:none;'";
$ojc_small_style = "";
}
else
{
$ojc_large_style = "";
$ojc_small_style = "style='display:none;'";
}
// if the user previously clicked the X to close the advertisement
if ($_COOKIE['sc_overlay_join_the_community_hide'] == "yes" AND "disable" == "disabled")
{
echo "
<div class='overlay_join_community small sc_rc'>
<a href='/support/team/faq/join?membership=m' class='btn btn-primary' title='Not a Community Member Yet?'>Join the Community</a>
</div>
";
}
else
{
echo "
<script type='text/javascript'>
function close_overlay_join_community()
{
jQuery.post('/support/includes/overlay_join_the_community.php',{task:'hide_overlay'});
jQuery('#ojc_large').slideToggle('slow',function(){
jQuery('#ojc_small').slideToggle('slow');
}
);
}
function show_overlay_join_community()
{
jQuery.post('/support/includes/overlay_join_the_community.php',{task:'cancel_hide_overlay'});
jQuery('#ojc_small').slideToggle('slow',function(){
jQuery('#ojc_large').slideToggle('slow');
}
);
}
</script>
<div class='overlay_join_community' name='ojc_large' id='ojc_large' $ojc_large_style>
<div class='close_x' onClick=' close_overlay_join_community();'></div>
<div id='sc-footer-container'>
   
        <div class='banner-join-img' style='float:left'>

             <img src='/support/images/sc-footer-banner/img-left.png' />

        </div>
        <div class='banner-join-img' style='float:right'>

            <img src='/support/images/sc-footer-banner/img-right.png' />

        </div>
        <div id='sc-footer-bg'>
            <div id='sc-footer-text'>";
if ($member == 1) {
echo "<center><a href='https://secure1.inmotionhosting.com/cgi-bin/gby/clickthru.cgi?id=supportcenter&page=7'><img src='/support/images/sc-footer-banner/imh-50p-off-limited-promo-long.png' alt='50% off our most popular plans!' /></a></center>";
} else { 

         echo " <p style='text-align:center;'>$banner_text</p>
                <p style='text-align:center;'> <a href='$sign_in_link ' class='btn btn-primary'>$big_button_text</a> </p>";
}
echo "        </div>
    
        </div>
    </div>

</div>
<div class='overlay_join_community small sc_rc' name='ojc_small' id='ojc_small' $ojc_small_style>
<div class='show_x' onClick='show_overlay_join_community();'>&#65514;</div>
<a href='$sign_in_link' class='btn btn-primary' title='$small_button_name'>$small_button_text</a>
</div>
";
}
}

function hide_overlay()
{
setcookie("sc_overlay_join_the_community_hide","yes",time()+60*60*24*30,'/','.inmotionhosting.com');
return false;
}
function cancel_hide_overlay()
{
setcookie("sc_overlay_join_the_community_hide","no",time()+60*60*24*30,'/','.inmotionhosting.com');
return false;
}
function overlay_join_the_community_set_cookies()
{
// customer type? customer or member?
$membership_type = "m";
if (substr_count($_SERVER['HTTP_REFERER'],"membership=c")==1)
$membership_type = "c";
setcookie("sc_overlay_join_the_community_membership",$membership_type,time()+60*60*24*30,'/','.inmotionhosting.com');
// if5 the user has read the /support/team/faq/join page, they should be sent an email
if( $_POST['option'] == "com_content" AND
$_POST['view'] == "article" AND
$_POST['id'] == 3283 )
setcookie("sc_overlay_join_the_community_send_email_on_login","yes",time()+60*60*24*30,'/','.inmotionhosting.com');
}
function send_email_join_the_community()
{
// do we need to send an email?
if ( $_POST['guest'] == "0" AND /* the user is not a guest, they have successfully logged in */
$_COOKIE['sc_overlay_join_the_community_send_email_on_login'] == "yes" AND /* the user has clikcked the link to join the community */
$_COOKIE['sc_overlay_join_the_community_sent_email_on_login'] != "yes" AND /* we have not alrady sent the email */
$_COOKIE['sc_overlay_join_the_community_membership'] == "m" ) /* the user is a "m"ember, not a "c"ustomer */
{
include_once("../functions_scv2.php");
$sessionid_cookies = get_sessionid_cookies();
$user = return_user_info($sessionid_cookies);

//Record member to db
//if ((isset($_COOKIE['sc_overlay_join_the_community_membership']) && $_COOKIE['sc_overlay_join_the_community_membership'] == 'm') OR ($_COOKIE['amplogin'] != '1')) { 
 //  $query = 'SELECT member FROM bipyv_users WHERE id = $userid';
  //$result= mysqli_query($con2,$query);
   // list($member2) = mysqli_fetch_row($result);
//	if (!$member2){
 //          $query = 'UPDATE bipyv_users SET member=1 WHERE id = $userid';
  //         mysqli_query($con2,$query) or die(mysqli_error()); 
   //     }



//} 
#if ($_COOKIE['amplogin'] == '1') {
#    $query = 'SELECT member FROM bipyv_users WHERE id = $userid';
#    $result= mysqli_query($con2,$query);
#    list($customer2) = mysqli_fetch_row($result);
#        if ($customer2 != '0'){
#           $query = 'UPDATE bipyv_users SET member=0 WHERE id = $userid';
#           mysqli_query($con2,$query) or die(mysqli_error());
#        }
   
   
#   mysqli_close($con2);
#} 


// get the email address of this user
$query = "SELECT `email` FROM `#__users` WHERE `id` = " . addslashes($user->id) . " LIMIT 1;";
$tmp_user = db_loadArrayList($query);
$to = $tmp_user[0]['email'];
$subject = "A special welcome offer from InMotion Hosting!";
/*
$email_body_txt = "Hello, and welcome to the InMotion Hosting Customer Community!
If you need hosting anytime in the future, here's a 50% coupon to make it easier to try InMotion Hosting:
https://secure1.inmotionhosting.com/cgi-bin/gby/clickthru.cgi?id=supportcenter&page=7
Sincerely,
InMotion Hosting Customer Community Team";
*/
$email_body_txt = "Hello " . $user->username . ",
Welcome to the InMotion Hosting Community!
We have thousands of articles, videos, and helpful tips to help you get your website launched as soon as possible. Find help on topics like email, WordPress, Joomla!, PrestaShop, cPanel, and more! You can also interact with our community to get help or offer advice to others!
As a token of our appreciation for joining our community, we'd like to offer you a new hosting account at 50% off. Please use the link below to sign up for your account (available for a limited time only):
https://secure1.inmotionhosting.com/cgi-bin/gby/clickthru.cgi?id=supportcenter&page=7
Best Regards,
InMotion Hosting
Customer Community Team";
/*
$email_body_html = "<p>Hello, and welcome to the InMotion Hosting Customer Community!</p>
<p>If you need hosting, here's a 50% coupon to make it easier to try InMotion Hosting:</p>
<p><a href='https://secure1.inmotionhosting.com/cgi-bin/gby/clickthru.cgi?id=supportcenter&page=7'><img src='http://www.inmotionhosting.com/support/images/imh-50p-off-limited-promo-long.png' alt='50% off our most popular plans!' /></a></p>
<p>Sincerely,<br />
InMotion Hosting Customer Community Team</p>";
*/
$email_body_html = "<p>Hello " . htmlentities($user->username,ENT_QUOTES) . ",</p>
<p>Welcome to the InMotion Hosting Community!</p>
<p>We have thousands of articles, videos, and helpful tips to help you get your website launched as soon as possible. Find help on topics like <a href='http://www.inmotionhosting.com/support/edu/everything-email?tsrc=cssu'>email</a>, <a href='http://www.inmotionhosting.com/support/edu/wordpress?tsrc=cssu'>WordPress</a>, <a href='http://www.inmotionhosting.com/support/edu/joomla-3?tsrc=cssu'>Joomla!</a>, <a href='http://www.inmotionhosting.com/support/edu/prestashop-16?tsrc=cssu'>PrestaShop</a>, <a href='http://www.inmotionhosting.com/support/edu/cpanel?tsrc=cssu'>cPanel</a>, <a href='http://www.inmotionhosting.com/support?tsrc=cssu'>and more</a>! You can also interact with our community to get help or offer advice to others!</p>
<p>As a token of our appreciation for joining our community, we'd like to offer you a new hosting account at 50% off. Please use the link below to sign up for your account (available for a limited time only):<br />
<a href='https://secure1.inmotionhosting.com/cgi-bin/gby/clickthru.cgi?id=supportcenter&page=7'><img src='http://www.inmotionhosting.com/support/images/imh-sc-signup.jpg' alt='50% off our most popular plans!' /></a></p>
<p>Best Regards,<br />
InMotion Hosting<br />
<a href='http://www.inmotionhosting.com/support/team'>Customer Community Team</a></p>";
$email_body_html = pass_title_body_return_html_email($subject,$email_body_html);
$query = "
INSERT INTO #__email_queue (`id`,`created_date`,`been_sent`,`subject`,`body_text`,`body_html`,`to`)
VALUES (NULL,CURRENT_TIMESTAMP,0,'" . addslashes($subject) . "','" . addslashes($email_body_txt) . "','" . addslashes($email_body_html) . "','" . addslashes($to) . "');";
db_execute($query);
// keep a log of who has received these emails
$query = "
INSERT INTO #__email_queue_overlay_join (`id`,`created_date`,`been_sent`,`subject`,`body_text`,`body_html`,`to`)
VALUES (NULL,CURRENT_TIMESTAMP,0,'" . addslashes($subject) . "','" . addslashes($email_body_txt) . "','" . addslashes($email_body_html) . "','" . addslashes($to) . "');";
db_execute($query);
setcookie("sc_overlay_join_the_community_sent_email_on_login","yes",time()+60*60*24*30,'/','.inmotionhosting.com');
}
}
?>
