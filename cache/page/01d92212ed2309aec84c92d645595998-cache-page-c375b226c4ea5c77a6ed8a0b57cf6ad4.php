<?php die("Access Denied"); ?>#x#a:3:{s:4:"body";s:182928:" 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
 <script src="/support/templates/supportcentertemplate/js/main.js?v=201605261319" type="text/javascript"></script>
<head>






  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width" />

		  <base href="http://www.inmotionhosting.com/support/website/backup-and-restore/restore-website-files-in-cpanel" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="last-modified" content="2015-10-06T16:36:25-07:00" />
  <meta name="keywords" content="restore website files partial home directory" />
  <meta name="author" content="Jacob Nicholson" />
  <meta name="description" content="In this article I'm going to show you how to restore a partial home directory backup in cPanel. This will allow you to restore your account's website and email files to a previous date when you last made a website backup." />
  <title>How to Restore a Home Directory Backup in cPanel - InMotion Hosting</title>
  <link href="http://www.inmotionhosting.com/support/website/backup-and-restore/restore-website-files-in-cpanel" rel="canonical" />
  <link rel="stylesheet" href="https://www.inmotionhosting.com/support/templates/supportcentertemplate/css/temp.css?v=2016053108" type="text/css" />
  <link rel="stylesheet" href="/support/media/jui/css/bootstrap-responsive.css?v=2016011214" type="text/css" />
  <link rel="stylesheet" href="http://www.inmotionhosting.com/support/modules/mod_slogin/tmpl/compact/slogin.css" type="text/css" />
  <script src="/support/media/jui/js/jquery.min.js" type="text/javascript"></script>
  <script src="/support/media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
  <script src="/support/media/jui/js/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="/support/media/jui/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="http://www.inmotionhosting.com/support/modules/mod_slogin/media/slogin.js" type="text/javascript"></script>
  <script type="text/javascript">
window.setInterval(function(){var r;try{r=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP")}catch(e){}if(r){r.open("GET","./",true);r.send(null)}},3600000);jQuery(document).ready(function(){
	 if ( jQuery.isFunction(jQuery.fn.tooltip) ) jQuery('.hasTooltip').tooltip({"html": true,"container": "body"});
});
  </script>



		



	<script type="text/javascript">
		(function() {
			var config = {
				kitId: 'tkh8ukm',
				scriptTimeout: 3000
			};
			var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script"),d=false;tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s)
		})();
	</script>






	
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1501988-22']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		





	





	<!-- GA Code - www.inmotionhosting.com -->
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-1501988-1']);
						
		_gaq.push(['_setCustomVar', 3, 'DateMonthModified', '2015-10', 3]);
		_gaq.push(['_setCustomVar', 4, 'DateMonthPublished', '2013-01', 3]);
		_gaq.push(['_setCustomVar', 5, 'Author', 'JacobN', 3]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>






		






	<link rel="shortcut icon" href="//imh01-inmotionhosting1.netdna-ssl.com/img/imh_favicon_hd.png" type="image/x-icon" />






	





	<!-- cid:931982c02b482d07e20c2e106e5028ba -->





	


<script src='https://www.google.com/recaptcha/api.js' async defer></script>

<!-- facebook pixel -->
<script>(function(){
   window._fbds = window._fbds || {};
   _fbds.pixelId = 411832918961118;
   var fbds = document.createElement('script');
   fbds.async = true;
   fbds.src = '//connect.facebook.net/en_US/fbds.js';
   var s = document.getElementsByTagName('script')[0];
   s.parentNode.insertBefore(fbds, s);
 })();
 window._fbq = window._fbq || [];
 window._fbq.push(["track", "PixelInitialized", {}]);
 </script>
 <noscript><img height="1" width="1" border="0" alt="" style="display:none"
 src="https://www.facebook.com/tr?id=411832918961118&amp;ev=NoScript"
 /></noscript>
 
 
 
<style>
@media all and (max-width: 1024px) {
    .main-sc-left { width:100%; }
}

</style> 
 
 
<style>
	div.item-page h2 {
		border:0px;
		font-size:20px;
		font-weight:bold;
	}
	div.item-page h3 {
		border:0px;
	}
	a.btn.small {
		font-size:12px;
		padding:0px 5px;
		text-transform:none;
	}
	
	button.btn.btn-success,
	input.btn.btn-success,
	a.btn.btn-success.small {
		box-shadow:0 3px 0 #387038;
	}
	.floatingNav { 
			display: none; 
			border: 2px solid;
			border-radius: 25px;
		}
</style>






</head>
<body>
<!-- Qualaroo for inmotionhosting.com -->
<!-- Paste this code right after the <body> tag on every page of your site. -->
<script type="text/javascript">
  var _kiq = _kiq || [];
  (function(){
    setTimeout(function(){
    var d = document, f = d.getElementsByTagName('script')[0], s = d.createElement('script'); s.type = 'text/javascript';
    s.async = true; s.src = '//s3.amazonaws.com/ki.js/56452/cuH.js'; f.parentNode.insertBefore(s, f);
    }, 1);
  })();
</script>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<link rel="stylesheet" href="/support/templates/supportcentertemplate/js/fancyBox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="/support/templates/supportcentertemplate/js/fancyBox/source/jquery.fancybox.pack.js?v=2.1.5"></script>


<script type="text/javascript">
                    var launchBoldChat = function() {
                window.open('https://www.inmotionhosting.com/support/launch-chat/?rdid=2324923566971164486&url=' + escape(document.location.href), 'Chat8718689652968401074', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width=640,height=650');

                        _gaq.push(['_setAccount', 'UA-1501988-22']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '27.125.180.17']);

                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'chat', 'launch', 'support center']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '27.125.180.17']);
                        trackAnchorClickSC("trackAnchorClickChatSC");
            }
        </script>


<!-- ClickTale Top part -->
<script type="text/javascript">
var WRInitTime=(new Date()).getTime();
</script>
<!-- ClickTale end of Top part -->



	<a name='top-of-page'></a>

<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <div id="skip">
    <a href="#main">Skip to Main Content</a>
    <a href="#nav">Skip to Navigation</a>
    </div>
  
<header role="banner">
        <div class="container">
            <div class="row">
                <a href="/" class="span3"><img class='imhLogo' src="//cdn.inmotionhosting.com/img/logo-imh.png" alt="InMotion Hosting" /></a>
		<div class="span6 offset3">
			<ul class="nav nav-pills nav-pills-contact pull-right contactListHeader">
				<li class="pull-right sales-label">Questions? Contact Support:</li>
				<li class="no-margin clear"><a class="no-margin chat" onclick="launchBoldChat();return false;" rel='nofollow'><i class="icon-chat"></i> Support Chat</a></li>                 <li class="no-margin"><a class="no-margin chat" href="/skype" onclick="window.open(this.href,'_blank', 'location=yes,height=500,width=600,scrollbars=no,status=yes'); return false;" rel='nofollow'><i style="height: 22px; width: 22px; margin-top: -2px;" class="icon-skype"></i>SKYPE</a></li>
				<li class="nav-pills-no-link no-margin"><i class="icon-phone"></i> 888.321.HOST(4678)</li>
			</ul>
		</div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-static-top">

            <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">WEB HOSTING<span class="caret"></span></a>
<ul class="dropdown-menu">
            <li><a href="http://www.inmotionhosting.com/business-hosting"><i class="dd icon-business"></i>BUSINESS HOSTING</a></li>
            <li><a href="http://www.inmotionhosting.com/vps-hosting"><i class="dd icon-vps"></i>VPS HOSTING</a></li>
            <li><a href="http://www.inmotionhosting.com/dedicated-servers"><i class="dd icon-dedi"></i>DEDICATED SERVERS</a></li>
            <li><a href="http://www.inmotionhosting.com/reseller-hosting"><i class="dd icon-reseller"></i>RESELLER HOSTING</a></li>
            <li><a href="http://www.inmotionhosting.com/wordpress-hosting">WORDPRESS HOSTING</a></li>
            <li><a href="http://www.inmotionhosting.com/managed-hosting">MANAGED HOSTING</a></li>
            <li><a href="http://www.inmotionhosting.com/premier-support">PREMIER SUPPORT &#8482;</a></li>
          </ul>
        </li> 
        <li><a href="http://www.inmotionhosting.com/domains">DOMAINS</a></li>
            <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">WEB DESIGN<span class="caret"></span></a>
<ul class="dropdown-menu">
        <li><a href="http://www.inmotionhosting.com/webdesign">WEB DESIGN SERVICES</a></li>
        <li><a href="http://www.inmotionhosting.com/boldgrid-website-builder">CREATE YOUR OWN WEBSITE</a></li>
</ul>
</li>
        <li><a href="http://www.inmotionhosting.com/site-hosting-tools">SITE HOSTING TOOLS</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MEET US<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://www.inmotionhosting.com/meet-us">MEET US</a></li>
            <li><a href="http://www.inmotionhosting.com/about-us">ABOUT US</a></li>
            <li><a href="http://www.inmotionhosting.com/partners-and-awards">AWARDS & PARTNERS</a></li> 
            <li><a href="http://www.inmotionhosting.com/blog">BLOG</a></li>
            <li><a href="http://www.inmotionhosting.com/employment">WE'RE HIRING</a></li>
            <li><a href="http://www.inmotionhosting.com/contact">CONTACT US</a></li>

         </ul>
        </li>
        <li style="float: right;"><a href="https://secure1.inmotionhosting.com/index/login"><i class="icon-amp-login"></i>AMP LOGIN</a></li>
 <li class="active" style="float: right;"><a href="http://www.inmotionhosting.com/support"><i class="icon-support-center"></i>SUPPORT CENTER</a></li>

      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


  
    <div id="main" class="main-container" role="main" style='background:#f9f9f9;'>

	<div style="background:url('//cdn.inmotionhosting.com/img/rednoise.gif');">
		<div class='container'>
			<img src='/support/templates/supportcentertemplate/images/logo.png.old?v=201507291301' class='MainLogo' usemap='#sclogo' />
			<map name='sclogo'><area shape='rect' coords='130,25,430,60' href='/support' alt='InMotion Hosting Support Center'></map>
			<form action="/support/search" method="get" class="form-inline red_header_dsf" id="search_in_header" name="search_in_header">
	 		<input name="searchword" id="mod-search-searchword" maxlength="80"  class="inputbox search-query" type="text" size="20" value="How may we help?"  onblur="if (this.value=='') this.value='How may we help?';" onfocus="if (this.value=='How may we help?') this.value='';" /> <button class="button btn btn-info" onclick="this.form.searchword.focus();" style='display:inline-block; width:80px; border-radius:3px; height:32px; line-height:22px; margin:0px;'>Search</button>
			 </form>
		</div>
	</div>

	<div class='container' style='background:#f3f3f3;'>
		<div style='margin:0px; margin-left:auto; margin-right:auto; position:relative;'>
			
