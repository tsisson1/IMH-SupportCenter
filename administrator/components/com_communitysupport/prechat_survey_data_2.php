<?


$start_date = "2014-02-17 00:00:00";
if( $_POST['start_date'] )
	$start_date = $_POST['start_date'];
$end_date = "2014-02-23 23:59:59";
if( $_POST['end_date'] )
	$end_date = $_POST['end_date'];

?>






<form method='post'>
	Start Date: <input type='text' name='start_date' id='start_date' value='<? echo $start_date; ?>' />
	End Date: <input type='text' name='end_date' id='end_date' value='<? echo $end_date; ?>' />
	<input type='submit' value='Get stats' class='btn btn-primary' />

	<div style='border:1px solid #ccc; padding:5px; background:#eee;'>
		Optional, where:<br />
		<textarea style="width:98%; height:35px; font-family:'Courier New', Courier, monospace;" name='where_clause' id='where_clause'><? echo htmlentities($_POST['where_clause'],ENT_QUOTES); ?></textarea>

		<p>
			Show the actual prechat questions?<br />
			<input type='radio' name='show_question' value='0' />No<br />
			<input type='radio' name='show_question' value='1' />Yes
		</p>

	</div>
</form>






<?

if( $_POST )
{
	$start_date = strtotime($_POST['start_date']) - (3*60*60);
        $end_date = strtotime($_POST['end_date']) - (3*60*60);






	$deps['2324923566971164486'] = "Technical Support 24/7";
	$deps['1621843185299383618'] = "Billing";
	$deps['4574741892902413188'] = "Sales - Business Class hosting";
	$deps['161470813524485003'] = "Sales - Custom Web Design";
	$deps['1943748019446294429'] = "Sales - Dedicated servers";
	$deps['3027061675179994483'] = "Sales - Reseller Hosting";
	$deps['1382987596054887839'] = "Sales - Virtual Private Servers (VPS)";
	$deps[''] = "NO DEPARTMENT SELECTED";






$allowed_ips = return_staff_ips();
$internal_ips = implode("','",$allowed_ips);






	foreach($deps as $dep_id => $dep_title)
	{
		echo "<h1>$dep_title</h1>";

		$optional_where_clause = "";
		if($_POST['where_clause'])
			$optional_where_clause = " AND " . $_POST['where_clause'];

		$base_query = "
		SELECT  count(`id`)
        	FROM    #__prechat
	        WHERE   (`timestamp_n` BETWEEN '$start_date' AND '$end_date') AND
			(`user_ip` NOT IN ('$internal_ips')) AND
                	(LENGTH(`timestamp_n_id`) = 14) AND
			(`department` = '$dep_id')
			$optional_where_clause
		";

		echo "	<style>
				.table-striped tr td {text-align:center; font-size:10px;}
			</style>
			<table class='table table-striped' style='margin-bottom:50px;'>
				<tr>
					<th>Category</th>
					<td style='font-size:10px;'>launched_chat</td>
					<td style='font-size:10px;'>num_results</td>
					<td style='font-size:10px;'>num_clicks</td>
					<td style='font-size:10px;'>timeout</td>
					<th>Count</th>
					<th>%</th>
				</tr>
		";


		// number of prechats
		$db->setQuery($base_query);
		$results = $db->loadResult();
		$total_prechats = $results;
		$suspicious_count = $results;
		echo "	<tr><th>Total number of prechats</th><td>*</td><td>*</td><td>*</td><td>*</td><th>$results</th><th>100%</th></tr>";

		// total number of chats launched
	        $db->setQuery("
			$base_query AND
			(`launched_chat` = 1 AND `num_results` = 0 AND `num_clicks` = 0 AND `timeout` = 1)
		");
		$results = $db->loadResult();
		$percentage = round($results/$total_prechats*100,2);
		$suspicious_count -= $results;
	        echo "  <tr><th style='background:#FFCCCC;'>FAIL - chat launched AUTOMATICALLY because of timeout</th><td>1</td><td>0</td><td>0</td><td>1</td><th>$results</th><th>$percentage%</th></tr>";

		// total number of chats launched because of no search results
	        $db->setQuery("
        	        $base_query AND
	                (`launched_chat` = 1 AND `num_results` = 0 AND `num_clicks` = 0 AND `timeout` = 0)
        	");
	        $results = $db->loadResult();
		$percentage = round($results/$total_prechats*100,2);
		$suspicious_count -= $results;
	        echo "  <tr><th style='background:#FFCCCC;'>FAIL - chat launched AUTOMATICALLY because of no search results</th><td>1</td><td>0</td><td>0</td><td>0</td><th>$results</th><th>$percentage%</th></tr>";

		// total number of chats launched because they didn't click any results
		$base_query_updated = "$base_query AND (`launched_chat` = 1 AND `num_results` >=1 AND `num_clicks` = 0 AND `timeout` = 0)";
	        $db->setQuery($base_query_updated);
	        $results = $db->loadResult();
		$percentage = round($results/$total_prechats*100,2);
		$suspicious_count -= $results;
	        echo "  <tr><th style='background:#FFCCCC;'>FAIL - chat launched BY USER because they didn't click search results</th><td>1</td><td>&gt;=1</td><td>0</td><td>0</td><th>$results</th><th>$percentage%</th></tr>";
		echo_questions_in_question($base_query_updated);

		// total number of chats launched because they clicked links but they didn't help
		$base_query_updated = "$base_query AND (`launched_chat` = 1 AND `num_results` >=1 AND `num_clicks` >= 1 AND `timeout` = 0)";
	        $db->setQuery($base_query_updated);
	        $results = $db->loadResult();
		$percentage = round($results/$total_prechats*100,2);
		$suspicious_count -= $results;
	        echo "  <tr><th style='background:#FFCCCC;'>FAIL - chat launched BY USER because ajax results were clicked but not helpful</th><td>1</td><td>&gt;=1</td><td>&gt;=1</td><td>0</td><th>$results</th><th>$percentage%</th></tr>";
		echo_questions_in_question($base_query_updated);

		// total number of chats logically prevented
		$base_query_updated = "$base_query AND (`launched_chat` = 0 AND `num_results` >= 1 AND `num_clicks` >= 1 AND `timeout` = 0)";
	        $db->setQuery($base_query_updated);
	        $results = $db->loadResult();
		$percentage = round($results/$total_prechats*100,2);
		$suspicious_count -= $results;
        	echo "  <tr><th style='background:#CCFFCC;'>Success - chat logically prevented</th><td>0</td><td>&gt;=1</td><td>&gt;=1</td><td>0</td><th>$results</th><th>$percentage%</th></tr>";
		echo_questions_in_question($base_query_updated);

		$results = $suspicious_count;
		$percentage = round($results/$total_prechats*100,2);
		echo "  <tr><th style='background:#FFFFCC;'>Uncategorized / Suspicious data</th><td>?</td><td>?</td><td>?</td><td>?</td><th>$results</th><th>$percentage%</th></tr>";

		echo "	</table>";
	}
}






function echo_questions_in_question($base_query_updated)
{
	$db = JFactory::getDbo();
	if($_POST['where_clause'])
        {
        	$db->setQuery(str_replace("count(`id`)","`question`",$base_query_updated));
                $base_query_updated_results = $db->loadObjectList();
                if($base_query_updated_results)
                {
			if($_POST['show_question']=="1")
	                	foreach($base_query_updated_results as $k => $v)
                        		echo "<tr><td></td><td colspan='6' style='text-align:left; font-size:14px;'>" . $v->question . "</td></tr>";

			if("enabled" == "enabled")
			{
				foreach($base_query_updated_results as $k => $v)
				{
					unset($already_counted_word);

					$v->question = str_replace("\"","",$v->question);
					$v->question = str_replace("'","",$v->question);
					$v->question = str_replace("’","",$v->question);

					$exploded_question = preg_split("/\s+/", strtolower($v->question));
					// loop through each word
					foreach($exploded_question as $tmp_word_id => $word)
					{
						$word = trim(strtolower($word),"!?.,:");
						$word = if_word_return_this_word($word); // pass "domains" get "domain"

						if (is_stop_word($word) == false AND ! $already_counted_word[$word])
						{
							$single_word_count[$word]++;
							$already_counted_word[$word]++;
						}
					}
				}

				arsort($single_word_count);

				$single_word_count_table = "<table class='table table-striped table-bordered'><tr><th>word</th><th>count</th></tr>";
				foreach($single_word_count as $word => $count)
					if($count >= 3)
						$single_word_count_table .= "<tr><td>$word</td><td>$count</td></tr>";


				$single_word_count_table .= "</table>";
				echo "	<tr>
						<td></td>
						<td colspan='2'>$single_word_count_table</td>
					</tr>
				";
			}
                }
	}
}

function is_stop_word($word)
{
	if( strlen($word) <= 3)
		return true;

	$stop_words = array("would","already","understand","colin","problems","there","thank","cannot","checking","having","through","problem","trying","working","other","everything","actual","about","should","using","please","getting","hello","thanks","support","could","while","after","check","since","which","something","another","seems","tried","being","yesterday","where","currently","showing","still","information","because","today","under","anything","however","question","might","service","recently","caused","appears","client","trouble","handle","before","occurred","different","think","reason","times");

	if (in_array($word,$stop_words))
		return true;
	return false;
}

function if_word_return_this_word($word)
{
	$if['accounts'] = "account";
	$if['administrator'] = "admin";

	$if['blocked'] = "block";

	$if["can't"] = "cant";
	$if['changed'] = "change";
	$if['changes'] = "change";
	$if['created'] = "create";

	$if['domains'] = "domain";

	$if['emails'] = "email";
	$if['errors'] = "error";

	$if['failed'] = "fail";
	$if['files'] = "file";
	$if['folder'] = "directory";

	$if['hosted'] = "host";
	$if['hours'] = "hour";

	$if['installed'] = "install";
	$if['issues'] = "issue";

	$if['purchased'] = "purchase";

	$if['received'] = "receive";
	$if['receiving'] = "receive";
	$if['running'] = "run";

	$if['settings'] = "setting";
	$if['sites'] = "site";

	$if['unable'] = "cant";
	$if['users'] = "user";

	$if['website'] = "site";
	$if['websites'] = "site";

	foreach($if as $k => $v)
		if($word == $k)
			return $v;

	return $word;
}

?>
