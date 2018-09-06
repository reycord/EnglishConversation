<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome English Conversation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors/bootstrap/dist/css/bootstrap-datepicker3.min.css"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendors/bootstrap/dist/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendors/bootstrap/dist/js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendors/bootstrap/dist/js/bootstrap-datetimepicker.min.js"></script>
        <script type='text/javascript'>
        </script>
    </head>
    <body>
        <nav class="navbar fixed-top navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>" style="font-size: 13px;"></span>EnglishConversation</a>
                </div>
                <ul class="nav navbar-nav" style="font-size: 13px;">
                    <li><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-book"></span> History</a></li>
                    <li class="active"><a href="<?php echo base_url(); ?>Translate"><span class="glyphicon glyphicon-import"></span> Translate</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-dashboard"></span> Vocabulary <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="glyphicon glyphicon-ice-lolly"></span> Beginner</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-ice-lolly-tasted"></span> High Beginner</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-lamp"></span> Low Intermediae</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-bishop"></span> Intermediate</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-tent"></span> High Intermediate</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-baby-formula"></span> Low Advanced</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-grain"></span> Advanced</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-headphones"></span> Listening <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="glyphicon glyphicon-ice-lolly"></span> Beginner</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-ice-lolly-tasted"></span> High Beginner</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-lamp"></span> Low Intermediae</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-bishop"></span> Intermediate</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-tent"></span> High Intermediate</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-baby-formula"></span> Low Advanced</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-grain"></span> Advanced</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-list-alt"></span> Grammar <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="glyphicon glyphicon-ice-lolly"></span> Beginner</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-ice-lolly-tasted"></span> High Beginner</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-lamp"></span> Low Intermediae</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-bishop"></span> Intermediate</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-tent"></span> High Intermediate</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-baby-formula"></span> Low Advanced</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-grain"></span> Advanced</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-education"></span> Test Exam <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="glyphicon glyphicon-ice-lolly"></span> Beginner</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-ice-lolly-tasted"></span> High Beginner</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-lamp"></span> Low Intermediae</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-bishop"></span> Intermediate</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-tent"></span> High Intermediate</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-baby-formula"></span> Low Advanced</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-grain"></span> Advanced</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="glyphicon glyphicon-globe"></span> Surfing Web</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-retweet"></span> Q&A</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if (isset($_SESSION['success'])) { ?>
                        <li><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url(); ?>Authenticate"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>

		<div class="container">
    		<div class="row">
        		<div class="col-sm-10 col-sm-offset-1">
            		<div class="panel-body">
                    	<form class="form-horizontal" role="form" action="" method="POST">
							<div class="form-group">
								<h1>Translate Form</h1>
                            </div>
                    		<div class="form-group">
                        		<div class="col-sm-offset-3 col-sm-12">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li class="selected"><a href="#">English => Vietnamese</a></li>
                                        <li><a href="#">Vietnamese => English</a></li>
                                    </ul>
                                    <button type="button" class="btn btn-primary" name="translate">Translate</button>
                        		</div>
							</div>
                            <div class="form-group">
                        		<div class="col-sm-12">
                                    <div class="col-sm-6">
                                        <textarea type="text" id="txt_area_source" class="md-textarea form-control" rows="10"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea type="text" id="txt_area_target" class="md-textarea form-control" rows="10"></textarea>
                                    </div>
                        		</div>
							</div>
                    	</form>
                	</div>
        		</div>
   			</div>
		</div>
    </body>
</html> -->


