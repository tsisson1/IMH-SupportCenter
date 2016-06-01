<?php die("Access Denied"); ?>#x#a:3:{s:4:"body";s:86629:" 
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

		  <base href="http://www.inmotionhosting.com/support/website/cpanel/install-ssl-certificates-with-cpanel-ssl-tls-manager" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="last-modified" content="2016-02-04T18:54:13-08:00" />
  <meta name="keywords" content="cpanel ssl tls manager generate view edit upload private key keys csr certificate signing request ctr" />
  <meta name="author" content="Jacob Nicholson" />
  <meta name="description" content="The cPanel SSL/TLS Manager allows you to generate, view, or upload, private keys, Certificate Signing Requests (CSR), and certificates (CTR), and also allows the ability to activate an SSL certificate on your web site" />
  <title>Install SSL certificates with cPanel SSL/TLS Manager - InMotion Hosting</title>
  <link href="http://www.inmotionhosting.com/support/website/cpanel/install-ssl-certificates-with-cpanel-ssl-tls-manager" rel="canonical" />
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
						
		_gaq.push(['_setCustomVar', 3, 'DateMonthModified', '2016-02', 3]);
		_gaq.push(['_setCustomVar', 4, 'DateMonthPublished', '2013-11', 3]);
		_gaq.push(['_setCustomVar', 5, 'Author', 'JacobN', 3]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>






		






	<link rel="shortcut icon" href="//imh01-inmotionhosting1.netdna-ssl.com/img/imh_favicon_hd.png" type="image/x-icon" />






	





	<!-- cid:85595a741cbc80626ca07118140d3558 -->





	


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
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '111.92.47.27']);

                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'chat', 'launch', 'support center']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '111.92.47.27']);
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
		</li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_with_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='/support/website/cpanel' itemprop='url'><span itemprop='title'>cPanel<span></a>
			<div class='dropdown_3columns' style='width:900px; margin-left:-250px;'>
				<div class='col_1' style='width:290px;'><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/cpanel/how-to-find-your-shared-ip-address-of-your-server-in-cpanel'>How to find the Shared IP address of your server in cPanel</a> (58,428 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/cpanel/cpanel-control-panel'>cPanel - Your Hosting Account's Control Panel</a> (23,562 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/cpanel/how-do-i-redirect-my-mail-using-my-control-panel-cpanel'>How do I redirect my mail using my control panel (cpanel)?</a> (10,155 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/cpanel/quick-link-to-control-panel-faqs'>Quick Link To Control Panel FAQs</a> (7,484 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/cpanel/cpanel-11-38-enforces-security-tokens'>cPanel 11.38 enforces security tokens</a> (6,727 hits)</div></div>
				<div class='col_1' style='width:290px;'><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/cpanel/install-ssl-certificates-with-cpanel-ssl-tls-manager'>Install SSL certificates with cPanel SSL/TLS Manager</a> (44,419 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/cpanel/bybass-firewalls-with-cpanel-proxy-subdomains'>Bypass firewalls with cPanel proxy subdomains</a> (14,247 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/cpanel/how-do-i-create-an-autoresponder-in-my-control-panel-cpanel'>How do I create an autoresponder in my control panel (cpanel)?</a> (9,138 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/cpanel/using-image-manager-in-cpanel'>Using Image Manager in cPanel</a> (7,181 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/cpanel/install-a-perl-module-in-cpanel'>Install a Perl module in cPanel</a> (6,474 hits)</div></div>
				<div class='col_1' style='width:290px;'><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/cpanel/find-server-name-in-cpanel'>Find server name in cPanel</a> (36,689 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/cpanel/i-get-a-404-error-when-i-access-cpanel'>I get a 404 error when I access cPanel</a> (10,613 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/cpanel/how-do-i-use-webmail-in-my-control-panel-cpanel'>How do I use webmail in my control panel (cpanel)?</a> (8,393 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/cpanel/using-image-manager-thumbnailer'>Using Image Manager - Thumbnailer </a> (7,044 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/cpanel/cpanel-two-form-authentication'>Two Factor Authentication for cPanel</a> (2,672 hits)</div></div>
			</div>
		</li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_no_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><span itemprop='title'>Install SSL certificates with cPanel SSL/TLS Manager</span></li>			</ul>
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
															Install SSL certificates with cPanel SSL/TLS Manager									</h1>
			
																
				
					<div style='font-size:12px; color:#aaa; margin-bottom:-10px; padding-top:5px;'>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Written by Jacob Nicholson</div>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Views:</span> <span name='page_views' id='page_views'>44,419</span></div>
							<div style='float:left; margin-right:20px;' title='Originally published: Nov 1, 2013'><span style='color:#606060;'>Published:</span> Feb 4, 2016</div>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Comments:</span> <a href='#comments'>2</a></div>
							<div style='clear:both;'></div>
						</div>
						</div>
		
	
		

	

								<p class="alert alert-danger">
  <strong>SSL certificates can only be installed by account owners on VPS or Dedicated Server accounts with <a href="http://www.inmotionhosting.com/support/website/cpanel-account-management/obtain-root-access">root access</a>. Otherwise, please submit a request to our <a href="http://www.inmotionhosting.com/support/website/website-troubleshooting/how-to-get-great-technical-support"> live technical support team</a> if you need an SSL Certificate installed.</strong>
</p>

<div class="in_this_tutorial">
<h2>Go:</h2>
<button type="button" class="btn btn-primary" onclick="window.location.hash='enable-ssl-manager';">Enable SSL Manager</button>
<button type="button" class="btn btn-primary" onclick="window.location.hash='generate-private-key';">Generate Private Key</button>
<button type="button" class="btn btn-primary" onclick="window.location.hash='generate-csr';">Generate CSR</button>
<button type="button" class="btn btn-primary" onclick="window.location.hash='generate-self-signed';">Generate Self-Signed Cert</button>
<button type="button" class="btn btn-primary" onclick="window.location.hash='install-3rd-party-ssl';">Install 3rd party SSL</button>
<button type="button" class="btn btn-primary" onclick="window.location.hash='activate-ssl';">Activate SSL on web site</button>
 
</div>

<div class="in_this_tutorial">
    <h2>Links:</h2>
    <button type="button" class="btn btn-primary" onclick="window.location='/support/website/ssl/what-is-ssl-and-why-is-it-important';">What is SSL?</button>
    <button type="button" class="btn btn-primary" onclick="window.location='/support/website/ssl/how-do-i-obtain-an-ssl-certificate';">How do I get an SSL?</button>
    <button type="button" class="btn btn-primary" onclick="window.location='/support/website/ip-addresses/purchase-dedicated-ip-address-amp';">Dedicated IP address</button>
</div>

<p>The latest <strong>cPanel 11.38</strong> release comes with a new <strong>SSL/TLS Manager</strong> which is available to cPanel users when enabled in WHM. This manager gives you the ability to generate, view, or upload, private keys, Certificate Signing Requests (CSR), and certificates (CTR), and also allows the ability to activate an <a href="http://www.inmotionhosting.com/support/website/ssl/what-is-ssl-and-why-is-it-important" target="_blank">SSL certificate</a> on your web site.</p>

<p>If you need an SSL certificate, you can <a href="http://www.inmotionhosting.com/support/website/ssl/how-do-i-obtain-an-ssl-certificate#how-to-order" target="_blank">order an SSL certificate from AMP</a> from InMotion Hosting. Our Dedicated SSL certificates are Comodo-issued 256-bit encrypted InstantSSL certificates and are only <strong>$99.99 / year</strong>.</p>

<p> SSL certificates require a <a href="http://www.inmotionhosting.com/support/website/ip-addresses/purchase-dedicated-ip-address-amp" target="_blank">Dedicated IP address</a> which can be purchased for <strong>$24 / year</strong>, and there is also a one-time <strong>$25</strong> SSL install fee. However if you purchase your SSL from InMotion Hosting we will waive the <strong>$24 / year</strong> dedicated IP address fee, and you'll only need to pay once for the install.</p>

<p>Otherwise, you can use the new cPanel <strong>SSL/TLS Manager</strong> to complete the SSL install process on your own when purchasing a 3rd party SSL certificate. <strong>**Notice:</strong> the SSL/TLS manager will be available in cPanel after purchasing a dedicated IP address</p>

<p>If you just need a SSL certificate for testing purposes, you can generate a <a href="#generate-self-signed">self-signed SSL certificate</a> for free.</p>

<!-- //NOTE Enable SSL -------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<a name="enable-ssl-manager"></a>
<h2>Enable SSL/TLS Manager in WHM for cPanel users</h2>

<p>Before using the <strong>SSL/TLS Manager</strong> as a cPanel user, it first needs to be enabled in WHM's <strong>Tweak Settings</strong> option.</p>

<ol class="article_list">
    <li><a href="http://www.inmotionhosting.com/support/edu/whm/creating-and-managing-accounts/log-into-whm" target="_blank">Login to WHM</a></li>
    <li>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/whm-search-for-tweak-click-on-tweak-settings.png"><img  style="float: right; width: 170px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/whm-search-for-tweak-click-on-tweak-settings.png" alt="in whm type tweak and click on tweak settings"></a>
        <p>In the <strong>top-left</strong> find box, type in <strong>tweak</strong>, then click on <strong>Tweak Settings</strong></p>
        <p style="clear: both;"></p>    
    </li>
    
    <li>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/whm-enable-cpanel-user-ssl-installs-click-save.png"><img  style="float: right; width: 170px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/whm-enable-cpanel-user-ssl-installs-click-save.png" alt="in whm type allow cpanel and enable cpanel users to install SSL hosts"></a>
        <p>Type <strong>Allow cPanel</strong> in the <strong>top-right</strong> find box, then fill in <strong>On</strong> beside <strong>Allow cPanel users to install SSL Hosts if they have a dedicated IP</strong>, then click <strong>Save</strong></p>
        <p>You should see WHM <strong>Updating tweak settings...</strong> and then when it completes it will say <strong>Done</strong> at the bottom.</p>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/whm-tweak-settings-updated.png"><img  style="width: 170px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/whm-tweak-settings-updated.png" alt="whm tweak settings updated"></a>
        <p style="clear: both;"></p> 
    </li>

</ol>

<!-- //NOTE cPanel SSL Manager ------------------------------------------------------>
<!----------------------------------------------------------------------------------->
<a name="cpanel-ssl-manager"></a>
<h2>Using the cPanel SSL/TLS Manager</h2>

<p>Once you have the cPanel <strong>SLL/TLS Manager</strong> enabled in WHM, you can access it when logged into cPanel.</p>

<ol class="article_list">
    <li>
        <p><a href="http://www.inmotionhosting.com/support/edu/cpanel/getting-started-cpanel/how-to-log-into-cpanel" target="_blank">Login to cPanel</a></p>
    </li>
    <li>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-under-security-click-ssl-tls-manager.png"><img  style="float: right; width: 170px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-under-security-click-ssl-tls-manager.png" alt="under security click ssl tls manager"></a>
        <p>Under the <strong>Security</strong> section, click on <strong>SSL/TLS Manager</strong></p>
        <p style="clear: both;"></p>    
    </li>
</ol>

<!-- //NOTE Generate private key ---------------------------------------------------->
<!----------------------------------------------------------------------------------->
<a name="generate-private-key"></a>
<h2>Generate Private Keys</h2>
<p>Before generating anything else, we need to generate some <strong>Private Keys</strong>, these are used to decrypt information transmitted over an SSL connection. You need a separate <strong>Private Key</strong> for each SSL certificate you wish to use.</p>

<ol class="article_list">
    <li>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-click-generate-private-keys.png"><img  style="float: right; width: 170px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-click-generate-private-keys.png" alt="click generate private keys"></a>
        <p>Access the <a href="#cpanel-ssl-manager"><strong>cPanel SSL/TLS Manager</strong></a></p>
        <p>Click on <strong>Generate, view, upload, or delete your private keys</strong></p>
        <p style="clear: both;"></p> 
    </li>
    
    <li>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-create-new-private-key-click-generate.png"><img  style="float: right; width: 170px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-create-new-private-key-click-generate.png" alt="click generate"></a>
        <p>Typically a <strong>Key Size</strong> of <strong>2,048 bits</strong> is fine, but if you need another one you can select it from the drop-down.</p>
        <p>Fill in a <strong>Description</strong> for the key if you'd like, then click <strong>Generate</strong>
        <p style="clear: both;"></p> 
    </li>
    
    <li>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-generated-private-key.png"><img  style="float: right; width: 170px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-generated-private-key.png" alt="cpanel generated private key"></a>
        <p>Now with your <strong>Private Key</strong> generated, click on <strong>Return to Private Keys</strong></p>
        <p>You should see the key you created listed</p>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-view-keys-on-server.png"><img  style="width: 270px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-view-keys-on-server.png" alt="cpanel view keys on server"></a>
        <p style="clear: both;"></p> 
    </li>
    
    <li>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-paste-or-upload-private-key.png"><img  style="float: right; width: 170px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-paste-or-upload-private-key.png" alt="paste or upload private key"></a>
        <p>If you already have a <strong>Private Key</strong> not on the server, then under the <strong>Upload a New Private Key</strong> section, you can either paste in your key and click on <strong>Save</strong>, or you can click on <strong>Choose File</strong> to browse your computer for the key, and then click <strong>Upload</strong></p>
        <p>After you've already generated or uploaded your <strong>Private Key</strong> so it exists on the server, click on <strong>Return to SSL Manager</strong></p>
        <p style="clear: both;"></p> 
    </li>
</ol>

<!-- //NOTE Generate CSR ------------------------------------------------------------>
<!----------------------------------------------------------------------------------->
<a name="generate-csr"></a>
<h2>Generate CSR</h2>

<p>Before getting an SSL certificate for your website, you need to generate a <strong>Certificate Signing Request (CSR)</strong>. This request will include your domain name and company, as well as information specific to the server you're hosting on.</p>                
<ol class="article_list">    
    
    <li>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-click-generate-csr.png"><img  style="float: right; width: 170px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-click-generate-csr.png" alt="click generate csr"></a>
        <p>Access the <a href="#cpanel-ssl-manager"><strong>cPanel SSL/TLS Manager</strong></a></p>
        <p>Click on <strong>Generate, view, or delete SSL certificate signing requests</strong></p>
        <p style="clear: both;"></p> 
    </li>
    
    <li>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-fill-out-csr-info-click-generate.png"><img  style="float: right; width: 170px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-fill-out-csr-info-click-generate.png" alt="fill out csr fields click generate"></a>
        <p>Fill out all of the fields for your CSR, then click <strong>Generate</strong></p>
        <p style="clear: both;"></p> 
    </li>
    
    <li>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-copy-csr-text.png"><img  style="float: right; width: 170px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-copy-csr-text.png" alt="copy generated csr text"></a>
        <p>You should now see the generated <strong>CSR</strong>, you can click in the text-box and then hit <strong>Ctrl-A</strong> to select all the text, and then <strong>Ctrl-C</strong> to copy it.</p>
        <p style="clear: both;"></p> 
    </li>
    
    <li>
        <p>Now you need to take this <strong>CSR</strong> text generated from the cPanel server, and when you are purchasing a SSL certificate, the Certificate Authority that you buy it from will need to be supplied with it.</p>
        <p class="alert">When asked the server type your <strong>CSR</strong> was generated on, you'd want to select <strong>RedHat Linux</strong>.</p>
    </li>
</ol>
    
<!-- //NOTE Generate self signed ---------------------------------------------------->
<!----------------------------------------------------------------------------------->
<a name="generate-self-signed"></a>
<h2>Generate a self-signed SSL certificate</h2>

<p>If you just need your website data encrypted, and are not worried about web-browser warnings you can generate a self-signed SSL certificate for free.</p>

<p>When you access a self-signed SSL website from your web-browser, you will get an <a href="http://www.inmotionhosting.com/support/website/ssl/self-signed-ssl-certificate-warning" target="_blank">self signed SSL warning</a> such as this one in Google Chrome. You can simply safely click on <strong>Proceed anyway</strong> to still get to the website.</p>                              

<center><a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/self-signed-ssl-warning-click-proceed-anyway.png"><img  style="width: 400px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/self-signed-ssl-warning-click-proceed-anyway.png" alt="self signed ssl warning click proceed anyway"></a></center>

<p>When you're on your website if you click on the SSL padlock icon, you can see the reason we got a warning is because the website's identity has not been verified. This is because we used a self-signed SSL certificate and it wasn't verified by a 3rd party certificate authority</p>

<center><a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/self-signed-ssl-info.png"><img  style="width: 300px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/self-signed-ssl-info.png" alt="self signed ssl info"></a></center>
               
<ol class="article_list">    
    
    <li>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-click-generate-certificates.png"><img  style="float: right; width: 170px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-click-generate-certificates.png" alt="click generate certificate"></a>
        <p>Access the <a href="#cpanel-ssl-manager"><strong>cPanel SSL/TLS Manager</strong></a></p>
        <p>Click on <strong>Generate, view, upload, or delete SSL certificates</strong></p>
        <p style="clear: both;"></p> 
    </li>
    
    <li>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-generate-self-signed-ssl.png"><img  style="float: right; width: 170px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-generate-self-signed-ssl.png" alt="fill out details for self signed ssl certificate click generate"></a>
        <p>Scroll down to the <strong>Generate a New Certificate</strong> section and fill out all of the details for your self-signed SSL certificate, click <strong>Generate</strong></p>
        <p style="clear: both;"></p> 
    </li>
    
    <li>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-copy-self-signed-cert-text.png"><img  style="float: right; width: 170px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-copy-self-signed-cert-text.png" alt="copy self signed certificate text"></a>
        <p>On the next page, click in the <strong>Encoded Certificate</strong> text-box, then hit <strong>Ctrl-A</strong> to select all the text, and then <strong>Ctrl-C</strong> to copy it.</p>
        <p style="clear: both;"></p> 
    </li>
</ol>

<!-- //NOTE Install 3rd party SSL --------------------------------------------------->
<!----------------------------------------------------------------------------------->
<a name="install-3rd-party-ssl"></a>
<h2>Install 3rd party SSL certificate</h2>

<p>If you sent off your <a href="#generate-csr">CSR</a> to a certificate authority, you should have gotten back a matching SSL certifcate that you can now go back and install on the server to use for your website.</p>          
               
<ol class="article_list">    
    
    <li>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-click-generate-certificates.png"><img  style="float: right; width: 170px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-click-generate-certificates.png" alt="click generate certificate"></a>
        <p>Access the <a href="#cpanel-ssl-manager"><strong>cPanel SSL/TLS Manager</strong></a></p>
        <p>Click on <strong>Generate, view, upload, or delete SSL certificates</strong></p>
        <p style="clear: both;"></p> 
    </li>
    
    <li>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-paste-or-upload-ssl-certificate.png"><img  style="float: right; width: 170px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-paste-or-upload-ssl-certificate.png" alt="paste or upload your ssl certificate"></a>
        <p>Now either paste your certificate info into the <strong>Paste your certificate below</strong> box and click <strong>Save Certificate</strong></p>
        <p>Or click <strong>Choose File</strong> to browse your local computer for the certificate file and click on <strong>Upload Certificate</strong></p>
        <p style="clear: both;"></p> 
    </li>
</ol>

<!-- //NOTE Activate SSL  ----------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<a name="activate-ssl"></a>
<h2>Activate SSL certificate on web site</h2>

<p>Now that you've <a href="#generate-private-key">generated a private key</a>, <a href="#generate-csr">generated a CSR</a>, and <a href="#install-3rd-party-ssl">installed a SSL</a> on your account, you should be ready to activate that SSL certificate for your website.</p>
               
<ol class="article_list">    
    
    <li>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-click-setup-an-ssl.png"><img  style="float: right; width: 170px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-click-setup-an-ssl.png" alt="click setup an ssl certificate to work with your site"></a>
        <p>Access the <a href="#cpanel-ssl-manager"><strong>cPanel SSL/TLS Manager</strong></a></p>
        <p>Click on <strong>Setup an SSL certificate to work with your site</strong></p>
        <p style="clear: both;"></p> 
    </li>
    
    <li>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-select-ssl-domain-click-autofill-by-domain.png"><img  style="float: right; width: 170px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-select-ssl-domain-click-autofill-by-domain.png" alt="select ssl domain click autofill by domain"></a>
        <p>From the <strong>Domain</strong> drop-down, select the domain you're installing your SSL certificate on, and then click <strong>Autofill by Domain</strong></p>
        <p style="clear: both;"></p> 
    </li>
    
    <li>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-click-install-certificate-for-self-signed.png"><img  style="float: right; width: 170px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-click-install-certificate-for-self-signed.png" alt="click install certificate"></a>
        <p>In this case you can see it's warning us that the <strong>Issuer</strong> is <strong>self-signed</strong> which is fine. If you actually installed a 3rd party verified certificate you shouldn't see this warning.</p>
        <p>Click on <strong>Install Certificate</strong></p>
        <p style="clear: both;"></p> 
    </li>
    
    <li>
        <a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-ssl-install-success.png"><img  style="float: right; width: 170px" src="//cdn.inmotionhosting.com/support/images/stories/cpanel/ssl-tls-manager/cpanel-ssl-install-success.png" alt="ssl certificate installation success"></a>
        <p>You should see a pop-up saying the SSL was successfully configured, then just click <strong>OK</strong></p>
        <p style="clear: both;"></p> 
    </li>    
</ol>

<p>&nbsp;</p>
<p>You should hopefully now understand how to use the <strong>cPanel SSL/TLS Manager</strong> to either generate a CSR or get a SSL certificate installed on your website.</p> 
	
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
	<iframe src='//www.facebook.com/plugins/like.php?href=http://www.inmotionhosting.com/support/website/cpanel/install-ssl-certificates-with-cpanel-ssl-tls-manager&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=209145459223160' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:100px; height:21px;' allowTransparency='true'></iframe>
</div>

	                        
<div style='display:inline-block;'>
	<div class='g-plusone' data-size='medium' data-href='http://www.inmotionhosting.com/support/website/cpanel/install-ssl-certificates-with-cpanel-ssl-tls-manager'></div>
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
		<input type="hidden" name="return" value="aW5kZXgucGhwP29wdGlvbj1jb21fY29udGVudCZjYXRpZD01NyZpZD0yOTM3JnZpZXc9YXJ0aWNsZSZJdGVtaWQ9MTAx" />
		<input type="hidden" name="17a0110b8deb15375f23b79da8e3215f" value="1" />	</div>
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



		<a name='comment-32615'></a>
		<div  style='margin:0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/ba4515949fc6a4200c57f2ae4e4a803f?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/ba4515949fc6a4200c57f2ae4e4a803f'>cPanel SSL/TLS Manage</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-05-11 3:48 pm</div>
				                <div><p><strong style="color: rgb(35, 35, 35); font-family: adelle-sans, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 22px; background-color: rgb(249, 249, 249);">cPanel SSL/TLS Manage:</strong></p>
<p>after updating my ssl i am still seeing my old ssl, when i view cpanel or whm (ONLY) the old ssl still exists, there is no&nbsp;<strong style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 22px; background-color: #f8f8f8;">Tweak Settings</strong>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32615);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-32616'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-05-11 4:53 pm</div>
				                <div>Hello,<br />
<br />
Sorry for the problems with the old SSL certificate in your cPanel/WHM.  If you're unable to see the Tweak Settings in WHM, then you're not logging in as the root user.  You will need to use <a href="http://www.inmotionhosting.com/support/website/cpanel-account-management/obtain-root-access" target="_blank">root access</a> to the server in order to remove the certificate.  You can also contact our live technical support team for assistance with this particular issue (contact information is at the bottom of the page).<br />
<br />
If you have any further questions, please let us know.  <br />
<br />
Kindest regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32616);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
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
			<h3><span class='comment-count'>2</span> Questions & <span class='comment-text'>Comments</span></h3>
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
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '111.92.47.27']);

                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'chat', 'launch', 'support center']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '111.92.47.27']);
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
        	        id:'2937',
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