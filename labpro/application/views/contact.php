<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>Contact</title>

		<!-- Loading third party fonts -->
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

			<div class="page-head" data-bg-image="<?php echo base_url();?>images/science.jpg">
				<div class="container">
					<br>
					<br>
					<br>
					<br>
					<br>
					<h1 class="page-title"><b>Contact</b></h1>
					<small></small>
				</div>
			</div>

			<main class="main-content">

				<div class="fullwidth-block">
					<div class="container">


						 <div class="row">
						 	<div class="col-md-4">
						 		<div class="boxed-content">
						 			<h2 class="section-title">Address</h2>
						 			<address>
						 				<p>Company Name INC.</p>
										<p>Mira Road, Cinemax</p>
									</address>
						 		</div>
						 	</div>
						 	<div class="col-md-4">
						 		<div class="boxed-content">
						 			<h2 class="section-title">Telephone</h2>
						 			<p><strong>Office:</strong> +91 123 456 7890</p>
									<p><strong>Support:</strong> 022 12 45 7890</p>
						 		</div>
						 	</div>
						 	<div class="col-md-4">
						 		<div class="boxed-content">
						 			<h2 class="section-title">Email</h2>
						 			<p><strong>Office:</strong> <a href="<?php echo base_url();?>mailto:lab1@companyname.com">lab1@domainname.com</a></p>
									<p><strong>Support:</strong> <a href="<?php echo base_url();?>mailto:lab2@domainname.com">lab2@domainname.com</a></p>
						 		</div>
						 	</div>
						 </div>

						 <div class="row contact-form">
						 	<form action="#">
						 		<div class="col-md-4">
						 			<p><input type="text" placeholder="Your name..."></p>
						 			<p><input type="text" placeholder="Email..."></p>
						 			<p><input type="text" placeholder="Mobile No."></p>
						 		</div>
						 		<div class="col-md-8">
						 			<p>
						 				<textarea name="" placeholder="Message"></textarea>
						 			</p>
						 			<p class="text-right">
						 				<input type="submit" value="Send message">
						 			</p>
						 		</div>
						 	</form>
						 </div>
					</div>
				</div>

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
		<script type="text/javascript" src="<?php echo base_url();?>http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="<?php echo base_url();?>js/plugins.js"></script>
		<script src="<?php echo base_url();?>js/app.js"></script>

	</body>

</html>
