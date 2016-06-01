<?php die("Access Denied"); ?>#x#a:3:{s:4:"body";s:350363:" 
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

		  <base href="http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql/grab-all-comments-from-database" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="last-modified" content="2014-03-14T21:18:53-07:00" />
  <meta name="keywords" content="php select display comments" />
  <meta name="author" content="Brad Markle" />
  <meta name="description" content="In this lesson, we will continue building our fictitious website by using PHP to select all user comments from a database and display them in our article." />
  <title>How to use PHP to connect to and retrieve data from MySQL - InMotion Hosting</title>
  <link href="http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql/grab-all-comments-from-database" rel="canonical" />
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
						
		_gaq.push(['_setCustomVar', 3, 'DateMonthModified', '2014-03', 3]);
		_gaq.push(['_setCustomVar', 4, 'DateMonthPublished', '2012-02', 3]);
		_gaq.push(['_setCustomVar', 5, 'Author', 'BradM', 3]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>






		






	<link rel="shortcut icon" href="//imh01-inmotionhosting1.netdna-ssl.com/img/imh_favicon_hd.png" type="image/x-icon" />






	





	<!-- cid:ed36e571e4152cbccbfd42c22823cb3e -->





	


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
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '213.55.101.21']);

                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'chat', 'launch', 'support center']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '213.55.101.21']);
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
</div></li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_with_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='/support/edu/website-design' itemprop='url'><span itemprop='title'>Website Design<span></a><div class='dropdown_4columns'><h2>Website Design Education Channel</h2><div class='col_2'><h3>100 Level Classes</h3><div><a href='/support/edu/website-design/website-design-basics'>101: Website Design Basics</a></div><div><a href='/support/edu/website-design/insert-images-website'>102: Inserting Images into a Website</a></div><div><a href='/support/edu/website-design/inserting-links-into-website'>103: Inserting Links into a Website</a></div><div><a href='/support/edu/website-design/meta-tags-explained'>104: Meta Tags Explained</a></div><div><a href='/support/edu/website-design/html-5-syntax'>105: HTML 5 Basic syntax</a></div></div><div class='col_2'><h3>200 Level Classes</h3><div><a href='/support/edu/website-design/adding-videos-website'>201: Adding Videos to a Website</a></div><div><a href='/support/edu/website-design/adding-contact-forms'>202: Adding Contact Forms </a></div><div><a href='/support/edu/website-design/using-css'>203: Using and Understanding CSS</a></div><div><a href='/support/edu/website-design/website-design-best-practices'>204: Website Design Best Practices</a></div><div><a href='/support/edu/website-design/using-php-and-mysql'>205: Using PHP to create dynamic pages</a></div><div><a href='/support/edu/website-design/create-responsive-template'>206: Creating Responsive Templates</a></div><div><a href='/support/edu/website-design/search-engine-optimization'>207: Search Engine Optimization</a></div></div></div></li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_with_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='/support/edu/website-design/using-php-and-mysql' itemprop='url'><span itemprop='title'>205: Using PHP to create dynamic pages<span></a><div class='dropdown_3columns'><h2> Using PHP to create dynamic pages</h2><div class='col_3'><div>1. <a style='display:inline;' href='/support/edu/website-design/using-php-and-mysql/how-to-create-a-custom-php-contact-form'>How to create a custom PHP contact form with validation</a></div><div>2. <a style='display:inline;' href='/support/edu/website-design/using-php-and-mysql/database-setup'>Setting up a database to handle form data from a website</a></div><div>3. <a style='display:inline;' href='/support/edu/website-design/using-php-and-mysql/create-html-form'>Creating a simple HTML Form to get user comments</a></div><div>4. <a style='display:inline;' href='/support/edu/website-design/using-php-and-mysql/using-php-include-function'>Using the php include function to reuse code</a></div><div>5. <a style='display:inline;' href='/support/edu/website-design/using-php-and-mysql/php-insert-database'>Using PHP to INSERT data into a database</a></div><div>6. <a style='display:inline;' href='/support/edu/website-design/using-php-and-mysql/stepping-through-our-php-code'>Reviewing sample PHP code that interacts with a MySQL Database</a></div><div>7. <a style='display:inline;' href='/support/edu/website-design/using-php-and-mysql/grab-all-comments-from-database'>How to use PHP to connect to and retrieve data from MySQL</a></div></div></div></li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_no_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><span itemprop='title'>How to use PHP to con...</span></li>			</ul>
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
															How to use PHP to connect to and retrieve data from MySQL									</h1>
			
																
				
					<div style='font-size:12px; color:#aaa; margin-bottom:-10px; padding-top:5px;'>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Written by </span><a href='https://plus.google.com/102670474114655224886?rel=author'>Brad Markle</a></div>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Views:</span> <span name='page_views' id='page_views'>186,429</span></div>
							<div style='float:left; margin-right:20px;' title='Originally published: Feb 7, 2012'><span style='color:#606060;'>Published:</span> Mar 14, 2014</div>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Comments:</span> <a href='#comments'>110</a></div>
							<div style='clear:both;'></div>
						</div>
						</div>
		
	
		

	

								<p>In our <a href="/support/edu/website-design/using-php-and-mysql">previous set of articles</a>, we've created a simple 2 page website that allows users to submit comments about the page they were looking at. In this article, we're going to show you how to print all of the comments that users have left for a page.</p>

<h2><br />Step 1. Create our SQL Query to grab all comments</h2>

<p>In order to display comments on a page, we first need to know what comments to show. When we setup our site we created two pages, and each page was assigned a unique id number. This ID number will be used to gather comments for that specific page. For example, when the user is on page 1, we'll select all of the comments in the database assigned to page "1".</p>

<p>If you're not familiar with SQL, you can use phpMyAdmin to help write your SQL command. To do this:</p>

<ol class="article_list">

<li><a href="/support/edu/cpanel/getting-started-cpanel/how-to-log-into-cpanel">Log into cPanel</a> and click the phpMyAdmin icon</li>

<li>In the left menu, first click your database name and then click the table to work with. If you're following our example, we'll first click on "_mysite" and then "comments".</li>

<li>Click "Search" in the top menu</li>

<li>Enter 1 for the "Value" of "articleid" and then click "Go"<br /><a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/website/phpmysql/display_comments/create-sample-select-command-using-phpmyadmin-use-search.gif"><img  alt="create-sample-select-command-using-phpmyadmin-use-search" src="//cdn.inmotionhosting.com/support/images/stories/website/phpmysql/display_comments/create-sample-select-command-using-phpmyadmin-use-search.gif" /></a></li>

<li>After running the search, phpMyAdmin will show you all comments that belong to article 1, as well as the SQL syntax you can use to select those comments. The code provided is:

<div class="code_block">SELECT * FROM `comments` WHERE `articleid` =1 LIMIT 0 , 30</div>
<div style="margin-top: 5px;"><a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/website/phpmysql/display_comments/our-sample-select-query-from-phpmyadmin.gif"><img  alt="our-sample-select-query-from-phpmyadmin" src="//cdn.inmotionhosting.com/support/images/stories/website/phpmysql/display_comments/our-sample-select-query-from-phpmyadmin.gif" /></a></div>
</li>

</ol>


<h2><br />Step 2. Setting up our PHP code to SELECT our comments</h2>

<p>Now that we have our sample SQL query, we can use it to create the php code that will print all comments on a page. Below is the example code that we created. If you're not familiar with php, any line that begins with a // is a comment, and comments are used by developers to document their code. In our example, we have quite a few comments to help explain what the code is doing, but keep in mind that most scripts do not have as many comments.</p>
<pre class="code_block" style="max-height: 500px; font-size: 11px;">
&lt;?

// At this point in the code, we want to show all of the comments
// submitted by users for this particular page. As the comments
// are stored in the database, we will begin by connecting to
// the database
 
// Below we are setting up our connection to the server. Because
// the database lives on the same physical server as our php code,
// we are connecting to "localhost". inmoti6_myuser and mypassword
// are the username and password we setup for our database when
// using the "MySQL Database Wizard" within cPanel

$con = mysql_connect("localhost","inmoti6_myuser","mypassword");
 
// The statement above has just tried to connect to the database.
// If the connection failed for any reason (such as wrong username
// and or password, we will print the error below and stop execution
// of the rest of this php script

if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
 
// We now need to select the particular database that we are working with
// In this example, we setup (using the MySQL Database Wizard in cPanel) a
// database named inmoti6_mysite

mysql_select_db("inmoti6_mysite", $con);

// We now need to setup our SQL query to grab all comments from this page.
// The example SQL query we copied from phpMyAdmin is:
// SELECT * FROM `comments` WHERE `articleid` =1 LIMIT 0 , 30
// If we run this query, it will ALWAYS grab only the comments from our
// article with an id of 1. We therefore need to update the SQL query
// so that on article 2 is searches for the "2", on page is searches for
// "3", and so on.
// If you notice in the URL, the id of the article is set after id=
// For example, in the following URL:
// http://phpandmysql.inmotiontesting.com/page2.php?id=2
// ... the article id is 2. We can grab and store this number in a variable
// by using the following code:

$article_id = $_GET['id'];

// We also want to add a bit of security here. We assume that the $article_id
// is a number, but if someone changes the URL, as in this manner:
// http://phpandmysql.inmotiontesting.com/page2.php?id=malicious_code_goes_here
// ... then they will have the potential to run any code they want in your
// database. The following code will check to ensure that $article_id is a number.
// If it is not a number (IE someone is trying to hack your website), it will tell
// the script to stop executing the page

if( ! is_numeric($article_id) )
  die('invalid article id');

// Now that we have our article id, we need to update our SQL query. This
// is what it looks like after we update the article number and assign the
// query to a variable named $query

$query = "SELECT * FROM `comments` WHERE `articleid` =$article_id LIMIT 0 , 30";

// Now that we have our Query, we will run the query against the database
// and actually grab all of our comments

$comments = mysql_query($query);

// Before we start writing all of the comments to the screen, let's first
// print a message to the screen telling our users we're going to start
// printing comments to the page.

echo "&lt;h1&gt;User Comments&lt;/h1&gt;";

// We are now ready to print our comments! Below we will loop through our
// comments and print them one by one.

// The while statement will begin the "looping"

while($row = mysql_fetch_array($comments, MYSQL_ASSOC))
{

  // As we loop through each comment, the specific comment we're working
  // with right now is stored in the $row variable.

  // for example, to print the commenter's name, we would use:
  // $row['name']
  
  // if we want to print the user's comment, we would use:
  // $row['comment']
  
  // As this is a beginner tutorial, to make our code easier to read
  // we will take the values above (from our array) and put them into
  // individual variables

  $name = $row['name'];
  $email = $row['email'];
  $website = $row['website'];
  $comment = $row['comment'];
  $timestamp = $row['timestamp'];
  
  // Be sure to take security precautions! Even though we asked the user
  // for their "name", they could have typed anything. A hacker could have
  // entered the following (or some variation) as their name:
  //
  // &lt;script type="text/javascript"&gt;window.location = "http://SomeBadWebsite.com";&lt;/script&gt;
  //
  // If instead of printing their name, "John Smith", we would be printing
  // javascript code that redirects users to a malicious website! To prevent
  // this from happening, we can use the <a href="http://php.net/htmlspecialchars" target="_blank">htmlspecialchars function</a> to convert
  // special characters to their HTML entities. In the above example, it would
  // instead print:
  //
  // <span style='color:red;'>&lt;</span>script type=<span style='color:red;'>&quot;</span>text/javascript<span style='color:red;'>&quot;&gt;</span>window.location = <span style='color:red;'>&quot;</span>http://SomeBadWebsite.com<span style='color:red;'>&quot;</span>;<span style='color:red;'>&lt;</span>/script<span style='color:red;'>&gt;</span>
  //
  // This certainly would look strange on the page, but it would not be harmful
  // to visitors

  $name = htmlspecialchars($row['name'],ENT_QUOTES);
  $email = htmlspecialchars($row['email'],ENT_QUOTES);
  $website = htmlspecialchars($row['website'],ENT_QUOTES);
  $comment = htmlspecialchars($row['comment'],ENT_QUOTES);
  
  // We will now print the comment to the screen
  
  echo "  &lt;div style='margin:30px 0px;'&gt;
      Name: $name&lt;br /&gt;
      Email: $email&lt;br /&gt;
      Website: $website&lt;br /&gt;
      Comment: $comment&lt;br /&gt;
      Timestamp: $timestamp
    &lt;/div&gt;
  ";
}

// At this point, we've added the user's comment to the database, and we can
// now close our connection to the database:
mysql_close($con);

