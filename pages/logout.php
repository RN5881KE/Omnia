<? php
	session_start();
	session_destroy();
?>
<html>
    <head>
        <meta http-equiv="refresh" content="3;url=index.php" />
    </head>
    <body>
        <h1>Redirecting in 3 seconds...</h1>
    </body>
</html>


<?php
include_once 'config.php';
unset($_SESSION['token']);
unset($_SESSION['userData']);
$gClient->revokeToken();
session_destroy();
header("Location:index.php");
?>