<div style='border-bottom:1px solid #bbb; width:100%; padding-bottom:5px; margin-bottom:15px;'>
	<a href='/support/administrator/index.php?option=com_communitysupport&task=ecommunity&ecommunity_t=vmems' class='btn btn-primary'>View all ECommunity Members</a>
	<a href='/support/administrator/index.php?option=com_communitysupport&task=ecommunity&ecommunity_t=vorgs' class='btn btn-primary'>View all Organizations</a>
	<br /><br />
	<a href='/support/administrator/index.php?option=com_communitysupport&task=ecommunity&ecommunity_t=no' class='btn btn-success'>New Organization</a>
	<a href='/support/administrator/index.php?option=com_communitysupport&task=ecommunity&ecommunity_t=nm' class='btn btn-success'>New Member</a>
	<a href='/support/administrator/index.php?option=com_communitysupport&task=ecommunity&ecommunity_t=np' class='btn btn-success'>New Page</a>
</div>

<div style='clear:both;'></div>





<?






// ----------------------------------------------------------------------------------------
// if we're adding a new page
// ----------------------------------------------------------------------------------------
if( $_GET['ecommunity_t'] == "np" )
{
	if( $_POST['member_id'] AND $_POST['page_type'] AND $_POST['page_url'] )
	{
		$query = "
			INSERT INTO #__ecommunity_pages
			(`id`,`member_id`,`name`,`url`,`last_check`)
			VALUES (NULL," . $_POST['member_id'] . ",'" . addslashes($_POST['page_type']) . "','" . addslashes($_POST['page_url']) . "',CURRENT_TIMESTAMP);
		";
		$db->setQuery($query);
                $result = $db->execute();
                echo "<div class='btn btn-success'>Thank you. A new member page has been added.</div>";
	}
	else
	{
		// grab all members
		$query = "
			SELECT `ecm`.*,`eco`.`name` as 'organization_name'
			FROM #__ecommunity_members as `ecm`, #__ecommunity_organizations as `eco`
			WHERE `ecm`.`organization_id` = `eco`.`id`
			ORDER BY `organization_id` DESC;
		";
		$db->setQuery($query);
                $members = $db->loadObjectList();
		foreach($members as $mk => $mv)
			$members_list_html .= "<input type='radio' name='member_id' id='member_id' value='" . $mv->id . "'><em>" . htmlentities($mv->organization_name,ENT_QUOTES) . "</em> - <strong>" . htmlentities($mv->name,ENT_QUOTES) . "</strong><br />";

		echo "
			<form method='post'>
				Page type (ie twitter): <input type='text' name='page_type' id='page_type' /> <br />
				Page url: <input type='text' name='page_url' id='page_url' /><br />
				Member:
				<div style='padding-left:40px;margin-bottom:30px;'>$members_list_html</div>
				<input type='submit' value='submit' />
			</form>
		";
	}
}






// ----------------------------------------------------------------------------------------
// if we're adding a new member
// ----------------------------------------------------------------------------------------
if( $_GET['ecommunity_t'] == "nm" )
{
	if( $_POST['nm_name'] AND $_POST['nm_pic_url'] AND $_POST['organization_id'] )
	{
		$query = "
			INSERT INTO #__ecommunity_members
			(`id`,`name`,`picture_url`,`organization_id`,`title`)
			VALUES (NULL,'" . addslashes($_POST['nm_name']) . "','" . addslashes($_POST['nm_pic_url']) . "','" . $_POST['organization_id'] . "','" . addslashes($_POST['nm_title']) . "');
		";
		$db->setQuery($query);
	        $result = $db->execute();
        	echo "<div class='btn btn-success'>Thank you. A new member has been added.</div>";
	}
	else
	{
		// grab all of the organizations
		$query = "SELECT * FROM #__ecommunity_organizations;";
		$db->setQuery($query);
	        $organizations = $db->loadObjectList();
		foreach($organizations as $org_k => $org_v)
		{
			$choose_organization_html .= "<option value='" . $org_v->id . "'>" . htmlentities($org_v->name,ENT_QUOTES) . "</option>";
		}
		$choose_organization_html = "<select name='organization_id' id='organization_id'>" . $choose_organization_html . "</select>";
		
		echo "
		<form method='post'>
			Member's Name: <input type='text' name='nm_name' id='nm_name' /><br />
			Member's Organization: $choose_organization_html<br />
			Members's Title: <input type='text' name='nm_title' id='nm_title' /><br />
			URL to member's picture: <input type='text' name='nm_pic_url' id='nm_pic_url' /><br />
			<input type='submit' value='submit' />
		</form>
		";
	}
}






