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
	<?php include 'header.php'?>
	<div id="content">
    			<?php include 'content_header.php'; ?>
    			<div style="height: 25px;"></div>
				<h4 style="border-bottom: 1px solid rgba(0,0,0,0.25);padding-bottom: 10px;">Edit product
				</h4>
		<?php
						$g=$_GET['id'];
						$sql="SELECT * FROM phone WHERE p_id = '$_GET[id]'";
						$run=mysqli_query($conn,$sql);
						while ($row = mysqli_fetch_assoc($run)) {
							if(isset($_POST['submit2'])){
		$filename=$_FILES["file"]['name'];
		$name1=$_POST['name1'];
		$des=$_POST['description'];
		$price=$_POST['price'];
		$category=$_POST['category'];
		$qty=$_POST['qty'];
		if(!empty($filename)){
		$run1="UPDATE phone SET p_img='$filename',p_name='$name1',p_txt='$des',p_price='$price',category='$category',qty='$qty' WHERE p_id = '$_GET[id]'";
		$ok1=mysqli_query($conn,$run1);
		}
		else{
		$run1="UPDATE phone SET p_img='$row[p_img]',p_name='$name1',p_txt='$des',p_price='$price',category='$category',qty='$qty' WHERE p_id = '$_GET[id]'";
		$ok1=mysqli_query($conn,$run1);
			$err1="<font size='+2'>Update successfully</font>";
		}	
		if($ok1)			
			   {
					move_uploaded_file($_FILES['file']['tmp_name'],"image/".$_FILES['file']['name']);	
		  // move_uploaded_file($_FILES['file']['tmp_name'],"itempics/$itemno.jpg");
				
			   	echo '<script>alert("Item updated successfully!")</script>';
				echo '<script>window.location="show_product.php"</script>';
			
				}
			else
			 {
			   echo "item is not inserted";
			   }	 
			   
		}
							echo '<div class="container1 insert_1">
		<div class="row">
			<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
				<div class="tm-bg-primary-dark tm-block tm-block-h-auto">
					<div class="row">
						<div class="col-12">
							<h2 class="tm-block-title d-inline-block">Edit Product</h2>
						</div>
					</div>
					<form method="post" class="tm-edit-product-form" enctype="multipart/form-data">
					<div class="row tm-edit-product-row">
						<div class="col-xl-6 col-lg-6 col-md-12">
							
								<div class="form-group mb-3">
									<label for="name">Product Name</label>
									<input type="text" name="name1" class="form-control validate" value="'.$row['p_name'].'" required>
								</div>
								<div class="form-group mb-3">
									<label for="description">Description</label>
									<textarea class="form-control validate" name="description" rows="3" cols="20" style="height: auto;" required>'.$row['p_txt'].'</textarea>
								</div>
								<div class="form-group mb-3">
									<label for="price">Price</label>
									<input type="text" name="price" class="form-control validate" value="'.$row['p_price'].'" required>
								</div>
								<div class="form-group mb-3">
									<label for="category">Category</label>
									<select class="custom-select" name="category">
										<option selected>Select category</option>
										<option>Mi</option>
										<option>Redmi</option>
									</select>
								</div>
								<div class="row">
									<div class="form-group mb-3 col-xs-12 col-sm-6">
										<label for="qty">Units in stock</label>
										<input type="text" name="qty" value="'.$row['qty'].'" class="form-control validate" required>
									</div>
								</div>
							
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
							<div class="tm-product-img mx-auto" id="image_pre">
								<img src="../admin/image/'.$row['p_img'].'" width="100%" height="100%" class="image-preview_image">					
							</div>
							<div class="custom-file mt-3 mb-3">
								
								 ';?>
								 <input type="button" name="btn_upload" class="btn btn-primary btn-block mx-auto" id="BtnUpload" value="UPLOAD PRODUCT IMAGE">
								<input name="file" type="file" id="fileinput" style="display: none;">
								<script>
									$('#BtnUpload').click(function(){
										$('#fileinput').click();
									});
							
								</script>
								
						<?php echo
      							'</div>
						</div>
						<div class="col-12">
							<button type="submit" class="btn btn-primary btn-block text-uppercase" name="submit2">Add Product Now</button>
						</div>
					</div>
				</form>
				';
						}
				
		?>	
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
</body>
<?php } ?>
</html>