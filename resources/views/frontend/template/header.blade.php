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
                        {!! Form::open(['route'=>['search'], 'method'=> 'GET','class'=>'form-search']) !!}
                        <input name="search" type="search" id="woocommerce-product-search-field" class="search-field" placeholder="Tìm sản phẩm…" value="" title="Search for:">
                        <button type="submit" class="btn btn_search"><i class="fa fa-search"></i></button>
                        <input type="hidden" name="post_type" value="product">
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End site branding area -->
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
                    <li class="active"><a href="{{route('frontend')}}">Trang chủ</a></li>
                    <li class="sp-mode"><a href="#">Sản phẩm</a></li>
                    <li class="sub-menu-parent pc-mode">
                        <a href="javascript:void(0)">Sản phẩm</a>
                        <ul class="sub-menu">
                            @foreach($site_menus as $menu)
                                <li>
                                    <a href="{{route('detail-category', $menu->alias)}}">{{$menu->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('gioi-thieu')}}">Giới thiệu</a></li>
                    <li><a href="{{route('lien-he')}}">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->