// ----------------------------------------------------------------------------------------
// if we're adding a new organization
// ----------------------------------------------------------------------------------------
if( $_GET['ecommunity_t'] == "no" )
{
	// if we're adding a new organization name
	if( $_POST['name'] != "" )
	{
		$query = "INSERT INTO #__ecommunity_organizations (`id`,`name`) VALUES (NULL,'" . addslashes($_POST['name']) . "');";
		$db->setQuery($query);
	        $result = $db->execute();
		echo "<div class='btn btn-success'>Thank you. New Organization has been added.</div>";
	}
	else
	{
		echo "	<form method='post'>
				Organization Name: <input type='text' name='name' id='name' style='width:200px;' /> <input type='submit' value='submit' />
			</form>
		";
	}
}






// ----------------------------------------------------------------------------------------
// if we're viewing a member's page
// ----------------------------------------------------------------------------------------
if( $_GET['ecommunity_t'] == "vp" AND is_numeric($_GET['ecommunity_p']) AND is_numeric($_GET['ecommunity_m']) )
{
	// grab the url we want to visit
	$query = "SELECT `url` FROM #__ecommunity_pages WHERE `id` = " . $_GET['ecommunity_p'] . ";";
	$db->setQuery($query);
	$external_url = $db->loadObjectList();
	$external_url_url = $external_url[0]->url;
	echo "<script type='text/javascript'>window.open('$external_url_url')</script>";

	// has this staff member viewed this page today?
	$page_already_viewed = false;
	$query = "SELECT * FROM #__ecommunity_page_reviews WHERE `staff_id` = " . $user->id . " AND `timestamp` LIKE '" . date('Y-m-d',time()) . "%' AND `page_id` = " . $_GET['ecommunity_p'] . ";";
	$db->setQuery($query);
        $views_from_today = $db->loadObjectList();
	if( count($views_from_today) > 0 )
	{
		$query = "UPDATE #__ecommunity_page_reviews SET `timestamp` = CURRENT_TIMESTAMP WHERE `staff_id` = " . $user->id . " AND `timestamp` LIKE '" . date('Y-m-d',time()) . "%' AND `page_id` = " . $_GET['ecommunity_p'] . " LIMIT 1;";
		$db->setQuery($query);
	        $result = $db->execute();
		$page_already_viewed = true;
	}
	
	// log that this staff member viewed this page
	if( $page_already_viewed == false )
	{
		$query = "	INSERT INTO #__ecommunity_page_reviews
				(`id`,`member_id`,`staff_id`,`page_id`,`timestamp`,`status`)
				VALUES (null," . $_GET['ecommunity_m'] . "," . $user->id . "," . $_GET['ecommunity_p'] . ",CURRENT_TIMESTAMP,0);
		";
		$db->setQuery($query);
		$result = $db->execute();
	}
	echo "<div class='btn btn-success'>Thank you. This view has been logged. <a href='/support/administrator/index.php?option=com_communitysupport&task=ecommunity&ecommunity_t=vph&ecommunity_p=" . $_GET['ecommunity_p'] . "&ecommunity_m=" . $_GET['ecommunity_m'] . "'>View this page in the history view.</a></div>";

	// update the last time we checked
	$query = "UPDATE #__ecommunity_pages SET `last_check` = CURRENT_TIMESTAMP WHERE `id` = " . $_GET['ecommunity_p'] . " LIMIT 1;";
	$db->setQuery($query);
        $result = $db->execute();
	
}






