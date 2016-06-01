<?php die("Access Denied"); ?>#x#a:3:{s:4:"body";s:468620:" 
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

		  <base href="http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql/php-insert-database" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="last-modified" content="2015-01-14T14:58:55-08:00" />
  <meta name="keywords" content="php insert database" />
  <meta name="author" content="Brad Markle" />
  <meta name="description" content="Looking to use PHP to insert data to your database? Learn how with this easy to follow article." />
  <title>Using PHP to INSERT data into a database - InMotion Hosting</title>
  <link href="http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql/php-insert-database" rel="canonical" />
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
						
		_gaq.push(['_setCustomVar', 3, 'DateMonthModified', '2015-01', 3]);
		_gaq.push(['_setCustomVar', 4, 'DateMonthPublished', '2012-01', 3]);
		_gaq.push(['_setCustomVar', 5, 'Author', 'BradM', 3]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>






		






	<link rel="shortcut icon" href="//imh01-inmotionhosting1.netdna-ssl.com/img/imh_favicon_hd.png" type="image/x-icon" />






	





	<!-- cid:5b8c5cd7c1f6c72b2e1d41abb51c8a93 -->





	


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
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '120.29.65.194']);

                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'chat', 'launch', 'support center']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '120.29.65.194']);
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
</div></li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_with_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='/support/edu/website-design' itemprop='url'><span itemprop='title'>Website Design<span></a><div class='dropdown_4columns'><h2>Website Design Education Channel</h2><div class='col_2'><h3>100 Level Classes</h3><div><a href='/support/edu/website-design/website-design-basics'>101: Website Design Basics</a></div><div><a href='/support/edu/website-design/insert-images-website'>102: Inserting Images into a Website</a></div><div><a href='/support/edu/website-design/inserting-links-into-website'>103: Inserting Links into a Website</a></div><div><a href='/support/edu/website-design/meta-tags-explained'>104: Meta Tags Explained</a></div><div><a href='/support/edu/website-design/html-5-syntax'>105: HTML 5 Basic syntax</a></div></div><div class='col_2'><h3>200 Level Classes</h3><div><a href='/support/edu/website-design/adding-videos-website'>201: Adding Videos to a Website</a></div><div><a href='/support/edu/website-design/adding-contact-forms'>202: Adding Contact Forms </a></div><div><a href='/support/edu/website-design/using-css'>203: Using and Understanding CSS</a></div><div><a href='/support/edu/website-design/website-design-best-practices'>204: Website Design Best Practices</a></div><div><a href='/support/edu/website-design/using-php-and-mysql'>205: Using PHP to create dynamic pages</a></div><div><a href='/support/edu/website-design/create-responsive-template'>206: Creating Responsive Templates</a></div><div><a href='/support/edu/website-design/search-engine-optimization'>207: Search Engine Optimization</a></div></div></div></li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_with_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='/support/edu/website-design/using-php-and-mysql' itemprop='url'><span itemprop='title'>205: Using PHP to create dynamic pages<span></a><div class='dropdown_3columns'><h2> Using PHP to create dynamic pages</h2><div class='col_3'><div>1. <a style='display:inline;' href='/support/edu/website-design/using-php-and-mysql/how-to-create-a-custom-php-contact-form'>How to create a custom PHP contact form with validation</a></div><div>2. <a style='display:inline;' href='/support/edu/website-design/using-php-and-mysql/database-setup'>Setting up a database to handle form data from a website</a></div><div>3. <a style='display:inline;' href='/support/edu/website-design/using-php-and-mysql/create-html-form'>Creating a simple HTML Form to get user comments</a></div><div>4. <a style='display:inline;' href='/support/edu/website-design/using-php-and-mysql/using-php-include-function'>Using the php include function to reuse code</a></div><div>5. <a style='display:inline;' href='/support/edu/website-design/using-php-and-mysql/php-insert-database'>Using PHP to INSERT data into a database</a></div><div>6. <a style='display:inline;' href='/support/edu/website-design/using-php-and-mysql/stepping-through-our-php-code'>Reviewing sample PHP code that interacts with a MySQL Database</a></div><div>7. <a style='display:inline;' href='/support/edu/website-design/using-php-and-mysql/grab-all-comments-from-database'>How to use PHP to connect to and retrieve data from MySQL</a></div></div></div></li><li class='bc_arrow'>&gt;&gt;</li><li class='bc_no_dd' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><span itemprop='title'>Using PHP to INSERT d...</span></li>			</ul>
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
															Using PHP to INSERT data into a database									</h1>
			
																
				
					<div style='font-size:12px; color:#aaa; margin-bottom:-10px; padding-top:5px;'>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Written by </span><a href='https://plus.google.com/102670474114655224886?rel=author'>Brad Markle</a></div>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Views:</span> <span name='page_views' id='page_views'>333,061</span></div>
							<div style='float:left; margin-right:20px;' title='Originally published: Jan 27, 2012'><span style='color:#606060;'>Published:</span> Jan 14, 2015</div>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Comments:</span> <a href='#comments'>131</a></div>
							<div style='clear:both;'></div>
						</div>
						</div>
		
	
		

	

								<p>In <a href="/support/edu/website-design/using-php-and-mysql">this tutorial series</a>, we're using PHP and MySQL together to create a comment form so we can receive and display user comments on a website. We've already <a href="/support/edu/website-design/using-php-and-mysql/database-setup">setup our database</a> and our <a href="/support/edu/website-design/using-php-and-mysql/create-html-form">HTML form</a>, and so our next step is to actually write the user's comment to the database once it has been submited.</p>


<h2>Step 1 - Determining the correct SQL Insert command</h2>


<p>When you write data to a database, you use SQL statements, specifically the INSERT command. It is straightforward, the INSERT command inserts data into the database. When you use phpMyAdmin, you use a GUI to manage your database, but it also shows you the MySQL commands that it ran when performing your requested tasks. We will use this feature to our advantge to find the correct code to use. What we will do is insert a test comment using phpMyAdmin, and then copy the INSERT command it used.</p>


<p><strong>To INSERT using phpMyAdmin</strong></p>


<ol class='article_list'>
<li><a href="/support/edu/cpanel/getting-started-cpanel/how-to-log-into-cpanel">Log into your cPanel</a> and click the phpMyAdmin icon</li>
<li>In the left menu, first click your database name and then click the table to work with. If you're following our example, we'll first click on "_mysite" and then "comments".</li>
<li>In the top menu, click "Insert"</li>
<li>Type in a sample comment (refer to our screenshot below) and then click GO<br /><a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/website/phpmysql/inserting-a-test-record-in-phpmyadmin.gif"><img  alt="inserting-a-test-record-in-phpmyadmin" src="//cdn.inmotionhosting.com/support/images/stories/website/phpmysql/inserting-a-test-record-in-phpmyadmin.gif" /></a></li>
<li>After you have run the query, phpMyAdmin will display the insert command it used (see the screenshot below). Copy this SQL statement to a temporary location, such as a text file on your computer.<br /><a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/website/phpmysql/sample-insert-query-in-phpmyadmin.gif"><img  alt="sample-insert-query-in-phpmyadmin" src="//cdn.inmotionhosting.com/support/images/stories/website/phpmysql/sample-insert-query-in-phpmyadmin.gif" /></a></li>
</ol>


<h2>Step 2 - Writing the PHP code that will execute MySQL Query</h2>


<p>Now that we have a sample query, we need to modify it and run in once a user has submitted a comment. Below is example code that will do this. If you're not familiar with php, any line that begins with // is a comment. It is intended for programmers to leave comments about what their code is doing so that either themselves or other people who work on the code have an idea as to what the code is doing. In the example below, we've put in comments explaining what exactly certain peicies of code are doing:</p>

<pre class="code_block prettyprint" style="max-height: 400px; font-size: 11px;">
&lt;?

// When someone submits a comment, they "POST" the comment to the server.
// Therefore, we only want to insert a comment to the database if there
// is POST data. The if statement below checks to see if someone has
// posted data to the page
if( $_POST )
{
  // At this point in the code, we know someone has posted data and
  // is trying to post a comment. We therefore need to now connect
  // to the database

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

  // We now need to create our INSERT command to insert the user's
  // comment into the database.
  //
  // Let's first take a look at the sample INSERT code we received when we
  // used phpMyAdmin to create a test comment:
  //
  // INSERT INTO `inmoti6_mysite`.`comments` (`id`, `name`, `email`, `website`,
  // `comment`, `timestamp`, `articleid`) VALUES (NULL, 'John Smith',
  // 'johns@domain.com', 'johnsmith.com', 'This is a test comment.',
  // CURRENT_TIMESTAMP, '1');
  //
  // If we ran this command, it would insert the same exact comment from John
  // Smith every time. What we need to do is update this query so that it
  // includes all of the data that the user typed in.
  //
  // When we setup our HTML Form, some of the text boxes we used were:
  // &lt;input type='text' name='name' id='name' /&gt;
  // &lt;input type='text' name='email' id='email' /&gt;
  // The important information we need from this is the "id" that is set.
  // For example, to get the user's name, we can grab the 'name'. To
  // get their email address, we need to get the value of 'email'.
  //
  // Using the $_POST variable, we can get this data. This is what we're
  // doing below
  $users_name = $_POST['name'];
  $users_email = $_POST['email'];
  $users_website = $_POST['website'];
  $users_comment = $_POST['comment'];

  // We now have all of the data that the user inputed. What you don't want
  // to do is trust the user's input. Savy users / hackers may attempt to use
  // an sql injection attack in order to run sql statements that you did not
  // intend to run. For example, the following is a basic query for checking
  // someone's username and password:
  //
  // SELECT * FROM users WHERE user='USERNAME' AND password='PASSWORD'
  //
  // In the above, we're assuming the user typed USERNAME as their username and
  // PASSWORD as their PASSWORD. But, what if the user typed the following as
  // their password?
  //
  // ' OR ''='
  //
  // The new query would then be the following:
  //
  // SELECT * FROM users WHERE user='USERNAME' AND password='' OR ''=''
  //
  // Running the above query would allow anyone to login as any user! We can use
  // the <a href="http://php.net/mysql_real_escape_string" target="_blank">mysql_real_escape_string function</a> to escape the user's input. If used in
  // the above example, the new query would read:
  //
  // SELECT * FROM users WHERE user='USERNAME' AND password='\' OR \'\'=\''
  //
  // Because the single quotes are "escaped" (i.e. appended with a backslash), the
  // hackers attempt would fail.
  $users_name = mysql_real_escape_string($users_name);
  $users_email = mysql_real_escape_string($users_email);
  $users_website = mysql_real_escape_string($users_website);
  $users_comment = mysql_real_escape_string($users_comment);
  
  // We also need to get the article id, so we know if the comment belongs
  // to page 1 or if it belongs to page 2. The article id is going to be
  // passed in the URL. For example, looking at this URL:
  //
  // http://phpandmysql.inmotiontesting.com/page1.php?id=1
  //
  // The article id is 1. To get data from the url, use the $_GET variable,
  // as in:
  $articleid = $_GET['id'];

  // We also want to add a bit of security here as well. We assume that the $article_id
  // is a number, but if someone changes the URL, as in this manner:
  // http://phpandmysql.inmotiontesting.com/page2.php?id=malicious_code_goes_here
  // ... then they will have the potential to run any code they want in your
  // database. The following code will check to ensure that $article_id is a number.
  // If it is not a number (IE someone is trying to hack your website), it will tell
  // the script to stop executing the page
  if( ! is_numeric($articleid) )
    die('invalid article id');

  // At this point, we've grabbed all of the data that we need. We now need
  // to update our SQL query. For example, instead of "John Smith", we'll
  // use $users_name. Below is our updated SQL command:
  $query = "
  INSERT INTO `inmoti6_mysite`.`comments` (`id`, `name`, `email`, `website`,
        `comment`, `timestamp`, `articleid`) VALUES (NULL, '$users_name',
        '$users_email', '$users_website', '$users_comment',
        CURRENT_TIMESTAMP, '$articleid');";

  // Our SQL stated is stored in a variable called $query. To run the SQL command
  // we need to execute what is in the $query variable.
  mysql_query($query);

  // We can inform the user to what's going on by printing a message to
  // the screen using php's echo function
  echo "&lt;h2&gt;Thank you for your Comment!&lt;/h2&gt;";

  // At this point, we've added the user's comment to the database, and we can
  // now close our connection to the database:
  mysql_close($con);
}

?&gt;
</pre>


<p>Don't let all of that code be intimidating! When we take out all of the comments, the code is much shorter and looks like this:</p>


<pre class="code_block prettyprint">
&lt;?
if( $_POST )
{
  $con = mysql_connect("localhost","inmoti6_myuser","mypassword");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("inmoti6_mysite", $con);

  $users_name = $_POST['name'];
  $users_email = $_POST['email'];
  $users_website = $_POST['website'];
  $users_comment = $_POST['comment'];

  $users_name = mysql_real_escape_string($users_name);
  $users_email = mysql_real_escape_string($users_email);
  $users_website = mysql_real_escape_string($users_website);
  $users_comment = mysql_real_escape_string($users_comment);

  $articleid = $_GET['id'];
  if( ! is_numeric($articleid) )
    die('invalid article id');

  $query = "
  INSERT INTO `inmoti6_mysite`.`comments` (`id`, `name`, `email`, `website`,
        `comment`, `timestamp`, `articleid`) VALUES (NULL, '$users_name',
        '$users_email', '$users_website', '$users_comment',
        CURRENT_TIMESTAMP, '$articleid');";

  mysql_query($query);

  echo "&lt;h2&gt;Thank you for your Comment!&lt;/h2&gt;";

  mysql_close($con);
}
?&gt;
</pre>


<h2>Step 3 - Placing our php code in our pages</h2>


<p>Now that we have the php code to insert the comments into the database, we need to put the code into our pages (page1.php and page2.php). In our <a href="/support/edu/website-design/using-php-and-mysql/using-php-include-function">previous article</a>, we showed you how to use php's include function to help manage blocks of code effeciently, and we will again use the include function.</p>


<p><strong>To incorporate our php code:</strong></p>


<ol class='article_list'>
<li>Create a file named manage_comments.php</li>
<li>Paste in the sample code above</li>
<li>Update both page1.php and page2.php to include manage_comments.php by using
<div class="code_block" style="margin: 3px 0px;">&lt;? include("manage_comments.php"); ?&gt;</div>
at the top of the file</li>
</ol>
<p>At this time, we are now working with 4 different files, and they are all in the same directory:<br /><a class="std_ss" href="//cdn.inmotionhosting.com/support/images/stories/website/phpmysql/showing-all-files-in-one-folder.gif"><img  alt="showing-all-files-in-one-folder" src="//cdn.inmotionhosting.com/support/images/stories/website/phpmysql/showing-all-files-in-one-folder.gif" /></a></p>
<p>Also, after incorporating <span class="code_block">&lt;? include("manage_comments.php"); ?&gt;</span>, our page1.php file now looks like this:</p>
<pre class="code_block">
&lt;? include("manage_comments.php"); ?&gt;

&lt;h1&gt;This is page1.php&lt;/h1&gt;

&lt;div&gt;&lt;a href='page2.php?id=2'&gt;Click here&lt;/a&gt; to go to page2.php&lt;/div&gt;

&lt;div style='margin:20px; width:100px; height:100px; background:blue;'&gt;&lt;/div&gt;

&lt;? include("formcode.php"); ?&gt;
</pre>


<p>In our <a href="/support/edu/website-design/using-php-and-mysql/stepping-through-our-php-code">next article</a>, we'll take a look at what we've done thus far and test out our comment system to see exactly how it works.</p>
 
	
						 </div>

	






  <div class='quotebordered-first raised' style='margin:15px 0px;'>
					<div class='quotebordered raised'>
						<div style='text-align:center;font-size:18px;font-weight:bold;padding-top:15px;'>Continued Education in Course <a href='/support/edu/website-design/using-php-and-mysql'>205: Using PHP to create dynamic pages</a></div>
						<div style='text-align:center;color:#c52228;'>You are viewing Section 5: Using PHP to INSERT data into a database</div>
						<table style='width:100%;margin:15px 0px;font-size:15px;line-height:17px;'>
							<tr>
								<td valign='top' style='width:50%;border-right:1px solid #aaa;text-align:left;padding-right:10px;'>
									<div style='float:left;font-size:50px;color:#aaa;margin:-4px 15px 15px 0px;'>&#x2039;</div>
									Section 4: <a href='/support/edu/website-design/using-php-and-mysql/using-php-include-function'>Using the php include function to reuse code</a>
								</td>
								<td valign='top' style='width:50%;text-align:right;padding-left:10px;'>
									<div style='float:right;font-size:50px;color:#aaa;margin:-4px 0px 15px 15px;'>&#x203A;</div>
									Section 6: <a href='/support/edu/website-design/using-php-and-mysql/stepping-through-our-php-code'>Reviewing sample PHP code that interacts with a MySQL Database</a>
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
	<iframe src='//www.facebook.com/plugins/like.php?href=http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql/php-insert-database&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=209145459223160' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:100px; height:21px;' allowTransparency='true'></iframe>
</div>

	                        
<div style='display:inline-block;'>
	<div class='g-plusone' data-size='medium' data-href='http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql/php-insert-database'></div>
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
		<input type="hidden" name="return" value="aW5kZXgucGhwP29wdGlvbj1jb21fY29udGVudCZjYXRpZD0xNjAmaWQ9MTEzNSZ2aWV3PWFydGljbGUmSXRlbWlkPTEwMQ==" />
		<input type="hidden" name="462965d1f986b99654c2f56542e64b94" value="1" />	</div>
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
          <tr style='border-top:1px solid #bbb; border-bottom:1px solid #bbb; background:#eee;'>
                        <td valign='top'>5.</td>
                        <td><a href='/support/edu/website-design/using-php-and-mysql/php-insert-database?tsrc=rsbedu'>Using PHP to INSERT data into a database</a></td>
                </tr>
          <tr >
                        <td valign='top'>6.</td>
                        <td><a href='/support/edu/website-design/using-php-and-mysql/stepping-through-our-php-code?tsrc=rsbedu'>Reviewing sample PHP code that interacts with a MySQL Database</a></td>
                </tr>
          <tr >
                        <td valign='top'>7.</td>
                        <td><a href='/support/edu/website-design/using-php-and-mysql/grab-all-comments-from-database?tsrc=rsbedu'>How to use PHP to connect to and retrieve data from MySQL</a></td>
                </tr>
          	</table>
		
		</div>
			<div class="moduletable">
						
                <h3>Related Questions</h3>
                <div>Here are a few questions related to this article that our customers have asked:</div>
        
				<div style='margin:10px 0px;'>
                                        <a href='/support/community-support/phplist/php-code-returns-empty-rows?tsrc=rsbraq'>PHP code returns empty rows</a>
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



		<a name='comment-8201'></a>
		<div  style='margin:0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh4.googleusercontent.com/-Nx_byaQJjzM/AAAAAAAAAAI/AAAAAAAABn4/yunrYZWsAdU/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/dubosqued'>dubosqued</a></div>
						<div></div>
						<div></div>
						<div>48 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-09-11 8:54 am</div>
				                <div>&quot;After you have ran&quot; should be &quot;After you have run&quot;...</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8201);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-32012'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/6fc24e0d74b581f1c4dc01edb191f708?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/6fc24e0d74b581f1c4dc01edb191f708'>Robert B</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-04-17 1:50 pm</div>
				                <div><p>Thank you for that. Some people do NOT understand how to talk...ESPECIALLY in this WORLD MARKET, instead of this NATIONAL MARKET</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32012);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-8216'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2013-09-13 3:03 pm</div>
				                <div>Hello Dubosqued,<br />
<br />
Thanks for the input!  Your correction has been applied! <br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(8216);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-9113'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/38793966da014d670f4f4c1d07fea567?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/38793966da014d670f4f4c1d07fea567'>Amir</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-03-22 7:41 pm</div>
				                <div><p>Thank your for this but i get always invalid article.</p>
<p>I tryed delete articlied process but still can not insert a new comment in a database.</p>
<p>This is mine php code.</p>

<pre class="code_block">&lt;?

  if( $_POST )

  {
  
  $con = mysql_connect("mysql1.000webhost.com","db_user","db_pass","comments");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("db_user", $con);
  $users_name = $_POST['name'];
  $users_email = $_POST['email'];
  $users_website = $_POST['website'];
  $users_comment = $_POST['comment'];
  $users_name = mysql_real_escape_string($users_name);
  $users_email = mysql_real_escape_string($users_email);
  $users_website = mysql_real_escape_string($users_website);
  $users_comment = mysql_real_escape_string($users_comment);

  $query = "

  INSERT INTO `db_user`.`comments` (`id`, `name`, `email`, `website`,

        `comment`, `timestamp`, `articleid`) VALUES (NULL, '$users_name',

        '$users_email', '$users_website', '$users_comment',

        CURRENT_TIMESTAMP, '$articleid');";

  mysql_query($query);

 echo "&lt;h2&gt;Thank you for your Comment!&lt;/h2&gt;";

  mysql_close($con);

  }  

?&gt;</pre></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(9113);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-9137'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-03-24 9:39 am</div>
				                <div>This code should appropriately insert data into a database.  What is the specific error you are getting?</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(9137);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-9284'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/38793966da014d670f4f4c1d07fea567?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/38793966da014d670f4f4c1d07fea567'>Amir</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-03-28 2:11 pm</div>
				                <div><p><span style="color: #666666; font-family: Verdana, Geneva, sans-serif; font-size: 18px; text-align: center;">invalid article id</span></p>
<p><span style="color: #666666; font-family: Verdana, Geneva, sans-serif; font-size: 18px; text-align: center;">This error i get all time.</span></p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(9284);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-9285'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-03-28 2:53 pm</div>
				                <div>&lt;div style=&quot;width: 90%; background-color: #FFF; padding-left: 10px;&quot;&gt;Hello Amir,<br />
<br />
It looks like you've got an &lt;span style=&quot;color: red;&quot;&gt;extra entry&lt;/span&gt; in your MySQL connect line, here is yours:<br />
<br />
&lt;pre class=&quot;code_block&quot;&gt;$con = mysql_connect(&quot;mysql1.000webhost.com&quot;,&quot;db_user&quot;,&quot;db_pass&quot;&lt;span style=&quot;color: red;&quot;&gt;,&quot;comments&quot;&lt;/span&gt;);&lt;/pre&gt;<br />
<br />
While the original mentioned in this article is:<br />
<br />
&lt;pre class=&quot;code_block&quot;&gt;$con = mysql_connect(&quot;localhost&quot;,&quot;inmoti6_myuser&quot;,&quot;mypassword&quot;);&lt;/pre&gt;<br />
<br />
It appears the code that you have pasted in the comment above is not the full PHP script detailed in this guide. As you seem to be missing this section of the code dealing with throwing that error &lt;strong&gt;invalid article id&lt;/strong&gt;:<br />
<br />
&lt;pre class=&quot;code_block&quot;&gt; $articleid = $_GET['id'];<br />
  if( ! is_numeric($articleid) )<br />
    die('invalid article id');&lt;/pre&gt;<br />
<br />
If you've removed this line, the script should still function and place a comment in the database. You might want to double-check to ensure that you've &lt;a href=&quot;http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql/database-setup&quot; target=&quot;_blank&quot;&gt;setup a database to handle form data&lt;/a&gt; correctly, and also that you properly &lt;a href=&quot;http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql/create-html-form&quot; target=&quot;_blank&quot;&gt;create a HTML form to get user comments&lt;/a&gt;.<br />
<br />
- Jacob&lt;/div&gt;</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(9285);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-10376'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/a7b2e0c706df257af3ef19a0001e7ebc?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/a7b2e0c706df257af3ef19a0001e7ebc'>shams</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-05-05 8:00 am</div>
				                <div><p>COULD NOT CONNECT MYSQL_ERROR</p>
