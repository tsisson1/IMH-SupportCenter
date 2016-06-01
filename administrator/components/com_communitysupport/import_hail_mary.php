<?

// Get cURL resource
$curl = curl_init();

// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://www.webhostinghub.com/support/includes/ajax_hailmary_terms.php',
    CURLOPT_USERAGENT => 'IMH Support Center'
));

// Send the request & save response to $resp
$resp = curl_exec($curl);

// Close request to clear up some resources
curl_close($curl);

$grabbed_terms = json_decode($resp);

foreach($grabbed_terms as $terms => $word_count)
{
	echo "<div style='margin-top:10px;'>Checking <strong>$terms</strong>...</div>";
	$query = "SELECT * FROM #__search_hail_mary_terms WHERE `terms` = '" . addslashes($terms) . "' AND `number_of_terms` = $word_count;";
	$db->setQuery($query);
	$results = $db->loadObjectList();

	if($results)
		echo "<div style='color:green; padding-left:30px;'>term already exists</div>";
	else
	{
		echo "<div style='color:red; padding-left:30px;'>term does not exist!</div>";
		$query = "	INSERT INTO #__search_hail_mary_terms (`id`,`terms`,`number_of_terms`)
				VALUES (null,'" . addslashes($terms) . "',$word_count);
		";
		$db->setQuery($query);
	        $result = $db->execute();
		echo "<div style='background:green; padding-left:30px;'>term added!</div>";
	}
}

?>
