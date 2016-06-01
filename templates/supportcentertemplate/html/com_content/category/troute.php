<? $this->document->setTitle("Trace Route Parser | InMotion Hosting"); ?>

<div class="item-page">

	<div class='page-header'>
		<h1>Trace Route Parser</h1>
		Written by <a href='https://plus.google.com/102670474114655224886'>Brad Markle</a>
	</div>

<?
	// --------------------------------------------------------------------------------------------------------
	// if the user did not submit a tracert, give them the intro details
	// --------------------------------------------------------------------------------------------------------
	if( ! $_POST['tr'] )
	{
?>
	<p>
		If you're troubleshooting a slow connection problem to your server, many times you will be asked to <a href='/support/website/slow-websites/why-is-my-server-slow-how-do-i-run-a-ping-and-tracert-test'>run a tracert test</a>. A tracert test tests your connection speeds to each router along the internet that your connection to the specified server passes through. Seeing this information can be helpful in identifying which router / ISP may be having a problem.
	</p>

	<p>
		Traceroute results are never conclusive, there are many factors involved that can lead to false positives. Furthermore, ask 10 different people to analyze the results, and you'll usually get 10 different interpretations of your tracert results. For our purposes, the information we will attempt to provide after you submit your trace route results below will be based upon the very informative Comcast article, <a href='http://customer.comcast.com/help-and-support/internet/run-traceroute-command/' target='_blank'>Understand the Traceroute Command</a>.
	</p>

	<h3>Automated Tracert Reviewer</h3>

	<p>Run a tracert test, paste in the results below, and this automated tool will try to make sense of the results for you.</p>

	<form method='post'>
		<textarea name='tr' id='tr' style='width:97%; height:250px; font-size:11px;display:block; line-height:13px;'><? echo htmlspecialchars($_POST['tr'],ENT_QUOTES); ?></textarea>
		<input type='submit' value='submit' class='btn btn-primary' />
	</form>
<?
	}
	else
	{
?>
<div class="in_this_tutorial">
  <h2>On this page:</h2>
  <button type="button" class="btn btn-primary" onclick="trackAnchorClickSC('table');">Table</button>
  <button type="button" class="btn btn-primary" onclick="trackAnchorClickSC('graph');">Graph</button>
  <button type="button" class="btn btn-primary" onclick="trackAnchorClickSC('guide');">Guide</button>
</div>
<p>
	After analyzing the data you provided, we've created a <a href='#table'>table</a> and a <a href='#graph'>graph</a> to help you <a href='#guide'>diagnose</a> any connection issues.
</p>
<?
	}
?>






<?


// If the user is submitting a tracert for processing
if( $_POST['tr'] )
{
	$submitted_tr = strtolower($_POST['tr']);




	echo "	<script type='text/javascript'>
			_gaq.push(['_setAccount', 'UA-1501988-1']);
			_gaq.push(['_trackEvent', 'community support', 'troute parser - troute submitted for script processing']);
		</script>
	";




	// determine if this is windows (tracert) or mac (traceroute)
	$exploded_tr = explode("\n",$submitted_tr);
	$windows_or_mac = "unknown";
	for($x = 0; $x <= (count($exploded_tr) - 1); $x++)
	{
		if( substr_count($exploded_tr[$x],"tracert") > 0 )
		{
			$windows_or_mac = "tracert";
			$x = count($exploded_tr) + 100;
		}
		if( substr_count($exploded_tr[$x],"traceroute") > 0 )
                {
                        $windows_or_mac = "traceroute";
                        $x = count($exploded_tr) + 100;
                }
	}






	if( $windows_or_mac != "unknown" OR "enabled" == "enabled" )
	{
		$tr_array = create_tr_array($exploded_tr,$windows_or_mac);

		print_final_array($tr_array);
	}


}






