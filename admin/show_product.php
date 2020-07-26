<?php
    include 'connection.php';
    session_start();
	if (strlen($_SESSION['name']) == 0) {
		header('Location:index.php');
	}
    else{
?>
<?php

	if(isset($_POST['remove'])){
	$productid=$_POST['product_id'];
	$sqli="DELETE FROM phone WHERE p_id=$productid";
	$delete=mysqli_query($conn,$sqli);
	}else{}


?>
<!DOCTYPE html>
<html>
    <?php include 'header.php'?>
    		<div id="content">
    			<?php include 'content_header.php'; ?>
    			<div style="height: 25px;"></div>
				<h4 style="border-bottom: 1px solid rgba(0,0,0,0.25);padding-bottom: 10px;">Product Lists
				</h4>
    			<div class="cart-area-1">
				<div class="container">
					<div class="cart-inner-1">
						<div class="table-responsive">
							<form method="post">
								<table name="cart" class="table">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Image</th>
											<th scope="col">Phone Name</th>
											<th scope="col">Quantity</th>
											<th scope="col">Description</th>
											<th scope="col">Price</th>
											<th scope="col">Category</th>
											<th scope="col">Remove</th>
											<th scope="col">Edit</th>
										</tr>
									</thead>
									<tbody>
										<?php

											$sql ="SELECT * FROM phone";
											$run =mysqli_query($conn,$sql);
											while($row = mysqli_fetch_assoc($run))
											{
												$i=$row['p_img'];
													echo '
									<tr class="line_items">
										<td>'.$row['p_id'].'</td>
										<td><img style="width:100px;height: 100px;" src="../admin/image/'.$i.'"></td>
										<td>'.$row['p_name'].'</td>
										<td>'.$row['qty'].'</td>
										<td>'.$row['p_txt'].'</td>
										<td>'.$row['p_price'].'</td>
										<td>'.$row['category'].'</td>
										<td width="10%">
											<form action="#?pid='.$row['p_id'].'" method="POST">
												<button name="remove" class="btn btn-danger">
													<i class="fa fa-times"></i>
												</button>
												<input type="hidden" name="product_id" value="'.$row['p_id'].'">
											</from>
										</td>
										<td width="10%">
											<a href="edit_product.php?id='.$row['p_id'].'" name="edit"><i class="fas fa-edit fa-2x"></i></a>
										</td>
									</tr>';

												}

										?>
									</tbody>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
    	</div>
    	<?php include "footer.php";?>

</body>
<?php } ?>
</html>
