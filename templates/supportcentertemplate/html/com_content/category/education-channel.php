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

$this->document->setTitle($this->category->title . " | InMotion Hosting");

// JHtml::_('behavior.caption');






if( $this->category->title == "Drupal 7" OR $this->category->title == "Drupal 8" )
{
	echo "
        <div class='item-page'>
                <div class='page-header'>
			<img src='/support/images/stories/drupal-partner/supporting-partner-80_3.png' style='float:left; margin:0px 15px 15px 0px;' />
                        <h1>" . $this->category->title . " Education Channel</h1>
                </div>
        ";
}
else
{
	echo "
	<div class='item-page'>
		<div class='page-header'>
			<h1>" . $this->category->title . " Education Channel</h1>
		</div>
	";
}






echo $this->category->description;
?>

<div style='clear:both;'></div>

<div class='edu_class_listing white_box'>
	<h2><? echo $this->category->title; ?> Tutorials</h2>
	<?
		if (count($this->children[$this->category->id]) > 0)
		{
			$show_collapse_button = false;
        		foreach($this->children[$this->category->id] as $id => $child)
			{
				$column_count = substr( $this->escape($child->title), 0,1);
				$total_classes_in_column[$column_count]++;

				$collapse_class = "";
				if($total_classes_in_column[$column_count] > 6)
				{
					$collapse_class = "class='features collapse'";
					$show_collapse_button = true;
				}

				$article_categories[] = $child->id;

				$hundred_classes[$column_count] .= "\n<li $collapse_class ><a href='" . JRoute::_(ContentHelperRoute::getCategoryRoute($child->id)) . "'>" . $this->escape($child->title) . "</a></li>";
			}
			foreach($hundred_classes as $hc_k => $hc_v)
			{
				echo "<ul style='float:left; width:300px; margin-right:20px;'>$hc_v</ul>";
			}
			echo "<div style='clear:both;'></div>";
		}
	?>
</div>


<?
if($show_collapse_button == true)
{
	echo "
		<div class='button-class' style='margin-top:-19px; border:0px;'>
			<button type='button' class='btn btn-longtail' data-toggle='collapse' data-target='.features'>View more tutorials</button>
		</div>
	";
}
?>






<div class='edu_most_popular white_box'>
	<h2>Most Popular Articles</h2>
	<?
		if($article_categories)
		{
			// build $in_clause = ( 250, 220, 170 )
			foreach($article_categories as $k => $v)
			{
				if($k == 0)
					$in_clause = "( $v";
				else
					$in_clause .= ", $v";

				if( $k == count($article_categories) - 1 )
					$in_clause .= " )";
			}
			$db = JFactory::getDbo();
			$query = "SELECT id,title,alias,catid,hits FROM #__content WHERE `state` = 1 AND catid IN $in_clause ORDER BY `hits` DESC LIMIT 0,6;";
			$db->setQuery($query);
			$most_popular = $db->loadObjectList();
			if($most_popular)
			{
				foreach($most_popular as $k => $v)
				{
					$article_slug = $v->id . ":" . $v->alias;
					$article_url = JRoute::_(ContentHelperRoute::getArticleRoute($article_slug, $v->catid));
					// echo "<li><a href='" . JRoute::_(ContentHelperRoute::getArticleRoute($v->id)) . "'>" . $this->escape($v->title) . "</a></li>";
					echo "	<div style='width:300px; height:75px; float:left; margin-right:20px;'>
							<a href='$article_url'>" . $this->escape($v->title) . "</a>
							<div class='smallgrey'>Hits: " . number_format($v->hits) . "</div>
						</div>
					";
				}
			}
		}
	?>
	<div style='clear:both;'></div>
</div>

<div style='clear:both;'></div>

<div class='edu_300 white_box'>






<?php if (empty($this->items)) : ?>

        <?php if ($this->params->get('show_no_articles', 1)) : ?>
        <p><?php echo JText::_('COM_CONTENT_NO_ARTICLES'); ?></p>
        <?php endif; ?>

<?php else : ?>

