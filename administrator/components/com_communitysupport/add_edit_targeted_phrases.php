<?


// grab some author data
$query = "	SELECT `u`.`id`,`u`.`username`
		FROM #__users as `u`, #__user_usergroup_map as `uum`
		WHERE `uum`.`group_id` = 8 AND `u`.`id` = `uum`.`user_id`
		;
";
$db->setQuery($query);
$author_data = $db->loadObjectList();
$author_select = "	<select name='author_id' id='author_id'>";
foreach($author_data as $ad_k => $ad_v)
{
	$author_select .= "<option value='" . $ad_v->id . "'>" . $ad_v->username . "</option>";
	$user_list .= "<span class='label label-default'>" . $ad_v->username . " - " . $ad_v->id . "</span><br />";	
}
$author_select .= "	</select>";







if( $_POST['task_a'] == "edit" )
{
	$query = "
		UPDATE #__query_data_target_keyword
		SET	`target_keyword` = '" . addslashes($_POST['target_keyword']) . "',
			`where` = '" . addslashes($_POST['where']) . "',
			`article_id` = " . $_POST['article_id'] . ",
			`author_id` = " . $_POST['author_id'] . "
		WHERE `id` = " . $_POST['target_id'] . "
		LIMIT 1;
	";
	$db->setQuery($query);
	$result = $db->execute();
        echo "<p class='alert alert-success'>UPDATED!</p>";
}






if( $_POST['task_a'] == "new" )
{
	$query = "
		INSERT INTO #__query_data_target_keyword (`id`,`target_keyword`,`where`,`article_id`,`info`,`author_id`)
		VALUES(NULL,'" . addslashes($_POST['target_keyword']) . "','" . addslashes($_POST['where']) . "'," . $_POST['article_id'] . ",''," . $_POST['author_id'] . ");
	";
	$db->setQuery($query);
        $result = $db->execute();
        echo "<p class='alert alert-success'>Added!</p>";
}






echo "	<form method='post' style='margin:30px 0px;'>
		<input type='hidden' name='task_a' id='task_a' value='new' />
		<input type='text' style='width:800px; background:#ddd;' name='target_keyword' id='target_keyword' value='' /><br />
		<textarea name='where' id='where' style=\"width:800px; height:75px; font-family:'Courier New', Courier, monospace; font-size:11px;\"></textarea><br />
		<input type'text' name='article_id' id='article_id' value='' /><br />
		$author_select<br />
		<input type='submit' value='new' class='btn btn-success' />
	</form>
";






$query = "SELECT * FROM #__query_data_target_keyword;";
$db->setQuery($query);
$target_keywords = $db->loadObjectList();

foreach($target_keywords as $tk_k => $tk_v)
{
	echo "	<form method='post' style='margin:30px 0px;'>
			<input type='hidden' name='task_a' id='task_a' value='edit' />
			<input type='hidden' name='target_id' id='target_id' value='" . $tk_v->id . "' />
			<input type='text' style='width:800px; background:#ddd;' name='target_keyword' id='target_keyword' value='" . htmlentities($tk_v->target_keyword,ENT_QUOTES) . "' /><br />
			<textarea name='where' id='where' style=\"width:800px; height:75px; font-family:'Courier New', Courier, monospace; font-size:11px;\">" . htmlentities($tk_v->where,ENT_QUOTES) . "</textarea><br />
			<input type='text' name='article_id' id='article_id' value='" . $tk_v->article_id . "' /> <em>Article ID</em><br />
			<input type='text' name='author_id' id='author_id' value='" . $tk_v->author_id . "' /> <em>Author ID</em><br />
			<input type='submit' value='edit' class='btn btn-primary' />
		</form>
	";
}





echo $user_list;

?>
