<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers');

$this->document->setTitle("Support Center | InMotion Hosting");

// JHtml::_('behavior.caption');
?>






<?
	// 2013.07.16.1101 - bradm - a/b testing
	if( $_GET['hpex'] == 2 )
	{
?>
<div id='hp_ps' class='white_box' style='margin-bottom:15px;'>
        <h2 style='color:#000;'>Problem Solved.</h2>
	<div style='float:right; margin:0px 0px 15px 15px;'>
		<iframe width="210" height="157" src="//www.youtube.com/embed/rT-7S_9reFA?rel=0" frameborder="0" allowfullscreen></iframe>
		<div style='font-size:11px; line-height:14px; padding-top:4px;'>Watch this video and learn how to<br />use the Support Center to find help!</div>
	</div>
        <p>Here you can browse InMotion's extensive <a href="http://www.inmotionhosting.com/">web hosting</a> knowledge base including <a href="/support/website">Website Tutorials</a>, <a href="/support/email">Email Tutorials</a>, <a href="/support/domain-names">Domain Name Setup Info</a>, and our <a href='/support/billing'>Billing FAQ's</a>.</p>
        <p>You can also view tutorials in our <a href="/support/edu">Education Channels</a> or <a href="/support/community-support/ask-a-question">ask us a question</a> in our <a href="/support/community-support">Community Support</a> area.</p>
        <div style='clear:both;'></div>
</div>
<?
	}
	else
	{
?>
<div id='hp_ps' class='white_box' style='margin-bottom:15px;'>
	<h2 style='color:#000;'>Problem Solved.</h2>
	<p>Here you can browse InMotion's extensive <a href="http://www.inmotionhosting.com/">web hosting</a> knowledge base including <a href="/support/website">Website Tutorials</a>, <a href="/support/email">Email Tutorials</a>, <a href="/support/domain-names">Domain Name Setup Info</a>, and our <a href='/support/billing'>Billing FAQ's</a>.</p>
	<p style='margin-bottom:20px; padding-left:180px;'>You can also view tutorials in our <a href="/support/edu">Education Channels</a> or <a href="/support/community-support/ask-a-question">ask us a question</a> in our <a href="/support/community-support">Community Support</a> area.</p>
	<div style='clear:both;'></div>
</div>
<?
	}
?>






<?
if($_GET['test'] == "5" OR "enable" == "enable")
{
?>
<div class='white_box' style='margin-bottom:15px;'>
	<h2 style='color:#c52228;text-align:center;'>Frequently Asked Questions</h2>
	<ul style='float:left;'>
		<strong>Websites</strong>
		<li><a href='/support/website/file-management/getting-started-guide-ftp'>FTP Settings</a></li>
		<li><a href='/support/website/getting-started-guides/where-to-upload-files'>Where to upload files?</a></li>
		<li><a href='/support/edu/wordpress'>WordPress Tutorials</a></li>
		<li><a href='/support/edu/cpanel/softaculous/how-to-install'>Install WordPress</a></li>
		<li><a href='/support/edu/cpanel/softaculous'>Install other software</a></li>
	</ul>
	<ul style='float:left;'>
		<li style='visibility:hidden;'></li>
		<li><a href='/support/edu/cpanel/getting-started-cpanel/how-to-log-into-cpanel'>cPanel Login</a></li>
		<li><a href='/support/domain-names/registrations-and-transfers/add-another-domain-name-account'>Add a new website</a></li>
		<li><a href='/support/website/ssl/how-do-i-obtain-an-ssl-certificate'>SSL</a></li>
		<li><a href='/support/website/new-customers/website-security'>Website Security</a></li>
	</ul>
	<ul style='float:left;'>
		<strong>Email</strong>
		<li><a href='/support/email/general-information/getting-started-guide-email'>Email Settings &<br />starting guide</a></li>
		<li><a href='/support/edu/everything-email/introduction-email/creating-email-account'>Create an email account</a></li>
		<li><a href='/support/email/email-troubleshooting/problems-sending-mail-receiving-is-fine'>I can't send email</a></li>
	</ul>
	<ul style='float:left;'>
		<li style='visibility:hidden;'></li>
		<li><a href='/support/edu/cpanel/cpanel-email/logging-into-webmail'>Webmail Login</a></li>
		<li><a href='/support/email/outlook'>Outlook</a></li>
		<li><a href='/support/email/mac-mail/set-up-mac-mail'>Mac Mail</a></li>
		<li><a href='/support/email/iphone/configure-iphone-email'>iPhone</a></li>
		<li><a href='/support/email/email-client-setup/setting-up-an-android-device-to-send-a-receive-email'>Android</a></li>
	</ul>
	<div style='clear:both;'></div>
	<ul>
		<strong>Domains:</strong>
		<li style='display:inline;'><a href='/support/domain-names/dns-nameserver-changes'>DNS &amp; Nameservers</a> / </li>
		<li style='display:inline;'><a href='/support/domain-names/registrations-and-transfers/transfer-domain-name-to-inmotion-hosting'>Transfer</a></li>
	</ul>
	
</div>
<?
}
?>






