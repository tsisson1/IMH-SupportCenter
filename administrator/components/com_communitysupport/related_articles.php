<?php

/*
Author:		Brad Markle
Created:	2014.10.23
Brands:		No changes should need to be made to this script. It is compatiable with all brands.
Trac:		https://trac.imhtech.net/CustomerCommunity/ticket/1299
*/

$article_id = $_GET['article_id'];
$article =& JTable::getInstance("content");
$article->load($article_id);

$article_title_search = $_POST['article_title_search'];

if( ! $article_id )
	die("You have not supplied an article id.");

// If the user is performing an article search
$search_results_html = "";
if( $_POST['task_a'] == 'search' )
{
	$article_search_results = content_search($_POST['article_title_search']);

	if( $article_search_results == false )
	{
		$search_results_html = "<p style='color:red;'>No search results.</p>";
	}
	else
	{
		$search_results_html = format_search_results_for_add_related_article($article_search_results);
	}
}

// If the user is submitting a new related article
if( $_POST['task_a'] == 'add' )
{
	$related_article_id = $_POST['related_article_id'];

	$query = "
		INSERT	INTO #__content_related_article
			(`id`,`article_id`,`related_article_id`)
		VALUES	(null,'$article_id','$related_article_id');
	";
	$db->setQuery($query);
	$db->execute();

	echo "<p class='alert alert-success'>New <em>related article</em> has been added!</p>";
}

// If the user is deleting a related article
if( $_POST['task_a'] == "delete" )
{
	$query = "
		DELETE	FROM #__content_related_article
		WHERE	`id` = '" . addslashes($_POST['id']) . "'
		LIMIT	1
	";

	$db->setQuery($query);
        $db->execute();

        echo "<p class='alert alert-success'><em>related article</em> has been deleted.</p>";
}

// Get a listing of current related articles
$current_related_articles = get_current_related_articles($article_id);
if( false == $current_related_articles )
{
	$current_related_articles_html = "<p class='alert alert-danger'>No related articles currently set for this article.</p>";
}
else
{
	$current_related_articles_html = format_current_related_articles_for_display($current_related_articles);
}

// This is our "View"
echo "	<h1>Related Articles</h1>
	<p>You are currently setting up related articles for: <span class='label label-primary'>" . htmlentities($article->get("title"),ENT_QUOTES) . "</span></p>

	<h2>Current related articles</h2>
	$current_related_articles_html

	<h2>Add a new related article</h2>
	<p>Use the search field below to search for an existing article title.</p>

	<form method='post'>
		<input type='hidden' name='task_a' id='task_a' value='search' />
		<input type='text' name='article_title_search' id='article_title_search' value='" . htmlentities($article_title_search,ENT_QUOTES) . "' />
		<input type='submit' value='search' class='btn btn-primary' />
	</form>

	$search_results_html

";

/**
 * Pass this function a search word, and it will search for article titles that match
 */
function content_search($search)
{
	$db = JFactory::getDbo();

	$query = "	SELECT	`id`,`title`
			FROM	#__content
			WHERE	`title` LIKE '%" . addslashes($search) . "%';
	";
	$db->setQuery($query);
	$results = $db->loadObjectList();

	if( ! $results )
		return false;
	else
		return $results;
}

/**
 * Pass this function an object list of article search results, and we'll format it
*/
function format_search_results_for_add_related_article($article_search_results)
{
	$return = "	<table class='table table-striped table-bordered'>
				<tr>
					<th>Article</th>
					<th>Action</th>
				</tr>
	";
	foreach($article_search_results as $asr_key => $article)
	{
		$return .= "	<tr>
					<td>" . htmlentities($article->title) . "</td>
					<td>
						<form method='post' style='display:inline; margin:0px;'>
							<input type='hidden' name='task_a' id='task_a' value='add' />
							<input type='hidden' name='related_article_id' id='related_article_id' value='" . $article->id . "' />
							<input type='submit' value='Add' class='btn btn-success' />
						</form>
					</td>
				</tr>
		";
	}
	$return .= "	</table>";

	return $return;
}

/**
 * Pass this function an article id, and we'll grab all of the existing related articles
 */
function get_current_related_articles($article_id)
{
	$db = JFactory::getDbo();

	$query = "
		SELECT	`related_article`.*,
			`content`.`title`
		FROM	#__content_related_article as `related_article`,
			#__content as `content`
		WHERE	`related_article`.`article_id` = '$article_id' AND
			`related_article`.`related_article_id` = `content`.`id`
	";
	$db->setQuery($query);
	$results = $db->loadObjectList();

	if( ! $results )
	{
		return false;
	}
	else
	{
		return $results;
	}
}

/**
 * Pass this function an object list of articles, and we'll create a table and allow
 * the user to delete the article as a related article
 */
function format_current_related_articles_for_display($current_related_articles)
{
	$return = "	<table class='table table-striped table-bordered'>
                                <tr>
                                        <th>Article</th>
                                        <th>Action</th>
                                </tr>
	";
	foreach( $current_related_articles as $cra_key => $article )
	{
		$return .= "	<tr>
					<td>" . htmlentities($article->title,ENT_QUOTES) . "</td>
					<td>
						<form method='post' style='display:inline; margin:0px;'>
							<input type='hidden' name='task_a' id='task_a' value='delete' />
							<input type='hidden' name='id' id='id' value='" . $article->id . "' />
							<input type='submit' value='Delete' class='btn btn-danger' />
						</form>
					</td>
				</tr>
		";
	}
	$return .= "	</table>";

	return $return;
}
?>
