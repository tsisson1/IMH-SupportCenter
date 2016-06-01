<?php
  
include_once("../configuration.php");
$vars = new JConfig;
$con=mysqli_connect("localhost",$vars->user,$vars->password,$vars->db);
if (mysqli_connect_errno())
{
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die();
}



  $key=$_GET['key'];
$sql="SELECT * FROM bipyv_content WHERE id = '".$key."'";
$result = mysqli_query($con,$sql);


?>