?&gt;
</pre>
<br />
<p>As stated earlier, we purposely include many comments to help explain what the code was doing. While the example code above looks like a lot of work, if we strip out all of the comments, the code looks more like:</p>
<pre class="code_block" style="'max-height: 500px; font-size: 11px;">
&lt;?

$con = mysql_connect("localhost","inmoti6_myuser","mypassword");
 
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
 
mysql_select_db("inmoti6_mysite", $con);

$article_id = $_GET['id'];

if( ! is_numeric($article_id) )
  die('invalid article id');

$query = "SELECT * FROM `comments` WHERE `articleid` =$article_id LIMIT 0 , 30";

$comments = mysql_query($query);

echo "&lt;h1&gt;User Comments&lt;/h1&gt;";

while($row = mysql_fetch_array($comments, MYSQL_ASSOC))
{
  $name = $row['name'];
  $email = $row['email'];
  $website = $row['website'];
  $comment = $row['comment'];
  $timestamp = $row['timestamp'];
  
  $name = htmlspecialchars($row['name'],ENT_QUOTES);
  $email = htmlspecialchars($row['email'],ENT_QUOTES);
  $website = htmlspecialchars($row['website'],ENT_QUOTES);
  $comment = htmlspecialchars($row['comment'],ENT_QUOTES);
  
  echo "  &lt;div style='margin:30px 0px;'&gt;
      Name: $name&lt;br /&gt;
      Email: $email&lt;br /&gt;
      Website: $website&lt;br /&gt;
      Comment: $comment&lt;br /&gt;
      Timestamp: $timestamp
    &lt;/div&gt;
  ";
}

mysql_close($con);

?&gt;
</pre>

<h2><br />Step 3. Placing our php code into our pages</h2>

<p>We now have our php code that will display comments to the screen. In a previous article, we explained <a href="/support/edu/website-design/using-php-and-mysql/using-php-include-function">how to use php's include function to reuse code</a>, and we will continue to use this method to use our php code.</p>

<p><strong>To incorporate our php code:</strong></p>

<ol class="article_list">
<li>Create a file named display_comments.php</li>
<li>Paste in the sample code above</li>
<li>Update both page1.php and page2.php to include display_comments.php by using:
<div class="code_block">&lt;? include("display_comments.php"); ?&gt;</div>
towards the bottom of the page where you want to display comments.</li>
</ol>
<br />
<p>After performing the steps above, our page1.php file now looks like this:</p>

<pre class="code_block">
&lt;? include("manage_comments.php"); ?&gt;

&lt;h1&gt;This is page1.php&lt;/h1&gt;

&lt;div&gt;&lt;a href='page2.php?id=2'&gt;Click here&lt;/a&gt; to go to page2.php&lt;/div&gt;

&lt;div style='margin:20px; width:100px; height:100px; background:blue;'&gt;&lt;/div&gt;

&lt;? include("display_comments.php"); ?&gt;

&lt;? include("formcode.php"); ?&gt;
</pre>

<br />
<p>After testing our two pages, you can see that each page shows only the comments that were added to that particular page:</p>

<table border="1" cellpadding="3" cellspacing="3">
<tbody>
<tr>
<td>
  <p><b>http://phpandmysql.inmotiontesting.com/page1.php?id=1</b></p>
</td>
<td bgcolor="#D3D3D3">
  <p><b>http://phpandmysql.inmotiontesting.com/page2.php?id=2</b></p>
</td>
</tr>
<tr>
<td><a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/website/phpmysql/display_comments/page1.php-with-comments.gif"><img  alt="page1.php-with-comments" src="//cdn.inmotionhosting.com/support/images/stories/website/phpmysql/display_comments/page1.php-with-comments.gif" style="max-width: 250px;" /></a></td>
<td bgcolor="#D3D3D3"><a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/website/phpmysql/display_comments/page2.php-with-comments.gif"><img  alt="page2.php-with-comments" src="//cdn.inmotionhosting.com/support/images/stories/website/phpmysql/display_comments/page2.php-with-comments.gif" style="max-width: 250px;" /></a></td>
</tr>
</tbody>
</table>
 
	
						 </div>

	






  <div class='quotebordered-first raised' style='margin:15px 0px;'>
					<div class='quotebordered raised'>
						<div style='text-align:center;font-size:18px;font-weight:bold;padding-top:15px;'>Continued Education in Course <a href='/support/edu/website-design/using-php-and-mysql'>205: Using PHP to create dynamic pages</a></div>
						<div style='text-align:center;color:#c52228;'>You are viewing Section 7: How to use PHP to connect to and retrieve data from MySQL</div>
						<table style='width:100%;margin:15px 0px;font-size:15px;line-height:17px;'>
							<tr>
								<td valign='top' style='width:50%;border-right:1px solid #aaa;text-align:left;padding-right:10px;'>
									<div style='float:left;font-size:50px;color:#aaa;margin:-4px 15px 15px 0px;'>&#x2039;</div>
									Section 6: <a href='/support/edu/website-design/using-php-and-mysql/stepping-through-our-php-code'>Reviewing sample PHP code that interacts with a MySQL Database</a>
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
	<iframe src='//www.facebook.com/plugins/like.php?href=http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql/grab-all-comments-from-database&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=209145459223160' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:100px; height:21px;' allowTransparency='true'></iframe>
</div>

	                        
<div style='display:inline-block;'>
	<div class='g-plusone' data-size='medium' data-href='http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql/grab-all-comments-from-database'></div>
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
		<input type="hidden" name="return" value="aW5kZXgucGhwP29wdGlvbj1jb21fY29udGVudCZjYXRpZD0xNjAmaWQ9MTEzNyZ2aWV3PWFydGljbGUmSXRlbWlkPTEwMQ==" />
		<input type="hidden" name="a627d72a83603d10a01eb35dbcbbebf9" value="1" />	</div>
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
						
		<a href='/support/edu/website-design/using-php-and-mysql?tsrc=rsbedu'><h3 style='border-bottom:1px solid #bbb; margin-bottom:10px; padding-bottom:2px; font-size:16px; line-height:17px;'> Using PHP to create dynamic pages</h3></a>
		<table>  <tr >
                        <td valign='top'>1.</td>
                        <td><a href='/support/edu/website-design/using-php-and-mysql/how-to-create-a-custom-php-contact-form?tsrc=rsbedu'>How to create a custom PHP contact form with validation</a></td>
                </tr>
          <tr >
                        <td valign='top'>2.</td>
                        <td><a href='/support/edu/website-design/using-php-and-mysql/database-setup?tsrc=rsbedu'>Setting up a database to handle form data from a website</a></td>
                </tr>
          <tr >
                        <td valign='top'>3.</td>
                        <td><a href='/support/edu/website-design/using-php-and-mysql/create-html-form?tsrc=rsbedu'>Creating a simple HTML Form to get user comments</a></td>
                </tr>
          <tr >
                        <td valign='top'>4.</td>
                        <td><a href='/support/edu/website-design/using-php-and-mysql/using-php-include-function?tsrc=rsbedu'>Using the php include function to reuse code</a></td>
                </tr>
          <tr >
                        <td valign='top'>5.</td>
                        <td><a href='/support/edu/website-design/using-php-and-mysql/php-insert-database?tsrc=rsbedu'>Using PHP to INSERT data into a database</a></td>
                </tr>
          <tr >
                        <td valign='top'>6.</td>
                        <td><a href='/support/edu/website-design/using-php-and-mysql/stepping-through-our-php-code?tsrc=rsbedu'>Reviewing sample PHP code that interacts with a MySQL Database</a></td>
                </tr>
          <tr style='border-top:1px solid #bbb; border-bottom:1px solid #bbb; background:#eee;'>
                        <td valign='top'>7.</td>
                        <td><a href='/support/edu/website-design/using-php-and-mysql/grab-all-comments-from-database?tsrc=rsbedu'>How to use PHP to connect to and retrieve data from MySQL</a></td>
                </tr>
          	</table>
		
		</div>
			<div class="moduletable">
						
                <h3>Related Questions</h3>
                <div>Here are a few questions related to this article that our customers have asked:</div>
        
				<div style='margin:10px 0px;'>
                                        <a href='/support/community-support/databases/get-data-from-mysql?tsrc=rsbraq'>How to Get Data from MySQL</a>
                                </div>
			
				<div style='margin:10px 0px;'>
                                        <a href='/support/community-support/billing/how-their-comment-will-immediately-post-in-the-website?tsrc=rsbraq'>how their comment will  immediately post in the website</a>
                                </div>
			
				<div style='margin:10px 0px;'>
                                        <a href='/support/community-support/website-design/i-need-info-on-how-to-use-mysql-with-php-for-connecting-of-data?tsrc=rsbraq'> i need info on how to use mysql with php for connecting of data </a>
                                </div>
			
				<div style='margin:10px 0px;'>
                                        <a href='/support/community-support/databases/need-mysql-query-help?tsrc=rsbraq'>Need MySQL query help</a>
                                </div>
			
				<div style='margin:10px 0px;'>
                                        <a href='/support/community-support/website-design/connect-frontend-with-backend-coding?tsrc=rsbraq'>I can't connect my frontend with my backend coding</a>
                                </div>
			
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



		<a name='comment-12246'></a>
		<div  style='margin:0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/de8467683b3d8031100ac57e375e98bb?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/de8467683b3d8031100ac57e375e98bb'>Simon</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-02 3:40 am</div>
				                <div><p>Am a programmmer who would wish to have a text box similar to this of yours, that is were users can edit their text. I would be very grateful if you help me either with codes or how to write it. Thankyou in advance</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(12246);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-12503'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-08 2:49 pm</div>
				                <div>Hello Simon, <br />
<br />
Thanks for the question.  I'm not sure what you're asking exactly, but the code provided above shows how to create the query to the database.  If you're trying to create a text editor in PHP, that's a very different task.  We don't provide a tutorial to do that.  However, there are many solutions already available for this.  If you want a good third-party solution, check out <a href="http://www.tinymce.com/" rel="nofollow" target="_blank">TinyMCE</a>.  You can probably find a good instructional on programming a text editor by simply searching with a your favorite search engine.  However, most of the entries on the subject suggest using existing solutions.  <br />
<br />
I hope that helps to answer your question!  Please let us know if you require any further information.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(12503);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-12502'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/5a4a81f314d66f1addceec22dbba6b02?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/5a4a81f314d66f1addceec22dbba6b02'>arun</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-08 2:04 pm</div>
				                <div><p>very good</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(12502);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13147'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/73fd615b0b30f982685227a32c2be960?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/73fd615b0b30f982685227a32c2be960'>roopa</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-22 9:03 am</div>
				                <div><p>HI, please help me</p>
<p>In stock file have following fields&nbsp;</p>
<p>-SKU</p>
<p>-Model these 5 field from xml file&nbsp;</p>
<p>-Quantity</p>
<p>-status</p>
<p>-price</p>
<p>-special price(have a formula for this)</p>
<p>-shipping cost(have a formula for this)</p>
<p>-allow cod(have a formula for this)</p>
<p>we are doing manually importing daily in our admin page.but we need automatically for reducing time. I have loaded xml file data to database(mysql 5.6).but now am struck next step is what? how to import from database.Am using php.So please help me.I need guide for this</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13147);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13157'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-22 11:50 am</div>
				                <div>Hello Roopa,<br />
<br />
I am unsure exactly of  what you are asking. It sounds as if you have gotten XML data into the database. I am unsure what you are looking to happen after that. Please understand that we do not take on coding projects and any coding samples we give are very simple. Many will need to be enhanced or modified to perform specific functions.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13157);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-30778'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/3e32167e3cf5940bc5e0012914f038e0?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/3e32167e3cf5940bc5e0012914f038e0'>vishwen</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-02-24 3:41 am</div>
				                <div><ul>
<li>Nice article. My problem is i'm using php, need to retreive data from 2 diferent database and check if they are equal using oracle as database.</li>
</ul></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(30778);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13368'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/b264634875ea005771edd089fbc1230a?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/b264634875ea005771edd089fbc1230a'>Rohit</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-27 4:05 am</div>
				                <div>Excellent Article!! It is very simple to understand and easy to follow steps. Best article ever I have found on the web.. Great work!! Thank you so much!!</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13368);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13455'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/fa7d84c2f4d09edb684ddd4f72fc4ac6?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/fa7d84c2f4d09edb684ddd4f72fc4ac6'>Lyndsey</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-30 5:56 am</div>
				                <div><p>Thank you so much for this helpful tutorial series, I've always wanted to get into PHP but it just made my mind boggle. Your articles have been so informative and easy to follow. Please do you have any more????</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13455);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13579'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/716f9a7c2f0e17addae9fdc6f0e449a7?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/716f9a7c2f0e17addae9fdc6f0e449a7'>Ali Haider</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-08-03 4:03 am</div>
				                <div><p>excuse me i have an unfaimler problem with php documents.</p>
