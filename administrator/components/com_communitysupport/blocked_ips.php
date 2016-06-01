<?php

$unblock_ip = $_POST['ip_ip'];

if ($_POST['action'] == "unblock")
{

    $query = "DELETE from #__admintools_ipblock WHERE `ip` = '$unblock_ip' ;";
    $db->setQuery($query);
    $db->execute();
        echo "<p class='success'>$unblock_ip was successfully removed. </p>";
}

$query = "SELECT count(`id`) as 'total_count' FROM #__admintools_ipblock";
$db->setQuery($query);
$total_ips = $db->loadObjectList();
$tot_ips = $total_ips[0]->total_count;


echo "<h1>Totals</h1>
    <table border='1' cellpadding='10'> 
        <tr>
            <th>IPs</th>
        </tr>
        <tr>
        <td>$tot_ips</td>
</tr>
</table>";

$query = "SELECT * FROM #__admintools_ipblock order by id";
$db->setQuery($query);
$all_ips = $db->loadObjectList();


echo "<h1>List</h1>
    <table border='1' cellpadding='10'>
        <tr>
            <th>ID</th>
            <th>IP</th>
            <th>Reason</th>
        </tr>
       ";
foreach ($all_ips as $ai_k =>$ai_v)
{
 echo " <tr>
        <td>$ai_v->id</td>
        <td>$ai_v->ip</td>
        <td>$ai_v->description</td>
        <td><form method='post'>
            <input type='hidden' name='ip_ip' value='$ai_v->ip' />
            <input type='hidden' name='action' id='action' value='unblock' />
            <input type='submit' value='Unblock' class='btn btn-primary' />
            </form>
</td>
        </tr>
";
}
echo "
</table>";


?>
