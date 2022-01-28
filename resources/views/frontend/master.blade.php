<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js" lang=""> <!<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

  <title>Shopaholic - e-Commerce HTML5 Template</title>
  <meta name="description" content="Shopaholic - e-Commerce HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/et-line-icons.css')}}">  

  <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}"> 
  <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/themes.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/home/home-02.css')}}">

  <!--[if lte IE 7]><script src="lte-ie7.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="{{asset('')}}frontend/assets/js/vendor/html5-3.6-respond-1.4.2.min.js"></script><![endif]-->


</head>


<body>

@include('frontend.main.header')
<!-- /#masthead -->

@include('frontend.main.banner')

<!-- /.other-banners -->



@yield('content')



 @include('frontend.main.footer')



  <div id="scroll-to-top" class="scroll-to-top">
    <i class="fa fa-angle-double-up"></i>    
  </div>


  <script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>
  <script src="{{asset('frontend/assets/js/bootstrap-rating.min.js')}}"></script>


</body>
</html>
