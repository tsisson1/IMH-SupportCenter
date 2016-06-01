<?






// ---------------------------------------------------------------------------------------------------------
if( $_POST['csv_data'] )
{
	$exploded_data = explode("\n",$_POST['csv_data']);

	foreach($exploded_data as $line_number => $line_data)
	{






		// ---------------------------------------------------------------------------------------------------------
		// ---------------------------------------------------------------------------------------------------------
		// take the imported line and splice out query, impressions, clicks, etc
		// ---------------------------------------------------------------------------------------------------------
		// ---------------------------------------------------------------------------------------------------------
		$line_data = str_replace("\"\"\"","\"\"",$line_data);
		$line_data = str_replace("\"\"","QUOTEHERE",$line_data);
		$line_data = str_replace("\"","",$line_data);
		$line_data = str_replace("QUOTEHERE","\"",$line_data);
		$exploded_line = explode(",",$line_data);

		$c = count($exploded_line);

		$query = "";
		for($x = 0; $x < ($c - 9);$x++)
		{
			if( $x == 0 )
				$query = $exploded_line[$x];
			else
				$query = $query . "," . $exploded_line[$x];
		}
		$impressions = $exploded_line[$c - 9];
		$clicks = $exploded_line[$c - 7];
		$average_position = $exploded_line[$c - 3];
		$csv_date = $exploded_line[$c - 1];






		// ---------------------------------------------------------------------------------------------------------
		// ---------------------------------------------------------------------------------------------------------
		// update the database
		// ---------------------------------------------------------------------------------------------------------
		// ---------------------------------------------------------------------------------------------------------
		$sql_query = "SELECT `first_noticed` FROM #__query_data_raw WHERE `query` = '" . addslashes($query) . "';";
		$db->setQuery($sql_query);
                $query_exists = $db->loadObjectList();
		// ------------------------------------------------------------------------
		// if the query exists
		// ------------------------------------------------------------------------
		//
		// do some date formatting
		$data_date = date_create($csv_date);
		$first_noticed = date_create(str_replace(" 00:00:00","",$query_exists[0]->first_noticed));
		$date_diff = date_diff($first_noticed,$data_date);
		//
		if( $query_exists[0]->first_noticed )
		{
			// if the query was initially added before the date we're trying to import
			if( $date_diff->days > 0 AND $date_diff->invert != 1)
			{
				// update the data with the latest
				$sql_query = "
					UPDATE #__query_data_raw
					SET	`impressions` = $impressions,
						`clicks` = $clicks,
						`average_position` = $average_position,
						`last_noticed` = '$csv_date 00:00:00'
                                        WHERE `query` = '" . addslashes($query) . "'
                                        LIMIT 1;
				";
                        	$db->setQuery($sql_query);
	                        $result = $db->execute();
        	                echo "<p class='alert alert-warning'>Query already in database, so we updated impression / click / avg position data: <strong>" . htmlentities($query,ENT_QUOTES) . "</strong></p>";
			}
			// if the query was initially added after the date we're trying to import
			elseif( $date_diff->invert == 1 )
			{
				// update the date it was first found, as our current data is wrong
				$sql_query = "
					UPDATE #__query_data_raw
                                        SET `first_noticed` = '$csv_date 00:00:00'
                                        WHERE `query` = '" . addslashes($query) . "'
                                        LIMIT 1;
	                        ";
        	                $db->setQuery($sql_query);
                	        $result = $db->execute();
				echo "<p class='alert alert-info'>Rolled back the date query was first found! <strong>" . htmlentities($query,ENT_QUOTES) . "</strong></p>";
			}
		}
		// ------------------------------------------------------------------------
		// if the query does not exist
		// ------------------------------------------------------------------------
		else
		{
			$sql_query = "  INSERT INTO #__query_data_raw (`id`,`first_noticed`,`query`,`impressions`,`clicks`,`average_position`,`last_noticed`)
                                        VALUES(NULL,'$csv_date 00:00:00','" . addslashes($query) . "',$impressions,$clicks,$average_position,'$csv_date 00:00:00');
                        ";
                        $db->setQuery($sql_query);
                        $result = $db->execute();
                        echo "<p class='alert alert-success'>New query found! <strong>" . htmlentities($query,ENT_QUOTES) . "</strong></p>";
		}
	}
}
// ---------------------------------------------------------------------------------------------------------






echo "
	<h1>Import Data</h1>
	<p class='alert alert-info'>Export Data as a CSV and submit below</p>
	<form method='post'>
		<textarea name='csv_data' id='csv_data' style='width:800px; height:400px; font-size:11px; display:block;'></textarea>
		<textarea style='width:800px; height:100px; font-size:11px; display:block; background:#ddd; color:#aaa;'>
cpanel,400,30,35,7.50%
magento,400,12,51,3.00%
inmotion hosting,320,200,1.0,62.50%
poppies,320,5,8.2,1.56%
error 522,250,5,3.3,2.00%
cart icon,200,16,53,8.00%
inmotion,200,60,2.2,30.00%
captcha,150,5,140,3.33%
		</textarea>
		<input type='submit' value='submit' class='btn btn-info' />
	</form>

";






?>
