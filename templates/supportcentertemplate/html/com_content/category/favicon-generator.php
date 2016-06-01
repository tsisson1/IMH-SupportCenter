<?php

//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

$like_this_icon_generator = return_div_with_social_buttons("Like this tool?",$this->document->base);

echo "
	<div class='item-page'>
		<div class='page-header'>
			<h1>Free Favicon Generator</h1>
		</div>
		<p>Need to <strong>create a favicon</strong> for your website? Follow the steps below and allow our server to do all the work! We'll convert the image you upload into both a favicon and an Apple Touch Icon.</p>
		<iframe src='/support/modules/mod_favicon_generator/files/' style='border:0px;' width='550' height='550' border='0'></iframe>
		$like_this_icon_generator
	</div>
";
return;

?>