<div class='white_box' style='margin-bottom:15px;'>

	<div style='float:left; width:45%;'>
		<h2 class='hp_et'>Email Tutorials</h2>
		<p>All hosting accounts come with email addresses. Let's help get you setup!</p>
		<ul>
			<li><a href='/support/email/general-information/getting-started-guide-email'>Getting started with your Email</a></li>
			<li>
				<a onClick="jQuery('#what_software_check_email').slideToggle('slow');" style='cursor:pointer;'>What software will you use to check your email?</a>
				<ul id='what_software_check_email' style='display:none;'>
					<li><a href='/support/email/outlook/how-to-set-up-outlook-2010'>Outlook 2010</a></li>
					<li><a href='/support/email/outlook/creating-an-email-account-in-outlook-2007'>Outlook 2007</a></li>
					<li><a href='/support/email/outlook/creating-an-email-account-in-outlook-2003'>Outlook 2003</a></li>
					<li><a href='/support/email/outlook/creating-an-email-account-innoutlook-2002'>Outlook 2022</a></li>
					<li><a href='/support/email/mac-mail/set-up-mac-mail'>Mac Mail</a></li>
					<li><a href='/support/email/thunderbird/creating-an-email-account-in-thunderbird'>Thunderbird</a></li>
					<li><a href='/support/email/horde-webmail/logging-into-horde'>Webmail - Horde</a></li>
					<li><a href='/support/email/squirrelmail-webmail/logging-in-to-squirrelmail'>Webmail - Squirrel</a></li>
					<li><a href='/support/email/roundcube-webmail'>Webmail Roundcube'></a></li>
					<a class='hide_this_list' onClick="jQuery('#what_software_check_email').slideToggle('slow');" style='cursor:pointer;'>Hide this list</a>
				</ul>
			</li>
			<li>
				<a onClick="jQuery('#email_troubleshooting').slideToggle('slow');" style='cursor:pointer;'>Troubleshooting a problem with your email?</a>
				<ul id='email_troubleshooting' style='display:none;'>
					<li><a href='/support/email/email-troubleshooting/problems-sending-mail-receiving-is-fine'>I cannot send email</a></li>
					<li><a href='/support/email/email-troubleshooting/problems-receiving-email'>I cannot receive email</a></li>
					<li><a href='/support/email/email-troubleshooting/what-to-do-if-an-email-is-returned'>I sent an email and it was returned to me</a></li>
					<li><a href='/support/email/email-troubleshooting/typical-email-error-messages'>Email error messages</a></li>
					<a class='hide_this_list' onClick="jQuery('#email_troubleshooting').slideToggle('slow');" style='cursor:pointer;'>Hide this list</a>
				</ul>
			</li>
		</ul>
		<a style='display:block; text-align:right;' href='/support/email'>More Email Support</a>
	</div>

	<div style='float:right; width:45%;'>
        	<h2 class='hp_wt'>Website Tutorials</h2>
		<p>Our servers can run a wide array of software, including WordPress, Joomla, and Drupal.</p>
		<ul>
			<li><a href='/support/website/new-customers/new-customer-website-getting-started-guide'>Getting started with creating a new or transferring your existing website</a></li>
			<li>
				<a onClick="jQuery('#tutorials_by_application').slideToggle('slow');" style='cursor:pointer;'>Tutorials organized by application</a>
				<ul id='tutorials_by_application' style='display:none;'>
					<li><a href='/support/edu/premium-website-builder'>Premium Website Builder</a></li>
					<li><a href='/support/edu/wordpress'>WordPress</a></li>
					<li><a href='/support/edu/joomla-25'>Joomla 2.5</a></li>
					<li><a href='/support/edu/drupal-7'>Drupal 7</a></li>
					<li><a href='/support/edu/drupal-8'>Drupal 8</a></li>
					<li><a href='/support/website/iweb/publish-iweb'>iWeb</a></li>
					<li><a href='/support/website/frontpage'>FrontPage</a></li>
					<li><a href='/support/website/dreamweaver/getting-started-guide-dreamweaver'>Dreamweaver</a></li>
					<a class='hide_this_list' onClick="jQuery('#tutorials_by_application').slideToggle('slow');" style='cursor:pointer;'>Hide this list</a>
				</ul>
			</li>
			<li>
				<a onClick="jQuery('#common_website').slideToggle('slow');" style='cursor:pointer;'>Common Website To Do's</a>
				<ul id='common_website' style='display:none;'>
					<li><a href='/support/website/ssl/how-do-i-obtain-an-ssl-certificate'>Get setup with an SSL Certificate</a></li>
					<li><a href='/support/website/website-troubleshooting/why-is-my-website-down'>Troubleshoot a website that is down</a></li>
					<li><a href='/support/website/website-troubleshooting'>Find out what's causing an error number / message</a></li>
					<li><a href='/support/website/website-troubleshooting/i-think-my-website-has-been-hacked'>Look into a possible website hack</a></li>
					<li><a href='/support/website/website-troubleshooting/restoring-a-backup'>Request files be restored from backup</a></li>
					<a class='hide_this_list' onClick="jQuery('#common_website').slideToggle('slow');" style='cursor:pointer;'>Hide this list</a>
				</ul>
			</li>
			<li>Interested in <a href='/support/website/general-server-setup/what-is-shell-access'>ssh access</a> or <a href='/support/website/general-server-setup/root-access-faq'>root access?</a></li>
			<li>Have questions about your <a href='/support/website/how-to/how-to-upgrade-php-version'>php version</a>, <a href='/support/website/general-server-setup/update-local-php-settings'>php settings</a>, or <a href='/support/website/general-server-setup/different-version-of-phpmysql'>MySQL version</a>?</li>
		</ul>
		<a style='display:block; text-align:right;' href='/support/website'>More Website Support</a>
	</div>

	<div style='clear:both;'></div>

