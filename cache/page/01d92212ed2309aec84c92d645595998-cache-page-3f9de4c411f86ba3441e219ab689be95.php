<?php die("Access Denied"); ?>#x#a:3:{s:4:"body";s:110216:" 
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

		  <base href="http://www.inmotion.net/support/website/javascript/install-nodejs" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="last-modified" content="2014-03-19T23:25:00-07:00" />
  <meta name="keywords" content="install setup configure node.js nodejs" />
  <meta name="author" content="Jacob Nicholson" />
  <meta name="description" content="In this guide I'll show you how to install Node.js on either your VPS or dedicated server. Node.js is a server-side JavaScript framework built off the V8 JavaScript engine from Google Chrome that allows for event-driven, asynchronous I/O requests to help handle a large amount of concurrent connection requests efficiently." />
  <title>Install Node.js - InMotion Hosting</title>
  <link href="http://www.inmotionhosting.com/support/website/javascript/install-nodejs" rel="canonical" />
  <link rel="stylesheet" href="https://www.inmotionhosting.com/support/templates/supportcentertemplate/css/temp.css?v=2016053108" type="text/css" />
  <link rel="stylesheet" href="/support/media/jui/css/bootstrap-responsive.css?v=2016011214" type="text/css" />
  <link rel="stylesheet" href="http://www.inmotion.net/support/modules/mod_slogin/tmpl/compact/slogin.css" type="text/css" />
  <script src="/support/media/jui/js/jquery.min.js" type="text/javascript"></script>
  <script src="/support/media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
  <script src="/support/media/jui/js/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="/support/media/jui/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="http://www.inmotion.net/support/modules/mod_slogin/media/slogin.js" type="text/javascript"></script>
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
						
		_gaq.push(['_setCustomVar', 3, 'DateMonthModified', '2014-03', 3]);
		_gaq.push(['_setCustomVar', 4, 'DateMonthPublished', '2013-05', 3]);
		_gaq.push(['_setCustomVar', 5, 'Author', 'JacobN', 3]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>






		






	<link rel="shortcut icon" href="//imh01-inmotionhosting1.netdna-ssl.com/img/imh_favicon_hd.png" type="image/x-icon" />






	





	<!-- cid:62843625838f140b9062cb38447399a0 -->





	


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
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '66.249.79.133']);

                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'chat', 'launch', 'support center']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '66.249.79.133']);
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
                <a href="/" class="span3"><img class='imhLogo' src="//imh01-inmotionhosting1.netdna-ssl.com/img/logo-imh.png" alt="InMotion Hosting" /></a>
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

	<div style="background:url('//imh01-inmotionhosting1.netdna-ssl.com/img/rednoise.gif');">
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
		</li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_with_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='/support/website/javascript' itemprop='url'><span itemprop='title'>JavaScript<span></a><div class='dropdown_3columns'><div class='col_3'><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/javascript/diagnose-javascript-errors'>How do I diagnose JavaScript errors on my site?</a> (26360 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/javascript/install-nodejs'>Install Node.js</a> (11891 hits)</div></div></div></li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_no_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><span itemprop='title'>Install Node.js</span></li>			</ul>
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
															Install Node.js									</h1>
			
																
				
					<div style='font-size:12px; color:#aaa; margin-bottom:-10px; padding-top:5px;'>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Written by Jacob Nicholson</div>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Views:</span> <span name='page_views' id='page_views'>11,891</span></div>
							<div style='float:left; margin-right:20px;' title='Originally published: May 10, 2013'><span style='color:#606060;'>Published:</span> Mar 19, 2014</div>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Comments:</span> <a href='#comments'>26</a></div>
							<div style='clear:both;'></div>
						</div>
						</div>
	
		<div style='margin:0 0 10px 0;border-bottom:1px solid #ddd;'>
			<table style='font-size:12px;'>
				<tr>
					<td valign='top'><strong>Discussions on this article:</strong></td>
					<td valign='top'><ul><li><a href='#comment-13386'>Do I need Root Access?</a></li></ul></td>
				</tr>
			</table>
		</div>
		
	
		

	

								<p>In this guide I'll show you how to install <a href="/support/website/getting-started-guides/nodejs" target="_blank"><strong>Node.js</strong></a> on either your VPS or dedicated server. <strong>Node.js</strong> is a server-side JavaScript framework built off the V8 JavaScript engine from Google Chrome that allows for event-driven, asynchronous I/O requests to help handle a large amount of concurrent requests efficiently.</p> 

