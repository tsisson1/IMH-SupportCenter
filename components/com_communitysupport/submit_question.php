<?

include_once("functions.php");

#$key = md5($_SERVER["REMOTE_ADDR"]);



$Bottest = $_POST['website'];

$Number1 = $_POST['firstNumber'];
$Number2 = $_POST['secondNumber'];
$captchaResult = $_POST["captchaResult"];
$checkTotal = $Number1 + $Number2;







JSession::checkToken() or die( 'Invalid Token' );



// ***********************************************************************
// check to ensure the user has submitted enough info
// ***********************************************************************
if( $_POST )
{
	$post_this_question = true;

	if ( substr_count($_POST['question']," ") < 3 )
	{
		$errors[] = "Your question summary was too short. It needs to be 4 or more words.";
		$post_this_question = false;
	}
    if ($captchaResult != $checkTotal) {
            $errors[] = "You failed the captcha.";
            $post_this_question = false;
    }
 /*   if ($_COOKIE['valid'] != $key){
            $errors[] = "You must have cookies enabled to post questions.";
            $post_this_question = false;  
    } */
    if (!empty($Bottest)) {
            $errors[] = "The system thinks you are a bot.";
            $post_this_question = false;
    } 
	if ( substr_count($_POST['details']," ") < 9 )
	{
                $errors[] = "Your question details were too short. It needs to be 10 or more words.";
                $post_this_question = false;
        }

	if ( $user->guest == true AND gf_valid_email_address($_POST['guest_email']) == false )		/* are they a guest and did they give us a proper email address */
	{
		$errors[] = "Please enter a valid email address in step 4";
                $post_this_question = false;
	}

	if ( $post_this_question == false )
	{
		$json_errors = json_encode($errors);
		echo "
			<form method='post' action='/support/community-support/ask-a-question' name='mqdn' id='mqdn'>
				<input type='hidden' name='submission_errors' id='submission_errors' value='" . htmlentities($json_errors) . "' />
				<input type='hidden' name='question_question' id='question_question' value='" . htmlspecialchars($_POST['question'],ENT_QUOTES) . "' />
				<input type='hidden' name='guest_email' id='guest_email' value='" . htmlspecialchars($_POST['guest_email'],ENT_QUOTES) . "' />
				<input type='hidden' name='cpanel_username_or_domain' id='cpanel_username_or_domain' value='" . htmlentities($_POST['cpanel_username_or_domain'],ENT_QUOTES) . "' />
				<textarea name='question_details' id='question_details' style='display:none;'>" . htmlspecialchars($_POST['details'],ENT_QUOTES) . "</textarea>
			</form>
			<script>document.getElementById('mqdn').submit();</script>
		";
		die();
	}
}






if(! is_numeric( $_POST['category_id']) )
	die('nnnnnum');


// problem - we don't want to allow someone to ask the same question twice (IE, the same alias)
// if it already exists, add a number after it
$original_question_url = $_POST['category'] . "/" . create_alias($_POST['question']);
$original_question_alias = create_alias($_POST['question']);

/*
$query = "SELECT count(`id`) as 'duplicate_aliases' FROM #__questions WHERE `url` = '$original_question_url';";
$db->setQuery($query);
$results = $db->loadObjectList();
*/
$current_alias_count = pass_alias_return_total_existing_same_aliases(create_alias($_POST['question']));

if($current_alias_count > 0 OR is_string_pagination_alias($original_question_alias) == true)
{
	$created_question_url = false;
	$x = 2;
	while($created_question_url == false)
	{
		$new_question_url = $original_question_alias . "-" . $x;

		/*
		$query = "SELECT count(`id`) as 'duplicate_aliases' FROM #__questions WHERE `url` = '$new_question_url';";
		$db->setQuery($query);
		$results = $db->loadObjectList();
		*/
		$current_alias_count = pass_alias_return_total_existing_same_aliases($new_question_url);

		if($current_alias_count > 0 OR is_string_pagination_alias($new_question_url) == true)
			$x++;
		else
		{
			$created_question_url = true;
			$question_url = $new_question_url;
			$question_alias = $new_question_url;
		}
	}
}
else
{
	$question_url = $original_question_url;
	$question_alias = $original_question_alias;
}






// number of ajax search results
if( ! is_numeric($_POST['number_ajax_search_results']) )
	$num_ajax_results = 0;
else
	$num_ajax_results = $_POST['number_ajax_search_results'];






if( $_POST['question'] != "" ) // prevent blank questions
{
	$question_approved = -1;
	if( $user->guest )
		$question_approved = -1;

	if( $user->guest )
		$asker_user_id = "316002496";
	else
		$asker_user_id = $user->id;

	$query = "INSERT INTO #__questions (
`id` ,
`category_id` ,
`asker_id` ,
`question` ,
`question_alias` ,
`description` ,
`utc_n_ask_date` ,
`best_answer_user` ,
`best_answer_staff` ,
`hits` ,
`number_ajax_results`,
`approved`,
`cpanel_username_or_domain`,
`asker_ip`,
`user_email`
)
VALUES (
NULL, ". $_POST['category_id'] . " , '" . $asker_user_id . "', '" . addslashes($_POST['question']) . "', '$question_alias', '" . addslashes($_POST['details']) . "', '" . strtotime(gmdate('Y-m-d H:i:s')) . "', '0', '0', '0', $num_ajax_results, $question_approved, '" . addslashes($_POST['cpanel_username_or_domain']) . "','" . addslashes($_SERVER['HTTP_X_FORWARDED_FOR']) . "','" . trim(addslashes($_POST['guest_email'])) . "'
);";

	$db->setQuery($query);
	$results = $db->loadObjectList();

	$question_id = $db->insertid();
	$question_url = "http://www.inmotionhosting.com" . pass_question_id_return_question_url($question_id);

	$mail_body_txt = sprintf($new_question_email_message,htmlspecialchars($_POST['question'],ENT_QUOTES),$question_url);
	$mail_body_html = sprintf($new_question_email_message_html,htmlspecialchars($_POST['question'],ENT_QUOTES),$question_url);
	$mail_body_html_template = pass_title_body_return_html_email("A new question has been submitted!",$mail_body_html);
	cs_send_email_with_html("daily_alerts@gadgets.inmotionhosting.com","IMH - A new question has been submitted",$mail_body_txt,$mail_body_html_template);
	insert_new_staff_alert("new question",$question_url);
}

// the user asked a new question, now clear their points
	gf_clear_user_points($asker_user_id);


$today = date("l");

$c_time = mktime();
$open = strtotime('Today 5am');
$close = strtotime('Today 6pm');

if ($c_time > $open && $c_time < $close) { 
if ($today == 'Monday') {
    $email = '7578390062@tmomail.net';
} elseif ($today == 'Tuesday') {
    $email = '9543284790@txt.att.net';
} elseif ($today == 'Wednesday') {
    $email = '7574011528@txt.att.net';
} elseif ($today == 'Thursday') {
    $email = '7574010880@tmomail.net';
} elseif ($today == 'Friday') {
    $email = '9103804631@vtext.com';
} 
} else {
    $email = 'anthonye@inmotionhosting.com';
}

$subject = 'New Question';
$method = $_SERVER['REQUEST_METHOD'];
$message .= 'A new question has come in. ' . "\n";
$message .= 'URL: ' . $question_url . "\n";
if ($method == 'POST') mail($email, $subject, $message);


header( "Location: $question_url" );
die();



?>
