<?

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

$db = JFactory::getDbo();
$user = JFactory::getUser();
$document = JFactory::getDocument();

JRequest::setVar('option','com_communitysupport');

$exploded_url = explode("/",$_SERVER['REDIRECT_URL']);

include("functions.php");

$if_pagination_which_page = if_pagination_which_page();

if( $if_pagination_which_page != false )
{
	$exploded_url = remove_pagination_from_exploded_url();
	$document->setMetaData('robots','noindex,follow');
}






remove_canonical();
$new_canonical_url = JURI::base() . str_replace("/support/","",$_SERVER['REDIRECT_URL']);
$document->addHeadLink($new_canonical_url, 'canonical');






echo "
<style>
	.page-header h1.cs_nav {
		float:left;
		margin-top:-4px;
	}
	ul.cs_nav {
		display:inline;
		padding-left:10px;
		margin:0px;
	}
	ul.cs_nav li {
		display:inline;
		padding:0px 3px;
	}
	ul.cs_nav li.ask a.btn.btn-success {
		float:right;
		box-shadow:0 3px 0 #408000;
        }
	ul.cs_nav li a.btn {
		padding:2px 6px 0px 6px;
	}
</style>
<div class='item-page'>
	<div class='page-header cs_nav'>
		<h1 class='cs_nav'>Community Support</h1>
		<ul class='cs_nav'>
			<li><a href='/support/community-support' class='btn btn-primary'>Questions</a></li>
			<li><a href='/support/community-support/categories' class='btn btn-primary'>Categories</a></li>
			<li><a href='/support/community-support/users' class='btn btn-primary'>Users</a></li>
			<li class='ask'><a href='/support/community-support/ask-a-question' class='btn btn-success'>Ask a question</a></li>
		</ul>
	</div>
";
switch( $exploded_url[3] )
{
	case "categories":
                include_once("question_categories.php");
                break;
	case "ask-a-question-beta":
		include_once("ask_a_question_beta.php");
		break;
	case "ask-a-question":
		include_once("ask_a_question.php");
		break;
	case "submit-question":
		include_once("submit_question.php");
		break;
	case "submit-question-beta":
                include_once("submit_question_beta.php");
                break;
	case "users":
		switch( count($exploded_url) )
		{
			case 5:
				switch($exploded_url[4])
				{
					case "edit-profile":
						include_once("edit_user_profile.php");
						break;
					default:
						include_once("user_profile.php");
						break;
				}
				break;
			default:
				include_once("users.php");
				// die("no username specified");
				break;
		}
		break;
	default:
		switch( count($exploded_url) )
		{
			case 3:
				include_once("community_support_home.php");
				break;
			case 4:
				include_once("show_questions.php");
				break;
			case 5:
				// is this a question, or a subcategory?
				$query = "SELECT * FROM #__question_categories WHERE `alias` = '" . addslashes( $exploded_url[4] ) . "';";
				$db->setQuery($query);
				$is_a_category_alias = $db->loadObjectList();
				if($is_a_category_alias)
					include_once("show_questions.php");
				else
					include_once("show_question.php");
				break;
			case 6:
				include_once("show_question.php");
				break;
			default:
				JError::raiseError( 404, 'Question not found' );
				break;
		}
		break;
}
echo "</div>";
?>
