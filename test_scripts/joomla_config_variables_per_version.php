<?

ini_set("display_errors", 1);

$conf["1.0.15"] = '
$mosConfig_offline = *0*;
$mosConfig_host = *localhost*;
$mosConfig_user = *db_user*;
$mosConfig_password = *db_pass*;
$mosConfig_db = *db*;
$mosConfig_dbprefix = *jos_*;
$mosConfig_lang = *english*;
$mosConfig_absolute_path = */home/userna5/public_html*;
$mosConfig_live_site = *http://yourdomain.com*;
$mosConfig_sitename = *Site Name Goes Here*;
$mosConfig_shownoauth = *0*;
$mosConfig_useractivation = *1*;
$mosConfig_uniquemail = *1*;
$mosConfig_offline_message = *This site is down for maintenance.
Please check back again soon.*;
$mosConfig_error_message = *This site is temporarily unavailable.
Please notify the System Administrator*;
$mosConfig_debug = *0*;
$mosConfig_lifetime = *900*;
$mosConfig_session_life_admin = *1800*;
$mosConfig_session_type = *0*;
$mosConfig_MetaDesc = *Joomla - the dynamic portal engine and content management system*;
$mosConfig_MetaKeys = *Joomla, joomla*;
$mosConfig_MetaTitle = *1*;
$mosConfig_MetaAuthor = *1*;
$mosConfig_locale = *en_GB*;
$mosConfig_offset = *0*;
$mosConfig_offset_user = *0*;
$mosConfig_hideAuthor = *0*;
$mosConfig_hideCreateDate = *0*;
$mosConfig_hideModifyDate = *0*;
$mosConfig_hidePdf = *0*;
$mosConfig_hidePrint = *0*;
$mosConfig_hideEmail = *0*;
$mosConfig_enable_log_items = *0*;
$mosConfig_enable_log_searches = *0*;
$mosConfig_enable_stats = *0*;
$mosConfig_sef = *0*;
$mosConfig_vote = *0*;
$mosConfig_gzip = *0*;
$mosConfig_multipage_toc = *1*;
$mosConfig_allowUserRegistration = *1*;
$mosConfig_link_titles = *0*;
$mosConfig_error_reporting = -1;
$mosConfig_list_limit = *30*;
$mosConfig_caching = *0*;
$mosConfig_cachepath = */home/userna5/public_html/cache*;
$mosConfig_cachetime = *900*;
$mosConfig_mailer = *mail*;
$mosConfig_mailfrom = *user@domain.com*;
$mosConfig_fromname = *Site Name Goes Here*;
$mosConfig_sendmail = */usr/sbin/sendmail*;
$mosConfig_smtpauth = *0*;
$mosConfig_smtpuser = **;
$mosConfig_smtppass = **;
$mosConfig_smtphost = *localhost*;
$mosConfig_back_button = *1*;
$mosConfig_item_navigation = *1*;
$mosConfig_secret = *s3ZJL6akojubS7el*;
$mosConfig_pagetitles = *1*;
$mosConfig_readmore = *1*;
$mosConfig_hits = *1*;
$mosConfig_icons = *1*;
$mosConfig_favicon = *favicon.ico*;
$mosConfig_fileperms = **;
$mosConfig_dirperms = **;
$mosConfig_helpurl = *http://help.joomla.org*;
$mosConfig_multilingual_support = *0*;
$mosConfig_editor = *tinymce*;
$mosConfig_admin_expired = *1*;
$mosConfig_frontend_login = *1*;
$mosConfig_frontend_userparams = *1*;
$mosConfig_itemid_compat = *0*;
';