<div style="background-color: #FAFAD2; border: 1px #D3D3D3 dashed; border-radius: 5px; padding: 0px 0px 0px 5px;">
  <p>You need <a href="/support/website/general-server-setup/root-access-faq" target="_blank">root access</a> to either your VPS or dedicated server in order to follow along with these steps.</p>
</div>

<h2>Installing Node.js</h2>

  <p>Using the steps below you should be able to quickly install <strong>Node.js</strong> on your server, and begin testing commands directly on the server via the interpreter, or begin writing applications to run.</p>
  
  <ol class="article_list">
    <li>Login to your server as the root user via <a href="/support/website/general-server-setup/how-to-login-ssh" target="_blank">SSH</a>.</li>
    <li>You need to check for some software dependencies for <strong>Node.js</strong>, as it requires OpenSSL, Python2.6+, and a compiler like gcc. You can check for these with the following <strong>yum</strong> commands:
      
      <p class="cli" style="width: 550px;">
      yum list installed | egrep "openssl-devel|python26|python27|gcc-c++"
      </p>
      
      <p>You might get output back like this:</p>
      
      <p class="cli" style="width: 550px;">
        gcc-c++.x86_64                      4.4.7-3.el6               @base<br />
      openssl-devel.x86_64                1.0.0-27.el6_4.2          @updates
      </p>
      
      <p>On this particular server, we already have our <strong>gcc-c++</strong> compiler, and the <strong>openssl-devel</strong> package installed. So we just need to install Python 2.6, or verifiy if it's already on the server and not installed via <strong>yum</strong>.</p>
        
      <h3>Check Python version or install Python 2.6</h3>
        
      <p>If you're on a newer VPS or dedicated server you should be running CentOS 6.x, you can confirm this by running the following command:</p>
        
      <p class="cli" style="width: 550px;">
      cat /etc/redhat-release
      </p>
        
      <p>Which should return:</p>
        
      <p class="cli" style="width: 550px;">
      CentOS release 6.4 (Final)
      </p>
        
      <p>Older servers would instead return something like:</p>
        
      <p class="cli" style="width: 550px;">
      CentOS release 5.9 (Final)
      </p> 
        
      <p>Now check your Python version with this command:</p>
        
      <p class="cli" style="width: 550px;">
      python --version
      </p>
        
     <p>You should get back something like:</p>
        
      <p class="cli" style="width: 550px;">
      Python 2.6.6
      </p>
        
      <p>If you're on an older server, and your Python version is older than 2.6, run the following command to install Python 2.6:</p>
        
      <p class="cli" style="width: 550px;">
      yum install python26
      </p>
        
        <p>If either the <strong>gcc-c++</strong> compiler, or the <strong>openssl-devel</strong> package were also missing when you checked, you'd run one of the following to install those dependencies:</p>
      
      <p class="cli" style="width: 550px;">
        yum install gcc-c++<br />
      yum install openssl-devel
      </p>
     </li>
    <li>Now you want to navigate to your server's source directory:
      
      <p class="cli" style="width: 550px;">
      cd /usr/local/src
      </p>
    </li>
    <li>Grab the latest copy of <strong>Node.js</strong>:
      
      <p class="cli" style="width: 550px;">
      wget http://nodejs.org/dist/node-latest.tar.gz
      </p>
    </li>
    <li>Extract the <strong>Node.js</strong> archive:
      
      <p class="cli" style="width: 550px;">
      tar zxvf node-latest.tar.gz
      </p>
    </li>
    <li>Navigate to the <strong>Node.js</strong> directory:
      
      <p class="cli" style="width: 550px;">
      cd node-v*
      </p>
    </li>
    <li>Now finally configure and install <strong>Node.js</strong> with this series of commands:
      
      <p class="cli" style="width: 550px;">
        python2.6 configure<br />
        make PYTHON=python2.6<br />
        make install
      </p>
      
      <p>Upon a successful installation, the last few lines should look like this:</p>
      
      <p class="cli" style="width: 550px;">
        installing /usr/local/lib/node_modules/npm/scripts/clean-old.sh<br />
        symlinking ../lib/node_modules/npm/bin/npm-cli.js -> /usr/local/bin/npm<br />
        updating shebang of /usr/local/bin/npm to /usr/local/bin/node
      </p>      
      
    </li>
    
    <li>Finally you can test your <strong>Node.js</strong> installation by simply calling the <strong>node</strong> interpreter, running a few basic JavaScript commands, then hitting <strong>Ctrl-C</strong> on your keyboard twice in a row to exit:
      
      <p class="cli" style="width: 550px;">
        root@server [~]# node<br />
        > a = 3;<br />
        <span style="color: yellow;">3</span><br />
        > b = 2;<br />
        <span style="color: yellow;">2</span><br />
        > a + b;<br />
        <span style="color: yellow;">5</span><br />
        ><br />
        (^C again to quit)<br />
        >
      </p>  
      
    </li>
  </ol>
  
  <p>You should now have a successful installation of <strong>Node.js</strong> running, and in further guides we'll go more in-depth with some of the amazing things you can do with <strong>Node.js</strong>!</p>
      
      
      
        
        
        
        

 
	
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
	<iframe src='//www.facebook.com/plugins/like.php?href=http://www.inmotion.net/support/website/javascript/install-nodejs&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=209145459223160' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:100px; height:21px;' allowTransparency='true'></iframe>
