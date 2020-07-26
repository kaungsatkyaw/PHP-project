<?php
	include 'connection.php';
	session_start();
	if (strlen($_SESSION['name']) == 0) {
		header('Location:index.php');
	}
	else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	   <?php include 'header.php' ?>

        <!-- Page Content  -->
        <div id="content">
            <?php include 'content_header.php'; ?>
            <div style="height: 25px;"></div>
            <h2>DashBoard</h2>
            <div class="row">
            	<div class="col-md-3">
	              <div class="card mb-4"  style="background:#17a2b8;">
	                <div class="card-body">
	                	<i class="fas fa-shopping-basket"></i>
	                 	<h1>
	                 		<?php 
	                 			$order="SELECT COUNT(o_id) as count FROM order_list";
	                 			$run_o=mysqli_query($conn,$order);
	                 			$result_o=mysqli_fetch_assoc($run_o);
	                 			echo $result_o['count'];
	                 		?>
	                 	</h1>
	                  	<small>Orders</small>
	                </div>
	                 <a href="#"><button>More info <i class="fa fa-arrow-circle-right"></i></button></a>
	              </div>
	            </div>
	            <div class="col-md-3">
	              <div class="card mb-4"  style="background:#28a745;">
	                <div class="card-body">
	                  	<i class="fas fa-users"></i>
	                 	<h1>
	                 		<?php 
	                 			$user1="SELECT COUNT(id) as count FROM user";
	                 			$run_u=mysqli_query($conn,$user1);
	                 			$result_u=mysqli_fetch_assoc($run_u);
	                 			echo $result_u['count'];
	                 		?>
	                 	</h1>
	                  	<small>Customers</small>
	                </div>
	                 <a href="#"><button>More info <i class="fa fa-arrow-circle-right"></i></button></a>
	              </div>
	            </div>
	            <div class="col-md-3">
	              <div class="card mb-4"  style="background:#ffc107;">
	                <div class="card-body">
	                	<i class="fas fa-user"></i>
	                 	<h1>
	                 		<?php 
	                 			$admin="SELECT COUNT(id) as count FROM admin";
	                 			$run_a=mysqli_query($conn,$admin);
	                 			$result_a=mysqli_fetch_assoc($run_a);
	                 			echo $result_a['count'];
	                 		?>
	                 	</h1>
	                  	<small>Admin</small>
	                </div>
	                 <a href="#"><button>More info <i class="fa fa-arrow-circle-right"></i></button></a>
	              </div>
	            </div>
	            <div class="col-md-3">
	              <div class="card mb-4"  style="background:#dc3545;">
	                <div class="card-body">
	                	<i class="fas fa-mobile"></i>
	                	<h1>
	                			<?php 
	                 			$phone="SELECT COUNT(p_id) as count FROM phone";
	                 			$run_p=mysqli_query($conn,$phone);
	                 			$result_p=mysqli_fetch_assoc($run_p);
	                 			echo $result_p['count'];
	                 		?>
	                	</h1>
	                  	<small>All Products</small>
	                 
	                </div>
	                 <a href="#"><button>More info <i class="fa fa-arrow-circle-right"></i></button></a>
	              </div>
	            </div>

            </div>
            <h5>Phones</h5>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">IMAGE</th>
                        <th scope="col">NAME</th>                        
                        <th scope="col">Price</th>
                        <th scope="col">QTY</th>
                        <th scope="col">Remove</th>
                    </tr>
                </thead>
                <?php 
                    $sql = "SELECT * FROM phone";
                    $run = mysqli_query($conn,$sql);
                    while ($row = mysqli_fetch_assoc($run)) {
                        echo '
                             <tbody>
                                <tr>
                                    <td >'.$row['p_id'].'</td>
                                    <td>
                                        <img src="image/'.$row['p_img'].'" width="100px" style="border:1px solid rgba(0,0,0,0.25);">
                                    </td>
                                    <td>'.$row['p_name'].'</td>
                                    <td>'.$row['p_price'].'</td>
                                    <td>'.$row['qty'].'</td>
                                    <td><button class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit</button></td>
                                </tr>
                            </tbody>
                        ';
                    }
                ?>
            </table>
           
        </div>
    </div>
    <?php include 'footer.php'; ?>
</html>
<?php } ?>