<?


$query = "SELECT count(`id`) as 'total_count' FROM #__content where `state` = 1";
$db->setQuery($query);
$total_articles = $db->loadObjectList();
$tot_articles = $total_articles[0]->total_count;


$query = "SELECT count(`id`) as 'total_count' FROM #__comments";
$db->setQuery($query);
$total_comments = $db->loadObjectList();
$tot_comments = $total_comments[0]->total_count;


$query = "SELECT count(`id`) as 'total_count' FROM #__questions";
$db->setQuery($query);
$total_questions = $db->loadObjectList();
$tot_questions = $total_questions[0]->total_count;


echo "<h1>Totals</h1>
	<table border='1'>
		<tr>
			<th>Name</th>
			<th>Count</th>
		</tr>
		<tr>
		<td>Articles</td>
		<td>$tot_articles</td>
</tr>
		<tr>
		<td>Questions</td>
		<td>$tot_questions</td>
</tr>

		<tr>
		<td>Comments</td>
		<td>$tot_comments</td>
</tr>

</table>";

$query = "SELECT `id`,`path`,`title`,`alias` FROM #__categories WHERE `extension` = 'com_content';";
$db->setQuery($query);
$content_categories = $db->loadObjectList();






echo "	<h1>Articles</h1>
	<table border='1'>
		<tr>
			<th>Category</th>
			<th>Article Count</th>
		</tr>
";
foreach($content_categories as $cc_k => $cc_v)
{
	/*
	[id] => 2
	[path] => uncategorised
	[title] => Uncategorised
	[alias] => uncategorised
	*/
	// grab the number of articles in the category
	$query = "SELECT count(`id`) as 'article_count' FROM #__content WHERE `catid` = " . $cc_v->id . " AND `state` = 1;";
	$db->setQuery($query);
	$article_count_results = $db->loadObjectList();
	$article_count = $article_count_results[0]->article_count;

	$color = 'green';
	if($article_count > 15)
		$color = 'red';

$color = 'green';
if($article_count == 0)
                $color = 'red';

	echo "	<tr>
			<td style='padding:4px; width:400px;'>
				<div style='font-size:16px;'>" . $cc_v->title . " / " . $cc_v->alias . "</div>
				<div style='font-size:10px; color:#bbb;'>" . $cc_v->path . " / " . $cc_v->id . "</div>
			</td>
			<td style='background: $color;' padding:4px; text-align:center; color:#fff;'><center><strong>
				$article_count
			</strong></center></td>
		</tr>
	";
}
echo "	</table>";

$query = "SELECT `id`,`path`,`title`,`alias` FROM #__categories WHERE `path` like 'edu%';";
$db->setQuery($query);
$edu_categories = $db->loadObjectList();

echo "
	<h1><a name='edu'></a>Edu Articles</h1>
	   <table border='1'>
                <tr>
                        <th>Category</th>
                        <th>Article Count</th>
                </tr>
";
foreach($edu_categories as $afe_k => $afe_v)
{
        // grab the number of articles in the category
        $query = "SELECT count(`id`) as 'edu_count' FROM #__content WHERE `catid` = " . $afe_v->id . " AND `state` = 1;";
        $db->setQuery($query);
        $articles_from_edu_count_results = $db->loadObjectList();
        $articles_from_edu_count = $articles_from_edu_count_results[0]->edu_count;

$color = 'green';
        if($articles_from_edu_count == 0)
                $color = 'red';


        echo "  <tr>
                        <td style='padding:4px; width:400px;'>
                                <div style='font-size:16px;'>" . $afe_v->title . " / " . $afe_v->alias . "</div>
                                <div style='font-size:10px; color:#bbb;'>" . $afe_v->path . " / " . $afe_v->id . "</div>
                        </td>
                        <td style='background: $color;' padding:4px; text-align:center; color:#fff;'><center><strong>
                                $articles_from_edu_count
                        </strong></center></td>
                </tr>
        ";
}
echo "  </table>";

$query = "SELECT * FROM #__question_categories;";
$db->setQuery($query);
$question_category_results = $db->loadObjectList();


echo "	<h1><a name='questions'></a>Questions</h1>
	<table border='1'>
		<tr>
			<th>Category</th>
			<th>Article Count</th>
		</tr>
";
foreach($question_category_results as $qcr_k => $qcr_v)
{
	$query = "SELECT count(`id`) as 'question_count' FROM #__questions WHERE `category_id` = " . $qcr_v->id . ";";
	$db->setQuery($query);
	$question_count_results = $results = $db->loadObjectList();
	$question_count = $question_count_results[0]->question_count;

	$color = 'green';
	if($question_count > 15)
		$color = 'red';

	echo "  <tr>
                        <td style='padding:4px; width:400px;'>
                                <div style='font-size:16px;'>" . $qcr_v->title . " / " . $qcr_v->alias . "</div>
                                <div style='font-size:10px; color:#bbb;'>" . $qcr_v->id . "</div>
                        </td>
                        <td padding:4px; text-align:center; color:#fff;'><center><strong>
                                $question_count
	                </strong></center> </td>
                </tr>
        ";
}
echo "	</table>";









?>
