<?






// -----------------------------------------------------------------------------------------------------------------
// grab all tags
// -----------------------------------------------------------------------------------------------------------------
$query = "SELECT * FROM #__tags;";
$db->setQuery($query);
$tags = $db->loadObjectList();
if( $tags )
{
	foreach($tags as $t_k => $t_v)
	{
		echo "<li><a href='/support/tags/" . $t_v->alias . "'>" . htmlentities($t_v->title,ENT_QUOTES) . "</a></li>";
	}
}





?>
