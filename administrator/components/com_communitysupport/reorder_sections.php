<?

if($_POST['task2'] == "do_the_reorder")
{
	foreach($_POST as $k => $v)
	{
		if(is_numeric($k))
		{
			$query = "UPDATE #__content SET `ordering` = $v WHERE `catid` = " . $_POST['catid'] . " AND id = $k LIMIT 1;";
			$db->setQuery($query);
			try {
				$result = $db->execute();
				JFactory::getApplication()->enqueueMessage($query, 'Message');
			} catch (Exception $e) {
				JFactory::getApplication()->enqueueMessage($query, 'error');
			}
		}
	}
}

?>






<h3>First, enter the category id.</h3>
<form method='post'>
	<input type='text' name='catid' id='catid' value='<? echo $_POST['catid']; ?>' /><br />
	<input type='submit' value='Submit' />
</form>






<?

if($_POST['catid'])
{
	$catid= $_POST['catid'];

	$query = "SELECT `id`,`title`,`ordering` FROM #__content WHERE `catid` = $catid ORDER BY `ordering` ASC;";
	$db->setQuery($query);
	$articles = $db->loadObjectList();

	if($articles)
	{
		echo "
		<form method='post'>
			<table border='1'>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Ordering</th>
				</tr>
		";
		foreach($articles as $k => $v)
		{
			$id = $v->id;
			$title = $v->title;
			$ordering = $v->ordering;

			echo "
			<tr>
				<td>$id</td>
				<td>$title</td>
				<td><input type='text' name='$id' id='$id' value='$ordering' />
			</tr>
			";
		}
		echo "
			</table>
			<input type='hidden' name='task2' id='task2' value='do_the_reorder' />
			<input type='hidden' name='catid' id='catid' value='$catid' />
			<input type='submit' value='Reorder Now!' />
		</form>
		";
	}
}

?>
