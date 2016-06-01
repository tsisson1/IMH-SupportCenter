<?
	$db = JFactory::getDbo();
	$url_for_unexpected_terms = $_SERVER['REQUEST_URI'];






	/**
	 * Related Articles
	 */
	echo "
	<h1>Admin Tools</h1>
	<ul>
		<li><a href='" . JURI::base() . "administrator/index.php?option=com_communitysupport&task=related_articles&article_id=" . $this->item->id . "' target='_blank'>Setup related articles</a></li>
	</ul>
	";






	if( $_POST['admin_tools_uq_action'] == "edit" )
	{
		$query = "
			UPDATE #__search_unexpected_query
			SET	`query` = '" . addslashes($_POST['unexpected_query_query']) . "',
				`url` = '" . addslashes($_POST['unexpected_query_url']) . "',
				`title` = '" . addslashes($_POST['unexpected_query_title']) . "',
				`description` = '" . addslashes($_POST['unexpected_query_description']) . "'
			WHERE `id` = " . $_POST['unexpected_query_id'] . "
			LIMIT 1;
		";
		// echo "<pre>$query</pre>";
		$db->setQuery($query);
		try { $result = $db->query(); } catch (Exception $e) { }
	}






	if( $_POST['admin_tools_uq_action'] == "new" )
        {
                $query = "
                        INSERT INTO #__search_unexpected_query
			(`id`,`query`,`url`,`title`,`description`)
			VALUES (NULL, '" . addslashes($_POST['unexpected_query_query']) . "','" . addslashes($_POST['unexpected_query_url']) . "','" . addslashes($_POST['unexpected_query_title']) . "','" . addslashes($_POST['unexpected_query_description']) . "');
		";
                $db->setQuery($query);
                try { $result = $db->query(); } catch (Exception $e) { }
        }







        $query = "SELECT * FROM #__search_unexpected_query WHERE `url` = '" . addslashes($url_for_unexpected_terms) . "';";
        $db->setQuery($query);
        $results = $db->loadObjectList();

	if( $results )
	{
		foreach($results as $k => $v)
		{
			$html_to_edit_current_unexpected_term .= "
				<form style='margin:10px 0px; border:1px solid #000; background:#ddd; padding:4px;' method='post'>
					<h2 style='color:red;'>Edit</h2>
					<input type='hidden' name='unexpected_query_id' id='unexpected_query_id' value='" . $v->id . "' />
					<textarea name='unexpected_query_query' id='unexpected_query_query' style='width:98%; height:75px; font-size:11px; display:block;'>" . htmlentities($v->query,ENT_QUOTES) . "</textarea>
					<input type='text' name='unexpected_query_url' id='unexpected_query_url' value='" . $v->url . "' style='width:100%; display:block;' />
					<input type='text' name='unexpected_query_title' id='unexpected_query_title' value='" . htmlentities($v->title,ENT_QUOTES) . "' style='width:100%; display:block;' />
					<textarea name='unexpected_query_description' id='unexpected_query_description' style='width:98%; display:block;'>" . htmlentities($v->description,ENT_QUOTES) . "</textarea>
					<input type='submit' name='admin_tools_uq_action' id='admin_tools_uq_action' value='edit' />
				</form>
			";
		}
	}






	$html_to_add_new_unexpected_term = "
		<form style='margin:10px 0px; border:1px solid #000; background:#ddd; padding:4px;' method='post'>
			<h2 style='color:red;'>Add new</h2>
                        <textarea name='unexpected_query_query' id='unexpected_query_query' style='width:98%; height:75px; font-size:11px; display:block;'></textarea>
                        <input type='text' name='unexpected_query_url' id='unexpected_query_url' value='$url_for_unexpected_terms' style='width:100%; display:block;' />
                        <input type='text' name='unexpected_query_title' id='unexpected_query_title' value='" . htmlentities($this->item->title,ENT_QUOTES) . "' style='width:100%; display:block;' />
                        <textarea name='unexpected_query_description' id='unexpected_query_description' style='width:98%; display:block;'>" . htmlentities($this->item->metadesc,ENT_QUOTES)  . "</textarea>
                        <input type='submit' name='admin_tools_uq_action' id='admin_tools_uq_action' value='new' />
		</form>
	";






	// ----------------------------------------------------------------------------------------
	// edit unexpected terms
	// ----------------------------------------------------------------------------------------
	if($user->username == "BradM")
	{
		echo "
			$html_to_edit_current_unexpected_term
			$html_to_add_new_unexpected_term
		";
	}






	// ----------------------------------------------------------------------------------------
        // tag this page
        // ----------------------------------------------------------------------------------------
	echo "
                <form method='post' action='/support/administrator/index.php?option=com_communitysupport&task=tags&t2=request_for_tag' target='_blank' style='margin:10px 0px; border:1px solid #bbb; background:#ddd; padding:4px; text-align:right;'>
                        <input type='hidden' name='tag_option' id='tag_option' value='com_content' />
                        <input type='hidden' name='tag_view' id='tag_view' value='article' />
                        <input type='hidden' name='tag_option_view_id' id='tag_option_view_id' value='" . $this->item->id . "' />
                        <input type='submit' value='tag'>
                </form>
        ";






	// ----------------------------------------------------------------------------------------
	// promotions
	// ----------------------------------------------------------------------------------------
	if($user->username == "tjedens" OR $user->username == "timr_imh")
	{
		echo "<div style='border:1px solid #ddd; background:#eee; padding:4px;'>";
			if($_POST['cse_task'] == 'edit_promotion')
			{
				if($_POST['edit_option']=="Edit")
				{
					$cse_epc = "0"; if($_POST['cse_epc']==1)$cse_epc=1;
					$query = "
						UPDATE	#__cse_promotions
						SET	`phrase` = '" . addslashes($_POST['cse_phrase']) . "',
							`title` = '" . addslashes($_POST['cse_title']) . "',
							`description` = '" . addslashes($_POST['cse_description']) . "',
							`epc` = $cse_epc
						WHERE	`id` = " . $_POST['cse_id'] . "
						LIMIT	1
					";
					$db->setQuery($query);
					$db->execute();
				}
				if($_POST['edit_option']=="Delete")
				{
					$query = "DELETE FROM #__cse_promotions WHERE `id` = " . $_POST['cse_id'] . " LIMIT 1";
					$db->setQuery($query);
					$db->execute();
				}
			}
			if($_POST['cse_task'] == 'new_promotion')
			{
				$cse_epc = "0"; if($_POST['cse_epc']==1)$cse_epc=1;
				$query = "
				INSERT INTO #__cse_promotions
				(`id`,`option_view_id`,`phrase`,`title`,`description`,`epc`)
				VALUES
				(NULL,'com_content___article___" . $this->item->id . "','" . addslashes($_POST['cse_phrase']) . "','" . addslashes($_POST['cse_title']) . "','" . addslashes($_POST['cse_description']) . "',$cse_epc)
				";
				$db->setQuery($query);
				$db->execute();
			}
			echo "  <h1>Custom Search Engine - Promotions</h1>
	                        <h2>Current promotions</h2>
	                ";
			$query = "SELECT * FROM #__cse_promotions WHERE `option_view_id` = 'com_content___article___" . $this->item->id . "';";
			$db->setQuery($query);
			$current_promotions = $db->loadObjectList();
			if($current_promotions)
			{
				foreach($current_promotions as $current_promotion_k => $current_promotion_v)
				{
					$cse_checked = "";
					if($current_promotion_v->epc==1)
						$cse_checked = "checked";
					echo "
						<form method='post'>
							<input type='hidden' name='cse_task' id='cse_task' value='edit_promotion' />
							<input type='hidden' name='cse_id' id='cse_id' value='" . $current_promotion_v->id . "' />
							<input type='text' name='cse_phrase' id='cse_phrase' style='width:75%;' value='" . htmlentities($current_promotion_v->phrase,ENT_QUOTES) . "' />Phrase<br />
							<input type='text' name='cse_title' id='cse_title' style='width:75%;' value='" . htmlentities($current_promotion_v->title,ENT_QUOTES) . "'' />Title<br />
							<input type='text' name='cse_description' id='cse_description' style='width:75%;' value='" . htmlentities($current_promotion_v->description,ENT_QUOTES) . "' />Description<br />
							<input type='checkbox' name='cse_epc' id='cse_epc' value='1' $cse_checked />Every possible combination of phrases?<br />
							<input type='submit' name='edit_option' id='edit_option' value='Edit' class='btn btn-primary' />
							<input type='submit' name='edit_option' id='edit_option' value='Delete' class='btn btn-danger' />
						</form>
					";
				}
			}
			else
			{
				echo "<p>No current promotions</p>";
			}
			echo "
				<form method='post'>
					<h2>Add new promotion</h2>
					<input type='hidden' name='cse_task' id='cse_task' value='new_promotion' />
					<input type='text' name='cse_phrase' id='cse_phrase' style='width:75%;' />Phrase<br />
					<input type='text' name='cse_title' id='cse_title' style='width:75%;' />Title<br />
					<input type='text' name='cse_description' id='cse_description' style='width:75%;' />Description<br />
					<input type='checkbox' name='cse_epc' id='cse_epc' value='1' />Every possible combination of phrases?<br />
					<input type='submit' value='New' class='btn btn-primary' />
				</form>
			";
		echo "</div>";
	}






?>
