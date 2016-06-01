<?php

// die("Error - Please try again in one moment.");

/**
 * @package    Joomla.Site
 *
 * @copyright  Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */






// 2014.07.10.1138 are they coming from google?
if (substr_count($_SERVER['HTTP_REFERER'],"google.") > 0)
{
	$parsed = parse_url( $_SERVER['HTTP_REFERER'], PHP_URL_QUERY );
	parse_str( $parsed, $url_query );
	if ($url_query['q'] != "")
	{
		$cd = 0;
		if($url_query['cd'] != "")
			$cd = $url_query['cd'];

		// connect to the database
	        include_once("configuration.php");
	        $cg = new JConfig;
	        $con = mysqli_connect("localhost",$cg->user,$cg->password,$cg->db);
	        if (mysqli_connect_errno())
        	        die('error 201401080317');
	        // setup and run query
        	$query = "
			INSERT	INTO `" . $cg->dbprefix . "google_keyword_log`
				(`id`,`keyword`,`url`,`timestamp_n`,`cd`)
			VALUES	(null,'" . addslashes($url_query['q']) . "','" . addslashes($_SERVER['REQUEST_URI']) . "','" . time() . "','" . addslashes($cd) . "');
		";	
	        mysqli_query($con,$query);
        	// close connection
	        mysqli_close($con);		
	}
}






// ---------------------------------------------------------------------------------------
// 2014.02.12.0940 - bruteforce logging
// ---------------------------------------------------------------------------------------
//
// LOOK AT THE APACHE LOGS, SEE IF IT APPEARS THERE'S AN ATTACK
// 	tail -f /usr/local/apache/domlogs/ccdevinm/inmotionhosting.com |grep -v " 403 "
//
// FIRST, RESET THE LOG FILE
// 	DELETE FROM `bipyv_bruteforce_log` WHERE `id` > 1
//
// THEN, ENABLE THE LOGGING BELOW IN THE IF STATEMENT
//
// THEN, SEE WHICH IPS ARE SLAMMPING US
// 	SELECT `user_ip`, COUNT(`user_ip`) as `hits` FROM `bipyv_bruteforce_log` GROUP BY `user_ip` ORDER BY `hits` DESC
//
// THEN, BLOCK THEM IN THE .htaccess file
//
// THEN, DISABLE THE LOGGING BELOW IN THE IF STATEMENT
if( "enabled" == "enabledd" )
{
	// connect to the database
	include_once("configuration.php");
	$cg = new JConfig;
	$con = mysqli_connect("localhost",$cg->user,$cg->password,$cg->db);
	if (mysqli_connect_errno())
	        die('error 201401080927');
	// clean up some variables
	$user_ip = addslashes($_SERVER['HTTP_X_FORWARDED_FOR']);
	$user_agent = addslashes($_SERVER['HTTP_USER_AGENT']);
	$url = addslashes($_SERVER['REQUEST_URI']);
	// setup and run query
	$query = "      INSERT INTO `" . $cg->dbprefix . "bruteforce_log`
               		(`id`,`user_ip`,`timestamp`,`url`,`user_agent`)
	                VALUES (NULL,'$user_ip',CURRENT_TIMESTAMP,'$url','$user_agent');
	";
	mysqli_query($con,$query);
	// close connection
	mysqli_close($con);
}






// 2014.01.08 09:19 - which pages are taking longer than X seconds to load?
$GLOBALS['track_page_load_time_start_time'] = time();

include_once("includes/bad_search_coming_from_amp.php");

if( ! $_GET['searchword'] )
	include_once("block_bogus_urls.php");

// include_once("bcache.php");

if (version_compare(PHP_VERSION, '5.3.1', '<'))
{
	die('Your host needs to use PHP 5.3.1 or higher to run this version of Joomla!');
}

/**
 * Constant that is checked in included files to prevent direct access.
 * define() is used in the installation folder rather than "const" to not error for PHP 5.2 and lower
 */
define('_JEXEC', 1);

require_once("functions_scv2.php");

$rgfv = rgfv();

if (file_exists(__DIR__ . '/defines.php'))
{
	include_once __DIR__ . '/defines.php';
}

if (!defined('_JDEFINES'))
{
	define('JPATH_BASE', __DIR__);
	require_once JPATH_BASE . '/includes/defines.php';
}

require_once JPATH_BASE . '/includes/framework.php';

// Mark afterLoad in the profiler.
JDEBUG ? $_PROFILER->mark('afterLoad') : null;

// Instantiate the application.
$app = JFactory::getApplication('site');


// Execute the application.
$app->execute();


// include_once("increase_hits_when_caching.php");

// Initialise the application.
	#$app->initialise();

// Mark afterIntialise in the profiler.
	#JDEBUG ? $_PROFILER->mark('afterInitialise') : null;

// Route the application.
	#$app->route();

// Mark afterRoute in the profiler.
	#JDEBUG ? $_PROFILER->mark('afterRoute') : null;

// Dispatch the application.
	#$app->dispatch();

// Mark afterDispatch in the profiler.
	#JDEBUG ? $_PROFILER->mark('afterDispatch') : null;

// Render the application.
	#$app->render();

// Mark afterRender in the profiler.
	#JDEBUG ? $_PROFILER->mark('afterRender') : null;

// Return the response.
	#echo $app;

// print a message to show that we're on the dev server
#        echo "<div style='position:fixed;top:45%;left:45%;width:10%;border:1px solid red;height:10%;'></div>";






// 2014.01.08 09:19 - which pages are taking longer than X seconds to load?
/*
$GLOBALS['track_page_load_time_end_time'] = time();
$GLOBALS['track_page_load_time_total_time'] = ($GLOBALS['track_page_load_time_end_time'] - $GLOBALS['track_page_load_time_start_time']);
if( $_GET['test'] == "track_page_speed" OR $GLOBALS['track_page_load_time_total_time'] >= 5 )
	include_once("track_page_load_time.php");
*/






// 2014.01.31.1440 - bcache
/*
if( $use_bcache == true AND $bcache_enabled == true)
{
	$bcache_filename = preg_replace("/[^a-zA-Z0-9\s]/", "", $_SERVER['REQUEST_URI']) . ".html";
	$fh = fopen("bcache/$bcache_filename", 'w') or die("can't open file");
        fwrite($fh,$app);
        fclose($fh);
}
*/

