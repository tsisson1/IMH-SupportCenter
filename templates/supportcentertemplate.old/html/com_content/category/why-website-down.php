<div class='item-page'>

	<div class='page-header'>
		<h1>Domain Checker</h1>
	</div>

	<p>
		<strong>Why is my website down?</strong> Your website could be down for many reasons, ranging from DNS and nameserver misconfigurations to syntax errors in your .htaccess file. Enter your domain name in the form below and click <em>check domain</em>. We'll review your domain name and try to provide you with further information about the status of your domain.
	</p>

	<p>
		<strong>Please note!</strong> This tool is inteded for use by InMotion Hosting customers only.
	</p>

	<form method='get'>
		<strong style='padding-right:20px;'>Domain:</strong> <input type='text' name='domain' id='domain' style='width:300px;' value='<? echo htmlentities(strtolower($_GET['domain']),ENT_QUOTES); ?>' /><input type='submit' value='check domain' class='btn btn-primary' />
		<div style='color:#aaa; font-size:11px; padding:5px 0px 0px 83px;'>Enter only your domain name, such as "yourdomain.com". DO NOT include "www" or "http://"</div>
	</form>

<?

if( $_GET['domain'] )
{
	$yellow_warning_span = "<span style='font-weight:bold; color:#000; background:#FFFFCC; border:1px solid #808000; padding:0px 5px;'>!</span>";

	$user_domain = $_GET['domain'];

	$replace_mes = array("http://","https://","ftp://","/");
	foreach($replace_mes as $replace_mes_key => $replace_mes_value)
		$user_domain = str_replace($replace_mes_value,"",$user_domain);

	// trim the domain
	$user_domain = trim($user_domain);

	if( substr_count($user_domain," ") > 0 )
		die("error - domain names should not include a space");
	if( substr_count($user_domain,";") > 0 )
                die("error - domain names should not include ;");

	// remove everything except a-z 0-9 and - and .
	// http://stackoverflow.com/questions/659025/removing-non-alphanumeric-characters-with-php/5443145#5443145
	$user_domain = preg_replace("/[^A-Za-z0-9\-.]/", '', $user_domain);

	exec("whois $user_domain",$v1);

	if( $_GET['tell_me_why'] == "1" )
	{
		echo "	<h1>Raw whois data</h1>
			<textarea style='width:95%; height:200px;'>"; print_r($v1); echo "</textarea>
		";
	}






/*
Array
(
    [0] => [Querying whois.verisign-grs.com]
    [1] => [Redirected to whois.melbourneit.com]
    [2] => [Querying whois.melbourneit.com]
    [3] => [whois.melbourneit.com]
    [4] => 
    [5] => Domain Name.......... bradmarkle.com
    [6] =>   Creation Date........ 2007-08-02
    [7] =>   Registration Date.... 2007-08-02
    [8] =>   Expiry Date.......... 2014-08-02
    [9] =>   Organisation Name.... Brad Markle
    [10] =>   Organisation Address. 6100 Center Drive
    [11] =>   Organisation Address. Suite 1190
    [12] =>   Organisation Address.
    [13] =>   Organisation Address. Los Angeles
    [14] =>   Organisation Address. 90045
    [15] =>   Organisation Address. CA
    [16] =>   Organisation Address. UNITED STATES
    [17] => 
    [18] => Admin Name........... Brad Markle
    [19] =>   Admin Address........ 6100 Center Drive
    [20] =>   Admin Address........ Suite 1190
    [21] =>   Admin Address........
    [22] =>   Admin Address. Los Angeles
    [23] =>   Admin Address........ 90045
    [24] =>   Admin Address........ CA
    [25] =>   Admin Address........ UNITED STATES
    [26] =>   Admin Email.......... mrmarkle.com@dns-protect.net
    [27] =>   Admin Phone.......... +1.2132584422
    [28] =>   Admin Fax............
    [29] => 
    [30] => Tech Name............ Administrator Domain
    [31] =>   Tech Address......... 6100 Center Drive
    [32] =>   Tech Address......... Suite 1190
    [33] =>   Tech Address.........
    [34] =>   Tech Address......... Los Angeles
    [35] =>   Tech Address......... 90045
    [36] =>   Tech Address......... CA
    [37] =>   Tech Address......... UNITED STATES
    [38] =>   Tech Email........... dns-admin@inmotionhosting.com
    [39] =>   Tech Phone........... +1.2132584422
    [40] =>   Tech Fax.............
    [41] =>   Name Server.......... ns1.bradmarkle.com
    [42] =>   Name Server.......... ns2.bradmarkle.com
    [43] => 
    [44] => 
)
*/






/*
[Querying whois.verisign-grs.com]
[Redirected to whois.wildwestdomains.com]
[Querying whois.wildwestdomains.com]
[whois.wildwestdomains.com]
Domain Name: ABSOLUTEWEBDEV.COM
Registrar URL: http://www.wildwestdomains.com
Updated Date: 2013-07-28 11:03:22
Creation Date: 2009-02-23 02:33:08
Registrar Expiration Date: 2015-02-23 02:33:08
Registrar: Wild West Domains, LLC
Reseller: CSS-Solutions.com Domains & Web Hosting
Registrant Name:
Registrant Organization: Absolute Web Dev
Registrant Street: 139 Beverly Ave
Registrant City: Norfolk
Registrant State/Province: Virginia
Registrant Postal Code: 23505
Registrant Country: United States
Admin Name: James Richardson
Admin Organization:
Admin Street: 139 Beverly Ave
Admin City: Norfolk
Admin State/Province: Virginia
Admin Postal Code: 23505
Admin Country: United States
Admin Phone: +1.9512149196
Admin Fax:
Admin Email: absolutewebdev@gmail.com
Tech Name: Administrator Domain
Tech Organization:
Tech Street: 6100 Center Drive
Tech Street: Suite 1190
Tech City: Los Angeles
Tech State/Province: California
Tech Postal Code: 90045
Tech Country: United States
Tech Phone: +1.7574166575
Tech Fax:
Tech Email: dns-admin@inmotionhosting.com
Name Server: NS4007.WEBSITEWELCOME.COM
Name Server: NS4008.WEBSITEWELCOME.COM
*/






/*
Array
(
    [0] => [Querying whois.verisign-grs.com]
    [1] => [whois.verisign-grs.com]
    [2] => 
    [3] => Whois Server Version 2.0
    [4] => 
    [5] => Domain names in the .com and .net domains can now be registered
    [6] => with many different competing registrars. Go to http://www.internic.net
    [7] => for detailed information.
    [8] => 
    [9] => No match for domain "KENDRIXGARDNERMINISTRIES.COM".
    [10] => >>> Last update of whois database: Thu, 17 Oct 2013 13:05:03 UTC <<<
    [11] => 
    [12] => NOTICE: The expiration date displayed in this record is the date the
    [13] => registrar's sponsorship of the domain name registration in the registry is
    [14] => currently set to expire. This date does not necessarily reflect the expiration
    [15] => date of the domain name registrant's agreement with the sponsoring
    [16] => registrar.  Users may consult the sponsoring registrar's Whois database to
    [17] => view the registrar's reported date of expiration for this registration.
    [18] => 
    [19] => TERMS OF USE: You are not authorized to access or query our Whois
    [20] => database through the use of electronic processes that are high-volume and
    [21] => automated except as reasonably necessary to register domain names or
    [22] => modify existing registrations; the Data in VeriSign Global Registry
    [23] => Services' ("VeriSign") Whois database is provided by VeriSign for
    [24] => information purposes only, and to assist persons in obtaining information
    [25] => about or related to a domain name registration record. VeriSign does not
    [26] => guarantee its accuracy. By submitting a Whois query, you agree to abide
    [27] => by the following terms of use: You agree that you may use this Data only
    [28] => for lawful purposes and that under no circumstances will you use this Data
    [29] => to: (1) allow, enable, or otherwise support the transmission of mass
    [30] => unsolicited, commercial advertising or solicitations via e-mail, telephone,
    [31] => or facsimile; or (2) enable high volume, automated, electronic processes
    [32] => that apply to VeriSign (or its computer systems). The compilation,
    [33] => repackaging, dissemination or other use of this Data is expressly
    [34] => prohibited without the prior written consent of VeriSign. You agree not to
    [35] => use electronic processes that are automated and high-volume to access or
    [36] => query the Whois database except as reasonably necessary to register
    [37] => domain names or modify existing registrations. VeriSign reserves the right
    [38] => to restrict your access to the Whois database in its sole discretion to ensure
    [39] => operational stability.  VeriSign may restrict or terminate your access to the
    [40] => Whois database for failure to abide by these terms of use. VeriSign
    [41] => reserves the right to modify these terms at any time.
    [42] => 
    [43] => The Registry database contains ONLY .COM, .NET, .EDU domains and
    [44] => Registrars.
)
*/






/*
Array
(
    [0] => [Querying whois.biz]
    [1] => [whois.biz]
    [2] => Domain Name:                                 CREEKSIDECHIROPRACTIC.BIZ
    [3] => Domain ID:                                   D57107603-BIZ
    [4] => Sponsoring Registrar:                        MELBOURNE IT LTD
    [5] => Sponsoring Registrar IANA ID:                13
    [6] => Registrar URL (registration services):       whois.inww.com
    [7] => Domain Status:                               ok
    [8] => Registrant ID:                               B138065201173292
    [9] => Registrant Name:                             Lance Clifton
    [10] => Registrant Organization:                     Creekside Chiropractic
    [11] => Registrant Address1:                         7880 Old Auburn Rd
    [12] => Registrant City:                             Citrus Heights
    [13] => Registrant State/Province:                   CA
    [14] => Registrant Postal Code:                      95610
    [15] => Registrant Country:                          United States
    [16] => Registrant Country Code:                     US
    [17] => Registrant Phone Number:                     +1.9167238282
    [18] => Registrant Email:                            rdwise@specificcomputersystems.com
    [19] => Administrative Contact ID:                   D138065200645667
    [20] => Administrative Contact Name:                 Lance Clifton
    [21] => Administrative Contact Organization:         Creekside Chiropractic
    [22] => Administrative Contact Address1:             7880 Old Auburn Rd
    [23] => Administrative Contact City:                 Citrus Heights
    [24] => Administrative Contact State/Province:       CA
    [25] => Administrative Contact Postal Code:          95610
    [26] => Administrative Contact Country:              United States
    [27] => Administrative Contact Country Code:         US
    [28] => Administrative Contact Phone Number:         +1.9167238282
    [29] => Administrative Contact Email:                rdwise@specificcomputersystems.com
    [30] => Billing Contact ID:                          B138065201173294
    [31] => Billing Contact Name:                        Lance Clifton
    [32] => Billing Contact Organization:                Creekside Chiropractic
    [33] => Billing Contact Address1:                    7880 Old Auburn Rd
    [34] => Billing Contact City:                        Citrus Heights
    [35] => Billing Contact State/Province:              CA
    [36] => Billing Contact Postal Code:                 95610
    [37] => Billing Contact Country:                     United States
    [38] => Billing Contact Country Code:                US
    [39] => Billing Contact Phone Number:                +1.9167238282
    [40] => Billing Contact Email:                       rdwise@specificcomputersystems.com
    [41] => Technical Contact ID:                        B138065201173296
    [42] => Technical Contact Name:                      Lance Clifton
    [43] => Technical Contact Organization:              Creekside Chiropractic
    [44] => Technical Contact Address1:                  7880 Old Auburn Rd
    [45] => Technical Contact City:                      Citrus Heights
    [46] => Technical Contact State/Province:            CA
    [47] => Technical Contact Postal Code:               95610
    [48] => Technical Contact Country:                   United States
    [49] => Technical Contact Country Code:              US
    [50] => Technical Contact Phone Number:              +1.9167238282
    [51] => Technical Contact Email:                     rdwise@specificcomputersystems.com
    [52] => Name Server:                                 NS.INMOTIONHOSTING.COM
    [53] => Name Server:                                 NS2.INMOTIONHOSTING.COM
    [54] => Created by Registrar:                        MELBOURNE IT LTD
    [55] => Domain Registration Date:                    Tue Oct 01 18:30:57 GMT 2013
    [56] => Domain Expiration Date:                      Tue Sep 30 23:59:59 GMT 2014
    [57] => 
    [58] => >>>> Whois database was last updated on: Thu Oct 17 14:04:55 GMT 2013 <<<<
    [59] => 
    [60] => NeuStar, Inc., the Registry Operator for .BIZ, has collected this information
    [61] => for the WHOIS database through an ICANN-Accredited Registrar. This information
    [62] => is provided to you for informational purposes only and is designed to assist
    [63] => persons in determining contents of a domain name registration record in the
    [64] => NeuStar registry database. NeuStar makes this information available to you
    [65] => "as is" and does not guarantee its accuracy. By submitting a WHOIS query, you
    [66] => agree that you will use this data only for lawful purposes and that, under no
    [67] => circumstances will you use this data: (1) to allow, enable, or otherwise
    [68] => support the transmission of mass unsolicited, commercial advertising or
    [69] => solicitations via direct mail, electronic mail, or by telephone; (2) in
    [70] => contravention of any applicable data and privacy protection acts; or (3) to
    [71] => enable high volume, automated, electronic processes that apply to the registry
    [72] => (or its systems). Compilation, repackaging, dissemination, or other use of the
    [73] => WHOIS database in its entirety, or of a substantial portion thereof, is not
    [74] => allowed without NeuStar's prior written permission. NeuStar reserves the
    [75] => right to modify or change these conditions at any time without prior or
    [76] => subsequent notification of any kind. By executing this query, in any manner
    [77] => whatsoever, you agree to abide by these terms.
    [78] => 
    [79] => NOTE: FAILURE TO LOCATE A RECORD IN THE WHOIS DATABASE IS NOT INDICATIVE
    [80] => OF THE AVAILABILITY OF A DOMAIN NAME.
)
*/






/*
Array
(
    [0] => [Querying whois.nic.br]
    [1] => [whois.nic.br]
    [2] => 
    [3] => % Copyright (c) Nic.br
    [4] => %  The use of the data below is only permitted as described in
    [5] => %  full by the terms of use (http://registro.br/termo/en.html),
    [6] => %  being prohibited its distribution, comercialization or
    [7] => %  reproduction, in particular, to use it for advertising or
    [8] => %  any similar purpose.
    [9] => %  2013-10-17 13:04:16 (BRT -03:00)
    [10] => 
    [11] => domain:      relm.com.br
    [12] => owner:       RELM CHATRAL TELECOMUNICA��ES LTDA
    [13] => ownerid:     061.261.624/0001-57
    [14] => responsible: Arturo Gustavo Parga
    [15] => country:     BR
    [16] => owner-c:     AGP21
    [17] => admin-c:     AGP21
    [18] => tech-c:      AGP21
    [19] => billing-c:   AGP21
    [20] => nserver:     ns.inmotionhosting.com
    [21] => nsstat:      20131013 AA
    [22] => nslastaa:    20131013
    [23] => nserver:     ns2.inmotionhosting.com
    [24] => nsstat:      20131013 AA
    [25] => nslastaa:    20131013
    [26] => created:     20050228 #2028172
    [27] => expires:     20140228
    [28] => changed:     20130717
    [29] => status:      published
    [30] => 
    [31] => nic-hdl-br:  AGP21
    [32] => person:      Arturo Gustavo Parga
    [33] => e-mail:      agp@uol.com.br
    [34] => created:     20000105
    [35] => changed:     20080201
    [36] => 
    [37] => % Security and mail abuse issues should also be addressed to
    [38] => % cert.br, http://www.cert.br/, respectivelly to cert@cert.br
    [39] => % and mail-abuse@cert.br
    [40] => %
    [41] => % whois.registro.br accepts only direct match queries. Types
    [42] => % of queries are: domain (.br), registrant (tax ID), ticket,
    [43] => % provider, contact handle (ID), CIDR block, IP and ASN.
    [44] => 
)
*/






// echo "<pre>"; print_r($v1); echo "</pre>";
$domain_not_registered = false;
foreach($v1 as $k => $v)
{
	// SITUATION: Name Server.......... ns1.bradmarkle.com ------------------------------------------------
	if( substr_count($v,"...") > 0 )
	{
		// find the first occurence of ...
		$first_part = trim(strstr($v,"...",true));
		$last_part = strstr($v,"...");
			unset($reconstructed_last_part);
			$first_non_dot_found = 0;
			for($x = 0; $x <= strlen($last_part); $x++)
			{
				if( $first_non_dot_found > 0 )
					$reconstructed_last_part .= substr($last_part,$x,1);

				if( substr($last_part,$x,1) != "." )
					$first_non_dot_found++;
			}
			$last_part = trim($reconstructed_last_part);
		if( $last_part != "" )
			$whois_array_of_data[$first_part][] = $last_part;
	}
	// SITUATION: Tech Postal Code: 90045 -----------------------------------------------------------------
	if( substr_count($v,":") > 0 AND substr_count($v,":") < 4 AND substr_count($v,":") != 3)
	{
		$exploded_v = explode(":",$v);
		$first_part = trim($exploded_v[0]);
		$last_part = trim($exploded_v[1]);
		if($last_part != "")
			$whois_array_of_data[$first_part][] = $last_part;
	}
	// SITUATION: Domain Registration Date: Tue Oct 01 18:30:57 GMT 2013
	if( substr_count($v,":") == 3 )
	{
		$exploded_v = explode(":",$v);
		$first_part = trim($exploded_v[0]);
		unset($last_part);
		unset($last_part_array);
		for($x = 1; $x <= (count($exploded_v) - 1); $x++)
		{
			$last_part_array[] = trim($exploded_v[$x]);
		}
		$last_part = implode(":",$last_part_array);
		if($last_part != "")
                        $whois_array_of_data[$first_part][] = $last_part;
	}
	// is the domain registered?
	if(	substr_count(strtolower($v),"no match for domain") > 0 OR
		substr_count($v,"NOT FOUND") > 0
	)
		$domain_not_registered = true;
}
if( $_GET['tell_me_why'] == "1" )
{
	echo "  <h1>whois_array_of_data</h1>
		<textarea style='width:95%; height:200px;'>"; print_r($whois_array_of_data); echo "</textarea>
	";
}






foreach($whois_array_of_data as $record_type => $v)
{
	foreach($v as $record_type_key => $record_type_value)
	{
		switch($record_type)
		{
			case "Registration Date":
			case "Creation Date":
			case "Created On":
			case "Created":
			case "Domain Registration Date":
				$whois_data_farmed['registration_date'] = $record_type_value;
				if( substr_count($record_type_value," ") == 1 )
				{
					$exploded_date_nn = explode(" ",$record_type_value);
					$whois_data_farmed['registration_date'] = $exploded_date_nn[0];
				}
                                break;
			case "Expiry Date":
			case "Registrar Expiration Date":
			case "Expiration Date":
			case "Expires":
			case "Domain Expiration Date":
				$whois_data_farmed['expiration_date'] = $record_type_value;
				if( substr_count($record_type_value," ") == 1 )
                                {
                                        $exploded_date_nn = explode(" ",$record_type_value);
                                        $whois_data_farmed['expiration_date'] = $exploded_date_nn[0];
                                }
				break;
			case "Updated Date":
			case "Last Updated On":
			case "Last Modified":
				$whois_data_farmed['updated_date'] = $record_type_value;
				if( substr_count($record_type_value," ") == 1 )
                                {
                                        $exploded_date_nn = explode(" ",$record_type_value);
                                        $whois_data_farmed['updated_date'] = $exploded_date_nn[0];
                                }
                                break;
			case "Name Server":
				$whois_data_farmed['nameservers'][] = strtolower($record_type_value);
				break;
		}
	}
}
if( $_GET['tell_me_why'] == "1" )
{
	echo "  <h1>whois_data_farmed</h1>
        	<textarea style='width:95%; height:200px;'>"; print_r($whois_data_farmed); echo "</textarea>
	";
}






$keep_troubleshooting = true;






echo "	<h2 style='border-bottom:1px solid #ddd;'>Whois and DNS Checks</h2>";






if( $keep_troubleshooting == true )
{
        if( $whois_data_farmed['registration_date'] )
        {
                $seconds_since_domain_registration = time() - strtotime($whois_data_farmed['registration_date']);
		$hours_since_domain_registration = $seconds_since_domain_registration / 60 / 60;
                if( $hours_since_domain_registration > 24 )
                {
                        echo "
                                <div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:green;'>&#x2713;</span> <strong>Domain Registration</strong></div>
                                <div>Your domain name has been registered since " . htmlspecialchars($whois_data_farmed['registration_date'],ENT_QUOTES) . ".</div>
                        ";
                }
                else
                {
                        echo "
                                <div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:red;'>&#x2717;</span> <strong>Domain Registration</strong></div>
                                <div>Your domain name appears to have been registered within the last 24 hours, so <a href='/support/domain-names/dns-nameserver-changes/domain-names-dns-changes' target='_blank'>propagtion time may be causing problems</a> with your website and email.</div>
                        ";
                }
        }
	if( $domain_not_registered == true )
	{
		echo "
			<div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:red;'>&#x2717;</span> <strong>Domain Registration</strong></div>
			<div>It appears the domain name " . htmlspecialchars($user_domain,ENT_QUOTES) . " is not registered. <a href='/support/domain-names/registrations-and-transfers/registering-a-new-domain-name' target='_blank'>Have you registered the domain yet</a>?</div>
		";
		$keep_troubleshooting = false;

		// are we dealing with a subdomain?
		if( substr_count($user_domain,".") > 1 )
		{
			$exploded_user_domain = explode(".",$user_domain);
			$new_exploded_user_domain = array_shift($exploded_user_domain);
			$user_domain_with_sub_domain_removed = implode(".",$exploded_user_domain);
			echo "
				<div class='alert alert-error'>At this time, this tool does not work with sub domains. For example \"www\" is a subdomain, and will not work with this tool. If you want to instead search for <strong>$user_domain_with_sub_domain_removed</strong>, <a href='/support/tools/domain-checker?domain=$user_domain_with_sub_domain_removed'>click here</a>.</div>
			";
		}
	}
}






if( $keep_troubleshooting == true )
{
	if( $whois_data_farmed['expiration_date'] )
	{
		$seconds_to_domain_expiration = strtotime($whois_data_farmed['expiration_date']) - time();
		$days_to_domain_expiration = round($seconds_to_domain_expiration / 60 / 60 / 24,0);
		if( $seconds_to_domain_expiration > 0 )
		{
			echo "
				<div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:green;'>&#x2713;</span> <strong>Domain Expiration</strong></div>
				<div>Your domain name does not expire until " . htmlspecialchars($whois_data_farmed['expiration_date'],ENT_QUOTES) . ", which is in another $days_to_domain_expiration day(s), so it is still functioning.</div>
			";
		}
		else
		{
			echo "
                                <div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:red;'>&#x2713;</span> <strong>Domain Expiration</strong></div>
                                <div>Your domain name appears to have expired " . htmlspecialchars($whois_data_farmed['expiration_date'],ENT_QUOTES) . ", $days_to_domain_expiration day(s) ago, so it is not functioning.</div>
                        ";
		}
	}
}






if( $keep_troubleshooting == true )
{
        if( $whois_data_farmed['updated_date'] )
        {
                $seconds_since_last_whois_update = time() - strtotime($whois_data_farmed['updated_date']);
                $days_since_last_whois_update = round($seconds_since_last_whois_update / 60 / 60 / 24,0);
                if( $seconds_since_last_whois_update > (60*60*24) )
                {
                        echo "
                                <div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:green;'>&#x2713;</span> <strong>DNS Updates</strong></div>
                                <div>Your whois information was last updated " . htmlspecialchars($whois_data_farmed['updated_date'],ENT_QUOTES) . ", which was $days_since_last_whois_update day(s) ago. Nameserver propagation should not be an issue.</div>
                        ";
                }
                else
                {
                        echo "
                                <div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:red;'>&#x2713;</span> <strong>DNS Updates</strong></div>
                                <div>Your whois information was last updated " . htmlspecialchars($whois_data_farmed['updated_date'],ENT_QUOTES) . ", and it has not yet been a full 24 hours. DNS Propagation may be the problem.</div>
                        ";
                }
        }
	else
	{
		echo "
                                <div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:blue;'>?</span> <strong>DNS Updates</strong></div>
                                <div>We were unable to detect when your whois information was last updated.</div>
		";
	}

	/*
		Array
		(
		    [0] => Array
		        (
		            [host] => phantomkicksmusic.com
		            [type] => SOA
		            [mname] => ns.inmotionhosting.com
		            [rname] => machinemessages.forum.inmotionhosting.com
		            [serial] => 2011030101
		            [refresh] => 86400
		            [retry] => 7200
		            [expire] => 3600000
		            [minimum-ttl] => 86400
		            [class] => IN
		            [ttl] => 86400
		        )
		)
	*/
	$dug_soa = dns_get_record($user_domain,DNS_SOA);
	if( $dug_soa[0]['serial'] )
	{
		$serial = $dug_soa[0]['serial'];
			$serial_year = substr($serial,0,4);
			$serial_month = substr($serial,4,2);
			$serial_day = substr($serial,6,2);
			$serial = "$serial_year-$serial_month-$serial_day";
		$seconds_since_last_soa_update = time() - strtotime($serial);
		$hours_since_last_soa_update = round($seconds_since_last_soa_update/60/60,0);
		$days_since_last_soa_update = round($seconds_since_last_soa_update/60/60/24,0);
		if( $hours_since_last_soa_update < 24 )
			echo "
                                <div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:red;'>&#x2717;</span> <strong>SOA Record - last update</strong></div>
                                <div>Your SOA record appears to have updated in the last 24 hours, some time on $serial. Because it's been less than 24 hours, your domain name may not be working as expected due to dns propagation.</div>
                        ";
		else
			echo "
                                <div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:green;'>&#x2713;</span> <strong>SOA Record - last update</strong></div>
                                <div>Your SOA record was last updated on $serial, which was $days_since_last_soa_update day(s) ago. DNS propagation most likely isn't causing a problem.</div>
                        ";
	}
}






if( $keep_troubleshooting == true )
{
	// if we couldn't read the nameservers from the whois information
	if( ! $whois_data_farmed['nameservers'] )
	{
		$dug_nameservers = dns_get_record($user_domain,DNS_NS);
		if( $dug_nameservers )
			foreach($dug_nameservers as $dug_nameservers_key => $dug_nameservers_value)
				if( $dug_nameservers_value['target'] )
					$whois_data_farmed['nameservers'][] = $dug_nameservers_value['target'];
			
	}
        if( $whois_data_farmed['nameservers'] )
	{
		if	(
				(count($whois_data_farmed['nameservers']) == 2) AND
				($whois_data_farmed['nameservers'][0] == "ns.inmotionhosting.com" OR $whois_data_farmed['nameservers'][0] == "ns2.inmotionhosting.com") AND
				($whois_data_farmed['nameservers'][1] == "ns.inmotionhosting.com" OR $whois_data_farmed['nameservers'][1] == "ns2.inmotionhosting.com")
			)
		{
			echo "<div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:green;'>&#x2713;</span> <strong>Nameservers</strong></div>";
		}
		else
		{
			echo "
				<div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:blue;'>?</span> <strong>Nameservers</strong></div>
       	                        <div>Your nameservers are not pointing to InMotion Hosting's nameservers. If your A records are pointing to our servers, this may not be a problem.</div>
			";
		}

		echo "<div style='padding-left:30px;'>We currently see your nameservers set to:</div>";
		foreach($whois_data_farmed['nameservers'] as $ns_key => $ns_value)
		{
			echo "<li style='padding-left:30px;'>";
			if( strtolower($ns_value) == "ns.inmotionhosting.com" OR strtolower($ns_value) == "ns2.inmotionhosting.com" )
				echo "<span style='font-weight:bold; color:green;'>&#x2713;</span> ";
			else
				echo "$yellow_warning_span ";
			echo htmlspecialchars($ns_value,ENT_QUOTES) . "</li>";
		}
	}
}






if( $keep_troubleshooting == true )
{
	echo "<div style='font-size:14px; margin-top:15px;'><strong>A Records</strong> <em>(IP Addresses)</em> - <strong>Hostname</strong></div>";
	$a_records = dns_get_record($user_domain, DNS_A);
	if( $a_records )
	{
		foreach($a_records as $a_record_key => $a_record_value)
		{
			$ip_address = $a_record_value['ip'];
			$get_whois_for_ip = exec("whois $ip_address",$ip_whois_array);
				$ip_is_imh = false;
				foreach($ip_whois_array as $ip_whois_array_key => $ip_whois_array_value)
					if( substr_count(strtolower($ip_whois_array_value),"inmotion") > 0 )
						$ip_is_imh = true;
			$this_ip_hostname = gethostbyaddr($ip_address);
			echo "<div style='padding-left:30px;'>Your domain name appears to be pointing to the following ip address / host:</div>";
			echo "<li style='padding-left:30px;'>";
			if( $ip_is_imh == true )
				echo "<span style='font-weight:bold; color:green;'>&#x2713;</span> ";
			else
				echo "<span style='font-weight:bold; color:red;'>&#x2717;</span> ";
			echo htmlspecialchars($ip_address,ENT_QUOTES) . " - " . htmlspecialchars($this_ip_hostname,ENT_QUOTES) . "</li>";
		}
	}
}






if( $keep_troubleshooting == true )
echo "  <h2 style='border-bottom:1px solid #ddd;'>Server Tests</h2>";






if( $keep_troubleshooting == true AND $ip_address )
{
	$apache_is_up = true;

	if(fsockopen($ip_address,80,$errno,$errstr,5))
		echo "
			<div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:green;'>&#x2713;</span> <strong>Apache</strong></div>
			<div>Apache appears to be running.</div>
		";	
	else
	{
		echo "
			<div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:red;'>&#x2717;</span> <strong>Apache</strong></div>
			<div>Apache does not appear to be running.</div>
		";
		$apache_is_up = false;
	}
	// echo "<pre> errno = $errno AND errstr = $errstr </pre>";

	if(fsockopen($ip_address,3306,$errno,$errstr,5))
                echo "
                        <div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:green;'>&#x2713;</span> <strong>MySQL</strong></div>
                        <div>MySQL appears to be running.</div>
                ";
        else
                echo "
                        <div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:red;'>&#x2717;</span> <strong>MySQL</strong></div>
                        <div>MySQL does not appear to be running.</div>
                ";
	// echo "<pre> errno = $errno AND errstr = $errstr </pre>";

	if( $apache_is_up == true )
	{
		// Get cURL resource
		$curl = curl_init();
		// Set some options - we are passing in a useragent too here
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => "http://$user_domain",
			CURLOPT_USERAGENT => 'InMotion Hosting Support Center',
			CURLOPT_HEADER => 1
		));
		// Send the request & save response to $resp
		$resp = curl_exec($curl);
			$exploded_resp = explode("\n",$resp);
				// echo "<pre>"; print_r($exploded_resp); echo "</pre>";
				$exploded_http_status = explode(" ",$exploded_resp[0]);
				$http_header['status'] = $exploded_http_status[1];
			for($resp_key = 0; $resp_key <= 20; $resp_key++)
			{
				if( $exploded_resp[$resp_key] )
				{
					if( substr_count($exploded_resp[$resp_key],"Location:") > 0 )
						$http_header['location'] = trim(str_replace("Location:","",$exploded_resp[$resp_key]));
				}
			}
		// Close request to clear up some resources
		curl_close($curl);
	}

	if( "check_status_page" == "check_status_page" )
	{
		// Get cURL resource
                $curl = curl_init();
                // Set some options - we are passing in a useragent too here
                curl_setopt_array($curl, array(
                        CURLOPT_RETURNTRANSFER => 1,
                        CURLOPT_URL => "http://status.inmotionhosting.com",
                        CURLOPT_USERAGENT => 'InMotion Hosting Support Center'
                ));
                // Send the request & save response to $resp
                $status_page_resp = curl_exec($curl);
                // Close request to clear up some resources
                curl_close($curl);
		if(	substr_count($status_page_resp,"No current issues to report.") == 3 AND
			substr_count($status_page_resp,"Normal") >= 3
			)
			echo "
        	                <div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:green;'>&#x2713;</span> <strong>Network Status</strong></div>
                	        <div>There appears to be no alerts on our <a href='http://status.inmotionhosting.com' target='_blank'>status page</a>.</div>
	                ";
		else
			echo "
				<div style='font-size:14px; margin-top:15px;'>$yellow_warning_span <strong>Network Status</strong></div>
				<div>There appears to be one or more alerts on our Network Status page. Please <a href='http://status.inmotionhosting.com' target='_blank'>click here</a> for more detail.</div>
			";
	}
}






