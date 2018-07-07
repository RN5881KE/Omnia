<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>OMNIA - Home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/api_scripts.js"></script>

</head>
<body>
<nav class=" navbar-default navbar-fixed-top">
    <div class="navbar">
        <div class="navbar-header">
        <div class="navbar-brand" href="index.php"><img src="../images/Omnia.PNG" alt="Generic placeholder image" alt=""></div>
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
                <li><a href="#">Categories</a></li> 
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
                <li><a href="#">Login</a></li>
                <li><a href="#">Create Account</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Support</a></li>
              </ul>
            </li>
                
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron text-center">
    <h1>
        <img src="../images/Omnia.PNG"/>
    </h1>
    <p class="subtitle">Finding the best software and techology deals.  </p>
    <form class="form-inline">
        <div class="input-group">
            <input type="search" class="form-control" size="50" placeholder="Search Products..." required>
            <div class="input-group-btn">
                <button type="button" class="btn btn-default">Search</button>
            </div>
        </div>
    </form>
</div>

    
    
    
    
    
<div class="content-container">
        
			<h1><img align="center" style="width: 5%; height:5%" src="../images/desktop.png"> Desktops</h1>
			<table id="info" cellpadding="1" cellspacing="0" border="1" class="datatable table table-striped table-bordered"
                   width="100%" >
				   <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Store</th>


                    </tr>
                </thead>
                <tbody>


                    <?php
             
					require 'db_configuration.php';

                    $sqlDesktop = "select prod_name, sale_price, store_id ".	
					"from products ". 
					"where category_id = 'Desktop'";
					
                    $sqlLaptop = "select prod_name, sale_price, store_id ".	
					"from products ". 
					"where category_id = 'Laptop'";
                    
                    $sqlStorage = "select prod_name, sale_price, store_id ".	
					"from products ". 
					"where category_id = 'Storage'";
                    
                    $sqlPeri = "select prod_name, sale_price, store_id ".	
					"from products ". 
					"where category_id = 'Peripheral'";

                    
					
					
                    
					

                    $result = run_sql($sqlDesktop);


                    if ($result->num_rows > 0) {

                        // output data of each

                        while ($row = $result->fetch_assoc()) {

                        echo '<tr>
                        <td>' . $row["prod_name"] . "</td>
                        <td>" . $row["sale_price"] . "</td>		
                        <td>" . $row["store_id"] . "</td>

						
                        </tr>";
                        }
                    } else {
                        echo "0 results";
                    }

                    $result->close();
                    ?>
					


                </tbody>
                <tfoot>
                    <tr>
                        <th>Name	</th>
                        <th>Price</th>
                        <th>Store</th>


                    </tr>
                </tfoot>

            </table>
    
    
    
    
   
<h1><img align="center" style="width: 5%; height:5%" src="../images/laptop.png"> Laptops</h1>
			<table id="info1" cellpadding="1" cellspacing="0" border="1" class="datatable table table-striped table-bordered"
                   width="100%" >
				   <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Store</th>


                    </tr>
                </thead>
                <tbody>


                    <?php
             
					
                    $sqlDesktop = "select prod_name, sale_price, store_id ".	
					"from products ". 
					"where category_id = 'Laptop'";
					
					

                    $result = run_sql($sqlDesktop);


                    if ($result->num_rows > 0) {

                        // output data of each

                        while ($row = $result->fetch_assoc()) {

                        echo '<tr>
                        <td>' . $row["prod_name"] . "</td>
                        <td>" . $row["sale_price"] . "</td>		
                        <td>" . $row["store_id"] . "</td>

						
                        </tr>";
                        }
                    } else {
                        echo "0 results";
                    }

                    $result->close();
                    ?>
					


                </tbody>
                

            </table>
    
<h1><img align="center" style="width: 5%; height:5%" src="../images/hard-drive.png"> Storage</h1>
			<table id="info2" cellpadding="1" cellspacing="0" border="1" class="datatable table table-striped table-bordered"
                   width="100%" >
				   <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Store</th>


                    </tr>
                </thead>
                <tbody>


                    <?php
             
					
                    $sqlDesktop = "select prod_name, sale_price, store_id ".	
					"from products ". 
					"where category_id = 'Storage'";
					
					

                    $result = run_sql($sqlStorage);


                    if ($result->num_rows > 0) {

                        // output data of each

                        while ($row = $result->fetch_assoc()) {

                        echo '<tr>
                        <td>' . $row["prod_name"] . "</td>
                        <td>" . $row["sale_price"] . "</td>		
                        <td>" . $row["store_id"] . "</td>

						
                        </tr>";
                        }
                    } else {
                        echo "0 results";
                    }

                    $result->close();
                    ?>
					


                </tbody>
                

            </table>

    <h1><img align="center" style="width: 5%; height:5%" src="../images/usb.png"> Peripherals</h1>
			<table id="info3" cellpadding="1" cellspacing="0" border="1" class="datatable table table-striped table-bordered"
                   width="100%" >
				   <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Store</th>


                    </tr>
                </thead>
                <tbody>


                    <?php
             
					
                    $sqlDesktop = "select prod_name, sale_price, store_id ".	
					"from products ". 
					"where category_id = 'Peripheral'";
					
					

                    $result = run_sql($sqlStorage);


                    if ($result->num_rows > 0) {

                        // output data of each

                        while ($row = $result->fetch_assoc()) {

                        echo '<tr>
                        <td>' . $row["prod_name"] . "</td>
                        <td>" . $row["sale_price"] . "</td>		
                        <td>" . $row["store_id"] . "</td>

						
                        </tr>";
                        }
                    } else {
                        echo "0 results";
                    }

                    $result->close();
                    ?>
					


                </tbody>
               

            </table>
    
    
    
    
    
    
    </div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">

        $(document).ready(function () {

            
			$('#info').DataTable();
            $('#info1').DataTable();
            $('#info2').DataTable();
            $('#info3').DataTable();
			
        });

</script>
		


                    
                    
                    
                    
                    
                    
                    
                    
      
<div class="footer">
<p>&copy; 2018 OMNIA, a TTY Company &middot; <a href="#">About</a> &middot; <a href="#">Contact</a> &middot;<a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</div>


</body>
</html>