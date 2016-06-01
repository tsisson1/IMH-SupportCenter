<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

// Create shortcuts to some parameters.
$params  = $this->item->params;
$images  = json_decode($this->item->images);
$urls    = json_decode($this->item->urls);
$canEdit = $params->get('access-edit');
$user    = JFactory::getUser();
$info    = $params->get('info_block_position', 0);
$article_author = JFactory::getUser($this->item->created_by);
// JHtml::_('behavior.caption');






if (isset($_GET['unsubscribe']))
	include_once("includes/unsubscribe.php");
if (isset($_GET['unsubscribe_email']))
        include_once("includes/unsubscribe_anonymous.php");






if( $_GET['test'] == "author_image" )
{
	$user_author_avatar_url = gf_pass_userid_get_avatar_url($article_author->id);
	$user_author_avatar_html = "<img src='$user_author_avatar_url' style='float:left; margin:0px 15px 0px 0px; max-width:50px;' class='sc_rc' />";
}






// setup canonical url
$document = JFactory::getDocument();
$canonical_url = "http://www.inmotionhosting.com" . JRoute::_(ContentHelperRoute::getArticleRoute($this->item->id . ":" . $this->item->alias, $this->item->catid));
$document->addHeadLink($canonical_url, 'canonical');






// additional anchor text
$h1_title =  $this->escape($this->item->title);
$additional_anchor_text = return_additional_anchor_text("com_content","article",$this->item->id);
if( $additional_anchor_text->h1_title != "" )
	$h1_title = $additional_anchor_text->h1_title;






$article_comment_count = return_article_comment_count($this->item->id);






// article discussions
$article_discussions = "";
$article_discussions_object = return_article_discussions($this->item->id);
if ($article_discussions_object)
{

	foreach($article_discussions_object as $ado_key => $comment_object)
		$article_discussions_li .= "<li><a href='#comment-" . $comment_object->id . "'>" . htmlentities($comment_object->title,ENT_QUOTES) . "</a></li>";

	$article_discussions = "
		<div style='margin:0 0 10px 0;border-bottom:1px solid #ddd;'>
			<table style='font-size:12px;'>
				<tr>
					<td valign='top'><strong>Discussions on this article:</strong></td>
					<td valign='top'><ul>$article_discussions_li</ul></td>
				</tr>
			</table>
		</div>
	";

}






// 2013.08.13.1053 - bradm - make sure to show the drupal logo on drupal articles
$title_logo = "";
if( $this->item->parent_title == "Drupal 7" OR $this->item->parent_title == "Drupal 8" )
	$title_logo = "<img src='/support/images/stories/drupal-partner/supporting-partner-80_3.png' style='float:right; margin:0px 0px 15px 15px;' alt='Drupal Association Support Partner'>";






// ---------------------------------------------------------------
// LIKE THIS PAGE - social media
// ---------------------------------------------------------------
$url_of_this_page = $this->document->base;
$like_facebook_html = "
<div style='display:inline-block;'>
	<iframe src='//www.facebook.com/plugins/like.php?href=$url_of_this_page&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=209145459223160' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:100px; height:21px;' allowTransparency='true'></iframe>
</div>
";
$like_google_html = "
<div style='display:inline-block;'>
	<div class='g-plusone' data-size='medium' data-href='$url_of_this_page'></div>
	<script type='text/javascript'>
	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/plusone.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>
</div>
";
$like_twitter_html = "
<div style='display:inline-block;'>
	<a href='https://twitter.com/share' class='twitter-share-button' data-via='inmotionhosting'>Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>
</div>
";






?>
<div class="item-page<?php echo $this->pageclass_sfx?>">
	<?php if ($this->params->get('show_page_heading', 1)) : ?>
	<div class="page-header">
		<h1> <?php echo $this->escape($this->params->get('page_heading')); ?> </h1>
	</div>
	<?php endif;
