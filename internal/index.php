<?

$allowed_ips = array(
"216.54.31.86", // office ip
"192.145.236.123" // lax-sup-pro-ctr1.inmotionhosting.com
);
if(! in_array($_SERVER['HTTP_X_FORWARDED_FOR'],$allowed_ips))
        die("access denied");






// establish connection to database
$con=mysqli_connect("localhost","ccdevinm_inwiki","XkSefs*I{&G?","ccdevinm_inwiki");
if (mysqli_connect_errno())
        die("Failed to connect to MySQL: " . mysqli_connect_error());






if( $_GET['unanswered_questions'] == 1)
{
	$unanswered_questions = 0;
	$query = "SELECT count(`question_id`) as 'question_count' FROM `questions` WHERE `status` = -1;";
	$un_result = mysqli_query($con,$query);
	while($un_row = mysqli_fetch_array($un_result))
        	$unanswered_questions = $un_row['question_count'];
	die("$unanswered_questions");
}
if( $_GET['unanswered_questions'] == 2)
{
	$query = "SELECT * FROM `questions` WHERE `status` = -1;";
        $un_result = mysqli_query($con,$query);
        while($un_row = mysqli_fetch_array($un_result))
	{
		$question_text = $un_row['question'];
		$q_option = $un_row['option'];
		$q_view = $un_row['view'];
		$q_id = $un_row['id'];
		echo "<li><a href='/support/internal/?option=$q_option&view=$q_view&id=$q_id'>$question_text</a></li>";
	}
	die();
}





session_start();






$option = $_GET['option'];
$view = $_GET['view'];
$id = $_GET['id'];
$post_url = "/support/internal/?option=" . urlencode($option) . "&view=" . urlencode($view) . "&id=" . urlencode($id);












// --------------------------------------------------------------------------------------------------------------------
// START user authentication system
// --------------------------------------------------------------------------------------------------------------------
if( $_POST['support_wiki_task'] == "logout" )
	$_SESSION['logged_in'] = 0;
$passwords['bradm'] = "1234abdc";
$passwords['alij'] = "1234";
$passwords['admin'] = "1234";
if( $_POST['support_wiki_task'] == "login" )
{
	if( $passwords[$_POST['username']] == $_POST['password'] AND $_POST['username'] != "" )
	{
		$_SESSION['logged_in'] = 1;
		$_SESSION['username'] = $_POST['username'];
	}
	else
		echo "<div style='color:red;'>failed login</div>";
}
if( $_SESSION['logged_in'] != 1 )
{
        echo "
		<form method='post' action='$post_url'>
			user <input type='text' name='username' id='username' /><br />
			pass <input type='password' name='password' id='password' /><br />
			<input type='hidden' name='support_wiki_task' id='support_wiki_task' value='login' />
			<input type='submit' value='login' />
		</form>
		<div>Note: login credentials are currently managed by bradm</div>
	";
	die();
}
// --------------------------------------------------------------------------------------------------------------------
// END user authentication system
// --------------------------------------------------------------------------------------------------------------------












if( $option != "com_content" )
	die("sorry, this tool only works for articles at this time (not questions or other special pages)");











$result = mysqli_query($con,"SELECT * FROM `articles` WHERE `option` = '" . addslashes($option) . "' AND `view` = '" . addslashes($view) . "' AND `id` = " . addslashes($id) . ";");
while($row = mysqli_fetch_array($result))
        $wiki_text = $row['text'];






if( $_POST['support_wiki_task'] == "update" AND $wiki_text != "")
	mysqli_query($con,"UPDATE `articles` SET `text` = '" . addslashes($_POST['wiki_text']) . "' WHERE `option` = '" . addslashes($option) . "' AND `view` = '" . addslashes($view) . "' AND `id` = " . addslashes($id) . " LIMIT 1;");
if( $_POST['support_wiki_task'] == "update" AND $wiki_text == "")
        mysqli_query($con,"INSERT INTO `articles` (`option`,`view`,`id`,`text`) VALUES('" . addslashes($option) . "','" . addslashes($view) . "'," . addslashes($id) . ",'" . addslashes($_POST['wiki_text']) . "');");





// post a question to the database
if( $_POST['support_wiki_task'] == "ask_a_question" )
{
	$query = "
	INSERT INTO `questions` (
		`option` ,
		`view` ,
		`id` ,
		`question` ,
		`question_details` ,
		`asker` ,
		`question_id` ,
		`ask_time` ,
		`status`
	)
	VALUES ( '" . addslashes($option) . "', '" . addslashes($view) . "', '" . addslashes($id) . "', '" . addslashes($_POST['question']) . "', '" . addslashes($_POST['question_details']) . "', '" . $_SESSION['username'] . "', NULL ,CURRENT_TIMESTAMP , '-1');
	";
	mysqli_query($con,$query);
}






// post an answer to the database
if( $_POST['support_wiki_task'] == "submit_answer" )
{
	$query = "	INSERT INTO `answers`
			(`question_id`,`answer_id`,`answer`,`answerer`,`answer_time`)
			VALUES (" . $_POST['question_id'] . ",NULL,'" . addslashes($_POST['my_answer']) . "','" . $_SESSION['username'] . "',CURRENT_TIMESTAMP);
	";
	mysqli_query($con,$query);
	// set question status to 1
	$query = "	UPDATE `questions` SET `status` = 1 WHERE `question_id` = " . $_POST['question_id'] . " LIMIT 1;";
	mysqli_query($con,$query);
}






