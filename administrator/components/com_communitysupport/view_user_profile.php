<?

echo "	<h1>View User Profile</h1>";






switch($_GET['identifyer'])
{
	case "email":
		pass_email_show_user_info($db,$_GET['email']);
		pass_email_show_feedback_info($db,$_GET['email']);
		pass_email_show_emails_sent_to_user($db,$_GET['email']);
		break;
	case "ip":
		pass_ip_show_feedback_info($db,$_GET['ip']);
		break;
	default:
		echo "<p class='alert alert-warning'>No identifyer found.</p>";
		break;
}






function pass_email_show_user_info($db,$email_address)
{
	echo "<h2>User Table</h2>";

	$query = "SELECT * FROM #__users WHERE `email` = '" . addslashes($email_address) . "' LIMIT 5;";
	$db->setQuery($query);
	$results = $db->loadObjectList();

	if( $results )
	{
		echo "<pre>"; print_r($results); echo "</pre>";
	}
	else
	{
		echo "<p class='alert alert-warning'>No user by email address " . htmlentities($email_address,ENT_QUOTES) . "</p>";
	}
}






function pass_email_show_feedback_info($db,$email_address)
{
	echo "<h2>Feedback Table</h2>";

        $query = "	SELECT `fb`.*, `c`.`title`, `c`.`alias`
			FROM #__feedback as `fb`, #__content as `c`
			WHERE	`user_email` = '" . addslashes($email_address) . "' AND
				`c`.`id` = `fb`.`page_id`
			;
	";
        $db->setQuery($query);
        $results = $db->loadObjectList();

        if( $results )
        {
		echo "	<table class='table table-striped'>
				<tr>
					<th>Timestamp</th>
					<th>User IP</th>
					<th>Article</th>
					<td>Rating</td>
		";
		foreach($results as $k => $v)
		{
			$article_link = "<a href='/support/" . $v->alias . "' target='_blank'>" . htmlentities($v->title,ENT_QUOTES) . "</a>";
			echo "	<tr>
					<td>" . date('Y-m-d H:i:s',$v->timestamp_n) . "</td>
					<td>" . $v->user_ip . "</td>
					<td>$article_link</td>
					<td>" . $v->feedback_value . "</td>
				</tr>
				<tr>
					<td colspan='4' style='padding:0px;'><div style='white-space:pre-wrap; font-size:10px;'>" . htmlentities($v->feedback,ENT_QUOTES) . "</div></td>
				</tr>
			";
		}
		echo "	</table>";
        }
        else
        {
                echo "<p class='alert alert-warning'>No feedback from email address " . htmlentities($email_address,ENT_QUOTES) . "</p>";
        }
}






function pass_email_show_emails_sent_to_user($db,$email_address)
{
        echo "<h2>Emails sent to user Table</h2>";

        $query = "
		SELECT `fe`.*,`u`.`username`
		FROM	#__feedback_emails as `fe`, #__users as `u`
		WHERE	`email_to` = '" . addslashes($email_address) . "' AND
			`u`.`id` = `fe`.`author_id`
		;
	";
        $db->setQuery($query);
        $results = $db->loadObjectList();

        if( $results )
        {
		// echo "<pre>"; print_r($results); echo "</pre>";
		echo "	<table class='table table-striped'>
				<tr>
					<th>#</th>
					<th>Sent</th>
					<th>From</th>
				</tr>
		";
		$x = 1;
		foreach($results as $k => $v)
		{
			echo "	<tr>
					<td rowspan='2' style='background:#bbb;'>$x.</td>
					<td>" . $v->email_date_sent . "</td>
					<td>" . htmlentities($v->username,ENT_QUOTES) . "</td>
				</tr>
				<tr>
					<td colspan='2'><div style='white-space:pre-wrap;'>" . htmlentities($v->email_body,ENT_QUOTES) . "</div></td>
				</tr>
			";
			$x++;
		}
		echo "	</table>";
        }
        else
        {
                echo "<p class='alert alert-warning'>No user by email address " . htmlentities($email_address,ENT_QUOTES) . "</p>";
        }
}






function pass_ip_show_feedback_info($db,$ip)
{
        echo "<h2>Feedback Table</h2>";

        $query = "      SELECT `fb`.*, `c`.`title`, `c`.`alias`
                        FROM #__feedback as `fb`, #__content as `c`
                        WHERE   `user_ip` = '" . addslashes($ip) . "' AND
                                `c`.`id` = `fb`.`page_id`
                        ;
        ";
        $db->setQuery($query);
        $results = $db->loadObjectList();

        if( $results )
        {
                echo "  <table class='table table-striped'>
                                <tr>
                                        <th>Timestamp</th>
                                        <th>Article</th>
                                        <td>Rating</td>
                ";
                foreach($results as $k => $v)
                {
                        $article_link = "<a href='/support/" . $v->alias . "' target='_blank'>" . htmlentities($v->title,ENT_QUOTES) . "</a>";
                        echo "  <tr>
                                        <td>" . date('Y-m-d H:i:s',$v->timestamp_n) . "</td>
                                        <td>$article_link</td>
                                        <td>" . $v->feedback_value . "</td>
                                </tr>
                                <tr>
                                        <td colspan='3' style='padding:0px;'><div style='white-space:pre-wrap; font-size:10px;'>" . htmlentities($v->feedback,ENT_QUOTES) . "</div></td>
                                </tr>
                        ";
                }
                echo "  </table>";
        }
        else
        {
                echo "<p class='alert alert-warning'>No feedback from email address " . htmlentities($email_address,ENT_QUOTES) . "</p>";
        }
}






?>
