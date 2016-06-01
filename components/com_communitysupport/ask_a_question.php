<?

display_question_submission_errors();

$url_for_ajax_search = get_url_for_ajax_search();

$welcome_message =  aaq_return_message();

$category_html = get_category_html($db);

$post_question_button = get_post_question_button($user);

$guest_we_need_your_email_tr = get_guest_we_need_your_email_tr($user);

    $min_number = 1;
    $max_number = 15;

    $random_number1 = mt_rand($min_number, $max_number);
    $random_number2 = mt_rand($min_number, $max_number);


?>

<style>
	table.table.table-striped.table-bordered.final-details tbody tr td,
	table.table.table-striped.table-bordered.final-details tbody tr th {
		text-align:left;
		vertical-align:top;
	}
	table.table.table-striped.table-bordered.final-details {
		margin-bottom:30px;
	}
	select#category_id,
	input#guest_email,
	input#cpanel_username_or_domain {
		margin:0px;
	}

	div.t-and-b h3 {
		margin:0px;
	}
	p.help-text {
		margin:5px 0px;
		font-size:12px;
		line-height:17px;
	}

	.aaq_step {
		display:none;
	}

	.aaq-step-next,
	span.btn.btn-primary.aaq-step-next {
		float:right;
		text-transform:none;
	}
	.aaq-step-prev,
	span.btn.btn-primary.aaq-step-prev {
                float:left;
		text-transform:none;
        }

	.step-heading {
		text-align:center;
		margin:-10px 0px 0px 0px;
		padding:15px 0px;
		border-bottom:1px solid #ddd;
		background:#eee;
	}

	div.step-heading h2 {
		margin:0px;
		font-weight:normal;
	}

	.step-heading h2 span {
		color:#000;
		padding-left:15px;
	}

	.step-heading-steps {
		margin:0px 0px 30px 0px;
		font-size:11px;
	}

	.step-footer-steps {
		clear:both;
		border-top:1px solid #ddd;
		padding-top:15px;
		margin-top:15px;
	}

</style>
<?php #$key = md5($_SERVER["REMOTE_ADDR"]);
#setcookie('valid',$key,time() + 600);
 ?>
<form method='post' action='/support/community-support/submit-question' name='questionForm' id='questionForm'>

<div class='aaq_step' name='aaq_step_1' id='aaq_step_1'>

	<div class='step-heading'>
		<h2>Step 1 of 4: <span>Instructions</span></h2>
	</div>
	<div class='step-heading-steps'>
		<a class='aaq-step-next' href="javascript:display_aaq_step('2');">Next step</a>
	</div>

	<div style='clear:both;'></div>

	<div style='float:right; margin:0px 0px 15px 15px; width:200px;'>
                <p>
                        Should I ask this question?<br />
                        <span style='color:#aaa; font-size:12px; line-height:15px;'>Some questions are best handled over a verified ticket or chat. If you're seeking assistance with any of the items below, click the link for further detail:</span>
                </p>
                <ul style='font-size:12px;'>
                        <li><a href='/support/website/backup-and-restore/restoring-a-backup?tsrc=siatq' target='_blank'>backup restorations</a></li>
                        <li><a href='/support/website/hacks/steps-to-take-after-a-hack?tsrc=siatq' target='_blank'>hacked sites</a></li>
                        <li><a href='/support/website/website-unavailable/why-is-my-website-down?tsrc=siatq' target='_blank'>websites down</a></li>
                        <li><a href='/support/website/website-unavailable/my-website-is-suspended?tsrc=siatq' target='_blank'>suspended accounts</a></li>
                </ul>
        </div>

        <? echo $welcome_message; ?>

        <p>Be sure to be specific with your question. The more details you can provide, the better the answers will be. If you're having a problem, please include steps that we can take to replicate the problem.</p>
	<p><font color="red">Keep in mind that your question will be public, so please don't post any sensitive information, such as email addresses, usernames, or passwords.</font></p>

	<div class='step-footer-steps'>
		<span class='btn btn-primary aaq-step-next' onClick="display_aaq_step('2');">Next step</span>
	</div>

</div>