// grab current wiki article for this page
$result = mysqli_query($con,"SELECT * FROM `articles` WHERE `option` = '" . addslashes($option) . "' AND `view` = '" . addslashes($view) . "' AND `id` = " . addslashes($id) . ";");
while($row = mysqli_fetch_array($result))
	$wiki_text = $row['text'];
if( $wiki_text == "" )
	$wiki_text = "no wiki article";
	$first_wiki_text = $wiki_text;

	$wiki_text = htmlspecialchars($wiki_text);
	$wiki_text = str_replace("&lt;pre&gt;","<pre>",$wiki_text);
        $wiki_text = str_replace("&lt;/pre&gt;","</pre>",$wiki_text);
        $wiki_text = str_replace("&lt;h1&gt;","<h1>",$wiki_text);
        $wiki_text = str_replace("&lt;/h1&gt;","</h1>",$wiki_text);
        $wiki_text = str_replace("&lt;h2&gt;","<h2>",$wiki_text);
        $wiki_text = str_replace("&lt;/h2&gt;","</h2>",$wiki_text);
        $wiki_text = str_replace("&lt;h3&gt;","<h3>",$wiki_text);
        $wiki_text = str_replace("&lt;/h3&gt;","</h3>",$wiki_text);




switch($_POST['support_wiki_task'])
{
	case "edit":
		echo "
			<form method='post' action='$post_url'>
				<textarea name='wiki_text' id='wiki_text' style='display:block; width:600px; height:400px;'>" . htmlspecialchars($first_wiki_text) . "</textarea>
				<input type='submit' name='support_wiki_task' id='support_wiki_task' value='update' />
			</form>
		";
		break;
	default:
		echo "
			<h1>Wiki</h1>
			<div style='white-space:pre-line;'>$wiki_text</div>
			<form method='post' action='$post_url'>
				<input type='submit' name='support_wiki_task' id='support_wiki_task' value='edit' />
			</form>
		";
		break;
}







echo "	<h1>Questions</h1>";
$result = mysqli_query($con,"SELECT * FROM `questions` WHERE `option` = '" . addslashes($option) . "' AND `view` = '" . addslashes($view) . "' AND `id` = " . addslashes($id) . ";");
while($row = mysqli_fetch_array($result))
{
	if( $row['status'] == "-1" )
		$status = "<span style='color:red;'>unanswered</span>";
	else
		$status = "<span style='color:green;'>answered</span>";

	echo "	<div style='background:#ddd; border:1px solid #aaa; padding:4px; margin-bottom:10px;'>
			<div style='font-size:11px; width:200px; float:right; margin-left:25px;'>
                                <div><strong>Status:</strong> $status</div>
                                <div><strong>Asked by:</strong> " . $row['asker'] . "</div>
                                <div><strong>Asked:</strong> " . $row['ask_time'] . "</div>
                        </div>
			<h3>" . $row['question'] . "</h3>
			<div>" . $row['question_details'] . "</div>
			<div style='clear:both;'></div>

			<h3 style='color:green;'>Answers</h3>
	";
	// grab all the answers
	unset($has_answer);
	$answer_result = mysqli_query($con,"SELECT * FROM `answers` WHERE `question_id` = " . $row['question_id'] . ";");
	while($answer_row = mysqli_fetch_array($answer_result))
	{
		$has_answer = true;
		echo "
			<div style='font-size:11px; width:200px; float:right; margin-left:25px;'>
                                <div><strong>Answered by:</strong> " . $answer_row['answerer'] . "</div>
                                <div><strong>Answered:</strong> " . $answer_row['answer_time'] . "</div>
                        </div>
			<div>" . $answer_row['answer'] . "</div>
			<div style='clear:both; margin:10px 0px; border-top:1px solid #aaa;'></div>
		";
	}
	if( $has_answer != true )
		echo "<div style='color:red;'>No answers</div>";
	// ----------------------------------------------------------------
	// allow for an answer to be submitted
	echo "
		<h3 style='color:green;'>Answer / Discuss</h3>
		<form method='post' action='$post_url'>
			<input type='hidden' name='support_wiki_task' id='support_wiki_task' value='submit_answer' />
			<input type='hidden' name='question_id' id='question_id' value='" . $row['question_id'] . "' />
			<textarea name='my_answer' id='my_answer' style='width:500px;'></textarea><br />
			<input type='submit' value='submit answer' />
		</form>
	";
	echo "
		</div>
	";
}
echo "	<h1>Ask a Question</h1>
	<form method='post' action='$post_url'>
		<input type='hidden' name='support_wiki_task' id='support_wiki_task' value='ask_a_question' />
		Question<br />
		<input type='text' name='question' id='question' style='width:500px;' /><br />
		Details<br />
		<textarea name='question_details' id='question_details' style='width:500px;'></textarea><br />
		<input type='submit' value='submit' />
	</form>
";





echo "
	<form method='post' action='$post_url'>
		<input type='hidden' name='support_wiki_task' id='support_wiki_task' value='logout' />
		<div style='text-align:right;'><input type='submit' value='logout' /></div>
	</form>
";






mysqli_close($con);


?>
