<?

// calculate some variables
$request = getBashRequest();
$command = getBashCommand($request['command']);
$option = getBashCommandOption($command,$request['option']);

// print some stuff
printBashOptionHeader($command,$option);
printBashOptionExampleUsage($command,$option);





function getBashRequest()
{
	$exploded_url = explode("/",JURI::current());

	if ($exploded_url[count($exploded_url)-3] == "bash")
	{
		$return['command'] = $exploded_url[count($exploded_url)-2];
		$return['option'] = $exploded_url[count($exploded_url)-1];

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






function getBashCommandOption($command,$option)
{
	if (! is_numeric($command->id))
		die("Error - command id not a number.");

        $db = JFactory::getDbo();
        $query = "SELECT * FROM #__bash_commands_options WHERE `command_id` = '" . addslashes($command->id) . "' AND `option` = '" . addslashes($option) . "';";
        $db->setQuery($query);
	$results = $db->loadObject();
	if($results)
		return $results;
	else
		die("Error - Option not found.");
}






function printBashOptionHeader($command,$option)
{
	echo "
		<table class='table table-bordered table-striped'>
			<tr>
				<th>Command</th>
				<td style='text-align:left;'><a href='" . JURI::base() . "bash/" . htmlspecialchars($command->command,ENT_QUOTES) . "'>" . htmlspecialchars($command->command,ENT_QUOTES) . "</a></td>
			</tr>
			<tr>
				<th>Option</th>
				<td style='text-align:left;'>" . htmlspecialchars($option->option,ENT_QUOTES) . "</td>
			</tr>
			<tr>
				<th>Option description</th>
				<td style='text-align:left;'>" . htmlspecialchars($option->description,ENT_QUOTES) . "</td>
			</tr>
		</table>
	";
}






function printBashOptionExampleUsage($command,$option)
{
	$option_example_usage = getCommandExampleUsage($command->id,$option->id);
	$command_example_usage = getCommandExampleUsage($command->id,0);

	$option_pre_id = "command-exec-" . $option_example_usage->id;
	$command_pre_id = "command-exec-" . $command_example_usage->id;

	echo "
		<script type='text/javascript'>
			function toggle_primary_example()
			{
				jQuery('#$option_pre_id').toggle();
				jQuery('#$command_pre_id').toggle();
			}
		</script>


		<h2>Example Usage</h2>


		<p>To see an example of using the <strong>" . htmlentities($option->option,ENT_QUOTES) . "</strong> option with the <strong>" . htmlentities($command->command,ENT_QUOTES) . "</strong>, click the <em>Toggle</em> botton below.</p>


		<table class='table table-bordered'>
			<tr>
				<td><strong>Command</strong><br />" . htmlentities($command_example_usage->command,ENT_QUOTES) . "</td>
				<td><span class='btn btn-primary' style='text-transform:none;' onClick='toggle_primary_example();'>Toggle</span></td>
				<td><strong>With option</strong><br />" . htmlentities($option_example_usage->command,ENT_QUOTES) . "</td>
			</tr>
		</table>


		<pre class='cli' name='$option_pre_id' id='$option_pre_id'><span style='color:red;'>" . htmlentities($option_example_usage->command,ENT_QUOTES) . "</span>\n\n" . htmlentities($option_example_usage->output,ENT_QUOTES) . "</pre>
		
		<pre class='cli' name='$command_pre_id' id='$command_pre_id' style='display:none;'><span style='color:red;'>" . htmlentities($command_example_usage->command,ENT_QUOTES) . "</span>\n\n" . htmlentities($command_example_usage->output,ENT_QUOTES) . "</pre>
	";
}






function getCommandExampleUsage($command_id,$option_id)
{
	if (!is_numeric($command_id) OR !is_numeric($option_id))
		die("Error - nn");

	$db = JFactory::getDbo();
	$query = "SELECT * FROM #__bash_commands_exec WHERE `command_id` = $command_id AND `option_id` = $option_id;";
	$db->setQuery($query);
	$results = $db->loadObject();
        if($results)
                return $results;
        else
                die("Error - exec not found.");
}

?>
