<?

if( $user->username != "admin" AND $user->username != "timr_imh" )
{
	die("<div style='color:red; font-size:100px;'>This project currently on hold</div>");
}


if( $_GET['mytask'] == "add_new_question" AND $_POST['user_question'] )
{
	$query = "	INSERT INTO #__testing_prechat_survey
			(`id`,`timestamp`,`user_question`,`success`,`username`)
			VALUES (NULL,CURRENT_TIMESTAMP,'" . addslashes($_POST['user_question']) . "','0','" . $user->username . "');
	";
	$db->setQuery($query);
	$result = $db->execute();
	echo "<div style='background:green; padding:4px; color:#fff;'>New question has been added!</div>";
}






if( $_GET['mytask'] == "update_status" AND $_POST['question_id'] AND $_POST['success_status'] )
{
	if( $_POST['success_status'] == "pass" OR $_POST['success_status'] == "fail" )
	{
		if( $_POST['success_status'] == "pass" )
			$success_value = 1;
		if( $_POST['success_status'] == "fail" )
			$success_value = -1;
		$query = "UPDATE #__testing_prechat_survey SET `success` = $success_value WHERE `id` = " . $_POST['question_id'] . " LIMIT 1;";
	}

	if( $_POST['success_status'] == "add note" )
		$query = "UPDATE #__testing_prechat_survey SET `notes` = '" . addslashes($_POST['notes']) . "' WHERE `id` = " . $_POST['question_id'] . " LIMIT 1;";

	$db->setQuery($query);
        $result = $db->execute();
}






echo "	<h1>Enter a new user query</h1>
	<form method='post' action='/support/administrator/index.php?option=com_communitysupport&task=prechat_survey_testing&mytask=add_new_question'>
		<textarea name='user_question' id='user_question' style='width:600px; height:100px; display:block;'></textarea>
		<input type='submit' value='submit' />
	</form>
";






$query = "SELECT * FROM #__testing_prechat_survey ORDER BY `id` DESC LIMIT 50;";
$db->setQuery($query);
$results = $db->loadObjectList();
echo "	<h2>Latest 50 questions</h2>
	<table cellpadding='2' border='1'>
		<tr style='background:#ddd; text-align:left;'>
			<th>#</th>
			<th>id</th>
			<th>Submitter</th>
			<th>time added</th>
			<th>User Question</th>
			<th>Success?</th>
			<th>Review</th>
		</tr>
";
foreach( $results as $results_k => $results_v )
{
	$total_question++;

	if( $results_v->success == "1" )
		$success_total++;
	if( $results_v->success == "-1" )
		$fails_total++;

	$notes_bg = "#fff";
	if( $results_v->success == "-1" AND $results_v->notes == "" )
		$notes_bg = "#FFCCCC";
	if( $results_v->success == "-1" AND $results_v->notes != "" )
		$notes_bg = "#CCFFCC";

	if( $results_v->success == "-1" )
		$status_bg = "#FFCCCC";
	if( $results_v->success == "1" )
		$status_bg = "#CCFFCC";
	if( $results_v->success == "0" )
		$status_bg = "red";

	$show_notes_tr = "";
	if( $results_v->success == "-1" )
		$show_notes_tr = "
			<tr>
                        	<td colspan='5'><textarea name='notes' id='notes' style='display:block; width:98%; height:50px; font-size:11px; margin:0px; background:" . $notes_bg . ";'>" . $results_v->notes . "</textarea></td>
	                        <td><input type='submit' name='success_status' id='success_status' value='add note' /></td>
        	        </tr>
		";

	echo "	<form method='post' action='/support/administrator/index.php?option=com_communitysupport&task=prechat_survey_testing&mytask=update_status'>
		<tr>
			<td style='background:yellow;'>$total_question</td>
			<td>" . $results_v->id . "</td>
			<td>" . $results_v->username . "</td>
			<td>" . $results_v->timestamp . "</td>
			<td>
				<p>" . htmlspecialchars($results_v->user_question,ENT_QUOTES) . "</p>
				<p>
					<a href='/support/search?searchword=" . urlencode($results_v->user_question) . "&tell_me_why=1' target='_88ewsearchresults'>search in new window</a>
				</p>
			</td>
			<td style='background:" . $status_bg . ";'>" . $results_v->success . "</td>
			<td style='width:100px;'>
				<input type='hidden' name='question_id' id='question_id' value='" . $results_v->id . "' />
				<input type='submit' name='success_status' id='success_status' value='pass' style='background:green;' />
				<input type='submit' name='success_status' id='success_status' value='fail' style='background:red;' />
			</td>
		</tr>
		$show_notes_tr
		</form>
	";
}
echo "	</table>
	<table border='1' cellpadding='2'>
		<tr style='background:green;'>
			<td style='padding-right:10px;'>pass:</td>
			<td>" . round($success_total / $total_question * 100,2)   . "%</td>
		</tr>
		<tr style='background:red;'>
			<td>fail:</td>
			<td>" . round($fails_total / $total_question * 100,2) . "%</td>
		</tr>
	</table>

";






$starting_date = "2013-10-11 00:00:00";
echo "	<h2 style='margin-top:40px;'>Historical Progress</h2>
	<table border='1' cellpadding='4'>
		<tr>
			<td>Date</td>
			<td># Checked</td>
			<td>% pass</td>
			<td>% fail</td>
		</tr>";
while( date("Y-m-d",strtotime($starting_date)) <= date("Y-m-d",time()) )
{

	$query = "SELECT count(`id`) AS 'count' FROM #__testing_prechat_survey WHERE `success` != '0' AND `timestamp` LIKE '" . date("Y-m-d",strtotime($starting_date)) . "%';";
	$db->setQuery($query);
	$results = $db->loadObjectList();
	$total_checks = $results[0]->count;

	$query = "SELECT count(`id`) AS 'count' FROM #__testing_prechat_survey WHERE `success` = '1' AND `timestamp` LIKE '" . date("Y-m-d",strtotime($starting_date)) . "%';";
        $db->setQuery($query);
        $results = $db->loadObjectList();
        $total_pass = $results[0]->count;

	$query = "SELECT count(`id`) AS 'count' FROM #__testing_prechat_survey WHERE `success` = '-1' AND `timestamp` LIKE '" . date("Y-m-d",strtotime($starting_date)) . "%';";
        $db->setQuery($query);
        $results = $db->loadObjectList();
        $total_fail = $results[0]->count;

	if( $total_checks > 0 )
	{
		echo "	<tr>
				<td style='background:#ddd;'>" . date("Y-m-d",strtotime($starting_date)) . "</td>
				<td>$total_checks</td>
				<td style='background:green;'>" . round($total_pass/$total_checks*100,0) . "%</td>
				<td style='background:red;'>" . round($total_fail/$total_checks*100,0) . "%</td>
			</tr>
		";
	}

	$starting_date = date("Y-m-d 00:00:00", strtotime($starting_date) + (60*60*26));
}
echo "</table>";



?>
