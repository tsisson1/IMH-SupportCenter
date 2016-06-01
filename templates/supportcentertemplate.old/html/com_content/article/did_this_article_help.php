<?

$joption = JRequest::getVar('option'); $jview = JRequest::getVar('view'); $jid = JRequest::getVar('id');

// $timestamp_n_id = gmmktime() . rand(1000,1999);
$timestamp_n_id = "1111";

?>






<script type='text/javascript'>






	function dtahryp_set_value(fbvalue)
	{
		if(fbvalue == 1)
		{
			jQuery('#message_after_initial_feedback').attr('class','alert alert-success');
			jQuery('#message_after_initial_feedback').html("We greatly appreciate your feedback!");
			jQuery('#dtahryp_good_button').attr('class','btn btn-primary');
			jQuery('#dtahryp_bad_button').attr('class','btn btn-info');
			jQuery('#why_was_this_not_helpful').slideUp('slow');
		}
		else
		{
			jQuery('#message_after_initial_feedback').attr('class','alert alert-danger');
			jQuery('#message_after_initial_feedback').html("We're sorry this article missed the mark. Your feedback is very valuable to us! Please help us improve our Support Center.");
			jQuery('#dtahryp_bad_button').attr('class','btn btn-primary');
			jQuery('#dtahryp_good_button').attr('class','btn btn-info');
			jQuery('#why_was_this_not_helpful').show();
		}

		jQuery('#dtahryp_feedback_value').val(fbvalue);
		jQuery('#dtahryp_more_feedback').slideDown('slow');

		dtahryp_option = jQuery('#dtahryp_option').val();
		dtahryp_view = jQuery('#dtahryp_view').val();
		dtahryp_page_id = jQuery('#dtahryp_page_id').val();
		timestamp_n_id = jQuery('#timestamp_n_id').val();
		user_ip = jQuery('#user_ip').val();
		dtahryp_referer = document.referrer;

		jQuery.post("/support/includes/feedback.php",
		{
			option:dtahryp_option,
			view:dtahryp_view,
			id:dtahryp_page_id,
			tsid:timestamp_n_id,
			ip:user_ip,
			feedbackvalue:fbvalue,
			dtahryp_task:'insert',
			fb_referer:dtahryp_referer
		},
		function(data,status){
		});
	}






	function dtahryp_update_value()
	{
		dtahryp_display_thankyou();

		timestamp_n_id = jQuery('#timestamp_n_id').val();
		feedback_text = jQuery('#additional_feedback').val();
		feedback_email = jQuery('#user_email').val();
		feedback_name = jQuery('#user_name').val();

		jQuery.post("/support/includes/feedback.php",
                {
			feedback:feedback_text,
			email:feedback_email,
			name:feedback_name,
                        tsid:timestamp_n_id,
                        dtahryp_task:'update',
			dtahryp_author:'<? echo $this->item->author; ?>'
                },
                function(data,status){
                });
	}






	function dtahryp_display_thankyou()
	{
		jQuery('#dtahryp_container').slideUp( "slow", function() {
			// Animation complete.
			jQuery('#dtahryp_thankyou').html("<div class='alert alert-success'>Thank you for your feedback!</div>");
			jQuery('#dtahryp_thankyou').slideDown("slow");
		});
	}






	function dtahryp_why_not_helpful()
	{
		dtahryp_no_too_difficult = jQuery('#no_too_difficult').is(':checked');
                dtahryp_no_bad_instructions = jQuery('#no_bad_instructions').is(':checked');
                dtahryp_no_incorrect = jQuery('#no_incorrect').is(':checked');
                dtahryp_no_not_helpful = jQuery('#no_not_helpful').is(':checked');
		timestamp_n_id = jQuery('#timestamp_n_id').val();
                user_ip = jQuery('#user_ip').val();
		dtahryp_how_did_you_find_us = jQuery('#how_did_you_find_this').val();

                jQuery.post("/support/includes/feedback.php",
                {
			fb_no_too_difficult:dtahryp_no_too_difficult,
			fb_no_bad_instructions:dtahryp_no_bad_instructions,
			fb_no_incorrect:dtahryp_no_incorrect,
			fb_no_not_helpful:dtahryp_no_not_helpful,
                        tsid:timestamp_n_id,
                        ip:user_ip,
                        dtahryp_task:'task_why_not_helpful',
			fb_how_did_you_find_us:dtahryp_how_did_you_find_us
                },
                function(data,status){
                });
	}