</div>

<div class='white_box' style='margin-bottom:15px;'>

	<div style='float:left; width:45%;'>
        	<h2 class='hp_dn'>Domain Names</h2>
		<p>We offer registration of new domain names, and we can help transfer your current domain name too.</p>
		<ul>
			<li><a href='/support/domain-names/registrations-and-transfers/registering-a-new-domain-name'>Register a new Domain</a></li>
			<li><a href='/support/domain-names/registrations-and-transfers/transfer-domain-name-to-inmotion-hosting'>Transfer a current Domain</a></li>
			<li><a href='/support/domain-names/registrations-and-transfers/add-another-domain-name-account'>Configuring a new Domain within your cPanel</a></li>
			<li><a href='/support/domain-names/dns-nameserver-changes'>Updating your nameservers</a></li>
		</ul>
		<a style='display:block; text-align:right;' href='/support/domain-names'>More Domain Name Support</a>
	</div>

	<div style='float:right; width:45%;'>
	        <h2 class='hp_cs'>Community Support</h2>
		<p>Ask questions and receive help from the community.</>
		<ul>
			<li><a href='/support/community-support'>Browse Questions</a></li>
			<li><a href='/support/community-support/ask-a-question'>Ask a Question</a></li>
		</ul>
		<a style='display:block; text-align:right;' href='/support/community-support'>Community Support Homepage</a>
	</div>

	<div style='clear:both;'></div>

</div>

