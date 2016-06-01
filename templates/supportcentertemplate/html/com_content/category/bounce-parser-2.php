<?






$this->document->setTitle("Bounce Back Parser | InMotion Hosting");





// ---------------------------------------------------------------
// just some basic logging to see if anyone is using the tool
// ---------------------------------------------------------------
if( $_POST['bounce'] AND $_SERVER['HTTP_X_FORWARDED_FOR'] != "216.54.31.86" )
{
	/*
	cs_send_email(
                "customer_experience@inmotionhosting.com",
                "BBParser - IS ANYONE USING IT?",
                "USER IP: " . $_SERVER['HTTP_X_FORWARDED_FOR'] . "\n\nBOUNCE BACK:\n" . $_POST['bounce']
        );
	*/
}






// ---------------------------------------------------------------
// are we sending an email to systems?
// ---------------------------------------------------------------
if( $_POST['sctask'] == "esystems" )
{
	$email_message = "
REPLY TO:" . $_POST['reply_to_this_user'] . "\n
MAIN DOMAIN OR USERNAME: " . $_POST['main_domain_or_username'] . "\n
BOUNCE BACK MESSAGE USER SUBMITTED:\n
" . $_POST['pasted_bounce'] . "
	";

	$email_subject = $_POST['esubject'];

	// $from = array("customer_experience@inmotionhosting.com", "InMotion Hosting Customer Community Team");
	$from = $_POST['reply_to_this_user'];

        # Invoke JMail Class
        $mailer = JFactory::getMailer();

        # Set sender array so that my name will show up neatly in your inbox
        $mailer->setSender($from);

        # Add a recipient -- this can be a single address (string) or an array of addresses
        $mailer->addRecipient("system-admin@inmotionhosting.com");

        $mailer->setSubject($email_subject);
        $mailer->setBody($email_message);

	# Send once you have set all of your options
	$mailer->send();

	JFactory::getApplication()->enqueueMessage('Thank you! Our System Administration team will touch base with you shortly regarding this bounce back message.', 'success');

	echo "
                <script type=\"text/javascript\">
                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'community support', 'bbparser - notification emailed to systems','" . addslashes($email_subject) . "']);
                </script>
        ";
}





// ---------------------------------------------------------------
// LIKE THIS PAGE - social media
// ---------------------------------------------------------------
$url_of_this_page = $this->document->base;
$like_facebook_html = "<iframe src='//www.facebook.com/plugins/like.php?href=$url_of_this_page&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=209145459223160' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:100px; height:21px;' allowTransparency='true'></iframe>";
$like_google_html = "
<div class='g-plusone' data-size='medium' data-href='$url_of_this_page'></div>
<script type='text/javascript'>
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>";
$like_twitter_html = "<a href='https://twitter.com/share' class='twitter-share-button' data-via='inmotionhosting'>Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>";






if( $_POST['bbp_feedback'] != "" )
{
	cs_send_email(
		"customer_experience@inmotionhosting.com",
		"BBParser Feedback",
		"USER IP: " . $_SERVER['HTTP_X_FORWARDED_FOR'] . "\n\nUSER EMAIL: " . $_POST['email'] . "\n\n" . $_POST['bbp_feedback'] . "\n\nBOUNCE BACK:\n" . $_POST['bbp_bounceback']
	);
	JFactory::getApplication()->enqueueMessage('Thank you for providing feedback!', 'success');
}






echo "<div class='item-page'>"; // START THE ENTIRE PAGE





$bounce_to_display = htmlspecialchars($_POST['bounce']);
$lower_bounce = strtolower($_POST['bounce']);

// FIXING THIS - forwarded emails
$forwards_to_fix = array("> ",">> ");
foreach($forwards_to_fix as $ftf_k => $fof_v)
{
	if( substr_count($lower_bounce,$fof_v) > 5 )
	{
		$lower_bounce = str_replace("\n" . $fof_v,"\n",$lower_bounce);
		$lower_bounce = str_replace("\r" . $fof_v,"\r",$lower_bounce);
	}
}
foreach($forwards_to_fix as $ftf_k => $fof_v)
{
	if( substr($lower_bounce,0,strlen($fof_v)) == $fof_v)
		$lower_bounce = substr_replace($lower_bounce,"",0,strlen($fof_v));
}
$lower_bounce = str_replace("\r\n>\r\n","\r\n\r\n",$lower_bounce);






// step 1
print_bounce_submission_form($lower_bounce);

// step 2
if( $_POST['bounce'] )
{
	echo "
		<script type=\"text/javascript\">
			_gaq.push(['_setAccount', 'UA-1501988-1']);
			_gaq.push(['_trackEvent', 'community support', 'bbparser - bounce back submitted for script processing']);
		</script>
	";

	switch(return_type_of_bounce($lower_bounce))
	{
		case "smtp error from remote mail server after end of data":
			parse_smtp_error_from_remote_mail_server_after_end_of_data($lower_bounce);
			break;
		case "smtp error from remote mail server after rcpt to":
			parse_smtp_error_from_remote_mail_server_after_rcpt_to($lower_bounce);
                        break;
		case "smtp error from remote mail server after initial connection":
			parse_smtp_error_from_remote_mail_server_after_initial_connection($lower_bounce);
                        break;
		case "smtp error from remote mail server after mail from":
                        parse_smtp_error_from_remote_mail_server_after_mail_from($lower_bounce);
                        break;
		case "the following addresses failed":
			parse_the_following_addresses_failed($lower_bounce);
                        break;
		default:

			// create error message if "this is a copy" is not included in the user's bounce
			if( substr_count($_POST['bounce'],"------ This is a copy of the message, including all the headers. ------") < 1 )
				$why_we_cant_read_your_bouce = "
					<li class='alert alert-error'>
						The bounce back message your supplied is missing the following text:
						<span class='white_box' style='padding:2px; display:block;'>------ This is a copy of the message, including all the headers. ------</span>
						Please ensure you are submitting all the information we need as per the <a href='#examples'>example above</a>.
					</li>
				";
			else
				$why_we_cant_read_your_bouce = "
					<li>Review <a href='#examples'>the examples provided</a> and ensure you are submitting the required details.</li>
				";

			echo "	<div>
					<a name='step-2'></a>
					<h2>Unfortunately we were unable to read your bounce back message.</h2>
					<ul>
						$why_we_cant_read_your_bouce
					</ul>
				</div>
				<script type=\"text/javascript\">
                                	_gaq.push(['_setAccount', 'UA-1501988-1']);
	                                _gaq.push(['_trackEvent', 'community support', 'bbparser - not able to parse']);
        	                </script>
			";
			// print_feedback_form_bbp();
			// log to the database
			/*
		        if( does_item_exist_in_database("log_bounce_backs","pasted_bounce",addslashes($_POST['bounce'])) == false )
		        {
                		$db = JFactory::getDbo();
		                $query = "      INSERT INTO #__log_bounce_backs
                		                (`id`,`pasted_bounce`,`utc_n_timestamp`,`resolution`)
                                		VALUES (NULL, '" . addslashes($_POST['bounce']) . "', " . strtotime(gmdate('Y-m-d H:i:s')) . ", -1)
		                ";
                		$db->setQuery($query);
		                $result = $db->query();
		        }
			*/
			break;
	}
}






