<?php die("Access Denied"); ?>#x#a:3:{s:4:"body";s:77044:" 
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

		  <base href="http://www.inmotionhosting.com/support/website/server-usage/linux-check-memory-usage" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="last-modified" content="2014-02-14T02:26:01-08:00" />
  <meta name="keywords" content="linux command commands memory RAM usage free page cache caching filesystem hard drive sar /proc/meminfo" />
  <meta name="author" content="Jacob Nicholson" />
  <meta name="description" content="Learn how to check Linux memory usage to make sure you're looking at the correct Linux free memory values and find out about the Linux page cache." />
  <title>Linux Memory Usage - InMotion Hosting</title>
  <link href="http://www.inmotionhosting.com/support/website/server-usage/linux-check-memory-usage" rel="canonical" />
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
						
		_gaq.push(['_setCustomVar', 3, 'DateMonthModified', '2014-02', 3]);
		_gaq.push(['_setCustomVar', 4, 'DateMonthPublished', '2014-02', 3]);
		_gaq.push(['_setCustomVar', 5, 'Author', 'JacobN', 3]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>






		






	<link rel="shortcut icon" href="//imh01-inmotionhosting1.netdna-ssl.com/img/imh_favicon_hd.png" type="image/x-icon" />






	





	<!-- cid:abab3f11d0b7aa03f6c548c166ed62ef -->





	


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
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '70.90.188.125']);

                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'chat', 'launch', 'support center']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '70.90.188.125']);
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
		</li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_with_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='/support/website/server-usage' itemprop='url'><span itemprop='title'>Server Usage<span></a>
			<div class='dropdown_3columns' style='width:900px; margin-left:-250px;'>
				<div class='col_1' style='width:290px;'><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/server-usage/view-level-of-traffic-with-apache-access-log'>View level of traffic with Apache access log</a> (44,710 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/server-usage/create-server-load-monitoring-bash-script'>Create server load monitoring bash script</a> (20,539 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/server-usage/edit-main-phpini'>Editing your main php.ini on VPS and Dedicated accounts</a> (10,881 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/server-usage/when-should-i-restart-my-vps'>When should I restart my VPS?</a> (8,369 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/server-usage/understanding-server-loads'>Understanding Server Loads</a> (7,047 hits)</div></div>
				<div class='col_1' style='width:290px;'><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/server-usage/how-can-i-view-my-accounts-resource-usage'>How can I view my accounts resource usage?</a> (23,167 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/server-usage/using-the-linux-top-command-in-batch-mode'>Using the Linux top command in batch mode</a> (15,408 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/server-usage/linux-check-memory-usage'>Linux Memory Usage</a> (10,377 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/server-usage/create-mysql-query-monitoring-bash-script'>Create MySQL query monitoring bash script</a> (8,224 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/server-usage/server-load-monitoring'>Server load monitoring</a> (6,650 hits)</div></div>
				<div class='col_1' style='width:290px;'><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/server-usage/what-is-high-system-resource-usage'>What is high system resource usage?</a> (20,932 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/server-usage/identify-and-block-bad-robots-from-website'>Identify and block bad robots from website</a> (13,966 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/server-usage/advanced-server-load-monitoring'>Advanced server load monitoring</a> (9,240 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/server-usage/what-should-i-do-if-my-account-uses-excessive-resources'>What should I do if my account uses excessive resources?</a> (7,128 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/server-usage/common-causes-of-accounts-that-use-excessive-resources'>Common causes of accounts that use excessive resources</a> (5,529 hits)</div></div>
			</div>
		</li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_no_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><span itemprop='title'>Linux Memory Usage</span></li>			</ul>
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
															Linux Memory Usage									</h1>
			
																
				
					<div style='font-size:12px; color:#aaa; margin-bottom:-10px; padding-top:5px;'>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Written by Jacob Nicholson</div>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Views:</span> <span name='page_views' id='page_views'>10,377</span></div>
							<div style='float:left; margin-right:20px;' title='Originally published: Feb 7, 2014'><span style='color:#606060;'>Published:</span> Feb 14, 2014</div>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Comments:</span> <a href='#comments'>1</a></div>
							<div style='clear:both;'></div>
						</div>
						</div>
		
	
		

	

								<div class="in_this_tutorial">
  <h2>Navigation:</h2>
  <button type="button" class="btn btn-primary" onclick="window.location.hash='free-m';">Linux free -m</button>
  <button type="button" class="btn btn-primary" onclick="window.location.hash='linux-page-cache';">Linux page cache</button>
  <button type="button" class="btn btn-primary" onclick="window.location.hash='sar-r';">Linux sar -r</button>
  <button type="button" class="btn btn-primary" onclick="window.location.hash='proc-meminfo';">/proc/meminfo</button>
</div>

<img src="//cdn.inmotionhosting.com/support/images/stories/website/server-usage/linux-memory-usage/is-linux-running-out-of-memory-nope-linux-page-cache-to-the-rescue.png" alt="Is Linux running out of memory nope Linux page cache to the rescue">

<p>Understanding Linux memory usage and how to check for used and free memory or RAM in Linux can be difficult. But once you learn about the <a href="#linux-page-cache">Linux page cache</a> and how to read the status of it, it's really quite simple.</p>

<p>Linux very efficiently caches frequently used files from the hard drive, to very fast to access RAM on the server. Data is stored electronically in RAM, so its speed is not limited by physical magnetic heads or spindle motors.</p>

<p>In this guide I'll go over <strong>Linux free memory</strong>, and how to properly read <strong>Linux memory info</strong>.</p>

<!-- //NOTE Linux free -m -->
<a name="free-m"></a>
<h2>Linux free -m</h2>

<p>The most common way you'll see on the web to check for free memory in Linux is by using the <strong>free</strong> command.</p>

<p>Using the <strong style="color: red;">free -m</strong> command to check your Linux memory usage, displays the values as <strong>MB</strong> instead of <strong>KB</strong>.</p>

<p>Most people will run this command and panic thinking they only have <span style="color: #0AFF00; background-color: #3A3A3A;border: 2px solid #F00; padding: 1px 5px 1px 5px;">1 MB</span> of free memory on the server:</p>

<div style="width: 100%;">
<div style="margin: 0 auto; width: 480px">
<pre style="width: 480px;margin-bottom: 15px;color: #FFF;  background: #3A3A3A;  border: 5px groove #D80000;  border-top-width: 0;border-right-width: 0;padding: 3px 0px 3px 10px;">root@server [~]# <strong style="color:red;">free -m</strong>
               total    used    free    shared    buffers    cached
Mem:            <span style="color: #09F;">1024    </span><span style="border: 1px solid rgb(255, 245, 0); padding: 0px 2px; color: rgb(240, 153, 23);">1022</span>     <span style="color: #0AFF00;border: 1px solid red;padding: 0px 2px 0px 2px;">1</span>         0          0       <span style="color: #FFF500;">822</span>
-/+ buffers/cache:       <span style="color: #F00;  border: 1px solid #1BFF11;  padding: 0px 2px 0px 2px; ">200</span>   <span style="color: #1BFF11;border: 1px solid;padding: 0px 2px 0px 2px;">823</span>
Swap:              0       0      0</pre>
</div>
</div>

<p>The <strong>free</strong> column beside <strong>-/+ buffers/cache</strong> with <span style="color: #0AFF00; background-color: #3A3A3A;  border: 2px solid #0AFF00; padding: 2px 5px 2px 5px;">823 MB</span> is the actual free memory available to Linux.</p>

<p><span style="color: #09F;  background-color: #3A3A3A;    padding: 3px 5px 3px 5px;">1024 MB</span> is the total system memory available, which would be physical RAM.</p>


<p><span style="color: #0AFF00;  background-color: #3A3A3A;  border: 2px solid #FF0000;  padding: 2px 5px 2px 5px;">1 MB</span> and <span style=" color: #0AFF00;  background-color: #3A3A3A;  border: 2px solid #0AFF00;  padding: 2px 5px 2px 5px; ">823 MB</span> both show <strong>free</strong> because an application has access to both for memory storage.</p>

<p><span style="color: #0AFF00;  background-color: #3A3A3A;  border: 2px solid #F00;  padding: 2px 5px 2px 5px;">1 MB</span> <strong>free</strong> plus the <span style="color: #FFF500;  background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">822 MB</span> <strong>cached</strong> gives the <span style=" color: #0AFF00;  background-color: #3A3A3A;  border: 2px solid #0AFF00;  padding: 2px 5px 2px 5px; ">823 MB</span> of memory actually <strong>free</strong> to use if needed.</p>

<!-- //NOTE Linux page cache -->
<a name="linux-page-cache"></a>
<h2>Linux page cache</h2>

<p>Linux uses something called a page cache in order to cache frequently hit files from the hard drive into memory.</p>

<p>There is an awesome helpful tool called <a href="http://hoytech.com/vmtouch/" target="_blank">vmtouch</a> which allows you to directly interact with the Linux page cache. Below I'm using this to check if any parts of a <strong>100 MB</strong> log file called <strong>access_log</strong> are in the page cache already:</p>

<div style="width: 100%;">
<div style="margin: 0 auto; width: 500px">
<pre style="width: 500px;margin-bottom: 15px;color: #FFF;  background: #3A3A3A;  border: 5px groove #D80000;  border-top-width: 0;border-right-width: 0;padding: 3px 0px 3px 10px;">root@server [~]# <strong style="color:red;">vmtouch -v /home/access_log</strong>
/home/access_log
[                                                            ] <span style="color:#00b1ff;">0/25642</span>

           Files: 1
     Directories: 0
  Resident Pages: <span style="color:#00b1ff;">0/25642</span>  <span style="color: #FFF500">0/100M</span>  <span style="color:#0AFF00;">0%</span>
         Elapsed: 0.000568 seconds</pre>
</div>
</div>
  
<p>You can see that <span style="color:#00b1ff;background-color: #3A3A3A; padding: 3px 5px 3px 5px;">0/25642</span> of all <strong>resident pages</strong> that make up this file are in the page cache.</p>      

<p>This is also represented as <span style="color: #FFF500;background-color: #3A3A3A;padding: 3px 5px 3px 5px;">0/100 MB</span> worth of that file's data, or <span style="color:#0AFF00;background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">0%</span>.</p>

<p>Here I'm using the <strong>time</strong> command to show how long a <strong>grep</strong> search takes initially:</p>

<div style="width: 100%;">
<div style="margin: 0 auto; width: 380px">
<pre style="width: 380px;margin-bottom: 15px;color: #FFF;  background: #3A3A3A;  border: 5px groove #D80000;  border-top-width: 0;border-right-width: 0;padding: 3px 0px 3px 10px;">root@server [~]# <strong style="color:red;">time grep wp-login.php access_log -c</strong>
702754

real    <span style="color:#0AFF00;">0m30.056s</span>
user    0m0.192s
sys     0m0.082s</pre>
</div>
</div>

<p>It took <span style=" color: #0AFF00;  background-color: #3A3A3A;  padding: 3px 5px 3px 5px; ">30.056 seconds</span> to read that file from the hard drive, let's see if any of it made it to the page cache:</p>

<div style="width: 100%;">
<div style="margin: 0 auto; width: 530px">
<pre style="width: 530px;margin-bottom: 15px;color: #FFF;  background: #3A3A3A;  border: 5px groove #D80000;  border-top-width: 0;border-right-width: 0;padding: 3px 0px 3px 10px;">root@server [~]# <strong style="color:red;">vmtouch -v /home/access_log</strong>
/home/access_log
[OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO] <span style="color:#00b1ff;">25642/25642</span>

           Files: 1
     Directories: 0
  Resident Pages: <span style="color:#00b1ff;">25642/25642</span>  <span style="color: #FFF500;">100M/100M</span>  <span style="color:#0AFF00;">100%</span>
         Elapsed: 0.003133 seconds</pre>
</div>
</div>       
           
<p>All <span style="color:#00b1ff;background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">25642/25642</span> <strong>resident pages</strong> are in the page cache now, and all <span style="color: #FFF500;background-color: #3A3A3A; padding: 3px 5px 3px 5px;">100 MB</span> worth of data, or <span style="color:#0AFF00;background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">100%</span>.</p>

<p>We know the whole <strong>access_log</strong> file is in memory, let's see what happens when we try to search in the file again:</p>       
<div style="width: 100%;">
<div style="margin: 0 auto; width: 360px">
<pre style="width: 360px;margin-bottom: 15px;color: #FFF;  background: #3A3A3A;  border: 5px groove #D80000;  border-top-width: 0;border-right-width: 0;padding: 3px 0px 3px 10px;">root@server [~]# <strong style="color:red;">time grep wp-admin access_log -c</strong>
103161

real    <span style="color:#0AFF00;">0m0.168s</span>
user    0m0.137s
sys     0m0.030s</pre>
</div>
</div>

<p>It took <span style=" color: #0AFF00;  background-color: #3A3A3A;  padding: 3px 5px 3px 5px; ">30.056 seconds</span> reading the file from disk, down to just <span style=" color: #0AFF00;  background-color: #3A3A3A;  padding: 3px 5px 3px 5px; ">0.168 seconds</span> reading it from RAM.</p>

<p>That's over a <strong>17,000%</strong> speed increase! This is why I say that Linux uses memory very efficiently.</p>

<p>The same thing applies to your applications and scripts that run on the server. Linux will try to move them to the page cache for quicker access. If another application needs more memory, it can simply take it back.</p>

<p>This throws a lot of people off because they see Linux is <strong>using</strong> a lot of memory, while in reality it's using it to speed things along while the full memory available to the server isn't actively needed for running applications.</p>

<!-- //Note Linux sar -r -->
<a name="sar-r"></a>
<h2>Linux sar -r</h2>

<p>If you wanted to take a look at your Linux memory usage historically then the <a href="http://www.inmotionhosting.com/support/website/ssh/using-the-linux-sar-command" target="_blank">Linux sar command</a> is a great tool which uses <strong>System Activity Report</strong> logs to pull historical usage data from your server:</p>

<div style="width: 100%;">
<div style="margin: 0 auto; width: 580px">
<pre style="width: 580px;margin-bottom: 15px;color: #FFF;  background: #3A3A3A;  border: 5px groove #D80000;  border-top-width: 0;border-right-width: 0;padding: 3px 0px 3px 10px;">root@server [~]# <strong style="color:red;">sar -r</strong>
10:06:01 PM <span style="color: #00B1FF;">kbmemfree</span> <span style="color:red">kbmemused</span>  <span style="color:#0AFF00;">%memused</span> kbbuffers  <span style="color: #FFF500;">kbcached</span>  kbcommit   %commit
10:06:01 PM    <span style="color: #00B1FF;">688956</span>    <span style="color:red">359620</span>     <span style="color:#0AFF00;">34.30</span>         0    <span style="color: #FFF500;">142912</span>         0      0.00
10:16:01 PM    <span style="color: #00B1FF;">688792</span>    <span style="color:red">359784</span>     <span style="color:#0AFF00;">34.31</span>         0    <span style="color: #FFF500;">143000</span>         0      0.00
10:26:01 PM    <span style="color: #00B1FF;">678744</span>    <span style="color:red">369832</span>     <span style="color:#0AFF00;">35.27</span>         0    <span style="color: #FFF500;">152968</span>         0      0.00
10:36:01 PM    <span style="color: #00B1FF;">678052</span>    <span style="color:red">370524</span>     <span style="color:#0AFF00;">35.34</span>         0    <span style="color: #FFF500;">153516</span>         0      0.00
10:46:01 PM    <span style="color: #00B1FF;">677532</span>    <span style="color:red">371044</span>     <span style="color:#0AFF00;">35.39</span>         0    <span style="color: #FFF500;">154024</span>         0      0.00
10:56:01 PM    <span style="color: #00B1FF;">676688</span>    <span style="color:red">371888</span>     <span style="color:#0AFF00;">35.47</span>         0    <span style="color: #FFF500;">154036</span>         0      0.00
11:06:01 PM    <span style="color: #00B1FF;">676160</span>    <span style="color:red">372416</span>     <span style="color:#0AFF00;">35.52</span>         0    <span style="color: #FFF500;">154216</span>         0      0.00
11:16:01 PM      <span style="color: #00B1FF; ">3644</span>   <span style="color:red;padding-left: 1px;">1044932</span>    <span style="color:#0AFF00;padding-left: 6px;">99.65</span>         0     <span style="color: #FFF500;">60588</span>         0      0.00
Average:       <span style="color: #00B1FF;">682327</span>    <span style="color:red">366249</span>     <span style="color:#0AFF00;">34.93</span>         0    <span style="color: #FFF500;">113811</span>         0      0.00</pre>
</div>
</div>

<p>The <span style="color: #00B1FF;background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">kbmemfree</span> column shows how much memory was <strong>free</strong>.</p>

<p>The <span style="color:red;background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">kbmemused</span> column shows how much memory was <strong>used</strong>.</p>

<p>The <span style="color:#0AFF00;background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">%memused</span> column shows how much memory was <strong>used</strong> as a percentage of total memory available.</p>

<p>The <span style="color: #FFF500;background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">kbcached</span> column shows how much memory was <strong>cached</strong>.</p>

<p>The command below goes through your <strong>sar</strong> logs and shows anytime that your server's memory is spiking.</p>

<p>When <span style="color:red;background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">kbmemused</span> is over <span style="color:red;background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">917504 KB</span> or <span style="color:red;background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">896 MB</span>, and <span style="color: #FFF500;  background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">kbcached</span> is under <span style="color: #FFF500;  background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">131072 KB</span> or <span style="color: #FFF500;  background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">128MB</span> this command will output the memory usage stats from <strong>sar</strong>.</p>

<p>Doing it this way we can ensure that we're only looking at times when our actual <strong>free memory</strong> on the server has dipped below <strong>128MB</strong>. That way we don't start panicking when the server says <span style="color: #0AFF00; background-color: #3A3A3A; padding: 3px 5px 3px 5px;">99%</span> of memory is being used, but in reality that memory is being used by the Linux page cache.</p>

<div style="width: 100%;">
<div style="margin: 0 auto; width: 630px">
<p class="code_block" style="width: 630px;  margin-bottom: 15px;  color: #FFF;  background: #3A3A3A;  border: 5px groove #D80000;  border-top-width: 0;  border-right-width: 0;  padding: 3px 0px 3px 10px; white-space: pre-wrap;
">for log in `ls -1 /var/log/sa/sa[0-9]* | sed 's#@##'`; do echo $log; sar -r -f $log | egrep -v "Linux|kbmemfree" | awk '{ if ($4&gt;=<strong style="color:red;">917504</strong> &amp;&amp; $7&lt;=<strong style="color:#FFF500;">131072</strong>) print $0}'; echo ""; done | sed 's#\(/var/log.*\)#\1\n--------------kbmemfree kbmemused %memused kbbuffers kbcached kbcommit %commit#' | less</p>
</div>
</div>

<p>Here is the output from the above command:</p>

<div style="width: 100%;">
<div style="margin: 0 auto; width: 630px">
<pre style="width: 630px;margin-bottom: 15px;color: #FFF;  background: #3A3A3A;  border: 5px groove #D80000;  border-top-width: 0;border-right-width: 0;padding: 3px 0px 3px 10px;">/var/log/sa/sa06
--------------<span style="color: #00B1FF;">kbmemfree</span> <span style="color:red">kbmemused</span> <span style="color:#0AFF00;">%memused</span> kbbuffers <span style="color: #FFF500;">kbcached</span> kbcommit %commit
12:16:01 AM     <span style="color: #00B1FF;">25208</span>   <span style="color:red">1023368</span>     <span style="color:#0AFF00;">97.60</span>         0     <span style="color: #FFF500;">37536</span>         0      0.00
12:26:01 AM     <span style="color: #00B1FF;">23708</span>   <span style="color:red">1024868</span>     <span style="color:#0AFF00;">97.74</span>         0     <span style="color: #FFF500;">38792</span>         0      0.00
12:36:01 AM     <span style="color: #00B1FF;">13532</span>   <span style="color:red">1035044</span>     <span style="color:#0AFF00;">98.71</span>         0     <span style="color: #FFF500;">41756</span>         0      0.00</pre>
</div>
</div>

<!-- //NOTE /proc/meminfo -->
<a name="proc-meminfo"></a>
<h2>/proc/meminfo</h2>

<p>With Linux there is a <strong>/proc</strong> pseudo-file system that doesn't contain any real phyical files, but does allow you to take a peak at how the Linux kernel is controlling the system via various config files.</p>

<p>One of these is called <strong>/proc/meminfo</strong> and this is where commands like <strong>free</strong> get their data from. You can directly look at these values yourself by simply accessing this pseudo-file:</p>

<div style="width: 100%;">
<div style="margin: 0 auto; width: 475px">
<pre style="width: 475px;margin-bottom: 15px;color: #FFF;  background: #3A3A3A;  border: 5px groove #D80000;  border-top-width: 0;border-right-width: 0;padding: 3px 0px 3px 10px;">root@server [~]# <strong style="color:red;">egrep "MemTotal|MemFree|Cached" /proc/meminfo</strong>
MemTotal:        <span style="color: #09F;">1048576 kB</span>
MemFree:          <span style="color:#0AFF00;  ">842752 kB</span>
Cached:           <span style="color: #FFF500;">841728 kB</span></pre>
</div>
</div>

<p>The VPS I'm looking at has <span style="color: #09F;  background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">1048576 kB</span> of total system memory, which is <span style="color: #09F;  background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">1024 MB</span>, or <span style="color: #09F;  background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">1 GB</span> of RAM.</p>

<p>Of that total available memory on the VPS, <span style="color:#0AFF00;  background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">842752 kB</span> or <span style="color:#0AFF00;  background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">823 MB</span> of that RAM is not in use, or free to use.</p>

<p>There is <span style="color: #FFF500;background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">841728 kB</span> or <span style="color: #FFF500;background-color: #3A3A3A;  padding: 3px 5px 3px 5px;">822 MB</span> of memory currently being used by the Linux page cache to speed things up.</p>

<p>I know from the earlier testing I did, that <span>100 MB</span> worth of that page cache usage is from my <span>100 MB</span> log file that got placed in the page cache for quick access.</p> 
	
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
	<iframe src='//www.facebook.com/plugins/like.php?href=http://www.inmotionhosting.com/support/website/server-usage/linux-check-memory-usage&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=209145459223160' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:100px; height:21px;' allowTransparency='true'></iframe>
</div>

	                        
<div style='display:inline-block;'>
	<div class='g-plusone' data-size='medium' data-href='http://www.inmotionhosting.com/support/website/server-usage/linux-check-memory-usage'></div>
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
		<input type="hidden" name="return" value="aW5kZXgucGhwP29wdGlvbj1jb21fY29udGVudCZjYXRpZD04NSZpZD0zMDkwJnZpZXc9YXJ0aWNsZSZJdGVtaWQ9MTAx" />
		<input type="hidden" name="65bfcfaf1a29bc90d35984fcdfa3d3dd" value="1" />	</div>
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
			<h3><span class='comment-count'>1</span> Questions & <span class='comment-text'>Comments</span></h3>
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
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '70.90.188.125']);

                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'chat', 'launch', 'support center']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '70.90.188.125']);
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
        	        id:'3090',
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