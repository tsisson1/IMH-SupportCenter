<?
	//don't allow other scripts to grab and execute our file
	defined('_JEXEC') or die('Direct Access to this location is not allowed.');
	
	$ip = $_GET['ip'];
	
	$count_found_in = 0;






	// if an 'ip' was passed
	if($ip)
	{
		// is this an IP address?
		if(! bl_check_is_ip($ip) )
		{
			// if this is not an ip address, try to get an IP based upon host
			$ip = gethostbyname($ip);

	                // is this an IP address?
        	        if(! bl_check_is_ip($ip) )
			{
				$ip_error_code = "badip";
			}
		}
	}
	else
	{
		$ip_error_code = "noip";
	}


	if( ! $_GET['ip'] )
	{
		$ip = "";
	}
	elseif($ip_error_code)
	{
		$ip = "INVALID ip or domain";
	}






	$submission_form = "
	 <h2>Search for your domain name in a blacklist</h2>
        <form method='get' style='margin-bottom:25px;'>
                Please enter an IP address or domain name below and click submit to check it against our list of popular blacklists.<br />
                <input type='text' style='width:200px;' name='ip' id='ip' value='$ip' />
                <input type='submit' value='submit' class='btn btn-info' />
                <div style='font-size:10px; font-style:italic;'>( Please be patient as this lookup may take several seconds to complete )</div>
        </form>
	";






	$blacklist_info = "
	<h2>What is a blacklist?</h2>
        <p>As spam email is such a huge issue online, there are many sources available on the internet that publicly list known servers that send spam. These lists, commonly referred to as blacklists, are used by many email providers to help block spam emails sent to their users.</p>

        <h2>Am I on a blacklist?</h2>
        <h3>Did you get a bounce back message?</h3>
        <p>If you received a bounce back message, it may have given you a message stating that your email was <strong>blocked due to abuse</strong>. This abuse it's referring to is usually spamming, and it believes you (or <a href='/support/email/email-troubleshooting/why-do-mail-servers-get-blacklisted'>other users sharing your email server</a>) are sending spam because it found your email server in a blacklist.</p>
        <p> If this is the case, you can <a href='/support/tools/bounce-back-parser'>scan the bounce back message using our bounce back parser tool</a>. If we find that the email was returned due to a blacklisting issue, the tool will give you the option to notifiy our System Administration team to review the issue further.</p>
	";






?>






<div class='item-page'>

	<div class='page-header'>
		<h1>Blacklist Checker</h1>
	</div>






<?






// setup our list of blacklists
$mybls = array(
'B.BARRACUDACENTRAL.ORG',
'BL.DEADBEEF.COM',
'BL.SPAMCOP.NET',
'BLACKHOLES.FIVE-TEN-SG.COM',
'BLACKLIST.WOODY.CH',
'BOGONS.CYMRU.COM',
'CBL.ABUSEAT.ORG CDL.ANTI-SPAM.ORG.CN',
'COMBINED.ABUSE.CH',
'COMBINED.RBL.MSRBL.NET',
'DB.WPBL.INFO',
'DNSBL-1.UCEPROTECT.NET',
'DNSBL-2.UCEPROTECT.NET',
'DNSBL-3.UCEPROTECT.NET',
'DNSBL.ABUSE.CH',
'DNSBL.AHBL.ORG',
'DNSBL.CYBERLOGIC.NET',
'DNSBL.SORBS.NET',
'DRONE.ABUSE.CH',
'DUINV.AUPADS.ORG',
'DUL.DNSBL.SORBS.NET',
'DUL.RU',
'DYNA.SPAMRATS.COM',
'DYNIP.ROTHEN.COM',
'HTTP.DNSBL.SORBS.NET',
'IMAGES.RBL.MSRBL.NET',
'IPS.BACKSCATTERER.ORG',
'IX.DNSBL.MANITU.NET',
'KOREA.SERVICES.NET',
'MISC.DNSBL.SORBS.NET',
'NOPTR.SPAMRATS.COM',
'OHPS.DNSBL.NET.AU',
'OMRS.DNSBL.NET.AU',
'ORVEDB.AUPADS.ORG',
'OSPS.DNSBL.NET.AU',
'OSRS.DNSBL.NET.AU',
'OWFS.DNSBL.NET.AU',
'OWPS.DNSBL.NET.AU',
'PBL.SPAMHAUS.ORG',
'PHISHING.RBL.MSRBL.NET',
'PROBES.DNSBL.NET.AU',
'PROXY.BL.GWEEP.CA',
'PROXY.BLOCK.TRANSIP.NL',
'PSBL.SURRIEL.COM',
'RBL.INTERSERVER.NET',
'RDTS.DNSBL.NET.AU',
'RELAYS.BL.GWEEP.CA',
'RELAYS.BL.KUNDENSERVER.DE',
'RELAYS.NETHER.NET',
'RESIDENTIAL.BLOCK.TRANSIP.NL',
'RICN.DNSBL.NET.AU',
'RMST.DNSBL.NET.AU',
'SBL.SPAMHAUS.ORG',
'SHORT.RBL.JP',
'SMTP.DNSBL.SORBS.NET',
'SOCKS.DNSBL.SORBS.NET',
'SPAM.DNSBL.SORBS.NET',
'SPAM.RBL.MSRBL.NET',
'SPAM.SPAMRATS.COM',
'SPAMLIST.OR.KR',
'SPAMRBL.IMP.CH',
'T3DIRECT.DNSBL.NET.AU',
'TOR.AHBL.ORG',
'TOR.DNSBL.SECTOOR.DE',
'TORSERVER.TOR.DNSBL.SECTOOR.DE',
'UBL.LASHBACK.COM',
'UBL.UNSUBSCORE.COM',
'VIRBL.BIT.NL',
'VIRUS.RBL.JP',
'VIRUS.RBL.MSRBL.NET',
'WEB.DNSBL.SORBS.NET',
'WORMRBL.IMP.CH',
'XBL.SPAMHAUS.ORG',
'ZEN.SPAMHAUS.ORG'
);






