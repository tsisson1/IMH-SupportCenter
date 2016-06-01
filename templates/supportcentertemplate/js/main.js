function previewQuestion()
{
	question = document.getElementById('question').value;
	details = document.getElementById('details').value;
	// category = document.getElementById('category_id').value;
	// category_name = jQuery('#category_id option:selected').text();

	question = HtmlEncode(question);
	details = HtmlEncode(details);

	document.getElementById('question_question').innerHTML = question;
	document.getElementById('question_details').innerHTML = details;
}






function HtmlEncode(s)
{
  var el = document.createElement("div");
  el.innerText = el.textContent = s;
  s = el.innerHTML;
  return s;
}






function previewInput(take_from_this_id,preview_in_this_id)
{
	comment = document.getElementById(take_from_this_id).value;
	comment = HtmlEncode(comment);

	document.getElementById(preview_in_this_id).innerHTML = comment;
}





function uploadAvatar()
{
	document.forms['upload_avatar'].action='/support/images/avatars/upload_avatar.php';
	document.forms['upload_avatar'].target='iframe_upload_avatar';
	document.forms['upload_avatar'].submit();
}






function uploadAvatarStatus()
{
	result = window.frames['iframe_upload_avatar'].document.body.innerHTML;
	jQuery('#upload_avatar_status').html(result);

	if(result != "")
	{
		result_2 = result.split("_status_");
		status = result_2[0];

		if(status == "success")
		{
			filename = result_2[1];
			fileurl = "/support/images/avatars/" + filename;
			jQuery('#upload_avatar_status').html("<img src='" + fileurl + "' />");
			jQuery('#jform_profile_avatar').val(filename);
		}
	}
}






function valid_new_username()
{
	un = document.getElementById('new_username').value;

	if( un.length < 6 )
	{
		document.getElementById('new_username_status').innerHTML = "Usernames must be greater than 5 characters but less than 30.";
		jQuery('#new_username_status').removeClass("new_username_success");
		jQuery('#new_username_status').addClass("new_username_failure");
		jQuery('#new_username_login').prop("disabled",true);

	}
	else
	{
		document.getElementById('new_username_status').innerHTML = "checking if valid...";

		jQuery.post("/support/templates/supportcentertemplate/includes/ajax_new_username.php",
		{
			username:un
		},
		function(data,status){
			gu = false;
			switch(data)
			{
				case "0":
        	                        jQuery('#new_username_status').html("Usernames must be greater than 5 characters but less than 30.");
					break;
				case "1":
        	                        jQuery('#new_username_status').html(HtmlEncode(un) + " is available.");
					gu = true;
					break;
				case "-1":
        	                        jQuery('#new_username_status').html("Please do not use spaces in your username.");
					break;
				case "-2":
                                        jQuery('#new_username_status').html("Please do not use &lt; &gt; \ &quot; &#39; % ; () &amp; in your username.");
                                        break;
				case "-3":
                                        jQuery('#new_username_status').html("That username is already taken.");
                                        break;
			}
			if(gu == false)
			{
				jQuery('#new_username_status').removeClass("new_username_success");
				jQuery('#new_username_status').addClass("new_username_failure");
				jQuery('#new_username_login').prop("disabled",true);
			}
			else
			{
				jQuery('#new_username_status').removeClass("new_username_failure");
                                jQuery('#new_username_status').addClass("new_username_success");
                                jQuery('#new_username_status').html(HtmlEncode(un) + " is available.");
                                jQuery('#new_username_login').prop("disabled",false);
			}
		});
	}
}






function trackAnchorClickSC(anchor)
{
	if( anchor != "trackAnchorClickChatSC" )
	{
		window.location.hash = anchor;

		_gaq.push(['_setAccount', 'UA-1501988-1']);
	        _gaq.push(['_trackEvent', 'community support', 'anchor click', anchor]);
	}
  
	jQuery.post("/support/includes/ajax-anchor-click.php",
		{anchorname:anchor,url:document.URL,sfs:"yes"},
		function(data,status){
	});
}