// print the form to allow the user to post a bounce
function print_bounce_submission_form($lower_bounce)
{
	echo "
		<div class='page-header'>
			<h1>Bounce Back Parser</h1>
			Written by <a href='https://plus.google.com/102670474114655224886'>Brad Markle</a>				
		</div>

		<h2>Introduction</h2>

		<iframe width='390' height='250' src='http://www.youtube.com/embed/XhAGAWylDqk?rel=0' frameborder='0' allowfullscreen style='float:right; margin:0px 0px 15px 15px;'></iframe>

		<p>Wondering <a href='/support/email/email-troubleshooting/email-bounce-bounceback-error'>why your email is being bounced back</a> and returned to you? Usually it is because of <a href='/support/tools/blacklist-check'>a server appearing in a blacklist</a>, a misspelled email address, or a <a href='/support/email/email-troubleshooting/email-error-450'>temporary greylisting issue</a>.</p>

		<p>Many times understanding the <a href='http://www.ietf.org/rfc/rfc1893.txt' target='_blank'>error numbers listed in these bounce back messages</a> is difficult for the untrained eye. To help in troubleshooting bounce back messages, we've created the tool found below, our <em>bounce back parser</em>.</p>

		<form method='post' action='#step-2' style='clear:both;'>

			 <a name='examples'></a>
			<h2>Step 1: Paste your bounce back message below</h2>

			<p>When you paste in your bounce back message:</p>

			<ol>
				<li>Start with the text that says <span class='white_box' style='padding:2px;'>From:</span></li>
				<li>End end with the line that reads <span class='white_box' style='padding:2px;'>------ This is a copy of the message, including all the headers. ------</span></li>
			</ol>

			<p>Refer to the screenshot and text below for an example.</p>

			<table class='article_table'>
				<tr>
					<td valign='top'>
						<ol class='article_list'>
							<li>
								<a class='std_ss' href='/support/images/stories/bounce-reader/forward-the-email-to-yourself.gif'>
        	                                                        <img src='/support/images/stories/bounce-reader/forward-the-email-to-yourself.gif' style='float:right; width:100px; margin:0px 0px 0px 10px;' />
	                                                        </a>
								Forward the bounce back message to your own email address.
							</li>
							<li style='clear:both;'>
								<a class='std_ss' href='/support/images/stories/bounce-reader/highlight-and-copy-the-headers.gif'>
                                                                        <img src='/support/images/stories/bounce-reader/highlight-and-copy-the-headers.gif' style='float:right; width:100px; margin:8px 0px 0px 10px;' />
                                                                </a>
								When you receive this forwarded copy of the bounce back message, copy the headers as described above (and highlighted in the screenshot to the right)
							</li>
							<li>
								Paste what you copied into the box to the right, and then click Submit.
							</li>
						</ol>
					</td>
					<td valign='top'>
						<textarea name='bounce' id='bounce' style='width:300px; height:296px;' onKeyUp='check_for_this_is_a_copy();'>$lower_bounce</textarea>
					</td>
				</tr>
			</table>

			<div class='alert alert-error' id='bounce_status' name='bounce_status' style='margin:10px 0px; display:none;'></div>

			<div>
				<input class='btn btn-primary sc_rc' type='submit' value='Submit' />
			</div>

		</form>






		<script type='text/javascript'>
			function check_for_this_is_a_copy()
			{
				usersbb = document.getElementById('bounce').value;
				usersbb = usersbb.toLowerCase();

				if( usersbb.indexOf('------ this is a copy of the message, including all the headers. ------') !== -1 )
				{
					jQuery('#bounce_status').slideUp('slow');
				}
				else
				{
					document.getElementById('bounce_status').innerHTML = \"<strong>Warning!</strong> Please make sure the bounce back message you are pasting includes the text:<br /><span class='white_box' style='padding:2px;'>------ This is a copy of the message, including all the headers. ------</span><br />Refer to <strong>Step 2</strong> above for what you need to include.\";
					jQuery('#bounce_status').slideDown('slow');
				}
			}
		</script>






	";
}






function return_type_of_bounce($lower_bounce)
{
	$lower_bounce = remove_all_new_lines_and_double_spaces($lower_bounce);

	if(
		(
			substr_count($lower_bounce,"smtp error from remote mail server after end of data") > 0 OR
			substr_count($lower_bounce,"smtp error from remote mail server after data") > 0
		) AND
		substr_count($lower_bounce,"------ this is a copy of the message, including all the headers. ------") > 0
	)
		return "smtp error from remote mail server after end of data";

	if(     substr_count($lower_bounce,"smtp error from remote mail server after rcpt to") > 0 AND
                substr_count($lower_bounce,"------ this is a copy of the message, including all the headers. ------") > 0
        )
                return "smtp error from remote mail server after rcpt to";
	
	if(     substr_count($lower_bounce,"smtp error from remote mail server after initial connection") > 0 AND
                substr_count($lower_bounce,"------ this is a copy of the message, including all the headers. ------") > 0
        )
                return "smtp error from remote mail server after initial connection";

	if(     substr_count($lower_bounce,"smtp error from remote mail server after mail from") > 0 AND
                substr_count($lower_bounce,"------ this is a copy of the message, including all the headers. ------") > 0
        )
                return "smtp error from remote mail server after mail from";
	if(     substr_count($lower_bounce,"the following address(es) failed") > 0 AND
                substr_count($lower_bounce,"------ this is a copy of the message, including all the headers. ------") > 0
        )
                return "the following addresses failed";
}






function parse_smtp_error_from_remote_mail_server_after_end_of_data($lower_bounce)
{
	$bounce_guts = return_bounce_guts($lower_bounce);

        $bounce_details = array_of_details_from_smtp_error_from_remote_mail_server($bounce_guts);
	$bounce_details['who_delivered_the_bounce'] = return_server_name_deliverying_the_bounce($lower_bounce);
	$bounce_details['original_sender'] = return_who_sent_original_message($lower_bounce);
	$bounce_details['original_recipient'] = return_who_original_message_was_sent_to($lower_bounce);
	$bounce_details['domain_of_original_recipient'] = return_original_recipient_domain($bounce_details['original_recipient']);

        print_generic_why_bounce($bounce_details);
	print_error_number_information($bounce_details);
	print_solution($bounce_details);
}






