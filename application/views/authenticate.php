<!DOCTYPE html>
<html lang="en">
	<head>
		<title>English Conversation</title>
		<link rel="shortcut icon" href="<?php echo base_url();?>vendors/images/image_title.ico" />
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_login/vendor/animate/animate.css">
<!--===============================================================================================-->	
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_login/css/util.css">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_login/css/main.css">
<!--===============================================================================================-->
	</head>

	<body style="background-color: #666666;">
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<form class="login100-form validate-form" action="<?php echo base_url('authenticate/checkLogin')?>" method="POST">
						<span class="login100-form-title p-b-43">
							Login to continue
						</span>
						<p style="color:#d42a38; text-align: center; width: 364px;"><?php echo (isset($err_message) ? $err_message : '') ?></p>
						<?php echo form_error('email'); ?>
						<div class="wrap-input100 validate-input">
							<span class="label-input100">Email</span>
							<input class="input100" value="<?=set_value('email')?>" type="text" name="email">
						</div>
						<?php echo form_error('password'); ?>
						<div class="wrap-input100 validate-input">
							<span class="label-input100">Password</span>
							<input class="input100" type="password" name="password">
						</div>

						<div class="container-login100-form-btn">
							<a href="<?php echo base_url(); ?>" class="dis-block txt3 hov1 p-t-10 p-b-10">
								<i class="fa fa-long-arrow-left m-l-5"></i>
								Home page
							</a>
							
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button type="submit" name="signin" class="login100-form-btn">
									Sign in
								</button>
							</div>

							<a href="<?php echo base_url(); ?>registration" class="dis-block txt3 hov1 p-t-10 p-b-10">
								Sign up
								<i class="fa fa-long-arrow-right m-l-5"></i>
							</a>
						</div>
					</form>

					<div class="login100-more" style="background-image: url('<?php echo base_url();?>vendors_login/images/bg-01.jpg');"></div>
				</div>
			</div>
		</div>
	
<!--===============================================================================================-->
		<script type="text/javascript" src="<?php echo base_url(); ?>vendors_login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
		<script type="text/javascript" src="<?php echo base_url(); ?>vendors_login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
		<script type="text/javascript" src="<?php echo base_url(); ?>vendors_login/vendor/bootstrap/js/popper.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>vendors_login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
		<script type="text/javascript" src="<?php echo base_url(); ?>vendors_login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
		<script type="text/javascript" src="<?php echo base_url(); ?>vendors_login/vendor/daterangepicker/moment.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>vendors_login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
		<script type="text/javascript" src="<?php echo base_url(); ?>vendors_login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
		<script type="text/javascript" src="<?php echo base_url(); ?>vendors_login/js/main.js"></script>

	</body>
</html>