// ----------------------------------------------------------------------------------------
// if we're viewing the staff history of viewing member pages
// ----------------------------------------------------------------------------------------
if( $_GET['ecommunity_t'] == "vph" AND is_numeric($_GET['ecommunity_p']) AND is_numeric($_GET['ecommunity_m']) )
{
	// adding notes to a view page history item
	if($_GET['t2'] == "newnote" AND ! $_POST['new_note'])
	{
		echo "	<form method='post'>
				<textarea name='new_note' id='new_note' style='width:95%; height:75px;'></textarea><br />
				<input type='submit' value='submit' />
			</form>
		";
	}
	if( $_POST['new_note'] AND $_GET['noteid'])
	{
		$query = "UPDATE #__ecommunity_page_reviews SET `note` = '" . addslashes($_POST['new_note']) . "' WHERE `id` = " . $_GET['noteid'] . " LIMIT 1";
		$db->setQuery($query);
	        $result = $db->execute();
	}

	// log this as a unique interaction
	if( $_GET['t2'] == "adduinteraction" )
	{
		$query = "UPDATE #__ecommunity_page_reviews SET `unique_interaction` = 1 WHERE `id` = " . $_GET['noteid'] . " LIMIT 1";
                $db->setQuery($query);
                $result = $db->execute();
	}

	$query = "
		SELECT `pr`.*, `u`.`username`
		FROM #__ecommunity_page_reviews as `pr`, #__users as `u`
		WHERE	`pr`.`page_id` = " . $_GET['ecommunity_p'] . " AND
			`pr`.`staff_id` = `u`.`id`;
	";
	$db->setQuery($query);
	$page_view_history = $db->loadObjectList();
	echo "	<table class='table'>
			<tr>
				<th>Staff</th>
				<th>Date</th>
				<th>Note</th>
				<th>Unique Interaction</th>
			</tr>
	";
	foreach($page_view_history as $pvh_k => $pvh_v)
	{
		// if there is not a note, add the option
		if( $pvh_v->note == "" )
			$pvh_v->note = "<a href='/support/administrator/index.php?option=com_communitysupport&task=ecommunity&ecommunity_t=vph&ecommunity_p=" . $_GET['ecommunity_p'] . "&ecommunity_m=" . $_GET['ecommunity_m'] . "&t2=newnote&noteid=" . $pvh_v->id . "'>add note</a>";
		else
			$pvh_v->note = htmlentities($pvh_v->note,ENT_QUOTES);

		// show if this was a unique interaction
		$unique_interaction = "<span style='font-color:#006600; font-weight:bold;'>&#x2713;</span>";
		if( $pvh_v->unique_interaction == 0 )
			$unique_interaction = "<a href='/support/administrator/index.php?option=com_communitysupport&task=ecommunity&ecommunity_t=vph&ecommunity_p=" . $_GET['ecommunity_p'] . "&ecommunity_m=" . $_GET['ecommunity_m'] . "&t2=adduinteraction&noteid=" . $pvh_v->id . "'>+1</a>";

		echo "	<tr>
				<td>" . $pvh_v->username . "</td>
				<td>" . $pvh_v->timestamp . "</td>
				<td>" . $pvh_v->note . "</td>
				<td style='text-align:center;'>$unique_interaction</td>
			</tr>
		";
	}
	echo "	</table>";
}





