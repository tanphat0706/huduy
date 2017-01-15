@extends('backend.master')
@section('title', 'Trang quản trị')
@section('page_title') Trang quản trị
@stop

@section('content')
    <div class="box">
        <div class="box-header"></div>
        <div class="box-body">
            <a class="btn btn-app bg-red" href="{{ route('edit-user',Auth::user()->id) }}"> <i class="fa fa-key"></i>{{ trans('auth.change_password') }} </a>
            <a class="btn btn-app bg-red" href="admin/logout"> <i class="fa fa-sign-out"></i> {{ trans('auth.logout') }} </a>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
        <!-- Content Header (Page header) -->
@endsection