$conf["1.5"] = '
var $offline = *0*;
var $offline_message = *This site is down for maintenance.<br /> Please check back again soon.*;
var $sitename = *Site Name Goes Here*;
var $editor = *tinymce*;
var $list_limit = *20*;
var $legacy = *0*;
/* Debug Settings */
var $debug = *0*;
var $debug_lang = *0*;
/* Database Settings */
var $dbtype = *mysql*;
var $host = *localhost*;
var $user = *db_user*;
var $password = *db_pass*;
var $db = *db_name*;
var $dbprefix = *jos_*;
/* Server Settings */
var $secret = *gP5UyskyATHIBmzF*;
var $gzip = *0*;
var $error_reporting = *-1*;
var $helpurl = *http://help.joomla.org*;
var $xmlrpc_server = *1*;
var $ftp_host = *127.0.0.1*;
var $ftp_port = *21*;
var $ftp_user = **;
var $ftp_pass = **;
var $ftp_root = **;
var $ftp_enable = *0*;
/* Locale Settings */
var $offset = *0*;
var $offset_user = *0*;
/* Mail Settings */
var $mailer = *mail*;
var $mailfrom = *user@domain.com*;
var $fromname = *Site Name Goes Here*;
var $sendmail = */usr/sbin/sendmail*;
var $smtpauth = *0*;
var $smtpuser = **;
var $smtppass = **;
var $smtphost = *localhost*;
/* Cache Settings */
var $caching = *0*;
var $cachetime = *15*;
var $cache_handler = *file*;
/* Meta Settings */
var $MetaDesc = *Joomla! - the dynamic portal engine and content management system*;
var $MetaKeys = *joomla, Joomla*;
var $MetaTitle = *1*;
var $MetaAuthor = *1*;
/* SEO Settings */
var $sef = *0*;
var $sef_rewrite = *0*;
var $sef_suffix = *0*;
/* Feed Settings */
var $feed_limit = 10;
var $log_path = */home/userna5/public_html/logs*;
var $tmp_path = */home/userna5/public_html/tmp*;
/* Session Setting */
var $lifetime = *15*;
var $session_handler = *database*;
';






$conf["1.6"] = '
public $offline = *0*;
public $offline_message = *This site is down for maintenance.<br /> Please check back again soon.*;
public $sitename = *Site Name Goes Here*;
public $editor = *tinymce*;
public $list_limit = *20*;
public $access = *1*;
public $debug = *0*;
public $debug_lang = *0*;
public $dbtype = *mysqli*;
public $host = *localhost*;
public $user = *db_user*;
public $password = *db_pass*;
public $db = *db_name*;
public $dbprefix = *cnom6_*;
public $live_site = **;
public $secret = *HeVfojxfQFH5WNje*;
public $gzip = *0*;
public $error_reporting = *-1*;
public $helpurl = *http://help.joomla.org/proxy/index.php?option=com_help&keyref=Help{major}{minor}:{keyref}*;
public $ftp_host = *127.0.0.1*;
public $ftp_port = *21*;
public $ftp_user = **;
public $ftp_pass = **;
public $ftp_root = **;
public $ftp_enable = *0*;
public $offset = *UTC*;
public $offset_user = *UTC*;
public $mailer = *mail*;
public $mailfrom = *user@domain.com*;
public $fromname = *Site Name Goes Here*;
public $sendmail = */usr/sbin/sendmail*;
public $smtpauth = *0*;
public $smtpuser = **;
public $smtppass = **;
public $smtphost = *localhost*;
public $smtpsecure = *none*;
public $smtpport = *25*;
public $caching = *0*;
public $cache_handler = *file*;
public $cachetime = *15*;
public $MetaDesc = **;
public $MetaKeys = **;
public $MetaTitle = *1*;
public $MetaAuthor = *1*;
public $sef = *1*;
public $sef_rewrite = *0*;
public $sef_suffix = *0*;
public $unicodeslugs = *0*;
public $feed_limit = *10*;
public $log_path = */home/userna5/public_html/logs*;
public $tmp_path = */home/userna5/public_html/tmp*;
public $lifetime = *15*;
public $session_handler = *database*;
';





