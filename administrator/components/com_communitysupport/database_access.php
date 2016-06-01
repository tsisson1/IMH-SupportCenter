<?







$tables = array("#__questions","#__answers","#__comments","#__question_to_question","#__question_updates","#__answer_comments","#__bad_url_redirects","#__pup","#__cxs_checks");
$table_dropdown = "<select name='table_name' id='table_name'>";
foreach($tables as $k => $v)
	$table_dropdown .= "<option value='$v'>$v</option>";
$table_dropdown .= "</select>";






$url_redirect_types = array("ends","includes");





// security stuff
if( isset($_GET['table_name']) AND ! in_array($_GET['table_name'],$tables) )
	die('you do not have access to edit this table');
if( isset($_POST['table_name']) AND ! in_array($_POST['table_name'],$tables) )
        die('you do not have access to edit this table');
if( isset($_GET['row_id']) AND ! is_numeric($_GET['row_id']) )
	die('row_id needs to be numeric');
if( isset($_POST['type']) AND ! in_array($_POST['type'],$url_redirect_types) )
        die('only ends and includes allowed');
if(	isset($_POST['where_clause']) AND
	(
		substr_count($_POST['where_clause'],";") > 0 OR
		substr_count($_POST['where_clause'],"//") > 0
	)
)
	die('do not use ; or // in your where clause');






$described_tables = "	<a name='tables-described'></a>
			<h1>Tables Described <span style='font-size:10px;'><a onClick=\"jQuery('#tables_described_div').slideToggle();\">show/hide</a></span></h1>
			<div name='tables_described_div' id='tables_described_div' style='display:none;'>
				<p>
";
foreach($tables as $table_k => $table_v)
	$described_tables .= " <a href='#" . str_replace("#__","table_",$table_v) . "'>$table_v</a> ";
$described_tables .= "		</p>";
foreach($tables as $table_k => $table_v)
{
	$query = "DESCRIBE $table_v;";
	$db->setQuery($query);
	$results = $db->loadObjectList();

	$described_tables .= "	<a name='" . str_replace("#__","table_",$table_v) . "'></a>
				<h2>$table_v</h2>
				<table class='table table-striped'>
					<tr>
	";
	foreach($results[0] as $k => $v)
		$described_tables .= 		"<th>$k</th>";
	$described_tables .= "		</tr>";
	foreach($results as $k => $v)
	{
		$described_tables .= "	<tr>";
		foreach($v as $column_id => $column_value)
			$described_tables .= "	<td>$column_value</td>";
		$described_tables .= "		</tr>";
	}
	$described_tables .=	"</table>";
}
$described_tables .= "	</div>";






$form_insert_bad_url_redirect = "
	<a name='new_bur'></a>
	<h1>Add new bad_url_redirect <span style='font-size:10px;'><a onClick=\"jQuery('#form_add_bad_url_redirect').slideToggle();\">show/hide</a></span></h1>
	<form method='post' name='form_add_bad_url_redirect' id='form_add_bad_url_redirect' style='display:none;'>
		<input type='hidden' name='task_a' id='task_a' value='insert_bur' />
		<table class='table table-striped'>
			<tr>
				<th>type</th>
				<td>
					<select name='type' id='type'>
						<option value='ends'>Ends</option>
						<option value='includes'>Includes</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>Value</th>
				<td><input type='text' name='value' id='value' /></td>
			</tr>
			<tr>
				<th>New full url</th>
				<td><input type='text' name='new_full_url' id='new_full_url' /></td>
			</tr>
		</table>
		<input type='submit' value='Add new bad_url_redirect' class='btn btn-primary' />
	</form>
";






echo "
	<a name='edit'></a>
	<h1>Edit <span style='font-size:10px;'><a onClick=\"jQuery('#enter_id_to_edit').slideToggle();\">show/hide</a></span></h1>
	<form method='get' name='enter_id_to_edit' id='enter_id_to_edit' style='display:none;'>
		<table class='table table-striped'>
			<tr>
				<th>Choose a table:</th>
				<td>$table_dropdown</td>
			</tr>
			<tr>
				<th>Enter an id:</th>
				<td>	<input type='text' name='row_id' id='row_id' />
					<input type='submit' value='Go' class='btn btn-primary' />
				</td>
			</tr>
		</table>
		<input type='hidden' name='task_a' id='task_a' value='search_for_edit' />
		<input type='hidden' name='option' id='option' value='com_communitysupport' />
		<input type='hidden' name='task' id='task' value='database_access' />
	</form>

	<a name='search'></a>
	<h1>Search <span style='font-size:10px;'><a onClick=\"jQuery('#search_form').slideToggle();\">show/hide</a></span></h1>
	<form method='post' style=\"font-family:'Courier New', Courier, monospace;display:none;\" name='search_form' id='search_form'>
		<input type='hidden' name='task_a' id='task_a' value='search' />
		<table class='table table-striped'>
			<tr>
				<th>SELECT</th>
				<td>*</td>
			</tr>
			<tr>
				<th>FROM</th>
				<td>$table_dropdown</td>
			</tr>
			<tr>
				<th>WHERE</th>
				<td><textarea name='where_clause' id='where_clause' style=\"width:800px;height:40px;font-family:'Courier New', Courier, monospace\"></textarea></td>
			</tr>
			<tr>
				<th>LIMIT</th>
				<td>0,30</td>
			</tr>
		</table>
		<input type='submit' value='Search' class='btn btn-primary' />
	</form>
	<div style='position:fixed; bottom:31px; left:0px; background:#fff; border:1px solid #ddd; width:100%; height:30px; padding:4px; text-align:center; border-bottom:1px solid red;'>
		<a href='index.php?option=com_communitysupport&task=database_access'><strong>Database Access</strong></a>: 
		<a href='#edit'>Edit</a> | 
		<a href='#search'>Search</a> |
		<a href='#search-results'>Search Results</a> | 
		<a href='#tables-described'>Tables Described</a> | 
		<a href='#new_bur'>Add new bad_url_redirect</a>
	</div>
