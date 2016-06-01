<?

$query = "
SELECT	*
FROM	#__prechat
WHERE	(`user_ip` != '216.54.31.86') AND
	(LENGTH(`timestamp_n_id`) = 14) AND
	(`department` = '2324923566971164486' OR `department` = '1621843185299383618')
ORDER BY `id` DESC
LIMIT 50
";
$db->setQuery($query);
$results = $db->loadObjectList();
//echo "<pre>"; print_r($results); echo "</pre>";






echo "
<h1>Latest 50 PreChat Surveys</h1>
<table class='table table-striped'>
	<tr>
		<th>Info</th>
		<th>question</th>
	</tr>
";
foreach($results as $k => $o)
{
	//
	$clean_domain = $o->domain;
	$clean_domain = str_replace("www.","",$clean_domain);
	//
	$clean_domain = str_replace(";","",$clean_domain);
	$clean_domain = str_replace(" ","",$clean_domain);
	//
	$clean_domain = trim($clean_domain);
	
//	$domain_ip = "";
//	if($o->domain != "")
//		$domain_ip = gethostbyname($clean_domain);

	$domain_ip_count[$domain_ip]++;

	$safe_html = htmlentities(strtolower($o->question),ENT_QUOTES);

	$green_check = "<span style='color:green;font-weight:bold;'>&#x2713;</span>";
	$red_x = "<span style='color:red;font-weight:bold;'>&#x2717;</span>";

	$status_num_clicks = $red_x;
	if($o->num_clicks > 0)
		$status_num_clicks = $green_check;

	$status_launch_chat = $green_check;
	if($o->launched_chat == "1")
		$status_launch_chat = $red_x;

	echo "
	<tr>
		<td>
			" . date("h:i a",$o->timestamp_n + (60*60*3)) . "<br />
			" . $o->user_ip . "<br />
			" . htmlentities($o->email,ENT_QUOTES) . "<br />
			" . htmlentities($o->domain,ENT_QUOTES) . "<br />
			" . htmlentities($o->timestamp_n_id,ENT_QUOTES) . "
		</td>
		<td>
			$safe_html
			<div style='font-size:11px; padding:20px;'>" . $o->html_results . "</div>
			<table>
				<tr><td>Link clicks:</td><td>$status_num_clicks " . $o->num_clicks . "</td></tr>
				<tr><td>Chat launched:</td><td> $status_launch_chat" . $o->launched_chat . "</td></tr>
			</table>
		</td>
	</tr>";
}
echo "</table>";





asort($domain_ip_count);
echo "<pre>"; print_r($domain_ip_count); echo "</pre>";



?>
