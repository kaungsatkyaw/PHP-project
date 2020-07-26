<?php
	include "connection.php";
	session_start();

	if(isset($_POST['login']))
	{		
		$user=$_POST['name'];
		$pass=$_POST['password'];
		$username=mysqli_real_escape_string($conn,$username);
		$password=mysqli_real_escape_string($conn,$password);
		$username=htmlentities($user);
		$password=htmlentities($pass);

		$sql="SELECT * FROM admin WHERE username='$username'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
		if( password_verify($password,$row['password']))
		{
			$_SESSION['name'] = $username;
			header("Location:login.php");
			
		}
		else{
			
			$_SESSION['message']="Username or Password is wrong!";
			header("Location:index.php");
		}

	}

?>