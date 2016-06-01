<?php
include_once("../includes/includes_functions.php");

$month = date("Y-m");
$life = "2015-09";

$query = "SELECT count(`id`) as 'life_count' FROM #__users where `registerDate` > '$life%'";
$db->setQuery($query);
$total_signups = $db->loadObjectList();
$tot_signups_life = $total_signups[0]->life_count;


$query = "SELECT count(`id`) as 'month_count' FROM #__users where `registerDate` like '$month%'";
$db->setQuery($query);
$total_signups = $db->loadObjectList();
$tot_signups_month = $total_signups[0]->month_count;


echo "<h1>Registrations</h1>
        <table border='1'>
                <tr>
                        <th>Date</th>
                        <th>Count</th>
                </tr>
                <tr>
                <td>Month - $month</td>
                <td>$tot_signups_month</td>
</tr>
                <tr>
                <td>Lifetime</td>
                <td>$tot_signups_life</td>
</tr>
</table>";


$query = "SELECT count(`id`) as 'month_count' FROM #__cmc_register where `created` like '$month%'";
$db->setQuery($query);
$total_signups = $db->loadObjectList();
$news_signups_month = $total_signups[0]->month_count;


$query = "SELECT count(`id`) as 'life_count' FROM #__cmc_register where `created` > '$life%'";
$db->setQuery($query);
$total_signups = $db->loadObjectList();
$news_signups_life = $total_signups[0]->life_count;


echo "<h1>Newsletter Signups</h1>
        <table border='1'>
                <tr>
                        <th>Date</th>
                        <th>Count</th>
                </tr>
                <tr>
                <td>Month - $month</td>
                <td>$news_signups_month</td>
</tr>
                <tr>
                <td>Lifetime</td>
                <td>$news_signups_life</td>
</tr>
</table>";

$month_conversion = round((($news_signups_month / $tot_signups_month) * 100), 2);
$life_conversion = round((($news_signups_life / $tot_signups_life) * 100), 2);

echo "
<br />
The conversion rate for $month was: $month_conversion% <br />
The conversion rate for the lifetime is: $life_conversion%

";

?>
