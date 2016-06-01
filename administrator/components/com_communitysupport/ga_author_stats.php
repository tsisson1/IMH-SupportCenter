<?

echo "
	<form method='post'>
		<input type='submit' name='taska' id='taska' value='import' class='btn btn-primary' />
	</form>
";






if( $_POST['taska'] == 'import' )
{
	if( ! $_POST['submitted_data'] )
	{
		echo "
			<form method='post'>
				<textarea type='text' name='submitted_data' id='submitted_data' style='width:600px; height:200px;'></textarea><br />
				<input type='text' name='brand' id='brand' /> brand (imh whh)<br />
				<input type='text' name='week_starting' id='week_starting' /> week starting (2013.12.22)<br />
				<input type='submit' value='submit' class='btn btn-primary' />
				<input type='hidden' name='taska' id='taska' value='import' />
			</form>
		";
	}
	else
	{
		// submitted data = sa
		$sa = explode("\n",$_POST['submitted_data']);
		// loop through each line
		foreach($sa as $line_key => $line_value)
		{
			// line_value = Organic Search,BradM,"32,157",66.76%,"21,469",74.26%,1.74,00:01:54,0,$0.00,0.00%
			$ebq = explode("\"",$line_value);
			$odd_or_even = 0;
			foreach($ebq as $ebq_k => $ebq_v)
			{
				if( $odd_or_even == 0 )
				{
					// do nothing
					$ebq[$ebq_k] = trim($ebq_v,",");
					$odd_or_even = 1;
				}
				else
				{
					$ebq[$ebq_k] = str_replace(",","",$ebq_v);
					$odd_or_even = 0;
				}
			}
			$line_data = implode(",",$ebq);
			$eld = explode(",",$line_data);
			echo "<pre>"; print_r($eld); echo "</pre>";

			$week_starting = $_POST['week_starting'];
			$brand = $_POST['brand'];
			$channel = $eld[0];
			$author = $eld[1];
			$visits = $eld[2];
			$percent_new_visits = str_replace("%","",$eld[3]);
			$new_visits = $eld[4];
			$bounce_rate = str_replace("%","",$eld[5]);
			$pages_per_visit = $eld[6];
			$avg_visit_duration = $eld[7];

			$query = "	INSERT INTO #__ga_author_stats
					(`id`,`week_starting`,`brand`,`channel`,`author`,`visits`,`percent_new_visits`,`new_visits`,`bounce_rate`,`pages_per_visit`,`avg_visit_duration`)
					VALUES(NULL,'$week_starting','$brand','$channel','$author',$visits,$percent_new_visits,$new_visits,$bounce_rate,$pages_per_visit,'$avg_visit_duration');
			";
			$db->setQuery($query);
			echo "<pre>$query</pre>";
	                $result = $db->execute();
		}
	}
}

?>