</div>

	                        
<div style='display:inline-block;'>
	<div class='g-plusone' data-size='medium' data-href='http://www.inmotion.net/support/website/javascript/install-nodejs'></div>
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
		<input type="hidden" name="return" value="aW5kZXgucGhwP29wdGlvbj1jb21fY29udGVudCZjYXRpZD00NTEmaWQ9MjcwNyZ2aWV3PWFydGljbGUmSXRlbWlkPTEwMQ==" />
		<input type="hidden" name="738684a246550c9d1961948b57e32732" value="1" />	</div>
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



		<a name='comment-13386'></a>
		<div  style='margin:0px;'>
			<h2><span style='font-weight:bold;color:#000;'>Question:</span> Do I need Root Access?</h2>
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/e72ea6c798fc48e32efe22216eca1e76?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/e72ea6c798fc48e32efe22216eca1e76'>Neil Gee</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-27 8:46 pm</div>
				                <div><p>Great article - Thanks.Is it possible that Node can be installed by a domain&nbsp;user&nbsp;for a particular domain that has SSH access, so thay can install packages like Grunt and build a workflow without having to do it as root.</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13386);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13397'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-et9qjCJVL08/AAAAAAAAAAI/AAAAAAAAAC4/C539ZYF2HNc/s90-p-rw-no/photo.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/scott'>scott</a></div>
						<div><a href='https://plus.google.com/u/0/103891980085974966828/' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>37,019 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-28 8:06 am</div>
				                <div>Hello Neil,<br />
<br />
Installing node.js unfortunately needs to be done with the <a href="http://www.inmotionhosting.com/support/edu/whm/intro-to-web-hosting/standard-vs-root-access">root user</a>. Even with SSH access they would nee the root level permissions.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13397);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13492'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/d0c5ecded6f4e41fa97511bad41ce33b?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/d0c5ecded6f4e41fa97511bad41ce33b'>Firanolfind</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-31 6:50 am</div>
				                <div><p>Great nodejs installation guide!!! Super useful!</p>
<p>Cheers!</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13492);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-14210'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/c8ee408939084f67b155a33ce85c3de2?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/c8ee408939084f67b155a33ce85c3de2'>Jim B</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-08-21 12:32 pm</div>
				                <div><p class="MsoNormal"><span style="font-size: 12pt; font-family: 'Calibri Light', sans-serif;">I would like to add that the above instructions worked perfect. After many hours of experimenting with my server.js file and index.html files accessing an MYSQL DB, locally I was able to get it to work in a web browser, (VPS Hosting). Others around the country trying through the index.html I created would connect but not receive any data from the SQL DB. Unable to resolve after several days of trying I contacted support via chat. Thanks to the excellent support team (Chris R) he suggested:&nbsp;</span></p>
