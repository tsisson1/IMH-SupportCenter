<p><strong>Step 1</strong>: Search for the article you want to clear the cache for.</p>
<form method='post'>
	<input type='text' name='search' id='search' value='<? echo htmlspecialchars($_POST['search'],ENT_QUOTES); ?>' />
	<input type='submit' value='Search' class='btn btn-primary' />

	<input type='hidden' name='task_a' id='task_a' value='search' />
</form>






<?

if( $_POST['task_a'] == "delete" )
{
	// // echo "<pre>"; print_r($_POST); echo "</pre>";

	// security checks
	//
	// make sure we're deleted a file in the appropriate folder
	if( substr($_POST['cache_file'],0,14) != "../cache/page/" )
		die("cannot delete this file - access denied - wrong directory");
	// string MUST be 94 characters
	if( strlen($_POST['cache_file']) != 94 )
		die("cannot delete this file - access denied - wrong string length");
	// string MUST end in .php
	if( substr($_POST['cache_file'],-4) != ".php" )
		die("cannot delete this file - not a php file");

	unlink($_POST['cache_file']);
	echo "<p class='alert alert-success'>Cache file has been deleted. Please test.</p>";
}






if( $_POST['task_a'] == "search" )
{
	// // echo "<pre>"; print_r($_POST); echo "</pre>";

	exec("grep \"" . $_POST['search'] . "\" ../cache/page/*",$search_results);
	// // echo "<pre>"; print_r($search_results); echo "</pre>";

	if($search_results)
	{
		echo "	<p><strong>Step 2</strong>: Delete the cache file.</p>
			<table class='table table-striped'>
				<tr>
					<th>Cache File</th>
					<th>Results</th>
					<th>Action</th>
				</tr>
		";
		foreach($search_results as $k => $v)
		{
			$exploded_colon = explode(":",$v);

			$delete_button = "
				<form method='post' style='margin:0px; padding:0px;' target='clear_this_page_cache'>
					<input type='hidden' name='task_a' id='task_a' value='delete' />
					<input type='hidden' name='cache_file' id='cache_file' value='" . $exploded_colon[0] . "' />
					<input type='hidden' name='search' id='search' value='" . htmlentities($_POST['search'],ENT_QUOTES) . "' />
					<input type='submit' value='Delete' class='btn btn-danger' />
				</form>
			";

			echo "	<tr>
					<td>" . $exploded_colon[0] . "</td>
					<td>" . htmlspecialchars($v,ENT_QUOTES) . "</td>
					<td>$delete_button</td>
				</tr>
			";
		}
		echo "	</table>";
	}
	else
	{
		echo "<p class='alert alert-warning'>No search results</p>";
	}
}

?>
