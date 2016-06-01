<?php die("Access Denied"); ?>#x#a:3:{s:4:"body";s:242726:" 
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

		  <base href="http://www.inmotionhosting.com/support/website/wordpress/disabling-the-wp-cronphp-in-wordpress" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="last-modified" content="2015-12-09T20:18:20-08:00" />
  <meta name="keywords" content="wordpress disable disabling turn off cron job cronjob wp-cron wp-cron.php set intensive" />
  <meta name="author" content="Jacob Nicholson" />
  <meta name="description" content="WordPress uses wp-cron.php to automate things like scheduled posts, the default behavior can be intensive and we can disable it." />
  <title>Disabling the wp-cron.php in WordPress - InMotion Hosting</title>
  <link href="http://www.inmotionhosting.com/support/website/wordpress/disabling-the-wp-cronphp-in-wordpress" rel="canonical" />
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
						
		_gaq.push(['_setCustomVar', 3, 'DateMonthModified', '2015-12', 3]);
		_gaq.push(['_setCustomVar', 4, 'DateMonthPublished', '2012-03', 3]);
		_gaq.push(['_setCustomVar', 5, 'Author', 'JacobN', 3]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>






		






	<link rel="shortcut icon" href="//imh01-inmotionhosting1.netdna-ssl.com/img/imh_favicon_hd.png" type="image/x-icon" />






	





	<!-- cid:b946b445725928a2b7e044b86faf26f0 -->





	


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
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '66.249.81.143']);

                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'chat', 'launch', 'support center']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '66.249.81.143']);
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
		</li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_with_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='/support/website/wordpress' itemprop='url'><span itemprop='title'>WordPress<span></a>
			<div class='dropdown_3columns' style='width:900px; margin-left:-250px;'>
				<div class='col_1' style='width:290px;'><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/wordpress/wordpress-changing-the-site-url-and-home-settings'>WordPress - Changing the Site URL and Home Settings</a> (185,605 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/wordpress/disabling-the-wp-cronphp-in-wordpress'>Disabling the wp-cron.php in WordPress</a> (112,012 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/wordpress/resetting-your-wordpress-admin-password'>Resetting your WordPress Admin Password</a> (68,596 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/wordpress/how-to-optimize-wordpress'>How to optimize Wordpress</a> (29,544 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/wordpress/disable-xml-rpc-requests'>Disable WordPress XML-RPC requests</a> (25,296 hits)</div></div>
				<div class='col_1' style='width:290px;'><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/wordpress/lock-down-wordpress-admin-login-with-htaccess'>Lock down WordPress admin login with .htaccess</a> (135,784 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/wordpress/duplicate-wordpress-site-for-testing'>Making a duplicate Wordpress site for development and testing</a> (96,491 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/wordpress/change-wordpress-admin-username-for-security'>Change WordPress admin username for security</a> (42,828 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/wordpress/limit-or-disable-wordpress-revisions'>Limit or disable WordPress revisions</a> (28,259 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/wordpress/show-author-avatar'>How to show an author's avatar within WordPress</a> (24,918 hits)</div></div>
				<div class='col_1' style='width:290px;'><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/wordpress/prevent-unauthorized-wp-admin-wp-login-php-attempts'>Prevent unauthorized WordPress wp-admin and wp-login.php attempts</a> (129,785 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/wordpress/heartbeat-ajax-php-usage'>WordPress Heartbeat and heavy admin-ajax.php usage</a> (88,388 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/wordpress/reinstall-wordpress-after-a-hack'>How to Re-Install WordPress after a Hack </a> (32,247 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/wordpress/fix-download-failed-errors-on-update'>Fix WordPress Download failed errors on update</a> (27,633 hits)</div><div style='margin-bottom:10px;'><a style='display:inline;' href='/support/website/wordpress/wordpress-security-preventing-brute-force-attacks-on-admin-login'>Wordpress Security - Preventing Brute Force Attacks on Admin Login</a> (24,433 hits)</div></div>
			</div>
		</li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_no_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><span itemprop='title'>Disabling the wp-cron.php in WordPress</span></li>			</ul>
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
															Disabling the wp-cron.php in WordPress									</h1>
			
																
				
					<div style='font-size:12px; color:#aaa; margin-bottom:-10px; padding-top:5px;'>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Written by Jacob Nicholson</div>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Views:</span> <span name='page_views' id='page_views'>112,012</span></div>
							<div style='float:left; margin-right:20px;' title='Originally published: Mar 5, 2012'><span style='color:#606060;'>Published:</span> Dec 9, 2015</div>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Comments:</span> <a href='#comments'>86</a></div>
							<div style='clear:both;'></div>
						</div>
						</div>
		
	
		

	

								<p class="alert alert-warning">
WordPress version 4.4 has been released! Click here for more information on the <a href="/support/domain-names/general-information/wordpress-44-release">updates and features in WordPres 4.4</a>!
</p>

<iframe width="640" height="480" src="//www.youtube.com/embed/QXQfNzkTVHc" frameborder="0" allowfullscreen></iframe>
<p>WordPress uses a file called <strong>wp-cron.php</strong> as a virtual cron job, or scheduled task in order to automate things like publishing scheduled posts, checking for plugin or theme updates, sending email notifications and more.</p>
            
<p>By default WordPress is setup to call <strong>wp-cron.php</strong> everytime someone visits your WordPress website when a scheduled task is present, to basically ask <em>"is it time to do anything yet?".</em></p>
        
<p>On low traffic sites this is perfectly fine, but when visitors roll in, checking multiple times for scheduled tasks can be very inefficient and lead to <a href="http://www.inmotionhosting.com/support/website/server-usage/what-is-high-system-resource-usage" target="_blank">resource usage</a> problems for your server, plus make your website load slower.</p>
  
<h2>Disable default wp-cron.php behavior</h2>
            
<p>We can easily tell WordPress to let us handle the execution of <strong>wp-cron.php</strong> with the <strong>wp-config.php</strong> file.</p>
            
<ol class="article_list">
<li>Open your <strong>wp-config.php</strong> file with the <a href="http://www.inmotionhosting.com/support/edu/cpanel/cpanel-file-manager/file-manager-code-editor" target="_blank">cPanel File Manager Code Editor</a></li>
<li><p style="width: 555px;">Go to the bottom of the database settings in <strong>wp-config.php</strong> typically around line <strong>37</strong>.</p>
    
<p>Add the code below highlighted in <strong style="color: red;">red</strong>:</p>
    
<pre class="cli">
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

<strong style="color: red;">define('DISABLE_WP_CRON', 'true');</strong>
</pre>

</li>
<li>Click <strong>Save</strong></li>
</ol>
      
<p style="margin-top: 15px;">Now WordPress will not automatically run the <strong>wp-cron.php</strong> script each time your site gets a new visitor.</p>
            
<h2>Setup manual cron job for wp-cron.php</h2>
            
<p>We don't want to leave WordPress without any ability to automate tasks it might need to do. But at least now that it's not running for every single visitor, we can have way more control over when these tasks take place.</p>        
            
<p>For most WordPress users having the <strong>wp-cron.php</strong> script run every 6 hours is perfectly fine. That would be just 4 executions in a day, compared to possibly hundreds, or even thousands if you had a lot of website traffic that day.</p>            

<ol class="article_list">
<li><a href="/support/edu/cpanel/getting-started-cpanel/how-to-log-into-cpanel" target="_blank">Log into cPanel</a></li>
<li><a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/wordpress/disable-cron/click-on-cron-jobs.png"><img  style="width: 160px; float: right; margin-left: 10px; position: relative; bottom: 15px;" src="//cdn.inmotionhosting.com/support/images/stories/wordpress/disable-cron/click-on-cron-jobs.png" alt="click on cron jobs"></a>Under the <strong>Advanced</strong> section, click on <strong>Cron Jobs</strong>.</li>

<li style="clear: both;"><a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/wordpress/disable-cron/select-once-an-hour-from-common-settings.png"><img  style="width: 160px; float: right; margin-left: 10px; position: relative; bottom: 15px;" src="//cdn.inmotionhosting.com/support/images/stories/wordpress/disable-cron/select-once-an-hour-from-common-settings.png" alt="select once an hour from common settings"></a>Select <strong>Once an hour</strong> from the <strong>Common Settings</strong> drop-down.</li>    

<li style="clear: both;"><a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/wordpress/disable-cron/select-every-6-hours-from-hour-field.png"><img  style="width: 160px; float: right; margin-left: 10px; position: relative; bottom: 15px;" src="//cdn.inmotionhosting.com/support/images/stories/wordpress/disable-cron/select-every-6-hours-from-hour-field.png" alt="select every 6 hours from hour field"></a>Now select <strong>Every 6 hours</strong> from the <strong>Hour</strong> drop-down.</li>    

<li style="clear: both;"><a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/wordpress/disable-cron/fill-in-cron-job-command-click-add-new-cron-job.png"><img  style="width: 160px; float: right; margin-left: 10px; position: relative; bottom: 15px;" src="//cdn.inmotionhosting.com/support/images/stories/wordpress/disable-cron/fill-in-cron-job-command-click-add-new-cron-job.png" alt="fill in cron job command click add new cron job"></a>Finally fill in the code to run our cron job and click <strong>Add New Cron Job</strong>.
<pre class="cli" style="width: 340px;">
cd /home/<strong style="color: red;">userna5</strong>/public_html; php -q wp-cron.php
</pre>
    
<p style="margin-top: 15px;">Where <strong style="color: red;">userna5</strong> is your <a href="http://www.inmotionhosting.com/support/website/general-server-setup/what-is-my-username-and-password" target="_blank">cPanel user name</a>.</p>

<p>Keep in mind that the <strong>/home/userna5/public_html</strong> path would be for a primary domain, if you're using an addon domain, or have WordPress installed in a sub-directory you'll want to be sure to update your path.</p>
    
</li>        
<li style="clear: both;"><a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/wordpress/disable-cron/added-cron-job-successfully.png"><img  style="width: 160px; float: right; margin-left: 10px; position: relative; bottom: 15px;" src="//cdn.inmotionhosting.com/support/images/stories/wordpress/disable-cron/added-cron-job-successfully.png" alt="added cron job successfully"></a>You should see that your new cron job was added successfully.</li>
    
<div style="clear: both;"></div>
    
</ol>
            
<p style="margin-top: 15px;">Now your WordPress website should be safely running scheduled tasks via the <strong>wp-cron.php</strong> script, but only at set intervals. If you aren't receiving an email when the cron runs,&nbsp;see our guide on <a href="http://www.inmotionhosting.com/support/website/cron-jobs/cron-job-email" target="_blank">cron job not emailing me</a>.</p> 
	
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
	<iframe src='//www.facebook.com/plugins/like.php?href=http://www.inmotionhosting.com/support/website/wordpress/disabling-the-wp-cronphp-in-wordpress&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=209145459223160' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:100px; height:21px;' allowTransparency='true'></iframe>
</div>

	                        
<div style='display:inline-block;'>
	<div class='g-plusone' data-size='medium' data-href='http://www.inmotionhosting.com/support/website/wordpress/disabling-the-wp-cronphp-in-wordpress'></div>
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
		<input type="hidden" name="return" value="aW5kZXgucGhwP29wdGlvbj1jb21fY29udGVudCZjYXRpZD02MyZpZD0zODImdmlldz1hcnRpY2xlJkl0ZW1pZD0xMDE=" />
		<input type="hidden" name="9b9b7f4a7541c8cd5498dc28cbe6860d" value="1" />	</div>
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



		<a name='comment-8145'></a>
		<div  style='margin:0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//graph.facebook.com/mohammadali.mirrezaei/picture?type=normal' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/nowadays'>nowadays</a></div>
						<div></div>
						<div></div>
						<div>6 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-08-25 9:29 am</div>
				                <div>hi<br />
tnx,<br />
<br />
cd /home/userna5/public_html; php -q wp-cron.php<br />
<br />
userna5   ===&gt;  user name CPanel ? or DataBase ? or Wordpress ?</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8145);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8148'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//graph.facebook.com/mohammadali.mirrezaei/picture?type=normal' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/nowadays'>nowadays</a></div>
						<div></div>
						<div></div>
						<div>6 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-08-26 10:25 am</div>
				                <div>No one is here?<br />
<br />
my website: http://novinbat.com/<br />
Is this true?<br />
<br />
wget -q -O - http://novinbat.com/wp-cron.php?doing_wp_cron &gt;/dev/null 2&gt;&amp;1</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8148);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8151'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-08-26 4:02 pm</div>
				                <div>&lt;div style=&quot;background-color: #FFF; padding-left: 10px;&quot;&gt;Hello nowadays, and thanks for your comment.<br />
<br />
I've gone ahead and updated this article to be a bit more clear. The username for the &lt;strong&gt;/home/&lt;/strong&gt;&lt;strong style=&quot;color: red;&quot;&gt;userna5&lt;/strong&gt;&lt;strong&gt;/public_html&lt;/strong&gt; path as mentioned now, should be your cPanel username, or the physical path to your WordPress installation on your server.<br />
<br />
I've seen the &lt;strong&gt;wget&lt;/strong&gt; method you've mentioned also recommended around the web, but I've also heard people complain if it causing problems for them. So you might want to stick to the sure fire way of directly calling the script locally that is used in this article.<br />
<br />
- Jacob&lt;/div&gt;</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8151);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-11129'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/7f2b79cd5329a2c04562a873211e5d16?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/7f2b79cd5329a2c04562a873211e5d16'>Anonymous Coward</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-06-03 10:42 pm</div>
				                <div><p>Generally it's better to trigger cron from the command line than web because web often has a more limiting max execution time than command line.</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(11129);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8476'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//graph.facebook.com/ameerulislam/picture?type=normal' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/ameerulislam'>ameerulislam</a></div>
						<div></div>
						<div></div>
						<div>3 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-12-08 2:06 pm</div>
				                <div>Hei Jacob what is the point of setting 1 hour in creative settings that goes off when you select 6 hours from the drop down?</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8476);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8479'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh6.googleusercontent.com/-ML7FcuvnOJw/AAAAAAAAAAI/AAAAAAAAAB0/UiLncgP8kr8/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/JeffMa'>JeffMa</a></div>
						<div><a href='https://twitter.com/TheJeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='https://www.facebook.com/TheJeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-facebook.png' style='width:20px;' /></a><a href='https://plus.google.com/+JeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div></div>
						<div>11,186 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-12-09 11:22 am</div>
				                <div>The reasoning behind this is to run it every 6 hours, and only one time in that 6 hours period.  </div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8479);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-9806'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/2627585570415620477651a56d574650?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/2627585570415620477651a56d574650'>laishaoyi</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-04-17 8:48 am</div>
				                <div><p>this tip helps a lot with dealing a monster site.</p>
<p>thanks.</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(9806);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-9826'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-04-17 12:51 pm</div>
				                <div>No problem at all laishaoyi, glad it helped out!</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(9826);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-10307'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/cd570c2ba002c385f766d4b1432c744b?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/cd570c2ba002c385f766d4b1432c744b'>Ken</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-04-30 11:22 pm</div>
				                <div><p>I have a number of WordPress sites on my IMH account. Is this a "one size fits all" sort of thing? i.e. Will this make all my sites run a chron job at the same time? Most of my sites are in folders (like&nbsp; public_html/qrs/wordpress2, public_html/xyz/wordpress3, etc ) Is that a problem in any way?</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(10307);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-10311'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh6.googleusercontent.com/-ML7FcuvnOJw/AAAAAAAAAAI/AAAAAAAAAB0/UiLncgP8kr8/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/JeffMa'>JeffMa</a></div>
						<div><a href='https://twitter.com/TheJeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='https://www.facebook.com/TheJeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-facebook.png' style='width:20px;' /></a><a href='https://plus.google.com/+JeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div></div>
						<div>11,186 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-05-01 7:45 am</div>
				                <div>This change will only affect the WordPress site that you make the change on and will not affect all other WordPress sites.  You will need to make the change on each site if you want it active on all of them.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(10311);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-10411'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/cd570c2ba002c385f766d4b1432c744b?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/cd570c2ba002c385f766d4b1432c744b'>Ken</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-05-05 10:28 pm</div>
				                <div><p>Thanks Jeff!</p>
<p>One further question... If I have a site in a folder and I run "WordPress in a folder" do I want the chron to be set to the root of that site i.e.&nbsp; ... public_html/xyz or should I set the chron to the actual location of the wp-chron.php file&nbsp; i.e. ... public_html/xyz/abc</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(10411);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-10418'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh6.googleusercontent.com/-ML7FcuvnOJw/AAAAAAAAAAI/AAAAAAAAAB0/UiLncgP8kr8/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/JeffMa'>JeffMa</a></div>
						<div><a href='https://twitter.com/TheJeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='https://www.facebook.com/TheJeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-facebook.png' style='width:20px;' /></a><a href='https://plus.google.com/+JeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div></div>
						<div>11,186 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-05-06 7:41 am</div>
				                <div>The cron should run the wp-cron.php file inside the folder of that specific site. For example, if you have wordpress installed inside a folder names wordpress, you would set the cron to the following:<br />
&lt;p class=&quot;code_block&quot;&gt;cd /home/userna5/public_html/wordpress; php -q wp-cron.php&lt;/p&gt;</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(10418);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-10426'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/cd570c2ba002c385f766d4b1432c744b?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/cd570c2ba002c385f766d4b1432c744b'>Ken</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-05-06 10:34 am</div>
				                <div><p>Hi Jeff,</p>
<p>Sorry to be a pain... But I'm not absolutely sure we are on the same page. If you'll indulge me, I'll see if I can do this more graphically.. I'll use 3 sites in the example but only "flesh out #2 as my poster child. Each site is a separate addon domain.</p>
<p>&nbsp;</p>
<p>public_html</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; wordpress-site-folder-1 (abc.com)</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; wordpress-site-folder-2 (mno.com)</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; wordpress-files-folder</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; index.php</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; .htaccess</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; wordpress-site-folder-3 (qrst.com)</p>
<p>&nbsp;</p>
<p>So in my example, the path to the actual wp-chron.php would be</p>
<p>public_html/wordpress-site-folder/wordpress-files-folder/wp-chron.php</p>
<p>But you are saying that the chron job path should go to the site root...</p>
<p>public_html/wordpress-site-folder/wp-chron.php</p>
<p>Yes? I just want to be sure to get it right!</p>
<p>Thanks!!</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(10426);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-10427'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh6.googleusercontent.com/-ML7FcuvnOJw/AAAAAAAAAAI/AAAAAAAAAB0/UiLncgP8kr8/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/JeffMa'>JeffMa</a></div>
						<div><a href='https://twitter.com/TheJeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='https://www.facebook.com/TheJeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-facebook.png' style='width:20px;' /></a><a href='https://plus.google.com/+JeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div></div>
						<div>11,186 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-05-06 11:10 am</div>
				                <div>Your wp-cron.php file is directly inside the WordPress directory for each site, in which there would not be a separate folder inside it with additional WordPress files unless you have some sort of additional custom setup.  If you take a look inside each WordPress installation, you will see a file named wp-cron.php.  This is the file that needs to be referenced in the cron job for each site.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(10427);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-10431'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/cd570c2ba002c385f766d4b1432c744b?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/cd570c2ba002c385f766d4b1432c744b'>Ken</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-05-06 11:30 am</div>
				                <div><p>Hi Jeff,</p>
<p>OK... It sounds like the correct path is to the location of the actual wp-chron.php file.</p>
<p>I think the misscommunication is about giving WordPress it's own folder - routine for me as it's a small but incremental plus for security.</p>
<p>Here's the wordpress.org skinny on it.</p>
<p>https://codex.wordpress.org/Giving_WordPress_Its_Own_Directory</p>
<p>Thanks again!</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(10431);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-10435'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-05-06 1:07 pm</div>
				                <div>Hello Ken,<br />
<br />
Thanks for the additional information.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(10435);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-10965'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/53437dc42d8b40752d80298b1f954e53?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/53437dc42d8b40752d80298b1f954e53'>Dorian</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-05-29 8:51 am</div>
				                <div><p>My host sent me a message 15 days ago saying that "multiple wp-cron processes running from previous days" had caused a resource shortage on my server. A quick google search led me to your website and I applied the line of code in wp-config.php exactly where you suggested. This morning there is another warning message in my inbox saying the same website's wp cron had caused a resource shortage. I checked wp-config.php and verified that I had entered the code correctly.</p>
<p>Any suggestions why wp cron is still doing this despite that it has been disabled?</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(10965);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-10966'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh6.googleusercontent.com/-ML7FcuvnOJw/AAAAAAAAAAI/AAAAAAAAAB0/UiLncgP8kr8/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/JeffMa'>JeffMa</a></div>
						<div><a href='https://twitter.com/TheJeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='https://www.facebook.com/TheJeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-facebook.png' style='width:20px;' /></a><a href='https://plus.google.com/+JeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div></div>
						<div>11,186 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-05-29 9:02 am</div>
				                <div>This line within your wp-config.php file will completely disable the wp-cron.  It is, however, possible that if you set up the additional cron job, that you set it to run too frequently.  <br />
<br />
If you only disabled the wp-cron and are still getting these messages, I recommend speaking with your host for more information as it should no longer be running anymore.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(10966);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-10973'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/53437dc42d8b40752d80298b1f954e53?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/53437dc42d8b40752d80298b1f954e53'>Dorian</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-05-29 1:14 pm</div>
				                <div><p>I do have a *real* cron job on that site, however it runs only once per day at 3am, but it has nothing to do with wp-cron.php.</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(10973);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-10974'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh6.googleusercontent.com/-ML7FcuvnOJw/AAAAAAAAAAI/AAAAAAAAAB0/UiLncgP8kr8/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/JeffMa'>JeffMa</a></div>
						<div><a href='https://twitter.com/TheJeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='https://www.facebook.com/TheJeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-facebook.png' style='width:20px;' /></a><a href='https://plus.google.com/+JeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div></div>
						<div>11,186 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-05-29 1:27 pm</div>
				                <div>If you've followed the steps here correctly to disable it, the only person who would be able to give you accurate information on it would be your host.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(10974);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-10977'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-05-29 4:44 pm</div>
				                <div>Hello Dorian,<br />
<br />
If you've disabled the WordPress &lt;strong&gt;wp-cron.php&lt;/strong&gt; inside the &lt;strong&gt;wp-config.php&lt;/strong&gt; file, but it's still running, this could be caused by one of your plugins. Especially if it is a matter of your &lt;strong&gt;wp-cron.php&lt;/strong&gt; script hanging and causing a lot of usage.<br />
<br />
If you are on a cPanel host you should be able to &lt;a href=&quot;http://www.inmotionhosting.com/support/website/stats-logging/accessing-the-raw-access-logs-in-cpanel&quot; target=&quot;_blank&quot;&gt;access your raw access logs&lt;/a&gt; and take a look for the &lt;strong&gt;wp-cron.php&lt;/strong&gt; requests in you logs.<br />
<br />
This might help you narrow down what is still triggering your &lt;strong&gt;wp-cron.php&lt;/strong&gt; executions even though they are disabled upon running every visit.<br />
<br />
- Jacob<br />
<br />
</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(10977);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-11138'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/bc91d7a9fb0ece2fd62f4681a5ad2bdd?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/bc91d7a9fb0ece2fd62f4681a5ad2bdd'>Shan</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-06-04 4:04 am</div>
				                <div><p>I used this method, and added wordpress to the root after username, but i get an email saying NO input file specified. and i get it after every hour.&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(11138);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-11147'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh6.googleusercontent.com/-ML7FcuvnOJw/AAAAAAAAAAI/AAAAAAAAAB0/UiLncgP8kr8/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/JeffMa'>JeffMa</a></div>
						<div><a href='https://twitter.com/TheJeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='https://www.facebook.com/TheJeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-facebook.png' style='width:20px;' /></a><a href='https://plus.google.com/+JeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div></div>
						<div>11,186 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-06-04 8:35 am</div>
				                <div>This means that your reference to the file is broken.  Could you provide me with the exact line of code that you have in there for your cron job?</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(11147);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-11154'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/bc91d7a9fb0ece2fd62f4681a5ad2bdd?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/bc91d7a9fb0ece2fd62f4681a5ad2bdd'>shan</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-06-04 9:15 am</div>
				                <div><p>I copy pasted ur code above, changed user and added /wordpress after public html. Later came back to add email. &nbsp;However is there a possibilty of cron file having a different name</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(11154);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-11155'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh6.googleusercontent.com/-ML7FcuvnOJw/AAAAAAAAAAI/AAAAAAAAAB0/UiLncgP8kr8/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/JeffMa'>JeffMa</a></div>
						<div><a href='https://twitter.com/TheJeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='https://www.facebook.com/TheJeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-facebook.png' style='width:20px;' /></a><a href='https://plus.google.com/+JeffMatson' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div></div>
						<div>11,186 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-06-04 9:44 am</div>
				                <div>The wp-cron.php file is always in the same place within the WordPress installation.  Be sure that the path you are referencing in your cron job is the exact path of your WordPress installation.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(11155);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-11156'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/bc91d7a9fb0ece2fd62f4681a5ad2bdd?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/bc91d7a9fb0ece2fd62f4681a5ad2bdd'>Shan</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-06-04 9:58 am</div>
				                <div><p>Yup, as i have copied the code from above, there s space after cd . does it have to be there.&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(11156);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-11159'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-06-04 10:10 am</div>
				                <div>Hello Shan,<br />
<br />
In the code provided, yes there should be a space after the <strong>cd</strong>.<br />
<p class="code_block">cd /home/userna5/public_html; php -q wp-cron.php</p><br />
If you have any further questions, feel free to post them below.<br />
Thank you,<br />
<br />
-John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(11159);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-11580'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/0b26a6e7f097e88c006095981dd94b4a?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/0b26a6e7f097e88c006095981dd94b4a'>DrProtocols</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-06-14 1:39 pm</div>
				                <div><p>Unfortunately the original premise of the post is <strong>incorrect</strong>, which rather invalidates the main thrust of the topic.</p>
<p>If you would actually check in WordPress rather than simply regurgitate misinformation that you read elsewhere you would know that WordPress does <strong>not</strong>&nbsp;call wp-cron.php every time the site is visited. <strong>WordPress only makes a loopback access to wp-cron.php when there is a scheduled task due to run.</strong> I just thought I'd emphasise that so you'd be clear where the error in your original premise was.</p>
<p><strong>In fact if you disable WordPress cron and instead rely upon server cron you can end up increasing the resource usage for a site.</strong> Just thought I'd emphasise that since the major claim of the post is the opposite. If you don't understand why I suggest you run through some use case scenarios (and remember that a direct access to wp-cron.php is basically like any other site access and WordPress runs through it's whole initialisation.</p>
<p>The simple example of having a server cron run 4 times a day may not increase resource usage but it certainly isn't going to decrease it. But is 4 timesa day really valid for the type of high-traffic site that the example is pinned on? I would suggest considering something more realistic.</p>
<p>There is a place for a well targetted server cron to fire once at a specific time to trigger a periodic task that you know will be due at that time - but use this in conjunction with WordPress cron.</p>
<p>The only other time you might want to use a more frequent server cron is if the hosting doesn't support http loopbacks and you are required to enable the WordPress alternate cron to haev WordPress cron work (if this is required then this is a bad host and you shouldmove anyway). This has the unfortunate side effect of sometimes making additional nasty query strings be visibly appended to urls that a site visitor might see and only in that case and only if you didn't like that effect would you consider a more frequent server cron, but you'd have to take the hit of increased resource usage compared with using WordPress cron.</p>
<p>Regards.</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(11580);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-12385'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/1cfd256f1a2c501b8ff289f78228b237?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/1cfd256f1a2c501b8ff289f78228b237'>eric</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-06 5:07 am</div>
				                <div><p>getting the following errors running this cron job:</p>

<p>Warning:  session_start() [function.session-start]: Cannot send session cookie - headers already sent in /home/userna5/public_html/wp-content/plugins/botdetect-wp-captcha/wp-botdetect-captcha.php on line 205</p>

<p>Apparently it's connected to the botdetect captcha plugin.  But I know nothing about this stuff.  Does this mean the cron job is not running?  Should I go back to using wp-cron.php?  Or should I just ignore these errors?</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(12385);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-12387'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-06 6:16 am</div>
				                <div>Hello eric,<br />
<br />
Do you get the same error when just trying to access the &lt;span style=&quot;color: red;&quot;&gt;wp-cron.php&lt;/span&gt; script directly?<br />
<br />
&lt;span style=&quot;color: red;&quot;&gt;http://example.com/wp-cron.php&lt;/span&gt;<br />
<br />
I installed that same WordPress plugin and was unable to get it to run into problems when running from a cron job. Are you using the same method as mentioned in this guide as:<br />
<br />
&lt;pre class=&quot;cli&quot; style=&quot;width: 340px;&quot;&gt;cd /home/&lt;strong style=&quot;color: red;&quot;&gt;userna5&lt;/strong&gt;/public_html; php -q wp-cron.php&lt;/pre&gt;<br />
<br />
If you disable the plugin does your cron job run without errors?<br />
<br />
- Jacob</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(12387);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-12427'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/1cfd256f1a2c501b8ff289f78228b237?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/1cfd256f1a2c501b8ff289f78228b237'>eric</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-07 5:39 am</div>
				                <div><p>Hi Jacob,&nbsp;</p>
<p>I don't know what you mean when you say, "Do you get the same error when just trying to access the wp-cron.php script directly"</p>
<p>I did everything exactly as the article states. &nbsp;</p>
<p>When I disable the plugin&nbsp;I don't get an email that anything has happened. &nbsp;No email so that must mean the cron job is running but wp-cron.php has nothing to do. &nbsp;As soon as I re-enable the plugin the error messages begin again.</p>
<p>I'm guessing this means the cron job is not running when that plugin is enabled?</p>
<p>Eric</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(12427);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-12430'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-07 7:19 am</div>
				                <div>Hello Eric,<br />
<br />
Jacob means do you get an error message when visiting "http://example.com/wp-cron.php" itself? <br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(12430);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-12428'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/1cfd256f1a2c501b8ff289f78228b237?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/1cfd256f1a2c501b8ff289f78228b237'>eric</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-07 5:49 am</div>
				                <div><p>when I try the wget method, I just get an error that I don't have permission . . .&nbsp;</p>
<p><span style="color: #222222; font-family: arial, sans-serif; font-size: 13px;">/usr/local/cpanel/bin/</span><span style="color: #222222; font-family: arial, sans-serif; font-size: 13px;">jailshell: /usr/bin/wget: Permission denied</span></p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(12428);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-12431'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-07 7:23 am</div>
				                <div>Hello Eric,<br />
That is correct, wget is disabled on our servers. You can, however use the cURL method. You can see the format for that here in our <a href="http://www.inmotionhosting.com/support/edu/cpanel/301-run-cron-job">Cron job article</a>.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(12431);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-12445'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/1cfd256f1a2c501b8ff289f78228b237?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/1cfd256f1a2c501b8ff289f78228b237'>eric</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-07 1:51 pm</div>
				                <div><p>I get no errors at all when I visit truthsaves.org/wp-cron.php. &nbsp;I get nothing. &nbsp;No page load -- just a blank page. &nbsp;</p>
<p>BUT . . . I have success using the curl method! &nbsp;THANK YOU! &nbsp;I am testing the curl method right now and was just able to get a scheduled post to work! &nbsp;And no error messages. &nbsp;Thank you very much!&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(12445);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13349'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/7aab57106606c4df9741434bc92507f1?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/7aab57106606c4df9741434bc92507f1'>Andy Turner</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-26 10:16 am</div>
				                <div><p>What does this mean? Emailed cron to me....</p>
<p>attempt to lock file /home/virtfs/_lock/889 timed out after 25 attempts; lock still held by pid 2170 Could not create lock file: /home/virtfs/_lock/889</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13349);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13354'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-26 11:03 am</div>
				                <div>Hello Andy,<br />
<br />
Are you getting this error every single time the cron runs, or was this just a one-time thing? That error is in regards to the &lt;span style=&quot;color: red;&quot;&gt;virtfs&lt;/span&gt; or Virtual Filesystem and seems to also be discussed &lt;a href=&quot;http://forums.cpanel.net/f5/case-86773-home-virtfs-_lock-timed-out-after-25-attempts-386021.html&quot; target=&quot;_blank&quot;&gt;here&lt;/a&gt; on the cPanel forums.<br />
<br />
It basically sounds like a stale lock file, but I don't see it on the server anymore. If you continue to see this issue pop up, please &lt;a href=&quot;http://www.inmotionhosting.com/support/website/getting-started-guides/submitting-and-checking-on-status-of-tickets&quot; target=&quot;_blank&quot;&gt;submit a ticket&lt;/a&gt; so that our system administration team can review why this might keep happening.<br />
<br />
One way you might be able to prevent this from happening is by staggering your cron job runs as well. It looks like you have a bunch setup to all run every 6 hours at the top minute 0 of the hour. Maybe go up a minute for each to ensure that one can completely finish before another starts.<br />
<br />
- Jacob</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13354);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13355'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/7aab57106606c4df9741434bc92507f1?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/7aab57106606c4df9741434bc92507f1'>Andy Turner</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-26 11:15 am</div>
				                <div><p>Hi Jacob, </p>
