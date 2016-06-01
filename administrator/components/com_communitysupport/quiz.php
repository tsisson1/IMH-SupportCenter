<?

if($_POST['taska'] == "new answer")
{
	$query = "
	INSERT	INTO #__quiz_answers
		(`id`,`question_id`,`answer`,`order`)
	VALUES	(null," . $_POST['question_id'] . ",'" . addslashes($_POST['answer']) . "'," . $_POST['order'] . ");
	";
	$db->setQuery($query);
        $db->execute();
}


if($_POST['taska'] == "new question")
{
	$query = "
	INSERT	INTO #__quiz_questions
		(`id`,`quiz_id`,`question`,`correct_answer`,`order`)
	VALUES	(null," . $_POST['quiz_id'] . ",'" . addslashes($_POST['question']) . "'," . $_POST['correct_answer'] . "," . $_POST['order'] . ");
	";
	$db->setQuery($query);
        $db->execute();
}


if($_POST['taska'] == "edit answer")
{
	$query = "
	UPDATE	#__quiz_answers
	SET	`answer` = '" . addslashes($_POST['answer']) . "',
		`order` = " . $_POST['order'] . "
	WHERE	`id` = " . $_POST['answer_id'] . "
	LIMIT	1
	";
	$db->setQuery($query);
        $db->execute();
}


if($_POST['taska'] == "edit question")
{
	$query = "
	UPDATE	#__quiz_questions
	SET	`question` = '" . addslashes($_POST['question']) . "',
		`correct_answer` = " . $_POST['correct_answer'] . ",
		`order` = " . $_POST['order'] . "
	WHERE	`id` = " . $_POST['question_id'] . "
	LIMIT	1;
	";
	$db->setQuery($query);
	$db->execute();
}


if($_POST['quiz_task'] == "edit" AND is_numeric($_POST['quiz_id']))
{
	$query = "
	UPDATE	#__quiz
	SET	`current_version` = " . $_POST['current_version'] . ",
		`points` = " . $_POST['points'] . ",
		`enabled` = " . $_POST['enabled'] . "
	WHERE	`id` = " . $_POST['quiz_id'] . ";";
	$db->setQuery($query);
	$db->execute();
}


if($_POST['quiz_task'] == "new" AND is_numeric($_POST['catid']))
{
        $query = "
		INSERT	INTO #__quiz
			(`id`,`catid`,`current_version`,`points`,`enabled`)
		VALUES	(null," . $_POST['catid'] . "," . $_POST['current_version'] . "," . $_POST['points'] . ",0);";
        $db->setQuery($query);
        $db->execute();
}






// this is our menu
echo "<form method='post'><input type='submit' value='View Quizes' class='btn btn-primary' /></form>";






// grab all quizes
$query = "
	SELECT	`q`.*,
		`c`.`title`
	FROM	#__quiz as `q`,
		#__categories as `c`
	WHERE	`q`.`catid` = `c`.`id`;
";
$db->setQuery($query);
$quizes = $db->loadObjectList();






// if we don't have a taska, show the quiz stuff
if($_POST['taska'] == "")
{
	echo "
	<table class='table'>
		<tr>
			<th>Category</th>
			<th>Version</th>
			<th>Points</th>
			<th>Enabled</th>
			<th>task</th>
		</tr>
	";
	foreach($quizes as $k => $v)
	{
		echo "
		<form method='post'>
			<tr>
				<td>" . htmlentities($v->title,ENT_QUOTES) . "</td>
				<td><input type='text' name='current_version' id='current_version' value='" . $v->current_version . "' /></td>
				<td><input type='text' name='points' id='points' value='" . $v->points . "' /></td>
				<td><input type='text' name='enabled' id='enabled' value='" . $v->enabled . "' /></td>
				<td>
					<input type='submit' name='quiz_task' id='quiz_task' value='edit' class='btn btn-primary' />
					<input type='submit' name='taska' id='taska' value='view questions' class='btn btn-info' />
				</td>
			</tr>
			<input type='hidden' name='quiz_id' id='quiz_id' value='" . $v->id . "' />
		</form>
		";
	}
	echo "	<form method='post'>
                        <tr>
                                <td><input type='text' name='catid' id='catid' /></td>
                                <td><input type='text' name='current_version' id='current_version' /></td>
                                <td><input type='text' name='points' id='points' /></td>
                                <td></td>
                                <td>
                                        <input type='submit' name='quiz_task' id='quiz_task' value='new' class='btn btn-success' />
                                </td>
                        </tr>
                </form>
	</table>
	";
}






