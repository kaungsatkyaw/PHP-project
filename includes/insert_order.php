<?php 
		include "connection.php";
		session_start();
		if(isset($_POST['place_order'])) {
			$name=strtoupper($_SESSION['user_one']);
			$region=$_POST['region'];
			$phone=$_POST['phone'];
			$city=$_POST['city'];
			$town=$_POST['township'];
			$address=$_POST['address'];
			$list=implode(" ",$_SESSION['order']);
			$t= $_SESSION['t'];
			$sql1 = "INSERT INTO order_list(list,name,phone,region,city,township,address,price)
			VALUES('$list','$name','$phone','$region','$city','$town','$address','$t')";
			$run=mysqli_query($conn,$sql1);
			$_SESSION['thank']="You had been Ordered!";
			header("Location:deliver.php");
		}
		
	?>