$conf["1.7"] = '
public $offline = *0*;
public $offline_message = *This site is down for maintenance.<br /> Please check back again soon.*;
public $sitename = *Site Name Goes Here*;
public $editor = *tinymce*;
public $list_limit = *20*;
public $access = *1*;
public $debug = *0*;
public $debug_lang = *0*;
public $dbtype = *mysqli*;
public $host = *localhost*;
public $user = *db_user*;
public $password = *db_pass*;
public $db = *db_name*;
public $dbprefix = *cnom6_*;
public $live_site = **;
public $secret = *aj9IlvptjH3twgdh*;
public $gzip = *0*;
public $error_reporting = *-1*;
public $helpurl = *http://help.joomla.org/proxy/index.php?option=com_help&keyref=Help{major}{minor}:{keyref}*;
public $ftp_host = *127.0.0.1*;
public $ftp_port = *21*;
public $ftp_user = **;
public $ftp_pass = **;
public $ftp_root = **;
public $ftp_enable = *0*;
public $offset = *UTC*;
public $offset_user = *UTC*;
public $mailer = *mail*;
public $mailfrom = *user@domain.com*;
public $fromname = *Site Name Goes Here*;
public $sendmail = */usr/sbin/sendmail*;
public $smtpauth = *0*;
public $smtpuser = **;
public $smtppass = **;
public $smtphost = *localhost*;
public $smtpsecure = *none*;
public $smtpport = *25*;
public $caching = *0*;
public $cache_handler = *file*;
public $cachetime = *15*;
public $MetaDesc = **;
public $MetaKeys = **;
public $MetaAuthor = *1*;
public $sef = *1*;
public $sef_rewrite = *0*;
public $sef_suffix = *0*;
public $unicodeslugs = *0*;
public $feed_limit = *10*;
public $log_path = */home/userna5/public_html/logs*;
public $tmp_path = */home/userna5/public_html/tmp*;
public $lifetime = *15*;
public $session_handler = *database*;
';





$conf["2.5"] = '
public $offline = *0*;
public $offline_message = *This site is down for maintenance.<br /> Please check back again soon.*;
public $display_offline_message = *1*;
public $offline_image = **;
public $sitename = *Site Name Goes Here*;
public $editor = *tinymce*;
public $captcha = *0*;
public $list_limit = *20*;
public $access = *1*;
public $debug = *0*;
public $debug_lang = *0*;
public $dbtype = *mysqli*;
public $host = *localhost*;
public $user = *db_user*;
public $password = *db_pass*;
public $db = *db_name*;
public $dbprefix = *cnom6_*;
public $live_site = **;
public $secret = *BK9W5YgX1CsDy2zE*;
public $gzip = *0*;
public $error_reporting = *default*;
public $helpurl = *http://help.joomla.org/proxy/index.php?option=com_help&keyref=Help{major}{minor}:{keyref}*;
public $ftp_host = *127.0.0.1*;
public $ftp_port = *21*;
public $ftp_user = **;
public $ftp_pass = **;
public $ftp_root = **;
public $ftp_enable = *0*;
public $offset = *UTC*;
public $offset_user = *UTC*;
public $mailer = *mail*;
public $mailfrom = *user@domain.com*;
public $fromname = *Site Name Goes Here*;
public $sendmail = */usr/sbin/sendmail*;
public $smtpauth = *0*;
public $smtpuser = **;
public $smtppass = **;
public $smtphost = *localhost*;
public $smtpsecure = *none*;
public $smtpport = *25*;
public $caching = *0*;
public $cache_handler = *file*;
public $cachetime = *15*;
public $MetaDesc = **;
public $MetaKeys = **;
public $MetaTitle = *1*;
public $MetaAuthor = *1*;
public $robots = **;
public $sef = *1*;
public $sef_rewrite = *0*;
public $sef_suffix = *0*;
public $unicodeslugs = *0*;
public $feed_limit = *10*;
public $log_path = */home/userna5/public_html/logs*;
public $tmp_path = */home/userna5/public_html/tmp*;
public $lifetime = *15*;
public $session_handler = *database*;
';