<div id="menuWrap">
  <div id="menuWrapInner" class="container_12 clearfix">
  <div id="menu" class="width"> 
    <!--Begin Menu-->
    <ul id="menu">
<li class='home_item bc_with_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='/support/' itemprop='url'><span itemprop='title'>Support Center<span></a><div class='dropdown_3columns'>
<div class='col_1'>
    <a href='/support/product-guides'><h2>Product <br>Guides</h2></a>
    <ul>
    <li><a href='/support/product-guides/'>Business Hosting</a></li>
    <li><a href='/support/product-guides/'>VPS Hosting</a></li>
    <li><a href='/support/product-guides/dedicated-hosting'>Dedicated Hosting</a></li>
    <li><a href='/support/product-guides/reseller-hosting'>Reseller Hosting</a></li>
</ul>
</div>

<div class='col_1'>
	<h2>Knowledge<br />Base</h2>
	<ul>
		<li><a href='/support/website'>Website</a></li>
		<li><a href='/support/email'>Email</a></li>
		<li><a href='/support/domain-names'>Domain Names</a></li>
		<li><a href='/support/reseller'>Reseller</a></li>
		<li><a href='/support/billing'>Billing</a></li>
	</ul>
</div>

<div class='col_1'>
	<a href='/support/community-support'><h2>Community Support</h2></a>
	<ul>
		<li><a href='/support/community-support'>Browse Questions</a></li>
                <li><a href='/support/community-support/ask-a-question'>Ask a Question</a></li>
		<li><a href='/support/u' style='line-height:15px;'>User Submitted Articles</a></li>
	</ul>
</div>

<div class='col_3'>
        <a href='/support/edu'><h2>Education Channels</h2></a>
</div>
<div class='col_1'>
        <ul>
		<li><a href='/support/edu/android'>Android</a></li>
                <li><a href='/support/edu/boldgrid'>BoldGrid</a></li>

		<li><a href='/support/edu/cpanel'>cPanel</a></li>
		<li><a href='/support/edu/dokuwiki'>DokuWiki</a></li>
		<li><a href='/support/edu/drupal-7'>Drupal 7</a></li>
		<li><a href='/support/edu/drupal-8'>Drupal 8</a></li>
                <li><a href='/support/edu/everything-email'>Everything Email</a></li>
		<li><a href='/support/edu/joomla-25'>Joomla 2.5</a></li>
		<li><a href='/support/edu/joomla-3'>Joomla 3.1</a></li>
		<li><a href='/support/edu/k2'>K2</a></li>
		<li><a href='/support/edu/magento'>Magento 1.6</a></li>
        </ul>
</div>
<div class='col_1'>
        <ul>
		<li><a href='/support/edu/mambo'>Mambo</a></li>
                <li><a href='/support/edu/mediawiki'>MediaWiki</a></li>
		<li><a href='/support/edu/moodle'>Moodle</a></li>
		<li><a href='/support/edu/movable-type'>Movable Type</a></li>
		<li><a href='/support/edu/opencart'>OpenCart</a></li>
		<li><a href='/support/edu/opencart20'>OpenCart 2.0</a></li>
		<li><a href='/support/edu/oscommerce'>osCommerce</a></li>
		<li><a href='/support/edu/php-fusion'>PHP-Fusion</a></li>
		<li><a href='/support/edu/php-nuke'>PHP-Nuke</a></li>
		<li><a href='/support/edu/phpbb'>phpBB</a></li>
		<li><a href='/support/edu/phplist'>phpList</a></li>
        </ul>
</div>
<div class='col_1'>
        <ul>
		<li><a href='/support/edu/premium-website-builder'>Premium Website Builder</a></li>
                <li><a href='/support/edu/prestashop-15'>PrestaShop 1.5</a></li>
                <li><a href='/support/edu/prestashop-16'>PrestaShop 1.6</a></li>
                <li><a href='/support/edu/smf'>SMF</a></li>
                <li><a href='/support/edu/tiki-wiki'>Tiki Wiki</a></li>
                <li><a href='/support/edu/virtuemart-3'>VirtueMart 3</a></li>
		<li><a href='/support/edu/whm'>Web Hosting Manager</a></li>
		<li><a href='/support/edu/website-design'>Website Design</a></li>
                <li><a href='/support/edu/wordpress'>WordPress</a></li>
	</ul>
</div>

<div class='col_3'>
    <h2>Tools & Resources</h2>

<div class='col_1'>
	<ul>
		<li><a href='/support/tools/email-configuration'>Email Configuration</a></li>
		<li><a href='/support/tools/blacklist-check'>Blacklist Check</a></li>
		<li><a href='/support/tools/visual-domain-routing'>Visual DNS Lookup</a></li>
		<li><a href='/support/tools/quicktagger'>Quick Tagger</a></li>
    </ul>
</div>
<div class='col_1'>
    <ul>
		<li><a href='/support/resources/icons'>Icon Sets</a></li>
		<li><a href='/support/tools/favicon-generator'>Favicon Generator</a></li>
		<li><a href='/support/tools/bounce-back-parser'>Bounce Back Parser</a></li>
		<li><a href='/support/tools/what-is-my-ip-address'>What is my IP address?</a></li>
	</ul>
