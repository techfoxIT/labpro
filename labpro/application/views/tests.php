<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>Our Tests</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url();?>fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="<?php echo base_url();?>style.css">
		<link rel="stylesheet" href="<?php echo base_url();?>sass/tests.css">

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
					<h2 class="page-title">Our Tests</h2>
					<small></small>
				</div>
			</div>

			<main class="main-content">


				<div class="fullwidth-block">
					<div class="container">
						<div class="project-list">
							<div class="project">
								<div class="project-content">
									<figure class="project-image"><img src="<?php echo base_url();?>images/Hematology.jpg" alt="Project"></figure>
									<h3 class="project-title">Hematology Test</h3>
									<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Tests List</button>
									<div id="id01" class="modal">
									<br>
									<br>
									<form class="modal-content animate" action="/action_page.php">
										<div class="container">
											<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
												<h3>CBC, ESR, HB, MP, MP Antigen, Platelet Count, Complete Haemogram, Reticulocyte Count</h3>
												<h3>Microfilaria, PT/PTT, BT/CT, G6 PD, Montux Test, Blood Group & Rh Factor</h3>
										</div>
									  </form>

									</div>
								</div>
							</div>
							<div class="project">
								<div class="project-content">
									<figure class="project-image"><img src="<?php echo base_url();?>images/Urine.jpg" alt="Project"></figure>
									<h3 class="project-title">Urine Test</h3>
									<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Tests List</button>
									<div id="id02" class="modal">
									<br>
									<br>
									  <form class="modal-content animate">
										<div class="container">
										  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
											<h3>Urine Routine, Stool Routine, Urine Sugar/ Ketone, PSBP</h3>
										  <h3>Albumin, 24 Hrs. Urinary Proteins, Semen Analysis</h3>
										</div>
									  </form>
									</div>

								</div>
							</div>
							<div class="project">
								<div class="project-content">
									<figure class="project-image"><img src="<?php echo base_url();?>images/Serology.jpg" alt="Project"></figure>
									<h3 class="project-title">Serology Test</h3>
									<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Tests List</button>
									<div id="id03" class="modal">
									<br>
									<br>
										<form class="modal-content animate">
											<div class="container">
												<span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
													<h3>HIV I & II, Australla Antigen (Hbsag), VDRL HCV, CRP, ASO Titre</h3>
													<h3>R A Test, Widal Test, Urine Pregnancy Test, Abo/Rh Titre, Direct/Indirect Coomb's Test</h3>
													<h3>DENGUE - IgG/Igm, DENGUE - NS IAg, LEPTO - IgG/Igm, THYPHI - IgG/Igm</h3>
											</div>
										</form>
									</div>

								</div>
							</div>
							<div class="project">
								<div class="project-content">
									<figure class="project-image"><img src="<?php echo base_url();?>images/Biochemistry.jpg" alt="Project"></figure>
									<h3 class="project-title">Biochemistry Test</h3>
									<button onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Tests List</button>
									<div id="id04" class="modal">
									<br>
									<br>
										<form class="modal-content animate">
											<div class="container">
												<span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
													<h3>Blood Sugar F/PP/R, Creatinine, BUN/S.Urea, T. Protein, S. Albumin, S. Bilirubin</h3>
													<h3>T. Triglycerides, HDL Cholestrol, Cholestrol, SGOT/SGPT, GGTP, Alk. Phosphates</h3>
													<h3>Acid Phosphates, S. Amylase, Lipase, Uric Acid, CPK -Total, CPK - MB, S. Calcium</h3>
													<h3>S. Phosphorus, S. Electrolytes (Na/K/CL), Glycocilated Hb (Hb A1C), LDH</h3>
											</div>
										</form>
									</div>

								</div>
							</div>
							<div class="project">
								<div class="project-content">
									<figure class="project-image"><img src="<?php echo base_url();?>images/Microbiology.jpg" alt="Project"></figure>
									<h3 class="project-title">Micro-Biology Test</h3>
									<button onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Tests List</button>
									<div id="id05" class="modal">
									<br>
									<br>
										<form class="modal-content animate">
											<div class="container">
												<span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>
													<h3>Urine/Stool/Spuntum, Culture & Sensiulity, Spuntum for AFB (3 Samples)</h3>
													<h3>Spuntum Routine, Gram's Stain</h3>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="project">
								<div class="project-content">
									<figure class="project-image"><img src="<?php echo base_url();?>images/Hormones.jpg" alt="Project"></figure>
									<h3 class="project-title">Hormones Test</h3>
									<button onclick="document.getElementById('id06').style.display='block'" style="width:auto;">Tests List</button>
									<div id="id06" class="modal">
									<br>
									<br>
										<form class="modal-content animate">
											<div class="container">
												<span onclick="document.getElementById('id06').style.display='none'" class="close" title="Close Modal">&times;</span>
													<h3>T3/T4 TSH, B. HCG, Prolactine</h3>
													<h3>FSH, LH, Testosterone</h3>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="project">
								<div class="project-content">
									<figure class="project-image"><img src="<?php echo base_url();?>images/Bodyprofiles.jpg" alt="Project"></figure>
									<h3 class="project-title">Body Profiles Test</h3>
									<button onclick="document.getElementById('id07').style.display='block'" style="width:auto;">Tests List</button>
									<div id="id07" class="modal">
									<br>
									<br>
										<form class="modal-content animate">
											<div class="container">
												<span onclick="document.getElementById('id07').style.display='none'" class="close" title="Close Modal">&times;</span>
													<h3>Lipid Profile, Liver Function Test, Fever Profile, Renal Profile</h3>
													<h3>Pre-Operative Profile, Anc Profile, Allergy Profile, Arthritis Profile</h3>
													<h3>Cardiac Injury Profile, Diabetic Profile, Hypertensive Profile</h3>
													<h3>Total Body Profile, ECG, Basic Profile, Trop T/Trop I, Micro Albumin</h3>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="project">
								<div class="project-content">
									<figure class="project-image"><img src="<?php echo base_url();?>images/Special.jpg" alt="Project"></figure>
									<h3 class="project-title">Special Test</h3>
									<button onclick="document.getElementById('id08').style.display='block'" style="width:auto;">Tests List</button>
									<div id="id08" class="modal">
									<br>
									<br>
										<form class="modal-content animate">
											<div class="container">
												<span onclick="document.getElementById('id08').style.display='none'" class="close" title="Close Modal">&times;</span>
													<h3>B-HCG, F T3, FT4, TSH, FSH, HOMOCYSTINE, L.H, PROLACTIN</h3>
													<h3>TSH, A.C.E, ACTH, ANCA, ANA, C.A - 125(OVARIAN CANCER)</h3>
													<h3>C.E.A.(G.I.MARKAR), C3, C4, CD4/CD8 COUNT, CD4</h3>
													<h3>DHEAS, DIGOXIN(LANOXIN), E2 (ESTRADIAL), E3 (ESTRIOL)</h3>
													<h3>FREE TESTOSTERONE, Hb - ELECTROPHORESIS, HBeAG, HIV P 24 ANTIGEN</h3>
													<h3> IgA/IgE/IgG/IgM, P.T.H., PROGESTERONE, RETINOL(VIT - A), RIBOFLAVIN(VIT - B2)</h3>
													<h3>TESTOSTERONE, TORCH - 8, TORCH 10, TORCH - 13, TRIPLE TEST<sub>1ST 2ND TRIMESTER</sub></h3>
													<h3>VALPROIC ACID, VIT - D3, VIT - D, VIT - C, VIT - B2, TOTAL PSA, C.A - 19.9(PANCREAS)</h3>
													<h3>FSH/LH/PROLACTIN, T3, T4, TSH, C.A - 15.3(BREAST CANCER), INSULIN</h3>
													<h3>FOLIC ACID, FREE B-HCG, FREE PSA, HLA B - 27, TB GOLD</h3>
											</div>
										</form>
									</div>
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

		<script scr = "js/btn.js"></script>
		<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
		<script src="<?php echo base_url();?>js/plugins.js"></script>
		<script src="<?php echo base_url();?>js/app.js"></script>

	</body>

</html>