function parse_smtp_error_from_remote_mail_server_after_rcpt_to($lower_bounce)
{
	$bounce_guts = return_bounce_guts($lower_bounce);

	$bounce_details = array_of_details_from_smtp_error_from_remote_mail_server($bounce_guts);
	$bounce_details['who_delivered_the_bounce'] = return_server_name_deliverying_the_bounce($lower_bounce);
	$bounce_details['original_sender'] = return_who_sent_original_message($lower_bounce);
	$bounce_details['original_recipient'] = return_who_original_message_was_sent_to($lower_bounce);
	$bounce_details['domain_of_original_recipient'] = return_original_recipient_domain($bounce_details['original_recipient']);

	print_generic_why_bounce($bounce_details);
	print_error_number_information($bounce_details);
	print_solution($bounce_details);
}






function parse_smtp_error_from_remote_mail_server_after_initial_connection($lower_bounce)
{
        $bounce_guts = return_bounce_guts($lower_bounce);

        $bounce_details = array_of_details_from_smtp_error_from_remote_mail_server($bounce_guts);
        $bounce_details['who_delivered_the_bounce'] = return_server_name_deliverying_the_bounce($lower_bounce);
        $bounce_details['original_sender'] = return_who_sent_original_message($lower_bounce);
        $bounce_details['original_recipient'] = return_who_original_message_was_sent_to($lower_bounce);
	$bounce_details['domain_of_original_recipient'] = return_original_recipient_domain($bounce_details['original_recipient']);

        print_generic_why_bounce($bounce_details);
        print_error_number_information($bounce_details);
	print_solution($bounce_details);
}






function parse_smtp_error_from_remote_mail_server_after_mail_from($lower_bounce)
{
        $bounce_guts = return_bounce_guts($lower_bounce);

        $bounce_details = array_of_details_from_smtp_error_from_remote_mail_server($bounce_guts);
        $bounce_details['who_delivered_the_bounce'] = return_server_name_deliverying_the_bounce($lower_bounce);
        $bounce_details['original_sender'] = return_who_sent_original_message($lower_bounce);
        $bounce_details['original_recipient'] = return_who_original_message_was_sent_to($lower_bounce);
	$bounce_details['domain_of_original_recipient'] = return_original_recipient_domain($bounce_details['original_recipient']);

        print_generic_why_bounce($bounce_details);
        print_error_number_information($bounce_details);
	print_solution($bounce_details);
}






function parse_the_following_addresses_failed($lower_bounce)
{
	$bounce_guts = return_bounce_guts($lower_bounce);

        $bounce_details = array_of_details_from_smtp_error_from_remote_mail_server($bounce_guts);
        $bounce_details['who_delivered_the_bounce'] = return_server_name_deliverying_the_bounce($lower_bounce);
        $bounce_details['original_sender'] = return_who_sent_original_message($lower_bounce);
        $bounce_details['original_recipient'] = return_who_original_message_was_sent_to($lower_bounce);
	$bounce_details['domain_of_original_recipient'] = return_original_recipient_domain($bounce_details['original_recipient']);

	if($bounce_details['host_complaining'] == "")
		$bounce_details['host_complaining'] = $bounce_details['who_delivered_the_bounce'];

	$bounce_details['error_number_phrase'] = the_following_addresses_failed_error_message($bounce_guts);

        print_generic_why_bounce($bounce_details);
        print_error_number_information($bounce_details);
        print_solution($bounce_details);
}






function return_bounce_guts($lower_bounce)
{
        $location_of_this_is_a_copy = strpos($lower_bounce,"------ this is a copy of the message, including all the headers. ------");
        $location_of_smtp_error_from = strpos($lower_bounce,"smtp error from");
        $bounce_guts = substr($lower_bounce,$location_of_smtp_error_from,($location_of_this_is_a_copy - $location_of_smtp_error_from));
        // remove new lines
        $bounce_guts = str_replace("\n"," ",$bounce_guts);
        $bounce_guts = str_replace("\r"," ",$bounce_guts);
        // remove extra spaces
        while(substr_count($bounce_guts,"  ") > 0)
                $bounce_guts = str_replace("  "," ",$bounce_guts);
        // remove space at end
        $bounce_guts = trim($bounce_guts);
	return $bounce_guts;
}