<p class="MsoNormal"><span style="font-size: 12pt; font-family: 'Calibri Light', sans-serif;">Open Ports in APF:</span></p>
<p class="MsoNormal"><span style="font-size: 12pt; font-family: 'Calibri Light', sans-serif;"><a href="/support/../general-server-setup/how-to-open-a-port-in-your-firewall" target="_blank"><span style="color: blue;">http://www.inmotionhosting.com/support/website/general-server-setup/how-to-open-a-port-in-your-firewall</span></a></span></p>
<p class="MsoNormal"><span style="font-size: 12pt; font-family: 'Calibri Light', sans-serif;">Followed the instructions in the link he gave, I added the port I wanted to use. Everything is working perfect now across the country and locally, including over 3g and 4g. There are many examples on the internet on how to utilize node.js and no one seems to pick the same port for their examples for listening or sending so this threw me off even more. I hope this info helps someone and saves them hours of troubleshooting. </span></p>
<h4><span style="font-size: 12pt; line-height: 107%; font-family: 'Calibri Light', sans-serif;">As a side note: I had asked Chris R what port does Inmotion or you recommend to use, he responded: &ldquo;</span><span class="chathistoryoperatortext1"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light','sans-serif'; mso-ascii-theme-font: major-latin; mso-fareast-font-family: 'Times New Roman'; mso-hansi-theme-font: major-latin; mso-bidi-font-family: 'Times New Roman'; mso-bidi-theme-font: minor-bidi; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">I have found in online references that </span></span><span class="st"><span style="font-size: 12pt; line-height: 107%; font-family: 'Calibri Light', sans-serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">8124 is the common port used although you can set up custom ports on VPS platform if needed&rdquo; I did use another port but might switch it to 8124.</span></span></h4></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(14210);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-14813'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/71fe642034230a2bda358a2de8ae7717?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/71fe642034230a2bda358a2de8ae7717'>buysoundcloudlikes.com</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-09-08 4:46 am</div>
				                <div><p>Thanks to Scott M. You have shared useful info about installing Node.js.</p>
<h2>&nbsp;</h2></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(14813);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18474'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/799bd4d85055f48e3d8d448b2008d561?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/799bd4d85055f48e3d8d448b2008d561'>Tim</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-14 10:00 am</div>
				                <div><p>Just to concur with Jim B - I also had problems connecting as an outside user (via multiple proxies) but no problem connecting from my static IP, because the IP is allowed for root access. I had to edit the apf file to add the relevant port so, if anyone gets stuck, this link is your friend:&nbsp;http://www.inmotionhosting.com/support/website/general-server-setup/how-to-open-a-port-in-your-firewall</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18474);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-19661'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/f8d92b479e88a66c69385c28041f41c1?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/f8d92b479e88a66c69385c28041f41c1'>Dustian Countryman</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-01-18 7:55 am</div>
				                <div><p>How do you set it up so if the server reboots it will auto start?</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(19661);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-19721'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-01-19 2:52 pm</div>
				                <div>Hello Dustian,<br />
<br />
Thanks for the question!  This is not an uncommon question with the Node.JS community.  They recommend either an "upstart" script (Linux) or something called "Forever".  You can find the particulars discussed <a href="http://stackoverflow.com/questions/16547996/how-to-automatically-restart-a-node-server" rel="nofollow" target="_blank">here (how to automatically restart a node server)</a> .   There are other options as well, but you can find them by using your favorite search engine.  I hope this helps to answer your question, please let us know if you require any further  assistance.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(19721);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-25880'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/b8a79a1240bc2e4364357c6a2cf62bc0?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/b8a79a1240bc2e4364357c6a2cf62bc0'>Nagasimha Iyengar</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-08-18 5:06 pm</div>
				                <div><p>Does npm work on inmotion VPS with nodejs installed? What about github integration?</p>
<p>&nbsp;</p>
<p>Thanks</p>
<p>Naga</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(25880);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-25902'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-08-19 10:41 am</div>
				                <div>Hello Naga,<br />
