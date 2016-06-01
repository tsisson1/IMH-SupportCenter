<?

$allow_this_url = true;


// 2013.02.12.0954 - 88.198.184.230 - ddos attempt? (bradm)
$block_these_spam_ips = array("222.127.174.33","88.198.184.230");
if( in_array($_SERVER['HTTP_X_FORWARDED_FOR'],$block_these_spam_ips))
        $allow_this_url = false;



$bbu[] = "index.php?title=";		// media wiki
$bbu[] = "jooanswers/voteanswer";	// moz bot is crawling these
$bbu[] = "/support/component/mailto";	// moz bot is crawling these
$bbu[] = "tmpl=component&print=1";	// moz bot is crawling these
$bbu[] = "index.php?option=com_jce";	// JCE BOT is crawling these, we don't use jce
$bbu[] = "profile.php?mode=";		// phpbb url
$bbu[] = "password_forgotten.php";	// looks to be zencart
$bbu[] = "/login.php";			// looks to be oscommerce
$bbu[] = "../../";			// either drupal or joomla
$bbu[] = "/support/index.php?option=com_user&view=login";	// moz bot is crawling these
$bbu[] = "type=signup";
$bbu[] = "/user/register";
$bbu[] = "support/register";
$bbu[] = "%9D";
$bbu[] = "+++";
$bbu[] = "ct=clnk";
$bbu[] = "JuliL85iycxmeu";
$bbu[] = "=encodedquery";
$bbu[] = "=ENCODEDQUERY";
$bbu[] = "/RS=";
$bbu[] = "users/www.facebook.com/";
$bbu[] = "users/facebook.com/";
foreach($bbu as $bbu_key => $bbu_value)
{
	if( substr_count($_SERVER['REQUEST_URI'],$bbu_value) > 0 )
		$allow_this_url = false;
}



// block user agents
$bua[] = "SiteSucker";			// "SiteSucker/2.3.5"
foreach($bua as $bua_key => $bua_value)
{
        if( substr_count($_SERVER['HTTP_USER_AGENT'],$bua_value) > 0 )
                $allow_this_url = false;
}



// urls ending with
$aew[] = "/0";
$aew[] = "/messages";
$aew[] = "/untitled";
$aew[] = "/undefined";
$aew[] = "/signup";
$aew[] = "/sclogo";
$aew[] = "/load/recent";
$aew[] = "/trackback";
foreach($aew as $aew_k => $awk_k)
{
	$negitive_count = -1 * strlen($awk_k);
	if( substr($_SERVER['REQUEST_URI'],$negitive_count) == $awk_k )
		$allow_this_url = false;
}



// bots look for .php hack files in the images/stories folder, we shouldn't have any php files there
if( substr_count($_SERVER['REQUEST_URI'],"/images/stories/") > 0 AND substr($_SERVER['REQUEST_URI'],-3) == "php" )
	$allow_this_url = false;
if( substr_count($_SERVER['REQUEST_URI'],"/images/stories/") > 0 AND substr($_SERVER['REQUEST_URI'],-6) == "php?rf" )
        $allow_this_url = false;



// we're not a windows server, no .asp files
if( substr($_SERVER['REQUEST_URI'],-4) == ".asp" )
        $allow_this_url = false;



// they're calling a php file that is not index.php
if( substr_count($_SERVER['REQUEST_URI'],"index.php") < 1 AND substr_count($_SERVER['REQUEST_URI'],".php") > 0 )
	$allow_this_url = false;



if( $allow_this_url == false )
{
	// IF THIS IS GOOGLE CRAWLING OUR SITE
	if( substr_count(strtolower($_SERVER['HTTP_USER_AGENT']),"google") > 0 OR $_GET['test'] == "allowthiserror")
	{
		// do nothing
	}
	else
	{
		header("HTTP/1.1 666 Not Found");
		die("URL not allowed");
	}
}



?>
