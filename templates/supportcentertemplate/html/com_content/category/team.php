<?php


//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

$db = JFactory::getDBO();






if( "enable" == "enable" )
{


	// -------------------------------------------------------------------------------------
	// build our array of thing's we're doing
	// -------------------------------------------------------------------------------------
	
	
	// grab the latest 10 articles written
	$query = "SELECT `id`,`created`,`created_by`,`alias`,`catid`,`title` FROM #__content as content WHERE `state` = 1 AND `catid` != 502 ORDER BY `created` DESC LIMIT 0,10;";
	$db->setQuery($query);
	$new_articles = $db->loadObjectList();
	foreach($new_articles as $k => $v)
	{
		$article_slug = $v->id . ":" . $v->alias;
		$article_link = JRoute::_(ContentHelperRoute::getArticleRoute($article_slug, $v->catid));
		
		$action_type[strtotime($v->created)] = "Published new tutorial";
		$action_icon[strtotime($v->created)] = "team_table_tutorials";
		$action_html[strtotime($v->created)] = "<a href='$article_link'>" . $v->title . "</a>";
		$final_action[strtotime($v->created)] = 1;
	}
	
	// grab last 10 article updates



       $query = "select `asset_id`,`modified`,`alias`,`catid`,`title` from bipyv_content revisions where state = '1' order by id DESC limit 10;";
        $db->setQuery($query);
        $new_article_update = $db->loadObjectList();
        foreach($new_article_update as $k => $v)
        {
                $update_slug = $v->asset_id . ":" . $v->alias;
                $update_link = JRoute::_(ContentHelperRoute::getArticleRoute($update_slug, $v->catid));

                $action_type[strtotime($v->modified)] = "A tutorial has been updated";
                $action_icon[strtotime($v->modified)] = "team_table_tutorials";
                $action_html[strtotime($v->modified)] = "<a href='$update_link'>" . $v->title . "</a>";
                $final_action[strtotime($v->modified)] = 1;
        }
	







	// grab the latest 10 questions
/*
	$query = "SELECT `answer`.`utc_n_answer_date`, `answer`.`question_id`, `answer`.`answerer_id`, `question`.`question` FROM #__answers as `answer`, #__questions as `question` WHERE `answer`.`question_id` = `question`.`id` ORDER BY `answer`.`utc_n_answer_date` DESC LIMIT 0,10;";
	$db->setQuery($query);
	$question_data = $db->loadAssocList();
	foreach($question_data as $k => $v)
	{	
		$action_type[strtotime($v['date'])] = "Answered a Question";
		$action_icon[strtotime($v['date'])] = "team_table_answers";
		$action_html[strtotime($v['date'])] = "<a href='fix-this-link'>" . $v['question'] . "</a>";
		$final_action[strtotime($v['date'])] = 1;
	}
	
*/
	// grab the latest 10 external forum posts
/*
	$query = "SELECT `posts`.`user_id`,`posts`.`forum_link`,`posts`.`timestamp` FROM #__external_forum_activity as `posts` ORDER BY `posts`.`timestamp` DESC LIMIT 0,10;";
	$db->setQuery($query);
	$posts = $db->loadAssocList();
	foreach($posts as $k => $v)
	{
		// grab "forum.joomla.org" from the url
		$exploded_forum_link = explode("/",$v['forum_link']);
	
		$action_type[strtotime($v['timestamp'])] = "Posted a forum response at " . $exploded_forum_link[2];
		$action_user[strtotime($v['timestamp'])] = "<img src='/support/images/authors/" . $v['image'] . "' style='width:30px; float:left; margin:0px 15px 15px 0px; border:1px solid #ccc;' />";
		$action_icon[strtotime($v['timestamp'])] = "team_table_forums";
		$action_html[strtotime($v['timestamp'])] = "<a rel='nofollow' href='" . $v['forum_link'] . "'>" . $v['forum_link'] . "</a>";
		$final_action[strtotime($v['timestamp'])] = 1;
	}
*/	
	
	// grab the latest 10 article edits
/*
	$query = "SELECT * FROM #__log_article_edits_2 as lae, imh_authors as authors WHERE `lae`.`admin_id` = `authors`.`id` ORDER BY `lae`.`timestamp` DESC LIMIT 0,10;";
	$db->setQuery($query);
	$edits = $db->loadAssocList();
	foreach($edits as $k => $v)
	{
		// grab a link to the article edited
		$article_link = return_sef_link($v['article_id']);
	
		$action_type[strtotime($v['timestamp'])] = "Edited this article:<br />$article_link";
		$action_user[strtotime($v['timestamp'])] = "<img src='/support/images/authors/" . $v['image'] . "' style='width:30px; float:left; margin:0px 15px 15px 0px; border:1px solid #ccc;' />";
		$action_icon[strtotime($v['timestamp'])] = "<img src='/support/images/search_article.png' style='width:30px; float:left; margin:0px 15px 15px 0px;' />";
		$action_html[strtotime($v['timestamp'])] = $v['description'];
		$final_action[strtotime($v['timestamp'])] = 1;
	}

*/
	
	
	
			
	// print all of our activity
	echo "
		<div class='item-page'>
			<div class='page-header'>
				<h1>Meet the Customer Community Team!</h1>
			</div>
			<table style='width:100%; text-align:center;'>
				<tr>
					<td style='width:33%;'><img src='https://lh3.googleusercontent.com/-NBh2f5kDJfQ/AAAAAAAAAAI/AAAAAAAAACU/6SP6_r-gSAQ/s100-p-rw-no/photo.jpg' style='width:100px; background:#D9D9D9; border:1px solid #A6A6A6; padding:3px;' /></td>
					<td style='width:33%;'><img src='https://lh3.googleusercontent.com/-et9qjCJVL08/AAAAAAAAAAI/AAAAAAAAAC4/C539ZYF2HNc/s100-p-rw-no/photo.jpg' style='width:100px; background:#D9D9D9; border:1px solid #A6A6A6; padding:3px;' /></td>
					<td style='width:33%;'><img src='/support/images/authors/tj-profile-2.jpg' style='width:100px; background:#D9D9D9; border:1px solid #A6A6A6; padding:3px;' /></td>			</tr>
				<tr>
					<td>Tim S</td>
					<td>Scott M</td>
					<td>TJ E</td>
				</tr>
				<tr>
					<td style='width:33%;'><img src='https://lh3.googleusercontent.com/-AmEnso4E7cE/AAAAAAAAAAI/AAAAAAAAAB8/-OBGtrb_6VM/s100-p-rw-no/photo.jpg' style='width:100px; background:#D9D9D9; border:1px solid #A6A6A6; padding:3px;' /></td>
					<td style='width:33%;'><img src='https://lh3.googleusercontent.com/-np8xy9GiNy8/AAAAAAAAAAI/AAAAAAAAAEU/Eu1yKGoTxiA/photo.jpg?sz=100' style='width:100px; background:#D9D9D9; border:1px solid #A6A6A6; padding:3px;' /></td>
					<td style='width:33%;'><img src='http://lh3.googleusercontent.com/-Qzm5Afwbl4g/AAAAAAAAAAI/AAAAAAAAAEc/CXPngTPySFA/s120-c/photo.jpg?sz=100' style='width:100px; background:#D9D9D9; border:1px solid #A6A6A6; padding:3px;' /></td>
				</tr>
				<tr>
					<td>Christopher M</td>
					<td>Arnel C</td>
					<td>John-Paul B</td>
				</tr>
			</table>
			<h2 style='margin:25px 0px 10px 0px;'>What does the team do?</h2>
			<table style='margin-bottom:25px;'>
				<tr>
					<td style='width:33%;' valign='top'>
						<div class='team_tutorials'>Tutorials</div>
						<div>We write tutorials to help our customers effectively run their websites.</div>
					</td>
					<td style='width:33%; padding:0px 15px 0px 0px;' valign='top'>
						<div class='team_answers'>Answers</div>
						<div>When our customers have <a href='/support/community-support'>questions, we answer them</a>, <em>and fast!</em></div>
					</td>
					<td style='width:33%;' valign='top'>
						<div class='team_forums'>Forums</div>
						<div>We volunteer in forums across the web, such as the official Joomla and Moodle forums.</div>
					</td>
				</tr>
			</table>
	";
	krsort($final_action);
	echo "		<h2>Our Recent Activity</h2>
			<p>
				We're always working hard here in the Customer Community team. To help show you the team is here and helping our customers, we've listed below a few of the more recent things we've been up to!
			</p>
	";

	$x = 1;
	foreach($final_action as $k => $v)
	{
		$team_div_class = "";
		$team_div_style = "";
		if($x == count($final_action))
		{
			$team_div_class = "round_bottom";
		}
		elseif($x == 1)
		{
			$team_div_class = "round_top";
			$team_div_style = "style='border-top:1px solid #ddd;'";
		}
		echo "	<div class='$team_div_class " . $action_icon[$k] . "' $team_div_style>" . 
				$action_html[$k] . "<br />" . 
				$action_type[$k] . " - <em>" . date('M jS, Y g:i a',$k) . "</em>
			</div>
		";
		$x++;
	}

	echo "</div>";
	

}






?>