<p>i am excuting right query for selecting data from the database and for inseting data.</p>
<p>and they excuting well no error .</p>
<p>but data is not fatching from database and not inserting into database. i have writen your code also and many other. mysql service is also runing.</p>
<p>please answer me as soon as possible.</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13579);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13615'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-08-04 10:35 am</div>
				                <div>Hello Ali,<br />
<br />
Have you had the query print to the screen so you can check the queries that are running? Also, are you checking the return values for the queries to see if they are failing?<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13615);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13974'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/b4c20fcce272b8902f745c48b149d53a?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/b4c20fcce272b8902f745c48b149d53a'>mike</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-08-14 2:51 am</div>
				                <div><p>hi guys am also working on a project and am stuck at this point where i want to search an employees details from the database using their personal numbers as my primary key in the database.</p>
<p>its a single form which has several buttons for ADD,DELETE,UPDATE and SEARCH..... This will all be carried out by the Administrator ...... please kindly help me , the SEARCH BUTTON is just driving me crazy dont know if its in the coding or the database (phpmyadmin)</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13974);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13981'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-08-14 9:02 am</div>
				                <div>Hello Mike,<br />
<br />
It is impossible to diagnose an issue without code to see what is going on. And even then we can only spot syntactical or programmatic errors. Configuration errors, if there are any, are impossible to spot without server access.<br />
<br />
You may be able to find out the issue by printing out the query variable on the page so you can see the exact query being sent to the database. Once you get that, take it to phpmyadmin and play with it until you get the results you want. After determining the exact query you need, change the code so it creates the query in the proper manner. It will then be able to pull up the data for you.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13981);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13985'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/b4c20fcce272b8902f745c48b149d53a?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/b4c20fcce272b8902f745c48b149d53a'>mike</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-08-14 9:45 am</div>
				                <div><p>&lt;div id="content"&gt;</p>
<p>&lt;p&gt;Carry out activities on the Employee Details!&lt;/p&gt;</p>
<p>&lt;form name="frmLogin" method="post" onsubmit="return validateForm();" &gt;</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;strong&gt;P_NO:&lt;/strong&gt;&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp &lt;input type="text" id="txtPno" name="txtPno" placeholder="" &nbsp;size="25" required&gt;&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp &lt;button type="submit" SIZE="40" name="search" class="btn btn-info" onclick="disable_text(text);"&gt;LOOK&lt;/button&gt;&lt;br&gt;&lt;br&gt;</p>
<p>&lt;strong&gt;F_name:&lt;/strong&gt;&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp &lt;input type="text" id="txtFname" name="txtFname" placeholder="" size="25" required&gt;&lt;br&gt;&lt;br&gt;</p>
<p>&lt;strong&gt;S_name:&lt;/strong&gt;&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp &lt;input type="text" id="txtSname" name="txtSname" placeholder="" size="25"required&gt;&lt;br&gt;&lt;br&gt;</p>
<p>&lt;strong&gt;Department:&lt;/strong&gt;</p>
<p>&lt;select name="Department" size="1"&gt;</p>
<p>&lt;option value="ICT"&gt;ICT&lt;/option&gt;</p>
<p>&lt;option value="ACCOUNTS"&gt;ACCOUNTS&lt;/option&gt;</p>
<p>&lt;option value="INVESTMENT &amp; BUSINESS &nbsp;"&gt;INVESTMENT &amp; BUSINESS&lt;/option&gt;</p>
<p>&lt;option value="PLANNING"&gt;PLANNING&lt;/option&gt;</p>
<p>&lt;option value="SUPPLIES &amp; PROCUREMENT"&gt;SUPPLIES &amp; PROCUREMENT&lt;/option&gt;</p>
<p>&lt;option value="ADMINISTRATION"&gt;ADMINISTRATION&lt;/option&gt;</p>
<p>&lt;option value="REGISTRY"&gt;REGISTRY&lt;/option&gt;</p>
<p>&lt;option value="AUDITRY"&gt;AUDITRY&lt;/option&gt;</p>
<p>&lt;/select&gt; &lt;br&gt;&lt;br&gt;</p>
<p>&lt;strong&gt;Password:&lt;/strong&gt;&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp &lt;input type="text" id="txtPassword" name="txtPassword" placeholder="" size="25" &nbsp;required&gt;&lt;br&gt;&lt;br&gt;</p>
<p>&lt;strong&gt;Balance:&lt;/strong&gt;&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp &lt;input type="text" id="txtBalance" name="txtBalance" placeholder="" size="25" required&gt;&lt;br&gt;&lt;br&gt;</p>
<p>&lt;strong&gt;Forward:&lt;/strong&gt;&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp &lt;input type="text" id="txtForward" name="txtForward" placeholder="" size="25" &nbsp;required&gt;&lt;br&gt;&lt;br&gt;</p>
<p>&lt;strong&gt;Allowance:&lt;/strong&gt;&amp;nbsp&amp;nbsp &lt;input type="text" id="txtAllowance" name="txtAllowance" placeholder="" size="25" &nbsp;required&gt;&lt;br&gt;&lt;br&gt;</p>
<p>&lt;strong&gt;Resumption:&lt;/strong&gt; &lt;input type="text" id="txtResumption" name="txtResumption" placeholder="" size="25" &nbsp;required&gt;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;</p>
<p>&lt;button type="submit" SIZE="40"name="add" class="btn btn-info" onclick="disable_text(text);"&gt;ADD&lt;/button&gt;&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp</p>
<p>&lt;button type="submit" SIZE="40"name="register" class="btn btn-info" onclick="disable_text(text);"&gt;UPDATE&lt;/button&gt;&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp</p>
<p>&lt;button type="submit" SIZE="40"name="register" class="btn btn-info" onclick="disable_text(text);"&gt;DELETE&lt;/button&gt;&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbsp</p>
<p>&lt;button type="submit" SIZE="40"name="register" class="btn btn-info" onclick="disable_text(text);"&gt;SAVE&lt;/button&gt;&lt;br&gt;&lt;br&gt;&lt;hr&gt;&lt;a href="/support/top.php"&gt;&lt;strong&gt;HOME&lt;/strong&gt;&lt;/a&gt;</p>
<p>&lt;BR&gt;&lt;BR&gt;&lt;button onclick="history.go(-1);"&gt;Back &lt;/button&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</p>
<p>&nbsp;</p>
<p>&lt;?PHP</p>
<p>if (isset($_POST['add'])){</p>
<p>$fname=$_POST['txtFname'];</p>
<p>$sname=$_POST['txtSname'];</p>
<p>$department=$_POST['Department'];</p>
<p>$pno=$_POST['txtPno'];</p>
<p>$password=$_POST['txtPassword'];</p>
<p>$ldb=$_POST['txtBalance'];</p>
<p>$dbf=$_POST['txtForward'];</p>
<p>$ela=$_POST['txtAllowance'];</p>
<p>$edr=$_POST['txtResumption'];</p>
<p>&nbsp;</p>
<p>mysql_query("insert into employee (F_name,S_name,Department,P_NO,Password,Balance,Bforward,Allowance,Resumption) values('$fname','$sname','$department','$pno','$password','$ldb','$dbf','$ela','$edr')")or die(mysql_error());</p>
<p>}</p>
<p>&nbsp;</p>
<p>if (isset($_POST['search'])){</p>
<p>&nbsp;</p>
<p>$result = mysql_query("SELECT * FROM `employee` WHERE `P_NO`==='$pno'");</p>
<p>while($row = mysql_fetch_array($result))</p>
<p>{</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; echo "&lt;input type='text' id='txtF' value='$fname' /&gt;";</p>
<p>&nbsp; &nbsp; echo "&lt;input type='text' id='txtS' value='$sname' /&gt;";</p>
<p>&nbsp; &nbsp; echo "&lt;input type='text' id='D' value='Department' /&gt;";</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; echo "&lt;input type='text' id='txtP' value='$password' /&gt;";</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; echo "&lt;input type='text' id='txtB' value='$ldb' /&gt;";</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; echo "&lt;input type='text' id='txtF' input value='$dbf' /&gt;";</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; echo "&lt;input type='text' id='txtA' value='$ela' /&gt;";</p>
<p>echo "&lt;input type='text' id='txtR' value='$edr' /&gt;";</p>
<p>&nbsp;</p>
<p>}</p>
<p>}</p>
<p>?&gt;&nbsp;</p>
<p>&lt;/form&gt;</p>
<p>&lt;/body&gt;&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>thats the portion i want to work on...... the add section is working well but when i try to search for the same employees' details using the P_NO as the primary key it does not display in the textboxes that are there.</p>
<p>i want the same details that i insert in the database to be displayed again when i click the search button.</p>
<p>please help</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13985);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13993'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-08-14 11:07 am</div>
				                <div>Hello Mike,<br />
<br />
I did see an issue with the query, it is using the === evaluator in the MySQL. MySQL does not recognize that, it simply uses a single =. Give that a try and you may see the results you are looking for.  <br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13993);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-14011'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/b4c20fcce272b8902f745c48b149d53a?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/b4c20fcce272b8902f745c48b149d53a'>mike</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-08-15 1:46 am</div>
				                <div><p>thanks Scott for your time. i have changed that and already got to the page and entered&nbsp;the P_NO but when i click the search button there is a pop up that tells me to "! fill out this field" just at the lower textboxes..... i dont understand why.</p>
<p>please assist &nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(14011);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-14019'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-08-15 8:32 am</div>
				                <div>Hello Mike,<br />
<br />
All of your fields in the form end with "required>". This is a built in function of HTML5 that requires something to be entered in those fields before it will allow the processing to continue. <br />
<br />
If that will be an issue, you will likely need to remove the  <em>required</em> option and then do the validation programmatically with javascript on the front end and php on the back end.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(14019);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-14188'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/97cff7f585ec9b043fc292f244ebf4c7?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/97cff7f585ec9b043fc292f244ebf4c7'>Yasir iqbal</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-08-21 2:36 am</div>
				                <div><p>is there any alternate for include stament becz i try all exmple of include but no one is working.... plz help</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(14188);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-14198'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-08-21 7:55 am</div>
				                <div>Hello Yasir,<br />
<br />
Try using the following format instead:<br />
<div class="code_block">&lt;? include 'vars.php'; ?&gt;</div><br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(14198);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-14240'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/7f6cb421cda307d84fc2e8cbd7049918?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/7f6cb421cda307d84fc2e8cbd7049918'>james karekwera</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-08-22 8:23 am</div>
				                <div><p>help me with the msqli version :)</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(14240);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-14243'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-08-22 9:12 am</div>
				                <div>Hello James,<br />
<br />
We can certainly update the article, but if you have any questions now, please let us know so we can assist.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(14243);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-14266'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/494bbc5a6ba8426d82419958fb90e26f?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/494bbc5a6ba8426d82419958fb90e26f'>rajendra</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-08-23 2:35 pm</div>
				                <div>hello
i create a oun website back end control pannel and admin control dash board banner management mysql database connectivity my databse is colzim
please help me and&nbsp; give me instruction</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(14266);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-14293'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-08-25 10:45 am</div>
				                <div>Hello Rajendra,<br />
<br />
I am unsure exactly what you are asking for. Please try to rephrase your question just a bit so we can understand what you are asking and we will be happy to try and assist you.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(14293);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-14717'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/35b7e3d2a84ed960efbbf5760c32388f?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/35b7e3d2a84ed960efbbf5760c32388f'>GODFREY ESEBAMEN</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-09-04 12:53 pm</div>
				                <div><p>Sir,</p>
