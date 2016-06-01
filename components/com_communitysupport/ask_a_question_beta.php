<?






// ********************************************************************************
// if information is being posted, then the question / details were not long enough
// ********************************************************************************
if( $_POST)
{
	$post_question_question =  htmlspecialchars($_POST['question_question'],ENT_QUOTES);
	$post_question_details =  htmlspecialchars($_POST['question_details'],ENT_QUOTES);
	if( substr_count($post_question_question," ") <= 2 )
		$question_question_warning = "
			<p style='color:red;'>Your question summary must be less than 70 characters and 4 or more words!</p>
		";
	if( substr_count($post_question_details," ") <= 8 )
                $question_details_warning = "
			<p style='color:red;'>The more details you add to your question, the easier it makes for others to give a more precise answer. Please type at least 10 words.</p>
                ";
}
?>






<script type="text/javascript">

function get_ajax_search_results(e)
{
	user_question = jQuery("#question").val();
	user_details = jQuery("#details").val();


	run_ajax = true;
	if(run_ajax == true)
	{
		jQuery('#wtpyq').slideUp('slow');
		jQuery("#currently_searching").val("1");
		jQuery("#ajax_search_status").html("Searching...");
		jQuery("#ajax_search_info").html("<strong>Search Results</strong>");
		// user_question = jQuery("#question").val();
		jQuery("#question_search_results").html("");
		// jQuery("#last_ajax_query_sent").val(user_question);
		jQuery("#last_ajax_details_sent").val(user_details);
		jQuery.get("/support/search",
			{searchword:user_question,rf:'json',details:user_details},
			function(data,status){
				// // jQuery("#brad_debug").html(data);
				var obj = JSON.parse(data);
				results = 0;
				jQuery.each(obj, function(index,value) {
					if( value.url != undefined )
					{
						jQuery("#question_search_results").append("<a href='" + value.url + "?tsrc=aaq' target='_blank'>" + value.title + "</a><br />" + value.description + "<br /><br />");
						results++;
					}
				});
				// jQuery("#ajax_search_status").html("");
				jQuery("#ajax_search_status").slideUp('slow');
				jQuery("#currently_searching").val("0");
				if( results == 0 )
				{
					jQuery("#any-these-links-help").slideUp('slow');
					jQuery("#question_search_results").html("No search results, looks like you have a good question for us!");
				}
				jQuery('#wtpyq').slideDown('slow');
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
		jQuery("#goto_step_2").removeAttr("disabled");
	else
		jQuery("#goto_step_2").attr("disabled","disabled");
}

</script>

<div class='item-page'>

        <div class='page-header'>
                <h1>Ask a Question</h1>
        </div>

<?





/*
if($user->guest)
{
	echo "<div>You must first <a href='/support/login'>login</a> before you can post a question.</div>";
}
*/
	// we need to grab a list of categories
	$query = "SELECT * FROM #__question_categories ORDER BY `alias` ASC;";
	$db->setQuery($query);
	$categories = $db->loadObjectList();
	$category_html = "<select name='category_id' id='category_id' onChange='previewQuestion()' style='color:#000;'>";
	foreach($categories as $k => $v)
		$category_html .= "<option value='" . $v->id . "'>" . $v->title . "</option>";
	$category_html .= "</select>";


?>


	<div style='float:right; margin:0px 0px 15px 15px; width:200px;'>
		<p>
			Should I ask this question?<br />
			<span style='color:#aaa; font-size:12px; line-height:15px;'>Some questions are best handled over a verified ticket or chat. If you're seeking assistance with any of the items below, click the link for further detail:</span>
		</p>
		<ul style='font-size:12px;'>
			<li><a href='/support/website/backup-and-restore/restoring-a-backup' target='_blank'>backup restorations</a></li>
			<li><a href='/support/website/hacks/steps-to-take-after-a-hack' target='_blank'>hacked sites</a></li>
			<li><a href='/support/website/website-unavailable/why-is-my-website-down' target='_blank'>websites down</a></li>
			<li><a href='/support/website/website-unavailable/my-website-is-suspended' target='_blank'>suspended accounts</a></li>
		</ul>
	</div>

	<p>It's time to get an answer! Our InMotion Hosting Support Team monitors all questions asked within the Community, and we guarantee a response within 60 minutes for current customers (8am - 9pm EST, Monday - Friday)!</p>

	<p>Be sure to be specific with your question. The more details you can provide, the better the answers will be. If you're having a problem, please include steps that we can take to replicate the problem. Keep in mind that your question will be public, so don't post any sensitive information, such as passwords or other specific account information.</p>

<?
	if( $user->guest)
		JFactory::getApplication()->enqueueMessage('You are currently not logged into the support center!<br /><br />You can still submit a question, however you will not receive any automated email notifications when new answers are submitted (so you will need to check back on your question every so often). If you want to receive the email notifications, please <a href=\'/support/login\'>login</a> first.', 'error');
?>

<form method='post' action='/support/community-support/submit-question'>

		<div class='main_ask_a_question_div'>

		<div>
                        <h2 style='font-size:18px; margin:0px;'>Question Summary:</h2>
			<div style='font-size:12px; line-height:15px; margin:5px 0px;'>
	                        <div>Summarize your question in 4 or more words.</div>
				<div style='color:#aaa;'>Example: <i>I cannot log into cPanel</i></div>
			</div>
			<? echo $question_question_warning; ?>
                        <input maxlength="70" type='text' name='question' id='question' style='width:97%; display:inline;' onKeyUp="enough_details_for_question_submission();" value="<? echo htmlspecialchars($_POST['question_question'],ENT_QUOTES); ?>" />
			<div>
				<div style='color:#c52228; float:right; margin-right:18px;' name='question_required' id='question_required'>* required field</div>
				<div style='clear:both;'></div>
				<div style='color:#78C421; float:right; margin-right:18px; display:none;' name='question_required_success' id='question_required_success'>&#10004; required field</div>
			</div>
                </div>



		<div>
			<h2 style='margin:15px 0px 0px 0px; font-size:18px;'>Question Details:</h2>
			<div style='font-size:12px; line-height:15px; margin:5px 0px;'>
				<div style='color:#666;'>In <span style='color:#000;'>10 or more words</span>, tell us more about your question.</div>
				<div style='color:#aaa;'>Example: <i>When I type in my cPanel username and password, it is rejected. What should I do, can I reset it?</i></div>
			</div>
			<? echo $question_details_warning; ?>
			<textarea name='details' id='details' style='width:97%; height:100px; margin-bottom:0px;' onKeyUp="enough_details_for_question_submission();"><? echo htmlspecialchars($_POST['question_details'],ENT_QUOTES); ?></textarea>
			<div>
				<div style='color:#c52228; margin-right:18px; float:right;' name='details_required' id='details_required'>* required field</div>
				<div style='clear:both;'></div>
				<div style='color:#78C421; float:right; margin-right:18px; display:none;' name='details_required_success' id='details_required_success'>&#10004; required field</div>
			</div>
		</div>

		<div style='clear:both;'></div>


		<input type='button' name='goto_step_2' id='goto_step_2' value='Click here to proceed to next step' onClick="get_ajax_search_results(event); jQuery('#step-return-ajax-search').slideDown('slow');" style='display:block; margin:10px 0px;' disabled=true class='btn btn-primary' />
		</div>




		<div class='main_ask_a_question_div' name='step-return-ajax-search' id='step-return-ajax-search' style='display:none; margin-top:30px;'>
			<h2 style='margin:0px; font-size:18px;'>We may have documentation about your question, let's see...</h2>

			<div style='margin:20px 0px;'>
				<div style='text-align:center;' name='ajax_search_status' id='ajax_search_status'></div>
				<div name='ajax_search_info' id='ajax_search_info'></div>
                		<div name='question_search_results' id='question_search_results'></div>
		                <input type='hidden' name='last_ajax_query_sent' id='last_ajax_query_sent' style='width:200px; display:block;' />
				<input type='hidden' name='currently_searching' id='currently_searching' value='0' />
				<input type='hidden' name='number_ajax_search_results' id='number_ajax_search_results' value='0' />
			</div>

			<div name='wtpyq' id='wtpyq' style='display:none;'>
				<h2 style='margin-top:0px; font-size:18px;'>Would you like to post your question?</h2>
				<p>We tried searching our support center for tutorials that may help answer your question. If they don't (or there are no search results) and you need further assistance, post the question to the community! The <em>question summary</em> and <em>question details</em> that you typed above will be public for everyone to see. If you have any sensitive information there, such as usernames and passwords, please be sure to remove them.</p>

				<p>To post your question, choose an appropriate category below, let us know if you're a current customer, and then click submit!</p>

				<table>
					<tr>
						<td><strong>Category:</strong></td>
						<td><? echo $category_html; ?></td>
					</tr>
					<tr>
						<td style='width:140px;' valign='top'><strong>Current Customer?</strong></td>
						<td>
							<input type='text' name='cpanel_username_or_domain' id='cpanel_username_or_domain' style='width:215px; float:left; margin:0px 15px 25px 0px;' />
							<p style='font-size:11px; line-height:13px;'>If you are currently a customer of InMotion Hosting, please enter EITHER your cPanel username or your main domain name to the left. This information will only be available to InMotion Hosting staff, it will not show on your question page.</p>
						</td>
					</tr>
				</table>

				<input type='submit' value='Post your question!' class='btn btn-primary' />
			</div>
		</div>








	</form>






</div>