<p>Thanks for your reply, yes i have a bunch of wordpress addon domains for which i am following your guidelines to reduce cpu load on the shared server. So I just followed the instructions in the tutorial to manually add the cron jobs for each wordpress site.</p>
<p>I will try your suggestion and see if it makes a difference.</p>
<p>If not I will create a ticket to see why this is happening.</p>
<p>Cheers, Andy.</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13355);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13361'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-26 6:35 pm</div>
				                <div>Hey Andy,<br />
<br />
Sorry for the delayed response, we have to approve comments on articles before you can see them to make sure people don't include any sensitive information in their questions. So that's why you didn't see your comment posted right away.<br />
<br />
If staggering the cron jobs so they don't all run during the same minute works, please comment back here and let me know. I can go ahead and update this article itself for other users that have multiple WordPress installs to make sure they don't run into the same problem if that's the solution.<br />
<br />
- Jacob</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13361);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13394'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/7aab57106606c4df9741434bc92507f1?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/7aab57106606c4df9741434bc92507f1'>Andy Turner</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-28 7:28 am</div>
				                <div><p>Hi Jacob,</p>
<p>Reporting back ! I staggered those cron jobs like you said by 1 minute. I don't get any emails with that error anymore, I just get two emails periodically as follows:</p>
<pre style="background-color: #FDD;">from: Cron Daemon &lt;root@ecres155.servconfig.com&gt;
to: user@gmail.com
date: Mon, Jul 28, 2014 at 2:26 PM
subject: Cron &lt;userna5@ecres155&gt; php -q /home/userna5/public_html/admin/cron.php
No input file specified.</pre>
<p>&nbsp;</p>
<p>And this one:</p>

