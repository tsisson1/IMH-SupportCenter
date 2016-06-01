<?php


//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

$option = JRequest::getVar('option');
$view = JRequest::getVar('view');

if($view == "article")
{
	$article = JTable::getInstance('content');
	$article->load(JRequest::getInt('id'));
	$author = JFactory::getUser($article->created_by);

	$updates_weve_made = yom_weve_been_listening($article->id);
}
if($view == "category" || $view == "categories")
{
	return;
}
if($option == "com_communitysupport")
{
	return;
}

// echo "<pre>article created by " . $article->created_by . "</pre>";
// echo "<pre>"; print_r($author); echo "</pre>";

/*
if(is_null($author->getParam('author_image')))
{
        return;
}
$author_image = "<img src='/support/images/authors/" . $author->getParam('author_image') . "' class='author_image' />";
*/
$author_image = "<img src='" . pass_userid_get_avatar_url_2($author->id) . "' class='author_image' />";

if($_POST['yom_feedback'])
{
	$send_yom_message = true;


	$block_these_ips = array("88.125.180.137");
	if( in_array($_SERVER['HTTP_X_FORWARDED_FOR'],$block_these_ips) )
	{
		$send_yom_message = false;
                JFactory::getApplication()->enqueueMessage('Your IP address has been blocked.', 'warning');
	}

	if( $_POST['yom_email'] != "" AND substr_count($_POST['yom_email'],"@") < 1 )
	{
		$send_yom_message = false;
		JFactory::getApplication()->enqueueMessage('The email address you entered was incorrectly formatted.', 'warning');
	}
	if( is_numeric($_POST['yom_feedback']) )
	{
		$send_yom_message = false;
		JFactory::getApplication()->enqueueMessage('The feedback you entered was only a number.', 'warning');
	}
	if( substr_count($_POST['yom_feedback'],"a href=") > 0 )
        {
                $send_yom_message = false;
                JFactory::getApplication()->enqueueMessage('Please do not enter any links in your feedback.', 'warning');
        }
	if( strlen($_POST['yom_feedback']) < 15 )
        {
                $send_yom_message = false;
                JFactory::getApplication()->enqueueMessage('Please enter at least 15 characters for your feedback.', 'warning');
        }
	if( $_POST['yom_feedback'] == "Viktor LaForgia" )
	{
		$send_yom_message = false;
                JFactory::getApplication()->enqueueMessage('Please, no more Viktor LaForgia spam!', 'warning');
	}
	// JFactory::getApplication()->enqueueMessage('We appreciate your enthusiasm! ...However we only allow one vote per user.', 'warning');


	if( $send_yom_message == true)
	{
		$mailer = JFactory::getMailer();
		$config = JFactory::getConfig();
		$sender = array( 'customer_experience@inmotionhosting.com', 'Customer Community' );
		$mailer->setSender($sender);
		$mailer->addRecipient("customer_experience@inmotionhosting.com");
		$body = "User IP: " . $_SERVER['HTTP_X_FORWARDED_FOR'] . "\n\nPage: " . $_SERVER['REQUEST_URI'] . "\n\nUser Email: " . $_POST['yom_email'] . "\n\nUser Feedback:\n" . $_POST['yom_feedback'];
		$mailer->setSubject('Your Opinion Matters - InMotion Hosting');
		$mailer->setBody($body);
		// Jacob $send = $mailer->Send();
		if ( $send !== true )
		{
			echo 'Error sending email: ' . $send->message;
		} else
		{
			$yom_description = "<div id='yom_success'>Thank you!<br /><br />Your feedback has been sent.</div>";

			$yom_success_message_green = "
<p>Thank you for submitting your feedback!<p>

<p><strong>Please note</strong>: If your \"feedback\" was actually a question about something that you need help with, you can generally get an answer within an hour (M-F 8-9 EST) by <a href='/support/community-support'>posting a question to the community</a>.</p>
			";
			JFactory::getApplication()->enqueueMessage($yom_success_message_green, 'success');
		}
	}
}
else
{
	// Xometimes we have "null" authors. For example, we're not going to show Arnel as the author of an IMH Aritlce
	// Therefor, we need to have a custom message if the author name == null
	if($author->name != "null")
		$yom_intro = "I'm " . $author->name . ", your friendly <a href='/support/team'>Community Support technician</a>, and I wrote the article you're looking at now. I like to think it's perfect, but I'm sure you have some suggestions. Please, let me know what they are!";
	else
		$yom_intro = "The <a href='/support/team'>Community Support team</a> wrote the article you're looking at now. We like to think it's perfect, but we're sure you have some suggestions. Please, let us know what they are!";

	$mod_social_addition = "";
	if( $_GET['test'] == "yes")
	{
		$doc = JFactory::getDocument();
		$social_media_buttons = return_vdiv_with_social_buttons($doc->base);
		$mod_social_addition = "
			<div style='clear:both; margin:20px 0px 20px 0px;'>
				<div style='float:right; width:90px; line-height:14px;'>Want to say thanks? We would love to see you share this page!</div>
				<div style='float:left; width:100px;'>
					<div style='margin-bottom:8px;'>" . $social_media_buttons['google'] . "</div>
					<div style='margin-bottom:8px;'>" . $social_media_buttons['facebook'] . "</div>
					<div>" . $social_media_buttons['twitter'] . "</div>
				</div>
				<div style='clear:both;'></div>
			</div>
		";
	}

	
	$yom_description = "
		<div>
			$author_image
                	... but we need to know what you're thinking!
	        </div>

		$mod_social_addition

        	<p style='clear:both;'>
			$yom_intro
	        </p>
                
                <p class='alert'>This form is temporarily disabled. Please <a href='http://www.inmotionhosting.com/support/website/website-troubleshooting/how-to-get-great-technical-support' target='_blank'>contact technical support</a> with any questions or problems.</p>
	        <strong>Feedback</strong><br />
        	<textarea disabled name='yom_feedback' id='yom_feedback' style='width:195px;'></textarea>

	        <strong>Your Email Address</strong><br />
        	<em>Because we'd like to talk with you!</em>
	        <input disabled type='text' name='yom_email' id='yom_email' style='width:195px;'/>

	        <input disabled type='submit' name='feedback' id='feedback' value='Submit Feedback!' class='btn btn-info' style='display:inline; margin:10px 0px;' />
		$updates_weve_made
	";
}






function yom_weve_been_listening($article_id)
{
	if(!is_numeric($article_id))
		return;

	$query = "SELECT * FROM #__content_updates WHERE `article_id` = $article_id ORDER BY utc_n_timestamp DESC;";
	$db = JFactory::getDbo();
	$db->setQuery($query);
	$results = $db->loadObjectList();

	if( ! $results )
		return;
	else
	{
		foreach($results as $k => $v)
		{
			$updates .= "
				<div>" . date('Y-m-d h:i a',$v->utc_n_timestamp) . "</div>
				<div>" . $v->description . "</div>
			";
		}
	}

	return "
		<h4>We've been listening!</h4>
		$updates
	";
}






?>






<form id='yom' method='post'>
	<h3>Your Opinion Matters</h3>
	<? echo $yom_description; ?>
</form>
