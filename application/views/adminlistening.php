<!DOCTYPE html>
<html lang="en">
	<head>
		<title>English Conversation</title>
		<link rel="shortcut icon" href="<?php echo base_url();?>vendors/images/image_title.ico" />
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
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors/dist/css/util.css">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors/dist/css/style_vocabulary_admin.css">
	</head>

	<body style="background-color: #999999;">
		<div class="limiter">
			<div class="container-login100">
				<div class="login100-more" style="background-image: url('<?php echo base_url();?>vendors/assets/images/classes-2.jpg');"></div>

				<div class="wrap-login100 p-l-50 p-r-50 p-t-10 p-b-10">
                    <form class="login100-form validate-form" action="<?php echo base_url('adminlistening/checkListening/')?>" method="POST" enctype="multipart/form-data">
						<span class="login100-form-title p-b-30">
							Admin Listening
                        </span>
                        <p style="color:#d42a38; text-align: center; width: 364px;"><?php echo (isset($err_message) ? $err_message : '') ?></p>
						<div class="wrap-select100">
							<span class="label-input100">Level</span>
							<select name="level" id="level" class="form-control">
                                <option value="1">Beginner</option>
                                <option value="2">Intermediate</option>
                                <option value="3">Advanced</option>
                            </select>
                        </div>
                        <?php echo form_error('mp3_file'); ?>
                        <div class="wrap-input100-100">
                            <span class="label-input100">Link File Mp3</span>
                            <input type="file" name="mp3_file" class="file" accept=".mp3" style="visibility:hidden;position:absolute;">
                            <input type="text" class="form-control" name="mp3_file" disabled accept=".mp3" placeholder="Upload mp3 File" style="width:85%!important;display:initial!important;height:80%!important;">
                            <button class="browse btn btn-primary input-lg" type="button" style="height:80%!important;"><i class="glyphicon glyphicon-search"></i> Browse</button>
                            <span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('listening_name'); ?>
                        <div class="wrap-input100">
                            <span class="label-input100">Listening Name</span>
                            <div class="tag_listening_name">
                                <a href="#" class="dis-block txt3 hov1 p-t-10 p-b-10" style="font-size:15px;">
                                    <i class="fa fa-long-arrow-down m-l-5"></i> h1 tag<i class="fa fa-long-arrow-down m-l-5"></i>
                                </a>
                            </div>
                            <input class="input100" type="text" name="listening_name" id="listening_name" value="<?=set_value('listening_name')?>" placeholder="Listening Name">
                            <span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('listening_details'); ?>
                        <div class="wrap-input100">
                            <span class="label-input100">Listening Details</span>
                            <div class="tag_listening_details">
                                <a href="#" id="p_tag" class="dis-block txt3 hov1 p-t-10 p-b-10" style="font-size:15px;">
                                    <i class="fa fa-long-arrow-down m-l-5"></i> p tag<i class="fa fa-long-arrow-down m-l-5"></i>
                                </a>
                            </div>
                            <textarea class="input100" type="text" name="listening_details" id="listening_details" value="<?=set_value('listening_details')?>" placeholder="Listening Details"></textarea>
                            <span class="focus-input100"></span>
                        </div>

						<div class="container-login100-form-btn">
                        	<a href="<?php echo base_url(); ?>" class="dis-block txt3 hov1 p-t-10 p-b-10">
								<i class="fa fa-long-arrow-left m-l-5"></i>
								Home page
                        	</a>
                        
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button type="submit" class="login100-form-btn" name="submit">
									Submit
								</button>
							</div>

							<a href="<?php echo base_url(); ?>listening" class="dis-block txt3 hov1 p-t-10 p-b-10">
								Listening Screen
								<i class="fa fa-long-arrow-right m-l-5"></i>
							</a>
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

        <script type="text/javascript">
            $('.tag_listening_name a').click(function() {
                var value = '<h1></h1>';
                var input = $('#listening_name');
                input.val(value);
                input.focus();
                input[0].setSelectionRange(value.length, value.length - 5);
                return false;
            });
            $('#p_tag').click(function() {
                var value_p_tag = '<p></p>';
                var input_listening = $('#listening_details');
                input_listening.val(input_listening.val() + value_p_tag);
                input_listening.focus();
                var value_input_listening = input_listening.val();
                input_listening[0].setSelectionRange(value_input_listening.length, value_input_listening.length - 4);
                return false;
            });
            $(document).on("click", ".browse", function() {
                var file = $(this).parent().parent().parent().find(".file");
                file.trigger("click");
            });
            $(document).on("change", ".file", function() {
                // $(this).parent().find(".form-control").val($(this).val().replace(/C:\\fakepath\\/i, ""));
                $(this).parent().find(".form-control").val($(this).val());
            });
        </script>
	</body>
</html>