<pre style="background-color: #FDD;">from: Cron Daemon &lt;root@ecres155.servconfig.com&gt;
to: user@gmail.com
date: Mon, Jul 28, 2014 at 5:08 PM
subject: Cron &lt;userna5@ecres155&gt; cd /home/userna5/public_html/wire-writer.com; php -q wp-cron.php
Warning session_start(): Cannot send session cookie - headers already sent in /home/userna5/public_html/wire-writer.com/wp-content/plugins/wordpress-simple-paypal-shopping-cart/wp_shopping_cart.php on line 13
Warning session_start(): Cannot send session cache limiter - headers already sent in /home/userna5/public_html/wire-writer.com/wp-content/plugins/wordpress-simple-paypal-shopping-cart/wp_shopping_cart.php on line 13</pre>
<p>&nbsp;</p>
<p>Not sure about the first one, but the second one looks like an error!
<p>Cheers,</p>
<p>Andy.</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13394);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13410'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-28 1:51 pm</div>
				                <div>Hello Andy,<br />
<br />
Thanks for getting back to us, glad to hear that staggering the cron job runs seems to have gotten rid of your first issue.<br />
<br />
For the first error that you've provided, it looks like it's trying to run:<br />
<br />
&lt;span style=&quot;color: red;&quot;&gt;php -q /home/userna5/public_html/admin/cron.php&lt;/span&gt;<br />
<br />
However it doesn't look like you have a &lt;span style=&quot;color: red;&quot;&gt;/public_html/admin/cron.php&lt;/span&gt; file, so that's why it's telling you &lt;span style=&quot;color: red;&quot;&gt;No input file specified&lt;/span&gt;.<br />
<br />
I see that you do have a &lt;span style=&quot;color: red;&quot;&gt;/adminold&lt;/span&gt; directory, so possibly you forgot that you renamed this directory after setting up the cron job?<br />
<br />
For the second error, it looks like your &lt;span style=&quot;color: red;&quot;&gt;wire-writer.com&lt;/span&gt; cron run is failing due to the &lt;a href=&quot;https://wordpress.org/plugins/wordpress-simple-paypal-shopping-cart/&quot; target=&quot;_blank&quot;&gt;WordPress Simple Paypal Shopping Cart&lt;/a&gt; plugin that you're running.<br />
<br />
It says it has a problem with &lt;strong&gt;Line 13&lt;/strong&gt; of this file:<br />
<br />
&lt;span style=&quot;color: red;&quot;&gt;/home/userna5/public_html/wire-writer.com/wp-content/plugins/wordpress-simple-paypal-shopping-cart/wp_shopping_cart.php&lt;/span&gt;<br />
<br />
Taking a look there I see this:<br />
<br />
&lt;span style=&quot;color: red;&quot;&gt;if (!isset($_SESSION)) {<br />
    session_start();<br />
}&lt;/span&gt;<br />
<br />
So it does seem related to something the plugin is trying to do with sessions. Doing a Google search of this issue I stumbled across this &lt;a href=&quot;http://wordpress.org/support/topic/plugin-wordpress-simple-paypal-shopping-cart-wordpress-simple-paypal-checkout-plugin-broken&quot; target=&quot;_blank&quot;&gt;WordPress Simple PayPal Checkout Plugin Broken&lt;/a&gt; post on WordPress.org.<br />
<br />
However I attempted to run that site's &lt;span style=&quot;color: red;&quot;&gt;wp-cron.php&lt;/span&gt; file directly and was not encountering this issue. So I'm not sure if it is tied somehow to it being run from a cron job which would be odd.<br />
<br />
I see that the site's cron job has run 3 times already today, are you encountering this error being emailed to you every time, or is it sporadic?<br />
<br />
- Jacob</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13410);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13454'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/7aab57106606c4df9741434bc92507f1?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/7aab57106606c4df9741434bc92507f1'>Andy Turner</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-30 5:30 am</div>
				                <div><p>Hi Jacob,</p>