if (!empty($this->item->pagination) && $this->item->pagination && !$this->item->paginationposition && $this->item->paginationrelative)
{
	echo $this->item->pagination;
}
?>
	<?php if (!$this->print) : ?>
		<?php if ($canEdit || $params->get('show_print_icon') || $params->get('show_email_icon')) : ?>
			<div class="btn-group pull-right">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> <i class="icon-cog"></i> <span class="caret"></span> </a>
				<?php // Note the actions class is deprecated. Use dropdown-menu instead. ?>
				<ul class="dropdown-menu actions">
					<?php if ($params->get('show_print_icon')) : ?>
						<li class="print-icon"> <?php echo JHtml::_('icon.print_popup', $this->item, $params); ?> </li>
					<?php endif; ?>
					<?php if ($params->get('show_email_icon')) : ?>
						<li class="email-icon"> <?php echo JHtml::_('icon.email', $this->item, $params); ?> </li>
					<?php endif; ?>
					<?php if ($canEdit) : ?>
						<li class="edit-icon"> <?php echo JHtml::_('icon.edit', $this->item, $params); ?> </li>
					<?php endif; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php else : ?>
		<div class="pull-right">
			<?php echo JHtml::_('icon.print_screen', $this->item, $params); ?>
		</div>
	<?php endif; ?>

	<?php if ($params->get('show_title') || $params->get('show_author')) : ?>
	<div class="page-header">
		<? echo $user_author_avatar_html; ?>
		<? if($title_logo != "") { echo $title_logo; } ?>
		<h1>
			<?php if ($this->item->state == 0): ?>
				<span class="label label-warning"><?php echo JText::_('JUNPUBLISHED'); ?></span>
			<?php endif; ?>
			<?php if ($params->get('show_title')) : ?>
				<?php if ($params->get('link_titles') && !empty($this->item->readmore_link)) : ?>
					<a href="<?php echo $this->item->readmore_link; ?>"> <?php echo $this->escape($this->item->title); ?></a>
				<?php else : ?>
					<?php echo $h1_title; /*$this->escape($this->item->title);*/ ?>
				<?php endif; ?>
			<?php endif; ?>
		</h1>
			<?php if ($params->get('show_author') && !empty($this->item->author )) : ?>

				<?php $author = $this->item->created_by_alias ? $this->item->created_by_alias : $this->item->author; ?>
				<?php if (!empty($this->item->contactid) && $params->get('link_author') == true) : ?>
				<?php
				$needle = 'index.php?option=com_contact&view=contact&id=' . $this->item->contactid;
				$menu = JFactory::getApplication()->getMenu();
				$item = $menu->getItems('link', $needle, true);
				$cntlink = !empty($item) ? $needle . '&Itemid=' . $item->id : $needle;
			?>
				<?php echo JText::sprintf('COM_CONTENT_WRITTEN_BY', JHtml::_('link', JRoute::_($cntlink), $author)); ?>
				<?php else: ?>
				<?php
					if($article_author->getParam('google_profile_url'))
					{
						$google_author = "<a href='" . $article_author->getParam('google_profile_url') . "?rel=author'>$author</a>";
						// echo JText::sprintf('COM_CONTENT_WRITTEN_BY', $google_author);
						$written_by_text = JText::sprintf('COM_CONTENT_WRITTEN_BY', "</span>" . $google_author);
					}
					else
					{
						if($author != "null")
						{
							// echo JText::sprintf('COM_CONTENT_WRITTEN_BY', $author);
							$written_by_text = JText::sprintf('COM_CONTENT_WRITTEN_BY', $author);
						}
					}
				?>
				<?php endif; ?>

				<?php endif; ?>

				<?
				// ------------------------------------------------------------
				// show the number of article hits and created / modified dates
				// ------------------------------------------------------------
				if( "enabled" == "enabled" )
				{
					echo "	<div style='font-size:12px; color:#aaa; margin-bottom:-10px; padding-top:5px;'>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>$written_by_text</div>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Views:</span> <span name='page_views' id='page_views'>" . number_format($this->item->hits) . "</span></div>
							<div style='float:left; margin-right:20px;' title='Originally published: " . date("M j, Y",strtotime($this->item->created)) . "'><span style='color:#606060;'>Published:</span> " . date("M j, Y",strtotime($this->item->modified)) . "</div>
							<div style='float:left; margin-right:20px;'><span style='color:#606060;'>Comments:</span> <a href='#comments'>$article_comment_count</a></div>
							<div style='clear:both;'></div>
						</div>
					";
				}
				// log in analytics the month the article was written
				if("enabled" == "disabled")
				{
					echo "
						<script type='text/javascript'>
					                var _gaq = _gaq || [];
					                _gaq.push(['_setAccount', 'UA-1501988-1']);
					                _gaq.push(['_setCustomVar', 4, 'DateMonthPublished', '" . date("Y-m",strtotime($this->item->created)) . "', 3]);
					                _gaq.push(['_trackPageview']);
        					</script>
					";
				}
				?>
	</div>
	<? echo $article_discussions; ?>
	<?php endif; ?>

