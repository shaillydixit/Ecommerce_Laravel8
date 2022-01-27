<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="{{asset('backend/assets/images/favicon.png')}}" sizes="32x32" type="image/png">
    <title>Foxio - Admin Panel HTML5 Template</title>

    <link rel="stylesheet" href="{{asset('backend/assets/css/icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/calendar-core-main.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/calendar-daygrid-main.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/responsive.css')}}">
    <!-- Color Scheme -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/colors/color.css')}}" title="theme-color1">
    <link rel="alternate stylesheet" href="{{asset('backend/assets/css/colors/color2.css')}}" title="theme-color2">
    <link rel="alternate stylesheet" href="{{asset('backend/assets/css/colors/color3.css')}}" title="theme-color3">
    <link rel="alternate stylesheet" href="{{asset('backend/assets/css/colors/color4.css')}}" title="theme-color4">
    <link rel="alternate stylesheet" href="{{asset('backend/assets/css/colors/color5.css')}}" title="theme-color5">
    <link rel="alternate stylesheet" href="{{asset('backend/assets/css/colors/color6.css')}}" title="theme-color6">
    <link rel="alternate stylesheet" href="{{asset('backend/assets/css/colors/color7.css')}}" title="theme-color7">
    <link rel="alternate stylesheet" href="{{asset('backend/assets/css/colors/color8.css')}}" title="theme-color8">
    <link rel="alternate stylesheet" href="{{asset('backend/assets/css/colors/color9.css')}}" title="theme-color9">
</head>
<body class="gray-bg">
    <main class="header-expand">
        @include('admin.body.customize')
        <!-- Side Panel -->
        @include('admin.body.topbar')
        <!-- Topbar -->
        @include('admin.body.header')
        <!-- Header -->
        @yield('content')
        <!-- Contant Wrap -->
        @include('admin.body.footer')
    </main><!-- Main Wrapper -->

    <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/chart-core.js')}}"></script>
    <script src="{{asset('backend/assets/js/charts.js')}}"></script>
    <script src="{{asset('backend/assets/js/animated.js')}}"></script>
    <script src="{{asset('backend/assets/js/pie-chart1.js')}}"></script>
    <script src="{{asset('backend/assets/js/chart1.js')}}"></script>
    <script src="{{asset('backend/assets/js/chart2.js')}}"></script>
    <script src="{{asset('backend/assets/js/chart3.js')}}"></script>
    <script src="{{asset('backend/assets/js/calendar-core-main.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/calendar-interaction-main.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/calendar-daygrid-main.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/calendar-int.js')}}"></script>
    <script src="{{asset('backend/assets/js/plugins.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/custom-scripts.js')}}"></script>
</body>	
</html>