<div class='aaq_step' name='aaq_step_2' id='aaq_step_2'>

	<div class='step-heading'>
		<h2>Step 2 of 4: <span>Type your question</span></h2>
	</div>
	<div class='step-heading-steps'>
		<a class='aaq-step-prev' href="javascript:display_aaq_step('1');">Previous step</a>
                <a class='aaq-step-next' href="javascript:display_aaq_step('3');">Next step</a>
        </div>

	<div class='t-and-b'>

				<h3>Question&nbsp;Summary:</h2>
				<p class='help-text'>
                                        Summarize your question in 4 or more words.<br />
                                        <span style='color:#aaa;'>Example: <i>I cannot log into cPanel</i></span>
				</p>
                                <? echo $question_question_warning; ?>
                                <input maxlength="70" type='text' name='question' id='question' style='width:97%; display:inline;' onKeyUp="enough_details_for_question_submission();" value="<? echo htmlspecialchars($_POST['question_question'],ENT_QUOTES); ?>" />
                                <div>
                                        <div style='color:#c52228; float:right; margin-right:18px;' name='question_required' id='question_required'>* required field</div>
                                        <div style='clear:both;'></div>
                                        <div style='color:#78C421; float:right; margin-right:18px; display:none;' name='question_required_success' id='question_required_success'>&#10004; required field</div>
                                </div>
                                <h3>Question&nbsp;Details:</h2>
				<p class='help-text'>
                                        <span style='color:#666;'>In <span style='color:#000;'>10 or more words</span>, tell us more about your question.<br />
                                        <span style='color:#aaa;'>Example: <i>When I type in my cPanel username and password, it is rejected. What should I do, can I reset it?</i></span>
				</p>
                                <? echo $question_details_warning; ?>
                                <textarea name='details' id='details' style='width:97%; height:100px; margin-bottom:0px;' onKeyUp="enough_details_for_question_submission();"><? echo htmlspecialchars($_POST['question_details'],ENT_QUOTES); ?></textarea>
                                <div>
                                        <div style='color:#c52228; margin-right:18px; float:right;' name='details_required' id='details_required'>* required field</div>
                                        <div style='clear:both;'></div>
                                        <div style='color:#78C421; float:right; margin-right:18px; display:none;' name='details_required_success' id='details_required_success'>&#10004; required field</div>
                                </div>
				<p><font color="red"><em>Please note: This question will be posted publicly. Please do not include email addresses, usernames, passwords, or other sensitive information!</em></font></p>
	</div>

	<div class='step-footer-steps'>
		<span class='btn btn-primary aaq-step-prev' onClick="display_aaq_step('1');">Previous step</span>
        	<span class='btn btn-primary aaq-step-next' onClick="display_aaq_step('3');">Next step</span>
	</div>

</div>

<div class='aaq_step' name='aaq_step_3' id='aaq_step_3'>

	<div class='step-heading'>
		<h2>Step 3 of 4: <span>Review previous questions</span></h2>
	</div>
	<div class='step-heading-steps'>
		<a class='aaq-step-prev' href="javascript:display_aaq_step('2');">Previous step</a>
                <a class='aaq-step-next' href="javascript:display_aaq_step('4');">Last step!</a>
        </div>

	<h3>We may have documentation about your question, let's see...</h3>

	<p>We'll try searching our support center for tutorials that may help answer your question. If they don't (or there are no search results) and you need further assistance, <a  href="javascript:display_aaq_step('4');">continue to the last step</a>, where we'll ask for a few final details before publishing your question to our support center.</p>

	<div style='margin:0px;max-height:300px;overflow:scroll;width:100%;'>
                                <div style='text-align:center;' name='ajax_search_status' id='ajax_search_status'></div>
                                <div name='ajax_search_info' id='ajax_search_info'></div>
                                <div name='question_search_results' id='question_search_results'></div>
                                <input type='hidden' name='last_ajax_query_sent' id='last_ajax_query_sent' style='width:200px; display:block;' />
                                <input type='hidden' name='currently_searching' id='currently_searching' value='0' />
                                <input type='hidden' name='number_ajax_search_results' id='number_ajax_search_results' value='0' />
	</div>

	<div class='step-footer-steps'>
		<span class='btn btn-primary aaq-step-prev' onClick="display_aaq_step('2');">Previous step</span>
		<span class='btn btn-primary aaq-step-next' onClick="display_aaq_step('4');">Last step!</span>
	</div>

