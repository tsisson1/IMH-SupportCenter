<?

// http://stackoverflow.com/questions/49547/making-sure-a-web-page-is-not-cached-across-all-browsers
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.

/**
 * Setup date and time settings. This is initially being setup to determine the time so we can
 * disable certain departments throuhout the week.
 */
date_default_timezone_set('America/New_York');
$date = new DateTime();
$hour = date("G",$date->getTimestamp());
$day = date("N",$date->getTimestamp()); /* 1 (for Monday) through 7 (for Sunday) */






// ----------------------------------------------------------------------------
// grab message from the database
// ----------------------------------------------------------------------------
include_once("../configuration.php");
$cg = new JConfig;
$con = mysqli_connect("localhost",$cg->user,$cg->password,$cg->db);

// if we cannot connect to the database
// ------------------------------------------------------------------------------------------------------------------
if (mysqli_connect_errno())
{
	$welcome_message = "<p>Welcome to chat!</p>";
}
// if we CAN connect to the database
// ------------------------------------------------------------------------------------------------------------------
else
{


// if we need to get the training departments
if( $_GET['rdid'] == "708918024841625095" OR $_GET['rdid'] == "794814027115867494" )
{   
    /**
     * These hard coded departments will be used as a fallback just in case the query below fails
     * to get the departmetns
     */
    $departments["708918024841625095"] = "Training - Support";
    $departments["794814027115867494"] = "Training - Sales";
    
    // grab the departments from the database
        $departments_from_db = pass_query_return_departments("  SELECT  `dep_id`,`dep_title`
                                                FROM    `" . $cg->dbprefix . "prechat_departments`
                                                WHERE   `group` = 'training' AND
                                                        `enabled` = 1
                                                ORDER BY `order` ASC;
                                                ");
        if($departments_from_db)
        {       
                unset($departments);
                $departments = $departments_from_db;
        }
}
// else get the "production" departments (non training departments)
else
{
    /**
         * These hard coded departments will be used as a fallback just in case the query below fails
         * to get the departmetns
         */
#        $departments["2324923566971164486"] = "Technical Support (24/7)";
$departments["2324923566971164486"] = "Technical Support (24/7)";
        $departments["1621843185299383618"] = "Billing / Customer Service (24/7)";
    $departments["sales"] = "Sales";
    $departments["1103926052605498945"] = "Account Confirmations (24/7)";

    // grab the departments from the database
/*  $departments_from_db = pass_query_return_departments("  SELECT  `dep_id`,`dep_title`
                        FROM    `" . $cg->dbprefix . "prechat_departments`
                        WHERE   `group` = 'standard' AND
                            `enabled` = 1
                        ORDER BY `order` ASC;
                        ");
    if($departments_from_db)
    {
        unset($departments);
        $departments = $departments_from_db;
    }
*/}



	// ----------------------------------------------------------------
	// grab the current (id=1) and default message (id=2)
	// ----------------------------------------------------------------
	$query = "SELECT * FROM `" . $cg->dbprefix . "prechat_message`";
	$result = mysqli_query($con,$query);
	while($row = mysqli_fetch_array($result))
	{
		switch($row['id'])
		{
			// case 1: current message
			case "1":
				$support_message_last_update = $row['last_update'];
			        $support_message_expiration = $row['expiration'];
			        $support_message = $row['message'];
				
			case "2":
				$support_default_message = $row['message'];
				
            case "3":
                $sales_message = $row['message'];
                $sales_message_expiration = $row['expiration'];
                $sales_message_update = $row['last_update'];
            case "4":
                $sales_default_message = $row['message'];
            case "5":
                $billing_message = $row['message'];
                $billing_message_expiration = $row['expiration'];
                $billing_message_update = $row['last_update'];
                break;
            case "6":
                $billing_default_message = $row['message'];
                break;
		}
	}
	// ----------------------------------------------------------------
	// has the message expired?
	// ----------------------------------------------------------------
	if( $support_message_expiration != "0" )
	{
        	$current_time = date("Y-m-d H:i:s");
	        $support_message_last_updated_seconds_ago = strtotime($current_time) - strtotime($support_message_last_update);
        
         // if updated 1 hour 1 second ago is greate than 1 hour expiration
        // if 3601 seconds is greater than 3600
        if( $support_message_last_updated_seconds_ago > ($support_message_expiration * 60 * 60) )
        {
            $query = "UPDATE `" . $cg->dbprefix . "prechat_message` SET `message` = '" . addslashes($support_default_message) . "', `last_update` = CURRENT_TIMESTAMP, `expiration` = 0 WHERE `id` = 1;";
            $result = mysqli_query($con,$query);
            $support_message = $support_default_message;
        }

	}
	else {
		$support_message = $support_default_message;
}

if( $sales_message_expiration != "0" )
    {
            $current_time = date("Y-m-d H:i:s");
            $sales_message_last_updated_seconds_ago = strtotime($current_time) - strtotime($sales_message_update);

         if( $sales_message_last_updated_seconds_ago > ($sales_message_expiration * 60 * 60) )
        {
            $query = "UPDATE `" . $cg->dbprefix . "prechat_message` SET `message` = '" . addslashes($sales_default_message) . "', `last_update` = CURRENT_TIMESTAMP, `expiration` = 0 WHERE `id` = 3;";
            $result = mysqli_query($con,$query);
            $sales_message = $sales_default_message;
     }
    }
    else {
        $sales_message = $sales_default_message;
}

if( $billing_message_expiration != "0" )
    {
            $current_time = date("Y-m-d H:i:s");
            $message_last_updated_seconds_ago = strtotime($current_time) - strtotime($billing_message_update);

        // if updated 1 hour 1 second ago is greate than 1 hour expiration
        // if 3601 seconds is greater than 3600
    }
    else {
        $billing_message = $billing_default_message;
}


} 





/**
 * setup chat departments
 */
/**
 * Setup disabled departments. For example, during overnight hours, sales team is not available
 */
// Web design sales - open Mon-Fri 9-6
if( ! ( $day <= 5 AND ( $hour >= 9 AND $hour < 18 ) ) ) {
	$disabled_department['161470813524485003'] = "disabled";
}

/**
 * Create the department <options> for the select tag
 */
foreach($departments as $dep_k => $dep_v) {
	// if the department is closed
	if( isset($disabled_department[$dep_k]) ) {
		$department_options .= "\n<option value='$dep_k' " . $disabled_department[$dep_k] . ">$dep_v (Closed)</option>";
	}
	// else, the department is open
	else {
		$department_options .= "\n<option value='$dep_k'>$dep_v</option>";
	}
}


/** 
    * Support specific options
*/

$support_departments["None"] = "Please Select";
$support_departments["Domains"] = "Domains";
$support_departments["Email"] = "Email";
$support_departments["cPanel"] = "cPanel";
$support_departments["BoldGrid"] = "BoldGrid";
$support_departments["WordPress"] = "WordPress";
$support_departments["AMP"] = "Account Management Panel (AMP)";
$support_departments["Other"] = "Other";


/** 
 * Sales specific options
 */


        $sales_departments["4574741892902413188"] = "Business Class Hosting (Starting at $5.99/mo)";
        $sales_departments["3027061675179994483"] = "Reseller Hosting (Starting at $22.49/mo)";
        $sales_departments["1382987596054887839"] = "VPS Hosting (Starting at $29.99/mo)";
	$sales_departments["1286457700577469211"] = "Standard Dedicated Servers (Starting at $119.99/mo)";
	$sales_departments["4586651924193796753"] = "Commercial Class Dedicated Servers (Starting at $419.99/mo)";
	$sales_departments["7558931443353369177"] = "Legacy Dedicated Servers (Starting at $79.99/mo)";
        $sales_departments["161470813524485003"] = "Web Design Services (Starting at $100/mo)";



foreach($support_departments as $sdep_s => $sdep_z) {
        // if the department is closed
        if( isset($disabled_department[$sdep_s]) ) {
                $department_options_support .= "\n<option value='$sdep_s' " . $disabled_department[$sdep_s] . ">$sdep_z (Closed)</option>";
        }
        // else, the department is open
        else {
                $department_options_support .= "\n<option value='$sdep_s'>$sdep_z</option>";
    }
}


foreach($sales_departments as $dep_s => $dep_z) {
        // if the department is closed
        if( isset($disabled_department[$dep_s]) ) {
                $department_options_sales .= "\n<option value='$dep_s' " . $disabled_department[$dep_s] . ">$dep_z (Closed)</option>";
        }
        // else, the department is open
        else {
                $department_options_sales .= "\n<option value='$dep_s'>$dep_z</option>";
	}
}

?><html>

<head>

	<link rel="stylesheet" href="main.css?v=<? echo time(); ?>" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="main.js?v=<? echo time(); ?>" type="text/javascript"></script>
    <script type="text/javascript" src="js/js/jquery.tooltipster.min.js"></script>




<link rel="stylesheet" type="text/css" href="js/css/tooltipster.css" />
<link rel="stylesheet" type="text/css" href="js/css/themes/tooltipster-light.css" />
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">


    <script>
        $(document).ready(function() {
        $('.tooltip').tooltipster({
  animation: 'slide',
theme: 'tooltipster-light',
maxWidth: 600,
  content: $('<p><font size="1px">Verification is a method we use to confirm that the person contacting us is authorized to have changes made to the account. <br /> <br />Types of Verification:<br /><br /><strong>AMP (Account Management Panel) Password</strong><br /><br />This is most often only used by the account owners since the AMP contains sensitive billing and account information.<br /><br /><strong>Last four digits of credit card on file</strong><br /> <br />The last 4 digits are unique to the card but are not enough for anyone listening to be able to use the card. The digits are evaluated against the list of cards that are on the account.<br /><br /><strong>Passphrase (if Applicable)</strong><br /><br />By adding the passphrase, then ONLY that can be used to verify the account.<br /><br /><strong>Developer Passphrase (if Applicable)</strong><br /><br />This type of verification is for developers. This way they have authorization to have minor changes made to the account such as files, etc but no major changes such as credit card or billing information. They will also not be able to ask for that information. </font></p>'),
});
});
    </script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>






	<div class='logo'></div>

	<div class='main_container' name='main_container' id='main_container'>


		<form name='myform' id='prechatform' method='get' action='https://livechat.boldchat.com/aid/370246676985295205/bc.chat'>

			<input type="hidden" name="resize" value="true" />
			<input type="hidden" name="cwdid" value="4729630034290649077">
			<input type="hidden" name="cbdid" value="2766161325990137219" />
			<input type="hidden" name="wdid" value="2034694302371522916" />
			<input type="hidden" name="url" value="<? echo htmlentities($_GET['url'],ENT_QUOTES); ?>" />
			<input type="hidden" name="brand" id="brand" value="IMH" />
			<input type="hidden" name="vr" id="vr" value="IMH" />
			<input type="hidden" name="timestamp_n_id" id="timestamp_n_id" value="<? echo gmmktime() . rand(1000,1999); ?>" />
			<input type="hidden" name="ip" id="ip" value="<? echo $_SERVER['HTTP_X_FORWARDED_FOR']; ?>" />
<p>
           <div class='field_title'>Please select the most appropriate department: <span class='ras'>*</span></div>
                                <select id="rdid" name="rdid" class="radio_button" onChange="showNextButton();">
                                        <option value="" selected>
                                        <? echo $department_options; ?>
                                </select>
<div name="SupportMessage" id="SupportMessage">
        <? echo $support_message; ?>
</div>
<div name="SalesMessage" id="SalesMessage">
        <p><? echo $sales_message; ?></p>
</div>

<div name="CSMessage" id="CSMessage">
        <p><? echo $billing_message; ?></p>
</div>



<div id="sales_list" style="display;hidden;">
                                <div class='field_title'>Please select the type of hosting you are looking for: <span class='ras'>*</span></div>
                                <select id="rdid2"  name ="rdid2" style="width:300px;" class="radio_button" onChange="showNextButton();">
                                        <? echo $department_options_sales; ?>
                                </select>

                        </div>

<div id="support_list" style="display;hidden;">
                                <div class='field_title'>Please select the type of Technical Support inquiry you have.<span class='ras'>*</span></div>
                                <select id="rdid3"  name ="rdid3" class="radio_button" onChange="showNextButton();">
                                        <? echo $department_options_support; ?>
                                </select>

                        </div>


</p>

<p>
				<div class='field_title'>Your name: <span class='ras'>*</span></div>
				<input type='text' name='vn' id='vn' />
			</p>

			<p>
				<div class='field_title'>Your e-mail: <span class='ras'>*</span></div>
				<input type='text' name='ve' id='ve' />
			</p>
	
			<p>
				<div class='field_title'>What is your domain name?</div>
				<input type='text' name='vdn' id='vdn' />
			</p>
 <p>
                                <div id='support_verification' class='field_title'>Account Verification: <br />
                                <input type='text' name='vver' id='vver' onFocus="showNextButton();" />    <a style='font-size: 10px' class='tooltip'>What is my account verification <img src='/support/images/tooltip.gif' /></a>
</div>
                        </p>

			<div>
				<div class='field_title'>What question may we help you with? <span class='ras'>*</span></div>
				<textarea name='iq' id='iq' onFocus="showNextButton();" ></textarea>
			</div>


			<p name='find_fast_support' id='find_fast_support'>You may find your answer faster within our Support Center:</p>

			<div name='loading_asr' id='loading_asr'>
				<input id='nextStep' type='button' value='Next step' onClick='fetch_ajax_search_results();' class='blue_button' />
			</div>
			<div name='asr' id='asr'></div>

			<div name='asr_help' id='asr_help'>
                                <input id='searchAgain' type='button' value='Search Again' onClick="searchAgain();" class='blue_button' />
<input id='launchReg' type='button' value='Launch Chat' onClick="launchChat();" class='blue_button' />
		    <input id='launchSup' type='button' value='Launch Chat' onClick="launchChatSup();" class='blue_button' />
            <input id='launchCS' type='button' value='Launch Chat' onClick="launchChatCS();" class='blue_button' />
</div>

			<a name='after_asr' id='after_asr'></a>

		</form>

	</div>

	<img src='loading.gif' style='display:none;' />

	<input type='hidden' name='research_count' id='research_count' value='0' />

<script>
$(document).ready( function() {
$('#sales_list').hide();  

$('#rdid').bind('change', function (e) { 
    if( $('#rdid').val() == 'sales') {
      $('#sales_list').show();
 
    }
    else{
      $('#sales_list').hide();
    }         
  });
});

</script>


<script>
$(document).ready( function() {
$('#support_list').hide();  

$('#rdid').bind('change', function (e) { 
    if( $('#rdid').val() == '2324923566971164486') {
      $('#support_list').show();
    }
    else{
      $('#support_list').hide();
    }         
  });
});

</script>

<script>
$(document).ready( function() {
$('#lauchSup').hide();  
$('#lauchReg').show();  
$('#launchCS').hide();
    $('#SupportMessage').hide();
    $('#SalesMessage').hide();
    $('#CSMessage').hide();
$('#rdid').bind('change', function (e) { 
    if( $('#rdid').val() == '2324923566971164486'){
$('#launchCS').hide();      
$('#launchSup').show();
        $('#launchReg').hide();
        $('#SupportMessage').show();
        $('#SalesMessage').hide();
        $('CSMessage').hide();
    }
    else if( $('#rdid').val() == '1621843185299383618') {
      $('#launchSup').hide();
        $('#launchCS').show();
        $('#launchReg').hide();
        $('#SalesMessage').hide();
        $('#SupportMessage').hide();
        $('#CSMessage').show(); 
    } else if ( $('#rdid').val() == 'sales' ){
        $('#lauchSup').hide();  
        $('#lauchReg').show();  
        $('#launchCS').hide();
        $('#SalesMessage').show();
        $('#SupportMessage').hide();
        $('#CSMessage').hide(); 
    } else {
        $('#lauchSup').hide();  
        $('#lauchReg').show();  
        $('#launchCS').hide();
        $('#SalesMessage').hide();
        $('#SupportMessage').hide();
        $('#CSMessage').hide(); 
    }       
  });
});

</script>
<script>
$(document).ready( function() {
   // If the current url contains the string '&newest'
   if (document.location.href.indexOf('sales') > -1)
   {
      // Use jQuery to set the value of the select box to 'newest'
      $('#rdid').val('sales');
      $('#sales_list').show();
      $('#SalesMessage').show();
   
       if (document.location.href.indexOf('vps-hosting') > -1)
    {
     $('#rdid2').val('1382987596054887839');
    }
     if (document.location.href.indexOf('reseller-hosting') > -1)
    {
     $('#rdid2').val('3027061675179994483');
    }
     if (document.location.href.indexOf('legacy-hosting') > -1)
    {
     $('#rdid2').val('7558931443353369177');
    }
     if (document.location.href.indexOf('dedicated-hosting') > -1)
    {
     $('#rdid2').val('1286457700577469211');
    }
     if (document.location.href.indexOf('commercial-hosting') > -1)
    {
     $('#rdid2').val('4586651924193796753');
    }
     if (document.location.href.indexOf('web-design') > -1)
    {
     $('#rdid2').val('161470813524485003');
    }

}
});
</script>

<script>
$(document).ready( function() {
$('#support_verification').hide();  

$('#rdid').bind('change', function (e) { 
    if(( $('#rdid').val() == '2324923566971164486') || ($('#rdid').val() == '1621843185299383618')){
      $('#support_verification').show();
    }
    else{
      $('#support_verification').hide();
    }         
  });
});

</script>

<script>
$(document).ready( function() {

    if( $('#rdid').val() == 'sales') {
  $("input, select, textarea", $(".sales_list")).attr("disabled", "disabled");

}
    else{
}         
  });


</script>
</body>
</html>






<?

/**
 * pass a query and return all of the departments
 */
function pass_query_return_departments($query)
{
	include_once("../configuration.php");
	$cg = new JConfig;
	$con = mysqli_connect("localhost",$cg->user,$cg->password,$cg->db);

	if (mysqli_connect_errno())
	{
		return false;
	}
	else
	{
	        $result = mysqli_query($con,$query);
        	while($row = mysqli_fetch_array($result))
		{
			$departments[$row['dep_id']] = $row['dep_title'];
		}
		mysqli_close($con);

		return $departments;
	}
}

?>
