<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$db = JFactory::getDbo();

// first, grab the last part of the url /support/use-fantastico
$exploded_request_uri = explode("?",$_SERVER['REQUEST_URI']);
$everything_in_url_before_first_question_mark = $exploded_request_uri[0];
// echo "<p>$everything_in_url_before_first_question_mark</p>";
// $exploded_url = explode("/",$_SERVER['REQUEST_URI']);
$exploded_url = explode("/",$everything_in_url_before_first_question_mark);
$last_url_alias = $exploded_url[ count($exploded_url) - 1 ];






// http://www.inmotionhosting.com/support/edu/drupal-8/index.php
if($last_url_alias == "index.php")
{
	if( substr($everything_in_url_before_first_question_mark,-10) == "/index.php")
	{
		$url_with_index_php_removed = substr($everything_in_url_before_first_question_mark,0,-10);
		Header( "HTTP/1.1 301 Moved Permanently" );
		Header( "Location: $url_with_index_php_removed" );
		exit();
	}
}






// http://www.inmotionhosting.com/support/index.php?option=com_content&view=article&id=2419:deleting-an-affiliate-account-in-opencart&catid=47&Itemid=242
if( $_GET['view'] == "article" AND $_GET['id'] != "" )
{
	$exploded_url_id = explode(":",$_GET['id']);
	$last_url_alias = $exploded_url_id[1];
	// die($last_url_alias);
}
// die('...');






// create get variables
$get_value = "";
$get_count = 1;
if( $_GET )
{
	foreach($_GET as $get_key => $get_value)
	{
		if($get_value != "")
		{
			if( $get_count == 1)
				$get_value = "?$get_key=$get_value";
			else
				$get_value .= "&$get_key=$get_value";
			$get_count++;
		}
	}
}






// ----------------------------------------------------------------------------------------
// bad url redirect
// ----------------------------------------------------------------------------------------
$query = "SELECT * FROM #__bad_url_redirects;";
$db->setQuery($query);
$results = $db->loadObjectList();
foreach($results as $k => $v)
{
        switch($v->type)
        {
                case "ends":
                        // if( endswith($_SERVER['REQUEST_URI'],$v->value) )
			if( endswith($everything_in_url_before_first_question_mark,$v->value) )
                        {
				// echo "<pre>"; print_r($v); echo "</pre>";die();
                                // if so, redirect
                                Header( "HTTP/1.1 301 Moved Permanently" );
                                Header( "Location: " . $v->new_full_url . $get_value );
                                exit();
                        }
                        break;
                case "includes":
                        if( substr_count($_SERVER['REQUEST_URI'],$v->value) > 0 )
                        {
                                // if so, redirect
                                Header( "HTTP/1.1 301 Moved Permanently" );
                                Header( "Location: " . $v->new_full_url . $get_value );
                                exit();
                        }
                        break;
        }
}
function endswith($string, $test)
{
        $strlen = strlen($string);
        $testlen = strlen($test);
        if ($testlen > $strlen) return false;
        return substr_compare($string, $test, -$testlen) === 0;
}






// Does this alias match that of an article?
$query = "SELECT `id`,`alias`,`catid` FROM #__content WHERE `alias` = '" . addslashes($last_url_alias) . "' AND `state` = 1;";
$db->setQuery($query);
$article_results = $db->loadObjectList();
if( count($article_results) == 1 )
{
	$redirect_url = JRoute::_(ContentHelperRoute::getArticleRoute($article_results[0]->id . ":" . $article_results[0]->alias, $article_results[0]->catid));
	if( $redirect_url )
	{
		$tsrc_get_variable = "";
		if( $_GET['tsrc'] )
			$tsrc_get_variable = "?tsrc=" . $_GET['tsrc'];

		Header( "HTTP/1.1 301 Moved Permanently" );
		Header( "Location: $redirect_url" . $tsrc_get_variable );
		exit();
	}
}






// Does this alias match that of a question?
$query = "SELECT `id` FROM #__questions WHERE `question_alias` = '" . addslashes($last_url_alias) . "';";
$db->setQuery($query);
$question_results = $db->loadObjectList();
if( count($question_results) == 1 )
{
      #  $redirect_url = pass_question_id_return_question_url($question_results[0]->id);
        if( $redirect_url )
        {
                Header( "HTTP/1.1 301 Moved Permanently" );
                Header( "Location: $redirect_url" );
                exit();
        }
}






// Does this alias match that of an article?
$query = "SELECT `id` FROM #__categories WHERE `alias` = '" . addslashes($last_url_alias) . "';";
$db->setQuery($query);
$category_results = $db->loadObjectList();
if( count($category_results) == 1 )
{
        $redirect_url = JRoute::_(ContentHelperRoute::getCategoryRoute($category_results[0]->id));
        if( $redirect_url )
        {
                Header( "HTTP/1.1 301 Moved Permanently" );
                Header( "Location: $redirect_url" );
                exit();
        }
}







include dirname(__FILE__) . "/index.php";
?>