<?php $useDefList = ($params->get('show_modify_date') || $params->get('show_publish_date')
	|| $params->get('show_hits') || $params->get('show_category') || $params->get('show_parent_category')); ?>
	<?php if ($useDefList && ($info == 0 || $info == 2)) : ?>
		<div class="article-info muted">
			<dl class="article-info">
			<dt class="article-info-term"><?php echo JText::_('COM_CONTENT_ARTICLE_INFO'); ?></dt>

			<?php if ($params->get('show_parent_category') && !empty($this->item->parent_slug)) : ?>
				<dd>
					<div class="parent-category-name">
						<?php $title = $this->escape($this->item->parent_title);
						$url = '<a href="'.JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->parent_slug)).'">'.$title.'</a>';?>
						<?php if ($params->get('link_parent_category') && !empty($this->item->parent_slug)) : ?>
							<?php echo JText::sprintf('COM_CONTENT_PARENT', $url); ?>
						<?php else : ?>
							<?php echo JText::sprintf('COM_CONTENT_PARENT', $title); ?>
						<?php endif; ?>
					</div>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_category')) : ?>
				<dd>
					<div class="category-name">
						<?php $title = $this->escape($this->item->category_title);
						$url = '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->catslug)) . '">' . $title . '</a>';?>
						<?php if ($params->get('link_category') && $this->item->catslug) : ?>
							<?php echo JText::sprintf('COM_CONTENT_CATEGORY', $url); ?>
						<?php else : ?>
							<?php echo JText::sprintf('COM_CONTENT_CATEGORY', $title); ?>
						<?php endif; ?>
					</div>
				</dd>
			<?php endif; ?>

			<?php if ($params->get('show_publish_date')) : ?>
				<dd>
					<div class="published">
						<i class="icon-calendar"></i> <?php echo JText::sprintf('COM_CONTENT_PUBLISHED_DATE_ON', JHtml::_('date', $this->item->publish_up, JText::_('DATE_FORMAT_LC3'))); ?>
					</div>
				</dd>
			<?php endif; ?>

			<?php if ($info == 0): ?>
				<?php if ($params->get('show_modify_date')) : ?>
					<dd>
						<div class="modified">
							<i class="icon-calendar"></i> <?php echo JText::sprintf('COM_CONTENT_LAST_UPDATED', JHtml::_('date', $this->item->modified, JText::_('DATE_FORMAT_LC3'))); ?>
						</div>
					</dd>
				<?php endif; ?>
				<?php if ($params->get('show_create_date')) : ?>
					<dd>
						<div class="create">
							<i class="icon-calendar"></i> <?php echo JText::sprintf('COM_CONTENT_CREATED_DATE_ON', JHtml::_('date', $this->item->created, JText::_('DATE_FORMAT_LC3'))); ?>
						</div>
					</dd>
				<?php endif; ?>

				<?php if ($params->get('show_hits')) : ?>
					<dd>
						<div class="hits">
							<i class="icon-eye-open"></i> <?php echo JText::sprintf('COM_CONTENT_ARTICLE_HITS', $this->item->hits); ?>
						</div>
					</dd>
				<?php endif; ?>
			<?php endif; ?>
			</dl>
		</div>
	<?php endif; ?>

	<?php if (!$params->get('show_intro')) : echo $this->item->event->afterDisplayTitle; endif; ?>
	<?php echo $this->item->event->beforeDisplayContent; ?>


	<? check_for_and_display_article_video($this->item->id); ?>


	<?php if (isset($urls) && ((!empty($urls->urls_position) && ($urls->urls_position == '0')) || ($params->get('urls_position') == '0' && empty($urls->urls_position)))
		|| (empty($urls->urls_position) && (!$params->get('urls_position')))) : ?>
	<?php echo $this->loadTemplate('links'); ?>
	<?php endif; ?>
	<?php if ($params->get('access-view')):?>
	<?php if (isset($images->image_fulltext) && !empty($images->image_fulltext)) : ?>
	<?php $imgfloat = (empty($images->float_fulltext)) ? $params->get('float_fulltext') : $images->float_fulltext; ?>
	<div class="pull-<?php echo htmlspecialchars($imgfloat); ?> item-image"> <img
	<?php if ($images->image_fulltext_caption):
		echo 'class="caption"'.' title="' .htmlspecialchars($images->image_fulltext_caption) . '"';
	endif; ?>
	src="<?php echo htmlspecialchars($images->image_fulltext); ?>" alt="<?php echo htmlspecialchars($images->image_fulltext_alt); ?>"/> </div>
	<?php endif; ?>
	<?php
	if (!empty($this->item->pagination) && $this->item->pagination && !$this->item->paginationposition && !$this->item->paginationrelative):
		echo $this->item->pagination;
	endif;
	?>
	<?php if (isset ($this->item->toc)) :
		echo $this->item->toc;
	endif; ?>
	<?php echo $this->item->text; ?>

	<?php if ($useDefList && ($info == 1 || $info == 2)) : ?>
		<div class="article-info muted">
			<dl class="article-info">
			<dt class="article-info-term"><?php echo JText::_('COM_CONTENT_ARTICLE_INFO'); ?></dt>

			<?php if ($info == 1): ?>
				<?php if ($params->get('show_parent_category') && !empty($this->item->parent_slug)) : ?>
					<dd>
						<div class="parent-category-name">
							<?php	$title = $this->escape($this->item->parent_title);
							$url = '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->parent_slug)) . '">' . $title . '</a>';?>
							<?php if ($params->get('link_parent_category') && $this->item->parent_slug) : ?>
								<?php echo JText::sprintf('COM_CONTENT_PARENT', $url); ?>
							<?php else : ?>
								<?php echo JText::sprintf('COM_CONTENT_PARENT', $title); ?>
							<?php endif; ?>
						</div>
					</dd>
				<?php endif; ?>
				<?php if ($params->get('show_category')) : ?>
					<dd>
						<div class="category-name">
							<?php 	$title = $this->escape($this->item->category_title);
							$url = '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->catslug)) . '">' . $title . '</a>';?>
							<?php if ($params->get('link_category') && $this->item->catslug) : ?>
								<?php echo JText::sprintf('COM_CONTENT_CATEGORY', $url); ?>
							<?php else : ?>
								<?php echo JText::sprintf('COM_CONTENT_CATEGORY', $title); ?>
							<?php endif; ?>
						</div>
					</dd>
				<?php endif; ?>
				<?php if ($params->get('show_publish_date')) : ?>
					<dd>
						<div class="published">
							<i class="icon-calendar"></i> <?php echo JText::sprintf('COM_CONTENT_PUBLISHED_DATE_ON', JHtml::_('date', $this->item->publish_up, JText::_('DATE_FORMAT_LC3'))); ?>
						</div>
					</dd>
				<?php endif; ?>
			<?php endif; ?>

			<?php if ($params->get('show_create_date')) : ?>
				<dd>
					<div class="create"><i class="icon-calendar">
						</i> <?php echo JText::sprintf('COM_CONTENT_CREATED_DATE_ON', JHtml::_('date', $this->item->modified, JText::_('DATE_FORMAT_LC3'))); ?>
					</div>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_modify_date')) : ?>
				<dd>
					<div class="modified"><i class="icon-calendar">
						</i> <?php echo JText::sprintf('COM_CONTENT_LAST_UPDATED', JHtml::_('date', $this->item->modified, JText::_('DATE_FORMAT_LC3'))); ?>
					</div>
				</dd>
			<?php endif; ?>
			<?php if ($params->get('show_hits')) : ?>
				<dd>
					<div class="hits">
						<i class="icon-eye-open"></i> <?php echo JText::sprintf('COM_CONTENT_ARTICLE_HITS', $this->item->hits); ?>
					</div>
				</dd>
			<?php endif; ?>
			</dl>
		</div>
	<?php endif; ?>

	<?php
