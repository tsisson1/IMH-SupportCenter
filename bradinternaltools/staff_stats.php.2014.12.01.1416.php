<?

ini_set('display_errors', 'On');
ini_set('log_errors_max_len', 20000);
error_reporting(E_ALL);
ini_set('error_log','error_log');

include_once("../configuration.php");

/*
	public $user = 'ccdevinm_jom3a';
	public $password = '76vPZ-(CmiSq';
        public $db = 'ccdevinm_jom3a';
        public $dbprefix = 'bipyv_';
*/

$vars = new JConfig;

$staff['bradm'] = 314177563;
$staff['scottm'] = 314219366;
$staff['arnelc'] = 314217384;
//$staff['jamesr'] = 314239910;
//$staff['jacobn'] = 314237336;
$staff['johnpaulb'] = 314237053;
$staff['jeffma'] = 316002350;
$staff['timr'] = 316003100;
$staff['anthonye'] = 316006069;

$start_date = $_GET['start_date'] . " 00:00:00";
$end_date = $_GET['end_date'] . " 23:59:59";


$con=mysqli_connect("localhost",$vars->user,$vars->password,$vars->db);
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_set_charset($con,"utf8");
foreach($staff as $user => $id)
{

	// ARTICLE UPDATES
	$query = "	SELECT	`up`.`type_id`,
				`up`.`timestamp`,
				`up`.`author_id`,
				`up`.`title`,
				`up`.`timestamp` as 'timestamp_of_update',
				'imh' as `brand`,
				`c`.`created`
			FROM	`" . $vars->dbprefix . "content_revisions` as `up`,
				`" . $vars->dbprefix . "content` as `c`
			WHERE	`author_id` = $id AND
				`c`.`id` = `up`.`type_id` AND
				`c`.`introtext` != `up`.`text` AND
				`up`.`timestamp` BETWEEN '$start_date' AND '$end_date'
				;
	";
	$result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($result))
        {
		if( strtotime($row['timestamp']) - strtotime($row['created']) >= (60*60*24*7) ){
			$return_data['article_updates'][$user][] = $row;
		}
        }


	// NEW ARITLCES
	$query = "	SELECT `id`,`title`,`alias`,`publish_up` as `created`, 'imh' as `brand`
			FROM `" . $vars->dbprefix . "content`
			WHERE	(`created_by` = $id) AND
				(`publish_up` BETWEEN '$start_date' AND '$end_date') AND
				(`title` NOT LIKE '1%' AND `title` NOT LIKE '2%') AND
				(`state` = 1);
	";
	$result = mysqli_query($con,$query);
	while($row = mysqli_fetch_array($result))
	{
		$return_data['new_articles'][$user][] = $row;
	}

	// NEW ANSWERS
	$question_start_date = strtotime($start_date);
	$question_end_date = strtotime($end_date);
	$query = "	SELECT `a`.`id` , `a`.`utc_n_answer_date`, `q`.`utc_n_ask_date`, `q`.`question`, `q`.`question_alias`, `q`.`best_answer_user`
			FROM `" . $vars->dbprefix . "answers` as a, `" . $vars->dbprefix . "questions` as q
			WHERE	(`a`.`question_id` = `q`.`id`) AND
				(`a`.`answerer_id` = $id) AND
				(`a`.`utc_n_answer_date` BETWEEN $question_start_date AND $question_end_date);
	";
	$result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($result))
        {
                $return_data['answers'][$user][] = $row;
        }

	// NEW FORUM POSTS
	$query = "	SELECT *
			FROM `" . $vars->dbprefix . "external_forum_activity`
			WHERE `user_id` = $id AND
			(`timestamp` BETWEEN '$start_date' AND '$end_date')
	";
	$result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($result))
        {
                $return_data['forum_posts'][$user][] = $row;
        }

	// NEW YOUTUBE VIDEOS
        $query = "      SELECT *,'imh' as 'brand'
                        FROM `" . $vars->dbprefix . "staff_uploaded_videos`
                        WHERE `user_id` = $id AND
                        (`timestamp` BETWEEN '$start_date' AND '$end_date')
        ";
        $result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($result))
        {
                $return_data['videos'][$user][] = $row;
        }

	// SELECT TOTAL COMMENTS
        $query = "      SELECT *
                        FROM `" . $vars->dbprefix . "question_to_question`
                        WHERE   `user_id` = $id AND
                                (`utc_n_timestamp` BETWEEN $question_start_date AND $question_end_date)
        ";
        $result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($result))
        {
                $return_data['comments'][$user]['question_to_question'][] = $row;
        }


        $query = "      SELECT `id`,`user_id`,`utc_n`
                        FROM `" . $vars->dbprefix . "comments`
                        WHERE   `user_id` = $id AND
                        (`utc_n` BETWEEN $question_start_date AND $question_end_date)
        ";
        $result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($result))
        {
                $return_data['comments'][$user]['comments'][] = $row;
        }


        $query = "      SELECT *
                        FROM `" . $vars->dbprefix . "answer_comments`
                        WHERE   `user_id` = $id AND
                        (`utc_n_timestamp` BETWEEN $question_start_date AND $question_end_date)
        ";
        $result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($result))
        {
                $return_data['comments'][$user]['answer_comments'][] = $row;
        }
}





