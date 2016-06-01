<?






include_once("../configuration.php");

$cg = new JConfig;

$con = mysqli_connect("localhost",$cg->user,$cg->password,$cg->db);
if (!$con)
{
	die('CNCTDB 737pm');
}
mysql_select_db($cg->db, $con);

$query = "SELECT * FROM `" . $cg->dbprefix . "search_hail_mary_terms`;";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result))
{
	$hm_terms[$row['terms']] = $row['number_of_terms'];
}

echo json_encode($hm_terms);

mysql_close($con);






?>
