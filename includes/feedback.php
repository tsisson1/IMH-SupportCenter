<?

if ($_POST['tsid'] == "1111")
	die('error');






// ----------------------------------------------------------------------------------------
// insert
// ----------------------------------------------------------------------------------------
if(	isset($_POST['option']) AND
	isset($_POST['view']) AND
	is_numeric($_POST['id']) AND
	isset($_POST['tsid']) AND
	isset( $_POST['ip']) AND
	is_numeric($_POST['feedbackvalue']) AND
	$_POST['dtahryp_task'] == "insert" )
{
	include_once("../configuration.php");
	$cg = new JConfig;
	$con = mysqli_connect("localhost",$cg->user,$cg->password,$cg->db);
	if (mysqli_connect_errno())
	        die('error 201312031314');

	// has this ip with this unique id already selected one? IE are they sitting there clicking yes / no?
	$query = "	SELECT count(`id`)
			FROM `" . $cg->dbprefix . "feedback`
			WHERE	`timestamp_n_id` = '" . addslashes($_POST['tsid']) . "';
	";
	$result = mysqli_query($con,$query);
	while($row = mysqli_fetch_array($result))
	{
        	$count = $row[0];
	}


	if($count == 0)
	{
	        $query = "
INSERT INTO `" . $cg->dbprefix . "feedback` (`id`,`user_ip`,`option`,`view`,`page_id`,`timestamp_n`,`feedback_value`,`timestamp_n_id`,`referer`)
VALUES (NULL,'" . addslashes($_POST['ip']) . "','" . addslashes($_POST['option']) . "','" . addslashes($_POST['view']) . "','" . addslashes($_POST['id']) . "','" . gmmktime() . "','" . addslashes($_POST['feedbackvalue']) . "','" . addslashes($_POST['tsid']) . "','" . addslashes($_POST['fb_referer']) . "');
		";
		// include_once("includes_functions.php");
		// cc_send_mail("bradm@inmotionhosting.com","customer_experience@inmotionhosting.com","Feedback - IMH SC","<pre>$query</pre>");
	}
	else
		$query = "	UPDATE `" . $cg->dbprefix . "feedback`
				SET `feedback_value` = " . addslashes($_POST['feedbackvalue']) . "
				WHERE `timestamp_n_id` = '" . addslashes($_POST['tsid']) . "'
				LIMIT 1;
		";
        mysqli_query($con,$query);
	mysqli_close($con);
	return "success";
}






if(	$_POST['dtahryp_task'] == "update" AND
	isset($_POST['tsid'])
	)
{
	include_once("../configuration.php");
        $cg = new JConfig;
        $con = mysqli_connect("localhost",$cg->user,$cg->password,$cg->db);
        if (mysqli_connect_errno())
                die('error 201312031314');
        $query = "
UPDATE	`" . $cg->dbprefix . "feedback`
SET	`feedback` = '" . addslashes($_POST['feedback']) . "',
	`user_email` = '" . addslashes($_POST['email']) . "',
	`user_name` = '" . addslashes($_POST['name']) . "'
WHERE	`timestamp_n_id` = '" . addslashes($_POST['tsid']) . "'
LIMIT	1;
	";

	// 2014.04.17.0740 - disable email notifications
	/*
	if( $_POST['feedback'] != "" AND $_POST['dtahryp_author'] != "" AND $_POST['email'] != "")
	{
		$email_subject = "Feedback - IMH SC - " . $_POST['dtahryp_author'];
		include_once("includes_functions.php");
                cc_send_mail("bradm@inmotionhosting.com","customer_experience@inmotionhosting.com",$email_subject,"<pre>$query</pre>");
	}
	*/


        mysqli_query($con,$query);
        mysqli_close($con);
        return "success";
}






// ------------------------------------------------------------------------------------------------
// Why was this article not helpful?
// ------------------------------------------------------------------------------------------------
if(     $_POST['dtahryp_task'] == "task_why_not_helpful" AND isset($_POST['tsid']) )
{
	$no_too_difficult = 0;
	$no_bad_instructions = 0;
	$no_incorrect = 0;
	$no_not_helpful = 0;
	if( $_POST['fb_no_too_difficult'] == "true" )
		$no_too_difficult = 1;
	if( $_POST['fb_no_bad_instructions'] == "true" )
		$no_bad_instructions = 1;
	if( $_POST['fb_no_incorrect'] == "true" )
                $no_incorrect = 1;
	if( $_POST['fb_no_not_helpful'] == "true" )
                $no_not_helpful = 1;

	$how_did_you_find_us = 0;
	if( is_numeric($_POST['fb_how_did_you_find_us']) )
		$how_did_you_find_us = $_POST['fb_how_did_you_find_us'];

        include_once("../configuration.php");
        $cg = new JConfig;
        $con = mysqli_connect("localhost",$cg->user,$cg->password,$cg->db);
        if (mysqli_connect_errno())
                die('error 201312031314');
        $query = "
UPDATE `" . $cg->dbprefix . "feedback`
SET	`no_too_difficult` = $no_too_difficult,
	`no_bad_instructions` = $no_bad_instructions,
	`no_incorrect` = $no_incorrect,
	`no_not_helpful` = $no_not_helpful,
	`how_did_you_find_us` = $how_did_you_find_us
WHERE `timestamp_n_id` = '" . addslashes($_POST['tsid']) . "'
LIMIT 1;
        ";


        mysqli_query($con,$query);
        mysqli_close($con);
        return "success";
}






?>
