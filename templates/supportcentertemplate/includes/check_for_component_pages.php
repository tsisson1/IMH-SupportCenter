<?

$redirect_url = $_SERVER['REQUEST_URI'];

if( substr_count($redirect_url,"/support/component/search") > 0 )
{
	header( 'Location: /support/search' ) ;
	die();
}

#if( substr_count($redirect_url,"/support/component/users") > 0 )
 #       die("user component not available");

?>
