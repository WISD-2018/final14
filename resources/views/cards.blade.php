@extends('layouts.admin_master')

@section('title', 'Clean Blog')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.index') }}">管理端</a>
        </li>
        <li class="breadcrumb-item active">場地狀態</li>
    </ol>
    <hr>
      <!-- Icon Cards-->
      <div class="row">
          {{--場地1--}}
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
              </div>
              <div class="mr-5">采風堂</div>
            </div>
              <a class="card-footer text-white clearfix small z-1" href='{{ route('admin.one.index') }}'>
                  <span class="float-left">查看借用狀況</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
          {{--場地2--}}
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">匯川堂</div>
            </div>
                <a class="card-footer text-white clearfix small z-1" href='{{ route('admin.two.index') }}'>
                  <span class="float-left">查看借用狀況</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
          </div>


@endsection