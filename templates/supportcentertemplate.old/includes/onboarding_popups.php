<?





/*
$generic_welcome_message = "
	<div style='max-width:620px; padding:0px;'>
		<p>Welcome to InMotion Hosting!</p>
		<p>If you're a new customer, we recommend checking out the following video tutorials - they'll help give you a head start with your new hosting account.</p>
		<div style='float:right; width:300px; margin-left:10px;'>
			<p><strong>How to use the Support Center</strong></p>
			<p>There is lots of helpful information within our Support Center, let us take a moment to show you what's there!</p>
			<iframe width='280' height='157' src='//www.youtube.com/embed/38p8Ds82FtM' frameborder='0' allowfullscreen></iframe>
		</div>
		<div style='float:left; width:300px; margin-right:10px;'>
			<p><strong>How to login to AMP</strong></p>
			<p>Your Account Management Panel is used to administer your account, so it's important to learn how to login.</p>
	                <iframe width='280' height='157' src='//www.youtube.com/embed/MkUPQUN1a1w' frameborder='0' allowfullscreen></iframe>
        	</div>
		<div style='clear:both;'></div>
	</div>
";
*/
$generic_welcome_message = "
	<div style=\"max-width:620px; padding:4px; margin:0px; background:url('/img/pattern.gif');\">
                <p><span style='font-size:25px; color:#c52228; font-weight:bold;'>Welcome to</span> <span style='color:#888; font-size:25px;'>InMotion Hosting!</span></p>

		<p>As you begin to learn about the features available with your new hosting account, we'd like to take just a moment to review with you a few important details you should be aware of:</p>

		<div>
                        <span style='font-size:30px; color:#c52228; font-weight:bold;'>1.</span> <span style='color:#888; font-size:25px;'>Logging into AMP and cPanel</span><br />
                        Your Account Management Panel (AMP) and cPanel are two tools that you will need to learn how to login to. <strong>Before doing anything else</strong>, we recommend <a href='/support/website/amp/amp-vs-cpanel?tsrc=popup_onboardingemail' target='_blank'>clicking this link</a> and learning <strong>1.</strong> the difference between these two systems and <strong>2.</strong> how to log into them.
                </div>

		<p></p>

		<div style='float:left; width:300px; margin-right:10px;'>
			<span style='font-size:30px; color:#c52228; font-weight:bold;'>2.</span> <span style='color:#888; font-size:25px;'>Your first 24 hours</span><br />
			If your new account includes a new domain name, it will not fully work in the first 24 hours. This means both your website and email may not work the first day. <a href='/support/domain-names/dns-nameserver-changes/domain-names-dns-changes?tsrc=popup_onboardingemail' target='_blank'>Click here</a> to learn more.
		</div>

		<div style='float:right; width:300px; margin-left:10px;'>
			<span style='font-size:30px; color:#c52228; font-weight:bold;'>3.</span> <span style='color:#888; font-size:25px;'>Support Center</span><br />
			Our Support Center has lots of helpful information in it. <a href='/support/website/website-troubleshooting/how-to-get-great-technical-support?tsrc=popup_onboardingemail#video' target='_blank'>Here's a quick YouTube video</a> that shows how our Support Center can help.
		</div>

		<div style='clear:both;'></div>

		<script type=\"text/javascript\">
			_gaq.push(['_setAccount', 'UA-1501988-1']);
			_gaq.push(['_trackEvent', 'community support', 'onboarding - popup shown']);
                </script>
        </div>
";






// if( $user->username == "BradM" OR $user->username == "noitomni")
if( "enabled" == "enabled" )
{
        // $option = JRequest::getVar('option'); $view = JRequest::getVar('view'); $id = JRequest::getVar('id');

        if( $_GET['tsrc'] == "onboardingemail" )
        {
                $force_onboarding_popup = false;
                $session = JFactory::getSession();

                if( $session->get('seen_generic_welcome_onboardingemail') != "yes" )
                {
                        $force_onboarding_popup = true;
                        $show_generic_welcome = true;
			$onboarding_html_to_show .= $generic_welcome_message;
                }

                if( $force_onboarding_popup == true )
                        echo "
                                <a id='inline' href='#div_onboardingemail' style='display:none;'></a>
                                <div style='display:none; padding:0px;'>
                                        <div name='div_onboardingemail' id='div_onboardingemail' style='padding:0px;'>
						$onboarding_html_to_show
                                        </div>
                                </div>
                                <script type='text/javascript'>
                                        jQuery(document).ready(function() {
                                                jQuery('#inline').fancybox().trigger('click');
                                        });
                                </script>
                        ";

                if( $show_generic_welcome == true )
                        $session->set('seen_generic_welcome_onboardingemail', "yes");
        }
}






?>
