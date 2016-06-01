<?






include("config.php");





$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}
mysql_select_db($old_db_name,$con);

$query = "SELECT * FROM `$old_db_name`.`jos_jcomments`;";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	$comment = $row['comment'];
		$comment = str_replace("<br />","\n",$comment);
	$object_group = $row['object_group'];
	$object_id = $row['object_id'];
	$user_id = $row['userid'];
	$ip = $row['ip'];
	$utc_n = strtotime($row['date']);

	// the first thing we need to do is get the the new object id
	switch($object_group)
	{
		case "com_content":
			$query = "SELECT `alias` FROM `$old_db_name`.`jos_content` WHERE `id` = $object_id;";
			$old_alias_results = mysql_query($query);
			$x = 0;
                        while($oar_row = mysql_fetch_array($old_alias_results))
                        {
				//echo "<pre>"; print_r($oar_row); echo "</pre>";
				$x++;

				if($x == 2)
					echo "<h1>WHOA!!! Duplicate aliases in old database</h1>";

				$query = "SELECT `id` FROM `$new_db_name`.`" . $new_db_fix . "content` WHERE `alias` = '" . $oar_row['alias'] . "';";
				$new_article_id_results = mysql_query($query);
				$y = 0;
				while($nair_row = mysql_fetch_array($new_article_id_results))
				{
					// echo "<pre>"; print_r($nair_row); echo "</pre>";
					$object_id = $nair_row['id'];
					$y++;

					if($y == 2)
						echo "<h1>WHOA!!! Duplicate aliases in new database</h1>";
				}
			}
			break;
		case "com_jooanswers":
			// ---------------------------------------------------------------------------------------------
			// convert old id of janswers to new id
			// ---------------------------------------------------------------------------------------------
			// first, grab the old alias
			$query = "
				SELECT `aq`.*, `anc`.`alias` as 'category_alias' FROM `$old_db_name`.`jos_answers_questions` as `aq`, `$old_db_name`.`jos_answers_nestedcategories` as `anc`
				WHERE `aq`.`id` = '$object_id' AND
					`aq`.`category` = `anc`.`id`;
";
			$oldquestionresult = mysql_query($query);
			while($oqr_row = mysql_fetch_array($oldquestionresult))
			{
				$old_alias = $oqr_row['category_alias'] . "/" . $oqr_row['alias'];

				// now, grag the new id
				$query = "SELECT `id` FROM `$new_db_name`.`" . $new_db_fix . "questions` WHERE `question` = '" . addslashes($oqr_row['question']) . "' LIMIT 1;";
				$newidresults =  mysql_query($query);
				while($nir_row = mysql_fetch_array($newidresults))
				{
					$object_id = $nir_row['id'];
				}
			}

			$object_group = "com_communitysupport";
			break;
	}






	$query = "INSERT INTO `$new_db_name`.`" . $new_db_fix . "comments` (`id` ,`object_id` ,`object_group` ,`user_id` ,`comment` ,`ip` ,`utc_n`)VALUES (NULL , '$object_id', '$object_group', '" . $user_id . "', '" . addslashes($comment) . "', '$ip', '$utc_n');";
	// echo "<pre>$query</pre>";
	mysql_select_db($new_db_name,$con);
	mysql_query($query);
}






?>
