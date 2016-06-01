<?

$query = "SELECT * FROM #__users u, #__user_usergroup_map m WHERE u.id = m.user_id and m.group_id = 8;";
$db->setQuery($query);
$admins = $db->loadObjectList();





foreach($admins as $admin_k => $admin_v)
{
	$admin_username = $admin_v->username;
	$admin_id = $admin_v->id;

	echo "<h2>$admin_username</h2>";

	$query = "SELECT `state`,`id`,`title`,`created` FROM #__content WHERE created_by = $admin_id AND `created` >= '2013-03-24 00:00:00';";
	$db->setQuery($query);
	$new_articles = $db->loadObjectList();
	echo "<pre>"; print_r($new_articles); echo "</pre>";
}



?>
