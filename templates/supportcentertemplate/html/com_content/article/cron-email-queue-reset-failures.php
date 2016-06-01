<?


$year_month_day = date("Y-m-d",time());


$db = JFactory::getDBO();
$query = "
UPDATE	#__email_queue
SET	`been_sent` = 0
WHERE	`been_sent` = -1 AND
	`created_date` LIKE '$year_month_day%'
";
$db->setQuery($query);
$results = $db->execute();

// 2014.06.24 - bradm - remove emails that have been sent successfully
$query = "
DELETE	FROM #__email_queue
WHERE	`been_sent` = 1
";
$db->setQuery($query);
$results = $db->execute();


?>
