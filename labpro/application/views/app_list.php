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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type='text/javascript' src="<?php echo base_url(); ?>js/jq.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">



		<!--offline bootstrap--->
		<script src="<<?php echo base_url(); ?>js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
		<link rel="<?php echo base_url(); ?>stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css">


			<script>
			function myFunction() {
			  // Declare variables
			  var input, filter, table, tr, td, i;
			  input = document.getElementById("myInput");
			  filter = input.value.toUpperCase();
			  table = document.getElementById("myTable");
			  tr = table.getElementsByTagName("tr");

			  // Loop through all table rows, and hide those who don't match the search query
			  for (i = 0; i < tr.length; i++)
			  {
			    td = tr[i].getElementsByTagName("td")[1];
			    if (td)
			    {
			      if (td.innerHTML.toUpperCase().indexOf(filter) > -1)
			      {
			        tr[i].style.display = "";
			      }
			      else
			      {
			        tr[i].style.display = "none";
			      }
			    }
			  }
			}


			function moveNumbers(num) {
				var txt=document.getElementById("result").value;
				txt= num;
				document.getElementById("result").value=txt;
			}
			function updateTextArea() {
				var allVals = [];
				$('.taglist :checked').each(function(i) {

					allVals.push((i!=0?"\r\n":"")+ $(this).val());
				});
				$('#video0_tags').val(allVals).attr('rows',allVals.length) ;

			}
			$(function() {
				$('.taglist input').click(updateTextArea);
				updateTextArea();
			});




			</script>

	</head>


	<body>

		<div class="site-content">
			<header class="site-header collapsed-nav" data-bg-image="">
				<div class="container">
					<div class="header-bar">
						<a onclick="location.href='<?php echo base_url();?>admin/ad_shivansh''" class="branding">
							<img src="<?php echo base_url();?>images/logo.png" alt="" class="logo">
							<div class="logo-type">
								<h1 class="site-title">Company name</h1>
								<small class="site-description">Tagline goes here</small>
							</div>
						</a>

						<nav class="main-navigation">
							<button class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">

								<li class="home menu-item current-menu-item"><a onclick="location.href='<?php echo base_url();?>admin/ad_shivansh''"><img src="<?php echo base_url();?>images/home-icon.png" alt="Home"></a></li>
								<li class="menu-item"><a onclick="location.href='<?php echo base_url();?>user_main/test_view'">Add Test</a></li>
								<li class="menu-item"><a onclick="location.href='<?php echo base_url();?>user_main/package_view'">Add Package</a></li>
								<li class="menu-item"><a  onclick="location.href='<?php echo base_url();?>user_main/app_list_view'">View Appointment</a></li>
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
					<h1 class="page-title"><b>package</b></h1>
				</div>
			</div>




<div class="container" >
	<br/><br/><br/>
	<h1 align="center">Appointments</h1>
	<script>
function myFunction() {
	var x = document.getElementById("myDate").value;
	document.getElementById("myInput").innerHTML = x;
}
</script>
	<input class="form-control" type="type" id="myInput" onkeyup="myFunction()" placeholder="Enter date : YYYY-MM-DD" >
<br/>
			<div class="table-responsive">
				<table class="table table-bordered" id="myTable">
					<thead>
						<tr class="header">
							<th>#</th>
							 <th>Name</th>
								<th>Contact NO</th>
								<th>Appointment Date</th>
								<th>Appointment Time</th>
								<th>Tests</th>
								<th>Referred Dr</th>
								<th>EmailId</th>
						</tr>
					</thead>
					<tbody>
						<?php
						if($fetch_data_contact->num_rows() > 0)
						{?><?php $a=0;
							foreach ($fetch_data_contact->result() as $row)
							{?><?php $a=$a+1;
								?>
								<tr>
									<td><?php echo $a; ?></td>
									<td><?php echo $row->fname ?> <?php echo $row->lname; ?></td>
									<td><?php echo $row->p_number; ?></td>
									<td><?php echo $row->app_date; ?></td>
									<td><?php echo $row->app_time; ?></td>
									<td><?php echo $row->tests_pck; ?></td>
									<td><?php echo $row->rfdr; ?></td>
									<td><?php echo $row->e_mail; ?></td>
								</tr>

								<?php
							}
						}
						else
						{
							?>
							<tr>
								<td colspan="3"><h1>No Data Found</h1></td>
							</tr>
							<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>


		<script>
		function myFunction() {
			// Declare variables
			var input, filter, table, tr, td, i;
			input = document.getElementById("myInput");
			filter = input.value.toUpperCase();
			table = document.getElementById("myTable");
			tr = table.getElementsByTagName("tr");

			// Loop through all table rows, and hide those who don't match the search query
			for (i = 0; i < tr.length; i++)
			{
				td = tr[i].getElementsByTagName("td")[3];
				if (td)
				{
					if (td.innerHTML.toUpperCase().indexOf(filter) > -1)
					{
						tr[i].style.display = "";
					}
					else
					{
						tr[i].style.display = "none";
					}
				}
			}
		}
		</script>



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
