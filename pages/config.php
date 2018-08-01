<?php
	require_once('../googleApi/vendor/autoload.php');
	session_start();

	//session_unset();    //flush session variables if needed.(testing)


	$client = new Google_Client();
	$client->setAuthConfig('../client_credentials.json'); 
	// $client->addScope([Google_Service_Oauth2::USERINFO_EMAIL, Google_Service_Oauth2::USERINFO_PROFILE, Google_Service_Oauth2::PLUS_LOGIN]);
	$client->addScope(Google_Service_Oauth2::USERINFO_PROFILE);
	$client->addScope(Google_Service_Oauth2::USERINFO_EMAIL);
	$client->addScope(Google_Service_Oauth2::PLUS_LOGIN);
	$client->setRedirectUri("http://localhost/TTY/pages/callback.php");

	?>