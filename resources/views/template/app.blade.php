<!DOCTYPE html>
<html lang="en">

<head>
    <title>SEBI SOOCIAL FUND FUND</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
    <meta name="keywords"
        content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('img') }}/kodegiri.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('template') }}/assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/jquery.mCustomScrollbar.css">
    @yield('css-modal')
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <img class="img-fluid" width="50%" src="{{ asset('img') }}/kodegiri.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="{{ asset('template') }}/javascript:void(0)"><i
                                            class="ti-menu"></i></a></div>
                            </li>
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <span>{{ Auth::user()->nama_lengkap}}</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="{{ route('profile.show', Auth::user()->id)}}">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{ route('logout')}}" method="POST">
                                            @csrf
                                            <a type="submit">
                                                <button type="submit" class="btn btn-sm btn-primary">
                                                    <i class="ti-layout-sidebar-left"></i> Logout
                                                </button>
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="{{ route('home')}}">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Fitur</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a>
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Document
                                            Management</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        @yield('konten')
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Warning Section Ends -->
        <!-- Required Jquery -->

        <script type="text/javascript" src="{{ asset('template') }}/assets/js/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('template') }}/assets/js/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="{{ asset('template') }}/assets/js/popper.js/popper.min.js"></script>
        <script type="text/javascript" src="{{ asset('template') }}/assets/js/bootstrap/js/bootstrap.min.js">
        </script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="{{ asset('template') }}/assets/js/jquery-slimscroll/jquery.slimscroll.js">
        </script>
        <!-- modernizr js -->
        <script type="text/javascript" src="{{ asset('template') }}/assets/js/modernizr/modernizr.js"></script>
        <!-- am chart -->
        <script src="{{ asset('template') }}/assets/pages/widget/amchart/amcharts.min.js"></script>
        <script src="{{ asset('template') }}/assets/pages/widget/amchart/serial.min.js"></script>
        <!-- Chart js -->
        <script type="text/javascript" src="{{ asset('template') }}/assets/js/chart.js/Chart.js"></script>
        <!-- Todo js -->
        <script type="text/javascript " src="{{ asset('template') }}/assets/pages/todo/todo.js "></script>
        <!-- Custom js -->
        <script type="text/javascript" src="{{ asset('template') }}/assets/pages/dashboard/custom-dashboard.min.js">
        </script>
        <script type="text/javascript" src="{{ asset('template') }}/assets/js/script.js"></script>
        <script type="text/javascript " src="{{ asset('template') }}/assets/js/SmoothScroll.js"></script>
        <script src="{{ asset('template') }}/assets/js/pcoded.min.js"></script>
        <script src="{{ asset('template') }}/assets/js/vartical-demo.js"></script>
        <script src="{{ asset('template') }}/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        @stack('js-popup')
</body>

</html>