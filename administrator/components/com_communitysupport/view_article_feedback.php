<?

include_once("communitysupport_functions.php");

$staff_ips = return_staff_ips();

if( ! $_GET['start_date'] )
	$start_date = date("Y-m-d H:m:s",time());
else
	$start_date = $_GET['start_date'];


if( ! $_GET['end_date'] )
        $end_date = date("Y-m-d H:m:s",time());
else
        $end_date = $_GET['end_date'];

$grab_editor_username_checked = "";
if( $_GET['grab_editor_username'] == 1 )
	$grab_editor_username_checked = "checked";

$feedback_without_trac_checked = "";
if( $_GET['feedback_without_trac'] == 1 )
        $feedback_without_trac_checked = "checked";

$feedback_with_trac_checked = "";
if( $_GET['feedback_with_trac'] == 1 )
        $feedback_with_trac_checked = "checked";

$user_typed_feedback_checked = "";
if( $_GET['user_typed_feedback'] == 1 )
	$user_typed_feedback_checked = "checked";

$hide_referer_data_checked = "";
if( $_GET['hide_referer_data'] == 1 )
        $hide_referer_data_checked = "checked";

$from_launch_chat_checked = "";
if( $_GET['from_launch_chat'] == 1)
	$from_launch_chat_checked = "checked";

$user_has_been_emailed_checked = "";
if( $_GET['user_has_been_emailed'] == 1)
        $user_has_been_emailed_checked = "checked";

$user_typed_email_address_checked = "";
if( $_GET['user_typed_email_address'] == 1)
	$user_typed_email_address_checked = "checked";

$author_select = return_select_list_of_authors($db);

$available_ratings = array("1","-1");
$rating_select = "<select name='rating' id='rating'><option></option>";
foreach($available_ratings as $k => $v)
{
	$selected = "";
	if( $_GET['rating'] == $v )
		$selected = "selected";

	$rating_select .= "<option value='$v' $selected>$v</option>";
}
$rating_select .= "</select>";





if( $_POST['ftask'] == "addtrac" )
{
	$query = "UPDATE #__feedback SET `trac` = " . $_POST['trac_number'] . " WHERE `id` = " . $_POST['feedback_id'] . " LIMIT 1;";
	$db->setQuery($query);
	try { $result = $db->execute(); } catch (Exception $e) { echo "<h1>ERROR!!!!</h1>"; }
}






if( isset($_GET['create_trac_ticket_for_feedback_id']) AND is_numeric($_GET['create_trac_ticket_for_feedback_id']) )
{
	$query = "
	SELECT `feedback`.*, `content`.`title`,`content`.`alias`
	FROM	#__feedback as `feedback`, #__content as `content`
	WHERE	`feedback`.`id` = " . $_GET['create_trac_ticket_for_feedback_id'] . " AND
		`content`.`id` = `feedback`.`page_id`
	;
	";
	$db->setQuery($query);
	$results = $db->loadObject();

	echo "	<h1>Paste this into a track ticket</h1>
		<h2>Trac ticket title</h2>
		<input type='text' style='width:800px; display:block' value='User Feedback - " . $results->id . " - " . htmlentities($results->title,ENT_QUOTES) . "' />
		<h2>Trac ticket content</h2>
		<textarea style='width:800px; display:block; height:300px;'>||=Feedback id=||" . $results->id . "||
||=User ip=||" . $results->user_ip . "||
||=Date of feedback=||" . date('Y-m-d H:i:s',$results->timestamp_n) . "||
||=Article Title=||" . htmlentities($results->title,ENT_QUOTES) . "||
||=Article Alias=||" . $results->alias . "||
||=Feedback Rating=||" . $results->feedback_value . "||
||=Feedback=||" . htmlentities($results->feedback,ENT_QUOTES) . "||</textarea>
	";
	echo "<pre>"; print_r($results); echo "</pre>";
}






