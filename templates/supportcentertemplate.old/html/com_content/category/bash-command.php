<?

// calculate some variables
$request = getBashRequest();
$command = getBashCommand($request['command']);
$options = getBashCommandOptions($command);

// print some stuff
printBashCommandHeader($command);
printBashCommandOptions($options);
//echo "<pre>"; print_r($request); echo "</pre>";
//echo "<pre>"; print_r($command); echo "</pre>";





function getBashRequest()
{
	$exploded_url = explode("/",JURI::current());

	if ($exploded_url[count($exploded_url)-2] == "bash")
	{
		$return['command'] = $exploded_url[count($exploded_url)-1];

		return $return;
	}
	else
	{
		die("Error - URL not formatted just right.");
	}
}






function getBashCommand($command)
{
	$db = JFactory::getDbo();
        $query = "SELECT * FROM #__bash_commands WHERE `command` = '" . addslashes($command) . "';";
        $db->setQuery($query);
        $results = $db->loadObject();
        if($results)
                return $results;
        else
                die("Error - Command not found.");
}






function printBashCommandHeader($command)
{
	echo "
		<h1>" . htmlentities($command->command,ENT_QUOTES) . "</h1>

		<h2>Definition</h2>

		<p>" . htmlentities($command->description,ENT_QUOTES) . "</p>
	";
}







function getBashCommandOptions($command)
{
	if (!is_numeric($command->id))
		die("Error");

	$db = JFactory::getDbo();
	$query = "SELECT * FROM #__bash_commands_options WHERE `command_id` = " . $command->id . ";";
	$db->setQuery($query);
	$results = $db->loadObjectList();

	if ($results)
	{
		return $results;
	}
	else
	{
		return false;
	}
}






function printBashCommandOptions($options)
{
	$current_url = JURI::current();

	echo "
		<h2>Options</h2>
		<table class='table table-bordered table-striped'>
			<tr>
				<th>Option</th>
				<th>Option Description</th>
			</tr>
	";
	foreach($options as $k => $v)
	{
		echo "	<tr>
				<td><a href='$current_url/" . urlencode($v->option) . "'>" . htmlentities($v->option) . "</a></td>
				<td style='text-align:left;'>" . htmlentities($v->description,ENT_QUOTES) . "</td>
			</tr>
		";
	}
	echo 	"</table>";
}

?>
