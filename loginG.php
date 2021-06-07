<?php
	include_once 'src/Google_Client.php';
	include_once 'src/contrib/Google_Oauth2Service.php';
	
	// Edit Following 3 Lines
	$clientId = '567876573401-c5fihhm399hs4nivqmlscjktphd2dkgc.apps.googleusercontent.com'; //Application client ID
	$clientSecret = 'z1RioGZJaqM8KvqgsMVCng7G'; //Application client secret
	$redirectURL = 'http://localhost/111111111111/socialhome.php'; //Application Callback URL
	
	$gClient = new Google_Client();
	$gClient->setApplicationName('ecom');
	$gClient->setClientId($clientId);
	$gClient->setClientSecret($clientSecret);
	$gClient->setRedirectUri($redirectURL);
	$google_oauthV2 = new Google_Oauth2Service($gClient);
?>