<p>I renamed the adminold folder back to admin, I don't remember renaming this folder, I will see what happens now.I am getting the other error every 6 hours by email.</p>
<p>Andy.</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13454);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13357'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/f6f0cb047b649b40291d91c831adbe71?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/f6f0cb047b649b40291d91c831adbe71'>Nathan</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-26 11:35 am</div>
				                <div><p>My website is loading slow on mobile devices which is causing a higher bounce rate. When I deactivated the plug in that is causing this I get an error message:</p>
<p>Warning Illegal offset in wp_includes cron.php file on line 180 .....</p>
<p>This is what is on line 180 &ndash; &ldquo;if ( isset( $cron[ $hook ][ $key ] ) ) {&ldquo;</p>
<p>Any suggestions??</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13357);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13362'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-26 6:47 pm</div>
				                <div>Hello Nathan,<br />
<br />
What was the plugin that you deactivated that starting causing this error, and if you re-enable it, do the errors go away?<br />
<br />
Most errors I see regarding &lt;span style=&quot;color: red;&quot;&gt;Illegal offset&lt;/span&gt; in WordPress are from years ago. Are you running the latest version 3.9.1 of WordPress currently? You might want to try upgrading if not to see if that helps.<br />
<br />
Otherwise it sounds like possibly your plugin that you had activated might have modified the &lt;span style=&quot;color: red;&quot;&gt;cron.php&lt;/span&gt; script in a way that WordPress is not expecting. If that is the case, you can make a copy of your current &lt;span style=&quot;color: red;&quot;&gt;/wp-includes/cron.php&lt;/span&gt; file and then download &lt;a href=&quot;http://core.svn.wordpress.org/trunk/wp-includes/cron.php&quot; target=&quot;_blank&quot;&gt;a copy of cron.php&lt;/a&gt; directly from WordPress to ensure you have a unmodified original version of it.<br />
<br />
Please let us know if you're still having any issues.<br />
<br />
- Jacob</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13362);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13395'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/bda4749d4d10b3c737b5e00b58b749a9?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/bda4749d4d10b3c737b5e00b58b749a9'>Robert Piller</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-28 7:43 am</div>
				                <div><p><span style="color: rgb(34, 34, 34); font-family: arial; font-size: small;">I found that wp-cron.php continued to fire unless I placed the directive - define('DISABLE_WP_CRON', 'true'); - before this line:</span></p>
