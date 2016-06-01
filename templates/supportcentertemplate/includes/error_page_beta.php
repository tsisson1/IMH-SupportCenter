<?


// ---------------------------------------------------------------------------------------------------------------
// 2013.12.27 - JeffMa's suggestion - showing search results
// ---------------------------------------------------------------------------------------------------------------
// get the last alias
$exploded_request_uri = explode("/",$_SERVER['REQUEST_URI']);
$last_alias = $exploded_request_uri[(count($exploded_request_uri)-1)];
$exploded_last_alias = explode("?",$last_alias);
$last_alias = str_replace("-"," ",$exploded_last_alias[0]);

// 2014.03.11 - testing error page with google results
	$curlopt_url = "http://www.inmotionhosting.com/support/search?rf=json&searchword=";
if("enable_google_search" == "enable_google_search")
	$curlopt_url = "http://www.inmotionhosting.com/support/gadgets/search/?rf=json&searchword=";

// use curl to search the support center for the last alias
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $curlopt_url . urlencode($last_alias),
    CURLOPT_USERAGENT => 'Support Center Error Page Curl Request'
));
$resp = json_decode(curl_exec($curl));
curl_close($curl);

if( $resp )
{
	$error_page_suggested_articles = "
		<div>
			<h2>Were you looking for:</h2>
	";
	foreach($resp as $resp_key => $resp_value)
	{
		$error_page_suggested_articles .= "
			<p><a href='" . $resp_value->url . "?tsrc=error_page'>" . $resp_value->title . "</a><br />" . $resp_value->description . "</p>
		";
	}
	$error_page_suggested_articles .= "
		</div>
	";
}
// ---------------------------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------------------------


?>






<div class='item-page'>
	<div class='page-header'>
		<h1>Error: <span style='font-size:24px; color: rgb(170,170,170);'><? echo htmlspecialchars($last_alias,ENT_QUOTES); ?></span></h1>
	</div>
	<p class='alert alert-danger' style='margin-bottom:0px;'>Our apologies, but the page you're looking for cannot be found.</p>
	<div>
		<form method='get' action='/support/search' style='float:left; width:330px;'>
			<h2>Search</h2>
			<p>Try searching for what you are looking for</p>
			<p>
				<input type='text' name='searchword' id='searchword' style='margin:0px;'>
				<input type='submit' value='search' class='btn btn-primary' />
				<input type='hidden' name='tsrc' id='tsrc' value='error_page' />
			</p>
		</form>
		<div style='float:right; width:300px;'>
			<? echo $error_page_suggested_articles; ?>
		</div>
	</div>
	<div style='clear:both;'></div>
</div>






<script type="text/javascript">
	_gaq.push(['_setAccount', 'UA-1501988-1']);
	_gaq.push(['_trackEvent', 'community support', 'error code <? echo $this->error->getCode(); ?>','referer:<? echo addslashes($_SERVER['HTTP_REFERER']); ?>']);
</script>






<?

if( $user->username == "BradM" AND "enabled" == "enabled")
{
	// echo "<pre>"; print_r(get_defined_vars()); echo "</pre>";
	// echo "<pre>"; print_r($this->error); echo "</pre>";
}






// ALERT STAFF OF AN INTERNAL ERROR PAGE
/*
if(	(substr_count($_SERVER['HTTP_REFERER'],"inmotionhosting.com") == 1) AND
	($_SERVER['HTTP_REFERER'] != (JURI::base() . str_replace("/support/","",$_SERVER['REQUEST_URI']))) AND
	($_SERVER['HTTP_REFERER'] != "http://www.inmotionhosting.com/")	)
{
	$fix_this_error_body = "In an effort to ensure we don't have internal links causing 400/500 errors, this email has been automatically generated to inform you that:

THIS PAGE: " . $_SERVER['HTTP_REFERER'] . "

... seems to point to

THIS PAGE: " . JURI::base() . str_replace("/support/","",$_SERVER['REQUEST_URI']) . "

... and is generating a " . $this->error->getCode() . " error.

Please edit the first page referenced above and correct the link. Do not simply remove the link so that this alert will cease, please take a moment and instead correct it.

User ip: " . $_SERVER['HTTP_X_FORWARDED_FOR'] . "
User agent: " . $_SERVER['HTTP_USER_AGENT'] . "
";
	include_once("functions_scv2.php");
	cs_send_email("customer_experience@inmotionhosting.com","IMH - Internal " . $this->error->getCode() . " error",$fix_this_error_body);
}
*/






// ALERT STAFF OF AN EXTERNAL ERROR PAGE
/*
if(     (substr_count($_SERVER['HTTP_REFERER'],"inmotionhosting.com") < 1) AND
        (strlen($_SERVER['HTTP_REFERER']) > 5)
)
{
        $fix_this_error_body = "In an effort to ensure we don't have external links causing 400/500 errors, this email has been automatically generated to inform you that:

THIS PAGE: " . $_SERVER['HTTP_REFERER'] . "

... seems to point to

THIS PAGE: " . JURI::base() . str_replace("/support/","",$_SERVER['REQUEST_URI']) . "

... and is generating a " . $this->error->getCode() . " error.

Please create a bad url redirect for the second page referenced above to fix the issue.

User ip: " . $_SERVER['HTTP_X_FORWARDED_FOR'] . "
User agent: " . $_SERVER['HTTP_USER_AGENT'] . "
";
        include_once("functions_scv2.php");
        cs_send_email("customer_experience@inmotionhosting.com","IMH - External " . $this->error->getCode() . " error",$fix_this_error_body);
}
*/






?>
