<?

if( $_POST )
{
	if( $_POST['Itemid'] == "246" )
	{
		if( $_POST['task'] == "search" AND $_POST['option'] == "com_search" )
		{
			$redirect_url_for_search = "/support/search?searchword=" . urlencode($_POST['searchword']) . "&tsrc=ampsearch";
			header( "Location: $redirect_url_for_search" ) ;
			die();
		}
	}
}

?>
