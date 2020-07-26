<!DOCTYPE html>
<html>
<?php include "header1.php";?>
	<div style="height: 50px;"></div>
	<div class="line1" style="height: 617px;">
		<div class="box1 container">
			<div class="element1">
				<div class="line1">
					<div class="box1 container">
						<h1>HAVE SOME QUESTIONS?</h1>
						<h3 style="font-size: 13px;text-align:center;color: #e81050; letter-spacing: .2em;text-transform: uppercase;">Best services And Best prices.,</h3>
					</div>
				</div>
				<div style="height: 50px;"></div>
				<div class="line1">
					 <div class="box1 container">
					 	<div class="row">
					 		<div class="col-md-6 md-5">
					 			<div class="p-5">
					 				<div class="element2">
					 				<img src="../img/icon.png" style="display: block;width: 100%;">
					 				<h2>Blue Owl</h2>
					 				</div>
					 			</div>
					 		</div>
					 		<div class="col-md-5">
					 			<form class="p-1 md-3" method="post">
					 				<div class="row form-group" style="margin-top: 15px;z-index: -99;">
					 					<div class="col-md-12"><input type="text" name="fname" class="form-control" style="height: 48px;border-radius:30px;width: 400px;" placeholder="First Name"></div>
					 				</div>
					 				<div class="row form-group" style="margin-top: 20px;">
					 					<div class="col-md-12"><input type="text" name="lname" class="form-control" style="height: 48px;border-radius:30px;width: 400px;" placeholder="Last Name"></div>
					 				</div>
					 				<div class="row form-group" style="margin-top: 20px;">
					 					<div class="col-md-12"><input type="email" name="email" class="form-control" style="height: 48px;border-radius:30px;width: 400px;" placeholder="What's your email?"></div>
					 				</div>
					 				<div class="row form-group" style="margin-top: 20px;">
					 					<div class="col-md-12">
					 						<textarea class="form-control" name="message" cols="30" rows="7" placeholder="Write your notes and questions here..." style="border-radius: 30px;height: auto;width: 400px;"></textarea>
					 					</div>
					 				</div>
					 				<div class="row form-group" style="margin-top: 20px;">
					 					<div class="col-md-12">
					 						<button class="btn-click">SEND MESSAGE</button>
					 					</div>
					 				</div>
					 			</form>
					 		</div>
					 	</div>
					 </div>
				</div>
			</div>
		</div>
	</div>	
	<div style="height: 100px;"></div>

	<?php include 'footer.php'; ?>
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