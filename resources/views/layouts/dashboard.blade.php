<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Home 1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/normalize.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/main.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css')}}">
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/fullcalendar.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/animate.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/style.css')}}">
    <!-- Modernize js -->
    <script src="{{asset('dashboard/js/modernizr-3.6.0.min.js')}}"></script>
    @yield('head')
</head>

<body >
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash" >
        <!-- Header Menu Area Start Here -->
        @include('partials.dashboard.navbar')
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
                <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index.html"><img src="img/logo1.png" alt="logo"></a>
                    </div>
                </div>
                @include('partials.dashboard.sidebar')
            </div>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one" >
                <!-- Breadcubs Area Start Here -->
                @include('partials.dashboard.breadcrumbs')
                <!-- Breadcubs Area End Here -->
                <!-- Dashboard summery Start Here -->
                @include('partials.alert')
                @yield('content')
                <!-- Social Media End Here -->
                <!-- Footer Area Start Here -->
                {{-- <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">{{env('APP_NAME')}}</a> {{ date('Y') }}</div>
                </footer> --}}
                <!-- Footer Area End Here -->
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="{{ asset('dashboard/js/jquery-3.3.1.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('dashboard/js/plugins.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('dashboard/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/select2.min.js') }}"></script>
    <!-- Counterup Js -->
    <script src="{{ asset('dashboard/js/jquery.counterup.min.js') }}"></script>
    <!-- Moment Js -->
    <script src="{{ asset('dashboard/js/moment.min.js') }}"></script>
    <!-- Waypoints Js -->
    <script src="{{ asset('dashboard/js/jquery.waypoints.min.js') }}"></script>
    <!-- Scroll Up Js -->
    <script src="{{ asset('dashboard/js/jquery.scrollUp.min.js') }}"></script>
    <!-- Full Calender Js -->
    <script src="{{ asset('dashboard/js/fullcalendar.min.js') }}"></script>
    <!-- Chart Js -->
    <script src="{{ asset('dashboard/js/Chart.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('dashboard/js/main.js') }}"></script>
    @yield('scripts')

</body>

</html>
