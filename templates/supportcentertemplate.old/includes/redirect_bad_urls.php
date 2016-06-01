<?

// this page needs to exist because the redirect code in error.php will never be reached

$referer_query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
$referer_vars = array();
parse_str($referer_query,$referer_vars);

/*
Array
(
    [option] => com_content
    [view] => category
    [id] => 217
    [Itemid] => 101
    [test] => testt
)
*/

if("enabled" == "enabled")
{
	if( $referer_vars['option'] == "com_content" )
	{
		if( $referer_vars['view'] == "category" )
		{
			$redirect_url = JRoute::_(ContentHelperRoute::getCategoryRoute($referer_vars['id']));
			// do the redirect
			if( $redirect_url )
	        	{
        	        	Header( "HTTP/1.1 301 Moved Permanently" );
	                	Header( "Location: $redirect_url" );
		                exit();
	        	}
		}

		// http://www.inmotionhosting.com/support/index.php?option=com_content&view=article&id=2382:create-html-form&catid=47&Itemid=242
		if( $referer_vars['view'] == "article" AND is_numeric($referer_vars['catid']) )
		{
			// echo "<div>" . $referer_vars['id'] . "</div>";
			$exploded_id = explode(":",$referer_vars['id']);
			$redirect_url = JRoute::_(ContentHelperRoute::getArticleRoute($referer_vars['id'], $referer_vars['catid']));
			if( $redirect_url )
                        {
                                Header( "HTTP/1.1 301 Moved Permanently" );
                                Header( "Location: $redirect_url" );
                                exit();
                        }
		}
	}
}

?>
