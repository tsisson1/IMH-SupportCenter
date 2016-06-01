<?






function cc_send_mail($from,$to,$subject,$body)
{
	date_default_timezone_set('America/Toronto');
	require_once('phpmailer/PHPMailer_v5.1/class.phpmailer.php');
	$mail             = new PHPMailer();
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host       = "173.247.247.200"; // SMTP server
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Host       = "173.247.247.200"; // sets the SMTP server
	$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
	$mail->Username   = "customer_experience@inmotionhosting.com"; // SMTP account username
	$mail->Password   = "fJ;zKIJyCduC%&CM+P";        // SMTP account password
	$mail->SetFrom($from, 'Customer Community');
	$mail->Subject    = $subject;
	$mail->MsgHTML($body);
	$mail->AddAddress($to, "Customer Community");
	if(!$mail->Send())
		return false;
	else
		return true;
}






?>