</div>
</div>
</div></li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_with_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='/support/website' itemprop='url'><span itemprop='title'>Website<span></a>
			<div class='dropdown_4columns'>
				<div class='col_2'><div><a href='/support/website/htaccess'>.htaccess</a> (17)</div><div><a href='/support/website/adobe-flash'>Adobe Flash</a> (2)</div><div><a href='/support/website/api'>APIs</a> (2)</div><div><a href='/support/website/backup-and-restore'>Backup and Restore</a> (15)</div><div><a href='/support/website/billing'>Billing</a> (8)</div><div><a href='/support/website/browser-issues'>Browser Issues</a> (2)</div><div><a href='/support/website/database-connections'>Connecting to a Database</a> (5)</div><div><a href='/support/website/cpanel'>cPanel</a> (26)</div><div><a href='/support/website/cpanel-account-management'>cPanel Account Management</a> (15)</div><div><a href='/support/website/cron-jobs'>Cron Jobs</a> (4)</div><div><a href='/support/website/cube-cart'>Cube Cart</a> (2)</div><div><a href='/support/website/database-setup'>Database Setup</a> (4)</div><div><a href='/support/website/database-troubleshooting'>Database Troubleshooting</a> (6)</div><div><a href='/support/website/domain-management'>Domain Management</a> (2)</div><div><a href='/support/website/dreamweaver'>Dreamweaver</a> (12)</div><div><a href='/support/website/drush'>Drush</a> (2)</div><div><a href='/support/website/ecommerce'>eCommerce</a> (7)</div><div><a href='/support/website/elasticsearch'>Elasticsearch</a> (4)</div><div><a href='/support/website/fantastico'>Fantastico</a> (4)</div><div><a href='/support/website/file-management'>File Management</a> (16)</div><div><a href='/support/website/file-manager'>File Manager</a> (6)</div><div><a href='/support/website/ftp'>FTP</a> (10)</div><div><a href='/support/website/ftp-client-setup'>FTP Client Setup</a> (21)</div><div><a href='/support/website/general-server-setup'>General Server Setup / Management</a> (15)</div><div><a href='/support/website/getting-started-guides'>Getting Started Guides</a> (18)</div><div><a href='/support/website/ghost'>Ghost</a> (3)</div><div><a href='/support/website/google-tools'>Google Tools</a> (21)</div><div><a href='/support/website/how-to'>How To</a> (22)</div><div><a href='/support/website/html'>HTML</a> (2)</div><div><a href='/support/website/image-editing'>Image Editing</a> (2)</div><div><a href='/support/website/ip-addresses'>IP Addresses</a> (3)</div><div><a href='/support/website/iweb'>iWeb</a> (1)</div><div><a href='/support/website/javascript'>JavaScript</a> (2)</div><div><a href='/support/website/joomla'>Joomla</a> (10)</div><div><a href='/support/website/joomla-25'>Joomla 2.5</a> (36)</div><div><a href='/support/website/koken'>Koken</a> (11)</div><div><a href='/support/website/linux'>Linux</a> (27)</div><div><a href='/support/website/logaholic'>Logaholic</a> (5)</div><div><a href='/support/website/magento'>Magento</a> (2)</div><div><a href='/support/website/maintain'>Maintaining Your Website</a> (1)</div><div><a href='/support/website/managing-files'>Managing Files</a> (7)</div><div><a href='/support/website/frontpage'>Microsoft FrontPage</a> (11)</div><div><a href='/support/website/microsoft-publisher'>Microsoft Publisher</a> (1)</div><div><a href='/support/website/modsecurity'>ModSecurity</a> (6)</div></div>
				<div class='col_2'><div><a href='/support/website/modx'>MODx</a> (3)</div><div><a href='/support/website/new-customers'>New Customers</a> (7)</div><div><a href='/support/website/open-classifieds'>Open Classifieds</a> (1)</div><div><a href='/support/website/pci-compliance'>PCI Compliance</a> (7)</div><div><a href='/support/website/php'>PHP</a> (15)</div><div><a href='/support/website/php-configuration'>PHP Configuration</a> (7)</div><div><a href='/support/website/php-troubleshooting'>PHP Troubleshooting</a> (6)</div><div><a href='/support/website/phpbb'>phpBB</a> (25)</div><div><a href='/support/website/phpmyadmin'>phpMyAdmin</a> (10)</div><div><a href='/support/website/pwb'>Premium Website Builder</a> (22)</div><div><a href='/support/website/prestashop'>Prestashop</a> (1)</div><div><a href='/support/website/protecting-files'>Protecting Files</a> (5)</div><div><a href='/support/website/publishing'>Publishing Your Site</a> (2)</div><div><a href='/support/website/python'>Python</a> (1)</div><div><a href='/support/website/redirects'>Redirects</a> (4)</div><div><a href='/support/website/restricting-bots'>Restricting Bots</a> (5)</div><div><a href='/support/website/seo'>Search Engine Optimization</a> (1)</div><div><a href='/support/website/ssl'>Secure Socket Layer (SSL) Tutorials</a> (12)</div><div><a href='/support/website/security'>Security</a> (12)</div><div><a href='/support/website/sending-email-from-site'>Sending Email From Websites</a> (2)</div><div><a href='/support/website/server-security'>Server Security</a> (2)</div><div><a href='/support/website/server-usage'>Server Usage</a> (21)</div><div><a href='/support/website/slow-websites'>Slow Websites</a> (7)</div><div><a href='/support/website/social-media'>Social Media</a> (4)</div><div><a href='/support/website/software'>Software FAQs</a> (11)</div><div><a href='/support/website/soho-web-builder'>Soho Web Builder</a> (18)</div><div><a href='/support/website/ssh'>SSH and Root access</a> (20)</div><div><a href='/support/website/stats-logging'>Statistics/Logging</a> (12)</div><div><a href='/support/website/comment-spam'>Troubleshooting Comment Spam</a> (3)</div><div><a href='/support/website/hacks'>Troubleshooting Hacked Websites</a> (9)</div><div><a href='/support/website/whm'>Web Host Manager</a> (7)</div><div><a href='/support/website/error-numbers'>Website Error Numbers</a> (4)</div><div><a href='/support/website/website-unavailable'>Website Is Unavailable</a> (3)</div><div><a href='/support/website/website-transfers'>Website Transfers</a> (6)</div><div><a href='/support/website/website-troubleshooting'>Website Troubleshooting</a> (26)</div><div><a href='/support/website/amp'>Welcome to AMP</a> (22)</div><div><a href='/support/website/what-is'>What Is...</a> (9)</div><div><a href='/support/website/woocommerce'>WooCommerce</a> (4)</div><div><a href='/support/website/wordpress'>WordPress</a> (102)</div><div><a href='/support/website/wordpress-development'>WordPress Development</a> (12)</div><div><a href='/support/website/wordpress-plugins'>Wordpress Plugins</a> (59)</div><div><a href='/support/website/wordpress-themes'>Wordpress Themes</a> (6)</div><div><a href='/support/website/databases'>Working with Databases</a> (15)</div><div><a href='/support/website/zen-cart'>Zen Cart</a> (8)</div><div><a href='/support/website/zend'>Zend</a> (4)</div></div>
			</div>
		</li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_with_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='/support/website/backup-and-restore' itemprop='url'><span itemprop='title'>Backup and Restore<span></a>
			<div class='dropdown_3columns' style='width:900px; margin-left:-250px;'>
				<div class='col_1' style='width:290px;'><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/backup-and-restore/restore-website-files-in-cpanel'>How to Restore a Home Directory Backup in cPanel</a> (47,316 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/backup-and-restore/restore-your-database-in-cpanel'>How to Restore a Database Backup in cPanel</a> (35,586 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/backup-and-restore/googles-cache-to-restore-web-page'>How to use Google's cache to restore a web page</a> (13,027 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/backup-and-restore/backup-database-ssh'>Backup / Export a Database from SSH</a> (5,085 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/backup-and-restore/backup-files'>Backup files</a> (3,418 hits)</div></div>
				<div class='col_1' style='width:290px;'><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/backup-and-restore/backup-your-database-in-cpanel'>Backup your database in cPanel</a> (42,199 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/backup-and-restore/restoring-a-backup'>Restoring a Backup</a> (33,419 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/backup-and-restore/automatic-remote-backup-service'>Automatic remote backup service</a> (7,878 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/backup-and-restore/configure-local-backups-in-whm'>Configure local backups in WHM</a> (4,649 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/backup-and-restore/email-alert-backup-limit-exceeded'>Send email alert when backup limit exceeded</a> (1,836 hits)</div></div>
				<div class='col_1' style='width:290px;'><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/backup-and-restore/backup-website-files-in-cpanel'>How to Backup your website files in cPanel</a> (39,242 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/backup-and-restore/do-you-run-backups-of-your-servers'>Do you run backups of your servers?</a> (16,575 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/backup-and-restore/backing-up-your-database'>Backing up your Database</a> (6,830 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/backup-and-restore/backup-a-file-before-editing'>Backup a file before editing</a> (3,437 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/backup-and-restore/restore-files'>Restore files</a> (1,015 hits)</div></div>
			</div>
		</li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_no_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><span itemprop='title'>How to Restore a Home Directory Backup in cPanel</span></li>			</ul>
		</div>
	</div>
</div>

		</div>
	</div>






<div class='container'>
	<div class='main-left-sc' name='sc_left' id='sc_left' style='max-width:705px;'>




		
		
		<div id="system-message-container">
	</div>

		<div class="item-page">
					
		<div class="page-header">
						<h1>
															How to Restore a Home Directory Backup in cPanel									</h1>
			
																
				
					<div style='font-size:12px; color:#aaa; margin-bottom:-10px; padding-top:5px;'>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Written by Jacob Nicholson</div>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Views:</span> <span name='page_views' id='page_views'>47,316</span></div>
							<div style='float:left; margin-right:20px;' title='Originally published: Jan 30, 2013'><span style='color:#606060;'>Published:</span> Oct 6, 2015</div>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Comments:</span> <a href='#comments'>49</a></div>
							<div style='clear:both;'></div>
						</div>
						</div>
		
	
		

	

								<center><iframe width="560" height="315" src="https://www.youtube.com/embed/8aYDm_iACA4" frameborder="0" allowfullscreen></iframe></center>
<p>In this article I'm going to show you how to restore a partial home directory backup in cPanel. This will allow you to restore your account's website and email files to a previous date when you last made a website backup.</p>
<p>This is good knowledge to have, so in case you've accidentally removed some files from your website, or deleted an important email, you can get those lost files back. It's also handy to <a href="/support/website/cpanel/backup-website-files-in-cpanel" target="_blank">backup website files</a> prior to upgrading software that runs your website, so that if anything goes wrong you can at least revert to the working old version again.</p>
<p class="alert">When you restore a partial home directory backup like we're creating covering below, this is going to overwrite any existing files currently on your account. So if you have a <strong>/public_html/index.htm</strong> file on your account, and the backup you created also has that file, the file from the backup will be restored over the current live file.<br /><br /> If you have a new file such as <strong>/public_html/index2.htm</strong> live on your website that didn't exist in the backup, or you've gotten new emails since you made your partial home directory backup, these files will not be overwritten during the restore.</p>
<h2>Restore home directory backup in cPanel</h2>
<p>Following the steps below you can learn how to restore a partial backup of your website including all the files in your home directory.</p>
<ol class="article_list">
<li><a href="/support/edu/cpanel/getting-started-cpanel/how-to-log-into-cpanel" target="”_blank”">Login to your cPanel</a>.</li>
<li style="clear: both;"><a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/website/cpanel/backup-database/cpanel-click-on-backups.png"><img src="//cdn.inmotionhosting.com/support/images/stories/website/cpanel/backup-database/cpanel-click-on-backups.png" alt="cpanel click on backups"  style="width: 275px; margin-left: 10px; position: relative; bottom: 15px; float: right;" /></a>Under the <strong>files</strong> section, click on <strong>Backups</strong>.</li>
<li style="clear: both;"><a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/website/cpanel/restore-home-directory/cpanel-backups-click-choose-file-select-backup-click-open.png"><img src="//cdn.inmotionhosting.com/support/images/stories/website/cpanel/restore-home-directory/cpanel-backups-click-choose-file-select-backup-click-open.png" alt="cpanel backups click choose file select backup click open"  style="width: 270px; margin-left: 10px; position: relative; bottom: 15px; float: right;" /></a>Under <strong>Restore a Home Directory Backup</strong>, click on <strong>Choose File</strong>.
<p>Next in the file browser pop-up, find your home directory backup file, click on it, then click on <strong>Open</strong>.</p>
</li>
<li style="clear: both;"><a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/website/cpanel/restore-home-directory/cpanel-backups-click-upload.png"><img src="//cdn.inmotionhosting.com/support/images/stories/website/cpanel/restore-home-directory/cpanel-backups-click-upload.png" alt="cpanel backups click upload"  style="width: 270px; margin-left: 10px; position: relative; bottom: 15px; float: right;" /></a>The name of your backup should now be displayed, so click on <strong>Upload</strong>.</li>
<li style="clear: both;"><a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/website/cpanel/restore-home-directory/cpanel-backups-home-directory-restore-completed.png"><img src="//cdn.inmotionhosting.com/support/images/stories/website/cpanel/restore-home-directory/cpanel-backups-home-directory-restore-completed.png" alt="cpanel backups home directory restore completed"  style="width: 270px; margin-left: 10px; position: relative; bottom: 15px; float: right;" /></a>You should then see the progress of your files being restored.</li>
</ol>
<p style="clear: both;">You should now know how to restore your website files from a partial home directory backup in cPanel that you've previously made.</p>
<p>You will also want to read my articles on how to <a href="/support/website/cpanel/backup-your-database-in-cpanel" target="_blank">backup your database in cPanel</a>, and <a href="/support/website/cpanel/restore-your-database-in-cpanel" target="_blank">restore your database in cPanel</a>&nbsp;to get a better understanding of how cPanel handles restoring the different parts of your website.</p> 
	
						 </div>

	






	<a name='like_this_article'></a>
		<div style='position:relative;margin:25px 0px;'>
			<div style='border-top:1px solid #ccc;border-bottom:1px solid #ccc; height:5px;'></div>
			<div style='background:#f9f9f9;margin-top:-14px;display:inline-block;margin-left:200px;padding:0px 0px 0px 25px;'>
				
<div style='display:inline-block;'>
	<a href='https://twitter.com/share' class='twitter-share-button' data-via='inmotionhosting'>Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>
</div>

				
<div style='display:inline-block;'>
	<iframe src='//www.facebook.com/plugins/like.php?href=http://www.inmotionhosting.com/support/website/backup-and-restore/restore-website-files-in-cpanel&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=209145459223160' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:100px; height:21px;' allowTransparency='true'></iframe>
</div>

	                        
<div style='display:inline-block;'>
	<div class='g-plusone' data-size='medium' data-href='http://www.inmotionhosting.com/support/website/backup-and-restore/restore-website-files-in-cpanel'></div>
	<script type='text/javascript'>
	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/plusone.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>
</div>

			</div>
		</div>
	
	</div>
	<div name='sc_right' id='sc_right'>
                <div class="moduletable" style='display:none;' name='latest_news' id='latest_news'>
       	                <h3>News / Announcements</h3>
               	        <div name='latest_news_items' id='latest_news_items'>
                       	</div>
                </div>
                
                		<div class="moduletable">
							<h3>Support Center Login</h3>
						<form action="/support/component/users?task=user.login" method="post" id="login-form" class="form-inline">
		<div class="userdata">
		<div id="form-login-username" class="control-group">
			<div class="controls">
									<div class="input-prepend input-append">
						<span class="add-on">
							<label for="modlgn-username" class="element-invisible">Username</label>
						</span>
						<input id="modlgn-username" type="text" name="username" class="input-small" tabindex="0" size="18" placeholder="Username" />
					</div>
							</div>
		</div>
		<div id="form-login-password" class="control-group">
			<div class="controls">
									<div class="input-prepend input-append">
						<span class="add-on">
								<label id="modlgn-passwd-label" for="modlgn-passwd" class="element-invisible">Password							</label>
						</span>
						<input id="modlgn-passwd" type="password" name="password" class="input-small" tabindex="0" size="18" placeholder="Password" />
				</div>
				
			</div>
		</div>
				<div id="form-login-remember" class="control-group checkbox">
			<label for="modlgn-remember" style="line-height:19px" class="control-label">Remember Me</label> <input id="modlgn-remember" type="checkbox" name="remember" class="inputbox" value="yes"/>
		</div>
				<div id="form-login-submit" class="control-group">
			<div class="controls">
				<button type="submit" tabindex="0" name="Submit" class="btn btn-primary btn">Log in</button>
			</div>
		</div>
					<ul class="unstyled">
				<li>
					<a href="/support/component/users/?view=registration">
					Create an account <span class="icon-arrow-right"></span></a>
				</li>
				<li>
					<a href="/support/component/users/?view=remind">
					  Forgot your username?</a>
				</li>
				<li>
					<a href="/support/component/users/?view=reset">Forgot your password?</a>
				</li>

			</ul>
				<input type="hidden" name="option" value="com_users" />
		<input type="hidden" name="task" value="user.login" />
		<input type="hidden" name="return" value="aW5kZXgucGhwP29wdGlvbj1jb21fY29udGVudCZjYXRpZD00MjImaWQ9NTM4JnZpZXc9YXJ0aWNsZSZJdGVtaWQ9MTAx" />
		<input type="hidden" name="fa8a4afc8f109584d9ba63ae4de68be5" value="1" />	</div>
	</form>
<!-- <br />
<h3>Social Media Login</h3>
<div class='login_with_facebook'><a href='http://www.inmotionhosting.com/support/component/slogin/provider/facebook/auth'>Login with Facebook</a></div>
<div class='login_with_google'><a href='http://www.inmotionhosting.com/support/component/slogin/provider/google/auth'>Login with Google+</a></div>  -->



		</div>
			<div class="moduletable">
							<h3>Social Media Login</h3>
						<noindex>

<div id="slogin-buttons" class="slogin-buttons ">
                        <a  rel="nofollow"  title="Facebook" href="/support/component/slogin/provider/facebook/auth"><span class="facebookslogin">&nbsp;</span></a>
                    <a  rel="nofollow"  title="Google" href="/support/component/slogin/provider/google/auth"><span class="googleslogin">&nbsp;</span></a>
            </div>

<div class="slogin-clear"></div>

    
</noindex>
<div style="text-align: right; visibility: hidden; "><a style="text-decoration:none; color: #c0c0c0; font-family: arial,helvetica,sans-serif; font-size: 5pt;" target="_blank" href="http://joomline.org/extensions/component-for-joomla/slogin.html">Social Login Joomla</a></div>		</div>
			<div class="moduletable">
						
                <h3>Related Questions</h3>
                <div>Here are a few questions related to this article that our customers have asked:</div>
        <div style='margin:10px 0px; color:#aaa;'>Ooops! It looks like there are no questions about this page.</div>
                <div>Would you like to ask a question about this page? If so, click the button below!</div>
                <div style='text-align:right; margin-top:10px;'><a class='btn btn-primary' href='/support/community-support/ask-a-question'>Ask a Question</a></div>
        		</div>
	
	</div>
	<div style='clear:both;'></div>
 </div>






<style>
	#fixComments h3 {
		border-bottom:1px solid #ddd;
		margin-bottom:10px;
		padding-bottom:5px;
	}
	#fixComments h3 span.comment-count {
		float:left;
		font-size:40px;
		padding:12px 10px 15px 0px;
	}
	#fixComments h3 span.comment-text {
		display:inline-block;
		padding-left:20px;
	}
	#fixComments p.post-a-comment {
		text-align:right;
		border-top:1px solid #ddd;
		padding-top:10px;
	}
	#fixComments p.back-to {
		text-align:right;
	}
</style>
<a name='first-comment'></a>
<div class='container' style='margin:0px; padding:30px 0px 30px 0px; margin-left:auto; margin-right:auto;'>
	<div style='width: 70%; margin:0px; padding:0px; float:left;'>
		<div style='clear:both;'></div>
<a name='comments'></a>



		<a name='comment-8002'></a>
		<div  style='margin:0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh4.googleusercontent.com/-0oohI2xHOb4/AAAAAAAAAAI/AAAAAAAAAA8/Mzc7RwC300I/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/donaceli'>donaceli</a></div>
						<div></div>
						<div></div>
						<div>11 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-07-04 8:09 am</div>
				                <div>Hi, I get the message Restoring Files but nothing else is happening. How long should it take for the process to complete?</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8002);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8008'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh6.googleusercontent.com/-fe0eHQ-V1M4/AAAAAAAAAAI/AAAAAAAAAC4/piKrSF1i5G8/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/BradM'>BradM</a></div>
						<div><a href='https://twitter.com/bwmarkle' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='https://plus.google.com/102670474114655224886/posts' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div></div>
						<div>5,399 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-07-05 12:10 pm</div>
				                <div>Hi donaceli,<br />
