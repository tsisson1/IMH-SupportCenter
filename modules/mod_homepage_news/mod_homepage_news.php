<?php


//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');


// added another "- 60*60" to fix timezone issue
$seven_days_ago_nn = date("Y-m-d H:i:s", time() - 60*60*24*7 - 60*60);


$option = JRequest::getVar('option');
$view = JRequest::getVar('view');
$id = JRequest::getVar('id');

// // if( $_GET['test'] == "test" )
	// // echo "<div>option=$option view=$view id=$id</div>";

// is this /support/start?
if( $option == "com_content" AND $view == "category" AND $id == 398 )
	$this_is_slash_start = true;

/*
if( $option != "com_content" or $view != "categories" or $id != 0 )
	if($this_is_slash_start != true)
		return;
*/

$db = JFactory::getDbo();
$query = "SELECT * FROM #__content WHERE `catid` = 50 AND `state` = 1 AND `modified` >= '$seven_days_ago_nn';";
$db->setQuery($query);
$results = $db->loadObjectList();

// // echo "<pre>"; print_r($results); echo "</pre>";

if( ! $results )
	return;
else
{
	if(!class_exists('ContentHelperRoute')) require_once (JPATH_SITE . '/components/com_content/helpers/route.php');

	foreach($results as $k  => $v)
	{
		$article_title = $v->title;
		$article_url = JRoute::_(ContentHelperRoute::getArticleRoute($v->id . "-" . $v->alias, $v->catid));

		$news_item_color_style = "";
		if( time() - strtotime($v->created) <= (60*60*24) )
			$news_item_color_style = "style='color:red;'";

		$news_items .= "
			<div>
				<a href='$article_url' $news_item_color_style >$article_title</a>
				<div>Updated <span style='color:#aaa;'>" . date('Y-m-d h:i a',strtotime($v->modified)-(60*60*4)) . " EST</span></div>
				<div>Hits: " . $v->hits . "</div>
			</div>
		";
	}

	/*
	$news_items .=  "
        <div style='margin-top:10px;'><a style='color:red;' href='/support/news/general/wp-login-brute-force-attack'>WordPress Brute Force Attacks are increasing</a></div>
        <div>Be sure that your WordPress site is following <a href='/support/news/general/wp-login-brute-force-attack'>best security practices</a>. If you are unable to login to your WordPress dashboard, <a href='/support/website/wordpress/wordpress-security-preventing-brute-force-attacks-on-admin-login'>click here</a> for help.</div>
        ";
	*/
}

echo "
	<h3>News / Announcements</h3>
	$news_items
";


?>
