<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" sizes="16x16" href="<?php echo base_url();?>vendors/assets/images/image_title.ico">
        <title>English Conversation</title>
        <!-- Custom CSS -->
        <link href="<?php echo base_url();?>vendors/assets/libs/flot/css/float-chart.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url();?>vendors/dist/css/style.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>vendors/dist/css/main_translate.css" rel="stylesheet">
    </head>

    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar" data-navbarbg="skin5">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header" data-logobg="skin5">
                        <!-- This is for the sidebar toggle which is visible on mobile only -->
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        <!-- ============================================================== -->
                        <!-- Logo -->
                        <!-- ============================================================== -->
                        <a class="navbar-brand" href="<?php echo base_url(); ?>">
                            <!-- Logo icon -->
                            <b class="logo-icon p-l-10">
                                <!-- Dark Logo icon -->
                                <img src="<?php echo base_url();?>vendors/assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="<?php echo base_url();?>vendors/assets/images/logo-text.jpg" alt="homepage" class="light-logo" />
                            </span>
                        </a>
                        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-left mr-auto">
                            <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                            <!-- ============================================================== -->
                            <!-- create new -->
                            <!-- ============================================================== -->
                            <?php if(isset($admin_flag) && $admin_flag != 0) { ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="d-none d-md-block">Create New For Admin <i class="fa fa-angle-down"></i></span>
                                    <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo base_url(); ?>adminvocabulary">Vocabulary</a>
                                        <a class="dropdown-item" href="<?php echo base_url(); ?>adminlistening">Listening</a>
                                        <a class="dropdown-item" href="<?php echo base_url(); ?>admingrammar">Grammar</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo base_url(); ?>admintestexam">Test Exam</a>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                        <!-- ============================================================== -->
                        <!-- Right side toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-right">
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url();?>vendors/assets/images/users/d3.jpg" alt="user" class="rounded-circle" width="50"></a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated" style="background-color: aliceblue;">
                                    <form action="" method="POST">
                                        <?php if(isset($user_name) && $user_name != null) { ?>
                                            <a class="dropdown-item" href="#" style="text-align:center!important"><i class="mdi mdi-arrow-left-bold"></i><?php echo " Welcome back " . $user_name . " " ?><i class="mdi mdi-arrow-right-bold"></i></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="<?php echo base_url(); ?>modifyuser" style="text-align:center!important"><i class="mdi mdi-account-settings"></i> Update Profile</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="<?php echo base_url('index/signout'); ?>" style="text-align:center!important"><i class="mdi mdi-logout"></i> Sign Out</a>
                                        <?php } else { ?>
                                            <a class="dropdown-item" href="<?php echo base_url(); ?>authenticate" style="text-align:center!important"><i class="mdi mdi-login"></i> Sign In</a>
                                        <?php } ?>
                                    </form>
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar" data-sidebarbg="skin5">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Home</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>translate" aria-expanded="false"><i class="mdi mdi-google-translate"></i><span class="hide-menu">Translate</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>vocabulary" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Vocabulary</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>listening" aria-expanded="false"><i class="mdi mdi-headphones"></i><span class="hide-menu">Listening</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>grammar" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Grammar</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>testexam" aria-expanded="false"><i class="mdi mdi-timer"></i><span class="hide-menu">Test Exam</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>surfingweb" aria-expanded="false"><i class="mdi mdi-web"></i><span class="hide-menu">Surfing Web</span></a></li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-12 d-flex no-block align-items-center">
                            <h4 class="page-title">Modifier Listening Beginner</h4>
                            <div class="ml-auto text-right">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>adminlistening">Admin Vocabulary</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>adminlistening/beginner">Beginner</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Modifier Listening Beginner</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Recent comment and chats -->
                    <!-- ============================================================== -->
                    <div class="row">
						<!-- column -->
                        <div class="col-lg-12">
                            <!-- card new -->
                            <div class="card">
                                <ul class="list-style-none">
                                    <?php if(isset($admin_flag) && $admin_flag != 0) { ?>
										<form class="login100-form validate-form" action="<?php echo base_url('modifierlisteningbeginner/checkListening/')?>" method="POST" enctype="multipart/form-data">
                                            <p style="color:#d42a38; text-align: center; width: 364px;"><?php echo (isset($err_message) ? $err_message : '') ?></p>
											<?php echo form_error('mp3_file'); ?>
                                            <div class="input-group wrap-input100">
                                                <div class="input-group-prepend">
													<span class="input-group-text" style="font-size:20px;">Link File Mp3</span>
												</div>
                                                <div class="input-group">
                                                </div>
                                                <input type="file" name="mp3_file" class="file" accept=".mp3" style="visibility:hidden;position:absolute;">
                                                <input type="text" class="form-control" name="mp3_file" disabled accept=".mp3" placeholder="Upload mp3 File" style="width:85%!important;display:initial!important;height:80%!important;">
                                                <button class="browse btn btn-primary input-lg" type="button" style="height:80%!important;"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                                <span class="focus-input100"></span>
											</div>

											<?php echo form_error('listening_name'); ?>
											<div class="input-group wrap-input100">
                                                <div class="input-group-prepend">
													<span class="input-group-text" style="font-size:20px;">Listening Name</span>
												</div>
                                                <div class="tag_listening_name">
                                                    <a href="#" class="dis-block txt3 hov1 p-t-10 p-b-10" style="font-size:27px;">
                                                        <i class="fa fa-long-arrow-down m-l-5"></i> h1 tag<i class="fa fa-long-arrow-down m-l-5"></i>
                                                    </a>
                                                </div>
                                                <input class="input100" type="text" name="listening_name" id="listening_name" value="<?php if(validation_errors() == false) { foreach ($dataunit as $value) { echo $value['listening_name'];}}else{ ?><?=set_value('listening_name')?><?php } ?>" placeholder="Listening Name">
                                                <span class="focus-input100"></span>
											</div>

											<?php echo form_error('listening_details'); ?>
											<div class="input-group wrap-input100">
                                                <div class="input-group-prepend">
													<span class="input-group-text" style="font-size:20px;">Listening Details</span>
												</div>
                                                <div class="tag_listening_details">
                                                    <a href="#" id="p_tag" class="dis-block txt3 hov1 p-t-10 p-b-10" style="font-size:27px;">
                                                        <i class="fa fa-long-arrow-down m-l-5"></i> p tag<i class="fa fa-long-arrow-down m-l-5"></i>
                                                    </a>
                                                </div>
                                                <textarea class="input100" type="text" style="font-size:20px;" name="listening_details" id="listening_details" placeholder="Listening Details"><?php if(validation_errors() == false) { foreach ($dataunit as $value) { echo $value['listening_details'];}}else{ ?><?=set_value('listening_details')?><?php } ?></textarea>
                                                <span class="focus-input100"></span>
											</div>
											<div class="container-contact100-form-btn">
												<button type="submit" name="submit" class="contact100-form-btn">
													Submit
												</button>
											</div>
										</form>
									<?php }else{ ?>
										<h1 style="color:#404040;">You do not have sufficient access</h1>
									<?php } ?>
                                </ul>
                            </div>
                        </div>
                        <!-- column -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- Recent comment and chats -->
                    <!-- ============================================================== -->
                </div>

                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer text-center">
                    All Rights Reserved by Daemond. Designed and Developed by <a href="https://www.facebook.com/annnhien696">HueLe</a>
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="<?php echo base_url();?>vendors/assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="<?php echo base_url();?>vendors/assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?php echo base_url();?>vendors/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>vendors/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="<?php echo base_url();?>vendors/assets/extra-libs/sparkline/sparkline.js"></script>
        <!--Wave Effects -->
        <script src="<?php echo base_url();?>vendors/dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="<?php echo base_url();?>vendors/dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="<?php echo base_url();?>vendors/dist/js/custom.min.js"></script>

        <script src="<?php echo base_url();?>vendors/assets/libs/flot/excanvas.js"></script>
        <script src="<?php echo base_url();?>vendors/assets/libs/flot/jquery.flot.js"></script>
        <script src="<?php echo base_url();?>vendors/assets/libs/flot/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url();?>vendors/assets/libs/flot/jquery.flot.time.js"></script>
        <script src="<?php echo base_url();?>vendors/assets/libs/flot/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url();?>vendors/assets/libs/flot/jquery.flot.crosshair.js"></script>
        <script src="<?php echo base_url();?>vendors/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url();?>vendors/dist/js/pages/chart/chart-page-init.js"></script>
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