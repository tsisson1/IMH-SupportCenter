<?

// how many do we have to process?
$query = "SELECT count(`id`) FROM #__cxs_checks WHERE `processed` = 0;";
$db->setQuery($query);
$number_need_to_process = $db->loadResult();

echo "
	<p>Total checks that need to be processed: <strong>$number_need_to_process</strong></p>
	<form method='post'>
		<input type='hidden' name='cxs_checks_task' id='cxs_checks_task' value='run' />
		<input type='submit' value='Run...' class='btn btn-primary' />
	</form>
";






if( $_POST['cxs_checks_task'] == "run" )
{
	$query = "SELECT * FROM #__cxs_checks WHERE `processed` = 0 LIMIT 10;";
	$db->setQuery($query);
	$to_process = $db->loadObjectList();

	if($to_process)
	{
		foreach($to_process as $tp_k => $tp_v)
		{
			switch($tp_v->type)
			{
				case "article_comment":
					$query = "SELECT * FROM #__comments WHERE `object_group` = 'com_content' AND `id` = " . $tp_v->type_id . ";";
					$db->setQuery($query);
					$comments = $db->loadObject();
						pass_attributes_log_if_customer($db,$tp_v,"user_id",$comments->user_id);
						pass_attributes_log_if_customer($db,$tp_v,"user_ip",$comments->ip);
						pass_attributes_log_if_customer($db,$tp_v,"user_email",$comments->email_address);
					break;
				case "question":
					$query = "SELECT * FROM #__questions WHERE `id` = " . $tp_v->type_id . ";";
					$db->setQuery($query);
                                        $question = $db->loadObject();
						pass_attributes_log_if_customer($db,$tp_v,"user_id",$question->asker_id);
						pass_attributes_log_if_customer($db,$tp_v,"user_ip",$question->asker_ip);
					break;
				case "answer":
					$query = "SELECT * FROM #__answers WHERE `id` = " . $tp_v->type_id . ";";
					$db->setQuery($query);
                                        $answer = $db->loadObject();
						pass_attributes_log_if_customer($db,$tp_v,"user_id",$answer->answerer_id);
                                                pass_attributes_log_if_customer($db,$tp_v,"user_ip",$answer->user_ip);
					break;
				case "answer_comment":
					$query = "SELECT * FROM #__answer_comments WHERE `id` = " . $tp_v->type_id . ";";
                                        $db->setQuery($query);
                                        $answer_comment = $db->loadObject();
                                                pass_attributes_log_if_customer($db,$tp_v,"user_id",$answer_comment->user_id);
                                                pass_attributes_log_if_customer($db,$tp_v,"user_ip",$answer_comment->user_ip);
                                        break;
			}
			$query = "UPDATE #__cxs_checks SET `processed` = 1 WHERE `id` = " . $tp_v->id;
			$db->setQuery($query);
			$db->execute();
		}
	}
}