</div>

<div class='aaq_step' name='aaq_step_4' id='aaq_step_4'>

	<div class='step-heading'>
		<h2>Step 4: <span>Submit your question!</span></h2>
	</div>

	<div class='step-heading-steps'>
                <a class='aaq-step-prev' href="javascript:display_aaq_step('3');">Previous step</a>
        </div>

	<p>When you click <strong>post your question</strong> below, the <em>question summary</em> and <em>question details</em> that you entered in step 2 will be posted to our support center. If you have any sensitive information there, such as usernames and passwords, please <a href="javascript:display_aaq_step('2');">go back and remove it</a>.</p>

	<table class='table table-striped table-bordered final-details'>
		<tr>
                	<th>Category</th>
			<td><? echo $category_html; ?></td>
		</tr>
		<tr><td colspan='2'><p class='help-text'>Please select a category above that best describes your question.</p></td></tr>
		<? echo $guest_we_need_your_email_tr; ?>
		<tr>
			<th>Domain name</td>
			<td><input type='text' name='cpanel_username_or_domain' id='cpanel_username_or_domain' value='<? echo htmlentities($_POST['cpanel_username_or_domain'],ENT_QUOTES); ?>' /></td>
		</tr>
		<tr>
			<td colspan='2'>
				<p class='help-text'>If you are currently a customer of InMotion Hosting, please enter EITHER your cPanel username or your main domain name above.<br />
				<u>This information will only be available to InMotion Hosting staff</u>, it will not show on your question page.</p>
			</td>
		</tr>
	</table>
<?php echo JHtml::_( 'form.token' ); ?>
<input id="website" class="website" name="website" type="text"/>

<?php echo $random_number1 . ' + ' . $random_number2 . ' = '; ?>

        <input name="captchaResult" type="text" size="2" />

        <input name="firstNumber" type="hidden" value="<?php echo $random_number1; ?>" />
        <input name="secondNumber" type="hidden" value="<?php echo $random_number2; ?>" />

	<? echo $post_question_button; ?>

	<input type='hidden' name='last_ajax_query_sent' id='last_ajax_query_sent' style='width:200px; display:block;' />
	<input type='hidden' name='currently_searching' id='currently_searching' value='0' />
	<input type='hidden' name='number_ajax_search_results' id='number_ajax_search_results' value='0' />

</div>
</form>

<script type='text/javascript'>

        function display_aaq_step(aaqstep)
        {
                for(i = 1;i <= 4;i++)
                {
                        step_id = 'aaq_step_' + i.toString();
                        document.getElementById(step_id).style.display = 'none';
                }

                step_id = 'aaq_step_' + aaqstep;

                if(step_id == "aaq_step_3")
                {
                        if(enough_details_for_question_submission() == false)
                        {
                                document.getElementById('aaq_step_2').style.display = 'block';
                                alert('Your question is incomplete. Please be sure to enter a full summary and details.');
                        }
                        else
                        {
                                document.getElementById(step_id).style.display = 'block';
                                get_ajax_search_results();
                        }
                }
                else
                {
                        document.getElementById(step_id).style.display = 'block';
                }
        }

        function postQuestion() {
                rf = requiredFields();
                if( rf != true )
                {
                        alert(rf);
                }
                else
                {
                        document.getElementById("questionForm").submit();
                }
        }

        function requiredFields() {
                pQ_e = jQuery('#guest_email').val().trim();
                if(pQ_e.length < 1)
                        return "Please enter your email address";
                if(pQ_e.indexOf("@") == -1 || pQ_e.indexOf(".") == -1)
                        return "Your email address does not appear to be formatted correctly";
                return true;
        }

display_aaq_step('1');

