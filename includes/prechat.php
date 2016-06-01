<?


/*
	2014.04.03 - bradm
	We log data when the user searches, and when they "search again". A problem is that when
	they "search again" and ultimately click chat, the launch chat value of 1 goes to the "search again"
	and not the original search. If the prechat timesout or launches, those values need to go to the parent
	* 13965271151140	= initial search (14 characters in length)
	* 1396527115114001	= search again (16 characters in length)
	* 1396527115114002	= search again
	If we ever need to know if a "search again" timed out or caused a chat, we can use logic
	to figure it out.
*/
if ($_POST['dpv_task'] == "launchChat" OR $_POST['dpv_task'] == "timeout")
	$_POST['dpv_id'] = substr($_POST['dpv_id'],0,14);



if(	$_POST['dpv_task'] == "insert" )
	preChatInsert(0);






if(     $_POST['dpv_task'] == "launchChat" )
{
	// setup some variables ----------------------------------------------------------------------------------------------------------------------------
	$i_timestamp_n_id = addslashes(htmlentities($_POST['dpv_id'],ENT_QUOTES));

	// connect to the database -------------------------------------------------------------------------------------------------------------------------
        include_once("../configuration.php");
        $cg = new JConfig;
        $con = mysqli_connect("localhost",$cg->user,$cg->password,$cg->db);
        if (mysqli_connect_errno())
                die('error 201312041140');

	$i_department = addslashes(htmlentities($_POST['dpv_dep'],ENT_QUOTES));

	// setup and run query -----------------------------------------------------------------------------------------------------------------------------
        $query = "	UPDATE `" . $cg->dbprefix . "prechat`
			SET	`launched_chat` = 1,
				`department` = '$i_department'
			WHERE `timestamp_n_id` = '$i_timestamp_n_id'
			LIMIT 1;
	";
        mysqli_query($con,$query);

        mysqli_close($con);
}






if(     $_POST['dpv_task'] == "clickResult" )
{
        // setup some variables ----------------------------------------------------------------------------------------------------------------------------
        $i_timestamp_n_id = addslashes(htmlentities($_POST['dpv_id'],ENT_QUOTES));
	$i_user_ip = addslashes(htmlentities($_POST['dpv_ip'],ENT_QUOTES));

        // connect to the database -------------------------------------------------------------------------------------------------------------------------
        include_once("../configuration.php");
        $cg = new JConfig;
        $con = mysqli_connect("localhost",$cg->user,$cg->password,$cg->db);
        if (mysqli_connect_errno())
                die('error 201312041140');

	// run a query for tracking purposes
	$query = "	INSERT INTO `" . $cg->dbprefix . "prechat_clicks`
			(`id`,`timestamp_n_id`,`user_ip`,`timestamp`)
			VALUES (NULL,'$i_timestamp_n_id','$i_user_ip',CURRENT_TIMESTAMP);
	";
	 mysqli_query($con,$query);

        // setup and run query -----------------------------------------------------------------------------------------------------------------------------
        $query = "      UPDATE `" . $cg->dbprefix . "prechat`
                        SET `num_clicks` = `num_clicks` + 1
                        WHERE `timestamp_n_id` = '$i_timestamp_n_id'
                        LIMIT 1;
        ";
        mysqli_query($con,$query);

        mysqli_close($con);
}






if(     $_POST['dpv_task'] == "timeout" )
	preChatInsert(1);






function preChatInsert($timeout)
{
	// connect to the database -------------------------------------------------------------------------------------------------------------------------
        include_once("../configuration.php");
        $cg = new JConfig;
        $con = mysqli_connect("localhost",$cg->user,$cg->password,$cg->db);
        if (mysqli_connect_errno())
                die('error 201312041140');

        // clean up the variables --------------------------------------------------------------------------------------------------------------------------
        $i_timestamp_n_id = addslashes(htmlentities($_POST['dpv_id'],ENT_QUOTES));
        $i_timestamp_n = gmmktime();
        $i_user_ip = addslashes(htmlentities($_POST['dpv_ip'],ENT_QUOTES));
        $i_name = addslashes(htmlentities($_POST['dpv_n'],ENT_QUOTES));
        $i_email = addslashes(htmlentities($_POST['dpv_e'],ENT_QUOTES));
        $i_domain = addslashes(htmlentities($_POST['dpv_d'],ENT_QUOTES));
        $i_question = addslashes(htmlentities($_POST['dpv_q'],ENT_QUOTES));
        $i_num_results = addslashes(htmlentities($_POST['dpv_rc'],ENT_QUOTES));
	$i_http_user_agent = addslashes(htmlentities($_SERVER['HTTP_USER_AGENT'],ENT_QUOTES));
	$i_department = addslashes(htmlentities($_POST['dpv_dep'],ENT_QUOTES));
	$i_html_results = addslashes($_POST['dpv_rhtml']);

        // setup and run query -----------------------------------------------------------------------------------------------------------------------------
        $query = " INSERT INTO `" . $cg->dbprefix . "prechat` (`id`,`timestamp_n_id`,`timestamp_n`,`user_ip`,`name`,`email`,`domain`,`question`,`launched_chat`,`num_results`,`num_clicks`,`timeout`,`http_user_agent`,`department`,`html_results`) VALUES (NULL,'$i_timestamp_n_id','$i_timestamp_n','$i_user_ip','$i_name','$i_email','$i_domain','$i_question',0,$i_num_results,0,$timeout,'$i_http_user_agent','$i_department','$i_html_results');";
        // echo $query;
        mysqli_query($con,$query);

        mysqli_close($con);
}






if( $_POST['dpv_task'] == "log_error" )
{
	ob_start();
		echo "POST DATA\n\n";
		print_r($_POST);
		echo "GET DATA\n\n";
		print_r($_GET);
		echo "SERVER DATA\n\n";
		print_r($_SERVER);
	$output = ob_get_clean();

	include_once("includes_functions.php");
	cc_send_mail("customer_experience@inmotionhosting.com","bradm@inmotionhosting.com","BoldChat PreChat error",$output);
}






?>
