@extends('layouts.admin_master')

@section('title', 'Clean Blog')

@section('content')
  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> 場地申請管理
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
          <tr>
            <th width="30" style="text-align: center">id</th>
            <th>場地名稱</th>
            <th>班級</th>
            <th>姓名</th>
            <th>手機號碼</th>
            <th>租借日期</th>
            <th>開始時間</th>
            <th>結束時間</th>
            <th>活動簡述</th>
            <th>狀態</th>
            <th>審核</th>
          </tr>
          </thead>

          <tbody>

          {{--將對應的資料傳到對應的欄位--}}
          @foreach($rents as $rent)
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
              <td>{{($rent->status)?'審核成功':'尚未審核'}}</td>
              <td>
                <form action="{{ route('admin.destroy', $rent->id) }}" method="POST">
                  <a href ="{{route('admin.status', ['id'=>$rent->id])}}"class="btn btn-success " role="button">同意</a>
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button class="btn btn-danger ">拒絕</button>
                </form>
              </td>
            </tr>
          @endforeach

          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>



@endsection