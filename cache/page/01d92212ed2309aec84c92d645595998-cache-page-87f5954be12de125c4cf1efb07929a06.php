<?php die("Access Denied"); ?>#x#a:3:{s:4:"body";s:201738:" 
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

		  <base href="http://www.inmotionhosting.com/support/edu/joomla-25/create-plugin/hello-world" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="last-modified" content="2016-01-11T15:51:35-08:00" />
  <meta name="keywords" content="create joomla 2.5 content plugin" />
  <meta name="author" content="Brad Markle" />
  <meta name="description" content="In this first tutorial, we'll show you how to create and install a Joomla 2.5 plugin. In future tutorials, we'll describe what the plugin does in more detail." />
  <title>How to create a Hello World content plugin for Joomla 2.5 - InMotion Hosting</title>
  <link href="http://www.inmotionhosting.com/support/edu/joomla-25/create-plugin/hello-world" rel="canonical" />
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
  _gaq.push(['_setAccount', 'UA-1501988-19']);
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
						
		_gaq.push(['_setCustomVar', 3, 'DateMonthModified', '2016-01', 3]);
		_gaq.push(['_setCustomVar', 4, 'DateMonthPublished', '2012-06', 3]);
		_gaq.push(['_setCustomVar', 5, 'Author', 'BradM', 3]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>






		






	<link rel="shortcut icon" href="//imh01-inmotionhosting1.netdna-ssl.com/img/imh_favicon_hd.png" type="image/x-icon" />






	





	<!-- cid:12c2442bfce8eda10b0850d24f0e9c88 -->





	


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

                        _gaq.push(['_setAccount', 'UA-1501988-19']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '66.249.79.144']);

                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'chat', 'launch', 'support center']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '66.249.79.144']);
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
</div></li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_with_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='/support/edu' itemprop='url'><span itemprop='title'>Education Channels<span></a><div class='dropdown_3columns'>
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
</div></li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_with_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='/support/edu/joomla-25' itemprop='url'><span itemprop='title'>Joomla 2.5<span></a><div class='dropdown_4columns'><h2>Joomla 2.5 Education Channel</h2><div class='col_2'><h3>100 Level Classes</h3><div><a href='/support/edu/joomla-25/getting-started'>101: Installing and Getting Started in Joomla 2.5</a></div><div><a href='/support/edu/joomla-25/articles'>102: Writing Articles in Joomla 2.5</a></div><div><a href='/support/edu/joomla-25/media-manager'>103: Using the Joomla 2.5 Media Manager</a></div><div><a href='/support/edu/joomla-25/extensions'>104: Joomla 2.5 Plugins, Modules, and Components</a></div><div><a href='/support/edu/joomla-25/featured-articles'>105: Featured Articles and your Joomla 2.5 homepage</a></div><div><a href='/support/edu/joomla-25/menus'>106: Create and Configuring Joomla 2.5 Menus</a></div><div><a href='/support/edu/joomla-25/templates'>107: Installing and Changing Templates in Joomla 2.5</a></div><div><a href='/support/edu/joomla-25/users'>108: Working with Users in Joomla 2.5</a></div></div><div class='col_2'><h3>200 Level Classes</h3><div><a href='/support/edu/joomla-25/acl'>201: Joomla 2.5 Access Control Lists</a></div><div><a href='/support/edu/joomla-25/smart-search'>202: Setting up and Configuring Joomla 2.5 Smart Search</a></div><div><a href='/support/edu/joomla-25/language'>203: Working with languages in Joomla 2.5</a></div><div><a href='/support/edu/joomla-25/archived-articles'>204: Archiving Articles in Joomla 2.5</a></div><div><a href='/support/edu/joomla-25/polls'>205: Joomla 2.5 Polls</a></div><div><a href='/support/edu/joomla-25/backups'>206: Backing up your Joomla 2.5 website</a></div><div><a href='/support/edu/joomla-25/caching'>207: Joomla 2.5 Caching</a></div><div><a href='/support/edu/joomla-25/how-to'>208: Joomla 2.5 Configuration - How to questions</a></div><div><a href='/support/edu/joomla-25/version'>209: Joomla 2.5 Configuration - Which version questions</a></div><div><a href='/support/edu/joomla-25/update'>210: Keeping Joomla 2.5 up to date</a></div><div><a href='/support/edu/joomla-25/php-settings'>211: Joomla 2.5 PHP settings</a></div><div><a href='/support/edu/joomla-25/database'>212: Joomla 2.5 Advanced Database Information</a></div><div><a href='/support/edu/joomla-25/phoca-photo-gallery'>213: Setting up a Joomla 2.5 Photo Gallery using Phoca Gallery</a></div><div><a href='/support/edu/joomla-25/contact-form'>214: Joomla 2.5 Contact Form</a></div><div><a href='/support/edu/joomla-25/create-plugin'>215: Joomla 2.5 Content Plugin Development</a></div><div><a href='/support/edu/joomla-25/jce-editor'>216: Joomla 2.5 JCE Editor</a></div><div><a href='/support/edu/joomla-25/user-profile'>217: Joomla 2.5 User Profile Plugin</a></div><div><a href='/support/edu/joomla-25/slideshow'>218: Joomla 2.5 Slideshow</a></div><div><a href='/support/edu/joomla-25/create-template'>219: Joomla 2.5 Template Development Tutorial</a></div></div></div></li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_with_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='/support/edu/joomla-25/create-plugin' itemprop='url'><span itemprop='title'>215: Joomla 2.5 Content Plugin Development<span></a><div class='dropdown_3columns'><h2> Joomla 2.5 Content Plugin Development</h2><div class='col_3'><div>1. <a style='display:inline;' href='/support/edu/joomla-25/create-plugin/hello-world'>How to create a Hello World content plugin for Joomla 2.5</a></div><div>2. <a style='display:inline;' href='/support/edu/joomla-25/create-plugin/change-plugin-name'>How to change the name of a Joomla 2.5 Plugin</a></div><div>3. <a style='display:inline;' href='/support/edu/joomla-25/create-plugin/change-install-description'>How to change a Joomla 2.5 plugin installation description</a></div><div>4. <a style='display:inline;' href='/support/edu/joomla-25/create-plugin/add-parameter'>How to add a parameter to a Joomla 2.5 plugin</a></div><div>5. <a style='display:inline;' href='/support/edu/joomla-25/create-plugin/fieldsets'>Understanding Joomla 2.5 plugin parameter fields</a></div><div>6. <a style='display:inline;' href='/support/edu/joomla-25/create-plugin/where-values-stored'>Where is Joomla 2.5 plugin information stored?</a></div><div>7. <a style='display:inline;' href='/support/edu/joomla-25/create-plugin/parameter-types'>Basic parameter types in a Joomla 2.5 plugin</a></div><div>8. <a style='display:inline;' href='/support/edu/joomla-25/create-plugin/fieldset-names'>Using fieldsets to separate plugin paramenters in Joomla 2.5</a></div><div>9. <a style='display:inline;' href='/support/edu/joomla-25/create-plugin/spacers'>Using Spacers to separate plugin parameters in Joomla 2.5</a></div><div>10. <a style='display:inline;' href='/support/edu/joomla-25/create-plugin/html-and-links'>Inserting HTML and links in a Joomla 2.5 plugin settings page</a></div><div>11. <a style='display:inline;' href='/support/edu/joomla-25/create-plugin/content-plugin-events'>Joomla 2.5 content plugin events</a></div><div>12. <a style='display:inline;' href='/support/edu/joomla-25/create-plugin/variables'>Joomla 2.5 content plugin variables</a></div><div>13. <a style='display:inline;' href='/support/edu/joomla-25/create-plugin/changing-text-using-oncontentprepare'>Use onContentPrepare to change Article text in a Joomla 2.5 plugin</a></div><div>14. <a style='display:inline;' href='/support/edu/joomla-25/create-plugin/add-stylesheet'>How to add a css StyleSheet to a Joomla 2.5 content plugin</a></div><div>15. <a style='display:inline;' href='/support/edu/joomla-25/create-plugin/add-javascript'>How to add external js javascript files to a Joomla 2.5 plugin</a></div></div></div></li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_no_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><span itemprop='title'>How to create a Hello...</span></li>			</ul>
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
															How to create a Hello World content plugin for Joomla 2.5									</h1>
			
																
				
					<div style='font-size:12px; color:#aaa; margin-bottom:-10px; padding-top:5px;'>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Written by </span><a href='https://plus.google.com/102670474114655224886?rel=author'>Brad Markle</a></div>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Views:</span> <span name='page_views' id='page_views'>30,501</span></div>
							<div style='float:left; margin-right:20px;' title='Originally published: Jun 19, 2012'><span style='color:#606060;'>Published:</span> Jan 11, 2016</div>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Comments:</span> <a href='#comments'>54</a></div>
							<div style='clear:both;'></div>
						</div>
						</div>
		
	
		

	

								<p class="alert">Joomla 2.5 has reached its end of life as for 12/31/2014. Please be advised this may be a security risk to your website. You can view more information about the end of life <a href="https://docs.joomla.org/Joomla!_CMS_versions">here</a>.</p><br /><p>In this first article of our tutorial series on how to create a Joomla 2.5 Content plugin, we will give you the source code for our Hello World plugin. This plugin will print "Hello World!" at the beginning of every article. As we dive further into more tutorials, we'll provide more details on what all of this code means. For now we will show you how to create the plugin, how to install the plugin, and then what it does.</p>
