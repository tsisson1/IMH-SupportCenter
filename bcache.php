<?

$bcache_enabled = false;

$use_bcache = should_we_use_bcache();



if( $use_bcache == true AND $bcache_enabled == true)
{
        $bcache_filename = preg_replace("/[^a-zA-Z0-9\s]/", "", $_SERVER['REQUEST_URI']) . ".html";

	if( file_exists("bcache/$bcache_filename") )
	{
		include_once("bcache/$bcache_filename");
		die();
	}
}




function should_we_use_bcache()
{
	// is the user logged in?
	foreach($_COOKIE as $k => $v)
		if( strlen($k) == 32 AND strlen($v) == 32 )
			return false;

	// are we passing get info?
	if( count($_GET) > 0 )
		return false;

	// are we posting info?
	if( count($_POST) > 0 )
		return false;

	// do not cache urls containing these
	$do_not_include = array("/support/tools","support/login");
	foreach($do_not_include as $k => $v)
		if( substr_count($_SERVER['REQUEST_URI'],$v) > 0 )
	                return false;

	// if coming from google, do not cache
	if( substr_count(strtolower($_SERVER['HTTP_REFERER']),"google") > 0)
                return false;

	return true;
}


?>
