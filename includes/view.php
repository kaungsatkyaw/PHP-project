<!DOCTYPE html>
<html>
	<?php include "../includes/header1.php";?>
	<?php include '../includes/connection.php'; 
	if(isset($_POST['add_to_cart'])){
			if (isset($_SESSION['cart'])) {
				$item_array_id=array_column($_SESSION['cart'], "product_id");
		
				if(in_array($_POST['product_id'], $item_array_id)){
					echo "<script>alert('Product is already added')</script>";
					echo "<script>window.location='shopping.php'</script>";
				}
				else{
					$count=count($_SESSION['cart']);
					$item_array=array(
						'product_id' => $_POST['product_id'],
						'qty' 		=> $_POST['qty']
					);

					$_SESSION['cart'][$count]=$item_array;

				}
			}
			else{
				$item_array=array(
					'product_id' => $_POST['product_id'],
					'qty'	=>  $_POST['qty']
				);
				$_SESSION['cart'][0]=$item_array;

			}
		}


	?>

	<section>
		<div class="container-fluid">			
			<ul class="title">
				<a href="../index.php"><li id="active">Home</li></a>
				<a href="../includes/allphones.php"><li id="active">Phones</li></a>
				<a href="../includes/other_products.php"><li>Other Products</li></a>
			</ul>
		</div>
	</section>
	<div class="container">
		<div style="height: 50px;"></div>
				<div class="row">
					<?php
						$sql="SELECT * FROM phone WHERE p_id = '$_GET[id]'";
						$run=mysqli_query($conn,$sql);
						while ($row = mysqli_fetch_assoc($run)) {
							echo '
					<div class="col-sm-5" style="padding:0px;">
						<img src="../admin/image/'.$row['p_img'].'" width="100%" style="border: 1px solid rgba(0,0,0,0.25);">
						<ul class="view">
							<li><img src="../admin/image/'.$row['p_img'].'" width="100%"></li>
							<li><img src="../admin/image/'.$row['p_img'].'" width="100%"></li>
							<li><img src="../admin/image/'.$row['p_img'].'" width="100%"></li>
						</ul>
					</div>
					<div class="col-sm-7" style="padding:0 35px;">						
					<div style="height: 10px;"></div>
						<div class="view-txt" >
							<p class="view-txt-heading">'.$row['p_name'].'</p>
							<p style="font-size: 1.2rem;"><b>$ '.$row['p_price'].'</b></p>
							<h5><span class="img-icon"><i class="fa fa-mobile"></i></span>Phone Details</h5>
							<br>
							<ul class="v-detail">
								<li>CUP : SnapDragon - 660</li>
								<li>RAM : SnapDragon - 660</li>
								<li>Camera : SnapDragon - 660</li>
								<li>Storage : SnapDragon - 660</li>
								<li>Battery : SnapDragon - 660</li>
							</ul>
							<p><span class="img-icon"><i class="fa fa-hand-o-right"></i></span><b> 1 YearManufacturer Warranty</b></p>

							<h5>Avaliable Colors</h5>
							<ul class="v-color">
								<li class="color1"></li>
								<li class="color2"></li>
								<li class="color3"></li>
								<li class="color4"></li>
							</ul>					

							<div style="clear: both;margin-bottom: 30px;"></div>
							<form action="#" method="post">
							<h5>Quantity</h5>
							<input type="number" min="1" max="'.$row['qty'].'" value=1 name ="qty" style="text-align:center;padding:5px;margin-right:20px;">
							<input type="hidden" name="product_id" value="'.$row['p_id'].'">
								<button class="v-btn" name="add_to_cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
								
							</form>
						</div>
					</div>
							';
						}
					?>
					
				</div>
				<div class="container">
					<h4 id="txt">FEATURED PRODUCTS</h4>
					<div class="row">
					<?php
						$sql1= "SELECT * FROM phone WHERE p_id <> '$_GET[id]' ORDER BY p_id LIMIT 4 ";
						$run1= mysqli_query($conn,$sql1);
						while($rows = mysqli_fetch_assoc($run1)){
							echo '
						<div class="col-md-3" style="padding: 0 5px;">
			              <div class="card mb-4" style="box-shadow:0 0.25rem 0.95rem rgba(0, 0, 0, .15);">
			                <img class="card-img-top" src="../admin/image/'.$rows['p_img'].'">
			                <div class="card-body">
			                	<h6><b>'.$rows['p_name'].'</b></h6>
			                	<hr>
			                	<p class="price">$ '.$rows['p_price'].'</p>
			                	<form action="view.php?id='.$rows['p_id'].'" method="post">
			                	<button type="submit" class="detail-btn" ">View</button>
			                	</form>
			                </div>
			              </div>
			        	</div>
							';
						}
					?>
					</div>
				</div>
		</div>
	</div>
	<div style="height: 25px;"></div>


	<?php include "../includes/footer.php" ?>
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
</html>