<p> </p>
<h2>Step 1: Create the Plugin Files</h2>
<p>All Joomla 2.5 plugins contain a xml file. These xml files contain information such as who wrote the plugin and when, what files should be included with the plugin, and any plugin settings that can be adjusted. The first thing you should do is copy the following text and save it as <strong>helloworld.xml</strong></p>
<pre class="code_block" style="max-width: 565px;">&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;extension version="2.5" type="plugin" group="content"&gt;
        &lt;name&gt;plg_content_helloworld&lt;/name&gt;
        &lt;author&gt;Brad Markle&lt;/author&gt;
        &lt;creationDate&gt;June 18th, 2012&lt;/creationDate&gt;
        &lt;copyright&gt;InMotion Hosting&lt;/copyright&gt;
        &lt;license&gt;GNU General Public License&lt;/license&gt;
        &lt;authorEmail&gt;bradm@inmotionhosting.com&lt;/authorEmail&gt;
        &lt;authorUrl&gt;http://www.inmotionhosting.com&lt;/authorUrl&gt;
        &lt;version&gt;1.0&lt;/version&gt;
        &lt;description&gt;Simple Hello World Plugin that prints "Hello World" at the beginning of every article.&lt;/description&gt;
        &lt;files&gt;
                &lt;filename plugin="helloworld"&gt;helloworld.php&lt;/filename&gt;
                &lt;filename&gt;index.html&lt;/filename&gt;
        &lt;/files&gt;
&lt;/extension&gt;
</pre>
<p> </p>
<p>After creating the XML file, we now need to create our php file, which does all of the work. The following code should be saved to <strong>helloworld.php</strong></p>
<pre class="code_block" style="max-width: 565px;">&lt;?php

// no direct access
defined('_JEXEC') or die;

class plgContentHelloworld extends JPlugin
{
    public function onContentAfterTitle($context, &amp;$article, &amp;$params, $limitstart)
        {
                return "&lt;p&gt;Hello World!&lt;/p&gt;";
        }
}

?&gt;
</pre>
<p> </p>
<p>The last file we need to create is one named index.html. You don't need to place any code in the file, you simply need to create it.</p>
<p><strong>At this stage, you should have the following files</strong>:</p>
<ul>
<li>helloworld.xml</li>
<li>helloworld.php</li>
<li>index.html</li>
</ul>
<p><strong>Compress</strong> all of these files into a zip file named <strong>helloworld.zip</strong></p>
<p class="alert"><strong>Important!</strong> Keep in mind that Linux servers are case sensitive and <em>helloworld.php</em> is not the same as <em>HelloWorld.php</em> and so forth.</p>
<h2>Step 2: Install the Plugin</h2>
<p>Installing this plugin is like installing any other plugin. If you need any additional help, please see our article on <a href="/support/edu/joomla-25/extensions/how-to-install-a-plugin">how to install a Joomla 2.5 plugin</a>.</p>
<p> </p>
<h2>Step 3: Enable and Test your new Plugin</h2>
<p>When you initially install the plugin, it will be disabled, so be sure to <strong>enable the plugin</strong>.</p>
<p><a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/edu/joomla25/create-plugin-tutorial/hello-world-plugin-in-action.gif"><img  alt="hello-world-plugin-in-action" src="//cdn.inmotionhosting.com/support/images/stories/edu/joomla25/create-plugin-tutorial/hello-world-plugin-in-action.gif" style="float: right; margin: 0px 0px 15px 15px;" /></a>Visit any Joomla 2.5 article, and you should see "Hello World!" printed after the title, as in the following screenshot to the right.</p>
<p>Because we used the <strong>onContentAfterTitle event</strong>, our "Hello World" message is being shown <em>on the content</em> and <em>after the title has been printed</em>.</p>
<div style="clear: both;"></div>
<p class="alert"><a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/edu/joomla25/create-plugin-tutorial/hide-show-intro-text.gif"><img  alt="hide-show-intro-text" src="//cdn.inmotionhosting.com/support/images/stories/edu/joomla25/create-plugin-tutorial/hide-show-intro-text.gif" style="float: right; margin: 0px 0px 15px 15px;" /></a><strong>Please Note</strong>!<br />In order for this particular plugin to work, one more thing must be done. Because we're using the <strong>onContentAfterTitle</strong> event, we need to set the article's <strong>Show Intro Text</strong> value to <strong>Hide</strong>:<br style="clear:both" /></p> 
	
						 </div>

	






  <div class='quotebordered-first raised' style='margin:15px 0px;'>
					<div class='quotebordered raised'>
						<div style='text-align:center;font-size:18px;font-weight:bold;padding-top:15px;'>Continued Education in Course <a href='/support/edu/joomla-25/create-plugin'>215: Joomla 2.5 Content Plugin Development</a></div>
						<div style='text-align:center;color:#c52228;'>You are viewing Section 1: How to create a Hello World content plugin for Joomla 2.5</div>
						<table style='width:100%;margin:15px 0px;font-size:15px;line-height:17px;'>
							<tr>
								<td valign='top' style='width:50%;border-right:1px solid #aaa;text-align:left;padding-right:10px;'>
									
									
								</td>
								<td valign='top' style='width:50%;text-align:right;padding-left:10px;'>
									<div style='float:right;font-size:50px;color:#aaa;margin:-4px 0px 15px 15px;'>&#x203A;</div>
									Section 2: <a href='/support/edu/joomla-25/create-plugin/change-plugin-name'>How to change the name of a Joomla 2.5 Plugin</a>
								</td>
							</tr>
						</table>
                                        	<div style='clear:both;'></div>
					</div>
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
	<iframe src='//www.facebook.com/plugins/like.php?href=http://www.inmotionhosting.com/support/edu/joomla-25/create-plugin/hello-world&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=209145459223160' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:100px; height:21px;' allowTransparency='true'></iframe>
</div>

	                        
<div style='display:inline-block;'>
	<div class='g-plusone' data-size='medium' data-href='http://www.inmotionhosting.com/support/edu/joomla-25/create-plugin/hello-world'></div>
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
                
                        <div class='moduletable'>
				<h3>Joomla Community Google+ Hangout #3</h3>

				<a href='https://www.youtube.com/watch?v=PFU8plpPNwc' target='_blank'>
					<img src='/support/images/stories/edu/joomla-3/cache/brad-talking-during-joomla-hangout.png' style='margin-bottom:11px; border:1px solid #000;' class='sc_rc' />
				</a>

				<p><em>June 3rd, 2014</em></p>

				<p>Thank you <a href='https://twitter.com/RustyJoomla' target='_blank'>@RustyJoomla</a> for letting me speak on the Joomla Community Google+ Hangout!</p>

				<p><a href='https://www.youtube.com/watch?v=PFU8plpPNwc' target='_blank'>Click here to watch!</a></p>
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
		<input type="hidden" name="return" value="aW5kZXgucGhwP29wdGlvbj1jb21fY29udGVudCZjYXRpZD0yMTcmaWQ9MTQ3NyZ2aWV3PWFydGljbGUmSXRlbWlkPTEwMQ==" />
		<input type="hidden" name="40a8ea35de2ddf4acd975ed226d08439" value="1" />	</div>
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
						
		<a href='/support/edu/joomla-25/create-plugin?tsrc=rsbedu'><h3 style='border-bottom:1px solid #bbb; margin-bottom:10px; padding-bottom:2px; font-size:16px; line-height:17px;'> Joomla 2.5 Content Plugin Development</h3></a>
		<table>  <tr style='border-top:1px solid #bbb; border-bottom:1px solid #bbb; background:#eee;'>
                        <td valign='top'>1.</td>
                        <td><a href='/support/edu/joomla-25/create-plugin/hello-world?tsrc=rsbedu'>How to create a Hello World content plugin for Joomla 2.5</a></td>
                </tr>
          <tr >
                        <td valign='top'>2.</td>
                        <td><a href='/support/edu/joomla-25/create-plugin/change-plugin-name?tsrc=rsbedu'>How to change the name of a Joomla 2.5 Plugin</a></td>
                </tr>
          <tr >
                        <td valign='top'>3.</td>
                        <td><a href='/support/edu/joomla-25/create-plugin/change-install-description?tsrc=rsbedu'>How to change a Joomla 2.5 plugin installation description</a></td>
                </tr>
          <tr >
                        <td valign='top'>4.</td>
                        <td><a href='/support/edu/joomla-25/create-plugin/add-parameter?tsrc=rsbedu'>How to add a parameter to a Joomla 2.5 plugin</a></td>
                </tr>
          <tr >
                        <td valign='top'>5.</td>
                        <td><a href='/support/edu/joomla-25/create-plugin/fieldsets?tsrc=rsbedu'>Understanding Joomla 2.5 plugin parameter fields</a></td>
                </tr>
          <tr >
                        <td valign='top'>6.</td>
                        <td><a href='/support/edu/joomla-25/create-plugin/where-values-stored?tsrc=rsbedu'>Where is Joomla 2.5 plugin information stored?</a></td>
                </tr>
          <tr >
                        <td valign='top'>7.</td>
                        <td><a href='/support/edu/joomla-25/create-plugin/parameter-types?tsrc=rsbedu'>Basic parameter types in a Joomla 2.5 plugin</a></td>
                </tr>
          <tr >
                        <td valign='top'>8.</td>
                        <td><a href='/support/edu/joomla-25/create-plugin/fieldset-names?tsrc=rsbedu'>Using fieldsets to separate plugin paramenters in Joomla 2.5</a></td>
                </tr>
          <tr >
                        <td valign='top'>9.</td>
                        <td><a href='/support/edu/joomla-25/create-plugin/spacers?tsrc=rsbedu'>Using Spacers to separate plugin parameters in Joomla 2.5</a></td>
                </tr>
          <tr >
                        <td valign='top'>10.</td>
                        <td><a href='/support/edu/joomla-25/create-plugin/html-and-links?tsrc=rsbedu'>Inserting HTML and links in a Joomla 2.5 plugin settings page</a></td>
                </tr>
          <tr >
                        <td valign='top'>11.</td>
                        <td><a href='/support/edu/joomla-25/create-plugin/content-plugin-events?tsrc=rsbedu'>Joomla 2.5 content plugin events</a></td>
                </tr>
          <tr >
                        <td valign='top'>12.</td>
                        <td><a href='/support/edu/joomla-25/create-plugin/variables?tsrc=rsbedu'>Joomla 2.5 content plugin variables</a></td>
                </tr>
          <tr >
                        <td valign='top'>13.</td>
                        <td><a href='/support/edu/joomla-25/create-plugin/changing-text-using-oncontentprepare?tsrc=rsbedu'>Use onContentPrepare to change Article text in a Joomla 2.5 plugin</a></td>
                </tr>
          <tr >
                        <td valign='top'>14.</td>
                        <td><a href='/support/edu/joomla-25/create-plugin/add-stylesheet?tsrc=rsbedu'>How to add a css StyleSheet to a Joomla 2.5 content plugin</a></td>
                </tr>
          <tr >
                        <td valign='top'>15.</td>
                        <td><a href='/support/edu/joomla-25/create-plugin/add-javascript?tsrc=rsbedu'>How to add external js javascript files to a Joomla 2.5 plugin</a></td>
                </tr>
          	</table>
		
		</div>
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



		<a name='comment-8241'></a>
		<div  style='margin:0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//graph.facebook.com/vucongtinh/picture?type=normal' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/vucongtinh'>vucongtinh</a></div>
						<div></div>
						<div></div>
						<div>3 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-09-18 10:38 pm</div>
				                <div>good article. thanks so much<br />
i create one simple extension in my site,here: http://vnlance.com</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8241);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8356'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-pcF30ySt_AA/AAAAAAAAAAI/AAAAAAAAAFI/47Qu2PzKcFo/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/arti145'>arti145</a></div>
						<div></div>
						<div></div>
						<div>3 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-11-08 6:39 am</div>
				                <div>how can i create system plugin i am trying but it gives me error and website is not load plugin is on my local website please give me reply on rt87.shrivas@gmail.com</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8356);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8357'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-11-08 9:31 am</div>
				                <div>Hello arti145,<br />
Could you clarify what specific error you are getting?</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8357);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8371'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-vk1RfrYkeGE/AAAAAAAAAAI/AAAAAAAAAG8/mjZ0HUglkvw/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/hassanz'>hassanz</a></div>
						<div></div>
						<div></div>
						<div>36 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-11-13 12:09 pm</div>
				                <div>I followed the instructions, but it make no changes to the content. Please help.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8371);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8374'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-11-13 2:10 pm</div>
				                <div>Hello Hassanz,<br />
<br />
We need more information on the issue in order to help you, please.  Can you please provide a URL, version and description of how to duplicate the problem you are having?  <br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8374);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8377'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-vk1RfrYkeGE/AAAAAAAAAAI/AAAAAAAAAG8/mjZ0HUglkvw/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/hassanz'>hassanz</a></div>
						<div></div>
						<div></div>
						<div>36 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-11-15 12:50 pm</div>
				                <div>Hello Arn,<br />
  There is no url its on local server. I am using Joomla 2.5 with no other plugin. According to this guide (http://docs.joomla.org/Plugin/Events/Content) onContentAfterTitle is only available in J3.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8377);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8381'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-11-15 1:53 pm</div>
				                <div>&lt;a name=&quot;onContentAfterTitle&quot;&gt;&lt;/a&gt;<br />
&lt;div style=&quot;background-color: #FFF; padding-left: 10px;&quot;&gt;Hello hassanz,<br />
<br />
I just tested this out and it works perfectly fine in &lt;strong&gt;Joomla 2.5&lt;/strong&gt;. While the &lt;strong&gt;onContentAfterTitle&lt;/strong&gt; function is only available out of the box in &lt;strong&gt;Joomla 3.0&lt;/strong&gt;, when you're creating the &lt;strong&gt;helloworld.php&lt;/strong&gt; file mentioned in this article, you're creating that same function with this line of code:<br />
<br />
&lt;pre class=&quot;code_block&quot; style=&quot;width: 555px; white-space: normal; margin-bottom: -30px;&quot;&gt;public function onContentAfterTitle($context, &amp;$article, &amp;$params, $limitstart)&lt;/pre&gt;<br />
<br />
 Make sure that you're looking at an article after using this plugin, and also make sure that you've set the &lt;strong&gt;Show Intro Text&lt;/strong&gt; value to &lt;strong&gt;Hide&lt;/strong&gt; otherwise the article's default intro text will override the plugins text.<br />
<br />
- Jacob&lt;/div&gt;</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8381);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8382'></a>
		<div  style='margin:2px 0px 0px 160px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-vk1RfrYkeGE/AAAAAAAAAAI/AAAAAAAAAG8/mjZ0HUglkvw/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/hassanz'>hassanz</a></div>
						<div></div>
						<div></div>
						<div>36 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-11-15 2:27 pm</div>
				                <div>okay, but even if you get it to work how do you expect one to edit 100s of article and change SHOWintroTEXT to hide ? I did not find any Global option for that. <br />
</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8382);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8383'></a>
		<div  style='margin:2px 0px 0px 200px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-11-15 3:32 pm</div>
				                <div>&lt;div style=&quot;background-color: #FFF; padding-left: 10px;&quot;&gt;Hello hassanz,<br />
<br />
Thie tutorial simply covers how to create a Hello World plugin for Joomla so that you understand how Joomla plugins work.<br />
<br />
You can also simply set this option globally if you'd like as well, by going to &lt;strong&gt;Content &amp;gt; Article Manager&lt;/strong&gt; and then clicking on &lt;strong&gt;Options&lt;/strong&gt;. Then simply select &lt;strong&gt;Hide&lt;/strong&gt; beside the &lt;strong&gt;Show Intro Text&lt;/strong&gt; option:<br />
<br />
&lt;img src=&quot;http://www.inmotionhosting.com/support/images/stories/questions/joomla-global-show-intro-text.png&quot; alt=&quot;joomla global show intro text&quot;&gt;<br />
<br />
- Jacob&lt;/div&gt;</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8383);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8385'></a>
		<div  style='margin:2px 0px 0px 240px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-vk1RfrYkeGE/AAAAAAAAAAI/AAAAAAAAAG8/mjZ0HUglkvw/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/hassanz'>hassanz</a></div>
						<div></div>
						<div></div>
						<div>36 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-11-15 5:44 pm</div>
				                <div>ok make sense. I have another question. How can you prevent showing &quot;Hello World&quot; on category page (a page where multiple article's snippet exists. But instead it should appear only when user is viewing Single Article only.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8385);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8394'></a>
		<div  style='margin:2px 0px 0px 280px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-11-18 12:43 pm</div>
				                <div>Hello hassanz,<br />
<br />
You can choose, which pages to assign a module to in the Admin Dashboard:<br />
<ol class="article_list"><li><a href="http://www.inmotionhosting.com/support/edu/joomla-3/getting-started/login-dashboard" target="_blank" >Login to the Dashboard</a>.</li><br />
<li>Roll your mouse over <em>Extensions</em>, and click <strong>Module Manager</strong>.</li><br />
<li>Click the Module you want to assign to pages.</li><br />
<li>In the <em>Menu Assignment</em> field, choose <strong>Only on the pages selected</strong>, then you can <strong>Select</strong> the pages you want  to assign the plugin/module to</li> <br />
<li>Click <strong>Save</strong> when you are finished.</li></ol><br />
<br />
If you have any further questions, feel free to post them below.<br />
Thank you,<br />
<br />
-John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8394);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-25758'></a>
		<div  style='margin:2px 0px 0px 320px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/8b8de95faf1e5b855a7eaded3925461f?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/8b8de95faf1e5b855a7eaded3925461f'>Tabitha Onayngo</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-08-13 5:38 am</div>
				                <div><p>Hi.</p>
<p>Accidentally I updated updated my template.</p>
<p>I now cannot not get the site displaying as expected. It is trancated with menues misplaced downwords instead of across. How do I revert back? I had not done a backup.</p>
<p>Thanks</p>
<p><img src="data:image/png;base64,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" alt="" /></p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(25758);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-25767'></a>
		<div  style='margin:2px 0px 0px 360px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-08-13 12:38 pm</div>
				                <div>Hello Tabitha,<br />
<br />
Thank you for contacting us. Have you tried <a href="http://www.inmotionhosting.com/support/edu/joomla-25/templates/how-to-change-site-template">changing your Joomla Site Template</a>? For example change to a different template, that has not been updated.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(25767);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8396'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-vk1RfrYkeGE/AAAAAAAAAAI/AAAAAAAAAG8/mjZ0HUglkvw/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/hassanz'>hassanz</a></div>
						<div></div>
						<div></div>
						<div>36 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-11-18 12:52 pm</div>
				                <div>plugin we created above does not appear in Module Manager.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8396);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8399'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-11-18 2:53 pm</div>
				                <div>&lt;div style=&quot;background-color: #FFF; padding-left: 10px;&quot;&gt;Hello hassanz,<br />
<br />
Sorry for the confusion, as this is a &lt;strong&gt;Plugin&lt;/strong&gt; and not a &lt;strong&gt;Module&lt;/strong&gt; it would instead be found in &lt;strong&gt;Extensions &amp;gt; Plug-in Manager&lt;/strong&gt;. However this plugin does not have the option to only display on single &lt;strong&gt;Article&lt;/strong&gt; pages only.<br />
<br />
Again this plugin was not intended for actual real world use, but rather demonstrating how the Joomla plugin system works. For a more in-depth look about Joomla Plugins you'd want to check out the official &lt;a href=&quot;http://docs.joomla.org/Portal:Plugin_Development&quot; target=&quot;_blank&quot;&gt;Joomla Plugin Development&lt;/a&gt; page for help.<br />
<br />
- Jacob&lt;/div&gt;</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8399);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8400'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-vk1RfrYkeGE/AAAAAAAAAAI/AAAAAAAAAG8/mjZ0HUglkvw/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/hassanz'>hassanz</a></div>
						<div></div>
						<div></div>
						<div>36 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-11-18 2:59 pm</div>
				                <div>Hi JacobMH,<br />
  Thanks for taking time and answering my question. I understand that it was not meant for production use but I am now in middle of creating a production plugin using the basic concept of this tutorial. (That is why I am keep coming back here for help). Unfortunately, the link you gave me is useless. I know that it is official Dev docs by Joomla but it does not cover everything. If you can guide me or point me to right direction I might be able to figure it out myself. You are more responsive than any other Joomla website I have found so far. Thanks again for all the help. </div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8400);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8401'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-11-18 3:18 pm</div>
				                <div>Hi hassanz,<br />
<br />
It looks like you've posted several questions, but your current question is how you can prevent this plugin from showing on categories?<br />
<br />
We may need a screenshot for further help with understanding what exactly is happening, but I'll try to help first without any additional information.<br />
<br />
&lt;h3&gt;Within your code, determine if you're looking at an article&lt;/h3&gt;Within your code, you can ask Joomla to tell you whether you are looking at an article or a category. You can then use that information to enable / disable the plugin.<br />
<br />
The following code has been tested with Joomla 3.0 and a module, but it may work with Joomla 2.5 and a plugin. The following code will create variables that tell you what component and view are currently being used:<br />
<br />
&lt;pre class='cli'&gt;$option = JRequest::getVar('option');<br />
$view = JRequest::getVar('view');&lt;/pre&gt;<br />
<br />
&lt;h3&gt;If you're not looking at an article, return nothing so the plugin does nothing&lt;/h3&gt;When you know what option and view you're in, you should be able to use logic to return and change nothing if NOT in an article:<br />
<br />
&lt;pre class='cli'&gt;// if this page is not an article&lt;br /&gt;if($option != &quot;com_content&quot; AND $view != &quot;article&quot;)&lt;br /&gt;	return&lt;/pre&gt;<br />
	<br />
I hope that helps! Keep us updated, hopefully we should be able to get this sorted out for you.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8401);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8402'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-vk1RfrYkeGE/AAAAAAAAAAI/AAAAAAAAAG8/mjZ0HUglkvw/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/hassanz'>hassanz</a></div>
						<div></div>
						<div></div>
						<div>36 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-11-18 3:32 pm</div>
				                <div>Thank you so much BradM, this works :) Now how was I supposed to find this on Joomla Docs ?<br />
So getVar('view') says article on article page and returns category name on category page. </div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8402);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8404'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-11-18 5:41 pm</div>
				                <div>&lt;div style=&quot;background-color: #FFF; padding-left: 10px;&quot;&gt;Hello hassanz,<br />
<br />
I'm glad Brad's code that he shared with you was able to work in your case, the reason I shared the Joomla development documentation is because it sounds like you're interested in learning to develop with Joomla, and without a deeper understanding of how things work within Joomla it can be difficult to get things to work the way you'd like.<br />
<br />
The way that Brad instructed for you to do this should work, but it's actually already built-in to the &lt;strong&gt;onContentAfterTitle&lt;/strong&gt; function with the &lt;strong&gt;$context&lt;/strong&gt; variable as well if you just wanted to use that. This information was found in the Joomla Plugin Development pages for &lt;a href=&quot;http://docs.joomla.org/J2.5:Creating_a_content_plugin&quot; target=&quot;_blank&quot;&gt;creating a content plugin&lt;/a&gt;.<br />
<br />
If you re-did your &lt;strong&gt;helloworld.php&lt;/strong&gt; script to simply be this:<br />
<br />
&lt;pre class=&quot;cli&quot; style=&quot;line-height: .7;&quot;&gt;class plgContentHelloworld extends JPlugin<br />
{<br />
    public function onContentAfterTitle(&lt;strong style=&quot;color: red;&quot;&gt;$context&lt;/strong&gt;, &amp;$article, &amp;$params, $limitstart)<br />
        {<br />
                if (&lt;strong style=&quot;color: red;&quot;&gt;$context&lt;/strong&gt; == &quot;com_content.category&quot;)<br />
                {<br />
                }<br />
                else<br />
                {<br />
                return &quot;&amp;lt;p&amp;gt;Hello World!&amp;lt;/p&amp;gt;&quot;;<br />
                }<br />
        }<br />
}&lt;/pre&gt;<br />
<br />
It would have the exact same behavior, as it's checking first if the &lt;strong&gt;$context&lt;/strong&gt; variable is &lt;strong&gt;com_content.category&lt;/strong&gt; or a category page, and if it is it will return nothing. But if it doesn't detect that you're on a category page, it will go ahead and print out the &lt;strong&gt;Hello World!&lt;/strong&gt; text.<br />
<br />
Please let us know if you had any other questions.<br />
<br />
- Jacob&lt;/div&gt;</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8404);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8407'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh3.googleusercontent.com/-vk1RfrYkeGE/AAAAAAAAAAI/AAAAAAAAAG8/mjZ0HUglkvw/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/hassanz'>hassanz</a></div>
						<div></div>
						<div></div>
						<div>36 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-11-20 11:00 am</div>
				                <div>Thank You, that is some good explanation. Problem is with Joomla docs, its pretty concise rather than throwing more details. I'll keep you guys posted if I get questions. Thanks again. </div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8407);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8409'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-11-20 12:11 pm</div>
				                <div>&lt;div style=&quot;background-color: #FFF; padding-left: 10px;&quot;&gt;No problem hassanz, let us know if you run into any further snags.<br />
<br />
- Jacob&lt;/div&gt;</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8409);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-9056'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/7a9b7969788746b8d97a1e2929b411cc?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/7a9b7969788746b8d97a1e2929b411cc'>Vishit</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-03-20 7:46 am</div>
				                <div><p>how can make simple module...???</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(9056);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-9061'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-03-20 8:31 am</div>
				                <div>Hello Vishit,<br />
<br />
We do not have an article on makring a simple module, but there is a &lt;a href=&quot;http://docs.joomla.org/Creating_a_simple_module&quot;&gt;guide on creating a simple module&lt;/a&gt; in Joomla's documentation.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(9061);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-9241'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/759f6c8db7f1fbf708c3fd583eb2dd23?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/759f6c8db7f1fbf708c3fd583eb2dd23'>Sang</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-03-27 12:23 am</div>
				                <div><p>Hi, thanks for the sample plugin.</p>
<p>But i have a problem : i installed and actived plugin successfull but not display anything, i try to replace "return" to "echo" so "Hello World!" display on top of title . Please help! Thanks.</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(9241);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-9247'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-03-27 8:01 am</div>
				                <div>We have tested this code to ensure that it does work on Joomla 2.5.  Be sure that you are running Joomla 2.5 and not another version as well as check the error logs on the server for any possible errors.<br />
<br />
If you're still having trouble, you may send an email to docs@inmotionhosting.com with your Joomla credentials and we will be happy to take a look for you.  Be sure to reply to this comment if you send us an email.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(9247);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-9257'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/759f6c8db7f1fbf708c3fd583eb2dd23?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/759f6c8db7f1fbf708c3fd583eb2dd23'>Sang</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-03-27 12:37 pm</div>
				                <div><p>I know why, because i using joomla 2.5 but "onContentAfterTitle" function only avalible on joomla 3.x.</p>
<p>I just start using joomla, i want to learn how to develop a plugin and found this site.. Thanks for sharing!</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(9257);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-9259'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-03-27 12:53 pm</div>
				                <div>&lt;div style=&quot;background-color: #FFF; padding-left: 10px;&quot;&gt;Hello Sang,<br />
<br />
You're right that the &lt;strong&gt;onContentAfterTitle&lt;/strong&gt; function does not exist in Joomla 2.5 by default. If you're following the steps of this guide, you actually are creating that function for Joomla 2.5 to use.<br />
<br />
You might want to take a look at my earlier comment about &lt;a href=&quot;#onContentAfterTitle&quot;&gt;creating the onContentAfterTitle function&lt;/a&gt;, and the next few comments after that, as they explain a bit more than the guide itself about this.<br />
<br />
Let us know if you had any other questions!<br />
<br />
- Jacob&lt;/div&gt;</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(9259);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-10945'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/efcd7091d37f960d65f77b72fb6ee1c2?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/efcd7091d37f960d65f77b72fb6ee1c2'>Shubham</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-05-28 7:05 am</div>
				                <div><p>I am using joomla 3.1 but still Hello world not showing up</p>
<p>I &nbsp;followed all the steps&nbsp;</p>
<p>Please Help</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(10945);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-10949'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-05-28 7:59 am</div>
				                <div>Be sure that you have placed the entire code mentioned in the above article into the appropriate files.  Once all of this has been checked over, ensure that your plugin is active, as well as the intro text is disabled as described within the article.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(10949);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13456'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/4c105a5c1332334d509bbc18f0fbdf1c?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/4c105a5c1332334d509bbc18f0fbdf1c'>Shailendra Mahanande</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-30 6:20 am</div>
				                <div><p>At the time of plugin active i got this message so how can I over come it ?</p>
<p>&nbsp;</p>
<p>The plugin generated 1 characters of unexpected output during activation. If you notice &ldquo;headers already sent&rdquo; messages, problems with syndication feeds or other issues, try deactivating or removing this plugin.</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13456);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13464'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-30 9:12 am</div>
				                <div>Could you clarify what other plugins you have currently active on your Joomla site?</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13464);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13466'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/4c105a5c1332334d509bbc18f0fbdf1c?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/4c105a5c1332334d509bbc18f0fbdf1c'>Shailendra Mahanande</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-30 9:28 am</div>
				                <div><p>For the wordpress site&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13466);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13470'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-30 9:49 am</div>
				                <div>Hello Shailendra,<br />
<br />
Thank you for your question. The <strong>headers already sent</strong> message is a common Wordpress error the Wordpress codex explains is "<em>usually because there are spaces, new lines, or other garbage before an opening <?php tag or after a closing ?> tag, typically in wp-config.php.</em>"<br />
<br />
See the full cause and solution to the <a href="http://codex.wordpress.org/Answers-Troubleshooting#Headers_already_sent" target="_blank" >headers already sent</a> problem in the Official WordPress documentation.<br />
<br />
If you have any further questions, feel free to post them below.<br />
Thank you,<br />
<br />
-John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13470);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13469'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-30 9:44 am</div>
				                <div>Hi Shailendra,<br />
<br />
Generally you get a &lt;strong&gt;headers already sent&lt;/strong&gt; error when there is a space at the end of a php file.<br />
<br />
If the error tells you the exact file in question, look for the &lt;strong&gt;?&amp;gt;&lt;/strong&gt; at the end of the php file and make sure there is not a space after it.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13469);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-14371'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/7a84f4c16abef864b726f6c7d370bf19?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/7a84f4c16abef864b726f6c7d370bf19'>DaveD</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-08-27 3:43 am</div>
				                <div><p>I couldn't get this working either. (Joomla 3.3.3.) The plugin installed fine, I activated it but get nothing. Also endure that "show intro text" was set to hide on an article. Not sure what else to check - any ideas?</p>
<p>Contents of the XML/PHP files below.</p>
<p>&lt;?php// no direct accessdefined('_JEXEC') or die;class plgContentHelloworld extends JPlugin{&nbsp;&nbsp;&nbsp; public function onContentAfterTitle($context, &amp;$article, &amp;$params, $limitstart)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; return "&lt;p&gt;Hello World!&lt;/p&gt;";&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }}?&gt;</p>
<p>&lt;?xml version="1.0" encoding="utf-8"?&gt;&lt;extension version="3.3" type="plugin" group="content"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;name&gt;plg_content_helloworld&lt;/name&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;version&gt;1.0&lt;/version&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;description&gt;Simple Hello World Plugin that prints "Hello World" at the beginning of every article.&lt;/description&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;files&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;filename plugin="helloworld"&gt;helloworld.php&lt;/filename&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;filename&gt;index.html&lt;/filename&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/files&gt;&lt;/extension&gt;</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(14371);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-14382'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-08-27 10:50 am</div>
				                <div>Hello DaveD,<br />
<br />
Are you getting any error message? Have you checked the error log in the files to see what type of error is occurring? Once you discover it, please reply with the full error message so we can take a look for you.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(14382);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-23465'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/82b0f120a0f6ff2fc75126dfa2eee3c8?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/82b0f120a0f6ff2fc75126dfa2eee3c8'>Alex</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-05-17 3:14 pm</div>
				                <div><p>I have created and installed plugin. But it does not work. I don't see Hello world. (</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(23465);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-23512'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-05-18 3:53 pm</div>
				                <div>Alex, did you get any error messages? <br />
<br />
</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(23512);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-23537'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/82b0f120a0f6ff2fc75126dfa2eee3c8?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/82b0f120a0f6ff2fc75126dfa2eee3c8'>Alex</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-05-19 7:04 am</div>
				                <div><p>I don't see any error messages. I've just torn on all of error messages on hosting.</p>
<p>My web-site is here http://j.novyna.info</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(23537);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-23570'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-05-20 3:17 pm</div>
				                <div>Alex,<br />
<br />
We'd need to see more information on the error in order to figure out what's happening.  Can you provide the specific code from the file?  And also the correct URL.  The URL you provided (http://j.novyna.info) jumps to the Joomla page.   <br />
<br />
Please provide this information and we can look into the issue further.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(23570);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-25484'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/fce225b4a9607d18cb9240d9ead2c38a?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/fce225b4a9607d18cb9240d9ead2c38a'>ravi</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-08-05 5:50 am</div>
				                <div><p>please help me</p>
<p><strong style="font-family: 'Times New Roman'; font-size: medium;">Fatal error</strong><span style="font-family: 'Times New Roman'; font-size: medium;">: Cannot redeclare class plgContentHelloworld in&nbsp;</span><strong style="font-family: 'Times New Roman'; font-size: medium;">C:\xampp\htdocs\f33\plugins\content\helloworld\helloworld.php</strong><span style="font-family: 'Times New Roman'; font-size: medium;">&nbsp;on line&nbsp;</span><strong style="font-family: 'Times New Roman'; font-size: medium;">12</strong></p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(25484);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-25510'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-08-05 8:09 pm</div>
				                <div>Hello Ravi,<br />
<br />
Sorry for the error that you're seeing.  We unfortunately do not support coding issues like this one.  Also, this is a non-server related issue (since you're using Xampp).  You would be better supporter looking for the Xampp community.   We do try to point you in the right direction as well.  Check out this <a href="http://stackoverflow.com/questions/27393457/meaning-of-error-in-codeigniter-fatal-error-cannot-redeclare-class-my-connec" rel="nofollow" target="_blank">postg</a> for further information.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(25510);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-25662'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/de495467f02126cbcbbf954a0fa326fa?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/de495467f02126cbcbbf954a0fa326fa'>Mathesh</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-08-11 7:45 am</div>
				                <div><p>helloworld not display in my home page,</p>
<p>i was tried more ,</p>
<p>please provide help...</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(25662);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-25686'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-08-12 12:09 am</div>
				                <div>Hello Mathesh,<br />
<br />
Did you follow the directions exactly? Are you getting any errors on your home page when you try to call the helloworld plugin? What version of Joomla are you using?<br />
<br />
Best Regards,<br />
TJ Edens</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(25686);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-25760'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/de495467f02126cbcbbf954a0fa326fa?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/de495467f02126cbcbbf954a0fa326fa'>Mathesh</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-08-13 8:08 am</div>
				                <div><p>hi TJEdens</p>
<p>no error displaying in home page, joomla 3.4</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(25760);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-25768'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-08-13 12:44 pm</div>
				                <div>Hello Mathesh,<br />
<br />
Thank you for contacting us. Since the above guide is written for Joomla 2.5, and some of the "<em>event names</em>" have changed.<br />
<br />
I recommend following the official Joomla 3 guide on <a href="https://docs.joomla.org/J3.x:Creating_a_Plugin_for_Joomla" target="_blank">Creating a Plugin for Joomla</a>. It includes updated information for Joomla 3.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(25768);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-25779'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/de495467f02126cbcbbf954a0fa326fa?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/de495467f02126cbcbbf954a0fa326fa'>Mathesh</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-08-14 2:56 am</div>
				                <div><p>Hello john,</p>
<p>thanks for your reply,</p>
<p>in the administrator page only displays that helloworld ,</p>
<p>but in the website page not displaying ,</p>
<p>i changed settings show intro text-&gt;hide, but no use , article only displaying john....</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(25779);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-25785'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-08-14 8:59 am</div>
				                <div>Hello Mathesh,<br />
<br />
Sorry about the problems with the plugin.  We can't troubleshoot without knowing exactly what you've done in your code.  Can you please provide us more information about the exact steps you have done so that we might try to duplicate the problem you're having?  Can you provide the URL or more information on your account (if you're hosting with InMotion Hosting)?<br />
<br />
Provide us more specific information on the problem and we can try to look into it further.<br />
<br />
If you have any further questions or comments, please let us know.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(25785);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-26063'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/de495467f02126cbcbbf954a0fa326fa?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/de495467f02126cbcbbf954a0fa326fa'>Mathesh</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-08-25 12:44 am</div>
				                <div><p>Hi Arn,</p>
<p>Thanks for your reply,</p>
<p>sorry for delay conversation</p>
<p>I installed the helloworld plugin, after i enabled in administrator page, but it not display in the site , after the title, this was the problem,</p>
<p>i followed the all steps in tutorial part</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(26063);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-26097'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-08-25 9:17 pm</div>
				                <div>Hello Mathesh,<br />
<br />
What version of Joomla are you trying to make this plugin on? Keep in mind this article is for 2.5 and 3.x is almost completely different. <br />
<br />
Best Regards,<br />
TJ Edens</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(26097);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-26216'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/de495467f02126cbcbbf954a0fa326fa?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/de495467f02126cbcbbf954a0fa326fa'>Mathesh</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-08-31 7:58 am</div>
				                <div><p>hi ,</p>
<p>joomla version is 3.4</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(26216);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-26229'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-08-31 1:33 pm</div>
				                <div>Hello Mathesh,<br />
<br />
This article is not for your version. I am not sure how it works for yours as we do not have a current article for it. You may want to consult the <a href="https://docs.joomla.org/Creating_a_simple_module">official Joomla documentation</a> and see if that helps.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(26229);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-28740'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/b719b5a7ad82ba0e7fb09a5599483e86?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/b719b5a7ad82ba0e7fb09a5599483e86'>Mjb</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-11-25 9:07 am</div>
				                <div><p>I am having the same problem and while trying to find an answer I came to this post and also found a lead http://stackoverflow.com/questions/26330012/joomla-plugin-event-not-firing</p>
<p>I havent tested it yet, but seems the problem lies in language file</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(28740);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-28764'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/b719b5a7ad82ba0e7fb09a5599483e86?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/b719b5a7ad82ba0e7fb09a5599483e86'>Mjb</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-11-25 10:20 pm</div>
				                <div><p>Ok,</p>
<p>I got mine to work and figure out somethings that were not well explained in the joomla documentation it self.</p>
<p>In my case the problem did lied in the plugin name, so I will write here what I expeienced and my undertanding of the beast.</p>
<p>The Joomla docs show examples of plugin names like</p>
<p>User - Hello World</p>
<p>Content - Hello World</p>
<p>The problem in my case was that I could not name the plugin like that, instead I had to name it plg_hello_world and then if I wanted to show a pretty name like the above I needed to create a language constant with the pretty name as value and load my plugin.</p>
<p>I am guessing the reason for the plugin not working if you don't name it like plg_group_name might be because somewhere in the framework something like(put on a simplistic way)</p>
<p><code><span style="color: #000000;"><span style="color: #0000bb;">$plgname = explode</span></span></code>("_","plg_group_name");</p>
<p>foreach( <code><span style="color: #000000;"><span style="color: #0000bb;">$plgname as $partname){</span></span></code></p>
<p><code><span style="color: #000000;"><span style="color: #0000bb;">echo ucfirst</span><span style="color: #007700;">(</span></span></code><code><span style="color: #000000;"><span style="color: #0000bb;">$partname);</span></span></code></p>
<p>}</p>
<p>This would echo the plugin name just like the class plgGroupName.</p>
<p>While if we name our plugin Content - Hello World and the framework try to make sense of that, it will never match the class pattern.</p>
<p>So in my case and in my opnion it is very importat we follow the correct name structure</p>
<p>Please feel free to correct me if I am saying something worng here.</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(28764);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
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
			<h3><span class='comment-count'>54</span> Questions & <span class='comment-text'>Comments</span></h3>
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






<!-- Google Code for Joomla Support Center Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1071887445;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "NMXiCKet5AIQ1eiO_wM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1071887445/?label=NMXiCKet5AIQ1eiO_wM&amp;guid=ON&amp;script=0"/>
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

                        _gaq.push(['_setAccount', 'UA-1501988-19']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '66.249.79.144']);

                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'chat', 'launch', 'support center']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '66.249.79.144']);
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
        	        id:'1477',
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