function array_of_details_from_smtp_error_from_remote_mail_server($bounce_guts)
{
	// ------------------------------------------------------------------------------
        // find the error number
        // ------------------------------------------------------------------------------
        $x = 4;
        while($error_number_found != true AND $x <= 5)
        {
                if( substr_count($bounce_guts,": $x") > 0)
                {
                        $error_number_found = true;
                        $error_number_location = strpos($bounce_guts,": $x");
                        $error_number_phrase = substr($bounce_guts,$error_number_location + 2);
                        $text_before_error_number_phrase = substr($bounce_guts,0,$error_number_location);
                }
                $x++;
        }






        // ------------------------------------------------------------------------------
        // what host is saying the error number phrase
        // ------------------------------------------------------------------------------
        // find last occorence of " host ";
        $location_of_text_host = strrpos($text_before_error_number_phrase," host ");
        $host_complaining = substr($text_before_error_number_phrase, ($location_of_text_host + 6) );






	// ------------------------------------------------------------------------------
	// get the error numbers, as in 550 5.7.1
	// 550 5.7.1 <catmar2@valisland.com>... h:m12 [173.205.127.246] connection refused due to abuse
	// ------------------------------------------------------------------------------

	$tmp_error_number_phrase = $error_number_phrase;

	// FIXING THIS - 550-5.1.1 the email account that you tried to (notice the - between 550 and 5.1.1
	if( substr($tmp_error_number_phrase,3,1) == "-" )
		$tmp_error_number_phrase = substr_replace($tmp_error_number_phrase," ",3,1);

	// FIXING THIS - 550 5.7.1<ann_m@qualitythermoforming.com> (notice no space after 5.7.1 and <ann_m
	$eerp_clean_up_array = array("<");
	foreach($eerp_clean_up_array as $eerpcua_k => $eerpcua_v)
		$tmp_error_number_phrase = str_replace($eerpcua_v," ",$tmp_error_number_phrase);
		

	$exploded_error_number_phrase = explode(" ",$tmp_error_number_phrase);

	// FIXING THIS - 554-mail1.bsci.com 554 your access to this mail system has been (notice the dash after the first 554)
	if( substr($exploded_error_number_phrase[0],3,1) == "-" AND is_numeric(substr($exploded_error_number_phrase[0],0,3)) )
		$exploded_error_number_phrase[0] = substr($exploded_error_number_phrase[0],0,3);

	if( is_numeric($exploded_error_number_phrase[0]) )
		$details['main_error_number'] = $exploded_error_number_phrase[0];

	// FIXING THIS - 550 #5.1.0 address rejected. (notice the # in front of 5.1.0)
	if( substr($exploded_error_number_phrase[1],0,1) == "#" )
		$exploded_error_number_phrase[1] = str_replace("#","",$exploded_error_number_phrase[1]);

	if( substr_count($exploded_error_number_phrase[1],".") == 2 AND strlen($exploded_error_number_phrase[1]) == 5 )
		$details['sub_error_number'] = $exploded_error_number_phrase[1];






	// ------------------------------------------------------------------------------
	// determine, if available, the ip of the server blacklisted
	// ------------------------------------------------------------------------------

	// FIXING THIS - 521-173.247.244.116 blocked by sbc:black... (notice the ip blocked is not isolated)
	$tmp_error_number_phrase = str_replace("-"," ",$error_number_phrase);

	$exploded_error_number_phrase = explode(" ",$tmp_error_number_phrase);
	$search_for_ip_blocked_count = 0;
	$remove_array = array("<",">","[","]",")","(");
	while(	$found_blocked_ip != true AND
		$search_for_ip_blocked_count != count($exploded_error_number_phrase)
	)
	{
		$check_this = $exploded_error_number_phrase[$search_for_ip_blocked_count];

		foreach($remove_array as $ra_k => $ra_value)
			$check_this = str_replace($ra_value,"",$check_this);

		// FIXING THIS - with ip address, 74.124.203.159). if you believe (notice the ")" and "." and the end of the ip)
		$check_this = trim($check_this,".");

		// FIXING THIS - http://bbl.barracudacentral.com/q.cgi?ip=70.39.249.184 (notice the ip is at the end in the url)
		if( substr_count($check_this,"=") == 1 )
		{
			$exploded_check_this = explode("=",$check_this);
			$check_this = $exploded_check_this[1];
		}

		if( is_this_an_ip($check_this) == true )
		{
			$details['ip_that_is_blocked'] = $check_this;
			$found_blocked_ip = true;
		}

		$search_for_ip_blocked_count++;
	}






	// ------------------------------------------------------------------------------
	// determine who's doing the block, like spamhaus
	// ------------------------------------------------------------------------------
	$possible_blockers = array("mailspike.org","blocklist.zap","delist@messaging.microsoft.com","trendmicro.com","sbc:blacklist.mailrelay.att.net","mailhostingservice.com","senderbase.org","us.army.mil","barracudacentral.com","verizon.net/whitelist","att.net/blocks","trend micro","comcast.net","info.aol.com/errors");
	foreach($possible_blockers as $pb_k => $pb_v)
	{
		if( substr_count($error_number_phrase,$pb_v) > 0 )
			$details['blocking_service'] = $pb_v;
	}




	$details['host_complaining'] = $host_complaining;
	$details['error_number_phrase'] = $error_number_phrase;

	return $details;
}






function print_generic_why_bounce($bounce_details)
{
	echo "
		<a name='step-2'></a>
		<h2 style='margin-bottom:15px;'>Step 2: Review the reason for the delivery failure</h2>

		<h3 style='font-size:20px;padding-bottom:0px;'>After reviewing your bounce back, we determined that:</h3>
		<div style='margin-bottom:15px;'>
                        <div style='float:left; width:300px;'>
                                <h3 style='color:#c52228; font-size:18px;'>This user:</h3>
                                <div class='white_box'>
                                        " . htmlspecialchars($bounce_details['original_sender']) . "
                                </div>
                        </div>

                        <div style='float:right; width:300px;'>
                                <h3 style='color:#c52228; font-size:18px;'>... tried to send an email to:</h3>
                                <div class='white_box' style='word-wrap:break-word;'>
                                        " . htmlspecialchars($bounce_details['original_recipient']) . "
                                </div>
                        </div>

                        <div style='clear:both;'></div>

                </div>

                <h3 style='font-size:20px; padding-bottom:0px;'>This email was bounced because:</h3>
                <div style='margin-bottom:15px;'>
                        <div style='float:left; width:300px;'>
                                <h3 style='color:#c52228; font-size:18px;'>This Server:</h3>
                                <div class='white_box'>
                                        " . htmlspecialchars($bounce_details['host_complaining']) . "
                                </div>
                        </div>

                        <div style='float:right; width:300px;'>
                                <h3 style='color:#c52228;font-size:18px;'>... said this:</h3>
                                <div class='white_box' style='word-wrap:break-word;'>
                                        " . htmlspecialchars($bounce_details['error_number_phrase']) . "
                                </div>
                        </div>

                        <div style='clear:both;'></div>

                </div>
        ";

	// echo "<pre>"; print_r($bounce_details); echo "</pre>";
}





function return_server_name_deliverying_the_bounce($lower_bounce)
{
	$lower_bounce_exploded = explode("\n",$lower_bounce);

	foreach($lower_bounce_exploded as $line_number => $text)
	{
		// FIXING THIS - if they paste the data, and there is a space in front of " from"
		$text = trim($text);

		if( substr($text,0,5) == "from:" || $last_line_was_from == 1 )
		{
			// return all the including and after "@"
			$server_name = strstr($text,"@");

			$remove_characters = array("@",">","]");
			foreach($remove_characters as $rc_key => $remove_me)
				$server_name = str_replace($remove_me,"",$server_name);

			if( $server_name != "" )
				return trim($server_name);
			else
				$last_line_was_from++;
		}
	}
}






function return_who_sent_original_message($lower_bounce)
{
	$lower_bounce = str_replace("\r","\n",$lower_bounce);
        $lower_bounce_exploded = explode("\n",$lower_bounce);

        foreach($lower_bounce_exploded as $line_number => $text)
        {
                if( substr($text,0,3) == "to:" )
                {
			$original_sender = str_replace("to:","",$text);
			
			// FIXING THIS - to: melinda rea-holloway <melinda@ethnographic-research.com> (notice it has more than just the email address)
			if( substr_count($original_sender," ") > 0 )
			{
				$exploded_original_sender = explode(" ",$original_sender);
				foreach($exploded_original_sender  as $eos_k => $eos_v)
					if( substr_count($eos_v,"@") == 1)
						$original_sender = $eos_v;
			}

                        $remove_characters = array(">","<","]"," ");
                        foreach($remove_characters as $rc_key => $remove_me)
                                $original_sender = str_replace($remove_me,"",$original_sender);

			if($original_sender != "" )
	                        return $original_sender;
                }
        }

	return "** Error **";
}






