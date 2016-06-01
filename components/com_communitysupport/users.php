<style>
	ul.point_details {
		list-style:none;
		margin:5px 0px 0px 0px;
		font-size:11px;
		height:60px;
	}
	ul.point_details li {
		line-height:14px;
		color:#aaa;
	}
	ul.point_details li span {
		width:30px;
		display:inline-block;
		color:#000;
	}
	a.username {
		font-family:'adelle',sans-serif;
		font-size:16px;
		white-space:nowrap;
	}
	div.points {
		font-family:'adelle',sans-serif;
                font-size:14px;
		color:#c52228;
		text-align:right;
		padding-right:10px;
	}
	ul.point_details li.best_answer_rate {
		color:green;
	}
</style>
<?

if($_GET['test'] == "users" OR "enabled" == "enabled")
{
	// grab the top 25 users
	$query = "SELECT * FROM #__user_points ORDER BY `points` DESC LIMIT 30;";
	$db->setQuery($query);
	$top_users = $db->loadObjectList();

	foreach($top_users as $rank => $v)
	{
		$this_user = JFactory::getUser($v->user_id);
		$user_profile = load_user_profile($db,$this_user);
		$user_avatar_url = gf_pass_userid_get_avatar_url($v->user_id);
		$point_data = json_decode($v->point_data);

		$usernames_to_ignore = array("InMotionFans","CNick","tims","DDaviDD","JacobEsner","arncus");
		if (in_array($this_user->username,$usernames_to_ignore))
			continue;

		$best_answer_percentage = "";
		if($point_data->best_answer_count != 0 AND $point_data->answer_count != 0)
			$best_answer_percentage = "<li class='best_answer_rate'><span title='" . $point_data->best_answer_count . " best answers'>" . round($point_data->best_answer_count / $point_data->answer_count * 100,0) . "%</span> best answer rate</li>";

		$points_from_quizes = "";
		if($point_data->points_from_quizes > 0)
			$points_from_quizes = "<li><span>" . number_format($point_data->points_from_quizes) . "</span> quiz points</li>";

		$html = "
			<div style='float:left; margin:15px; padding:0px; width:190px;'>
				<img src='" . htmlentities($user_avatar_url,ENT_QUOTES) . "' style='width:60px; float:left; margin:0px;' class='sc_rc' />
				<div style='width:120px; float:right;'>
					<div><a class='username' href='" . JURI::current() . "/" . htmlentities($this_user->username,ENT_QUOTES) . "'>" . htmlentities($this_user->username,ENT_QUOTES) . "</a></div>
					<div class='points'><strong>" . number_format($v->points) . "</strong> points</div>
					<ul class='point_details'>
						<li><span>" . number_format($point_data->question_count) . "</span> questions asked</li>
						<li><span>" . number_format($point_data->answer_count) . "</span> answers</li>
						$best_answer_percentage
						<li><span>" . number_format(($point_data->answer_comment_count + $point_data->comment_count)) . "</span> comments</li>
						$points_from_quizes
					</ul>
				</div>
			</div>
		";

		if($this_user->groups[8] == 8)
			$staff_html .= $html;
		else
			$user_html .= $html;
	}

	echo "
		<h2>User Scoreboard</h2>
		$user_html
		<h2 style='clear:both;'>Moderator Scoreboard</h2>
		$staff_html
	";
}

/*

$top_users = object list

[0] => stdClass Object
        (
            [id] => 3864
            [last_update] => 2014-06-25 04:52:13
            [user_id] => 314217384
            [points] => 11455
            [point_data] => {"question_count":"0","answer_count":"991","answer_comment_count":"195","comment_count":"320"}
        )






user profile

stdClass Object
(
    [id] => 357
    [user_id] => 314217384
    [twitter_username] => arncus
    [facebook_url] => 
    [google_url] => https://plus.google.com/+ArnelCustodio
    [bio] => 
)

*/

?>
