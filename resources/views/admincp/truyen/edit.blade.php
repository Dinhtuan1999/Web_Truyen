@extends('layouts.app')

@section('content')

    @include('layouts.nav')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cập nhật Truyện</div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form  method="POST" action="{{route('truyen.update', [$truyen->id])}}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên truyện</label>
                                <input type="text" class="form-control" onkeyup="ChangeToSlug();" value="{{$truyen->tentruyen}}" name="tentruyen"
                                       id="slug" aria-describedby="emailHelp" placeholder="Tên truyện...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Slug truyện</label>
                                <input type="text" class="form-control" value="{{$truyen->slug_truyen}}" name="slug_truyen" id="convert_slug"
                                       aria-describedby="emailHelp" placeholder="Slug danh mục...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tác giả</label>
                                <input type="text" class="form-control" onkeyup="ChangeToSlug();" value="{{$truyen->tacgia}}" name="tacgia"
                                        aria-describedby="emailHelp" placeholder="Tên tác giả...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tóm tắt truyện</label>
                                <input type="text" class="form-control" value="{{$truyen-> tomtat}}" name="tomtat" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" placeholder="Tóm tắt truyện...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Danh mục truyện</label>
                                <select class="custom-select" name="danhmuc">
                                    @foreach($danhmuc as $key=> $muc)
                                        <option {{ $muc->id == $truyen->danhmuc_id ? 'selected' : ''  }} value="{{$muc->id}}">{{$muc->tendanhmuc}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình ảnh truyện</label>
                                <input type="file" class="form-control-file"  name="hinhanh" >
                                <img src="{{ asset('public/uploads/truyen/'. $truyen->hinhanh)}}" height="250" width="150" alt="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Trạng thái hoạt động</label>
                                <select class="custom-select" name="kichhoat">
                                    @if($truyen->kichhoat == 1)
                                        <option selected value="1">Kích hoạt</option>
                                        <option  value="2">Không kích hoạt</option>
                                    @else
                                        <option value="1">Kích hoạt</option>
                                        <option selected value="2">Không kích hoạt</option>
                                    @endif
                                </select>
                            </div>

                            <button type="submit" name="themtruyen" class="btn btn-primary">Cập nhật</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
