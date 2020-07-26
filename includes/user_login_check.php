<?php
		include "connection.php";
		session_start();
		error_reporting(1);
		$email_login=$_POST['email_login'];
		$pass_login=$_POST['pass_login'];
		if(isset($_POST['sub_login']))
		{
		$sql_l ="SELECT * FROM user WHERE u_email='$email_login' AND u_pass='$pass_login'";
		$reslut_l =mysqli_query($conn,$sql_l);
		$row_l=mysqli_fetch_assoc($reslut_l);
		if($row_l['u_email'] == $email_login && $row_l['u_pass'] == $pass_login)
		{
			$_SESSION['user_one']=$row_l['u_name'];
			header("Location:deliver.php");
		}
		else{
			$_SESSION['wrong']= "Password is wrong";
			header("Location:shopping.php");
			
		}
	}
	?>