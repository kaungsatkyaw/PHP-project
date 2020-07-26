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
 	<title>Edit Profile</title>
 	<?php include 'header.php'; ?>

 	<div id="content">
 		<?php include 'content_header.php'; ?>
 		<div style="height: 25px;"></div>
		<h4 style="border-bottom: 1px solid rgba(0,0,0,0.25);padding-bottom: 10px;">Edit Profile
		</h4>
		<h5>Welcome, <span style="text-transform: uppercase;font-weight: bold;">"
			<?php echo $_SESSION['name'];?> "</span></h5>

		<div class="change-psw">
			<form action="change_pass.php" method="post">
				<div class="row">
					<div class="col-sm-2" id="t-width" style="text-align:right;padding:5px;font-size: 0.9rem;">
						<label for="n1">Current Password</label>
					</div> 
					<div class="col-sm-8" id="t-width1" >
						<div class="input-group mb-3">
							<div class="input-group-prepend">
		                    <span class="input-group-text"><i class="fas fa-key"></i></span>
		                 </div>
						<input type="password" class="form-control" placeholder="Current Password..." name="current_pass" id="n1" required>
						</div>
					</div>
			</div>
			<div class="row" style="padding:15px 0;">
					<div class="col-sm-2" id="t-width" style="text-align:right;padding:5px;font-size:0.9rem;">
						<label for="n1">New Password</label>
					</div> 
					<div class="col-sm-8" id="t-width1" >
						<div class="input-group mb-3">
							<div class="input-group-prepend">
		                    <span class="input-group-text"><i class="fas fa-key"></i></span>
		                 </div>
						<input type="password" class="form-control" placeholder="New Password..." name="new_pass" id="n1" required>
						</div>
					</div>
			</div>
			<div class="row">
					<div class="col-sm-2" id="t-width" style="text-align:right;padding:5px;font-size:0.9rem;">
						<label for="n1">Confirm Password</label>
					</div> 
					<div class="col-sm-8" id="t-width1" >
						<div class="input-group mb-3">
							<div class="input-group-prepend">
		                    <span class="input-group-text"><i class="fas fa-key"></i></span>
		                 </div>
						<input type="password" class="form-control" placeholder="Confirm Password..." name="confirm_pass" id="n1" required>
						</div>
					</div>
			</div>
			<div class="row">
					<div class="col-sm-2" id="t-width" style="">
						
					</div> 
					<div class="col-sm-9" id="t-width1">
						<div style="height: 20px;"></div>
						<button class="btn btn-info btn-xs" type="submit" name="confirm"><i class="fa fa-check"></i> Confirm</button>
						<button class="btn btn-danger btn-xs" type="reset"><i class="fa fa-sync-alt"></i> Reset</button>
						<br><br>
						
							<?php 
						if (isset($_SESSION['ok'])) {
								echo '<div class="alert-txt"><i class="fas fa-exclamation-circle"></i> '.$_SESSION['ok'].'</div>';
								unset($_SESSION['ok']);
							}
						 ?>						 	
						
					</div>
			</div>
			</form>
			
		</div>
 	</div>
 	





 	<?php include 'footer.php'; ?>
 </html>
 <?php } ?>