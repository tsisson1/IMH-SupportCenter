<?





$step[2] = "What is the problem with email you're having?<br /><br />" . pl($ts,8,'I can\'t send email') . "<br />" .  pl($ts,9,'I\'m not receiving email') . "<br />" . pl($ts,7,'I sent an email but it was returned to me');

$step[3] = "What is the problem with your website?<br /><br />" . pl($ts,10,'My website is slow') . "<br />" . pl($ts,11,'My website is down / not working') . "<br /><a href='/support/website/hacks/i-think-my-website-has-been-hacked' target='_blank'>My website has been hacked</a>";

$step[4] = "What email client are you using?<br />" . pl($ts,6,'Outlook');

$step[5] = "Is the problem you're having with:<br />" . pl($ts,2,'Email') . " - " . pl($ts,3,'Website');

$step[6] = "OK, you cannot send email using outlook";

$step[7] = "If you sent an email but it was returned to you, that returned email explains why the message was bounced back to you. It can be difficult to interperet the message, so we recommend using our bounce back parser tool to do it for you.<br /><br /><a href='/support/tools/bounce-back-parser' target='_blank'>Click here to go to our bounce back parser tool</a>";

$step[8] = "If you can't send email, the most common reason is your ISP blocking port 25. We recommend setting your SMTP port to 587 and double checking the rest of your settings. For more help with updating your outgoing server settings, please see the following page:<br /><br /><a href='/support/email/email-troubleshooting/problems-sending-mail-receiving-is-fine' target='_blank'>Problems Sending Mail - Receiving is Fine</a>
";

$step[9] = "Being unable to send email can be caused by several different issues. We cover most of these in the following tutorial:<br /><br /><a href='/support/email/email-troubleshooting/problems-receiving-email' target='_blank'>Problems Receiving Email</a>";

$step[10] = "Slow websites can be caused by several different factors in your network, in our network, and anywhere between. We'll help you troubleshoot this problem in the following tutorial:<br /><br /><a href='/support/website/website-troubleshooting/why-is-my-server-slow-how-do-i-run-a-ping-and-tracert-test' target='_blank'>Why is my website slow?</a>";

$step[11] = "We're sorry that your website is down. Feel free to contact us immediately if this is an emergency, however we do have a guide available that may help you here:<br /><br /><a href='/support/website/website-troubleshooting/why-is-my-website-down' target='_blank'>Why is my website down?</a>";

$step[12] = "Are you getting an error <strong>number</strong>, such as 403 or 404? If so, please see the following tutorial series:<br /><a href='/support/website/error-numbers' target='_blank'>Website Error Numbers</a>";

$step[13] = "Just looking for some settings? Which ones?<br /><br />
<a href='/support/email/general-information/getting-started-guide-email' target='_blank'>Email</a> - 
<a href='/support/website/ftp/getting-started-guide' target='_blank'>FTP</a> - 
<a href='/support/domain-names/dns-nameserver-changes/updating-your-domains-nameservers' target='_blank'>Nameservers</a>
";

$step[14] = "What are you trying to login to?<br /><br />
<a href='/support/edu/cpanel/cpanel-email/logging-into-webmail' target='_blank'>Webmail</a> - 
<a href='/support/edu/cpanel/getting-started-cpanel/how-to-log-into-cpanel' target='_blank'>cPanel</a> - 
<a href='/support/website/how-to/how-to-log-into-amp' target='_blank'>AMP</a> - 
<a href='/support/edu/premium-website-builder/web-builder-building-first-website/builder-login' target='_blank'>Builder</a> - 
<a href='/support/website/ftp/getting-started-guide' target='_blank'>FTP</a>
";

$step[15] = "What type of information are you looking for?<br /><br />
" . pl($ts,16,'Billing') . " - " . pl($ts,17,'Email') . " - " .  pl($ts,19,'Website') . " - " . pl($ts,20,'Domain Names');

$step[16] = "Looking for billing related tutorials? Please see the following page:<br /><br /><a href='/support/billing'>Billing</a>";

$step[17] = "What are you trying to do with your email?<br /><br />
<div style='float:left; width:30%; margin-right:5px;'>
	<strong>Email Setup</strong><br />
	<a href='/support/edu/everything-email/introduction-email/creating-email-account' target='_blank'>Create an email account</a><br />
	" . pl($ts,18,'Check my email') . "
</div>
<div style='float:left; width:30%; margin-right:5px;'>
	<strong>Control your email</strong><br />
	<a href='/support/edu/everything-email/email-features/set-up-email-forwarder' target='_blank'>Email Forwarding</a><br />
	<a href='/support/website/cpanel/how-do-i-create-a-autoresponder-in-my-control-panel-cpanel' target='_blank'>Auto responders</a><br />
	<a href='/support/edu/everything-email/organizing-email/setting-up-email-filters' target='_blank'>Email Filters</a>
