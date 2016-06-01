<?

// connect to the database -------------------------------------------------------------------------------------------------------------------------
include_once("configuration.php");
$cg = new JConfig;
$con = mysqli_connect("localhost",$cg->user,$cg->password,$cg->db);
if (mysqli_connect_errno())
	die('error 201401080927');

// clean up the variables --------------------------------------------------------------------------------------------------------------------------
$load_time = $GLOBALS['track_page_load_time_total_time'];
$url = addslashes($_SERVER['REQUEST_URI']);
$get = addslashes(json_encode($_GET));
$post = addslashes(json_encode($_POST));
$user_ip = addslashes($_SERVER['HTTP_X_FORWARDED_FOR']);

// setup and run query -----------------------------------------------------------------------------------------------------------------------------
$query = "	INSERT INTO `" . $cg->dbprefix . "track_page_load_time`
		(`id`,`timestamp`,`loadtime`,`user_ip`,`url`,`get`,`post`)
		VALUES (NULL,CURRENT_TIMESTAMP,$load_time,'$user_ip','$url','$get','$post');
";
// echo "<pre>$query</pre>";
mysqli_query($con,$query);

mysqli_close($con);

?>
