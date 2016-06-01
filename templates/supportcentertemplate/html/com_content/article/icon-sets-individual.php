<?php

//don't allow other scripts to grab and execute our file
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


$db = JFactory::getDBO();

// the first thing we need to do is get the article's id number
// $exploded_id = explode(":",$_GET['id']);
// $article_id = $exploded_id[0];
$article_id = $this->item->id;


if( ! is_numeric($article_id) )
	die('error');





?>
<div class='item-page'>
<?php if ($params->get('show_title') || $params->get('show_author')) : ?>
        <div class="page-header">
                <h1>
                        <?php if ($this->item->state == 0): ?>
                                <span class="label label-warning"><?php echo JText::_('JUNPUBLISHED'); ?></span>
                        <?php endif; ?>
                        <?php if ($params->get('show_title')) : ?>
                                <?php if ($params->get('link_titles') && !empty($this->item->readmore_link)) : ?>
                                        <a href="<?php echo $this->item->readmore_link; ?>"> <?php echo $this->escape($this->item->title); ?></a>
                                <?php else : ?>
                                        <?php echo $this->escape($this->item->title); ?>
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
                                                $google_author = "<a href='" . $article_author->getParam('google_profile_url') . "'>$author</a>";
                                                echo JText::sprintf('COM_CONTENT_WRITTEN_BY', $google_author);
                                        }
                                        else
                                        {
                                                echo JText::sprintf('COM_CONTENT_WRITTEN_BY', $author);
                                        }
                                ?>
                                <?php endif; ?>

                                <?php endif; ?>
        </div>
        <?php endif; ?>
<?


	


	

// ------------------------------------------------------------------------------------------------
// print the icon itself
// ------------------------------------------------------------------------------------------------	
if("test" == "test")
{
	// next, grab all the data for this specific page
	$query = "SELECT * FROM #__icon_sets_individual as individual, #__icon_sets_parents as parent, #__icon_sets_licenses as license WHERE individual.icon_article_id = $article_id AND individual.icon_parent = parent.parent_id AND individual.icon_license = license.license_id;";
	$db->setQuery($query);
	$icon_info = $db->loadObjectList();

	// echo "<pre>"; print_r($icon_info); echo "</pre>"; die();
	
	if($icon_info)
	{
		// set the icon thumb width and height
		$thumb_width = $icon_info[0]->icon_thumb_width;
		$thumb_height = $icon_info[0]->icon_thumb_height;
			
		echo "<p> </p>";
		
		// print the icons themselves
		echo "<div style='float:left; margin:0px 15px 0px 0px;'>";
		$exploded_urls = explode("\n",$icon_info[0]->icon_urls);	
		foreach( $exploded_urls as $icon_key => $icon_url )
		{
			echo "	<img src='$icon_url' style='width: " . $thumb_width . "px; height:" . $thumb_height . "px; display:block; border:1px solid #ccc;' />
					<div style='border:1px solid #ccc; border-top:0px; text-align:center; margin-bottom:15px; font-weight:bold; background:#eee;'>
						<a href='$icon_url' target='_blank'>Download</a>
					</div>
			";
					
		}
		echo "</div>";
		
		// print a description of the icon
		$description_field_name = "parent_child_description_" . $icon_info[0]->icon_use_parent_description;
		$icon_description = sprintf( $icon_info[0]->$description_field_name, $icon_info[0]->icon_name);
		echo "<div>$icon_description</div>";
		
		// print the icon license
		/*
		echo "	<div style='clear:both;'></div>
				<div class='vital_heading'>" . $icon_info['license_description'] . "</div>
		";
		*/
		
		// print the icon license
		echo "	<div style='clear:both;'></div>
				<div style='padding:4px; background:#eee; border:1px solid #ccc;'>" . $icon_info[0]->license_description . "</div>
		";
	} // end IF we have an icon to print
}

	
	
	
	

// ------------------------------------------------------------------------------------------------	
// print the parent this icon set belongs to
// ------------------------------------------------------------------------------------------------
if("test" == "test")
{
	// grab all the icons that belong to the parent
	$query = "SELECT `content`.`alias` as 'content_alias', `content`.`catid` as 'content_catid', `isi`.* FROM #__icon_sets_individual as `isi`, #__content as `content` WHERE `isi`.`icon_parent` = " . $icon_info[0]->parent_id . " AND `content`.`id` = `isi`.`icon_article_id`;";
	$db->setQuery($query);
	$others_in_icon_set = $db->loadObjectList();
	// echo "<pre>"; print_r($icon_info); echo "</pre>";
	// echo "<pre>"; print_r($others_in_icon_set); echo "</pre>";
	
	echo "	<h2>Other icons in the " . $icon_info[0]->parent_name . "</h2>";
	
	foreach($others_in_icon_set as $k => $v)
	{
		$exploded_icon_urls = explode("\n",$v->icon_urls);
		foreach($exploded_icon_urls as $exploded_icon_urls_key => $icon_url)
		{
			// create the new url to the image
			$exploded_icon_url = explode("/",$icon_url);
			$exploded_icon_url[count($exploded_icon_url)-1] = $icon_info[0]->parent_thumb_pre . $exploded_icon_url[count($exploded_icon_url)-1];
			$new_icon_url = implode("/",$exploded_icon_url);
			
			// create the url to the article
			// $article_link = return_sef_link($v->icon_article_id);
			// grab the url from the <a href=''>link</a>
			// $article_link = explode("\"",$article_link);
			// $article_link = $article_link[1];
			$article_slug = $v->icon_article_id . ":" . $v->content_alias;
                        $article_link = JRoute::_(ContentHelperRoute::getArticleRoute($article_slug, $v->content_catid));

			
			echo "<div style='display:inline;'><a href='$article_link' title='" . $v->icon_name . "'><img src='$new_icon_url' style='border:1px solid #ccc; margin:0px 15px 15px 0px; background:#eee;' /></a></div>
			";
		}
	}
}






$like_this_icon = return_div_with_social_buttons("Like this icon?",$this->document->base);

echo "		$like_this_icon
	</div>"; // close class item-page






/*
if( $user->username == "BradM" )
{
	echo "<div>...</div>";
	echo "<pre>"; print_r($_SERVER); echo "</pre>";
}
*/	





	
?>
