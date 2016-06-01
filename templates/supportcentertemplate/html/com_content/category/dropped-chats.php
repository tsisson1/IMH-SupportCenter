<?

if( $_POST['dropped_chat_form'] == 1 )
{
	$submitted_form_data .= "users ip:\t\t\t" . $_SERVER['HTTP_X_FORWARDED_FOR']  . "\n\n";

	foreach($_POST as $k => $v)
	{
		if($v AND $v != 1)
		{
			$submitted_form_data .= "$k:\t\t\t$v\n\n";
		}
	}

	require_once('templates/supportcentertemplate/html/com_content/category/recaptcha-php-1.11/recaptchalib.php');
	$privatekey = "6LeoSOcSAAAAACyk04ENGfotd8a-9zZAzPfNsIIv"; // you got this from the signup page
	$resp = recaptcha_check_answer ($privatekey,
                                $_SERVER['HTTP_X_FORWARDED_FOR'],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
	if (!$resp->is_valid)
	{
		// What happens when the CAPTCHA was entered incorrectly
		JFactory::getApplication()->enqueueMessage("The Captcha was not entered correctly, please try again.", 'error');
		// echo "The reCAPTCHA wasn't entered correctly. Go back and try it again." . "(reCAPTCHA said: " . $resp->error . ")";

		$os_other = htmlspecialchars( htmlentities($_POST['os_other'],ENT_QUOTES) );
		$browser_other = htmlspecialchars( htmlentities($_POST['browser_other'],ENT_QUOTES) );


	}
	else
	{
		// Your code here to handle a successful verification
		cs_send_email("bradm@inmotionhosting.com","IMH - dropped chat submission",$submitted_form_data);
	        JFactory::getApplication()->enqueueMessage('Thank you for your feedback!', 'success');
	}
}

?>

<div class='item-page'>

<div class='page-header'>
	<h1><? echo $this->category->title; ?></h1>
</div>

<p>Thank you for contacting our support team through our Live Chat system.</p>

<p>If your chat session has ended unexpectedly, it is possible that the connection was lost and the chat became unresponsive.  This may happen from time to time as Internet Service Providers or software may be conflicting and cause a loss in connectivity.</p>

<p>We want to assure you that your concerns are important to us and that the chat was not dropped intentionally.  Please try to connect via chat again as we are eager to answer any questions or resolve any issues that you may be experiencing.  Additionally, please feel free to reach out to us either by phone (888-321-4678) or email (support@inmotionhosting.com) and we would be more than happy to assist you.</p>

<p>We understand how frustrating a dropped chat can be, especially if it is recurring.  If this has been a recurring problem, please let us know the following information so that we can better troubleshoot the issue from our end.</p>

<form class='white_box' method='post'>

<p>
	<strong>Which Operating System do you use?</strong><br />
	<select name='os_type' id='os_type' style='color:#000; width:300px;'>
		<option value=''></option>
		<option value='windows xp' <? if($_POST['os_type']=='windows xp')echo 'selected=selected'; ?> >Windows XP</option>
		<option value='windows vista' <? if($_POST['os_type']=='windows vista')echo 'selected=selected'; ?> >Windows Vista</option>
		<option value='windows 7' <? if($_POST['os_type']=='windows 7')echo 'selected=selected'; ?> >Windows 7</option>
		<option value='windows 8' <? if($_POST['os_type']=='windows 8')echo 'selected=selected'; ?> >Windows 8</option>
		<option value='max os' <? if($_POST['os_type']=='mac os')echo 'selected=selected'; ?> >Mac OS</option>
	</select>
	<div style='width:300px;'>
		Or, other: <input type='text' name='os_other' id='os_other' style='float:right;' value='<? echo $os_other; ?>' />
	</div>
</p><br /><br />

<p>
	<strong>Which browser do you use?</strong><br />
	<select name='browser_type' id='browser_type' style='color:#000; width:300px;'>
		<option value=''></option>
		<option value='internet explorer' <? if($_POST['browser_type']=='internet explorer')echo 'selected=selected'; ?> >Internet Explorer</option>
		<option value='firefox' <? if($_POST['browser_type']=='firefox')echo 'selected=selected'; ?> >Firefox</option>
		<option value='opera' <? if($_POST['browser_type']=='opera')echo 'selected=selected'; ?> >Opera</option>
		<option value='safari' <? if($_POST['browser_type']=='safari')echo 'selected=selected'; ?> >Safari</option>
		<option value='chrome' <? if($_POST['browser_type']=='chrome')echo 'selected=selected'; ?> >Chrome</option>
	</select>
	<div style='width:300px;'>
		Or, other: <input type='text' name='browser_other' id='browser_other' style='float:right;'  value='<? echo $browser_other; ?>' />
	</div>
</p><br /><br />

<p>
	<strong>What type of network connection do you have?</strong><br />
	<select name='connection_type' id='connection_type' style='color:#000; width:300px;'>
		<option value=''></option>
		<option value='dial up' <? if($_POST['connection_type']=='dial up')echo 'selected=selected'; ?> >Dial-up</option>
		<option value='cable modem' <? if($_POST['connection_type']=='cable modem')echo 'selected=selected'; ?> >Cable Modem</option>
		<option value='dsl' <? if($_POST['connection_type']=='dsl')echo 'selected=selected'; ?> >DSL</option>
		<option value='office' <? if($_POST['connection_type']=='office')echo 'selected=selected'; ?> >Office network</option>
		<option value='home wifi' <? if($_POST['connection_type']=='home wifi')echo 'selected=selected'; ?> >Home wifi</option>
		<option value='hotspot' <? if($_POST['connection_type']=='hotspot')echo 'selected=selected'; ?> >Wifi Hotspot</option>
	</select>
</p>

<?
	require_once('templates/supportcentertemplate/html/com_content/category/recaptcha-php-1.11/recaptchalib.php');
	$publickey = "6LeoSOcSAAAAAGEzHG3DfhwCCZTigzSlHi3Qjymt"; // you got this from the signup page
	echo recaptcha_get_html($publickey);
?>

<input type='hidden' name='dropped_chat_form' id='dropped_chat_form' value='1' />

<p><input type='submit' value='Submit' class='btn btn-primary' /></p>

</form>

<p>Thank you for your understanding and please feel free to let us know if you have any further questions or concerns as our support team is available 24/7.</p>

</div>
