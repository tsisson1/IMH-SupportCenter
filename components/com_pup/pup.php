<?






// No direct access to this file
defined('_JEXEC') or die('Restricted access');

JRequest::setVar('option','com_pup');

$db = JFactory::getDbo();
$user = JFactory::getUser();

$current_utc_n = strtotime(gmdate('Y-m-d H:i:s'));

$exploded_url = pup_get_exploded_url();






// ------------------------------------------------------------------------------------------------
// control what is shown on the page
// ------------------------------------------------------------------------------------------------
if( count($exploded_url) > 3 )
	echo "<p class='alert alert-warning'>Article cannot be found.</p>";
elseif( count($exploded_url) == 2 )
	pup_homepage($db);
else
{
	switch($exploded_url[2])
	{
		case "write":
			pup_write_article($user);
			break;
		case "publish":
			if( $_POST )
				pup_publish_article($db,$user);
			else
				echo "<p class='alert alert-danger'>No content was posted to the page.</p>";
			break;
		default:
			pup_load_article($db,$user,$exploded_url[2]);
			break;
	}
}






function pup_get_exploded_url()
{
	$exploded_by_question = explode("?",$_SERVER['REQUEST_URI']);
	$explode_by_pound = explode("#",$exploded_by_question[0]);
	$explode_by_slash = explode("/",$explode_by_pound[0]);
	$explode_by_slash = array_filter($explode_by_slash);
	$explode_by_slash = array_values($explode_by_slash);
	return $explode_by_slash;
}






function  pup_write_article($user)
{
	$document = JFactory::getDocument();

        $document->setTitle( "Publish a new article | InMotion Hosting" );

	// if the user is logged in, force recaptcha
	// ----------------------------------------------------------------------------------------
	$recaptcha = "";
	if( $user->guest)
	{
		require_once('templates/supportcentertemplate/html/com_content/category/recaptcha-php-1.11/recaptchalib.php');
        	$publickey = "6LeoSOcSAAAAAGEzHG3DfhwCCZTigzSlHi3Qjymt"; // you got this from the signup page
	        $recaptcha = recaptcha_get_html($publickey);
	}



	$type_title_here = "Type your article title here";
	if( $_POST['try_again_title'])
		$type_title_here = htmlentities($_POST['try_again_title'],ENT_QUOTES);
	$type_content_here = "Type the content for your article here";
        if( $_POST['try_again_content'])
                $type_content_here = htmlentities($_POST['try_again_content'],ENT_QUOTES);



	if($user->guest)
		$logged_in_message = "<p class='alert alert-warning'><strong>Please note!</strong> You are currently not logged in. If you login to the Support Center, you will be able to edit your article after it is published! <a href='/support/login'>Click here to login</a>";
	else
		$logged_in_message = "<p class='alert alert-success'>You are currently logged in and will have access to edit your article after it is published!</p>";


	echo "
	<div class='item-page'>
		<div class='page-header'><h1>Publish an article</h1></div>
		<div>
			<p>
				<strong>Would you like to publish your own article?</strong><br />
				Do you have helpful tips and tricks that we don't currently have published in our Support Center? If you do, here's your chance to contribute to the community!
			</p>
			<p>
				<strong>Directions</strong>:<br />
				Type in the title and content for your new article below, and then click PUBLISH. That's it! Your content will be published <strong>immediately</strong>!
			</p>
			$logged_in_message
			<form method='post' action='/support/u/publish'>
				<input type='text' name='pup_title' id='pup_title' style='display:block;width:661px; margin:0px 0px 2px 0px;' value='$type_title_here'>
				<script type='text/javascript' src='/support/components/com_pup/tinymce/js/tinymce/tinymce.min.js'></script>
				<script type='text/javascript'>
				tinymce.init({
				    selector: 'textarea',
				    plugins: [
					'link image'
				        // 'advlist autolink lists link image charmap print preview anchor',
			        	// 'searchreplace visualblocks code fullscreen',
				        // 'insertdatetime media table contextmenu paste moxiemanager'
				    ],
				    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
					convert_urls: false
				});
				</script>
				<textarea name='content' style='width:675px;height:300px;margin:0px;'>$type_content_here</textarea>
				<div style='float:right; margin:0px 0px 15px 0px; padding-top:10px; text-align:right;' >
					$recaptcha
					<input type='submit' value='Publish' class='btn btn-primary' />
				</div>
				<p>
					<strong>Please note!</strong><br />
					Your article may be edited by InMotion Hosting staff at any time, usually though to do things like fix grammatical errors. If your article is not related to web hosting, we may unpublish your article.
				</p>
			</form>
		</div>
	</div>
	";
}






