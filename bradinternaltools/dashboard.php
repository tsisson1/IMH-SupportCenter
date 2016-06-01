<?

include_once("../configuration.php");

$vars = new JConfig;

$staff['TJEdens'] = 316006069;
$staff['bradm'] = 314177563;
$staff['scottm'] = 314219366;
$staff['arnelc'] = 314217384;
$staff['jamesr'] = 314239910;
$staff['jacobn'] = 314237336;
$staff['johnpaulb'] = 314237053;
$staff['jeffma'] = 316002350;
$staff['timr'] = 316003100;

$con=mysqli_connect("localhost",$vars->user,$vars->password,$vars->db);
if (mysqli_connect_errno())
{
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if($_GET['completed'] != '1')
{
$query = "
SELECT	`sa`.*,
	`u`.`username`,
	'imh' as `brand`
FROM	`" . $vars->dbprefix . "staff_alerts` as `sa`
LEFT JOIN `" . $vars->dbprefix . "users` as `u` ON `sa`.`lock_user` = `u`.`id`
WHERE	`sa`.`complete_time` is null
";
}
else
{
$query = "
SELECT  `sa`.*,
        `u`.`username`,
        'imh' as `brand`
FROM    `" . $vars->dbprefix . "staff_alerts` as `sa`
LEFT JOIN `" . $vars->dbprefix . "users` as `u` ON `sa`.`lock_user` = `u`.`id`
WHERE   `sa`.`complete_time` is not null
ORDER BY `id` DESC
LIMIT 10;
";
}
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_object($result))
	$return[strtotime($row->timestamp)] = $row;

echo json_encode($return);
die();

?>
