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
				<h4 style="border-bottom: 1px solid rgba(0,0,0,0.25);padding-bottom: 10px;">User Lists
				</h4>

	<div class="container1 insert_1">
		<div class="row">
			<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
				<div class="tm-bg-primary-dark tm-block tm-block-h-auto">
					<div class="row">
						<div class="col-12">
							<h2 class="tm-block-title d-inline-block">Add Product</h2>
						</div>
					</div>
					<form method="post" class="tm-edit-product-form" action="upload.php" enctype="multipart/form-data">
					<div class="row tm-edit-product-row">
						<div class="col-xl-6 col-lg-6 col-md-12">
							
								<div class="form-group mb-3">
									<label for="name">Product Name</label>
									<input type="text" name="name1" class="form-control validate" required>
								</div>
								<div class="form-group mb-3">
									<label for="description">Description</label>
									<textarea class="form-control validate" name="description" rows="3" cols="20" style="height: auto;" required></textarea>
								</div>
								<div class="form-group mb-3">
									<label for="price">Price</label>
									<input type="text" name="price" class="form-control validate" required>
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
										<input type="text" name="qty" class="form-control validate" required>
									</div>
								</div>
							
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
							<div class="tm-product-img mx-auto" style="width: 350px;height: 300px;background: gray;" id="image_pre">
												
							</div>
							<div class="custom-file mt-3 mb-3">
								
								<input type="button" name="btn_upload" class="btn btn-primary btn-block mx-auto" id="BtnUpload" value="UPLOAD PRODUCT IMAGE">
								<input name="file" type="file" id="fileinput" style="display: none;" required>  
								<script>
									$('#BtnUpload').click(function(){
										$('#fileinput').click();
									});
							
								</script>
							</div>
						</div>
						<div class="col-12">
							<button type="submit1" class="btn btn-primary btn-block text-uppercase" name="submit1">Add Product Now</button>
						</div>
					</div>
				</form>
					
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
</body>
<?php } ?>
</html>