<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>About</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
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
					<h2 class="page-title">About</h2>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<h2 class="section-title">Why choose us?</h2>
								<ol class="circle">
									<li>
										<h2>Reason 1</h2>
										<h3>24 x 7 Available</h3>
									</li>
									<li>
										<h2>Reason 2</h2>
										<h3>Blood Tests At Home</h3>
									</li>
									<li>
										<h2>Reason 3</h2>
										<h3>Emergency Services Are Available</h3>
									</li>
									<li>
										<h2>Reason 4</h2>
										<h3>Free Home Collections</h3>
									</li>
									<li>
										<h2>Reason 5</h2>
										<h3>X-Ray Services</h3>
									</li>
									<li>
										<h2>Reason 6</h2>
										<h3>Fully Computerized Clinical Laboratory</h3>
									</li>
								</ol>
							</div>
							<div class="col-md-6">
								<h2 class="section-title">Who Are We?</h2>
								<ul class="arrow-list has-border">
									<li>At Shivansh Diagnostics, the best pathology lab in Mira-Bhayandar what we believe is what we say and what we say is what we do.</li>
									<li>Being empathetic to our customers and being committed to their needs is in our DNA.</li>
									<li>Shivansh Diagmostics has grown to harness a culture that is open, synergistic, progressive and scientific in nature.</li>
									<li>We are the Pathology Specialists delivering over 1 million tests a year.</li>
									<li>With 10 years of experience in delivering accurate reports, Shivansh Diagnostics has earned the reputation of being amongst the top pathology labs in the whole Mira-Bhayandar.</li>
									<li>The journey of Shivansh Diagnostics started in 1981, when our Founder and Chairman, Dr. Sushil Shah had a vision to introduce specialized testing facilities.</li>
									<li>Three decades later we now stand as the best pathology lab in Mira-Bhayandar.</li>
								</ul>
							</div>

						</div> <!-- .row -->*
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->

				<div class="fullwidth-block" data-bg-color="#edf2f4">
					<div class="container">
						<h2 class="section-title" style = "text-align:center">Our team</h2>
						<div class="row">
							<div class="col-md-4">
								<div class="team">
									<img src="<?php echo base_url();?>images/person-3.jpg" alt="" class="team-image">
									<h3 class="team-name">Name</h3>
									<p>Managing Director</p>
									<div class="social-links">
										<a href="<?php echo base_url();?>"><i class="fa fa-facebook"></i></a>
										<a href="<?php echo base_url();?>"><i class="fa fa-twitter"></i></a>
										<a href="<?php echo base_url();?>"><i class="fa fa-google-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="team">
									<img src="<?php echo base_url();?>images/person-3.jpg" alt="" class="team-image">
									<h3 class="team-name">Name</h3>
									<p>Doctor</p>
									<div class="social-links">
										<a href="<?php echo base_url();?>"><i class="fa fa-facebook"></i></a>
										<a href="<?php echo base_url();?>"><i class="fa fa-twitter"></i></a>
										<a href="<?php echo base_url();?>"><i class="fa fa-google-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="team">
									<img src="<?php echo base_url();?>images/person-3.jpg" alt="" class="team-image">
									<h3 class="team-name">Name</h3>
									<p>MD. Consultant Pathologist</p>
									<div class="social-links">
										<a href="<?php echo base_url();?>"><i class="fa fa-facebook"></i></a>
										<a href="<?php echo base_url();?>"><i class="fa fa-twitter"></i></a>
										<a href="<?php echo base_url();?>"><i class="fa fa-google-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="team">
									<p></p>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div>

				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<h2 class="section-title">Our Aims</h2>
								<p>At Shivansh Diagnostics, our focus is to improve the lives of patients,
								from research to lab tests to personalized healthcare; we touch the entire spectrum of diagnostics users.</p>
								<p>We have personalized healthcare strategy aims at providing medicines and
								diagnostic tools that enable tangible improvements in the health, quality of life and survival of patients.</p>
								<p>Currently, we have covered the whole Mira-Bhayandar.</p>
								<p>Adhering to the brand values of Integrity, Accuracy and Empathy,
								the team has always strived to make a difference in the lives of its customers.</p>
								<p>Giving back to the society is embedded in the value system of ours
								and we believe and aim to bring about a positive change in the neighbourhood.</p>
							</div>
							<div class="col-md-4">
								<h2 class="section-title">Summary</h2>
								<ul class="arrow-list has-border">
									<li><p>Willing to serve all those with whom we deal with Unsurpassed excellence.</p></li>
									<li><p>To grow a workplace where trust, Team spirit and honesty are an integral part of everything we do.</p></li>
									<li><p>To be Responsible for realibility and accuracy of Reports to the best of ability.</p></li>
									<li><p>To never be complacent and continue the effort on aregular basis to improvise the system to serve you better.</p></li>
								</ul>
							</div>
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
					<a href="https://www.facebook.com/akshay.sawant.18400" title="Designed by TechFox.com" target="_blank">Akshay Sawant</a>. All rights reserved</p>
				</div> <!-- .container -->
			</footer>
		</div>

		<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
		<script src="<?php echo base_url();?>js/plugins.js"></script>
		<script src="<?php echo base_url();?>js/app.js"></script>

	</body>

</html>
