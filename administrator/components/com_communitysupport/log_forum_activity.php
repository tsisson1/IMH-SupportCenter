<?

if( $_POST['forum_link'] )
{
	$query = "
INSERT INTO #__external_forum_activity
(`id`,`user_id`,`forum_link`,`timestamp`,`link_to_brand`,`link_to_brand_at`)
VALUES (NULL," . $user->id . ",'" . $_POST['forum_link'] . "',CURRENT_TIMESTAMP,'" . $_POST['backlink_url'] . "','" . $_POST['anchor_text'] . "');
	";
	$db->setQuery($query);
	$result = $db->execute();
	echo "<pre>$query</pre>";
}



?>



<form method='post'>

	<h1>Forum Post URL</h1>
	<div>What url did you post at? (full url, starting with http://)<br /><input type='text' name='forum_link' id='forum_link' style='width:500px;' /></div>

	<h1>Backlink</h1>
	<div>
		Did you get a backlink? (signature links don't count)<br /><br />

		URL back to brand (full url, starting with http://)<br /><input type='text' name='backlink_url' id='backlink_url' style='width:500px;' /><br />
		Anchor Text<br /><input type='text' name='anchor_text' id='anchor_text' style='width:500px;' /><br />
	
	<div><input type='submit' type='submit' />

</form>