<br />
If you only have a few files, the restoration could take just a few seconds. If however you have lots of files, such as a few GB worth of files, it may take longer for the restoration to finish.<br />
<br />
How large is the backup file that you're working with? Let us know if anything has changed since you posted your comment.<br />
<br />
Thanks,<br />
- Brad</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8008);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-9338'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/028743d332bf7163c17e67378e2d8752?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/028743d332bf7163c17e67378e2d8752'>Serkan Yildirimturk</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-04-01 2:41 pm</div>
				                <div><p>My backfile size was around 7GB and it is at the "Restoring homedir..." stage...It has been a few hours, however, I still see it going.</p>
<p>If I close the browser the window, will it cancel the restore process?</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(9338);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-9341'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh6.googleusercontent.com/-71IjFLXWAbo/AAAAAAAAAAI/AAAAAAAAZoM/rUwpCEjduSw/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/JacobIMH'>JacobIMH</a></div>
						<div></div>
						<div></div>
						<div>9,968 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-04-01 2:54 pm</div>
				                <div>Hello Serkan,<br />
<br />
The restore process can take quite a while if you have a rather large backup like yourself. If it seems to be still making progress then it should still be restoring to the server. Unfortunately I couldn't find your account on file with us based off this post to double-check on the current status of the restore.<br />
<br />
Closing the browser window should cancel the restore process, so if you wanted it to complete you would want to keep the browser window open until it's completely finished.<br />
<br />
Please let us know if you had any other questions at all.<br />
<br />
- Jacob</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(9341);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-9343'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/028743d332bf7163c17e67378e2d8752?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/028743d332bf7163c17e67378e2d8752'>Serkan Yildirimturk</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-04-01 3:05 pm</div>
				                <div><p>Thank you for your response Jacob. &nbsp;I personally don't have an account here, but a few of my clients do.</p>
<p>When I do full backup through cPanel, the browser window can be closed and the proces still completes. &nbsp;It kind of does not make sense to me why WHM does not allow this, especially when the process is longer than the backup itself. I am assuming security reasons.</p>
<p>I have Chrome launched now and I am kidn of nervous now that it has taken this long would hate for it crash. &nbsp;So will minimize this and use Firefox for the time being...</p>
<p>Thank you again for your response!</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(9343);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-9347'></a>
		<div  style='margin:2px 0px 0px 120px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh6.googleusercontent.com/-71IjFLXWAbo/AAAAAAAAAAI/AAAAAAAAZoM/rUwpCEjduSw/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/JacobIMH'>JacobIMH</a></div>
						<div></div>
						<div></div>
						<div>9,968 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-04-01 5:16 pm</div>
				                <div>Hello Serkan, thanks for the input.<br />
<br />
I went ahead and tested this out, and it actually does look like the restore process will continue to complete, like you mentioned for the backup process. This is so long as you've reached the &lt;span style=&quot;color: red;&quot;&gt;Restoring files...&lt;/span&gt; part of the restore process in cPanel.<br />
<br />
If your web-browser is still showing &lt;span style=&quot;color: red;&quot;&gt;Uploading (99%)...&lt;/span&gt; at the bottom status bar, and you close the web-browser it will cancel the restore process as the full backup doesn't get uploaded.<br />
<br />
If you're worried about the restore process stalling out on you, one simple way to check on the status would be to upload a PHP script to the &lt;span style=&quot;color: red;&quot;&gt;/public_html&lt;/span&gt; directory of the account you're restoring like this:<br />
<br />
&lt;span style=&quot;color: red;&quot;&gt;checkRestore.php&lt;/span&gt;<br />
&lt;pre class=&quot;cli&quot; style=&quot;line-height: .7em; margin-bottom: -30px;&quot;&gt;&amp;lt?php<br />
<br />
echo exec(&quot;ls -Rf | wc -l&quot;);<br />
echo &quot;&amp;lt;br&amp;gt;&quot;;<br />
echo exec(&quot;du -hs&quot;);<br />
<br />
?&amp;gt;&lt;/pre&gt;<br />
<br />
If you then accessed that script in another web-browser tab, it would output like this:<br />
<br />
&lt;pre class=&quot;code_block&quot; style=&quot;line-height: .7em; margin-bottom: -30px;&quot;&gt;18<br />
123M	.&lt;/pre&gt;<br />
<br />
Showing there are 18 files totaling 123MB in the &lt;span style=&quot;color: red;&quot;&gt;/public_html&lt;/span&gt; directory. If you refresh that file every so often you should see either the file count, or size go up.<br />
<br />
- Jacob</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(9347);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-9835'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/e5e8c30e28ce84a657e0826d0962bbf0?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/e5e8c30e28ce84a657e0826d0962bbf0'>Gillian</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-04-17 6:22 pm</div>
				                <div><p>After I had to do a full site restore through Inmotion yesterday, I am looking into backups more thoroughly. To be honest, I though Inmotion handled all of this for me, but now I realize that it doesn't backup the database files that my Wordpress plugins use. Or to be more clear it apparently backs them up but if they do a restore from the format they use, it will corrupt the site. So the backup of the database from Inmotion really isn't useful if you need a site restore.</p>
