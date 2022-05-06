@extends('backend.modules.main')
@section('head')
     <!-- meta ajax -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="/ckeditor/ckeditor.js"></script>

@endsection
@section('content')
    <div class="page-body">

          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                @include('backend.modules.alert')
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Sửa Thông Tin Bài Viết</h5>
                  </div>

                  <form class="form theme-form" action="" method="post">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Tên bài viết</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="title" value="{{$blog->title}}" type="text" placeholder="Nhập tên bài viết">
                            </div>
                          </div>
                            <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Tác giả</label>
                            <div class="col-sm-9">
                                <input class="form-control" value="{{$blog->author}}" name="author" type="text">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Mô tả ngắn</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="introtext">
                                    {!! $blog->introtext !!}
                                </textarea>
                            </div>
                          </div>
                          <div class="mb-3 row">
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Chi tiết bài viết</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="content" name="fulltext">{!! $blog->fulltext !!}</textarea>
                            </div>
                          </div>
                          <div class="mb-3 row">
                              <label class="col-sm-3 col-form-label">Hình đại diện</label>
                              <div class="col-sm-9">
                                <input class="form-control" value="{{$blog->thumb}}" id="thumb" type="file">
                              </div>
                          </div>
                         <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9" id="image_show">
                                <a href="{{$blog->thumb}}" target="_blank">
                                    <img src="{{$blog->thumb}}" width="200px">
                                </a>
                            </div>
                            <input type="hidden" name="thumb" value="{{$blog->thumb}}" id="file">
                        </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Trạng thái</label>
                            <div class="col-sm-9">
                            <div class="radio radio-primary">
                                <input id="active" type="radio" name="active" {{$blog->active == 1? 'checked=""':''}} value="1">
                                <label for="active">Xuất bản</label>
                            </div>
                            <div class="radio radio-danger">
                                <input id="no_active" type="radio" name="active" {{$blog->active == 0? 'checked=""':''}} value="0">
                                <label for="no_active">Chưa xuất bản</label>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-end">
                      <div class="col-sm-9 offset-sm-3">
                        <button class="btn btn-primary" type="submit">Cập nhật</button>
                      </div>
                    </div>
                    @csrf
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>

@endsection
@section('foot')

    <script>
        CKEDITOR.replace( 'content');
    </script>
 <script src="{{asset('template/admin/assets/js/delete.js')}}"></script>
@endsection


