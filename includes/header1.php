<head>
	<title>My Phone</title>
	<link rel="stylesheet" type="text/css" href="../css/phone.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/sidenav.css">
	<link rel="stylesheet" type="text/css" href="../css/cart.css">
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
	<link rel="stylesheet" type="text/css" href="../css/other.css">
	<link rel="stylesheet" type="text/css" href="../css/deliver.css">
	<link rel="stylesheet" type="text/css" href="../css/sweet_alert/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="../css/user-log.css">

	<script src="../js/js.js"></script>
	<script src="../css/sweet_alert/sweetalert.min.js"></script>
	<script src="../css/bootstrap4/dist/js/bootstrap.min.js"></script>
	
</head>
<body>
<header class="navbar navbar-expand-md navbar-dark fixed-top container" style="background-color: transparent;z-index: 1">
      <a class="navbar-brand" href="../index.php" style="font-weight: bold;font-size: 1.5rem;text-shadow: 3px 3px 3px rgba(0,0,0,0.15);"><img src="../img/icon.png" width="50px"> BLUE OWL </a>
      <ul class="ml-auto">
      	 <li><a class="nav-link" href="shopping.php"><i class="fa fa-shopping-cart"></i>
      	 	<?php
      	 		session_start();
      	 		if(isset($_SESSION['cart'])){
      	 			$count=count($_SESSION['cart']);
      	 			echo '<span style="background-color:#fff;padding:0px 5px;color:red;border-radius:35%;">'.$count.'</span>';
      	 		}else{
      	 			echo '<span style="background-color:#fff;padding:0px 5px;color:red;border-radius:35%;">0</span>';
      	 		}
      	 	?></a></li>
      	 <li onclick="opensearch()"><a class="nav-link" href="#"><i class="fa fa-search"></i></a></li>
      	 <li onclick="openNav()" style="cursor: pointer;"><a class="nav-link"><i class="fa fa-list" ></i></a></li>
      </ul>
	</header>


		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="../index.php"><i class="fa fa-home"></i> Home</a>
		  <a href="allphones.php"><i class="fa fa-mobile"></i> All Phones</a>
		  <a href="other_products.php"><i class="fa fa-th-list"></i> Other Products</a>		  		  
		  <a href="shopping.php"><i class="fa fa-shopping-cart"></i> Shopping Cart</a>
		  <a href="contact.php"><i class="fa fa-fax"></i> Contact us</a>
		</div>

		<div id="search" class="search-box">
			<form>
				<input type="text" name="" placeholder="Enter for Search...." class="search-txt">
				<button class="search-btn"><i class="fa fa-search"></i></button>
				<button class="close-btn" onclick="closesearch()"><i class="fa fa-times"></i></button>

			</form>
		</div>

		

