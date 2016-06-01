<div style='width:910px; margin:0px; padding:30px 0px 30px 0px; margin-left:auto; margin-right:auto;'>
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
	<div style='clear:both;'></div>
</div>