<form action="<?php echo htmlspecialchars(JUri::getInstance()->toString()); ?>" method="post" name="adminForm" id="adminForm" class="form-inline">
        <?php if ($this->params->get('show_headings') || $this->params->get('filter_field') != 'hide' || $this->params->get('show_pagination_limit')) :?>
        <div class="filters btn-toolbar" style='float:right; margin-top:0px;'>
                <?php if ($this->params->get('filter_field') != 'hide') :?>
                        <div class="btn-group">
                                <label class="filter-search-lbl element-invisible" for="filter-search"><span class="label label-warning"><?php echo JText::_('JUNPUBLISHED'); ?></span><?php echo JText::_('COM_CONTENT_'.$this->params->get('filter_field').'_FILTER_LABEL').'&#160;'; ?></label>
                                <input type="text" name="filter-search" id="filter-search" value="<?php echo $this->escape($this->state->get('list.filter')); ?>" class="inputbox" onchange="document.adminForm.submit();" title="<?php echo JText::_('COM_CONTENT_FILTER_SEARCH_DESC'); ?>" placeholder="<?php echo JText::_('COM_CONTENT_FILTER_SEARCH_DESC'); ?>" />
                        </div>
                <?php endif; ?>
                <?php if ($this->params->get('show_pagination_limit')) : ?>
                        <div class="btn-group pull-right">
                                <label class="element-invisible">
                                        <?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>
                                </label>
                                <?php echo $this->pagination->getLimitBox(); ?>
                        </div>
                <?php endif; ?>

                <input type="hidden" name="filter_order" value="" />
                <input type="hidden" name="filter_order_Dir" value="" />
                <input type="hidden" name="limitstart" value="" />
                <div class="clearfix"></div>
        </div>
        <?php endif; ?>

<?php  endif; ?>






	<?

	// ----------------------------------------------------------------------------------
	// print the 300 articles
	// ----------------------------------------------------------------------------------

	// sort an array of articles (make sure they show in this order - 301,302,303, etc)
	// http://stackoverflow.com/questions/4282413/php-sort-array-of-objects-by-object-fields
	function sort_300_articles($a, $b)
	{
		return strcmp($a->title, $b->title);
	}
	usort($this->items, "sort_300_articles");

	$app = JFactory::getApplication();
	$template = $app->getTemplate();

	include_once("templates/$template/includes/functions.php");

	echo "	<h2>" . $this->category->title . " - Advanced Tutorials</h2>
		<table style='margin-top:20px;'>
	";
	foreach ($this->items as $i => $article)
	{
		$article_url = JRoute::_(ContentHelperRoute::getArticleRoute($article->slug, $article->catid));
		$author_image_url = pass_userid_get_avatar_url_2($article->created_by);

		$author_img_tag = "<img src='$author_image_url' class='sc_rc' style='width:55px;' />";

		$article_written_by = "";
		if($article->author != "null")
			$article_written_by = "Written by " . $article->author . "<br />";

		echo "
			<tr>
				<td valign='top' style='padding:6px 15px 0px 0px;'>$author_img_tag</td>
				<td valign='top' style='padding-bottom:15px;'>
					<div><a href='$article_url'>" . $article->title . "</a></div>
					<div>" . $article->metadesc . "</div>
					<div class='smallgrey'>
						$article_written_by
						Hits: " . number_format($article->hits) . "
					</div>
				</td>
			</tr>
		";
	}
	echo "</table>";

	?>






<?php // Add pagination links ?>
<?php if (!empty($this->items)) : ?>
        <?php if (($this->params->def('show_pagination', 2) == 1  || ($this->params->get('show_pagination') == 2)) && ($this->pagination->pagesTotal > 1)) : ?>
        <div class="pagination">

                <?php if ($this->params->def('show_pagination_results', 1)) : ?>
                        <p class="counter pull-right">
                                <?php echo $this->pagination->getPagesCounter(); ?>
                        </p>
                <?php endif; ?>

                <?php echo $this->pagination->getPagesLinks(); ?>
        </div>
        <?php endif; ?>
</form>
<?php  endif; ?>




</div>

</div>
