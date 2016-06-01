<?

$db = JFactory::getDbo();

switch($_POST['cxs_check_customer'])
{
	case "no":
		$query = "
			INSERT	INTO #__cxs_checks
				(`id`,`type`,`type_id`,`cxs_username`,`checked_staff_id`,`checked_timestamp`)
			VALUES	(NULL,'" . addslashes($_POST['cxs_check_type']) . "','" . addslashes($_POST['cxs_check_type_id']) . "','-1','" . addslashes($user->id) . "',CURRENT_TIMESTAMP);
		";
		$db->setQuery($query);
		$db->execute();
		break;
	case "yes":
		$query = "
                        INSERT  INTO #__cxs_checks
                                (`id`,`type`,`type_id`,`cxs_username`,`checked_staff_id`,`checked_timestamp`)
                        VALUES  (NULL,'" . addslashes($_POST['cxs_check_type']) . "','" . addslashes($_POST['cxs_check_type_id']) . "','" . trim(addslashes($_POST['cxs_check_username'])) . "','" . addslashes($user->id) . "',CURRENT_TIMESTAMP);
                ";
                $db->setQuery($query);
                $db->execute();
		break;
}

?>
