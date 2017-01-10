<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HUDUY Demo</title>

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
</head>
<body>
<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="user-menu">
                    <ul>
                        <li><i class="fa fa-phone"></i> 0907 606 887 - 0908 629 886</li>
                        <li><a href="https://www.facebook.com/balohuduy"><i class="fa fa-facebook"></i>Facebook</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End header area -->
<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href="#"><img src="{{asset('images/logo-huduy.png')}}"></a></h1>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="search">
                    <div class="from-search">
                        <form class="form-search" method="post">
                            <input type="text" class="form-control" name="keyword" maxlength="20" placeholder="Tìm kiếm">
                            <button type="submit" class="btn btn_search"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End site branding area -->

<!-- PC menu -->
<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Trang chủ</a></li>
                    <li class="sp-mode"><a href="#">Sản phẩm</a></li>
                    <li class="sub-menu-parent pc-mode">
                        <a href="#">Sản phẩm</a>
                        <ul class="sub-menu">
                            <li><a href="#">Vali kéo</a></li>
                            <li><a href="#">Balo laptop</a></li>
                            <li><a href="#">Balo học sinh</a></li>
                            <li><a href="#">Balo du lịch</a></li>
                            <li><a href="#">Cặp táp</a></li>
                            <li><a href="#">Túi du lịch</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->

<div class="slider-area container">
    <!-- Slider -->
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
            <li><img src="{{asset('images/h4-slide2.png')}}" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        <span class="primary">Balo học sinh</span>
                    </h2>
                    <h4 class="caption subtitle">Với nhiều mẫu mã mới</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Xem ngay</a>
                </div>
            </li>
            <li><img src="{{asset('images/banner_2.jpg')}}" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        <span class="primary">Túi du lịch</span>
                    </h2>
                    <h4 class="caption subtitle">Nhiều mẫu sành điệu</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Xem ngay</a>
                </div>
            </li>
            <li><img src="{{asset('images/banner_3.jpg')}}" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        <span class="primary">Vali kéo</span>
                    </h2>
                    <h4 class="caption subtitle">Đầy màu sắc</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Xem ngay</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- ./Slider -->
</div> <!-- End slider area -->

<div class="promo-area container-fluid">
    <div class="container">
        <h1>CTY TNHH SẢN XUẤT MAY TÚI XÁCH HOÀNG DUY</h1>
        <p>Sản phẩm của HUDUY đạt chuẩn chất lượng, mang phong cách năng động, trẻ trung sẽ là món đồ phụ kiện không thể
            thiếu của các bạn trẻ ngày nay.. Với thiết kế đơn giản, màu sắc đa dạng, kiểu dáng trẻ trung phù hợp với mọi
            lứa tuổi khách hàng, đặc biệt là sinh viên. Chất liệu vải bền có khả năng chống thấm, nhiều ngăn tiện dụng.
        </p>
    </div>

</div> <!-- End promo area -->

<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">DANH MỤC SẢN PHẨM</h2>
                    <div class="product-carousel">
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('images/product-1.jpg')}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="view-details-link">
                                        <i class="fa fa-link"></i> Xem chi tiết
                                    </a>
                                </div>
                            </div>

                            <h2><a href="#">Vali kéo</a></h2>
                        </div>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('images/product-2.jpg')}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="view-details-link">
                                        <i class="fa fa-link"></i> Xem chi tiết
                                    </a>
                                </div>
                            </div>

                            <h2>Balo laptop</h2>
                        </div>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('images/product-3.jpg')}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="view-details-link">
                                        <i class="fa fa-link"></i> Xem chi tiết
                                    </a>
                                </div>
                            </div>

                            <h2>Balo học sinh</h2>
                        </div>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('images/product-4.jpg')}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="view-details-link">
                                        <i class="fa fa-link"></i> Xem chi tiết
                                    </a>
                                </div>
                            </div>

                            <h2><a href="#">Balo du lịch</a></h2>
                        </div>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('images/product-5.jpg')}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="view-details-link">
                                        <i class="fa fa-link"></i> Xem chi tiết
                                    </a>
                                </div>
                            </div>

                            <h2>Cặp táp</h2>
                        </div>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('images/product-6.jpg')}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="view-details-link">
                                        <i class="fa fa-link"></i> Xem chi tiết
                                    </a>
                                </div>
                            </div>

                            <h2><a href="#">Túi du lịch</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->

