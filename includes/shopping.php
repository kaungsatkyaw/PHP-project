<!DOCTYPE html>
<html>
	<?php include "../includes/header1.php";
			include 'connection.php'; 
			if (isset($_POST['remove'])) {
				if ($_GET["action"] == "delete") {
					foreach ($_SESSION["cart"] as $keys => $values) {
						if($values["product_id"]== $_GET["pid"]){
							unset($_SESSION["cart"][$keys]);
							echo '<script>alert("Item Removed")</script>';
							echo '<script>window.location="shopping.php"</script>';
						}
					}
				}
			}

	?>
	
<body>
	<div style="position: relative;" class="background banner">
		<div class="container">
			<div class="sss d-flex align-items-cente justify-content-end flex-wrap">
				<div class="col-f">
					<h1>Shopping Cart</h1>
				</div>
			</div>
		</div>
		<div class="container-fluid">			
			<ul class="title1">
				<a href="../index.php"><li>Home</li></a>
				<a href="../includes/allphones.php"><li>Phones</li></a>
				<a href="../includes/other_products.php"><li>Other Products</li></a>
			</ul>
		</div>
	</div>

<div class="cart-area">
		<div class="container">
			<div class="cart-inner">
				<div class="table-responsive">
					<table name="cart" class="table">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Name</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
								<th scope="col">Remove</th>
							</tr>
						</thead>
						<tbody>
								
							<?php
								$total=0;
								$z=[];
								if(!empty($_SESSION["cart"])){
								$sql ="SELECT * FROM phone";
				    			$run =mysqli_query($conn,$sql);
				    			while($row = mysqli_fetch_assoc($run)){
				    				foreach ($_SESSION['cart'] as $id) {
				    					if($row['p_id'] == $id['product_id']){
				    						echo '<tr name="line_items">
								<td>
									<div class="media">
										<div class="d-flex" style="width: 200px;">
											<img src="../admin/image/'.$row['p_img'].'" style="width:100%;">
										</div>
										<div class="media-body">
											<p></p>
										</div>
									</div>
								</td>
								<td>
									<h5>'.$row['p_name'].'</h5>
								</td>
								<td>
									<h5><input type="text" name="price" class="input-text form-control form-control-sm" value="$ '.$row['p_price'].'" style="width:100px;text-align: center;"  disabled></h5>
								</td>

								<td>
									<div class="product-count">
									<ul>
										<li><input type="text" name="qty" value="';echo $id['qty'] ; echo'"disabled class="input-text form-control form-control-sm"></li>
									</ul>										
									</div>
								</td>

								<td>
									<input type="text" value="$ '; echo  $row['p_price']*$id['qty']; echo'" disabled class="input-text form-control form-control-sm" style="width: 100px;text-align: center; ">
								</td>
								<td width="10%">
									<form action="shopping.php?action=delete&pid='.$row['p_id'].'" method="POST">
										<button name="remove" type="submit" class="btn btn-danger">
											<i class="fa fa-times"></i>
										</button>
									</form>
								</td>
							</tr>
							';
										$total =$total + ((int)$row['p_price']*$id['qty']);
										$name=$row['p_name'].', ';
										$qty='qty = '.$id['qty'].',';
										$c=$name.$qty;
										array_push($z, $c);
				    					}
				    				}
				    			}
				    		}else{
				    			echo "<h5>Your cart is empty!</h5>";
				    		}
				    		$_SESSION['order']=$z;
				    		$_SESSION['total']=$total;
							?>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td><h5>Subtotal</h5></td>
								<td><input type="text" name="sub_total" class="form-control form-control-sm" value="<?php echo "$ $total";?>" disabled></td>
							</tr>
							
						</tbody>
					</table>
				</div>
				<a href="#"><button class="btn" id="shop-btn"  data-toggle="modal" data-target="#exampleModal">Continue to Payment</button></a>
			</div>
		</div>
	</div>

<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><h2 class="login_text">LOGIN</h2></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<!--  login boX -->
			  
				 <form method="POST" action="user_login_check.php">
					<div class="input_box">
						<input type="email" name="email_login" required="">
						<label>Email</label>
					</div>
					<div class="input_box">
						<input type="password" name="pass_login" required="">
						<label>password</label>
					</div>
					 <input type="submit" class="ok" name="sub_login" value="Submit"> 
					<h2 class="or">Or login with</h2>
					<div style="height: 10px;"></div>
					<div class="container">
						<div class="row">
							<div class="mb-4 or_login"><i class="fab fa-facebook-square fa-1.5x"></i><b><text>Facebook</text></b></div>
							<div class="mb-4 or_login"><i class="fab fa-google" style="color:gray;"></i><b><text style="color:black;">Google</text></b></div>
						</div>
					</div>
					
					<h4 class="sign_up_text">Not a member? <a href="register.php" data-toggle="modal" data-target="#exampleModal2">Sign up now</a></h4>
					
				</form>


	      </div>
	      
	    </div>
	  </div>
	</div>
	<?php 
				if (isset($_SESSION['wrong'])) {
					echo "<script>
					swal('Wrong Password!')
					</script>";
					unset($_SESSION['wrong']);
				}
	?>	
	
	<!-- Modal_regis -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	      	<h5>REGISTER NOW!</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<!--  login boX -->
						<div class="s_box_2">
							 <form method="post" name="contact">
								<div class="input_box">
									<input type="text" name="name" required>
									<label>Username</label>
								</div>
								<div class="input_box">
									<input type="email" name="email" required="">
									<label>Email</label>
								</div>
								<div class="input_box">
									<input type="text" name="ph" required="">
									<label>Phone</label>
								</div>
								<div class="input_box">
									<input type="password" name="password" required="">
									<label>Password</label>
								</div>
								<div class="input_box">
									<input type="password" name="comfirm-pass" required="">
									<label>Cofirm password</label>
								</div>
								<input type="submit" class="ok" name="sub" value="Create Account">
								</form>
							</div>
	      </div>
	      
	    </div>
	  </div>
	</div>
	<?php
		error_reporting(1);
		if(isset($_POST['sub']))
		{ 
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['ph'];
			$password=$_POST['password'];
			$comfirm=$_POST['comfirm-pass'];
			$query="SELECT * FROM user WHERE u_email='$email'";
			$run1 =mysqli_query($conn,$query);
			if(mysqli_num_rows($run1) > 0)
			{ 	
				echo "<script>;
				swal('user already exist!')
				</script>";
			}
			else {
				if($password==$comfirm)
				{
					$sql="INSERT INTO user(u_name,u_email,u_phone,u_pass) VALUES('$name','$email','$phone','$password')";
						$run =mysqli_query($conn,$sql);
						echo "<script >
						swal('Good job!', 'You have been registered!', 'success')
						</script>";
				}
				else{
					echo "<script>
					swal('Passwords are not match!')
					</script>";
					}
				}
			}	
		?>
	<?php include 'footer.php'; ?>
	<script>
	function openNav() {
	  document.getElementById("mySidenav").style.width = "300px";
	}

	function closeNav() {
	  document.getElementById("mySidenav").style.width = "0";
	}
	function opensearch(){
		document.getElementById("search").style.display = "block"
	}
	function closesearch(){
		document.getElementById("search").style.display = "none"
	}
</script>
</body>
</html>