function return_who_original_message_was_sent_to($lower_bounce)
{
        $lower_bounce_exploded = explode("\n",$lower_bounce);

        foreach($lower_bounce_exploded as $line_number => $text)
        {
		$text = trim($text);

		// FIXING THIS - "captlarryntisi@aol.com <mailto:captlarryntisi@aol.com>" (this is what we want, but it has the extra mailto stuff in there)
		if( substr_count($text," ") == 1 AND substr_count($text,"mailto") == 1)
		{
			$exploded_text = explode(" ",$text);

			$text = $exploded_text[0];
			if(substr_count($text,"mailto") > 0)
				$text = $exploded_text[1];
		}

		if(	(substr_count($text," ") == 0) AND
			$text != "" AND
			(substr_count($text,"@") > 0) AND
			substr_count($text,"[") < 1 AND
			substr_count($text,"<") < 1 AND
			substr_count($text,":") < 1
		)
			return $text;
        }
}






function remove_all_new_lines_and_double_spaces($string)
{
	$string = str_replace("\n"," ",$string);
        $string = str_replace("\r"," ",$string);
        while( substr_count($string,"  ") > 0 )
                $string = str_replace("  "," ",$string);
	return $string;
}






function  print_error_number_information($bounce_details)
{
	// echo "<pre>"; print_r($bounce_details); echo "</pre>";

	if( is_numeric($bounce_details['main_error_number']) )
	{
		echo "
			<h3 style='font-size:20px;padding-bottom:0px;'>Technically, what happened?</h3>

			<p>The email server involved, <em>" . $bounce_details['host_complaining'] . "</em>, returned the following error number:<br />
			" . $bounce_details['main_error_number'] . " " . $bounce_details['sub_error_number'] . "</p>

			<p>According to <a href='http://www.ietf.org/rfc/rfc1893.txt' target='_blank'>rfc1893</a>, this means:</p>
		";

		print_table_of_error_code_data($bounce_details);
	}
}






