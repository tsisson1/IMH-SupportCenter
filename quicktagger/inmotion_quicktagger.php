<?php
$twurl = null;
if (isset($_POST['result'])) {
    $twurl = exec("curl http://tweetburner.com/links -d link[url]=" . urlencode($_POST['result']), $output);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>InMotion Quick Tagger</title>
<link href="_css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="_css/quicktagger.css" rel="stylesheet" type="text/css" media="all" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<!--[if lte ie 7]>
<link href="_css/quicktagger-ie.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->
</head>

<body>
	<div id="header">
    	<h1><a href="http://www.inmotionhosting.com/" target="_blank">InMotion Hosting Quick Tagger</a></h1>
    </div>
    <div id="content">
    	<form id="ctm" action="inmotion_quicktagger.php" method="POST" onsubmit="return validate();">
        <?php if (isset($_POST['result'])) { ?>
        	<label for="fullurl">Full URL:</label>
            <input type="text" readonly="readonly" name="fullurl" id="fullurl" onclick="this.select();" value="<?php echo $_POST['result']; ?>" />
            <label for="twurl">TwURL:</label>
            <input type="text" readonly="readonly" name="twurl" id="twurl" onclick="this.select();" value="<?php echo $twurl; ?>" />
            <input type="submit" value="Generate Another" class="button" id="generate" />
			<input type="button" value="Close" class="button" onclick="window.close()" />
        <?php } else { ?>
        	<label for="utm_source">Source: <span>(twitter, facebook, newsletter)</span></label>
            <input type="text" name="utm_source" id="utm_source" />
            <label for="utm_medium">Medium: <span>(twitter handle, email)</span></label>
            <input type="text" name="utm_medium" id="utm_medium" />
            <label for="utm_campaign">Campaign: <span>(product or slogan)</span></label>
            <input type="text" name="utm_campaign" id="utm_campaign" />
            <input id="result" name="result" type="hidden" />
            <input type="submit" value="Generate URL" class="button" id="generate" />
            <input type="reset" value="Clear" class="button" />
        <?php } ?>
        </form>
    </div>
    <div id="footer"><a href="http://www.inmotionhosting.com?utm_source=QTwindow&utm_medium=bookmarklet&utm_campaign=quicktagger" target="_blank">Host your website with InMotion Hosting from $5.95/mo</a></div>
<script type="text/javascript" src="_js/quicktagger.js"></script>
<script type="text/javascript">
(function(l){
	url = l;
	utm_source = get('utm_source');
	utm_medium = get('utm_medium');
	utm_campaign = get('utm_campaign');
	result = get('result');
})('<?php echo $_GET['url']; ?>');
</script>
</body>
</html>
