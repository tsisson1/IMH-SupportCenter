<?

echo "	<div>
		Navigation:
		<form method='post'><input type='hidden' name='cptask' id='cptask' value='topic_proposal' /><input type='submit' value='Topic Proposals' class='btn btn-info' /></form>
	</div>
";






if( $_POST['cptask'] == "topic_proposal" )
{
	echo "
		<h1>Submit a new proposal</h1>
		<form method='post'>
			<p>Title</p>
			<div><input type='text' name='title' id='title' /></div>
			<p>Introduction Paragraph</p>
			<div><textarea name='introduction' id='introduction'></textarea></div>
			<p>Outline</p>
			<div><textarea name='outline' id='outline'></textarea></div>
			<p>Tags</p>
			<div><input type='text' name='tags' id='tags' /></div>
			<p>Target Keywords</p>
			<div><input type='text' name='keywords' id='keywords' /></div>
			<div><input type='submit' value='submit' /></div>
			<input type='hidden' name='cptask' id='cptask' value='log_proposal' />
		</form>
		<h1>Proposals needing approval</h1>
	";
	$query = "SELECT * FROM #__ae_proposals WHERE `approved` = -1;";
	$db->setQuery($query);
	$proposals = $db->loadObjectList();
	foreach($proposals as $p_k => $p_v)
	{
		echo "<pre>"; print_r($p_v); echo "</pre>";
	}
}






if( $_POST['cptask'] == "log_proposal" )
{
	$query = "
		INSERT INTO #__ae_proposals
		(`id`,`proposed_when`,`proposer_who`,`proposal_what`,`approved`,`approver_who`,`approved_when`)
		VALUES(NULL,CURRENT_TIMESTAMP,'" . $user->id . "','" . addslashes(json_encode($_POST)) . "',-1,0,0);
	";
	$db->setQuery($query);
	$result = $db->execute();
        echo "<div class='alert alert-success'>New Proposal Added.</div>";
}






?>