// ----------------------------------------------------------------------------------------
// if we're viewing all ecommunity members
// ----------------------------------------------------------------------------------------
if( $_GET['ecommunity_t'] == "vmems" )
{
	$and_organization = "";
	if( is_numeric($_GET['org']) )
	{
		$and_organization = "AND `organization_id` = " . $_GET['org'];
	}

	// grab all members
	$query = "
		SELECT `em`.*, `eo`.`name` as 'organization_name'
		FROM #__ecommunity_members as `em`, #__ecommunity_organizations as `eo`
		WHERE	`em`.`organization_id` = `eo`.`id`
		$and_organization
		;
	";
	$db->setQuery($query);
	$ecommunity_members = $db->loadObjectList();
	
	// loop through each ecommunity member
	foreach($ecommunity_members as $ecm_k => $ecm_v)
	{
	
		// grab all of the member's pages
		$query = "
			SELECT *
			FROM #__ecommunity_pages
			WHERE `member_id` = " . $ecm_v->id . ";
		";
		$db->setQuery($query);
		$member_pages = $db->loadObjectList();
		unset($members_page_html);
		if($member_pages)
		{
			foreach($member_pages as $mp_k => $mp_v)
			{
				// grab the last note we made on this page
				$query = "SELECT `note` FROM #__ecommunity_page_reviews WHERE `page_id` = " . $mp_v->id . " ORDER BY `id` DESC LIMIT 1;";
				$db->setQuery($query);
		                $last_note = $db->loadObjectList();

				// ecommunity_t = task
					// vp = view page
				// ecommunity_p = page
				// ecommunity_m = member id
				$members_page_html .= "
					<div style='margin:10px 0px;'>
						<a class='btn btn-primary' href='/support/administrator/index.php?option=com_communitysupport&task=ecommunity&ecommunity_t=vp&ecommunity_p=" . $mp_v->id . "&ecommunity_m=" . $ecm_v->id . "'>" . $mp_v->name . "</a>
						<a href='/support/administrator/index.php?option=com_communitysupport&task=ecommunity&ecommunity_t=vph&ecommunity_p=" . $mp_v->id . "&ecommunity_m=" . $ecm_v->id . "'>History</a>
						<div style='font-size:10px; background:#003870; color:#fff; padding:1px; margin-top:2px;'><strong>Last view</strong>: " . $mp_v->last_check . "</div>
						<div style='font-size:10px; line-height:12px;'>" . htmlentities($last_note[0]->note) . "</div>
						
					</div>
				";
			}
		}

		// grab the total of unique interactions
		$query = "SELECT SUM(`unique_interaction`) as 'unique_interaction_count' FROM #__ecommunity_page_reviews WHERE `member_id` = " . $ecm_v->id;
		$db->setQuery($query);
		$unique_interaction_count = $db->loadObjectList();
		$unique_interaction_html = "<div style='font-size:12px; background:#004D00; color:#fff; padding:2px; margin-top:2px;'>Unique Interactions: <strong>" . $unique_interaction_count[0]->unique_interaction_count . "</strong></div>";
	
		echo "	<div style='float:left; max-width:200px; padding:0px; margin:5px; border:1px solid #ccc; padding:5px; background:#eee; min-height:250px;'>
				<div style='color:#c52228; font-weight:bold; font-size:16px;'>" . $ecm_v->name . "</div>
				<div style='font-weight:bold;'>" . $ecm_v->title . "</div>
				<div style='font-style:italic; color:#aaa;'>" . $ecm_v->organization_name . "</div>
				<img src='" . $ecm_v->picture_url . "' style='display:block; width:55%; border:1px solid #bbb; padding:2px; background:#ddd;' />
				$unique_interaction_html
				$members_page_html
			</div>
		";
	}
}






// ----------------------------------------------------------------------------------------
// if we're adding a new page
// ----------------------------------------------------------------------------------------
if( $_GET['ecommunity_t'] == "vorgs" )
{
	$query = "
		SELECT `eo`.*, count(`em`.`id`) as 'member_count'
		FROM #__ecommunity_organizations as `eo`, #__ecommunity_members as `em`
		WHERE `eo`.`id` = `em`.`organization_id`
		GROUP BY `eo`.`name`
	";
	$db->setQuery($query);
        $organization_info = $db->loadObjectList();
	echo "	<table class='table'>
			<tr style='background:#ddd;'>
				<th>Organization Name</th>
				<th># Members</th>
			</tr>
	";
	foreach($organization_info as $orgi_k => $orgi_v)
	{
		echo "	<tr>
				<td><a href='/support/administrator/index.php?option=com_communitysupport&task=ecommunity&ecommunity_t=vmems&org=" . $orgi_v->id . "'><strong>" . htmlentities($orgi_v->name) . "</strong></a></td>
				<td>" . $orgi_v->member_count . "</td>
			</tr>
		";
	}
	echo "	</table>";
}






?>