$conf["3.0"] = '
public $offline = *0*;
public $offline_message = *This site is down for maintenance.<br /> Please check back again soon.*;
public $display_offline_message = *1*;
public $offline_image = **;
public $sitename = *Site Name Goes Here*;
public $editor = *tinymce*;
public $captcha = *0*;
public $list_limit = *20*;
public $access = *1*;
public $debug = *0*;
public $debug_lang = *0*;
public $dbtype = *mysqli*;
public $host = *localhost*;
public $user = *db_user*;
public $password = *db_pass*;
public $db = *db_name*;
public $dbprefix = *gs82l_*;
public $live_site = **;
public $secret = *kV46ItSyS9DuRLeg*;
public $gzip = *0*;
public $error_reporting = *default*;
public $helpurl = *http://help.joomla.org/proxy/index.php?option=com_help&keyref=Help{major}{minor}:{keyref}*;
public $ftp_host = **;
public $ftp_port = **;
public $ftp_user = **;
public $ftp_pass = **;
public $ftp_root = **;
public $ftp_enable = **;
public $offset = *UTC*;
public $mailer = *mail*;
public $mailfrom = *user@domain.com*;
public $fromname = *Site Name Goes Here*;
public $sendmail = */usr/sbin/sendmail*;
public $smtpauth = *0*;
public $smtpuser = **;
public $smtppass = **;
public $smtphost = *localhost*;
public $smtpsecure = *none*;
public $smtpport = *25*;
public $caching = *0*;
public $cache_handler = *file*;
public $cachetime = *15*;
public $MetaDesc = *Site Description Goes Here*;
public $MetaKeys = **;
public $MetaTitle = *1*;
public $MetaAuthor = *1*;
public $MetaVersion = *0*;
public $robots = **;
public $sef = *1*;
public $sef_rewrite = *0*;
public $sef_suffix = *0*;
public $unicodeslugs = *0*;
public $feed_limit = *10*;
public $log_path = */home/userna5/public_html/logs*;
public $tmp_path = */home/userna5/public_html/tmp*;
public $lifetime = *15*;
public $session_handler = *database*;
';





$conf["3.1"] = '
public $offline = *0*;
public $offline_message = *This site is down for maintenance.<br /> Please check back again soon.*;
public $display_offline_message = *1*;
public $offline_image = **;
public $sitename = *Site Name Goes Here*;
public $editor = *tinymce*;
public $captcha = *0*;
public $list_limit = *20*;
public $access = *1*;
public $debug = *0*;
public $debug_lang = *0*;
public $dbtype = *mysqli*;
public $host = *localhost*;
public $user = *db_user*;
public $password = *db_pass*;
public $db = *db_name*;
public $dbprefix = *w3xkj_*;
public $live_site = **;
public $secret = *w6mMzG7gLfNlTQM0*;
public $gzip = *0*;
public $error_reporting = *default*;
public $helpurl = *http://help.joomla.org/proxy/index.php?option=com_help&keyref=Help{major}{minor}:{keyref}*;
public $ftp_host = **;
public $ftp_port = **;
public $ftp_user = **;
public $ftp_pass = **;
public $ftp_root = **;
public $ftp_enable = **;
public $offset = *UTC*;
public $mailer = *mail*;
public $mailfrom = *user@domain.com*;
public $fromname = *Site Name Goes Here*;
public $sendmail = */usr/sbin/sendmail*;
public $smtpauth = *0*;
public $smtpuser = **;
public $smtppass = **;
public $smtphost = *localhost*;
public $smtpsecure = *none*;
public $smtpport = *25*;
public $caching = *0*;
public $cache_handler = *file*;
public $cachetime = *15*;
public $MetaDesc = *Description Goes Here*;
public $MetaKeys = **;
public $MetaTitle = *1*;
public $MetaAuthor = *1*;
public $MetaVersion = *0*;
public $robots = **;
public $sef = *1*;
public $sef_rewrite = *0*;
public $sef_suffix = *0*;
public $unicodeslugs = *0*;
public $feed_limit = *10*;
public $log_path = */home/userna5/public_html/logs*;
public $tmp_path = */home/userna5/public_html/tmp*;
public $lifetime = *15*;
public $session_handler = *database*;
';