<p>Kindly assist in me in writing a code to select data from mysql database and to the display the result in the a simple html form. Note I have done this but it is prompting an error. I want the select criterion to be available for make in html form.</p>
<p>The code I wrote is below.</p>
<p>&nbsp;</p>
<p>&lt;?php</p>
<p>&nbsp;</p>
<p>$mysqli = new mysqli("localhost", "root", "", "godfrey1");</p>
<p>&nbsp;</p>
<p>/* check connection */</p>
<p>if (mysqli_connect_errno()) {</p>
<p>&nbsp; &nbsp; printf("Connect failed: %s\n", mysqli_connect_error());</p>
<p>&nbsp; &nbsp; exit();</p>
<p>}</p>
<p>$src=mysqli_real_escape_string($con,$_POST['search']);</p>
<p>&nbsp;</p>
<p>$query = "SELECT lname, fname FROM quiztest2 WHERE lname='$src';</p>
<p>&nbsp;</p>
<p>if ($result = $mysqli-&gt;query($query)) {</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; /* fetch object array */</p>
<p>&nbsp; &nbsp; while ($row = $result-&gt;fetch_row()) {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; printf ("%s (%s)\n", $row[0], $row[1]);</p>
<p>&nbsp; &nbsp; }</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; /* free result set */</p>
<p>&nbsp; &nbsp; $result-&gt;close();</p>
<p>}</p>
<p>&nbsp;</p>
<p>/* close connection */</p>
<p>$mysqli-&gt;close();</p>
<p>?&gt;&nbsp;</p>
<p>&nbsp;</p>
<p>Please I need you to help me edit or better still give a guide to solving this.</p>
<p>Hoping to hear from you soon sir.</p>
<p>Regards.</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(14717);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-14719'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-09-04 1:25 pm</div>
				                <div>Could you provide me with the exact error you are receiving?</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(14719);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-15151'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/c58af3eb39a862b446b2ece79f8243fd?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/c58af3eb39a862b446b2ece79f8243fd'>Jona</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-09-17 5:38 pm</div>
				                <div><p>Very Useful tutorial thanks!</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(15151);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-31524'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/8e81b5b1457adc68883b264304de7bfd?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/8e81b5b1457adc68883b264304de7bfd'>sss</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-03-29 6:38 am</div>
				                <div><p>yes you are right</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(31524);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-17683'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/d474b9f2c67582261db1a65af484f2df?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/d474b9f2c67582261db1a65af484f2df'>Ryan </a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-11-20 10:59 pm</div>
				                <div><p>When i run the code i get <strong>Warning</strong>: mysql_fetch_assoc() expects parameter 1 to be resource, boolean given in <strong>C:\xampp\htdocs\project\News.php</strong> on line <strong>120</strong></p>
<p><strong>This is the php code that i execute:</strong></p>
<p>&nbsp;</p>
<p><strong>&lt;?php</strong></p>
<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;$con = mysql_connect("localhost","beatshare","beatshare");&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;if (!$con)&nbsp;&nbsp;&nbsp;&nbsp;{&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; die('Could not connect: ' . mysql_error());&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;mysql_select_db("comments", $con);</strong></p>
<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;$query = "SELECT * FROM `comments` ORDER BY id DESC ";</strong></p>
<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;$comments = mysql_query($query);</strong></p>
<p>&nbsp;</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;while($row = mysql_fetch_assoc($comments, MYSQL_ASSOC))&nbsp;&nbsp;&nbsp;&nbsp;{&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $name = $row['name'];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $email = $row['email'];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $comment = $row['comment'];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $name = htmlspecialchars($row['name'],ENT_QUOTES);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $email = htmlspecialchars($row['email'],ENT_QUOTES);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $comment = htmlspecialchars($row['comment'],ENT_QUOTES);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo "&nbsp; &lt;div style='margin:30px 0px;'&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name: $name&lt;br /&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email: $email&lt;br /&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Comment: $comment&lt;br /&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";&nbsp;&nbsp;&nbsp;&nbsp;}</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mysql_close($con);</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;?&gt;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(17683);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-17698'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-11-21 9:25 am</div>
				                <div>Hello Ryan,<br />
<br />
When running the command from your mysql command line does it work correctly? It almost sounds like your query is returning nothing and the file was not setup to handle results that are empty.<br />
<br />
Kindest Regards,<br />
TJ Edens</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(17698);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18102'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/cfd47091a06cff334d11e646266fa714?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/cfd47091a06cff334d11e646266fa714'>Marty</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-03 2:29 am</div>
				                <div><p></p>
<p></p>
<p class="MsoNormal">This is a great tutorial!&nbsp; Especially for people like myself that have no experience!&nbsp;&nbsp;&nbsp; I'm looking forward to creating the various steps for my website.&nbsp;&nbsp;&nbsp; I'm curious to know of it would be difficult to add in the ability for an email to be triggered to an address when someone adds a comment to the webpage?&nbsp; It would be ideal if the email included the person's name and comment but even just an email to alert me that someone has added a post would be a great benefit.&nbsp;&nbsp;&nbsp; I didn't see a tutorial for this - and I don't know how complicated it would be to add - esp for a beginner like myself!</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18102);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18112'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-03 10:21 am</div>
				                <div>Hey Marty,<br />
<br />
That is very possible, however it would take some coding knowledge to make the changes. We do not have a tutorial currently for that, but I will add it to our list as I think it would be a good addition to the articles.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18112);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-19065'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/664685f4926f268a5178052ceb119b45?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/664685f4926f268a5178052ceb119b45'>Sam</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-31 4:00 pm</div>
				                <div><p>First off thank you so much for this tutorial! It worked perfectly! &nbsp;</p>
<p>I got everything to work as it should, but I've been trying to figure out how save words into the articleid field in the database. &nbsp;I changed the type to varchar and if I go to some id=a, for example, it gives me an error: "Warning: mysql_fetch_assoc() expects parameter 1 to be resource, boolean given in /home/user/public_html/display_comments.php on line 18." &nbsp;It does, however, write to the database, because when I go there I can see a under articleid. &nbsp;But the comments for that won't display and the same error occurs. &nbsp;How to I alter the code so I can save and display the articleid as words without getting this error? &nbsp;Currently I'm limited to just numeric values.</p>
<p>Thanks!</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(19065);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-19066'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-31 4:22 pm</div>
				                <div>Hello,<br />
<br />
Thanks for the question.  The article provides you some basic functionality, but providing modifications for other purposes is typically beyond the scope of the support center.  The <i>articleid</i> used in multiple locations with the code and is expected by the code to be a certain format.  Since you altered it you caused a  resulting "ripple effect"  because multiple lines of code no longer work as per the original intent.  If you want to save data, then you should add another variable that you can assign to save as a word.  <br />
<br />
Apologies, but we cannot provide the code for your changes as it is beyond our scope., but you be might find more information by learning about <a href="http://www.codecademy.com/en/tracks/php" rel="nofollow" target="_blank">PHP coding here</a>.  <br />
<br />
Kindest regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(19066);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-19150'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/f896d09ddbc0221a10ff9925ae43c21f?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/f896d09ddbc0221a10ff9925ae43c21f'>david</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-01-03 3:18 pm</div>
				                <div><p>Hi, I Have created a calendar for my websites which display the events in the calendar but What I am looking for now is once the user logged in to their account I would like to display the events that the user has signed up for the events in the side of the calendar not all the events in the text box just that the user has signed up for. Do you have any ideas how do i do this by using php code?</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(19150);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-19196'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-01-05 12:49 pm</div>
				                <div>Hello David,<br />
<br />
I am not able to give a specific code example here as I do not know how you have coded so far and do not know your database structure, but I can provide the concept. When a user logs in, they likely have a userid. This is likely tied to the specific events the user has signed up for. On the calendar, simply only display the events that come from the database linked to that userid. This will then allow the user to only view the events they have signed up for.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(19196);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-19918'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/5c78befd8f7309de2cb7aae5b552c20b?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/5c78befd8f7309de2cb7aae5b552c20b'>M</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-01-25 1:07 pm</div>
				                <div><p>hello sir! i'm very much worried how to display specific information like i have the list of students with their information in the databse what im going to display is that when i click specific student i can only view his/ her information but what i have here is all the infomation of all students from the database. im very confuse how to display only one student info. please help me</p>
<p>&nbsp;</p>
<p>example for more clear:</p>
<p>STUDENT LIST'S</p>
<p>Kennedy Kim (once i click this one)</p>
<p>Hannah yang</p>
<p>Gyle Wang</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>(this should be the result)</p>
<p>student info</p>
<p>name:Kennedy Kim</p>
<p>age: 19</p>
<p>address: america</p>
<p>&nbsp;</p>
<p>&nbsp;i hope you reply my defense is on friday JAn. 30,2015 i need it as soon as possible.thank u in advance</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(19918);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-19958'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-01-26 12:06 pm</div>
				                <div>Hello M,<br />
<br />
To pull information on a specific student,  you will structure your SQL Query to pull only for that particular student. This is normally done by looking for the student's ID number. For exampe:<br />
<br />
Student ID: 101<br />
Last Name: Kennedy <br />
First Name: Kim<br />
<br />
Student ID: 102<br />
Last Name: Yang<br />
First Name: Hannah<br />
<br />
<br />
Student ID: 102<br />
Last Name: Wang<br />
First Name: Gyle<br />
<br />
When you click on the name, the ID would also be there (maybe a hidden field on the page) and that would be used to customize the query for the database:<br />
<br />
Select * from students where studentID = 101;  (would bring info on Kennedy Kim)<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(19958);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-19987'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/694b56b3ae5236811c9343d7ff7bc47b?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/694b56b3ae5236811c9343d7ff7bc47b'>baxt01</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-01-26 8:57 pm</div>
				                <div><p>hi i have been trying to work on a code simular to this one for some time now and i am constantly hitting the same issue nowi fell like i am banging my head onto a brick wall</p>
<p>i have built&nbsp; a form and i have my DB and page to show my results</p>
<p>for some reason no matter which way i code the form nothing i enter into my form is reaching my DB i have tried 3 or 4 different types of tutorials to make this happen and still nothing is making it into my DB can you guys help me please</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(19987);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-19988'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-01-26 9:11 pm</div>
				                <div>Hello baxt01,<br />
<br />
What type of errors are you getting? Please provide the exact error text so that we may be able to assist you with any troubleshooting.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(19988);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-19992'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/48490eb90d9168f872e730cc6938a5b2?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/48490eb90d9168f872e730cc6938a5b2'>bien</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-01-26 11:11 pm</div>
				                <div><p>hi</p>
