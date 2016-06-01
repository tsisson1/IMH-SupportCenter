<div>clear the question categories</div>
<div>loop through questions to create the top level categories</div>
<div>loop through the questions and update their category_id field</div>
<div>loop through the questions and set their question_alias field</div>






<?

include("config.php");

// from j3, grab a list of all category id's and aliases
$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}
mysql_select_db($old_db_name,$con);






$query = "DELETE FROM `$new_db_name`.`" . $new_db_fix . "question_categories`;";
echo "<pre>"; print_r($query); echo "</pre>";
mysql_select_db($new_db_name,$con);
mysql_query($query);






// create top level categories
//
// grab distinct categories being used
$query = "SELECT DISTINCT(`qs`.`category`), `nc`.* FROM `$old_db_name`.`jos_answers_questions` as qs, `$old_db_name`.`jos_answers_nestedcategories` as `nc` WHERE `qs`.`category` = `nc`.`id`;";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	if($row['alias'] != "")
	{
		$old_question_category_alias_to_name[$row['alias']] = $row['name'];
		$old_question_category_id_to_alias[$row['id']] = $row['alias'];
	}
}
asort($old_question_category_alias_to_name);
// insert them into the new database
mysql_select_db($new_db_name,$con);
foreach($old_question_category_alias_to_name as $alias => $title)
{
	$query = "INSERT INTO `$new_db_name`.`" . $new_db_fix . "question_categories` (`id`,`parent_id`,`title`,`alias`) VALUES (NULL, 0, '$title', '$alias');";
	mysql_query($query);
}






// loop through the questions and set their question_alias field
$query = "SELECT * FROM `$new_db_name`.`" . $new_db_fix . "questions`;";
$result = mysql_query($query);
mysql_select_db($new_db_name,$con);
while($row = mysql_fetch_array($result))
{
	$clean_question_1 = html_entity_decode($row['question'],ENT_QUOTES);
	$clean_question_2 = html_entity_decode($clean_question_1,ENT_QUOTES);
	$new_question_alias = import_script_create_alias($clean_question_2);

	echo "	<pre>
			$clean_question_1
			$clean_question_2
			$new_question_alias
		</pre>
	";
	
	$query_to_update_question_alias = "UPDATE `$new_db_name`.`" . $new_db_fix . "questions` SET `question_alias` = '$new_question_alias' WHERE `id` = '" . $row['id'] . "';";
	mysql_query($query_to_update_question_alias);

	$new_question_id_to_alias[$row['id']] = $new_question_alias;
}






// update new question category ids
foreach($new_question_id_to_alias as $new_question_id => $new_question_alias)
{
	// grab the old category id and alias
	$get_old_cat_id_and_alias_query = "SELECT `nc`.* FROM `$old_db_name`.`jos_answers_questions` as `qs`, `$old_db_name`.`jos_answers_nestedcategories` as `nc` WHERE `qs`.`alias` = '$new_question_alias' AND `qs`.`category` = `nc`.`id`;";
	$get_old_cat_id_and_alias_result = mysql_query($get_old_cat_id_and_alias_query);
	while($get_old_cat_id_and_alias_row = mysql_fetch_array($get_old_cat_id_and_alias_result))
	{
		$old_question_category_alias = $get_old_cat_id_and_alias_row['alias'];

		// now that we have the old category alias, grab the new id of the same alias
		$get_new_category_id_based_on_old_alias_query = "SELECT `id` FROM `$new_db_name`.`" . $new_db_fix . "question_categories` WHERE `alias` = '$old_question_category_alias';";
		$get_new_category_id_based_on_old_alias_result = mysql_query($get_new_category_id_based_on_old_alias_query);
		while($get_new_category_id_based_on_old_alias_row = mysql_fetch_array($get_new_category_id_based_on_old_alias_result))
		{
			$new_id_for_this_question = $get_new_category_id_based_on_old_alias_row['id'];

			if($new_id_for_this_question == "")
			{
				echo "<h1>here's a problem</h1>";
			}

			$query_to_fix_new_question_category_ids = "UPDATE `$new_db_name`.`" . $new_db_fix . "questions` SET `category_id` = $new_id_for_this_question WHERE `id` = $new_question_id LIMIT 1;";
			mysql_select_db($new_db_name,$con);
			mysql_query($query_to_fix_new_question_category_ids);
			echo "<pre>$query_to_fix_new_question_category_ids</pre>";
		}
	}
}















?>
