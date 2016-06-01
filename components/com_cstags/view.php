<?

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

$document = JFactory::getDocument();
$app = JFactory::getApplication();

$exploded_url = explode("/",$_SERVER['REDIRECT_URL']);

if(!class_exists('ContentHelperRoute')) require_once (JPATH_SITE . '/components/com_content/helpers/route.php');

if( $user->username == "BradM" )
        ini_set("display_errors", 1);

/*
include("functions.php");

$if_pagination_which_page = if_pagination_which_page();

if( $if_pagination_which_page != false )
{
        $exploded_url = remove_pagination_from_exploded_url();
        $document->setMetaData('robots','noindex,follow');
}

remove_canonical();
$new_canonical_url = JURI::base() . str_replace("/support/","",$_SERVER['REDIRECT_URL']);
$document->addHeadLink($new_canonical_url, 'canonical');

*/






/*
Array
(
    [0] => 
    [1] => support
    [2] => tags
    [3] => outlook-2013
)
*/






if( $user->groups[8] == 8 )
{
	// echo "<p>Coming soon...</p>";
	// echo "<pre>"; print_r($exploded_url); echo "</pre>";
	switch(count($exploded_url))
	{
		case 3:
			include_once("view_all_tags.php");
			break;
		case 4:
			include_once("view_tag.php");
			break;
	}
}
else
{
	echo "<p>Coming Soon...</p>";
}






?>