<div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <div class="container-fluid nopadding brands-tit-div">
                        <h2 class="section-title">Sản phẩm mới</h2>
                    </div>
                    <div class="product-carousel">
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('images/sp-moi-6.jpg')}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="view-details-link">
                                        <i class="fa fa-link"></i> Xem chi tiết
                                    </a>
                                </div>
                            </div>

                            <h2><a href="#">Cặp táp học sinh</a></h2>
                        </div>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('images/sp-moi-7.jpg')}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="view-details-link">
                                        <i class="fa fa-link"></i> Xem chi tiết
                                    </a>
                                </div>
                            </div>

                            <h2>Balo học sinh</h2>
                        </div>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('images/sp-moi-8.jpg')}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="view-details-link">
                                        <i class="fa fa-link"></i> Xem chi tiết
                                    </a>
                                </div>
                            </div>

                            <h2>Balo du lịch</h2>
                        </div>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('images/sp-moi-9.jpg')}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="view-details-link">
                                        <i class="fa fa-link"></i> Xem chi tiết
                                    </a>
                                </div>
                            </div>

                            <h2><a href="#">Cặp táp nam</a></h2>
                        </div>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('images/sp-moi-10.jpg')}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="view-details-link">
                                        <i class="fa fa-link"></i> Xem chi tiết
                                    </a>
                                </div>
                            </div>

                            <h2>Balo laptop</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End brands area -->
<div class="brands-area last-block">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <div class="container-fluid nopadding brands-tit-div">
                        <h2 class="section-title">Sản phẩm bán chạy</h2>
                    </div>
                    <div class="product-carousel">
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('images/sp-moi-1.jpg')}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="view-details-link">
                                        <i class="fa fa-link"></i> Xem chi tiết
                                    </a>
                                </div>
                            </div>

                            <h2><a href="#">Cặp táp học sinh</a></h2>
                        </div>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('images/sp-moi-2.jpg')}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="view-details-link">
                                        <i class="fa fa-link"></i> Xem chi tiết
                                    </a>
                                </div>
                            </div>

                            <h2>Balo học sinh</h2>
                        </div>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('images/sp-moi-3.jpg')}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="view-details-link">
                                        <i class="fa fa-link"></i> Xem chi tiết
                                    </a>
                                </div>
                            </div>

                            <h2>Balo du lịch</h2>
                        </div>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('images/sp-moi-4.jpg')}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="view-details-link">
                                        <i class="fa fa-link"></i> Xem chi tiết
                                    </a>
                                </div>
                            </div>

                            <h2><a href="#">Cặp táp nam</a></h2>
                        </div>
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('images/sp-moi-5.jpg')}}" alt="">
                                <div class="product-hover">
                                    <a href="#" class="view-details-link">
                                        <i class="fa fa-link"></i> Xem chi tiết
                                    </a>
                                </div>
                            </div>

                            <h2>Balo laptop</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End brands area -->
<div class="promo-area-last container-fluid">
    <div class="container">
        <h2>Liên hệ trực tiếp với chúng tôi để được nhận giá ưu đãi.</h2>
    </div>

</div> <!-- End promo area -->
<div class="footer-top-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <div class="footer-about-us">
                    <h2><span>HUDUY</span></h2>
                    <p>Sản phẩm của HUDUY đạt chuẩn chất lượng, mang phong cách năng động, trẻ trung sẽ là món đồ phụ kiện không thể thiếu của các bạn trẻ ngày nay.. Với thiết kế đơn giản, màu sắc đa dạng, kiểu dáng trẻ trung phù hợp với mọi lứa tuổi khách hàng, đặc biệt là sinh viên. Chất liệu vải bền có khả năng chống thấm, nhiều ngăn tiện dụng.</p>

                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">Danh mục sản phẩm</h2>
                    <ul>
                        <li><a href="#">Vali kéo</a></li>
                        <li><a href="#">Balo laptop</a></li>
                        <li><a href="#">Balo học sinh</a></li>
                        <li><a href="#">Balo du lịch</a></li>
                        <li><a href="#">Cặp táp</a></li>
                        <li><a href="#">Túi du lịch</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-md-4 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">Liên hệ</h2>
                    <ul>
                        <li>Địa chỉ: <span class="contact-ft">B65 - B66 Đường số 6, khu HimLam Đồng Diều, X.Bình Hưng, H.Bình Chánh</span></li>
                        <li>Điện thoại: </span><span class="contact-ft">08 54312807</span></li>
                        <li>Điện thoại di động 1: </span><span class="contact-ft">0907 606 887</span></li>
                        <li>Điện thoại di động 2: </span><span class="contact-ft">0908 629 886</span></li>
                        <li>Điện thoại di động 3: <span class="contact-ft">0903 853 981</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End footer top area -->

<div class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>&copy; 2017 Túi xách Hoàng Duy. All Rights Reserved. </p>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End footer bottom area -->

<!-- Latest jQuery form server -->
{{--<script src="https://code.jquery.com/jquery.min.js"></script>--}}


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
</body>
</html>