<div class='white_box' style='margin-bottom:15px;'>
	<h2 class='hp_ec'>Education Channels</h2>
	<p>Work step by step and get things done right the first time! Browse our Education Channels and view ground level courses to more advanced topics.</p>
	<ul style='width:175px; float:left; margin-right:15px;'>
		<li><a href='/support/edu/everything-email'>All things Email</a></li>
		<li><a href='/support/edu/cpanel'>cPanel</a></li>
		<li><a href='/support/edu/dokuwiki'>DokuWiki</a></li>
		<li><a href='/support/edu/drupal-7'>Drupal 7</a></li>
		<li><a href='/support/edu/drupal-8'>Drupal 8</a></li>
                <li><a href='/support/edu/joomla-25'>Joomla 2.5</a></li>
		<li><a href='/support/edu/joomla-3'>Joomla 3.1</a></li>
		<li><a href='/support/edu/magento'>Magento 1.6</a></li>
		<li><a href='/support/edu/mambo'>Mambo</a></li>
	</ul>
	<ul style='width:175px; float:left; margin-right:15px;'>
		<li><a href='/support/edu/mediawiki'>MediaWiki</a></li>
		<li><a href='/support/edu/moodle'>Moodle</a></li>
		<li><a href='/support/edu/movable-type'>Movable Type</a></li>
		<li><a href='/support/edu/opencart'>OpenCart</a></li>
		<li><a href='/support/edu/oscommerce'>osCommerce</a></li>
		<li><a href='/support/edu/php-fusion'>PHP-Fusion</a></li>
		<li><a href='/support/edu/php-nuke'>PHP-Nuke</a></li>
		<li><a href='/support/edu/phpbb'>phpBB</a></li>
		<li><a href='/support/edu/phplist'>phpList</a></li>
	</ul>
	<ul style='width:175px; float:left; margin-right:15px;'>
		<li><a href='/support/edu/premium-website-builder'>Premium Website Builder</a></li>
		<li><a href='/support/edu/prestashop-15'>PrestaShop 1.5</a></li>
		<li><a href='/support/edu/smf'>SMF</a></li>
		<li><a href='/support/edu/tiki-wiki'>TikiWiki</a></li>
		<li><a href='/support/edu/whm'>Web Host Manager</a></li>
		<li><a href='/support/edu/website-design'>Website Design</a></li>
		<li><a href='/support/edu/wordpress'>WordPress</a></li>
	</ul>
	<a href='/support/edu' style='display:block; text-align:right; clear:both;'>Education Channels Homepages</a>
</div>

<div class='white_box' style='margin-bottom:15px;'>
	<h2 class='hp_tr'>Tools and Resources</h2>
	<p>Unique tools and helpful resources can save you time and money when it comes to running your website. Below are a few tools and resources that are sure to come in handy!</p>
		<div style='float:left; margin-right:15px;'>
			<strong>Tools</strong>
			<ul>
				<li><a href='/support/tools/blacklist-check'>Blacklist Checker</a></li>
				<li><a href='/support/tools/visual-domain-routing'>Visual Domain Routing Tool</a></li>
				<li><a href='/support/tools/quicktagger'>InMotion Hosting Quick Tagger</a></li>
				<li><a href='/support/tools/bounce-back-parser'>Bounce Back Parser</a></li>
				<a href='/support/tools'>More Tools</a>
			</ul>
		</div>
		<div style='float:left;'>
			<strong>Resources</strong>
			<ul>
				<li><a href='/support/resources/icons'>Icon Sets</a></li>
				<a href='/support/resources'>More Resources</a>
			</ul>
		</div>

	<div style='clear:both;'></div>
</div>






<?

	// 2013.08.05.1038 - old code for video popup on homepage
	/*
	$session = JFactory::getSession();

	$visited_sc_hp_before = $session->get('schp_visit');

	if( $visited_sc_hp_before != true )
	{
		echo "
		<a href='#video_how_to_use_sc' name='link_to_video_how_to_use_sc' id='link_to_video_how_to_use_sc'></a>

		<div style='display:none;'>
			<div style='width:570px; height:435px; background:#ddd; padding:4px;' id='video_how_to_use_sc'>
				<div style='text-align:center; font-size:20px; margin-bottom:15px;'>How can I use the Support Center?</div>
				<div style='margin-bottom:5px;'>Click play to learn how to get help using the Support Center, or, click the x at the top right to close this message. <span style='font-size:11px; color:#800000;'>Don't want to see this again? This is the only time we'll show this.</span></div>
				<div style='text-align:center;'>
					<iframe width='560' height='315' src='//www.youtube.com/embed/38p8Ds82FtM?rel=0' frameborder='0' allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<script type='text/javascript'>
			jQuery(document).ready(function() {
				jQuery('#link_to_video_how_to_use_sc').fancybox().trigger('click');
			});
		</script>
		";
	}

	$session->set('schp_visit',true);
	*/
?>
