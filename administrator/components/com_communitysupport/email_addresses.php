<?


$department[1621843185299383618] = "Billing";
$department[2324923566971164486] = "Technical Support 24/7";
$department_by_type['support and billing'] = "('1621843185299383618','2324923566971164486')";
$department[4574741892902413188] = "Sales - Business Class hosting";
$department[161470813524485003] = "Sales - Custom Web Design";
$department[1943748019446294429] = "Sales - Dedicated servers";
$department[3027061675179994483] = "Sales - Reseller Hosting";
$department[1382987596054887839] = "Sales - Virtual Private Servers (VPS)";
$department_by_type['sales'] = "('4574741892902413188','161470813524485003','1943748019446294429','3027061675179994483','1382987596054887839')";
$department[708918024841625095] = "Training - Support";
$department[794814027115867494] = "Training - Sales";


$table_field["#__questions"] = "user_email";
$table_field["#__comments"] = "email_address";
$table_field["#__login_amp_userdata"] = "email";
$table_field["#__login_facebook_userdata"] = "email";
$table_field["#__login_google_userdata"] = "email";
$table_field["#__login_twitter_userdata"] = "email";
$table_field["#__users"] = "email";
// $table_field["#__prechat"] = "email";


// only sma ("Social Media" and "Anonymous")
$table_field_sma["#__questions"] = "user_email";
$table_field_sma["#__comments"] = "email_address";
$table_field_sma["#__login_facebook_userdata"] = "email";
$table_field_sma["#__login_google_userdata"] = "email";
$table_field_sma["#__login_twitter_userdata"] = "email";


// distinct email address count
echo "	<h1><span style='color:orange;'>Distinct</span> Email Address Count <span style='color:orange;'>per table</span></h1>
	<table class='table table-striped'>
		<tr>
			<th>Table</th>
			<th>Distinct # Email Addresses</th>
		</tr>
";
foreach($table_field as $table => $column)
{
	$query = "SELECT COUNT(DISTINCT `$column`) FROM $table WHERE $column != '';";
	$db->setQuery($query);
	$result = $db->loadResult();
	echo "	<tr>
			<td>$table</td>
			<td>$result</td>
		</tr>
	";
}
echo "	</table>";


// from all tables, how many distince email addresses?
foreach($table_field as $table => $column)
	$union_selects[] = "\tSELECT `$column` as 'email_address' FROM $table WHERE `$column` != ''";
$union_query = implode(" UNION\n",$union_selects);
$union_query = "
SELECT COUNT(DISTINCT `email_address`)
FROM (
$union_query
	) as `alltables`;";
$db->setQuery($union_query);
$results = $db->loadResult();
echo "	<h1>Distinct Email Addresses (all)</h1>
	<p>$results</p>
";


// from all social media and anonymous tables, how many distinct email addresses?
unset($union_selects);
unset($union_query);
foreach($table_field_sma as $table => $column)
        $union_selects[] = "\tSELECT `$column` as 'email_address' FROM $table WHERE `$column` != ''";
$union_query = implode(" UNION\n",$union_selects);
$union_query = "
SELECT COUNT(DISTINCT `email_address`)
FROM (
$union_query
        ) as `alltables`;";
$db->setQuery($union_query);
$results = $db->loadResult();
echo "  <h1>Distinct Email Addresses (Scocial Media and Anonymous)</h1>
        <p>$results</p>
";






// prechat //
echo "<h1>Prechat</h1>";
$query = "SELECT COUNT(DISTINCT `email`) as `distinct_emails`, `department` FROM #__prechat WHERE `department` != '' AND `email` != '' GROUP BY `department`;";
$db->setQuery($query);
$distinct_emails_by_department = $db->loadObjectList();
echo "<h2>Distinct Email Addresses FROM prechat GROUPED BY department</h2><table class='table table-striped'><tr><th>Department</th><th>Distinct # email addresses</th></tr>";
foreach($distinct_emails_by_department as $k => $v)
	echo "<tr><td><span title='" . htmlentities($v->department,ENT_QUOTES) . "'>" . $department[$v->department] . ":</span></td><td>" . $v->distinct_emails . "</td></tr>";
echo "</table>";
echo "<h2>Distinct Email Addresses by Department TYPE</h2><table class='table table-striped'><tr><th>Type</th><th>Distinct # email addresses</th></tr>";
foreach($department_by_type as $department_type => $department_ids)
{
	$query = "SELECT COUNT(DISTINCT `email`) as `distinct_emails` FROM #__prechat WHERE `department` IN $department_ids AND `email` != '';";
	$db->setQuery($query);
	$count = $db->LoadResult();
	echo "<tr><td><span title='" . htmlentities($department_ids,ENT_QUOTES) . "'>$department_type</span></td><td>$count</td></tr>";
}
echo "</table>";


?>