<p>&nbsp;</p>
<p>I had a look at the article on backing up the database files, and from what I'm understanding, I can do a restore of those files if needed in the future, even though I'm storing them locally.</p>
<p>My question is ... on the cPanel, it says here's a button for a full site backup ... then it says .... oh but you can't use this for a site restore, only to transfer to a new server. Why is this? If I can store a copy myself and then restore it myself, would this have not saved me the hassle of waiting all day for Inmotion to do a full restore?</p>
<p>Am I reading this all correctly?</p>
<p>Basically I want a full procedure of what I should be doing as a site owner to ensure I have all of my site backed up and ready to restore in the event of an emergency.</p>
<p>One more question - if I pay more for a higher level of service, can all of this just be done for me?</p>
<p>Thanks!!</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(9835);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-15064'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/73a7711884048c4caa8cb0660dc5d733?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/73a7711884048c4caa8cb0660dc5d733'>SUCCESSGANDE</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-09-15 10:19 am</div>
				                <div><p>How can i restore a backup site to a sub domain without over writing the home directorate of the main site?</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(15064);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-15065'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-et9qjCJVL08/AAAAAAAAAAI/AAAAAAAAAC4/C539ZYF2HNc/s90-p-rw-no/photo.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/scott'>scott</a></div>
						<div><a href='https://plus.google.com/u/0/103891980085974966828/' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>36,987 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-09-15 11:46 am</div>
				                <div>Hello,<br />
<br />
You would need to open up the zip file and then copy just the files in the subfolder to your hosting account.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(15065);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-16892'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/7f2dd37a1c5a93e8fb11de180409e30e?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/7f2dd37a1c5a93e8fb11de180409e30e'>Rubel Amin</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-10-30 7:49 am</div>
				                <div><p>Hi!</p>
<p>Unfortunately today I deleted some file and folder from my cpanel File Manager. I do not have backup of them. How can I return them. I checked trash folder from file manager but i did not get them.</p>
<p>How can I return them?</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(16892);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-16903'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='http://lh3.googleusercontent.com/-Qzm5Afwbl4g/AAAAAAAAAAI/AAAAAAAAAEc/CXPngTPySFA/s120-c/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/John-Paul'>John-Paul</a></div>
						<div><a href='https://twitter.com/mrhosthelp' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='https://plus.google.com/u/0/114162951489960418846' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>22,986 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-10-30 10:47 am</div>
				                <div>Hello Rubel,<br />
<br />
Thank you for contacting us today. If this just happened recently (within the last 24-36 hours), I recommend requesting a <a href="http://www.inmotionhosting.com/support/website/backup-and-restore/restoring-a-backup#our_backups">Data Restoration</a> from AMP immediately. <br />
<br />
This allows us to check our backups for the files and restore them if they are available.<br />
<br />
If you have any further questions, feel free to post them below.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(16903);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-16906'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/7f2dd37a1c5a93e8fb11de180409e30e?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/7f2dd37a1c5a93e8fb11de180409e30e'>Rubel Amin</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-10-30 12:06 pm</div>
				                <div><p>Thanks&nbsp;<span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 22px;">John-Paul</span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif; font-size: small;"><span style="line-height: 22px;">But what is AMP login? One think should be clear that should be my webhosting n this site or any other also?</span></span></p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(16906);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-16911'></a>
		<div  style='margin:2px 0px 0px 120px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='http://lh3.googleusercontent.com/-Qzm5Afwbl4g/AAAAAAAAAAI/AAAAAAAAAEc/CXPngTPySFA/s120-c/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/John-Paul'>John-Paul</a></div>
						<div><a href='https://twitter.com/mrhosthelp' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='https://plus.google.com/u/0/114162951489960418846' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>22,986 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-10-30 1:15 pm</div>
				                <div>Hello Rubel,<br />
<br />
Thank you for your question. AMP stands for Account Management Panel, it is the first login email you receive after confirming your account with us.<br />
<br />
Here is a guide on how to <a href="http://www.inmotionhosting.com/support/website/amp/how-to-log-into-amp">Login to AMP</a>.<br />
<br />
If you have any further questions, feel free to post them below.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(16911);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18864'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/ed489e8334ec0e8f52b0ffbf181e861a?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/ed489e8334ec0e8f52b0ffbf181e861a'>Trevor Gordon</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-24 9:15 pm</div>
				                <div><p>Restoring a home directory in cPanel.</p>
<p>1. Have a problem with my Wordpress admin access on a site.(Go Daddy)(No access for the last 2 weeks. before it was ok.)</p>
<p>2. The Web site is running ok.</p>
<p>3. My site admin is in cPanel.</p>
<p>4. I have taken a backup of the home directory and the SQL database.</p>
<p>5. I have installed Wordpress on a different hosting platform (Domain Wink)I use, and have restored the home directory and the SQL database to the new platform.</p>
<p>6. I am trying to replicate my problematic site.</p>
<p>7. When I type the URL for the new admin, it gives me a message saying "no action needed as your database is up-to-date"</p>
<p>8. This would indicate that the database is ok,&nbsp;</p>
<p>but when i try the admin, I don't get a response.</p>
<p>&nbsp;</p>
<p>Original site is www.panoramasunrise.com (working site, but no admin access)</p>
<p>&nbsp;</p>
<p>Copied site (Domain Wink) www.panoramatest.nativeneatenglish.com.</p>
<p>&nbsp;</p>
<p>How do I check to see if the home directory files are in the correct folder, and working?</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18864);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18873'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-np8xy9GiNy8/AAAAAAAAAAI/AAAAAAAAAEU/Eu1yKGoTxiA/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/Arn'>Arn</a></div>
						<div><a href='https://twitter.com/arncus' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='https://plus.google.com/+ArnelCustodio' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>32,263 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-25 8:45 am</div>
				                <div>Trevor,<br />
<br />
Sorry to hear to that you're having problems with your WordPress install.  Depending on your host, if you're talking about your WordPress install files, they'll typically either be in the root directory (e.g. we use "public_html") or a folder that you designated for the installation.  One of the main ways to tell if your WordPress files are there is to look for the main folders like <b>wp-content</b>,<b> wp-admin</b>, <b>wp-includes</b>.  You should also see the <i>wp-config.php</i> file in that folder.  There are a ton of other files and folders also, but if you want to know what they would look like, go to wordpress.org, and download the <b>WordPress installation zip file</b>, then unzip into a folder so that you can see what should be there.  <br />
<br />
If you're having problems with getting into your WordPress site, I would suggest using one of the recovery methods mentioned in our article, <a href="http://www.inmotionhosting.com/support/website/wordpress/resetting-your-wordpress-admin-password" target="_blank">resetting your WordPress admin password</a>.  If you're hosted with us, you can always call into our technical support and they can reset the admin password for you.  <br />
<br />
I hope that helps to give you the information you require.   If you have any further questions or comments, please let us know.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18873);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-19839'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/77baa0b815c0cfffc489f1d0110d2cb1?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/77baa0b815c0cfffc489f1d0110d2cb1'>Kartar Yadav</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-01-23 12:24 am</div>
				                <div><p>Dear Sir/Ma'am,</p>
<p>Good Morning We are using Web Blue Host We paid for renewal after that our Site backup not shown.</p>
<p>Please do the needful.</p>
<p>&nbsp;</p>
<p>&nbsp;Kartar Yadav</p>
<p>Dy.Mgr IT</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(19839);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-19855'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-et9qjCJVL08/AAAAAAAAAAI/AAAAAAAAAC4/C539ZYF2HNc/s90-p-rw-no/photo.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/scott'>scott</a></div>
						<div><a href='https://plus.google.com/u/0/103891980085974966828/' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>36,987 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-01-23 10:41 am</div>
				                <div>Hello Kartar,<br />
<br />
I am not quite understanding your request. It seems you say you are hosting with Blue Host, but after paying for a renewal, cannot find a site backup. Do you also have an account with us? Please be a bit more specific so we can understand your issue and help.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(19855);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24474'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/6f6211ba2c684145fa54f08055d2ea36?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/6f6211ba2c684145fa54f08055d2ea36'>Jaze</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-26 3:02 am</div>
				                <div><p>Hi,</p>
<p>Can you help me to restore my deleted websites. It happens last night. Please. I really need it. I don't have knowledge in cpanel.</p>
<p>&nbsp;</p>
<p>Thank you</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24474);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24485'></a>
		<div  style='margin:2px 0px 0px 120px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-et9qjCJVL08/AAAAAAAAAAI/AAAAAAAAAC4/C539ZYF2HNc/s90-p-rw-no/photo.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/scott'>scott</a></div>
						<div><a href='https://plus.google.com/u/0/103891980085974966828/' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>36,987 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-26 9:06 am</div>
				                <div>Hello Jaze,<br />
<br />
Do you have a backup? Did you follow the instructions above? Where did you get lost? <br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24485);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24510'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/cc738f2eb5681adaad89fd7600d79045?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/cc738f2eb5681adaad89fd7600d79045'>Richa</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-28 1:49 pm</div>
				                <div><p><span style="color: rgb(35, 35, 35); font-family: adelle-sans, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 22px;">Hi!</span></p>
<p>When I try to upload the backed up file, it says&nbsp;<strong style="font-family: 'Times New Roman'; font-size: medium;">The system will restore your files &hellip;</strong><span style="font-family: 'Times New Roman'; font-size: medium;">&nbsp; I kept on waiting forever and it dint show any progress.. I've tried it many times the way you described.</span></p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24510);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24526'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-et9qjCJVL08/AAAAAAAAAAI/AAAAAAAAAC4/C539ZYF2HNc/s90-p-rw-no/photo.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/scott'>scott</a></div>
						<div><a href='https://plus.google.com/u/0/103891980085974966828/' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>36,987 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-29 1:13 pm</div>
				                <div>Hello Richa,<br />
<br />
If the instructions above did not work for you, you may want to contact <a href="http://www.inmotionhosting.com/support/website/website-troubleshooting/how-to-get-great-technical-support">Live Support</a> to see if there is some account-specific reason. They may be able to assist with the restore as well.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24526);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-26239'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/0d10e5b79857c0aa41b2133564ded8b1?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/0d10e5b79857c0aa41b2133564ded8b1'>Hak Virak</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-09-01 2:36 am</div>
				                <div><p>Hello Scott M,</p>
