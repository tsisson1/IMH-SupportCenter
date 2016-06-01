<?php


//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');
$current_utc_n = strtotime(gmdate('Y-m-d H:i:s'));
$option = JRequest::getVar('option'); $view = JRequest::getVar('view'); $id = JRequest::getVar('id');
$db = JFactory::getDbo();






// ************************************************************************************
// find questions related to this article
// ************************************************************************************
if( $option == "com_communitysupport" )
{
$question_info = $_GET[id];
$db = JFactory::getDbo();
$query = $db->getQuery(true);
$query->select($db->quoteName(array('category_id')));
$query->from($db->quoteName('#__questions'));
$query->where($db->quoteName('id')." = ".$db->quote($question_info));
$db->setQuery($query);
$category_id = $db->loadResult();

//get category info
$db = JFactory::getDbo();
$query = $db->getQuery(true);
$query->select($db->quoteName(array('alias')));
$query->from($db->quoteName('#__question_categories'));
$query->where($db->quoteName('id')." = ".$db->quote($category_id));
$db->setQuery($query);
$category_info = $db->loadResult();

//get the id for realted category
$db = JFactory::getDbo();
$query = $db->getQuery(true);
$query->select($db->quoteName(array('id')));
$query->from($db->quoteName('#__categories'));
$query->where($db->quoteName('alias')." = ".$db->quote($category_info));
$db->setQuery($query);
$content_category = $db->loadResult();


$db = JFactory::getDbo();
$query = $db->getQuery(true);
$query->select($db->quoteName(array('title', 'alias')));
$query->from($db->quoteName('#__content'));
$query->where($db->quoteName('catid')." = ".$db->quote($content_category));
$query->order('id DESC');
$query->setLimit(5);
$db->setQuery($query);
$row = $db->loadRowList();


if ($content_category != 0){

echo "

                                <h3>Related Articles</h3>";
foreach ($row as $rows) {
echo "<a target='_blank' href='http://inmotionhosting.com/support/$rows[1]'>$rows[0]</a><br/><br />\n";
	
}}

		 }      





// is this an article?
if($option == "com_content" AND $view == "article")
{
	/*
	if($user->username == "BradM" AND $option == "com_communitysupport" AND $related_article_id > 0 AND $this_question_id > 0)
	{
		$id = $related_article_id;
		$query = "SELECT `id`,`question` FROM #__questions WHERE `related_article_id` = $related_article_id AND `id` != $this_question_id;";
	}
	else
		$query = "SELECT `id`,`question` FROM #__questions WHERE `related_article_id` = $id;";
	*/
	$query = "SELECT `id`,`question` FROM #__questions WHERE `related_article_id` = $id;";
	$db->setQuery($query);
	$related_questions = $db->loadObjectList();
	// if we have related questions
	if( $related_questions )
	{
		foreach($related_questions as $k => $qo)
		{
			$related_question_url = pass_question_id_return_question_url_mod_latestquestions($qo->id);
        		$related_question_list .= "
				<div style='margin:10px 0px;'>
                                        <a href='$related_question_url?tsrc=rsbraq'>" . htmlspecialchars($qo->question) . "</a>
                                </div>
			";
		}
	}
	echo "
                <h3>Related Questions</h3>
                <div>Here are a few questions related to this article that our customers have asked:</div>
        ";
        if( $related_question_list )
                echo $related_question_list;
        else
                echo "<div style='margin:10px 0px; color:#aaa;'>Ooops! It looks like there are no questions about this page.</div>";
        echo "
                <div>Would you like to ask a question about this page? If so, click the button below!</div>
                <div style='text-align:right; margin-top:10px;'><a class='btn btn-primary' href='/support/community-support/ask-a-question'>Ask a Question</a></div>
        ";
}






return;






function pass_question_id_return_question_url_mod_latestquestions($id)
{
        if( ! is_numeric($id) )
                JError::raiseError( 404, 'Question not found' );

        $db = JFactory::getDbo();

        // grab category information
        $query = "
SELECT `q`.`question_alias`, `qc`.*
FROM #__question_categories qc, #__questions q
WHERE   `q`.`id` = $id AND
        `q`.`category_id` = `qc`.`id`
        ";
        $db->setQuery($query);
        $category_info = $db->loadObjectList();

        if( $category_info[0]->parent_id == 0 )
                // BREAKS SSL // return JURI::base() . "community-support/" . $category_info[0]->alias . "/" . $category_info[0]->question_alias;
		return "/support/community-support/" . $category_info[0]->alias . "/" . $category_info[0]->question_alias;

        $query = "SELECT `alias` FROM #__question_categories WHERE `id` = " . $category_info[0]->parent_id . ";";
        $db->setQuery($query);
        $parent_category_info = $db->loadObjectList();

        // BREAKS SSL // return JURI::base() . "community-support/" . $parent_category_info[0]->alias . "/" . $category_info[0]->alias . "/" . $category_info[0]->question_alias;
	return "/support/community-support/" . $parent_category_info[0]->alias . "/" . $category_info[0]->alias . "/" . $category_info[0]->question_alias;
}






?>
