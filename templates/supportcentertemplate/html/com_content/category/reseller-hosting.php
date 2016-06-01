q
t
<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers');

// JHtml::_('behavior.caption');
$pgalias = '/support/product-guides';

$pgs['dedicated']['link'] = "/support/$pgalias/dedicated-hosting";
$pgs['dedicated']['img'] = "/support/images/stories/product-guides/imh-dedicated.png";
$pgs['dedicated']['desc'] = "<a href='" . $pgs['dedicated']['link'] . "'>Dedicated Linux servers</a> that are completely customizable to meet your enterprise level needs. ";
$pgs['dedicated']['title'] = "Dedicated Hosting";


$pgs['dedicated']['list'] = "
                <li><a href='http://www.inmotionhosting.com/support/product-guides/dedicated-hosting/update-cpanel'>How to Update cPanel on a Dedicated Hosting Plan</a></li>
                <li><a href='http://www.inmotionhosting.com/support/product-guides/dedicated-hosting/add-php-modules-to-dedicated-server'>How to Add PHP Modules on Dedicated Hosting</a></li>
                <li><a href='http://www.inmotionhosting.com/support/product-guides/dedicated-hosting/dedicated-server-support'>Getting Support for your Dedicated Hosting Server Package</a></li>
";


$pgs['reseller']['link'] = "$pgalias/reseller-hosting";
$pgs['reseller']['img'] = "/support/images/stories/product-guides/imh-reseller.png";
$pgs['reseller']['desc'] = "Be your own web hosting provider to your customers with our affordable <a href='" . $pgs['reseller']['link'] . "'>reseller hosting</a> plans.";
$pgs['reseller']['title'] = "Reseller Hosting";

$pgs['reseller']['list'] = "
                <li><a href='http://www.inmotionhosting.com/support/product-guides/reseller-hosting/what-is-it'>What is Reseller Hosting?</a></li>
<li><a href='http://www.inmotionhosting.com/support/product-guides/reseller-hosting/how-to-market-yourself-as-a-reseller'>How to Market Yourself as a Reseller</a></li>
                <li><a href='http://www.inmotionhosting.com/support/product-guides/reseller-hosting/branding-your-hosting-services'>Branding Your Hosting Services</a></li>
 <li><a href='http://www.inmotionhosting.com/support/product-guides/reseller-hosting/developing-hosting-packages-as-a-reseller-an-overview'>Developing Hosting Packages as a Reseller, An Overview</a></li>
                <li><a href='http://www.inmotionhosting.com/support/product-guides/reseller-hosting/configuring-the-value-price-of-hosting-packages-as-a-reseller'>Configuring the Value (Price) of Hosting Packages as a Reseller</a></li>

";

function print_edu_block($pg)
{
	$link = $pg['link'];
	$img = $pg['img'];
	$desc = $pg['desc'];
	$title = $pg['title'];
    $article_list = $pg['list'];
/*
	echo "
	<div class='edu_block'>
                <div class='edu_icon'><a href='$link'><img src='$img' /></a></div>
                <div class='description'>$desc</div>
                <div style='clear:both;'></div>
        </div>
	";
*/

	echo "
<table class='edu_block'>
		<tr>
			<td style='background:#fff; padding:8px; width:50px;'><a href='$link'><img src='$img' /></a></td>
			<td style='background:#eee; padding:8px;'>
				<h3><a href='$link'>$title</a></h3>
				$desc
			</div>
		</tr>
<tr>

<td></td>
<td style='background:#eee; padding:8px;'>
            $article_list
</td>
</tr>

	</table> 

	";
}






?>


<h2 class='sht' style='color:#000;'>Be More Successful &copy;</h2>
<p>We want you and your business to be successful. In this brand new section of the Support Center, we'll examine how to use our products to build your online presence. We'll show you the basics of getting started in being the best reseller hosting provider, or even managing your own dedicated server. We've been in the web hosting business a while and want to share our expertise with you!</p>


<h2 class='sht' style='color:#000; margin-top:25px;'>What is a Product Guide?</h2>
<p>Anytime you buy something new, it comes with a product guide. The guide typically describes how to use the product, and sometimes what not to do. We thought web hosting should be the same. Not everyone has managed a dedicated server or been a webmaster. These guides will answer some of the common questions we face and even answer questions you may not have thought of.</p>


<table class='edu_listing_table' style='margin-bottom:15px;'>

	<tr><td colspan='2'><h2 class='capital_black_heading'>Products</h2></td></tr>
	<tr>
		<td class='left'>
			<? print_edu_block($pgs['dedicated']); ?>
		</td>
		<td class='right'>
            <? print_edu_block($pgs['reseller']); ?>
		</td>
        </tr>


</table>






<?
/*
<div class='edus_listing'>
	<h1>Education Channels</h1>
	<ul>
	<?
		if (count($this->children[$this->category->id]) > 0)
		{
        		foreach($this->children[$this->category->id] as $id => $child)
			{
				$article_categories[] = $child->id;
				echo "<li><a href='" . JRoute::_(ContentHelperRoute::getCategoryRoute($child->id)) . "'>" . $this->escape($child->title) . "</a></li>";
			}
		}
	?>
	</ul>
</div>
*/
?>
