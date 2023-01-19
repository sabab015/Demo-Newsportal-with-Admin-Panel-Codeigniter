<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="frontend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="frontend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="frontend/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="frontend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link rel="stylesheet" href="frontend/dashboard.css">

    <link href="frontend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <link href="frontend/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <link href="frontend/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="frontend/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="clearfix"></div>
                    <div class="profile clearfix">
                        <div class="profile_info">
                            <span>Welcome</span>
                            <h2><?php echo $this->session->userdata("admin_name"); ?></h2>
                        </div>
                    </div>
                    <br />
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-plus-square-o"></i> Dashboard</a></li>
                                <li><a href="<?php echo base_url(); ?>create-form"><i class="fa fa-plus-square-o"></i> Create Form </a></li>
                                <li><a href="<?php echo base_url(); ?>manage-form"><i class="fa fa-edit"></i> Manage Form </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <?php echo $this->session->userdata("admin_name"); ?> <span class=" fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="<?php base_url(); ?>logout"><i class="fa fa-sign-out pull-right"></i> Log Out </a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="right_col" role="main">
                <?php echo $admin_main_content; ?>
            </div>

            <footer>
                <div class="clearfix"></div>
            </footer>
        </div>
    </div>

    <script src="frontend/vendors/jquery/dist/jquery.min.js"></script>
    <script src="frontend/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="frontend/vendors/fastclick/lib/fastclick.js"></script>
    <script src="frontend/vendors/nprogress/nprogress.js"></script>
    <script src="frontend/vendors/Chart.js/dist/Chart.min.js"></script>
    <script src="frontend/vendors/gauge.js/dist/gauge.min.js"></script>
    <script src="frontend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="frontend/vendors/iCheck/icheck.min.js"></script>
    <script src="frontend/vendors/skycons/skycons.js"></script>
    <script src="frontend/vendors/Flot/jquery.flot.js"></script>
    <script src="frontend/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="frontend/vendors/Flot/jquery.flot.time.js"></script>
    <script src="frontend/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="frontend/vendors/Flot/jquery.flot.resize.js"></script>
    <script src="frontend/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="frontend/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="frontend/vendors/flot.curvedlines/curvedLines.js"></script>
    <script src="frontend/vendors/DateJS/build/date.js"></script>
    <script src="frontend/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="frontend/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="frontend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="frontend/vendors/moment/min/moment.min.js"></script>
    <script src="frontend/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="frontend/build/js/custom.min.js"></script>

</body>

</html>