<?

if( $_GET['domain'] )						// if the user submitted a domain
{
	exec("whois " . $_GET['domain'],$output);		// run the whois command
	foreach($output as $k => $v)				//
		echo "<pre>$v</pre>";				// print the results of the whois lookup
}

?>
