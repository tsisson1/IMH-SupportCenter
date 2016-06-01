<?php

//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

// grab the domain from the url and perform security checks
$domain = trim($_GET['domain']);
if (! preg_match ("/^[a-z0-9][a-z0-9\-]+[a-z0-9](\.[a-z]{2,4})+$/i", $domain))
{
	$nogo= true;
	$domain = "";
}

?>

<div class='item-page'>
	<div class='page-header'>
		<h1>Where is my domain name routing?</h1>
	</div>

	<p>When troubleshooting a website issue, if you were to start at step 1, it would be checking to make sure that your domain name is registered and that the <a href='/support/domain-names/dns-nameserver-changes' target='_blank'>DNS is routing your domain name to the correct web server</a>.</p>

	<p>When checking the routing of a domain name, most professional use tools such as dig / <a href='/support/website/slow-websites/why-is-my-server-slow-how-do-i-run-a-ping-and-tracert-test' target='_blank'>ping / tracert</a>. For the average user that does not perform this type of test on a regular basis, connecting the dots to see how a domain name is routing can be quite difficult.</p>

	<p>To help everyone, we've created a tool that performs the necessary lookups that check where a domain name is routing, and it graphically displays this information for easy review.</p>

	Please enter a domain name below and click submit to see where your domain's website and email traffic is being routed to on the internet.<br />
	<form method='get' style='margin-bottom:20px;'>
		<div>
			<input type='text' name='domain' id='domain' value='<? echo $domain; ?>' style='width:200px;' />
			<input type='submit' value='Submit' class='btn btn-info' />
		</div>
		<div style='font-size:11px;'>Example: google.com<br />At this time, this script does not work with subdomains.</div>
	</form>

<?

if( $nogo )
{
	$domain= baddomain;
}

if( $_GET['domain'] )
{
	echo "	<div>(Click the image below to view a larger version)</div>
				<div><a href='" . JURI::base() . "modules/mod_visual_dig/visual_dig.php?domain=$domain' target='_blank' style='border:0px;' ><img src='" . JURI::base() . "modules/mod_visual_dig/visual_dig.php?domain=$domain' style='width:550px; border:0px;'></a></div>
	";
}
else
{
	echo "	<p>
					<strong>Want to see some cool examples, try the following!</strong><br />
					<a href='/support/tools/visual-domain-routing?domain=google.com'>google.com</a><br />
					<a href='/support/tools/visual-domain-routing?domain=yahoo.com'>yahoo.com</a><br />
					<a href='/support/tools/visual-domain-routing?domain=microsoft.com'>microsoft.com</a><br />
		</p>
		<p>
			<strong style='color:red;'>BETA!</strong> - If your website is down, this tool will help if the cause is due to a nameserver / IP address issue. We have a new tool that is in beta testing right now, referred to as our <strong>Domain Checker</strong> tool. The <em>Domain Checker</em> tool looks at more than just your nameserver settings, and for many users will be more helpful in diagnosing why their website may possibly be down. You can test this new tool <a href='/support/tools/domain-checker' target='_blank'>here!</a>
		</p>
	";
}





$list_this_visial_domain_routing_tool = return_div_with_social_buttons("Like this tool?",$this->document->base);


echo "		$list_this_visial_domain_routing_tool
	</div>"; // close the item-page class



?>
