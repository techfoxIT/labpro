<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>Home</title>

		<!-- Loading third party fonts -->
		<link href="<?php echo base_url();?>http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url();?>fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="<?php echo base_url();?>style.css">

		<!--[if lt IE 9]>
		<script src="<?php echo base_url();?>js/ie-support/html5.js"></script>
		<script src="<?php echo base_url();?>js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>

		<div class="site-content">
			<header class="site-header collapsed-nav" data-bg-image="">
				<div class="container">
					<div class="header-bar">
						<a onclick="location.href='<?php echo base_url();?>user_main'" class="branding">
							<img src="<?php echo base_url();?>images/logo.png" alt="" class="logo">
							<div class="logo-type">
								<h1 class="site-title">Company name</h1>
								<small class="site-description">Tagline goes here</small>
							</div>
						</a>

						<nav class="main-navigation">
							<button class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">

								<li class="home menu-item current-menu-item"><a onclick="location.href='<?php echo base_url();?>user_main'"><img src="<?php echo base_url();?>images/home-icon.png" alt="Home"></a></li>
								<li class="menu-item"><a onclick="location.href='<?php echo base_url();?>appointment_data_view/Services'">Our Services</a></li>
								<li class="menu-item"><a onclick="location.href='<?php echo base_url();?>appointment_data_view/Tests'">Our Tests</a></li>
								<li class="menu-item"><a onclick="location.href='<?php echo base_url();?>appointment_data_view/Packages'">Our Packages</a></li>
								<li class="menu-item"><a onclick="location.href='<?php echo base_url();?>user_main/appointment_view'">Book Your Appointment</a></li>
								<li class="menu-item"><a onclick="location.href='<?php echo base_url();?>appointment_data_view/About'">About</a></li>
								<li class="menu-item"><a onclick="location.href='<?php echo base_url();?>appointment_data_view/Contact'">Contact</a></li>
							</ul>
						</nav>

						<div class="mobile-navigation"></div>
					</div>
				</div>
			</header>

			<div class="hero">
				<ul class="slides">
					<li data-bg-image="images/slide01.jpg">
						<div class="container">
							<div class="slide-content">
								<h1 class="slide-title"><b>Honesty. Accuray. Quality</b></h1>
								<p><b>Reports On Same Day</b></p>
								<p><b>Whatsapp Us At 9870832612</b></p>
								<p>
							</div>
						</div>
					</li>
					<li data-bg-image="images/slide02.jpg">
						<div class="container">
							<div class="slide-content">
								<h1 class="slide-title"><b>Your Lab At Home</b></h1>
								<p><b>Treat each patient with Respect and Honesty</b></p>
							</div>
						</div>
					</li>
					<li data-bg-image="images/slide03.jpg">
						<div class="container">
							<div class="slide-content">
								<h1 class="slide-title"><b>Fully Computerized Lab</b></h1>
								<p><b>ISO 9001 - 2008 CERTIFIED LAB</b></p>
							</div>
						</div>
					</li>
				</ul>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="feature">
									<img src="<?php echo base_url();?>images/icon-research-small.png" alt="" class="feature-image">
									<h2 class="feature-title">24 x 7 Available</h2>
									<p></p>

								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="feature">
									<img src="<?php echo base_url();?>images/icon-medicine-small.png" alt="" class="feature-image">
									<h2 class="feature-title">Blood Tests At Home</h2>
									<p></p>

								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="feature">
									<img src="<?php echo base_url();?>images/icon-genetics-small.png" alt="" class="feature-image">
									<h2 class="feature-title">Reporting On Same Day</h2>
									<p></p>

								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="feature">
									<img src="<?php echo base_url();?>images/icon-energy-small.png" alt="" class="feature-image">
									<h2 class="feature-title">Free Home Collections</h2>
									<p></p>

								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->

				<div class="fullwidth-block">
					<div class="container">
						<h2 class="section-title"></h2>
						<div class="row">
							<div class="col-md-4">
								<div class="post">
									<figure class="featured-image"><img src="<?php echo base_url();?>images/LabTests.jpg" alt=""></figure>
									<h2 class="entry-title" style = "text-align:center"><a href="<?php echo base_url();?>tests.html">Our Tests</a></h2>

								</div>
							</div>
							<div class="col-md-4">
								<div class="post">
									<figure class="featured-image"><img src="<?php echo base_url();?>images/LabTests1.jpg" alt=""></figure>
									<h2 class="entry-title" style = "text-align:center"><a href="<?php echo base_url();?>services.html">Our Services</a></h2>

								</div>
							</div>
							<div class="col-md-4">
								<div class="post">
									<figure class="featured-image"><img src="<?php echo base_url();?>images/LabTests2.jpg" alt=""></figure>
									<h2 class="entry-title" style = "text-align:center"><a href="<?php echo base_url();?>packages.html">Our Packages</a></h2>

								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->



				<div class="fullwidth-block" data-bg-color="#edf2f4">
					<div class="container">
						<div class="subscribe-form">
							<h1>HONESTY.ACCURACY.QUALITY</h1>

						</div>
					</div>
				</div>

			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="row">
							<div class="widget">
								<div class="social-links" style = "text-align:right">
								<div style = "float:left;text-align:center">
									<h3>We are Autthorized from: </h3>
									<img src="<?php echo base_url();?>images/ISO.jpg" width = "70px" height = "60px" />
									<img src="<?php echo base_url();?>images/ANSI.png" width = "70px" height = "60px" />
									<img src="<?php echo base_url();?>images/IAF.jpg" width = "70px" height = "60px" />
								</div style = "float:right;text-align:center">
									<h3>Connect With Us At: </h3>
									<a href="<?php echo base_url();?>#"><i class="fa fa-facebook"></i></a>
									<a href="<?php echo base_url();?>#"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
					</div> <!-- .row -->

					<p class="colophon"  style = "text-align:center">copyright © 2017. Designed by
					<a href="<?php echo base_url();?>#" title="Designed by TechFox.com" target="_blank">Manish Tiwari,</a>
					<a href="<?php echo base_url();?>#" title="Designed by TechFox.com" target="_blank">Vinit Tiwari & </a>
					<a href="<?php echo base_url();?>https://www.facebook.com/akshay.sawant.18400" title="Designed by TechFox.com" target="_blank">Akshay Sawant</a>. All rights reserved</p>
				</div> <!-- .container -->
			</footer>
		</div>

		<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
		<script src="<?php echo base_url();?>js/plugins.js"></script>
		<script src="<?php echo base_url();?>js/app.js"></script>

	</body>

</html>
