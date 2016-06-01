<?


// No direct access to this file
defined('_JEXEC') or die('Restricted access');






// grab the category information, like id,parent_id,title,and alias
$category_alias = addslashes($exploded_url[count($exploded_url)-1]);
$query = "SELECT * FROM #__question_categories WHERE `alias` = '$category_alias';";
$db->setQuery($query);
$category_info = $db->loadObjectList();

if( count($category_info) == 0 )
{
	header("location: /support/error/community-support/$category_alias");
	exit;
}

// prevent this from happening
// http://www.webhostinghub.com/support/community-support/website/premium-website-builder
if( $category_info[0]->parent_id == 0 )
{
        // ok, so at this point, we know know we're dealing with a parent category, this means that
        // $exploded_url[count($exploded_url)-2] should = "community-support
        if( $exploded_url[count($exploded_url)-2] != "community-support" )
        {
                header("location: /support/community-support/$category_alias");
                exit;
        }
}

echo "
<div class='page-header'>
	<h1>Q&A: <span style='font-weight:normal;'>" . $category_info[0]->title . "</span></h1>
	<div><a href='/support/community-support'>Browse other questions</a></div>
</div>
";

if( $if_pagination_which_page > 1 )
	$document->setTitle($category_info[0]->title . " Questions - Page " . $if_pagination_which_page . " | InMotion Hosting");
else
	$document->setTitle($category_info[0]->title . " Questions | InMotion Hosting");






// are there sub categories?
$query = "
SELECT 'dog' as 'doggy', count(`q`.`id`) as 'question_count', qc.*
FROM #__question_categories qc, #__questions q
WHERE	`qc`.`parent_id` = " . $category_info[0]->id . " AND
	`q`.`category_id` = `qc`.`id`
GROUP BY `qc`.`id`; 
";
$db->setQuery($query);
$sub_category_info = $db->loadObjectList();






// are we doing any pagination in the query?
$question_limit = "LIMIT 0,15";
if( $if_pagination_which_page != false )
	$question_limit = "LIMIT " . ( ($if_pagination_which_page - 1) * 15) . ", 15";






// grab all of the questions
// $query = "SELECT * FROM #__questions where `category_id` = " . $category_info[0]->id . ";";
$query = "
SELECT	count(`answer`.`id`) as 'number_of_answers',
        `question`.`hits`,
        `question`.`id`,
        `question`.`question`,
        `question`.`utc_n_ask_date`,
	`question`,`description`,
	`question`,`asker_id`,
	`question`.`approved`,
	`user`.`username`
FROM	#__questions as `question`
LEFT JOIN #__users as `user` ON `question`.`asker_id` = `user`.`id`
LEFT JOIN #__answers as `answer` ON `question`.`id` = `answer`.`question_id`
WHERE	`question`.`category_id` = " . $category_info[0]->id . " AND
	`question`.`approved` != -1
GROUP BY `question`.`id`
ORDER BY `question`.`hits` DESC
$question_limit
";
$db->setQuery($query);
$questions = $db->loadObjectList();






if($sub_category_info)
{
	echo "<h2>Sub Categories</h2>";

	echo "<ul>";
	foreach($sub_category_info as $k => $v)
	{
		$sub_category_url = JURI::base() . "community-support/" . $category_info[0]->alias . "/" . $v->alias;
		echo "	<li>
				<a href='$sub_category_url'>" . $v->title . "</a> (" . $v->question_count . ")
			</li>
		";
	}
	echo "</ul>";
}






// display the questions
echo "<h2>Questions</h2>";
if( $questions )
{
	if($questions)
	{
		echo "<table>";
		foreach($questions as $k => $v)
		{
			$link_to_question = pass_question_id_return_question_url($v->id);

			// $question_description = strip_tags(htmlspecialchars_decode($v->description));
			$question_description = htmlentities($v->description,ENT_QUOTES);
			if( strlen($question_description) > 150 )
				$question_description = substr($question_description,0,150) . "...";

			$answer_text = "Answers";
			if( $v->number_of_answers == 1)
				$answer_text = "Answer";

			$hits_text = "Views";
			if( $v->hits == 1)
				$hits_text = "View";

			$asker_avatar_url = pass_userid_get_avatar_url($v->asker_id);
			// 2013.07.11.1005 bradm - ssl fix
			$asker_avatar_url = str_replace("http://","//",$asker_avatar_url);

			$username_url_text = str_replace(".","&per;",$v->username);

			echo "
<tr style='border-bottom:1px solid #ddd;'>
	<td style='width:100px; padding-top:15px;' valign='top'>
		<div>" . number_format($v->hits) . " $hits_text</div>
		<div>" . $v->number_of_answers . " $answer_text</div>
	</td>
	<td style='padding-bottom:15px; padding-top:15px;'>
		<div style='font-size:18px;'><a href='$link_to_question'>" . htmlentities($v->question,ENT_QUOTES) . "</a></div>
		<div>$question_description</div>
		<div style='color:#aaa; margin-top:10px;'>
			<img src='$asker_avatar_url' style='width:25px;' />  <a href='/support/community-support/users/$username_url_text'>" . $v->username . "</a> " . date("Y-m-d h:i a",$v->utc_n_ask_date - (60*60*4)) . " EST
		</div>
	</td>
</tr>
			";
		}
		echo "</table>";
	}
}
else
{
	echo "<p>Sorry, on questions available.</p>";
}






// PAGINATION - how many questions are in this cateogy?
$query = "SELECT count(`id`) as 'total_questions' FROM #__questions WHERE `category_id` = " . $category_info[0]->id . ";";
$db->setQuery($query);
$total_count_query_results = $db->loadObjectList();
$total_count = $total_count_query_results[0]->total_questions;

if($total_count >15)
{
	$current_pagination_page = $if_pagination_which_page;
	if( $if_pagination_which_page == false )
		$current_pagination_page = 1;
	print_pagination($current_pagination_page,$total_count,$exploded_url);
}







?>
