<?


$query = "
SELECT c.*, COUNT(c.object_id), `co`.alias, `co`.`title`
FROM
	#__comments as c,
	#__content as co
WHERE
	`c`.`object_group`='com_content' AND
	`co`.`id` = `c`.`object_id`
GROUP BY `c`.object_id
HAVING COUNT(`c`.object_id) = 1
ORDER BY `c`.utc_n
DESC
";
$db->setQuery($query);
$one_comments = $db->loadObjectList();






foreach($one_comments as $k => $v)
{
	echo "	<h1 style='margin-top:50px;'><a href='/support/" . $v->alias . "'>" . $v->title . "</a></h1>
		<div><strong>Comment Date:</strong> " . date('Y-m-d h:i:s a', $v->utc_n) . "</div>
		<div class='alert alert-info'>" . nl2br(htmlspecialchars($v->comment)) . "</div>
	";
}







?>
