<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', '') | {{ trans('system.app_name') }}</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=vietnamese"
          rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <script src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="{{asset('plugins/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/fancybox/helpers/jquery.fancybox-buttons.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/fancybox/helpers/jquery.fancybox-thumbs.css')}}" rel="stylesheet">
</head>
<body>

@include('frontend.template.header')

<div class="wrapper">
    @yield('content')
</div>

@include('frontend.template.footer')

<!-- Bootstrap JS form CDN -->
<script src="{{asset('css/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- jQuery sticky menu -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.sticky.js')}}"></script>

<!-- jQuery easing -->
<script src="{{asset('js/jquery.easing.1.3.min.js')}}"></script>

<!-- Main Script -->
<script src="{{asset('js/main_front.js')}}"></script>

<!-- Slider -->
<script type="text/javascript" src="{{asset('js/bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.slider.js')}}"></script>

<script src="{{asset('plugins/fancybox/jquery.mousewheel-3.0.6.pack.js')}}"></script>
<script src="{{asset('plugins/fancybox/jquery.fancybox.js')}}"></script>
<script src="{{asset('plugins/fancybox/helpers/jquery.fancybox-buttons.js')}}"></script>
<script src="{{asset('plugins/fancybox/helpers/jquery.fancybox-thumbs.js')}}"></script>
<script src="{{asset('plugins/fancybox/helpers/jquery.fancybox-media.js')}}"></script>
</body>
</html>