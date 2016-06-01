<?
	$option = JRequest::getVar('option');
	$view = JRequest::getVar('view');
	$id = JRequest::getVar('id');

	echo "<a style='position:fixed; bottom:0px; left:0px; display:block;' class='iframe' href='/support/internal/index.php?option=$option&view=$view&id=$id'>W</a>";

	// do we have unanswered questions?
	// Get cURL resource
	$curl = curl_init();
	// Set some options - we are passing in a useragent too here
	curl_setopt_array($curl, array(
	    CURLOPT_RETURNTRANSFER => 1,
	    CURLOPT_URL => 'http://www.inmotionhosting.com/support/internal/?unanswered_questions=1',
	    CURLOPT_USERAGENT => 'IMH Support Center'
	));
	// Send the request & save response to $resp
	$resp = curl_exec($curl);
	// Close request to clear up some resources
	curl_close($curl);
	if($resp > 0)
		echo "<a style='position:fixed; bottom:0px; right:0px; display:block; color:red;' class='iframe' href='/support/internal/?unanswered_questions=2'>$resp</a>";

?>