";






switch ($_POST['task_a'])
{
	case "edit_row":
		edit_data_row($db);
		break;
	case "search":
		search_a_table($db);
		break;
	case "delete_row":
		delete_a_row($db);
		break;
	case "insert_bur":
		insert_new_bad_url_redirect($db);
		break;
}






switch( $_GET['task_a'] )
{
	case "search_for_edit":
		if( ! $_POST['delete_row'] )
			display_edit_form($db,$tables);
		break;
}






echo $described_tables;
echo $form_insert_bad_url_redirect;






function display_edit_form($db,$tables)
{
	if( in_array($_GET['table_name'],$tables) AND is_numeric($_GET['row_id']) )
	{
		
		$query = "SELECT * FROM " . $_GET['table_name'] . " WHERE `id` = " . $_GET['row_id'];
		$db->setQuery($query);
		$results = $db->loadObjectList();
		// // echo "<pre>"; print_r($results); echo "</pre>";

		foreach($results[0] as $k => $v)
			$form_data .= "	<tr>
						<th>$k</th>
						<td><textarea name='$k' id='$k' style=\"width:800px;height:20px;font-family:'Courier New', Courier, monospace\">" . htmlentities($v,ENT_QUOTES) . "</textarea></td>
					</tr>
			";
		echo "  <h1>Edit table row:</h1>
			<form method='post'>
				<table class='table table-striped'>
					$form_data
				</table>
				<input type='hidden' name='task_a' id='task_a' value='edit_row' />
				<input type='submit' value='Edit' class='btn btn-primary' />
			</form>
			<form method='post' style='float:right;'>
				<input type='hidden' name='task_a' id='task_a' value='delete_row' />
				<input type='submit' value='Delete' class='btn btn-danger' />
			</form>
			<div style='clear:both;'></div>
                ";
		
	}
	else
	{
		echo "<p class='alert alert-danger'>You do not have access to edit this table. Please see your Supervisor for assistance.</p>";
	}
}






function edit_data_row($db)
{
	$x = 0;

	unset($_POST['id']);
	unset($_POST['task_a']);

	$query = "UPDATE " . $_GET['table_name'] . "\nSET ";
	foreach($_POST as $k => $v)
	{
		if( $x == 0 )
			$query .= "\t`$k` = '" . addslashes($v) . "'";
		else
			$query .= ",\n\t`$k` = '" . addslashes($v) . "'";
		$x++;
	}

	$query .= "\nWHERE `id` = " . $_GET['row_id'] . "\nLIMIT 1;";

	echo "	<p class='alert alert-success'>Running query....</p>
		<pre>" . htmlentities($query,ENT_QUOTES) . "</pre>";
	$db->setQuery($query);
	$result = $db->execute();
	echo "	<p class='alert alert-success'>Done. Double check your work, ensure the changes have been implemented.</p>";
}






function search_a_table($db)
{
	$query = "	SELECT *
			FROM " . $_POST['table_name'] . "
			WHERE " . $_POST['where_clause'] . "
			LIMIT 0,30
	";
	$db->setQuery($query);
	$results = $db->loadObjectList();
	echo "	<a name='search-results'></a>
		<h1>Search Results</h1>
	";

	if($results)
	{
		foreach($results as $k => $v)
		{
			$edit_this = "
				<form method='get'>
					<input type='hidden' name='row_id' id='row_id' value='" . $v->id . "' />
					<input type='hidden' name='task_a' id='task_a' value='search_for_edit' />
			                <input type='hidden' name='option' id='option' value='com_communitysupport' />
			                <input type='hidden' name='task' id='task' value='database_access' />
					<input type='hidden' name='table_name' id='table_name' value='" . $_POST['table_name'] . "' />
					<input type='submit' value='" . $v->id . "' class='btn btn-primary' />
				</form>
			";
			echo "		<table class='table table-striped' style='margin-bottom:50px;'>";
			foreach($v as $table_name => $table_value)
				if( $table_name == "id" )
					echo "  <tr><th>$table_name</th><td>$edit_this</td></tr>";
				else
					echo "	<tr><th>$table_name</th><td>" . htmlentities($table_value,ENT_QUOTES) . "</td></tr>";
			echo "</table>";
		}
	}
	else
	{
		echo "<p class='alert alert-danger'>No results.</p>";
	}

	// echo "<pre>"; print_r($results); echo "</pre>";
}






function delete_a_row($db)
{
	$query = "DELETE FROM " . $_GET['table_name'] . " WHERE `id` = " . $_GET['row_id'] . " LIMIT 1";
	$db->setQuery($query);
	$result = $db->execute();
	echo "<pre>$query</pre>";
	echo "<p class='alert alert-danger'>Row has been deleted. Please be sure to check your work.</p>";
}






function insert_new_bad_url_redirect($db)
{
	echo "<pre>"; print_r($_POST); echo "</pre>";
	$query = "
		INSERT INTO #__bad_url_redirects
		(`id`,`type`,`value`,`new_full_url`)
		VALUES (NULL,'" . $_POST['type'] . "','" . addslashes($_POST['value']) . "','" . addslashes($_POST['new_full_url']) . "');
	";
	$db->setQuery($query);
        $result = $db->execute();
	echo "<p>$query</p>";
	echo "<p class='alert alert-success'>Done, please doublecheck your work.</p>";
}






?>
