<!DOCTYPE html>
<html>
	<?php include "includes/header.php" ?>

		<nav>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <a href="#"><img class="d-block w-100" src="img/bg/bg1.jpg" alt="First slide"></a>
			      <div class="carousel-caption d-none d-md-block">
				  </div>
			    </div>
			    <div class="carousel-item">
			      <a href="#"><img class="d-block w-100" src="img/bg/bg2.jpg" alt="Second slide"></a>
			      <div class="carousel-caption d-none d-md-block">
				  </div>
			    </div>
			    <div class="carousel-item">
			      <a href="#"><img class="d-block w-100" src="img/bg/bg3.jpg" alt="Third slide"></a>
			      <div class="carousel-caption d-none d-md-block">
				  </div>
			    </div>
			    <div class="carousel-item">
			     <a href="#"><img class="d-block w-100" src="img/bg/bg4.jpg" alt="Third slide"></a>
			      <div class="carousel-caption d-none d-md-block">
				  </div>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</nav>
		<div class="clearfix"></div>

			<div class="bg">
			<div class="row">
				<div class="col-7"></div>
				<div class="col-5">
					<div id="text">
						<h3>MI 9 SE</h3>
						Huge 4030mAh Battery
						A light, slim body coupled with style and long-lasting battery time.
						Large 4030mAh battery is sufficient for up to 2 days* of normal usage.
						18W fast charge can quickly restore full power.
						<br><br>
						<button class="btn btn-warning" style="color:#fff;border-radius:0px;font-weight:bold;">SHOP NOW</button>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
	        <div class="col-6" style="padding: 1px;">
	        	<div class="container1">
				  <img src="img/1.jpg" alt="Avatar" class="image1">
				  <div class="overlay">
				    <div class="text1"><a href="#"><button class="btn btn-warning" style="color:#fff;border-radius:0px;font-weight: bold;">SHOP NOW</button></a></div>
				  </div>
				</div>
	        </div>
	        <div class="col-6" style="padding: 1px;">
	        	<div class="row">
	        		<div class="col-6"  style="padding: 1px;">
	        			<div class="container1">
						  <img src="img/2.jpg" alt="Avatar" class="image1">
						  <div class="overlay">
						    <div class="text1"><a href="#"><button class="btn btn-warning" style="color:#fff;border-radius:0px;font-weight: bold;">SHOP NOW</button></a></div>
						  </div>
						</div>
	        		</div>
	        		<div class="col-6"  style="padding: 1px;">
	        			<div class="container1">
						  <img src="img/5.jpg" alt="Avatar" class="image1">
						  <div class="overlay">
						    <div class="text1"><a href="#"><button class="btn btn-warning" style="color:#fff;border-radius:0px;font-weight: bold;">SHOP NOW</button></a></div>
						  </div>
						</div>
	        		</div>
	        		<div class="col-12"  style="padding: 1px;">
	        			<div class="container1">
						  <img src="img/7.jpg" alt="Avatar" class="image1">
						 	<div class="overlay">
						    <div class="text1"><a href="#"><button class="btn btn-warning" style="color:#fff;border-radius:0px;font-weight: bold;">SHOP NOW</button></a></div>
						  </div>
						</div>
	        		</div>
	        		
	        	</div>
	        </div>
     	</div>
     	<div style="height:500px;" class="earphone">
			<div class="col-5">
					<div id="text">
						<h3>Mi True Wireless Earphone</h3>
						True-to-life sound with HD quality
							Mi True Wireless earphones support AAC codec,
							which means original sound is more completely restored
							and vocals won't blend together with instrumentals.
							Good music deserves high definition sound.
							<br><br>
							<button class="btn btn-primary" style="color:#fff;border-radius:0px;font-weight: bold;">SHOP NOW</button>
					</div>
				</div>
		</div>

     	<div class="bg1" style="height: 70vh;">
     		<div style="height: 75px" align="center">
     			<h5 style="color: #757575;padding:20px;">STAR PRODUCTS</h5>
     		</div>
			<div class="row">
				<div class="col-4" id="hover">
					<div class="hover-blur">
						<a href="#" title="">
				            <img src="img/4.jpg" width="100%"/>
				            <button type="button"><span class="text-white">SHOP NOW</span></button>
				        </a>
					</div>					
				</div>
				<div class="col-4" id="hover">
					<div class="hover-blur">
						<a href="#" title="">
				            <img src="img/3.jpg" width="100%"/>
				            <button type="button"><span class="text-white">SHOP NOW</span></button>
				        </a>
					</div>	
				</div>
				<div class="col-4" id="hover">
					<div class="hover-blur">
						<a href="#" title="">
				            <img src="img/6.jpg" width="100%"/>
				            <button type="button"><span class="text-white">SHOP NOW</span></button>
				        </a>
					</div>	
				</div>
			</div>
		</div>
		
		<?php include "includes/footer.php" ?>
		
<script>
	$('.carousel').carousel({
  		interval: 2000
		})
</script>
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
