<?php
	include 'connection.php';
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Registration</title>
	<?php include 'header.php'; 
	if(isset($_POST['a-submit'])){
		$name=$_POST['a_name'];
		$email=$_POST['a_email'];
		$pass=password_hash($_POST['a_pass'], PASSWORD_DEFAULT);
		$phone=$_POST['a_phone'];
		$gender=$_POST['chk1'];
		$address=$_POST['a_add'];
		$type=$_POST['type'];
		$query="SELECT * FROM admin WHERE email='$email'";
			$run1 =mysqli_query($conn,$query);
			if(mysqli_num_rows($run1) > 0)
			{ 	
				echo '<script>alert("User already Exist!")</script>';
				echo '<script>window.location="admin_register.php"</script>';
			}
			else {
				$sql="INSERT INTO admin(username,password,email,phone,gender,address,type)VALUES('$name','$pass','$email','$phone','$gender','$address','$type')";
				$run=mysqli_query($conn,$sql);
				echo '<script>alert("Register Successful!")</script>';
				echo '<script>window.location="admin_list.php"</script>';
			}
	}
	?>
	<div id="content">
		<?php include 'content_header.php'; ?>
		<div style="height: 25px;"></div>
		<h4 style="border-bottom: 1px solid rgba(0,0,0,0.25);padding-bottom: 10px;">Admin Registration
		</h4>

		<div style="height: 20px;"></div>
		<form action="#" method="post">
			<div class="form-group">
				<div class="row">
					<div class="col-sm-2" id="t-width" style="text-align:right;padding:5px;font-weight: bold;">
						<label for="n">Name* :</label>
					</div> 
					<div class="col-sm-9" id="t-width1" >
						<div class="input-group mb-3">
							<div class="input-group-prepend">
		                    <span class="input-group-text"><i class="fas fa-user"></i></span>
		                 </div>
						<input type="text" class="form-control" placeholder="Enter Your Name..." name="a_name" id="n" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2" id="t-width" style="text-align:right;padding:5px;font-weight: bold;">
						<label for="n1">Email* :</label>
					</div> 
					<div class="col-sm-9" id="t-width1" >
						<div class="input-group mb-3">
							<div class="input-group-prepend">
		                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
		                 </div>
						<input type="email" class="form-control" placeholder="Enter Your Email..." name="a_email" id="n1" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2" id="t-width" style="text-align:right;padding:5px;font-weight: bold;">
						<label for="n2">Password* :</label>
					</div> 
					<div class="col-sm-9" id="t-width1" >
						<div class="input-group mb-3">
							<div class="input-group-prepend">
		                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
		                 </div>
						<input type="password" class="form-control" placeholder="Enter Your Password..." name="a_pass" id="n2" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2" id="t-width" style="text-align:right;padding:5px;font-weight: bold;">
						<label for="n3">Phone* :</label>
					</div> 
					<div class="col-sm-9" id="t-width1" >
						<div class="input-group mb-3">
							<div class="input-group-prepend">
		                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
		                 </div>
						<input type="text" class="form-control" placeholder="Enter Your Phone..." name="a_phone" id="n3" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2" id="t-width" style="text-align:right;padding:5px;font-weight: bold;">
						<label>Gender* :</label>
					</div>
					<div class="col-sm-9" id="t-width1">
							<input type="radio" name="chk1" checked style="margin-left: 20px;" value="male"> Male
							<input type="radio" name="chk1" style="margin-left: 20px;" value="female"> Female
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2" id="t-width" style="text-align:right;padding:5px;font-weight: bold;">
						<label for="n4">Address* :</label>
					</div> 
					<div class="col-sm-9" id="t-width1">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
		                    <span class="input-group-text"><i class="fas fa-plus"></i></span>
		                 </div>
						<input type="text" class="form-control" placeholder="Enter Your Address..." name="a_add" id="n4" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2" id="t-width" style="text-align:right;padding:5px;font-weight: bold;">
						<label>Admin Type* :</label>
					</div> 
					<div class="col-sm-9" id="t-width1">
						<select class="form-control" required="" name="type">
							<option value="Main_Admin">Main_Admin</option>
							<option value="Co-Admin">Co-Admin</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2" id="t-width" style="">
						
					</div> 
					<div class="col-sm-9" id="t-width1">
						<div style="height: 20px;"></div>
						<button class="btn btn-info btn-xs" type="submit" name="a-submit"><i class="fa fa-user"></i> Add Admin</button>
						<button class="btn btn-danger btn-xs" type="reset"><i class="fa fa-sync-alt"></i> Reset</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	<?php include 'footer.php' ?>
</html>