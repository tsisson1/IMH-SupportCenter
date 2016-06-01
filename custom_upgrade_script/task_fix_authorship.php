<?

include("config.php");





$con = mysql_connect("localhost",$db_username,$db_password);
if (!$con)
{
        die('Could not connect: ' . mysql_error());
}
mysql_select_db($old_db_name,$con);






echo "
	<div style='float:left;'>
		<h1>Individual Answerers & Total # of answers</h1>
";
$query = "SELECT distinct(`a`.`userid`), `u`.`username` FROM `$old_db_name`.`jos_answers` as `a`, `$old_db_name`.`jos_users` as `u` WHERE `a`.`userid` = `u`.`id`;";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	$total_number_of_answers_query = "SELECT count(`id`) as 'total_answers' FROM `$old_db_name`.`jos_answers` WHERE `userid` = '" . $row['userid'] . "';";
	$total_number_of_answers_result = mysql_query($total_number_of_answers_query);
	while($total_number_of_answers_row = mysql_fetch_array($total_number_of_answers_result))
	{
		$total_answers = $total_number_of_answers_row['total_answers'];
	}

	if($total_answers > 10)
		$unique_authors[$row['userid']] = "************************************** " . $row['username'] . " - " . $total_answers;
	else
		$unique_authors[$row['userid']] = $row['username'] . " - " . $total_answers;

	$public_username_to_id[$row['username']] = $row['userid'];
}
asort($unique_authors);
echo "		<pre>"; print_r($unique_authors); echo "</pre>
	</div>
";






echo "
	<div style='float:left; margin-left:20px;'>
		<h1>Individual Authors</h1>
";
$query = "SELECT distinct(`content`.`created_by`), `users`.`username` FROM `$old_db_name`.`jos_content` as `content`, `$old_db_name`.`jos_users` as `users` WHERE `users`.`id` = `content`.`created_by`;";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
	$total_number_articles_written_query = "SELECT count(`id`) as 'total_articles' FROM `$old_db_name`.`jos_content` WHERE `created_by` = '" . $row['created_by'] . "';";
	$total_number_articles_written_result = mysql_query($total_number_articles_written_query);
        while($total_number_articles_written_row = mysql_fetch_array($total_number_articles_written_result))
	{
		$total_articles_written = $total_number_articles_written_row['total_articles'];
	}

	$unique_article_authors[$row['created_by']] = $row['username'] . " - " . $total_articles_written;

	$admin_username_to_id[$row['username']] = $row['created_by'];
}
echo "		<pre>"; print_r($unique_article_authors); echo "</pre>
	</div>
	<div style='clear:both;'></div>
";






// the old `created_by's' need to match up to the NEW id of the public user (which will be a publich and admin account)
$old_admin_username_to_old_public_username['admin'] = 'BradM';
$old_admin_username_to_old_public_username['sadmin'] = 'BradM';
$old_admin_username_to_old_public_username['arnelc-imh'] = 'Arn';
$old_admin_username_to_old_public_username['scott_admin'] = 'Scott';
$old_admin_username_to_old_public_username['John-Paul B.'] = 'johnpaulb-imhs1';
$old_admin_username_to_old_public_username['JacobIMHadmin'] = 'JacobIMH';
$old_admin_username_to_old_public_username['jamesr-admin'] = 'jamesr';
$old_admin_username_to_old_public_username['tims'] = 'Tim S.';
$old_admin_username_to_old_public_username['christin'] = 'CNick';
$old_admin_username_to_old_public_username['timsi'] = 'Tim S.';






foreach($old_admin_username_to_old_public_username as $admin_username => $public_username)
{
	$id_of_this_admin = $admin_username_to_id[$admin_username];
	$id_of_this_public =  $public_username_to_id[$public_username];

	$old_to_new[$id_of_this_admin] = $id_of_this_public;
}
echo "<pre>"; print_r($old_to_new); echo "</pre>";
die();





/*
$old_to_new['62'] = 314177563; //bradm
$old_to_new['314195204'] = 314177563; //sadmin
$old_to_new['314217384'] = 316000014; //arnelc
$old_to_new['314219366'] = 316000012; //scott_admin
$old_to_new['314237052'] = 316000013; //johnpaul
$old_to_new['314237337'] = 316000011; //jacobn
$old_to_new['314239911'] = 618; //jamesr
$old_to_new['316000000'] = 316000015; //tims
$old_to_new['316000011'] = 616; //christin
$old_to_new['316000012'] = 316000015; //timsi
*/






// grab all old articles (non edu)
$query = "SELECT `id`,`alias`,`created_by`,`title` FROM `$old_db_name`.`jos_content` WHERE `sectionid` != 10 AND `sectionid` != 11 AND `state` = 1;";
$result = mysql_query($query);
$no_new_id = 0;
while($row = mysql_fetch_array($result))
{
	$old_id = $row['id'];
	$new_id = pass_old_article_id_get_new_article_id($old_id,$old_db_name,$new_db_name,$new_db_fix,$db_username,$db_password);
	if( is_numeric($new_id) )
	{
		$query = "UPDATE `$new_db_name`.`" . $new_db_fix . "content` SET `created_by` = " . $old_to_new[$row['created_by']] . " WHERE `id` = $new_id;";
		mysql_select_db($new_db_name,$con);
		mysql_query($query);
	}
	else
	{
		$no_new_id++;
		echo "<h1>Non edu and non 300 articles - $no_new_id - We did not find a new id for this alias - " . $row['alias'] . "<br /><span style='background:yellow;'>" . $row['title'] . "</span></h1>";
	}
}






// grab all 300 articles
$query = "SELECT `id`,`alias`,`created_by`,`title` FROM `$old_db_name`.`jos_content` WHERE `sectionid` = 10 AND `state` = 1 AND `title` LIKE '3%';";
$result = mysql_query($query);
$no_new_id = 0;
while($row = mysql_fetch_array($result))
{
        $old_id = $row['id'];
        $new_id = pass_old_article_id_get_new_article_id($old_id,$old_db_name,$new_db_name,$new_db_fix,$db_username,$db_password);
        if( is_numeric($new_id) )
        {
                $query = "UPDATE `$new_db_name`.`" . $new_db_fix . "content` SET `created_by` = " . $old_to_new[$row['created_by']] . " WHERE `id` = $new_id;";
                mysql_select_db($new_db_name,$con);
                mysql_query($query);
        }
        else
        {
                $no_new_id++;
		echo "<h1>300 articles - $no_new_id - We did not find a new id for this alias - " . $row['alias'] . "<br /><span style='background:yellow;'>" . $row['title'] . "</span></h1>";
        }
}






// grab all edu channels
$query = "SELECT `id`,`alias`,`created_by`,`title` FROM `$old_db_name`.`jos_content` WHERE `sectionid` = 11 AND `state` = 1;";
$result = mysql_query($query);
$no_new_id = 0;
while($row = mysql_fetch_array($result))
{
        $old_id = $row['id'];
        $new_id = pass_old_article_id_get_new_article_id($old_id,$old_db_name,$new_db_name,$new_db_fix,$db_username,$db_password);
        if( is_numeric($new_id) )
        {
                $query = "UPDATE `$new_db_name`.`" . $new_db_fix . "content` SET `created_by` = " . $old_to_new[$row['created_by']] . " WHERE `id` = $new_id;";
                mysql_select_db($new_db_name,$con);
                mysql_query($query);
        }
        else
        {
                $no_new_id++;
		echo "<h1>EDU Articles - $no_new_id - We did not find a new id for this alias - " . $row['alias'] . "<br /><span style='background:yellow;'>" . $row['title'] . "</span></h1>";
        }
}







?>
