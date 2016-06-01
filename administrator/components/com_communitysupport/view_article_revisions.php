<?

echo "	<h1>WHERE edit was made on '%%'</h1>
	<form method='post'>
		<input type='text' name='date' id='date' value='" . htmlspecialchars($_POST['date']) . "' /><input type='submit' value='Submit' />
	</form>
";






if( $_POST['date'] )
{
	$query = "
		SELECT `cr`.`id`, `cr`.`title`, `cr`.`timestamp`,`cr`.`author_id`, `u`.`username`, `c`.`publish_up`
		FROM #__content_revisions as `cr`, #__users as `u`, #__content as `c`
		WHERE	`cr`.`timestamp` LIKE '%" . addslashes($_POST['date']) . "%' AND
			`cr`.`author_id` = `u`.`id` AND
			`cr`.`type_id` != 0 AND
			`c`.`id` = `cr`.`type_id`
		ORDER BY `cr`.`author_id` ASC
	";
	$db->setQuery($query);
	$results = $db->loadObjectList();

	echo "<h1>Edits</h1>";
	if( $results )
	{
		echo "	<table cellspacing='0' cellpadding='4' border='1'>
				<tr style='background:#ddd; font-weight:bold;'>
					<td>Editor</td>
					<td>Published</td>
					<td>Edit time</td>
					<td>Title</td>
				</tr>
		";
		foreach( $results as $k => $v )
		{
			$bg = "#fff";
			if(     date("Y-m-d",strtotime($v->timestamp)) == date("Y-m-d",strtotime($v->publish_up)) OR
                                ((60 * 60 * 24 * 7) > strtotime($v->timestamp) - strtotime($v->publish_up))
                        )
                                $bg = "#bbb";

			$link = "/support/administrator/index.php?option=com_communitysupport&task=view_article_revisions&arid=" . $v->id;
			echo "	<tr style='background:$bg;'>
					<td>" . $v->username . "</td>
					<td>" . $v->publish_up . "</td>
					<td>" . $v->timestamp . "</td>
					<td><a href='$link'>" . htmlspecialchars($v->title) . "</a></td>
				</tr>
			";
		}
		echo "	</table>";
	}
	else
		echo "<li>no edits</li>";
}






if( $_GET['arid'] AND ! $_POST['date'] )
{
	echo "<link rel='stylesheet' href='/support/administrator/components/com_communitysupport/diff/php-diff-master/example/styles.css' type='text/css' charset='utf-8'/>";

	// get the latest update
	$query = "
		SELECT `cr`.*, `u`.`username`
		FROM #__content_revisions as `cr`, #__users as `u`
		WHERE	`cr`.`id` = " . $_GET['arid'] . " AND
			`cr`.`author_id` = `u`.`id`;
	";
	$db->setQuery($query);
	$new_results = $db->loadObjectList();
	// echo "<pre>"; print_r($new_results); echo "</pre>";

	// get the prior version
	$query = "
		SELECT `cr`.*
		FROM #__content_revisions as `cr`
		WHERE	`cr`.`type` = 'article' AND
			`cr`.`type_id` = " . $new_results[0]->type_id . " AND
			`cr`.`timestamp` < '" . $new_results[0]->timestamp . "'
		ORDER BY `cr`.`id` DESC
		LIMIT 0,1";
	$db->setQuery($query);
        $old_results = $db->loadObjectList();
	// echo "<pre>"; print_r($old_results); echo "</pre>";
	// grab the prior editor
	$query = "SELECT `username` FROM #__users WHERE `id` = " . $old_results[0]->author_id;
	$db->setQuery($query);
        $old_modifier = $db->loadObjectList();
	$old_results[0]->username = $old_modifier[0]->username;


	$exploded_old_text = explode(".",$old_results[0]->text);
                $old_article_length = strlen($old_results[0]->text);
        $exploded_new_text = explode(".",$new_results[0]->text);
                $new_article_length = strlen($new_results[0]->text);

        $character_change = $new_article_length - $old_article_length;
        $percent_change = 100 - round(($old_article_length * 100) / $new_article_length,2);


	// what's new?
	foreach($exploded_new_text as $nt_k => $nt_v)
	{
		if( ! in_array($nt_v,$exploded_old_text) )
			$whats_new .= "\n<li style='border:1px solid #006600; padding:2px; background:#CCFFCC; margin-bottom:5px;'>" . htmlspecialchars($nt_v) . "</li>\n";
	}
	// what's old?
	foreach($exploded_old_text as $ot_k => $ot_v)
        {
                if( ! in_array($ot_v,$exploded_new_text) )
                        $whats_old .= "\n<li style='border:1px solid #700000; padding:2px; background:#FFCCCC; margin-bottom:5px;'>" . htmlspecialchars($ot_v) . "</li>\n";
        }

	echo "	<h1 style='text-align:center; border:2px solid #000066; background:#E5FFFF; padding:5px;'>" . htmlspecialchars($old_results[0]->title,ENT_QUOTES) . "</h1>
		<div>
	                <strong>Old</strong>: $old_article_length characters<br />
        	        <strong>New</strong>: $new_article_length characters<br />
                	<strong>Change in length of article</strong>: <span style='border:1px solid #006600; padding:2px; background:#CCFFCC; margin-bottom:5px;'>$character_change characters / $percent_change% change</span><br />
	        </div>
		<div style='float:left; width:48%;'>
			<h2>Lines that no longer exist</h2>
			<p>
                                <strong>Editor</strong>: " . $old_results[0]->username . "<br />
                                <strong>Modified</strong>: " . $old_results[0]->timestamp . "
                        </p>
			$whats_old
		</div>
		<div style='float:right; width:48%;'>
			<h2>New lines</h2>
			<p>
				<strong>Editor</strong>: " . $new_results[0]->username . "<br />
				<strong>Modified</strong>: " . $new_results[0]->timestamp . "
			</p>
			$whats_new
		</div>
		<div style='clear:both;'></div>
	";






	// Include the diff class
        require_once("diff/php-diff-master/lib/Diff.php");
        // Include two sample files for comparison
        $a = explode("\n",$old_results[0]->text);
        $b = explode("\n",$new_results[0]->text);
        // Options for generating the diff
        $options = array(
                'ignoreWhitespace' => true,
                'ignoreCase' => true,
        );
        // Initialize the diff class
        $diff = new Diff($a, $b, $options);
        echo "<h2>Side by Side Diff</h2>";
        // Generate a side by side diff
        require_once("diff/php-diff-master/lib/Diff/Renderer/Html/SideBySide.php");
        $renderer = new Diff_Renderer_Html_SideBySide;
        echo $diff->Render($renderer);
}


?>
