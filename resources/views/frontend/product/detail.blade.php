@extends('frontend.template.master')
@section('title', trans('system.app_name'))
@section('description', '')
@section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>{{$product->name}}</h2>
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
                            <a href="{{route('frontend')}}">{{trans('system.home')}}</a>
                            <a href="{{route('detail-category',$cate->alias)}}">{{$cate->name}}</a>
                            <span class="current">{{$product->name}}</span>
                        </div>

                        <div class="row">
                            <!-- Show the Images -->
                            <div class="column product-images col-sm-6">
                                    <a class="fancybox" href="{{asset('images/products/'.$product->image_1)}}" data-fancybox-group="gallery" >
                                        <img src="{{asset('images/products/'.$product->image_1)}}" alt=""/>
                                    </a>
                                    <div class="thumbnails">
                                        <a class="fancybox" href="{{asset('images/products/'.$product->image_2)}}" data-fancybox-group="gallery">
                                            <img src="{{asset('images/products/'.$product->image_2)}}" alt=""/>
                                        </a>
                                        <a class="fancybox" href="{{asset('images/products/'.$product->image_3)}}" data-fancybox-group="gallery">
                                            <img src="{{asset('images/products/'.$product->image_3)}}" alt=""/>
                                        </a>
                                        <a class="fancybox" href="{{asset('images/products/'.$product->image_4)}}" data-fancybox-group="gallery">
                                            <img src="{{asset('images/products/'.$product->image_4)}}" alt=""/>
                                        </a>
                                        <a class="fancybox" href="{{asset('images/products/'.$product->image_5)}}" data-fancybox-group="gallery">
                                            <img src="{{asset('images/products/'.$product->image_5)}}" alt=""/>
                                        </a>
                                    </div>
                                </div>
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">{{$product->name}}</h2>
                                    <div class="product-code">MS12394</div>
                                    <div class="product_meta">
                                        <span class="posted_in">Danh mục sản phẩm:
                                            <a href="{{route('detail-category',$cate->getCateAlias($product->category_id)->alias)}}">
                                                {{$cate->name}}
                                            </a>
                                        </span>
                                    </div>

                                    <div class="product-description">
                                        <h4><i class="fa fa-list"></i> Thông tin sản phẩm</h4>
                                        {!! $product->description !!}
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
                                        @foreach($related as $item_related)
                                            <div class="single-product">
                                                <div class="product-f-image">
                                                    <img src="{{asset('images/products/'.$item_related->image_1)}}" alt="">
                                                    <div class="product-hover">
                                                        <a href="{{route('detail-product',[$cate->getCateAlias($item_related->category_id)->alias,$item_related->alias])}}" class="view-details-link">
                                                            <i class="fa fa-link"></i> Xem chi tiết
                                                        </a>
                                                    </div>
                                                </div>
                                                <h2><a href="#">{{$item_related->name}}</a></h2>
                                            </div>
                                        @endforeach
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