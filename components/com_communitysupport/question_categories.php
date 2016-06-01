<?

$document->setTitle("Community Support | InMotion Hosting");






// ----------------------------------------------------------------------------------
// print all of the parent categories
// ----------------------------------------------------------------------------------
// grab a listing of all parent categories

/*
$query = "SELECT * FROM #__question_categories WHERE `parent_id` = 0;";
$db->setQuery($query);
$parent_categories = $db->loadObjectList();
$parent_categories_count = count($parent_categories);
// setup some variables
$columns = 3;
$most_per_column = round($parent_categories_count / $columns) + 1;
// create the html that shows the categories
foreach($parent_categories as $pc_k => $pc_v)
{
	if( $pc_k < ($most_per_column) )
		$show_in_column = 1;
	elseif( $pc_k < ($most_per_column * 2) )
		$show_in_column = 2;
	else
		$show_in_column = 3;

	$column[$show_in_column] .= "\n<li><a href='" . JURI::base() . "community-support/" . $pc_v->alias . "'>" . $pc_v->title . "</a></li>\n";
}
// finally, print them
echo "<h2 style='border-bottom:1px solid #ddd;padding-bottom:5px;'>Question Categories</h2>";
foreach($column as $c_k => $c_v)
	echo "<ul style='float:left; width:175px; padding-right:20px;'>" . $c_v . "</ul>";
echo "<div style='clear:both;'></div>";
*/






