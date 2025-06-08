<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>srtdash - SEO Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ url('/back/images/icon/favicon.ico') }}">
    <link rel="stylesheet" href="{{ url('/back/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/back/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('/back/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('/back/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ url('/back/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('/back/css/slicknav.min.css') }}">
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <link rel="stylesheet" href="{{ url('/back/css/typography.css') }}">
    <link rel="stylesheet" href="{{ url('/back/css/default-css.css') }}">
    <link rel="stylesheet" href="{{ url('/back/css/styles.css') }}">
    <link rel="stylesheet" href="{{ url('/back/css/responsive.css') }}">
    <script src="{{ url('/back/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    @vite(['resources/css//back/app.css', 'resources/js//back/app.js'])
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="page-container">
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="/admdashboard"><img src="{{ url('back/images/icon/logo.png') }}" alt="logo" style="max-width: 200px"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="{{ ($menu=='Dashboard')?'active':'' }}">
                                <a href="/admdashboard"><i class="ti-dashboard"></i><span>dashboard</span></a>
                            </li>
                            <li class="{{ ($menu=='Services')?'active':'' }}">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-settings"></i><span>Services</span></a>
                                <ul class="collapse">
                                    <li class="{{ isset($submenu)&&($submenu=='Manage Services')?'active':'' }}"><a href="/admdashboard/services">Manage Service</a></li>
                                    <li class="{{ isset($submenu)&&($submenu=='Service Details')?'active':'' }}"><a href="/admdashboard/services-details">Service Details</a></li>
                                </ul>
                            </li>
                            <li class="{{ ($menu=='Clients')?'active':'' }}">
                                <a href="/admdashboard/clients"><i class="ti-user"></i><span>Client</span></a>
                            </li>
                            <li class="{{ ($menu=='Mitra')?'active':'' }}">
                                <a href="/admdashboard/mitra"><i class="ti-hand-drag"></i><span>Mitra</span></a>
                            </li>
                            <li class="{{ ($menu=='API')?'active':'' }}">
                                <a href="/admdashboard/api" aria-expanded="true"><i class="ti-plug"></i><span>API</span></a>
                                <ul class="collapse">
                                    <li><a href="/admdashboard/api/miniq">MiniQ</a></li>
                                </ul>
                            </li>
                            <li class="{{ ($menu=='Portofolio')?'active':'' }}">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-gallery"></i><span>Portofolio</span></a>
                                <ul class="collapse">
                                    <li><a href="/admdashboard/portofolio-categories">categories</a></li>
                                    <li><a href="/admdashboard/portofolio">Working Experience</a></li>
                                </ul>
                            </li>
                            <li class="{{ ($menu=='Message')?'active':'' }}">
                                <a href="/admdashboard/message"><i class="ti-comment-alt"></i><span>Message</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="header-area">
                <div class="row align-items-center">
                    <div class="col-md-1 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        {{-- <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div> --}}
                    </div>
                    <div class="col-sm-5 clearfix">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">{{ $menu }}</h4>
                            @if (isset($subsubmenu))
                                <ul class="breadcrumbs pull-left">
                                    <li><a href="/admdashboard">Home</a></li>
                                    <li><a href="{{ $submenulink }}">{{ $submenu }}</a></li>
                                    <li><span>{{ $subsubmenu }}</span></li>
                                </ul>
                            @elseif (isset($submenu))  
                                <ul class="breadcrumbs pull-left">
                                    <li><a href="/admdashboard">Home</a></li>
                                    <li><span>{{ $submenu }}</span></li>
                                </ul>  
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="{{ asset('back/images/author/avatar.png') }}" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Kumkum Rai <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('body')
        </div>
        <footer>
            <div class="footer-area">
                <p>© Copyright 2025. All right reserved. Swarakyat Nusantara</p>
            </div>
        </footer>
    </div>
    <script src="{{ url('/back/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ url('/back/js/popper.min.js') }}"></script>
    <script src="{{ url('/back/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/back/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('/back/js/metisMenu.min.js') }}"></script>
    <script src="{{ url('/back/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ url('/back/js/jquery.slicknav.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ url('/back/js/line-chart.js') }}"></script>
    <script src="{{ url('/back/js/pie-chart.js') }}"></script>
    <script src="{{ url('/back/js/bar-chart.js') }}"></script>
    <script src="{{ url('/back/js/maps.js') }}"></script>
    <script src="{{ url('/back/js/plugins.js') }}"></script>
    <script src="{{ url('/back/js/scripts.js') }}"></script>
    @yield('script')
</body>

</html>
