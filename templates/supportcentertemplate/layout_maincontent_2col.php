<div class='container'>
	<div class='main-left-sc' name='sc_left' id='sc_left' style='max-width:705px;'>


<? /*
//Grab URL
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

// IF URL has edu/ in it

if (strpos($url,'edu/') !== false) {


// Grab globals from bottom edu nav
global $prev_page_title;
global $prev_page_url;
global $next_page_title;
global $next_page_url;

if (empty($next_page_title) AND empty($prev_page_title)){
}
else {
echo "<div style='height:54px;width:100%;margin-right:auto;margin-left:auto;'>";
}

//Prev Button
if (!empty($prev_page_title)) {

echo '<a href="';
echo "$prev_page_url";
echo '">';
echo "<div id='edu_button' style='margin: 5px 5px; float:left;width:231px;height:81px;background-image:url(/support/templates/supportcentertemplate/images/edu/prev-button.png.2);'>";
echo "<div id='edu_text' style='float:right;margin-left:4px;line-height:1;width:145px;position: relative;top: 50%;transform: translateY(-50%);'><font size='2' color='white'>";
echo $prev_page_title;
echo "</font></div> </div></a>";
}
//Next Button
if (!empty($next_page_title)) {
echo '<a href="';
echo "$next_page_url";
echo '">';
echo "<div id='edu_button' style='margin: 5px 5px; float:right;width:231px;height:81px;background-image:url(/support/templates/supportcentertemplate/images/edu/next-button.png.2);'>";
echo "<div id='edu_text' style='margin-left:16px;float:left;line-height:1;width:145px;position: relative;top: 50%;transform: translateY(-50%);'><font size='2' color='white'>";
echo "$next_page_title";
echo "</font></div> </div></a>";
}
if (empty($next_page_title) AND empty($prev_page_title)){
}
else {

echo "</div><br /><br />";
}}

*/?>


<?
if ( !  $this->error )
{
?>
		<jdoc:include type="modules" name="position-2" style="none" />
		<jdoc:include type="modules" name="position-3" style="xhtml" />
		<jdoc:include type="message" />
		<jdoc:include type="component" />
<?
}
else
{
		include_once('includes/error_page_beta.php');
}
?>
	</div>
<?
// if there are no errors, IE this is not a 404 page, print the right sidebar
if ( !  $this->error )
{
?>
	<div name='sc_right' id='sc_right'>
<?
if( $this_is_support_center_homepage == true )
	echo "	<div style='margin-bottom:15px;'>
                	<a class='btn btn-primary' href='/support/website/new-customers/getting-started' style='width:198px;'>New Customers Start Here</a>
			<a href='/support/website/general-server-setup/what-is-my-username-and-password' style='display:block; text-align:right; font-size:11px; line-height:13px; padding-top:13px;'>Forget your password /<br>need login info?</a>
		</div>
	";
?>
                <div class="moduletable" style='display:none;' name='latest_news' id='latest_news'>
       	                <h3>News / Announcements</h3>
               	        <div name='latest_news_items' id='latest_news_items'>
                       	</div>
                </div>
                <? include_once("includes/custom_sidebar_widgets.php"); ?>

                <jdoc:include type="modules" name="position-7" style="xhtml" />
	</div>
<?
}
?>
	<div style='clear:both;'></div>
 </div>
