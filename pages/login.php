<?php
	require_once('config.php');
	$authURL = $client->createAuthURL();
	header("location: ".$authURL);


?>