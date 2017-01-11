@extends('frontend.template.master')
@section('title', trans('system.app_name'))
@section('description', '')
@section('content')
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
                                        <a href="{{route('vali_keo')}}" class="view-details-link">
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
                                        <a href="{{route('vali_keo')}}" class="view-details-link">
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
                                        <a href="{{route('vali_keo')}}" class="view-details-link">
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
                                        <a href="{{route('vali_keo')}}" class="view-details-link">
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
                                        <a href="{{route('vali_keo')}}" class="view-details-link">
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
                                        <a href="{{route('vali_keo')}}" class="view-details-link">
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
                                        <a href="{{route('vali_keo_1')}}" class="view-details-link">
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
                                        <a href="{{route('vali_keo_1')}}" class="view-details-link">
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
                                        <a href="{{route('vali_keo_1')}}" class="view-details-link">
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
                                        <a href="{{route('vali_keo_1')}}" class="view-details-link">
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
                                        <a href="{{route('vali_keo_1')}}" class="view-details-link">
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
                                        <a href="{{route('vali_keo_1')}}" class="view-details-link">
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
                                        <a href="{{route('vali_keo_1')}}" class="view-details-link">
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
                                        <a href="{{route('vali_keo_1')}}" class="view-details-link">
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
                                        <a href="{{route('vali_keo_1')}}" class="view-details-link">
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
                                        <a href="{{route('vali_keo_1')}}" class="view-details-link">
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

@endsection