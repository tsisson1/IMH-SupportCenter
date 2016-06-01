<?

// last 50 comments
$query = "
	SELECT	`c`.`id`,
		`c`.`object_id`,
		`c`.`object_group`,
		`c`.`utc_n`,
		`c`.`user_id`,
		`u`.`username`
	FROM	#__comments as `c`,
		#__users as `u`
	WHERE	`c`.`user_id` = `u`.`id`
	ORDER BY `c`.`id` DESC
	LIMIT 100;
";
$db->setQuery($query);
$comments = $db->loadObjectList();
echo "
	<h1>Latest Comments</h1>
	<table class='table table-striped'>
		<tr>
			<th>#</th>
			<th>Comment id</th>
			<th>Timestamp</th>
			<th>Username</th>
			<th>Checked by</th>
			<th>Article</th>
		</tr>
";
$x = 1;
foreach($comments as $k => $v)
{
	// was this comment made by a staff member?
	$query = "SELECT count(`user_id`) FROM #__user_usergroup_map WHERE `user_id` = " . $v->user_id . " AND `group_id` = 8;";
	$db->setQuery($query);
	$usergroup_eight = $db->loadResult();
	if($usergroup_eight < 1)
	{
		$query = "
			SELECT	`checks`.`checked_staff_id`,
				`u`.`username`
			FROM	#__cxs_checks as `checks`,
				#__users as `u`
			WHERE	`type` = 'article_comment' AND
				`type_id` = " . $v->id . " AND
				`checks`.`checked_staff_id` = `u`.`id`;
		";
		$db->setQuery($query);
		$checker = $db->loadObject();

		$checker_bg_color = "";
		if(!$checker)
			$checker_bg_color = 'red';

		// grab the article title and alias of article
		$query = "SELECT `title`,`alias` FROM #__content WHERE `id` = " . $v->object_id . ";";
		$db->setQuery($query);
		$article_info = $db->loadObject();

		echo "	<tr>
				<td>$x</td>
				<td>" . $v->object_id . "</td>
				<td>" . date("Y-m-d H:i",$v->utc_n) . "</td>
				<td>" . htmlentities($v->username,ENT_QUOTES) . "</td>
				<td style='background:$checker_bg_color;'>" . $checker->username . "</td>
				<td><a href='../" . urlencode($article_info->alias) . "' target='_blank'>" . htmlentities($article_info->title,ENT_QUOTES) . "</a></td>
			</tr>
		";

		$x++;
	}
}
echo "	</table>";

// echo "<pre>"; print_r($comments); echo "</pre>";

?>
