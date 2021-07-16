@extends('layouts.app')

@section('content')

    @include('layouts.nav')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cập nhật Chapter Truyện</div>
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
                        <form  method="POST" action="{{route('chapter.update', [$chapter->id])}}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên chapter</label>
                                <input type="text" class="form-control" onkeyup="ChangeToSlug();" value="{{$chapter->tieude}}" name="tieude"
                                       id="slug" aria-describedby="emailHelp" placeholder="Tên chapter...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Slug chapter</label>
                                <input type="text" class="form-control" value="{{$chapter->slug_chapter}}" name="slug_chapter" id="convert_slug"
                                       aria-describedby="emailHelp" placeholder="Slug chapter...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tóm tắt chapter truyện</label>
                                <input type="text" class="form-control" value="{{$chapter-> tomtat}}" name="tomtat" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" placeholder="Tóm tắt truyện...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nội dung chapter truyện</label>
                                <input type="text" class="form-control" value="{{$chapter-> noidung}}" name="noidung" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" placeholder="Tóm tắt truyện...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"> Truyện</label>
                                <select class="custom-select" name="truyen_id">
                                    @foreach($truyen as $key=> $truyens)
                                        <option {{ $truyens->id == $chapter->truyen_id ? 'selected' : ''  }} value="{{$truyens->id}}">{{$truyens->tentruyen}}</option>
                                    @endforeach
                                </select>
                            </div>



                            <div class="form-group">
                                <label for="exampleInputEmail1">Trạng thái hoạt động</label>
                                <select class="custom-select" name="kichhoat">
                                    @if($chapter->kichhoat == 1)
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
