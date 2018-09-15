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
                                    <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                                    <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                            <?php } ?>
                            <!-- ============================================================== -->
                            <!-- Search -->
                            <!-- ============================================================== -->
                            <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                                <form class="app-search position-absolute">
                                    <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                                </form>
                            </li>
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
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>history" aria-expanded="false"><i class="mdi mdi-history"></i><span class="hide-menu">History</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>translate" aria-expanded="false"><i class="mdi mdi-google-translate"></i><span class="hide-menu">Translate</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>vocabulary" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Vocabulary</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>listening" aria-expanded="false"><i class="mdi mdi-headphones"></i><span class="hide-menu">Listening</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>grammar" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Grammar</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>testexam" aria-expanded="false"><i class="mdi mdi-timer"></i><span class="hide-menu">Test Exam</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>surfingweb" aria-expanded="false"><i class="mdi mdi-web"></i><span class="hide-menu">Surfing Web</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>questionandanswer" aria-expanded="false"><i class="mdi mdi-calendar-question"></i><span class="hide-menu">Q&A</span></a></li>
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
                            <h4 class="page-title">Home</h4>
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
                                <div class="card-body">
                                    <h4 class="card-title m-b-0">List Vocabulary</h4>
                                </div>
                                <ul class="list-style-none">
                                    <li class="d-flex no-block card-body">
                                        <i class="fa fa-check-circle w-30px m-t-5"></i>
                                        <div>
                                            <a href="#" class="m-b-0 font-medium p-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                            <span class="text-muted">dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                        <div class="ml-auto">
                                            <div class="tetx-right">
                                                <h5 class="text-muted m-b-0">20</h5>
                                                <span class="text-muted font-16">Jan</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex no-block card-body border-top">
                                        <i class="fa fa-gift w-30px m-t-5"></i>
                                        <div>
                                            <a href="#" class="m-b-0 font-medium p-0">Congratulation Maruti, Happy Birthday</a>
                                            <span class="text-muted">many many happy returns of the day</span>
                                        </div>
                                        <div class="ml-auto">
                                            <div class="tetx-right">
                                                <h5 class="text-muted m-b-0">11</h5>
                                                <span class="text-muted font-16">Jan</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex no-block card-body border-top">
                                        <i class="fa fa-plus w-30px m-t-5"></i>
                                        <div>
                                            <a href="#" class="m-b-0 font-medium p-0">Maruti is a Responsive Admin theme</a>
                                            <span class="text-muted">But already everything was solved. It will ...</span>
                                        </div>
                                        <div class="ml-auto">
                                            <div class="tetx-right">
                                                <h5 class="text-muted m-b-0">19</h5>
                                                <span class="text-muted font-16">Jan</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex no-block card-body border-top">
                                        <i class="fa fa-leaf w-30px m-t-5"></i>
                                        <div>
                                            <a href="#" class="m-b-0 font-medium p-0">Envato approved Maruti Admin template</a>
                                            <span class="text-muted">i am very happy to approved by TF</span>
                                        </div>
                                        <div class="ml-auto">
                                            <div class="tetx-right">
                                                <h5 class="text-muted m-b-0">20</h5>
                                                <span class="text-muted font-16">Jan</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-flex no-block card-body border-top">
                                        <i class="fa fa-question-circle w-30px m-t-5"></i>
                                        <div>
                                            <a href="#" class="m-b-0 font-medium p-0"> I am alwayse here if you have any question</a>
                                            <span class="text-muted">we glad that you choose our template</span>
                                        </div>
                                        <div class="ml-auto">
                                            <div class="tetx-right">
                                                <h5 class="text-muted m-b-0">15</h5>
                                                <span class="text-muted font-16">Jan</span>
                                            </div>
                                        </div>
                                    </li>
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
        <!--This page JavaScript -->
        <!-- <script src="<?php echo base_url();?>vendors/dist/js/pages/dashboards/dashboard1.js"></script> -->
        <!-- Charts js Files -->
        <script src="<?php echo base_url();?>vendors/assets/libs/flot/excanvas.js"></script>
        <script src="<?php echo base_url();?>vendors/assets/libs/flot/jquery.flot.js"></script>
        <script src="<?php echo base_url();?>vendors/assets/libs/flot/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url();?>vendors/assets/libs/flot/jquery.flot.time.js"></script>
        <script src="<?php echo base_url();?>vendors/assets/libs/flot/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url();?>vendors/assets/libs/flot/jquery.flot.crosshair.js"></script>
        <script src="<?php echo base_url();?>vendors/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url();?>vendors/dist/js/pages/chart/chart-page-init.js"></script>

    </body>

</html>