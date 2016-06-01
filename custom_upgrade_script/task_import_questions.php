<?

include("config.php");

$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}

mysql_select_db($old_db_name,$con);






// delete all questions before we import them
$query = "DELETE FROM `$new_db_name`.`" . $new_db_fix . "questions`;";
echo "<h1>Deleting all questions... (we'll import them again)</h1>";
mysql_query($query);
echo "<h2>done.</h2>";

$query = "DELETE FROM `$new_db_name`.`" . $new_db_fix . "answers`;";
echo "<h1>Deleting all answers... (we'll import them again)</h1>";
mysql_query($query);
echo "<h2>done.</h2>";

$query = "DELETE FROM `$new_db_name`.`" . $new_db_fix . "question_categories`;";
echo "<h1>Deleting all question categories... (we'll import them again)</h1>";
mysql_query($query);
echo "<h2>done.</h2>";






$query = "SELECT `categories`.`alias` as 'category_alias', `questions`.* FROM `$old_db_name`.`jos_answers_questions` as `questions`, `$old_db_name`.`jos_answers_nestedcategories` as `categories` WHERE `categories`.`id` = `questions`.`category`;";
$result = mysql_query($query);

while($row = mysql_fetch_array($result))
{
	$question_id = $row['id'];
	$question = addslashes($row['question']);
	$question_alias = addslashes($row['alias']);
	$description = addslashes($row['details']);
	$utc_n = strtotime($row['start_date']);
	$best_answer_user = $row['bestanswer'];
	$best_answer_staff = $row['imhanswer'];
	$asker_id = $row['userid'];
	$hits = $row['hits'];
	$category_alias = $row['category_alias'];
	$category_title = ucwords(str_replace("-"," ",$category_alias));

	// if the question category exists, grab the id
	$create_new_question_category_query = "SELECT `id` FROM `$new_db_name`.`" . $new_db_fix . "question_categories` WHERE `alias` = '$category_alias';";
	$create_new_question_category_result = mysql_query($create_new_question_category_query);
	$found_category = false;
	while($create_new_question_category_row = mysql_fetch_array($create_new_question_category_result))
	{
		$found_category = true;
		$category_id = $create_new_question_category_row['id'];
	}
	if($found_category == false)
	{
		$create_new_question_category_query = "INSERT INTO `$new_db_name`.`" . $new_db_fix . "question_categories` (`id`,`parent_id`,`title`,`alias`) VALUES (NULL,0,'$category_title','$category_alias');";
		mysql_query($create_new_question_category_query);
	}
	if($found_category == false)
	{
		$create_new_question_category_query = "SELECT `id` FROM `$new_db_name`.`" . $new_db_fix . "question_categories` WHERE `alias` = '$category_alias';";
	        $create_new_question_category_result = mysql_query($create_new_question_category_query);
        	$found_category = false;
	        while($create_new_question_category_row = mysql_fetch_array($create_new_question_category_result))
        	{
                	$found_category = true;
        	        $category_id = $create_new_question_category_row['id'];
		}
        }

	$query = "INSERT INTO `$new_db_name`.`" . $new_db_fix . "questions` (
`id` ,
`category_id`,
`asker_id` ,
`question` ,
`question_alias`,
`description` ,
`utc_n_ask_date` ,
`best_answer_user` ,
`best_answer_staff` ,
`hits`
)
VALUES (
$question_id , $category_id, '$asker_id', '$question', '$question_alias', '$description', '$utc_n', '$best_answer_user', '$best_answer_staff', '$hits'
);";

	// insert into new db
	mysql_query($query);
}





$query = "SELECT * FROM `$old_db_name`.`jos_answers`";
$result = mysql_query($query);

while($row = mysql_fetch_array($result))
{
	$answer_id = $row['id'];
	$question_id = $row['question_id'];
	$utc_n = strtotime($row['date']);
	$answerer_id = $row['userid'];
	$answer = addslashes($row['answer']);


	$query = "INSERT INTO `$new_db_name`.`" . $new_db_fix . "answers` (
`id` ,
`question_id` ,
`utc_n_answer_date` ,
`answerer_id` ,
`answer` ,
`votes_good` ,
`votes_bad`
)
VALUES (
'$answer_id', '$question_id', '$utc_n', '$answerer_id', '$answer', '0', '0'
);";

	// insert into db
	mysql_query($query);

}

?>
