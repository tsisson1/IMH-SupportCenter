<? /*

$db = JFactory::getDBO();

$query = "SELECT * FROM #__email_queue WHERE `been_sent` = 0 ORDER BY `id` ASC LIMIT 2;";
$db->setQuery($query);
$email_queue = $db->loadObjectList();

if ($email_queue)
{
	require '/home/ccdevinm/public_html/support/includes/phpmailer/PHPMailer_v5.1/class.phpmailer.php';
	foreach ($email_queue as $key => $v)
	{
		try
		{
			$body = $v->body_html;
			if ($body == "")
				$body = $v->body_text;
		        $mail = new PHPMailer(true); //New instance, with exceptions enabled
		        $mail->IsSMTP();                           // tell the class to use SMTP
		        $mail->SMTPAuth   = true;                  // enable SMTP authentication
		        $mail->Port       = 587;                    // set the SMTP server port
		        $mail->Host       = "173.247.247.200"; // SMTP server
		        $mail->Username   = "customer_experience@inmotionhosting.com";     // SMTP server username
		        $mail->Password   = "HKhU#*5E}vhF";            // SMTP server password
		        $mail->From       = "customer_experience@inmotionhosting.com";
		        $mail->FromName   = "Customer Community";
		        $to = $v->to;
		        $mail->AddAddress($to);
		        $mail->Subject  = $v->subject;
		        $mail->AltBody    = $v->body_text; // optional, comment out and test
		        $mail->WordWrap   = 80; // set word wrap
		        $mail->MsgHTML($body);
		        $mail->IsHTML(true); // send as HTML
		        $mail->Send();

			$query = "UPDATE #__email_queue SET `been_sent` = 1, `sent_date` = CURRENT_TIMESTAMP WHERE `id` = " . $v->id . " LIMIT 1;";
		}
		catch (phpmailerException $e)
		{
	        	$error_message = $e->errorMessage();

			$query = "UPDATE #__email_queue SET `been_sent` = -1, `sent_date` = CURRENT_TIMESTAMP, `sent_error_message` = '" . addslashes($error_message) . "' WHERE `id` = " . $v->id . " LIMIT 1;";
		}

		$db->setQuery($query);
		$db->execute();
	}
}

/* ?>
