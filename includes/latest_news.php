<?

$news_article_base_url = "/support/news/general/";

include_once("../configuration.php");
$cg = new JConfig;
$con = mysqli_connect("localhost",$cg->user,$cg->password,$cg->db);
if (mysqli_connect_errno())
	die('error 201407281328');

$seven_days_ago_nn = date("Y-m-d H:i:s", time() - 60*60*24*7 - 60*60);

$query = "
SELECT	`c`.hits, `c`.`title`, `c`.`alias`, `c`.`modified`
FROM	`" . $cg->dbprefix . "content` as `c`
WHERE	`c`.`catid` = 50 AND
	`c`.`state` = 1 AND
	`modified` >= '$seven_days_ago_nn';
";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_object($result))
{
	$articles[] = $row;
}

if(!$articles)
	echo "";
else
{
	echo "
	<style>
		.news-value {
			color:#aaa;
		}
	</style>
	";

	foreach($articles as $k => $v)
	{
		$class_for_update_date = "";
		$style_for_update_date = "";
	        if ( date("M jS",strtotime($v->modified)) == date("M jS",time()))
		{
        	        $class_for_update_date = " class='alert alert-warning' ";
			$style_for_update_date = "padding:0px 2px;";
		}

		echo "
<div><a href='$news_article_base_url" . urlencode($v->alias) . "'>" . htmlentities($v->title,ENT_QUOTES) . "</a></div>
<div style='float:left; $style_for_update_date ' $class_for_update_date >Updated: <span class='news-value'>" . date("M jS",strtotime($v->modified)) . "</span></div>
<div style='float:right;'>Hits: <span class='news-value'>" . number_format($v->hits) . "</span></div>
<div style='clear:both;'></div>
		";
	}
}

mysqli_close($con);

?>
