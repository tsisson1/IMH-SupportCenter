<?

$query = "
SELECT	`user_ip`,`timestamp_n`,`email`,`domain`,`question`
FROM	#__prechat
WHERE	(`user_ip` != '216.54.31.86') AND
	(LENGTH(`timestamp_n_id`) = 14)
ORDER BY `id` DESC
LIMIT 50
";
$db->setQuery($query);
$results = $db->loadObjectList();
//echo "<pre>"; print_r($results); echo "</pre>";


$search_term = $_POST['search_term'];



echo "
<form method='POST'>
Search for: <input type='text' name='search_term'><br>
<input type='submit'>
</form>
<p>Searched words will be highlighted <span style='background-color: #FF0000;color: white;'>red</span>.</p>


<table>
    <tr>
        <th>Highlighted Words</th>
    </tr>
<tr>
<td bgcolor='#601F1f'><font color='#fff'>error</font>
</td>
</tr>
<tr>
<td bgcolor='#1F4060'><font color='#fff'>mail</font>
</td>
</tr>
<tr>
<td bgcolor='#BD7D3D'><font color='#fff'>site</font>
</td>
</tr>
<tr>
<td bgcolor='#1F601F'><font color='#fff'>down</font>
</td>
</tr>
<tr>
<td bgcolor='#601F60'><font color='#fff'>name</font>
</td>
</tr>
<tr>
<td bgcolor='#601F60'><font color='#fff'>pass</font>
</td>
</tr>
<tr>
<td bgcolor='#601F60'><font color='#fff'>log in</font>
</td>
</tr>
<tr>
<td bgcolor='#601F60'><font color='#fff'>login</font>
</td>
</tr>

</table>
";


echo "
<h1>Latest 50 PreChat Surveys</h1>
<table class='table table-striped'>
	<tr>
		<th>timestamp EST</th>
		<th>ip</th>
		<th>email</th>
		<th>domain</th>
		<!-- <th>domain ip</th> -->
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

	$highlight['mail'] = "1F4060";
	$highlight['site'] = "BD7D3D";
	$highlight['error'] = "601F1F";
	$highlight['down'] = "1F601F";


	$highlight['name'] = "601F60";
	$highlight['pass'] = "601F60";
	$highlight['log in'] = "601F60";
	$highlight['login'] = "601F60";
    $highlight[$search_term] = "FF0000";

	foreach($highlight as $highlight_word => $highlight_color)
	{
		$safe_html = str_replace($highlight_word,"<span style='background:#$highlight_color;color:#fff;font-size:17px;font-weight:bold;'>$highlight_word</span>",$safe_html);
	}

	echo "
	<tr>
		<td>" . date("h:i a",$o->timestamp_n + (60*60*3)) . "</td>
		<td>" . $o->user_ip . "</td>
		<td>" . htmlentities($o->email,ENT_QUOTES) . "</td>
		<td>" . htmlentities($o->domain,ENT_QUOTES) . "</td>
		<!-- <td>$domain_ip</td> -->
		<td>$safe_html</td>
	</tr>";
}
echo "</table>";





asort($domain_ip_count);
#cho "<pre>"; print_r($domain_ip_count); echo "</pre>";



?>
