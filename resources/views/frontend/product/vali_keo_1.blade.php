@extends('frontend.template.master')
@section('title', trans('system.app_name'))
@section('description', '')
@section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Vali kéo mẫu 1</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-content">
                        <div class="product-breadcroumb">
                            <a href="">Trang chủ</a>
                            <a href="">Vali kéo</a>
                            <a href="">Vali kéo mẫu 1</a>
                        </div>

                        <div class="row">
                            <!-- Show the Images -->
                            <div class="column product-images col-sm-6">
                                    <a class="fancybox" href="{{asset('images/vali-keo-1.jpg')}}" data-fancybox-group="gallery" >
                                        <img src="{{asset('images/vali-keo-1.jpg')}}" alt=""/>
                                    </a>
                                    <div class="thumbnails">
                                        <a class="fancybox" href="{{asset('images/vali-keo-1-2.jpg')}}" data-fancybox-group="gallery">
                                            <img src="{{asset('images/vali-keo-1-2.jpg')}}" alt=""/>
                                        </a>
                                        <a class="fancybox" href="{{asset('images/vali-keo-1-3.jpg')}}" data-fancybox-group="gallery">
                                            <img src="{{asset('images/vali-keo-1-3.jpg')}}" alt=""/>
                                        </a>
                                        <a class="fancybox" href="{{asset('images/vali-keo-1-4.jpg')}}" data-fancybox-group="gallery">
                                            <img src="{{asset('images/vali-keo-1-4.jpg')}}" alt=""/>
                                        </a>
                                        <a class="fancybox" href="{{asset('images/vali-keo-1-5.jpg')}}" data-fancybox-group="gallery">
                                            <img src="{{asset('images/vali-keo-1-5.jpg')}}" alt=""/>
                                        </a>
                                    </div>
                                </div>
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">Vali kéo mẫu 1</h2>
                                    <div class="product-code">MS12394</div>
                                    <div class="product_meta">
                                        <span class="posted_in">Danh mục sản phẩm:
                                            <a href="{{route('vali_keo')}}">
                                                Vali kéo
                                            </a>
                                        </span>
                                    </div>

                                    <div class="product-description">
                                        <h4><i class="fa fa-list"></i> Thông tin sản phẩm</h4>
                                        <p>- Với chất liệu 100% nhựa PC siêu bền, siêu nhẹ giúp cho vali có độ đàn hồi tốt, chịu được nhiệt độ cao, chống va đập và chống thấm nước.</p>
                                        <p>- Dây kéo trên vali được trang bị kết hợp với khóa số TSA được cục an ninh Hòa Kỳ chứng nhận vì vậy bạn có thể yên tâm hành lý sẽ luôn được đảm bảo an toàn.</p>
                                        <p>- Cần kéo của vali Rovigo được làm từ hợp kim nhôm với trọng lượng nhẹ nhưng đem lại sự chắc chắn cho cần kéo của vali. Cần kéo có thể thay đổi chiều dài phù hợp với người dùng. Vali có tay xách và tay kéo hỗ trợ tốt cho việc di chuyển vali dưới mọi địa hình.</p>

                                        <p>- Chất liệu	100% Nhựa PC</p>
                                        <p>- Kích thước	70 x 45 x 26 cm</p>
                                        <p>- Trọng lượng	3,8 Kg</p>
                                        <p>- Thể tích	82 L</p>
                                        <p>- Khóa	TSA</p>
                                        <p>- Bánh xe	8</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="related-products-wrapper">
                            <div class="col-md-12">
                                <div class="latest-product">
                                    <div class="c   ontainer-fluid nopadding brands-tit-div">
                                        <h2 class="section-title">Sản phẩm liên quan</h2>
                                    </div>
                                    <div class="product-carousel">
                                        @for($i=2;$i<7;$i++)
                                            <div class="single-product">
                                                <div class="product-f-image">
                                                    <img src="{{asset('images/vali-keo-'.$i.'.jpg')}}" alt="">
                                                    <div class="product-hover">
                                                        <a href="#" class="view-details-link">
                                                            <i class="fa fa-link"></i> Xem chi tiết
                                                        </a>
                                                    </div>
                                                </div>
                                                <h2><a href="#">Vali kéo mẫu {{$i}}</a></h2>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.fancybox').fancybox();
        });
    </script>
@endsection