function get_ajax_search_results()
{
	user_question = jQuery("#question").val();
	user_details = jQuery("#details").val();


	run_ajax = true;
	if(run_ajax == true)
	{
		jQuery("#currently_searching").val("1");
		jQuery("#ajax_search_status").html("Searching...");
		jQuery("#ajax_search_info").html("<strong>Search Results</strong>");
		jQuery("#question_search_results").html("");
		jQuery("#last_ajax_details_sent").val(user_details);
		jQuery.get("<? echo $url_for_ajax_search; ?>",
			{searchword:user_question,rf:'json',details:user_details},
			function(data,status){
				var obj = JSON.parse(data);
				results = 0;
				jQuery.each(obj, function(index,value) {
					if( value.url != undefined )
					{
						jQuery("#question_search_results").append("<a href='" + value.url + "?tsrc=aaq' target='_blank'>" + value.title + "</a><br />" + value.description + "<br /><br />");
						results++;
					}
				});
				jQuery("#ajax_search_status").slideUp('slow');
				jQuery("#currently_searching").val("0");
				if( results == 0 )
				{
					jQuery("#any-these-links-help").slideUp('slow');
					jQuery("#question_search_results").html("No search results, looks like you have a good question for us!");
				}
				jQuery("#number_ajax_search_results").val(results);
		        });
	}
}

function enough_details_for_question_submission()
{
	able_to_submit = 0;

	question = jQuery("#question").val();
	exploded_question = question.split(" ");
	exploded_question = jQuery.grep(exploded_question, function(n, i){
		return (n !== "" && n != null);
	});
	words_in_question = exploded_question.length;
	question_length = jQuery("#question").val().length;
	if( question_length < 1 || words_in_question < 4)
	{
		jQuery("#question_required").slideDown("slow");
		jQuery("#question_required_success").slideUp("slow");
	}
	else
	{
		jQuery("#question_required").slideUp("slow");
		jQuery("#question_required_success").slideDown("slow");
		able_to_submit++;
	}

	details = jQuery("#details").val();
	exploded_details = details.split(" ");
	exploded_details = jQuery.grep(exploded_details, function(n, i){
                return (n !== "" && n != null);
        });
	words_in_details = exploded_details.length;
	details_length = jQuery("#details").val().length;
        if( details_length < 1 || words_in_details < 10)
        {
                jQuery("#details_required").slideDown("slow");
		jQuery("#details_required_success").slideUp("slow");
        }
        else
        {
                jQuery("#details_required").slideUp("slow");
		jQuery("#details_required_success").slideDown("slow");
		able_to_submit++;
        }

	if(able_to_submit == 2)
	{
		jQuery("#goto_step_2").removeAttr("disabled");
		return true;
	}
	else
	{
		return false;
		jQuery("#goto_step_2").attr("disabled","disabled");
	}
}

</script>






<?


/**
 * allow for custom messages, like if we won't be answering questions on a holiday
 */
