@extends('layouts.admin_master')

@section('title', 'Clean Blog')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">管理端</a>
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
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © Your Website 2017</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="loginmanager.blade.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>

@endsection