<?






// ------------------------------------------------------------------------------------------------------------------
// in what order should the widgets load?
// ------------------------------------------------------------------------------------------------------------------



dedicated_promo();
joomla_community();
vps_xfer_promo();
transfer_promo();
reseller_promo_enom();
reseller_promo_label();
reseller_promo_whm();
reseller_promo_whmcs();
reseller_promo_expert();
HotJar();
// joomla_area51();

custom_sidebar_widget_web_hosting_warriors($joption,$jview,$jid);

// advertise_web_hosting_warriors();

// wordcamp_philly();






// ------------------------------------------------------------------------------------------------------------------
// begin widget functions
// ------------------------------------------------------------------------------------------------------------------






function custom_sidebar_widget_web_hosting_warriors($joption,$jview,$jid)
{
	if( $joption == "com_content" AND $jview == "category" AND $jid == 488 )
	{
		echo "
			<div>				
				<a class=\"twitter-timeline\"  href=\"https://twitter.com/search?q=%23InMotionGiveaway\"  data-widget-id=\"431899686224420864\">Tweets about \"#InMotionGiveaway\"</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\"://platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
			</div>
		";
	}
}






function advertise_web_hosting_warriors()
{
	if( substr_count($_SERVER['REQUEST_URI'],"wordpress") > 0 )
	{
		echo "
			<div class='moduletable'>
				<img src='/support/images/stories/webwarriors/webhostingwarriors-smaller.png' style='display:block;margin-bottom:10px;' />
				<p>
					<img src='/support/images/stories/icons/wordpress-logo-32-blue.png' style='float:left; margin:0px 5px 5px 0px;' />
					This week's podcast is with Jeff Chandler of WP Tavern.
				</p>
				<div style='text-align:right;'>
					<a class='btn btn-primary' href='/support/webhostingwarriors'>Watch now!</a>
				</div>
			</div>
		";
	}
}






function joomla_area51()
{
        if( substr_count($_SERVER['REQUEST_URI'],"joomla") > 0 )
        {
		echo "
			<div class='moduletable'>
				<a href='http://area51.stackexchange.com/proposals/58842/joomla?referrer=nwm9lFY8b75zCTBzMD1JaA2' target='_blank'><img src='http://area51.stackexchange.com/ads/proposal/58842.png' width='198' height='220' alt='Stack Exchange Q&A site proposal: Joomla' /></a>
			</div>
		";
        }
}






function wordcamp_philly()
{
        if( substr_count($_SERVER['REQUEST_URI'],"wordpress") > 0 )
        {
                echo "
                        <div class='moduletable'>
				<a href='https://twitter.com/TheJeffMatson/statuses/472449864539078656' target='_blank'>
	                                <img src='http://2014.philly.wordcamp.org/files/2014/05/sponsor-badge.png' style='max-width:100%;' />
				</a>
                        </div>
                ";
        }
}






function joomla_community()
{
        if( substr_count($_SERVER['REQUEST_URI'],"joomla") > 0 )
        {
                echo "
                        <div class='moduletable'>
				<h3>Joomla Community Google+ Hangout #3</h3>

				<a href='https://www.youtube.com/watch?v=PFU8plpPNwc' target='_blank'>
					<img src='/support/images/stories/edu/joomla-3/cache/brad-talking-during-joomla-hangout.png' style='margin-bottom:11px; border:1px solid #000;' class='sc_rc' />
				</a>

				<p><em>June 3rd, 2014</em></p>

				<p>Thank you <a href='https://twitter.com/RustyJoomla' target='_blank'>@RustyJoomla</a> for letting me speak on the Joomla Community Google+ Hangout!</p>

				<p><a href='https://www.youtube.com/watch?v=PFU8plpPNwc' target='_blank'>Click here to watch!</a></p>
                        </div>
                ";
        }
}



function vps_xfer_promo()
{

$doc2 =& JFactory::getDocument();
$content2 = $doc2->getMetaData( 'keywords' );


        if (strpos($content2, '30_xfer')) {
echo "
<script type='text/javascript'>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1501988-1', 'auto');

  // Optimizely Universal Analytics Integration Code
  window.optimizely = window.optimizely || [];
  window.optimizely.push('activateUniversalAnalytics');
  // End Optimizely Code

  ga('send', 'pageview');

</script>
                        <div class='moduletable'>
                                <a href='http://www.inmotionhosting.com/vps-hosting' target='_blank' onClick=\"ga('send', 'event', 'Banner', 'Click', 'VPS Right Rail');\">
                                        <img src='/support/images/banners/VPS-Support-Center-Banner.jpg' style='margin-bottom:11px; border:1px solid #000;' class='sc_rc' />
                                </a>

                                </div>
                ";
        }
}