// create a form with pre-filled values to make it easier for staff to email the customer
if( isset($_GET['email_user_for_feedback_id']) AND is_numeric($_GET['email_user_for_feedback_id']) )
{
        $query = "
        SELECT `feedback`.*, `content`.`title`,`content`.`alias`,`content`.`catid`
        FROM    #__feedback as `feedback`, #__content as `content`
        WHERE   `feedback`.`id` = " . $_GET['email_user_for_feedback_id'] . " AND
                `content`.`id` = `feedback`.`page_id`
        ;
        ";
        $db->setQuery($query);
        $results = $db->loadObject();


	if(!class_exists('ContentHelperRoute')) require_once (JPATH_SITE . '/components/com_content/helpers/route.php');
	$article_url = JRoute::_(ContentHelperRoute::getArticleRoute($results->page_id . ":" . $results->alias, $results->catid));
	//
	// http://stackoverflow.com/questions/6746568/using-jroute-in-joomla-administrator
	//
	// better will be check if SEF option is enable!
	$router = new JRouterSite(array('mode'=>JROUTER_MODE_SEF));
	$article_url = $router->build($article_url)->toString(array('path', 'query', 'fragment'));
	// SEF URL !
	$article_url = str_replace('/administrator/', '', $article_url);
	//and now the tidying, as Joomlas JRoute makes a cockup of the urls.
	$article_url = str_replace('component/content/article/', '', $article_url);
	$article_url = str_replace('/supportsupport','http://www.inmotionhosting.com/support/',$article_url);

	echo "
	<form method='post' action='index.php?option=com_communitysupport&task=view_article_feedback'>
		<h1>Email the user:</h1>
		<h2>To:</h2>
		<input type='text' name='email_to' id='email_to' value='" . htmlentities($results->user_email,ENT_QUOTES) . "' style='width:800px; display:block;' />
		<h2>Subject:</h2>
		<input type='text' name='email_subject' id='email_subject' value='Re: Thank you for your feedback | InMotion Hosting' style='width:800px; display:block;'/>
		<h2>Body:</h2>
<textarea name='email_body' id='email_body' style='width:800px; height:250px;'>Hi,

-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --
On " . date('l',$results->timestamp_n + (3*60*60)) . " (" . date('M jS',$results->timestamp_n + (3*60*60)) . "), you submitted the following feedback regarding our article entitled, \"" . htmlentities($results->title,ENT_QUOTES) . "\":

" . htmlentities($results->feedback,ENT_QUOTES) . "
-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --

I just wanted to send you a quick email to let you know that I was able to improve the article based on your feedback. If you wanted to see the changes, here's a link to the page:
$article_url

Thanks again for taking the time and providing us feedback, we appreciate it!
- " . $user->username . "
</textarea>
		<p class='alert alert-danger'>Ensure the <strong>URL</strong> in the email above and the <strong>name</strong> in the siguature is correct before sending.</p>
		<input type='submit' name='send_user_email' id='send_user_email' class='btn btn-primary' value='Email User' />
		<input type='hidden' name='feedback_id' id='feedback_id' value='" . $results->id . "' />
		<input type='hidden' name='task_a' id='task_a' value='do_send_user_email' />
	</form>
	";
	echo "<pre>"; print_r($results); echo "</pre>";
}






if($_POST['task_a'] == "do_send_user_email" )
{
	// log the email in the database
	//
	//
	$query = "
	INSERT INTO #__feedback_emails
	(`id`,`feedback_id`,`author_id`,`email_to`,`email_subject`,`email_body`,`email_date_sent`)
	VALUES(NULL," . $_POST['feedback_id'] . "," . $user->id . ",'" . addslashes($_POST['email_to']) . "','" . addslashes($_POST['email_subject']) . "','" . addslashes($_POST['email_body']) . "',CURRENT_TIMESTAMP);
	";
	$db->setQuery($query);
	$results = $db->execute();
	echo "<p class='alert alert-success'>Log of email being sent has been added to the database</p>";

	// send the email
	//
	//
	include_once("../includes/includes_functions.php");
	cc_send_mail("customer_experience@inmotionhosting.com",$_POST['email_to'],$_POST['email_subject'],nl2br($_POST['email_body']));
	echo "<p class='alert alert-success'>Email has been sent!</p>";
}






?>