<p>i have been trying to work in my project i hope that anyone here can help in my code i cant execute the name of the column&nbsp;but the data in the row is already executed all i want to execute is they are line.in the field name here is my code</p>
<p>&lt;?php</p>
<p>$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server</p>
<p>$db = mysql_select_db("xxx", $connection); // Selecting Database</p>
<p>//MySQL Query to read data</p>
<p>$query = mysql_query("select * from Result", $connection);</p>
<p>while ($row = mysql_fetch_array($query)) {</p>
<p>echo "&lt;b&gt;id={$row['ID']}\"&gt;{$row['ProgramID']}\"&gt;{$row['ExamDate']}\"&gt;{$row['PassNat']}\"&gt;{$row['TakeNat']}\"&gt;{$row['PassFirst']}\"&gt;{$row['FailFirst']}\"&gt;{$row['CondFirst']}\"&gt;{$row['PassRetake']}\"&gt;{$row['FailRetake']}\"&gt;{$row['CondRetake']}\"&gt;&lt;/a&gt;&lt;/b&gt;";</p>
<p>echo "&lt;br/&gt;";</p>
<p>}</p>
<p>$query1 = mysql_query("select * from Result", $connection);</p>
<p>while ($row = mysql_fetch_array($query)) {</p>
<p>echo "&lt;b&gt;id={$row['ID']}\"&gt;{$row['ProgramID']}\"&gt;&gt;&lt;/a&gt;&lt;/b&gt;";</p>
<p>echo "&lt;br /&gt;";</p>
<p>}</p>
<p>?&gt;</p>
<p>&lt;/div&gt;</p>
<p>&lt;?php</p>
<p>if (isset($_GET['ID'])) {</p>
<p>$id = $_GET['ProgID'];</p>
<p>$query3 = mysql_query("select * from Result where ProgramID=$id", $connection);</p>
<p>while ($row1 = mysql_fetch_array($query1)) {</p>
<p>?&gt;</p>
<p>&lt;div class="form"&gt;</p>
<p>&lt;h2&gt;---Details---&lt;/h2&gt;</p>
<p>&lt;!-- Displaying Data Read From Database --&gt;</p>
<p>&lt;span&gt;ProgramID:&lt;/span&gt; &lt;?php echo $row1['ProgramID']; ?&gt;</p>
<p>&lt;span&gt;ExamDate:&lt;/span&gt; &lt;?php echo $row1['ExamDate']; ?&gt;</p>
<p>&lt;span&gt;PassNat:&lt;/span&gt; &lt;?php echo $row1['PasssNat']; ?&gt;</p>
<p>&lt;span&gt;TakeNat:&lt;/span&gt; &lt;?php echo $row1['TakeNat']; ?&gt;</p>
<p>&lt;span&gt;PassFirst:&lt;/span&gt; &lt;?php echo $row1['FailFirst']; ?&gt;</p>
<p>&lt;span&gt;FailFirst:&lt;/span&gt; &lt;?php echo $row1['PassFirst']; ?&gt;</p>
<p>&lt;span&gt;CondFirst:&lt;/span&gt; &lt;?php echo $row1['CondFirst']; ?&gt;</p>
<p>&lt;span&gt;PassRetake:&lt;/span&gt; &lt;?php echo $row1['PassRetake']; ?&gt;</p>
<p>&lt;span&gt;FailRetake:&lt;/span&gt; &lt;?php echo $row1['FailRetake']; ?&gt;</p>
<p>&lt;span&gt;CondRetake:&lt;/span&gt; &lt;?php echo $row1['CondRetake']; ?&gt;</p>
<p>&lt;/div&gt;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&lt;?php</p>
<p>}</p>
<p>}</p>
<p>?&gt;</p>
<p>&lt;?php</p>
<p>if (isset($_GET['ID'])) {</p>
<p>$id = $_GET['ID'];</p>
<p>$query3 = mysql_query("select * from Result where ProgramID=$id", $connection);</p>
<p>while ($row1 = mysql_fetch_array($query1)) {</p>
<p>?&gt;</p>
<p>&lt;div class="form"&gt;</p>
<p>&lt;h2&gt;---Details---&lt;/h2&gt;</p>
<p>&lt;!-- Displaying Data Read From Database --&gt;</p>
<p>&lt;span&gt;ID:&lt;/span&gt; &lt;?php echo $row1['ID']; ?&gt;</p>
<p>&lt;span&gt;ProgramID:&lt;/span&gt; &lt;?php echo $row1['ProgramID']; ?&gt;</p>
<p>&nbsp;</p>
<p>&lt;/div&gt;</p>
<p>&lt;?php</p>
<p>}</p>
<p>}</p>
<p>?&gt;</p>
<p>&lt;div class="clear"&gt;&lt;/div&gt;</p>
<p>&lt;/div&gt;</p>
<p>&lt;div class="clear"&gt;&lt;/div&gt;</p>
<p>&lt;/div&gt;</p>
<p>&lt;/div&gt;</p>
<p>&lt;?php</p>
<p>mysql_close($connection); // Closing Connection with Server</p>
<p>?&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p>&nbsp;</p>
<p>////and here is the output all i want is &nbsp;the output of ProgramID are line with the</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong style="font-family: 'Times New Roman'; font-size: medium;">BSCRIM &nbsp; &nbsp; &nbsp;</strong></p>
<p><strong style="font-family: 'Times New Roman'; font-size: medium;">sorry for my wrong grammar :)</strong></p>
<p>&nbsp;</p>
<p style="font-family: 'Times New Roman'; font-size: medium;">Click On Menu</p>
<p><strong style="font-family: 'Times New Roman'; font-size: medium;">id=1"&gt;BSCRIM"&gt;2014-06-01 00:00:00"&gt;1808"&gt;5022"&gt;2"&gt;4"&gt;0"&gt;1"&gt;1"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=3"&gt;BSArcht"&gt;2014-06-01 00:00:00"&gt;1100"&gt;1803"&gt;1"&gt;1"&gt;0"&gt;0"&gt;0"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=4"&gt;BSCE"&gt;2014-05-01 00:00:00"&gt;1862"&gt;4289"&gt;0"&gt;1"&gt;0"&gt;3"&gt;1"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=5"&gt;BSCRIM"&gt;2014-04-01 00:00:00"&gt;4688"&gt;13873"&gt;14"&gt;23"&gt;0"&gt;12"&gt;116"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=6"&gt;BSECE"&gt;2014-03-01 00:00:00"&gt;907"&gt;2574"&gt;0"&gt;0"&gt;1"&gt;0"&gt;4"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=7"&gt;BSECE"&gt;2014-09-01 00:00:00"&gt;1532"&gt;4851"&gt;3"&gt;6"&gt;2"&gt;3"&gt;1"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=9"&gt;BEEDM"&gt;2014-01-26 00:00:00"&gt;11120"&gt;38377"&gt;3"&gt;2"&gt;0"&gt;13"&gt;13"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=10"&gt;BEEDT"&gt;2014-01-26 00:00:00"&gt;11120"&gt;38377"&gt;6"&gt;1"&gt;0"&gt;6"&gt;24"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=11"&gt;BEEDC"&gt;2014-01-26 00:00:00"&gt;11120"&gt;38377"&gt;0"&gt;0"&gt;0"&gt;0"&gt;2"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=12"&gt;BSEDH"&gt;2014-01-26 00:00:00"&gt;12033"&gt;42538"&gt;0"&gt;1"&gt;0"&gt;0"&gt;8"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=13"&gt;BSEDM"&gt;2014-01-26 00:00:00"&gt;12033"&gt;42538"&gt;2"&gt;3"&gt;0"&gt;5"&gt;36"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=14"&gt;BSEDT"&gt;2014-01-26 00:00:00"&gt;12033"&gt;42538"&gt;7"&gt;1"&gt;0"&gt;4"&gt;6"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=15"&gt;BSME"&gt;2014-10-01 00:00:00"&gt;2960"&gt;3841"&gt;1"&gt;0"&gt;0"&gt;0"&gt;0"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=16"&gt;BSEE"&gt;2014-02-01 00:00:00"&gt;574"&gt;1648"&gt;0"&gt;1"&gt;0"&gt;0"&gt;4"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=17"&gt;BSEE"&gt;2014-09-01 00:00:00"&gt;2190"&gt;3661"&gt;3"&gt;3"&gt;0"&gt;0"&gt;5"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=19"&gt;BEEDM"&gt;2014-08-17 00:00:00"&gt;25301"&gt;70786"&gt;97"&gt;20"&gt;0"&gt;0"&gt;27"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=20"&gt;BEEDT"&gt;2014-08-17 00:00:00"&gt;25301"&gt;70786"&gt;36"&gt;20"&gt;0"&gt;1"&gt;32"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=21"&gt;BEEDC"&gt;2014-08-17 00:00:00"&gt;25301"&gt;70786"&gt;14"&gt;2"&gt;0"&gt;0"&gt;3"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=22"&gt;BSAg"&gt;2011-07-01 00:00:00"&gt;1085"&gt;2962"&gt;2"&gt;1"&gt;0"&gt;1"&gt;1"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=23"&gt;BSCE"&gt;2011-05-01 00:00:00"&gt;1195"&gt;3117"&gt;0"&gt;1"&gt;0"&gt;1"&gt;0"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=24"&gt;BEEDM"&gt;2011-04-03 00:00:00"&gt;5221"&gt;33023"&gt;3"&gt;1"&gt;0"&gt;10"&gt;36"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=25"&gt;BEEDT"&gt;2011-04-03 00:00:00"&gt;0"&gt;0"&gt;2"&gt;6"&gt;0"&gt;3"&gt;20"&gt;0"&gt;</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">id=26"&gt;BEEDM"&gt;"&gt;0"&gt;0"&gt;0"&gt;0"&gt;0"&gt;0"&gt;0"&gt;0"&gt;</strong></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(19992);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-20001'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-01-27 9:45 am</div>
				                <div>Unfortunately, I'm not exactly sure what you're trying to do.  Could you clarify?</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(20001);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-20082'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/b539adbc03aba4563cb334a32802babd?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/b539adbc03aba4563cb334a32802babd'>Suneet Pant</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-01-29 2:05 am</div>
				                <div>The explaination was good and quiet easy</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(20082);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-20360'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/78e5696d814809a4768e31f9132fc85f?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/78e5696d814809a4768e31f9132fc85f'>Jof Davies</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-02-04 11:16 am</div>
				                <div><p>I'm using similar code to create a news blog for my site that only I write.</p>
<p>&nbsp;</p>
<p>How can I add a function to ask for a Username and Password to be checked before a post can be submitted?</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(20360);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-20371'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-02-04 1:54 pm</div>
				                <div>Hello Jof Davies,<br />
<br />
Thanks for the question.  We don't really provide code for this type of thing, but we can't point you in the direction of a resource that may help.  Checkout this <a href="http://www.html-form-guide.com/php-form/php-login-form.html" rel="nofollow" target="_blank">guide on creating a login page</a>.  This should give you some direction on what you are trying to create.<br />
<br />
I hope this helps to answer your question, please let us know if you require any further  assistance.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(20371);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-20393'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/78e5696d814809a4768e31f9132fc85f?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/78e5696d814809a4768e31f9132fc85f'>Jof Davies</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-02-05 5:45 am</div>
				                <div><p>Thanks for your comment. Will check it out!</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(20393);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-20641'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/048ea77528fb2d69a989790637644cb7?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/048ea77528fb2d69a989790637644cb7'>Hesam Marshal</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-02-13 10:00 am</div>
				                <div>It is very interesting if you add Editing option (update) to this article and also speak about unicode for other languages.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(20641);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-21526'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/1186aa964f05d48855e130b7e7cf2f61?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/1186aa964f05d48855e130b7e7cf2f61'>alphas kakuko</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-03-10 8:05 am</div>
				                <div>very nice article</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(21526);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-22198'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/c58a67a81780b76987ebc253b81e8595?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/c58a67a81780b76987ebc253b81e8595'>pritesh</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-03-31 2:50 am</div>
				                <div><p>plz anyone i need help ... i am new to php n mysql .and i hv to creat a daily planner report it wil b very great if you could help me out...</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(22198);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-22208'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-03-31 9:36 am</div>
				                <div>Hello Pritesh,<br />
<br />
Unfortunately we are not able to provide code for custom coding solutions, however if you have specific issues with code not performing properly then we are more than happy to look into it for you.<br />
<br />
Best Regards,<br />
TJ Edens</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(22208);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-23372'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/0d1b700de07590080e884babd92f37fd?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/0d1b700de07590080e884babd92f37fd'>walaa</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-05-12 2:48 pm</div>
				                <div><p>please hlep me&nbsp;</p>
<p><span style="color: rgb(35, 35, 35); font-family: adelle-sans, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 22px;">When i run the code i get&nbsp;</span><strong style="color: rgb(35, 35, 35); font-family: adelle-sans, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 22px;">Warning</strong><span style="color: rgb(35, 35, 35); font-family: adelle-sans, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 22px;">:</span></p>
<p><span style="font-family: sans-serif; font-size: 13.1199998855591px; background-color: rgb(255, 192, 203);">mysql_fetch_assoc() expects parameter 1 to be resource, boolean given in C:\xampp\htdocs\lab3.php on line 66</span></p>
<p><span style="font-family: sans-serif; font-size: 13.1199998855591px; background-color: rgb(255, 192, 203);"><strong style="color: rgb(35, 35, 35); font-family: adelle-sans, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 22px; background-color: rgb(255, 255, 255);">This is the php code that i execute:</strong></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>//connection</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>$connection=mysqli_connect( $db_localhost , $db_username , $db_userpassword , $db_name );</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>if (! $connection) {</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp; &nbsp; die("Connection failed: " . mysqli_connect_error());</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>}</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>//select DB</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>mysql_select_db($db_name);</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>//validation</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>if(isset($_POST["id"]) &amp;&amp; isset($_POST["name"]) &amp;&amp; isset($_POST["gender"]) &amp;&amp; isset($_POST["email"]) &amp;&amp; isset($_POST["telephone"]) &amp;&amp; isset($_POST["picture"]))</strong></span></span></p>
<p>&nbsp;</p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>{ $id=$_POST["id"];</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;$name=$_POST["name"];</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;$gender=$_POST["gender"];</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;$email=$_POST["email"];</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;$telephone=$_POST["telephone"];</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;$picture=$_POST["picture"];</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;//query</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;$query="INSERT INTO student values('".$id."','".$name."','".$gender."','".$email."','".$telephone."','".$picture."')";</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;//echo $query;</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;$result=mysqli_query($connection, $query);</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;if ($result) {</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp; &nbsp; echo "New record created successfully";</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>} else {</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp; &nbsp; echo "Error: " . $query . "&lt;br&gt;" . mysqli_error($connection);</strong></span></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>//echo $result;</strong></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;while($row= mysql_fetch_assoc($result))</strong></span></span></p>
<p><strong>{</strong></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;echo $row['ID'];</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;echo $row['Name'];</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;echo $row['Gender'];</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;echo $row['Email'];</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;echo $row['Telephone'];</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;echo $row['Picture'];</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;}</strong></span></span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>}</strong></span></span></p>
<p>&nbsp;</p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif;"><span style="font-size: 13px; line-height: 22px;"><strong>&nbsp;</strong></span></span></p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(23372);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-23374'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-05-12 3:08 pm</div>
				                <div>Hello Walaa,<br />
