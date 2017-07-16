<!--
 * GenesisUI - Bootstrap 4 Admin Template
 * @version v1.8.1
 * @link https://genesisui.com
 * Copyright (c) 2017 creativeLabs Łukasz Holeczek
 * @license Commercial
 -->
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from genesisui.com/demo/clever/bootstrap4-static/ by HTTrack Website Copier/3.x [XR&CO'2005], Sun, 04 Jun 2017 05:07:06 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Clever - Bootstrap 4 Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,jQuery,CSS,HTML,RWD,Dashboard,Vue,Vue.js,React,React.js">
    <link rel="shortcut icon" href="public/img/favicon.png">

    <title>Clever - Bootstrap 4 Admin Template</title>

    <!-- Icons -->
    <link href="public/css/font-awesome.min.css" rel="stylesheet">
    <link href="public/css/simple-line-icons.css" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="public/css/style.css" rel="stylesheet">

</head>

<!-- BODY options, add following classes to body to change options

// Header options
1. '.header-fixed'					- Fixed Header

// Sidebar options
1. '.sidebar-fixed'					- Fixed Sidebar
2. '.sidebar-hidden'				- Hidden Sidebar
3. '.sidebar-off-canvas'		- Off Canvas Sidebar
4. '.sidebar-compact'				- Compact Sidebar Navigation (Only icons)

// Aside options
1. '.aside-menu-fixed'			- Fixed Aside Menu
2. '.aside-menu-hidden'			- Hidden Aside Menu
3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

// Footer options
1. 'footer-fixed'						- Fixed footer

-->

<body class="app header-fixed ">
    <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler hidden-lg-up" type="button">☰</button>
        <a class="navbar-brand" href="#"></a>
        <ul class="nav navbar-nav hidden-md-down b-r-1">
            <li class="nav-item">
                <a class="nav-link navbar-toggler sidebar-toggler" href="#">☰</a>
            </li>

        </ul>
        <form class="form-inline float-left b-r-1 px-2 hidden-md-down">
            <i class="fa fa-search"></i>
            <input class="form-control" type="text" placeholder="Search...">
        </form>
        <ul class="nav navbar-nav ml-auto">
            
            <li class="nav-item dropdown hidden-md-down">
                <a class="nav-link nav-pill" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-bell"></i>
                    <span class="badge badge-pill badge-danger">5</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">

                    <div class="dropdown-header text-center">
                        <strong>You have 5 notifications</strong>
                    </div>

                    <a href="#" class="dropdown-item">
                        <i class="icon-user-follow text-success"></i> New user registered
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="icon-user-unfollow text-danger"></i> User deleted
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="icon-chart text-info"></i> Sales report is ready
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="icon-basket-loaded text-primary"></i> New client
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="icon-speedometer text-warning"></i> Server overloaded
                    </a>

                    <div class="dropdown-header text-center">
                        <strong>Server</strong>
                    </div>

                    <a href="#" class="dropdown-item">
                        <div class="text-uppercase mb-q">
                            <small><b>CPU Usage</b>
                            </small>
                        </div>
                        <span class="progress progress-xs">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </span>
                        <small class="text-muted">348 Processes. 1/4 Cores.</small>
                    </a>
                    <a href="#" class="dropdown-item">
                        <div class="text-uppercase mb-q">
                            <small><b>Memory Usage</b>
                            </small>
                        </div>
                        <span class="progress progress-xs">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </span>
                        <small class="text-muted">11444GB/16384MB</small>
                    </a>
                    <a href="#" class="dropdown-item">
                        <div class="text-uppercase mb-q">
                            <small><b>SSD 1 Usage</b>
                            </small>
                        </div>
                        <span class="progress progress-xs">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </span>
                        <small class="text-muted">243GB/256GB</small>
                    </a>
                </div>
            </li>
            <li class="nav-item hidden-md-down">
                <a class="nav-link nav-pill" href="#"><i class="icon-location-pin"></i></a>
            </li>

        </ul>
    </header>

    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-title text-center">
                        <span>Dashboard</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=home&controller=pages"><i class="icon-speedometer"></i> Dashboard <span class="badge badge-info">NEW</span></a>
                    </li>
                    <li class="divider"></li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=index&controller=user"><i class="icon-people"></i> Users </a>
                    </li>
                    <li class="divider"></li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=index&controller=coache"><i class="icon-fire"></i>Coaches </a>
                    </li>
                    <li class="divider"></li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=index&controller=place"><i class="icon-location-pin"></i>Places </a>
                    </li>
                    <li class="divider"></li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=index&controller=booking"><i class="icon-credit-card"></i>Bookings </a>
                    </li>
                    <li class="divider"></li>
                </ul>
            </nav>
        </div>

        <!-- Main content -->
        <main class="main">

            <?php
                require_once('routes.php');
            ?>
            <!-- /.conainer-fluid -->
        </main>

       

    </div>

    <footer class="app-footer">
        <a href="https://genesisui.com/">Clever</a> © 2017 creativeLabs.
        <span class="float-right">
            Powered by <a href="https://genesisui.com/">GenesisUI</a>
        </span>
    </footer>

    <!-- Bootstrap and necessary plugins -->
    <script src="public/js/libs/jquery.min.js"></script>
    <script src="public/js/libs/tether.min.js"></script>
    <script src="public/js/libs/bootstrap.min.js"></script>
    <script src="public/js/libs/pace.min.js"></script>


    <!-- Plugins and scripts required by all views -->
    <script src="public/js/libs/Chart.min.js"></script>


    <!-- GenesisUI main scripts -->

    <script src="public/js/app.js"></script>





    <!-- Plugins and scripts required by this views -->
    <script src="public/js/libs/toastr.min.js"></script>
    <script src="public/js/libs/gauge.min.js"></script>
    <script src="public/js/libs/moment.min.js"></script>
    <script src="public/js/libs/daterangepicker.js"></script>


    <script src="public/js/libs/jquery.dataTables.min.js"></script>
    <script src="public/js/libs/dataTables.bootstrap4.min.js"></script>


    <!-- Custom scripts required by this view -->
    <script src="public/js/views/tables.js"></script>

</body>


<!-- Mirrored from genesisui.com/demo/clever/bootstrap4-static/ by HTTrack Website Copier/3.x [XR&CO'2005], Sun, 04 Jun 2017 05:07:06 GMT -->
</html>













