<?

/**
 * edit a department
 */
if ($_POST['action'] == "edit-department" AND is_numeric($_POST['id']) AND is_numeric($_POST['enabled']) AND is_numeric($_POST['order']) )
{
	$query = "UPDATE #__prechat_departments SET `enabled` = " . $_POST['enabled'] . ", `order` = " . $_POST['order'] . " WHERE `id` = " . $_POST['id'] . " LIMIT 1;";
	$db->setQuery($query);
	$db->execute();
	echo "<p class='alert alert-success'>Department updated, <strong>please</strong> test your work.</p>";
}

/**
 * get all of the departments
 */
$query = "SELECT * FROM #__prechat_departments;";
$db->setQuery($query);
$departments = $db->loadObjectList();

/**
 * print table of all departments
 */
echo "	<table class='table table-striped table-bordered'>
		<tr>
			<th>department id</td>
			<th>department name</td>
			<th>enabled</th>
			<th>group</th>
			<th>type</th>
			<th>order</th>
			<th>action</th>
		</tr>
";
foreach($departments as $k => $v)
{
	echo "
		<form method='post'>
		<tr>
			<input type='hidden' name='id' id='id' value='" . $v->id . "' />
			<input type='hidden' name='action' id='action' value='edit-department' />
			<td>" . $v->dep_id . "</td>
			<td>" . $v->dep_title . "</td>
			<td><input type='text' name='enabled' id='enabled' value='" . $v->enabled . "' style='width:40px;' /></td>
			<td>" . $v->group . "</td>
			<td>" . $v->type . "</td>
			<td><input type='text' name='order' id='order' value='" . $v->order . "' style='width:40px;' /></td>
			<td><input type='submit' value='edit' class='btn btn-primar' />
		</tr>
		</form>
	";
}
echo "	</table>";

?>
