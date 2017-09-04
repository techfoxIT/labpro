<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
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
		<title>Appointment</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url();?>fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="<?php echo base_url();?>style.css">

		<!--[if lt IE 9]>
		<script src="<?php echo base_url();?>js/ie-support/html5.js"></script>
		<script src="<?php echo base_url();?>js/ie-support/respond.js"></script>
		<![endif]-->

		<?php
		if($this->uri->segment(2) == "appointment_inserted")
		{
			?><script>
			$(document).ready(function(){
				$("#myModal").modal('show');
			});
			</script>
			<div id="myModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h1 class="modal-title">Your Appointment has been fixed</h1>
						</div>
						<div class="modal-body">
							<p><center><b>NOTE:</b> If you want to cancel your Appointment than please call on this number<b> 8976660661/2 </b> before 12hrs prior to the Appointment Timing</center></p>
							<button type="button" class=" btn btn-primary" data-dismiss="modal" aria-hidden="true">Thank-You</button>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
		?>
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
					<h2 class="page-title"><b>Get Your Appointment Done Here!</b></h2>
					<small></small>
				</div>
			</div>








			  <div class="container" >

			    <script>
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


			    <div  class="container-fluid">
			      <div class="row">





			        <div  class="col-xs-12 col-md-4 ">
			          <!--insert form start--><br/>
			          <button name="no" class="btn btn-primary" value="<?php echo $tomorrow = date('Y-m-d', time() + 86400);?>" onclick="moveNumbers(this.value)">
			            <?php echo $tomorrow = date('d/m', time() + 86400);?></button>
			            <button name="no" class="btn btn-primary" value="<?php echo $tomorrow = date('d/m/Y', time() + 172800);?>" onclick="moveNumbers(this.value)">
			              <?php echo $tomorrow = date('d/m', time() + 172800);?></button>
			              <button name="no" class="btn btn-primary" value="<?php echo $tomorrow = date('d/m/Y', time() + 259200);?>" onclick="moveNumbers(this.value)">
			                <?php echo $tomorrow = date('d/m', time() + 259200);?></button>
			                <button name="no" class="btn btn-primary" value="<?php echo $tomorrow = date('d/m/Y', time() + 345600);?>" onclick="moveNumbers(this.value)">
			                  <?php echo $tomorrow = date('d/m', time() + 345600);?></button>





			                  <form method="post" action="<?php echo base_url();?>user_main/Appointment_form_validation">
			                    <div class="form-group">
			                      <lable>Appointment date</label>
			                        <?php echo form_input(array('id' => 'result', 'name' => 'result',
			                        'class' => 'form-control', 'readonly' => 'readonly', 'value' => set_value('result')  )); ?><br />
			                        <span class="text-danger"><?php echo form_error("result"); ?></span>
			                      </div>
			                      <div class="form-group">
			                        <div class="input-group">
			                          <?php echo form_input(array( 'name' => 'fname', 'class' => 'form-control',
			                          'placeholder' => 'First Name', 'value' => set_value('fname')  )); ?>
			                          <span class="input-group-addon">+</span>
			                          <?php echo form_input(array( 'name' => 'lname', 'class' => 'form-control',
			                          'placeholder' => 'Last Name', 'value' => set_value('lname')  )); ?>
			                          <span class="text-danger"><?php echo form_error("fname"); ?></span>
			                          <span class="text-danger"><?php echo form_error("lname"); ?></span>
			                        </div>
			                      </div>

			                      <div class="form-group">
			                        <lable>Phone Number</label>
			                          <?php echo form_input(array( 'name' => 'p_number', 'class' => 'form-control',
			                          'placeholder' => 'Enter phone Number', 'value' => set_value('p_number')  )); ?>
			                          <span class="text-danger"><?php echo form_error("p_number"); ?></span>
			                        </div>

			                        <div class="form-group">
			                          <lable>Email Address</label>
			                            <?php echo form_input(array( 'name' => 'e-mail', 'class' => 'form-control',
			                            'placeholder' => 'Enter Email Address', 'value' => set_value('e-mail')  )); ?>
			                            <span class="text-danger"><?php echo form_error("e-mail"); ?></span>
			                          </div>
			                          <div class="form-group">
			                            <lable>Referred Dr. :</label>
			                              <?php echo form_input(array( 'name' => 'rfdr', 'class' => 'form-control',
			                              'placeholder' => 'Referred Doctor.', 'value' => set_value('rfdr')  )); ?><br />
			                              <span class="text-danger"><?php echo form_error("rfdr"); ?></span>
			                              <lable>Note : If self referred you please Enter <b>SELF</b>.</label>
			                              </div>
			                              <div class="form-group">
			                                <lable>Apointment Time:</label>
			                                  <?php echo form_input(array( 'name' => 'usr_time', 'class' => 'form-control',
			                                  'type' => 'time','required' => 'required', 'value' => set_value('usr_time')  )); ?><br />
			                                  <span class="text-danger"><?php echo form_error("usr_time"); ?></span>
			                                </div>
			                                <div class="form-group">
			                                  <label for="comment">Test</label>
			                                  <textarea class="form-control textfield" class="textfield" id="video0_tags" name="video0_tags"  rows="5" readonly></textarea>
			                                  <span class="text-danger"><?php echo form_error("video0_tags"); ?></span>
			                                </div>
			                                <input type="submit" class="btn btn-primary form-control  " name="sub1" value="Register">
<br/>
			                              </form>            <!--insert form end-->

			                            </div>

			                            <div class="col-xs-12 col-md-4 "><br/>
			                              <div class="panel panel-info">
			                                <div class="taglist">
			                                  <table class="table table-sm table-hover" >

			                                    <tr class="header">
			                                      <th>#</th>
			                                      <th>package</th>
			                                      <th>select</th>
			                                    </tr>
			                                    <?php
			                                    if($package_fetch_data->num_rows() > 0)
			                                    {?><?php $a=0;
			                                      foreach ($package_fetch_data->result() as $row)
			                                      {?><?php $a=$a+1;
			                                        ?>
			                                        <tr>
			                                          <td><?php echo $a; ?></td>
			                                          <td><?php echo $row->name; ?></td>
			                                          <td><input type="checkbox" value="<?php echo $row->name; ?>"></td>

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
			                          </div><!--calss packages-->

			                          <div class="col-xs-12 col-md-4  ">
			                            <br/>
			                            <div class="panel panel-info">
			                              <input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

			                              <div class="taglist">
			                                <div style=" max-height:470px;overflow-y: scroll;">
			                                  <table class="table table-sm table-hover"  id="myTable">

			                                    <tr class="header">
			                                      <th>#</th>
			                                      <th>Tests</th>
			                                      <th>Select</th>
			                                    </tr>

			                                    <?php
			                                    if($fetch_data->num_rows() > 0)
			                                    {?><?php $a=0;
			                                      foreach ($fetch_data->result() as $row)
			                                      {?><?php $a=$a+1;
			                                        ?>
			                                        <tr>
			                                          <td><?php echo $a; ?></td>
			                                          <td><?php echo $row->first_name; ?></td>
			                                          <td><input type="checkbox" value="<?php echo $row->first_name; ?>"></td>
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
			                                  </div>
			                                </table>
			                              </div>
			                            </div>
			                          </div>
			                        </div><!--calss test-->

			                      </div> <!--calss row-->


			                    </div>
			                  </div>
			                </div>
			              </div>









<hr/>
				<div class="fullwidth-block" data-bg-color="#edf2f4">
					<div class="container">
						<div class="subscribe-form">
							<h1>HONESTY. ACCURACY. QUALITY</h1>

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