if( $keep_troubleshooting == true AND $resp )
{
	if( substr_count($resp,"Website Coming Soon! Stay Tuned") > 0 )
	{
		$website_test_html .= "
			<div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:red;'>&#x2717;</span> <strong>Default Landing Page Showing</strong></div>
			<div>It appears our default landing page, \"Website Coming Soon! Stay Tuned\" is showing. For more information on removing this, please see <a href='/support/website/getting-started-guides/where-to-upload-files#coming-soon' target='_blank'>this page</a>.</div>
		";
	}
	if( substr_count($resp,"unavailable.html\">here") > 0 )
	{
		$website_test_html .= "
			<div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:red;'>&#x2717;</span> <strong>Active Account</strong></div>
			<div>It appears your account may be suspended. For further assistance with this, please see <a href='/support/website/website-unavailable/account-suspensions' target='_blank'>this page</a>.</div>
		";
	}

	if( substr_count($resp,"Sample Page</a>") > 0 AND substr_count($resp,"Hello world!</a>") > 0 )
		$website_test_html .= "
			<div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:blue;'>?</span> <strong>New WordPress Site</strong></div>
			<div>It looks like you may have a new installation of WordPress up and running! If you need some help learning the basics of WordPress, please <a href='/support/edu/wordpress/wordpress-introduction' target='_blank'>see our tutorials here</a>.</div>
		";

	if( $http_header['status'] == "303" AND $http_header['location'] )
		$website_test_html .= "
                        <div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:blue;'>?</span> <strong>Redirect Found</strong></div>
                        <div>What accessing <strong>http://$user_domain</strong>, we were 303 redirected to <strong>" . htmlspecialchars($http_header['location'],ENT_QUOTES) . "</strong>. If you're already familiar with this, it shouldn't be anything to worry about.</div>
                ";

	if( $http_header['status'] != "303" AND $http_header['status'] != "200" AND !$http_header['status'] )
		$website_test_html .= "
                        <div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:blue;'>?</span> <strong>HTTP Status</strong></div>
                        <div>What accessing <strong>http://$user_domain</strong>, we noticed the http status number returned was <strong>" . htmlspecialchars($http_header['status'],ENT_QUOTES) . "</strong>. If you're already familiar with this, it shouldn't be anything to worry about.</div>
                ";

	if( substr_count($resp,"<h1>Index of /</h1>") > 0 AND substr_count($resp,"<title>Index of /</title>") > 0 )
		$website_test_html .= "
                        <div style='font-size:14px; margin-top:15px;'><span style='font-weight:bold; color:blue;'>?</span> <strong>Index of</strong></div>
                        <div>We noticed <strong>http://$user_domain</strong> is returning an <em>Index of</em> page. If you'd like to learn more about this, please <a href='/support/website/getting-started-guides/where-to-upload-files' target='_blank'>click here</a>. If you're already familiar with this, it shouldn't be anything to worry about.</div>
                ";

	if( $website_test_html )
	{
		echo "	<h2 style='border-bottom:1px solid #ddd;'>Website Tests</h2>
			$website_test_html
		";
	}
}






} // END if($_GET['domain'])






?>






</div>
