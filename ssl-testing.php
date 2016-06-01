<?

	echo "<h1>\$_SERVER</h1>";
	echo "<pre>"; print_r($_SERVER); echo "</pre>";



	echo "<h1>apache_request_headers()</h1>";
	echo "<pre>"; print_r(apache_request_headers()); echo "</pre>";



	echo "<h1>apache_response_headers()</h1>";
        echo "<pre>"; print_r(apache_response_headers()); echo "</pre>";



	echo "<h1>flush() and apache_response_headers()</h1>";
        flush(); echo "<pre>"; print_r(apache_response_headers()); echo "</pre>";



	echo "<h1>headers_list()</h1>";
        echo "<pre>"; print_r(headers_list()); echo "</pre>";


	echo "<h1>headers_sent()</h1>";
        echo "<pre>"; print_r(headers_sent()); echo "</pre>";
?>
