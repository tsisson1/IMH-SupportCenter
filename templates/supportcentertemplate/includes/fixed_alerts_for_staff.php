<?

	$brand_hub[] = "http://www.inmotionhosting.com/support/bradinternaltools/hud.php";
        $brand_hub[] = "http://www.webhostinghub.com/help/bradinternaltools/hud.php";
        foreach($brand_hub as $k => $v)
        {
                // Get cURL resource
                $curl = curl_init();
                // Set some options - we are passing in a useragent too here
                curl_setopt_array($curl, array(
                        CURLOPT_RETURNTRANSFER => 1,
                        CURLOPT_URL => $v,
                        CURLOPT_USERAGENT => 'Customer Community HUD'
                ));
                // Send the request & save response to $resp
                $resp = curl_exec($curl);
                // Close request to clear up some resources
                curl_close($curl);
                echo $resp;
        }






	if( "enabled" == "enabledd")
	{
		echo "
			<script type='text/javascript'>
				setInterval(
				function()
				{
					var staff_popup_text;

					jQuery.ajax({url:'http://www.inmotionhosting.com/support/bradinternaltools/hud.php?new_window_alert=1',success:function(result){
						if(result != '')
							alert(result);
					}});
				},180000);
			</script>

		";
	}






?>