function pup_publish_article($db,$user)
{
	// recaptcha
        // ----------------------------------------------------------------------------------------
	if( $user->guest)
	{
	        require_once('templates/supportcentertemplate/html/com_content/category/recaptcha-php-1.11/recaptchalib.php');
        	$privatekey = "6LeoSOcSAAAAACyk04ENGfotd8a-9zZAzPfNsIIv"; // you got this from the signup page
	        $resp = recaptcha_check_answer ($privatekey,
        	                        $_SERVER['HTTP_X_FORWARDED_FOR'],
                	                $_POST["recaptcha_challenge_field"],
                        	        $_POST["recaptcha_response_field"]);
	        if (!$resp->is_valid)
        	{
                	// What happens when the CAPTCHA was entered incorrectly
	                JFactory::getApplication()->enqueueMessage("The Captcha was not entered correctly, please try again.", 'error');

			echo "
				<form method='post' action='/support/u/write'>
					<input type='hidden' name='try_again_title' id='try_again_title' value='" . htmlentities($_POST['pup_title'],ENT_QUOTES) . "' >
					<input type='hidden' name='try_again_content' id='try_again_content' value='" . htmlentities($_POST['content'],ENT_QUOTES) . "' />
					<input type='submit' value='Try again' class='btn btn-primary' />
				</form>
			";

        	        return;
	        }
        	else
	        {
        	        // Your code here to handle a successful verification
		}
	}



	$alias = pup_create_alias($db,$_POST['pup_title']);

	$add_slashes_alias = addslashes($alias);
	$add_slashes_title = addslashes($_POST['pup_title']);
	$add_slashes_content = addslashes($_POST['content']);
	$add_slashes_user_ip = addslashes($_SERVER['HTTP_X_FORWARDED_FOR']);

	$query = "
		INSERT INTO #__pup
		(`id`,`author`,`title`,`alias`,`content`,`publish_date`,`approved`,`hits`,`user_ip`,`last_edited`)
		VALUES(NULL," . $user->id . ",'$add_slashes_title','$add_slashes_alias','$add_slashes_content',CURRENT_TIMESTAMP,-1,0,'$add_slashes_user_ip',CURRENT_TIMESTAMP);
	";
	$db->setQuery($query);
	$results = $db->execute();

	// echo "<p class='alert alert-success'>Your article has been published!</p>";

	pup_send_staff_email("U Article - New Article Published","/support/u/" . $add_slashes_alias);
	insert_new_staff_alert("new u article",JURI::base() . "u/" . $add_slashes_alias);

	Header( "HTTP/1.1 301 Moved Permanently" );
	Header( "Location: /support/u/$add_slashes_alias" );
	die();
}






function pup_create_alias($db,$text)
{
	// ----------------------------------------------------------------------------------------
	// create the alias
	// ----------------------------------------------------------------------------------------
        // clean up html
        $text = htmlspecialchars_decode($text);
        $text = htmlspecialchars_decode($text);
        // remove all non alphanumber characters
        $text = preg_replace("/[^a-zA-Z0-9\s]/", "", $text);
        // clean up white spaces and dashes
        $text = str_replace(" ", "-", $text);
        $text = str_replace("----", "-", $text);
        $text = str_replace("---", "-", $text);
        $text = str_replace("--", "-", $text);
        $text = trim($text,"-");
        // clean it up and make it lower case
        $text = strtolower($text);

	// ----------------------------------------------------------------------------------------
	// does the alias already exist in the database?
	// ----------------------------------------------------------------------------------------
	$query = "SELECT count(`id`) as 'count' FROM #__pup WHERE `alias` = '" . addslashes($text) . "';";
	$db->setQuery($query);
	$results = $db->loadObjectList();

	if($results[0]->count == 0)
		return $text;
	// else, find the number we want to use, like -5
	else
	{
		$x = 1;
		$found_good = false;
		while($found_good == false)
		{
			$query = "SELECT count(`id`) as 'count' FROM #__pup WHERE `alias` = '" . addslashes($text) . "-$x';";
		        $db->setQuery($query);
		        $results = $db->loadObjectList();
		        if($results[0]->count > 0)
				$x++;
			else
				return $text . "-" . $x;
		}
	}
}