<br />
Try putting the following code right before the while command that fetches the mysql results: "echo mysql_error()". Pretty much something is failing to cause the query to return false instead of the row information.<br />
<br />
Best Regards,<br />
TJ Edens</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(23374);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-23472'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/fb236dd0273f8cafb5754357f61b1269?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/fb236dd0273f8cafb5754357f61b1269'>Alex</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-05-17 8:22 pm</div>
				                <div><h2 style="text-align: center;">Love the code was able to get everything to work. 2 questions</h2>
<p>Is there a way to make the most recent comments appear on top of the list just under the comment box while keeping the comment box at the very top? I placed the display code under the formcode to keep the box on top but the newest comments appear at the bottom.</p>
<p style="text-align: center;"><strong>Also,</strong></p>
<p>I noticed when I leaving a comment and a thank you comes up, if refresh the page</p>
<p>the comment duplicates on the html page and the database. Is there a way to prevent this?</p>
<p>- -</p>
<p><em><strong>Note;</strong> I noticed people can click on the submit button with blank form and it will process a blank comment and store it in the data base. I can write the security code to prevent that. Just wanted people to know in case they get the occasional moron wanting to click submit 20 million times. It'd be a lot of wasted space.</em></p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(23472);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-23516'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-05-18 5:00 pm</div>
				                <div>Hello ALex,<br />
<br />
Simply alter the query to retrieve and order by the timestamp in descending order.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(23516);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-23732'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/6a0008fa55a8216d369b3e723ca3ef04?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/6a0008fa55a8216d369b3e723ca3ef04'>Asif</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-05-27 5:09 am</div>
				                <div><p>How Can i retrieve data from mysql using table?</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(23732);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-23802'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-05-29 10:02 am</div>
				                <div>Hello Asif,<br />
<br />
The code above shows how to get the data already.  If you're going to use a table, it will be something you format and fill with the data that you retrieve.  We can't provide that code for you.  If you're unable to code it yourself, then you may want to consult with a programmer/developer.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(23802);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-23922'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/374fbd22c03f001a4de83f47ba7a55c0?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/374fbd22c03f001a4de83f47ba7a55c0'>Joseph</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-04 4:26 am</div>
				                <div><p>hello scott,</p>
<p>plss i need ur help am working a messaging system project in my school(jst like a database table interaction) bt am finding difficult to relate my table. the following are the table below:</p>
<p>student table</p>
<p>department table</p>
<p>staff table</p>
<p>inbox</p>
<p>draft</p>
<p>sent_msg</p>
<p>contact</p>
<p>user acct.</p>
<p>please help me wit the code and idea on how this is possible</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(23922);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-23954'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-04 2:20 pm</div>
				                <div>Hello Joseph,<br />
<br />
Thank you for contacting us. We are happy to help, but it is not clear what you are asking. When you say "<em>relate my table</em>" please provide more specific  information on what you are trying to accomplish.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(23954);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24014'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/374fbd22c03f001a4de83f47ba7a55c0?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/374fbd22c03f001a4de83f47ba7a55c0'>Joseph</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-08 5:49 am</div>
				                <div><p>hello John,</p>
<p>thank you for your reply. actualling am working on a mailing system project and what i want the system to do is to register new user, have a loging point to log user, and user logged in will have inbox, sent message, compose message, etc and logout option. the user can be able to send message to members of the system.</p>
<p>the difficulty am having is that how to structure the database to create account to each new user, login user, have him/her to send and receive message etc.</p>
<p>this are the table am about to create</p>
<p>student table: name, surname, registration number, email,dateofbirth, gender, student_id.</p>
<p>user atble:username, password, user_id</p>
<p>inbox:id, from,subject,timestamp,message.</p>
<p>draft table:id, draft.</p>
<p>sent message:to,subject,message,id.</p>
<p>contact table:nameid.</p>
<p>course table:course name,department,id.</p>
<p>before i forget each user will be givivng a format of hw thier username will look like.</p>
<p>also i dont understand how the data flow will be like.</p>
<p>i will be greatefull if my request is grant will urgency.</p>
<p>thanks</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24014);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24032'></a>
		<div  style='margin:2px 0px 0px 120px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-08 3:42 pm</div>
				                <div>Hello Joseph,<br />
<br />
Unfortunately we are not able to provide custom solutions. Do remember when building a relational database that you are looking to connect related tables with common keys. For example, you may have the user ID in the sent-message table to keep track of who sent what message. This column would not be a key column for the sent-messsage table but it is a primary key for the user table. This is a simplistic example, but one you must perform for each of the tables you want to relate.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24032);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24050'></a>
		<div  style='margin:2px 0px 0px 160px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/374fbd22c03f001a4de83f47ba7a55c0?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/374fbd22c03f001a4de83f47ba7a55c0'>Joseph</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-09 7:25 am</div>
				                <div><p>Thanks scott i realy appreciate for the feedback that am having from you guys, is a pleasure to me having a wonderful friends like you guys. have started the project(mailing system), jst creating some user table and designing the login interface for the registration. after that i will be creating tables for Mailbox etc any where am stuck i know you guys gat my back. thanks alot and God bless you allll. JOE SAY SO</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24050);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24066'></a>
		<div  style='margin:2px 0px 0px 200px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-09 1:17 pm</div>
				                <div>Hello Joseph,<br />
<br />
I would suggest mapping out the database and see how you want everything to work. After that if you need help with commands to create the tables we can help you but if you are not an experienced MySQL user then I would recommend using PHPMyAdmins Gui instead.<br />
<br />
Best Regards,<br />
TJ Edens</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24066);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24127'></a>
		<div  style='margin:2px 0px 0px 240px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/374fbd22c03f001a4de83f47ba7a55c0?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/374fbd22c03f001a4de83f47ba7a55c0'>Joseph</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-11 8:26 am</div>
				                <div><p>TJDens here are the structure of my tables bt the php code to execute wat i want which is send and recieving of mail from another user to a particular user inbox. please help me with the code of hw all these will go.</p>
<p>thanks</p>
<p></p>
<p></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';">CREATE TABLE [Users]</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp; </span>(</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>[UserID] INT ,</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>[UserName] NVARCHAR(50) ,</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>[FirstName] NVARCHAR(50) ,</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>[LastName] NVARCHAR(50)</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp; </span>)</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';">&nbsp;</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';">CREATE TABLE [Messages]</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp; </span>(</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>[MessageID] INT ,</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>[Subject] NVARCHAR(MAX) ,</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>[Body] NVARCHAR(MAX) ,</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>[Date] DATETIME,</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>[AuthorID] INT,</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp; </span>)</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';">&nbsp;</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';">CREATE TABLE [MessagePlaceHolders]</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp; </span>(</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>[PlaceHolderID] INT ,</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>[PlaceHolder] NVARCHAR(255)--For example: InBox, SentItems, Draft, Trash, Spam </span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp; </span>)</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';">&nbsp;</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';">CREATE TABLE [Users_Messages_Mapped]</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp; </span>(</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>[MessageID] INT ,</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>[UserID] INT ,</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>[PlaceHolderID] INT,</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>[IsRead] BIT ,</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>[IsStarred] BIT </span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';">&nbsp;</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; tab-stops: 45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt;"><span style="font-size: 10.0pt; font-family: 'Courier New'; mso-fareast-font-family: 'Times New Roman';"><span style="mso-spacerun: yes;">&nbsp;&nbsp;&nbsp; </span>)</span></p>
<p class="MsoNormal" style="mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman','serif'; mso-fareast-font-family: 'Times New Roman';">Database Diagram: <span style="mso-no-proof: yes;"><img src="file:///C:\Users\alheri\AppData\Local\Temp\msohtmlclip1\01\clip_image001.png" alt="alt text" width="646" height="418" /></span></span></p>
<p><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman','serif'; mso-fareast-font-family: 'Times New Roman'; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">&nbsp;</span></p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24127);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24137'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-11 1:43 pm</div>
				                <div>Hello Joseph,<br />
<br />
Thank you for contacting us. Unfortunately, there is no way for us to know if this is correct. Without knowing all the details of what you are trying to accomplish, it is impossible to give you an exact solution.<br />
<br />
We're confident you can code a solution, but you will have to troubleshoot, code, and work through the solution.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24137);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24274'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/b0aec4aa2fa5148ad600f78b4badb56e?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/b0aec4aa2fa5148ad600f78b4badb56e'>Denis</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-17 7:40 am</div>
				                <div><p>Fantactic! Very very usefull! Thank you from siberia!</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24274);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24518'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/4f278f9a901fc89f2f4d5ef7bf1461a4?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/4f278f9a901fc89f2f4d5ef7bf1461a4'>rajesh kumar</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-29 3:53 am</div>
				                <div><p>in database using id how to display the particular values(if i enter login form that values store in database and that value display on page)</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24518);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24532'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-29 1:59 pm</div>
				                <div>Hello Rajesh,<br />
<br />
I am not quite understanding what you are asking, could you give a specific scenario?<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24532);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24721'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/a03cc41bfdc299a690bd43139dabca29?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/a03cc41bfdc299a690bd43139dabca29'>cc</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-09 2:02 am</div>
				                <div>*code removed by moderator*

<p>this is my frontend coding please help me to connect this with my database.</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; thank q in advance</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24721);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24734'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-09 1:33 pm</div>
				                <div>Hello,<br />
This code has no call to a php file. You will want to check out our article on <a href="http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql/grab-all-comments-from-database">how to connect your webpage to a database</a>. <br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24734);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24783'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/a03cc41bfdc299a690bd43139dabca29?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/a03cc41bfdc299a690bd43139dabca29'>chitra lekha</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-11 3:19 am</div>
				                <div><p>How to fetch and display the images from database.</p>
<p>&nbsp;</p>
<p>please answer to my question as soon as possible.</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24783);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24832'></a>
		<div  style='margin:2px 0px 0px 120px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-13 12:59 pm</div>
				                <div>Hello Chitra,<br />
<br />
Mostly the image file path is stored in the database and then retrieved into the code. This data is saved and retrieved just as any other text would be.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24832);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24784'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/a03cc41bfdc299a690bd43139dabca29?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/a03cc41bfdc299a690bd43139dabca29'>chitra lekha</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-11 3:25 am</div>
				                <div>*Code removed by moderator*

<p>This is my coding am inserting values into the database,but the displaying should be done based on condition i.e.,if check-in and check-out dates are free then it has to dispaly those rooms only.</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24784);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24831'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-13 12:50 pm</div>
				                <div>Hello Chitra,<br />
<br />
When pulling data from the database, you can filter out what you want by using a <a href="https://dev.mysql.com/doc/refman/5.0/en/select.html">WHERE</a> clause at the end of your MySQL Query.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24831);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24808'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/d8159e0fecb0d18ff506cf31087d4ffd?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/d8159e0fecb0d18ff506cf31087d4ffd'>puteri</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-12 10:47 pm</div>
				                <div><p>hello. i want to ask did button submit can fetch data from database n insert the fetch data into new table in database? if it can. can u give example code. bcz i don't know how to do it&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24808);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24834'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-13 1:03 pm</div>
				                <div>Hello puteri,<br />
<br />
The submit button will call a php script of your choosing. You can make that code do anything you like. Unfortunately we do not have any sample code for what you ask.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24834);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-25111'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/374fbd22c03f001a4de83f47ba7a55c0?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/374fbd22c03f001a4de83f47ba7a55c0'>joseph</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-23 6:13 am</div>
				                <div><p>good day Mr Scotte,</p>
<p>&nbsp;sir please i need you to help me with a code, am working on my mailing system everything is moving preety well, i appreciate.</p>
<p>now have created the inbox table, php script to fetch data belonging to a user, what i want now is that when aa user click the subject or message link in his inbox, it slide down displaying the content of that message in his inbox. please i need ur help badly.</p>
<p>thanks for being dere God bless</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(25111);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-25121'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-23 2:19 pm</div>
				                <div>Hello joseph,<br />
<br />
Thank you for contacting us. We are happy to help, but do not know a way to affect the recipients inbox. This is because it is up to their client to handle mail once received, such as Outlook, Mac mail, etc.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(25121);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-25495'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/2cf8f5349552d35854109997138db48d?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/2cf8f5349552d35854109997138db48d'>Dotun Show</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-08-05 11:43 am</div>
				                <div><p>Please, i am trying to write a code to fetch data from mysql database, and displaying them in categories. bellow is what i have done so far:</p>
