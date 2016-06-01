<?


// http://stackoverflow.com/questions/49547/making-sure-a-web-page-is-not-cached-across-all-browsers
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.


include_once("../configuration.php");
$vars = new JConfig;

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

echo json_encode($team_status);
die();


mysqli_close($con);

?>
