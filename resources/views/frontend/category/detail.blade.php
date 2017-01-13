@extends('frontend.template.master')
@section('title', trans('system.app_name'))
@section('description', '')
@section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>{{$current_cate->name}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area category-page">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <aside class="col-md-3 well widget_product_categories">
                <h5 class="section-nav-title">Danh mục sản phẩm</h5>
                <ul class="product-categories">
                    @foreach($cates as $cate)
                        <li>
                            <a href="{{route('detail-category',$cate->alias)}}">{{$cate->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </aside>
            <div class="col-md-9 content-right">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-4 col-sm-6">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{asset('images/products/'.$product->image_1)}}" alt="">
                                    <div class="product-hover">
                                        <a href="{{route('detail-product',[$cate->getCateAlias($product->category_id)->alias,$product->alias])}}" class="view-details-link">
                                            <i class="fa fa-link"></i> Xem chi tiết
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <h3 class="product-name">{{$product->name}}</h3>
                            <div class="product-code">
                                MS12394
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="pagination">
                {{$products->links()}}
            </div>
        </div>
    </div>
@endsection