function pass_attributes_log_if_customer($db,$tp_v,$type,$value)
{
	$type = trim($type);
	$value = trim($value);

	if($type == "user_id" AND $value == "316002496")
	{
		echo "<p class='alert alert-warning'>type / value passed is Anonymous user's id, ignoring.</p>";
		return;
	}
	if($value=="")
	{
		echo "<p class='alert alert-warning'>Empty value, ignoring.</p>";
                return;
	}


	// echo "<pre>"; print_r($tp_v); echo "</pre>"; die();

	echo "<p style='border:1px solid #000; background:#ddd; padding:4px;'>Script has been passed " . htmlentities($type,ENT_QUOTES) . " = " . htmlentities($value,ENT_QUOTES) . " AND CUSTOMER = " . htmlentities($tp_v->cxs_username,ENT_QUOTES) . "</p>";

	// ----------------------------------------------------------------------------------------
	// is this PP2 username in the database? If it is not, then add it
	// ----------------------------------------------------------------------------------------
	if($tp_v->cxs_username != "-1")
	{
		$query = "SELECT count(`id`) FROM #__cxs WHERE `username` = '" . trim(addslashes($tp_v->cxs_username)) . "';";
		$db->setQuery($query);
		$cxs = $db->loadResult();

		// it's not in the database
		if($cxs < 1)
		{
			$query = "
				INSERT	INTO #__cxs
					(`id`,`user_id`,`username`,`cx`,`last_checked`)
				VALUES	(null,0,'" . trim(addslashes($tp_v->cxs_username)) . "',1,CURRENT_TIMESTAMP);
			";
			$db->setQuery($query);
			$db->execute();
			echo "<p><strong>" . htmlentities($tp_v->cxs_username,ENT_QUOTES) . "</strong> did not previously exist in the database as a confirmed customer, adding now.</p>";
		}
		else
		{
			$query = "
                                UPDATE	#__cxs
				SET	`last_checked` = CURRENT_TIMESTAMP
				WHERE	`username` = '" . trim(addslashes($tp_v->cxs_username)) . "'
				LIMIT	1
                        ";
                        $db->setQuery($query);
                        $db->execute();
			echo "<p><strong>" . htmlentities($tp_v->cxs_username,ENT_QUOTES) . "</strong> already existed in the database as a confirmed customer, just updating the last_checked timestamp.</p>";
		}
	}


	// ----------------------------------------------------------------------------------------
        // if this is a customer, load the customer info
        // ----------------------------------------------------------------------------------------
        if($tp_v->cxs_username != "-1")
        {
                $query = "SELECT * FROM #__cxs WHERE `username` = '" . trim(addslashes($tp_v->cxs_username)) . "';";
                $db->setQuery($query);
                $cxs = $db->loadObject();
		echo "<p>Loading customer " . $cxs->id . " / " . htmlentities($cxs->username,ENT_QUOTES) . "</p>";
		// echo "<pre>"; print_r($cxs); echo "</pre>";
	}


	// ----------------------------------------------------------------------------------------
        // does this type/value already exist in the database?
        // ----------------------------------------------------------------------------------------
	$query = "SELECT * FROM #__cxs_attributes WHERE `type` = '" . addslashes($type) . "' AND `value` = '" . addslashes($value) . "';";
	$db->setQuery($query);
	$type_value = $db->loadObject();
	if($type_value)
	{
		// if staff labeled this user as a customer and the type/value is not a customer
		if($tp_v->cxs_username != -1 AND $type_value->cx_id == -1)
		{
			$query = "UPDATE #__cxs_attributes SET `cx_id` = " . $cxs->id . " WHERE `id` = " . $type_value->id . " LIMIT 1;";
			$db->setQuery($query);
			$db->execute();
			echo "<p class='alert alert-success'>Last time we checked " . htmlentities($type_value['type'],ENT_QUOTES) . "/" . htmlentities($type_value['value'],ENT_QUOTES) . " was not a customer, but because of " . htmlentities($type,ENT_QUOTES) . " / " . htmlentities($value,ENT_QUOTES) . " they are now.</p>";
			// echo "<pre>"; print_r($type_value); echo "</pre>";
		}

		// if staff labeled this user as not a customer and the type/value is not a customer, just update the last checked
		if($tp_v->cxs_username == -1 AND $type_value->cx_id == -1)
		{
			$query = "UPDATE #__cxs_attributes SET `last_checked` = CURRENT_TIMESTAMP WHERE `id` = " . $type_value->id . " LIMIT 1;";
                        $db->setQuery($query);
                        $db->execute();
			echo "<p>Not a customer, just updating last_checked.</p>";
		}
		// echo "<pre>"; print_r($type_value); echo "</pre>";
	}
	else
	{
		$cx_id_value = -1;
		if($cxs->id > 0)
			$cx_id_value = $cxs->id;

		$query = "INSERT INTO #__cxs_attributes (`id`,`cx_id`,`type`,`value`,`last_checked`) VALUES (null,$cx_id_value,'" . addslashes($type) . "','" . addslashes($value) . "',CURRENT_TIMESTAMP);";
		$db->setQuery($query);
		$db->execute();
		echo "<p>new type / value add to database.</p>";
	}

	// echo "<pre>"; print_r($tp_v); echo "</pre>";
	// echo "<h1>$type = $value</h1>";
}






?>
