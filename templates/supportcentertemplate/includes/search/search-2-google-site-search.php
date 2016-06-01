<?


// if we're performing a search
if (isset($_GET['searchword']))
{
	$h1 = "Search results for: <span style='color:#aaa;'>" . htmlentities($_GET['searchword'],ENT_QUOTES) . "</span>";
	$curlopt_url = "http://www.inmotionhosting.com/support/gadgets/search/?searchword=" . urlencode($_GET['searchword']);

	// use curl to search the support center for the last alias
	$curl = curl_init();
	curl_setopt_array($curl, array(
	    CURLOPT_RETURNTRANSFER => 1,
	    CURLOPT_URL => $curlopt_url,
	    CURLOPT_USERAGENT => 'Support Center Error Page Curl Request'
	));
	$original_response = curl_exec($curl);
	$resp = json_decode($original_response);
	curl_close($curl);

	if ($_GET['rf']=="json")
		die($original_response);

	if( $resp )
	{
        	foreach($resp as $resp_key => $resp_value)
	        {
        	        $curl_search_results .= "
                	        <p><a href='" . $resp_value->url . "'>" . $resp_value->title . "</a><br />" . $resp_value->description . "</p>
	                ";
        	}
		$curl_search_results .= "<p class='alert' style='margin-top:20px;'>If you're not finding what you need, feel free to <a href='/support/community-support/ask-a-question'>ask us a question</a>.</p>";
	}
	else
	{
		$curl_search_results .= "<p class='alert' style='margin-top:20px;'>Sorry, we did not find any search results. Please search again or feel free to <a href='/support/community-support/ask-a-question'>ask us a question</a>.</p>";
	}
}
// if we're simply visiting /search
else
{
	$h1 = "Search";
}

echo "
	<div class='item-page'>
		<div class='page-header'><h1>$h1</h1></div>
		<form method='get' action='/support/search' >
                        <input type='text' name='searchword' id='mod-search-searchword' style='width:500px;' value='" . htmlentities($_GET['searchword'],ENT_QUOTES) . "' />
                        <button class='button btn btn-info' onclick='this.form.searchword.focus();' style='display:inline-block; width:80px; border-radius:3px; height:32px; line-height:22px; margin:0px;'>Search</button>
                </form>
		$curl_search_results
	</div>
";


?>
