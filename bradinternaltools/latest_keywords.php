<?

// http://stackoverflow.com/questions/49547/making-sure-a-web-page-is-not-cached-across-all-browsers
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.


?><html>

<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background:none;
			padding-top:25px;
		}
		table.table.table-striped.table-bordered {
			background:#fff;
			font-size:12px;
		}
		table.table.table-striped.table-bordered tbody tr td form {
			display:inline;
		}
		table.table.table-striped.table-bordered tbody tr td form input.btn {
			font-size:10px;
			padding:2px;
			letter-spacing:1px;
		}
	</style>

</head>

<body>


<script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'search.php?key=%QUERY',
        limit : 10
    });
});
    </script>


	<p class='label label-success' style='position:fixed;top:0px;left:0px;width:100%;'>Articles</p>
<?
	





include_once("../configuration.php");
$vars = new JConfig;

$con=mysqli_connect("localhost",$vars->user,$vars->password,$vars->db);
if (mysqli_connect_errno())
{
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
}






// ------------------------------------------------------------------------------------------------
// questions not locked
// ------------------------------------------------------------------------------------------------
if($_GET['url'] != "")
{
	$query = "
		SELECT  *
                FROM `" . $vars->dbprefix . "related_articles`
                ORDER BY `id` DESC
                LIMIT 20;
	";
	$result = mysqli_query($con,$query);

	echo " <p class='label label-primary' style='display:inline-block;'>Top 20 Related Articles</p>
		<table class='table table-striped table-bordered'>
			<tr>
				<th>Article Title</th>
				<th>ID</th>
				<th>Copy</th>
			</tr>
	";
	while($row = mysqli_fetch_array($result))
	{
		echo "
			<tr>
				<td><a href='" . $row['url']  ."'>" . $row['title'] . "</a></td>
				<td>" . $row['article_id'] . "</td>
			</tr>
		";
	}
	echo "	</table>";
}









mysqli_close($con);




?>
