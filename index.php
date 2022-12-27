<?php
	require_once('php/createDb.php');
	require_once('./php/companent.php');



	$database = new Createdb("Productdb","Producttb");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>FastBrand.uz</title>

		<!-- css -->

		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<link rel="stylesheet" href="css/font-awesome.min.css">

		<link type="text/css" rel="stylesheet" href="css/style.css"/>


    </head>
	<body>
	<header>
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="index.php" class="logo">
							<img src="./img/logo.png" alt="FastBrand" width="15%" height="3%">
						</a></li>
						<li><a href="#"><i class="fa fa-phone"></i> +99890 015 14 10</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> ikromovinomjon123@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> yangiyol shahar</a></li>
					</ul>
				</div>
			</div>
		</header>

		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Quloqchinlar</h3>
								<a href="#" class="cta-btn">Sotib olish <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/chehol.png" width="360px" height="240px" alt="">
							</div>
							<div class="shop-body">
								<h3>Telefon uchun<br>aksesuarlar</h3>
								<a href="#" class="cta-btn">Sotib olish <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/watch1.png" alt="" height="240px">
							</div>
							<div class="shop-body">
								<h3>Smart soatlar</h3>
								<a href="#" class="cta-btn">Sotib olish <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
						</div>
					</div>

					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<?php
											$result = $database->getData();
											while($row = mysqli_fetch_assoc($result)){
												component($row['product_name'],$row['product_price'],$row['product_image']);
											}
										?>
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
						</div>
					</div>

					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
									<?php
											$result = $database->getData();
											while($row = mysqli_fetch_assoc($result)){
												component($row['product_name'],$row['product_price'],$row['product_image']);
											}
										?>
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		

		<div id="newsletter" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Yangiliklardan xabardor bo'lish uchun <strong>Emailingizni kiriting</strong></p>
							<form>
								<input class="input" type="email" placeholder="Emailingizni kiriting">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Yuborish</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-telegram"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="footer">
			<div class="section">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Yangiyol shahar</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+99890 015 14 10</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>ikromovinomjon123@gmail.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