if (!empty($this->item->pagination) && $this->item->pagination && $this->item->paginationposition && !$this->item->paginationrelative):
	echo $this->item->pagination;
?>
	<?php endif; ?>
	<?php if (isset($urls) && ((!empty($urls->urls_position) && ($urls->urls_position == '1')) || ($params->get('urls_position') == '1'))): ?>
	<?php echo $this->loadTemplate('links'); ?>
	<?php endif; ?>
	<?php //optional teaser intro text for guests ?>
	<?php elseif ($params->get('show_noauth') == true && $user->get('guest')) : ?>
	<?php echo $this->item->introtext; ?>
	<?php //Optional link to let them register to see the whole article. ?>
	<?php if ($params->get('show_readmore') && $this->item->fulltext != null) :
		$link1 = JRoute::_('index.php?option=com_users&view=login');
		$link = new JURI($link1);?>
	<p class="readmore">
		<a href="<?php echo $link; ?>">
		<?php $attribs = json_decode($this->item->attribs); ?>
		<?php
		if ($attribs->alternative_readmore == null) :
			echo JText::_('COM_CONTENT_REGISTER_TO_READ_MORE');
		elseif ($readmore = $this->item->alternative_readmore) :
			echo $readmore;
			if ($params->get('show_readmore_title', 0) != 0) :
				echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
			endif;
		elseif ($params->get('show_readmore_title', 0) == 0) :
			echo JText::sprintf('COM_CONTENT_READ_MORE_TITLE');
		else :
			echo JText::_('COM_CONTENT_READ_MORE');
			echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
		endif; ?>
		</a>
	</p>
	<?php endif; ?>
	<?php endif; ?>
	<?php