// FIRST ANSWERS
$query = "      SELECT `id`,`question`,`question_alias`,`utc_n_ask_date`,`related_article_id`
		FROM `" . $vars->dbprefix . "questions`
		WHERE (`utc_n_ask_date` BETWEEN $question_start_date AND $question_end_date);
";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result))
{
	$query = "      SELECT `a`.`utc_n_answer_date`,`a`.`answerer_id`, `qat`.`answer_type`, `qat`.`title_updated`, `qat`.`url_updated`, `qat`.`staff_search`, `qat`.`time_locked_nn`
                        FROM    `" . $vars->dbprefix . "answers` as `a`
                                LEFT OUTER JOIN `" . $vars->dbprefix . "question_admin_tools` as `qat` ON `a`.`question_id` = `qat`.`question_id`
                        WHERE   `a`.`question_id` = " . $row['id'] . "
                        ORDER BY `a`.`utc_n_answer_date` ASC
                        LIMIT 1;
        ";
	$answer_result = mysqli_query($con,$query);
	while($answer_row = mysqli_fetch_array($answer_result))
	{
		$row['answerer_id'] = pass_staff_id_get_staff_username($answer_row['answerer_id'],$staff);
		$row['utc_n_answer_date'] = $answer_row['utc_n_answer_date'];
		$row['brand'] = "imh";
		$row['answer_type'] = $answer_row['answer_type'];
		$row['title_updated'] = $answer_row['title_updated'];
                $row['url_updated'] = $answer_row['url_updated'];
                $row['staff_search'] = $answer_row['staff_search'];
		$row['time_locked_nn'] = $answer_row['time_locked_nn'];

		$return_data['first_answers'][] = $row;
	}
}





$return_data['timezone'] = date('T');






// QUESTION BLOCK TIMES
$query = "      SELECT  *
		FROM    `" . $vars->dbprefix . "question_off_hours`;
";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result))
{
	$return_data['question_block_times'][] = $row;
}






// NO SEARCH RESULTS
/*
$query = "      SELECT *
                FROM `" . $vars->dbprefix . "no_search_results`
                WHERE (`timestamp` BETWEEN '$start_date' AND '$end_date');
";
$nsr_result = mysqli_query($con,$query);
while($nsr_row = mysqli_fetch_array($nsr_result))
{
	$return_data['no_search_results']['imh'][$nsr_row['terms']] = $nsr_row['status'];
}
*/




mysqli_close($con);


// echo "<pre>"; print_r($return_data); echo "</pre>";
echo json_encode($return_data);





function pass_staff_id_get_staff_username($id,$staff)
{
	foreach($staff as $username => $staffid)
	{
		if($id == $staffid)
			return $username;
	}
	return "unknown";
}


?>