// ----------------------------------------------------------------------------------
// print all of the parent categories
// ----------------------------------------------------------------------------------
if("enable" == "enable")
{
echo "
	<h2 style='border-bottom:1px solid #ddd;padding-bottom:5px;'>Question Categories</h2>

	<div style='float:left; width:212px; margin-right:15px;'>

		<h3 style='margin-top:0px;'>Getting Started</h3>

		<ul>

		        <li><a href='/support/community-support/getting-started-guides'>Getting Started Guides</a></li>

		        <li><a href='/support/community-support/new-customers'>New Customers</a></li>

		        <li><a href='/support/community-support/website-transfers'>Website Transfers</a></li>
		</ul>

		<h3>Account</h3>

		<ul>

			<li><a href='/support/community-support/billing'>Billing</a></li>

		</ul>

		<h3>Blogs and Content Management Systmes</h3>

		<ul>

			<li><a href='/support/community-support/drupal'>Drupal</a></li>

			<li><a href='/support/community-support/drupal-7'>Drupal 7</a></li>

			<li><a href='/support/community-support/joomla'>Joomla</a></li>

			<li><a href='/support/community-support/joomla-25'>Joomla 25</a></li>

			<li><a href='/support/community-support/joomla-3'>Joomla 3</a></li>

			<li><a href='/support/community-support/moodle'>Moodle</a></li>

			<li><a href='/support/community-support/phpbb'>Phpbb</a></li>

			<li><a href='/support/community-support/wordpress'>Wordpress</a></li>

			<li><a href='/support/community-support/wordpress-34'>Wordpress 3.4</a></li>

		</ul>

		<h3>Domain</h3>

		<ul>

			<li><a href='/support/community-support/dns-nameserver-changes'>Dns Nameserver Changes</a></li>

			<li><a href='/support/community-support/domain-names'>Domain Names</a></li>

			<li><a href='/support/community-support/registrations-and-transfers'>Registrations And Transfers</a></li>

			<li><a href='/support/community-support/ssl'>Ssl</a></li>

			<li><a href='/support/community-support/visual-domain-routing'>Visual Domain Routing</a></li>

		</ul>

	</div>

	<div style='float:left; width:212px; margin-right:15px;'>

		<h3 style='margin-top:0px;'>Ecommerce</h3>

		<ul>

			<li><a href='/support/community-support/cube-cart'>Cube Cart</a></li>

			<li><a href='/support/community-support/magento'>Magento</a></li>

			<li><a href='/support/community-support/opencart'>Opencart</a></li>

			<li><a href='/support/community-support/oscommerce'>Oscommerce</a></li>

			<li><a href='/support/community-support/prestashop-15'>Prestashop 15</a></li>

			<li><a href='/support/community-support/zen-cart'>Zen Cart</a></li>

		</ul>
	
		<h3><a href='/support/community-support/email'>Email</a></h3>

		<ul>

			<li><a href='/support/community-support/email-troubleshooting'>Email Troubleshooting</a></li>

			<li><a href='/support/community-support/email-client-setup'>Email Client Setup</a></li>

			<li><a href='/support/community-support/everything-email'>Everything Email</a></li>

			<li><a href='/support/community-support/fighting-spam'>Fighting Spam</a></li>

			<li><a href='/support/community-support/horde-webmail'>Horde Webmail</a></li>

			<li><a href='/support/community-support/iphone'>Iphone</a></li>

			<li><a href='/support/community-support/send-email-from-a-page'>Send Email From A Page</a></li>

			<li><a href='/support/community-support/mailing-lists'>Mailing Lists</a></li>

			<li><a href='/support/community-support/outlook'>Outlook</a></li>

			<li><a href='/support/community-support/phplist'>Phplist</a></li>

			<li><a href='/support/community-support/roundcube-webmail'>Roundcube Webmail</a></li>

			<li><a href='/support/community-support/thunderbird'>Thunderbird</a></li>

		</ul>

		<h3>FTP & <a href='/support/community-support/file-management'>File Management</a></h3>

		<ul>

			<li><a href='/support/community-support/cyberduck'>Cyberduck</a></li>

		</ul>

		<h3>Website Builders</h3>

		<ul>

		        <li><a href='/support/community-support/dreamweaver'>Dreamweaver</a></li>

		        <li><a href='/support/community-support/frontpage'>Frontpage</a></li>

		        <li><a href='/support/community-support/iweb'>Iweb</a></li>

		        <li><a href='/support/community-support/microsoft-publisher'>Microsoft Publisher</a></li>

		        <li><a href='/support/community-support/soho-web-builder'>Soho Web Builder</a></li>

		</ul>

        </div>

	<div style='float:right; width:212px;'>

		<h3 style='margin-top:0px;'>Our Software and Tools</h3>

		<ul>

			<li><a href='/support/community-support/premium-website-builder'>Premium Website Builder</a></li>

			<li><a href='/support/community-support/cpanel'>Cpanel</a></li>

			<li><a href='/support/community-support/whm'>Whm</a></li>

		</ul>

		<h3>Server</h3>

		<ul>

			<li><a href='/support/community-support/general-server-setup'>General Server Setup</a></li>

			<li><a href='/support/community-support/server-usage'>Server Usage</a></li>

		</ul>

		<h3><a href='/support/community-support/website'>Website</a></h3>

		<ul>

			<li><a href='/support/community-support/databases'>Databases</a></li>

			<li><a href='/support/community-support/google-tools'>Google Tools</a></li>

			<li><a href='/support/community-support/how-to'>How To</a></li>

			<li><a href='/support/community-support/html5'>Html5</a></li>

			<li><a href='/support/community-support/website-design'>Website Design</a></li>

			<li><a href='/support/community-support/website-troubleshooting'>Website Troubleshooting</a></li>

		</ul>
	
		<h3>Other</h3>

		<ul>

			<li><a href='/support/community-support/blacklist-check'>Blacklist Check</a></li>

			<li><a href='/support/community-support/edu'>Edu</a></li>

			<li><a href='/support/community-support/general-information'>General Information</a></li>	

			<li><a href='/support/community-support/image-editing'>Image Editing</a></li>

			<li><a href='/support/community-support/open-source'>Open Source</a></li>

			<li><a href='/support/community-support/python'>Python</a></li>

			<li><a href='/support/community-support/resources'>Resources</a></li>

			<li><a href='/support/community-support/team'>Team</a></li>

			<li><a href='/support/community-support/tools'>Tools</a></li>

		</ul>

        </div>

	<div style='clear:both;'></div>
";
}






?>