function dedicated_promo()
{

$doc2 =& JFactory::getDocument();
$content2 = $doc2->getMetaData( 'keywords' );


        if (strpos($content2, '2xram')) {
echo "
                        <div class='moduletable'>
                                <a href='http://www.inmotionhosting.com/dedicated-servers?utm_source=BAN-IMHDED-1001&utm_medium=Banner&utm_campaign=DedicatedServers' target='_blank'>
                                        <img src='/support/images/banners/imh-email-nwsltr-mrktng-banner-support.jpg' style='margin-bottom:11px; border:1px solid #000;' class='sc_rc' />
                                </a>

                                </div>
                ";
        }
}


function transfer_promo()
{

$doc2 =& JFactory::getDocument();
$content2 = $doc2->getMetaData( 'keywords' );


        if (strpos($content2, 'transfer_site')) {
echo "
                        <div class='moduletable'>
                                <a href='http://www.inmotionhosting.com/transfer-your-website-to-the-best-web-hosting' target='_blank'>
                                        <img src='/support/images/banners/transfer-support-banner.png' style='margin-bottom:11px; border:1px solid #000;' class='sc_rc' />
                                </a>

                                </div>
                ";
        }
}

function reseller_promo_enom()
{
        
$doc2 =& JFactory::getDocument();
$content2 = $doc2->getMetaData( 'keywords' );


        if (strpos($content2, 'reseller_enom')) {
echo "
                        <div class='moduletable'>
                                <a href='http://www.inmotionhosting.com/reseller-hosting' target='_blank'>
                                        <img src='/support/images/banners/reseller/PMGDEV-2229_ENOM_Final.png' style='margin-bottom:11px; border:1px solid #000;' class='sc_rc' />
                                </a>

                                </div>
                ";
        }
}

function reseller_promo_whm()
{
        
$doc2 =& JFactory::getDocument();
$content2 = $doc2->getMetaData( 'keywords' );


        if (strpos($content2, 'reseller_cpanel')) {
echo "
                        <div class='moduletable'>
                                <a href='http://www.inmotionhosting.com/reseller-hosting' target='_blank'>
                                        <img src='/support/images/banners/reseller/PMGDEV-2229_CPANEL-WHM_Final.png' style='margin-bottom:11px; border:1px solid #000;' class='sc_rc' />
                                </a>

                                </div>
                ";
        }
}

function reseller_promo_expert()
{
        
$doc2 =& JFactory::getDocument();
$content2 = $doc2->getMetaData( 'keywords' );


        if (strpos($content2, 'reseller_expert')) {
echo "
                        <div class='moduletable'>
                                <a href='http://www.inmotionhosting.com/reseller-hosting' target='_blank'>
                                        <img src='/support/images/banners/reseller/PMGDEV-2229_Expert_Final.png' style='margin-bottom:11px; border:1px solid #000;' class='sc_rc' />
                                </a>

                                </div>
                ";
        }
}

function reseller_promo_label()
{
        
$doc2 =& JFactory::getDocument();
$content2 = $doc2->getMetaData( 'keywords' );


       if (strpos($content2, 'reseller_label')) {
echo "
                        <div class='moduletable'>
                                <a href='http://www.inmotionhosting.com/reseller-hosting' target='_blank'>
                                        <img src='/support/images/banners/reseller/PMGDEV-2229_White-Label_Final.png' style='margin-bottom:11px; border:1px solid #000;' class='sc_rc' />
                                </a>

                                </div>
                ";
        }
}

function reseller_promo_whmcs()
{
        
$doc2 =& JFactory::getDocument();
$content2 = $doc2->getMetaData( 'keywords' );


        if (strpos($content2, 'reseller_whmcs')) {
echo "
                        <div class='moduletable'>
                                <a href='http://www.inmotionhosting.com/reseller-hosting' target='_blank'>
                                        <img src='/support/images/banners/reseller/PMGDEV-2229_WHMCS_Final.png' style='margin-bottom:11px; border:1px solid #000;' class='sc_rc' />
                                </a>

                                </div>
                ";
        }
}
function HotJar()
{
        if(false !== strpos($_SERVER['REQUEST_URI'],"/support/product-guides"))
        {
         $doc = JFactory::getDocument();
$doc->addCustomTag('
                <!-- Hotjar Tracking Code for InMotionHosting.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:51112,hjsv:5};
        a=o.getElementsByTagName(\'head\')[0];
        r=o.createElement(\'script\');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,\'//static.hotjar.com/c/hotjar-\',\'.js?sv=\');
</script>');
        }

}

?>
