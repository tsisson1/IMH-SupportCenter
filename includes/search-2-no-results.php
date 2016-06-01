<?

/*
$result_scores
Array
(
    [/support/edu/cpanel/cpanel-file-manager/using-file-manager-in-cpanel] => 24
    [/support/edu/cpanel/getting-started-cpanel/how-to-log-into-cpanel] => 152
*/

$swnr["renew paypal"] = "";
$swnr["install builder"] = "";
$swnr["tomcat"] = "";

foreach($swnr as $k_swnr => $v_swnr)
{
	$exploded_k_swnr = explode(" ",$k_swnr);

	unset($match_count);
	for($swnr_count = 1; $swnr_count <= count($exploded_k_swnr); $swnr_count++)
	{
		if( substr_count($searchword,$exploded_k_swnr[$swnr_count-1]) > 0 )
			$match_count++;
	}
	if( $match_count >= count($exploded_k_swnr) )
	{
		if($nrr == 0)
		{
			$search_phrases[0] = $k_swnr;
			return_search_results($k_swnr,$search_phrases,1);
		}
	}
}

?>