<div style="color: rgb(34, 34, 34); font-family: arial; font-size: small;">/* That's all, stop editing! Happy blogging. */</div>
<div style="color: rgb(34, 34, 34); font-family: arial; font-size: small;">&nbsp;</div>
<div style="color: rgb(34, 34, 34); font-family: arial; font-size: small;">While your article does explain a good place to put the directive, I figured I could just add it to the very end of the file. I&nbsp;learned the hard way that&nbsp;the order lines in of wp-config.php is actually&nbsp;important.</div></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13395);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13412'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-28 1:57 pm</div>
				                <div>Hello Robert,<br />
<br />
Yes the placement of the code in the &lt;span style=&quot;color: red;&quot;&gt;wp-config.php&lt;/span&gt; file is important, that's why in this guide it states to look around line 37 for the Database Collate section to place it directly under.<br />
<br />
I'll try to update the guide to make it a bit more clear that this is required. Thanks for the comment and letting me know!<br />
<br />
- Jacob</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13412);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-15443'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/88d12dc0e9198fe0580ac0d8893d851f?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/88d12dc0e9198fe0580ac0d8893d851f'>panos</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-09-24 6:10 am</div>
				                <div><p>&Eta;&iota;, i<span id="result_box" lang="en"><span class="hps"> put</span> <span class="hps">the code</span> <span class="hps">exactly where</span> <span class="hps">the article says</span><span>, but</span> then&nbsp; in <span class="hps">the</span> <span class="hps">main</span> <span class="hps">page</span> i <span class="hps">view</span> <span class="hps">only this...</span></span></p>
