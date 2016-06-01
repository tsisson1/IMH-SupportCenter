<?


if($_POST)
{
	echo "<pre>"; print_r($_POST); echo "</pre>";

	switch($_POST['type'])
	{
		case "answer":
			$query = "UPDATE #__answers SET `admin_verified` = 1 WHERE `id` = " . $_POST['type_id'] . " LIMIT 1;";
			$db->setQuery($query);
			try { $result = $db->execute(); } catch (Exception $e) { print_r($e); }
			echo "<pre>$query</pre>";
			break;
		case "comment":
                        $query = "UPDATE #__comments SET `admin_verified` = 1 WHERE `id` = " . $_POST['type_id'] . " LIMIT 1;";
                        $db->setQuery($query);
                        try { $result = $db->execute(); } catch (Exception $e) { print_r($e); }
                        echo "<pre>$query</pre>";
                        break;
		case "answer_comment":
                        $query = "UPDATE #__answer_comments SET `admin_verified` = 1 WHERE `id` = " . $_POST['type_id'] . " LIMIT 1;";
                        $db->setQuery($query);
                        try { $result = $db->execute(); } catch (Exception $e) { print_r($e); }
                        echo "<pre>$query</pre>";
                        break;
		case "question_update":
                        $query = "UPDATE #__question_updates SET `admin_verified` = 1 WHERE `id` = " . $_POST['type_id'] . " LIMIT 1;";
                        $db->setQuery($query);
                        try { $result = $db->execute(); } catch (Exception $e) { print_r($e); }
                        echo "<pre>$query</pre>";
                        break;
		case "question_to_question":
                        $query = "UPDATE #__question_to_question SET `admin_verified` = 1 WHERE `id` = " . $_POST['type_id'] . " LIMIT 1;";
                        $db->setQuery($query);
                        try { $result = $db->execute(); } catch (Exception $e) { print_r($e); }
                        echo "<pre>$query</pre>";
                        break;
		case "content":
                        $query = "UPDATE #__content SET `admin_verified` = 1 WHERE `id` = " . $_POST['type_id'] . " LIMIT 1;";
                        $db->setQuery($query);
                        try { $result = $db->execute(); } catch (Exception $e) { print_r($e); }
                        echo "<pre>$query</pre>";
			break;
		default:
			break;
	}
}






$first_answer_to_verify = 4130;
$first_comment_to_verify = 8308;
$first_answer_comment_to_verify = 1235;
$first_question_update_to_verify = 316;
$first_question_to_question_to_verify = 94;
$first_content_to_verify = 2909;






// answers
$query = "
SELECT a.*, `q`.`question_alias`
FROM #__answers as `a`, #__questions as `q`
WHERE	`a`.`admin_verified` != 1 AND
	`a`.`id` >= $first_answer_to_verify AND
	`a`.`question_id` = `q`.`id`
";
$db->setQuery($query);
$results = $db->loadObjectList();
echo "<h1>Answers</h1>";
if($results)
{
	foreach($results as $k => $v)
	{
		echo "<pre style='margin-top:75px;'>"; print_r($v); echo "</pre>";
		echo "	<form method='post'>
				<input type='hidden' name='type' id='type' value='answer' />
				<input type='hidden' name='type_id' id='type_id' value='" . $v->id . "' />
				<input type='submit' value='verify' />
			</form>
		";
	}
}





$query = "
SELECT `cm`.*, `cn`.`title`
FROM #__comments as `cm`, #__content as `cn`
WHERE   `cm`.`admin_verified` != 1 AND
        `cm`.`id` >= $first_comment_to_verify AND
	`cm`.`object_id` = `cn`.`id`
";
$db->setQuery($query);
$results = $db->loadObjectList();
echo "<h1>Comments</h1>";
if($results)
{
	foreach($results as $k => $v)
	{
		echo "<pre style='margin-top:75px;'>"; print_r($v); echo "</pre>";
	        echo "  <form method='post'>
        	                <input type='hidden' name='type' id='type' value='comment' />
                	        <input type='hidden' name='type_id' id='type_id' value='" . $v->id . "' />
                        	<input type='submit' value='verify' />
	                </form>
	        ";
	}
}






$query = "
SELECT `ac`.*, `a`.`answer`,`q`.`question_alias`
FROM	#__answer_comments as `ac`, #__answers as `a`, #__questions as `q`
WHERE	`ac`.`admin_verified` != 1 AND
	`ac`.`answer_id` = `a`.`id` AND
	`ac`.`id` >= $first_answer_comment_to_verify AND
	`a`.`question_id` = `q`.`id`
";
$db->setQuery($query);
$results = $db->loadObjectList();
echo "<h1>Answer Comments</h1>";
if($results)
{
	foreach($results as $k => $v)
	{
		echo "<pre style='margin-top:75px;'>"; print_r($v); echo "</pre>";
	        echo "  <form method='post'>
        	                <input type='hidden' name='type' id='type' value='answer_comment' />
                	        <input type='hidden' name='type_id' id='type_id' value='" . $v->id . "' />
                        	<input type='submit' value='verify' />
	                </form>
        	";
	}
}






$query = "
SELECT `qu`.*, `q`.`question`,`q`.`question_alias`
FROM    #__question_updates as `qu`, #__questions as `q`
WHERE   `qu`.`admin_verified` != 1 AND
        `qu`.`question_id` = `q`.`id` AND
        `qu`.`id` >= $first_question_update_to_verify
";
$db->setQuery($query);
$results = $db->loadObjectList();
echo "<h1>Question Updates</h1>";
if($results)
{
	foreach($results as $k => $v)
	{
		echo "<pre style='margin-top:75px;'>"; print_r($v); echo "</pre>";
	        echo "  <form method='post'>
        	                <input type='hidden' name='type' id='type' value='question_update' />
                	        <input type='hidden' name='type_id' id='type_id' value='" . $v->id . "' />
                        	<input type='submit' value='verify' />
	                </form>
	        ";
	}
}






$query = "
SELECT `qu`.*, `q`.`question` as 'question_to_question',`q`.`question_alias`
FROM    #__question_to_question as `qu`, #__questions as `q`
WHERE   `qu`.`admin_verified` != 1 AND
        `qu`.`question_id` = `q`.`id` AND
        `qu`.`id` >= $first_question_to_question_to_verify
";
$db->setQuery($query);
$results = $db->loadObjectList();
echo "<h1>Question to Question</h1>";
if($results)
{
	foreach($results as $k => $v)
	{
		echo "<pre style='margin-top:75px;'>"; print_r($v); echo "</pre>";
	        echo "  <form method='post'>
        	                <input type='hidden' name='type' id='type' value='question_to_question' />
                	        <input type='hidden' name='type_id' id='type_id' value='" . $v->id . "' />
                        	<input type='submit' value='verify' />
	                </form>
        	";
	}
}






$query = "
SELECT `c`.`id`,`c`.`title`,`c`.`alias`,`c`.`created`,`c`.`state`, `c`.`created_by`, `u`.`username`
FROM #__content as `c`, #__users as `u`
WHERE	`c`.`id` >= $first_content_to_verify AND
	`c`.`admin_verified` != 1 AND
	`c`.`created_by` = `u`.`id`
";
$db->setQuery($query);
$results = $db->loadObjectList();
echo "<h1>Content</h1>";
if($results)
{
	foreach($results as $k => $v)
	{
		echo "<pre style='margin-top:75px;'>"; print_r($v); echo "</pre>";
	        echo "  <form method='post'>
        	                <input type='hidden' name='type' id='type' value='content' />
                	        <input type='hidden' name='type_id' id='type_id' value='" . $v->id . "' />
                        	<input type='submit' value='verify' />
	                </form>
        	";
	}
}



	


?>
