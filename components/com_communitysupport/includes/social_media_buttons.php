<?






// ---------------------------------------------------------------
// LIKE THIS PAGE - social media
// ---------------------------------------------------------------
$url_of_this_page = $new_canonical_url;
$like_facebook_html = "<iframe src='//www.facebook.com/plugins/like.php?href=$url_of_this_page&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font=verdana&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=209145459223160' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:100px; height:21px;' allowTransparency='true'></iframe>";
$like_google_html = "
<div class='g-plusone' data-size='medium' data-href='$url_of_this_page'></div>
<script type='text/javascript'>
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>";
$like_twitter_html = "<a href='https://twitter.com/share' class='twitter-share-button' data-via='inmotionhosting'>Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>";


echo "	<a name='like_this_article'></a>
	<div style='text-align:right; margin:15px -30px 15px 0px;'>
		<span style='padding-right:15px;'>Like this Question?</span>
		$like_facebook_html
		$like_google_html
		$like_twitter_html
	</div>
";





?>
