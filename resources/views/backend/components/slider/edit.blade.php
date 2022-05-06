@extends('backend.modules.main')
@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<div class="page-body">
          <div class="container-fluid">
    <div class=" card mb-4">
        <div class="card-header">
            <strong>CHỈNH SỬA SẢN PHẨM</strong>
        </div>
        <div class="card-body">
            <form action="" method="POST">
            @csrf
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="menu">Tiêu đề</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="name" value="{{$slider->name}}" type="text" placeholder="Nhập tiêu đề">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Ảnh sản phẩm</label>

                    <div class="col-sm-10">
                        <input class="form-control" id="thumb" type="file">
                    </div>
                </div>
                 <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10" id="image_show">
                        <a href="{{$slider->thumb}}" target="_blank">
                            <img src="{{$slider->thumb}}" width="200px">
                        </a>
                    </div>
                    <input type="hidden" name="thumb" value="{{$slider->thumb}}" id="file">
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Kích hoạt</label>
                    <div class="col-sm-1 form-check form-switch form-switch-lg">
                        <input class="form-check-input" name="active" id="active" type="radio" {{$slider->active == 1 ? 'checked = ""':''}} value="1">
                        <label class="form-check-label" for="active">Có</label>
                    </div>
                    <div class="col-sm-1 form-check form-switch form-switch-lg">
                        <input class="form-check-input" name="active" id="no_active" type="radio" {{$slider->active == 0 ? 'checked = ""':''}} value="0">
                        <label class="form-check-label" for="no_active">Không</label>
                    </div>
                </div>
                <button class="btn btn-primary mb-3" type="submit">Cập nhật slider</button>
            </form>
        </div>
    </div>
              </div>
</div>
@endsection

@section('foot')
    <script src="{{asset('template/admin/assets/js/delete.js')}}"></script>
@endsection




