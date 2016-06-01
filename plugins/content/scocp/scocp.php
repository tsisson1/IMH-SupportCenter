<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Content.emailcloak
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Email cloack plugin class.
 *
 * @package     Joomla.Plugin
 * @subpackage  Content.emailcloak
 * @since       1.5
 */
class plgContentScocp extends JPlugin
{
	public function onContentPrepare($context, &$row, &$params, $page = 0)
	{
		// -----------------------------------------------------------------------------------
		// convert images of class std_ss to <a><img ></a>
		// -----------------------------------------------------------------------------------
		if(! is_null($row->text))
			$starting_text = $row->text;
		else
			$starting_text = $row->introtext;
	        $exploded_text = explode("<",$starting_text);
	        foreach($exploded_text as $et_key => $et_value)
        	{
                	$exploded_et_v = explode(">",$et_value);
	                // if this is an image we want to work our magic on...
        	        if( substr_count($exploded_et_v[0],"class=\"std_ss\"") > 0 )
                	{
                        	// grab the URL of the image
	                        $exploded_img = explode("src=\"",$exploded_et_v[0]);
        	                $image_url = explode("\"",$exploded_img[1]);
                	        $image_url = $image_url[0];
                        	// create the link that we need
	                        $new_link = "a class=\"std_ss\" href=\"$image_url\"><" . str_replace("class=\"std_ss\"","",$exploded_et_v[0]) . "></a";
        	                // now do the replacement
                	        $starting_text = str_replace($exploded_et_v[0],$new_link,$starting_text);
	                }
	        }
		// -----------------------------------------------------------------------------------
                // ferh to href
                // -----------------------------------------------------------------------------------
		$starting_text = str_replace("ferh=","href=",$starting_text);
		// -----------------------------------------------------------------------------------
		// MaxCDN
		// -----------------------------------------------------------------------------------
		if( "enabled" == "enabled" )
		{
		$cdn_subdomain = return_cdn_subdomain();

			// src="images/
			$starting_text = str_replace("src=\"images/","src=\"//$cdn_subdomain/support/images/",$starting_text);

			// href="images
			$starting_text = str_replace("href=\"images","href=\"//$cdn_subdomain/support/images",$starting_text);

			// src="/support/images/
			$starting_text = str_replace("src=\"/support/images/","src=\"//$cdn_subdomain/support/images/",$starting_text);

			// href="/support/images/
                        $starting_text = str_replace("href=\"/support/images/","href=\"//$cdn_subdomain/support/images/",$starting_text);

			// die($starting_text);
		}

		$row->text = $starting_text;
		return true;
	}
}
