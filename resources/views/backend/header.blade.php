<!-- Main Header -->
<header class="main-header">
    <!-- Logo -->
    <a href="{{route('admin')}}" class="logo"> <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>HD</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Trang quản trị</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas"
           role="button"> <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left"  id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a target="_blank" href="{{route('frontend')}}"><i class="fa fa-home"></i> Trang chủ</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu"><a href="#"
                                                       class="dropdown-toggle" data-toggle="dropdown"> <i
                                class="fa fa-user"></i> <span class="hidden-xs">
                            {{ trans( 'system.hi' ) }} {{ Auth::user()->name }} </span>
                    </a>
                    <ul class="dropdown-menu" style="max-width: 80px">
                        <!-- Menu Body -->
                        <li class="user-body" >
                                <div class="">
                                <a style="width: 100%" href="{{ url('admin/logout') }}" class="btn btn-default btn-flat">{{ trans('auth.logout') }}</a>
                            </div>
                        </li>
                    </ul></li>
            </ul>
        </div>
    </nav>
</header>