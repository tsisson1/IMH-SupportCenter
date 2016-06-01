<form method='post'>
	<input type='hidden' name='task_a' id='task_a' value='run_scan' />
	<input type='submit' value='Run scan' class='btn btn-primary' />
</form>






<?






switch($_POST['task_a'])
{
	case "view_articles":
		articles_without_outbound_links($db,$csvar_brand);
		break;
	case "run_scan":
		run_scan($db);
		break;
	case "view_questions":
		view_questions_without_outbound_links($db);
		break;
}






function run_scan($db)
{
	$number_of_published_articles = return_number_of_published_articles($db);
        $number_of_published_articles_that_dont_send_link_juice = return_number_of_published_articles_that_dont_send_link_juice($db);
        $percent_of_published_articles_that_dont_send_link_juice = $number_of_published_articles_that_dont_send_link_juice / $number_of_published_articles * 100;

	$number_of_published_questions = return_number_of_published_questions($db);
	$number_of_published_questions_that_dont_send_link_juice = return_number_of_published_questions_that_dont_send_link_juice($db);
	$percent_of_published_questions_that_dont_send_link_juice = $number_of_published_questions_that_dont_send_link_juice / $number_of_published_questions * 100;

        echo "  <table class='table table-striped'>
                        <tr>
                                <th colspan='3'><h2>Articles</h2></th>
                        </tr>
                        <tr>
                                <th># of published articles</th>
                                <td>$number_of_published_articles</td>
                                <td></td>
                        </tr>
                        <tr>
                                <th># of published articles that don't send link juice</th>
                                <td>$number_of_published_articles_that_dont_send_link_juice</td>
                                <td>
					<form method='post'>
						<input type='hidden' name='task_a' id='task_a' value='view_articles' />
						<input type='submit' value='View' class='btn btn-primary' />
					</form>
				</td>
                        </tr>
                        <tr>
                                <th>% of published articles that don't send link juice</th>
                                <td>" . round($percent_of_published_articles_that_dont_send_link_juice,2) . "%</td>
                                <td></td>
                        </tr>
			<tr>
				<th colspan='3'><h2>Questions / Answers</h2></th>
			</tr>
			<tr>
				<th># of published questions</td>
				<td>$number_of_published_questions</td>
				<td></td>
			</tr>
			<tr>
				<th># of published questions that don't send link juice</th>
				<td>$number_of_published_questions_that_dont_send_link_juice</td>
				<td>
                                        <form method='post'>
                                                <input type='hidden' name='task_a' id='task_a' value='view_questions' />
                                                <input type='submit' value='View' class='btn btn-primary' />
                                        </form>
                                </td>
			</tr>
			<tr>
				<th>% of published questions that don't send link juice</th>
				<td>" . round($percent_of_published_questions_that_dont_send_link_juice,2) . "%</td>
                                <td></td>
                        </tr>
                </table>
        ";
}






function articles_without_outbound_links($db,$csvar_brand)
{
	$exclude_category = "";
	if( $csvar_brand == "imh" )
		$exclude_category = " AND `content`.`catid` != 100 AND `content`.`catid` != 50 AND `content`.`catid` != 381";

	echo "	<h1>Articles without links in them</h1>
		<p class='alert alert-warning'>This script finds all articles that do not contain <strong>&lt;/a&gt;</strong></p>
		<p class='alert alert-warning'>Icon pages, like <a href='/support/resources/icons/2012-election-net-neutrality' target='_blank'>this one</a>, are excluded from the search.</p>
		<p class='alert alert-warning'>News will not be shown here. We don't want to update news from a year ago and have it show within the support center just because it was recently updated.</p>
	";
	$query = "      SELECT `content`.`id`,`content`.`title`,`content`.`alias`,`users`.`username`
                        FROM #__content as `content`, #__users as `users`
                        WHERE   `content`.`introtext` NOT LIKE '%</a>%' AND
                                `content`.`state` = 1 AND
				`users`.`id` = `content`.`created_by`
				$exclude_category
			ORDER BY `content`.`created_by` ASC
        ";
        $db->setQuery($query);
        $results = $db->loadObjectList();
	echo "	<table class='table table-striped'>
			<tr>
				<th>#</th>
				<th>Article</th>
				<th>Author</th>
			</tr>
	";
	$x = 1;
	foreach($results as $result_k => $result_v)
	{
		echo "	<tr>
				<th>$x</th>
				<td><a href='../" . $result_v->alias . "' target='_blank'>" . $result_v->title . "</a></td>
				<td>" . $result_v->username . "</td>
			</tr>
		";
		$x++;

		$author_count[$result_v->username]++;
	}
	echo "	</table>";



	asort($author_count);
	echo "	<h1>Statistics per author</h1>
		<table class='table table-striped'>
			<tr>
				<th>Author</th>
				<th># Articles</th>
			</tr>
	";
	foreach($author_count as $author => $count)
		echo "<tr><td>$author</td><td>$count</td></tr>";
	echo "</table>";
}






function view_questions_without_outbound_links($db)
{
	$questions_that_dont_send_juice = return_aoo_questions_that_dont_send_link_juice($db);

	$x = 1;

	echo "	<table class='table table-striped'>
			<tr>
				<th>#</th>
				<th>Question</th>
			</tr>
	";

	foreach($questions_that_dont_send_juice as $k => $v)
	{
		echo "	<tr>
				<td>$x</td>
				<td><a href='../" . $v->question_alias . "' target='_blank'>" . htmlentities($v->question,ENT_QUOTES) . "</a></td>
			</tr>
		";
		$x++;
	}
	echo "	</table>";
}






?>