$conf["3.2"] = '
public $offline = *0*;
public $offline_message = *This site is down for maintenance.<br /> Please check back again soon.*;
public $display_offline_message = *1*;
public $offline_image = **;
public $sitename = *Site Name Goes Here*;
public $editor = *tinymce*;
public $captcha = *0*;
public $list_limit = *20*;
public $access = *1*;
public $debug = *0*;
public $debug_lang = *0*;
public $dbtype = *mysqli*;
public $host = *localhost*;
public $user = *db_user*;
public $password = *db_pass*;
public $db = *db_name*;
public $dbprefix = *mj58o_*;
public $live_site = **;
public $secret = *M4CoKReTb8RutGUo*;
public $gzip = *0*;
public $error_reporting = *default*;
public $helpurl = *http://help.joomla.org/proxy/index.php?option=com_help&keyref=Help{major}{minor}:{keyref}*;
public $ftp_host = **;
public $ftp_port = **;
public $ftp_user = **;
public $ftp_pass = **;
public $ftp_root = **;
public $ftp_enable = **;
public $offset = *UTC*;
public $mailonline = *1*;
public $mailer = *mail*;
public $mailfrom = *user@domain.com*;
public $fromname = *Site Name Goes Here*;
public $sendmail = */usr/sbin/sendmail*;
public $smtpauth = *0*;
public $smtpuser = **;
public $smtppass = **;
public $smtphost = *localhost*;
public $smtpsecure = *none*;
public $smtpport = *25*;
public $caching = *0*;
public $cache_handler = *file*;
public $cachetime = *15*;
public $MetaDesc = *Description Goes Here*;
public $MetaKeys = **;
public $MetaTitle = *1*;
public $MetaAuthor = *1*;
public $MetaVersion = *0*;
public $robots = **;
public $sef = *1*;
public $sef_rewrite = *0*;
public $sef_suffix = *0*;
public $unicodeslugs = *0*;
public $feed_limit = *10*;
public $log_path = */home/userna5/public_html/logs*;
public $tmp_path = */home/userna5/public_html/tmp*;
public $lifetime = *15*;
public $session_handler = *database*;
';



foreach($conf as $version => $version_config)
{
	$version_config = str_replace("\t"," ",$version_config);
	$version_config = str_replace("\r","\n",$version_config);
	$conf[$version] = $version_config;
}





foreach($conf as $version => $version_config)
{
	$exploded_config = explode("\n",$version_config);
	foreach($exploded_config as $config_line => $config_value)
	{
		$config_value_exploded_by_space = explode(" ",$config_value);
			foreach($config_value_exploded_by_space as $config_value_exploded_by_space_key => $config_value_exploded_by_space_value)
			{
				if($config_value_exploded_by_space_value)
				{
					if(substr_count($config_value_exploded_by_space_value,"\$") > 0 )
					{
						$updated_variable_name = str_replace("mosConfig_","",$config_value_exploded_by_space_value);
						$unique_variable[$updated_variable_name] = 1;
						$variable_in_version[$updated_variable_name][$version] = 1;
					}
				}
			}
	}
}
// echo "<pre>"; print_r($variable_in_version); echo "</pre>";





// ksort($unique_variable);
//echo "<h1>here</h1>";


echo "	<style>
		table#joomla_config th {font-weight:bold; background:#ddd; text-align:left; font-weight:normal;}
		table#joomla_config td.gr {background:#E5FFF3; text-align:center; color:green; font-weight:bold;}
		table#joomla_config td.re {background:#FFE6E5; text-align:center; color:red; font-weight:bold;}
		.rc {color:red; font-weight:bold}
		.gc {color:green; font-weight:bold}
	</style>
";


$joomla_version_th = "		<tr>\n			<th style='background:#aaa;text-align:center; font-weight:bold;'>Joomla Version</th>\n";
foreach($conf as $version => $version_config)
	$joomla_version_th .= "			<th style='background:#aaa;text-align:center; font-weight:bold;'>$version</th>\n";
$joomla_version_th .= "		</tr>\n";

$x = 1;

echo "	<table class='table' id='joomla_config'>
";
foreach($unique_variable as $variable => $variable_is_always_one)
{
	if( $x == 1)
		echo $joomla_version_th;
	$x++;
	if( $x == 11 )
		$x = 1;

	echo "		<tr>
			<th>$variable</th>\n";
	foreach($conf as $version => $version_config)
	{
		if( $variable_in_version[$variable][$version] != 1 )
			echo "			<td class='re'>&#x2717;</td>\n";
		else
			echo "			<td class='gr'>&#x2713;</td>\n";
	}
	echo "		</tr>\n";
}
echo "	</table>";

?>
