<?






echo "  <div style='margin-bottom:15px;'>
		<strong>Navigation</strong>
                <a href='/support/administrator/index.php?option=com_communitysupport&task=tags&t2=categories' class='btn btn-primary'>Categories</a>
        </div>
";






// --------------------------------------------------------------------------------------
// EDITING A TAG CATEGORY
// --------------------------------------------------------------------------------------
if( $_POST['t2'] == "edit_category" )
{
	$query = "	UPDATE #__tags
			SET	`title` = '" . addslashes($_POST['tag_title']) . "',
				`alias` = '" . addslashes($_POST['tag_alias']) . "'
			WHERE `id` = " . $_POST['tag_id'] . "
			LIMIT 1;
	";
	$db->setQuery($query);
        try { $result = $db->execute(); } catch (Exception $e) { echo "<h1>ERROR!!!!</h1>"; }
	echo "<div class='alert alert-success'>Tag Category Updates</div>";
}






// --------------------------------------------------------------------------------------
// ADDING A TAG CATEGORY
// --------------------------------------------------------------------------------------
if( $_POST['t2'] == "new_category" )
{
	$query = "
		INSERT INTO #__tags
		(`id`,`title`,`alias`)
		VALUES(NULL,'" . addslashes($_POST['tag_title']) . "','" . addslashes($_POST['tag_alias']) . "');
	";
	$db->setQuery($query);
        try { $result = $db->execute(); } catch (Exception $e) { echo "<h1>ERROR!!!!</h1>"; }
        echo "<div class='alert alert-success'>New Tag Category Added</div>";
}






// REQUEST FOR TAGGING
if( $_GET['t2'] == "request_for_tag" )
{

	// --------------------------------------
	// if we're adding a page to a tag category
	// --------------------------------------
	if( $_POST['tag_category_id'] AND $_POST['tag_action'] == "add_page_to_tag_category" )
	{
		$query = "
			INSERT INTO #__tagged
			(`id`,`tag_id`,`option`,`view`,`option_view_id`)
			VALUES (NULL," . $_POST['tag_category_id'] . ",'" . addslashes($_POST['tag_option']) . "','" . addslashes($_POST['tag_view']) . "'," . $_POST['tag_option_view_id'] . ");";
		$db->setQuery($query);
	        try { $result = $db->execute(); } catch (Exception $e) { echo "<h1>ERROR</h1><pre>$e</pre>"; }
        	echo "<div class='alert alert-success'>Item has been tagged.</div>";
	}
	// --------------------------------------
        // if we're removing a page from a tag category
        // --------------------------------------
	elseif( $_POST['tag_category_id'] AND $_POST['tag_action'] == "remove_page_from_tag_category" )
	{
		$query = "
                        DELETE FROM #__tagged
			WHERE	`option` = '" . addslashes($_POST['tag_option']) . "' AND
				`view` = '" . addslashes($_POST['tag_view']) . "' AND
				`option_view_id` = " . $_POST['tag_option_view_id'] . " AND
				`tag_id` = " . $_POST['tag_category_id'] . "
				LIMIT 1;
		";
                $db->setQuery($query);
                try { $result = $db->execute(); } catch (Exception $e) { echo "<h1>ERROR</h1><pre>$e</pre>"; }
                echo "<div class='alert alert-success'>Page has been removed from tag category.</div>";
	}
	// --------------------------------------
	// show all tag categories so we can decide which category to add this page to
	// --------------------------------------
	else
	{
		// grab everything that this page already is tagged with
		$query = "SELECT * FROM #__tagged WHERE `option` = '" . addslashes($_POST['tag_option']) . "' AND `view` = '" . addslashes($_POST['tag_view']) . "' AND `option_view_id` = " . addslashes($_POST['tag_option_view_id']) . ";";
		$db->setQuery($query);
                $already_tagged = $db->loadObjectList();
		// echo "<pre>"; print_r($already_tagged); echo "</pre>"
		foreach($already_tagged as $at_k => $at_v)
			$array_allready_tagged[] = $at_v->tag_id;
		// echo "<pre>"; print_r($array_allready_tagged); echo "</pre>";

		$query = "SELECT * FROM #__tags ORDER BY `title`";
        	$db->setQuery($query);
	        $results = $db->loadObjectList();
		echo "<h1>Choose a category to tag this page as:</h1>";
		foreach($results as $k => $v)
		{
			// is this page already tagged here?
			if( $array_allready_tagged )
			{
				if( in_array($v->id,$array_allready_tagged) )
				{
					$hidden_tag_action = "remove_page_from_tag_category";
					$tag_category_class = "btn btn-success";
				}
				else
				{
					$hidden_tag_action = "add_page_to_tag_category";
					$tag_category_class = "btn btn-primary";
				}
			}
			else
			{
                                        $hidden_tag_action = "add_page_to_tag_category";
                                        $tag_category_class = "btn btn-primary";
                        }

			echo "
				<form method='post' action='/support/administrator/index.php?option=com_communitysupport&task=tags&t2=request_for_tag' style='float:left;'>
					<input type='hidden' name='tag_option' id='tag_option' value='" . $_POST['tag_option'] . "' />
					<input type='hidden' name='tag_view' id='tag_view' value='" . $_POST['tag_view'] . "' />
					<input type='hidden' name='tag_option_view_id' id='tag_option_view_id' value='" . $_POST['tag_option_view_id'] . "' />
					<input type='hidden' name='tag_category_id' id='tag_category_id' value='" . $v->id . "' />
					<input type='hidden' name='tag_action' id='tag_action' value='$hidden_tag_action' />
					<input type='submit' value='" . htmlentities($v->title,ENT_QUOTES). "' class='$tag_category_class' style='margin:5px;' />
				</form>
			";
		}
		echo "<div style='clear:both;'></div>";
	}
}






// --------------------------------------------------------------------------------------
// managing tag categories
// --------------------------------------------------------------------------------------
if( $_GET['t2'] == "categories" )
{
	$query = "SELECT * FROM #__tags ORDER BY `title`";
	$db->setQuery($query);
        $results = $db->loadObjectList();
	echo "	<table class='table'>
			<tr>
				<th>id</th>
				<th>title</th>
				<th>alias</th>
				<th>action</th>
			</tr>
	";
	foreach($results as $k => $v)
	{
		echo "	<form method='post'>
				<tr>
					<td>" . $v->id . "</td>
					<td><input type='text' name='tag_title' id='tag_title' value='" . htmlentities($v->title,ENT_QUOTES) . "' /></td>
					<td><input type='text' name='tag_alias' id='tag_alias' value='" . htmlentities($v->alias,ENT_QUOTES) . "' /></td>
					<td><input type='submit' value='edit' /></td>
				</tr>
				<input type='hidden' name='t2' id='t2' value='edit_category' />
				<input type='hidden' name='tag_id' id='tag_id' value='" . $v->id . "' />
			</form>
		";
	}
	echo "  	<form method='post'>
				<tr>
                        	        <td></td>
	                                <td><input type='text' name='tag_title' id='tag_title' value='' /></td>
        	                        <td><input type='text' name='tag_alias' id='tag_alias' value='' /></td>
					<td><input type='submit' value='new' /></td>
                	        </tr>
				<input type='hidden' name='t2' id='t2' value='new_category' />
			</form>
		</table>
	";
}

?>
