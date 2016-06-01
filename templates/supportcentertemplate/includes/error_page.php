<h1>Error</h1>

<form method='get' action='/support/search'>
	<p>Try searching for what you are looking for:</p>

	<input type='text' name='searchword' id='searchword'><br />
	<input type='submit' value='search' />
	<input type='hidden' name='tsrc' id='tsrc' value='error_page' />
</form>

<script type="text/javascript">
	_gaq.push(['_setAccount', 'UA-1501988-1']);
	_gaq.push(['_trackEvent', 'community support', 'error code <? echo $this->error->getCode(); ?>','referer:<? echo addslashes($_SERVER['HTTP_REFERER']); ?>']);
</script>

<?

if( $user->username == "BradM" AND "enabled" == "enabledd")
{
	echo "<pre>"; print_r(get_defined_vars()); echo "</pre>";
}

?>
