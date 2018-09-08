<!DOCTYPE html>
<html lang="en">
	<head>
		<title>English Conversation</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_registration/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_registration/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_registration/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_registration/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_registration/vendor/animate/animate.css">
<!--===============================================================================================-->	
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_registration/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_registration/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_registration/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_registration/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_registration/css/util.css">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_registration/css/main.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_registration/css/datepicker.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_registration/css/datepicker.min.css">
	</head>

	<body style="background-color: #999999;">
		<div class="limiter">
			<div class="container-login100">
				<div class="login100-more" style="background-image: url('<?php echo base_url();?>vendors_registration/images/bg-01.jpg');"></div>

				<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
					<form class="login100-form validate-form" action="<?php echo base_url('modifyuser/checkModify/')?>" method="POST" >
						<span class="login100-form-title p-b-59">
							Sign Up
						</span>
						<?php echo form_error('username'); ?>
						<div class="wrap-input100 validate-input">
							<span class="label-input100">User Name</span>
							<input class="input100" type="text" name="username" value="<?=set_value('username')?>" placeholder="User Name...">
							<span class="focus-input100"></span>
						</div>
                        <?php echo form_error('birthday'); ?>
						<div class="wrap-input100 validate-input">
							<span class="label-input100">Birthday</span>
							<input class="input100" data-language='en' type="text" value="<?=set_value('birthday')?>" name="birthday" id="datepicker" placeholder="dd/mm/yyyy...">
							<span class="focus-input100"></span>
						</div>
                        <?php echo form_error('phone_number'); ?>
						<div class="wrap-input100 validate-input">
							<span class="label-input100">Phone Number</span>
							<input class="input100" type="text" name="phone_number" value="<?=set_value('phone_number')?>" placeholder="Phone Number...">
							<span class="focus-input100"></span>
						</div>
                        <?php echo form_error('address'); ?>
						<div class="wrap-input100 validate-input">
							<span class="label-input100">Address</span>
							<input class="input100" type="text" name="address" value="<?=set_value('address')?>" placeholder="Address...">
							<span class="focus-input100"></span>
						</div>

						<div class="container-login100-form-btn">
                        	<a href="<?php echo base_url(); ?>" class="dis-block txt3 hov1 p-t-10 p-b-10">
								<i class="fa fa-long-arrow-left m-l-5"></i>
								Home page
                        	</a>
                        
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button type="submit" class="login100-form-btn" name="modify">
									Modify
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	
<!--===============================================================================================-->
		<script type="text/javascript" src="<?php echo base_url(); ?>vendors_registration/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
		<script type="text/javascript" src="<?php echo base_url(); ?>vendors_registration/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
		<script type="text/javascript" src="<?php echo base_url(); ?>vendors_registration/vendor/bootstrap/js/popper.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>vendors_registration/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
		<script type="text/javascript" src="<?php echo base_url(); ?>vendors_registration/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
		<script type="text/javascript" src="<?php echo base_url(); ?>vendors_registration/vendor/daterangepicker/moment.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>vendors_registration/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
		<script type="text/javascript" src="<?php echo base_url(); ?>vendors_registration/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
		<script type="text/javascript" src="<?php echo base_url(); ?>vendors_registration/js/main.js"></script>

        <!-- <script type="text/javascript" src="<?php echo base_url(); ?>vendors_registration/js/datepicker.js"></script> -->
        <script type="text/javascript" src="<?php echo base_url(); ?>vendors_registration/js/datepicker.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendors_registration/js/datepicker.en.js"></script>    
        <script>
			$(function() {
				$( "#datepicker" ).datepicker();
			});
		</script>
	</body>
</html>