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






echo "
	<div class='item-page'>
		<div class='page-header'>
			<h1>Search results for:</h1>
			<h1 style='font-weight:normal; color:#aaa;'>" . htmlentities($user_searchword,ENT_QUOTES) . "</h1>
		</div>
			
		<form method='get' action='/support/search' >
			<input type='text' name='searchword' id='mod-search-searchword' value='" .  htmlentities($user_searchword,ENT_QUOTES) . "' style='width:500px;' />
			<button class='button btn btn-info' onclick='this.form.searchword.focus();' style='display:inline-block; width:80px; border-radius:3px; height:32px; line-height:22px; margin:0px;'>Search</button>
			<input type='hidden' name='search_type' id='search_type' value='gcs' />
		</form>
";






if( count($result['items']) > 0 )
{



	echo "
<style type='text/css'>
	.gcs_title {font-family: arial, sans-serif;font-size: 16px;font-weight: normal;height: 19px;line-height: 19px;}
	.gcs_title a:link,
	.gcs_title a:visited,
	.gcs_title a:hover,
	.gcs_title a:active{color: rgb(30, 15, 190);}
	.gcs_url {color: rgb(0, 102, 33);font-family: arial, sans-serif;font-size: 14px;font-style: normal;font-weight: normal;height: auto;line-height: 16px;}
	.gcs_description {color: rgb(68, 68, 68);font-family: arial, sans-serif;font-size: 13px;font-weight: normal;height: auto;line-height: 16px; margin-bottom:25px;}
	.gcs_bc {color:#aaa;font-family: arial, sans-serif;font-size: 10px;font-weight: normal;height: auto;line-height: 13px;}
</style>
	";



	foreach($result['items'] as $result_key => $result_value)
	{
		$exploded_title = explode("|",$result_value['htmlTitle']);
		$title = $exploded_title[0];
		$link = $result_value['link'];
		$description = $result_value['htmlSnippet'];
		$url = $result_value['htmlFormattedUrl'];
		$bc_html = "";
		if($result_value['pagemap']['breadcrumb'])
		{
			foreach($result_value['pagemap']['breadcrumb'] as $bc_key => $bc_value)
			{
				if( $bc_key == 0 )
					$bc_html = $bc_value['title'];
				else
					$bc_html .= " &raquo; " . $bc_value['title'];
			}
		}
		echo "
			<div class='gcs_title'><a href='$link'>$title</a></div>
			<div class='gcs_url'>$url</div>
			<div class='gcs_bc'>$bc_html</div>
			<div class='gcs_description'>$description</div>
		";
	}
}
if( $_GET['show_raw'] == "yes" )
{
	print "<pre>" . print_r($result, true) . "</pre>";
}






echo "	</div>";






// Example executing a search with the URL of a linked custom search engine.
/*
$result = $search->cse->listCse('burrito', array(
  'cref' => 'http://www.google.com/cse/samples/vegetarian.xml',
));
print "<pre>" . print_r($result, true) . "</pre>";
*/






?>
