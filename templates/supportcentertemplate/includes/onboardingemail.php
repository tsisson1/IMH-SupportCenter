<?

$session = JFactory::getSession();

// do we already have a session the variable onbardingemail?
$onboardingemail_user_start_date = $session->get('onboardingemail_user_start_date');
$onboardingemail_user_start_date_nn = date("Y-m-d H:i:s",$onboardingemail_user_start_date);
$onboardingemail_user_last_date = $session->get('onboardingemail_user_last_date');

$current_date = time();

// if we have tsrc=onboardingemail AND this is their first visit
if( $_GET['tsrc'] == "onboardingemail" AND $onboardingemail_user_start_date == "" )
{
	// if so, set the start date
	$session->set('onboardingemail_user_start_date',"$current_date");
	$onboardingemail_user_start_date = $current_date;
}

// is this user an onboardemail user?
if( $onboardingemail_user_start_date != "" )
{
	// set the current time as their last visit
	$session->set('onboardingemail_user_last_date',"$current_date");
	$onboardingemail_user_last_date = $current_date;
}

// how many days since this user's first visit?
unset($track_chats_by_onboarding_email);
if( $onboardingemail_user_start_date != "" AND $onboardingemail_user_last_date != "" )
{
	$seconds_as_support_center_user = time() - $onboardingemail_user_start_date;
	$minutes_as_support_center_user = round($seconds_as_support_center_user / 60,2);
	$days_as_support_center_user_nodecimals = round($seconds_as_support_center_user / (60*60*24),0,PHP_ROUND_HALF_DOWN);
	$track_chats_by_onboarding_email = "
		_gaq.push(['_trackEvent', 'chat-by-ip', 'tsrc=onboardingemail', '**IP:" . $_SERVER['HTTP_X_FORWARDED_FOR'] . "**   **FIRST_VISIT:$onboardingemail_user_start_date_nn**   **MINUTES_AS_A_SC_USER $minutes_as_support_center_user**', $days_as_support_center_user_nodecimals]);
	";

	include_once("log_ip_address_activity.php");
}





?>