<p> <strong>Parse error</strong>: syntax error, unexpected T_STRING in <strong>/home/kafeneio/public_html/wp-config.php</strong> on line <strong>1</strong></p>
<p>&nbsp;</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(15443);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-15456'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-09-24 11:32 am</div>
				                <div>Hello Panos,<br />
<br />
Be sure to double check and ensure you followed the instructions correctly. If you feel so, then comment out the line you added. Does it still give an error?<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(15456);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-15460'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/88d12dc0e9198fe0580ac0d8893d851f?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/88d12dc0e9198fe0580ac0d8893d851f'>panos</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-09-24 11:42 am</div>
				                <div><p>is ok now.&nbsp; <span id="result_box" class="short_text" lang="en"> <span class="hps">now watch</span> <span class="hps">the</span> <span class="hps">stats from recource usage ! thx</span></span></p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(15460);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-15502'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/80f08c3fc48162d18b9b62e71f9b9609?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/80f08c3fc48162d18b9b62e71f9b9609'>Seth Albaum</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-09-25 9:02 am</div>
				                <div><p>I followed this advice after a support session. You bet it helped speed up the site, but what good is a fast site if it no longer does what it's supposed to?</p>
<p>&nbsp;</p>
<p>My calendar widget is no longer updating. It still thinks it's yesterday. It's also the backbone of my hyperlocal site. Back to support I go...</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(15502);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-15515'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-09-25 11:26 am</div>
				                <div>Hello Seth,<br />
<br />
Thank you for contacting us. While disabling wp-cron can help speed up your site, it is just a suggestion.<br />
<br />
If it is causing problems with your site, it may not be the best option.<br />
<br />
Our guide on <a href="http://www.inmotionhosting.com/support/website/wordpress/how-to-optimize-wordpress">Optimizing WordPress</a> provides several other suggestions for speeding up your site.<br />
<br />
If you have any further questions, feel free to post them below.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(15515);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-16097'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/01073078daccb6993d3a9b3915cfd24b?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/01073078daccb6993d3a9b3915cfd24b'>Hansel</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-10-10 9:07 am</div>
				                <div><p>There is a nice cron wrapper script for executing every wp-cron.php in multi vhost setups: *Link Removed*</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(16097);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-16103'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-10-10 9:48 am</div>
				                <div>Hello Hansel,<br />
<br />
Thank you for your suggestion. If you are interested in posting an article in our <a href="http://www.inmotionhosting.com/support/u">User Submitted</a> section, I would be happy to link to it.<br />
<br />
If you have any further questions, feel free to post them below.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(16103);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-16105'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/0b26a6e7f097e88c006095981dd94b4a?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/0b26a6e7f097e88c006095981dd94b4a'>DrProtocols</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-10-10 11:05 am</div>
				                <div><p>@Hansel - your article perpetuates the myth that wp-cron.php is caled by WordPress on every visit to a site. Rather than repeating falsehoods I would suggest you do your own homework, understand how it really works and then corect your article.</p>
<p>As for your technique, if you want to repeatedly call wp-cron.php for absolutely no reason and thus use more hosting resources rather than less then it's up to you. I suppose if you actually have 144 WordPress scheduled tasks you want to run every day on every site you have then you may justify it - but do you really? If not then you are simply wasting resources and if you don't understand why that might be the case then you might want to review your understanding of WordPress and how it handles scheduled tasks and what happens every time you call wp-cron.php when you don't need to call it.</p>
<p>Regards</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(16105);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-16112'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/1c22f7c9ce328b993ea0375c41bc694d?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/1c22f7c9ce328b993ea0375c41bc694d'>Danu</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-10-11 12:38 am</div>
				                <div><p>Hi Jacob,</p>
<p>Thanks for article. You save me from zombie.</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(16112);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-16669'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-6ApBYC0Mrzw/AAAAAAAAAAI/AAAAAAAABUw/8WiiQTw-VKY/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/Iamkingsleyf'>Iamkingsleyf</a></div>
						<div><a href='https://twitter.com/Iamkingsleyf' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='http://www.facebook.com/iamkingsleyf' target='_blank'><img src='//www.inmotionhosting.com/img/icon-facebook.png' style='width:20px;' /></a><a href='http://plus.google.com/+kingsleyfelix' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div></div>
						<div>32 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-10-24 1:45 am</div>
				                <div>Hello, <br />