if (!empty($this->item->pagination) && $this->item->pagination && $this->item->paginationposition && $this->item->paginationrelative) :
	echo $this->item->pagination;
?>
	<?php endif; ?>
	<?php echo $this->item->event->afterDisplayContent; ?> </div>

	






<?
	// ------------------------------------------------------------------------------------------------------------
	// is this article tagged?
	// ------------------------------------------------------------------------------------------------------------
	if( $user->groups[8] == 8 )
	{
		$db = JFactory::getDbo();
        	$query = "
                	SELECT `tags`.*
	                FROM #__tags as `tags`, #__tagged as `tagged`
        	        WHERE   `tagged`.`option` = 'com_content' AND
                	        `tagged`.`view` = 'article' AND
                        	`tagged`.`option_view_id` = " . $this->item->id . " AND
	                        `tagged`.`tag_id` = `tags`.`id`
        	        ;
	        ";
        	$db->setQuery($query);
	        $this_article_tags = $db->loadObjectList();
        	if( $this_article_tags )
	        {
        	        foreach($this_article_tags as $tat_k => $tat_v )
                	        $this_article_tags_html .= "<a href='/support/tags/" . $tat_v->alias . "' class='label label-info' style='font-weight:normal; margin-right:5px;'>" . htmlentities($tat_v->title,ENT_QUOTES) . "</a>";
	                $tag_info_html = "<div class='main_comment_submission_div'>Tagged: " . $this_article_tags_html . "</div>";
			echo $tag_info_html;
	        }
	}






	if($user->username == "bradm" OR "enabled" == "enabled")
        {
                on_edu_print_prev_and_next($this->item->ordering,$this->item->catid,$this->item->title,$this->item->id);
        }






	/*
	if( $user->username == "noitomni" OR $user->groups[8] == 8)
		include_once("did_this_article_help_beta.php");
	elseif ( "enabled" == "enabled")
		include_once("did_this_article_help.php");
	*/
	if( "enabled" == "enabled2" )
		include_once("did_this_article_help.php");

	echo "	<a name='like_this_article'></a>
		<div style='position:relative;margin:25px 0px;'>
			<div style='border-top:1px solid #ccc;border-bottom:1px solid #ccc; height:5px;'></div>
			<div style='background:#f9f9f9;margin-top:-14px;display:inline-block;margin-left:200px;padding:0px 0px 0px 25px;'>
				$like_twitter_html
				$like_facebook_html
	                        $like_google_html
			</div>
		</div>
	";






	if( $user->groups[8] == 8 )
	{
		echo "
			<div onClick=\"jQuery('#admin_tools').slideToggle('slow');\" style='position:fixed;top:0px;left:0px;color:#ddd;cursor:pointer;'>[A]</div>
			<div name='admin_tools' id='admin_tools' style='display:none;'>
		";
				include_once("admin_tools.php");
		echo "	</div>";
	}