if( ! $ip_error_code )
{
	echo $submission_form;
	run_blacklist_scan($ip,$mybls);
	echo $blacklist_info;
}
else
{
	echo $submission_form;
	echo $blacklist_info;
	print_table_of_blacklists($mybls);
}






function print_table_of_blacklists($mybls)
{
	echo "	<h3>Is your domain listed in a blacklist?</h3>
		<p>If you use the tool at the top of this page, we will can for your domain name / ip address in the following blacklists:</p>
		<ul>
	";
        foreach($mybls as $k => $v)
		echo "<li>$v</li>";
	echo "  </ul>";
}






function run_blacklist_scan($ip,$mybls)
{
	echo "	<h1>Checking IP Address: $ip</h1>
		<table class='table table-striped' id='blacklist-table'>
			<tr>
				<th>Blacklist</th>
				<th>Status</th>
			</tr>
	";
	foreach($mybls as $k => $v)
		echo "	<tr>
				<td>$v</td>
				<td id='bl_status_" . ($k+1) . "'><img src='/support/launch-chat/loading.gif' /></td>
			</tr>
		";
	echo "	</table>";

	echo "
	<script type='text/javascript'>
	window.onload =  run_bl_checker;
	function run_bl_checker()
	{
		var rv_ip = '$ip';
		var blacklist_table = document.getElementById('blacklist-table');
		var rowLength = blacklist_table.rows.length;
		for( var i=1; i<rowLength; i+=1)
		{
			var row = blacklist_table.rows[i];
			var rv_bl_host = row.cells[0].innerHTML;

			jQuery.ajax({
				type: 'POST',
				url: '/support/gadgets/blacklist-checker/',
				data: {p_ip:rv_ip,p_bl:rv_bl_host,p_index:i},
				success: function(data,status){
						var split_data = data.split('------');
						var bl_host_status = 'bl_status_' + split_data[0];
						document.getElementById(bl_host_status).innerHTML = split_data[1];
					},
				async:true
			});
		}
	}
	</script>
	";
}






// end the document -------------------------------------------------------------------------------
$like_this_blacklist_tool = return_div_with_social_buttons("Like this tool?",$this->document->base);

echo "		$like_this_blacklist_tool
	</div>"; // end the item-page class






// -------------------------------------------------------------------------------------
// This function validates whether a string is an IP address or not
// http://www.electrictoolbox.com/php-validate-ip-address-filter-var/
// -------------------------------------------------------------------------------------
function bl_check_is_ip($ip)
{
	if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4))
        {
		// this is an IP address
        	return true;
	}
        else
        {
		// this is not an IP address
		return false;
        }
}






?> 
