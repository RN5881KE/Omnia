<?php

	session_start();
	print_r($_SESSION['user']);


?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>OMNIA - Home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/api_scripts.js"></script>

</head>
<body>

<nav class=" navbar-default navbar-fixed-top">
    <div class="navbar">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">                  
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Browse <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="categories.php">Categories</a></li> 
                <li role="separator" class="divider"></li>    
                <li><a href="#">Popular Deals</a></li>
                <li><a href="#">Local Deals</a></li>
                <li><a href="#">All Deals</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Watched Items</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Advanced Search</a></li>
              </ul>
            </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tools <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="#">Price Tracking/History</a></li>
                <li><a href="#">Alerts</a></li>
                <li><a href="#">Submit a Deal</a></li>  
                <li role="separator" class="divider"></li>
                <li><a href="#">Coupons/Codes</a></li> 
              </ul>
            </li>
                 <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span>&nbsp&nbspAccount<span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="login.php"><img src = "../images/login.png" /a></li>
                <li><a href="#">Create Account</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="logout.php">Sign out</a></li>
              </ul>
            </li>
                
            </ul>
        </div>
    </div>
    <div class="navbar-brand"> <a href="index.php"><img src="../images/Omnia.PNG" alt="Generic placeholder image" alt=""></div>
</nav>




<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<div class="profile-userpic">
					<img src = "<?=$_SESSION['user']['picture'];?>" class="img-responsive" alt="">
				</div>
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<p><strong><?=$_SESSION['user']['name']; ?></strong></p>
					</div>
					<div class="profile-usertitle-role">
						User
					</div>
				</div>
				<div class="profile-userbuttons">
					
					<button type="button" class="btn btn-danger btn-sm">Online</button>
				</div>
				
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Watch List</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			  <table class="table table-striped">		  	
	<tbody>
		<tr>
			<td>Joined: </td>
			<td>7/23/2018</td>
		</tr>
		<tr>
			<td>Name: </td>
			<td><p><?=$_SESSION['user']['name']; ?></p></td>
		</tr>
		<tr>
			<td>Location: </td>
			<td>$_SESSION</td>
		</tr>
		<tr>
			<td>Google+ Profile</td>
			<td><p><?=$_SESSION['user']['pageLink']; ?></p></td>
		</tr>
		<tr>
			<td>Email Address: </td>
			<td><p><?=$_SESSION['user']['email']; ?></p></td>
		</tr>
	</tbody>
</table>
            </div>
		</div>
	</div>
</div>

<div class="footer">
<p>&copy; 2018 OMNIA, a TTY Company &middot; <a href="#">About</a> &middot; <a href="#">Contact</a> &middot;<a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</div>


</body>
</html>