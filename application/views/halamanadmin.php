<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("assets/admin/vendor/bootstrap/css/bootstrap.min.css")?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url("assets/admin/vendor/metisMenu/metisMenu.min.css")?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url("assets/admin/dist/css/sb-admin-2.css")?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url("assets/admin/vendor/morrisjs/morris.css")?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url("assets/admin/vendor/font-awesome/css/font-awesome.min.css")?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="assets/admin/index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                 <?php
                          if ($this->session->has_userdata('username')) {
                              echo
                                 '
                                 <li>
                                    <a href="'.base_url('index.php/welcome/login').'">'.$this->session->userdata("username").'
                                    </a>
                                 </li>
                                 <li>
                                    <a href="'.base_url('index.php/welcome/logouta').'"><i class="fa fa-sign-out fa-fw"></i>logout
                                    </a>
                                 </li>
                                 ';
                          }
                          else{
                              echo
                                 '
                                 <li>
                                    <a href="'.base_url('index.php/welcome/admin').'">login
                                    </a>
                                 </li>
                                 
                                 ';
                          }
                              ?>
                <!--<a href="assets/admin/pages/login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="assets/admin/pages/login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>-->
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="loginn"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="readtabel"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        
                            </ul>
                            <!-- /.nav-second-level -->
                        <li>
                            <!-- /.nav-second-level -->
                        </li>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <center><h5>Hello owner! Wanna see your web? Klik <a href="index">here
                                    </a></h5>
            <h5>Or, Do you want to know people who already order? Go checkyour email!</h5></center>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="assets/admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="assets/admin/vendor/raphael/raphael.min.js"></script>
    <script src="assets/admin/vendor/morrisjs/morris.min.js"></script>
    <script src="assets/admin/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/admin/dist/js/sb-admin-2.js"></script>

</body>

</html>
