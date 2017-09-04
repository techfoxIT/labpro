<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>Packages</title>

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


			<div class="page-head"  data-bg-image="<?php echo base_url();?>images/science.jpg">
				<div class="container">
					<br>
					<br>
					<br>
					<br>
					<br>
					<h2 class="page-title">Our Packages</h2>
					<small></small>
				</div>
			</div>


				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="checked-box">
									<h3>Lipid Profile</h3>
									<p>Cholestrol, Triglycerides, HDL Cholestrol, LDL Cholestrol</p>
									<p>VLDL Cholestrol, LDL/HDL Ratio</p>
								</div>

								<div class="checked-box">
									<h3>Liver Function Test (LFT)</h3>
									<p>Billirubin (Total, Direct, Indirect), Proteins (Total, Albumin, Globulin)</p>
									<p>A.G.. Ratio, SGOT, SGPT, AIP</p>
								</div>

								<div class="checked-box">
									<h3>Kidney Profile (RFT)</h3>
									<p>BUN, Creatinine, Uric Acid, Calcium, Phosphorus, Proteins</p>
									<p>Albumin, Urine Routine, Electroyte</p>
								</div>
							</div>

							<div class="col-md-6">
								<div class="checked-box">
									<h3>Fever Profile (Maxi)</h3>
									<p>CBC, ESR, MP, WIDAL, SGPT</p>
									<p>Dengue IgG/IgM, NSI, Urine Routine</p>
								</div>

								<div class="checked-box">
									<h3>Fever Profile (Mini)</h3>
									<p>CBC, ESR, MP, WIDAL</p>
									<p>Urine Routine, SGPT</p>
								</div>

								<div class="checked-box">
									<h3>Antenatal Care (Anc) Profile</h3>
									<p>CBC, Boold Group, VDRL, HIV</p>
									<p>HBsAg, RBS, Urine Routine</p>
								</div>
							</div>

							<div class="col-md-6">
								<div class="checked-box">
									<h3>Arthritis Profile</h3>
									<p>CBC, ESR, RA, ASO, CRP</p>
									<p>Uric Acid, Urine Routine</p>
								</div>

								<div class="checked-box">
									<h3>Cardiac Injury Profile</h3>
									<p>CPK, CPK, MB, LDH</p>
									<p>SGOT, Trop T. Trop I</p>
								</div>

								<div class="checked-box">
									<h3>Hypertension Profile</h3>
									<p>CBC, ESR, BUN, Creatinine, FBS, Lipid Profile</p>
									<p>Uric Acid, Electroities, Urine Routine</p>
								</div>
							</div>

							<div class="col-md-6">
								<div class="checked-box">
									<h3>Coagulation Profile</h3>
									<p>CBC, PT, BT</p>
									<p>CT, PT, PTT</p>
								</div>

								<div class="checked-box">
									<h3>Diabetes Profile</h3>
									<p>CBC,F/PP Glucose, HbA1c</p>
									<p>Creatinine Urine Routine, Lipid Profile, Microalbumin</p>
								</div>

								<div class="checked-box">
									<h3>Female Infertility Profile</h3>
									<p>LH, FSH, PRL, T3</p>
									<p>T4, TSh, E2, Progesterone</p>
								</div>
							</div>

							<div class="col-md-6">
								<div class="checked-box">
									<h3>Male Infertility Profile</h3>
									<p>LH, FSH, PRL, T3, T4, TSh</p>
									<p>E2, Testosterone, Semen Analysis</p>
								</div>

								<div class="checked-box">
									<h3>Anaemic Profile</h3>
									<p>CBC, RetiCulocute Count, Iron Studies</p>
									<p>Vit B12, Serum, Feritten</p>
								</div>

								<div class="checked-box">
									<h3>Hepatitis Profile</h3>
									<p>HBs Ag, HAV - IgG/IgM, Anti HCV, Hev - IgG/IgM</p>
									<br>
									<br>
									<br>
									<br>
								</div>
							</div>

							<div class="col-md-6">
								<div class="checked-box">
									<h3>SMA 12 + 2</h3>
									<p>FBS, BUN, Creatinine, Urine Acid, Calcium</p>
									<p>Proteins, Billirubin, SGOT, SGPT, LDH, CBC, Lipid Profile</p>
								</div>

								<div class="checked-box">
									<h3>Thalassemia Studies</h3>
									<p>CBS, Iron, Studies Ferriten</p>
									<p>Hb Electrophoresis</p>
								</div>

								<div class="checked-box">
									<h3>Total Body Profile</h3>
									<p>CBC, ESR, Urine Routine, Billirubin (Total, Direct, Indirect), Proteins (Total, Albumin),
									A.G. Ratio, AGOT, SGPT, Alkaline, Phosphates, Cholestrol, Triglycerides, HDL & LDH, BUN,
									Creatinine, Uric Acid, Calcium, Phosphorus, Blood Sugar (f/pp), Blood Group & Rh Factor,
									Stool Routine, HIV, AA, VDRL, T3T4TSH, Electrolyte</p>

								</div>
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
					<a href="<?php echo base_url();?>https://www.facebook.com/akshay.sawant.18400" title="Designed by TechFox.com" target="_blank">Akshay Sawant</a>. All rights reserved</p>
				</div> <!-- .container -->
			</footer>
		</div>

		<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
		<script src="<?php echo base_url();?>js/plugins.js"></script>
		<script src="<?php echo base_url();?>js/app.js"></script>

	</body>

</html>
