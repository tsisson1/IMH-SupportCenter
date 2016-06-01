<?

$db = JFactory::getDbo();
$user = JFactory::getUser();
$document = JFactory::getDocument();

// ------------------------------------------------------------------------------------------------
// BASIC SETUP
// ------------------------------------------------------------------------------------------------

$document->setTitle("QUIZ | " . htmlentities($this->item->category_title) . " | InMotion Hosting" );

// message for the user to login!
$not_logged_in_warning = "";
if($user->guest == 1)
	$not_logged_in_warning = "<p style='color:red;'>You are not logged in! Please <a href='/support/login'>login</a> save your results and earn points!</p>";

/**
 * grab the quiz id
 */
$query = "SELECT * FROM #__quiz WHERE `catid` = " . $this->item->catid;
$db->setQuery($query);
$quiz = $db->loadObject();
if (! is_numeric($quiz->id))
	die("Error - no quiz exists for this category!");

/**
 * grab all the questions for this quiz
 */
$query = "SELECT * FROM #__quiz_questions WHERE `quiz_id` = " . $quiz->id;
$db->setQuery($query);
$questions = $db->loadObjectList();
if(! $questions)
	die("Error - no questions exist for this quiz!");

/**
 * for each question, grab all the possible answers
 */
foreach($questions as $q_k => $q_v)
{
	$query = "SELECT * FROM #__quiz_answers WHERE `question_id` = " . $q_v->id;
	$db->setQuery($query);
	$answers[$q_v->id] = $db->loadObjectList();
}

/**
 * grab information about the category (title / etc)
 */
$category_url = explode("/",JURI::current());
array_pop($category_url);
$category_url = implode("/",$category_url);

// ------------------------------------------------------------------------------------------------
// GRADING SUBMISSIONS
// ------------------------------------------------------------------------------------------------

$task_a_process_answers = "<input type='hidden' name='taska' id='taska' value='process_answers' />";
$submit_quiz_button = "<input type='submit' value='Submit' class='btn btn-primary' />";
$quiz_introduction = "<div class='page-header about-quiz'>
                <p>
                        The information in this quiz has been taken from the following course:<br />
                        <a href='$category_url'>" . htmlentities($this->item->category_title,ENT_QUOTES) . "</a>
                </p>

                <p>This quiz is not official, it's just for fun. Successfully completing this quiz will however earn you " . number_format($quiz->points) . " points towards your user profile!</p>

                $not_logged_in_warning
        </div>
";
if($_POST['taska']=="process_answers")
{
	$quiz_introduction = "";

	// create array of question = answer
	foreach($_POST as $pk => $pv)
	{
		// is this a [question_1] => 2
		$exploded_key = explode("_",$pk);
		if($exploded_key[0] == "question" AND is_numeric($exploded_key[1]) AND is_numeric($pv))
			$submitted_answers[$exploded_key[1]] = $pv;
	}

	// loop through and grade each question
	foreach($questions as $q_k => $q_v)
	{
		// do we have a best answer?
		if($q_v->correct_answer == $submitted_answers[$q_v->id])
		{
			$answer_status[$q_v->id] = "<p class='correct_answer'>Correct!</p>";
			$correct_answers++;
		}
		else
		{
			$answer_status[$q_v->id] = "<p class='incorrect_answer'>Incorrect!</p>";
		}
	}

	// did the user pass this quiz?
	if($correct_answers == count($questions) AND $correct_answers > 0)
	{
		if($user->guest == 1)
		{
			$successfully_passed_message = "
                                <p class='alert alert-success'>
                                        <strong>Congratulations!</strong><br />
                                        You answered all questions correctly! If you were <a href='/support/login'>logged in</a> you would have earned " . number_format($quiz->points) . " points!
                                </p>
                        ";
		}
		else
		{
			$successfully_passed_message = "
				<p class='alert alert-success'>
					<strong>Congratulations!</strong><br />
					You answered all questions correctly AND earned " . number_format($quiz->points) . " points!
				</p>
			";
		}
		$submit_quiz_button = "";

		log_user_passed_this_quiz($quiz);
	}
	else
	{
		$successfully_passed_message = "
                        <p class='alert alert-warning'>
                                <strong>Uh-oh!</strong><br />
                                There are a few incorrect answers. That's ok, <a href='" . JURI::current() . "'>click here</a> to take the quiz again!
                        </p>
                ";
		$submit_quiz_button = "<a href='" . JURI::current() . "' class='btn btn-primary'>Try again!</a>";
	}

	$task_a_process_answers = "";
}

// ------------------------------------------------------------------------------------------------
// CREATE THE LAYOUT OF THE PAGE AND PRINT
// ------------------------------------------------------------------------------------------------

/**
 * create the html that displays all of the quiz questions / answers
 */
$question_html .= "<form method='post'>";
foreach($questions as $q_k => $q_v)
{
	$question_html .= "
		<div class='question'>" . 
			$q_v->question;

	foreach($answers[$q_v->id] as $a_k => $a_v)
	{
		$radio_name_id = "question_" . $q_v->id;

		// should this radio button be checked because the user chose as answer?
		$pre_selected_answer = "";
		if($_POST[$radio_name_id] == $a_v->id)
			$pre_selected_answer = "checked='checked'";

		$question_html .= "
			<div class='possible_answer'>
				<input type='radio' name='$radio_name_id' id='$radio_name_id' value='" . $a_v->id . "' $pre_selected_answer />" .
				$a_v->answer . "
			</div>
		";
	}

	$question_html .=
			$answer_status[$q_v->id] . "
		</div>
	";
}
$question_html .= "
			$task_a_process_answers
			$submit_quiz_button
		</form>
";

/**
 * print everything!
 */
echo "
<style>
	div.possible_answer {
		position:relative;
		padding-left:30px;
	}
	div.possible_answer input[type='radio'] {
		position:absolute;
		top:0px;
		left:0px;
	}
	.correct_answer {
		color:green;
		font-weight:bold;
	}
	.incorrect_answer {
		color:red;
		font-weight:bold;
	}
	div.item-page div.page-header {
		margin-bottom:0px;
	}
	div.item-page div.page-header.about-quiz {
		background:#eee;
		padding:5px 5px 0px 5px;
		margin-bottom:10px;
	}
	div.question {
		border-bottom:1px solid #ddd;
		margin-bottom:10px;
	}
	div.item-page p.alert {
		margin:15px 0px;
	}
</style>

<div class='item-page'>
	<div class='page-header'>
		<h1>QUIZ | " . htmlentities($this->item->category_title,ENT_QUOTES) . "</h1>
	</div>

	$quiz_introduction

	$successfully_passed_message

	$question_html
</div>
";






function log_user_passed_this_quiz($quiz)
{
	$db = JFactory::getDbo();
	$user = JFactory::getUser();

	// if they're not a registered user, then just return.
	if($user->guest == 1)
		return;

	// just in case they've already take the quiz, let's just delete it
	$query = "DELETE FROM #__quiz_completions WHERE `user_id` = " . $user->id . " AND `quiz_id` = " . $quiz->id;
	$db->setQuery($query);
	$db->execute();

	// now, log that they've taken the quiz
	$query = "
	INSERT	INTO #__quiz_completions
		(`id`,`quiz_id`,`quiz_version`,`user_id`,`time`)
	VALUES	(NULL," . $quiz->id . "," . $quiz->current_version . "," . $user->id . "," . time() . ");";
	$db->setQuery($query);
        $db->execute();

	// clear their points
	gf_clear_user_points($user->id);
}






?>
