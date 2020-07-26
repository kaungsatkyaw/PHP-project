
<!DOCTYPE html>
<html>
	<?php include "../includes/header1.php";
		include "connection.php";
		if (strlen($_SESSION['user_one'])==0) {
			header("Location:shopping.php");
		}
		if(!empty($_SESSION['cart']))
		{	
			$count=count($_SESSION['cart']);
		}
		else{
			$count=0;
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
	<div class="clearfix"></div>
	<div style="height: 20px;"></div>
	<div class="deli_frame_outer">
		<div class="row">
			<div class="col-md-9 mb-5" style="padding-right: 5px;">
				<form class="p-5 bg-white" method="POST" action="insert_order.php">
					<h2 class="text-black mb-5" style="font-size: 1.5rem;">Delivery information</h2>
					<div class="row form-group">
						<div class="col-md-6 mb-3 md-mb-0">
							<label class="text-black">Full name</label>
							<input type="text" name="name1" class="form-control" value="<?php echo strtoupper($_SESSION['user_one']); ?>" style="height: 43px;" disabled>
						</div>
						<div class="col-md-6">
							<label class="text-black">Region</label>
							<input type="text" name="region" class="form-control" style="height: 43px;" placeholder="Please enter your region" required>
						</div>
					</div>
					<div class="row form-group" style="margin-top: 20px;">
						<div class="col-md-6 mb-3 md-mb-0">
							<label class="text-black">Phone Number</label>
							<input type="text" name="phone" class="form-control" style="height: 43px;" placeholder="Please enter your phone number" required>
						</div>
						<div class="col-md-6">
							<label class="text-black">City</label>
							<input type="text" name="city" class="form-control" style="height: 43px;" placeholder="please enter your city" required>
						</div>
					</div>
					<div class="row form-group" style="margin-top: 20px;">
						<div class="col-md-6 mb-3 md-mb-0">
							
						</div>
						<div class="col-md-6">
							<label class="text-black">Township</label>
							<input type="text" name="township" class="form-control" style="height: 43px;" placeholder="please enter your township" required>
						</div>
					</div>
					<div class="row form-group" style="margin-top: 40px;">
						<div class="col-md-6 mb-3 md-mb-0">
							
						</div>
						<div class="col-md-6">
							<label class="text-black">Address</label>
							<input type="text" name="address" class="form-control" style="height: 43px;" placeholder="For Example:House# 123,Street# 123 ABC Road" required>
						</div>
					</div>
			</div>
			<div class="col-md-3" style="padding-left: 5px;">
				<div class="p-2 md-3 bg-white">
					<div class="deli_infor_header">
						<h2 class="text-white" style="font-size: 1rem;line-height: 35px;">Place order</h2>
					</div>  
					<h2 class="text-black mb-5" style="font-size: 1.2rem;margin-top: 40px;padding-right: 15px;padding-left: 15px;" >Order Summary</h2>
					<div style="width: 100%">
						<div class="row">
							<div class="col-md-8 mb-3 md-mb-0">
								Subtotal(<?php echo $count;?> items)
							</div>
							<div class="col-md-4" style="text-align: right;">
								$ <?php echo $_SESSION['total'];?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 mb-3 md-mb-0">
								Tax(5%)
							</div>
							<div class="col-md-4" style="text-align: right;">
								$ <?php echo $t=0.05 * $_SESSION['total'];?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-7 mb-3 md-mb-0">
								Total
							</div>
							<div class="col-md-5" style="text-align: right;color:orange;">
								<b>$ <?php echo $t= $t + $_SESSION['total'];
								$_SESSION['t']=$t; ?></b>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12" style="width: 100%;">
								<input type="submit" name="place_order" class="btn place_order_btn" value="Place Order" style="width: 100%;">
							</div>
						</div>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
	<?php 
		if (isset($_SESSION['thank'])) {
					echo '<script>alert("You had been Order!")</script>';
					echo '<script>window.location="clear.php"</script>';
					unset($_SESSION['thank']);
				}
	?>

</body>
</html>