function print_table_of_error_code_data($bounce_details)
{
	// log in analytics
	echo "
		<script type=\"text/javascript\">
			_gaq.push(['_setAccount', 'UA-1501988-1']);
			_gaq.push(['_trackEvent', 'community support', 'bbparser - main error', '" . $bounce_details['main_error_number'] . "']);
		</script>
	";
	$sub_error = "null";
	if( $bounce_details['sub_error_number'] )
		$sub_error = $bounce_details['sub_error_number'];
	echo "
                <script type=\"text/javascript\">
                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'community support', 'bbparser - sub error', '$sub_error']);
                </script>
        ";
	// END: log in analytics



	// main error code
	$first_number = substr($bounce_details['main_error_number'],0,1);
	switch($first_number)
	{
		case "2":
			$main_first_number_tech_details = "<strong>Success</strong><br />Success specifies that the DSN is reporting a positive delivery action.  Detail sub-codes may provide notification of transformations required for delivery.";
		case "4":
			$main_first_number_tech_details = "<strong>Persistent Transient Failure</strong><br />A persistent transient failure is one in which the message as sent is valid, but some temporary event prevents the successful sending of the message.  Sending in the future may be successful.";
			break;
		case "5":
			$main_first_number_tech_details = "<strong>Permanent Failure</strong><br />A permanent failure is one which is not likely to be resolved by resending the message in the current form.  Some change to the message or the destination must be made for successful delivery.";
			break;
		default:
			$main_first_number_tech_details = "<span style='color:red;'><strong>Error</strong><br />This error code is not defined in <a href='http://www.ietf.org/rfc/rfc1893.txt' target='_blank'>rfc1893</a>.";
			break;
	}

	// sub error code
	if( $bounce_details['sub_error_number'] )
	{
		$two_digit_code = substr($bounce_details['sub_error_number'],2,3);
		switch($two_digit_code)
		{
			case "0.0":
				$tdctd = "<strong>Other undefined Status</strong><br />Other undefined status is the only undefined error code. It should be used for all errors for which only the class of the error is known.";
				break;
			case "1.0":
				$tdctd = "<strong>Other address status</strong><br />Something about the address specified in the message caused this DSN.";
				break;
			case "1.1":
				$tdctd = "<strong>Bad destination mailbox address</strong><br />The mailbox specified in the address does not exist.  For Internet mail names, this means the address portion to the left of the \"@\" sign is invalid.  This code is only useful for permanent failures.";
				break;
			case "1.2":
				$tdctd = "<strong>Bad destination system address</strong><br />The destination system specified in the address does not exist or is incapable of accepting mail.  For Internet mail names, this means the address portion to the right of the \"@\" is invalid for mail.  This codes is only useful for permanent failures.";
				break;
			case "1.3":
				$tdctd = "<strong>Bad destination mailbox address syntax</strong><br />The destination address was syntactically invalid. This can apply to any field in the address.  This code is only useful for permanent failures.";
				break;
			case "1.4":
				$tdctd = "<strong>Destination mailbox address ambiguous</strong><br />The mailbox address as specified matches one or more recipients on the destination system.  This may result if a heuristic address mapping algorithm is used to map the specified address to a local mailbox name.";
				break;
			case "1.5":
				$tdctd = "<strong>Destination address valid</strong><br />This mailbox address as specified was valid.  This status code should be used for positive delivery reports.";
				break;
			case "1.6":
				$tdctd = "<strong>Destination mailbox has moved, No forwarding address</strong><br />The mailbox address provided was at one time valid, but mail is no longer being accepted for that address.  This code is only useful for permanent failures.";
				break;
			case "1.7":
				$tdctd = "<strong>Bad sender's mailbox address syntax</strong><br />The sender\'s address was syntactically invalid.  This can apply to any field in the address.";
				break;
			case "1.8":
				$tdctd = "<strong>Bad sender\'s system address</strong><br />The sender\'s system specified in the address does not exist or is incapable of accepting return mail.  For domain names, this means the address portion to the right of the \"@\" is invalid for mail.";
				break;
			case "2.0":
				$tdctd = "<strong>Other or undefined mailbox status</strong><br />The mailbox exists, but something about the destination mailbox has caused the sending of this DSN.";
				break;
			case "2.1":
				$tdctd = "<strong>Mailbox disabled, not accepting messages</strong><br />The mailbox exists, but is not accepting messages.  This may be a permanent error if the mailbox will never be re-enabled or a transient error if the mailbox is only temporarily disabled.";
				break;
			case "2.2":
				$tdctd = "<strong>Mailbox full</strong><br />The mailbox is full because the user has exceeded a per-mailbox administrative quota or physical capacity.  The general semantics implies that the recipient can delete messages to make more space available.  This code should be used as a persistent transient failure.";
				break;
			case "2.3":
				$tdctd = "<strong>Message length exceeds administrative limit</strong><br />A per-mailbox administrative message length limit has been exceeded.  This status code should be used when the per-mailbox message length limit is less than the general system limit.  This code should be used as a permanent failure.";
				break;
			case "2.4":
				$tdctd = "<strong>Mailing list expansion problem</strong><br />The mailbox is a mailing list address and the mailing list was unable to be expanded.  This code may represent a permanent failure or a persistent transient failure.";
				break;
			case "3.0":
				$tdctd = "<strong>Other or undefined mail system status</strong><br />The destination system exists and normally accepts mail, but something about the system has caused the generation of this DSN.";
				break;
			case "3.1":
				$tdctd = "<strong>Mail system full</strong><br />Mail system storage has been exceeded.  The general semantics imply that the individual recipient may not be able to delete material to make room for additional messages.  This is useful only as a persistent transient error.";
				break;
			case "3.2":
				$tdctd = "<strong>System not accepting network messages</strong><br />The host on which the mailbox is resident is not accepting messages.  Examples of such conditions include an immanent shutdown, excessive load, or system maintenance.  This is useful for both permanent and permanent transient errors.";
				break;
			case "3.3":
				$tdctd = "<strong>System not capable of selected features</strong><br />Selected features specified for the message are not supported by the destination system.  This can occur in gateways when features from one domain cannot be mapped onto the supported feature in another.";
				break;
			case "3.4":
				$tdctd = "<strong>Message too big for system</strong><br />The message is larger than per-message size limit.  This limit may either be for physical or administrative reasons. This is useful only as a permanent error.";
				break;
			case "3.5":
				$tdctd = "<strong>System incorrectly configured</strong><br />The system is not configured in a manner which will permit it to accept this message.";
				break;
			case "4.0":
				$tdctd = "<strong>Other or undefined network or routing status</strong><br />Something went wrong with the networking, but it is not clear what the problem is, or the problem cannot be well expressed with any of the other provided detail codes.";
				break;
			case "4.1":
				$tdctd = "<strong>No answer from host</strong><br />The outbound connection attempt was not answered, either because the remote system was busy, or otherwise unable to take a call.  This is useful only as a persistent transient error.";
				break;
			case "4.2":
				$tdctd = "<strong>Bad connection</strong><br />The outbound connection was established, but was otherwise unable to complete the message transaction, either because of time-out, or inadequate connection quality. This is useful only as a persistent transient error.";
				break;
			case "4.3":
				$tdctd = "<strong>Directory server failure</strong><br />The network system was unable to forward the message, because a directory server was unavailable.  This is useful only as a persistent transient error. The inability to connect to an Internet DNS server is one example of the directory server failure error.";
				break;
			case "4.4":
				$tdctd = "<strong>Unable to route</strong><br />The mail system was unable to determine the next hop for the message because the necessary routing information was unavailable from the directory server. This is useful for both permanent and persistent transient errors. A DNS lookup returning only an SOA (Start of Administration) record for a domain name is one example of the unable to route error.";
				break;
			case "4.5":
				$tdctd = "<strong>Mail system congestion</strong><br />The mail system was unable to deliver the message because the mail system was congested. This is useful only as a persistent transient error.";
				break;
			case "4.6":
				$tdctd = "<strong>Routing loop detected</strong><br />A routing loop caused the message to be forwarded too many times, either because of incorrect routing tables or a user forwarding loop. This is useful only as a persistent transient error.";
				break;
			case "4.7":
				$tdctd = "<strong>Delivery time expired</strong><br />The message was considered too old by the rejecting system, either because it remained on that host too long or because the time-to-live value specified by the sender of the message was exceeded. If possible, the code for the actual problem found when delivery was attempted should be returned rather than this code.  This is useful only as a persistent transient error.";
				break;
			case "5.0":
				$tdctd = "<strong>Other or undefined protocol status</strong><br />Something was wrong with the protocol necessary to deliver the message to the next hop and the problem cannot be well expressed with any of the other provided detail codes.";
				break;
			case "5.1":
				$tdctd = "<strong>Invalid command</strong><br />A mail transaction protocol command was issued which was either out of sequence or unsupported.  This is useful only as a permanent error.";
				break;
			case "5.2":
				$tdctd = "<strong>Syntax error</strong><br />A mail transaction protocol command was issued which could not be interpreted, either because the syntax was wrong or the command is unrecognized. This is useful only as a permanent error.";
				break;
			case "5.3":
				$tdctd = "<strong>Too many recipients</strong><br />More recipients were specified for the message than could have been delivered by the protocol.  This error should normally result in the segmentation of the message into two, the remainder of the recipients to be delivered on a subsequent delivery attempt.  It is included in this list in the event that such segmentation is not possible.";
				break;
			case "5.4":
				$tdctd = "<strong>Invalid command arguments</strong><br />A valid mail transaction protocol command was issued with invalid arguments, either because the arguments were out of range or represented unrecognized features. This is useful only as a permanent error.";
				break;
			case "5.5":
				$tdctd = "<strong>Wrong protocol version</strong><br />A protocol version mis-match existed which could not be automatically resolved by the communicating parties.";
				break;
			case "6.0":
				$tdctd = "<strong>Other or undefined media error</strong><br />Something about the content of a message caused it to be considered undeliverable and the problem cannot be well expressed with any of the other provided detail codes.";
				break;
			case "6.1":
				$tdctd = "<strong>Media not supported</strong><br />The media of the message is not supported by either the delivery protocol or the next system in the forwarding path. This is useful only as a permanent error.";
				break;
			case "6.2":
				$tdctd = "<strong>Conversion required and prohibited</strong><br />The content of the message must be converted before it can be delivered and such conversion is not permitted.  Such prohibitions may be the expression of the sender in the message itself or the policy of the sending host.";
				break;
			case "6.3":
				$tdctd = "<strong>Conversion required but not supported</strong><br />The message content must be converted to be forwarded but such conversion is not possible or is not practical by a host in the forwarding path.  This condition may result when an ESMTP gateway supports 8bit transport but is not able to downgrade the message to 7 bit as required for the next hop.";
				break;
			case "6.4":
				$tdctd = "<strong>Conversion with loss performed</strong><br />This is a warning sent to the sender when message delivery was successfully but when the delivery required a conversion in which some data was lost.  This may also be a permanant error if the sender has indicated that conversion with loss is prohibited for the message.";
				break;
			case "6.5":
				$tdctd = "<strong>Conversion Failed</strong><br />A conversion was required but was unsuccessful.  This may be useful as a permanent or persistent temporary notification.";
				break;
			case "7.0":
				$tdctd = "<strong>Other or undefined security status</strong><br />Something related to security caused the message to be returned, and the problem cannot be well expressed with any of the other provided detail codes.  This status code may also be used when the condition cannot be further described because of security policies in force.";
				break;
			case "7.1":
				$tdctd = "<strong>Delivery not authorized, message refused</strong><br />The sender is not authorized to send to the destination. This can be the result of per-host or per-recipient filtering.  This memo does not discuss the merits of any such filtering, but provides a mechanism to report such. This is useful only as a permanent error.";
				break;
			case "7.2":
				$tdctd = "<strong>Mailing list expansion prohibited</strong><br />The sender is not authorized to send a message to the intended mailing list. This is useful only as a permanent error.";
				break;
			case "7.3":
				$tdctd = "<strong>Security conversion required but not possible</strong><br />A conversion from one secure messaging protocol to another was required for delivery and such conversion was not possible. This is useful only as a permanent error.";
				break;
			case "7.4":
				$tdctd = "<strong>Security features not supported</strong><br />A message contained security features such as secure authentication which could not be supported on the delivery protocol. This is useful only as a permanent error.";
				break;
			case "7.5":
				$tdctd = "<strong>Cryptographic failure</strong><br />A transport system otherwise authorized to validate or decrypt a message in transport was unable to do so because necessary information such as key was not available or such information was invalid.";
				break;
			case "7.6":
				$tdctd = "<strong>Cryptographic algorithm not supported</strong><br />A transport system otherwise authorized to validate or decrypt a message was unable to do so because the necessary algorithm was not supported.";
				break;
			case "7.7":
				$tdctd = "<strong>Message integrity failure</strong><br />A transport system otherwise authorized to validate a message was unable to do so because the message was corrupted or altered.  This may be useful as a permanent, transient persistent, or successful delivery code.";
				break;
		} // END switch($two_digit_code)
	} // END if( $bounce_details['sub_error_number'] )

	echo "	<table class='article_table'>
			<tr>
				<th>" . $bounce_details['main_error_number'] . "</th>
				<td>$main_first_number_tech_details</td>
			</tr>
	";
	if($tdctd)
		echo "	<tr>
				<th>" . $bounce_details['sub_error_number'] . "</th>
				<td>$tdctd</td>
			</tr>
		";
	echo "	</table>";
}