<br />
I keep getting this message <br />
<br />
&lt;b&gt;No input file specified.&lt;/b&gt;<br />
<br />
Which later change to this, after i made some changes by adding my domain. <br />
<br />
 &lt;b&gt; /usr/local/cpanel/bin/jailshell: line 0: cd: /home/xxxxxx/healthable.org/public_html: No such file or directory No input file specified. &lt;/b&gt;</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(16669);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-16674'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-10-24 8:08 am</div>
				                <div>Hello,<br />
<br />
The path '/home/xxxxxx/healthable.org/public_html' appears to be incorrect. It should be '/home/xxxxxx/public_html' if your domain is the primary domain, or /home/xxxxxx/public_html/healthable.org' if it is an addon domain.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(16674);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-16686'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-6ApBYC0Mrzw/AAAAAAAAAAI/AAAAAAAABUw/8WiiQTw-VKY/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/Iamkingsleyf'>Iamkingsleyf</a></div>
						<div><a href='https://twitter.com/Iamkingsleyf' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='http://www.facebook.com/iamkingsleyf' target='_blank'><img src='//www.inmotionhosting.com/img/icon-facebook.png' style='width:20px;' /></a><a href='http://plus.google.com/+kingsleyfelix' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div></div>
						<div>32 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-10-24 2:57 pm</div>
				                <div>Alright Thanks... let me try this.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(16686);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-16708'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-6ApBYC0Mrzw/AAAAAAAAAAI/AAAAAAAABUw/8WiiQTw-VKY/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/Iamkingsleyf'>Iamkingsleyf</a></div>
						<div><a href='https://twitter.com/Iamkingsleyf' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='http://www.facebook.com/iamkingsleyf' target='_blank'><img src='//www.inmotionhosting.com/img/icon-facebook.png' style='width:20px;' /></a><a href='http://plus.google.com/+kingsleyfelix' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div></div>
						<div>32 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-10-25 3:08 pm</div>
				                <div>Having lots of emails....<br />
<br />
<br />
&lt;br /&gt;<br />
&lt;b&gt;Warning&lt;/b&gt;:  session_start(): Cannot send session cookie - headers already sent in &lt;b&gt;/home/xxxxx/public_html/healthable.org/wp-content/plugins/maxblogpress-subscribers-magnet/maxblogpress-subscribers-magnet.php&lt;/b&gt; on line &lt;b&gt;632&lt;/b&gt;&lt;br /&gt;<br />
&lt;br /&gt;<br />
&lt;b&gt;Warning&lt;/b&gt;:  session_start(): Cannot send session cache limiter - headers already sent in &lt;b&gt;/home/xxxxx/public_html/healthable.org/wp-content/plugins/maxblogpress-subscribers-magnet/maxblogpress-subscribers-magnet.php&lt;/b&gt; on line &lt;b&gt;632&lt;/b&gt;&lt;br /&gt;<br />
welcome&lt;br /&gt;<br />
&lt;b&gt;Warning&lt;/b&gt;:  mysql_fetch_object(): supplied argument is not a valid MySQL result resource in &lt;b&gt;/home/xxxxx/public_html/healthable.org/wp-content/plugins/maxblogpress-ping-optimizer/mpo-lib/include/mbp-ping-optimizer.cls.php&lt;/b&gt; on line &lt;b&gt;312&lt;/b&gt;&lt;br /&gt;<br />
&lt;br /&gt;<br />
&lt;b&gt;Warning&lt;/b&gt;:  mysql_fetch_object(): supplied argument is not a valid MySQL result resource in &lt;b&gt;/home/xxxxx/public_html/healthable.org/wp-content/plugins/maxblogpress-ping-optimizer/mpo-lib/include/mbp-ping-optimizer.cls.php&lt;/b&gt; on line &lt;b&gt;336&lt;/b&gt;&lt;br /&gt;<br />
welcome&lt;br /&gt;<br />
&lt;b&gt;Warning&lt;/b&gt;:  mysql_fetch_object(): supplied argument is not a valid MySQL result resource in &lt;b&gt;/home/xxxxx/public_html/healthable.org/wp-content/plugins/maxblogpress-ping-optimizer/mpo-lib/include/mbp-ping-optimizer.cls.php&lt;/b&gt; on line &lt;b&gt;312&lt;/b&gt;&lt;br /&gt;<br />
&lt;br /&gt;<br />
&lt;b&gt;Warning&lt;/b&gt;:  mysql_fetch_object(): supplied argument is not a valid MySQL result resource in &lt;b&gt;/home/xxxxx/public_html/healthable.org/wp-content/plugins/maxblogpress-ping-optimizer/mpo-lib/include/mbp-ping-optimizer.cls.php&lt;/b&gt; on line &lt;b&gt;336&lt;/b&gt;&lt;br /&gt;<br />
&lt;br /&gt;<br />
&lt;b&gt;Fatal error&lt;/b&gt;:  Cannot use object of type WP_Error as array in &lt;b&gt;/home/xxxxx/public_html/healthable.org/wp-content/plugins/tweet-old-post/inc/core.php&lt;/b&gt; on line &lt;b&gt;641&lt;/b&gt;&lt;br /&gt;</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(16708);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-16770'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-10-27 10:57 am</div>
				                <div>Hello,<br />
<br />
I am not quite sure of your situation. Are each of those separate emails or are you getting emails with nothing but errors? Some of the errors appear to be plugin related. This can be specific to that plugin or possibly caused by other plugins interfering. You will want to test each plugin individually and then together in combination to see if there are any interference.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(16770);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-16790'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-6ApBYC0Mrzw/AAAAAAAAAAI/AAAAAAAABUw/8WiiQTw-VKY/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/Iamkingsleyf'>Iamkingsleyf</a></div>
						<div><a href='https://twitter.com/Iamkingsleyf' target='_blank'><img src='//www.inmotionhosting.com/img/icon-twitter.png' style='width:20px;' /></a><a href='http://www.facebook.com/iamkingsleyf' target='_blank'><img src='//www.inmotionhosting.com/img/icon-facebook.png' style='width:20px;' /></a><a href='http://plus.google.com/+kingsleyfelix' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div></div>
						<div>32 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-10-27 6:11 pm</div>
				                <div>I got the email just as i posted it</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(16790);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-17244'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/159264611b25be2e89c92e6648c99ea4?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/159264611b25be2e89c92e6648c99ea4'>Lena</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-11-09 8:27 am</div>
				                <div><p>Thanks for the article. I've been experiencing some brief timeouts that are happening in the wee hours of the morning on certain sites. After looking at the logs, I suspect the wp-cron combined with some system maintenance. At the very least this will narrow down the problem. But, hopefully, it will fix it.</p>
<p>Thanks!</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(17244);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-17945'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/451f049e791dbf3dad2faa65b9997dc6?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/451f049e791dbf3dad2faa65b9997dc6'>Zach</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-11-28 2:45 pm</div>
				                <div>Its pretty solid. nice work. I appreciate you taking the time to put this together.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(17945);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-19004'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/66cc743f31a1717d366644441deacd0e?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/66cc743f31a1717d366644441deacd0e'>Andrew</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-30 9:30 am</div>
				                <div>Nothing it worked perfectly and was a great answer.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(19004);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-20131'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh4.googleusercontent.com/-fKoB6KeO928/AAAAAAAAAAI/AAAAAAAACAw/SddiYkhIMyQ/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/zomidaily'>zomidaily</a></div>
						<div></div>
						<div></div>
						<div>15 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-01-30 12:43 am</div>
				                <div>Hi Jacob,<br />
<br />
If I disable the wp-cron.php, and set cron job for every 6 hours, would it effect the comment left by my visitors? Does the comment appear only at every 6 hours?<br />
<br />
And also the scheduled post will be posted only 4 times a day?<br />
<br />
Regards,<br />
Joseph</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(20131);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-20141'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/b8d986fe3d786bcb29c3645b0acbe439?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/b8d986fe3d786bcb29c3645b0acbe439'>Stephanie Gans</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-01-30 4:45 am</div>
				                <div>It does not describe the consequences of turning off chron, why I might do so - especially since I have no idea what triggered the need to do so, as I do not get any serious volume on my site.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(20141);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-20258'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-02-02 2:05 pm</div>
				                <div>Hello,<br />