// being moved to index.php
	// incrase the hits for cached pages
/*
	echo "
<script type='text/javascript'>
        jQuery.post('/support/includes/increase_hits.php',
        {
                option:'com_content',
                view:'article',
                id:'" . $this->item->id . "'
        },
        function(data,status){
                jQuery('#page_views').html(data);
        },'text'
        );
</script>
        ";
if($_GET['test'] == "combined_ajax_calls" OR "enabled" == "enabled")
{
	echo "
	<script type='text/javascript'>
		jQuery.post(
			'/support/includes/combined_ajax_calls.php',
		        {
        		        option:'com_content',
                		view:'article',
	                	id:'" . $this->item->id . "'
	        	},
		        function(data,status){
				jQuery('#user_ip').val(data.user_ip);
				jQuery('#timestamp_n_id').val(data.timestamp_n_id);
		        },
			'json'
        	);
	</script>
	";
}
*/





function check_for_and_display_article_video($article_id)
{
	$db = JFactory::getDbo();
	$query = "SELECT * FROM #__content_video WHERE `article_id` = $article_id LIMIT 1;";
	$db->setQuery($query);
	$results = $db->loadObjectList();
	if($results)
	{
		switch($results[0]->link_type)
		{
			case "youtube":
				$youtube_url = "http://www.youtube.com/v/" . $results[0]->link_url . "?fs=1&amp;autoplay=1&amp;rel=0";
				echo "
				<iframe width='675' height='315' src='https://www.youtube.com/embed/" . $results[0]->link_url . "' frameborder='0' allowfullscreen style='margin-bottom:15px;'></iframe>
				";
				break;
			case "flash":
				echo "
				<a class=\"" . $results[0]->link_class . "\" href=\"" . $results[0]->link_url . "\" style='display:block; margin-bottom:15px;'>
					<img src='/support/images/icon.movie.png' /><br />
					Click here to watch a video tutorial
				</a>
				";
				break;
		}
	}
}






