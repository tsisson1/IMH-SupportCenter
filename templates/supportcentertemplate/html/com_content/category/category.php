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

if( $this->pagination->pagesCurrent > 1 )
        $this->document->setTitle($this->category->title . " - Page " . $this->pagination->pagesCurrent . " | InMotion Hosting");
else
        $this->document->setTitle($this->category->title . " | InMotion Hosting");

// JHtml::_('behavior.caption');

// run our content plugin - this will fix the std_ss stuff that by default only fixes articles (and not categories)
$this->category->description = JHtml::_('content.prepare', $this->category->description);

?>

<div class='item-page'>

        <div class='page-header'>
                <h1><? echo $this->category->title; ?></h1>
        </div>

<?

// are there sub categories?
if(!empty($this->children))
{
	// if so, then just print the intro text
	echo $this->category->description;
}
// no? then print a listing of articles

if( !empty($this->items) )
{
	echo $this->loadTemplate('articles');
/*
	echo "	<table>
			<tr>
				<th style='text-align:left;'>Article</th>
				<th style='text-align:left;'>Views</th>
			</tr>
	";
	foreach ($this->items as $i => $article)
        {
                $article_url = JRoute::_(ContentHelperRoute::getArticleRoute($article->slug, $article->catid));
                echo "  <tr>
                                <td style='padding-right:50px;'><a href='$article_url'>" . $article->title . "</a></td>
				<td>$article->hits</td>
			</tr>
		";
	}
	echo "	</table>";
*/
}
?>

</div> <? // ends the item-page div ?>
