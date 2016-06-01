<?php

if( $_GET['oauth_token'] AND $_GET['oauth_verifier'] )
{
	include_once('confirm.php');
}
else
{
	include 'EpiCurl.php';
	include 'EpiOAuth.php';
	include 'EpiTwitter.php';
	include 'secret.php';

	$twitterObj = new EpiTwitter($consumer_key, $consumer_secret);

	echo '<a href="' . $twitterObj->getAuthenticateUrl() . '">Authorize with Twitter</a>';
}
?>

