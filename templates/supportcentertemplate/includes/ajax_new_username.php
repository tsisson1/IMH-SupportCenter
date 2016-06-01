<?

$username = $_POST['username'];

if(strlen($username) < 5 || strlen($username) > 30)
	die("0");

if( substr_count($username," ") )
	die("-1");

$bad = array("<",">","\\","\"","'","%",";","(",")","&");
foreach($bad as $k => $v)
	if( substr_count($username,$v) > 0 )
		die("-2");

include_once("../../../configuration.php");

$cg = new JConfig;

$con = mysql_connect("localhost",$cg->user,$cg->password);
if (!$con)
{
	die('CNCTDB 737pm');
}
mysql_select_db($cg->db, $con);

$query = "SELECT count(`id`) as 'username_count' FROM `" . $cg->dbprefix . "users` WHERE `username` = '" . addslashes($username) . "';";

$result = mysql_query($query);

while($row = mysql_fetch_array($result))
{
	if($row['username_count'] == 0)
		echo "1";
	else
		echo "-3";
}

?>