function on_edu_print_prev_and_next($ordering,$catid,$current_page_title,$article_id)
{
global $prev_page_title;
global $prev_page_url;
global $next_page_title;
global $next_page_url;

	$section_number = get_section_number($article_id,$catid);

        // is this an edu page?
        if( substr_count($_SERVER['REQUEST_URI'],"/support/edu/") > 0 )
        {
                $db = JFactory::getDbo();

                // first, get PREV PAGE
                if($ordering >= 1)
                {
                        $prev_page_query = "    SELECT  `content`.`id`, `content`.`alias`, `content`.`title`
                                                FROM #__content as `content`, #__categories as `cat`
                                                WHERE   `content`.`catid` = $catid AND
                                                        `content`.`ordering` = " . ($ordering - 1) . " AND
                                                        `content`.`state` = 1 AND
                                                        `cat`.`id` = $catid
                                                LIMIT 1;
                        ";
                        $db->setQuery($prev_page_query);
                        $prev_page_results = $db->loadObjectList();
                        // if we found a previous page
                        if( $prev_page_results )
                        {
                                $prev_page_slug = $prev_page_results[0]->id . ":" . $prev_page_results[0]->alias;
                                $prev_page_title = $prev_page_results[0]->title;
                                $prev_page_url = JRoute::_(ContentHelperRoute::getArticleRoute($prev_page_slug, $catid));

				$additional_anchor_text = return_additional_anchor_text("com_content","article",$prev_page_results[0]->id);
				if( $additional_anchor_text->edu_previous_next_pages != "" )
					$prev_page_title = $additional_anchor_text->edu_previous_next_pages;

                                $prev_page_a_html = "Section " . ($section_number - 1) . ": <a href='$prev_page_url'>$prev_page_title</a>";
                                $text_previous_page = "<div style='float:left;font-size:50px;color:#aaa;margin:-4px 15px 15px 0px;'>&#x2039;</div>";
                        }
                }

		// next, get next page
                        $next_page_query = "    SELECT  `content`.`id`, `content`.`alias`, `content`.`title`
                                                FROM #__content as `content`, #__categories as `cat`
                                                WHERE   `content`.`catid` = $catid AND
                                                        `content`.`ordering` = " . ($ordering + 1) . " AND
                                                        `content`.`state` = 1 AND
                                                        `cat`.`id` = $catid
                                                LIMIT 1;
                        ";
                        $db->setQuery($next_page_query);
                        $next_page_results = $db->loadObjectList();
                        // if we found a previous page
                        if( $next_page_results )
                        {
                                $next_page_slug = $next_page_results[0]->id . ":" . $next_page_results[0]->alias;
                                $next_page_title = $next_page_results[0]->title;
                                $next_page_url = JRoute::_(ContentHelperRoute::getArticleRoute($next_page_slug, $catid));

				$additional_anchor_text = return_additional_anchor_text("com_content","article",$next_page_results[0]->id);
                                if( $additional_anchor_text->edu_previous_next_pages != "" )
                                        $next_page_title = $additional_anchor_text->edu_previous_next_pages;

                                $next_page_a_html = "Section " . ($section_number + 1) . ": <a href='$next_page_url'>$next_page_title</a>";
                                $text_next_page = "<div style='float:right;font-size:50px;color:#aaa;margin:-4px 0px 15px 15px;'>&#x203A;</div>";
                        }

                // next, get the category info
                        $category_query = "     SELECT  `id`,`title`,`alias`
                                                FROM    #__categories
                                                WHERE   `id` = $catid
                                                LIMIT 1
                        ";
                        $db->setQuery($category_query);
                        $category_results = $db->loadObjectList();
                        if($category_results)
                        {
                                $category_slug = $category_results[0]->id . ":" . $category_results[0]->alias;
                                $category_title = $category_results[0]->title;
                                $category_url = JRoute::_(ContentHelperRoute::getCategoryRoute($category_slug));
                                $category_page_a_html = "<a href='$category_url'>$category_title</a>";
                                $text_category_page = "<div style='font-size:14px; font-weight:bold;'>Category</div>";
                        }

		// finally, print!
                if( $text_previous_page == "" AND $text_next_page == "" )
                {
                        // do nothing
                }
                else
                {
                        echo "  <div class='quotebordered-first raised' style='margin:15px 0px;'>
					<div class='quotebordered raised'>
						<div style='text-align:center;font-size:18px;font-weight:bold;padding-top:15px;'>Continued Education in Course $category_page_a_html</div>
						<div style='text-align:center;color:#c52228;'>You are viewing Section $section_number: " . htmlentities($current_page_title,ENT_QUOTES) . "</div>
						<table style='width:100%;margin:15px 0px;font-size:15px;line-height:17px;'>
							<tr>
								<td valign='top' style='width:50%;border-right:1px solid #aaa;text-align:left;padding-right:10px;'>
									$text_previous_page
									$prev_page_a_html
								</td>
								<td valign='top' style='width:50%;text-align:right;padding-left:10px;'>
									$text_next_page
									$next_page_a_html
								</td>
							</tr>
						</table>
                                        	<div style='clear:both;'></div>
					</div>
                                </div>
                        ";
                }
        }
}






?>