function print_solution($bounce_details)
{
	if( substr_count($bounce_details['who_delivered_the_bounce'],"inmotionhosting.com") == 1 )
                $bounce_details['is_our_server'] = true;

	/*
	//
	// THESE PHRASES are now stored in the database, so no need to keep the array
	//
	$blocked_words = array("block","abuse","denied","poor reputation","spam reject","aol.com esmtp not accepting connections","found on one or more dnsbls","rejected due to spam content","554conb1.html","421conb1.html","untrusted mail delivery system");
        foreach($blocked_words as $k => $v)
                if( substr_count($bounce_details['error_number_phrase'],$v) > 0 )
                        $bounce_details['potential_blacklisting'] = true;
	*/

	$bounce_details['subject_of_email_to_systems'] = "BBParser - " . $bounce_details['who_delivered_the_bounce'] . " - " . $bounce_details['ip_that_is_blocked'] . " - " . $bounce_details['blocking_service'] . " - RCPT:" . $bounce_details['original_recipient'];


	// grab the rule set from the database
	$db = JFactory::getDbo();
	$query = "SELECT * FROM #__bbparser_rules";
	$db->setQuery($query);
	$rule_set = $db->loadObjectList();
	// parse the rule set
	foreach($rule_set as $k => $v)
	{
		$generate_message = false;
		// if we have a match for the main error number of sub error number
		if(
			($bounce_details['main_error_number'] == $v->main_n AND $v->main_n != "") OR
			($bounce_details['sub_error_number'] == $v->sub_n AND $v->sub_n != "")
		)
			$generate_message = true;
		// otherwise, see if we have a phrase match
		else
		{
			$exploded_phrases = explode("***",$v->phrases);
			foreach($exploded_phrases as $ep_k => $phrase)
				if($phrase != "")
					if( substr_count($bounce_details['error_number_phrase'],$phrase) > 0 )
					{
						$generate_message = true;
						// echo "<h1>here!</h1>";
						// echo "<pre>"; print_r($v); echo "</pre>";
					}
		}

		if( $generate_message == true )
		{
			// are we running a function
                        if( $v->function != "" )
                        {
                                switch($v->function)
                                {
                                        case "return_maybe_spf_diagnosis":
                                                $solution_message[] = return_maybe_spf_diagnosis($bounce_details);
                                                break;
					case "return_blacklisting_diagnosis";
						$solution_message[] = return_blacklisting_diagnosis($bounce_details);
						break;
					case "process_the_account_or_domain_may_not_exist":
						$solution_message[] = process_the_account_or_domain_may_not_exist($bounce_details);
						break;
                                }
                        }
                        // or just sending a blank message?
                        else
                                $solution_message[] = replace_caps_with_bounce_details($bounce_details,$v->html);
		}
	}

$our_response_code = $bounce_details['main_error_number'];
$orig_bounce_message = $_POST['bounce'];
$query = "INSERT INTO #__parser_log (input, response) VALUES ('$orig_bounce_message', '$our_response_code');";
$db->setQuery($query);
$db->execute();


	echo "<h2 style='margin-bottom:15px;'>Step 3: What should I do?</h2>";






	
	// if we don't have a solution message
	if( count($solution_message) == 0 )
		$solution_message[] = "
			<p>Unfortunately at this time we do not have a suggested solution for the error message that you have submitted. Our team will be reviewing this further.</p>
                	<script type=\"text/javascript\">
                        	_gaq.push(['_setAccount', 'UA-1501988-1']);
	                        _gaq.push(['_trackEvent', 'community support', 'bbparser - no suggested solution for user']);
        	        </script>
		";






	// print the solution message
	if($solution_message)
	{
		echo "	<ul>";
		foreach($solution_message as $sm_k => $sm_v)
			if( $sm_v != "" )
				echo "<li>$sm_v</li>";
		echo "	</ul>";
	}
	// print_feedback_form_bbp();






	// echo "<pre style='margin-top:200px;'>SUBJECT TO SYSETMS:\n$subject_of_email_to_systems</pre>";

	// echo "<pre style='margin-top:100px;'>"; print_r($bounce_details); echo "</pre>";
}






function is_this_an_ip($text)
{
	if( substr_count($text,".") == 3 )
	{
		$exploded_text = explode(".",$text);
		foreach($exploded_text as $k => $v)
		{
			if( ! is_numeric($v) )
				return false;
		}
		return true;
	}
	else
		return false;
}






