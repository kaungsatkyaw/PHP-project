<?php
    include 'connection.php';
    session_start();
	if (strlen($_SESSION['name']) == 0) {
		header('Location:index.php');
	}
    else{

    	$sql1 ="SELECT * FROM admin WHERE username='".$_SESSION['name']."'";
		$run1 =mysqli_query($conn,$sql1);
		$data=mysqli_fetch_assoc($run1);
		$a=$data['type'];
		
?>
<?php

	if(isset($_POST['remove'])){
	$admin=$_POST['id'];
	$sqli="DELETE FROM admin WHERE id=$admin";
	$delete=mysqli_query($conn,$sqli);
	}
?>

<!DOCTYPE html>
<html>
    <?php include 'header.php'?>
    		<div id="content">
    			<?php include 'content_header.php'; ?>
    			<div style="height: 25px;"></div>
				<h4 style="border-bottom: 1px solid rgba(0,0,0,0.25);padding-bottom: 10px;">Admin List
				</h4>
				<h5>Welcome, <span style="text-transform: uppercase;font-weight: bold;">"
			<?php echo $_SESSION['name'];?> "</span></h5>
    			<div class="cart-area-1">
				<div class="container">
					<div class="cart-inner-1">
						<div class="table-responsive">
							<form method="post">
								<table name="cart" class="table">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Admin Name</th>
											<th scope="col">Email</th>
											<th scope="col">Phone</th>
											<th scope="col">Gender</th>
											<th scope="col">Address</th>
											<th scope="col">Type</th>
										<?php if($a=="Main_Admin"){
										echo '<th scope="col">Remove</th>';
										}
										?>	
										</tr>
									</thead>
									<tbody>
										<?php

											$sql ="SELECT * FROM admin";
											$run =mysqli_query($conn,$sql);
											while($row = mysqli_fetch_assoc($run))
											{

													echo '
									<tr class="line_items">
										<td>'.$row['id'].'</td>
										<td>'.$row['username'].'</td>
										<td>'.$row['email'].'</td>
										<td>'.$row['phone'].'</td>
										<td>'.$row['gender'].'</td>
										<td>'.$row['address'].'</td>
										<td>'.$row['type'].'</td>
										';

									
									if($a=="Main_Admin"){
										echo '
										<td width="10%">
											<form action="#?pid='.$row['id'].'" method="POST">
												<button name="remove" class="btn btn-danger">
													<i class="fa fa-times"></i>
												</button>
												<input type="hidden" name="id" value="'.$row['id'].'">
											</form>		
										</td>
									</tr>';
												}
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
    
<?php } ?>
</html>