<p>Now, I have problem with my website as this picture.</p>
<p>Please help me !</p>
<p>Best Regard!<img src="data:image/png;base64,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" alt="" width="311" height="94" /></p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(26239);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-26272'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-fI7zh5HdUcw/AAAAAAAAAAI/AAAAAAAAADs/nezrUM_KGls/s50-p-rw-no/photo.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/TJEdens'>TJEdens</a></div>
						<div></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>9,548 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-09-02 12:21 am</div>
				                <div>Hello Hak,<br />
<br />
Can you please provide your domain as I am not able to tell from the photo? What is your website built with? Did you make any file changes recently?<br />
<br />
Best Regards,<br />
TJ Edens</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(26272);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-26902'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/916ade3e622c03bf4662a2ce6ed02b7e?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/916ade3e622c03bf4662a2ce6ed02b7e'>Prathyangira&#039;s Karthikeyan</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-09-23 1:04 am</div>
				                <div><p>sir is any method to restore withour download full backup?</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(26902);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-26922'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-np8xy9GiNy8/AAAAAAAAAAI/AAAAAAAAAEU/Eu1yKGoTxiA/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/Arn'>Arn</a></div>
						<div><a href='https://twitter.com/arncus' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='https://plus.google.com/+ArnelCustodio' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>32,263 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-09-23 2:33 pm</div>
				                <div>Hello Prathyangira's Karthikeyan,<br />
<br />
Your question is unfortunately a bit vague.  Can you provide more details on what you're trying to do?  If you are trying to restore a full cPanel backup on a business account, you would need to <a href="http://www.inmotionhosting.com/support/website/getting-started-guides/submitting-and-checking-on-status-of-tickets">submit a ticket</a> to have it done.  If you are on a VPS or Dedicated server account, you would need to have root access in order to restore it.  I hope this helps to answer your question, please let us know if you require any further  assistance.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(26922);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-26931'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/916ade3e622c03bf4662a2ce6ed02b7e?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/916ade3e622c03bf4662a2ce6ed02b7e'>Prathyangira&#039;s Karthikeyan</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-09-24 6:52 am</div>
				                <div><p>Sir i Have Cpanel in Bluehost. i take daily backups. day to day my site getting grove large size. now my site is 1 gb so. when i restore. then i download that 1 gb. and upload that 1gb file. so how can i possible. so please give me idea to restore without download backups.</p>
<p>thanking you sir</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(26931);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-26932'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-et9qjCJVL08/AAAAAAAAAAI/AAAAAAAAAC4/C539ZYF2HNc/s90-p-rw-no/photo.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/scott'>scott</a></div>
						<div><a href='https://plus.google.com/u/0/103891980085974966828/' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>36,987 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-09-24 8:57 am</div>
				                <div>Hello Prathyangira,<br />
<br />
You will always want to download the backup. It is not good to have the backup on the account because it something happens to the cPanel account, the backup goes along with it.  Also, be sure you do not have a copy of your backup in your cPanel when you create a new backup. This means youa re backing up backups which can make the filesize grow very fast.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(26932);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27370'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/835830326611ca07647e37a96c470958?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/835830326611ca07647e37a96c470958'>khursheed.ahmad</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-09 9:37 am</div>
				                <div><p>Hi all&nbsp;</p>
<p>&nbsp;</p>
<p>please help me i am unable to access my web site (www.jbk21.con) and c panal also&nbsp;please help me&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27370);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27371'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-np8xy9GiNy8/AAAAAAAAAAI/AAAAAAAAAEU/Eu1yKGoTxiA/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/Arn'>Arn</a></div>
						<div><a href='https://twitter.com/arncus' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='https://plus.google.com/+ArnelCustodio' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>32,263 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-09 9:56 am</div>
				                <div>Hello Khursheed,<br />
<br />
Sorry for the problem with the domain.  I tried to see if the domain came up as being registered and it doesn't appear to be so.  You will need to <a href="http://www.inmotionhosting.com/support/domain-names/registrations-and-transfers/registering-a-new-domain-name">register the domain</a> before you can use on the internet for your website or the cPanel link.  <br />
<br />
I hope this helps to answer your question, please let us know if you require any further  assistance.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27371);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-28252'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/187be3232e44340aeaaab58ee166e04c?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/187be3232e44340aeaaab58ee166e04c'>Sheryl Spencer</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-11-06 8:54 pm</div>
				                <div><p>I've tried doing this too but it hasn't worked. Everything remains the same :/ Getting so frustrated because I've followed these directions exactly but yet, nothing changes and things are still a mess from files going in the wrong places &gt;,&lt;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(28252);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-28289'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-et9qjCJVL08/AAAAAAAAAAI/AAAAAAAAAC4/C539ZYF2HNc/s90-p-rw-no/photo.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/scott'>scott</a></div>
						<div><a href='https://plus.google.com/u/0/103891980085974966828/' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>36,987 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-11-09 6:47 pm</div>
				                <div>Hello Sheryl,<br />
<br />
If you are a customer of ours and have gone through these steps and are still having issues getting files in the right place, you may want to check with our Live Support team so they can look into your account.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(28289);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-29664'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/b103e55d481d410591de6804ff65d435?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/b103e55d481d410591de6804ff65d435'>Genti</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-01-08 1:13 pm</div>
				                <div><p>Hi</p>
<p>I accedentaly deleted a file from the file manager in public_html.</p>
<p>I have downloaded a full back-up from a few days ago and saved it locally.</p>
<p>How do I now restore the full back up?</p>
<p>&nbsp;</p>
<p>Many Thnaks&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(29664);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-29674'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-fI7zh5HdUcw/AAAAAAAAAAI/AAAAAAAAADs/nezrUM_KGls/s50-p-rw-no/photo.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/TJEdens'>TJEdens</a></div>
						<div></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>9,548 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-01-09 2:08 am</div>
				                <div>Hello Genti,<br />
<br />
You can upload the backup to your account via FTP and <a href="http://www.inmotionhosting.com/support/website/website-troubleshooting/how-to-get-great-technical-support">contact our support team</a> to have the backup restored.<br />
<br />
Best Regards,<br />
TJ Edens</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(29674);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-30709'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/2c40db5e57686a7b70cc977061ec6f84?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/2c40db5e57686a7b70cc977061ec6f84'>Mihir</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-02-20 5:51 pm</div>
				                <div><p>How can i restore my secondary website from backup.I use Godaddy..</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(30709);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-30732'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-np8xy9GiNy8/AAAAAAAAAAI/AAAAAAAAAEU/Eu1yKGoTxiA/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/Arn'>Arn</a></div>
						<div><a href='https://twitter.com/arncus' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='https://plus.google.com/+ArnelCustodio' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>32,263 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-02-22 10:24 am</div>
				                <div>Hello Mihir,<br />
<br />
I'm not sure how you created your backup, or if you're using the Web Builder that they have.  You can check out this <a href="https://www.godaddy.com/help/restore-from-a-backup-12311" rel="nofollow" target="_blank">Restore article</a> for more information about restoring a backup.  If you're working with their Web builder product, then you'll need to look at their documentation to restore those backups.<br />
<br />
I hope this helps to answer your question, please let us know if you require any further  assistance.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(30732);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-30773'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/023d2a385ee5025977360e74f47b2444?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/023d2a385ee5025977360e74f47b2444'>Kfir Man</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-02-23 8:06 pm</div>
				                <div><p>Hi,</p>
<p>How can i restore files like this:</p>
<p>https://www.youtube.com/watch?v=prjUh_mt6xo</p>
<p>&nbsp;</p>
<p>Best Regard!</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(30773);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-30783'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-np8xy9GiNy8/AAAAAAAAAAI/AAAAAAAAAEU/Eu1yKGoTxiA/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/Arn'>Arn</a></div>
						<div><a href='https://twitter.com/arncus' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='https://plus.google.com/+ArnelCustodio' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>32,263 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-02-24 4:47 pm</div>
				                <div>Hello Kfir Man, <br />
<br />
The video that's being shown involves a plugin that we don't currently have on our servers.  If you wanted to have that setup, you would need to be on a vps/dedicated server where the plugin could be setup for your account, and then associated with individual cPanel accounts.<br />
<br />
I hope this helps to answer your question, please let us know if you require any further  assistance.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(30783);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-30840'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/5442422a09e656a4a97ef90b5e6f1fb5?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/5442422a09e656a4a97ef90b5e6f1fb5'>Don</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-02-26 8:02 pm</div>
				                <div><p>Hi, I started the restoring proces of the home directory and I did see the uploading percentage, but once that reached 100% i can only see the restoring files message without anything else on the screen. Any ideas. I am using Chrome.</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(30840);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-30882'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-et9qjCJVL08/AAAAAAAAAAI/AAAAAAAAAC4/C539ZYF2HNc/s90-p-rw-no/photo.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/scott'>scott</a></div>
						<div><a href='https://plus.google.com/u/0/103891980085974966828/' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>36,987 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-02-29 2:52 pm</div>
				                <div>Does refreshing the screen cause them to appear?</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(30882);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-32064'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/d1dd531fb58de0b66f5795ad02762c6e?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/d1dd531fb58de0b66f5795ad02762c6e'>Cindy</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-04-19 5:55 pm</div>
				                <div><p>Hi There, I have completed the above steps and all im getting for the past 30 mins is the same message :</p>
