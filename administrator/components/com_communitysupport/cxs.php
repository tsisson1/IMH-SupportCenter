<?

switch($_GET['task2'])
{
	case "lookup":
		cxs_lookup($db);
		break;
}






function cxs_lookup($db)
{
	$customer_info = cxs_return_cxs_info($db,$_GET['type'],$_GET['value']);
}





function cxs_return_cxs_info($db,$type,$value)
{

}






?>
