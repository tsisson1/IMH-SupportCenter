<?

include("config.php");


echo "<h1>Starting...</h1>";



// from j25, grab the edu structures
$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}
mysql_select_db($old_db_name,$con);
$query = "SELECT * FROM `$old_db_name`.`jos_users`;";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	$username = $row['username'];
	$id = $row['id'];
	$email = $row['email'];
	$registerDate = $row['registerDate'];
	$lastvisitDate = $row['lastvisitDate'];

	// now, see if there is a avatar
	$avatar_query = "SELECT `avatar` FROM `$old_db_name`.`jos_answers_users` WHERE `userid` = $id LIMIT 1;";
	$avatar_result = mysql_query($avatar_query);
	$found_avatar = false;
	while($avatar_row = mysql_fetch_array($avatar_result))
	{
		$found_avatar = true;
		$avatar = $avatar_row['avatar'];
	}
	if($found_avatar == false)
		$avatar = "default_avatar.jpg";


	mysql_select_db($new_db_name,$con);

	// when doing this for real, we need to replace customer_experience with $email
	$query = "INSERT INTO `$new_db_name`.`" . $new_db_fix . "users` (`id`, `name`, `username`, `email`, `password`, `block`, `sendEmail`, `registerDate`, `lastvisitDate`, `activation`, `params`, `lastResetTime`, `resetCount`) VALUES
($id, 'null', '" . addslashes($username) . "', '" . addslashes($email) . "', '', 0, 0, '$registerDate', '$lastvisitDate', '', '{}', '0000-00-00 00:00:00', 0);";
	// echo "<pre>$query</pre>";
	mysql_query($query);

	$query = "INSERT INTO `$new_db_name`.`" . $new_db_fix . "user_usergroup_map` (`user_id`, `group_id`) VALUES ($id, 2);";
	// echo "<pre>$query</pre>";
	mysql_query($query);

	$query = "INSERT INTO `$new_db_name`.`" . $new_db_fix . "login_amp_userdata` (`id`, `email`, `avatar_url`, `username`, `first_login_utc_n`, `last_login_utc_n`, `token`) VALUES (NULL, '" . addslashes($email) . "', '/support/images/avatars/" . addslashes($avatar) . "', '" . addslashes($username) . "', " . strtotime($registerDate) . ", " . strtotime($lastvisitDate) . ", '');";
	// echo "<pre>$query</pre>";
	mysql_query($query);
}

echo "<h1>Done...</h1>";


?>
