<?

/**
 * Set an agent to NOT "on call"
 */
if ($_POST['action'] == "logout")
{
	$query = "UPDATE #__oncall SET `out_timestamp_n` = " . time() . " WHERE `user_id` = " . $user->id . " AND `out_timestamp_n` = 0;";
	$db->setQuery($query);
	$db->execute();
}

/**
 * Set an agent to "on call"
 */
if ($_POST['action'] == "login")
{
	$query = "INSERT INTO #__oncall (`id`,`user_id`,`in_timestamp_n`,`out_timestamp_n`,`priority`) VALUES (null," . $user->id . "," . time() . ",0," . $_POST['priority'] . ");";
	$db->setQuery($query);
	$db->execute();
}

/**
 * get status of the current user
 */
$query = "SELECT * FROM #__oncall WHERE `user_id` = " . $user->id . " ORDER BY `id` DESC LIMIT 1;";
$db->setQuery($query);
$latest_status = $db->loadObject();

/**
 * create the form for the user to change their status
 */
$on_call = true;
$on_call_html = "<span style='color:green;font-weight:bold;'>Yes</span>";
$change_status_text = "Go <em>no longer on call</em>";
$change_status_form = "
		<tr>
			<th>Logout</th>
			<td colspan='2'><input type='submit' value='Logout' class='btn btn-primary' />
			<input type='hidden' name='action' id='action' value='logout' />
		</tr>
";
if ( ! $latest_status OR $latest_status->out_timestamp_n != "0")
{
	$on_call = false;
	$on_call_html = "<span style='color:red;font-weight:bold;'>No</span>";
	$change_status_text = "Go <em>on call</em>";
	$change_status_form = "
		<tr>
			<th>Priority</th>
			<td>
				<select name='priority' id='priority'>
					<option value='1'>1st</option>
					<option value='2'>2nd</option>
					<option value='3'>3rd</option>
					<option value='4'>4th</option>
					<option value='5'>5th</option>
					<option value='6'>6th</option>
					<option value='7'>7th</option>
				</select>
			</td>
			<td><input type='submit' value='Go' class='btn btn-primary' /></td>
			<input type='hidden' name='action' id='action' value='login' />
		</tr>
	";
}

/**
 * grab the department's status
 */
$query = "
	SELECT	`oncall`.*,
		`users`.`username`
	FROM	#__oncall as `oncall`,
		#__users as `users`
	WHERE	`oncall`.`out_timestamp_n` = 0 AND
		`oncall`.`user_id` = `users`.`id`
	ORDER BY `oncall`.`priority` DESC
";
$db->setQuery($query);
$team_status = $db->loadObjectList();
if (! $team_status)
{
	$team_status_html = "<p class='alert alert-danger'>No one is on call!</p>";
}
else
{
	$team_status_html = "
		<table class='table table-striped table-bordered'>
			<tr>
				<th>#</th>
				<th>Agent</th>
				<th>Login time</th>
				<th>Priority</th>
			</tr>
	";
	foreach($team_status as $k => $v)
	{
		$team_status_html .= "
			<tr>
				<td>" . ($k+1) . "</td>
				<td>" . htmlentities($v->username,ENT_QUOTES) . "</td>
				<td>" . date("g:i a",$v->in_timestamp_n + (60*60*3)) . "</td>
				<td>" . $v->priority . "</td>
			</tr>
		";
	}
	$team_status_html .= "
		</table>
	";
}

/**
 * create a log of last 10 items
 */
$query = "
        SELECT  `oncall`.*,
                `users`.`username`
        FROM    #__oncall as `oncall`,
                #__users as `users`
        WHERE   `oncall`.`user_id` = `users`.`id`
        ORDER BY `oncall`.`id` DESC
	LIMIT	10
";
$db->setQuery($query);
$team_history = $db->loadObjectList();
$team_history_html = "
	<table class='table table-striped table-bordered'>
		<tr>
			<th>#</th>
			<th>Agent</th>
			<th>Login time</th>
			<th>Logout time</th>
			<th>Priority</th>
		</tr>
";
foreach($team_history as $k => $v)
{
	$logout_time_html = "";
	if($v->out_timestamp_n != "0")
		$logout_time_html = date("g:i a",$v->out_timestamp_n + (60*60*3));

	$team_history_html .= "
		<tr>
			<td>" . ($k+1) . "</td>
			<td>" . htmlentities($v->username,ENT_QUOTES) . "</td>
			<td>" . date("g:i a",$v->in_timestamp_n + (60*60*3)) . "</td>
			<td>$logout_time_html</td>
			<td>" . $v->priority . "</td>
		</tr>
	";
}
$team_history_html .= "
	</table>
";



echo "	<h1>Your status</h1>
	<p>Use the <strong>team status</strong> information on <a href='https://trac.imhtech.net/CustomerCommunity/wiki/Kanban' target='_blank'>this page</a> to determine your <em>question / comments</em> priority for the day.</p>
	<table class='table table-striped table-bordered'>
		<tr>
			<th>On Call</th>
			<td colspan='2'>$on_call_html</td>
		</tr>
		<tr>
			<th colspan='3'>$change_status_text</th>
		</tr>
		<form method='post'>
			$change_status_form
		</form>
	</table>

	<h1>Team status</h1>
	$team_status_html

	<h1>Latest log</h1>
	$team_history_html
";



?>
