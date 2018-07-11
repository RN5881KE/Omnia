<?php

	session_start();


	$_SESSION["id"] = 
	$_SESSION["name"] = 
	$_SESSION["email"] = 




	$sql = "SELECT * FROM users WHERE email='".$_POST["email"]."'";
	$result = run_sql->query($sql);
	


	if(!empty($result->())){
		$sql2 = "UPDATE users SET google_id='".$_POST["id"]."' WHERE email='".$_POST["email"]."'";
	}else{
		$sql2 = "INSERT INTO users (name, email, google_id) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["id"]."')";
	}

	$mysqli->query($sql2);


	echo "Done";
?>