<p>&nbsp;</p>
<pre style="box-sizing: border-box; overflow: auto; font-family: Menlo, Monaco, Consolas, 'Courier New', monospace; font-size: 13px; padding: 9.5px; margin-top: 0px; margin-bottom: 10px; line-height: 1.42857; word-break: break-all; word-wrap: break-word; color: rgb(51, 51, 51); border: 1px solid rgb(204, 204, 204); border-radius: 4px; background-color: rgb(245, 245, 245);">Restoring database &ldquo;backup-m2-real-estate-20160417-125510-gSs4QLNWwZCwDz79KRlj9n5LEvuY1B&rdquo;
</pre>
<p>&nbsp;</p>
<p>Please advise if this is working as nothing else has changes since then</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32064);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-32077'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-AmEnso4E7cE/AAAAAAAAAAI/AAAAAAAAAB8/-OBGtrb_6VM/s90-p-rw-no/photo.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/christopherm'>christopherm</a></div>
						<div><a href='https://myaccount.google.com/?utm_source=OGB' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>3,380 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-04-20 7:23 am</div>
				                <div>It is possible that the recovery stalled. Have you checked your files to see if everything is where it should be? Or, are files missing?</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32077);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-32242'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/46732531a6c5f0f5eb55a0f8a5c81c3e?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/46732531a6c5f0f5eb55a0f8a5c81c3e'>tenzin</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-04-26 1:40 am</div>
				                <div><p>Our support has deleted our cpanel account and we have to revive the mail accounts and the content of the email that we have been receiving on it. Is there is a way to recover our mail account contents from there, even after deletion of cpanel account? Please help...</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32242);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-32252'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-AmEnso4E7cE/AAAAAAAAAAI/AAAAAAAAAB8/-OBGtrb_6VM/s90-p-rw-no/photo.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/christopherm'>christopherm</a></div>
						<div><a href='https://myaccount.google.com/?utm_source=OGB' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>3,380 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-04-26 7:43 am</div>
				                <div>There is no way to recover those messages without some kind of backup or a copy of the emails from a different location. </div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32252);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-32497'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/7cd302bdc5042b7769531d3bb23ed4df?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/7cd302bdc5042b7769531d3bb23ed4df'>yasar</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-05-06 6:55 am</div>
				                <div><p>hi,</p>
<p>am uploading my 2.5 GB backup but it shows connecting only more than half hour there&nbsp;is no response.</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32497);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-32500'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-fI7zh5HdUcw/AAAAAAAAAAI/AAAAAAAAADs/nezrUM_KGls/s50-p-rw-no/photo.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/TJEdens'>TJEdens</a></div>
						<div></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>9,548 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-05-06 9:19 am</div>
				                <div>Hello Yasar,<br />
<br />
Because the file is so large you may need to contact our support department to restore the backup for you. cPanel has a chance to corrupt any restoration via the interface that is around 3GB.<br />
<br />
Best Regards,<br />
TJ Edens</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32500);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-33005'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/28aa4539e04a0cdb8178e6ff879d9047?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/28aa4539e04a0cdb8178e6ff879d9047'>Danny</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-05-27 8:38 am</div>
				                <div><p>Hi, Is it possible to do a Home directory backup to a subdirectory? I want to clone a site so that I can test some wordpress updates before applying the updates to the live site. This is an operating online store so I did not want to mess with the live version without going through this process.Regards,Danny</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(33005);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-33006'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-fI7zh5HdUcw/AAAAAAAAAAI/AAAAAAAAADs/nezrUM_KGls/s50-p-rw-no/photo.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/TJEdens'>TJEdens</a></div>
						<div></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>9,548 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-05-27 8:51 am</div>
				                <div>Hello Danny,<br />
<br />
I would suggest using something like <a href="https://wordpress.org/plugins/wp-clone-by-wp-academy/">WP Clone</a> to make a developer/copy version of your live website.<br />
<br />
Best Regards,<br />
TJ Edens</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(33006);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<style>
			.acomment tr th {text-align:left;vertical-align:top}
			.recaptchatable * {line-height:4px}
		</style>
		<a name='post_a_comment'></a>
		<a name='acomment_form'></a>
		<div class='main_comment_submission_div' style='margin-top:20px;' name='main_comment_submission_div' id='main_comment_submission_div'>
	        <h3>Post a Comment</h3>
		<form method='post'>
			<table class='table acomment'>
				<tr>
					<th>Name:</th>
					<td>
						
						<input type='text' name='acomment_name' id='acomment_name' style='width:97%;' value='' />
					</td>
				</tr>
				<tr>
					<th>Email Address:</th>
					<td>
						
						<input type='text' name='acomment_email' id='acomment_email' style='width:97%;' value='' />
					</td>
				</tr>
				<tr style='display:none;'>
					<th>Phone Number:</th>
					<td>
						<input type='text' name='acomment_phone' id='acomment_phone' style='width:97%;' value='' />
					</td>
				</tr>
				<tr>
					<th>Comment:</th>
					<td>
						
						<script type='text/javascript' src='//cdn.inmotionhosting.com/support/components/com_pup/tinymce/js/tinymce/tinymce.min.js'></script>
						<script type='text/javascript'>
							tinymce.init({
							    selector: 'textarea.acomment_comment',
							    plugins: [
							        // 'advlist autolink lists link image charmap print preview anchor',
						        	// 'searchreplace visualblocks code fullscreen',
							        // 'insertdatetime media table contextmenu paste moxiemanager'
							    ],
							    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
							});
						</script>
						<textarea class='acomment_bcomment' name='acomment_bcomment' id='acomment_bcomment' style='display:none;'></textarea>
						<textarea class='acomment_comment' name='acomment_comment' id='acomment_comment' style='width:100%;height:150;'></textarea>
					</td>
				</tr>
				<tr>
					<th></th>
					<td>
						
						<script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LeoSOcSAAAAAGEzHG3DfhwCCZTigzSlHi3Qjymt"></script>

	<noscript>
  		<iframe src="https://www.google.com/recaptcha/api/noscript?k=6LeoSOcSAAAAAGEzHG3DfhwCCZTigzSlHi3Qjymt" height="300" width="500" frameborder="0"></iframe><br/>
  		<textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
  		<input type="hidden" name="recaptcha_response_field" value="manual_challenge"/>
	</noscript>
					</td>
				</tr>
				<tr>
					<th>Submit</th>
					<td style='text-align:left;'>
						<p>Please note: Your name and comment will be displayed, but we will not show your email address.</p>
						<input type='submit' class='btn btn-primary' value='Submit Comment' />
					</td>
				</tr>
			</table>
			<input type='hidden' name='new_comment_parent_id' id='new_comment_parent_id' value='' />
			<input type='hidden' name='old_comment_parent_id' id='old_comment_parent_id' value='2' />
		</form>
		</div>
			</div>
	<div name='fixComments' id='fixComments' style='width:220px; margin:0px; float:right;'>
		<div class='moduletable'>
			<h3><span class='comment-count'>49</span> Questions & <span class='comment-text'>Comments</span></h3>
						<p class='post-a-comment'><a href='#post_a_comment' class='btn btn-primary small'>Post a comment</a></p>
			<p class='back-to'>Back to <a href='#first-comment'>first comment</a> | <a href='#top-of-page'>top</a></p>
		</div>
	</div>
	<div style='clear:both;'></div>
</div>






	<div style="background:url('//cdn.inmotionhosting.com/img/pattern.gif');padding-top:20px;">
		<div style=' margin:0px; padding:10px 0px 10px 0px; margin-left:auto; margin-right:auto;'>
			<h2 style='text-align:center;margin-bottom:10px;'>Need more Help?</h2>


<div class='container' style='border:1px solid #ddd; background:#fff; padding:20px;'>

	<div style='float:left; border-bottom:1px solid #ddd; height:110px;'>

		<h3>Search</h3>
		<form action="/support/search" method="get" >
    			<input name="searchword" id="mod-search-searchword" maxlength="80"  class="inputbox search-query" type="text" size="20" value="How may we help?"  onblur="if (this.value=='') this.value='How may we help?';" onfocus="if (this.value=='How may we help?') this.value='';" />
			<button class="button btn btn-info" onclick="this.form.searchword.focus();">Search</button>
		 </form>
	</div>

	<div class='need_more_help_right_ask' style='float: right; width:47%;'>

                <h3>Ask the Community!</h3>
                <div>Get help with your questions from our community of like-minded hosting users and InMotion Hosting Staff.</div>
                <ul style='margin-left:18px;'>
                        <li style='float:left; padding:0px 40px 0px 0px;'><a href='/support/community-support'>Browse Questions</a></li>
                        <li style='float:left;'><a href='/support/community-support/ask-a-question'>Ask a Question</a></li>
                </ul>
        </div>

	<div style='clear:both; margin-bottom:20px;'></div>

	<div class='need_more_help_left' style='float:left'>

		<h3>Current Customers</h3>
                <table>
                        <tr>
                                <th style='text-align:right;'>Chat:</th>
                                <td><a rel="nofollow" onclick="launchBoldChat();return false;" href='/support/launch-chat/?rdid=2324923566971164486'>Click to Chat Now</a>
                                </td>
				<th style='text-align:right;'>E-mail:</th>
                                <td><a href="mailto:support@inmotionhosting.com">support@InMotionHosting.com</a></td>
                        </tr>
                        <tr>
				<th style='text-align:right;'>Call:</th>
                                <td>888-321-HOST (4678)</td>
                                <th style='padding-left:10px;text-align:right;'>Ticket:</th>
                                <td><a href='/support/website/getting-started-guides/submitting-and-checking-on-status-of-tickets#submit-ticket' title='Submit a Support Ticket'>Submit a Support Ticket</a></td>
                        </tr>
                </table>

	</div>

	<div class='need_more_help_right_not' style='float: right;width:47%'>

		<h3>Not a Customer?</h3>
		Get <a href="http://www.inmotionhosting.com">web hosting</a> from a company that is here to help. <a href="http://www.inmotionhosting.com">Sign up today!</a>
	</div>

	<div style='clear:both;'></div>
</div>
		</div>
	</div>
  
  
    <span class=""></span>