<form>
	<table class='table table-striped'>
		<tr><th>From</th><td><input type='text' name='start_date' id='start_date' value='<? echo $start_date; ?>' /></td></tr>
		<tr><th>End</th><td><input type='text' name='end_date' id='end_date' value='<? echo $end_date; ?>' /></td></tr>
		<tr><th>select editor username</th><td><input type='checkbox' name='grab_editor_username' id='grab_editor_username' value='1' <? echo $grab_editor_username_checked; ?> /></td></tr>
		<tr><th>show only feedback without a trac ticket</th><td><input type='checkbox' name='feedback_without_trac' id='feedback_without_trac' value='1' <? echo $feedback_without_trac_checked; ?> /></td></tr>
		<tr><th>show only feedback WITH a trac ticket</th><td><input type='checkbox' name='feedback_with_trac' id='feedback_with_trac' value='1' <? echo $feedback_with_trac_checked; ?> /></td></tr>
		<tr><th>Only feedback where usered <strong>TYPED</strong> feedback</th><td><input type='checkbox' name='user_typed_feedback' id='user_typed_feedback' value='1' <? echo $user_typed_feedback_checked; ?> /></td></tr>
		<tr><th>Only feedback where usered <strong>TYPED</strong> email address</th><td><input type='checkbox' name='user_typed_email_address' id='user_typed_email_address' value='1' <? echo $user_typed_email_address_checked; ?> /></td></tr>
		<tr><th>Hide referer data</th><td><input type='checkbox' name='hide_referer_data' id='hide_referer_data' value='1' <? echo $hide_referer_data_checked; ?> /></td></tr>
		<tr><th>From prechat survey /support/launch-chat</th><td><input type='checkbox' name='from_launch_chat' id='from_launch_chat' value='1' <? echo $from_launch_chat_checked; ?> /></td></tr>
		<tr><th>Show checks if user has been emailed</th><td><input type='checkbox' name='user_has_been_emailed' id='user_has_been_emailed' value='1' <? echo $user_has_been_emailed_checked; ?> /></td></tr>
		<tr><th>Only show this author</th><td><? echo $author_select; ?></td></tr>
		<tr><th>Only show this rating</th><td><? echo $rating_select; ?></td></tr>
		<tr><td colspan='2' style='color:red; font-size:11px;'>Results will NOT include office IP addresses: <? echo implode("&nbsp;&nbsp;&nbsp;",$staff_ips); ?></td></tr>
	</table>
	<input type='submit' value='submit' class='btn btn-primary' />
	<input type='hidden' name='option' id='option' value='com_communitysupport' />
	<input type='hidden' name='task' id='task' value='view_article_feedback' />
</form>






<?