<p>HELP ME BRO</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&lt;?php</p>
<p>if(isset($_POST['form']))</p>
<p>$con=mysql_connect("localhost","root","");</p>
<p>$db="dum";</p>
<p>if</p>
<p>(!$con)</p>
<p>{</p>
<p>die("could not connect:mysql_error()");</p>
<p>}</p>
<p>if (mysql_query("CREATE DATABASE dum;$con"))</p>
<p>{</p>
<p>echo"your Database created which name is:dum";</p>
<p>}</p>
<p>else</p>
<p>{</p>
<p>echo"Error creating database:".mysql_error();</p>
<p>}</p>
<p>//create table</p>
<p>if(!$con)</p>
<p>mysql_select_db("dum",$con);</p>
<p>{</p>
<p>die('could not connect:'.mysql_error());</p>
<p>}</p>
<p>if(! get_magic_quotes_gpc() )</p>
<p>$sql="CREATE TABLE&nbsp;</p>
<p>(</p>
<p>name VARCHAR (50);</p>
<p>destination VACHAR (30);</p>
<p>sal int(10);</p>
<p>qualificaqtion VARCHAR (35);</p>
<p>)";</p>
<p>mysql_query($dum,$con);</p>
<p>echo"your table created which is as follows";</p>
<p>&nbsp;</p>
<p>//insert data</p>
<p>&nbsp;</p>
<p>{</p>
<p>$name=$_POST['name'];</p>
<p>$destinatiion=$_POST['destination'];</p>
<p>$sal=$_POST['sal'];</p>
<p>$qualification=$_POST['qualification'];</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>$sql="INSERT INTO $gum(id,name,destination,sal,qualification)</p>
<p>VALUES('$name','$destionation','$sal','$qualification')";</p>
<p>&nbsp;</p>
<p>mysql_query($query);</p>
<p>&nbsp;</p>
<p>if(! $retval )</p>
<p>{</p>
<p>&nbsp; die('Could not enter data: ' . mysql_error());</p>
<p>}</p>
<p>echo "Entered data successfully\n";</p>
<p>&nbsp;</p>
<p>}</p>
<p>&nbsp;</p>
<p>mysql_close($con)</p>
<p>?&gt;</p>
<p>&lt;table border="1"&gt;</p>
<p>&lt;tr&gt;</p>
<p>&lt;td align="center"&gt;Form Input Employees data&lt;/td&gt;</p>
<p>&lt;/tr&gt;</p>
<p>&lt;tr&gt;</p>
<p>&lt;td&gt;</p>
<p>&lt;table&gt;</p>
<p>&lt;form method="post"actio="post"&gt;</p>
<p>&lt;tr&gt;</p>
<p>&lt;td&gt;Name&lt;/td&gt;</p>
<p>&lt;td&gt;&lt;input type="text"name="name"size="50"&gt;</p>
<p>&lt;/td&gt;</p>
<p>&lt;/tr&gt;</p>
<p>&lt;tr&gt;</p>
<p>&lt;td&gt;Destination&lt;/td&gt;</p>
<p>&lt;td&gt;&lt;input type="text"name="Destination"size="30"&gt;</p>
<p>&lt;/td&gt;</p>
<p>&lt;/tr&gt;</p>
<p>&lt;tr&gt;</p>
<p>&lt;td&gt;sal&lt;/td&gt;</p>
<p>&lt;td&gt;&lt;input type="text"name="sal"size="10"&gt;</p>
<p>&lt;/td&gt;</p>
<p>&lt;/tr&gt;</p>
<p>&lt;tr&gt;</p>
<p>&lt;td&gt;Qualification&lt;/td&gt;</p>
<p>&lt;td&gt;&lt;input type="text"name="Qualification"size="35" &gt;</p>
<p>&lt;/td&gt;</p>
<p>&lt;/tr&gt;</p>
<p>&lt;tr&gt;</p>
<p>&lt;td&gt;&lt;/td&gt;</p>
<p>&lt;td align="right"&gt;&lt;input type="submit"</p>
<p>name="submit"value="sent" &gt;&lt;/td&gt;</p>
<p>&lt;/tr&gt;</p>
<p>&lt;/table&gt;</p>
<p>&lt;/td&gt;</p>
<p>&lt;/tr&gt;</p>
<p>&lt;/table&gt;</p>
<p>&nbsp;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;&lt;?php</p>
<p>if(isset($_POST['form']))</p>
<p>$con=mysql_connect("localhost","root","");</p>
<p>$db="dum";</p>
<p>if</p>
<p>(!$con)</p>
<p>{</p>
<p>die("could not connect:mysql_error()");</p>
<p>}</p>
<p>if (mysql_query("CREATE DATABASE dum;$con"))</p>
<p>{</p>
<p>echo"your Database created which name is:dum";</p>
<p>}</p>
<p>else</p>
<p>{</p>
<p>echo"Error creating database:".mysql_error();</p>
<p>}</p>
<p>//create table</p>
<p>if(!$con)</p>
<p>mysql_select_db("dum",$con);</p>
<p>{</p>
<p>die('could not connect:'.mysql_error());</p>
<p>}</p>
<p>if(! get_magic_quotes_gpc() )</p>
<p>$sql="CREATE TABLE&nbsp;</p>
<p>(</p>
<p>name VARCHAR (50);</p>
<p>destination VACHAR (30);</p>
<p>sal int(10);</p>
<p>qualificaqtion VARCHAR (35);</p>
<p>)";</p>
<p>mysql_query($dum,$con);</p>
<p>echo"your table created which is as follows";</p>
<p>&nbsp;</p>
<p>//insert data</p>
<p>&nbsp;</p>
<p>{</p>
<p>$name=$_POST['name'];</p>
<p>$destinatiion=$_POST['destination'];</p>
<p>$sal=$_POST['sal'];</p>
<p>$qualification=$_POST['qualification'];</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>$sql="INSERT INTO $gum(id,name,destination,sal,qualification)</p>
<p>VALUES('$name','$destionation','$sal','$qualification')";</p>
<p>&nbsp;</p>
<p>mysql_query($query);</p>
<p>&nbsp;</p>
<p>if(! $retval )</p>
<p>{</p>
<p>&nbsp; die('Could not enter data: ' . mysql_error());</p>
<p>}</p>
<p>echo "Entered data successfully\n";</p>
<p>&nbsp;</p>
<p>}</p>
<p>&nbsp;</p>
<p>mysql_close($con)</p>
<p>?&gt;</p>
<p>&lt;table border="1"&gt;</p>
<p>&lt;tr&gt;</p>
<p>&lt;td align="center"&gt;Form Input Employees data&lt;/td&gt;</p>
<p>&lt;/tr&gt;</p>
<p>&lt;tr&gt;</p>
<p>&lt;td&gt;</p>
<p>&lt;table&gt;</p>
<p>&lt;form method="post"actio="post"&gt;</p>
<p>&lt;tr&gt;</p>
<p>&lt;td&gt;Name&lt;/td&gt;</p>
<p>&lt;td&gt;&lt;input type="text"name="name"size="50"&gt;</p>
<p>&lt;/td&gt;</p>
<p>&lt;/tr&gt;</p>
<p>&lt;tr&gt;</p>
<p>&lt;td&gt;Destination&lt;/td&gt;</p>
<p>&lt;td&gt;&lt;input type="text"name="Destination"size="30"&gt;</p>
<p>&lt;/td&gt;</p>
<p>&lt;/tr&gt;</p>
<p>&lt;tr&gt;</p>
<p>&lt;td&gt;sal&lt;/td&gt;</p>
<p>&lt;td&gt;&lt;input type="text"name="sal"size="10"&gt;</p>
<p>&lt;/td&gt;</p>
<p>&lt;/tr&gt;</p>
<p>&lt;tr&gt;</p>
<p>&lt;td&gt;Qualification&lt;/td&gt;</p>
<p>&lt;td&gt;&lt;input type="text"name="Qualification"size="35" &gt;</p>
<p>&lt;/td&gt;</p>
<p>&lt;/tr&gt;</p>
<p>&lt;tr&gt;</p>
<p>&lt;td&gt;&lt;/td&gt;</p>
<p>&lt;td align="right"&gt;&lt;input type="submit"</p>
<p>name="submit"value="sent" &gt;&lt;/td&gt;</p>
<p>&lt;/tr&gt;</p>
<p>&lt;/table&gt;</p>
<p>&lt;/td&gt;</p>
<p>&lt;/tr&gt;</p>
<p>&lt;/table&gt;</p>
<p>&nbsp;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(10376);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-10392'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-05-05 1:06 pm</div>
				                <div>Hello Shams,<br />
<br />
Running the code you provided, the first line evaluates as False. This means it will not run the second line of code, which is where your connection should set up. Since the connection is never set up nor connected it fails the check and gives the error code you see on the screen. <br />
<br />
To learn more about this please check our article on <a href="http://www.inmotionhosting.com/support/website/database-connections/connecting-to-a-database-using-php">Connecting to a Database using PHP</a>.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(10392);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-11308'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/30b832b7249a5b64e0d643a2893bafef?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/30b832b7249a5b64e0d643a2893bafef'>Asghar Iqbal</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-06-10 3:00 am</div>
				                <div><p>Hello, i have used this code and after pressing the submit button the query is executed and displays the message "Thank You For Your Comment " but when i open my datatbase the&nbsp; data is not inserted into table, everything is correct but still data is not inserted...???? help??</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(11308);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-11318'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-06-10 8:19 am</div>
				                <div>Could you provide us with the code that is causing the issue?</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(11318);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-11396'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/cc3bac01e2a12d239251cfdd2fc7adde?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/cc3bac01e2a12d239251cfdd2fc7adde'>Roclemir</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-06-11 10:03 am</div>
				                <div><p>Can't figure out what's going on here. It's a singe page, single topic setup. I've embeded the code for manage_comments.php straight into index.html - and it all seems to work, except for actually putting the comment into the database. It does say "Thank you for your Comment! - but there's no database entry. Any ideas?</p>
<p>&lt;?</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if( $_POST )</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$con = mysql_connect("localhost","xxxxx","yyyyy");</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (!$con)</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; die('Could not connect: ' . mysql_error());</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; mysql_select_db("databasename", $con);</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $users_comment = $_POST['comment'];</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $users_comment = mysql_real_escape_string($users_comment);</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $query = "</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; INSERT INTO `databasename`.`comments` (`id`,`timestamp`, `comment`) VALUES (DEFAULT, CURRENT_TIMESTAMP, '$users_comment');";</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; mysql_query($query);</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; echo "&lt;h2&gt;Thank you for your Comment!&lt;/h2&gt;";</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; mysql_close($con);</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ?&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;?php include('formcode.php'); ?&gt;</p>
<p>&nbsp;</p>
<p>The database has 3 columns. ID (whcih auto-increments with DEFAULT), timestamp, and the actualy comment. Nothing gets populated, no error message. Just the flash on the screen saying "Thank you for your Comment".&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(11396);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-11405'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-06-11 11:28 am</div>
				                <div>Looking over your code, it looks fine.  To further debug the issue, I recommend that you echo out the $query variable that you have set and take a look at it.  If it looks fine, try to run it through PHPMyAdmin and see what happens.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(11405);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-11637'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/3411cc44876d8b72d7af6e659c3063c6?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/3411cc44876d8b72d7af6e659c3063c6'>kenyan</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-06-16 4:22 am</div>
				                <div><p>im trying to add data to my database bt its not. kindly assist guys</p>
<p>&lt;?php</p>
<p>&nbsp;</p>
<p>require_once('connect.php');</p>
<p>//receive values from form and assign them to variable</p>
<p>$school_id = $_POST['school_id'];</p>
<p>$sch_name = $_POST['sch_name'];</p>
<p>$team = $_POST['team'];</p>
<p>$amount = $_POST['amount'];</p>
<p>$telephone = $_POST['telephone'];</p>
<p>$year = $_POST['year'];</p>
<p>&nbsp;</p>
<p>//execute insert statement</p>
<p>$mydata ="insert into registration (school_id,sch_name,team,amount,telephone,year)</p>
<p>values('$school_id','$sch_name','$team','$amount','$telephone','$year')";</p>
<p>if(!mysql_query($mydata))</p>
<p>{</p>
<p>echo "Record not added into the table";</p>
<p>}</p>
<p>else</p>
<p>echo "Recorded added successfully!";</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>mysql_close($mydata);</p>
<p>&nbsp;</p>
<p>?&gt;</p>
<div id="wrchoverdiv">
<div id="wrccontainer" style="background: #a5abb2 url('chrome-extension://gomekmidlodglbbmalcneegieacbdmki/common/skin/img/se_icn_norating.png');">
<div id="wrcratingtext">This site has no rating</div>
<div class="wrclogo">&nbsp;</div>
</div>
</div></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(11637);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-11656'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-06-16 10:08 am</div>
				                <div>Could you clarify what exactly happens when you attempt to run your script?</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(11656);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-28961'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/2ca1297100ca409caa8401533bbb0286?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/2ca1297100ca409caa8401533bbb0286'>Saf</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-12-03 10:47 am</div>
				                <div><p>Im having the same issue.&nbsp; This is my formcode:</p>
<p>&nbsp;</p>
<p>&lt;form method='post'&gt;&nbsp; NAME: &lt;input type='text' name='name' id='name' /&gt;&lt;br /&gt;</p>
<p>&nbsp; Email: &lt;input type='text' name='email' id='email' /&gt;&lt;br /&gt;</p>
<p>&nbsp; Website: &lt;input type='text' name='website' id='website' /&gt;&lt;br /&gt;</p>
<p>&nbsp; Comment:&lt;br /&gt;&nbsp; &lt;textarea name='comment' id='comment'&gt;&lt;/textarea&gt;&lt;br /&gt;</p>
<p>&nbsp; &lt;input type='hidden' name='articleid' id='articleid' value='&lt;? echo $_GET["id"]; ?&gt;' /&gt;</p>
<p>&nbsp; &lt;input type='submit' value='Submit' /&gt;&nbsp; &lt;/form&gt;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>this is my manage_comments code:</p>
<p>&nbsp;</p>
<p>&lt;?if( $_POST ){&nbsp; $con = mysql_connect("localhost","saifi_myuser","Firefox1");</p>
<p>&nbsp; &nbsp; if (!$con)&nbsp; {&nbsp;&nbsp;&nbsp; die('Could not connect: ' . mysql_error());&nbsp; }</p>
<p>&nbsp; mysql_select_db("saifi_mysite", $con);</p>
<p>&nbsp; $users_name = $_POST['name'];&nbsp; $users_email = $_POST['email'];&nbsp; $users_website = $_POST['website'];&nbsp; $users_comment = $_POST['comment'];</p>
<p>&nbsp; $users_name = mysql_real_escape_string($users_name);&nbsp; $users_email = mysql_real_escape_string($users_email);&nbsp; $users_website = mysql_real_escape_string($users_website);&nbsp; $users_comment = mysql_real_escape_string($users_comment);</p>
<p>&nbsp; $articleid = $_GET['id'];&nbsp; if( ! is_numeric($articleid) )&nbsp;&nbsp;&nbsp; die('invalid article id');</p>
<p>&nbsp; $query = "&nbsp; INSERT INTO `saifi_mysite`.`comments` (`id`, `name`, `email`, `website`,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; `comment`, `timestamp`, `articleid`) VALUES (NULL, '$users_name',&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '$users_email', '$users_website', '$users_comment',&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CURRENT_TIMESTAMP, '$articleid');";</p>
<p>&nbsp; mysql_query($query);</p>
<p>&nbsp; echo "&lt;h2&gt;Thank you for your Comment!&lt;/h2&gt;";</p>
<p>&nbsp; mysql_close($con);}?&gt;</p>
<p>&nbsp;</p>
<p>page 1:</p>
<p>&nbsp;</p>
<p>&lt;? include("manage_comments.php"); ?&gt;</p>
<p>&lt;h1&gt;This is page1.php&lt;/h1&gt;</p>
<p>&lt;div&gt;&lt;a href='page2.php?id=2'&gt;Click here&lt;/a&gt; to go to page2.php&lt;/div&gt;</p>
<p>&lt;div style='margin:20px; width:100px; height:100px; background:blue;'&gt;&lt;/div&gt;</p>
<p>&lt;? include("formcode.php"); ?&gt;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>page 2:</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&lt;? include("manage_comments.php"); ?&gt;</p>
<p>&lt;h1&gt;This is page2.php&lt;/h1&gt;</p>
<p>&lt;div&gt;&lt;a href='page1.php?id=1'&gt;Click here&lt;/a&gt; to go to page1.php&lt;/div&gt;</p>
<p>&lt;div style='margin:20px; width:100px; height:100px; background:orange'&gt;&lt;/div&gt;</p>
<p>&lt;? include("formcode.php"); ?&gt;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Once hitting "submit" the page displays "Thank you for your comment" however nothing is sent to the database.</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(28961);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-28975'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-12-03 3:42 pm</div>
				                <div>Hello Saf,<br />
<br />
Apologies with the problems with your code.  Can you tell us what is happening when you try to use your code?  Are you getting a particular error message?  Are you using the same code as what is provided in the article above?  We do not provide programming support as it is beyond the scope of our support.  If you are using something different from the provided code in the article, then you may want to consult with a developer for the issue.   We can look at errors and help to point you in helpful  direction for issues.  If you have any further questions or comments, please let us know.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(28975);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-12217'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/684661c61c1acac85ee40cebafede8b6?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/684661c61c1acac85ee40cebafede8b6'>amit</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-01 11:09 am</div>
				                <div><p>hi - everything seems to be working, but the rows that get inserted into mysql database are just blank, here is the code i'm using:</p>
<p>&nbsp;</p>
<p><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">&lt;? if( $_POST ) { $con =</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">mysql_connect("localhost","</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">ami</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">tpatel","denlax11"); if (!$con) {</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">die('Could not connect: ' . mysql_error()); }</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">mysql_select_db("Inquiries", $con); $users_firstname =</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">$_POST['FNAME']; $users_lastname = $_POST['LNAME']; $users_email =</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">$_POST['EMAIL']; $users_comments = $_POST['COMMENTS'];</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">$users_firstname = mysql_real_escape_string($</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">user</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">s_firstname);</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">$users_lastname = mysql_real_escape_string($</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">user</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">s_lastname);</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">$users_email = mysql_real_escape_string($</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">user</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">s_email); $users_comments</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">= mysql_real_escape_string($</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">user</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">s_comments); $query = " INSERT INTO</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">`Inquiries`.`Inquiries` (`IDKEY`, `FNAME`, `LNAME`, `EMAIL`,</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">`COMMENTS`, `DATE`) VALUES (NULL, '$users_firstname',</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">'$users_lastname', '$users_email', '$users_comments',</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">CURRENT_TIMESTAMP);"; mysql_query($query); echo "&lt;h2&gt;Thank you for</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">your Comment!&lt;/h2&gt;"; mysql_close($con); } ?&gt;</span></p>
<p>&nbsp;</p>
<p>also - what does the $users mean before the form id fields? do i need to change that to something else?</p>
<p>&nbsp;</p>
<p>Thanks!</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(12217);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-12219'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-01 11:34 am</div>
				                <div>Hello amit,<br />
<br />
I would have your code echo out the query to ensure they are getting populated. Also make sure you error check the query as well for any information it may be putting out.<br />
<br />
Kindest Regards,<br />
Scott M<br />
</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(12219);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-12220'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/684661c61c1acac85ee40cebafede8b6?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/684661c61c1acac85ee40cebafede8b6'>amit</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-01 11:36 am</div>
				                <div><p>hi scott - thanks for the quick response. i'm pretty newb to this so can you elaborate on what you mean by have my code echo out the query?</p>
<p>&nbsp;</p>
<p>THanks!</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(12220);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-12222'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-01 12:02 pm</div>
				                <div>Hello Amit,<br />
What you want to do is to have a statement like the one below after you set your $query variable:<br />
<div class="code_block">echo $query;</div><br />
This should print out the full query statement that is being run against the database. It will show you whether or not the variable fields are being populated before the insert.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(12222);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-12760'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/fd4b15d45651c1f0acfc7c39027cce10?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/fd4b15d45651c1f0acfc7c39027cce10'>PHP Training in Indore</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-15 2:42 am</div>
				                <div><p>This code should appropriately insert data into a database. What is the specific error you are getting?</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(12760);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13064'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/72db68ab76442d7191b01dfaa56aa703?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/72db68ab76442d7191b01dfaa56aa703'>Love PHP</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-21 4:10 am</div>
				                <div><p><span style="color: rgb(35, 35, 35); font-family: adelle-sans, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 22px;">Hi guys, I'm very interested in PHP after looking at this tutorial and I decided to a small project for myself. I have created my own Web Control Interface and setup hardware already, by the way, I'm using Raspberry PI as my hardware.</span></p>
<p><span style="color: rgb(35, 35, 35); font-family: adelle-sans, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 22px;">The main issues right now is that I don't know why my INSERT method won't works and when I check mySQL database, is empty. Hope you guys could help me out with it as soon as possible, thanks in advance, guys.</span></p>
<p><strong><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 22px;">This is my control.php:</span></strong></p>
<p><strong>&lt;?php</strong></p>
<p><strong>error_reporting(E_ALL);</strong></p>
<p><strong>ini_set('display_errors','On');</strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong>session_start();</strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong>$MySQLUsername = "gpio";</strong></p>
<p><strong>$MySQLPassword = "kang";</strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong>$MySQLHost = "localhost";</strong></p>
<p><strong>$MySQLDB = "gpio";</strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong>If (($MySQLUsername == "USERNAME HERE") || ($MySQLPassword == "PASSWORD HERE")){</strong></p>
<p><strong>print 'ERROR - Please set up the script first';</strong></p>
<p><strong>exit();</strong></p>
<p><strong>}</strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong>$dbConnection = mysql_connect($MySQLHost, $MySQLUsername, $MySQLPassword);</strong></p>
<p><strong>mysql_select_db($MySQLDB, $dbConnection);</strong></p>
<p><strong>If (isset($_POST['action'])){</strong></p>
<p><strong>If ($_POST['action'] == "setPassword"){</strong></p>
<p><strong>$password1 = $_POST['password1'];</strong></p>
<p><strong>$password2 = $_POST['password2'];</strong></p>
<p><strong>If ($password1 != $password2){</strong></p>
<p><strong>header('Location: control.php');</strong></p>
<p><strong>}</strong></p>
<p><strong>$password = mysql_real_escape_string($_POST['password1']);</strong></p>
<p><strong>If (strlen($password) &gt; 28){</strong></p>
<p><strong>mysql_close();</strong></p>
<p><strong>header('location: control.php');</strong></p>
<p><strong>}</strong></p>
<p><strong>$resetQuery = "SELECT username, salt FROM users WHERE username = 'admin';";</strong></p>
<p><strong>$resetResult = mysql_query($resetQuery);</strong></p>
<p><strong>If (mysql_num_rows($resetResult) &lt; 1){</strong></p>
<p><strong>mysql_close();</strong></p>
<p><strong>header('location: control.php');</strong></p>
<p><strong>}</strong></p>
<p><strong>$resetData = mysql_fetch_array($resetResult, MYSQL_ASSOC);</strong></p>
<p><strong>$resetHash = hash('sha256', $salt . hash('sha256', $password));</strong></p>
<p><strong>$hash = hash('sha256', $password);</strong></p>
<p><strong>function createSalt(){</strong></p>
<p><strong>$string = md5(uniqid(rand(), true));</strong></p>
<p><strong>return substr($string, 0, 8);</strong></p>
<p><strong>}</strong></p>
<p><strong>$salt = createSalt();</strong></p>
<p><strong>$hash = hash('sha256', $salt . $hash);</strong></p>
<p><strong>mysql_query("UPDATE users SET salt='$salt' WHERE username='admin'");</strong></p>
<p><strong>mysql_query("UPDATE users SET password='$hash' WHERE username='admin'");</strong></p>
<p><strong>mysql_close();</strong></p>
<p><strong>header('location: control.php');</strong></p>
<p><strong>}</strong></p>
<p><strong>}</strong></p>
<p><strong>If ((isset($_POST['username'])) &amp;&amp; (isset($_POST['password']))){</strong></p>
<p><strong>$username = mysql_real_escape_string($_POST['username']);</strong></p>
<p><strong>$password = mysql_real_escape_string($_POST['password']);</strong></p>
<p><strong>$loginQuery = "SELECT UserID, password, salt FROM users WHERE username = '$username';";</strong></p>
<p><strong>$loginResult = mysql_query($loginQuery);</strong></p>
<p><strong>If (mysql_num_rows($loginResult) &lt; 1){</strong></p>
<p><strong>mysql_close();</strong></p>
<p><strong>header('location: control.php?error=incorrectLogin');</strong></p>
<p><strong>}</strong></p>
<p><strong>$loginData = mysql_fetch_array($loginResult, MYSQL_ASSOC);</strong></p>
<p><strong>$loginHash = hash('sha256', $loginData['salt'] . hash('sha256', $password));</strong></p>
<p><strong>If ($loginHash != $loginData['password']){</strong></p>
<p><strong>mysql_close();</strong></p>
<p><strong>header('location: control.php?error=incorrectLogin');</strong></p>
<p><strong>} else {</strong></p>
<p><strong>session_regenerate_id();</strong></p>
<p><strong>$_SESSION['username'] = "admin";</strong></p>
<p><strong>$_SESSION['userID'] = "1";</strong></p>
<p><strong>mysql_close();</strong></p>
<p><strong>header('location: control.php');</strong></p>
<p><strong>}</strong></p>
<p><strong>}</strong></p>
<p><strong>If ((!isset($_SESSION['username'])) || (!isset($_SESSION['userID']))){</strong></p>
<p><strong>print '</strong></p>
<p><strong>&lt;html&gt;</strong></p>
<p><strong>&lt;head&gt;</strong></p>
<p><strong>&lt;title&gt;GPIO Control - Login&lt;/title&gt;</strong></p>
<p><strong>&lt;/head&gt;</strong></p>
<p><strong>&lt;body&gt;</strong></p>
<p><strong>&lt;table border="0" align="center"&gt;</strong></p>
<p><strong>&lt;form name="login" action="control.php" method="post"&gt;</strong></p>
<p><strong>&lt;tr&gt;</strong></p>
<p><strong>&lt;td&gt;Username: &lt;/td&gt;&lt;td&gt;&lt;input type="text" name="username"&gt;&lt;/td&gt;</strong></p>
<p><strong>&lt;/tr&gt;</strong></p>
<p><strong>&lt;tr&gt;</strong></p>
<p><strong>&lt;td&gt;Password: &lt;/td&gt;&lt;td&gt;&lt;input type="password" name="password"&gt;&lt;/td&gt;</strong></p>
<p><strong>&lt;/tr&gt;</strong></p>
<p><strong>&lt;tr&gt;</strong></p>
<p><strong>&lt;td colspan="2" align="center"&gt;&lt;input type="submit" value="Log In"&gt;&lt;/td&gt;</strong></p>
<p><strong>&lt;/tr&gt;</strong></p>
<p><strong>&lt;/form&gt;</strong></p>
<p><strong>&lt;/table&gt;</strong></p>
<p><strong>&lt;/body&gt;</strong></p>
<p><strong>&lt;/html&gt;</strong></p>
<p><strong>';</strong></p>
<p><strong>die();</strong></p>
<p><strong>}</strong></p>
<p><strong>If (isset($_GET['action'])){</strong></p>
<p><strong>If ($_GET['action'] == "logout"){</strong></p>
<p><strong>$_SESSION = array();</strong></p>
<p><strong>session_destroy();</strong></p>
<p><strong>header('Location: control.php');</strong></p>
<p><strong>} else If ($_GET['action'] == "setPassword"){</strong></p>
<p><strong>print '</strong></p>
<p><strong>&lt;form name="changePassword" action="control.php" method="post"&gt;</strong></p>
<p><strong>&lt;input type="hidden" name="action" value="setPassword"&gt;</strong></p>
<p><strong>&lt;p&gt;Enter New Password: &lt;input type="password" name="password1"&gt; &nbsp;Confirm: &lt;input type="password" name="password2"&gt;&lt;input type="submit" value="submit"&gt;&lt;/p&gt;</strong></p>
<p><strong>&lt;/form&gt;</strong></p>
<p><strong>';</strong></p>
<p><strong>} else {</strong></p>
<p><strong>$action = $_GET['action'];</strong></p>
<p><strong>$storing = $_POST['storing'];</strong></p>
<p><strong>$pin = mysql_real_escape_string($_GET['pin']);</strong></p>
<p><strong>if ($action == "turnOn"){</strong></p>
<p><strong>$setting = "1";</strong></p>
<p><strong>mysql_query("UPDATE pinStatus SET pinStatus='$setting' WHERE pinNumber='$pin';");</strong></p>
<p><strong>mysql_close();</strong></p>
<p><strong>header('Location: control.php');</strong></p>
<p><strong>} else If ($action == "turnOff"){</strong></p>
<p><strong>$setting = "0";</strong></p>
<p><strong>mysql_query("UPDATE pinStatus SET pinStatus='$setting' WHERE pinNumber='$pin';");</strong></p>
<p><strong>mysql_close();</strong></p>
<p><strong>header('Location: control.php');</strong></p>
<p><strong>} else If ($storing == "turnOn"){</strong></p>
<p><strong>mysql_query("INSERT INTO 'gpio'.'sensor' ('id', 'sensorId', 'sensor', 'switchOnLog', 'switchOffLog') VALUES (NULL, '1', 'Red LED', NOW(), '') FROM pinStatus WHERE pinNumber='4';");</strong></p>
<p><strong>mysql_query("INSERT INTO 'gpio'.'sensor' ('id', 'sensorId', 'sensor', 'switchOnLog', 'switchOffLog') VALUES (NULL, '2', 'Blue LED', NOW(), '') FROM pinStatus WHERE pinNumber='17';");</strong></p>
<p><strong>mysql_query("INSERT INTO 'gpio'.'sensor' ('id', 'sensorId', 'sensor', 'switchOnLog', 'switchOffLog') VALUES (NULL, '3', 'LED', NOW(), '') FROM pinStatus WHERE pinNumber='18';");</strong></p>
<p><strong>mysql_query("INSERT INTO 'gpio'.'sensor' ('id', 'sensorId', 'sensor', 'switchOnLog', 'switchOffLog') VALUES (NULL, '4', 'LED', NOW(), '') FROM pinStatus WHERE pinNumber='21';");</strong></p>
<p><strong>mysql_query("INSERT INTO 'gpio'.'sensor' ('id', 'sensorId', 'sensor', 'switchOnLog', 'switchOffLog') VALUES (NULL, '5', 'LED', NOW(), '') FROM pinStatus WHERE pinNumber='22';");</strong></p>
<p><strong>mysql_query("INSERT INTO 'gpio'.'sensor' ('id', 'sensorId', 'sensor', 'switchOnLog', 'switchOffLog') VALUES (NULL, '6', 'Green LED', NOW(), '') FROM pinStatus WHERE pinNumber='23';");</strong></p>
<p><strong>mysql_query("INSERT INTO 'gpio'.'sensor' ('id', 'sensorId', 'sensor', 'switchOnLog', 'switchOffLog') VALUES (NULL, '7', 'LED', NOW(), '') FROM pinStatus WHERE pinNumber='24';");</strong></p>
<p><strong>mysql_query("INSERT INTO 'gpio'.'sensor' ('id', 'sensorId', 'sensor', 'switchOnLog', 'switchOffLog') VALUES (NULL, '8', 'LED', NOW(), '') FROM pinStatus WHERE pinNumber='25';");</strong></p>
<p><strong>mysql_close();</strong></p>
<p><strong>header('Location: control.php');</strong></p>
<p><strong>} else If ($storing == "turnOff"){</strong></p>
<p><strong>mysql_query("INSERT INTO 'gpio'.'sensor' ('id', 'sensorId', 'sensor', 'switchOnLog', 'switchOffLog') VALUES (NULL, '1', 'Red LED', '', NOW()) FROM pinStatus WHERE pinNumber='4';");</strong></p>
<p><strong>mysql_query("INSERT INTO 'gpio'.'sensor' ('id', 'sensorId', 'sensor', 'switchOnLog', 'switchOffLog') VALUES (NULL, '2', 'Blue LED', '', NOW()) FROM pinStatus WHERE pinNumber='17';");</strong></p>
<p><strong>mysql_query("INSERT INTO 'gpio'.'sensor' ('id', 'sensorId', 'sensor', 'switchOnLog', 'switchOffLog') VALUES (NULL, '3', 'LED', '', NOW()) FROM pinStatus WHERE pinNumber='18';");</strong></p>
<p><strong>mysql_query("INSERT INTO 'gpio'.'sensor' ('id', 'sensorId', 'sensor', 'switchOnLog', 'switchOffLog') VALUES (NULL, '4', 'LED', '', NOW()) FROM pinStatus WHERE pinNumber='21';");</strong></p>
<p><strong>mysql_query("INSERT INTO 'gpio'.'sensor' ('id', 'sensorId', 'sensor', 'switchOnLog', 'switchOffLog') VALUES (NULL, '5', 'LED', '', NOW()) FROM pinStatus WHERE pinNumber='22';");</strong></p>
<p><strong>mysql_query("INSERT INTO 'gpio'.'sensor' ('id', 'sensorId', 'sensor', 'switchOnLog', 'switchOffLog') VALUES (NULL, '6', 'Green LED', '', NOW()) FROM pinStatus WHERE pinNumber='23';");</strong></p>
<p><strong>mysql_query("INSERT INTO 'gpio'.'sensor' ('id', 'sensorId', 'sensor', 'switchOnLog', 'switchOffLog') VALUES (NULL, '7', 'LED', '', NOW()) FROM pinStatus WHERE pinNumber='24';");</strong></p>
<p><strong>mysql_query("INSERT INTO 'gpio'.'sensor' ('id', 'sensorId', 'sensor', 'switchOnLog', 'switchOffLog') VALUES (NULL, '8', 'LED', '', NOW()) FROM pinStatus WHERE pinNumber='25';");</strong></p>
<p><strong>mysql_close();</strong></p>
<p><strong>header('Location: control.php');</strong></p>
<p><strong>} else IF ($action =="edit"){</strong></p>
<p><strong>$pin = mysql_real_escape_string($_GET['pin']);</strong></p>
<p><strong>$query = mysql_query("SELECT pinDescription FROM pinDescription WHERE pinNumber='$pin';");</strong></p>
<p><strong>$descRow = mysql_fetch_assoc($query);</strong></p>
<p><strong>$description = $descRow['pinDescription'];</strong></p>
<p><strong>print '</strong></p>
<p><strong>&lt;html&gt;&lt;head&gt;&lt;title&gt;Update Pin ' . $pin . '&lt;/title&gt;&lt;/head&gt;&lt;body&gt;</strong></p>
<p><strong>&lt;table border="0"&gt;</strong></p>
<p><strong>&lt;form name="edit" action="control.php" method="get"&gt;</strong></p>
<p><strong>&lt;input type="hidden" name="action" value="update"&gt;</strong></p>
<p><strong>&lt;input type="hidden" name="pin" value="' . $pin . '"&gt;</strong></p>
<p><strong>&lt;tr&gt;</strong></p>
<p><strong>&lt;td&gt;&lt;p&gt;Description: &lt;/p&gt;&lt;/td&gt;&lt;td&gt;&lt;input type="text" name="description" value="' . $description . '"&gt;&lt;/td&gt;&lt;td&gt;&lt;input type="submit" value="Confirm"&gt;&lt;/td&gt;</strong></p>
<p><strong>&lt;/tr&gt;</strong></p>
<p><strong>&lt;/form&gt;</strong></p>
<p><strong>&lt;/table&gt;</strong></p>
<p><strong>&lt;/body&gt;&lt;/html&gt;</strong></p>
<p><strong>';</strong></p>
<p><strong>mysql_close();</strong></p>
<p><strong>} else IF ($action =="update"){</strong></p>
<p><strong>$pin = mysql_real_escape_string($_GET['pin']);</strong></p>
<p><strong>$description = mysql_real_escape_string($_GET['description']);</strong></p>
<p><strong>mysql_query("UPDATE pinDescription SET pinDescription='$description' WHERE pinNumber='$pin';");</strong></p>
<p><strong>header('Location: control.php');</strong></p>
<p><strong>} else {</strong></p>
<p><strong>header('Location: control.php');</strong></p>
<p><strong>}</strong></p>
<p><strong>}</strong></p>
<p><strong>} else {</strong></p>
<p><strong>print '</strong></p>
<p><strong>&lt;html&gt;</strong></p>
<p><strong>&lt;head&gt;</strong></p>
<p><strong>&lt;title&gt;GPIO Control&lt;/title&gt;</strong></p>
<p><strong>&lt;/head&gt;</strong></p>
<p><strong>&lt;font face="verdana"&gt;</strong></p>
<p><strong>&lt;p&gt;&lt;h1&gt;Sensors&lt;/h1&gt;&lt;/p&gt;</strong></p>
<p><strong>';</strong></p>
<p><strong>$query = mysql_query("SELECT pinNumber, pinStatus FROM pinStatus;");</strong></p>
<p><strong>$query2 = mysql_query("SELECT pinNumber, pinDescription FROM pinDescription;");</strong></p>
<p><strong>$totalGPIOCount = mysql_num_rows($query);</strong></p>
<p><strong>$currentGPIOCount = 0;</strong></p>
<p><strong>print '&lt;table name="GPIO" border="1" cellpadding="5"&gt;';</strong></p>
<p><strong>print '&lt;tr&gt;&lt;th&gt;GPIO #&lt;/th&gt;&lt;th&gt;GPIO Description&lt;/th&gt;&lt;th&gt;Status&lt;/th&gt;&lt;th&gt;Action&lt;/th&gt;&lt;th&gt;Edit&lt;/th&gt;&lt;/tr&gt;';</strong></p>
<p><strong>while ($currentGPIOCount &lt; $totalGPIOCount){</strong></p>
<p><strong>$pinRow = mysql_fetch_assoc($query);</strong></p>
<p><strong>$descRow = mysql_fetch_assoc($query2);</strong></p>
<p><strong>$pinNumber = $pinRow['pinNumber'];</strong></p>
<p><strong>$pinStatus = $pinRow['pinStatus'];</strong></p>
<p><strong>$pinDescription = $descRow['pinDescription'];</strong></p>
<p><strong>If ($pinStatus == "0"){</strong></p>
<p><strong>$buttonValue = "Turn On";</strong></p>
<p><strong>$action = "turnOn";</strong></p>
<p><strong>$image = "off.jpg";</strong></p>
<p><strong>} else {</strong></p>
<p><strong>$buttonValue = "Turn Off";</strong></p>
<p><strong>$action = "turnOff";</strong></p>
<p><strong>$image = "on.jpg";</strong></p>
<p><strong>}</strong></p>
<p><strong>print '&lt;tr&gt;';</strong></p>
<p><strong>print '&lt;td align="center"&gt;' . $pinNumber . '&lt;/td&gt;&lt;td&gt;' . $pinDescription . '&lt;/td&gt;&lt;td align="center"&gt;&lt;img src="' . $image . '" width="50"&gt;&lt;/td&gt;&lt;td align="center" valign="middle"&gt;&lt;form name="pin' . $pinNumber . 'edit" action="control.php" method="get"&gt;&lt;input type="hidden" name="action" value="' . $action . '"&gt;&lt;input type="hidden" name="pin" value="' . $pinNumber . '"&gt;&lt;input type="submit" value="' . $buttonValue . '"&gt;&lt;/form&gt;&lt;/td&gt;&lt;td&gt;&lt;form name="pin' . $pinNumber . '" action="control.php" method="get"&gt;&lt;input type="hidden" name="action" value="edit"&gt;&lt;input type="hidden" name="pin" value="' . $pinNumber . '"&gt;&lt;input type="submit" value="Edit"&gt;&lt;/form&gt;&lt;/td&gt;';</strong></p>
<p><strong>print '&lt;/tr&gt;';</strong></p>
<p><strong>$currentGPIOCount ++;</strong></p>
<p><strong>}</strong></p>
<p><strong>print '&lt;/table&gt;';</strong></p>
<p><strong>mysql_close();</strong></p>
<p><strong>print '</strong></p>
<p><strong>&lt;br&gt;&lt;br&gt;</strong></p>
<p><strong>&lt;a href="/support/control.php?action=logout"&gt;Log Out&lt;/a&gt;</strong></p>
<p><strong>&lt;/font&gt;</strong></p>
<p><strong>&lt;/html&gt;</strong></p>
<p><strong>';</strong></p>
<p><strong>}</strong></p>
<p><strong>?&gt;</strong></p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13064);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13093'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-21 12:24 pm</div>
				                <div>Hello,<br />
<br />
When working with databases as well as other important functions and tasks, error trapping is important. For instance, you will need to ensure that you are actually connecting to the database without issue. To do so, you need to test the connection return variable. If an error occurs, then you want to know that specific error. You simply need to check that variable as in the sample code below:<br />
<div class="code_block">$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');<br />
if (!$link) {<br />
    die('Could not connect: ' . mysql_error());<br />
}</div><br />
<br />
You can do the same for each INSERT statement you have so if any of them return an error you will see it:<br />
<div class="code_block">$success= mysql_query("INSERT INTO 'gpio'.'sensor' ('id', 'sensorId', 'sensor', 'switchOnLog', 'switchOffLog') VALUES (NULL, '8', 'LED', '', NOW()) FROM pinStatus WHERE pinNumber='25';");;<br />
if (!$success) {<br />
    die('Could not Insert: ' . mysql_error());<br />
}</div><br />
 As you can see, they are very similar and simple. Do this for all SQL statements including the connection so you can see any errors you are getting. <br />
<br />
One last thing, you may want to look into mysqli instead of mysql when working in php. The mysql functions are older and will be removed in a future version.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13093);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13126'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/72db68ab76442d7191b01dfaa56aa703?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/72db68ab76442d7191b01dfaa56aa703'>Love PHP</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-21 9:35 pm</div>
				                <div><p>Thanks Scott, I found out my mistake and I needed your help again cause I want to do subqueries but I just can't get it right.</p>