<footer role="contentinfo" class="wrap">
        <div class="container">
            <div class="row-fluid">
                <ul class="nav nav-list span2">
                    <li class="nav-header">Web Hosting</li>
                    <li><a href="/business-hosting">Business Hosting</a></li>
                    <li><a href="/vps-hosting">VPS Hosting</a></li>
                    <li><a href="/dedicated-servers">Dedicated Servers</a></li>
                    <li><a href="/enterprise-hosting-solutions">Enterprise Hosting Solutions</a></li>
                    <li><a href="/reseller-hosting">Reseller Hosting</a></li>
                    <li><a href="/wordpress-hosting">WordPress Hosting</a></li>
                    <li><a href="/launch-assist">Launch Assist™</a></li>
                    <li><a href="/managed-hosting">Managed Hosting</a></li>
                    <li><a href="/domains">Domain Names</a></li>
                    <li><a href="/webdesign">Web Design Services</a></li>
                </ul>
                <ul class="nav nav-list span2">
                    <li class="nav-header">Hosting Features</li>
                    <li><a href="/ssd-hosting">SSD Hosting</a></li>
                    <li><a href="/shared-cpanel-hosting">Shared cPanel Hosting</a></li>
                    <li><a href="/ecommerce-hosting">eCommerce Hosting</a></li>
                    <li><a href="/ssh-hosting">SSH Hosting</a></li>
                    <li><a href="/ruby-hosting">Ruby Hosting</a></li>
                    <li><a href="/postgresql-hosting">PostgreSQL Hosting</a></li>
                    <li><a href="/cheap-hosting">Cheap Hosting</a></li>
                    <li><a href="/cheap-dedicated-servers">Cheap Dedicated Servers</a></li>
                    <li><a href="/transfer-your-website-to-the-best-web-hosting">Transfer Websites</a></li>
                </ul>
                <ul class="nav nav-list span2">
                    <li class="nav-header">Hosting Tools</li>
                    <li><a href="/wordpress-hosting">WordPress</a></li>
                    <li><a href="/joomla-hosting">Joomla</a></li>
                    <li><a href="/drupal-hosting">Drupal</a></li>
                    <li><a href="/host-with-cpanel">cPanel</a></li>
                    <li><a href="/prestashop-hosting">PrestaShop</a></li>
                    <li><a href="/moodle-hosting">Moodle</a></li>
                    <li><a href="/opencart-hosting">OpenCart</a></li>
                    <li><a href="/boldgrid-website-builder">BoldGrid<span class="white"> *NEW*</span></a></li>
                </ul>
                <ul class="nav nav-list span2">
                    <li class="nav-header">Community</li>
                    <li><a href="/premier-support">Premier Support ™</a></li>
                    <li><a href="http://www.inmotionhosting.com/support">Support Center</a></li>
                    <li><a href="/hosting-affiliate-program">Host Affiliate</a></li>
                    <li><a href="/infographics">Web Hosting Infographics</a></li>
                    <li><a href="/los-angeles-web-hosting">Los Angeles Hosting</a></li>
                    <li><a href="/meet-us/go-green">Green Data Centers</a></li>
                    <li><a href="http://www.inmotionhosting.com/edu">Student Web Hosting</a></li>
                    <li><a href="/partners">Partners</a></li>
                </ul>
                <ul class="nav nav-list span2">
                    <li class="nav-header">About Us</li>
                    <li><a href="/contact">Contact Us</a></li>
                    <li><a href="/terms-of-service">Terms of Service</a></li>
                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                    <li><a href="http://www.inmotionhosting.com/blog">Blog</a></li>
                    <li><a href="/guarantee">Guarantee</a></li>
                    <li><a href="/testimonials">Testimonials</a></li>
                    <li><a href="http://www.inmotionhosting.com/employment">We're Hiring</a></li>
                    <li><a href="/sitemap">Site Map</a></li>
                    <li><a href="/press">Press</a></li>
                </ul>

                <div class="span2 column-main">
                    <div class="row-fluid">
                        <div class="span10 offset2">
                            <p class="stay-in-touch">Stay in touch on</p>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <ul class="ft-iconlist">
                                <li><a href="https://plus.google.com/+inmotionhosting/posts"><img src="/img/icon-google.png" alt="InMotion Hosting on Google+"></a></li>
                                <li><a href="https://twitter.com/inmotionhosting"><img src="/img/icon-twitter.png" alt="InMotion Hosting on Twitter"></a></li>
                                <li><a href="https://www.facebook.com/inmotionhosting"><img src="/img/icon-facebook.png" alt="InMotion Hosting on Facebook"></a></li>
                                <li><a href="https://www.youtube.com/user/InMotionSupport"><img src="/img/icon-youtube-text.png" alt="InMotion Hosting on YouTube"></a></li>
                                <li><a href="https://www.linkedin.com/company/inmotion-hosting"><img src="/img/icon-linkedin.png" alt="InMotion on LinkedIn"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div itemscope="" itemtype="http://schema.org/LocalBusiness">
                        <span class="ft-logo pull-right"> <a href="/"><img src="//imh01-inmotionhosting1.netdna-ssl.com/img/footer-logo.svg" alt="InMotion Hosting" class="logosize-foot"></a></span>
                        <p class="address" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                        <span itemprop="streetAddress">6100 Center Drive, Suite 1190</span><br>
                        <span itemprop="addressLocality" class="city">Los Angeles</span>, <span itemprop="addressRegion" class="state">CA</span> <span itemprop="postalCode" class="postalcode">90045</span><br>
                        <span itemprop="telephone">
                            888.321.HOST(4678)                        </span><br>
                        <span>2016 © All Rights Reserved</span></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div> <!-- #Main End -->
<div style='display:none;'><!-- Google Code for All IMH Visitors Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1071887445;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "irDaCIfI1AIQ1eiO_wM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1071887445/?label=irDaCIfI1AIQ1eiO_wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>






<!-- Google Code for All Support Center Visitors Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1071887445;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "3soRCI_H1AIQ1eiO_wM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1071887445/?label=3soRCI_H1AIQ1eiO_wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
























<!-- Google Code for cPanel Support Center -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1071887445;
var google_conversion_label = "6MPoCKfdxwMQ1eiO_wM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1071887445/?value=0&amp;label=6MPoCKfdxwMQ1eiO_wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>






<script type="text/javascript">
adroll_adv_id = "RTJSUGR5VJDLTAJZWPJL3N";
adroll_pix_id = "FYDQCMNHNFBATJIQE2L5UC";
(function () {
var oldonload = window.onload;
window.onload = function(){
   __adroll_loaded=true;
   var scr = document.createElement("script");
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
   scr.setAttribute('async', 'true');
   scr.type = "text/javascript";
   scr.src = host + "/j/roundtrip.js";
   ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
   if(oldonload){oldonload()}};
}());
</script>






<!-- Google Code for All IMH Vistirs -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1071887445;
var google_conversion_label = "irDaCIfI1AIQ1eiO_wM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1071887445/?value=0&amp;label=irDaCIfI1AIQ1eiO_wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>






<!-- twitter -->
<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
<script type="text/javascript">
twttr.conversion.trackPid('l4mo4');
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l4mo4&p_id=Twitter" />
<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l4mo4&p_id=Twitter" />
</noscript>
</div>











<!-- BoldChat Visitor Monitor HTML v4.00 (Website=InMotion Hosting,ChatButton=- None -,ChatInvitation=My Invite Ruleset) -->
<script type="text/javascript">
  var _bcvma = _bcvma || [];
  _bcvma.push(["setAccountID", "370246676985295205"]);
  _bcvma.push(["setParameter", "WebsiteDefID", "2034694302371522916"]);
  _bcvma.push(["setParameter", "InvitationDefID", "367054575182333368"]);
  _bcvma.push(["pageViewed"]);
  (function(){
    var vms = document.createElement("script"); vms.type = "text/javascript"; vms.async = true;
    vms.src = ('https:'==document.location.protocol?'https://':'http://') + "vmss.boldchat.com/aid/370246676985295205/bc.vms4/vms.js";
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(vms, s);
  })();
</script>
<noscript>
<a href="http://www.boldchat.com" title="Live Support" target="_blank"><img alt="Live Support" src="https://vms.boldchat.com/aid/370246676985295205/bc.vmi?wdid=2034694302371522916" border="0" width="1" height="1" /></a>
</noscript>
<!-- /BoldChat Visitor Monitor HTML v4.00 -->






<a href='http://www.inmotionhosting.com/support/tob-a-uoy-era' style='display:none;' rel='nofollow'>Post a Comment</a>














<script>
$(document).ready(function() {
  $("#mod-search-searchword").focus();
});
</script>



<script src="//cdn.inmotionhosting.com/support/templates/supportcentertemplate/js/combined.js?v=2016052509" type="text/javascript"></script>

<!-- <div name='853_overlay_join_community' id='853_overlay_join_community'></div> -->




<script type="text/javascript">
                    var launchBoldChat = function() {
                window.open('https://www.inmotionhosting.com/support/launch-chat/?rdid=2324923566971164486&url=' + escape(document.location.href), 'Chat8718689652968401074', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width=640,height=650');

                        _gaq.push(['_setAccount', 'UA-1501988-22']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '27.125.180.17']);

                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'chat', 'launch', 'support center']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '27.125.180.17']);
                        trackAnchorClickSC("trackAnchorClickChatSC");
            }
        </script>



<script type="text/javascript">
$(document).ready(function() {
    $(".std_ss").fancybox({
          helpers: {
              title : {
                  type : 'float'
              }
          }
      });
});
</script>

<!-- onboarding scheduling -->




<script type='text/javascript'>
	jQuery.post(
		'/support/includes/combined_ajax_calls.php',
		{
			task:'show_overlay',
			option:'com_content',
	                view:'article',
        	        id:'538',
			guest:'1'
		},
		function(data,status){
			
			// article feedback
			jQuery('#user_ip').val(data.user_ip);
			jQuery('#timestamp_n_id').val(data.timestamp_n_id);
			
			// overlay join
			jQuery('#853_overlay_join_community').html(data.overlay_join);
			
			// increase hits
			jQuery('#page_views').html(data.page_views);
			
	if(data.latest_news != '') {
		// latest news
		jQuery('#latest_news_items').html(data.latest_news);
		jQuery('#latest_news').slideToggle('fast');
	}

		},
		'json'
	);
</script>
        
<script type='text/javascript'>
	jQuery('#search_in_header').live('submit', searchSubmit);
	function searchSubmit(e) {
		var txt = document.forms['search_in_header'].getElementById('mod-search-searchword').value;
		txt = txt.replace('httpd.conf','httpdconf');
		document.forms['search_in_header'].getElementById('mod-search-searchword').value = txt;
	}
</script>

<script type='text/javascript'>
	var DfixComments = jQuery('#fixComments');
	var vTop = DfixComments.offset().top - parseFloat(DfixComments.css('margin-top').replace(/auto/, 0));
	jQuery(window).scroll(function (event) {
		var y = jQuery(this).scrollTop();
		if (y >= vTop) {
			DfixComments.css({'position': 'fixed', 'top': '10px','right': '50%','margin': '0px -455px 0px 0px'});
		} else {
			DfixComments.css({'position': 'relative', 'top': 'auto'});
		}
	});
</script>


<script type='text/javascript'>
jQuery('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = jQuery(this.hash);
        target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             jQuery('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});
</script>



<script type="text/javascript">(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "http://forms.aweber.com/form/80/1702357380.js";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, "script", "aweber-wjs-vwhe4fkd5"));
</script>

</body>
</html>

";s:13:"mime_encoding";s:9:"text/html";s:7:"headers";a:1:{i:0;a:2:{s:4:"name";s:3:"P3P";s:5:"value";s:50:"CP="NOI ADM DEV PSAi COM NAV OUR OTRo STP IND DEM"";}}}