</script>






<style type="text/css">
	#dtahryp_thankyou,
	#dtahryp_container {margin:15px 0px;}
	#dtahryp_form {margin:0px}
	#dtahryp_form .hding {font-size:16px; margin-top:10px}
	#dtahryp_form .hlpr {font-size:12px; color:#aaa;}
	#dtahryp_more_feedback {display:none; margin-top:20px;}
	#dtahryp_thankyou{display:none}
	#dtahryp_form input[type='checkbox'] {margin-top:-3px}
	#why_was_this_not_helpful {display:none;}
	#how_did_you_find_this {color:#000}
</style>






<div class='main_comment_submission_div' name='dtahryp_container' id='dtahryp_container'>

	<div name='dtahryp_form' id='dtahryp_form'>

		<div class='hding' style='display:inline;'>Did you find this article helpful?</div>

		<input type='button' class='btn btn-info' value='Yes' onClick="dtahryp_set_value('1');" style='margin:0px;' id='dtahryp_good_button' name='dtahryp_good_button' />
		<input type='button' class='btn btn-info' value='No' onClick="dtahryp_set_value('-1');" style='margin:0px;' id='dtahryp_bad_button' name='dtahryp_bad_button' />

		<div name='dtahryp_more_feedback' id='dtahryp_more_feedback'>

			<p class='alert alert-success' name='message_after_initial_feedback' id='message_after_initial_feedback'>We value your feedback!</p>

			<div name='why_was_this_not_helpful' id='why_was_this_not_helpful'>
				<div class='hding'>Why was this article not helpful? (Check all that apply)</div>
				<input type="checkbox" name="no_too_difficult" id="no_too_difficult" value="1" onChange="dtahryp_why_not_helpful();"> The article is too difficult or too technical to follow.<br />
				<input type="checkbox" name="no_bad_instructions" id="no_bad_instructions" value="1" onChange="dtahryp_why_not_helpful();"> There is a step or detail missing from the instructions.<br />
				<input type="checkbox" name="no_incorrect" id="no_incorrect" value="1" onChange="dtahryp_why_not_helpful();"> The information is incorrect or out-of-date.<br />
				<input type="checkbox" name="no_not_helpful" id="no_not_helpful" value="1" onChange="dtahryp_why_not_helpful();"> It does not resolve the question/problem I have.
			</div>

			<div class='hding'>How did you find this article?</div>
			<select name='how_did_you_find_this' id='how_did_you_find_this' onChange="dtahryp_why_not_helpful();">
				<option value="0"></option>
				<option value="1">Using the search feature on your website.</option>
				<option value="2">Using another search engine (i.e. Google, Bing, Yahoo).</option>
				<option value="3">In an email you sent me.</option>
				<option value="4">On another page on your website.</option>
				<option value="5">On another website.</option>
				<option value="6">One of your staff members gave me this link.</option>
				<option value="7">Other</option>
			</select>

			<div class='hding'>Please tell us how we can improve this article:</div>
	
			<textarea style='width:98%; height:50px;' name='additional_feedback' id='additional_feedback'></textarea>

			<div style='float:left;'>
				<div class='hding'>Email Address</div>
				<input type='text' name='user_email' id='user_email' />
			</div>

			<div style='float:left;margin-left:15px;'>
				<div class='hding'>Name</div>
				<input type='text' name='user_name' id='user_name' />
			</div>

			<p style='clear:both;'><strong style='color:red;'>new!</strong> - Enter your name and email address above and we will post your feedback in the comments on this page!</p>

			<div><input type='button' value='Submit Feedback' class='btn btn-primary' onClick="dtahryp_update_value();" /></div>

		</div>

		<input type='hidden' name='dtahryp_feedback_value' id='dtahryp_feedback_value' value='0' />
		<input type='hidden' name='dtahryp_option' id='dtahryp_option' value='<? echo $joption; ?>' />
		<input type='hidden' name='dtahryp_view' id='dtahryp_view' value='<? echo $jview; ?>' />
		<input type='hidden' name='dtahryp_page_id' id='dtahryp_page_id' value='<? echo $jid; ?>' />
		<input type='hidden' name='timestamp_n_id' id='timestamp_n_id' value='<? echo $timestamp_n_id; ?>' />
		<input type='hidden' name='user_ip' id='user_ip' value='1.1.1.1' />

	</div>

</div>
<div name='dtahryp_thankyou' id='dtahryp_thankyou'></div>