function pup_load_article($db,$user,$alias)
{
	$document = JFactory::getDocument();

	JRequest::setVar('view','article');


	// grab the article
	$query = "SELECT * FROM #__pup WHERE `alias` = '" . addslashes($alias) . "' LIMIT 1;";
	$db->setQuery($query);
	$p = $db->loadObject();


	// if the user is trying to edit the article
	if( $_POST['task_a'] == "edit" )
	{
		pup_edit_article($db,$user,$p);

		// grab all of the content again as the article was just updated
		$query = "SELECT * FROM #__pup WHERE `alias` = '" . addslashes($alias) . "' LIMIT 1;";
	        $db->setQuery($query);
        	$p = $db->loadObject();
	}


	// does the article not exist?
	if( ! $p )
	{
		JError::raiseError(400);
		echo "<p class='alert alert-danger'>Article does not exist.</p>";
		return;
	}

	JRequest::setVar('id',$p->id);


	// update the hit count
	/*
	$query = "UPDATE #__pup SET `hits` = `hits` + 1 WHERE `alias` = '" . addslashes($alias) . "' LIMIT 1;";
	$db->setQuery($query);
        $results = $db->execute();
	*/


	// strip tags
	$content = strip_tags($p->content,'<div><p><strong><em><span><sub><code><blockquote><ul><ol><li><h1><h2><h3><h4><h5><h6><a><img><pre>');


	// set document details, such as title,noindex,nofollow
	$document->setTitle( htmlentities($p->title,ENT_QUOTES) . " | InMotion Hosting" );
	if( $p->approved == -1 )
	        $document->setMetaData('robots','noindex,nofollow');


	// if the user is allowed to edit, then print the javascript
	$edit_button = "";
	$form_start = "";
	$form_end = "";
	if( ($user->id == $p->author OR $user->groups[8] == 8) AND ! $user->guest )
	{
		echo "
		<script type='text/javascript' src='/support/components/com_pup/tinymce/js/tinymce/tinymce.min.js'></script>
                <script type='text/javascript'>
		tinymce.init({
		    selector: 'h1.pup_title',
		    inline: true,
		    toolbar: 'undo redo',
		    menubar: false,
		    convert_urls: false
		});
		tinymce.init({
		    selector: 'div.pup_content',
		    inline: true,
		    plugins: [
			'link image'
		    ],
		    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		    convert_urls: false
});
                </script>
		";


		$form_start = "<form method='post'>";
		$edit_button = "	<div style='border-top:1px solid #ddd; margin-top:15px; padding-top:15px;'>
						<input type='submit' value='Edit' class='btn btn-primary' style='float:right; margin:0px 0px 15px 15px;'/>
						<p>To edit the article above, simply click either the title or content, and the text will become editable. Then, click <strong>EDIT</strong>.</p>
					</div>
					<div style='clear:both;'></div>
		";
		$form_end = "		<input type='hidden' name='task_a' id='task_a' value='edit'>
				</form>
		";
	}


	// last edited
	$last_edited = "";
	if( $p->last_edited != $p->publish_date )
		$last_edited = "<div style='float:left;'><span style='color:#606060;'>Last Modified:</span> " . $p->last_edited . "</div>";


	// unpublished alert
	$unpublished_alert = "";
	if( $p->approved < 0 )
		$unpublished_alert = "<p class='alert alert-warning'>This article is currently pending moderator approval.</p>";


	// How should the author be printed?
	$written_by_name = "Anonymous";
	if ($p->author > 1)
	{
		$author_object = JFactory::getUser($p->author);
		$author_profile = load_user_profile($db,$author_object);

		if( substr_count($author_profile->google_url,"plus.google.com") > 0 )
		{
			$google_profile_url = str_replace("/posts","",$author_profile->google_url);
			$written_by_name = "<a href='" . htmlentities($google_profile_url,ENT_QUOTES) . "?rel=author' target='_blank'>" . htmlentities($author_object->username,ENT_QUOTES) . "</a>";
		}
		else
			$written_by_name = htmlentities($author_object->username,ENT_QUOTES);
	}


	// print the page
	echo "
		<div class='item-page'>
			$form_start
			<div class='page-header'>
				<h1 class='pup_title'>" . htmlentities($p->title,ENT_QUOTES) . "</h1>
				<div style='font-size:12px; color:#aaa; margin-bottom:-10px; padding-top:5px;'>
					<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Written by:</span> $written_by_name</div>
					<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Views:</span> <span name='page_views' id='page_views'>" . $p->hits . "</span></div>
					<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Published:</span> " . $p->publish_date . "</div>
					$last_edited
				</div>
				<div style='clear:both;'></div>
			</div>

			$unpublished_alert

			<div class='pup_content'>$content</div>

			$edit_button
			$form_end

		</div>
	";



	// done son!
}