<br />
Yes npm works and you can install git as well to incorporate githubs repos.<br />
<br />
Best Regards,<br />
TJ Edens</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(25902);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-26974'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/07d50c563b5716e6e3b4534fe3b5cc57?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/07d50c563b5716e6e3b4534fe3b5cc57'>Kelvin Carrion</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-09-25 11:33 pm</div>
				                <div><p>Good day.</p>
<p>I installed nodejs according to the tutorial, I want to run npm and shows no options.</p>
<p>What did I do wrong?</p>
<p>&nbsp;</p>
<p>Thank you very much for your help.</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(26974);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27020'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-et9qjCJVL08/AAAAAAAAAAI/AAAAAAAAAC4/C539ZYF2HNc/s90-p-rw-no/photo.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/scott'>scott</a></div>
						<div><a href='https://plus.google.com/u/0/103891980085974966828/' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>37,019 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-09-28 1:29 pm</div>
				                <div>Hello Kelvin,<br />
<br />
Did you install npm after installing node?<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27020);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27026'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/07d50c563b5716e6e3b4534fe3b5cc57?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/07d50c563b5716e6e3b4534fe3b5cc57'>Kelvin Carrion</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-09-28 1:53 pm</div>
				                <div><p>Hi Scott,Yes, I install nodejs and npm, when I execute the command npm install forever, dont shows the action.</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27026);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27032'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-et9qjCJVL08/AAAAAAAAAAI/AAAAAAAAAC4/C539ZYF2HNc/s90-p-rw-no/photo.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/scott'>scott</a></div>
						<div><a href='https://plus.google.com/u/0/103891980085974966828/' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>37,019 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-09-28 3:04 pm</div>
				                <div>Is there any error message that appears?</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27032);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27039'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/07d50c563b5716e6e3b4534fe3b5cc57?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/07d50c563b5716e6e3b4534fe3b5cc57'>Kelvin Carrion</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-09-28 6:55 pm</div>
				                <div><p>No, just show one jump of line</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27039);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27050'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-et9qjCJVL08/AAAAAAAAAAI/AAAAAAAAAC4/C539ZYF2HNc/s90-p-rw-no/photo.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/scott'>scott</a></div>
						<div><a href='https://plus.google.com/u/0/103891980085974966828/' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>37,019 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-09-29 6:30 am</div>
				                <div>Hello Kelvin,<br />
<br />
Odd, we did not have that experience. Since I cannot duplicate I can only take a stab at it. Here is a link to <A href="https://developer.appcelerator.com/question/146720/npm-not-found">a help article</a>, it is on a MAC device, but the situation could possibly help you as well.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27050);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27823'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/e8bc0321799c84c38d528202f6b9cfe5?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/e8bc0321799c84c38d528202f6b9cfe5'>Lindsey Bohland</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-23 6:54 pm</div>
				                <div><p>Have these instructions been tested on&nbsp;CentOS 6.7? I'm getting errors at step 7. Wondering if the newer CentOS version coupled with gcc 4.4 might be a problem...</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27823);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27858'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-26 9:50 am</div>
				                <div>Hello Lindsey,<br />
<br />
No these steps have not been tested on CentOS 6.7 at this time. Are you getting errors during the installation?<br />
<br />
Best Regards,<br />
TJ Edens</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27858);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27883'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/e8bc0321799c84c38d528202f6b9cfe5?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/e8bc0321799c84c38d528202f6b9cfe5'>Lindsey Bohland</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-26 4:49 pm</div>
				                <div><p>Yes indeed. Things are successful until I run&nbsp;<span style="color: rgb(255, 255, 255); font-family: adelle-sans, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 22px; background-color: rgb(0, 0, 0);">python2.6 configure</span>, which returns the following error:</p>
