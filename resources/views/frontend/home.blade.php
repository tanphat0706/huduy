@extends('frontend.template.master')
@section('title', trans('system.app_name'))
@section('description', '')
@section('content')
    <div class="slider-area container">
        <!-- Slider -->
        <div class="block-slider block-slider4">
            <ul class="" id="bxslider-home4">
                @foreach($carousel as $slide)
                    <li><img src="{{asset('images/carousel_img/'.$slide->image)}}" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title">
                                <span class="primary">{{$slide->title}}</span>
                            </h2>
                            <h4 class="caption subtitle">{{$slide->description}}</h4>
                            <a class="caption button-radius" href="{{$slide->link}}"><span class="icon"></span>Xem ngay</a>
                        </div>
                    </li>
                @endforeach
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
                            @foreach($site_menus as $cate_list)
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="{{asset('images/categories/'.$cate_list->image)}}" alt="">
                                        <div class="product-hover">
                                            <a href="{{route('detail-category',$cate_list->alias)}}" class="view-details-link">
                                                <i class="fa fa-link"></i> Xem chi tiết
                                            </a>
                                        </div>
                                    </div>

                                    <h2><a href="{{route('detail-category',$cate_list->alias)}}">{{$cate_list->name}}</a></h2>
                                </div>
                            @endforeach
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
                            @foreach($products_high as $product_new)
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="{{asset('images/products/'.$product_new->image_1)}}" alt="">
                                        <div class="product-hover">
                                            <a href="{{route('detail-product',[$cate_menus->getCateAlias($product_new->category_id)->alias,$product_new->alias])}}" class="view-details-link">
                                                <i class="fa fa-link"></i> Xem chi tiết
                                            </a>
                                        </div>
                                    </div>

                                    <h2><a href="{{route('detail-product',[$cate_menus->getCateAlias($product_new->category_id)->alias,$product_new->alias])}}">{{$product_new->name}}</a></h2>
                                </div>
                            @endforeach
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
                            @foreach($products_bestseller as $bestSeller)
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="{{asset('images/products/'.$bestSeller->image_1)}}" alt="">
                                        <div class="product-hover">
                                            <a href="{{route('detail-product',[$cate_menus->getCateAlias($bestSeller->category_id)->alias,$bestSeller->alias])}}" class="view-details-link">
                                                <i class="fa fa-link"></i> Xem chi tiết
                                            </a>
                                        </div>
                                    </div>

                                    <h2><a href="{{route('detail-product',[$cate_menus->getCateAlias($bestSeller->category_id)->alias,$bestSeller->alias])}}">{{$bestSeller->name}}</a></h2>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->

@endsection