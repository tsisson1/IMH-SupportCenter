<?

$user =& JFactory::getUser();

if ("enable_google_search" == "enable_google_search")
	include_once("/home/ccdevinm/public_html/support/templates/supportcentertemplate/includes/search/search-2-google-site-search.php");
else
	include_once("/home/ccdevinm/public_html/support/templates/supportcentertemplate/includes/search/search-2.php");

?>
