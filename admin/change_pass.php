<?php
	include 'connection.php';
	session_start();
	if (strlen($_SESSION['name']) == 0) {
		header('Location:index.php');
	}
	else{
		if (isset($_POST['confirm'])) {
			$current = $_POST['current_pass'];
			$new	= $_POST['new_pass'];
			$confirm = $_POST['confirm_pass'];
			$sql = "SELECT * FROM admin WHERE username='$_SESSION[name]'";
			$run = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($run);
				if (password_verify($current, $row['password']) ) {
					if ($new==$confirm) {
						$pass=password_hash($new,PASSWORD_DEFAULT);
						$update="UPDATE admin SET password='$pass' WHERE username='$_SESSION[name]'";
						$run1=mysqli_query($conn,$update);
						$_SESSION['ok']="Password Changed Successfully!";
						header("Location:edit.php");
					}
					else{
						$_SESSION['ok']="Password didn't match!";
						header("Location:edit.php");
					}
				}
				else{
					$_SESSION['ok']="Your current password is wrong!";
					header("Location:edit.php");
				}
			
			
		}
	}

?>