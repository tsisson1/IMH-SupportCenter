<?

include_once("../functions_scv2.php");

$rgfv = rgfv();

// overlay - join the community
ob_start();
	include_once("overlay_join_the_community.php");
	$return['overlay_join'] = ob_get_contents();
ob_end_clean();

// increase hits
ob_start();
	include_once("increase_hits.php");
        $return['page_views'] = ob_get_contents();
ob_end_clean();

// latest news
ob_start();
	include_once("latest_news.php");
	$return['latest_news'] = ob_get_contents();
ob_end_clean();

// setup some variables
$return['timestamp_n_id'] = time() . rand(1000,1999);
$return['user_ip'] = $rgfv->user_ip;

// return the data
echo json_encode($return);
die();

?>
