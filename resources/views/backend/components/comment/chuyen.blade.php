@extends('backend.modules.main')
@section('head')
<!-- meta ajax -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('template/admin/assets/css/datatables.css')}}">
    <!-- Plugins css Ends-->
@endsection
@section('content')
<div class="page-body">
          <div class="container-fluid">
            <div class="page-header">

<div class=" card mb-4">
        <div class="card-header">
            <strong>ĐÁNH GIÁ CHUYẾN</strong>
        </div>
        @include('backend.modules.alert')
        <div class="card-body">
            <div class="table-responsive">
                <div class="table-responsive">
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>Họ tên</th>
                            <th>Đánh giá</th>
                            <th>Thời gian gửi</th>
                            <th>Hành động</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($comments as $comment)
                                <tr>
                                    <td>{{$comment->name}}</td>
                                    <td>{{$comment->comment}}</td>
                                    <td>{{$comment->updated_at}}</td>
                                    <td class="table-action">
                                    <a onclick="removeRow({{$comment->id}} ,'/admin/comment/destroy')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                     </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div></div></div>

@endsection
@section('foot')

    <!-- Plugins JS start-->
    <script src="{{asset('template/admin/assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template/admin/assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    <script src="{{asset('template/admin/assets/js/tooltip-init.js')}}"></script>
    <!-- Plugins JS Ends-->
    <script src="{{asset('template/admin/assets/js/delete.js')}}"></script>
@endsection





