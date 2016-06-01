<?


echo "
	<form method='post'>
		<input type='hidden' name='task_a' id='task_a' value='run_stats' />
		<input type='submit' class='btn btn-primary' value='run stats' />
	</form>
";






if( $_POST['task_a'] == "run_stats" )
{
	$query = "SELECT `timestamp_n_id`,`user_ip` FROM #__prechat WHERE length(`timestamp_n_id`) = 14 ORDER BY `id` DESC LIMIT 0,100;";
	$db->setQuery($query);
	$results = $db->loadObjectList();

	echo "	<table class='table table-striped'>
			<tr>
				<th>#</th>
				<th>timestamp_n_id</th>
				<th># of instances</th>
			</tr>
	";
	$x = 0;
	foreach($results as $k => $o)
	{

		if( ! isset($found_timestamp_n_id[$o->timestamp_n_id]) )
		{
			$x++;

			$query = "SELECT count(`id`) as `count` FROM #__prechat WHERE `timestamp_n_id` = '" . $o->timestamp_n_id . "';";
			$db->setQuery($query);
			$count = $db->loadResult();

			$count_color = 'CCFFCC';
			if($count > 1)
			{
				$count_color = 'FFCCCC';
				$duplicates++;
			}

			echo "	<tr>
					<td>$x</td>
					<td>" . $o->timestamp_n_id . "</td>
					<td style='background:#$count_color;'>$count</ty>
				</tr>
			";

			$found_timestamp_n_id[$o->timestamp_n_id]++;
		}
	}
	echo "	</table>";

	echo "	<table class='table table-striped'>
			<tr>
				<th>Total rows</th>
				<td>$x</td>
			</tr>
			<tr>
				<th>Total duplicates</th>
				<td>$duplicates <span style='font-size:11px;'>" . round($duplicates/$x*100,2) . "%</span></td>
			</tr>
		</table>
	";
}


?>
