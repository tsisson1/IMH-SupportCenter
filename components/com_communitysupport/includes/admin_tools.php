<?


if( $user->groups[8] == 8 )
{
	$admin_tools_brand_url = "http://www.inmotionhosting.com";

        $db = JFactory::getDbo();

	$exploded_url = explode("/",$_SERVER['REQUEST_URI']);
	$cat_slash_alias = "/" . $exploded_url[ count($exploded_url) - 2 ] . "/" . $exploded_url[ count($exploded_url) - 1 ];

	// we need to grab a list of categories
        $query = "SELECT * FROM #__question_categories ORDER BY `alias` ASC;";
        $db->setQuery($query);
        $categories = $db->loadObjectList();
        $category_html = "<select name='category_id' id='category_id' style='color:#000;' onChange='update_preview_url();'>";
        foreach($categories as $k => $v)
	{
		$selected = "";
		if($v->id == $question_details[0]->category_id)
			$selected = "selected";
                $category_html .= "<option value='" . $v->id . "' $selected>" . $v->alias . "</option>";
	}
        $category_html .= "</select>";






	// grab all of the details about the question
	$query = "SELECT * FROM #__question_admin_tools WHERE `question_id` = " . $question_details[0]->id . ";";
        $db->setQuery($query);
        $qat = $db->loadObjectList();
	if($user->username == "BradM")
	{
		// echo "<pre>"; print_r($qat); echo "</pre>";
	}
	





        if( $_POST['admin_task'] == "rename" )
        {
                $query = "UPDATE #__questions set `question` = '" . addslashes($_POST['new_question_title']) . "' WHERE `id` = " . $_POST['question_id'] . " LIMIT 1;";
                $db->setQuery($query);
                $result = $db->query();
                $rename_status = "<div class='alert alert-success'>Question title has been updated. Reload (not refresh) the page to see changes.</div>";

		$query = "UPDATE #__question_admin_tools SET `title_updated` = 1 WHERE `question_id` = " . $_POST['question_id'] . " LIMIT 1;";
		$db->setQuery($query);
                $result = $db->query();
        }
	if( $_POST['admin_task'] == "do_not_rename" )
        {
                $query = "UPDATE #__question_admin_tools SET `title_updated` = -1 WHERE `question_id` = " . $_POST['question_id'] . " LIMIT 1;";
                $db->setQuery($query);
                $result = $db->query();
        }






	if( $_POST['admin_task'] == "change_url" )
	{
		// echo "<pre>"; print_r($_POST); echo "</pre>";
		$cleaned_up_alias = strtolower(trim($_POST['new_alias']));

		// get new category alias
		$query = "SELECT `alias` FROM #__question_categories WHERE `id` = " . $_POST['category_id'] . ";";
		$db->setQuery($query);
		$category_alias = $db->loadObjectList();

		// new alias
		$query = "UPDATE #__questions set `question_alias` = '" . addslashes($cleaned_up_alias) . "', `category_id` = " . $_POST['category_id'] . " WHERE `id` = " . $_POST['question_id'] . " LIMIT 1;";
		$db->setQuery($query);
                $result = $db->query();

                // new alias for staff alerts
                $query = "UPDATE #__staff_alerts set `url` = '" . addslashes($cleaned_up_alias) . "'WHERE `id` = " . $_POST['question_id'] . " LIMIT 1;";
                $db->setQuery($query);
                $result = $db->query();



                $new_alias_status = "<div class='alert alert-success'>Alias / Category has been updated. Reload (not refresh) the page to see changes.</div>";

		$query = "INSERT INTO #__bad_url_redirects (`id` ,`type` ,`value` ,`new_full_url`)VALUES (NULL , 'ends', '" . $_POST['text_ending_in'] . "', '$admin_tools_brand_url/support/community-support/" . $category_alias[0]->alias . "/" . addslashes($cleaned_up_alias) . "');";
		$db->setQuery($query);
                $result = $db->query();
                $new_redirect_status = "<div class='alert alert-success'>New BAD URL has been added. Reload (not refresh) the page to see changes.</div>";

		$query = "UPDATE #__question_admin_tools SET `url_updated` = 1 WHERE `question_id` = " . $_POST['question_id'] . " LIMIT 1;";
                $db->setQuery($query);
                $result = $db->query();
	}
	if( $_POST['admin_task'] == "do_not_change_url" )
	{
		$query = "UPDATE #__question_admin_tools SET `url_updated` = -1 WHERE `question_id` = " . $_POST['question_id'] . " LIMIT 1;";
                $db->setQuery($query);
                $result = $db->query();
	}






	if( $_POST['admin_task'] == "lock" )
	{
		// is the question id already in the table?
		$query = "SELECT * FROM #__question_admin_tools WHERE `question_id` = " . $_POST['question_id'] . ";";
		$db->setQuery($query);
                $qat = $db->loadObjectList();
		// if it's in the database already
		if($qat)
		{
			$query = "UPDATE #__question_admin_tools SET `locker` = '" . addslashes($_POST['locker']) . "', `time_locked_nn` = CURRENT_TIMESTAMP WHERE `question_id` = " . $_POST['question_id'] . " limit 1;";
			$db->setQuery($query);
	                $result = $db->query();
		}
		// if it's not in the database already
		else
		{
			$query = "INSERT INTO #__question_admin_tools (`id` ,`question_id` ,`locker` ,`time_locked_nn`)VALUES (NULL , '" . addslashes($_POST['question_id']) . "', '" . addslashes($_POST['locker']) .  "',CURRENT_TIMESTAMP);";
			$db->setQuery($query);
        	        $result = $db->query();
			$lock_status = "<div class='alert alert-success'>This question is now locked by " . $_POST['locker'] .  ".</div>";
		}
	}






	// show who has the question locked
	$query = "SELECT * FROM #__question_admin_tools WHERE `question_id` = " . $question_details[0]->id . ";";
	$db->setQuery($query);
        $qat = $db->loadObjectList();
	if( $qat )
	{
		$seconds_locked_ago = strtotime(date("Y-m-d H:i:s",time())) - strtotime($qat[0]->time_locked_nn);
		$minutes_locked_ago = round($seconds_locked_ago/60,2);
		// echo "<pre>"; print_r($qat); echo "</pre>";
		$lock_status = "<div class='alert alert-success'>Locked by " . $qat[0]->locker . " - $minutes_locked_ago minutes ago.</div>";
		$message_access_to_other_tools_after_lock = "";
	}
	else
	{
		$message_access_to_other_tools_after_lock = "<p style='color:red;'>Once a question has been locked, you will have access to the other tools</p>";
	}






	if( $_POST['admin_task'] == "after_answer")
	{
		$query = "UPDATE #__question_admin_tools SET `answer_type` = " . $_POST['answer_type'] . " WHERE `question_id` = " . $_POST['question_id'] . " LIMIT 1;";
		$db->setQuery($query);
                $result = $db->query();
		$after_answer_status = "<div class='alert alert-success'>Answer type has been updated.</div>";

		switch($_POST['answer_type'])
		{
			case -2: $after_answer_type = "other"; break;
			case -1: $after_answer_type = "asked for info"; break;
			case 1: $after_answer_type = "linked to documentation"; break;
			case 2: $after_answer_type = "minor edit"; break;
			case 3: $after_answer_type = "major edit"; break;
			case 4: $after_answer_type = "article worthy"; break;
			default: $after_answer_type = "error"; break;
		}
		// log in analytics
		echo "
        	        <script type=\"text/javascript\">
                	        _gaq.push(['_setAccount', 'UA-1501988-1']);
                        	_gaq.push(['_trackEvent', 'community support', 'staff answer types', '$after_answer_type']);
	                </script>
	        ";
	}






	
	if( $_POST['admin_task'] == "add_related_article" AND $_POST['related_article_id'] != 0)
        {
                $query = "UPDATE #__questions SET `related_article_id` = " . $_POST['related_article_id'] . " WHERE `id` = " . $_POST['question_id'] . " LIMIT 1;";
                $db->setQuery($query);
                $result = $db->query();
        }






	// approval status
	if( $_POST['approval_status'] )
	{
		if( $_POST['approval_status'] == "SPAM delete question" )
		{
			$query = "DELETE FROM #__questions WHERE `id` = " . $_POST['question_id'] . " LIMIT 1;";
			$db->setQuery($query);
	                $result = $db->query();
            $query = "INSERT INTO #__admintools_ipblock (`ip`,`description`) VALUES ('" . $question_details[0]->asker_ip . "', 'Spam Question')";
            $db->setQuery($query);
                    $result = $db->query();

		}
		if( $_POST['approval_status'] == "APPROVE question" )
		{
			$query = "UPDATE #__questions SET `approved` = 0 WHERE `id` = " . $_POST['question_id'] . " LIMIT 1;";
			$db->setQuery($query);
	                $result = $db->query();
		}
	}
	






	// grab all of the details about the question
        $query = "SELECT * FROM #__question_admin_tools WHERE `question_id` = " . $question_details[0]->id . ";";
        $db->setQuery($query);
        $qat = $db->loadObjectList();
        if($user->username == "BradM")
        {
                // echo "<pre>"; print_r($qat); echo "</pre>";
        }

        if( $qat[0]->title_updated == 0 )
                $message_access_to_other_tools_after_title_update = "<p style='color:red;'>Once a question has been renamed (or labeled it does not need to be renamed), you will have access to additional tools</p>";
        else
                $message_access_to_other_tools_after_title_update = "";

	if( $qat[0]->url_updated == 0 )
                $message_access_to_other_tools_after_url_update = "<p style='color:red;'>Once a question url has been updated (or labeled it does not need to be updated), you will have access to additional tools</p>";
        else
                $message_access_to_other_tools_after_url_update = "";

	if( $qat[0]->answer_type != 0 )
                $message_after_answer_type_update = "<p style='color:red;'>This page already has had an 'answer type' submitted. <strong>You can</strong> change the answer type, but please do this sparingly.</p>";
        else
                $message_after_answer_type_update = "";






	// ************************************************************************************************************
        // Print the heading to admin tools
        // ************************************************************************************************************
        echo "
        <script type='text/javascript'>
        function new_question_title_count_characters()
        {
                var length_left = 70 - jQuery('#new_question_title').val().length;
                jQuery('#new_question_title_character_count').html(length_left);
        }
	function new_alias_count_characters()
        {
                var length_left = 40 - jQuery('#new_alias').val().length;
                jQuery('#new_alias_character_count').html(length_left);

		 update_preview_url();
        }
	function update_preview_url()
	{
		preview_url = \"$admin_tools_brand_url/support/community-support/\" + jQuery('#category_id option:selected').text() + \"/\" + jQuery('#new_alias').val();
                jQuery('#preview_question_url').attr('href',preview_url);
                jQuery('#preview_question_url').text(preview_url);
	}
        </script>

	
	<a name='admin-tools'></a>
	<div style='margin:50px 0px;'>
                <p style='text-align:center; border:1px solid #bbb; background:#ddd;'>Admin Tools</p>
		<a href='#lock'>Jump to Lock</a>
	";

	// Admin Tools below question ^ <div style='margin:200px 0px;">




	// ************************************************************************************************************
        // lock the question
        // ************************************************************************************************************
	echo "
		<a name='lock'></a>
		<form id='admin_lock_div' method='post' style='border:1px solid #bbb; background:#ddd; padding:4px; position: absolute; left: 15px; top: 275px; width: 130px; font-size:11px; line-height:13px;'>
			<p>cPanel username or main domain <em>(as entered by the user)</em>: " . htmlspecialchars($question_details[0]->cpanel_username_or_domain,ENT_QUOTES) . "</p>
			$lock_status
			<input type='hidden' name='question_id' id='question_id' value='" . $question_details[0]->id . "' />
			<input type='hidden' name='locker' id='locker' value='" . $user->username . "' />
			<input type='hidden' name='admin_task' id='admin_task' value='lock' />
			<p><input type='submit' value='Lock Question' /></p>
			<p>Whether you're answering a comment or question, locked the 'Question' so we know someone is looking into this</p>
			$message_access_to_other_tools_after_lock
			<p><a href='#admin-tools'>Jump to Admin Tools</a></p>
		</form>
	";
	// <form method='post' style='margin:30px 0px; border:1px solid #bbb; background:#ddd; padding:4px;'>






	// approved questions (submitted by anonymous)
	if( $question_details[0]->approved == -1 )
	{
		echo "
			<form method='post' style='margin:30px 0px; border:1px solid #bbb; background:#ddd; padding:4px;'>
				<div>Approval status: " .  $question_details[0]->approved . "</div>
				<input type='hidden' name='question_id' id='question_id' value='" . $question_details[0]->id . "' />
				<input type='submit' name='approval_status' id='approval_status' value='SPAM delete question' style='background:red;' />
				<input type='submit' name='approval_status' id='approval_status' value='APPROVE question' style='background:green;' />
			</form>
		";
	}






	// ************************************************************************************************************
        // show information about user asking question
        // ************************************************************************************************************
        $this_asker = JFactory::getUser($question_details[0]->asker_id);
        $this_asker_email = $this_asker->email;
	// ********************* START USER NOTES DB STUFF *********************
	if( $_POST['admin_task'] == 'submitsun' )
	{
		$query = "SELECT * FROM #__staff_user_notes WHERE `user_id` = " . $question_details[0]->asker_id . ";";
		$db->setQuery($query);
	        $sun = $db->loadObjectList();
		if( $sun )
		{
			$query = "UPDATE #__staff_user_notes SET `notes` = '" . addslashes($_POST['staff_user_notes']) . "' WHERE `user_id` = " . $question_details[0]->asker_id . " LIMIT 1;";
			$db->setQuery($query);
                        $result = $db->query();
		}
		else
		{
			$query = "INSERT INTO #__staff_user_notes (`id`,`user_id`,`notes`) VALUES (NULL," . $question_details[0]->asker_id . ", '" . addslashes($_POST['staff_user_notes']) . "');";
			$db->setQuery($query);
	                $result = $db->query();
		}
	}
	$query = "SELECT * FROM #__staff_user_notes WHERE `user_id` = " . $question_details[0]->asker_id . ";";
	$db->setQuery($query);
	$sun = $db->loadObjectList();
	$user_notes_to_print = "no current notes";
	if( $sun )
		$user_notes_to_print = htmlspecialchars($sun[0]->notes,ENT_QUOTES);
	// ********************** END USER NOTES DB STUFF **********************
        echo "
                <div style='margin:30px 0px; border:1px solid #bbb; background:#ddd; padding:4px;'>
                        <div>User Details</div>
			<p>cPanel username or main domain <em>(as entered by the user)</em>: " . htmlspecialchars($question_details[0]->cpanel_username_or_domain,ENT_QUOTES) . "</p>
                        <form enctype='application/x-www-form-urlencoded'  action='https://secure1.inmotionhosting.com/admin/account' method='post' target='_blank' style='margin:0px;'>
                                <input type='hidden' name='search_type' id='search_type' value='email' />
                                <input type='hidden' name='search' id='search' value='" . htmlspecialchars(addslashes($this_asker_email)) . "' />
                                <input type='submit' value='" . htmlspecialchars(addslashes($this_asker_email)) . "' /><em>(pp2 lookup)</em>
                        </form>
			<form method='post' style='margin:0px;'>
                	        <textarea name='staff_user_notes' id='staff_user_notes' style='width:400px; height:50px; font-size:12px; line-height:13px; padding:1px;'>$user_notes_to_print</textarea>
	                        <input type='hidden' name='admin_task' id='admin_task' value='submitsun' />
        	                <input type='submit' value='Submit' />
        	        </form>
                </div>
        ";






	// ************************************************************************************************************
	// is this a customer?
	// ************************************************************************************************************
	/*
	$current_customer_value = $question_details[0]->customer;
	switch($current_customer_value)
	{
		case "-1":
			$current_customer_value_html = "<span class='label label-success'>Not a customer.</span>";
			break;
		case "0":
			$current_customer_value_html = "<span class='label label-warning'>Not set! Please set below.</span>";
			break;
		case "1":
			$current_customer_value_html = "<span class='label label-primary'>Currently a customer.<span>";
			break;
	}
	
	echo "
		<form method='post' style='margin:30px 0px 0px 0px; border:1px solid #bbb; background:#ddd; padding:4px; border-bottom:0px;'>
			<p><strong>Is this a current customer?</strong> $current_customer_value_html</p>
		" . $question_details[0]->customer . "
		</form>
	";
	*/






	// ************************************************************************************************************
	// rename the question title
	// ************************************************************************************************************
	if( $qat[0]->locker != "" )
	{
		// offer the ability to rename the question
		echo "
                <form method='post' style='margin:30px 0px 0px 0px; border:1px solid #bbb; background:#ddd; padding:4px; border-bottom:0px;'>
                        Rename Question Title:<br />
                        $rename_status
                        <input type='text' name='new_question_title' id='new_question_title' style='width:400px;' maxlength='70' onKeyUp='new_question_title_count_characters();' />
                        <input type='hidden' name='admin_task' id='admin_task' value='rename' />
                        <input type='hidden' name='question_id' id='question_id' value='" . $question_details[0]->id . "' />
                        <span>(<span name='new_question_title_character_count' id='new_question_title_character_count'>70</span>)</span>
                        <div style='margin:10px 0px 0px 0px;'><input type='submit' value='Rename' /></div>
                </form>
		";
		// <input type='text' name='new_question_title' id='new_question_title' style='width:550px;' maxlength='70' onKeyUp='new_question_title_count_characters();' />

		// offer the ability not to rename the question
		echo "
                <form method='post' style='margin:0px 0px 30px 0px; border:1px solid #bbb; background:#ddd; padding:4px; border-top:0px;'>
                        <input type='hidden' name='admin_task' id='admin_task' value='do_not_rename' />
                        <input type='hidden' name='question_id' id='question_id' value='" . $question_details[0]->id . "' />
			<input type='submit' value='Or, question does not need be renamed' style='font-size:11px;' />
			$message_access_to_other_tools_after_title_update
                </form>
                ";
	}






	// ************************************************************************************************************
        // search for existing documentation
        // ************************************************************************************************************
        echo "
                <form method='get' action='/support/search' style='margin:30px 0px; border:1px solid #bbb; background:#ddd; padding:4px;' target='_blank'>
                        <div>Search for existing documentation</div>
			<div>Last search was for: <strong>" . $qat[0]->staff_search . "</strong></div>
                        <input type='text' name='searchword' id='searchword' style='width:400px;' />
                        <input type='hidden' name='qid' id='qid' value='" . $question_details[0]->id . "' />
                        <input type='submit' value='Search' />		
			<input type='button' value='OK, I searched.' onClick='window.location.reload()'>
                </form>
        ";






	// ************************************************************************************************************
        // update the url and category
        // ************************************************************************************************************
	//if( $qat[0]->title_updated != 0 AND $qat[0]->staff_search != "" )
	if( $qat[0]->title_updated != 0 )
	{
		echo "
		<form method='post' style='margin:30px 0px 0px 0px; border:1px solid #bbb; background:#ddd; padding:4px; border-bottom:0px;'>
			Update URL and setup redirect:<br />
			$new_alias_status
			$new_redirect_status
			<span style='color:#aaa;'>Example: this-is-my-new-alias</span>
			<ul style='color:#aaa;'>
				<li>This will need updating when we allow questions to have sub categories</li>
				<li>This will not add -2 at the end of the url if it already exists</li>
			</ul>
			<input type='text' name='new_alias' id='new_alias' style='width:550px;' maxlength='40' onKeyUp='new_alias_count_characters();' /><br />
			<span>(<span name='new_alias_character_count' id='new_alias_character_count'>40</span>)</span>
			$category_html
			<input type='hidden' name='admin_task' id='admin_task' value='change_url' />
			<input type='hidden' name='question_id' id='question_id' value='" . $question_details[0]->id . "' />
			<input type='hidden' name='text_ending_in' id='text_ending_in' value='$cat_slash_alias' />
			<br /><a href='' name='preview_question_url' id='preview_question_url' target='_blank'></a><br />
			<input type='submit' value='Change URL' />
		</form>
		";
		echo "
                <form method='post' style='margin:0px 0px 30px 0px; border:1px solid #bbb; background:#ddd; padding:4px; border-top:0px;'>
                        <input type='hidden' name='admin_task' id='admin_task' value='do_not_change_url' />
                        <input type='hidden' name='question_id' id='question_id' value='" . $question_details[0]->id . "' />
                        <input type='submit' value='Or, URL and Category do not need changes' style='font-size:11px;' />
			$message_access_to_other_tools_after_url_update
                </form>
                ";
	}






	// ************************************************************************************************************
        // specify the answer type
        // ************************************************************************************************************
	if( $qat[0]->url_updated != 0 )
	{
		echo "
		<form method='post' style='margin:30px 0px; border:1px solid #bbb; background:#ddd; padding:4px;'>
			$after_answer_status
			After answering the question:<br /><br />

			Please describe your answer:
			<div>
				<input type='radio' name='answer_type' id='answer_type' value='-1' /> I could not answer, I asked for more info<br />
				<input type='radio' name='answer_type' id='answer_type' value='1' /> We already have documentation, I linked to it<br />
				<input type='radio' name='answer_type' id='answer_type' value='2' /> I made a <strong>minor</strong> article update, <em>&lt; 15 minutes</em>, and advised user to review it<br />
				<input type='radio' name='answer_type' id='answer_type' value='3' /> I made a <strong>major</strong> article update, <em>&gt; 15 minutes</em>, and advised user to review it<br />
				<input type='radio' name='answer_type' id='answer_type' value='4' /> My answer makes this Q/A page a new article<br />
				<input type='radio' name='answer_type' id='answer_type' value='-2' /> OTHER
			</div>

			<input type='hidden' name='admin_task' id='admin_task' value='after_answer' />
			<input type='hidden' name='question_id' id='question_id' value='" . $question_details[0]->id . "' />

			<input type='submit' value='submit' />
			$message_after_answer_type_update
		</form>
		";
	}






	// ************************************************************************************************************
        // edit the search algo
        // ************************************************************************************************************
	/*
	echo "
                <form method='post' style='margin:30px 0px; border:1px solid #bbb; background:#ddd; padding:4px;'>
			<div>Update the search algo</div>
			<input type='submit' name='which_algo_update' id='which_algo_update' value='Edit hail mary terms' />
			<input type='submit' name='which_algo_update' id='which_algo_update' value='Edit unexpected terms' />
		</form>
	";
	*/
	// ************************************************************************************************************
        // hail mary
        // ************************************************************************************************************
	if( $_POST['admin_task'] == "edit_hail_mary" OR $_POST['admin_task'] == "new_hail_mary" OR $_POST['admin_task'] == "delete_hail_mary" )
	{
		// log that we added / edited it for this question
                $query = "UPDATE #__question_admin_tools SET `hm_update` = `hm_update` + 1 WHERE `question_id` = " . $question_details[0]->id . " LIMIT 1;";
                $db->setQuery($query);
                $result = $db->query();
		// log in analytics
                echo "
                        <script type=\"text/javascript\">
                                _gaq.push(['_setAccount', 'UA-1501988-1']);
                                _gaq.push(['_trackEvent', 'community support', 'algo update']);
                        </script>
                ";
	}
	if( $_POST['admin_task'] == "edit_hail_mary" )
	{
		// add the new hail mary
		$query = "UPDATE #__search_hail_mary_terms SET `terms` = '" . addslashes($_POST['terms']) . "', `number_of_terms` = " . $_POST['number_of_terms'] . " WHERE `id` = " . $_POST['hail_mary_id'] . ";";
		$db->setQuery($query);
		$result = $db->query();
	}
	if( $_POST['admin_task'] == "delete_hail_mary" )
        {
                // delete hail mary
                $query = "DELETE FROM #__search_hail_mary_terms WHERE `id` = " . $_POST['hail_mary_id'] . " LIMIT 1;";
                $db->setQuery($query);
                $result = $db->query();
        }
	if( $_POST['admin_task'] == "new_hail_mary" )
	{
		$query = "INSERT INTO #__search_hail_mary_terms (`id`, `terms`, `number_of_terms`) VALUES (NULL, '" . addslashes($_POST['terms']) . "', " . $_POST['number_of_terms'] . ");";
		$db->setQuery($query);
		$db->query();
	}
	if( $_POST['which_algo_update'] == "Edit hail mary terms" OR $_POST['admin_task'] == "edit_hail_mary" OR $_POST['admin_task'] == "new_hail_mary" OR $_POST['admin_task'] == "delete_hail_mary")
	{
		$query = "SELECT * FROM #__search_hail_mary_terms ORDER BY `number_of_terms` DESC, `terms` ASC";
		$db->setQuery($query);
	        $results = $db->loadObjectList();
		if($results)
		{
			foreach($results as $k => $v)
			{
				echo "
				<div>
				<form method='post' style='display:inline;'>
					<input type='hidden' name='hail_mary_id' id='hail_mary_id' value='" .  $v->id . "' />
					<input type='text' name='terms' id='terms' value='" . htmlentities($v->terms,ENT_QUOTES) . "' />
					<input type='text' name='number_of_terms' id='number_of_terms' value='" .  $v->number_of_terms . "' style='width:30px;' />
					<input type='hidden' name='admin_task' id='admin_task' value='edit_hail_mary' />
					<input type='submit' value='Edit' />
				</form>
				<form method='post' style='display:inline;'>
                                        <input type='hidden' name='hail_mary_id' id='hail_mary_id' value='" .  $v->id . "' />
                                        <input type='hidden' name='admin_task' id='admin_task' value='delete_hail_mary' />
                                        <input type='submit' value='Delete' />
                                </form>
                                </div>
				";
			}
			echo "
                                <form method='post'>
                                        <input type='text' name='terms' id='terms' />
                                        <input type='text' name='number_of_terms' id='number_of_terms' style='width:30px;' />
                                        <input type='hidden' name='admin_task' id='admin_task' value='new_hail_mary' />
                                        <input type='submit' value='New' />
                                </form>
			";
		}
	}
	// ************************************************************************************************************
        // unexpected terms
        // ************************************************************************************************************
	if( $_POST['admin_task'] == "new_unexpected_term" OR $_POST['admin_task'] == "edit_unexpected_term" OR $_POST['admin_task'] == "delete_unexpected_term")
	{
		// log that we added / edited it for this question
                $query = "UPDATE #__question_admin_tools SET `ut_update` = `ut_update` + 1 WHERE `question_id` = " . $question_details[0]->id . " LIMIT 1;";
                $db->setQuery($query);
                $result = $db->query();
                // log in analytics
                echo "
                        <script type=\"text/javascript\">
                                _gaq.push(['_setAccount', 'UA-1501988-1']);
                                _gaq.push(['_trackEvent', 'community support', 'algo update']);
                        </script>
                ";
	}
	if( $_POST['admin_task'] == "new_unexpected_term")
	{
		$query = "
			INSERT INTO #__search_unexpected_query
			(`id`,`query`,`url`,`title`,`description`)
			VALUES (NULL, '" . addslashes($_POST['terms']) . "','" . addslashes($_POST['url']) . "','" . addslashes($_POST['title']) . "','" . addslashes($_POST['description']) . "');
		";
		$db->setQuery($query);
		$db->query();
	}
	if( $_POST['admin_task'] == "edit_unexpected_term" )
	{
		$query = "	UPDATE #__search_unexpected_query
				SET	`query` = '" . addslashes($_POST['terms']) . "',
					`url` = '" . addslashes($_POST['url']) . "',
					`title` = '" . addslashes($_POST['title']) . "',
					`description` = '" . addslashes($_POST['description']) . "'
				WHERE `id` = " . $_POST['unexpected_term_id'] . "
				LIMIT 1;
		";
		$db->setQuery($query);
		$result = $db->query();
	}
	if( $_POST['admin_task'] == "delete_unexpected_term" )
        {
                $query = "      DELETE FROM #__search_unexpected_query
                                WHERE `id` = " . $_POST['unexpected_term_id'] . "
                                LIMIT 1;
                ";
                $db->setQuery($query);
                $result = $db->query();
        }
        if( $_POST['which_algo_update'] == "Edit unexpected terms" OR $_POST['admin_task'] == "edit_unexpected_term" OR $_POST['admin_task'] == "new_unexpected_term" OR $_POST['admin_task'] == "delete_unexpected_term")
	{
		$query = "SELECT * FROM #__search_unexpected_query ORDER BY `url` ASC";
		$db->setQuery($query);
	        $results = $db->loadObjectList();
		if($results)
		{
			foreach($results as $k => $v)
			{
				$ut_id = "utid_" . $v->id;
				echo "
				<div style='margin-top:20px;'></div>
				<form style='float:right; margin:0px; padding:0px;' method='post' >
                                        <input type='hidden' name='unexpected_term_id' id='unexpected_term_id' value='" .  $v->id . "' />
                                        <input type='hidden' name='admin_task' id='admin_task' value='delete_unexpected_term' />
                                        <input type='submit' value='Delete' style='background:#fff; color:#ddd; font-size:10px; border:0px;' />
                                </form>
				<div style='color:#bbb; margin-top:15px;'>" . $v->url . "</div>
				<div onClick=\"jQuery('#$ut_id').toggle();\">" . $v->query . "</div>
				<form method='post' style='margin-bottom:50px; display:none;' name='$ut_id' id='$ut_id'>
					<input type='hidden' name='unexpected_term_id' id='unexpected_term_id' value='" .  $v->id . "' />
					<table class='article_table'>
						<tr><td>Query:</td><td><input type='text' name='terms' id='terms' value='" . htmlentities($v->query,ENT_QUOTES) . "' style='width:500px; font-size:12px;' /></td></tr>
						<tr><td>Url:</td><td><input type='text' name='url' id='url' value='" . $v->url . "' style='width:500px; font-size:12px;' /></td></tr>
						<tr><td>Title:</td><td><input type='text' name='title' id='title' value='" . htmlentities($v->title,ENT_QUOTES) . "' style='width:500px; font-size:12px;' /></td></tr>
						<tr><td>Desc:</td><td><textarea name='description' id='description' style='width:500px; height:50px; font-size:12px;'>" . htmlentities($v->description,ENT_QUOTES) . "</textarea></td></tr>
					</table>

					<input type='hidden' name='admin_task' id='admin_task' value='edit_unexpected_term' />
					<input type='submit' value='Edit' />
				</form>
				<div style='clear:both;'></div>
				";
			}
echo "
			<form method='post' style='margin-bottom:50px; margin-top:40px;'>
				<strong>Add New:</strong>
				<table class='article_table'>
					<tr><td>Query:</td><td><input type='text' name='terms' id='terms' style='width:500px; font-size:12px;'/></td></tr>
					<tr><td>Url:</td><td><input type='text' name='url' id='url' style='width:500px; font-size:12px;' /></td></tr>				
					<tr><td>Title:</td><td><input type='text' name='title' id='title' style='width:500px; font-size:12px;' /></td></tr>
					<tr><td>Desc:</td><td><textarea name='description' id='description' style='width:500px; height:50px; font-size:12px;'></textarea></td></tr>
				</table>
				<input type='hidden' name='admin_task' id='admin_task' value='new_unexpected_term' />
				<input type='submit' value='New' />
			</form>
				";
		}
	}






	// ******************************************************************************************
	// setup related articles
	// ******************************************************************************************
	echo "
		 <form method='post' style='margin:30px 0px; border:1px solid #bbb; background:#ddd; padding:4px;'>
                        <div>Related article</div>

			Related Article Id:
			<input type='text' name='related_article_id' id='related_article_id' value='" . $question_details[0]->related_article_id . "' />

                        <input type='hidden' name='question_id' id='question_id' value='" . $question_details[0]->id . "' />
			<input type='hidden' name='admin_task' id='admin_task' value='add_related_article' />
                        <input type='submit' value='Add related article' />
                </form>
	";






	// ******************************************************************************************
        // unnapproved questions
        // ******************************************************************************************
        $query = "SELECT `question_alias` FROM #__questions WHERE `approved` = -1;";
        $db->setQuery($query);
        $results = $db->loadObjectList();
        if( $results )
        {
                echo "  <div style='margin:30px 0px; border:1px solid #bbb; background:#ddd; padding:4px;'>
                                <div>Unapproved Questions</div>
                ";
                foreach( $results as $k => $alias )
                {
                        echo "<li><a href='/support/community-support/" . $alias->question_alias . "' target='_blank'>" . $alias->question_alias . "</a></li>";
                }
                echo "          </div>";
        }






	// ******************************************************************************************
	// tag me
	// ******************************************************************************************
	echo "
		<form method='post' action='/support/administrator/index.php?option=com_communitysupport&task=tags&t2=request_for_tag' target='_blank' style='margin:30px 0px; border:1px solid #bbb; background:#ddd; padding:4px;'>
			<input type='hidden' name='tag_option' id='tag_option' value='com_communitysupport' />
			<input type='hidden' name='tag_view' id='tag_view' value='show_question' />
			<input type='hidden' name='tag_option_view_id' id='tag_option_view_id' value='" . $question_details[0]->id . "' />
			<input type='submit' value='tag'>
		</form>
	";




	echo "	</div>";
}


?>
