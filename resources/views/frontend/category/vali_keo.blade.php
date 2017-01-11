@extends('frontend.template.master')
@section('title', trans('system.app_name'))
@section('description', '')
@section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Vali kéo</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area category-page">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                @for($i=1;$i<13;$i++)
                    <div class="col-md-3 col-sm-6">
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('images/vali-keo-'.$i.'.jpg')}}" alt="">
                                <div class="product-hover">
                                    <a href="{{route('vali_keo_1')}}" class="view-details-link">
                                        <i class="fa fa-link"></i> Xem chi tiết
                                    </a>
                                </div>
                            </div>

                        </div>
                        <h3 class="product-name">Vali kéo mẫu {{$i}}</h3>
                        <div class="product-code">
                            MS12394
                        </div>
                </div>
                @endfor
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection