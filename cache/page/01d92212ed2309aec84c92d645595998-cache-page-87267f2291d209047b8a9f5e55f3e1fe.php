<?php die("Access Denied"); ?>#x#a:3:{s:4:"body";s:122761:" 
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

		  <base href="http://www.inmotionhosting.com/support/edu/joomla-3/news/config-changes" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="last-modified" content="2016-05-02T16:50:09-07:00" />
  <meta name="author" content="Brad Markle" />
  <meta name="description" content="In this article we take a look back at the configuration.php variables that have come and gone throughout different versions of Joomla." />
  <title>Joomla configuration.php file changes over time - InMotion Hosting</title>
  <link href="http://www.inmotionhosting.com/support/edu/joomla-3/news/config-changes" rel="canonical" />
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
						
		_gaq.push(['_setCustomVar', 3, 'DateMonthModified', '2016-05', 3]);
		_gaq.push(['_setCustomVar', 4, 'DateMonthPublished', '2013-12', 3]);
		_gaq.push(['_setCustomVar', 5, 'Author', 'BradM', 3]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>






		






	<link rel="shortcut icon" href="//imh01-inmotionhosting1.netdna-ssl.com/img/imh_favicon_hd.png" type="image/x-icon" />






	





	<!-- cid:f8ac5f930e0fe9f76dbd6324d038fb82 -->





	


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
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '183.182.114.0']);

                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'chat', 'launch', 'support center']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '183.182.114.0']);
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
</div></li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_with_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='/support/edu/joomla-3' itemprop='url'><span itemprop='title'>Joomla 3<span></a><div class='dropdown_4columns'><h2>Joomla 3 Education Channel</h2><div class='col_2'><h3>100 Level Classes</h3><div><a href='/support/edu/joomla-3/news'>100: Joomla 3 - The Latest News</a></div><div><a href='/support/edu/joomla-3/getting-started'>101: Getting started with Joomla 3</a></div><div><a href='/support/edu/joomla-3/writing-articles'>102: Writing Articles in Joomla 3</a></div><div><a href='/support/edu/joomla-3/article-options'>103: Configuring Article Options in Joomla 3</a></div><div><a href='/support/edu/joomla-3/extension'>104: Using Extensions in Joomla 3</a></div><div><a href='/support/edu/joomla-3/menu'>105: Working with Menus in Joomla 3</a></div><div><a href='/support/edu/joomla-3/registered-users'>106: Working with Users in Joomla 3</a></div><div><a href='/support/edu/joomla-3/joomla-blog'>107: How to Blog using Joomla 3</a></div><div><a href='/support/edu/joomla-3/protostar'>108: Configuring the Protostar Template in Joomla 3</a></div></div><div class='col_2'><h3>200 Level Classes</h3><div><a href='/support/edu/joomla-3/templates'>200: Joomla 3 Templates</a></div><div><a href='/support/edu/joomla-3/seo-settings'>201: Joomla 3 SEO Settings</a></div><div><a href='/support/edu/joomla-3/metadata'>202: Joomla 3 Metadata Settings</a></div><div><a href='/support/edu/joomla-3/using-bootstrap'>203: Using bootstrap in Joomla 3</a></div><div><a href='/support/edu/joomla-3/site-settings'>204: How to modify your Site Settings in Joomla 3</a></div><div><a href='/support/edu/joomla-3/system-settings'>205: Working with System Settings in Joomla 3</a></div><div><a href='/support/edu/joomla-3/server-settings'>206: Configuring Server Settings in Joomla 3</a></div><div><a href='/support/edu/joomla-3/languages'>207: Working with Languages in Joomla 3</a></div><div><a href='/support/edu/joomla-3/create-template'>208: Building a Basic Joomla 3 Template with Bootstrap</a></div><div><a href='/support/edu/joomla-3/banners'>209: Working with Banners in Joomla 3</a></div><div><a href='/support/edu/joomla-3/contacts-component'>210: Joomla 3 Contacts Component Tutorial</a></div><div><a href='/support/edu/joomla-3/jevents-calendar'>211: Joomla 3 Calendar with JEvents</a></div><div><a href='/support/edu/joomla-3/admin-tools'>212: Joomla 3 Admin Tools Core Component</a></div></div></div></li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_with_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='/support/edu/joomla-3/news' itemprop='url'><span itemprop='title'>100: Joomla 3 - The Latest News<span></a><div class='dropdown_3columns'><h2> Joomla 3 - The Latest News</h2><div class='col_3'><div>1. <a style='display:inline;' href='/support/edu/joomla-3/news/should-i-upgrade-to-joomla-3-1'>Should I upgrade to Joomla 3.1?</a></div><div>2. <a style='display:inline;' href='/support/edu/joomla-3/news/alpha-1-released'>Joomla 3.0 Alpha-1 has been released!</a></div><div>3. <a style='display:inline;' href='/support/edu/joomla-3/news/alpha-1-appearance'>What does Joomla 3.0 Alpha-1 look like?</a></div><div>4. <a style='display:inline;' href='/support/edu/joomla-3/news/mootools-support'>Joomla 3.0 and Mootools</a></div><div>5. <a style='display:inline;' href='/support/edu/joomla-3/news/bootstrap-is-new'>Joomla 3.0 and Bootstrap</a></div><div>6. <a style='display:inline;' href='/support/edu/joomla-3/news/converting-templates-to-3'>Initial thoughts on converting existing templates to Joomla 3.0</a></div><div>7. <a style='display:inline;' href='/support/edu/joomla-3/news/should-i-upgrade'>Should I upgrade Joomla 2.5 to Joomla 3.0?</a></div><div>8. <a style='display:inline;' href='/support/edu/joomla-3/news/ux-changes'>Joomla 3.2 User Experience Improvements</a></div><div>9. <a style='display:inline;' href='/support/edu/joomla-3/news/library-versions'>Which version of jQuery comes with Joomla 3?</a></div><div>10. <a style='display:inline;' href='/support/edu/joomla-3/news/config-changes'>Joomla configuration.php file changes over time</a></div></div></div></li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_no_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><span itemprop='title'>Joomla configuration.php file chan...</span></li>			</ul>
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
															Joomla configuration.php file changes over time									</h1>
			
																
				
					<div style='font-size:12px; color:#aaa; margin-bottom:-10px; padding-top:5px;'>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Written by </span><a href='https://plus.google.com/102670474114655224886?rel=author'>Brad Markle</a></div>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Views:</span> <span name='page_views' id='page_views'>6,608</span></div>
							<div style='float:left; margin-right:20px;' title='Originally published: Dec 30, 2013'><span style='color:#606060;'>Published:</span> May 2, 2016</div>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Comments:</span> <a href='#comments'>1</a></div>
							<div style='clear:both;'></div>
						</div>
						</div>
		
	
		

	

								<div class="in_this_tutorial">
  <h2>In this tutorial:</h2>
  <button type="button" class="btn btn-primary" onclick="trackAnchorClickSC('config-files');">Sample Config Files</button>
  <button type="button" class="btn btn-primary" onclick="trackAnchorClickSC('changelog');">Changelog</button>
</div>

<p>Joomla's configuration.php file has changed quite a bit over time. Some of the changes can cause compatibility concerns with upgrades to newer versions. I came across a change in Joomla 3.2 that has caused <a href='http://forum.joomla.org/viewtopic.php?f=706&t=825772' target='_blank'>some problems with email</a>.</p>

<p>To help others troubleshoot problems <em>possibly</em> caused by configuration.php conflicts, I <a href="/support/edu/joomla-3/getting-started/install-joomla-3">installed</a> every major version of Joomla and examined the configuration file. Here, you can see <a href='#config-files'>example configuration.php files</a> per version of Joomla, and you can also reference <a href='#changelog'>a table that shows every variable included through the years</a>.</p>

<script type='text/javascript'>
  function toggle_block(myid)
  {
    var joomla_array = ["j1","j150","j16","j17","j25","j30","j31","j32"];
    for(var i = 0; i < joomla_array.length; i++)
    {
      thisId = joomla_array[i];
      if(thisId == myid)
        document.getElementById(thisId).style.display = 'inherit';
      else
        document.getElementById(thisId).style.display = 'none';
    }
  }
</script>
  
  <a name='config-files'></a>
  <h2>Sample Joomla Configuration Files</h2>
  
  <p>Click the buttons below to see the configuration.php file for the corresponding Joomla version. If you would like to see all of the variables listed in a table, <a href='#changelog'>click here</a>.</p>

<button onclick="toggle_block('j1');" class='btn btn-warning' style='box-shadow: 0 3px 0 #ad6704;'>Joomla Version:</button>
  <button onclick="toggle_block('j1');" class='btn btn-primary'>1.0.15</button>
<button onclick="toggle_block('j150');" class='btn btn-primary'>1.5</button>
<button onclick="toggle_block('j16');" class='btn btn-primary'>1.6</button>
<button onclick="toggle_block('j17');" class='btn btn-primary'>1.7</button>
<button onclick="toggle_block('j25');" class='btn btn-primary'>2.5</button>
<button onclick="toggle_block('j30');" class='btn btn-primary'>3.0</button>
<button onclick="toggle_block('j31');" class='btn btn-primary'>3.1</button>
<button onclick="toggle_block('j32');" class='btn btn-primary'>3.2</button>

<div style='clear:both;'></div>

<!-- joomla 1.0 -->
<div name='j1' id='j1'>
<h3>Joomla 1.0.15</h3>
<pre style='white-space:nowrap; overflow:scroll; max-height:400px;' >
&lt;?php<br />
if(!defined('RG_EMULATION')) { define( 'RG_EMULATION', 0 ); }<br />
$mosConfig_offline = '0';<br />
$mosConfig_host = 'localhost';<br />
$mosConfig_user = 'db_user';<br />
$mosConfig_password = 'db_pass';<br />
$mosConfig_db = 'db';<br />
$mosConfig_dbprefix = 'jos_';<br />
$mosConfig_lang = 'english';<br />
$mosConfig_absolute_path = '/home/userna5/public_html';<br />
$mosConfig_live_site = 'http://example.com';<br />
$mosConfig_sitename = 'Site Name Goes Here';<br />
$mosConfig_shownoauth = '0';<br />
$mosConfig_useractivation = '1';<br />
$mosConfig_uniquemail = '1';<br />
$mosConfig_offline_message = 'This site is down for maintenance.<br /> Please check back again soon.';<br />
$mosConfig_error_message = 'This site is temporarily unavailable.<br /> Please notify the System Administrator';<br />
$mosConfig_debug = '0';<br />
$mosConfig_lifetime = '900';<br />
$mosConfig_session_life_admin = '1800';<br />
$mosConfig_session_type = '0';<br />
$mosConfig_MetaDesc = 'Joomla - the dynamic portal engine and content management system';<br />
$mosConfig_MetaKeys = 'Joomla, joomla';<br />
$mosConfig_MetaTitle = '1';<br />
$mosConfig_MetaAuthor = '1';<br />
$mosConfig_locale = 'en_GB';<br />
$mosConfig_offset = '0';<br />
$mosConfig_offset_user = '0';<br />
$mosConfig_hideAuthor = '0';<br />
$mosConfig_hideCreateDate = '0';<br />
$mosConfig_hideModifyDate = '0';<br />
$mosConfig_hidePdf = '0';<br />
$mosConfig_hidePrint = '0';<br />
$mosConfig_hideEmail = '0';<br />
$mosConfig_enable_log_items = '0';<br />
$mosConfig_enable_log_searches = '0';<br />
$mosConfig_enable_stats = '0';<br />
$mosConfig_sef = '0';<br />
$mosConfig_vote = '0';<br />
$mosConfig_gzip = '0';<br />
$mosConfig_multipage_toc = '1';<br />
$mosConfig_allowUserRegistration = '1';<br />
$mosConfig_link_titles = '0';<br />
$mosConfig_error_reporting = -1;<br />
$mosConfig_list_limit = '30';<br />
$mosConfig_caching = '0';<br />
$mosConfig_cachepath = '/home/userna5/public_html/cache';<br />
$mosConfig_cachetime = '900';<br />
$mosConfig_mailer = 'mail';<br />
$mosConfig_mailfrom = 'user@domain.com';<br />
$mosConfig_fromname = 'Site Name Goes Here';<br />
$mosConfig_sendmail = '/usr/sbin/sendmail';<br />
$mosConfig_smtpauth = '0';<br />
$mosConfig_smtpuser = '';<br />
$mosConfig_smtppass = '';<br />
$mosConfig_smtphost = 'localhost';<br />
$mosConfig_back_button = '1';<br />
$mosConfig_item_navigation = '1';<br />
$mosConfig_secret = 's3ZJL6akojubS7el';<br />
$mosConfig_pagetitles = '1';<br />
$mosConfig_readmore = '1';<br />
$mosConfig_hits = '1';<br />
$mosConfig_icons = '1';<br />
$mosConfig_favicon = 'favicon.ico';<br />
$mosConfig_fileperms = '';<br />
$mosConfig_dirperms = '';<br />
$mosConfig_helpurl = 'http://help.joomla.org';<br />
$mosConfig_multilingual_support = '0';<br />
$mosConfig_editor = 'tinymce';<br />
$mosConfig_admin_expired = '1';<br />
$mosConfig_frontend_login = '1';<br />
$mosConfig_frontend_userparams = '1';<br />
$mosConfig_itemid_compat = '0';<br />
setlocale (LC_TIME, $mosConfig_locale);<br />
?&gt;
</pre>
</div>






<!-- joomla 1.5 -->
<div name='j150' id='j150' style='display:none;'>
<h3>Joomla 1.5.0</h3>
<pre style='white-space:nowrap; overflow:scroll; max-height:400px;' >
&lt;?php<br />
class JConfig {<br />
/* Site Settings */<br />
var $offline = '0';<br />
var $offline_message = 'This site is down for maintenance.&lt;br /&gt; Please check back again soon.';<br />
var $sitename = 'Site Name Goes Here';<br />
var $editor = 'tinymce';<br />
var $list_limit = '20';<br />
var $legacy = '0';<br />
/* Debug Settings */<br />
var $debug = '0';<br />
var $debug_lang = '0';<br />
/* Database Settings */<br />
var $dbtype = 'mysql';<br />
var $host = 'localhost';<br />
var $user = 'db_user';<br />
var $password = 'db_pass';<br />
var $db = 'db_name';<br />
var $dbprefix = 'jos_';<br />
/* Server Settings */<br />
var $secret = 'gP5UyskyATHIBmzF';<br />
var $gzip = '0';<br />
var $error_reporting = '-1';<br />
var $helpurl = 'http://help.joomla.org';<br />
var $xmlrpc_server = '1';<br />
var $ftp_host = '127.0.0.1';<br />
var $ftp_port = '21';<br />
var $ftp_user = '';<br />
var $ftp_pass = '';<br />
var $ftp_root = '';<br />
var $ftp_enable = '0';<br />
/* Locale Settings */<br />
var $offset = '0';<br />
var $offset_user = '0';<br />
/* Mail Settings */<br />
var $mailer = 'mail';<br />
var $mailfrom = 'user@domain.com';<br />
var $fromname = 'Site Name Goes Here';<br />
var $sendmail = '/usr/sbin/sendmail';<br />
var $smtpauth = '0';<br />
var $smtpuser = '';<br />
var $smtppass = '';<br />
var $smtphost = 'localhost';<br />
/* Cache Settings */<br />
var $caching = '0';<br />
var $cachetime = '15';<br />
var $cache_handler = 'file';<br />
/* Meta Settings */<br />
var $MetaDesc = 'Joomla! - the dynamic portal engine and content management system';<br />
var $MetaKeys = 'joomla, Joomla';<br />
var $MetaTitle = '1';<br />
var $MetaAuthor = '1';<br />
/* SEO Settings */<br />
var $sef           = '0';<br />
var $sef_rewrite   = '0';<br />
var $sef_suffix    = '0';<br />
/* Feed Settings */<br />
var $feed_limit   = 10;<br />
var $log_path = '/home/userna5/public_html/logs';<br />
var $tmp_path = '/home/userna5/public_html/tmp';<br />
/* Session Setting */<br />
var $lifetime = '15';<br />
var $session_handler = 'database';<br />
}<br />
?&gt;
</pre>
</div>
  
  
  
  
  
<div name='j16' id='j16' style='display:none;'>
<h3>Joomla 1.6.0</h3>
<pre style='white-space:nowrap; overflow:scroll; max-height:400px;'>
&lt;?php<br />
class JConfig {<br />
  public $offline = '0';<br />
  public $offline_message = 'This site is down for maintenance.&lt;br /&gt; Please check back again soon.';<br />
  public $sitename = 'Site Name Goes Here';<br />
  public $editor = 'tinymce';<br />
  public $list_limit = '20';<br />
  public $access = '1';<br />
  public $debug = '0';<br />
  public $debug_lang = '0';<br />
  public $dbtype = 'mysqli';<br />
  public $host = 'localhost';<br />
  public $user = 'db_user';<br />
  public $password = 'db_pass';<br />
  public $db = 'db_name';<br />
  public $dbprefix = 'cnom6_';<br />
  public $live_site = '';<br />
  public $secret = 'HeVfojxfQFH5WNje';<br />
  public $gzip = '0';<br />
  public $error_reporting = '-1';<br />
  public $helpurl = 'http://help.joomla.org/proxy/index.php?option=com_help&amp;keyref=Help{major}{minor}:{keyref}';<br />
  public $ftp_host = '127.0.0.1';<br />
  public $ftp_port = '21';<br />
  public $ftp_user = '';<br />
  public $ftp_pass = '';<br />
  public $ftp_root = '';<br />
  public $ftp_enable = '0';<br />
  public $offset = 'UTC';<br />
  public $offset_user = 'UTC';<br />
  public $mailer = 'mail';<br />
  public $mailfrom = 'user@domain.com';<br />
  public $fromname = 'Site Name Goes Here';<br />
  public $sendmail = '/usr/sbin/sendmail';<br />
  public $smtpauth = '0';<br />
  public $smtpuser = '';<br />
  public $smtppass = '';<br />
  public $smtphost = 'localhost';<br />
  public $smtpsecure = 'none';<br />
  public $smtpport = '25';<br />
  public $caching = '0';<br />
  public $cache_handler = 'file';<br />
  public $cachetime = '15';<br />
  public $MetaDesc = '';<br />
  public $MetaKeys = '';<br />
  public $MetaTitle = '1';<br />
  public $MetaAuthor = '1';<br />
  public $sef = '1';<br />
  public $sef_rewrite = '0';<br />
  public $sef_suffix = '0';<br />
  public $unicodeslugs = '0';<br />
  public $feed_limit = '10';<br />
  public $log_path = '/home/userna5/public_html/logs';<br />
  public $tmp_path = '/home/userna5/public_html/tmp';<br />
  public $lifetime = '15';<br />
  public $session_handler = 'database';<br />
}
</pre>
</div>
  
  
  
  

<div name='j17' id='j17' style='display:none;'>
<h3>Joomla 1.7.0</h3>
<pre style='white-space:nowrap; overflow:scroll; max-height:400px;'>
&lt;?php<br />
class JConfig {<br />
  public $offline = '0';<br />
  public $offline_message = 'This site is down for maintenance.&lt;br /&gt; Please check back again soon.';<br />
  public $sitename = 'Site Name Goes Here';<br />
  public $editor = 'tinymce';<br />
  public $list_limit = '20';<br />
  public $access = '1';<br />
  public $debug = '0';<br />
  public $debug_lang = '0';<br />
  public $dbtype = 'mysqli';<br />
  public $host = 'localhost';<br />
  public $user = 'db_user';<br />
  public $password = 'db_pass';<br />
  public $db = 'db_name';<br />
  public $dbprefix = 'cnom6_';<br />
  public $live_site = '';<br />
  public $secret = 'aj9IlvptjH3twgdh';<br />
  public $gzip = '0';<br />
  public $error_reporting = '-1';<br />
  public $helpurl = 'http://help.joomla.org/proxy/index.php?option=com_help&amp;keyref=Help{major}{minor}:{keyref}';<br />
  public $ftp_host = '127.0.0.1';<br />
  public $ftp_port = '21';<br />
  public $ftp_user = '';<br />
  public $ftp_pass = '';<br />
  public $ftp_root = '';<br />
  public $ftp_enable = '0';<br />
  public $offset = 'UTC';<br />
  public $offset_user = 'UTC';<br />
  public $mailer = 'mail';<br />
  public $mailfrom = 'user@domain.com';<br />
  public $fromname = 'Site Name Goes Here';<br />
  public $sendmail = '/usr/sbin/sendmail';<br />
  public $smtpauth = '0';<br />
  public $smtpuser = '';<br />
  public $smtppass = '';<br />
  public $smtphost = 'localhost';<br />
  public $smtpsecure = 'none';<br />
  public $smtpport = '25';<br />
  public $caching = '0';<br />
  public $cache_handler = 'file';<br />
  public $cachetime = '15';<br />
  public $MetaDesc = '';<br />
  public $MetaKeys = '';<br />
  public $MetaAuthor = '1';<br />
  public $sef = '1';<br />
  public $sef_rewrite = '0';<br />
  public $sef_suffix = '0';<br />
  public $unicodeslugs = '0';<br />
  public $feed_limit = '10';<br />
  public $log_path = '/home/userna5/public_html/logs';<br />
  public $tmp_path = '/home/userna5/public_html/tmp';<br />
  public $lifetime = '15';<br />
  public $session_handler = 'database';<br />
}
</pre>
</div>

  
  
  
  

<div name='j25' id='j25' style='display:none;'>
<h3>Joomla 2.5.0</h3>
<pre style='white-space:nowrap; overflow:scroll; max-height:400px;'>
&lt;?php<br />
class JConfig {<br />
  public $offline = '0';<br />
  public $offline_message = 'This site is down for maintenance.&lt;br /&gt; Please check back again soon.';<br />
  public $display_offline_message = '1';<br />
  public $offline_image = '';<br />
  public $sitename = 'Site Name Goes Here';<br />
  public $editor = 'tinymce';<br />
  public $captcha = '0';<br />
  public $list_limit = '20';<br />
  public $access = '1';<br />
  public $debug = '0';<br />
  public $debug_lang = '0';<br />
  public $dbtype = 'mysqli';<br />
  public $host = 'localhost';<br />
  public $user = 'db_user';<br />
  public $password = 'db_pass';<br />
  public $db = 'db_name';<br />
  public $dbprefix = 'cnom6_';<br />
  public $live_site = '';<br />
  public $secret = 'BK9W5YgX1CsDy2zE';<br />
  public $gzip = '0';<br />
  public $error_reporting = 'default';<br />
  public $helpurl = 'http://help.joomla.org/proxy/index.php?option=com_help&amp;keyref=Help{major}{minor}:{keyref}';<br />
  public $ftp_host = '127.0.0.1';<br />
  public $ftp_port = '21';<br />
  public $ftp_user = '';<br />
  public $ftp_pass = '';<br />
  public $ftp_root = '';<br />
  public $ftp_enable = '0';<br />
  public $offset = 'UTC';<br />
  public $offset_user = 'UTC';<br />
  public $mailer = 'mail';<br />
  public $mailfrom = 'user@domain.com';<br />
  public $fromname = 'Site Name Goes Here';<br />
  public $sendmail = '/usr/sbin/sendmail';<br />
  public $smtpauth = '0';<br />
  public $smtpuser = '';<br />
  public $smtppass = '';<br />
  public $smtphost = 'localhost';<br />
  public $smtpsecure = 'none';<br />
  public $smtpport = '25';<br />
  public $caching = '0';<br />
  public $cache_handler = 'file';<br />
  public $cachetime = '15';<br />
  public $MetaDesc = '';<br />
  public $MetaKeys = '';<br />
  public $MetaTitle = '1';<br />
  public $MetaAuthor = '1';<br />
  public $robots = '';<br />
  public $sef = '1';<br />
  public $sef_rewrite = '0';<br />
  public $sef_suffix = '0';<br />
  public $unicodeslugs = '0';<br />
  public $feed_limit = '10';<br />
  public $log_path = '/home/userna5/public_html/logs';<br />
  public $tmp_path = '/home/userna5/public_html/tmp';<br />
  public $lifetime = '15';<br />
  public $session_handler = 'database';<br />
}
</pre>
</div>

  
  
  
  

<div name='j30' id='j30' style='display:none;'>
<h3>Joomla 3.0</h3>
<pre style='white-space:nowrap; overflow:scroll; max-height:400px;'>
&lt;?php<br />
class JConfig {<br />
  public $offline = '0';<br />
  public $offline_message = 'This site is down for maintenance.&lt;br /&gt; Please check back again soon.';<br />
  public $display_offline_message = '1';<br />
  public $offline_image = '';<br />
  public $sitename = 'Site Name Goes Here';<br />
  public $editor = 'tinymce';<br />
  public $captcha = '0';<br />
  public $list_limit = '20';<br />
  public $access = '1';<br />
  public $debug = '0';<br />
  public $debug_lang = '0';<br />
  public $dbtype = 'mysqli';<br />
  public $host = 'localhost';<br />
  public $user = 'db_user';<br />
  public $password = 'db_pass';<br />
  public $db = 'db_name';<br />
  public $dbprefix = 'gs82l_';<br />
  public $live_site = '';<br />
  public $secret = 'kV46ItSyS9DuRLeg';<br />
  public $gzip = '0';<br />
  public $error_reporting = 'default';<br />
  public $helpurl = 'http://help.joomla.org/proxy/index.php?option=com_help&amp;keyref=Help{major}{minor}:{keyref}';<br />
  public $ftp_host = '';<br />
  public $ftp_port = '';<br />
  public $ftp_user = '';<br />
  public $ftp_pass = '';<br />
  public $ftp_root = '';<br />
  public $ftp_enable = '';<br />
  public $offset = 'UTC';<br />
  public $mailer = 'mail';<br />
  public $mailfrom = 'user@domain.com';<br />
  public $fromname = 'Site Name Goes Here';<br />
  public $sendmail = '/usr/sbin/sendmail';<br />
  public $smtpauth = '0';<br />
  public $smtpuser = '';<br />
  public $smtppass = '';<br />
  public $smtphost = 'localhost';<br />
  public $smtpsecure = 'none';<br />
  public $smtpport = '25';<br />
  public $caching = '0';<br />
  public $cache_handler = 'file';<br />
  public $cachetime = '15';<br />
  public $MetaDesc = 'Site Description Goes Here';<br />
  public $MetaKeys = '';<br />
  public $MetaTitle = '1';<br />
  public $MetaAuthor = '1';<br />
  public $MetaVersion = '0';<br />
  public $robots = '';<br />
  public $sef = '1';<br />
  public $sef_rewrite = '0';<br />
  public $sef_suffix = '0';<br />
  public $unicodeslugs = '0';<br />
  public $feed_limit = '10';<br />
  public $log_path = '/home/userna5/public_html/logs';<br />
  public $tmp_path = '/home/userna5/public_html/tmp';<br />
  public $lifetime = '15';<br />
  public $session_handler = 'database';<br />
}
</pre>
</div>
  
  
  
  
  

<div name='j31' id='j31' style='display:none;'>
<h3>Joomla 3.1</h3>
<pre style='white-space:nowrap; overflow:scroll; max-height:400px;'>
&lt;?php<br />
class JConfig {<br />
  public $offline = '0';<br />
  public $offline_message = 'This site is down for maintenance.&lt;br /&gt; Please check back again soon.';<br />
  public $display_offline_message = '1';<br />
  public $offline_image = '';<br />
  public $sitename = 'Site Name Goes Here';<br />
  public $editor = 'tinymce';<br />
  public $captcha = '0';<br />
  public $list_limit = '20';<br />
  public $access = '1';<br />
  public $debug = '0';<br />
  public $debug_lang = '0';<br />
  public $dbtype = 'mysqli';<br />
  public $host = 'localhost';<br />
  public $user = 'db_user';<br />
  public $password = 'db_pass';<br />
  public $db = 'db_name';<br />
  public $dbprefix = 'w3xkj_';<br />
  public $live_site = '';<br />
  public $secret = 'w6mMzG7gLfNlTQM0';<br />
  public $gzip = '0';<br />
  public $error_reporting = 'default';<br />
  public $helpurl = 'http://help.joomla.org/proxy/index.php?option=com_help&amp;keyref=Help{major}{minor}:{keyref}';<br />
  public $ftp_host = '';<br />
  public $ftp_port = '';<br />
  public $ftp_user = '';<br />
  public $ftp_pass = '';<br />
  public $ftp_root = '';<br />
  public $ftp_enable = '';<br />
  public $offset = 'UTC';<br />
  public $mailer = 'mail';<br />
  public $mailfrom = 'user@domain.com';<br />
  public $fromname = 'Site Name Goes Here';<br />
  public $sendmail = '/usr/sbin/sendmail';<br />
  public $smtpauth = '0';<br />
  public $smtpuser = '';<br />
  public $smtppass = '';<br />
  public $smtphost = 'localhost';<br />
  public $smtpsecure = 'none';<br />
  public $smtpport = '25';<br />
  public $caching = '0';<br />
  public $cache_handler = 'file';<br />
  public $cachetime = '15';<br />
  public $MetaDesc = 'Description Goes Here';<br />
  public $MetaKeys = '';<br />
  public $MetaTitle = '1';<br />
  public $MetaAuthor = '1';<br />
  public $MetaVersion = '0';<br />
  public $robots = '';<br />
  public $sef = '1';<br />
  public $sef_rewrite = '0';<br />
  public $sef_suffix = '0';<br />
  public $unicodeslugs = '0';<br />
  public $feed_limit = '10';<br />
  public $log_path = '/home/userna5/public_html/logs';<br />
  public $tmp_path = '/home/userna5/public_html/tmp';<br />
  public $lifetime = '15';<br />
  public $session_handler = 'database';<br />
}
</pre>
</div>
  
  
  
  
  

<div name='j32' id='j32' style='display:none;'>
<h3>Joomla 3.2</h3>
<pre style='white-space:nowrap; overflow:scroll; max-height:400px;'>
&lt;?php<br />
class JConfig {<br />
  public $offline = '0';<br />
  public $offline_message = 'This site is down for maintenance.&lt;br /&gt; Please check back again soon.';<br />
  public $display_offline_message = '1';<br />
  public $offline_image = '';<br />
  public $sitename = 'Site Name Goes Here';<br />
  public $editor = 'tinymce';<br />
  public $captcha = '0';<br />
  public $list_limit = '20';<br />
  public $access = '1';<br />
  public $debug = '0';<br />
  public $debug_lang = '0';<br />
  public $dbtype = 'mysqli';<br />
  public $host = 'localhost';<br />
  public $user = 'db_user';<br />
  public $password = 'db_pass';<br />
  public $db = 'db_name';<br />
  public $dbprefix = 'mj58o_';<br />
  public $live_site = '';<br />
  public $secret = 'M4CoKReTb8RutGUo';<br />
  public $gzip = '0';<br />
  public $error_reporting = 'default';<br />
  public $helpurl = 'http://help.joomla.org/proxy/index.php?option=com_help&amp;keyref=Help{major}{minor}:{keyref}';<br />
  public $ftp_host = '';<br />
  public $ftp_port = '';<br />
  public $ftp_user = '';<br />
  public $ftp_pass = '';<br />
  public $ftp_root = '';<br />
  public $ftp_enable = '';<br />
  public $offset = 'UTC';<br />
  public $mailonline = '1';<br />
  public $mailer = 'mail';<br />
  public $mailfrom = 'user@domain.com';<br />
  public $fromname = 'Site Name Goes Here';<br />
  public $sendmail = '/usr/sbin/sendmail';<br />
  public $smtpauth = '0';<br />
  public $smtpuser = '';<br />
  public $smtppass = '';<br />
  public $smtphost = 'localhost';<br />
  public $smtpsecure = 'none';<br />
  public $smtpport = '25';<br />
  public $caching = '0';<br />
  public $cache_handler = 'file';<br />
  public $cachetime = '15';<br />
  public $MetaDesc = 'Description Goes Here';<br />
  public $MetaKeys = '';<br />
  public $MetaTitle = '1';<br />
  public $MetaAuthor = '1';<br />
  public $MetaVersion = '0';<br />
  public $robots = '';<br />
  public $sef = '1';<br />
  public $sef_rewrite = '0';<br />
  public $sef_suffix = '0';<br />
  public $unicodeslugs = '0';<br />
  public $feed_limit = '10';<br />
  public $log_path = '/home/userna5/public_html/logs';<br />
  public $tmp_path = '/home/userna5/public_html/tmp';<br />
  public $lifetime = '15';<br />
  public $session_handler = 'database';<br />
}
</pre>
</div>





<div style='clear:both;'></div>




  <a name='changelog'></a>
<h2>Change Log</h2>
  
  <p>Below you will find a table showing the variables contained within <a href='#config-files'>Joomla's config file based upon the Joomla version</a>. A red <span style='color:red; font-weight:bold;'>&#x2717;</span> means that variable was not included, and a green check mark <span style='color:green; font-weight:bold;'>&#x2713;</span> means it was included.</p>
  
  <p>Please note that in Joomla 1.0, the variable names began with <em>$mosConfig</em>. For the purposes of this table, <em>$mosConfig</em> has been removed from those variable names.</p>
  
  
  <style>
    table#joomla_config th {font-weight:bold; background:#ddd; text-align:left; font-weight:normal;}
    table#joomla_config td.gr {background:#E5FFF3; text-align:center; color:green; font-weight:bold;}
    table#joomla_config td.re {background:#FFE6E5; text-align:center; color:red; font-weight:bold;}
    .rc {color:red; font-weight:bold}
    .gc {color:green; font-weight:bold}
  </style>
  <table class='table' id='joomla_config'>
    <tr>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>Joomla Version</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.0.15</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.5</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.6</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.7</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>2.5</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.0</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.1</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.2</th>
    </tr>
    <tr>
      <th>$offline</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$host</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$user</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$password</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$db</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$dbprefix</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$lang</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$absolute_path</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$live_site</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$sitename</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>Joomla Version</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.0.15</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.5</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.6</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.7</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>2.5</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.0</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.1</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.2</th>
    </tr>
    <tr>
      <th>$shownoauth</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$useractivation</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$uniquemail</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$offline_message</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$error_message</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$debug</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$lifetime</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$session_life_admin</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$session_type</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$MetaDesc</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>Joomla Version</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.0.15</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.5</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.6</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.7</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>2.5</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.0</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.1</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.2</th>
    </tr>
    <tr>
      <th>$MetaKeys</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$MetaTitle</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$MetaAuthor</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$locale</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$offset</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$offset_user</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$hideAuthor</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$hideCreateDate</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$hideModifyDate</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$hidePdf</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>Joomla Version</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.0.15</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.5</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.6</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.7</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>2.5</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.0</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.1</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.2</th>
    </tr>
    <tr>
      <th>$hidePrint</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$hideEmail</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$enable_log_items</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$enable_log_searches</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$enable_stats</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$sef</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$vote</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$gzip</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$multipage_toc</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$allowUserRegistration</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>Joomla Version</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.0.15</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.5</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.6</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.7</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>2.5</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.0</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.1</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.2</th>
    </tr>
    <tr>
      <th>$link_titles</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$error_reporting</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$list_limit</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$caching</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$cachepath</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$cachetime</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$mailer</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$mailfrom</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$fromname</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$sendmail</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>Joomla Version</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.0.15</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.5</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.6</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.7</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>2.5</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.0</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.1</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.2</th>
    </tr>
    <tr>
      <th>$smtpauth</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$smtpuser</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$smtppass</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$smtphost</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$back_button</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$item_navigation</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$secret</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$pagetitles</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$readmore</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$hits</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>Joomla Version</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.0.15</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.5</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.6</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.7</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>2.5</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.0</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.1</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.2</th>
    </tr>
    <tr>
      <th>$icons</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$favicon</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$fileperms</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$dirperms</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$helpurl</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$multilingual_support</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$editor</th>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$admin_expired</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$frontend_login</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$frontend_userparams</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>Joomla Version</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.0.15</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.5</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.6</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.7</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>2.5</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.0</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.1</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.2</th>
    </tr>
    <tr>
      <th>$itemid_compat</th>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$legacy</th>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$debug_lang</th>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$dbtype</th>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$xmlrpc_server</th>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
    </tr>
    <tr>
      <th>$ftp_host</th>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$ftp_port</th>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$ftp_user</th>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$ftp_pass</th>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$ftp_root</th>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>Joomla Version</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.0.15</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.5</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.6</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.7</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>2.5</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.0</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.1</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.2</th>
    </tr>
    <tr>
      <th>$ftp_enable</th>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$cache_handler</th>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$sef_rewrite</th>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$sef_suffix</th>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$feed_limit</th>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$log_path</th>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$tmp_path</th>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$session_handler</th>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$access</th>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$smtpsecure</th>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>Joomla Version</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.0.15</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.5</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.6</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>1.7</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>2.5</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.0</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.1</th>
      <th style='background:#aaa;text-align:center; font-weight:bold;'>3.2</th>
    </tr>
    <tr>
      <th>$smtpport</th>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$unicodeslugs</th>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$display_offline_message</th>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$offline_image</th>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$captcha</th>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$robots</th>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$MetaVersion</th>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
    <tr>
      <th>$mailonline</th>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='re'>&#x2717;</td>
      <td class='gr'>&#x2713;</td>
    </tr>
  </table> 
	
						 </div>

	






  <div class='quotebordered-first raised' style='margin:15px 0px;'>
					<div class='quotebordered raised'>
						<div style='text-align:center;font-size:18px;font-weight:bold;padding-top:15px;'>Continued Education in Course <a href='/support/edu/joomla-3/news'>100: Joomla 3 - The Latest News</a></div>
						<div style='text-align:center;color:#c52228;'>You are viewing Section 10: Joomla configuration.php file changes over time</div>
						<table style='width:100%;margin:15px 0px;font-size:15px;line-height:17px;'>
							<tr>
								<td valign='top' style='width:50%;border-right:1px solid #aaa;text-align:left;padding-right:10px;'>
									<div style='float:left;font-size:50px;color:#aaa;margin:-4px 15px 15px 0px;'>&#x2039;</div>
									Section 9: <a href='/support/edu/joomla-3/news/library-versions'>Which version of jQuery comes with Joomla 3?</a>
								</td>
								<td valign='top' style='width:50%;text-align:right;padding-left:10px;'>
									
									
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
	<iframe src='//www.facebook.com/plugins/like.php?href=http://www.inmotionhosting.com/support/edu/joomla-3/news/config-changes&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=209145459223160' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:100px; height:21px;' allowTransparency='true'></iframe>
</div>

	                        
<div style='display:inline-block;'>
	<div class='g-plusone' data-size='medium' data-href='http://www.inmotionhosting.com/support/edu/joomla-3/news/config-changes'></div>
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
		<input type="hidden" name="return" value="aW5kZXgucGhwP29wdGlvbj1jb21fY29udGVudCZjYXRpZD0yMjUmaWQ9MzA1MCZ2aWV3PWFydGljbGUmSXRlbWlkPTEwMQ==" />
		<input type="hidden" name="43eeab766efd9e00ca906b1436056ad5" value="1" />	</div>
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
						
		<a href='/support/edu/joomla-3/news?tsrc=rsbedu'><h3 style='border-bottom:1px solid #bbb; margin-bottom:10px; padding-bottom:2px; font-size:16px; line-height:17px;'> Joomla 3 - The Latest News</h3></a>
		<table>  <tr >
                        <td valign='top'>1.</td>
                        <td><a href='/support/edu/joomla-3/news/should-i-upgrade-to-joomla-3-1?tsrc=rsbedu'>Should I upgrade to Joomla 3.1?</a></td>
                </tr>
          <tr >
                        <td valign='top'>2.</td>
                        <td><a href='/support/edu/joomla-3/news/alpha-1-released?tsrc=rsbedu'>Joomla 3.0 Alpha-1 has been released!</a></td>
                </tr>
          <tr >
                        <td valign='top'>3.</td>
                        <td><a href='/support/edu/joomla-3/news/alpha-1-appearance?tsrc=rsbedu'>What does Joomla 3.0 Alpha-1 look like?</a></td>
                </tr>
          <tr >
                        <td valign='top'>4.</td>
                        <td><a href='/support/edu/joomla-3/news/mootools-support?tsrc=rsbedu'>Joomla 3.0 and Mootools</a></td>
                </tr>
          <tr >
                        <td valign='top'>5.</td>
                        <td><a href='/support/edu/joomla-3/news/bootstrap-is-new?tsrc=rsbedu'>Joomla 3.0 and Bootstrap</a></td>
                </tr>
          <tr >
                        <td valign='top'>6.</td>
                        <td><a href='/support/edu/joomla-3/news/converting-templates-to-3?tsrc=rsbedu'>Initial thoughts on converting existing templates to Joomla 3.0</a></td>
                </tr>
          <tr >
                        <td valign='top'>7.</td>
                        <td><a href='/support/edu/joomla-3/news/should-i-upgrade?tsrc=rsbedu'>Should I upgrade Joomla 2.5 to Joomla 3.0?</a></td>
                </tr>
        <tr><td colspan='2'><h4>Joomla 3.2</h4></td></tr>  <tr >
                        <td valign='top'>8.</td>
                        <td><a href='/support/edu/joomla-3/news/ux-changes?tsrc=rsbedu'>Joomla 3.2 User Experience Improvements</a></td>
                </tr>
          <tr >
                        <td valign='top'>9.</td>
                        <td><a href='/support/edu/joomla-3/news/library-versions?tsrc=rsbedu'>Which version of jQuery comes with Joomla 3?</a></td>
                </tr>
          <tr style='border-top:1px solid #bbb; border-bottom:1px solid #bbb; background:#eee;'>
                        <td valign='top'>10.</td>
                        <td><a href='/support/edu/joomla-3/news/config-changes?tsrc=rsbedu'>Joomla configuration.php file changes over time</a></td>
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
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '183.182.114.0']);

                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'chat', 'launch', 'support center']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '183.182.114.0']);
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
        	        id:'3050',
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