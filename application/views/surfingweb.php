<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>English Conversation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
	
	<!-- Animate.css -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/icomoon.css">
	<!-- Bootstrap  -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/magnific-popup.css">

	<!-- Flexslider  -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/flexslider.css">

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/owl.carousel.min.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors/fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/style.css">

	<!-- Modernizr JS -->
	<script type="text/javascript" src="<?php echo base_url(); ?>vendors/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendors/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>
	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="upper-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-4">
							<p>Welcome to English Conversation</p>
						</div>
						<form action="" method="POST">
							<div class="col-xs-6 col-md-push-2 text-right">
								<?php if(isset($user_name) && $user_name != null) { ?>
									<ul>
										<li class="has-dropdown">
											<a href="#"><?php echo "Hello " . $user_name ?></a>
											<ul class="dropdown">
												<li><a href="<?php echo base_url('index/signout'); ?>">Sign out</a></li>
												<li><a href="<?php echo base_url(); ?>modifyuser">Modify user</a></li>
											</ul>
										</li>
									</ul>
								<?php } else { ?>
									<p class="btn-apply"><a href="<?php echo base_url(); ?>authenticate">Sign up/Sign in</a></p>
								<?php } ?>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div id="colorlib-logo"><a href="<?php echo base_url(); ?>">EnglishConversation</a></div>
						</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
								<li><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li><a href="<?php echo base_url(); ?>history">History</a></li>
                                <li><a href="<?php echo base_url(); ?>translate">Translate</a></li>
								<li class="has-dropdown">
									<a href="#">Vocabulary</a>
									<ul class="dropdown">
										<li><a href="vocabulary/beginner">Beginner</a></li>
										<li><a href="vocabulary/high_beginner">High Beginner</a></li>
										<li><a href="vocabulary/low_intermediae">Low Intermediae</a></li>
										<li><a href="vocabulary/intermediae">Intermediate</a></li>
										<li><a href="vocabulary/high_intermediae">High Intermediate</a></li>
                                        <li><a href="vocabulary/low_advanced">Low Advanced</a></li>
                                        <li><a href="vocabulary/advanced">Advanced</a></li>
									</ul>
								</li>
                                <li class="has-dropdown">
									<a href="#">Listening</a>
									<ul class="dropdown">
										<li><a href="listening/beginner">Beginner</a></li>
										<li><a href="listening/high_beginner">High Beginner</a></li>
										<li><a href="listening/low_intermediae">Low Intermediae</a></li>
										<li><a href="listening/intermediae">Intermediate</a></li>
										<li><a href="listening/high_intermediae">High Intermediate</a></li>
                                        <li><a href="listening/low_advanced">Low Advanced</a></li>
                                        <li><a href="listening/advanced">Advanced</a></li>
									</ul>
								</li>
                                <li class="has-dropdown">
									<a href="#">Grammar</a>
									<ul class="dropdown">
										<li><a href="grammar/beginner">Beginner</a></li>
										<li><a href="grammar/high_beginner">High Beginner</a></li>
										<li><a href="grammar/low_intermediae">Low Intermediae</a></li>
										<li><a href="grammar/intermediae">Intermediate</a></li>
										<li><a href="grammar/high_intermediae">High Intermediate</a></li>
                                        <li><a href="grammar/low_advanced">Low Advanced</a></li>
                                        <li><a href="grammar/advanced">Advanced</a></li>
									</ul>
								</li>
                                <li class="has-dropdown">
									<a href="#">Test Exam</a>
									<ul class="dropdown">
										<li><a href="test_exam/beginner">Beginner</a></li>
										<li><a href="test_exam/high_beginner">High Beginner</a></li>
										<li><a href="test_exam/low_intermediae">Low Intermediae</a></li>
										<li><a href="test_exam/intermediae">Intermediate</a></li>
										<li><a href="test_exam/high_intermediae">High Intermediate</a></li>
                                        <li><a href="test_exam/low_advanced">Low Advanced</a></li>
                                        <li><a href="test_exam/advanced">Advanced</a></li>
									</ul>
								</li>
								<li class="active"><a href="surfingweb">Surfing Web</a></li>
								<li><a href="Q&A">Q&A</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	    <li style="background-image: url('<?php echo base_url();?>vendors/images/img_bg_5.jpg');">
			   		    <div class="container-fluid" style="margin-top: 140px">
			   			    <div class="row">
				   			    <div class="col-md-8 col-sm-12 col-md-offset-1 col-xs-12 col-md-pull-1">
                                   <iframe width="152%" height="600px" frameborder="0" src="http://www.latimes.com/"></iframe>
				   			    </div>
				   		    </div>
			   		    </div>
	                    <div class="gototop js-top">
		                    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	                    </div>
			   	    </li>
			  	</ul>
		  	</div>
		</aside>
    </div>
	<!-- jQuery -->
	<script type="text/javascript" src="<?php echo base_url(); ?>vendors/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script type="text/javascript" src="<?php echo base_url(); ?>vendors/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script type="text/javascript" src="<?php echo base_url(); ?>vendors/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="<?php echo base_url(); ?>vendors/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script type="text/javascript" src="<?php echo base_url(); ?>vendors/js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script type="text/javascript" src="<?php echo base_url(); ?>vendors/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script type="text/javascript" src="<?php echo base_url(); ?>vendors/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script type="text/javascript" src="<?php echo base_url(); ?>vendors/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>vendors/js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script type="text/javascript" src="<?php echo base_url(); ?>vendors/js/jquery.countTo.js"></script>
	<!-- Main -->
	<script type="text/javascript" src="<?php echo base_url(); ?>vendors/js/main.js"></script>

	</body>
</html>

