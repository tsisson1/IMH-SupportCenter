<? /*






// setup some vars
$vars["anchor_clicked"] = $_POST['anchorname'];
$vars["url"] = $_POST['url'];
$vars["user_ip"] = $_SERVER['HTTP_X_FORWARDED_FOR'];
$vars["sfs"] = $_POST['sfs'];
$vars["referer"] = "--" . $_SERVER["HTTP_REFERER"] . "--";


// security
if( $vars['sfs'] != "yes" )
        die("NSFS");
if( strlen($vars["url"]) >= 250 OR strlen($vars["anchor_clicked"]) >= 100 )
	die("TLONG");
if( $vars['referer'] != "" )
	if( substr_count($vars["referer"],"inmotionhosting.com") < 1 )
		die("BREF");


// // echo "<pre>"; print_r($vars); echo "</pre>";
// // echo "<h1>POST</h1><pre>"; print_r($_POST); echo "</pre>"; 
// // echo "<h1>Server</h1><pre>"; print_r($_SERVER); echo "</pre>";






include_once("../configuration.php");

$cg = new JConfig;

$con = mysqli_connect("localhost",$cg->user,$cg->password,$cg->db);
if (mysqli_connect_errno())
{
	die('CNCTDB 737pm');
}

$page_url_for_ip_activity = date("Y.m.d H:i:s") . "\t" . "ANCHOR CLICK: " . $vars['anchor_clicked'] . "\t" . $_SERVER['HTTP_REFERER'] . "\n";

// does the user have an entry in the database?
$have_entry_in_database = false;
$query = "SELECT `ip_address` FROM `" . $cg->dbprefix . "ip_address_activity` WHERE `ip_address` = '" . $_SERVER['HTTP_X_FORWARDED_FOR'] . "';";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result))
{
	$have_entry_in_database = true;
}

// no, they don't have an entry
if( $have_entry_in_database == false )
{
        $query = "INSERT INTO `" . $cg->dbprefix . "ip_address_activity` (`ip_address`,`visits`,`activity`) VALUES ('" . $_SERVER['HTTP_X_FORWARDED_FOR'] . "',1,'" . addslashes($page_url_for_ip_activity) . "');";
	mysqli_query($con,$query);
}
// yes, they do have an entry
else
{
        $query = "UPDATE `" . $cg->dbprefix . "ip_address_activity` SET `activity` = CONCAT(`activity`,'" . addslashes($page_url_for_ip_activity) . "'), `visits` = `visits` + 1 WHERE `ip_address` = '" . $_SERVER['HTTP_X_FORWARDED_FOR'] . "';";
	mysqli_query($con,$query);
}

mysqli_close($con);






*/ ?>
