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
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors_registration/css/util.css">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors/dist/css/style_vocabulary_admin.css">
	</head>

	<body style="background-color: #999999;">
		<div class="limiter">
			<div class="container-login100">
				<div class="login100-more" style="background-image: url('<?php echo base_url();?>vendors/assets/images/classes-2.jpg');"></div>

				<div class="wrap-login100 p-l-50 p-r-50 p-t-10 p-b-10">
					<form class="login100-form validate-form" action="<?php echo base_url('adminvocabulary/checkVocabulary/')?>" method="POST" >
						<span class="login100-form-title p-b-30">
							Admin Vocabulary
						</span>
						<div class="wrap-select100">
							<span class="label-input100">Level</span>
							<select name="level" class="form-control">
                                <option value="1">Beginner</option>
                                <option value="2">Intermediate</option>
                                <option value="3">Advanced</option>
                            </select>
                        </div>
						<?php echo form_error('vocabulary_name_1'); ?>
						<div class="wrap-input100">
							<span class="label-input100">Vocabulary Name 1</span>
							<input class="input100" type="text" name="vocabulary_name_1" value="<?=set_value('vocabulary_name_1')?>" placeholder="Vocabulary Name 1">
                            <span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_mean_1'); ?>
                        <div class="wrap-input100">
                            <span class="label-input100">Vocabulary Mean 1</span>
							<input class="input100" type="text" name="vocabulary_mean_1" value="<?=set_value('vocabulary_mean_1')?>" placeholder="Vocabulary Mean 1">
							<span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_name_2'); ?>
                        <div class="wrap-input100">
							<span class="label-input100">Vocabulary Name 2</span>
							<input class="input100" type="text" name="vocabulary_name_2" value="<?=set_value('vocabulary_name_2')?>" placeholder="Vocabulary Name 2">
                            <span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_mean_2'); ?>
                        <div class="wrap-input100">
                            <span class="label-input100">Vocabulary Mean 2</span>
							<input class="input100" type="text" name="vocabulary_mean_2" value="<?=set_value('vocabulary_mean_2')?>" placeholder="Vocabulary Mean 2">
							<span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_name_3'); ?>
                        <div class="wrap-input100">
							<span class="label-input100">Vocabulary Name 3</span>
							<input class="input100" type="text" name="vocabulary_name_3" value="<?=set_value('vocabulary_name_3')?>" placeholder="Vocabulary Name 3">
                            <span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_mean_3'); ?>
                        <div class="wrap-input100">
                            <span class="label-input100">Vocabulary Mean 3</span>
							<input class="input100" type="text" name="vocabulary_mean_3" value="<?=set_value('vocabulary_mean_3')?>" placeholder="Vocabulary Mean 3">
							<span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_name_4'); ?>
                        <div class="wrap-input100">
							<span class="label-input100">Vocabulary Name 4</span>
							<input class="input100" type="text" name="vocabulary_name_4" value="<?=set_value('vocabulary_name_4')?>" placeholder="Vocabulary Name 4">
                            <span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_mean_4'); ?>
                        <div class="wrap-input100">
                            <span class="label-input100">Vocabulary Mean 4</span>
							<input class="input100" type="text" name="vocabulary_mean_4" value="<?=set_value('vocabulary_mean_4')?>" placeholder="Vocabulary Mean 4">
							<span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_name_5'); ?>
                        <div class="wrap-input100">
							<span class="label-input100">Vocabulary Name 5</span>
							<input class="input100" type="text" name="vocabulary_name_5" value="<?=set_value('vocabulary_name_5')?>" placeholder="Vocabulary Name 5">
                            <span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_mean_5'); ?>
                        <div class="wrap-input100">
                            <span class="label-input100">Vocabulary Mean 5</span>
							<input class="input100" type="text" name="vocabulary_mean_5" value="<?=set_value('vocabulary_mean_5')?>" placeholder="Vocabulary Mean 5">
							<span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_name_6'); ?>
                        <div class="wrap-input100">
							<span class="label-input100">Vocabulary Name 6</span>
							<input class="input100" type="text" name="vocabulary_name_6" value="<?=set_value('vocabulary_name_6')?>" placeholder="Vocabulary Name 6">
                            <span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_mean_6'); ?>
                        <div class="wrap-input100">
                            <span class="label-input100">Vocabulary Mean 6</span>
							<input class="input100" type="text" name="vocabulary_mean_6" value="<?=set_value('vocabulary_mean_6')?>" placeholder="Vocabulary Mean 6">
							<span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_name_7'); ?>
                        <div class="wrap-input100">
							<span class="label-input100">Vocabulary Name 7</span>
							<input class="input100" type="text" name="vocabulary_name_7" value="<?=set_value('vocabulary_name_7')?>" placeholder="Vocabulary Name 7">
                            <span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_mean_7'); ?>
                        <div class="wrap-input100">
                            <span class="label-input100">Vocabulary Mean 7</span>
							<input class="input100" type="text" name="vocabulary_mean_7" value="<?=set_value('vocabulary_mean_7')?>" placeholder="Vocabulary Mean 7">
							<span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_name_8'); ?>
                        <div class="wrap-input100">
							<span class="label-input100">Vocabulary Name 8</span>
							<input class="input100" type="text" name="vocabulary_name_8" value="<?=set_value('vocabulary_name_8')?>" placeholder="Vocabulary Name 8">
                            <span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_mean_8'); ?>
                        <div class="wrap-input100">
                            <span class="label-input100">Vocabulary Mean 8</span>
							<input class="input100" type="text" name="vocabulary_mean_8" value="<?=set_value('vocabulary_mean_8')?>" placeholder="Vocabulary Mean 8">
							<span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_name_9'); ?>
                        <div class="wrap-input100">
							<span class="label-input100">Vocabulary Name 9</span>
							<input class="input100" type="text" name="vocabulary_name_9" value="<?=set_value('vocabulary_name_9')?>" placeholder="Vocabulary Name 9">
                            <span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_mean_9'); ?>
                        <div class="wrap-input100">
                            <span class="label-input100">Vocabulary Mean 9</span>
							<input class="input100" type="text" name="vocabulary_mean_9" value="<?=set_value('vocabulary_mean_9')?>" placeholder="Vocabulary Mean 9">
							<span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_name_10'); ?>
                        <div class="wrap-input100">
							<span class="label-input100">Vocabulary Name 10</span>
							<input class="input100" type="text" name="vocabulary_name_10" value="<?=set_value('vocabulary_name_10')?>" placeholder="Vocabulary Name 10">
                            <span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_mean_10'); ?>
                        <div class="wrap-input100">
                            <span class="label-input100">Vocabulary Mean 10</span>
							<input class="input100" type="text" name="vocabulary_mean_10" value="<?=set_value('vocabulary_mean_10')?>" placeholder="Vocabulary Mean 10">
							<span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_name_11'); ?>
                        <div class="wrap-input100">
							<span class="label-input100">Vocabulary Name 11</span>
							<input class="input100" type="text" name="vocabulary_name_11" value="<?=set_value('vocabulary_name_11')?>" placeholder="Vocabulary Name 11">
                            <span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_mean_11'); ?>
                        <div class="wrap-input100">
                            <span class="label-input100">Vocabulary Mean 11</span>
							<input class="input100" type="text" name="vocabulary_mean_11" value="<?=set_value('vocabulary_mean_11')?>" placeholder="Vocabulary Mean 11">
							<span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_name_12'); ?>
                        <div class="wrap-input100">
							<span class="label-input100">Vocabulary Name 12</span>
							<input class="input100" type="text" name="vocabulary_name_12" value="<?=set_value('vocabulary_name_12')?>" placeholder="Vocabulary Name 12">
                            <span class="focus-input100"></span>
                        </div>
                        <?php echo form_error('vocabulary_mean_12'); ?>
                        <div class="wrap-input100">
                            <span class="label-input100">Vocabulary Mean 12</span>
							<input class="input100" type="text" name="vocabulary_mean_12" value="<?=set_value('vocabulary_mean_12')?>" placeholder="Vocabulary Mean 12">
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

							<a href="<?php echo base_url(); ?>vocabulary" class="dis-block txt3 hov1 p-t-10 p-b-10">
								Vocabulary Screen
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

	</body>
</html>