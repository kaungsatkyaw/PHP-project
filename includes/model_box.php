<!DOCTYPE html>
<html>
<head>
	<title>Model Box</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap4/dist/css/bootstrap.min.css">
	<script src="../js/js.js"></script>
	<script src="../css/bootstrap4/dist/js/bootstrap.min.js"></script>
</head>
<body>
	<button class="btn btn-danger" data-toggle="modal" data-target="#myModal">Open Model</button>

	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">Login
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				
				<div class="modal-body">
					<form method="post" name="contact" action="#">	
						<div class="row">
							<div class="col-sm-6">
								<img src="../img/icon.png" width="100%">
							</div>
							<div class="col-sm-6">
								<div class="input_box">
									<label>Email</label>
									<input type="email" name="email" required="">
									
								</div>
								<div class="input_box">
									<label>Password</label>
									<input type="password" name="pass" required="">							
								</div>
								<br>
								<button class="btn btn-success">Login</button>
							</div>
						</div>
					</form>
				</div>
				
				
			</div>
		</div>
	</div>
</body>
</html>