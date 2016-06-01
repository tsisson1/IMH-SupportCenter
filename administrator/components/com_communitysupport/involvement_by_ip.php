<?


$start_date = "2014-02-17 00:00:00";
if( $_POST['start_date'] )
        $start_date = $_POST['start_date'];
$end_date = "2014-02-23 23:59:59";
if( $_POST['end_date'] )
        $end_date = $_POST['end_date'];


$internal_ips_array = return_staff_ips();
$internal_ips_csv = implode("', '",$internal_ips_array);
$internal_ips_csv = "'" . $internal_ips_csv . "'";


?>






<form method='post'>
        Start Date: <input type='text' name='start_date' id='start_date' value='<? echo $start_date; ?>' />
        End Date: <input type='text' name='end_date' id='end_date' value='<? echo $end_date; ?>' />
        <input type='submit' value='Get stats' class='btn btn-primary' />
</form>
<p>Staff IP addresses that will be removed from stats: <span style='color:red;'><? echo $internal_ips_csv; ?></span></p>






<?


if( $_POST )
{
        $start_date = strtotime($_POST['start_date']) - (3*60*60);
        $end_date = strtotime($_POST['end_date']) - (3*60*60);

	$table[] = "#__questions";
	$user_ip[] = "asker_ip";
	$timestamp[] = "utc_n_ask_date";

	$table[] = "#__answers";
	$user_ip[] = "user_ip";
	$timestamp[] = "utc_n_answer_date";

	$table[] = "#__answer_comments";
	$user_ip[] = "user_ip";
	$timestamp[] = "utc_n_timestamp";

	$table[] = "#__comments";
	$user_ip[] = "ip";
	$timestamp[] = "utc_n";

	echo "	<h1>Per Table</h1>
		<table class='table table-striped'>
			<tr>
				<th>Table</th>
				<th>Count Distinct</th>
				<th>Total</th>
			</tr>
	";
	foreach($table as $k => $v)
	{
		// count(distinct IP ADDRESS) -------------------------------------------
		$query = "
			SELECT	COUNT(DISTINCT `" . $user_ip[$k] . "`)
			FROM	$v
			WHERE	`" . $user_ip[$k] . "` NOT IN ($internal_ips_csv) AND
				(`" . $timestamp[$k] . "` BETWEEN '$start_date' AND '$end_date');
		";
		$db->setQuery($query);
		$distinct_ip_count = $db->loadResult();

		// sum(entries) ---------------------------------------------------------
		$query = "
                        SELECT  COUNT(`" . $user_ip[$k] . "`)
                        FROM	$v
                        WHERE   `" . $user_ip[$k] . "` NOT IN ($internal_ips_csv) AND
                                (`" . $timestamp[$k] . "` BETWEEN '$start_date' AND '$end_date');
                ";
                $db->setQuery($query);
                $total_ip_count = $db->loadResult();

		// print the data -------------------------------------------------------
		echo "	<tr>
				<td>" . $table[$k] . "</td>
				<td>$distinct_ip_count</td>
				<td>$total_ip_count</td>
			</tr>
		";
	}
	echo "	</table>";


	// from all tables, how many distince email addresses?
	foreach($table as $k => $v)
        	$union_selects[] = "SELECT `" . $user_ip[$k] . "` as 'ip_address' FROM $v WHERE `" . $user_ip[$k] . "` != '' AND (`" . $timestamp[$k] . "` BETWEEN '$start_date' AND '$end_date') AND (`" . $user_ip[$k] . "` NOT IN ($internal_ips_csv)) ";
	$union_query = implode(" UNION ",$union_selects);
	$union_query = "
SELECT COUNT(DISTINCT `ip_address`)
FROM (
$union_query
        	) as `alltables`;";
	// echo "<pre>$union_query</pre>"; die();
	$db->setQuery($union_query);
	$results = $db->loadResult();
	echo "  <h1>Distinct IP Addresses (all)</h1>
		<p>Given the time period submitted, combine ALL IP addresses and remove internal IP's, how many unique IP addresses interacted in the Support Center?</p>
        	<p>$results</p>
	";
}
?>
