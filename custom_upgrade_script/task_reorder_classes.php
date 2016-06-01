<?

include("config.php");






// from j3, grab a list of all category id's and aliases
$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}
mysql_select_db($new_db_name,$con);
$query = "SELECT `id`,`title` FROM `$new_db_name`.`" . $new_db_fix . "categories` WHERE `level` = 2 AND `extension` = 'com_content' AND `path` LIKE 'edu/%';";
$result = mysql_query($query);
while($edus = mysql_fetch_array($result))
{
	$edu_id = $edus['id'];

	// grab the first lft out of all the the categories
	$query = "SELECT `lft` FROM `$new_db_name`.`" . $new_db_fix . "categories` WHERE `parent_id` = $edu_id ORDER BY `lft` ASC LIMIT 1;";
	$result_first_lft = mysql_query($query);
	$first_lft = mysql_fetch_array($result_first_lft);
	$first_lft = $first_lft['lft'];

	$query = "SELECT `id` FROM `$new_db_name`.`" . $new_db_fix . "categories` WHERE `parent_id` = $edu_id ORDER BY `title` ASC;";
	$result_ordered_classes = mysql_query($query);
	while($ordered_classes = mysql_fetch_array($result_ordered_classes))
	{
		echo "<pre>"; print_r($ordered_classes); echo "</pre>";

		$query = "UPDATE `$new_db_name`.`" . $new_db_fix . "categories` SET `lft` = " . $first_lft . ", `rgt` = " . ($first_lft + 1) . " WHERE `id` = " . $ordered_classes['id'] . ";";
		echo "<p>$query</p>";
		mysql_query($query);

		$first_lft = $first_lft + 2;
	}
}









?>
