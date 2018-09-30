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
					<form class="login100-form validate-form" action="<?php echo base_url('admingrammar/checkGrammar/')?>" method="POST" >
						<span class="login100-form-title p-b-30">
							Admin Grammar
                        </span>
						<div class="wrap-select100">
							<span class="label-input100">Level</span>
							<select name="level" class="form-control" value="">
                                <option value="1" selected>Beginner</option>
                                <option value="2">Intermediate</option>
                                <option value="3">Advanced</option>
                            </select>
                        </div>
                        <?php echo form_error('grammar_name'); ?>
                        <div class="wrap-input100">
                            <span class="label-input100">Grammar Name</span>
                            <div class="tag_grammar_name">
                                <a href="#" class="dis-block txt3 hov1 p-t-10 p-b-10" style="font-size:15px;">
                                    <i class="fa fa-long-arrow-down m-l-5"></i> h1 tag<i class="fa fa-long-arrow-down m-l-5"></i>
                                </a>
                            </div>
                            <input class="input100" type="text" name="grammar_name" id="grammar_name" value="<?=set_value('grammar_name')?>" placeholder="Grammar Name">
                            <span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('grammar_details'); ?>
                        <div class="wrap-input100">
                            <span class="label-input100">Grammar Details</span>
                            <div class="tag_grammar_details">
                                <a href="#" id="h2_tag" class="dis-block txt3 hov1 p-t-10 p-b-10" style="font-size:15px;">
                                    <i class="fa fa-long-arrow-down m-l-5"></i> h2 tag<i class="fa fa-long-arrow-down m-l-5"></i>
                                </a>
                                <span style="margin-left:5px;">|</span>
                                <a href="#" id="h3_tag" class="dis-block txt3 hov1 p-t-10 p-b-10" style="font-size:15px;">
                                    <i class="fa fa-long-arrow-down m-l-5"></i> h3 tag<i class="fa fa-long-arrow-down m-l-5"></i>
                                </a>
                                <span style="margin-left:5px;">|</span>
                                <a href="#" id="b_tag" class="dis-block txt3 hov1 p-t-10 p-b-10" style="font-size:15px;">
                                    <i class="fa fa-long-arrow-down m-l-5"></i> b tag<i class="fa fa-long-arrow-down m-l-5"></i>
                                </a>
                                <span style="margin-left:5px;">|</span>
                                <a href="#" id="p_tag" class="dis-block txt3 hov1 p-t-10 p-b-10" style="font-size:15px;">
                                    <i class="fa fa-long-arrow-down m-l-5"></i> p tag<i class="fa fa-long-arrow-down m-l-5"></i>
                                </a>
                                <span style="margin-left:5px;">|</span>
                                <a href="#" id="p_color_red_tag" class="dis-block txt3 hov1 p-t-10 p-b-10" style="font-size:15px;">
                                    <i class="fa fa-long-arrow-down m-l-5"></i> p color red tag<i class="fa fa-long-arrow-down m-l-5"></i>
                                </a>
                            </div>
                            <textarea class="input100" type="text" name="grammar_details" id="grammar_details" value="<?=set_value('grammar_details')?>" placeholder="Grammar Details"></textarea>
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

							<a href="<?php echo base_url(); ?>grammar" class="dis-block txt3 hov1 p-t-10 p-b-10">
								Grammar Screen
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
            $('.tag_grammar_name a').click(function() {
                var value = '<h1></h1>';
                var input = $('#grammar_name');
                input.val(value);
                input.focus();
                input[0].setSelectionRange(value.length, value.length - 5);
                return false;
            });
            $('#h2_tag').click(function() {
                var value_h2_tag = '<h2></h2>';
                var input_grammar = $('#grammar_details');
                input_grammar.val(input_grammar.val() + value_h2_tag);
                input_grammar.focus();
                var value_input_grammar = input_grammar.val();
                input_grammar[0].setSelectionRange(value_input_grammar.length, value_input_grammar.length - 5);
                return false;
            });
            $('#h3_tag').click(function() {
                var value_h3_tag = '<h3></h3>';
                var input_grammar = $('#grammar_details');
                input_grammar.val(input_grammar.val() + value_h3_tag);
                input_grammar.focus();
                var value_input_grammar = input_grammar.val();
                input_grammar[0].setSelectionRange(value_input_grammar.length, value_input_grammar.length - 5);
                return false;
            });
            $('#b_tag').click(function() {
                var value_b_tag = '<b></b>';
                var input_grammar = $('#grammar_details');
                input_grammar.val(input_grammar.val() + value_b_tag);
                input_grammar.focus();
                var value_input_grammar = input_grammar.val();
                input_grammar[0].setSelectionRange(value_input_grammar.length, value_input_grammar.length - 4);
                return false;
            });
            $('#p_tag').click(function() {
                var value_p_tag = '<p></p>';
                var input_grammar = $('#grammar_details');
                input_grammar.val(input_grammar.val() + value_p_tag);
                input_grammar.focus();
                var value_input_grammar = input_grammar.val();
                input_grammar[0].setSelectionRange(value_input_grammar.length, value_input_grammar.length - 4);
                return false;
            });
            $('#p_color_red_tag').click(function() {
                var value_p_color_red_tag = '<p style="color:red;"></p>';
                var input_grammar = $('#grammar_details');
                input_grammar.val(input_grammar.val() + value_p_color_red_tag);
                input_grammar.focus();
                var value_input_grammar = input_grammar.val();
                input_grammar[0].setSelectionRange(value_input_grammar.length, value_input_grammar.length - 4);
                return false;
            });
        </script>
	</body>
</html>