if($_POST['taska'] == "view questions" OR $_POST['taska'] == "edit question" OR $_POST['taska'] == "view answers" OR $_POST['taska'] == "edit answer" OR $_POST['taska'] == "new question" OR $_POST['taska'] == "new answer")
{
	// grab all the questions
	$query = "SELECT * FROM #__quiz_questions WHERE `quiz_id` = " . $_POST['quiz_id'];
	$db->setQuery($query);
	$questions = $db->loadObjectList();

	echo "
	<table class='table table-striped'>
		<tr>
			<th>Question</th>
			<th>Correct answer</th>
			<th>Order</th>
			<th>Action</th>
		</tr>
	";
	foreach($questions as $q_k => $q_v)
	{
		echo "
		<form method='post'>
			<tr>
				<td><textarea name='question' id='question' style='width:300px; height:100px;'>" . htmlentities($q_v->question,ENT_QUOTES) . "</textarea></td>
				<td><input type='text' name='correct_answer' id='correct_answer' value='" . $q_v->correct_answer . "' /></td>
				<td><input type='text' name='order' id='order' value='" . $q_v->order . "' /></td>
				<td>
					<input type='submit' name='taska' id='taska' value='edit question' class='btn btn-primary' />
					<input type='submit' name='taska' id='taska' value='view answers' class='btn btn-info' />
				</td>
				
			</tr>
			<input type='hidden' name='question_id' id='question_id' value='" . $q_v->id . "' />
			<input type='hidden' name='quiz_id' id='quiz_id' value='" . $_POST['quiz_id'] . "' />
		</form>
		";
	}
	echo "	<form method='post'>
                        <tr>
                                <td><textarea name='question' id='question' style='width:300px; height:100px;'></textarea></td>
                                <td><input type='text' name='correct_answer' id='correct_answer' /></td>
                                <td><input type='text' name='order' id='order' /></td>
                                <td>
                                        <input type='submit' name='taska' id='taska' value='new question' class='btn btn-success' />
                                </td>

                        </tr>
                        <input type='hidden' name='quiz_id' id='quiz_id' value='" . $_POST['quiz_id'] . "' />
                </form>
	</table>
	";
}





if($_POST['taska'] == "view answers" OR $_POST['taska'] == "edit answer" OR $_POST['taska'] == "new question" OR $_POST['taska'] == "new answer")
{
	if(! is_numeric($_POST['question_id']))
		die('good');

	$query = "SELECT * FROM #__quiz_answers WHERE `question_id` = " . $_POST['question_id'];
	$db->setQuery($query);
	$answers = $db->loadObjectList();

	echo "
		<table class='table table-striped'>
			<tr>
				<th>ID</th>
				<th>Answer</th>
				<th>Order</th>
				<th>Action</th>
			</tr>
	";
	if($answers)
	{
		foreach($answers as $a_k => $a_v)
		{
			echo "
			<form method='post'>
				<tr>
					<td>" . $a_v->id . "</td>
					<td><textarea name='answer' id='answer' style='width:400px;height:40px;'>" . htmlentities($a_v->answer,ENT_QUOTES) . "</textarea></td>
					<td><input type='text' name='order' id='order' value='" . $a_v->order . "' />
					<td><input type='submit' name='taska' id='taska' value='edit answer' class='btn btn-primary' />
				</th>
				<input type='hidden' name='answer_id' id='answer_id' value='" . $a_v->id . "' />
				<input type='hidden' name='quiz_id' id='quiz_id' value='" . $_POST['quiz_id'] . "' />
				<input type='hidden' name='question_id' id='question_id' value='" . $_POST['question_id'] . "' />
			</form>
			";
		}
	}
	echo "		<form method='post'>
                                <tr>
                                        <td></td>
                                        <td><textarea name='answer' id='answer' style='width:400px;height:40px;'></textarea></td>
                                        <td><input type='text' name='order' id='order' />
                                        <td><input type='submit' name='taska' id='taska' value='new answer' class='btn btn-success' />
                                </th>
                                <input type='hidden' name='quiz_id' id='quiz_id' value='" . $_POST['quiz_id'] . "' />
                                <input type='hidden' name='question_id' id='question_id' value='" . $_POST['question_id'] . "' />
                        </form>
		</table>
	";
}






if($_POST)
{
	echo "<pre style='margin-top:600px;'>"; print_r($_POST); echo "</pre>";
}






?>
