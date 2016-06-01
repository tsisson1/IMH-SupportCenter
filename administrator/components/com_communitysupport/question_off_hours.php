<?

if( $user->username != "BradM" AND $user->username != "TJEdens" AND $user->username != "timothy_s")
	die('access denied');

/**
 * add an item
 */
if ($_POST['taska'] == "new")
{
	$query = "
		INSERT	INTO #__question_off_hours
			(`id`,`user_id`,`date_add`,`start_nn`,`end_nn`,`reason`)
		VALUES	(NULL," . $user->id . ",CURRENT_TIMESTAMP,'" . addslashes($_POST['start_nn']) . "','" . addslashes($_POST['end_nn']) . "','" . addslashes($_POST['reason']) . "');
	";
	$db->setQuery($query);
	$db->execute();
	echo "<p class='alert alert-success'>New item added.</p>";
}

/**
 * delete an item
 */
if ($_POST['taska'] == "delete" AND is_numeric($_POST['id']))
{
	$query = "DELETE FROM #__question_off_hours WHERE `id` = " . $_POST['id'] . " LIMIT 1;";
	$db->setQuery($query);
        $db->execute();
        echo "<p class='alert alert-success'>Item deleted</p>";
}

?>






<p>Use this page to setup times in which <strong>guaranteed question response times</strong> should not be used, such as during holidays.</p>

<form method='post'>
	<table class='table table-striped'>
		<tr>
			<th>Start time</th>
			<td><input type='text' name='start_nn' id='start_nn' /> <i>EST 0000-00-00 00:00:00</i></td>
		</tr>
		<tr>
			<th>End time</th>
                        <td><input type='text' name='end_nn' id='end_nn' /> <i>EST 0000-00-00 00:00:00</i></td>
                </tr>
		<tr>
			<th>Reason</th>
			<td><textarea name='reason' id='reason' style='width:400px; height:200px;'></textarea></td>
		</tr>
		<tr>
			<th></th>
			<td><input type='submit' value='submit' class='btn btn-primary' /></td>
		</tr>
	</table>
	<input type='hidden' name='taska' id='taska' value='new' />
</form>






<?

$query = "SELECT * FROM #__question_off_hours;";
$db->setQuery($query);
$dates = $db->loadObjectList();

echo "<table class='table table-striped'><tr><th>Start</th><th>End</th><th>Reason</th><th>Action</th></tr>";
foreach($dates as $k => $v)
	echo "
	<tr>
		<td>" . $v->start_nn . "</td><td>" . $v->end_nn . "</td><td>" . $v->reason . "</td>
		<td>
			<form method='post'>
				<input type='hidden' name='taska' id='taska' value='delete' />
				<input type='hidden' name='id' id='id' value='" . $v->id . "' />
				<input type='submit' value='delete' class='btn btn-danger' />
			</form>
		</td>
	</tr>";
echo "</table>";
?>
