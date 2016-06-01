<script type="text/javascript">
  
function ts_next_step(current_step,next_step_id)
{
	number_of_current_steps = jQuery("#tsol li").size();

  
	// if they are going back a step, delete all the steps after it
	// alert(number_of_current_steps);
	if(number_of_current_steps > current_step)
	{
		var tsol_items = jQuery("#tsol li");
		tsol_items.each(function(index){
		if( (index + 1) > current_step )
			tsol_items.eq(index).remove();
		});
	}


	// create the new url
	number_of_current_steps = jQuery("#tsol li").size();
	new_url = 'http://www.inmotionhosting.com/support/troubleshooter?tsid=';
	var tsol_items = jQuery("#tsol li");
        tsol_items.each(function(index){
		li_id = tsol_items.eq(index).attr('id');
		li_name =  tsol_items.eq(index).attr('name');
		new_url += li_id.replace('step','') + "-";
        });
	new_url += next_step_id;
	jQuery('#tsol_url').html("<div style='background:#E5FFE5; border:1px solid #ddd; padding:4px'>If you need help beyond this troubleshooter, you can send the below URL to our support team, and they will know exactly which step you are in the troubleshooting process.<br /><a href='" + new_url + "' target='_blank'>" + new_url + "</a></div>");


	// add the next step in the troubleshooting process
	jQuery.post("/support/includes/troubleshooter.php",
                {users_current_step:current_step,chosen_next_step_id:next_step_id},
                function(data,status){
                jQuery('#tsol').append("\n\n<li name='step" + next_step_id + "' id='step" + next_step_id + "'>" + data + "</li>");
        });
} // function ts_next_step



function load_ts_steps(ids)
{
	jQuery.post("/support/includes/troubleshooter.php",
                {task:'load_steps',load_these_steps:ids},
                function(data,status){
			 jQuery('#tsol').append(data);
        });
}



function reload_tsol_url()
{
	// create the new url
        number_of_current_steps = jQuery("#tsol li").size();
        new_url = 'http://www.inmotionhosting.com/support/troubleshooter?tsid=' + (number_of_current_steps+1);
        var tsol_items = jQuery("#tsol li");
        tsol_items.each(function(index){
                if( index > 0 )
                {
                        li_id = tsol_items.eq(index).attr('id');
                        li_name =  tsol_items.eq(index).attr('name');
                        new_url += "-" + li_id.replace('step','');
                }
        });
        jQuery('#tsol_url').html("<div style='background:#E5FFE5; border:1px solid #ddd; padding:4px'>If you need help beyond this troubleshooter, you can send the below URL to our support team, and they will know exactly which step you are in the troubleshooting process.<br /><a href='" + new_url + "' target='_blank'>" + new_url + "</a></div>");
	alert('test');
}



</script>






<style type="text/css">
  #tsol {margin:0px; list-style-type:none;}
  #tsol li {margin:0px 0px 15px 0px; border:1px solid #ddd; background:#fff; padding:4px; clear:both; }
  #tsol li a {cursor:pointer;}
</style>






<div name='ts_container' id='ts_container'>
  
	<ol name='tsol' id='tsol'>
	<?
		if($_GET['tsid'])
			echo "<script type='text/javascript'>load_ts_steps('" . addslashes($_GET['tsid']) . "');</script>";
		else
			echo "<script type='text/javascript'>load_ts_steps('2');</script>";
	?>
	</ol>

</div>

<div name='tsol_url' id='tsol_url'></div>

