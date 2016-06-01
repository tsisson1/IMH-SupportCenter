<?

if( ! $_GET['start_date'] )
        $start_date = "2014-01-07 09:00:00";
else
        $start_date = $_GET['start_date'];


if( ! $_GET['end_date'] )
        $end_date = date("Y-m-d 23:59:59",time());
else
        $end_date = $_GET['end_date'];

/*
$grab_editor_username_checked = "";
if( $_GET['grab_editor_username'] == 1 )
        $grab_editor_username_checked = "checked";

$feedback_without_trac_checked = "";
if( $_GET['feedback_without_trac'] == 1 )
        $feedback_without_trac_checked = "checked";
*/

$exclude_office_ip_checked = "";
if( $_GET['only_show_internal_ip'] == "no" )
	$exclude_office_ip_checked = "checked";
$only_office_ip_checked = "";
if( $_GET['only_show_internal_ip'] == "yes" )
	$only_office_ip_checked = "checked";

$bg_red = "#FFE5E5";
$bg_green = "#E5FFE5";

?>






<form>
	<p><strong>Enter the timeframe below in EST time.</strong></p>
        <strong>From</strong>
        <input type='text' name='start_date' id='start_date' value='<? echo $start_date; ?>' />
        <strong>End</strong>
        <input type='text' name='end_date' id='end_date' value='<? echo $end_date; ?>' />
        <input type='submit' value='submit' />
        <input type='hidden' name='option' id='option' value='com_communitysupport' />
        <input type='hidden' name='task' id='task' value='prechat_survey_data' />

        <!-- <div><input type='checkbox' name='grab_editor_username' id='grab_editor_username' value='1' <? echo $grab_editor_username_checked; ?> />select editor username</div>
        <div><input type='checkbox' name='feedback_without_trac' id='feedback_without_trac' value='1' <? echo $feedback_without_trac_checked; ?> />show only feedback without a trac ticket</div> -->

	<div>
		<strong>Office IP Addresses</strong><br />
		<input type="radio" name="only_show_internal_ip" id="only_show_internal_ip" value="no" <? echo $exclude_office_ip_checked; ?>>Exclude office ip's<br />
		<input type="radio" name="only_show_internal_ip" id="only_show_internal_ip" value="yes" <? echo $only_office_ip_checked; ?>>Only show office ip's
	</div>

</form>






<?

