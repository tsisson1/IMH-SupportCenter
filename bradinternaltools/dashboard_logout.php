<?

$user_id = $_GET['user_id'];
if (!is_numeric($user_id))
	die('nn');

include_once("../configuration.php");

$vars = new JConfig;

$con=mysqli_connect("localhost",$vars->user,$vars->password,$vars->db);
if (mysqli_connect_errno())
{
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "
UPDATE	`" . $vars->dbprefix . "oncall`
SET	`out_timestamp_n` = " . time() . "
WHERE	`out_timestamp_n` = 0 AND
	`user_id` = $user_id
LIMIT	1
";
mysqli_query($con,$query);

mysqli_close($con);

?>