function pup_edit_article($db,$user,$p)
{
	if( $user->guest )
	{
		echo "<p class='alert alert-danger'>You do not have access to edit this article.</p>";
		return;
	}


	if( $p->author != $user->id AND $user->groups[8] != 8)
	{
		echo "<p class='alert alert-danger'>You do not have access to edit this article.</p>";
		return;
	}

	
	$add_slashes_title = addslashes($_POST['mce_0']);
	$add_slashes_content = addslashes($_POST['mce_2']);

	$query = "
		UPDATE	#__pup
		SET	`title` = '$add_slashes_title',
			`content` = '$add_slashes_content',
			`last_edited` = CURRENT_TIMESTAMP
		WHERE	`id` = " . $p->id . "
		LIMIT	1;
	";
	$db->setQuery($query);
	$results = $db->execute();
	echo "<p class='alert alert-success'>Your article has been updated!</p>";
	pup_send_staff_email("U Article - Edit","/support/u/" . $p->alias . "\nORIGINAL CONTENT BELOW\n\nTITLE: " . $p->title . "\n\nContent:\n" . $p->content);
	insert_new_staff_alert("u article update",JURI::current());
}






function pup_homepage($db)
{
	$document = JFactory::getDocument();

	$document->setTitle( "User Submitted Articles | InMotion Hosting" );

	$latest_articles = pup_grab_articles($db,"latest",10);

	echo "
		<div class='item-page'>
                        <div class='page-header'><h1 class='pup_title'>User Submitted Articles</h1></div>
			<div>
				<p>Welcome to <strong>U</strong>, our repository of helpful tips and tricks submitted by <strong>You</strong>! Anyone can publish an article to our Support Center, and it's very easy to do so.</p>
				<div style='width:300px; float:left;'>
					<h2>Latest Articles</h2>
					$latest_articles
				</div>

				<div style='width:300px; float:right;'>
					<h2>Write</h2>
					<p>Would you like to publish an article? <a href='/support/u/write'>Click here!</a>
					<p style='text-align:right;'><a href='/support/u/write' class='btn btn-primary'>Publish a tutorial!</a></p>
				</div>

				<div style='clear:both;'></div>
			</div>
		</div>
			
	";
}






function pup_grab_articles($db,$type,$limit)
{
	$no_articles = "<p>No articles have been published yet. <a href='/support/u/write'>Be the first to publish an article!</a></p>";

	switch($type)
	{
		case "latest":
			$query = "SELECT * FROM #__pup WHERE `approved` > -1 ORDER BY `id` DESC;";
			$db->setQuery($query);
			$results = $db->loadObjectList();
			if( $results )
			{
				foreach($results as $k => $v)
					$article_list .= "<li><a href='/support/u/" . htmlentities($v->alias,ENT_QUOTES) . "'>" . htmlentities($v->title,ENT_QUOTES) . "</a></li>";
				return "<ul>$article_list</ul>";
			}
			else
				return $no_articles;
			break;
		default:
			return $no_articles;
			break;
	}
}






function pup_send_staff_email($subject,$body)
{
	include_once("includes/includes_functions.php");
	cc_send_mail("bradm@inmotionhosting.com","daily_alerts@gadgets.inmotionhosting.com",$subject,$body);
}






?>
