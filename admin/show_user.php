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
	$sqli="DELETE FROM user WHERE id=$userid";
	$delete=mysqli_query($conn,$sqli);
	}
?>
<!DOCTYPE html>
<html>
    <?php include 'header.php'?>
    		<div id="content">
    			<?php include 'content_header.php'; ?>
    			<div style="height: 25px;"></div>
				<h4 style="border-bottom: 1px solid rgba(0,0,0,0.25);padding-bottom: 10px;">User Lists
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
											<th scope="col">Username</th>
											<th scope="col">Email</th>
											<th scope="col">Phone NO</th>
											<th scope="col">Remove</th>
										</tr>
									</thead>
									<tbody>
										<?php

											$sql ="SELECT * FROM user";
											$run =mysqli_query($conn,$sql);
											while($row = mysqli_fetch_assoc($run))
											{

													echo '
									<tr class="line_items">
										<td>'.$row['id'].'</td>
										<td>'.$row['u_name'].'</td>
										<td>'.$row['u_email'].'</td>
										<td>'.$row['u_phone'].'</td>
										<td width="10%">
											<form action="#?pid='.$row['id'].'" method="POST">
												<button name="remove" class="btn btn-danger">
													<i class="fa fa-times"></i>
												</button>
												<input type="hidden" name="user_id" value="'.$row['id'].'">
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