<p>&nbsp;</p>
<p class="p1"><span class="s1">WARNING</span>: C++ compiler too old, need g++ 4.8 or clang++ 3.4 (CXX=g++)</p>
<p class="p1">&nbsp;</p>
<p class="p1">I followed the steps on this page and was able to get node running.&nbsp;http://krisreeves.com/code/compile-node-js-4-0-on-centos-6/</p>
<p class="p1">&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27883);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27968'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/fa03e6fc73ed7870f6a559add5c9d7e3?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/fa03e6fc73ed7870f6a559add5c9d7e3'>Bill Stephenson</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-28 11:35 pm</div>
				                <div><p>I just tried this and got the same error as&nbsp;<a href="//www.gravatar.com/e8bc0321799c84c38d528202f6b9cfe5">Lindsey Bohland</a>. The instructions at her link did bring much joy though, so she has my gratitude and admiration.&nbsp;And, fwiw, these install instructions for CouchDB on&nbsp;<span style="font-family: Menlo;">CentOS 6.7</span>&nbsp;also worked for me today, so my joy was doubled with Lindsey's post here.&nbsp;Thank you all for sharing!!!</p>
<p>&nbsp;</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27968);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27994'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/fa03e6fc73ed7870f6a559add5c9d7e3?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/fa03e6fc73ed7870f6a559add5c9d7e3'>Bill Stephenson</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-29 12:29 pm</div>
				                <div><p>I guess&nbsp;I forget to include the link to the build instruction for CouchDb. You can find them here:http://www.tecmint.com/install-apache-couchdb-in-rhel-centos-debian-and-ubuntu/</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27994);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-28196'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/30898ddeea6d00bc378c696818665b41?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/30898ddeea6d00bc378c696818665b41'>Vaggouras</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-11-05 7:47 am</div>
				                <div><p>Hello.</p>
<p>I have a pro plan. Can I install Node.js or should I upgrade?</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(28196);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-28204'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-NBh2f5kDJfQ/AAAAAAAAAAI/AAAAAAAAACU/6SP6_r-gSAQ/s90-p-rw-no/photo.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/Tim S'>Tim S</a></div>
						<div><a href='https://twitter.com/IMH_TimS' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='https://www.facebook.com/inmotionhosting' target='_blank'><img src='//www.inmotionhosting.com/img/icon-facebook.png' style='width:20px;' /></a><a href='https://plus.google.com/u/0/116527876167270483913' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>11,071 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-11-05 9:10 am</div>
				                <div>Hello Vaggouras,<br />
<br />
To install Node.js you have to be on a VPS or higher. You will need to upgrade accordingly. <br />
<br />
Thanks!<br />
<br />
Tim S</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(28204);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-30474'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/c5bbc2d9fb454f830e173929f3fde6d8?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/c5bbc2d9fb454f830e173929f3fde6d8'>Michael</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-02-11 6:00 am</div>
				                <div><p>Saved me hours of work. Great Work</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(30474);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
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
						
						<script type='text/javascript' src='//imh01-inmotionhosting1.netdna-ssl.com/support/components/com_pup/tinymce/js/tinymce/tinymce.min.js'></script>
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
			<h3><span class='comment-count'>26</span> Questions & <span class='comment-text'>Comments</span></h3>
			
			<p>
				<a href='#comment-13386'>Do I need Root Access?</a>
			</p>
					<p class='post-a-comment'><a href='#post_a_comment' class='btn btn-primary small'>Post a comment</a></p>
			<p class='back-to'>Back to <a href='#first-comment'>first comment</a> | <a href='#top-of-page'>top</a></p>
		</div>
	</div>
	<div style='clear:both;'></div>
</div>






	<div style="background:url('//imh01-inmotionhosting1.netdna-ssl.com/img/pattern.gif');padding-top:20px;">
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



<script src="//imh01-inmotionhosting1.netdna-ssl.com/support/templates/supportcentertemplate/js/combined.js?v=2016052509" type="text/javascript"></script>

<!-- <div name='853_overlay_join_community' id='853_overlay_join_community'></div> -->




<script type="text/javascript">
                    var launchBoldChat = function() {
                window.open('https://www.inmotionhosting.com/support/launch-chat/?rdid=2324923566971164486&url=' + escape(document.location.href), 'Chat8718689652968401074', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width=640,height=650');

                        _gaq.push(['_setAccount', 'UA-1501988-22']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '66.249.79.133']);

                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'chat', 'launch', 'support center']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '66.249.79.133']);
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
        	        id:'2707',
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