</div>
<div style='float:left; width:30%'>
	<strong>Modify DNS</strong><br />
	<a href='/support/edu/cpanel/cpanel-email/modfying-mx-records' target='_blank'>Update your MX Records</a><br />
	<a href='/support/email/fighting-spam/email-authentication-spf-domainkeys'>Setup SPF / DomainKeys</a>
</div>
<div style='clear:both;'></div>
";

$step[18] = "How would you like to check your email?<br /><br />
<a href='/support/edu/cpanel/cpanel-email/logging-into-webmail' target='_blank'>Webmail</a> - <a href='/support/email/outlook' target='_blank'>Outlook</a> - <a href='/support/email/mac-mail/set-up-mac-mail' target='_blank'>Mac Mail</a> - <a href='/support/email/thunderbird/creating-an-email-account-in-thunderbird' target='_blank'>Thunderbird</a> - <a href='/support/email/iphone/configure-iphone-email' target='_blank'>iPhone</a> - <a href='/support/email/ipad/setting-up-email-on-an-ipad' target='_blank'>iPad</a> - <a href='/support/email/email-client-setup/setting-up-an-android-device-to-send-a-receive-email' target='_blank'>Android phone</a> - <a href='/support/email/blackberry/configure-blackberry-email' target='_blank'>Blackberry</a>";

$step[19] = "What are you trying to do with your website?<br /><br />
<div style='float:left; width:30%; margin-right:5px;'>
	<strong>General info</strong><br />
	<a href='/support/edu/cpanel/softaculous/how-to-install' target='_blank'>Install Software</a><br />
	<a href='/support/edu/cpanel/cpanel-file-manager/backing-up-your-cpanel' target='_blank'>Backup</a> / <a href='/support/website/cpanel/restore-website-files-in-cpanel' target='_blank'>Restore</a> my website</a>
</div>
<div style='float:left; width:30%; margin-right:5px;'>
	<strong>New Customers</strong><br />
	<a href='/support/website/getting-started-guides/perform-your-own-website-transfer' target='_blank'>Transfer my website</a>
</div>
<div style='clear:both;'></div>
";

$step[20] = "What are you trying to do with your domain name?<br /><br />
<a href='/support/domain-names/registrations-and-transfers/registering-a-new-domain-name' target='_blank'>Register a new domain</a><br />
<a href='/support/domain-names/registrations-and-transfers/transfer-domain-name-to-inmotion-hosting' target='_blank'>Transfer an existing domain</a><br />
<a href='/support/domain-names/dns-nameserver-changes/change-domain-nameservers-amp' target='_blank'>Update your nameservers</a><br />
<a href='/support/domain-names/general-information/change-domains-whois-information-amp' target='_blank'>Change your Whois information</a>
";

$step[21] = "How can we help you today?<br /><br />
I need help " . pl($ts,5,'troubleshooting a problem') . "<br />
I'm looking for a " . pl($ts,15,'tutorial or some "how to" information') . "<br />
I just need some quick details, such as " . pl($ts,13,'settings') . " or " . pl($ts,14,'login information');

$step[22] = "Have you made any changes lately to your website/domain/cpanel, or has your website been working just fine recently?<br /><br />
I've made changes<br />" .
pl($ts,23,'My website has been working just fine');

$step[23] = "OK, so your website has been working just fine and has suddenly stopped working. Is your server listed as having any issues on our status page? <a href='http://status.inmotionhosting.com' target='_blank'>Click here to visit our status page, status.inmotionhosting.com</a><br /><br />" .
pl($ts,24,'Yes') . "<br />" .
pl($ts,25,'No');

$step[24] = "We are very sorry that your server is having a problem. We are aware of it and working to resolve the problem as quickly as we can. Please visit <a href='http://status.inmotionhosting.com' target='_blank'>our status page</a> to learn about any new updates to your server.";

$step[25] = "OK, so your website is having a problem and your server is not listed on our status page. Let's see if your domain name is registered. Are you getting an error similar to the following:?<br /><br />
<strong>Firefox</strong>: Server not found - Firefox can't find the server at...<br />
<strong>Chrome</strong>: Opps! Google Chrome could not find ...<br />
<strong>Internet Explorer</strong> This page can't be displayed - Make sure the web address ... is correct<br />
<strong>Safari</strong>: Failed to open page<br /><br />" .
pl($ts,26,'Yes, I am getting one of these errors') . "<br />
No, I am not getting one of these errors.
";

$step[26] = "Based on the error message, it appears that your domain name is not registered.<br /><br />
Because you stated your website was working just fine and just stopped working, most likely your domain name did not renew. To resolve this issue, please contact your domain's registrar and renew the domain.<br /><br />
If you registered your domain name through InMotion Hosting, <a href='/support/community-support/billing/renew-domain-2' target='_blank'>please click here</a> for further assistance.
";


?>