<br />
This is what we have above: "On low traffic sites this is perfectly fine, but when visitors roll in, checking multiple times for scheduled tasks can be very inefficient and lead to resource usage problems for your server, plus make your website load slower." <br />
<br />
Did you have any more specific questions we can answer for you?<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(20258);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-22519'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/e54f18b166ebf3dae401af7a34ae8362?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/e54f18b166ebf3dae401af7a34ae8362'>Souvik Banerjee</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-04-10 7:01 am</div>
				                <div><p>By doing not so much if I set the following code in wp-config.php, is it sufficient?</p>
<p>define( 'WP_CRON_LOCK_TIMEOUT', 900 );</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(22519);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-22531'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-04-10 1:44 pm</div>
				                <div>Hello,<br />
<br />
Thank you for contacting us. While this may help, you will have to monitor your site over time to really know.<br />
<br />
This is because everyone's site performance can greatly differ based on what plugins/themes you are using and how much traffic.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(22531);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-22912'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/55143677b16362f99fbf491b2f4c8cc5?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/55143677b16362f99fbf491b2f4c8cc5'>Poojali</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-04-24 5:35 am</div>
				                <div><p>Hello,</p>
<p>I'm need to create a cron which in the midnight, but for testing i have simply created a cron which run after 5 mins is as bellow,</p>
<p>*/5&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp; wget http://mysite.com/wp-cron.php?doing_wp_cron=1 &gt; /dev/null 2&gt;&amp;1</p>
<p>but is not sending any mail to me related cron, so i'm very confuze that cron is set or not.Also i have aslo run the file in url but also not getting any mail.</p>
<p>I have refer,</p>
<p>http://wpdailybits.com/blog/replace-wordpress-cron-with-real-cron-job/74 link to set a cron</p>
<p>I'm working with wordpress site</p>
<p>Please provide me solution urgently.</p>
<p>Thanks inadvance</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(22912);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-22933'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-04-24 3:50 pm</div>
				                <div>Hello Poojali,<br />
<br />
Sorry for the problem with the your Cron job.  Unfortunately, the "wget" command is disabled on shared servers.  You will not be able to use that command in a shared server, so it most likely the main issue with your cron job.  You can use the CURL instead. Check out <a href="http://www.inmotionhosting.com/support/edu/cpanel/301-run-cron-job">how to create a CRON job</a>for more info.<br />
<br />
If you have any further questions or comments, please let us know.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(22933);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-23020'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/0933c52d8cb978e104b91c1e174f9c11?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/0933c52d8cb978e104b91c1e174f9c11'>Jerome</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-04-28 9:35 am</div>
				                <div><p>Hi,</p>
<p>&nbsp;</p>
<p>I just want to know if i can run the file insde the theme like this.</p>
<p>php home2/username/public_html/folder/wp-content/themes/folder_name/file.php</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Regards,</p>
<p>Jerome</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(23020);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-23027'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-04-28 10:25 am</div>
				                <div>Hello Jerome,<br />
<br />
What exactly is it you are trying to do?<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(23027);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-23036'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/0933c52d8cb978e104b91c1e174f9c11?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/0933c52d8cb978e104b91c1e174f9c11'>Jerome</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-04-29 12:43 am</div>
				                <div><p>Hi Scott,</p>
<p>&nbsp;</p>
<p>Thank you for you reply.</p>
<p>Im trying to load a function inside a theme, to grab the data from a xml link.</p>
<p>And i want to know if this command from the cron is possible to grab data.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Regards,</p>
<p>Jerome&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(23036);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-23066'></a>
		<div  style='margin:2px 0px 0px 120px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-04-30 9:04 am</div>
				                <div>Hello Jerome,<br />
<br />
As long as your code can access the data then there really shouldn't be any reason that it would not work.  For info on Crons, check out <a href="http://www.inmotionhosting.com/support/edu/cpanel/301-run-cron-job">Running  a Cron Job</a>.  We unfortunately can't provide specific code support, we can try to help if you have specific questions.<br />
<br />
I hope this helps to answer your question, please let us know if you require any further  assistance.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(23066);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-23065'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/af20d9926a3d779d3e1fe6fbb4db3c1d?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/af20d9926a3d779d3e1fe6fbb4db3c1d'>Poojali</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-04-30 8:40 am</div>
				                <div><p>Hello,</p>
<p>Thanks...My problem was solved using,</p>
<p>*/5&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp; * php /home/cpanelusername/public_html/yourcron.php</p>
<p>this type of command.</p>
<p>Now, my cron working properly.</p>
<p>&nbsp;</p>
<p>Thanks again...</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(23065);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24318'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/11ed7269191b17d67b7db1f6e13cab6e?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/11ed7269191b17d67b7db1f6e13cab6e'>Pascal</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-19 4:33 am</div>
				                <div><p>Hi, I just wanted to leave an information here:</p>
<p>&nbsp;</p>
<p>In some cases the wp-cron.php crashes on Windows Server + IIS the PHP.exe which produces an 500 error. You need than to recycle the application pool. So to fix this issue just disable wp-cron.php.</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24318);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-30085'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/559113fc0d5b8797ca0ea04d351baac6?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/559113fc0d5b8797ca0ea04d351baac6'>Amjad Miandad</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-01-25 4:44 am</div>
				                <div><p>Thanks for your kind help, just a question in my head, how to check if it really worked or not?</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(30085);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-30279'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-AmEnso4E7cE/AAAAAAAAAAI/AAAAAAAAAB8/-OBGtrb_6VM/s90-p-rw-no/photo.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/christopherm'>christopherm</a></div>
						<div><a href='https://myaccount.google.com/?utm_source=OGB' target='_blank'><img src='//www.inmotionhosting.com/img/icon-google.png' style='width:20px;' /></a></div>
						<div><div style='display:inline; padding-left:20px; background:url(/support/templates/supportcentertemplate/images/gold_star.png) no-repeat 0px 0px;background-size:15px 15px;'>Staff</div></div>
						<div>3,390 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-02-01 9:43 am</div>
				                <div>You may have to check this against cron activity that was previously running. </div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(30279);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-31664'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/96a854c65f2c49aae28bd8af0c0492bd?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/96a854c65f2c49aae28bd8af0c0492bd'>Jim</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-04-03 6:35 pm</div>
				                <div><p>OK so what is the -q parameter for??</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(31664);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-31691'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-04-04 3:47 pm</div>
				                <div>the -q switch sets the command to 'quiet' mode, which supresses output.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(31691);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-32433'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/c882878f518385eba62129ddb41c47d7?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/c882878f518385eba62129ddb41c47d7'>Andeen</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-05-03 6:42 pm</div>
				                <div><p>This was super helpful! Thanks guys :)</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32433);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-32522'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='/support/images/avatars/default_avatar.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/emlynley'>emlynley</a></div>
						<div></div>
						<div></div>
						<div>3 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-05-08 5:58 pm</div>
				                <div>I noticed that Webalyzer shows &quot;hits&quot; on wp-cron.php <br />
Does this happen automatically or is someone trying to get into my wp-cron? I'm very concerned after being hacked at another web host, so I'm wondering whether I need to worry about this showing up </div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32522);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-32536'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-05-09 11:24 am</div>
				                <div>It is likely just bots. They crawl and hit common pages for whatever reason. wp_cron.php is in every WordPress site, so it could be just testing to see that it exists. Getting hit on any page is not an indication that it is being cased for a hack. Bots do all kinds of things for different reasons.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32536);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
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
			<h3><span class='comment-count'>86</span> Questions & <span class='comment-text'>Comments</span></h3>
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


















<!-- Google Code for Wordpress Support Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1071887445;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "WgJ_CM_PnQMQ1eiO_wM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1071887445/?value=0&amp;label=WgJ_CM_PnQMQ1eiO_wM&amp;guid=ON&amp;script=0"/>
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
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '66.249.81.143']);

                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'chat', 'launch', 'support center']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '66.249.81.143']);
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
        	        id:'382',
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