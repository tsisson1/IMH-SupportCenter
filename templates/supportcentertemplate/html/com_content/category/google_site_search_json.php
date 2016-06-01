<?php

// ini_set("display_errors", 1);

/*
 * Copyright 2011 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
require_once '/home/ccdevinm/public_html/support/templates/supportcentertemplate/html/com_content/category/google_site_search/google-api-php-client/src/Google_Client.php';
require_once '/home/ccdevinm/public_html/support/templates/supportcentertemplate/html/com_content/category/google_site_search/google-api-php-client/src/contrib/Google_CustomsearchService.php';
session_start();

$client = new Google_Client();
$client->setApplicationName('Google CustomSearch PHP Starter Application');
// Docs: http://code.google.com/apis/customsearch/v1/using_rest.html
// Visit https://code.google.com/apis/console?api=customsearch to generate
// your developer key (simple api key).
$client->setDeveloperKey('AIzaSyDxab9vc_WStsub_JYDWIQ6Q_ZvenKDtCM');
$search = new Google_CustomsearchService($client);

$user_searchword = $_GET['searchword'];
// Example executing a search with your custom search id.
$result = $search->cse->listCse($user_searchword, array(
  'cx' => '005635972898607016325:zm2hnqbdcdo', // The custom search engine ID to scope this search query.
));





$search_results[0] = "test";
if($result['promotions'])
        foreach($result['promotions'] as $k => $v)
                array_push($search_results,$v);
if($result['items'])
	foreach($result['items'] as $k => $v)
		array_push($search_results,$v);
unset($search_results[0]);
// echo "<pre>"; print_r($search_results); echo "</pre>";
// die("here");






if( count($search_results) > 0 )
{
	$x = 0;
	foreach($search_results as $result_key => $result_value)
	{
		if( $x <= 2 )
		{	
			$exploded_title = explode("|",$result_value['htmlTitle']);

			$results[$x]['url'] = $result_value['link'];
			$results[$x]['title'] = $exploded_title[0];
			$results[$x]['description'] = $result_value['htmlSnippet'];
		}
		$x++;
	}
	print_r(json_encode($results));
	die();
}
else
{
	echo "0";
	die();
}






?>
