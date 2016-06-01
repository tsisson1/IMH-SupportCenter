<?

include("config.php");

$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}



echo "<h1>Starting...</h1>";



// delete all current users that are not admins - we're not deleting admin data because it's setup with their google+ data
// and real full name;






// ---------------------------------------------------------------------------
// create an array of id's of admins (usergroup 8)
// ---------------------------------------------------------------------------
$query = "SELECT * FROM `$new_db_name`.`" . $new_db_fix . "user_usergroup_map` WHERE `group_id` = 8;";
mysql_select_db($new_db_name,$con);
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	$array_of_admins[] = $row['user_id'];
}
// create the IN(396,234) variable to not delete admins
$in_clause_of_admins = " (" . implode(",",$array_of_admins) . ")";






$query = "SELECT * FROM `$new_db_name`.`" . $new_db_fix . "users` WHERE `id` IN $in_clause_of_admins;";
mysql_select_db($new_db_name,$con);
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	$array_of_admin_usernames[] = "'". $row['username'] . "'";
}
$in_clause_of_admin_usernames = " (" . implode(",",$array_of_admin_usernames) . ")";





// DELETE ALL users that are not admins
$query = "DELETE FROM `$new_db_name`.`" . $new_db_fix . "users` WHERE `id` NOT IN $in_clause_of_admins;";
mysql_query($query);
echo "<pre>$query</pre>";
// DELETE ALL users from usergroup map that are not an 8
$query = "DELETE FROM `$new_db_name`.`" . $new_db_fix . "user_usergroup_map` WHERE `group_id` != 8;";
mysql_query($query);
echo "<pre>$query</pre>";
// DELETE all amp-login info
$query = "DELETE FROM `$new_db_name`.`" . $new_db_fix . "login_amp_userdata` WHERE `username` NOT IN $in_clause_of_admin_usernames;";
mysql_query($query);
echo "<pre>"; print_r($query); echo "</pre>";








// from j25, grab the edu structures
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
	if( ! in_array($username,$array_of_admin_usernames) )
	{
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
}

echo "<h1>Done...</h1>";


?>