<p><strong>This is my error message for mySQL:</strong></p>
<p><span style="font-family: 'Times New Roman'; font-size: medium;">Could not Insert: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SELECT '4' FROM pinStatus WHERE pinNumber='4'' at line 1</span></p>

<p><strong>This is my new edited code:</strong></p>
*** Extra code removed ***
<p>mysql_query("UPDATE pinStatus SET pinStatus='$setting' WHERE pinNumber='$pin';");</p>
<p>$success=mysql_query("INSERT INTO sensor VALUES(NULL, '1', 'Red LED', NOW(), NULL) SELECT '4' FROM pinStatus WHERE pinNumber='4';");</p>
<p>if (!$success) {</p>
<p>die('Could not Insert: ' . mysql_error());</p>
<p>}</p>
<p>$success=mysql_query("INSERT INTO sensor VALUES(NULL, '2', 'Blue LED', NOW(), NULL) SELECT '17' FROM pinStatus WHERE pinNumber='17';");</p>
<p>if (!$success) {</p>
<p>die('Could not Insert: ' . mysql_error());</p>
<p>}</p>
*** Extra Code Removed ***</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13126);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13151'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-22 9:24 am</div>
				                <div>Hello,<br />
<br />
When constructing a Select statement, you are typically looking to pull a column name (or * meaning all information from the referenced tables). You are asking it to pull a 4 where the pinNumber ='4'. If you want the number 4 to be pulled you may want to say something like:<br />
<div class="code_block">SELECT pinNumber FROM pinStatus WHERE pinNumber='4';</div><br />
<br />
This will return the 4 you are looking for. <br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13151);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13133'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='https://lh5.googleusercontent.com/-ycLPxnGD1XU/AAAAAAAAAAI/AAAAAAAAB7g/Ik9qRw4-3wE/photo.jpg?sz=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/aoiregion'>aoiregion</a></div>
						<div></div>
						<div></div>
						<div>3 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-22 1:56 am</div>
				                <div>Hi guys, I would like to seek help on my INSERT method to mySQL database. I manage to store data but it always store the 1st data if I click second or third button, it will record all instead of just record that data which I have switch on or off.<br />
<br />
This is my control.php:<br />
&lt;?php<br />
error_reporting(E_ALL);<br />
ini_set('display_errors','On');<br />
<br />
session_start();<br />
<br />
$MySQLUsername = &quot;gpio&quot;;<br />
$MySQLPassword = &quot;kang&quot;;<br />
<br />
$MySQLHost = &quot;localhost&quot;;<br />
$MySQLDB = &quot;gpio&quot;;<br />
<br />
If (($MySQLUsername == &quot;USERNAME HERE&quot;) || ($MySQLPassword == &quot;PASSWORD HERE&quot;)){<br />
	print 'ERROR - Please set up the script first';<br />
	exit();<br />
}<br />
<br />
$dbConnection = mysql_connect($MySQLHost, $MySQLUsername, $MySQLPassword);<br />
mysql_select_db($MySQLDB, $dbConnection);<br />
If (isset($_POST['action'])){<br />
	If ($_POST['action'] == &quot;setPassword&quot;){<br />
		$password1 = $_POST['password1'];<br />
		$password2 = $_POST['password2'];<br />
		If ($password1 != $password2){<br />
			header('Location: control.php');<br />
		}<br />
		$password = mysql_real_escape_string($_POST['password1']);<br />
		If (strlen($password) &gt; 28){<br />
			mysql_close();<br />
			header('location: control.php');<br />
		}<br />
		$resetQuery = &quot;SELECT username, salt FROM users WHERE username = 'admin';&quot;;<br />
		$resetResult = mysql_query($resetQuery);<br />
		If (mysql_num_rows($resetResult) &lt; 1){<br />
			mysql_close();<br />
			header('location: control.php');<br />
		}<br />
		$resetData = mysql_fetch_array($resetResult, MYSQL_ASSOC);<br />
		$resetHash = hash('sha256', $salt . hash('sha256', $password));<br />
		$hash = hash('sha256', $password);<br />
		function createSalt(){<br />
			$string = md5(uniqid(rand(), true));<br />
			return substr($string, 0, 8);<br />
		}<br />
		$salt = createSalt();<br />
		$hash = hash('sha256', $salt . $hash);<br />
		mysql_query(&quot;UPDATE users SET salt='$salt' WHERE username='admin'&quot;);<br />
		mysql_query(&quot;UPDATE users SET password='$hash' WHERE username='admin'&quot;);<br />
		mysql_close();<br />
		header('location: control.php');<br />
	}<br />
}<br />
If ((isset($_POST['username'])) &amp;&amp; (isset($_POST['password']))){<br />
	$username = mysql_real_escape_string($_POST['username']);<br />
	$password = mysql_real_escape_string($_POST['password']);<br />
	$loginQuery = &quot;SELECT UserID, password, salt FROM users WHERE username = '$username';&quot;;<br />
	$loginResult = mysql_query($loginQuery);<br />
	If (mysql_num_rows($loginResult) &lt; 1){<br />
		mysql_close();<br />
		header('location: control.php?error=incorrectLogin');<br />
	}<br />
	$loginData = mysql_fetch_array($loginResult, MYSQL_ASSOC);<br />
	$loginHash = hash('sha256', $loginData['salt'] . hash('sha256', $password));<br />
	If ($loginHash != $loginData['password']){<br />
		mysql_close();<br />
		header('location: control.php?error=incorrectLogin');<br />
	} else {<br />
		session_regenerate_id();<br />
		$_SESSION['username'] = &quot;admin&quot;;<br />
		$_SESSION['userID'] = &quot;1&quot;;<br />
		mysql_close();<br />
		header('location: control.php');<br />
	}<br />
}<br />
If ((!isset($_SESSION['username'])) || (!isset($_SESSION['userID']))){<br />
	print '<br />
	&lt;html&gt;<br />
	&lt;head&gt;<br />
	&lt;title&gt;GPIO Control - Login&lt;/title&gt;<br />
	&lt;/head&gt;<br />
	&lt;body&gt;<br />
	&lt;table border=&quot;0&quot; align=&quot;center&quot;&gt;<br />
	&lt;form name=&quot;login&quot; action=&quot;control.php&quot; method=&quot;post&quot;&gt;<br />
	&lt;tr&gt;<br />
	&lt;td&gt;Username: &lt;/td&gt;&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;username&quot;&gt;&lt;/td&gt;<br />
	&lt;/tr&gt;<br />
	&lt;tr&gt;<br />
	&lt;td&gt;Password: &lt;/td&gt;&lt;td&gt;&lt;input type=&quot;password&quot; name=&quot;password&quot;&gt;&lt;/td&gt;<br />
	&lt;/tr&gt;<br />
	&lt;tr&gt;<br />
	&lt;td colspan=&quot;2&quot; align=&quot;center&quot;&gt;&lt;input type=&quot;submit&quot; value=&quot;Log In&quot;&gt;&lt;/td&gt;<br />
	&lt;/tr&gt;<br />
	&lt;/form&gt;<br />
	&lt;/table&gt;<br />
	&lt;/body&gt;<br />
	&lt;/html&gt;<br />
	';<br />
	die();<br />
}<br />
If (isset($_GET['action'])){<br />
	If ($_GET['action'] == &quot;logout&quot;){<br />
		$_SESSION = array();<br />
		session_destroy();<br />
		header('Location: control.php');<br />
	} else If ($_GET['action'] == &quot;setPassword&quot;){<br />
		print '<br />
		&lt;form name=&quot;changePassword&quot; action=&quot;control.php&quot; method=&quot;post&quot;&gt;<br />
		&lt;input type=&quot;hidden&quot; name=&quot;action&quot; value=&quot;setPassword&quot;&gt;<br />
		&lt;p&gt;Enter New Password: &lt;input type=&quot;password&quot; name=&quot;password1&quot;&gt;  Confirm: &lt;input type=&quot;password&quot; name=&quot;password2&quot;&gt;&lt;input type=&quot;submit&quot; value=&quot;submit&quot;&gt;&lt;/p&gt;<br />
		&lt;/form&gt;<br />
		';<br />
	} else {<br />
		$action = $_GET['action'];<br />
		$pin = mysql_real_escape_string($_GET['pin']);<br />
		$pinNo = mysql_query(&quot;SELECT pinNumber FROM pinStatus WHERE pinNumber='$pinNo';&quot;);<br />
		if ($action == &quot;turnOn&quot;){<br />
			$setting = &quot;1&quot;;<br />
			mysql_query(&quot;UPDATE pinStatus SET pinStatus='$setting' WHERE pinNumber='$pin';&quot;);<br />
			if ($pinNo = '4'){<br />
				mysql_query(&quot;INSERT INTO sensor VALUES(NULL, '1', 'Red LED', NOW(), NULL);&quot;);<br />
			}<br />
			else if ($pinNo = '17'){<br />
				mysql_query(&quot;INSERT INTO sensor VALUES(NULL, '2', 'Blue LED', NOW(), NULL);&quot;);<br />
			}<br />
			else If ($pinNo = '18'){<br />
				mysql_query(&quot;INSERT INTO sensor VALUES(NULL, '3', 'LED', NOW(), NULL);&quot;);<br />
			}<br />
			else If ($pinNo = '21'){<br />
				mysql_query(&quot;INSERT INTO sensor VALUES(NULL, '4', 'LED', NOW(), NULL);&quot;);<br />
			}<br />
			else If ($pinNo = '22'){<br />
				mysql_query(&quot;INSERT INTO sensor VALUES(NULL, '5', 'LED', NOW(), NULL);&quot;);<br />
			}<br />
			else If ($pinNo = '23'){<br />
				mysql_query(&quot;INSERT INTO sensor VALUES(NULL, '6', 'Green LED', NOW(), NULL);&quot;);<br />
			} <br />
			else If ($pinNo = '24'){<br />
				mysql_query(&quot;INSERT INTO sensor VALUES(NULL, '7', 'LED', NOW(), NULL);&quot;);<br />
			} <br />
			else If ($pinNo = '25'){<br />
				mysql_query(&quot;INSERT INTO sensor VALUES(NULL, '8', 'LED', NOW(), NULL);&quot;);<br />
			}<br />
			mysql_close();<br />
			header('Location: control.php');<br />
		} else If ($action == &quot;turnOff&quot;){<br />
			$setting = &quot;0&quot;;<br />
			mysql_query(&quot;UPDATE pinStatus SET pinStatus='$setting' WHERE pinNumber='$pin';&quot;);<br />
			if ($pinNo = &quot;4&quot;){<br />
				mysql_query(&quot;INSERT INTO sensor VALUES(NULL, '1', 'Red LED', NULL, NOW());&quot;);<br />
			}<br />
			else if ($pinNo = &quot;17&quot;){<br />
				mysql_query(&quot;INSERT INTO sensor VALUES(NULL, '2', 'Blue LED', NULL, NOW());&quot;);<br />
			}<br />
			else If ($pinNo = '18'){<br />
				mysql_query(&quot;INSERT INTO sensor VALUES(NULL, '3', 'LED', NULL, NOW());&quot;);<br />
			}<br />
			else If ($pinNo = '21'){<br />
				mysql_query(&quot;INSERT INTO sensor VALUES(NULL, '4', 'LED', NULL, NOW());&quot;);<br />
			}<br />
			else If ($pinNo = '22'){<br />
				mysql_query(&quot;INSERT INTO sensor VALUES(NULL, '5', 'LED', NULL, NOW());&quot;);<br />
			} <br />
			else If ($pinNo = '23'){<br />
				mysql_query(&quot;INSERT INTO sensor VALUES(NULL, '6', 'Green LED', NULL, NOW());&quot;);<br />
			} <br />
			else If ($pinNo = '24'){<br />
				mysql_query(&quot;INSERT INTO sensor VALUES(NULL, '7', 'LED', NULL, NOW());&quot;);<br />
			}<br />
			else If ($pinNo = '25'){<br />
				mysql_query(&quot;INSERT INTO sensor VALUES(NULL, '8', 'LED', NULL, NOW());&quot;);<br />
			}<br />
			mysql_close();<br />
			header('Location: control.php');<br />
		} else IF ($action ==&quot;edit&quot;){<br />
			$pin = mysql_real_escape_string($_GET['pin']);<br />
			$query = mysql_query(&quot;SELECT pinDescription FROM pinDescription WHERE pinNumber='$pin';&quot;);<br />
			$descRow = mysql_fetch_assoc($query);<br />
			$description = $descRow['pinDescription'];<br />
			print '<br />
			&lt;html&gt;&lt;head&gt;&lt;title&gt;Update Pin ' . $pin . '&lt;/title&gt;&lt;/head&gt;&lt;body&gt;<br />
			&lt;table border=&quot;0&quot;&gt;<br />
			&lt;form name=&quot;edit&quot; action=&quot;control.php&quot; method=&quot;get&quot;&gt;<br />
			&lt;input type=&quot;hidden&quot; name=&quot;action&quot; value=&quot;update&quot;&gt;<br />
			&lt;input type=&quot;hidden&quot; name=&quot;pin&quot; value=&quot;' . $pin . '&quot;&gt;<br />
			&lt;tr&gt;<br />
			&lt;td&gt;&lt;p&gt;Description: &lt;/p&gt;&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;description&quot; value=&quot;' . $description . '&quot;&gt;&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;submit&quot; value=&quot;Confirm&quot;&gt;&lt;/td&gt;<br />
			&lt;/tr&gt;<br />
			&lt;/form&gt;<br />
			&lt;/table&gt;<br />
			&lt;/body&gt;&lt;/html&gt;<br />
			';<br />
			mysql_close();<br />
		} else IF ($action ==&quot;update&quot;){<br />
			$pin = mysql_real_escape_string($_GET['pin']);<br />
			$description = mysql_real_escape_string($_GET['description']);<br />
			mysql_query(&quot;UPDATE pinDescription SET pinDescription='$description' WHERE pinNumber='$pin';&quot;);<br />
			header('Location: control.php');<br />
		} else {<br />
			header('Location: control.php');<br />
		}<br />
	}<br />
} else {<br />
	print '<br />
		&lt;html&gt;<br />
		&lt;head&gt;<br />
		&lt;title&gt;GPIO Control&lt;/title&gt;<br />
		&lt;/head&gt;<br />
		&lt;font face=&quot;verdana&quot;&gt;<br />
		&lt;p&gt;&lt;h1&gt;Sensors&lt;/h1&gt;&lt;/p&gt;<br />
		';<br />
		$query = mysql_query(&quot;SELECT pinNumber, pinStatus FROM pinStatus;&quot;);<br />
		$query2 = mysql_query(&quot;SELECT pinNumber, pinDescription FROM pinDescription;&quot;);<br />
		$totalGPIOCount = mysql_num_rows($query);<br />
		$currentGPIOCount = 0;<br />
		print '&lt;table name=&quot;GPIO&quot; border=&quot;1&quot; cellpadding=&quot;5&quot;&gt;';<br />
		print '&lt;tr&gt;&lt;th&gt;GPIO #&lt;/th&gt;&lt;th&gt;GPIO Description&lt;/th&gt;&lt;th&gt;Status&lt;/th&gt;&lt;th&gt;Action&lt;/th&gt;&lt;th&gt;Edit&lt;/th&gt;&lt;/tr&gt;';<br />
		while ($currentGPIOCount &lt; $totalGPIOCount){<br />
			$pinRow = mysql_fetch_assoc($query);<br />
			$descRow = mysql_fetch_assoc($query2);<br />
			$pinNumber = $pinRow['pinNumber'];<br />
			$pinStatus = $pinRow['pinStatus'];<br />
			$pinDescription = $descRow['pinDescription'];<br />
			If ($pinStatus == &quot;0&quot;){<br />
				$buttonValue = &quot;Turn On&quot;;<br />
				$action = &quot;turnOn&quot;;<br />
				$image = &quot;off.jpg&quot;;<br />
			} else {<br />
				$buttonValue = &quot;Turn Off&quot;;<br />
				$action = &quot;turnOff&quot;;<br />
				$image = &quot;on.jpg&quot;;<br />
			}<br />
			print '&lt;tr&gt;';<br />
			print '&lt;td align=&quot;center&quot;&gt;' . $pinNumber . '&lt;/td&gt;&lt;td&gt;' . $pinDescription . '&lt;/td&gt;&lt;td align=&quot;center&quot;&gt;&lt;img src=&quot;' . $image . '&quot; width=&quot;50&quot;&gt;&lt;/td&gt;&lt;td align=&quot;center&quot; valign=&quot;middle&quot;&gt;&lt;form name=&quot;pin' . $pinNumber . 'edit&quot; action=&quot;control.php&quot; method=&quot;get&quot;&gt;&lt;input type=&quot;hidden&quot; name=&quot;action&quot; value=&quot;' . $action . '&quot;&gt;&lt;input type=&quot;hidden&quot; name=&quot;pin&quot; value=&quot;' . $pinNumber . '&quot;&gt;&lt;input type=&quot;submit&quot; value=&quot;' . $buttonValue . '&quot;&gt;&lt;/form&gt;&lt;/td&gt;&lt;td&gt;&lt;form name=&quot;pin' . $pinNumber . '&quot; action=&quot;control.php&quot; method=&quot;get&quot;&gt;&lt;input type=&quot;hidden&quot; name=&quot;action&quot; value=&quot;edit&quot;&gt;&lt;input type=&quot;hidden&quot; name=&quot;pin&quot; value=&quot;' . $pinNumber . '&quot;&gt;&lt;input type=&quot;submit&quot; value=&quot;Edit&quot;&gt;&lt;/form&gt;&lt;/td&gt;';<br />
			print '&lt;/tr&gt;';<br />
			$currentGPIOCount ++;<br />
		}<br />
		print '&lt;/table&gt;';<br />
		mysql_close();<br />
	print '<br />
	&lt;br&gt;&lt;br&gt;<br />
	&lt;a href=&quot;control.php?action=logout&quot;&gt;Log Out&lt;/a&gt;<br />
	&lt;/font&gt;<br />
	&lt;/html&gt;<br />
	';<br />
}<br />
?&gt;</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13133);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13153'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-07-22 9:37 am</div>
				                <div>Hello aoiregion,<br />