function create_tr_array($exploded_tr,$windows_or_mac)
{
	// if this is a windows tracert
	if( $windows_or_mac == "tracert" OR $windows_or_mac == "traceroute" OR "enabled" == "enabled")
	{
		// AT THIS POINT $EXPLODED_TR = 
		/*
			Array
			(
			    [0] => c:\users\bradm_2>tracert google.com
			    [1] => 
			    [2] => tracing route to google.com [74.125.228.37]
			    [3] => over a maximum of 30 hops:
			    [4] => 
			    [5] =>   1    <1 ms    <1 ms    <1 ms  192.168.15.1
			    [6] =>   2     1 ms    <1 ms    <1 ms  192.168.14.1
			    [7] =>   3     1 ms     3 ms     1 ms  172.21.224.201
			    [8] =>   4     2 ms     2 ms     2 ms  ip-216-54-0-29.coxfiber.net [216.54.0.29]
			    [9] =>   5     1 ms     1 ms     1 ms  68.10.8.229
			    [10] =>   6     8 ms    18 ms     8 ms  68.1.4.139
			    [11] =>   7     7 ms     8 ms     8 ms  ip70-167-150-18.at.at.cox.net [70.167.150.18]
			    [12] =>   8    31 ms     9 ms     9 ms  216.239.46.250
			    [13] =>   9    12 ms     9 ms     9 ms  72.14.238.175
			    [14] =>  10     8 ms     8 ms     8 ms  iad23s06-in-f5.1e100.net [74.125.228.37]
			    [15] => 
			    [16] => trace complete.
			)
		*/

		// --------------------------------------------------------------
		// what we want to do is grab only the hops
		// --------------------------------------------------------------

		$found_one_yet = false;
		foreach($exploded_tr as $exploded_tr_key => $exploded_tr_value)
		{
			$exploded_by_space = explode(" ",$exploded_tr_value);
			// clean up all empty values
			foreach($exploded_by_space as $exploded_by_space_key => $exploded_by_space_value)
				if( $exploded_by_space_value == "" )
					unset($exploded_by_space[$exploded_by_space_key]);
			$exploded_by_space = array_values($exploded_by_space);
			$process_this_line = false;
			foreach($exploded_by_space as $key => $value)
			{
				if( $key == 0 AND $value == "1" )
				{
					$found_one_yet = true;
					$process_this_line = true;
				}
				elseif( $key == 0 AND is_numeric($value) AND $value != 1 AND $found_one_yet == true)
					$process_this_line = true;
			}
			if( $process_this_line == false )
				unset($exploded_tr[$exploded_tr_key]);
		}
		$exploded_tr = array_values($exploded_tr);

		// at this point, $exploded_tr =
		/*
			Array
			(
			    [0] =>   1    <1 ms    <1 ms    <1 ms  192.168.15.1
			    [1] =>   2     1 ms    <1 ms    <1 ms  192.168.14.1
			    [2] =>   3     1 ms     3 ms     1 ms  172.21.224.201
			    [3] =>   4     2 ms     2 ms     2 ms  ip-216-54-0-29.coxfiber.net [216.54.0.29]
			    [4] =>   5     1 ms     1 ms     1 ms  68.10.8.229
			    [5] =>   6     8 ms    18 ms     8 ms  68.1.4.139
			    [6] =>   7     7 ms     8 ms     8 ms  ip70-167-150-18.at.at.cox.net [70.167.150.18]
			    [7] =>   8    31 ms     9 ms     9 ms  216.239.46.250
			    [8] =>   9    12 ms     9 ms     9 ms  72.14.238.175
			    [9] =>  10     8 ms     8 ms     8 ms  iad23s06-in-f5.1e100.net [74.125.228.37]
			)
		*/

		// at this point we want to understand the data line by line
		foreach($exploded_tr as $k => $v)
		{
			$exploded_by_space = explode(" ",$v);
                        // clean up all empty values
                        foreach($exploded_by_space as $exploded_by_space_key => $exploded_by_space_value)
                                if( $exploded_by_space_value == "" )
                                        unset($exploded_by_space[$exploded_by_space_key]);
			$exploded_by_space = array_values($exploded_by_space);

			// at this point, $exploded_by_space =
			/*
				Array
				(
				    [0] => 1
				    [1] => <1
				    [2] => ms
				    [3] => <1
				    [4] => ms
				    [5] => <1
				    [6] => ms
				    [7] => 192.168.0.1
				)
			*/

			unset($temp_array);
			unset($temp_var);

			foreach($exploded_by_space as $ebs_k => $ebs_v)
			{
				$ebs_v = trim($ebs_v);
				if( $ebs_v == "<1" )
					$ebs_v = "1";

				if( $ebs_k == 0 )
				{
					$temp_array[] = $ebs_v;
				}
				else
				{
					// if value = 1 <1 *
					if(	is_numeric($ebs_v) OR
						$ebs_v == "*" OR
						( substr($ebs_v,0,1) == "<" AND is_numeric(substr($ebs_v,1,1)) )
					)
					{
						if( $temp_var != "" AND $temp_var != "ms" )
						{
							$temp_array[] = $temp_var;
							unset($temp_var);
						}
						$temp_array[] = $ebs_v;
					}
					else
					{
						// if this is not the last line
						if( $ebs_k < (count($exploded_by_space)-1) AND $ebs_v != "ms" )
							if( $temp_var == "" AND $ebs_v )
								$temp_var = $ebs_v;
							else
								$temp_var .= " $ebs_v";
						// if this is the last line and we're not currently adding to a temp_var
						if( $temp_var == "" AND $ebs_k == (count($exploded_by_space)-1) AND $ebs_v != "ms" )
						{
							$temp_array[] = $ebs_v;
						}
						// if we have a temp var and this is the last line
						if( $temp_var != "" AND $ebs_k == (count($exploded_by_space)-1) )
						{
							$temp_array[] = "$temp_var $ebs_v";
							unset($temp_var);
						}
					}
				}
			}
			$final_array[] = $temp_array;
		} // -- END foreach($exploded_tr as $k => $v)
		return $final_array;
	} // END -- if( $windows_or_mac == "tracert" OR $windows_or_mac == "traceroute")
} // END -- function create_tr_array