function return_maybe_spf_diagnosis($bounce_details)
{
	// get domain of sender
	$exploded_original_sender = explode("@",$bounce_details['original_sender']);
	$sender_domain = $exploded_original_sender[1];

	$txt_record = dns_get_record($sender_domain,DNS_TXT);
	foreach($txt_record as $k => $v)
		if( substr($v['txt'],0,5) == "v=spf" )
			$spf_record = $v['txt'];

	if(! $spf_record)
                return "";

	if( is_this_an_ip($bounce_details['ip_that_is_blocked']) )
		return "
			<p>The problem may be related to your SPF record. Double check that " . $bounce_details['ip_that_is_blocked'] . " is properly configured in your SPF record for $sender_domain </p>
			<p class='white_box'>$spf_record</p>
		";

	// we don't have an ip address, so get it
	$mx_record = dns_get_record($sender_domain,DNS_MX);
	$first_mx_record_host = $mx_record[0]['target'];
	$first_mx_record_a_array = dns_get_record($first_mx_record_host,DNS_A);
	$first_mx_record_a = $first_mx_record_a_array[0]['ip'];
	if( is_this_an_ip($first_mx_record_a) )
		return "
                        <p>The problem may be related to your SPF record. Double check that $first_mx_record_a is properly configured in your SPF record for $sender_domain </p>
                        <p class='white_box'>$spf_record</p>
                ";
}






function return_blacklisting_diagnosis($bounce_details)
{
	// inmotionhosting server and 5.7.1
        if(
                ($bounce_details['sub_error_number'] == "5.7.1" AND $bounce_details['is_our_server'] == true) OR
                ($bounce_details['is_our_server'] == true)
        )
                return "
		<p>It appears that the server, " . $bounce_details['who_delivered_the_bounce'] . ", may be listed in a blacklist. Enter your email address and cPanel username bleow, and then click submit. We will forward this issue to our System Administration department so they may review the issue further and get back with you.</p>
		<form method='post'>
			<table class='article_table'>
				<tr>
					<th style='font-weight:normal'>
						Your email address:
						<div style='font-size:11px;'><em>So that we may get in touch with you</em></div>
					</th>
					<td><input type='text' name='reply_to_this_user' id='reply_to_this_user' /></td>
				</tr>
				<tr>
					<th style='font-weight:normal;'>
						Your main domain name or cPanel username
						<div style='font-size:11px;'><em>So that we may log and better track this issue</em></div>
					</th>
					<td><input type='text' name='main_domain_or_username' id='main_domain_or_username' /></td>
				</tr>
			</table>
			<input type='hidden' name='sctask' id='sctask' value='esystems' />
			<textarea name='pasted_bounce' id='pasted_bounce' style='display:none;'>" . htmlspecialchars($_POST['bounce']) . "</textarea>
			<textarea name='esubject' id='esubject' style='display:none;'>" . htmlspecialchars($bounce_details['subject_of_email_to_systems']) . "</textarea>
			<input type='submit' value='Submit' />
		</form>
		<script type=\"text/javascript\">
                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'community support', 'bbparser - option to email systems given to user']);
                </script>
		";
        else
                return "
			<p>It appears that the server you are sending email from may be listed in a blacklist. We weren't able to determine which server this is, so it is recommended to contact your email provider for further assistance.</p>
			<script type=\"text/javascript\">
                                _gaq.push(['_setAccount', 'UA-1501988-1']);
                                _gaq.push(['_trackEvent', 'community support', 'bbparser - blacklisting identified but cant confirm server']);
                        </script>
		";
}






echo "		<a name='like_this_article'></a>
		<div style='text-align:right; margin:30px -22px 0px 0px;'>
                        <span style='padding-right:15px;'>Like this Tool?</span>
                        $like_facebook_html
                        $like_google_html
                        $like_twitter_html
                </div>
	</div>
"; // END THE ENTIRE PAGE (div class='item-page')






function replace_caps_with_bounce_details($bounce_details,$message)
{
	$message = str_replace("ORIGINAL_RECIPIENT",$bounce_details['original_recipient'],$message);

	return $message;
}






function the_following_addresses_failed_error_message($bounce_guts)
{
	// echo "<pre>$bounce_guts</pre>";

	// ok, so grab where the position of "the following address(es) failed:"
	$failed_text_location = strpos($bounce_guts,"the following address(es) failed");

	// get the actual message from the server
	$server_message = substr($bounce_guts,($failed_text_location + 33));
	$server_message = trim($server_message);
	// at this point, server_message =
	// omarjosecanon@yahoo.com domain arabiqatar.com has exceeded the max emails per hour (313/250 (125%)) allowed. message discarded.

	return $server_message;
}






function process_the_account_or_domain_may_not_exist($bounce_details)
{
	return "
	<p>
		The error phrase, <em>the account or domain may not exist, they may be blacklisted, or missing the proper dns entries</em>, is vague, but it suggests to:
		<ul>
			<li>Ensure " . htmlspecialchars($bounce_details['original_recipient']) . " is spelled correctly and is <a href='/support/edu/everything-email/introduction-email/creating-email-account'>created within your cPanel</a> (if applicable). </li>
			<li>Ensure " . htmlspecialchars($bounce_details['domain_of_original_recipient']) . " is spelled correctly and is registered.</li>
			<li>Check to see if " . htmlspecialchars($bounce_details['domain_of_original_recipient']) . " is <a href='/support/tools/blacklist-check'>in a blacklist</a>.</li>
			<li>Check to see if " . htmlspecialchars($bounce_details['domain_of_original_recipient']) . " has MX records set (<a href='/support/tools/visual-domain-routing'>use this tool</a>).</li>
		</ul>
	</p>
	";
}






function return_original_recipient_domain($string)
{
	$exploded_string = explode("@",$string);
	return $exploded_string[1];
}






function print_feedback_form_bbp()
{
	echo "
		<form method='post' style='margin:150px 0px 0px 0px;'>
                        <h2>Want to provide feedback?</h2>
                        <p>Enter your email address, your feedback, and your bounce back message, and we'll use your data to help update this tool. Thanks in advance!</p>
                        <table class='article_table'>
                                <tr>
                                        <th width='200'>Your&nbsp;&nbsp;Email&nbsp;&nbsp;Address</th>
                                        <td><input type='text' name='email' id='email' style='width:400px;' /></td>
                                </tr>
                                <tr>
                                        <th width='200'>Your&nbsp;&nbspbounceback</th>
                                        <td><textarea name='bbp_bounceback' id='bbp_bounceback' style='width:400px; height:100px;'></textarea></td>
                                </tr>
                                <tr>
                                        <th>Feedback</th>
                                        <td><textarea name='bbp_feedback' id='bbp_feedback' style='width:400px; height:100px;'></textarea></td>
                                </tr>
                                <tr>
                                        <td colspan='2'><input type='submit' value='Send Feedback' class='btn btn-primary' /></td>
                                </tr>
                        </table>
                </form>
	";
}






?>
