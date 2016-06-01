<?


// http://stackoverflow.com/questions/49547/making-sure-a-web-page-is-not-cached-across-all-browsers
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.


include_once("../configuration.php");
$vars = new JConfig;
$top_position = 30;


$con=mysqli_connect("localhost",$vars->user,$vars->password,$vars->db);
if (mysqli_connect_errno())
{
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
}






/**
 * grab the department's status
 */
$query = "
        SELECT  `oncall`.*,
                `users`.`username`
        FROM    `" . $vars->dbprefix . "oncall` as `oncall`,
                `" . $vars->dbprefix . "users` as `users`
        WHERE   `oncall`.`out_timestamp_n` = 0 AND
                `oncall`.`user_id` = `users`.`id`
        ORDER BY `oncall`.`priority` ASC
";
$result = mysqli_query($con,$query);

$count = 0;
while($row = mysqli_fetch_object($result))
{
	$team_status[$count] = $row;
	$count++;
}
	
if (! $team_status)
{
        $team_status_html = "
		<script type='text/javascript'>
			alert('No on is on call. Please click \"Go on call\" in the top right of the page.');
		</script>
		<p style='background-color:#f2dede;border-color:#eed3d7;color:#b94a48;padding:8px 35px 8px 14px;margin-bottom:18px;text-shadow:0px 1px 0px rgba(255,255,255,0.5);border:1px solid #fbeed5;border-radius:4px;'>No one is on call! <a href='https://www.inmotionhosting.com/support/administrator/index.php?option=com_communitysupport&task=on_call' target='_blank'>Go on call</a></p>";
}
else
{
        $team_status_html = "
                <table style='font-size:14px;border-collapse: collapse;width:100%;' border='1' cellspacing='0' cellpadding='2'>
                        <tr style='background:#ddd;'>
                                <th>#</th>
                                <th>Agent</th>
                                <th title='login time'>Login</th>
                                <th title='priority'>Pri</th>
                        </tr>
        ";
        foreach($team_status as $k => $v)
        {
                $team_status_html .= "
                        <tr>
                                <td>" . ($k+1) . "</td>
                                <td>" . htmlentities($v->username,ENT_QUOTES) . "</td>
                                <td>" . date("g:i a",$v->in_timestamp_n + (60*60*3)) . "</td>
                                <td>" . $v->priority . "</td>
                        </tr>
                ";
        }
        $team_status_html .= "
			<tr style='background:#ddd;'>
				<td colspan='4'><a href='https://www.inmotionhosting.com/support/administrator/index.php?option=com_communitysupport&task=on_call' target='_blank'>Change your <em>on call</em> status</a></td>
			</tr>
                </table>
        ";
}
echo $team_status_html;






// ------------------------------------------------------------------------------------------------
// questions not locked
// ------------------------------------------------------------------------------------------------
$query = "	SELECT	`q`.`question`, `q`.`question_alias`,
			`qat`.`locker`
		FROM `" . $vars->dbprefix . "questions` as `q`
		LEFT OUTER JOIN `" . $vars->dbprefix . "question_admin_tools` as `qat` ON `q`.`id` = `qat`.`question_id`
		ORDER BY `q`.`id` DESC
		LIMIT 10;
";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result))
{
	// if there is no locker on the ticket
	if( $row['locker'] == "" )
        {
                $url = "http://www.inmotionhosting.com/support/" . htmlspecialchars($row['question_alias']);
		if( $_GET['new_window_alert'] != 1 )
	                echo "  <div style='margin:5px 0px; border:1px solid #EB0000; background:#FFE5E5; padding:1px; font-size:9px;'>
					<a href='$url' target='_blank'>QUESTION: " . htmlspecialchars($row['question']) . "</a>
                	        </div>
	                ";
		$show_staff_popup = true;
		$show_staff_popup_count++;
		$top_position += 30;
        }
}






// ------------------------------------------------------------------------------------------------
// comments not approved
// ------------------------------------------------------------------------------------------------
$query = "
SELECT	`content`.`title`, `content`.`alias`,`users`.`username`
FROM	`" . $vars->dbprefix . "content` as `content`,
	`" . $vars->dbprefix . "comments` as `comments`,
	`" . $vars->dbprefix . "users` as `users`
WHERE	`comments`.`hide_comment` = 1 AND
	`comments`.`object_group` = 'com_content' AND
	`comments`.`object_id` = `content`.`id` AND
	`content`.`created_by` = `users`.`id`
";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result))
{
	$url = "http://www.inmotionhosting.com/support/" . htmlspecialchars($row['alias']);
	if( $_GET['new_window_alert'] != 1 )
	{
                        echo "  <div style='margin:5px 0px; border:1px solid #EB0000; background:#FFE5E5; padding:1px; font-size:9px;'>
                                        Comment: <a href='$url' target='_blank'>" . htmlspecialchars($row['title']) . "</a> <strong>Author</strong>: " . htmlentities($row['username'],ENT_QUOTES) . "
                                </div>
                        ";
                $show_staff_popup = true;
                $show_staff_popup_count++;
        }
        $top_position += 30;
}






if( $show_staff_popup == true AND $_GET['new_window_alert'] == 1 )
	echo "$show_staff_popup_count new IMH alert(s) - Please visit http://customer-community.com/hud_new_staff_items.php";






mysqli_close($con);






?>