function print_final_array($tr_array)
{


	// --------------------------------------------------------------
	// first, let's clean up the array
	// HOP MS MS MS HOST
	// --------------------------------------------------------------
	foreach($tr_array as $tr_array_key => $tr_array_value)
	{
		unset($temp_array);
		unset($google_graph_this_hop_sum);
                unset($google_graph_this_hop_count);
		$response_count = 0;
		foreach($tr_array_value as $key => $value)
		{
			if( $key == 0 )
			{
				$temp_array[0] = $value;
				$this_hop_number = $value;
			}
			elseif( is_numeric($value) OR $value == "*" )
			{
				$response_count++;
				$temp_array[$response_count] = $value;

				if($value == "*")
				{
					$temp_array_for_google_graph[$response_count] = 0;
				}
				else
				{
					$temp_array_for_google_graph[$response_count] = $value;
					$google_graph_this_hop_count++;
					$google_graph_this_hop_sum += $value;
				}
			}
			else
			{
				$temp_array[4] = $value;
				$hop_hostname = htmlspecialchars($value,ENT_QUOTES);
			}

			if( $value == "*" )
				$timeout_count[$this_hop_number]++;
			if( (is_numeric($value) AND $value > 150) OR $value == "*" )
				$slow_responses[$this_hop_number]++;
			if( is_numeric($value) AND $key != 0 )
			{
				$sum_per_hop[$this_hop_number] += $value;
				$count_per_hop[$this_hop_number]++;
			}
		}
		$avereage_hop_not_including_timeouts = round($google_graph_this_hop_sum/$google_graph_this_hop_count,2);
		$data_for_google_graph[] = "['HOP:$this_hop_number SERVER:$hop_hostname',$avereage_hop_not_including_timeouts," . $temp_array_for_google_graph[1] . "," . $temp_array_for_google_graph[2] . "," . $temp_array_for_google_graph[3] . ",150]";
		// --------------------------------------------------------------------------------------------
		// do some troubleshooting
		// --------------------------------------------------------------------------------------------
		// early timeouts
		if( $tr_array_value[1] == "*" AND $tr_array_value[2] == "*" AND $tr_array_value[3] == "*" )
		{
			$hop_message[$this_hop_number] .= "All three attempts timed out in hop # $this_hop_number. ";
			if($this_hop_number <= 3)
				$hop_message[$this_hop_number] .= "Timeouts within the first few hops can generally be ignored. These initial devices / routers usually don't respond to traceroute requests. ";
			else
				$lines_with_full_timeouts[] = $this_hop_number;
		}
		// --------------------------------------------------------------------------------------------
		// END TROUBLESHOOTING
		// --------------------------------------------------------------------------------------------

		for($x = 1; $x <= 4; $x++)
			if( ! $temp_array[$x] )
				$temp_array[$x] = "";
		ksort($temp_array);
		$new_final_array[] = $temp_array;
	}
	$tr_array = $new_final_array;

	// ------------------------------------------------------
	// more troubleshooting
	// ------------------------------------------------------
	$num_of_hops = count($tr_array);
	// if the last 3 hops are slow responses
	if(	$slow_responses[$num_of_hops] > 1 AND
		$slow_responses[$num_of_hops - 1] > 1 AND
		$slow_responses[$num_of_hops - 2] > 1
	)
		$message_after_last_hop .= "Your last few hops appear to show that there is indeed a connection issue to the server. ";
	// if the last hop is good
	if( ! $slow_responses[$num_of_hops] )
		$last_hop_is_good = true;
	// if there are full timeouts but last hop is good
	if( $lines_with_full_timeouts AND $last_hop_is_good == true )
	{
		if( count($lines_with_full_timeouts) == 1 )
			$text_describing_lines_with_timeouts = "a full timeout in hop " . $lines_with_full_timeouts[0];
		else if( count($lines_with_full_timeouts) == 2 )
			$text_describing_lines_with_timeouts = "full timeouts in hops " . $lines_with_full_timeouts[0] . " and " .  $lines_with_full_timeouts[1];
		else
			$text_describing_lines_with_timeouts = "full timeouts in the hops " . implode(",",$lines_with_full_timeouts);
		$message_after_last_hop .= "While you did have $text_describing_lines_with_timeouts, your last hop performed well. ";
	}

	$last_hop_average = round($sum_per_hop[$num_of_hops] / $count_per_hop[$num_of_hops],2);

	if( ! $final_message )
		if( $last_hop_average == 0 )
			$final_message = "<p class='alert alert-danger' style='margin-top:10px;'>Your last hop appears to be unreachable. <a href='#final-timeout'>This generally means there is a connection problem</a>.</p>";
		else if( $last_hop_average < 150 AND $last_hop_average > 0 )
			$final_message = "<p class='alert alert-success' style='margin-top:10px;'>Your last hop averaged $last_hop_average ms, there does not appear to be a connection issue within your traceroute.</p>";
		else
			$final_message = "<p class='alert alert-danger' style='margin-top:10px;'>Most users will generally notice slower connection speeds when response times are greater than 150 ms. Your last hop averaged $last_hop_average ms, so there may be a problem.</p>";

	echo "	<a name='table'></a>
		<h2>Breakdown of your Traceroute</h2>
		<p>Below is a table showing the information we were able to parse from the traceroute results you provided.</p>
		<table class='article_table' style='width:100%;'>
			<tr>
				<th>Hop #</th>
				<th>1<sup>st</sup> response</th>
				<th>2<sup>nd</sup> response</th>
				<th>3<sup>rd</sup> response</th>
				<th>Server</th>
			</tr>
	";
	foreach($new_final_array as $tr_array_key => $tr_array_value)
	{
		echo "<tr>";
		foreach($tr_array_value as $key => $value)
		{
			if( $key == 0 )
				$this_hop_number = $value;
			$value_bg = "#fff";
			if( $value == "*" )
				$value_bg = "#FFCCCC";
			if( $key > 0 AND is_numeric($value) AND $value > 150 )
				$value_bg = "#FFFFCC";

			echo "<td style='background:" . $value_bg . ";'>" . htmlspecialchars($value,ENT_QUOTES) . "</td>";
		}
		echo "</tr>";
		if( $hop_message[$this_hop_number] AND "enabled" == "enabled" )
			echo "<tr><td colspan='5' style='font-size:11px; background:#bbb; text-align:center;'>" . $hop_message[$this_hop_number] . "</td></tr>";
	}
	if( $message_after_last_hop )
		echo "<tr><td colspan='5'>$message_after_last_hop</td></tr>";
	echo "	</table>

		$final_message






<a name='graph'></a>
<h2>Graphic visualization of your response times</h2>

<p>Using the data you submitted, we've rendered a line chart of your tracert response times using a <a href='https://developers.google.com/chart/interactive/docs/gallery/linechart' target='_blank'>Google Graph</a>. The <span style='color:red;'>red line</span> represents 150ms, the point at which most users will beging to notice some latency. This chart should be reviewed based upon the information in the <a href='#guide'>guide further down this page</a>.</p>

<script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      google.load('visualization', '1', {packages:['corechart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Hop #', 'Average', 'Test 1', 'Test 2', 'Test 3','Slow Connection Speed'],
        " . implode(",",$data_for_google_graph) . "
        ]);

        var options = {
          title: 'Line chart showing connection response times',
	  colors: ['#004080','#99FF99','#99FFFF','#FF99FF','red'],
	  lineWidth: 1
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
<div id='chart_div' style='width: 100%; height: 400px; border:1px solid #ddd;'></div>






<a name='guide'></a>
<h2>What do I need to know?</h2>

<p>The information below has been taken <em>directly</em> from <a href='http://customer.comcast.com/help-and-support/internet/run-traceroute-command/' target='_blank'>this</a> Comcast guide.</p>

<h3>High Latency on Middle Hops, But Not at the Last Visible Destination</h3>
<p>Traceroute results that show higher latency on middle <a href='http://en.wikipedia.org/wiki/Hop_(networking)' target='_blank'>hops</a>, but not at the last visible destination do not indicate a network problem. Traceroute packets can be treated as low priority and may be delayed or dropped, particularly at major public <a href='http://en.wikipedia.org/wiki/Internet_exchange_point' target='_blank'>Internet exchanges</a>. The measurement that’s important is the last hop or destination.</p>

<h3>High Latency at Middle Hops Which Remains Constant to the Last Visible Destination</h3>
<p>Traceroute results that show increased latency on a middle hop, which remains similar all the way through to the destination, do not indicate a network problem. This can be an artifact of a <a href='http://en.wikipedia.org/wiki/Multiprotocol_Label_Switching' target='_blank'>Multiprotocol Label Switching (MPLS)</a> network.</p>

<h3>Increasing Latency from the Middle Hop to the Destination</h3>
<p>A traceroute that shows dramatically increased latency on a middle hop, which then increases steadily through to the destination, can indicate a potential network issue. <a href='http://en.wikipedia.org/wiki/Packet_loss' target='_blank'>Packet loss</a> or asterisks (*) on many of the middle hops may also indicate a possible network level issue. This is the type of trend that you will want to report. A steady trend of increasing latency is typically an indication of <a href='http://en.wikipedia.org/wiki/Network_congestion' target='_blank'>congestion</a> or a problem between two points in the network and it requires one or more parties to correct the problem.</p>

<a name='final-timeout'></a>
<h3>Request timed out Message - At the End of a traceroute</h3>
<p>There are several reasons why a 'Request timed out' message may appear at the end of a traceroute:</p>
<ul>
	<li>The destination’s <a href='http://en.wikipedia.org/wiki/Firewall_(computing)' target='_blank'>firewall</a> or other security device is blocking the request. Even if a firewall is preventing the final hops at the destination from showing up in traceroute output, the destination is likely still reachable using the application you’re interested in (e.g. web/<a href='http://en.wikipedia.org/wiki/Http' target='_blank'>HTTP</a>).</li>
	<li>There could be a problem on the return path from the target system. Remember the round trip time measures the time it takes for a packet to travel from your system to a destination system and back. The forward route and the return route often follow different paths. If there is a problem on the return route, it may not be evident in the command output.</li>
	<li>There may be a connection problem at that particular system or the next system.</li>
</ul>


	";
}




?>






</div>
