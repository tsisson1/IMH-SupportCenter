<?

$this->document->setTitle("What is my IP Address? | InMotion Hosting");

echo "	<div class='item-page'>
		<div class='page-header'>
			<h1>What is my ip address?</h1>
		</div>
                <div style='text-align:center;padding:10px 0px 0px 0px;'>
			<h2 style='display:inline; border:0px; margin-right:10px;'>Your IP Address is:</h2>
			<h3 style='display:inline;' name='my_ip' id='my_ip'></h3>
		</div>
	</div>





	<script type='text/javascript'>
		jQuery.get( '/support/gadgets/my-ip.php', function( data ) {
			jQuery('#my_ip').html( data );
		});
	</script>
";

?>