<br />
This sounds like a logic issue and not a syntax issue. Being a logic issue I would need to run the code against a database to figure out where the code is incorrect. That is not something we can do from here.<br />
<br />
However, you should have the code echo out (print) the query to the screen so you can see which one it is firing off.  Once you know which query it is sending, you can then check the code to see why it is setting those particular conditions. It can take many tries until you iron it out, but that is part of the fun of coding!<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13153);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-13838'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/531b5c9d4ce1cf0e6c2d880e8305af2b?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/531b5c9d4ce1cf0e6c2d880e8305af2b'>Tom Casteel</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-08-09 12:00 pm</div>
				                <div>This was a easy to read clear article.  After I read the code with the comments I understood what the process is. Well Done!</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(13838);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-15191'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/5f29089912fdaf1e47291deba6e1553d?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/5f29089912fdaf1e47291deba6e1553d'>Sami</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-09-18 9:36 am</div>
				                <div><p>Hello, I did exactly whats in the article. &nbsp;I get the message that is successful but it does not insert the data to the database. &nbsp;my code is:</p>
<p>&nbsp;</p>
<p>&lt;?</p>
<p>if( $_POST )</p>
<p>{</p>
<p>&nbsp; $con = mysql_connect("localhost","root","");</p>
<p>&nbsp;</p>
<p>&nbsp; if (!$con)</p>
<p>&nbsp; {</p>
<p>&nbsp; &nbsp; die('Could not connect: ' . mysql_error());</p>
<p>&nbsp; }</p>
<p>&nbsp;</p>
<p>&nbsp; mysql_select_db('samidb', $con);</p>
<p>&nbsp;</p>
<p>&nbsp; $number = $_POST['number'];</p>
<p>&nbsp; $name = $_POST['name'];</p>
<p>&nbsp; $desc = $_POST['desc'];</p>
<p>&nbsp;</p>
<p>&nbsp; $number = mysql_real_escape_string($number);</p>
<p>&nbsp; $name = mysql_real_escape_string($name);</p>
<p>&nbsp; $number = mysql_real_escape_string($desc);</p>
<p>&nbsp;</p>
<p>&nbsp; //$articleid = $_GET['id'];</p>
<p>&nbsp; //if( ! is_numeric($articleid) )</p>
<p>&nbsp; &nbsp; //die('invalid article id');</p>
<p>&nbsp;</p>
<p>&nbsp; $query = "</p>
<p>&nbsp; INSERT INTO 'samidb'.'sami' (`number`, `name`, `desc`, `website) VALUES ('$number',</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; '$name', '$desc');";</p>
<p>&nbsp;</p>
<p>if (!$query) {</p>
<p>die('Could not Insert: ' . mysql_error());</p>
<p>}</p>
<p>&nbsp;</p>
<p>&nbsp; mysql_query($query);</p>
<p>&nbsp;&nbsp;</p>
<p>&nbsp; echo "&lt;h2&gt;Thank you for your Comment!&lt;/h2&gt;";</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; mysql_close($con);</p>
<p>&nbsp; }</p>
<p>&nbsp; ?&gt;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(15191);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-15197'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-09-18 10:59 am</div>
				                <div>Hello Sami,<br />
<br />
Thank you for your question. I recommend checking your Database name, and confirming you are checking the correct database.<br />
<br />
Also, you may want to print out the query, to ensure it is running what you expected.<br />
<br />
If you have any further questions, feel free to post them below.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(15197);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-15198'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/5f29089912fdaf1e47291deba6e1553d?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/5f29089912fdaf1e47291deba6e1553d'>Sami</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-09-18 11:13 am</div>
				                <div><p>Thank you John for quick response,&nbsp;</p>
<p>The database name and the table name are identical to the one I see in myphpadmin. I printed the query and it works. &nbsp;I have no idea&nbsp;why it is not inserting into the database. &nbsp;It does not give me any errors but basically it does not insert. &nbsp;</p>
<p>I am working on local host user name is root and has no password&nbsp;</p>
<p>I made sure root at local host has all the privileges&nbsp;</p>
<p>Thank you&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(15198);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-15200'></a>
		<div  style='margin:2px 0px 0px 120px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-09-18 11:22 am</div>
				                <div>If you have confirmed that everything is correct as far as your connection goes, be sure that your variables are getting assigned with the expected data.  This can be as simple as echoing out the variables to ensure that the correct data is returned.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(15200);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-16706'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/af7b6e6ac069ccfffc53bea0a0707004?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/af7b6e6ac069ccfffc53bea0a0707004'>simon</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-10-25 11:24 am</div>
				                <div><p><strong>Somebody please help...how to fix</strong></p>
<p><strong>&nbsp;Parse error<span style="font-family: 'Times New Roman'; font-size: medium;">: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting ']'...</span></strong></p>
<p><strong><span style="font-family: 'Times New Roman'; font-size: medium;">my code is:</span></strong></p>
<p><strong><span style="font-family: 'Times New Roman'; font-size: medium;">$sql="INSERT INTO information(student name,sex,religious,dateofbirth,email,ic number,address,zipcode,country)</span></strong></p>
<p><strong><span style="font-family: 'Times New Roman'; font-size: medium;">VALUES</span></strong></p>
<p><strong><span style="font-family: 'Times New Roman'; font-size: medium;">('$_POST[student name]','$_POST[sex]','$_POST[religious]','$_POST[dateofbirth]','$_POST[email]','$_POST[ic number]','$_POST</span></strong></p>
<p>&nbsp;</p>
<p><strong><span style="font-family: 'Times New Roman'; font-size: medium;">[address]', '$_POST[zipcode]', '$_POST[country]')";</span></strong></p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(16706);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-16759'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-10-27 8:40 am</div>
				                <div>Hello,<br />
<br />
What you have here is a php syntax error. It appears there is a problem with one of your values. It would be much easier if you placed each POST into a specific variable and then placed the variables into the VALUES section. This way, the one POST that is giving the issue would be flagged and you could see which one is incorrect.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(16759);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-17009'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/0bc1db9575eeb17b0ac2d473377f3b7c?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/0bc1db9575eeb17b0ac2d473377f3b7c'>Marty</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-11-03 2:34 am</div>
				                <div><p><strong>Not getting errors, its simply not inserting to database?</strong></p>
<p>&nbsp;</p>
<p>&lt;?</p>
<p>if( $_POST )</p>
<p>{</p>
<p>&nbsp; $con = mysql_connect("localhost","walding_test","test123");</p>
<p>&nbsp;</p>
<p>&nbsp; if (!$con)</p>
<p>&nbsp; {</p>
<p>&nbsp; &nbsp; die('Could not connect: ' . mysql_error());</p>
<p>&nbsp; }</p>
<p>&nbsp;</p>
<p>&nbsp; mysql_select_db("walding_Master", $con);</p>
<p>&nbsp;</p>
<p>&nbsp; $users_name = $_POST['name'];</p>
<p>&nbsp; $users_email = $_POST['email'];</p>
<p>&nbsp; $users_website = $_POST['website'];</p>
<p>&nbsp; $users_comment = $_POST['comment'];</p>
<p>&nbsp;</p>
<p>&nbsp; $users_name = mysql_real_escape_string($users_name);</p>
<p>&nbsp; $users_email = mysql_real_escape_string($users_email);</p>
<p>&nbsp; $users_website = mysql_real_escape_string($users_website);</p>
<p>&nbsp; $users_comment = mysql_real_escape_string($users_comment);</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp; $query = "INSERT INTO `walding_Master`.`Comment` (`ID`, `name`, `email`, `website`, `comment`)</p>
<p>&nbsp; &nbsp;VALUES (NULL, '$users_name','$users_email', '$users_website', '$users_comment');";</p>
<p>&nbsp;</p>
<p>&nbsp; mysql_query($query);</p>
<p>&nbsp;</p>
<p>&nbsp; echo "&lt;h2&gt;Thank you for your Comment!&lt;/h2&gt;";</p>
<p>echo $query;</p>
<p>&nbsp; mysql_close($con);</p>
<p>}</p>
<p>?&gt;</p>
<p>&nbsp;</p>
<p>//////HTML///////</p>
<p>&nbsp;</p>
<p>&nbsp;&lt;form action="contactus.php" method="POST"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;input type="text" name="name" id="name" value="" placeholder="Name"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;input type="email" name="email" id="email" value="" placeholder="Email"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;input type="url" name="website" id="website" value="" placeholder="Website URL"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;textarea rows="10" name="comment" id="comment" placeholder="Comment"&gt;&lt;/textarea&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;input type="submit" name="submit" value="Add Comment"&gt;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(17009);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-17039'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-11-03 11:56 am</div>
				                <div>Hello Marty,<br />
<br />
In the code you provided, you are not checking the return code for the mysql_query function. This is why you are not getting a syntactical error message.  You will want to set the function to a variable like so:<br />
<div class="code_block">$return = mysql_query($query);</div><br />
<br />
Then you can echo out the $return variable to see what the error message is. Another thing to check is to echo out the $query string before it runs so you can see what the actual query is.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(17039);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18003'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/b945d745c77b56f3473c8de5d02e74d6?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/b945d745c77b56f3473c8de5d02e74d6'>Gauri</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-01 7:45 am</div>
				                <div><p>Hello Sir,</p>
<p>I have a querry regarding insert when i run my registration code that my entries are added in two different tables that are registration and individual table at a time which should not happen actually values are for registration table and in tha individual table some filled and some blank are there and i am not getting the problem why that happen so can you please help me ?</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18003);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18017'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-01 12:08 pm</div>
				                <div>Hello Gauri,<br />
<br />
Thank you for contacting us. We are happy to help, but will need some additional details to troubleshoot the problem.<br />
<br />
Can you explain what you are trying to accomplish?<br />
<br />
Can you provide the query you are executing?<br />
<br />
Can you explain the steps  you are taking? This will allow us to follow along with you.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18017);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18041'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/32542332208348cfd517fe24ccf6e1da?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/32542332208348cfd517fe24ccf6e1da'>Anna</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-01 11:32 pm</div>
				                <div><p>Hey! I have read through everyone else's comments/error messages and I still have not been able to figure out what is wrong with my code. I&nbsp;am following this tutorial for a class, and I did everything in order but I am getting "invalid article id", and it is also not inserting any information into the database. Is there something I am missing? Here is my code:&nbsp;</p>
<p>&lt;?</p>
<p>if( $_POST )</p>
<p>{</p>
<p>&nbsp; $con = mysql_connect("localhost","aburnham_user","mypassword");</p>
<p>&nbsp;</p>
<p>&nbsp; if (!$con)</p>
<p>&nbsp; {</p>
<p>&nbsp; &nbsp; die('Could not connect: ' . mysql_error());</p>
<p>&nbsp; }</p>
<p>&nbsp;</p>
<p>&nbsp; mysql_select_db("aburnham_form", $con);</p>
<p>&nbsp;</p>
<p>&nbsp; $users_name = $_POST['name'];</p>
<p>&nbsp; $users_email = $_POST['email'];</p>
<p>&nbsp; $users_website = $_POST['website'];</p>
<p>&nbsp; $users_comment = $_POST['comment'];</p>
<p>&nbsp;</p>
<p>&nbsp; $users_name = mysql_real_escape_string($users_name);</p>
<p>&nbsp; $users_email = mysql_real_escape_string($users_email);</p>
<p>&nbsp; $users_website = mysql_real_escape_string($users_website);</p>
<p>&nbsp; $users_comment = mysql_real_escape_string($users_comment);</p>
<p>&nbsp;</p>
<p>&nbsp; $articleid = $_GET['id'];</p>
<p>&nbsp; if( ! is_numeric($articleid) )</p>
<p>&nbsp; &nbsp; die('invalid article id');</p>
<p>&nbsp;</p>
<p>&nbsp; $query = "</p>
<p>&nbsp; INSERT INTO `aburnham_form`.`comments` (`id`, `name`, `email`, `website`,</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; `comment`, `timestamp`, `articleid`) VALUES (NULL, '$users_name',</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; '$users_email', '$users_website', '$users_comment',</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; CURRENT_TIMESTAMP, '$articleid');";</p>
<p>&nbsp;</p>
<p>&nbsp; mysql_query($query);</p>
<p>&nbsp; $return = mysql_query($query);</p>
<p>&nbsp;</p>
<p>&nbsp; echo "&lt;h2&gt;Thank you for your Comment!&lt;/h2&gt;";</p>
<p>&nbsp;</p>
<p>&nbsp; mysql_close($con);</p>
<p>}</p>
<p>&nbsp;</p>
<p>?&gt;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18041);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18051'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-02 9:31 am</div>
				                <div>The reason your are getting this error is because of this code:<br />
&lt;p class=&quot;code_block&quot;&gt;  $articleid = $_GET['id'];<br />
  if( ! is_numeric($articleid) )<br />
    die('invalid article id');&lt;/p&gt;<br />
It should look something like this:<br />
&lt;p class=&quot;code_block&quot;&gt;  $articleid = $_GET['id'];<br />
<br />
  if( ! is_numeric($articleid) ) &lt;strong&gt;{&lt;/strong&gt;<br />
<br />
    die('invalid article id'); &lt;strong&gt;}&lt;/strong&gt;</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18051);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18081'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/32542332208348cfd517fe24ccf6e1da?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/32542332208348cfd517fe24ccf6e1da'>Anna</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-02 7:13 pm</div>
				                <div><p>That code still doesn't work :/ There must be an error somewhere else then... Thanks for the advice!!</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18081);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18082'></a>
		<div  style='margin:2px 0px 0px 120px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-02 7:14 pm</div>
				                <div>Could you provide me with the exact error you are getting now?</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18082);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18083'></a>
		<div  style='margin:2px 0px 0px 160px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/32542332208348cfd517fe24ccf6e1da?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/32542332208348cfd517fe24ccf6e1da'>Anna </a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-02 7:21 pm</div>
				                <div><p>Still the same error <span style="color: rgb(35, 35, 35); font-family: adelle-sans, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 22px;">"invalid article id" when I type in information and click submit. But actually I just tried doing a test comment again in my cPanel and I got this error:&nbsp;</span></p>
<p><span style="font-family: sans-serif; font-size: 13px; background-color: rgb(255, 192, 203);">1 row inserted.</span></p>
<p><span style="font-family: sans-serif; font-size: 13px; background-color: rgb(255, 192, 203);">Inserted row id: 2</span><span style="font-family: sans-serif; font-size: 13px; background-color: rgb(255, 192, 203);">Warning: #1366 Incorrect integer value: '' for column 'articleid' at row 1</span></p>
<p>It is in red instead of green like in your tutorial on adding a test comment.&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18083);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18085'></a>
		<div  style='margin:2px 0px 0px 160px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/32542332208348cfd517fe24ccf6e1da?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/32542332208348cfd517fe24ccf6e1da'>Anna</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-02 7:25 pm</div>
				                <div><p>Wait, now the comments are showing up! I have no idea why it didn't work at first after I changed it to the code you provided. Thank you! :)</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18085);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18084'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-02 7:24 pm</div>
				                <div>It sounds like you are not passing the correct information from the GET variable.  Could you provide me with the full URL on this page you are referring to?</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18084);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18086'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/32542332208348cfd517fe24ccf6e1da?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/32542332208348cfd517fe24ccf6e1da'>Anna</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-02 7:31 pm</div>
				                <div><p>http://annaburnham.com/phpForm/</p>
<p>I just found out that it works if you go to page 2 first (and type stuff in and submit), and then go back to page 1. But if you start typing and submit info on page 1 first, the "invalid article id" error happens. At least it works for the most part?&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18086);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18087'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-02 7:56 pm</div>
				                <div>This is because of the URL.  The code that inserts data into the database requires that an ID be defined within the URL.  If you take a look at the URL after you click on Page 2, you will notice that it says &lt;strong&gt;id=&quot;1&quot;&lt;/strong&gt;.  Without this defined, it does not know the article ID that the comment would be left on.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18087);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18088'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/32542332208348cfd517fe24ccf6e1da?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/32542332208348cfd517fe24ccf6e1da'>Anna </a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-02 8:07 pm</div>
				                <div><p>Oh yup I see that! I thought I did that correctly.. That would be this code correct?&nbsp;</p>
<p>&nbsp;</p>
<p>&lt;? include("manage_comments.php"); ?&gt;</p>
<p>&nbsp;&lt;h1&gt;This is page1.php&lt;/h1&gt;</p>
<p>&lt;div&gt;&lt;a href='page2.php?id=1'&gt;Click here&lt;/a&gt; to go to page2.php&lt;/div&gt;</p>
<p>&lt;div style='margin:20px; width:100px; height:100px; background:blue;'&gt;&lt;/div&gt;</p>
<p>&nbsp;&lt;? include("formcode.php"); ?&gt;</p>
<p>&nbsp;</p>
<p>and this:&nbsp;</p>
<p>&nbsp;</p>
<p>&lt;? include("manage_comments.php"); ?&gt;</p>
<p>&nbsp;&lt;h1&gt;This is page2.php&lt;/h1&gt;</p>
<p>&lt;div&gt;&lt;a href='page1.php?id=1'&gt;Click here&lt;/a&gt; to go to page1.php&lt;/div&gt;</p>
<p>&lt;div style='margin:20px; width:100px; height:100px; background:orange;'&gt;&lt;/div&gt;</p>
<p>&nbsp;&lt;? include("formcode.php"); ?&gt;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18088);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18089'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-02 8:09 pm</div>
				                <div>Yes, that is fine.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18089);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18090'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-02 8:10 pm</div>
				                <div>As for the URL that I am referring to in the above comment, I am referring to the URL in the address bar.  When a user commends on your site, they should be visiting something like &lt;strong&gt;page1.php?id=1&lt;/strong&gt; so that the code knows what page the comment is being left on.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18090);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18091'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/32542332208348cfd517fe24ccf6e1da?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/32542332208348cfd517fe24ccf6e1da'>Anna </a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-02 8:15 pm</div>
				                <div><p>Oh ok! I'm so sorry if this is a dumb question, but how do I change the URL for the first page? Or if it is too involved to explain, can you point me to a good tutorial if you know any?</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18091);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18092'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-02 8:16 pm</div>
				                <div>When a user is leaving a comment, you would simply point them to &lt;strong&gt;http://annaburnham.com/phpForm/page1.php?id=1&lt;/strong&gt;</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18092);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18093'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/32542332208348cfd517fe24ccf6e1da?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/32542332208348cfd517fe24ccf6e1da'>Anna</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-02 8:18 pm</div>
				                <div><p>Oh! Perfect, thanks so much for all of your help! :) Can I rate you on this site or something?</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18093);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18094'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-02 8:20 pm</div>
				                <div>There aren't any user ratings or anything, but I'm glad I was able to answer your questions!</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18094);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-18095'></a>
		<div  style='margin:2px 0px 0px 120px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/32542332208348cfd517fe24ccf6e1da?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/32542332208348cfd517fe24ccf6e1da'>Anna </a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2014-12-02 8:23 pm</div>
				                <div><p>Oh ok, well thank you so much again!!</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(18095);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-19421'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/1d721b0dcf4b800107cd73ca1aabbc65?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/1d721b0dcf4b800107cd73ca1aabbc65'>David</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-01-12 7:55 am</div>
				                <div><p>hey ive got a problem and its eating away my head! when i load page1 it displays the form but also this code: echo "&lt;h2&gt;Thank you for your Comment!&lt;/h2&gt;"; ?&gt;</p>
<p>idont know whats wrong? also i think due to this queer display i cant submit anything</p>
<p>this is my manage_comments.php</p>
<p>&nbsp;</p>
<p>&lt;?if( $_POST ){&nbsp; $con = mysql_connect("localhost","x","y");&nbsp; if (!$con)&nbsp; {&nbsp;&nbsp;&nbsp; die('Could not connect: ' . mysql_error());&nbsp; }&nbsp; mysql_select_db("search", $con);&nbsp; $users_name = $_POST['name'];&nbsp; $users_email = $_POST['email'];&nbsp; $users_website = $_POST['website'];&nbsp; $users_comment = $_POST['comment'];&nbsp; $users_name = mysql_real_escape_string($users_name);&nbsp; $users_email = mysql_real_escape_string($users_email);&nbsp; $users_website = mysql_real_escape_string($users_website);&nbsp; $users_comment = mysql_real_escape_string($users_comment);&nbsp; $articleid = $_GET['id'];&nbsp; if( ! is_numeric($articleid) ){&nbsp;&nbsp;&nbsp; die('invalid article id');&nbsp;}&nbsp; $query = "&nbsp; INSERT INTO `search`.`comments` (`id`, `name`, `email`, `website`,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; `comment`, `timestamp`, `articleid`) VALUES (NULL, '$users_name',&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '$users_email', '$users_website', '$users_comment',&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CURRENT_TIMESTAMP, '$articleid');";&nbsp;&nbsp; mysql_query($query);&nbsp; echo "&lt;h2&gt;Thank you for your Comment!&lt;/h2&gt;";&nbsp; &nbsp; mysql_close($con);}?&gt;</p>
<p>&nbsp;</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(19421);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-19422'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-01-12 9:34 am</div>
				                <div>Hello David,<br />
<br />
Sorry for the problems with the code.  We unfortunately can't really troubleshoot your code.  However, if your code is not working, it's most likely centered around the conditions of the if statements in the beginning of the code.  If those conditions aren't being met, then your form won't post.  Apologies again that we can't give you a direct answer.  If you have any further questions, please let us know.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(19422);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-20425'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/5fa4ecc72ad0e241cbb9b60b5c6dd151?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/5fa4ecc72ad0e241cbb9b60b5c6dd151'>Munish Soni</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-02-05 11:21 pm</div>
				                <div><p>Hi&nbsp;</p>
<p>I am creating login and register page. when I am trying to enter data into register.php then data is not inserted into table as well as email not send.</p>
<p>Find a solution.</p>
<p>register.php</p>
<p>&nbsp;</p>
<p>&lt;?php</p>
<p>&nbsp;</p>
<p>&nbsp;$conn =new mysqli('localhost','admin_password','test123','password_app');</p>
<p>&nbsp;</p>
<p>&nbsp;include("../PHPMailer/PHPMailerAutoload.php");</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>//require_once'connection.php';</p>
<p>&nbsp;</p>
<p>//check for spam&nbsp;</p>
<p>//if(empty($_POST['spamProtection']))</p>
<p>//{</p>
<p>if(isset($_POST['Register']))</p>
<p>{</p>
<p>$count=0;</p>
<p>&nbsp;</p>
<p>//check if required fields are not empty</p>
<p>if(trim($_POST['name']) == '') {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $hasError = true;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; } else {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $name = trim($_POST['name']);</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
<p>&nbsp;</p>
<p>if(trim($_POST['user']) == '') {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $hasError = true;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; } else {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $user=trim($_POST['user']);</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
<p>if(trim($_POST['email']) == '') {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $hasError = true;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; } else {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $email = trim($_POST['email']);</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
<p>&nbsp;</p>
<p>if(trim($_POST['password']) == '') {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $hasError = true;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; } else {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $email = trim($_POST['password']);</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
<p>$level=trim($_POST['level']);</p>
<p>&nbsp;</p>
<p>//If there is no error, open the connection and send the email</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; if(!isset($hasError)) {</p>
<p>&nbsp;</p>
<p>$sql &nbsp;="INSERT INTO users (name,user,pass,email,level) VALUES ('$name','$user','$pass','$email','$level')";</p>
<p>&nbsp;</p>
<p>echo $conn;</p>
<p>echo $name,$user,$pass,$level;</p>
<p>&nbsp;</p>
<p>if (!mysqli_query($conn,$sql))</p>
<p>&nbsp;{</p>
<p>&nbsp;?&gt;</p>
<p>&nbsp;&lt;script&gt;</p>
<p>alert("Account already exist!");</p>
<p>window.location.href="home.php";</p>
<p>&lt;/script&gt;</p>
<p>&lt;?php</p>
<p>&nbsp;}</p>
<p>&nbsp;else{</p>
<p>&nbsp; $mail = new PHPMailer;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;$mail-&gt;isSMTP(); &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;// Set mailer to use SMTP</p>
<p>&nbsp;$mail-&gt;Host = 'mail.the-right-solution.com'; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;// Specify main and backup SMTP servers</p>
<p>&nbsp;$mail-&gt;SMTPAuth = true; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // Enable SMTP authentication</p>
<p>&nbsp;$mail-&gt;Username = 'info@the-right-solution.com'; &nbsp; &nbsp; &nbsp;// SMTP username</p>
<p>&nbsp;$mail-&gt;Password = 'Pwd@12345'; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;// SMTP password</p>
<p>&nbsp;$mail-&gt;Port = 25; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // TCP port to connect to</p>
<p>&nbsp;</p>
<p>&nbsp;$mail-&gt;From = 'info@the-right-solution.com';</p>
<p>&nbsp;$mail-&gt;addAddress($email); &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;// Add a recipient</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;$mail-&gt;isHTML(true); &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;// Set email format to HTML</p>
<p>&nbsp;</p>
<p>&nbsp;$mail-&gt;Subject = 'User Information';</p>
<p>&nbsp;$mail-&gt;Body &nbsp; &nbsp;= '&lt;h1&gt;Hello &lt;/h1&gt; &nbsp;&lt;p&gt; Name : ' .$name .</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; '&lt;/p&gt; &lt;p&gt; User : ' .$user &nbsp;.</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; '&lt;/p&gt; &lt;p&gt; Password : ' .$pass &nbsp;.</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; '&lt;/p&gt; &lt;p&gt; Level : ' .$level ;</p>
<p>&nbsp;&nbsp;</p>
<p>&nbsp; &nbsp;if(!$mail-&gt;send()) {</p>
<p>&nbsp;$message.= 'Message could not be sent. ';</p>
<p>&nbsp;$message.= 'Mailer Error: ' . $mail-&gt;ErrorInfo;</p>
<p>&nbsp;} else {</p>
<p>&nbsp;$message.= 'Message has been sent. ';</p>
<p>&nbsp;}</p>
<p>&nbsp;&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;?&gt;</p>
<p>&lt;script&gt;</p>
<p>alert("To complete your registration, please check your mailbox for further instructions!");</p>
<p>window.location.href="home.php";</p>
<p>&lt;/script&gt;</p>
<p>&lt;?php</p>
<p>mysqli_close($conn);</p>
<p>// $mysql-&gt;close;</p>
<p>&nbsp;}</p>
<p>}</p>
<p>else{</p>
<p>?&gt;</p>
<p>&lt;script&gt;</p>
<p>alert('stuck here');</p>
<p>/*window.location.href="home.php";*/</p>
<p>&lt;/script&gt;</p>
<p>&lt;?php</p>
<p>}</p>
<p>}</p>
<p>else</p>
<p>&nbsp;</p>
<p>{</p>
<p>header('Location: home.php');</p>
<p>}</p>
<p>?&gt;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>...login.php...</p>
<p>&nbsp;</p>
<p>&lt;?php</p>
<p>@session_start();</p>
<p>include_once 'connection.php';</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp;// Create connection</p>
<p>$mysqli = new mysqli($servername, $username, $password, $dbname);</p>
<p>// Check connection</p>
<p>if ($mysqli-&gt;connect_error) {</p>
<p>die("Connection failed: " . $mysqli-&gt;connect_error);</p>
<p>}&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>$allowed_codes=$mysqli-&gt;query("select * from users");</p>
<p>?&gt;</p>
<p>&nbsp;</p>
<p>&lt;!DOCTYPE html&gt;</p>
<p>&lt;html&gt;</p>
<p>&lt;meta charset="UTF-8"&gt;</p>
<p>&lt;head&gt;&nbsp;</p>
<p>&lt;title&gt;User Information&lt;/title&gt; &nbsp;</p>
<p>&nbsp;</p>
<p>&lt;style&gt;</p>
<p>.error {color: #FF0000;}</p>
<p>&lt;/style&gt;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;&nbsp;</p>
<p>&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;</p>
<p>&lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"&gt;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&lt;script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;</p>
<p>&lt;script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"&gt;&lt;/script&gt;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&lt;meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"&gt;&nbsp;</p>
<p>&lt;link href="/support/../css/main.css" rel="stylesheet" type="text/css"&gt;</p>
<p>&nbsp;</p>
<p>&lt;script src="/support/../js/jquery.validate.js"&gt;&lt;/script&gt;</p>
<p>&lt;script src="/support/../js/home.js"&gt;&lt;/script&gt;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&lt;/head&gt; &nbsp;&nbsp;</p>
<p>&nbsp;</p>
<p>&lt;style&gt;</p>
<p>/*?&gt;input[type="text"]{</p>
<p>width:93%;</p>
<p>}</p>
<p>input[type="password"]{</p>
<p>width:93%;</p>
<p>} */</p>
<p>&nbsp;</p>
<p>#register{</p>
<p>display:none;</p>
<p>}</p>
<p>.error{</p>
<p>color:#F00;</p>
<p>}</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&lt;/style&gt;</p>
<p>&nbsp;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body id="main"&gt;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;&lt;h1&gt; User Information &lt;/h1&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;section id="login"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;form id="authform" form method="post" action="Authentication.php" &gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;!--&lt;p&gt; please enter your email and password below.&lt;/p&gt;--&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;div class="row"&gt;</p>
<p>&nbsp; &nbsp; &lt;div class="sm-8"&gt;</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;label&gt;Email&lt;/label&gt;&nbsp;</p>
<p>&nbsp; &lt;input type="text" name="email" required="required" class="input-large" /&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;</p>
<p>&lt;/div&gt;</p>
<p>&nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;div class="row"&gt;</p>
<p>&nbsp; &nbsp; &lt;div class="sm-8"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;label&gt; &lt;/label&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;input name = "client" width="140" type="radio" id="client_login" &nbsp;value="old" checked="checked" /&gt;I have a Password&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</p>
<p>&lt;/div&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;div class="row"&gt;</p>
<p>&nbsp; &nbsp; &lt;div class="sm-8"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;label&gt; &lt;/label&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;input name = "client" width="140" type="radio" value="new" /&gt;I'm New&nbsp;</p>
<p>&nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;</p>
<p>&lt;/div&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;div class="row"&gt;</p>
<p>&nbsp; &nbsp;&lt;div class="sm-4"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;label&gt;Password&lt;/label&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p>&nbsp; &nbsp; &lt;input id= "password" input name="password" type="password" size="8" maxlength="8" class="form-control" required="required"/&gt;</p>
<p>&nbsp; &nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;/div&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;/div&gt; &nbsp;&nbsp;</p>
<p>&nbsp;</p>
<p>&lt;div class="row"&gt;</p>
<p>&nbsp; &nbsp;&lt;div class="sm-4"&gt; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;a href="/support/" onclick="winOpen('forgotPassword.php','auto',500,300)" &gt; &lt;span style="color:#D00;font-size:10px" &gt;Forgot Your Password?&lt;/span&gt; &lt;/a&gt;</p>
<p>&nbsp; &nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;/div&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;/div&gt;&nbsp;</p>
<p>&nbsp;</p>
<p>&lt;div class="row"&gt;</p>
<p>&nbsp; &lt;div class="sm-8"&gt;</p>
<p>&nbsp; &nbsp;&nbsp;</p>
<p>&lt;input name="Login" type="submit" value="Login" class="btn_login" align="right" colspan="2"/&gt;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &lt;/div&gt;</p>
<p>&lt;/div&gt; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/form&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/section&gt;&lt;!--#login--&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;section id="register"&gt;</p>
<p>&nbsp; &nbsp; &nbsp;&lt;form method="post" action="register.php" name="registerform" id="registerform" onsubmit1="return validateForm()" onsubmit="return CheckPassword()"/&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class="row"&gt;</p>
<p>&nbsp; &nbsp; &lt;div class="sm-8"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;label&gt;Email&lt;/label&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;input name = "email1" required="required" &nbsp;type="text" size="40" class="input-large"/&gt;</p>
<p>&nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;</p>
<p>&lt;/div&gt;</p>
<p>&nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;div class="row"&gt;</p>
<p>&nbsp; &nbsp; &lt;div class="sm-8"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;label&gt; &lt;/label&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;input name = "client" width="140" type="radio" value="old" /&gt;I have a Password&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;</p>
<p>&lt;/div&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;div class="row"&gt;</p>
<p>&nbsp; &nbsp; &lt;div class="sm-8"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;label&gt; &lt;/label&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;input name = "client" width="140" type="radio" id="client_register" value="new" checked="checked"/&gt;I'm New&nbsp;</p>
<p>&nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;</p>
<p>&lt;/div&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;div class="row"&gt;</p>
<p>&nbsp; &nbsp;&lt;div class="sm-4"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;label&gt;Name&lt;/label&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;input name="name" type="text" size="20" maxlength="20" class="form-control" required="required" /&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;</p>
<p>&nbsp; &nbsp;&lt;/div&gt;</p>
<p>&lt;/div&gt;</p>
<p>&nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp;&lt;div class="row"&gt;</p>
<p>&nbsp; &nbsp; &lt;div class="sm-4"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;label&gt;User&lt;/label&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;input name="user" type="text" size="20" minlength="8" maxlength="20" class="form-control" required="required"/&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;</p>
<p>&nbsp;  &nbsp;&lt;/div&gt;</p>
<p>&lt;/div&gt;</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;div class="row"&gt;</p>
<p>&nbsp; &nbsp;&lt;div class="sm-4"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;label&gt;Password&lt;/label&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p>&nbsp; &nbsp;&lt;input id= "password" input name="password" type="password" size="8" maxlength="8" class="form-control" required="required"/&gt;</p>
<p>&nbsp; &nbsp;</p>
<p>&nbsp; &nbsp; &nbsp;&lt;/div&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;/div&gt; &nbsp;&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;div class="row"&gt;</p>
<p>&nbsp; &nbsp;&lt;div class="sm-4"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;label&gt;Level&lt;/label&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;select name="level" required="required" &nbsp;id="level" class="form-control scroll" /&gt;</p>
<p>&nbsp; &nbsp; &nbsp;&lt;option value="0"&gt;1&lt;/option&gt;&nbsp;</p>
<p>&lt;/select&gt;</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp;&lt;/div&gt;</p>
<p>&lt;/div&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;div class="row"&gt;</p>
<p>&nbsp; &lt;div class="sm-8"&gt;</p>
<p>&nbsp; &nbsp;&nbsp;</p>
<p>&lt;input name="Register" type="submit" value="REGISTER" class="button btn-danger" align="right" colspan="2"/&gt;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;ul&gt; &lt;/ul&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &lt;/div&gt;</p>
<p>&lt;/div&gt; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;br /&gt;&lt;br /&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/form&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/section&gt;</p>
<p>&nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &lt;/div&gt;</p>
<p>&lt;?php $mysqli-&gt;close(); ?&gt;</p>
<p>&lt;/body&gt;</p>
<p>&nbsp;</p>
<p>&lt;script type="text/javascript"&gt;</p>
<p>&nbsp;</p>
<p>function validateForm() {</p>
<p>&nbsp; &nbsp; var x = document.forms["registerform"]["name"].value;</p>
<p>&nbsp; &nbsp; if (x==null || x=="") {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; alert("Name must be filled out");</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; return false;</p>
<p>&nbsp; &nbsp; }</p>
<p>&nbsp; &nbsp; var x = document.forms["registerform"]["user"].value;</p>
<p>&nbsp; &nbsp; if (x==null || x=="") {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; alert("User must be filled out");</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; return false;</p>
<p>&nbsp; &nbsp; }</p>
<p>var x = document.forms["registerform"]["password"].value;</p>
<p>&nbsp; &nbsp; if (x==null || x=="") {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; alert("Password must be filled out");</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; return false;</p>
<p>&nbsp; &nbsp; }</p>
<p>&nbsp;</p>
<p>var x = document.forms["registerform"]["level"].value;</p>
<p>&nbsp; &nbsp; if (x==null || x=="") {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; alert("Level must be filled out");</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; return false;</p>
<p>&nbsp; &nbsp; }</p>
<p>&nbsp; &nbsp; var x = document.forms["registerform"]["email"].value;</p>
<p>&nbsp; &nbsp; var atpos = x.indexOf("@");</p>
<p>&nbsp; &nbsp; var dotpos = x.lastIndexOf(".");</p>
<p>&nbsp; &nbsp; if (atpos&lt; 1 || dotpos&lt;atpos+2 || dotpos+2&gt;=x.length) {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; alert("Not a valid e-mail address");</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; return false;</p>
<p>&nbsp; &nbsp;}</p>
<p>}</p>
<p>&lt;/script&gt;</p>
<p>&nbsp;</p>
<p>&lt;script type="text/javascript"&gt;</p>
<p>&nbsp;</p>
<p>function CheckPassword() { &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; var error = "";</p>
<p>&nbsp; &nbsp; var illegalChars = /[\W_]/; // allow only letters and numbers</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; if (document.forms["registerform"]["password"].value == "") {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; document.forms["registerform"]["password"].style.background = 'Yellow';</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; error = "You didn't enter a password.\n";</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; alert(error);</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; return false;</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; } else if ((document.forms["registerform"]["password"].value.length &lt; 8) ) {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; error = "The password is the wrong length. \n";</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; document.forms["userForm"]["password"].style.background = 'Yellow';</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; alert(error);</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; return false;</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; } else if (illegalChars.test(document.forms["registerform"]["password"].value)) {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; error = "The password contains illegal characters.\n";</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; document.forms["registerform"]["password"].style.background = 'Yellow';</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; alert(error);</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; return false;</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; } else if ( (document.forms["registerform"]["password"].value.search(/[a-zA-Z]+/)==-1) || (document.forms["registerform"]["password"].value.search(/[0-9]+/)==-1) ) {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; error = "The password must contain at least one numeral.\n";</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; document.forms["registerform"]["password"].style.background = 'Yellow';</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; alert(error);</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; return false;</p>
<p>&nbsp;</p>
<p>&nbsp; &nbsp; } else {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; document.forms["registerform"]["password"].style.background = 'White';</p>
<p>&nbsp; &nbsp; }</p>
<p>&nbsp; &nbsp;return true;</p>
<p>}</p>
<p>&lt;/script&gt;</p>
<p>&lt;/html&gt;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(20425);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-20456'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-02-06 6:30 pm</div>
				                <div>Are you receiving any error messages?</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(20456);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-20534'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/3a8e972cd128b8b24d0b17cdb3882bf9?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/3a8e972cd128b8b24d0b17cdb3882bf9'>stephen</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-02-09 1:44 pm</div>
				                <div><p>Hello, When I log in my cpanel there is no option for "comments"</p>
<p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(20534);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-20539'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-02-09 2:37 pm</div>
				                <div>Hello Stephen,<br />
<br />
Thanks for the question.  We are a little puzzled by it.  We're not sure if you're looking for a place to leave feedback, or if you are thinking that the interface is similar to WordPress where you can manage comments.  The cPanel is the interface for installing software, accessing your hosting account files, managing email, ftp, security, domain options, security, and many other options. It's basically the control center for your hosting account.  If you're looking at managing a website, then the interface depends on the software you used to build the website.  If you can provide more information about what you are looking for specifically, then we would be happy to provide whatever support we can.<br />
<br />
Kindest regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(20539);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-21395'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/1b571cbe0630e9a5ffb3e07eff822675?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/1b571cbe0630e9a5ffb3e07eff822675'>Joe</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-03-06 11:59 pm</div>
				                <div><p>Helo&nbsp;</p>
<p>How&nbsp;can I place&nbsp;a "thank you page" in this PHP?</p>
<p>What would a example be ?</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(21395);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-21468'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-03-09 10:44 am</div>
				                <div>Hello Joe,<br />
<br />
Thank you for contacting us. We are happy to help, but will need some additional information.<br />
<br />
What type of "thank you page" do you want to place, and where?<br />
<br />
Can you provide a link to an example page, etc.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(21468);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-21506'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/aca0ecfcb5866614cc8fbd3f531b4cbd?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/aca0ecfcb5866614cc8fbd3f531b4cbd'>Jewel</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-03-10 2:16 am</div>
				                <div><p>Very Nice</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(21506);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-21704'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/70b2ec6c26cf03f621447705df80f695?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/70b2ec6c26cf03f621447705df80f695'>john</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-03-14 10:45 am</div>
				                <div>the site is ok.good work</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(21704);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-22477'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/296dcc0ab78528603a518d72a5ba6738?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/296dcc0ab78528603a518d72a5ba6738'>Eugene</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-04-08 11:08 am</div>
				                <div><p>Hi,</p>
<p>I have followed the steps and somehow <strong>"Thank you for your Comment!"; mysql_close($con);}?&gt;"&nbsp;</strong>is displaying at the top of each page before I even submit anything. I can't seem to figure out why. Any feedback would greatly appreciated.</p>
<p>Thanks in advance!</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(22477);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-22478'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-04-08 11:31 am</div>
				                <div>Hello Eugene,<br />
<br />
If you are seeing that portion of the code from above, then it's most likely happening because you didn't close the quotes with the echo command.   Double-check your code and let us know if you have any further questions or comments.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(22478);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-22482'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/296dcc0ab78528603a518d72a5ba6738?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/296dcc0ab78528603a518d72a5ba6738'>Eugene</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-04-08 11:41 am</div>
				                <div><p>Hi&nbsp;<span style="color: rgb(35, 35, 35); font-family: adelle-sans, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 22px;">Arnel</span>,</p>
<p>My manage_comments code is as follows:</p>
<p>&lt;?</p>
<p>if( $_POST )</p>
<p>{</p>
<p>&nbsp;$con = mysql_connect("localhost","","");</p>
<p>&nbsp;</p>
<p>&nbsp; if (!$con)</p>
<p>&nbsp; {</p>
<p>&nbsp; &nbsp; die('Could not connect: ' . mysql_error());</p>
<p>&nbsp; }</p>
<p>&nbsp; mysql_select_db("verifytrade", $con);</p>
<p>&nbsp;</p>
<p>&nbsp; $users_name = $_POST['name'];</p>
<p>&nbsp; $users_email = $_POST['email'];</p>
<p>&nbsp; $users_website = $_POST['website'];</p>
<p>&nbsp; $users_comment = $_POST['comment'];</p>
<p>&nbsp;</p>
<p>&nbsp; $users_name = mysql_real_escape_string($users_name);</p>
<p>&nbsp; $users_email = mysql_real_escape_string($users_email);</p>
<p>&nbsp; $users_website = mysql_real_escape_string($users_website);</p>
<p>&nbsp; $users_comment = mysql_real_escape_string($users_comment);</p>
<p>&nbsp;&nbsp;</p>
<p>&nbsp; $articleid = $_GET['id'];</p>
<p>&nbsp;</p>
<p>&nbsp; if( ! is_numeric($articleid) )</p>
<p>&nbsp; &nbsp; die('invalid article id');</p>
<p>&nbsp;</p>
<p>&nbsp; $query = "</p>
<p>&nbsp; INSERT INTO `verifytrade`.`comments` (`id`, `name`, `email`, `website`,</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; `comment`, `timestamp`, `articleid`) VALUES (NULL, '$users_name',</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; '$users_email', '$users_website', '$users_comment',</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; CURRENT_TIMESTAMP, '$articleid');";</p>
<p>&nbsp;</p>
<p>&nbsp; mysql_query($query);</p>
<p>&nbsp;</p>
<p>&nbsp; echo "&lt;h2&gt;Thank you for your Comment!&lt;/h2&gt;";</p>
<p>&nbsp;</p>
<p>&nbsp; mysql_close($con);</p>
<p>}</p>
<p>?&gt;</p>
<p>&nbsp;</p>
<p>Thanks!</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(22482);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-22484'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-04-08 1:20 pm</div>
				                <div>Hello,<br />
Make sure to put the  "&lt;?php" in place the current statement and then your code should work.  If you have any further questions or comments, please let us know.<br />
<br />
Regards, Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(22484);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-22522'></a>
		<div  style='margin:2px 0px 0px 160px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/296dcc0ab78528603a518d72a5ba6738?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/296dcc0ab78528603a518d72a5ba6738'>Eugene</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-04-10 8:11 am</div>
				                <div><p>Hi, the pages now work and when I click submit the "Thank You" message appears but nothing write to my database?&nbsp;</p>
<p>&nbsp;</p>
<p>My manage_comments.php is as follows:</p>
<p>&lt;body&gt;</p>
<p>&lt;?php</p>
<p>if( $_POST )</p>
<p>{</p>
<p>&nbsp; $con = mysqli_connect("localhost","root","");</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp; mysqli_select_db($con, "verifytrade");</p>
<p>&nbsp;</p>
<p>&nbsp; if (!$con)</p>
<p>&nbsp; {</p>
<p>&nbsp; &nbsp; die('Could not connect: ' . mysql_error());</p>
<p>&nbsp; }</p>
<p>&nbsp;</p>
<p>&nbsp; $users_name = $_POST['name'];</p>
<p>&nbsp; $users_email = $_POST['email'];</p>
<p>&nbsp; $users_comment = $_POST['comment'];</p>
<p>&nbsp;</p>
<p>&nbsp; $users_name = mysql_real_escape_string($users_name);</p>
<p>&nbsp; $users_email = mysql_real_escape_string($users_email);</p>
<p>&nbsp; $users_comment = mysql_real_escape_string($users_comment);</p>
<p>&nbsp;</p>
<p>&nbsp; $query = "</p>
<p>&nbsp; INSERT INTO `verifytrade`.`comments` (`id`, `name`, `email`,`comment`,&nbsp;</p>
<p>&nbsp; `timestamp`) VALUES (NULL, '$users_name',</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; '$users_email', '$users_comment',</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; CURRENT_TIMESTAMP);";</p>
<p>&nbsp;</p>
<p>&nbsp; mysql_query($query);</p>
<p>&nbsp;</p>
<p>&nbsp; echo "&lt;h2&gt;Thank you for your Comment!&lt;/h2&gt;";</p>
<p>&nbsp;</p>
<p>&nbsp; mysqli_close($con);</p>
<p>}</p>
<p>?&gt;</p>
<p>&nbsp;</p>
<p>&lt;/body&gt;</p>
<p>&nbsp;</p>
<p>Thanks in advance. This has been a lot of help!</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(22522);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-22569'></a>
		<div  style='margin:2px 0px 0px 200px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-04-13 8:27 am</div>
				                <div>Hello,<br />
<br />
You will need to have rthe query print to the screen to see if it has the information you expect. Also, it is a good idea to error trap the  query call so you can see any error messages that the function throws.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(22569);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-22563'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/b6c60ff012b85d3fb334df0687eb1a76?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/b6c60ff012b85d3fb334df0687eb1a76'>manoj m. prajapati</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-04-13 6:33 am</div>
				                <div><p>&lt;?php</p>
<p>include('connection.php');</p>
<p>mysql_select_db('employee');</p>
<p>error_reporting(1);</p>
<p>$query="INSERT INTO emp_info VALUES ('', '$name','$Address','$email','$mobial')";</p>
<p>mysql_query($query);</p>
<p>?&gt;</p>
<p>&lt;html&gt;</p>
<p>&lt;body&gt;</p>
<p>&nbsp;</p>
<p>&lt;form method="post" enctype="multipart/form-data"&gt;</p>
<p>&nbsp; &lt;table align="left"&gt;</p>
<p>&nbsp; &nbsp; &lt;tr align="left"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;th&gt;Name :&lt;/th&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;th&gt;&lt;input type="text" name="name" required&gt;&lt;/th&gt;</p>
<p>&nbsp; &nbsp; &lt;/tr&gt;</p>
<p>&nbsp; &nbsp; &lt;tr align="left" valign="top"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;th&gt;Address :&lt;/th&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;th&gt;&lt;textarea rows="4" cols="21" name="Address" required&gt;&lt;/textarea&gt;&lt;/th&gt;</p>
<p>&nbsp; &nbsp; &lt;/tr&gt;</p>
<p>&nbsp; &nbsp; &lt;tr align="left"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;th&gt;email :&lt;/th&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;th&gt; &nbsp; &nbsp; &nbsp; &nbsp;&lt;input type="text" name="email" required&gt; &nbsp; &nbsp; &nbsp;&lt;/th&gt;</p>
<p>&nbsp; &nbsp; &lt;/tr&gt;</p>
<p>&nbsp; &nbsp; &lt;tr align="left"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;th width="100"&gt;Mobial :&lt;/th&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;th width="100"&gt; &nbsp; &nbsp; &nbsp; &nbsp;&lt;input type="text" pattern="[0-9]*" maxlength="10" name="mobial" required&gt; &nbsp; &nbsp; &nbsp;&lt;/th&gt;</p>
<p>&nbsp; &nbsp; &lt;/tr&gt;</p>
<p>&nbsp; &nbsp; &lt;tr&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;th colspan="2"&gt;&lt;input type="submit" &nbsp;value="INSERT"&gt;&lt;/th&gt;</p>
<p>&nbsp; &nbsp;&lt;/tr&gt;</p>
<p>&nbsp; &lt;/table&gt;</p>
<p>&lt;/form&gt;</p>
<p>&nbsp;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p>plese help me to insert data to database with php</p>
<p>i am a many try but program sucssess but data not inserted</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(22563);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-22607'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-04-13 5:05 pm</div>
				                <div>Hello manoj,<br />
<br />
You will want to use normal code troubleshooting techniques such as printing out the query variable to see what is being created. Also, you can add error trapping to see if the query function is throwing any error codes.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(22607);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-23279'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/b34340494abdbdc726d9a12f327d58f1?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/b34340494abdbdc726d9a12f327d58f1'>Tubby</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-05-08 8:16 pm</div>
				                <div><p><strong>This is the error message I receive upon submit:</strong></p>
<p><strong>Warning</strong>: mysql_connect(): Access denied for user 'afx_u1'@'localhost' (using password: YES) in <strong>/home/afx/public_html/dev/manage_comment.php</strong> on line <strong>4</strong> Could not connect: Access denied for user 'afx_u1'@'localhost' (using password: YES)</p>
<p>My password is not YES, and it is entered correctly (i'm positive)</p>
<p>What can I test or change to make this work?</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(23279);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-23313'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-05-11 11:25 am</div>
				                <div>Hello Tubby,<br />
<br />
Thank you for contacting us. Make sure you have <a href="http://www.inmotionhosting.com/support/website/databases/create-db-user">created the user and gave them permission</a> to access the database.<br />
<br />
Also, check the <strong>database</strong>, and <strong>database username</strong> for typos or misspellings.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(23313);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24103'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/67c127c31439b60c561f1065700aebb5?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/67c127c31439b60c561f1065700aebb5'>Eggface</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-10 4:49 pm</div>
				                <div><p>Hi, Not sure if you could help. I have followed the guide but when I click submit I get half an error of:</p>
<p>Thank you for your Comment!"; mysql_close($con); } ?&gt;</p>
<p>Which looks like its not understanding the close connection as a function and just echoing it.</p>
<p>Also it is not uploading to my SQL database.</p>
<p>&nbsp;</p>
<p>My code as follows:</p>
<p>###########</p>
<p>&nbsp;</p>
<p>&lt;?php</p>
<p>if( $_POST )</p>
<p>{</p>
<p>&nbsp; $con = mysql_connect("localhost","root","password");</p>
<p>&nbsp;</p>
<p>&nbsp; if (!$con)</p>
<p>&nbsp; {</p>
<p>&nbsp; &nbsp; die('Could not connect: ' . mysql_error());</p>
<p>&nbsp; }</p>
<p>&nbsp;</p>
<p>&nbsp; mysql_select_db("paranormal", $con);</p>
<p>&nbsp;</p>
<p>&nbsp; $users_name = $_POST['name'];</p>
<p>&nbsp; $users_email = $_POST['email'];</p>
<p>&nbsp; $users_region = $_POST['dropdown'];</p>
<p>&nbsp; $users_where = $_POST['where'];</p>
<p>&nbsp; $users_when = $_POST['date'];</p>
<p>&nbsp; $users_comment = $_POST['comment'];</p>
<p>&nbsp;</p>
<p>&nbsp; $users_name = mysql_real_escape_string($users_name);</p>
<p>&nbsp; $users_email = mysql_real_escape_string($users_email);</p>
<p>&nbsp; $users_region = mysql_real_escape_string($users_region);</p>
<p>&nbsp; $users_where = mysql_real_escape_string( $users_where);&nbsp;</p>
<p>&nbsp; $users_when = mysql_real_escape_string($users_when);</p>
<p>&nbsp; $users_comment = mysql_real_escape_string($users_comment);</p>
<p>&nbsp;</p>
<p>&nbsp; $articleid = $_GET['id'];</p>
<p>&nbsp; if( ! is_numeric($articleid) )</p>
<p>&nbsp; &nbsp; die('invalid article id');</p>
<p>&nbsp;</p>
<p>&nbsp; $query = "INSERT INTO `paranormal`.`comments` (`id`, `name`, `email`, `when`, `where`, `comment`, `timestamp`, `articleid`, `Region`) VALUES (NULL, '$users_name', '$users_email', '$users_when', '$users_where', '$users_comment', CURRENT_TIMESTAMP, '$articleid', '$users_region');";</p>
<p>&nbsp;&nbsp;</p>
<p>&nbsp;mysql_query($query);</p>
<p>&nbsp;</p>
<p>&nbsp; echo "&lt;h2&gt;Thank you for your Comment!&lt;/h2&gt;";</p>
<p>&nbsp;</p>
<p>mysql_close($con);</p>
<p>}</p>
<p>&nbsp;</p>
<p>?&gt;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24103);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24456'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/9e243578792cc5bf6faeeca7a7e24f47?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/9e243578792cc5bf6faeeca7a7e24f47'>Danzo</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-25 4:09 pm</div>
				                <div><p>Dear Sir / Madam,&nbsp;</p>
<p>I have followed exactly the steps but when I enter the details, it shows&nbsp;</p>
<p><em>"<strong style="font-family: 'Times New Roman'; font-size: medium;">Notice</strong><span style="font-family: 'Times New Roman'; font-size: medium;">: Undefined index: id in&nbsp;</span><strong style="font-family: 'Times New Roman'; font-size: medium;">C:\xampp\htdocs\manage_comments.php</strong><span style="font-family: 'Times New Roman'; font-size: medium;">&nbsp;on line&nbsp;</span><strong style="font-family: 'Times New Roman'; font-size: medium;">23</strong></em></p>
<p><span style="font-family: 'Times New Roman'; font-size: medium;"><em>invalid article id</em>"</span></p>
<p><strong><span style="font-family: 'Times New Roman'; font-size: medium;">Line 23:&nbsp;</span><span style="font-family: 'Times New Roman'; font-size: medium;">$articleid = $_GET['id'];</span></strong></p>
<p><span style="font-family: 'Times New Roman'; font-size: medium;">I have tried many ways, like inserting "issets( )" but it still doesn't work.&nbsp;</span></p>
<p><span style="font-family: 'Times New Roman'; font-size: medium;">May I kindly request for your help please? Thank you?&nbsp;</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24456);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24469'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-25 7:27 pm</div>
				                <div>Hello Danzo,<br />
<br />
Thank you for contacting us. Since this is just one guide in a <a href="http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql">7 section series</a>, have you completed the previous guides too?<br />
<br />
Unfortunately, it is difficult for us to troubleshoot code, especially in a xampp environment, since I have no way of knowing if it was setup correctly. Similar to other questions above, you will want to use normal code troubleshooting techniques such as printing out the query variable to see what is being created. Also, you can add error trapping to see if the query function is throwing any error codes.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24469);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24523'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/1ab9e791d2429e9246c505f1b9f535a9?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/1ab9e791d2429e9246c505f1b9f535a9'>dineas</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-29 10:55 am</div>
				                <div><p>I need help.I cant able to find errors in this codes.It failed to insert data into the database created in phpmyadmin and im using xampp.</p>
<p>&lt;html&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;?php&nbsp;</p>
<p>&nbsp;</p>
<p>$con = mysql_connect("localhost","root","");</p>
<p>if (!$con)</p>
<p>{</p>
<p>&nbsp; die('Could not connect: ' . mysql_error());</p>
<p>}</p>
<p>mysql_select_db("patients", $con);</p>
<p>$sql="INSERT INTO `patients`(`id`, `patient_name`, `patient_pass`, `patient_email`) VALUES ([value-1],[value-2],[value-3],[value-4])</p>
<p>('$_POST[id]','$_POST[patient_name]','$_POST[patient_pass]','$_POST[patient_email]')";</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>if (!mysql_query($sql,$con))</p>
<p>{</p>
<p>&nbsp; die('Error: ' . mysql_error());</p>
<p>}</p>
<p>else</p>
<p>{</p>
<p>echo "You are successfully registered!!!";</p>
<p>}</p>
<p>&nbsp;</p>
<p>mysql_close($con);</p>
<p>?&gt;</p>
<p>&lt;/font&gt;</p>
<p>&lt;/br&gt;</p>
<p>&lt;/br&gt;</p>
<p>&lt;input type="button"value="Finish"onclick="history.go(-2);return true;"&gt;</p>
<p>&lt;/table&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24523);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24535'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-29 3:16 pm</div>
				                <div>Hello dineas,<br />
<br />
You will first want to rule out the query itself by testing it alone within the phpmyadmin. You then will also want to test the error code when it does the  Insert in the php.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24535);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24546'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/9cae10d608e447e0add191401e229b31?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/9cae10d608e447e0add191401e229b31'>shwe</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-06-30 3:54 pm</div>
				                <div><p>please help me solve this: uploading a file is the problem.</p>
<p>&nbsp;</p>
<p>&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;&lt;head&gt;&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;&lt;title&gt;HOME&lt;/title&gt;&lt;link rel="stylesheet" href="/support/../CSS/general.css"&nbsp; /&gt;&lt;/head&gt;&lt;body&gt;&lt;?phpinclude("../menu.php");?&gt;&lt;div id = "content"&gt;&lt;div id="left-side"&gt;&lt;h2&gt;farming tools&lt;/h2&gt;&lt;div id="upload"&gt;&lt;table &gt;&lt;form&nbsp; enctype="multipart/form-data" action="" method="POST" name="f tools"&gt;&lt;legend&gt;&lt;/legend&gt;&lt;tr align="center"&gt;&lt;td&gt; &lt;label&gt;FIRST NAME:&lt;/label&gt;&lt;/td&gt;&lt;td&gt;&lt;input name="name" type="text" /&gt; &lt;/td&gt;&lt;/tr&gt;&lt;tr align="center"&gt;&lt;td&gt;&lt;label&gt;ITEM NAME:&lt;/label&gt;&lt;/td&gt;&lt;td&gt;&lt;input name="item" type="text" /&gt; &lt;/td&gt;&lt;/tr&gt;&lt;tr align="center"&gt;&lt;td&gt;&lt;label&gt;Price:&lt;/label&gt;&lt;/td&gt;&lt;td&gt;&lt;input name="PRICE" type="text" required="required"/&gt; &lt;/td&gt;&lt;/tr&gt;&lt;tr align="center"&gt;&lt;td&gt;&lt;label&gt;LOCATION:&lt;/label&gt;&lt;/td&gt;&lt;td&gt;&lt;input name="location" type="text" /&gt; &lt;/td&gt;&lt;/tr&gt;&lt;tr align="center"&gt;&lt;td&gt;&lt;label&gt;PHONE NO:&lt;/label&gt;&lt;/td&gt;&lt;td&gt;&lt;input name="phone" type="text" /&gt; &lt;/td&gt;&lt;/tr&gt;&lt;tr align="center"&gt;&lt;td&gt;&lt;label&gt;EMAIL:&lt;/label&gt;&lt;/td&gt;&lt;td&gt;&lt;input name="email" type="email"&nbsp; required="required"/&gt; &lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&nbsp;&nbsp;&nbsp; &lt;td&gt;Select image to upload:&lt;/td&gt;&lt;td&gt;&nbsp;&nbsp;&nbsp; &lt;input type="file" name="upload" /&gt;&nbsp;&nbsp;&nbsp; &lt;/td&gt;&lt;/tr&gt;&lt;tr align="center"&gt;&lt;td&gt;&lt;label&gt;details:&lt;/label&gt;&lt;/td&gt;&lt;td&gt;&lt;textarea id = "Message" name = "Message" type = "text" placeholder = "Type Message Here" data-validate = "required"&gt;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &lt;/textarea&gt;&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;&lt;input&nbsp; class="submit" type="submit" value="update" name="update"/&gt;&lt;/form&gt;&nbsp;&lt;?php&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if(isset($_POST["update"])){&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if(!empty($_POST['email'])&nbsp; &amp;&amp; !empty($_POST['PRICE']) ) {&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $Name=$_POST["name"];&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $item=$_POST["item"];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $email=$_POST['email'];&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $price=$_POST['PRICE'];&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $location=$_POST['location'];&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $phone=$_POST['phone'];&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $upload=$_FILES['upload']['name'];&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $tmp_name&nbsp; = $_FILES['upload']['tmp_name'];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $message=$_POST['Message'];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; include("../connect.php");&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; move_uploaded_file($_FILES['upload']['tmp_name'],"../upload/".$_FILES['upload']['name']) or die(mysql_error());&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $sql="INSERT INTO tool (Name, itemName,&nbsp;&nbsp;&nbsp; PRICE, location, phone,&nbsp;&nbsp;&nbsp; email, image, description) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VALUES ('$Name','$item','$price','$location','$phone','$email','$upload','$message')";&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if($result=mysqli_query($con,$sql)){&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo "Thank you, your item was posted successfully";&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; } else {&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo "Failure!";&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; }&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; mysqli_close($con);&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; }&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ?&gt;&lt;/td&gt;&lt;/tr&gt; &lt;/table&gt;&lt;?phpecho "&lt;BR/&gt;";?&gt;&nbsp;&nbsp;&nbsp; &lt;!-- what to buy --&gt;&nbsp;&lt;/div&gt;&nbsp;&lt;/div&gt;&nbsp;&lt;div align="right"&gt;&nbsp;&lt;img src="/support/../slide/img/home/tanks.png" width="501" height="450"/&gt;&nbsp;&lt;/div&gt;&lt;/div&gt;&nbsp;&lt;?php&nbsp;include("../footer.php");&nbsp;?&gt;&lt;/body&gt;&lt;/html&gt;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24546);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24552'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-01 12:59 am</div>
				                <div>Hello Shwe,<br />
<br />
What error are you getting when you try to upload files? Are you trying to upload files into the database or just onto the server?<br />
<br />
Best Regards,<br />
TJ Edens</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24552);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24623'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/f9320d53bb1a90fbce938b4a60096aed?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/f9320d53bb1a90fbce938b4a60096aed'>jack</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-04 6:24 pm</div>
				                <div><p>Could someone please tell me what other reason besides wrong credentials would cause me to get an access denied error message with this code? I have checked the users access and set the password several times to ensure that it is right. Could not connect: Access denied for user 'db_username'@'localhost' (using password: YES)[code]&lt;?if( $_POST ){&nbsp; $con = mysql_connect("localhost","db_username","lamepassword");&nbsp; if (!$con)&nbsp; {&nbsp;&nbsp;&nbsp; die('Could not connect: ' . mysql_error());&nbsp; }&nbsp; mysql_select_db("database_name", $con);&nbsp; $users_name = $_POST['name'];&nbsp; $users_email = $_POST['email'];&nbsp; $users_website = $_POST['website'];&nbsp; $users_comment = $_POST['comment'];&nbsp; $users_name = mysql_real_escape_string($users_name);&nbsp; $users_email = mysql_real_escape_string($users_email);&nbsp; $users_website = mysql_real_escape_string($users_website);&nbsp; $users_comment = mysql_real_escape_string($users_comment);&nbsp; $articleid = $_GET['id'];&nbsp; if( ! is_numeric($articleid) )&nbsp;&nbsp;&nbsp; die('invalid article id');&nbsp; $query = "&nbsp; INSERT INTO `database_name`.`comments` (`id`, `name`, `email`, `website`,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; `comment`, `timestamp`, `articleid`) VALUES (NULL, '$users_name',&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '$users_email', '$users_website', '$users_comment',&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CURRENT_TIMESTAMP, '$articleid');";&nbsp; mysql_query($query);&nbsp; echo "&lt;h2&gt;Thank you for your Comments!&lt;/h2&gt;";&nbsp; mysql_close($con);}?&gt;[/code]</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24623);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24659'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-06 3:34 pm</div>
				                <div>Jack,<br />
<br />
To be honest, if that error appears, then the problem has to do with the credentials. I know you're asking for another possible reason, but in this case it typically no other reason than credentials.  You may need to double-check what USER is assigned to run the script as well.  I hope this helps to answer your question, please let us know if you require any further  assistance.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24659);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24762'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/ae0c8d62846423fcc7f76f7f4f8330b3?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/ae0c8d62846423fcc7f76f7f4f8330b3'>faisal</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-10 5:50 am</div>
				                <div><p>it is not working . plz es ko thek kr mujy send kre</p>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;&nbsp;</p>
<p>&lt;title&gt; Table of Student&lt;/title&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;table border="1"&gt;</p>
<p>&lt;tr&gt;&nbsp;</p>
<p>&lt;th&gt;Std_ID&lt;/th&gt;</p>
<p>&lt;th&gt;Std_Name&lt;/th&gt;</p>
<p>&lt;th&gt;Std_Address&lt;/th&gt;</p>
<p>&lt;th&gt;Std_Email&lt;/th&gt;</p>
<p>&lt;/tr&gt;</p>
<p>&lt;/table&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p>&nbsp;</p>
<p>&lt;?php</p>
<p>$servername = "localhost";</p>
<p>$username = "root";</p>
<p>$password = "";</p>
<p>$dbname = "University";</p>
<p>&nbsp;</p>
<p>// Create connection</p>
<p>$conn = mysqli_connect($servername, $username, $password, $dbname);</p>
<p>// Check connection</p>
<p>if (!$conn) {</p>
<p>&nbsp; &nbsp; die("Connection failed: " . mysqli_connect_error());</p>
<p>}</p>
<p>$sql = "INSERT INTO student*</p>
<p>VALUES ('1', 'Faisal', 'M.B.DIN','mfs.uos@gmail.com')";</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>$conn-&gt;close();</p>
<p>?&gt;</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24762);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24840'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-13 1:22 pm</div>
				                <div>Hello faisal,<br />
<br />
Thank you for contacting us. We can help you troubleshoot, but will need some additional information. What happens when you try to use the script? Do you get any errors?<br />
<br />
Also, have you verified the database settings are correct? Specifically these:<br />
$username = "root";<br />
$password = "";<br />
$dbname = "University";<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24840);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24774'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/b2283b826557f00cc29b57cf3ae03845?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/b2283b826557f00cc29b57cf3ae03845'>Lord</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-10 3:26 pm</div>
				                <div><p>Hello, thanks for the codes but i'm encoutering some problems. First, i am not sure my database even connects to the form page. Secondly, if its connecting, data is not been inserted into the data base. I can't seen to find the problem, please help me.</p>
<p>Here is the html for the form:</p>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&lt;title&gt;test&lt;/title&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
<p>&lt;h1&gt;This is page1.php&lt;/h1&gt;</p>
<p>&lt;div&gt;&lt;a href='page2.php?id=2'&gt;Click here&lt;/a&gt; to go to page2.php&lt;/div&gt;</p>
<p>&lt;div style='margin:20px; width:100px; height:100px; background:blue;'&gt;&lt;/div&gt;</p>
<p>&nbsp; &lt;form action='contact.php' method='post'&gt;</p>
<p>&nbsp; NAME: &lt;input type='text' name='name' id='name' required /&gt;&lt;br /&gt;</p>
<p>&nbsp; Email: &lt;input type='email' name='email' id='email' required /&gt;&lt;br /&gt;</p>
<p>&nbsp; Website: &lt;input type='text' name='website' id='website' required /&gt;&lt;br /&gt;</p>
<p>&nbsp; Comment:&lt;br /&gt;</p>
<p>&nbsp; &lt;textarea name='comment' id='comment' required &gt;&lt;/textarea&gt;&lt;br /&gt;</p>
<p>&nbsp; &lt;input type='submit' value='Submit' /&gt; &nbsp;</p>
<p>&lt;/form&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p>And here is the PHP (contact.php):</p>
<p>&lt;?php</p>
<p>&nbsp; $users_name = $_POST['name'];</p>
<p>&nbsp; $users_email = $_POST['email'];</p>
<p>&nbsp; $users_website = $_POST['website'];</p>
<p>&nbsp; $users_comment = $_POST['comment'];</p>
<p>&nbsp;</p>
<p>&nbsp; $database= "comments";</p>
<p>&nbsp; $password= "password";</p>
<p>&nbsp; $username= "username";</p>
<p>&nbsp;&nbsp;</p>
<p>if($users_name&amp;&amp;$users_email&amp;&amp;$users_website&amp;&amp;$users_comment){</p>
<p>&nbsp; $con = mysql_connect("localhost", $username, $password) or die("Could not connect");</p>
<p>&nbsp;&nbsp;</p>
<p>&nbsp; @mysql_select_db("comments", $con) or die("Unable to Connect");</p>
<p>&nbsp;</p>
<p>&nbsp; mysql_query("INSERT INTO `comments`.`test` (`id`, `Name`, `Email`, `Website`, `Comment`)&nbsp;</p>
<p>VALUES ("", '$users_name', '$users_email', '$users_website', '$users_comment');") or die("Strange error");</p>
<p>&nbsp;</p>
<p>&nbsp; echo "Comment Posted";</p>
<p>&nbsp;</p>
<p>&nbsp; mysql_close($con);</p>
<p>&nbsp;</p>
<p>&nbsp;header("location:index.html");</p>
<p>&nbsp;</p>
<p>} else{</p>
<p>&nbsp; echo "You need to fill all options";</p>
<p>}</p>
<p>?&gt;</p>
<p>Please, is there a way I can test if my database is connected?</p>
<p>Anticipating your quick response.</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24774);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24843'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-13 1:32 pm</div>
				                <div>Hello Lord,<br />
<br />
Thank you for contacting us. I looked at your code, and if the database connection fails, you should see a message stating: "Could not connect"<br />
<br />
If you do not see this error message, you most likely are connecting successfully.<br />
<br />
Thank you ,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24843);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24893'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/feb1ef748357dfe9fba0ac003a26b94a?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/feb1ef748357dfe9fba0ac003a26b94a'>olivia</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-15 1:26 am</div>
				                <div><p>&nbsp;Why won't my form data insert properly into my MySQL database? .</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24893);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24906'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-15 9:17 am</div>
				                <div>Hello olivia,<br />
<br />
Thank you for contacting us. We will need some additional information. What steps are you taking? Are you following the above guide? <br />
<br />
Are you getting an error message?<br />
<br />
Please include any additional information to help you troubleshoot further.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24906);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24945'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/1ab9e791d2429e9246c505f1b9f535a9?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/1ab9e791d2429e9246c505f1b9f535a9'>Dineas</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-16 1:30 pm</div>
				                <div><p>I need a help. I need the php codes for the patients to book an appointment with the specific doctors after they have been registers into the system. After,the patient booked an appointment,the selected doctor should able to view the appointment and able to approve or reject the appointment by click the approve and reject button. Im also need the validation codes for dates to check whether the dates are available or not.Can someone help me,please?</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24945);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-24948'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-16 1:57 pm</div>
				                <div>Hello Dineas,<br />
<br />
Thank you for contacting us. We are happy to help guide you, but you will need an actual developer to code a custom solution for this.<br />
<br />
This is because it will require more access and troubleshooting before the code can be created.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(24948);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-25183'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/1ab9e791d2429e9246c505f1b9f535a9?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/1ab9e791d2429e9246c505f1b9f535a9'>Dineas</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-26 12:11 pm</div>
				                <div><p>I have encountered some errors while registering new doctor but the data is added to the database.The errors encountered are,</p>
<p><strong style="font-family: 'Times New Roman'; font-size: medium;">Warning</strong><span style="font-family: 'Times New Roman'; font-size: medium; background-color: rgb(236, 236, 236);">: mysql_fetch_array() expects parameter 1 to be resource, boolean given in&nbsp;</span><strong style="font-family: 'Times New Roman'; font-size: medium;">C:\xampp\htdocs\clinicosight\doctors.php</strong><span style="font-family: 'Times New Roman'; font-size: medium; background-color: rgb(236, 236, 236);">&nbsp;on line&nbsp;</span><strong style="font-family: 'Times New Roman'; font-size: medium;">7</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">Warning</strong><span style="font-family: 'Times New Roman'; font-size: medium; background-color: rgb(236, 236, 236);">: fopen(): Filename cannot be empty in&nbsp;</span><strong style="font-family: 'Times New Roman'; font-size: medium;">C:\xampp\htdocs\clinicosight\doctors.php</strong><span style="font-family: 'Times New Roman'; font-size: medium; background-color: rgb(236, 236, 236);">&nbsp;on line&nbsp;</span><strong style="font-family: 'Times New Roman'; font-size: medium;">23</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">Warning</strong><span style="font-family: 'Times New Roman'; font-size: medium; background-color: rgb(236, 236, 236);">: fread() expects parameter 1 to be resource, boolean given in&nbsp;</span><strong style="font-family: 'Times New Roman'; font-size: medium;">C:\xampp\htdocs\clinicosight\doctors.php</strong><span style="font-family: 'Times New Roman'; font-size: medium; background-color: rgb(236, 236, 236);">&nbsp;on line&nbsp;</span><strong style="font-family: 'Times New Roman'; font-size: medium;">24</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">Warning</strong><span style="font-family: 'Times New Roman'; font-size: medium; background-color: rgb(236, 236, 236);">: fclose() expects parameter 1 to be resource, boolean given in&nbsp;</span><strong style="font-family: 'Times New Roman'; font-size: medium;">C:\xampp\htdocs\clinicosight\doctors.php</strong><span style="font-family: 'Times New Roman'; font-size: medium; background-color: rgb(236, 236, 236);">&nbsp;on line&nbsp;</span><strong style="font-family: 'Times New Roman'; font-size: medium;">26</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">Warning</strong><span style="font-family: 'Times New Roman'; font-size: medium; background-color: rgb(236, 236, 236);">: mysql_fetch_array() expects parameter 1 to be resource, boolean given in&nbsp;</span><strong style="font-family: 'Times New Roman'; font-size: medium;">C:\xampp\htdocs\clinicosight\doctors.php</strong><span style="font-family: 'Times New Roman'; font-size: medium; background-color: rgb(236, 236, 236);">&nbsp;on line&nbsp;</span><strong style="font-family: 'Times New Roman'; font-size: medium;">46</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">Notice</strong><span style="font-family: 'Times New Roman'; font-size: medium; background-color: rgb(236, 236, 236);">: Undefined variable: maxpatid in&nbsp;</span><strong style="font-family: 'Times New Roman'; font-size: medium;">C:\xampp\htdocs\clinicosight\doctors.php</strong><span style="font-family: 'Times New Roman'; font-size: medium; background-color: rgb(236, 236, 236);">&nbsp;on line&nbsp;</span><strong style="font-family: 'Times New Roman'; font-size: medium;">50</strong><strong style="font-family: 'Times New Roman'; font-size: medium;">Warning</strong><span style="font-family: 'Times New Roman'; font-size: medium; background-color: rgb(236, 236, 236);">: mysql_fetch_array() expects parameter 1 to be resource, boolean given in&nbsp;</span><strong style="font-family: 'Times New Roman'; font-size: medium;">C:\xampp\htdocs\clinicosight\doctors.php</strong><span style="font-family: 'Times New Roman'; font-size: medium; background-color: rgb(236, 236, 236);">&nbsp;on line&nbsp;</span><strong style="font-family: 'Times New Roman'; font-size: medium;">51</strong></p>
<p>please edit the codes below and help me with it.Thanks</p>
<p>&lt;?php</p>
<p>&nbsp;</p>
<p>include("validation/header.php");</p>
<p>include("dbconnection.php");</p>
<p>$result = mysql_query("SELECT MAX(docid) FROM doctor");</p>
<p>while($row = mysql_fetch_array($result))</p>
<p>&nbsp; {</p>
<p>$maxpatid = $row[0];</p>
<p>$maxpatid++;</p>
<p>&nbsp; }</p>
<p>&nbsp;</p>
<p>//insert doctors record</p>
<p>if(isset($_POST["button"]))</p>
<p>{</p>
<p>&nbsp;</p>
<p>// UPLOAD IMAGE CODE</p>
<p>&nbsp;</p>
<p>// Temporary file name stored on the server</p>
<p>&nbsp; &nbsp; &nbsp; $tmpName &nbsp;= $_FILES['image']['tmp_name']; &nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; // Read the file&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; $fp &nbsp; &nbsp; &nbsp;= fopen($tmpName, 'r');</p>
<p>&nbsp; &nbsp; &nbsp; $data = fread($fp, filesize($tmpName));</p>
<p>&nbsp; &nbsp; &nbsp; $data = addslashes($data);</p>
<p>&nbsp; &nbsp; &nbsp; fclose($fp);</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>//UPLOAD IMAGE CODE ENDS HERE AND IMAGE BINARY VALUE STORES IN VARIABLE $data</p>
<p>&nbsp;</p>
<p>$sql="INSERT INTO doctor(doctorname, quali, specialistin, contactno, emailid, image, biodata,password )</p>
<p>VALUES</p>
<p>('$_POST[dfn] $_POST[dmn] $_POST[dln]' ,'$_POST[quali]','$_POST[spin]','$_POST[contact]','$_POST[emailid]','$data','$_POST[bio]','$_POST[password]')";</p>
<p>&nbsp;</p>
<p>if (!mysql_query($sql,$con))</p>
<p>&nbsp;{</p>
<p>&nbsp;die('Error: ' . mysql_error());</p>
<p>&nbsp;}</p>
<p>&nbsp;&nbsp;</p>
<p>}</p>
<p>?&gt;</p>
<p>&lt;?php</p>
<p>if(isset($_POST["button"]))</p>
<p>{</p>
<p>$result = mysql_query("SELECT MAX(docid) FROM doctor");</p>
<p>while($row = mysql_fetch_array($result))</p>
<p>&nbsp; {</p>
<p>$maxpatid = $row[0];</p>
<p>&nbsp; }</p>
<p>$docrec = mysql_query("SELECT * FROM doctor where docid ='$maxpatid'");</p>
<p>while($row = mysql_fetch_array($docrec))</p>
<p>&nbsp; {</p>
<p>&nbsp; &nbsp;</p>
<p>echo "&lt;form id='formID1' class='formular' method='post' enctype='multipart/form-data'&gt;";</p>
<p>echo "&lt;b&gt;Doctor Record inserted successfully.. &lt;br&gt;&lt;br&gt;";</p>
<p>//image code ends here</p>
<p>echo "Doctor ID is : $row[docid]&lt;br&gt;&lt;br&gt;";</p>
<p>echo "Doctor Name : $row[doctorname]&lt;br&gt;&lt;br&gt;";</p>
<p>echo "Qualification : $row[quali]&lt;br&gt;&lt;br&gt;";</p>
<p>&nbsp;echo "Specialist in : $row[specialistin]&lt;br&gt;&lt;br&gt;";</p>
<p>&nbsp; echo "Contact No : $row[contactno]&lt;br&gt;&lt;br&gt;";</p>
<p>&nbsp; &nbsp;echo "Email ID : $row[emailid]&lt;br&gt;&lt;br&gt;";</p>
<p>echo "Biodata : $row[biodata]&lt;br&gt;&lt;br&gt;";</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>echo "&lt;/b&gt;&lt;/form&gt;";</p>
<p>&nbsp;}</p>
<p>&nbsp;</p>
<p>}</p>
<p>else</p>
<p>{</p>
<p>?&gt; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p>&lt;form id="formID" class="formular" method="post" &nbsp;enctype="multipart/form-data"&gt;</p>
<p>&nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &lt;div align="center"&gt;&lt;strong&gt;Doctors&lt;/strong&gt;&lt;/div&gt;</p>
<p>&nbsp;</p>
<p>&nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &lt;p&gt;Doctor ID</p>
<p>&nbsp; &nbsp; &nbsp; &lt;label for="dfn2"&gt;&lt;/label&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;input type="text" name="dfn2" id="dfn2" &nbsp;class="validate[required] text-input" readonly value="&lt;?php echo $maxpatid; ?&gt;"/&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;label for="textfield4"&gt;Password&lt;/label&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;input type="password" name="password" id="password" &nbsp;class="validate[required] text-input"/&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;label for="textfield3"&gt; &lt;/label&gt;</p>
<p>Confirm Password</p>
<p>&lt;input type="password" name="textfield5" id="textfield5" class="validate[required,equals[password]] text-input" /&gt;</p>
<p>First Name</p>
<p>&lt;label for="dfn"&gt;&lt;/label&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;input type="text" name="dfn" id="dfn" &nbsp;class="validate[required] text-input"&gt;</p>
<p>&nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; Middle Name</p>
<p>&nbsp; &nbsp; &nbsp; &lt;input type="text" name="dmn" id="dmn" &nbsp;class="validate[required] text-input"&gt;</p>
<p>&nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; Last Name</p>
<p>&nbsp; &nbsp; &nbsp; &lt;input type="text" name="dln" id="dln" &nbsp;class="validate[required] text-input"&gt;</p>
<p>&nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; Qualification</p>
<p>&nbsp; &nbsp; &nbsp; &lt;input type="text" name="quali" id="quali" &nbsp;class="validate[required] text-input"&gt;</p>
<p>&nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; Specialist in&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;input type="text" name="spin" id="spin" class="validate[required] text-input"/&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;label for="spid"&gt;&lt;/label&gt;</p>
<p>&nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; Contact No</p>
<p>&nbsp; &nbsp; &nbsp; &lt;input type="text" name="contact" id="contact" class="validate[required] text-input"&gt;</p>
<p>&nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; Email ID</p>
<p>&nbsp; &nbsp; &nbsp; &lt;input type="text" name="emailid" id="emailid" class="validate[required,custom[email]] text-input"&gt;</p>
<p>&nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; Image</p>
<p>&nbsp; &nbsp; &nbsp; &lt;label for="image"&gt;&lt;/label&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;input name="image" accept="image/jpeg" type="file"&gt;</p>
<p>&nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; Bio-data</p>
<p>&nbsp; &nbsp; &nbsp; &lt;label for="bio"&gt;&lt;/label&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;textarea name="bio" id="bio" cols="45" rows="5" &gt;&lt;/textarea&gt;</p>
<p>&nbsp; &lt;/p&gt;</p>
<p>&lt;p&gt;&amp;nbsp;&lt;/p&gt;</p>
<p>&nbsp; &nbsp; &lt;div align="center"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &lt;input type="submit" name="button" id="button" value="Add" &nbsp;class="submit"&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;input type="submit" name="button2" id="button2" value="Cancel" &nbsp;class="submit"&gt;</p>
<p>&nbsp; &lt;/div&gt;&lt;br /&gt;&lt;br /&gt;</p>
<p>&lt;/form&gt;</p>
<p>&lt;?php</p>
<p>}</p>
<p>&nbsp;</p>
<p>?&gt;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(25183);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-25212'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-07-27 2:37 pm</div>
				                <div>Hello,<br />
<br />
Unfortunately we are not able to provide custom code support. You may want to check the php documentation online to see what you need to change in order for your form to work properly. <br />
<br />
Since you are going to work on it anyway, you may want to explore using mysqli instead of mysql as the one mysql  will be replaced eventually.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(25212);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-26174'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='/support/images/avatars/default_avatar.jpg' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='/support/community-support/users/maxeekhan'>maxeekhan</a></div>
						<div></div>
						<div></div>
						<div>3 <a href='/support/team/points' target='_blank'>Points</a></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-08-28 8:43 am</div>
				                <div>there is no error in my code ,,,and still the data is not inserted into the database</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(26174);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-26180'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-08-28 11:47 am</div>
				                <div>Hello Maxeekhan,<br />
<br />
Have you tried doing a var_dump($query); right after the insert variable to make sure its spitting out all of the required information? <br />
<br />
Best Regards,<br />
TJ Edens</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(26180);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-26785'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/88e1f1c1fee79f58be6a1e343f03e3a7?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/88e1f1c1fee79f58be6a1e343f03e3a7'>arnold</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-09-18 3:32 pm</div>
				                <div><p>am hosting an asp.net website but it seems am facing 500-server internal error.</p>
<p>this is the code in my web.config. i really need help. can anyone help me?</p>
<p>&lt;?xml version="1.0"?&gt;&lt;!--&nbsp; For more information on how to configure your ASP.NET application, please visit&nbsp; http://go.microsoft.com/fwlink/?LinkId=169433&nbsp; --&gt;&lt;configuration&gt;&nbsp;&nbsp;&nbsp; &lt;connectionStrings&gt;&nbsp;&nbsp;&nbsp; &lt;add name="AssociationDBConnectionString"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; connectionString="Data Source=.\SQLEXPRESS;AttachDbFilename=&amp;quot;C:\Users\ARNOLDSCHWAZZY\Documents\Visual Studio 2010\WebSites\AssociationWebSite\App_Data\CommentDB.mdf&amp;quot;;Integrated Security=True;Connect Timeout=30;User Instance=True"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; providerName="System.Data.SqlClient" /&gt;&nbsp;&nbsp;&nbsp; &nbsp;&lt;/connectionStrings&gt;&nbsp;&lt;system.web&gt;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &lt;compilation debug="true" targetFramework="4.0"/&gt;&nbsp;&nbsp;&nbsp; &lt;/system.web&gt;&lt;/configuration&gt;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(26785);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-26786'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-09-18 3:42 pm</div>
				                <div>Hello Arnold,<br />
<br />
Unfortunately all our servers are Linux based and we are not able to work with or troubleshoot Windows Only issues. <br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(26786);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27047'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/7b5176eb51013db112baee9ba6220fe1?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/7b5176eb51013db112baee9ba6220fe1'>ali</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-09-29 5:34 am</div>
				                <div><pre style="font-family: 'Courier New'; font-size: 9pt;"><span style="background-color: #efefef;">i want to auto increment the data that i a add in a form and submit and i didn't know how to connect html code with db  kindly help me&lt;</span><span style="color: #000080; background-color: #efefef; font-weight: bold;">html</span><span style="background-color: #efefef;">&gt;</span><span style="background-color: #efefef;">&lt;</span><span style="color: #000080; background-color: #efefef; font-weight: bold;">body</span><span style="background-color: #efefef;">&gt;</span><span style="background-color: #efefef;">&lt;</span><span style="color: #000080; background-color: #efefef; font-weight: bold;">form </span><span style="color: #0000ff; background-color: #efefef; font-weight: bold;">action=</span><span style="color: #008000; background-color: #efefef; font-weight: bold;">"arr"</span><span style="color: #0000ff; background-color: #efefef; font-weight: bold;">method=</span><span style="color: #008000; background-color: #efefef; font-weight: bold;">"post"</span><span style="background-color: #efefef;">/&gt;</span>    <span style="background-color: #efefef;">&lt;</span><span style="color: #000080; background-color: #efefef; font-weight: bold;">p</span><span style="background-color: #efefef;">&gt;</span>input 1:<span style="background-color: #efefef;">&lt;</span><span style="color: #000080; background-color: #efefef; font-weight: bold;">input </span><span style="color: #0000ff; background-color: #efefef; font-weight: bold;">type=</span><span style="color: #008000; background-color: #efefef; font-weight: bold;">"text" </span><span style="color: #0000ff; background-color: #efefef; font-weight: bold;">name=</span><span style="color: #008000; background-color: #efefef; font-weight: bold;">"input1"</span><span style="background-color: #efefef;">/&gt;</span> <span style="background-color: #efefef;">&lt;/</span><span style="color: #000080; background-color: #efefef; font-weight: bold;">p</span><span style="background-color: #efefef;">&gt;</span><span style="background-color: #efefef;">&lt;</span><span style="color: #000080; background-color: #efefef; font-weight: bold;">input </span><span style="color: #0000ff; background-color: #efefef; font-weight: bold;">type=</span><span style="color: #008000; background-color: #efefef; font-weight: bold;">"submit"</span><span style="color: #0000ff; background-color: #efefef; font-weight: bold;">value=</span><span style="color: #008000; background-color: #efefef; font-weight: bold;">"submit"</span><span style="background-color: #efefef;">&gt;</span><span style="background-color: #efefef;">&lt;/</span><span style="color: #000080; background-color: #efefef; font-weight: bold;">form</span><span style="background-color: #efefef;">&gt;</span><span style="background-color: #efefef;">&lt;/</span><span style="color: #000080; background-color: #efefef; font-weight: bold;">body</span><span style="background-color: #efefef;">&gt;</span><span style="background-color: #efefef;">&lt;/</span><span style="color: #000080; background-color: #efefef; font-weight: bold;">html</span><span style="background-color: #efefef;">&gt;</span><span style="color: #000080; background-color: #f7faff; font-weight: bold;">&lt;?php</span><span style="color: #660000; background-color: #f7faff;">$servername </span><span style="background-color: #f7faff;">= </span><span style="color: #008000; background-color: #f7faff; font-weight: bold;">"localhost"</span><span style="background-color: #f7faff;">;</span><span style="color: #660000; background-color: #f7faff;">$username </span><span style="background-color: #f7faff;">= </span><span style="color: #008000; background-color: #f7faff; font-weight: bold;">"username"</span><span style="background-color: #f7faff;">;</span><span style="color: #660000; background-color: #f7faff;">$password </span><span style="background-color: #f7faff;">= </span><span style="color: #008000; background-color: #f7faff; font-weight: bold;">""</span><span style="background-color: #f7faff;">;</span><span style="color: #660000; background-color: #f7faff;">$conn </span><span style="background-color: #f7faff;">= </span><span style="background-color: #f7faff; font-style: italic;">mysql_connect</span><span style="background-color: #f7faff;">(</span><span style="color: #660000; background-color: #f7faff;">$servername</span><span style="background-color: #f7faff;">, </span><span style="color: #660000; background-color: #f7faff;">$username</span><span style="background-color: #f7faff;">, </span><span style="color: #660000; background-color: #f7faff;">$password</span><span style="background-color: #f7faff;">);</span><span style="color: #000080; background-color: #f7faff; font-weight: bold;">if </span><span style="background-color: #f7faff;">(!</span><span style="color: #660000; background-color: #f7faff;">$conn</span><span style="background-color: #f7faff;">) {</span><span style="color: #000080; background-color: #f7faff; font-weight: bold;">die</span><span style="background-color: #f7faff;">(</span><span style="color: #008000; background-color: #f7faff; font-weight: bold;">"Connection failed: " </span><span style="background-color: #f7faff;">. mysql_connect_error());</span><span style="background-color: #f7faff;">}</span><span style="color: #000080; background-color: #f7faff; font-weight: bold;">echo </span><span style="color: #008000; background-color: #f7faff; font-weight: bold;">"Connected successfully"</span><span style="background-color: #f7faff;">;</span><span style="color: #000080; background-color: #f7faff; font-weight: bold;">?&gt;</span></pre></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27047);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27066'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-09-29 11:05 pm</div>
				                <div>Hello Ali,<br />
<br />
Here is a <a href="http://stackoverflow.com/questions/15331477/send-html-form-data-to-sql-database-via-php-using-mysqli">StackOverflow.com thread</a> that has everything provided on what you would need to do. <br />
<br />
Best Regards,<br />
TJ Edens</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27066);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27083'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/ff3056f507c85108ae50e7556991b050?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/ff3056f507c85108ae50e7556991b050'>wasim</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-09-30 11:28 am</div>
				                <div><p>A.o.A&nbsp;</p>
<p>Hi everyone,</p>
<p>i have created a form in html and php.</p>
<p>i have created the same in database.</p>
<p>i entered the name and email in htm file.</p>
<p>but php not display any result or error.</p>
<p>also the data not inserted in database.</p>
<p>Code are as follows:</p>
<p>Please help:</p>
<p>&nbsp;</p>
<p><strong>htm code:</strong></p>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&lt;title&gt;Form1&lt;/title&gt;</p>
<p>&nbsp;</p>
<p>&lt;/head&gt;</p>
<p>&nbsp;</p>
<p>&lt;body&gt;</p>
<p>&lt;form method="POST" action="Form1.php"&gt;</p>
<p>&nbsp;</p>
<p>Full Name:&lt;br&gt;</p>
<p>&lt;input type="text" name="name"&gt;&lt;br&gt;&lt;br&gt;</p>
<p>Email:&lt;br&gt;</p>
<p>&lt;input type="email" name="email"&gt;&lt;br&gt;&lt;br&gt;</p>
<p>&lt;input type="submit" name="submit" value="submit"&gt;</p>
<p>&nbsp;</p>
<p>&lt;/form&gt;</p>
<p>&lt;/body&gt;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&lt;/html&gt;</p>
<p><strong>PHP Code:</strong></p>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&lt;title&gt;Form1&lt;/title&gt;</p>
<p>&nbsp;</p>
<p>&lt;/head&gt;</p>
<p>&nbsp;</p>
<p>&lt;body&gt;</p>
<p>&nbsp;</p>
<p>&lt;?php</p>
<p>$conn=mysql_connect("localhost", "root", "", "db1") or die ("not connected");</p>
<p>mysql_select_db("db1");</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>if (isset ($_post["submit"])) {</p>
<p>&nbsp;</p>
<p>$name=$_POST["name"];</p>
<p>$email=$_POST["email"];</p>
<p>&nbsp;</p>
<p>echo $_POST["name"] . "&lt;br&gt;";</p>
<p>&nbsp;</p>
<p>echo $_POST["email"] . "&lt;br&gt;";</p>
<p>&nbsp;</p>
<p>$sql="INSERT INTO form1 (Full name, Email) VALUES ($name, $email)";</p>
<p>&nbsp;</p>
<p>if (mysql_query($sql, $conn)) {</p>
<p>echo "All is fine";</p>
<p>}</p>
<p>else {</p>
<p>echo "Problem not found";</p>
<p>}</p>
<p>&nbsp;</p>
<p>/*$a=mysql_query($sql, $conn);</p>
<p>if (!$a) {</p>
<p>echo "Not Entered....";</p>
<p>&nbsp;</p>
<p>}</p>
<p>else{</p>
<p>echo "Data Entered....";</p>
<p>}*/</p>
<p>}</p>
<p>&nbsp;</p>
<p>?&gt;</p>
<p>&lt;/body&gt;</p>
<p>&lt;/html&gt;</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27083);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27117'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-01 9:44 am</div>
				                <div>Hello Wasim,<br />
<br />
Sorry for the problem with the code.  We unfortunately do not provide coding support.  However, we did take a look at what you provided and it seems to be okay - nothing jumps out as being the "problem".  We're not sure if you're on a shared server or dedicated server - remember that we typically only provide support for hosting services.  <br />
<br />
If you're NOT obfuscating the name of the database and the user name, then that's the first place to start.  User names for our database connections are not formatted that way - you would need to use a user assigned to the database.  We do suggest that you step through your code, and if something is not appearing (per your echo's), then review that part of the code.  For example, if you're not getting anything from your first 2 echos, then something's wrong with that loop.  We didn't think that the database select was required either, as you specify the connection in $conn.  <br />
<br />
I hope this helps to answer your question, please let us know if you require any further  assistance.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27117);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27111'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/5bf8a3e47cea65d35c35ddafb5f0a7a7?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/5bf8a3e47cea65d35c35ddafb5f0a7a7'>umesh</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-01 7:50 am</div>
				                <div><p>i m trying to submit data by clicking only submit button in a web service &nbsp;but it submit data also by enter so dive the olution for that</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27111);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27133'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-01 1:19 pm</div>
				                <div>Hello umesh,<br />
<br />
Thank you for contacting us. There are many solutions, and they will differ based on how your specific form is coded. <br />
<br />
I found a possible solution via online search, here is a possible way to <a href="http://www.sitepoint.com/forums/showthread.php?185311-Disable-Enter-or-Return-key-in-PHP" target="_blank">Disable Enter or Return key in PHP</a>.<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27133);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27352'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/d31a0dfb5639fd1d3b4b3bc1c14bbdae?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/d31a0dfb5639fd1d3b4b3bc1c14bbdae'>Errol - Australia</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-08 9:32 pm</div>
				                <div><p>Fantastic, thank you.</p>
<p>The trick that helped me was to get the mysql insert code from the database after inserting the dtest record.</p>
<p>&nbsp;</p>
<p>I applied this to a csv import file for multiple records, where we only want to insert 3 fields with data per record.</p>
<p>The code may help others, here is the example file import-csv-to-server.php-</p>
<p>&nbsp;</p>
<p>&lt;?php// Open database with connect fileinclude_once('connect.php');// Open CSV file for multiple data records to insert$fo = fopen('importfile.csv', "r");&nbsp;while (($data = fgetcsv($fo, 20000, ",")) !== FALSE){$surname = $data[0]; $firstname = $data[1]; $firm = $data[2]; $query = "INSERT INTO `[database-name]` (`did`, `password`, `surname`, `firstname`, `initials`, `title`, `firm`, `businessdescription`, `credentials`, `email`, `telephone`, `mobile`, `postal1`, `postal2`, `postal3`, `postal4`, `postal5`, `country`, `principle1`, `principle2`, `yearstrust`, `numtrust`, `assets`, `membertype`, `subfund`, `memdisc`, `web`, `profession`, `listwebsite`, `registered_trustee`, `active`, `paymentamount`, `Timestamp`, `firstreceived`, `regfirstreceived`, `regnumber`, `freemembership`)VALUES (NULL, 'Tg7nzt', '$surname', '$firstname', '', NULL, '$firm', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '', '', 'New Zealand', NULL, NULL, '1', '0', '0', '', NULL, '', NULL, NULL, 'N', 'N', 'Y', 'N', CURRENT_TIMESTAMP, '', '', '0', '')";mysql_query($query);}echo finished;?&gt;</p>
<p>&nbsp;</p>
<p>Here is the example of the CSV data file import.csv</p>
<p>&nbsp;</p>
<p>rec1-1,rec1-2,rec1-3,rec2-1,rec2-2,rec2-3,rec3-1,rec3-2,rec3-3,</p>
<p>&nbsp;</p>
<p>Upload bothe files to your server then run www.[sitename]/import-csv-to-server.php</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27352);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27615'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/549eb0747adc67ae2b080fe178e44d57?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/549eb0747adc67ae2b080fe178e44d57'>melissa</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-17 1:48 pm</div>
				                <div><p>thank you for this, Im literally brand new to PHP (less than a week of using it) and you saved me from a terrible headache. Took a day but now i can move forward in what im learning.&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27615);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27843'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/cd6f888d6a567792e55f6895887790ac?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/cd6f888d6a567792e55f6895887790ac'>Karan</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-25 5:20 am</div>
				                <div><p>Hey, I&nbsp; tried this snip, but the database is still empty. Help me out..</p>
<p>My form consists of username and email.. So the database..</p>
<p>&nbsp;</p>
<p>&lt;?if( $_POST ){&nbsp; $con = mysql_connect("localhost","root","");&nbsp; if (!$con)&nbsp; {&nbsp;&nbsp;&nbsp; die('Could not connect: ' . mysql_error());&nbsp; }&nbsp; mysql_select_db("users", $con);&nbsp; $users_name = $_POST['user'];&nbsp; $users_email = $_POST['mail'];&nbsp; &nbsp; $users_name = mysql_real_escape_string($users_name);&nbsp; $users_email = mysql_real_escape_string($users_email);&nbsp; &nbsp; &nbsp; $query = "&nbsp; INSERT INTO `users`.`userinfo` (`UserName`, `Email`) VALUES ('$users_name',&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '$users_email');";&nbsp; mysql_query($query);&nbsp; echo "&lt;h2&gt;Thank you for your Comment!&lt;/h2&gt;";&nbsp; mysql_close($con);}?&gt;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27843);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-27855'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-10-26 9:16 am</div>
				                <div>Hello Karan,<br />
<br />
Are you getting any errors? What happens when you try to test the query by itself in phpMyAdmin?<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(27855);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-28238'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/ce3d7d34ebad4769ac8751d8d5928d1a?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/ce3d7d34ebad4769ac8751d8d5928d1a'>Ayoub Noughira</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-11-06 6:26 am</div>
				                <div><p>&nbsp;please can you help me i don't know were is the error !!!</p>
<p>&nbsp;</p>
<p>&lt;?</p>
<p>if(isset($_POST['formexe']))</p>
<p>{</p>
<p>&nbsp; $con = mysql_connect("localhost","root","");</p>
<p>&nbsp;</p>
<p>&nbsp; if (!$con)</p>
<p>&nbsp; {</p>
<p>&nbsp; &nbsp; die('Could not connect: ' . mysql_error());</p>
<p>&nbsp; }</p>
<p>&nbsp;</p>
<p>&nbsp; mysql_select_db("java", $con);</p>
<p>&nbsp;</p>
<p>&nbsp; $users_Prenom = $_POST['Prenom'];</p>
<p>&nbsp; $users_Nom = $_POST['Nom'];</p>
<p>&nbsp; $users_Profession = $_POST['Profession'];</p>
<p>&nbsp; $users_CIN = $_POST['CIN'];</p>
<p>&nbsp; $users_TEL = $_POST['TEL'];</p>
<p>&nbsp; $users_Email = $_POST['Email'];</p>
<p>&nbsp; $users_apt = $_POST['apt'];</p>
<p>&nbsp; $users_dpt = $_POST['dpt'];</p>
<p>&nbsp; $users_dpt1 = $_POST['dpt1'];</p>
<p>&nbsp; $users_act = $_POST['act'];</p>
<p>&nbsp; $users_cia = $_POST['cia'];</p>
<p>&nbsp; $users_ef = $_POST['ef'];</p>
<p>&nbsp; $users_asso = $_POST['asso'];</p>
<p>&nbsp;</p>
<p>&nbsp; $users_Prenom = mysql_real_escape_string($users_Prenom);</p>
<p>&nbsp; $users_Nom = mysql_real_escape_string($users_Nom);</p>
<p>&nbsp; $users_Profession = mysql_real_escape_string($users_Profession);</p>
<p>&nbsp; $users_CIN = mysql_real_escape_string($users_CIN);</p>
<p>&nbsp; $users_TEL = mysql_real_escape_string($users_TEL);</p>
<p>&nbsp; $users_Email = mysql_real_escape_string($users_Email);</p>
<p>&nbsp; $users_apt = mysql_real_escape_string($users_apt);</p>
<p>&nbsp; $users_dpt = mysql_real_escape_string($users_dpt);</p>
<p>&nbsp; $users_dpt1 = mysql_real_escape_string($users_dpt1);</p>
<p>&nbsp; $users_act = mysql_real_escape_string($users_act);</p>
<p>&nbsp; $users_cia = mysql_real_escape_string($users_cia);</p>
<p>&nbsp; $users_ef = mysql_real_escape_string($users_ef);</p>
<p>&nbsp; $users_asso = mysql_real_escape_string($users_asso);</p>
<p>&nbsp;</p>
<p>&nbsp; $userid = $_GET['id'];</p>
<p>&nbsp; if( ! is_numeric($userid) );</p>
<p>&nbsp;</p>
<p>&nbsp; $query = "</p>
<p>&nbsp; INSERT INTO `java`.`users` (`id`, `Prenom`, `Nom`, `Profession`,</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; `CIN`, `TEL`, `Email`, `apt`, `dpt`, `dpt1`, `act`, `cia`, `ef`, `asso`) VALUES (NULL, '$users_Prenom',</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; '$users_Nom', '$users_Profession', '$users_CIN', '$users_TEL', '$users_Email', '$users_apt', '$users_dpt', '$users_dpt1', '$users_act', '$users_cia', '$users_ef', '$users_asso',</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;'$userid');";</p>
<p>&nbsp;</p>
<p>&nbsp; mysql_query($query);</p>
<p>&nbsp; mysql_close($con);</p>
<p>}</p>
<p>?&gt;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(28238);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-28241'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-11-06 9:44 am</div>
				                <div>What error message are you getting? We'll need it to help you trouble shoot the issue. </div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(28241);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-28708'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/ce3d7d34ebad4769ac8751d8d5928d1a?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/ce3d7d34ebad4769ac8751d8d5928d1a'>Ayoub Noughira</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-11-24 9:12 am</div>
				                <div><p>the data does not fit into the mysql database</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(28708);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-28709'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-11-24 9:14 am</div>
				                <div>If you send the file to import into the Support Department we can help you get it imported.  </div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(28709);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-28716'></a>
		<div  style='margin:2px 0px 0px 40px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/ce3d7d34ebad4769ac8751d8d5928d1a?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/ce3d7d34ebad4769ac8751d8d5928d1a'>Ayoub Noughira</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-11-24 1:34 pm</div>
				                <div><p>okeey but what is a Support &nbsp;Email ?</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(28716);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-28719'></a>
		<div  style='margin:2px 0px 0px 80px;'>
			
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-11-24 2:30 pm</div>
				                <div>Hello Ayoub,<br />
<br />
The email address is support@inmotionhosting.com.<br />
<br />
Best Regards,<br />
TJ Edens</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(28719);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-28776'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/d694f93f0679f408082e8989d375054e?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/d694f93f0679f408082e8989d375054e'>laxmirao</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-11-26 6:36 am</div>
				                <div><p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 22px;">please can you help me i don't know were is the error !!!</span></p>
<p><span style="color: #232323; font-family: adelle-sans, Helvetica, Arial, sans-serif; font-size: 13px; line-height: 22px;">Not inserted record in mysql. Output shows only error.</span></p>
<p>&nbsp;</p>
<p>&lt;?php</p>
<p>&nbsp;</p>
<p>$con = mysql_connect("localhost","root","");</p>
<p>&nbsp;</p>
<p>if (!$con)</p>
<p>&nbsp;</p>
<p>{</p>
<p>&nbsp;</p>
<p>die('Could not connect: ' . mysql_error());</p>
<p>&nbsp;</p>
<p>}</p>
<p>&nbsp;</p>
<p>mysql_select_db("nimswp", $con);</p>
<p>&nbsp;</p>
<p>$con = mysql_connect("localhost","root","");</p>
<p>&nbsp;</p>
<p>if (!$con)</p>
<p>&nbsp;</p>
<p>{</p>
<p>&nbsp;</p>
<p>die('Could not connect: ' . mysql_error());</p>
<p>&nbsp;</p>
<p>}</p>
<p>&nbsp;</p>
<p>mysql_select_db("nimswp", $con);</p>
<p>&nbsp;</p>
<p>// Insert data to database........</p>
<p>&nbsp;</p>
<p>if( isset( $_POST['submit'] ) || $_POST['submit1'] =='submit'){</p>
<p>$sql_insert_emp = 'INSERT INTO nims_wp_user_login(</p>
<p>nism_employe_code,</p>
<p>nims_employe_surname,</p>
<p>nims_employe_fullname,</p>
<p>nims_wp_user_password,</p>
<p>nims_wp_user_email,</p>
<p>nims_employe_mob_no,</p>
<p>nims_employe_email,</p>
<p>nims_wp_user_type</p>
<p>)</p>
<p>VALUES(</p>
<p>'.$_POST[$nism_employe_code].',</p>
<p>'.$_POST[$nims_employe_surname].',</p>
<p>'.$_POST[$nims_employe_fullname].',</p>
<p>'.$_POST[$nims_wp_user_password].',</p>
<p>'.$_POST[$nims_wp_user_email].',</p>
<p>'.$_POST[$nims_employe_mob_no].',</p>
<p>'.$_POST[$nims_employe_email].',</p>
<p>'.$_POST[$nims_wp_user_type].')';</p>
<p>&nbsp;</p>
<p>if(!$result = mysql_connect($sql_insert_emp, $con)){</p>
<p>echo "Error.";</p>
<p>}else{</p>
<p>echo "Record Inserted";</p>
<p>}</p>
<p>?&gt;</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(28776);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-28796'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2015-11-27 11:10 am</div>
				                <div>Hello laxmirao,<br />
<br />
Thank you for contacting us. What is the full error you are receiving?<br />
<br />
Are you following our full series on <a href="http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql">Using PHP to create dynamic pages</a>?<br />
<br />
Thank you,<br />
John-Paul</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(28796);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-29693'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/ea1e4db8dcd120f26398003b89c83498?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/ea1e4db8dcd120f26398003b89c83498'>vin</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-01-10 10:28 pm</div>
				                <div><p>my code does not work :-) I am able to process it but just does not update the db...</p>
<p>&nbsp; &lt;?php&nbsp; if (isset($_POST['submit'])){&nbsp;&nbsp;&nbsp; &nbsp; $dbhost ="localhost";$dbuser ="root";$dbpass = "";$dbname = "hps";// Create a database connection$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);// Test if connection occuredif(mysqli_connect_errno()){&nbsp;&nbsp;&nbsp; die("Database connection failed: ".&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; mysqli_connect_errno() .&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; "(" .mysqli_connect_errno() .")"&nbsp;&nbsp;&nbsp; );}//mysql_select_db("hps", $connection);$firstname =$_Post['firstname'];$lastname =$_Post['lastname'];$homebreak =$_Post['homebreak'];$favbreak =$_Post['favbreak'];$foot =$_Post['foot'];$phone =$_Post['phone'];$email =$_Post['email'];$passwd =$_Post['passwd'];$repeatpasswd =$_Post['repeatpasswd'];$userphoto =$_Post['userphoto'];$sql = "INSERT INTO surfers (Firstname, Lastname, Homebreak, FavBreak, Surfingstyle, ContactPhone, Email, Password, Salt, SurferPhoto) VALUES ('$firstname', '$lastname', '$homebreak', '$favbreak','$foot', '$phone', '$email', '$passwd', '$repeatpasswd', '$userphoto')";if (!mysqli_query($connection, $sql)) {&nbsp;&nbsp;&nbsp; die('error inserting new record');}$newrecord = "1 record added to the db";&nbsp; }&nbsp; ?&gt;&nbsp; &lt;!DOCTYPE html&gt;&lt;html lang="en"&gt;&nbsp; &lt;head&gt;&nbsp;&nbsp;&nbsp; &lt;meta charset="utf-8"&gt; &lt;!-- specify utf-8 as the character set - can be viewed in multiple languages --&gt;&nbsp;&nbsp;&nbsp; &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt; &lt;!-- tell microsoft browsers to use the 'edge' version of IE --&gt;&nbsp;&nbsp;&nbsp; &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt; &lt;!-- on mobiles page will display for the mobile's size not desktop size; no zoom when 1st shown --&gt;&nbsp;&nbsp;&nbsp; &lt;!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags --&gt;&nbsp;&nbsp;&nbsp; &lt;meta name="description" content="High Performance Surf - surf lesson specialists, surf comps competitions bookings private lessons public lessons"&gt; &lt;!-- the description will be picked up by search engines and displayed - make it meaningful but directly about your key website purpose - not waffling on --&gt;&nbsp;&nbsp;&nbsp; &lt;title&gt;High Performance Surf | Homepage&lt;/title&gt;&nbsp;&nbsp;&nbsp; &lt;!-- Bootstrap core CSS --&gt;&nbsp;&nbsp;&nbsp; &lt;link href="/support/../css/bootstrap.css" rel="stylesheet"&gt;&nbsp;&nbsp;&nbsp; &lt;!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --&gt;&nbsp;&nbsp;&nbsp; &lt;!--[if lt IE 9]&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"&gt;&lt;/script&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"&gt;&lt;/script&gt;&nbsp;&nbsp;&nbsp; &lt;![endif]--&gt;&nbsp; &lt;/head&gt;&nbsp; &lt;body&gt;&nbsp;&nbsp;&nbsp; &lt;?php include "../includes/nav-menu.php" ?&gt;&nbsp;&nbsp;&nbsp; &lt;?php include "../includes/header.php" ?&gt;&nbsp;&nbsp;&nbsp; &lt;!-- Begin page content --&gt;&nbsp;&nbsp;&nbsp; &lt;div class="container-fluid"&gt;&nbsp; &lt;div class="col-md-2"&gt;&lt;/div&gt;&nbsp; &lt;div class="col-md-6"&gt;Already registered? Just &lt;a href="#"&gt;login&lt;/a&gt; then!&lt;br /&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;h1 class="page-header"&gt;Register with High Performance Surf&lt;/h1&gt;&lt;/div&gt;&nbsp; &lt;div class="col-md-4"&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class="container-fluid"&gt;&nbsp; &lt;div class="row"&gt;&nbsp;&nbsp;&nbsp; &lt;div class="col-md-2"&gt;&lt;/div&gt;&nbsp;&nbsp;&nbsp; &lt;div class="col-md-6"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;form enctype="multipart/form-data" method="post" action="register.php" role="form"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class="form-group"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;label for="firstname"&gt;First Name&lt;/label&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;input type="text" class="form-control" id="firstname" name="firstname" required placeholder="First name"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class="form-group"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;label for="lastname"&gt;Last Name&lt;/label&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;input type="text" class="form-control" id="lastname" name="lastname" required placeholder="Last name"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class="form-group"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;label for="homebreak"&gt;Home break&lt;/label&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;input type="text" class="form-control" id="homebreak" name="homebreak" placeholder="Where would we mostly likely find you carving out some waves?"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class="form-group"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;label for="favbreak"&gt;Favourite break&lt;/label&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;input type="text" class="form-control" id="favbreak" name="favbreak" placeholder="Where's your fav break?"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class="form-group"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;label for="favbreak"&gt;Style:&lt;/label&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;input type="radio" id="foot" name="foot" value="regular"&gt; Regular Foot&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;input type="radio" id="foot" name="foot" value="goofy"&gt; Goofy Foot&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class="form-group"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;label for="phone"&gt;Contact phone&lt;/label&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;input type="text" class="form-control" id="phone" name="phone" placeholder="Used when comps are shifted"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class="form-group"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;label for="email"&gt;Email address&lt;/label&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;input type="email" class="form-control" id="email" name="email" required placeholder="Used for emails and to log in with"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class="form-group"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;label for="passwd"&gt;Password&lt;/label&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;input type="password" class="form-control" id="passwd" name="passwd" required placeholder="Used when logging in"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class="form-group"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;label for="repeatpasswd"&gt;Repeat Password (will be checked in a later unit)&lt;/label&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;input type="password" class="form-control" id="repeatpasswd" name="repeatpasswd" required placeholder="Re-enter password"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;div class="form-group"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;label for="userphoto"&gt;Photo - upload one of you or of you surfing&lt;/label&gt; &lt;span class="help-block"&gt;(A .jpg or .png image viewable by public)&lt;/span&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;input type="file" id="userphoto" name="userphoto"&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/div&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;button type="submit" class="btn btn-default"&gt;Submit&lt;/button&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/form&gt;&nbsp;&nbsp;&nbsp; &lt;/div&gt;&nbsp;&nbsp;&nbsp; &lt;div class="col-md-4"&gt;&lt;/div&gt;&nbsp; &lt;/div&gt;&nbsp; &lt;!-- Add some space --&gt;&nbsp; &lt;div class="container"&gt;&nbsp;&nbsp;&nbsp; &lt;br /&gt;&nbsp; &lt;/div&gt;&nbsp;&nbsp;&nbsp; &lt;!-- Bootstrap core JavaScript&nbsp;&nbsp;&nbsp; ================================================== --&gt;&nbsp;&nbsp;&nbsp; &lt;?php include "../includes/footer.php" ?&gt;&nbsp;&nbsp;&nbsp; &lt;!-- Placed at the end of the document so the pages load faster --&gt;&nbsp;&nbsp;&nbsp; &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"&gt;&lt;/script&gt;&nbsp;&nbsp;&nbsp; &lt;script src="/support/../js/bootstrap.min.js"&gt;&lt;/script&gt;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &lt;?php &nbsp;&nbsp;&nbsp; echo $newrecord&nbsp;&nbsp;&nbsp; ?&gt;&nbsp; &lt;/body&gt;&lt;/html&gt;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(29693);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-29727'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-01-11 6:11 pm</div>
				                <div>Hello,<br />
<br />
Unfortunately we are not able to troubleshoot custom code. However, to help you along you will want to have your code echo out the full Update query, complete with variable values. Take the query and try to run it in a clone of your database to see if it works. If not, it should give you a descriptive error that can help you correct it.<br />
<br />
Kindest Regards,<br />
Scott M</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(29727);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-30795'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/c7b69d6e708d43d25d2a0cc5945567bd?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/c7b69d6e708d43d25d2a0cc5945567bd'>Lukas Klein Haneveld</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-02-25 9:24 am</div>
				                <div><p>For some reason the "$check" bit isnt working properly... When I enter a username, password and name it says "Thats username already exists! Try rand&nbsp;<em>36</em> (For example)&nbsp;instead!"</p>
<p>&nbsp;</p>
<p>This is the code... I hope you can tell me what's wrong!:</p>
<p>&lt;?php</p>
<p>&nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; $conn = mysqli_connect("localhost", "root", "usbw", "vulturelogin");&nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; //Evaluate the connection</p>
<p>&nbsp; &nbsp; if (mysqli_connect_errno()) {</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; echo mysql_connect_error();</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; exit();</p>
<p>&nbsp; &nbsp; }</p>
<p>mysqli_select_db($conn, "vulturelogin") or die ("There was a problem connecting you to our database(s)");</p>
<p>&nbsp;</p>
<p>error_reporting(0);</p>
<p>&nbsp;</p>
<p>if ($_POST['register']){</p>
<p>&nbsp; &nbsp; if ($_POST['username'] &amp;&amp; $_POST['password']){</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; $username = mysqli_real_escape_string($_POST['username']);</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; $password = mysqli_real_escape_string(hash("sha512", $_POST['password']));</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; $name = '';</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; if ($_POST['name']){</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $name = mysqli_real_escape_string(strip_tags($_POST['name']));</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; $check = mysqli_fetch_array(mysqli_query("SELECT * FROM `users` WHERE `Username`='$username'"));</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; if ($check != 'NULL'){</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; die("Thats username already exists! Try &lt;i&gt;$username" . rand(1, 50) . "&lt;/i&gt; instead! &lt;a href='register.php'&gt;&amp;larr; Back&lt;/a&gt;");</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; if (!ctype_alnum($username)){</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; die("Username contains special characters! Only numbers and letters are permitted! &lt;a href='register.php'&gt;&amp;larr; Back&lt;/a&gt;");</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; if (strlen($username) &gt; 20){</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; die("Username must not contain more than 20 characters! &lt;a href='register.php'&gt;&amp;larr; Back&lt;/a&gt;");</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; $salt = hash("sha512", rand() . rand() . rand());</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; mysqli_query("INSERT INTO `users` (`Username`, `Password`, `Name`, `Salt`) VALUES ('$username', '$password', '$name', '$salt')");</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; setcoockie("c_user", hash("sha512", $username), time() + 24 * 60 * 60, "/");</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; setcoockie("c_salt", $salt, time() + 24 * 60 * 60, "/");</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; die("Your account has been created and you are now logged in as $username. &lt;a href='register.php'&gt;&amp;larr; Back&lt;/a&gt;");</p>
<p>&nbsp; &nbsp; }</p>
<p>}</p>
<p>&nbsp;</p>
<p>echo "</p>
<p>&nbsp;</p>
<p>&lt;body style='font-family: veranda, sans-serif;'&gt;</p>
<p>&nbsp; &nbsp; &lt;div class='login' style='width: 45%; max-with: 50%; padding: 5px 5px 5px; border: 1px solid #e3e3e3; background-color: #fff; color:#000; margin-left: auto; margin-right: auto;'&gt;&nbsp;</p>
<p>&nbsp; &nbsp;&nbsp;</p>
<p>&nbsp; &nbsp; &lt;h1 style='margin-left: 4%;'&gt;&lt;b&gt;Register&lt;/b&gt;&lt;/h1&gt;</p>
<p>&nbsp; &nbsp; &lt;br /&gt;</p>
<p>&nbsp; &nbsp; &lt;form action='' method='post' style='padding-left: 4%;'&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;table&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;tr&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;b&gt;Username:&lt;/b&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/td&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;input type='text' name='username' style='padding: 4px;' /&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/td&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/tr&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;tr&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;b&gt;Password:&lt;/b&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/td&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;input type='password' name='password' style='padding: 4pxl' /&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/td&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/tr&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;tr&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;b&gt;Name:&lt;/b&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/td&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;input type='text' name='name' style='padding: 4pxl;' /&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/td&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/tr&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;tr&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;td&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;input type='submit' value='Register' name='register' /&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/td&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/tr&gt;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &lt;/table&gt;</p>
<p>&nbsp; &nbsp; &lt;/div&gt;</p>
<p>&lt;/body&gt;</p>
<p>";</p>
<p>?&gt;</p>
<p>&nbsp;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(30795);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-30931'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/ca9c33545ed272d7ceded1c6a1a4bcf0?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/ca9c33545ed272d7ceded1c6a1a4bcf0'>Cant insert into database</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-03-01 5:09 pm</div>
				                <div><h1 style="font-size: 26px;">I dont understand some things.</h1>
<p>&nbsp;</p>
<div style="margin-bottom: 20px; margin-top: 10px; clear: both; color: #6e6e6e;">Category: <a href="/support/../../../community-support/how-to">How To</a></div>
<p>&nbsp;</p>
<div style="float: right; width: 110px; margin: 0px 0px 25px 25px;"><img class="user_avatar" src="https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg?sz=90" alt="" /> <a href="/support/../../../community-support/users/InMotionFans">InMotionFans</a>
<div><span title="Posted anonymously - anonymous users receive no points">n/a <a href="/support/../../../team/points" target="_blank">Points</a></span></div>
<div class="smallgrey" style="margin-top: 10px;">Asked: 2016-03-01 5:07 pm EST Hits: <span id="page_views">1</span></div>
</div>
<p> I have an already functioning comment box (singular) it inserts to the database and echos the comments, things are much the same as the tutorial but all the messages are echoed mixed. However Im here to get it working on multiple pages and multiple times on each page if possible. Now I have added the 'articleid' to all the right places, DB column, insert into. I have assigned values... $articleid = $_GET['id'];  It wont insert into the database. I dont know where the url ?id=1 comes from... Do I need to write my url pages thus; /award.php?=id2 I cant save my php files like this Ive tried the url http://localhost:8080/award.php?=id2 and1 it loads but still no insert to database can you explain what the id comes from in a little more detail. I've &lt;? included insert to DB file confusingly labeled; comment_form.php"); ?&gt; on the page .  Relevant html: &lt;input type="hidden" name="toid" id="articleid" value="&lt;? echo $_GET['id']; ?&gt;" /&gt;  Relevant insert file. $name = $_POST ["name"]; $message = $_POST ["comment"]; $email = $_POST ["email"]; $articleid = $_GET['id']; if( ! is_numeric($articleid) { die('invalid article id'); } $query = " INSERT INTO `commentform` (`ID`, `name`, `email`, `comment`, `articleid`)  VALUES (NULL, '$name', '$email', '$message', '$articleid');";  mysql_query($query);  echo "$name","&lt;br&gt;", "$message"; if (!mysql_query($sql)) { die('Error: ' . mysql_error()); I just need to know about the url ?=id and whats up with that, or anything else you might check over if you were me. Thanks</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(30931);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-30953'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-03-02 8:42 pm</div>
				                <div>Hello,<br />
<br />
Thanks for the question about adding your mysql query across multiple pages (and multiple times within a single page).  Unfortunately, we do not provide coding support of this nature here.  You may want to check out <a href="https://www.phpjabbers.com/php--mysql-select-data-and-split-on-pages-php25.html" rel="nofollow" target="_blank">this post in a forum for developing</a>.  We do apologize that we can provide a direct answer to your programming questions. <br />
<br />
If you have any further questions or comments, please let us know.<br />
<br />
Regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(30953);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-32098'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/19988eeedd5de1c4379d987b7b5a43db?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/19988eeedd5de1c4379d987b7b5a43db'>why are this working ? please help me.......</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-04-20 10:00 am</div>
				                <div><p>&lt;?phpinclude("new/config.php");?&gt;&lt;?phpif (isset($_Post['btn'])){&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $username=$Post['UName'];&nbsp;&nbsp;&nbsp; $password=$Post['pass'];&nbsp;&nbsp;&nbsp; $Gender=$Post['Gender'];&nbsp;&nbsp;&nbsp; $Name=$Files['img']['name'];&nbsp;&nbsp;&nbsp; $Size=$Files['img']['size'];&nbsp;&nbsp;&nbsp; $Temp=$Files['img']['tmp_name'];&nbsp;&nbsp;&nbsp; $Type=$Files['img']['type'];&nbsp;&nbsp;&nbsp; if(empty($username)||empty($password)||empty($Gender)){&nbsp;&nbsp;&nbsp; echo "Fill the Required Fields";}&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; else{&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; if($Size&lt;=0){&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $error= "&lt;h1&gt;Fill the Required Fields&lt;/h1&gt;";&nbsp;&nbsp;&nbsp; }&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; else&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; {&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$dir="img/";&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;move_uploaded_file($Temp,$dir.$Name);&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $query="INSERT INTO login values('','$username','$password','$Name','$Gender')";&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $sql=mysqli_query($con,$query);&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $success = "&lt;p&gt;Record has been Submitted&lt;/p&gt;";&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; }&nbsp;&nbsp;&nbsp; }&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; }?&gt;&lt;html&gt;&lt;style&gt;*{&nbsp;&nbsp;&nbsp; margin:0;&nbsp;&nbsp;&nbsp; padding:0;}section{&nbsp;&nbsp;&nbsp; width:100%;&nbsp;&nbsp;&nbsp; background:#333;&nbsp;&nbsp;&nbsp; padding:13% 0 14% 0;}.login-wrapper{&nbsp;&nbsp;&nbsp; width:70%;&nbsp;&nbsp;&nbsp; margin:0 auto;}.control{&nbsp;&nbsp;&nbsp; width:50%;&nbsp;&nbsp;&nbsp; margin:0 auto;&nbsp;&nbsp;&nbsp; padding:1% 0 1% 4%;&nbsp;&nbsp;&nbsp; box-sizing:border-box;&nbsp;&nbsp;&nbsp; }&nbsp;&nbsp;&nbsp; .control .form{&nbsp;&nbsp;&nbsp; width:90%;&nbsp;&nbsp;&nbsp; padding:1.5%;&nbsp;&nbsp;&nbsp; font-size:120%;&nbsp;&nbsp;&nbsp; border:1px solid #fff;&nbsp;&nbsp;&nbsp; background:black;&nbsp;&nbsp;&nbsp; color:white;&nbsp;&nbsp;&nbsp; transition:all .3s ease;}.form:focus{&nbsp;&nbsp;&nbsp; border:1px solid orange;&nbsp;&nbsp;&nbsp; color:white;-webkit-box-shadow: inset 7px 8px 71px -39px orange;-moz-box-shadow: inset 7px 8px 71px -39px orange;box-shadow: inset 7px 8px 71px -39px orange;}.control .browse{&nbsp;&nbsp;&nbsp; width:50%;&nbsp;&nbsp;&nbsp; border:1px solid #fff;&nbsp;&nbsp;&nbsp; background:black;&nbsp;&nbsp;&nbsp; color:white;}.control select{&nbsp;&nbsp;&nbsp; border:1px solid orange;&nbsp;&nbsp;&nbsp; width:35%;&nbsp;&nbsp;&nbsp; padding:1% 0 1% 0;}.control option{&nbsp;&nbsp;&nbsp; width:100%;&nbsp;&nbsp;&nbsp; padding:1% 0 1% 0;}.control .button{&nbsp;&nbsp;&nbsp; width:35%;&nbsp;&nbsp;&nbsp; color:white;&nbsp;&nbsp;&nbsp; padding:1% 0 1% 0;&nbsp;&nbsp;&nbsp; background:black;&nbsp;&nbsp;&nbsp; border:1px solid #fff;&nbsp;&nbsp;&nbsp; transition:all .8s ease;&nbsp;&nbsp;&nbsp; cursor:pointer;&nbsp;&nbsp;&nbsp; }.button:hover{&nbsp;&nbsp;&nbsp; border:1px solid orange;&nbsp;&nbsp;&nbsp; color:orange;}label{&nbsp;&nbsp;&nbsp; color:white;&nbsp;&nbsp;&nbsp; display:block;&nbsp;&nbsp;&nbsp; font-size:110%;&nbsp;&nbsp;&nbsp; padding:1% 0 1% 0;&nbsp;&nbsp;&nbsp; font-family:calibri;}section h1{&nbsp;&nbsp;&nbsp; text-align:center;&nbsp;&nbsp;&nbsp; color:white;&nbsp;&nbsp;&nbsp; font-family:candara;&nbsp;&nbsp;&nbsp; font-size:200%;}&lt;/style&gt;&lt;section&gt;&lt;h1&gt;Sign Up &amp; enjoy&lt;/h1&gt;&lt;?php if (isset($error)) {echo $error;}?&gt;&lt;?php if (isset($success)) {echo $success;}?&gt;&lt;div class="login-wrapper"&gt;&lt;form method="post" action="" enctype="multipart/form-data"&gt;&lt;div class="control"&gt;&lt;label&gt;User Name&lt;/label&gt;&lt;input class="form" type="text" name="UName"/&gt;&lt;/div&gt;&lt;div class="control"&gt;&lt;label&gt;Password&lt;/label&gt;&lt;input class="form" type="password" name="pass"/&gt;&lt;/div&gt;&lt;div class="control"&gt;&lt;label&gt;User Photo&lt;/label&gt;&lt;input class="browse" type="file" name="img"/&gt;&lt;/div&gt;&lt;div class="control"&gt;&lt;label&gt;Gender&lt;/label&gt;&lt;select name="Gender"&gt;&lt;option&gt;Male&lt;/option&gt;&lt;option&gt;Female&lt;/option&gt;&lt;/select&gt;&lt;/div&gt;&lt;div class="control"&gt;&lt;input class="button" type="submit" name="btn" value="submit"/&gt;&lt;/div&gt;&lt;/form&gt;&lt;/div&gt;&lt;/section&gt;&lt;/html&gt;</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32098);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-32101'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-04-20 10:49 am</div>
				                <div>Hello,<br />
<br />
I'm sorry for the problem you may having with the code.  We unfortunately do not provide coding support.  If you are using the code we provide specifically and it's not working or if the issue is related to a server-side error then we can investigate the problem in more depth.  You may want to  consider consulting with a developer/programmer to review your code, or you may utilize a forum that specializes in troubleshooting PHP code.  Apologies that we cannot provide any direct assistance on this issue.<br />
<br />
If you have any further questions or comments, please let us know.<br />
<br />
Regards,<br />
Arnel C.<br />
</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32101);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-32104'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/cf7a79195de45d5ea28c23e6f5d3e2be?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/cf7a79195de45d5ea28c23e6f5d3e2be'>Madi</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-04-20 11:19 am</div>
				                <div><p>hi i just put this code into my blog (that i have not yet posted to the internet) and i tested it out, but when i hit submit it said" thank you for your post ;&nbsp; mysql_close($con);}?&gt;" how doi fix it?</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32104);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-32120'></a>
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
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-04-20 7:50 pm</div>
				                <div>Hello Madi,<br />
<br />
The code is to help you insert data from the web.  Did you  use all of the code verbatim?  What code did you use exactly?   The "thank you for your post" is part of the code.   You may need to adapt it for your own use. <br />
<br />
If you have any further questions, please let us know.  <br />
<br />
Kindest regards,<br />
Arnel C.</div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32120);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
					</td>
				</tr>
			</table>
		</div>
	
		<a name='comment-32376'></a>
		<div  style='margin:40px 0px 0px 0px;'>
			
			<table style='width:100%; border-collapse:separate; border:1px solid #aaa;' class='sc_rc'>
				<tr>
					<td valign='top' style='width:100px; padding:5px; border-right:1px solid #aaa;background-image: -webkit-linear-gradient(top,#e3e3e3,#efefef);background-image: linear-gradient(to bottom, #E3E3E3, #EFEFEF); border-bottom-left-radius: 5px; border-top-left-radius: 5px;'>
						<img src='//www.gravatar.com/avatar/86454fa4ab07524a88bcfd60eb988baa?s=90' class='sc_rc' style='max-width:90px; margin-right:15px;display:block;' />
						<div><a style='font-size:16px;' href='//www.gravatar.com/86454fa4ab07524a88bcfd60eb988baa'>Aaron Jacobson</a></div>
						<div></div>
						<div></div>
						<div><span title='Posted anonymously - anonymous users receive no points'>n/a <a href='/support/team/points' target='_blank'>Points</a></span></div>
						
					</td>
					<td valign='top' style='padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;'>
						<div style='float:right;margin:0px 0px 15px 15px;font-size:12px;color:#aaa'>2016-05-01 11:43 pm</div>
				                <div><p>I have been troubleshooting this problem independently for hours now and after looking at the initial "John Smith" INSERT code that we save to a text file I realized that the 'comments' part was lower-case while my 'Comments' database is capitalized. &nbsp;I hope this helps others because I was getting a little stressed out!! lol</p></div>
						<div style='text-align:right; clear:both;'><a href='#post_a_comment' class='btn btn-primary' style='text-transform:none;' onClick="jQuery('#new_comment_parent_id').val(32376);jQuery('html, body').animate({scrollTop: jQuery('#main_comment_submission_div').offset().top}, 1500);return false;" >Reply</a></div>
        	        			
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
			<h3><span class='comment-count'>131</span> Questions & <span class='comment-text'>Comments</span></h3>
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
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '120.29.65.194']);

                        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        _gaq.push(['_trackEvent', 'chat', 'launch', 'support center']);
                        _gaq.push(['_trackEvent', 'chat-by-ip', 'launch-by-ip', '120.29.65.194']);
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
        	        id:'1135',
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