function aaq_return_message()
{
	$welcome_message = "<p>It's time to get an answer! Our InMotion Hosting Support Team monitors all questions asked within the Community, and we guarantee a response within 60 minutes for current customers (<strong>8am - 9pm EST, Monday - Friday</strong>)!</p>";

	if( date("m-d",time()) == "12-25" )
        	$welcome_message = "<p>It's time to get an answer! Our InMotion Hosting Support Team monitors all questions asked within the Community, and we guarantee a response within 60 minutes for current customers (8am - 9pm EST, Monday - Friday)! <strong>Please note</strong>, this excludes Christmas day.</p>";
	if( date("m-d",time()) == "07-03" )
                $welcome_message = "<p>It's time to get an answer! Our InMotion Hosting Support Team monitors all questions asked within the Community, and we guarantee a response within 60 minutes for current customers (8am - 9pm EST, Monday - Friday)! <strong>Please note</strong> this excludes Independence Day of which we are celebrating on July 3rd, 2015.</p>";


	if( date("m-d",time()) == "01-01" )
        	$welcome_message = "<p>It's time to get an answer! Our InMotion Hosting Support Team monitors all questions asked within the Community, and we guarantee a response within 60 minutes for current customers (8am - 9pm EST, Monday - Friday)! <strong>Please note</strong>, this excludes New Year's day.</p>";

	if( date("m-d",time()) == "05-30" )
        	$welcome_message = "<p>It's time to get an answer! Our InMotion Hosting Support Team monitors all questions asked within the Community, and we guarantee a response within 60 minutes for current customers (8am - 9pm EST, Monday - Friday)! <strong>Please note</strong>, this excludes today, <a href='http://en.wikipedia.org/wiki/Memorial_Day' target='_blank'>Memorial Day</a>.</p>";

//	if( date("m-d",time()) == "07-03" OR date("m-d",time()) == "07-04")
  //      	$welcome_message = "<p>It's time to get an answer! Our InMotion Hosting Support Team monitors all questions asked within the Community, and we guarantee a response within 60 minutes for current customers (8am - 9pm EST, Monday - Friday)! <strong>Please note</strong>, this excludes July 4th, <a href='http://en.wikipedia.org/wiki/Independence_Day_(United_States)' target='_blank'>Independence Day</a>.</p>";

	if( date("m-d",time()) == "08-31" OR date("m-d",time()) == "09-01")
                $welcome_message = "<p>It's time to get an answer! Our InMotion Hosting Support Team monitors all questions asked within the Community, and we guarantee a response within 60 minutes for current customers (8am - 9pm EST, Monday - Friday)! <strong>Please note</strong>, this excludes Sept 1st, <a href='http://en.wikipedia.org/wiki/Labor_Day' target='_blank'>Labor Day</a>.</p>";
	if( date("m-d",time()) == "11-26" )
               $welcome_message = "<p>It's time to get an answer! Our InMotion Hosting Support Team monitors all questions asked within the Community, and we guarantee a response within 60 minutes for current customers (8am - 9pm EST, Monday - Friday)! <strong>Please note</strong>, this excludes <a href='http://en.wikipedia.org/wiki/Thanksgiving' target='_blank'>Thanksgiving Day</a>.</p>";

//Added for working 2 weeks in support

    if( date("m",time()) == "03" )
            $welcome_message = "<p>It's time to get an answer! Our InMotion Hosting Support Team monitors all questions asked within the Community, and we guarantee a response within 60 minutes for current customers (<strong>8am - 5pm EST, Monday - Friday</strong>)!</p>";
        if( date("m",time()) == "02" )            $welcome_message = "<p>It's time to get an answer! Our InMotion Hosting Support Team monitors all questions asked within the Community, and we guarantee a response within 60 minutes for current customers (<strong>8am - 5pm EST, Monday - Friday</strong>)!</p>";

	return $welcome_message;
}

/**
 * determine if we need to display any submission errors
 */
function display_question_submission_errors()
{
	if ($_POST['submission_errors'])
	{
        	$errors = json_decode($_POST['submission_errors']);
	        foreach($errors as $k => $v)
        	        JFactory::getApplication()->enqueueMessage($v, 'danger');
	}
}

/**
 * what url do we get ajax search results from
 */
function get_url_for_ajax_search()
{
	if("enable_google_search" == "enable_google_search")
        	return "/support/gadgets/search/";
	else
        	return "/support/search";
}

/**
 * grab a list of question categories and throw them into a select statement
 */
function get_category_html($db)
{
	$query = "SELECT * FROM #__question_categories ORDER BY `id` ASC;";
	$db->setQuery($query);
	$categories = $db->loadObjectList();
	$category_html = "<select name='category_id' id='category_id' onChange='previewQuestion()' style='color:#000;'>";
	foreach($categories as $k => $v)
        	$category_html .= "<option value='" . $v->id . "'>" . $v->title . "</option>";
	$category_html .= "</select>";

	return $category_html;
}

/**
 * is the form going to be submitted with input button, or javascript function?
 */
function get_post_question_button($user)
{
	$post_question_button = "<p><input type='submit' value='Post your question!' class='btn btn-success' style='text-transform:none;'/></p>";
	if ($user->guest == true)
        	$post_question_button = "<p><button class='btn btn-success' style='text-transform:none;' onClick=\"postQuestion();return false;\" />Post your question!</button></p>";

	return $post_question_button;
}

/**
 * do we need to ask this user for their email address?
 */
function get_guest_we_need_your_email_tr($user)
{
	if ($user->guest == true)
        	return "
	        <tr>
        	        <th>Email Address</th>
                	<td><input type='text' name='guest_email' id='guest_email' value='" . htmlentities($_POST['guest_email'],ENT_QUOTES) . "' /></td>
	        </tr>
        	<tr>
                	<td colspan='2'>
                        	<p class='help-text'>Please enter an email address we can use to email you when an answer has been posted to your question.<br />
				<u>This information will only be available to InMotion Hosting staff</u>, it will not show on your question page.</p>
	                </td>
	        </tr>
	        ";
	return "";
}


?>
