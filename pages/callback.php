<?php
	require_once('config.php');
	
	

	if(isset($_SESSION['accessToken'])){
		$client->setAccessToken($_SESSION['accessToken']);
	} else if (isset($_GET['code'])) {
    	$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    	$_SESSION['accessToken'] = $token;
	} else {
		header("location: index.php");
	}

	

	$oAuth = new Google_Service_Oauth2($client);
	$user = $oAuth->userinfo->get();

	//echo "<pre>";   // for testing
	//print_r($user);exit; //Checking results first for testing

	$userData['name'] = $user->name;
	$userData['email'] = $user->email;
	$userData['gender'] = $user->gender;
	$userData['pageLink'] = $user->link;
	$userData['picture'] = $user->picture;
	$userdata['givenName'] = $user->givenName;

	$_SESSION['user'] = $userData;




	header("location: userinfo.php");
	
?>

