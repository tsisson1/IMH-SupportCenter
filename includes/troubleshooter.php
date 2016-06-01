<?


// echo "<pre>"; print_r($_POST); echo "</pre>";


// setup some vars
$chosen_next_step = $_POST['chosen_next_step_id'];
$ts = $_POST['users_current_step'] + 1;


// create all the steps
include_once('troubleshooter_steps.php');


// if we need to load some steps
if($_POST['task'] == "load_steps")
{
        $exploded_steps = explode("-",$_POST['load_these_steps']);
        // echo "<pre>"; print_r($exploded_steps); echo "</pre>";

	$ts = 1;
        foreach($exploded_steps as $k => $step_id)
        {
		$step_text = str_replace('ts_next_step(1,','ts_next_step(' . $ts . ',',$step[$step_id]);
		$return_me .= "<li name='step" . ($step_id) . "' id='step" . ($step_id) . "'>$step_text</li>";
		$ts++;
        }

	echo $return_me;
	die();
}


// if we need to return a step
// security
if( ! is_numeric($_POST['chosen_next_step_id']) )
        die("Error");
if( ! is_numeric($_POST['users_current_step']) )
        die("Error");
// return the step to the user
echo $step[$chosen_next_step];
die();


function pl($ts,$id,$anchor_text)
{
	return "<a onClick='ts_next_step($ts,$id);'>$anchor_text</a>";
}






?>
