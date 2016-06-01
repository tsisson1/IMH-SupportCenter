<?

if( is_numeric($data['id']) AND $data['id'] > 0 AND is_numeric($data['catid']) AND $data['catid'] > 0)
{
	$db = JFactory::getDbo();

	// grab the category slug
	$query = "SELECT `path` FROM #__categories WHERE `id` = " . $data['catid'] . " LIMIT 1;";
	$db->setQuery($query);
	$category_path = $db->loadResult();

	// setup vars per brand
	$juribase = JURI::base();
	if( substr_count($juribase,"inmotionhosting.com") > 0 )
		$support_center_dir = "/support/";
	if( substr_count($juribase,"webhostinghub.com") > 0 )
		$support_center_dir = "/help/";

	// setup URL
	$tmp_request_uri = $support_center_dir . $category_path . "/" . $data['alias'];

	// delete the cache file (../../../../functions_scv2.php)
	$first_part_of_cache_file = "01d92212ed2309aec84c92d645595998";
        $path_to_check = "/home/ccdevinm/public_html" . $support_center_dir . "cache/page/";
        $full_file_path = $path_to_check . $first_part_of_cache_file . "-cache-page-" . md5("-" . $tmp_request_uri . "-en-GB") . ".php";
	if(file_exists($full_file_path))
	{
	        unlink($full_file_path);
		JFactory::getApplication()->enqueueMessage("AUTO CLEAR CACHE:<br />Cache file removed: $full_file_path", 'message');
	}
	else
		JFactory::getApplication()->enqueueMessage("AUTO CLEAR CACHE:<br />No cache file existed for this article", 'warning');
}

?>
