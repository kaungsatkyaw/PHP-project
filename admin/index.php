<?php 
	session_start();
	include 'connection.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap4/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">

	<script src="../js/js.js"></script>
	<script src="../css/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div style="min-height:100px;">
			
		</div>
		<div class="login">
			<form method="POST" action="login_check.php">
				<h3 align="center"><i class="fa fa-user"></i> Admin Sign In</h3>
				<?php 
				if (isset($_SESSION['message'])) {
					echo '<div class="alert-txt"><i class="fa fa-times"></i> '.$_SESSION['message'].'</div>';
					unset($_SESSION['message']);
				}
				?>	
				<span>Name :</span>
				<input type="text" name="name" required="">
				<div class="clearfix"></div>
				<span>Password :</span>
				<input type="password" name="password" required="" >
				<input type="submit" name="login" value="Sign in" class="btn1 btn btn-primary">
			</form>
			<div class="clearfix"></div>
			<p align="center"><a href="../index.php"><i class="fa fa-arrow-circle-left"> Back</i></a></p>
		</div>
	</div>
</body>
</html>