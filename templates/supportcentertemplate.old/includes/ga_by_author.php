<?






$option = JRequest::getVar('option');
$view = JRequest::getVar('view');
$db = JFactory::getDbo();

if($view == "article")
{
        $article = JTable::getInstance('content');
        $article->load(JRequest::getInt('id'));
        $author = JFactory::getUser($article->created_by);
	$author_username = $author->username;

}
if($view == "category")
{
	$category = JTable::getInstance('category');
	$category->load(JRequest::getInt('id'));
	if( is_numeric($category->lft) AND is_numeric($category->rgt) )
	{
		$query = "
		SELECT `users`.`username`
		FROM #__categories as `cats`, #__users as `users`
		WHERE	`cats`.`lft` = " . $category->lft . " AND
			`cats`.`rgt` = " . $category->rgt . " AND
			`users`.`id` = `cats`.`created_user_id`
		";
		// Reset the query using our newly populated query object.
		 $db->setQuery($query);
		// Load the results as a list of stdClass objects.
		$results = $db->loadObjectList();
		if($results)
			$author_username = $results[0]->username;
		else
			$author_username = "unknown";
	}
	else
		$author_username = "unknown";
}
if($option == "com_communitysupport")
{
	$exploded_url = explode("/",$_SERVER['REQUEST_URI']);
	$query = "
	SELECT `q`.`id`, `q`.`best_answer_user`
	FROM #__questions as `q`, #__question_categories as `qc`
	WHERE	`q`.`question_alias` = '" . addslashes($exploded_url[count($exploded_url)-1]) . "' AND
		`q`.`category_id` = `qc`.`id` AND
		`qc`.`alias` = '" . addslashes($exploded_url[count($exploded_url)-2]) . "'
	";
	// Reset the query using our newly populated query object.
	$db->setQuery($query);
        // Load the results as a list of stdClass objects.
        $results_question = $db->loadObjectList();
	if($results_question)
	{
		// if there is a best answer
		if($results_question[0]->best_answer_user != 0)
		{
			$query = "
                        SELECT `u`.`username`
                        FROM #__answers as `a`, #__users as `u`
                        WHERE   `a`.`id` = " . $results_question[0]->best_answer_user . " AND
                                `a`.`answerer_id` = `u`.`id`
                        ORDER BY `a`.`utc_n_answer_date` ASC
                        LIMIT 1
                        ";
                        $db->setQuery($query);
                        $results_author = $db->loadObjectList();
                        $author_username = $results_author[0]->username;
		}
		// if there is no best answer
		else
		{
			$query = "
			SELECT `u`.`username`
			FROM #__answers as `a`, #__users as `u`
			WHERE	`a`.`question_id` = " . $results_question[0]->id . " AND
				`a`.`answerer_id` = `u`.`id`
			ORDER BY `a`.`utc_n_answer_date` ASC
			LIMIT 1
			";
			$db->setQuery($query);
        		$results_author = $db->loadObjectList();
			$author_username = $results_author[0]->username;
		}
	}
	else
		$author_username = "unknown";
}






$author_username = strtolower($author_username);
// if( $user->username == "BradM")
//	echo "<div>$author_username</div>";
switch($author_username)
{
	case "timr_imh":
		$ga_author="TimR";
		$custom_ga_per_author = "
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1501988-40', 'inmotionhosting.com');
  ga('send', 'pageview');

</script>
	";
		$google_set_account_by_author = "_gaq.push(['_setAccount', 'UA-1501988-40']);";
		break;
	case "jeffma":
		$ga_author="JeffMa";
                $custom_ga_per_author = "
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1501988-38', 'inmotionhosting.com');
  ga('send', 'pageview');

</script>
        ";
	$google_set_account_by_author = "_gaq.push(['_setAccount', 'UA-1501988-38']);";
        break;
	case "johnpaulb-imhs1":
		$ga_author="JohnPaulB";
		$custom_ga_per_author = "
<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1501988-34']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	";
	$google_set_account_by_author = "_gaq.push(['_setAccount', 'UA-1501988-34']);";
	break;
	case "arn":
		$ga_author="ArnelC";
		$custom_ga_per_author = "
<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1501988-20']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		";
		$google_set_account_by_author = "_gaq.push(['_setAccount', 'UA-1501988-20']);";
		break;
	case "bradm":
		$ga_author="BradM";
		$custom_ga_per_author = "
<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1501988-19']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		";
		$google_set_account_by_author = "_gaq.push(['_setAccount', 'UA-1501988-19']);";
		break;
	case "jamesr":
		$ga_author="JamesR";
		$custom_ga_per_author = "
<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1501988-21']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		";
		$google_set_account_by_author = "_gaq.push(['_setAccount', 'UA-1501988-21']);";
		break;
	case "jacobimh":
		$ga_author="JacobN";
		$custom_ga_per_author = "
<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1501988-22']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		";
		$google_set_account_by_author = "_gaq.push(['_setAccount', 'UA-1501988-22']);";
		break;
	case "scott":
		$ga_author="ScottM";
		$custom_ga_per_author = "
<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1501988-23']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		";
		$google_set_account_by_author = "_gaq.push(['_setAccount', 'UA-1501988-23']);";
		break;
	case "tim s.":
		$ga_author="TimS";
		$custom_ga_per_author = "
<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1501988-24']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		";
		$google_set_account_by_author = "_gaq.push(['_setAccount', 'UA-1501988-24']);";
		break;
	case "cnick":
		$ga_author="ChristiN";
		$custom_ga_per_author = "
<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1501988-37']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		";
		$google_set_account_by_author = "_gaq.push(['_setAccount', 'UA-1501988-37']);";
		break;
	default:
		$ga_author="Unknown";
		$custom_ga_per_author = "
<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1501988-25']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		";
		$google_set_account_by_author = "_gaq.push(['_setAccount', 'UA-1501988-25']);";
		break;
}
echo $custom_ga_per_author;





?>
