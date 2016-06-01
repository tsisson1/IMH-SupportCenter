<?

$old_db_name = "ccdevinm_jom15a";
$new_db_name = "ccdevinm_jom3a";
$new_db_fix = "bipyv_";

$db_username = "ccdevinm_jom3a";
$db_password = "76vPZ-(CmiSq";

$template_name = "supportcentertemplate";






$official_old_admin_id_to_new_admin_id[62] = 314177563;
$official_old_admin_id_to_new_admin_id[314195204] = 314177563;
$official_old_admin_id_to_new_admin_id[314217382] = 314217384;
$official_old_admin_id_to_new_admin_id[314219368] = 314219366;
$official_old_admin_id_to_new_admin_id[314237052] = 314237053;
$official_old_admin_id_to_new_admin_id[314237337] = 314237336;
$official_old_admin_id_to_new_admin_id[314239911] = 314239910;
$official_old_admin_id_to_new_admin_id[316000000] = 314278453;
$official_old_admin_id_to_new_admin_id[316000011] = 314254353;
$official_old_admin_id_to_new_admin_id[316000012] = 314278453;






function pass_old_article_id_get_new_article_id($id,$old_db_name,$new_db_name,$new_db_fix,$db_username,$db_password)
{
	$con = mysql_connect("localhost",$db_username,$db_password);
	if (!$con)
	{
        	die('Could not connect: ' . mysql_error());
	}
	mysql_select_db($old_db_name,$con);

	$query = "SELECT `alias` FROM `$old_db_name`.`jos_content` WHERE `id` = $id;";

	$old_alias_results = mysql_query($query);
        $x = 0;
        while($oar_row = mysql_fetch_array($old_alias_results))
        {
        	//echo "<pre>"; print_r($oar_row); echo "</pre>";
                $x++;

                if($x == 2)
                	echo "<h1>WHOA!!! Duplicate aliases in old database</h1>";

                $query = "SELECT `id` FROM `$new_db_name`.`" . $new_db_fix . "content` WHERE `alias` = '" . $oar_row['alias'] . "';";
                $new_article_id_results = mysql_query($query);
                $y = 0;
                while($nair_row = mysql_fetch_array($new_article_id_results))
                {
                	// echo "<pre>"; print_r($nair_row); echo "</pre>";
                        $new_id = $nair_row['id'];
                        $y++;

                        if($y == 2)
                        	echo "<p>WHOA!!! Duplicate aliases in new database - " . $oar_row['alias'] . "</p>";
                }
	}

	return $new_id;
}






function import_script_create_alias($text)
{
        // clean up html
        $text = htmlspecialchars_decode($text);
        $text = htmlspecialchars_decode($text);
        // remove all non alphanumber characters
        $text = preg_replace("/[^a-zA-Z0-9\s]/", "", $text);
        // clean up white spaces and dashes
        $text = str_replace(" ", "-", $text);
        $text = str_replace("----", "-", $text);
        $text = str_replace("---", "-", $text);
        $text = str_replace("--", "-", $text);
        $text = trim($text,"-");
        // clean it up and make it lower case
        $text = strtolower($text);
        // return that polishing new alias
        return $text;
}







?>