if( $_GET['start_date'] AND $_GET['end_date'] )
{
	// the server time is PST
	//
	// when we query the database, we want to grab the gmt time (which is what is stored) - 5
	$start_date = strtotime($_GET['start_date']) - (3*60*60);
        $end_date = strtotime($_GET['end_date']) - (3*60*60);

	/*
        $sql_feedback_without_trac = "";
        if( $_GET['feedback_without_trac'] == 1 )
                $sql_feedback_without_trac = " AND `fb`.`trac` = 0 AND `fb`.`feedback` != '' ";
	*/

	$show_id_only = "";
	if( is_numeric($_POST['show_id_only']) )
		$show_id_only = " AND `id` = " . $_POST['show_id_only'] . " ";

	$only_show_internal_ip = "";
	if( $_GET['only_show_internal_ip'] == "yes" )
		$only_show_internal_ip = " AND `user_ip` IN ('216.54.31.86') ";
	if( $_GET['only_show_internal_ip'] == "no" )
		$only_show_internal_ip = " AND `user_ip` NOT IN ('216.54.31.86') ";

        $query = "
	        SELECT *
		FROM #__prechat
		WHERE (`timestamp_n` BETWEEN '$start_date' AND '$end_date')
		$show_id_only
		$only_show_internal_ip
	";

        $db->setQuery($query);
        $results = $db->loadObjectList();
	// echo "<pre>"; print_r($results); echo "</pre>";

	echo "	<table class='table'>
			<tr>
				<th>#</th>
				<th>id</th>
				<th>timestamp</th>
				<th>user ip</th>
				<th>name</th>
				<th>email</th>
				<th>domain</th>
				<th>question</th>
				<th>letter count</th>
				<th>launched chat</th>
				<th># results</th>
				<th># clicks</th>
				<th>timeout?</th>
				<th>user agent</th>
			</tr>
	";
	$count = 0;
	$total_prechats = 0;
	$launched_by_timeout = 0;
	$logical_prevented_chat = 0;
	$illogical_prevented_chat = 0;
	$clicked_link_but_chatted = 0;
	$chats_launched = 0;
	$unique_search_agains = 0;
	$clicked_link = 0;
	foreach($results as $k => $v)
	{
		$count++;

		$launched_chat_bg = $bg_red;
		if( $v->launched_chat == "0" )
			$launched_chat_bg = $bg_green;
		$num_results_bg = $bg_red;
		if($v->num_results > 0)
			$num_results_bg = $bg_green;
		$num_clicks_bg = $bg_red;
		if($v->num_clicks > 0)
			$num_clicks_bg = $bg_green;
		$timeout_bg = $bg_red;
		if($v->timeout == "0")
			$timeout_bg = $bg_green;

		// if this is an inital search, not a search again
		if( strlen($v->timestamp_n_id) == 14)
		{
			$total_prechats++;
			if($v->timeout == "1")
				$launched_by_timeout++;
			if($v->num_results > 0 AND $v->launched_chat == "0" AND $v->num_clicks > 0)
				$logical_prevented_chat++;
			if($v->launched_chat == "0" AND $v->num_clicks == 0)
                        	$illogical_prevented_chat++;
			if($v->num_clicks > 0 AND $v->launched_chat == "1")
				$clicked_link_but_chatted++;
			if($v->launched_chat == "1")
				$chats_launched++;
			if($v->num_clicks > 0)
				$clicked_link++;
		}
		if( strlen($v->timestamp_n_id) == 16 AND substr($v->timestamp_n_id, -2) == "01")
                {
                        $unique_search_agains++;
                }

		$user_agent_bg = "#fff";
                if($v->launched_chat == "0" AND $v->num_clicks == 0)
                        $user_agent_bg = "#FFE6CC";

		echo "	<tr>
				<td>$count</td>
				<td>
					<form method='post' style='padding:0px; margin:0px;'>
						<input type='hidden' name='show_id_only' id='show_id_only' value='" . $v->id . "' />
						<input type='submit' value='" . $v->id . "' />
					</form>
					<em>" . $v->timestamp_n_id . "</em>
				</td>
				<td>" . date("Y-m-d h:i:s A",$v->timestamp_n + (60*60*3)) . " <em>EST</em><br />" . $v->timestamp_n . "</td>
				<td>" . htmlentities($v->user_ip,ENT_QUOTES) . "</td>
				<td>" . htmlentities($v->name,ENT_QUOTES) . "</td>
				<td>" . htmlentities($v->email,ENT_QUOTES) . "</td>
				<td>" . htmlentities($v->domain,ENT_QUOTES) . "</td>
				<td style='white-space:pre-wrap; width:300px; word-break:break-all;'>" . htmlentities($v->question,ENT_QUOTES) . "</td>
				<td>" . strlen($v->question) . "</td>
				<td style='background:$launched_chat_bg;'>" . $v->launched_chat . "</td>
				<td style='background:$num_results_bg;'>" . $v->num_results . "</td>
				<td style='background:$num_clicks_bg;'>" . $v->num_clicks . "</td>
				<td style='background:$timeout_bg;'>" . $v->timeout . "</td>
				<td style='background:$user_agent_bg;'>" . htmlentities($v->http_user_agent,ENT_QUOTES) . "</td>
			</tr>
		";
	}
	echo "	</table>";





	echo "	<h1>Summary</h1>
		<table class='table' style='width:400px;'>
			<tr style='background:#ddd;'>
				<th>Total PreChats</th>
				<td>$total_prechats</td>
				<td>100%</td>
			</tr>
			<tr style='background:#ddd;'>
                                <th>Chats Launched</th>
                                <td>$chats_launched</td>
				<td>" . round($chats_launched/$total_prechats*100,2) . "%</td>
			</tr>
			<tr style='background:#CCFFE6;'>
                                <th>Instances that Searched Again</th>
                                <td>$unique_search_agains</td>
                                <td>" . round($unique_search_agains/$total_prechats*100,2) . "%</td>
                        </tr>
			<tr style='background:#CCFFE6;'>
				<th>Chats Prevented : LOGICAL</th>
				<td>$logical_prevented_chat</td>
				<td>" . round($logical_prevented_chat/$total_prechats*100,2) . "%</td>
			</tr>
			<tr style='background:#FFE6CC;'>
                                <th>Chats Prevented : ILLOGICAL</th>
                                <td>$illogical_prevented_chat</td>
				<td>" . round($illogical_prevented_chat/$total_prechats*100,2) . "%</td>
                        </tr>
			<tr style='background:#FFE6CC;'>
                                <th>Prechats with 1 or more link clicks</th>
                                <td>$clicked_link</td>
                                <td>" . round($clicked_link/$total_prechats*100,2) . "%</td>
                        </tr>
			<tr style='background:#FFCCCC;'>
				<th>FAIL: Chats Launched by Timeout</th>
				<td>$launched_by_timeout</td>
				<td>" . round($launched_by_timeout/$total_prechats*100,2) . "%</td>
			</tr>
			<tr style='background:#FFCCCC;'>
                                <th>FAIL: Clicked link AND clicked chat</th>
				<td>$clicked_link_but_chatted</td>
				<td>" . round($clicked_link_but_chatted/$total_prechats*100,2) . "%</td>
			</tr>
		</table>
	";
}

?>
