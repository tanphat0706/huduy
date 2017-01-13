@extends('frontend.template.master')
@section('title', trans('system.search_result'))
@section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Kết quả tìm kiếm</h2>
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
                    @foreach($site_menus as $cate)
                        <li>
                            <a href="{{route('detail-category',$cate->alias)}}">{{$cate->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </aside>
            <div class="col-md-9 content-right">
                <div class="row">
                    @if (count($search_result) === 0)
                        <h2 style="padding:15px">Không tìm thấy kết quả</h2>
                    @elseif (count($search_result) >= 1)
                        @foreach($search_result as $item_search)
                            <div class="col-md-4 col-sm-6">
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="{{asset('images/products/'.$item_search->image_1)}}" alt="">
                                        <div class="product-hover">
                                            <a href="{{route('detail-product',[$cate->getCateAlias($item_search->category_id)->alias,$item_search->alias])}}" class="view-details-link">
                                                <i class="fa fa-link"></i> Xem chi tiết
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <h3 class="product-name">{{$item_search->name}}</h3>
                                <div class="product-code">
                                    MS12394
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection