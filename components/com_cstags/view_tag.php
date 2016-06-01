<?

$tag_alias = htmlentities($exploded_url[3],ENT_QUOTES);

if( substr_count($tag_alias,"+") > 0 )
	include_once("view_tag_multiple.php");
else
	include_once("view_tag_single.php");

?>
