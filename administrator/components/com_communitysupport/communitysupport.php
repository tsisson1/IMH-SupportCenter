<?






$db = JFactory::getDbo();
$user = JFactory::getUser();
$groups = $user->get('groups');


$csvar_brand = "whh";
if( $_SERVER['HTTP_HOST'] == "www.inmotionhosting.com" )
	$csvar_brand = "imh";

include_once("communitysupport_functions.php");

echo "	<table>
		<tr>
			<td style='padding-right:25px;' valign='top'>
";
$user_groups = $user->groups;

if (in_array('8', $user_groups))	{			include_once("left_menu.php");
    } else {
           include_once("support_menu.php");
}


echo "			</td>
			<td valign='top'>
";
if($_GET['task'])
{
	$to_include = $_GET['task'];
	include_once($to_include . ".php");
}
echo "			</td>
		</tr>
	</table>
";






?>
