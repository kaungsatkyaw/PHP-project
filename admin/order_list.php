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
	$userid=$_POST['user_id'];
	$sqli="DELETE FROM order_list WHERE o_id=$userid";
	$delete=mysqli_query($conn,$sqli);
	}else{}
?>
<!DOCTYPE html>
<html>
    <?php include 'header.php'?>
    		<div id="content">
    			<?php include 'content_header.php'; ?>
    			<div style="height: 25px;"></div>
				<h4 style="border-bottom: 1px solid rgba(0,0,0,0.25);padding-bottom: 10px;">Order Lists
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
											<th scope="col">Product lists</th>
											<th scope="col">Name</th>
											<th scope="col">Phone</th>
											<th scope="col">Region</th>
											<th scope="col">City</th>
											<th scope="col">Township</th>
											<th scope="col">Address</th>
											<th scope="col">Total Cost</th>
											<th scope="col">Cancel</th>
										</tr>
									</thead>
									<tbody>
										<?php

											$sql ="SELECT * FROM order_list";
											$run =mysqli_query($conn,$sql);
											while($row = mysqli_fetch_assoc($run))
											{

													echo '
									<tr class="line_items">
										<td>'.$row['o_id'].'</td>
										<td>'.$row['list'].'</td>
										<td>'.$row['name'].'</td>
										<td>'.$row['phone'].'</td>
										<td>'.$row['region'].'</td>
										<td>'.$row['city'].'</td>
										<td>'.$row['township'].'</td>
										<td>'.$row['address'].'</td>
										<td>'.$row['price'].'</td>
									
										<td width="10%">
											<form action="#?pid='.$row['o_id'].'" method="POST">
												<button name="remove" class="btn btn-danger">
													<i class="fa fa-times"></i>
												</button>
												<input type="hidden" name="user_id" value="'.$row['o_id'].'">
											</from>		
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
