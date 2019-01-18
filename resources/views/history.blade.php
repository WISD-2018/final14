@extends('layouts.admin_master')

@section('title', 'Clean Blog')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.index') }}">管理端</a>
        </li>
        <li class="breadcrumb-item active">歷史紀錄</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i>  歷史紀錄</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th width="30" style="text-align: center">id</th>
                        <th>日期</th>
                        <th>開始時間</th>
                        <th>結束時間</th>
                        <th>申請場地</th>
                        <th>班級</th>
                        <th>姓名</th>
                        <th>手機號碼</th>
                        <th>活動簡述</th>
                        <th>狀態</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <td>{{$rent->id}}</td>
                        <td>{{$rent->site_id}}</td>
                        <td>{{$rent->user_class}}</td>
                        <td>{{$rent->user_name}}</td>
                        <td>{{$rent->user_phone}}</td>
                        <td>{{$rent->req_date}}</td>
                        <td>{{$rent->req_starttime}}</td>
                        <td>{{$rent->req_endtime}}</td>
                        <td>{{$rent->req_rentreason}}</td>
                        <td>{{($rent->status)?'審核通過':'不通過'}}</td>
                    </tr>
                    </tfoot>

                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

@endsection