<p>&lt;?php include "storescripts/connect_to_mysql.php"; $dynamicList = "";$sql = mysql_query("SELECT * FROM products ORDER BY date_added DESC LIMIT 8 ");$productCount = mysql_num_rows($sql); // count the output amountif ($productCount &gt; 0) {&nbsp;&nbsp;&nbsp; while($row = mysql_fetch_array($sql)){ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $id = $row["id"];&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$product_name = $row["product_name"];&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$price = $row["price"];&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$date_added = strftime("%b %d, %Y", strtotime($row["date_added"]));&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$dynamicList .= '&lt;div class="col-sm-3"&gt;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &lt;div class="product-image-wrapper"&gt;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &lt;div class="single-products"&gt;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &lt;div class="productinfo text-centre"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;a href="/support/product_details.php?id='.$id.'" class="btn btn-default"&gt;&lt;img src="/Piata/inventory_images/'.$id.'.jpg" width="176" height="220" alt=""&gt;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &lt;h2&gt;?'.$price.'&lt;/h2&gt;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &lt;p&gt;'.$product_name.'&lt;/p&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/a&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;a href="#" class="btn btn-default"&gt;&lt;/a&gt;&lt;a href="#" class="btn btn-default add-to-cart"&gt;&lt;i class="fa fa-shopping-cart"&gt; &lt;/i&gt;Add to cart&lt;/a&gt;&lt;/div&gt;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &lt;/div&gt;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &lt;/div&gt;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &lt;/div&gt;';&nbsp;&nbsp;&nbsp; }} else {&nbsp;&nbsp;&nbsp; $dynamicList = "We have no products listed in our store yet";}mysql_close();?&gt;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(25495);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-25529'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-08-06 8:54 am</div>
				                <div>Hello Dotun,<br />
<br />
We unfortunately do not provide coding support, as this beyond our scope of support.  However, we do try to point you in the right direction or to a source that might provide an answer.  Try checking out this <a href="http://www.tutorialspoint.com/php/mysql_select_php.htm" rel="nofollow" target="_blank">site</a>.  It will definitely at least verify the data retrieval portion of what you're asking.<br />
<br />
If you have any further questions or comments, please let us know.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(25529);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-26393'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/746d7aa1fddc24b7259d6511377e293d?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/746d7aa1fddc24b7259d6511377e293d'>sofie</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-09-06 4:38 pm</div>
				                <div><p>Hi. I understand that you do not provide codes here. Can you please direct me then on how to display&nbsp;a&nbsp;row data&nbsp;from mysql. i have the code to display in a select item at least one column from mysql database. once the select option is set/an item has been selected, it display in textboxes&nbsp;the row data that corresponds to the selected item. thank you</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(26393);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-26462'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-09-08 6:08 pm</div>
				                <div>Hello sofie,<br />
<br />
Thank you for contacting us. Like any coding solution, there are many ways to accomplish this. But, typically you would have to select the row you want to display, then echo it out. If you are having trouble coding this for your specific site, you may want to consider consulting a developer.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(26462);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27125'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/80ff2a68514ee826432a4991efcefc5a?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/80ff2a68514ee826432a4991efcefc5a'>chobs</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-01 10:50 am</div>
				                <div><p>thank you so much for your tutorial. my data is being inserted into the table, yet I keep getting the following error:&nbsp;<strong style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">Warning</strong><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">: mysql_fetch_array(): supplied argument is not a valid MySQL result resource in</span><strong style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">/home/a2650603/public_html/pages/display_comments.php</strong><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">&nbsp;on line&nbsp;</span><strong style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">20. &nbsp;</strong></p>
<p><strong style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">my full php code is as follows:&nbsp;</strong><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&lt;?</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp;</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>$con = mysql_connect("mysql12.000webhost.com","mydb","mypassword");</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp;</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>if (!$con)</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>{</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp; die('Could not connect: ' . mysql_error());</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>}</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp;</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>mysql_select_db("a2650603_news", $con);</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp;</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>$article_id = $_GET['id'];</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp;</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>$query = "SELECT * FROM `comments` WHERE `articleid` =$article_id LIMIT 0 , 30";</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp;</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>$comments = mysql_query($query);</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp;</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>echo "&lt;h1&gt;User Comments&lt;/h1&gt;";</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp;</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>while &nbsp;($row = mysql_fetch_array($comments, MYSQL_ASSOC))</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>{</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp; $name = $row['name'];</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp; $email = $row['email'];</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp; $website = $row['website'];</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp; $comment = $row['comment'];</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp; $timestamp = $row['timestamp'];</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp;&nbsp;</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp; $name = htmlspecialchars($row['name'],ENT_QUOTES);</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp; $email = htmlspecialchars($row['email'],ENT_QUOTES);</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp; $website = htmlspecialchars($row['website'],ENT_QUOTES);</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp; $comment = htmlspecialchars($row['comment'],ENT_QUOTES);</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp;&nbsp;</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp; echo " &nbsp;&lt;div style='margin:30px 0px;'&gt;</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp; &nbsp; &nbsp; Name: $name&lt;br /&gt;</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp; &nbsp; &nbsp; Email: $email&lt;br /&gt;</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp; &nbsp; &nbsp; Website: $website&lt;br /&gt;</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp; &nbsp; &nbsp; Comment: $comment&lt;br /&gt;</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp; &nbsp; &nbsp; Timestamp: $timestamp</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp; &nbsp; &lt;/div&gt;</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp; ";</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>}</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp;</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>mysql_close($con);</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>&nbsp;</strong></span></span></p>
<p><span style="color: #666666; font-family: Georgia, 'Times New Roman', Times, serif;"><span style="font-size: 13px;"><strong>?&gt;</strong></span></span></p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27125);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27144'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-01 2:39 pm</div>
				                <div>Hello,<br />
<br />
Typically this error has to do with the query string. See if you can run that string against the database and if it errors out, you will need to correct it.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27144);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27246'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/374fbd22c03f001a4de83f47ba7a55c0?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/374fbd22c03f001a4de83f47ba7a55c0'>joseph</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-05 7:41 pm</div>
				                <div><p>good day Mr scott, and Everyone please i need your help.</p>
<p>this is my situation;</p>
<p>&lt;input type="email" name="email[]"/&gt; // field for the email</p>
<p>$email=$_POST['email']; // this is collected from input field as "email[]" as array</p>
<p>$subject=$_POST['subject'];</p>
<p>$message=$_POST['text'];</p>
<p>i want insert to a table.</p>
<p>$email[0] // first element of the array</p>
<p>$suject // content of the filed</p>
<p>$message // the text of the field</p>
<p>to a row1 in the table, so also</p>
<p>&nbsp;</p>
<p>$email1] // first element of the array</p>
<p>$suject // content of the filed</p>
<p>$message // the text of the field</p>
<p>row 2 etc until the element is exusted.</p>
<p>please&nbsp; can some one help me with this?</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27246);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27249'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-05 10:24 pm</div>
				                <div>Hello Joseph, <br />
<br />
What exactly is your question?We are not able to provide custom coded solutions but are happy to answer individual questions. Where in the code are you having an error? <br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27249);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27269'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/374fbd22c03f001a4de83f47ba7a55c0?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/374fbd22c03f001a4de83f47ba7a55c0'>Joseph</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-06 6:42 pm</div>
				                <div><p>Thanks Mr scoot for replying.</p>
<p>Actually the work flow of what i want it is like sending mail to multiple email addresses. but my is inserting into a table</p>
<p>To | Subject | message |</p>
<p>by looping through the emails collected from a email input field separated by comma inserting to a table to get this output in fig1.0</p>
<p>but the email arrays collectec from the input field is taking the list of emails as ONE(1) ELEMENT&nbsp; of the array like this</p>
<p>Array [0]=&gt; 'email1, email2, email3,email4';</p>
<p>instead of</p>
<p>Array [0]=&gt;'email1';</p>
<p>Array [1]=&gt;'email2';</p>
<p>Array [2]=&gt;'email3';</p>
<p>Array [0]=&gt;'email4';</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>fig1.0</p>
<p></p>
<p></p>




<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">id</p>


<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">To</p>


<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">subject</p>


<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">message</p>




<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">1</p>


<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">Email1</p>


<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">Multiple mailing</p>


<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">My message content</p>




<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">2</p>


<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">Email2</p>


<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">Multiple mailing</p>


<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">My message content</p>




<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">3</p>


<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">Email3</p>


<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">Multiple mailing</p>


<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">My message content</p>




<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">4</p>


<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">Email4</p>


<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">Multiple mailing</p>


<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">My message content</p>




<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">5</p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">&nbsp;</p>


<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">Email5</p>


<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">Multiple mailing</p>


<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;">My message content</p>




<p>&nbsp;</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27269);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27268'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/374fbd22c03f001a4de83f47ba7a55c0?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/374fbd22c03f001a4de83f47ba7a55c0'>joseph</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-06 6:23 pm</div>
				                <div><p>NOt so sofie. am a learn too just like you but here is how to do it</p>
<p>first way: do SELECT * FROM tablename</p>
<p>then you echo them out by:</p>
<p>&lt;?php&nbsp; echo $row['name of colum']?&gt; eg</p>
<p>&lt;?php&nbsp; echo $row['id'] ?&gt;</p>
<p>&lt;?php&nbsp; echo $row['name'] ?&gt;</p>
<p>&lt;?php&nbsp; echo $row['surname'] ?&gt;</p>
<p>&lt;?php&nbsp; echo $row['username'] ?&gt;</p>
<p>etc but here is the best waay</p>
<p>do $Selectall="SELECT * FROM tablename";</p>
<p>while($row = mysql_fetch_array($Selectall) or die(mysql_error())){&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $id=$row['ID'];&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $to_who=$row['to_who'];&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $from_who=$row['from_who'];&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $subject=$row['subject'];&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $message=$row['message'];&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $time=$row['time'];&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $open=$row['open'];&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $recipientDelete=$row['recipientDelete'];&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $senderDelete=$row['senderDelete'];&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</p>
<p>echo $row['id'];</p>
<p>echo $row['from_who'];</p>
<p>echo $row['to_who'];</p>
<p>echo $row['subject']; //ect</p>
<p>}</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27268);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27365'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/0c8bb63f999d618a4ec1d9833e6585d5?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/0c8bb63f999d618a4ec1d9833e6585d5'>@GHOST</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-09 6:31 am</div>
				                <div><p>GREAT WORK. EVERY THING IS WORKING FINE. A BIG THANKS</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27365);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-28066'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/e340802a2165aae57ce9b0d22d83db54?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/e340802a2165aae57ce9b0d22d83db54'>Matt</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-31 12:12 pm</div>
				                <div>Hello everyone, I seem to be stuck.  I'm attempting to display the commentson pages 1 &amp; 2, but I keep getting an error message:<strong>Warning</strong>:  mysql_fetch_array() expects parameter 1 to be resource, boolean given i<strong>n</strong> line <strong>23</strong>This is line 23:while($row = mysql_fetch_array($comments, MYSQL_ASSOC))I'm new at this, and feel like I'm missing something completely obvious.Can you help me?</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(28066);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-28106'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-11-02 4:00 pm</div>
				                <div>Hello Matt,<br />
<br />
The code "while($row = mysql_fetch_array($comments, MYSQL_ASSOC))" is correct, so it may be cause by other things in your code.  You will want to test the result variable and print out any error code on the screen. You can check out the <a href="http://stackoverflow.com/questions/2973202/mysql-fetch-array-expects-parameter-1-to-be-resource-or-mysqli-result-boole">forum thread here</a> for more information on how to do that.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(28106);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-28422'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/c5e2f3279604f906ea1491bfc38b2e41?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/c5e2f3279604f906ea1491bfc38b2e41'>Ale</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-11-14 6:02 pm</div>
				                <div><p>Hi guys, I am trying to add products to my car, but I can't get the id_client from the db,neither the product_id :( I don't know what to do. I have started in all the pages the session_start(). That's the error:</p>
<p>Username=alexa</p>
<p>Notice: Undefined index: id_client in C:\xampp\htdocs\pw\web\adauga_cos on line 20</p>
<p>id_client=</p>
<p>Notice: Undefined index: id_client in C:\xampp\htdocs\pw\web\adauga_cos on line 38</p>
<p>Notice: Undefined index: id_produs in C:\xampp\htdocs\pw\web\adauga_cos on line 38</p>
<p>Eroare insert!</p>
<p>Thanks! :)</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&lt;?php</p>
<p>session_start();</p>
<p>//require_once('config.php');</p>
<p>?&gt;</p>
<p>&nbsp;</p>
<p>&lt;div align="center"&gt;&lt;h1&gt;&lt;font color="red" size="10"&gt;</p>
<p>&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br &gt;</p>
<p>&lt;?php</p>
<p>&nbsp;</p>
<p>$con=mysqli_connect("localhost","root","","pw");</p>
<p>if(mysqli_connect_errno())</p>
<p>&nbsp; &nbsp; {</p>
<p>&nbsp; &nbsp; &nbsp; echo "Faild to connect to MYSQL: ".mysqli_connect_errno();</p>
<p>&nbsp; &nbsp; &nbsp;}</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; // obtine id_client cunoscandu-se username-ul</p>
<p>$q = "SELECT id_client FROM `client` WHERE utilizator = '".$_SESSION['user']."'";</p>
<p>$result = mysqli_query($con,$q) or die("Eroare la selectare id_user");</p>
<p>&nbsp; &nbsp; echo "Username = " . $_SESSION['user'];</p>
<p>echo "id client =". $_POST['id_client'];</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>$row = mysqli_fetch_array($result, MYSQLI_ASSOC);</p>
<p>// se verifica daca cantitatile nu sunt introduse aiurea</p>
<p>$query2="SELECT stoc FROM produs WHERE id_produs=".$_POST['id_produs'];</p>
<p>$result2=mysqli_query($con,$query2) or die("eroare la selectare stoc/id_produs!");</p>
<p>&nbsp; &nbsp; $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);</p>
<p>if($_POST['cantitate']&gt;$row2['stoc'])</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;echo "Nu avem acest numar de produse disponibil!";</p>
<p>&nbsp; &nbsp; else if($_POST['cantitate']==0)</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;echo 'Trebuie sa introduceti cel putin un produs!';</p>
<p>&nbsp; &nbsp; else if($_POST['cantitate']&lt;0)</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; echo 'Ati innebunit? Cum sa cumparati mai putin de un produs?';</p>
<p>&nbsp; &nbsp; else</p>
<p>//inserare in cos</p>
<p>{</p>
<p>$query="INSERT INTO cos VALUES (".$_POST['id_client'].", ".$_POST['cantitate'].", ".$row['id_produs'].")";</p>
<p>mysqli_query($con,$query) or die ('Eroare insert!');</p>
<p>header('Location: cos.php');</p>
<p>}</p>
<p>?&gt;</p>
<p>&lt;/div&gt;&lt;/font&gt;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(28422);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-28464'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-11-16 3:31 pm</div>
				                <div>Hello Ale,<br />
<br />
Unfortunately we are unable to set up a test environment and troubleshoot code. If you have questions on a specific error, then we may be able to help. For your situation, you need to find out if the id is being grabbed. If not, you need to trace back in the code to find out why and where it is broken.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(28464);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-29445'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/6f84534fbaafaff7cd487df660943504?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/6f84534fbaafaff7cd487df660943504'>Joan </a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-12-30 12:12 am</div>
				                <div><p>nice guide but what i should do if i want to search for sample</p>
<p>in my database under the column&nbsp;"EmployedID"</p>
<p>using the url</p>
<pre class="code_block" style="padding: 2px; font-family: 'Courier New', Courier, monospace; border-radius: 4px; margin-top: 0px; margin-bottom: 0px; line-height: 18px; word-break: break-all; word-wrap: break-word; border: 1px solid #696969; max-width: 670px; overflow: auto; cursor: auto; max-height: 500px; background: #f2f2f2;">http://phpandmysql.inmotiontesting.com/page2.php?id=555-5555-5555</pre>
<p>Where 5555-5555-5555 is a EmployedID&nbsp;in my database table</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(29445);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-29454'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-12-30 9:50 am</div>
				                <div>Hello Joan,<br />
<br />
You basically need to use phpmyadmin to access your database and then do a specific search.  If you're not familiar with SQL, then you guide above to generate the specific search.  If you're looking in a particular column, the select statement needs to specify the column.  You can find an example of how to specify a colum in an SQL statement <a href="http://www.w3schools.com/sql/sql_select.asp" rel="nofollow" target="_blank">here</a>.  So instead of "*" in the select statement, it would look like:<br />
<br />
SELECT EmployeeID FROM `tablename` WHERE `employeeID` ="5555-5555-5555"<br />
<br />
If you wanted everything in the database then "EmployeeID" would be set "*" after Select. <br />
<br />
I hope this helps to answer your question, please let us know if you require any further  assistance.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(29454);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-29470'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/6f84534fbaafaff7cd487df660943504?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/6f84534fbaafaff7cd487df660943504'>Joan Nin</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-12-30 10:05 pm</div>
				                <div><p>thanks for the replay im getting the idea but how the script look.</p>
<p>My main concern is that the queary&nbsp;will be generate using the url</p>
<pre class="code_block" style="padding: 2px; font-family: 'Courier New', Courier, monospace; font-size: 12px; border-radius: 4px; margin-top: 0px; margin-bottom: 0px; line-height: 18px; word-break: break-all; word-wrap: break-word; border: 1px solid rgb(105, 105, 105); max-width: 670px; overflow: auto; cursor: auto; max-height: 500px; background: rgb(242, 242, 242);">http://phpandmysql.inmotiontesting.com/page2.php?id=555-5555-5555</pre>
<p>or any other employeedid</p>
<p>How i set that in the SQL statement?</p>
<p style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; white-space: normal;"><code><span style="color: rgb(35, 35, 35); font-family: adelle-sans, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 22px;">SELECT EmployeeID FROM `tablename` WHERE `employeeID` ="<strong>HERE</strong>"</span></code></p>
<p>&nbsp;</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(29470);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-29484'></a>
		<div  style='margin:2px 0px 0px 120px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-12-31 2:14 pm</div>
				                <div>Hello Joan,<br />
<br />
Yes, you can use the "$_GET" command in PHP with code similar to the below example:<br />
<br />
URL: domain.com?id=123<br />
<br />
$number = $_GET["id"];<br />
<br />
Select * from members WHERE phone=$number;<br />
<br />
If you'd like to read the official PHP documentation about $_GET I've provided the link here: http://php.net/manual/en/reserved.variables.get.php<br />
</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(29484);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-31025'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/5d758a17940a1743af628828d012bf90?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/5d758a17940a1743af628828d012bf90'>Syn</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-03-07 2:26 pm</div>
				                <div><p>I think you should update this since mysql_ functions are deprecated.</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(31025);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-31033'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-03-07 4:19 pm</div>
				                <div>You are correct! We are actually in the process of coming through to update articles that are old and/or deprecated. This is definitely on our list!</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(31033);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-31326'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/95eabb50081daeb2a4f2db6a8e90e796?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/95eabb50081daeb2a4f2db6a8e90e796'>Connor</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-03-18 5:05 pm</div>
				                <div><p>Hello Inmotion Hosting team,</p>
<p>Thanks for this 7 page tutorial. I'm really confident that i'll be able to apply a DB to a website now.</p>
<p>I did have a couple questions tho:</p>
<p>&nbsp;</p>
<p>1) How secure is this whole method from SQL injection or other attacts? I assume that its not going to stop 100.00% of attacks. Is it worth coding more PHP validations (as in not allowing "!&lt;&gt; ... " into a form box )?&nbsp;</p>
<p>2) I have your Power-Plan, from what I understand I would have to have one of your Techs apply an SSL certificate. If I were to get an SSL certificate how would this be applied to my forms/user-log-ins? I guess I don't understand how a SSL would make my pages more secure if I'm the one doing the coding.</p>
<p>If your replys are as good as your phone-suport then I'm sure I'll be impressed!</p>
<p>Thanks!</p>
<p>-Connor</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(31326);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-31360'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-03-21 2:50 pm</div>
				                <div>Hello Connor,<br />
<br />
SQL injection occurs due to the lack of validating the input properly. If you take the input and strip it of improper text using the <em>mysql_real_escape_string</em> or prepared statements, then SQL injection should not be an issue. It is definitely prevented via code.<br />
<br />
SSL Certs are designed to secure the transmission of data to the website. It encrypts it so it cannot be read by someone who may be monitoring the traffic from the outside. This is good for logins, forms, and payment pages during transmission, but an SSL does not prevent SQL injection via forms that do not have the proper code protection in place. <br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(31360);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-31435'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/dc4fd348a48a7a3f66ef15ef096ee5fa?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/dc4fd348a48a7a3f66ef15ef096ee5fa'>Evan Marshall</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-03-23 10:27 pm</div>
				                <div><p>I follow tutorial exactly and in my comment section it does not display the actual name, email, website, etc from the database. It just displays the variable names: $name, $email, $website, etc.</p>
<p>&nbsp;</p>
<p>I'm lost...</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(31435);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-31453'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-03-24 3:15 pm</div>
				                <div>Since this is the final guide in a full tutorial series, ensure you have completed the other sections on <a href="http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql">Using PHP to create dynamic pages</a>.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(31453);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-31484'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/b3bb12483dcb78bc3924a3a0bcc216c6?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/b3bb12483dcb78bc3924a3a0bcc216c6'>John</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-03-26 10:17 am</div>
				                <div><p>Thank you for all your efforts in creating a remarkable hosting company. An d I intend to spread the news.&nbsp;</p>
<p>In ref. to insertion of comments to database tables, would you have some codes that would allow the user to include multiple comments to the same id. Thanks</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(31484);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-31509'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-03-28 1:13 pm</div>
				                <div>Hello John,<br />
<br />
Thank you for the kind words. We do not currently have a code tutorial for that, but we do hope to have more tutorials like this in the future that contain more features. Perhaps one like you are asking for will be among them.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(31509);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-31976'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='/support/images/avatars/default_avatar.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/DigitalWarrior'>DigitalWarrior</a></div>
						<div></div>
						<div></div>
						<div>9 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-04-15 11:59 am</div>
				                <div>Hi Scott,<br />
I get a 1064 error :  &quot;mysql_fetch_array() expects parameter 1 to be resource, boolean given&quot;  on line 45 :<br />
45 : echo &quot;</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(31976);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-31979'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-04-15 12:11 pm</div>
				                <div>Hello DigitalWarrior,<br />
<br />
If you are using a mysql_fetch_array() then you will need to do a foreach to display them. Also if the query is returns a null response it could throw this error. Can you provide more of the code so we can investigate it further?<br />
<br />
Best Regards,<br />
TJ Edens</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(31979);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-32445'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/ca4c1e038214fef319baf2d2c98a3e08?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/ca4c1e038214fef319baf2d2c98a3e08'>Jules</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-05-04 6:22 am</div>
				                <div><p>Hi, thanks for your tutorial, it works really well and it's been a great learning experience.</p>
<p>Having got it to work with numeric ID's, I've now tried to set this up with SEO ID's (e.g. http://mywebpage.uk/blog/blog-slug). I've had some success, in that the url displays the blog slug and the SEO ID (blog-slug) is placed&nbsp;into the articleid column in the database. But the comments related to that articleid are not being displayed.</p>
<p>Without wanting to cause you any hassle, do you happen to know what part of your code should be changed to, so that display_comments.php knows to display comments related&nbsp;to the blog-slug rather than id=n. Like I said the blog-slug does already appear in the articleid in the database.</p>
<p>Thank you, Jules</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32445);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-32466'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-05-04 1:50 pm</div>
				                <div>Hello Jules,<br />
<br />
Thanks for the question about the code.  Unfortunately, we  do not provide coding support, so we can't provide changes to existing code on our pages.  If you're changing the qualifying value from and id number to specific "blug-slug", then you need to change that logic in the code and change it so that you're using a valid "blog-slug" as the condition for showing the comment.  If you  are unable to do that, then you may want to consult with a programmer for help in making the customization.<br />
<br />
If you have any further questions or comments, please let us know.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32466);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-32487'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/a35aef5838a6b9631874ad8afe099893?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/a35aef5838a6b9631874ad8afe099893'>priyanka</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-05-05 1:42 pm</div>
				                <div><p>phpmyadmin database where store in pc</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32487);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-32488'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-05-05 2:59 pm</div>
				                <div><a href="http://stackoverflow.com/questions/2091350/where-does-mysql-store-database-files" target="_blank" rel="nofollow">Here</a> is a link to a forum post I found online where they discuss possible locations.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32488);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
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
			<h3><span class='comment-count'>110</span> Questions & <span class='comment-text'>Comments</span></h3>
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

                        _gaq.push(['_setAccount', 'UA-1501988-19']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '213.55.101.21']);

                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'chat', 'launch', 'support center']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '213.55.101.21']);
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
        	        id:'1137',
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