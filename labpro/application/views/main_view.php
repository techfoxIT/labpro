<html>  
<head>
    <title>lab project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>
  <form method="post" action="<?php echo base_url();?>user_main/test_view">
<!--
        button to call admin test add function
-->
         <button id="submit-buttons" type="submit" class="btn btn-info" ​​​​​>test</button>
  </form>

  <button class="btn btn-info" onclick="location.href='<?php echo base_url();?>user_main/package_view'">package</button>
  <button class="btn btn-info" onclick="location.href='<?php echo base_url();?>user_main/appointment_view'">appointment</button>
 <button class="btn btn-info" onclick="location.href='<?php echo base_url();?>user_main/app_list_view'">appointment view</button>

</body>
</html>
