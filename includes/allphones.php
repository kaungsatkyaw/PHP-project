<!DOCTYPE html>
<html>
	<?php include "../includes/header1.php";?>
	<?php require_once '../includes/connection.php'; 
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
					'qty' 		=> $_POST['qty']
				);
				$_SESSION['cart'][0]=$item_array;
				
			}
		}
	?>

	<section>
		<div class="container-fluid">			
			<ul class="title">
				<a href="../index.php"><li id="active">Home</li></a>
				<a href="../includes/allphones.php"><li id="active" class="active1">Phones</li></a>
				<a href="../includes/other_products.php"><li>Other Products</li></a>
			</ul>
		</div>
	</section>
	<div class="container-fluid">
		<div style="height: 50px;text-align:center;">
			<h5 style="color: #757575;padding:10px;">ALL XIAOMI PRODUCTS</h5>
		</div>
		<div class="row">
			<div class="col-md-3" style="padding: 0;box-shadow:0 0.25rem 0.95rem rgba(0, 0, 0, .35);">
				 <img class="card-img-top" src="../img/phone/sale.jpg">
				 <div id="search-one">
				 	<form>
				 		<input type="text" name="" placeholder="Search here...">
				 		<button type="submit"><i class="fa fa-search"></i></button>
				 	</form>
				 	<h5 style="padding: 10px 0;">Latest Products</h5>
				 	<table class="table">
				 		<tbody>
				 			<tr>				 				
				 				<th scope="col">
				 					<img src="../img/phone/mi-6x.jpg" width="100%" style="border:1px solid rgba(0,0,0,0.5);">
				 				</th>
				 				<th scope="col" width="50%">
				 					<h6>Mi - 6x</h6>
				 					<small class="text-muted">$180</small>
				 				</th>
				 			</tr>
				 			<tr>				 				
				 				<th scope="col">
				 					<img src="../img/phone/mi-6x.jpg" width="100%" style="border:1px solid rgba(0,0,0,0.5);">
				 				</th>
				 				<th scope="col" width="50%">
				 					<h6>Mi - 6x</h6>
				 					<small class="text-muted">$180</small>
				 				</th>
				 			</tr>
				 			<tr>				 				
				 				<th scope="col">
				 					<img src="../img/phone/mi-6x.jpg" width="100%" style="border:1px solid rgba(0,0,0,0.5);">
				 				</th>
				 				<th scope="col" width="50%">
				 					<h6>Mi - 6x</h6>
				 					<small class="text-muted">$180</small>
				 				</th>
				 			</tr>
				 			
				 		</tbody>
				 	</table>
				 </div>
				 
			</div>
			<div class="col-md-9">
				<div class="row">
					<?php
				    		$sql ="SELECT * FROM phone";
				    		$run =mysqli_query($conn,$sql);
				    		while($row = mysqli_fetch_assoc($run)){
				    			 $i=$row['p_img'];
				    	echo '		
				    <div class="col-md-4">
		              <div class="card mb-4" style="box-shadow:0 0.25rem 0.95rem rgba(0, 0, 0, .15);">
		                <img class="card-img-top" src="../admin/image/'.$i.'" height="200px" id="ph">
		                <div class="card-body">
		                	<h6><b>'.$row['p_name'].'</b></h6>
		                	<p style="line-height: 0.50px" class="text-muted"><small>'.$row['p_txt'].'</small></p>
		                	<p class="price">$ '.$row['p_price'].'</p>
		                		<form action="allphones.php" method="post">
		                		<button type="submit"  class="cart-btn" name="add_to_cart"><i class="fa fa-shopping-cart"></i></button>
		                			<input type="hidden" name="product_id" value="'.$row['p_id'].'">
		                			<input type="hidden" name="qty" value="1">
		                		</form>
		                		<a href="view.php?id='.$row['p_id'].'"><button type="submit" class="detail-btn">View</button></a>

		                	
		                </div>
		              </div>
			        </div>';

				    		}
				    	?>
				    
					 
		              
			        </div>
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