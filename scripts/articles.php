<?php



include_once("../configuration.php");
$vars = new JConfig;

$con=mysqli_connect("localhost",$vars->user,$vars->password,$vars->db);
if (mysqli_connect_errno())
{
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die();
}

	$query = "
		SELECT *
                FROM `" . $vars->dbprefix . "categories`
                ORDER BY `id`;
	";
	$result = mysqli_query($con,$query);

	echo " <p class='label label-primary' style='display:inline-block;'>Last 20 articles written</p>
		<table class='table table-striped table-bordered'>
			<tr>
				<th>Article</th>
				<th></th>
				<th>Date</th>
				
			</tr>
	";
	while($row = mysqli_fetch_array($result))
	{
		
		$query = " select count(*)
			   from bipyv_content where catid = `" . $row['id'] ." `;


";
$result2 = mysqli_query($con,$query2);

	while ($row2 = mysqli_fetch($result2))

{
		echo "
			<tr>
				<td>" . $row['title']  ."</td>
				<td>" . $row2 . "</td>
			</tr>
		";
}	}
	echo "	</table>";


?>