if( $_GET['start_date'] AND $_GET['end_date'] )
{
	echo "	<div style='color:red;width:100%; height:30px; border:1px solid #ddd; position:fixed; bottom:32px; left:0px; background:#efefef; text-align:center;'>
		<a href='#all-stats'>All Stats</a> | <a href='#author-stats'>Author Stats</a> | <a href='#ip-stats'>IP Stats</a> | <a href='#per-article-stats'>Per Article Stats</a>
		</div>
	";

	$start_date = strtotime($_GET['start_date']) - (60*60*6);
	$end_date = strtotime($_GET['end_date']) - (60*60*5);

	$sql_feedback_without_trac = "";
	if( $_GET['feedback_without_trac'] == 1 )
		$sql_feedback_without_trac = " AND (`fb`.`trac` = 0 AND `fb`.`feedback` != '') ";

	$sql_only_this_author = "";
        if( $_GET['author_id'] != "" AND is_numeric($_GET['author_id']) )
                $sql_only_this_author = " AND (`c`.`created_by` = " . $_GET['author_id'] . ") ";

	$sql_only_show_this_rating = "";
	if( $_GET['rating'] == "-1" OR $_GET['rating'] == "1" )
		$sql_only_show_this_rating = " AND (`fb`.`feedback_value` = " . $_GET['rating'] . ") ";

	$sql_user_typed_feedback = "";
	if( $_GET['user_typed_feedback'] == "1" )
		$sql_user_typed_feedback = " AND (`fb`.`feedback` != '') ";

	$sql_user_typed_email_address = "";
        if( $_GET['user_typed_email_address'] == "1" )
                $sql_user_typed_email_address = " AND (`fb`.`user_email` LIKE '%@%') ";

	$sql_with_trac = "";
	if( $_GET['feedback_with_trac'] == "1" )
		$sql_with_trac = " AND (`fb`.`trac` > 1) ";

	$sql_launch_chat = "";
	if( $_GET['from_launch_chat'] == "1" )
		$sql_launch_chat = " AND (`fb`.`referer` LIKE '%/launch-chat/%') ";

	$imploded_staff_ips = implode("','",$staff_ips);
	$query = "
	SELECT fb.*, c.id as `article_id`, c.title, c.alias, c.created_by, c.created, c.modified, c.modified_by, u.username
	FROM #__feedback as `fb`, #__content as `c`, #__users as `u`
	WHERE	`fb`.`timestamp_n` BETWEEN '$start_date' AND '$end_date' AND
		`fb`.`option` = 'com_content' AND
		`fb`.`view` = 'article' AND
		`fb`.`page_id` = `c`.`id` AND
		`c`.`created_by` = `u`.`id` AND
		`fb`.`user_ip` NOT IN('$imploded_staff_ips')
		$sql_feedback_without_trac
		$sql_only_this_author
		$sql_only_show_this_rating
		$sql_user_typed_feedback
		$sql_with_trac
		$sql_launch_chat
		$sql_user_typed_email_address
	;
	";

	// die($query);
	// echo "<pre>$query</pre>";

	$db->setQuery($query);
	$results = $db->loadObjectList();

	// echo "<pre>"; print_r($results); echo "</pre>";

	echo "	<a name='all-stats'></a>
		<h1>Results</h1>
		<table class='table'>
			<tr>
				<th>#</th>
				<th>id</th>
				<th>time</th>
				<th>user ip</th>
				<th>rating</th>
				<th>feedback</th>
                                <th>email</th>
				<th>page</th>
				<th>author</th>
				<th>created</th>
				<th style='background:#eee;'>last editor</th>
				<th style='background:#eee;'>last edited</th>
				<th>Trac</th>
			</tr>
	";
	foreach($results as $k => $v)
	{
		// what should trac show?
		if(	$v->trac <= 0 AND
			($v->feedback != "" OR $v->user_email != "")
		)
			$trac_text = "
			<form method='post' style='margin:0px; padding:0px; target='_blank''>
				<input type='hidden' name='ftask' id='ftask' value='addtrac' />
				<input type='hidden' name='feedback_id' id='feedback_id' value='" . $v->id . "' />
				<input type='text' name='trac_number' id='trac_number' style='width:30px;' />
			</form>
			";
		elseif( $v->trac <= 1 )
			$trac_text = "<span style='color:#bbb;'>N/A</span>";
		else
		{
			$trac_text = "<a class='label label-info' href='https://trac.imhtech.net/CustomerCommunity/ticket/" . $v->trac . "' target='_blank'>" . $v->trac . "</a>";

			switch($v->feedback_value)
	                {
        	                case "1":
                	                $total_good_with_trac_ticket++;
                        	        break;
	                        case "-1":
        	                        $total_bad_with_trac_ticket++;
                	                break;
	                }
		}

		// do we need to grab the editor's username?
		$last_editor = $v->modified_by;
		if($_GET['grab_editor_username'] == 1)
		{
			$query = "SELECT `username` FROM #__users WHERE `id` = " . $v->modified_by . ";";
			$db->setQuery($query);
			$last_editor_results = $db->loadObjectList();
			$last_editor = $last_editor_results[0]->username;
		}

		$fbbg = "#FFE5E5";
		if($v->feedback_value == 1)
			$fbbg = "#E5FFE5";

		// keep track by author
		if( $v->feedback_value == 1 )
			$per_author[$v->username]['good']++;
		if( $v->feedback_value == -1 )
			$per_author[$v->username]['bad']++;
		$per_author[$v->username]['total']++;
		$per_author_sum[$v->username] += $v->feedback_value;

		// keep track by ip
		if( $v->feedback_value == 1 )
                        $per_ip[htmlentities($v->user_ip,ENT_QUOTES)]['good']++;
                if( $v->feedback_value == -1 )
                        $per_ip[htmlentities($v->user_ip,ENT_QUOTES)]['bad']++;
                $per_ip[htmlentities($v->user_ip,ENT_QUOTES)]['total']++;

		// keep track by article
                if( $v->feedback_value == 1 )
                        $per_article[$v->article_id]['good']++;
                if( $v->feedback_value == -1 )
                        $per_article[$v->article_id]['bad']++;
                $per_article[$v->article_id]['total']++;
		$per_article_score[$v->article_id] += $v->feedback_value;
		$article_title[$v->article_id] = htmlentities($v->title,ENT_QUOTES);
		$article_alias[$v->article_id] = $v->alias;
		$article_author[$v->article_id] = $v->username;

		$counter++;

		switch($v->feedback_value)
		{
			case "1":
				$total_good++;
				break;
			case "-1":
				$total_bad++;
				break;
		}

		$why_article_no_good = "";
		if( $v->no_too_difficult == 1 )
			$why_article_no_good .= "<li style='background:#FFE5E5; padding:2px; margin-left:10px;'>The article is too difficult or too technical to follow.</li>";
		if( $v->no_bad_instructions == 1 )
			$why_article_no_good .= "<li style='background:#FFE5E5; padding:2px; margin-left:10px;'>There is a step or detail missing from the instructions.</li>";
		if( $v->no_incorrect == 1 )
			$why_article_no_good .= "<li style='background:#FFE5E5; padding:2px; margin-left:10px;'>The information is incorrect or out-of-date.</li>";
		if( $v->no_not_helpful == 1)
			$why_article_no_good .= "<li style='background:#FFE5E5; padding:2px; margin-left:10px;'>It does not resolve the question/problem I have.</li>";

		$how_did_you_find_us = "";
		switch( $v->how_did_you_find_us )
		{
			case 0:
				$how_did_you_find_us = "";
				break;
			case 1:
                                $how_did_you_find_us = "Using the search feature on your website.";
                                break;
			case 2:
                                $how_did_you_find_us = "Using another search engine (i.e. Google, Bing, Yahoo).";
                                break;
			case 3:
                                $how_did_you_find_us = "In an email you sent me.";
                                break;
			case 4:
                                $how_did_you_find_us = "On another page on your website.";
                                break;
			case 5:
                                $how_did_you_find_us = "On another website.";
                                break;
			case 6:
                                $how_did_you_find_us = "One of your staff members gave me this link.";
                                break;
			case 7:
                                $how_did_you_find_us = "Other";
                                break;
		}

		$link_to_create_trac_ticket = "index.php?option=com_communitysupport&task=view_article_feedback&create_trac_ticket_for_feedback_id=" . $v->id;
		$link_to_email_user = "index.php?option=com_communitysupport&task=view_article_feedback&email_user_for_feedback_id=" . $v->id;

		$html_showing_user_has_been_emailed = "";
		if( $_GET['user_has_been_emailed'] == "1" AND $v->user_email != "")
		{
			$query = "SELECT `id` FROM #__feedback_emails WHERE `feedback_id` = " . $v->id;
			$db->setQuery($query);
			$results_user_has_been_emailed = $db->loadObject();

			if($results_user_has_been_emailed)
				$html_showing_user_has_been_emailed = "<span style='color:green; font-weight:bold; background:#CCFFCC; padding:4px;'>Y</span>";
			else
				$html_showing_user_has_been_emailed = "<span style='color:red; font-weight:bold; background:#FFA8A8; padding:4px;'>X</span>";
		}

		$link_to_view_user_profile = "<a href='" . JURI::base() . "index.php?option=com_communitysupport&task=view_user_profile&identifyer=email&email=" . urlencode($v->user_email) . "' target='_blank'>P</a>";

		$link_to_view_user_profile_by_ip = "<a href='" . JURI::base() . "index.php?option=com_communitysupport&task=view_user_profile&identifyer=ip&ip=" . urlencode($v->user_ip) . "' target='_blank'>" . $v->user_ip . "</a>";

		$html_show_number_of_emails_sent_to_user = "(" . pass_email_address_return_number_of_emails_sent($db,$v->user_email) . " $link_to_view_user_profile)";

		echo "	<tr>
				<td>$counter</td>
				<td><a href='$link_to_create_trac_ticket' target='_blank'>" . $v->id . "</a></td>
				<td>" . date("Y-m-d H:m:s",$v->timestamp_n + (60*60*3)) . "</td>
				<td>$link_to_view_user_profile_by_ip</td>
				<td style='background:$fbbg;'>" . $v->feedback_value . "</td>
				<td>
					<div style='white-space:pre-wrap;'>" . htmlentities($v->feedback,ENT_QUOTES) . "</div>
					$why_article_no_good
				</td>
                                <td><a href='$link_to_email_user' target='_blank'>" . htmlentities($v->user_email,ENT_QUOTES) . "</a> $html_show_number_of_emails_sent_to_user $html_showing_user_has_been_emailed</td>
				<td><a href='/support/" . $v->alias . "' target='_blank'>" . htmlentities($v->title,ENT_QUOTES) . "</a></td>
				<td>" . $v->username . "</td>
				<td>" . $v->created . "</td>
				<td style='background:#eee;'>$last_editor</td>
				<td style='background:#eee;'>" . $v->modified . "</td>
				<td>$trac_text</td>
			</tr>
		";
		if( ($v->referer != "" OR $how_did_you_find_us != "") AND $_GET['hide_referer_data'] != "1" )
		{
			echo "
			<tr style='background:#DBEDFF;'>
				<td colspan='13'>
					<div style='float:left; width:150px;'><strong>How did you find us?</strong></div>
					<div>$how_did_you_find_us</div>
					<div style='clear:both;'></div>
					<div style='float:left; width:150px; margin-bottom:15px;'><strong>Referer</strong></div>
                                        <div>" . htmlentities($v->referer,ENT_QUOTES) . "</div>
                                        <div style='clear:both;'>
				</td>
			</tr>
			";
		}
	}
	echo "	</table>
		<h1>Positive / Negative Totals</h1>
		<table class='table' style='width:200px;'>
			<tr>
				<th>Positive</th>
				<th>Negative</th>
			</tr>
			<tr>
				<td style='background:#E5FFE5;'>$total_good</td>
				<td style='background:#FFE5E5;'>$total_bad</td>
			</tr>
			<tr>
                                <td style='background:#E5FFE5;'>" . round($total_good/($total_good+$total_bad)*100,2) . "%</td>
                                <td style='background:#FFE5E5;'>" . round($total_bad/($total_good+$total_bad)*100,2) . "%</td>
                        </tr>
		</table>
		<h1>User feedback and trac tickets</h1>
		<table class='table' style='width:200px;'>
                        <tr>
                                <th>Positive</th>
                                <th>Negative</th>
                        </tr>
                        <tr>
                                <td style='background:#E5FFE5;'>$total_good_with_trac_ticket</td>
                                <td style='background:#FFE5E5;'>$total_bad_with_trac_ticket</td>
                        </tr>
			<tr>
                                <td style='background:#E5FFE5;'>" . round($total_good_with_trac_ticket/$total_good*100,2) . "%</td>
                                <td style='background:#FFE5E5;'>" . round($total_bad_with_trac_ticket/$total_bad*100,2) . "%</td>
                        </tr>
                </table>
	";






	// echo "<pre>"; print_r($per_author); echo "</pre>";
	echo "	<a name='author-stats'></a>
		<h1>Author Stats</h1>
		<table class='table' style='width:500px;'>
			<tr>
				<th>#</th>
				<th>Author</th>
				<th>Good</th>
				<th>Bad</th>
				<th>Total</th>
				<th>Sum</th>
				<th>Good %</th>
			</tr>
	";
	if($per_author_sum)
	{
		arsort($per_author_sum);
		$counter = 0;
		foreach($per_author_sum as $pa_author => $pa_v)
		{
			$counter++;
			$pa_v_bg = "#E5FFE5";
			if($pa_v == 0)
				$pa_v_bg = "#ddd";
			if($pa_v < 0 )
				$pa_v_bg = "#FFE5E5";

			echo "	<tr>
					<td>$counter</td>
					<td>$pa_author</td>
					<td style='background:#E5FFE5;'>" . $per_author[$pa_author]['good'] . "</td>
					<td style='background:#FFE5E5;'>" . $per_author[$pa_author]['bad'] . "</td>
					<td>" . $per_author[$pa_author]['total'] . "</td>
					<td style='background:$pa_v_bg;text-align:center; font-size:30px;'>$pa_v</td>
					<td>" . round($per_author[$pa_author]['good']/$per_author[$pa_author]['total']*100,0) . "%</td>
				</tr>
			";
		}
	}
	echo "	</table>";






	// echo "<pre>"; print_r($per_ip); echo "</pre>";
	echo "  <a name='ip-stats'></a>
		<h1>IP Address Stats</h1>
		<div class='alert alert-info'>Only showing IP's with more than one vote (possible bot activity?)</div>
                <table class='table' style='width:500px;'>
                        <tr>
				<th>#</td>
                                <th>IP Address</th>
                                <th>Good</th>
                                <th>Bad</th>
                                <th>Total</th>
                        </tr>
        ";
	$counter = 0;
	if($per_ip)
	{
	        foreach($per_ip as $pi_ip => $pi_v)
        	{
			if( $pi_v['total'] > 1)
			{
				$counter++;
        		        echo "  <tr>
						<td>$counter</td>
                        		        <td>$pi_ip</td>
	                                	<td style='background:#E5FFE5;'>" . $pi_v['good'] . "</td>
	        	                        <td style='background:#FFE5E5;'>" . $pi_v['bad'] . "</td>
        	        	                <td>" . $pi_v['total'] . "</td>
                	        	</tr>
	                	";
			}
        	}
	}
        echo "  </table>";





	if($per_article_score)
	{
		echo "	<a name='per-article-stats'></a>
			<div style='width:100%;'>";
		$ppas = 1;
		while($ppas <= 2)
		{
			switch($ppas)
			{
				case 1:
					arsort($per_article_score);
					$ppas_float = "left";
					break;
				case 2:
					asort($per_article_score);
					$ppas_float = "right";
					break;
			}
		        echo "  <div style='float:$ppas_float; width:48%;'>
					<h1>Per Article Stats</h1>
	        		        <table class='table'>
        	        		        <tr>
                	        		        <th>#</td>
                        	        		<th>Article</th>
							<th>Author</th>
			                                <th>Good</th>
        			                        <th>Bad</th>
                			                <th>Total</th>
							<th>Sum</th>
		                        	</tr>
		        ";
		        $counter = 0;
		        foreach($per_article_score as $pa_id => $pa_v)
        		{
				if( $pa_v < 0 AND $ppas == 1)
					break;
				if( $pa_v > -1 AND $ppas == 2)
					break;

				$sum_bg = "#FFE5E5";
				if( $pa_v == 0 )
					$sum_bg = "#eee";
				if( $pa_v > 0 )
					$sum_bg = "#E5FFE5";

                		$counter++;
	                	echo "  <tr>
        	                	        <td>$counter</td>
                	                	<td><a href='/support/" . $article_alias[$pa_id] . "' target='_blank'>" . $article_title[$pa_id] . "</td>
						<td>" . $article_author[$pa_id] . "</td>
		                                <td style='background:#E5FFE5;'>" . $per_article[$pa_id]['good'] . "</td>
        		                        <td style='background:#FFE5E5;'>" . $per_article[$pa_id]['bad'] . "</td>
                		                <td>" . $per_article[$pa_id]['total'] . "</td>
						<td style='background:$sum_bg; font-weight:bold; font-size:20px; text-align:center;'>$pa_v</td>
	        	                </tr>
        	        	";
	        	}
	        	echo "  	</table>
				</div>
			";
			$ppas++;
		}
		echo "		<div style='clear:both;'></div>
			</div>
			<div style='clear:both;'></div>
		";
	}






}






function pass_email_address_return_number_of_emails_sent($db,$email_address)
{
	if($email_address == "")
		return "-1";
	$query = "SELECT count(`id`) as `emails_sent` FROM #__feedback_emails WHERE `email_to` = '" . addslashes($email_address) . "';";
	$db->setQuery($query);
	$results = $db->loadObject();
	return $results->emails_sent;
}






?>
