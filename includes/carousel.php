<!DOCTYPE html>
<html>
<head>
	<title>Carousel</title>
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../css/fontawe/css/all.css">

	<style>
		.wrapper{
			height: auto;
			overflow: hidden;margin:0px !important;
		}
		.item{
			background:red;height: 300px;
		}
		.owl-dots{display: none;}
		.owl-theme .custom-nav{
			position: absolute;
			top:25%;
			left: 0;
			right: 0;
		}
		.owl-prev,.owl-next{
			position: absolute;
			width: 50px;
			height: 50px;
			font-size: 2rem !important;
			border:1px solid black;
			z-index: 100;
			background: transparent!important;
			border-radius:50% !important;
		}.owl-prev{
			left: 1%;
		}.owl-next{
			right: 1%;
		}
	</style>
</head>
<body>
		
		<div class="wrapper">
			<div class="owl-carousel owl-theme">
				<div class="item"><h4>1</h4></div>
				<div class="item"><h4>2</h4></div>
				<div class="item"><h4>3</h4></div>
				<div class="item"><h4>4</h4></div>
				<div class="item"><h4>5</h4></div>
				<div class="item"><h4>6</h4></div>
				<div class="item"><h4>7</h4></div>
				<div class="item"><h4>8</h4></div>
			</div>
		</div>

			<div class="owl-theme">
				<div class="custom-nav owl-nav">
				
				</div>
			</div>
			<div style="height:500px;">
</body>
	<script src="../js/js.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/mouseWheel.js"></script>
</html>