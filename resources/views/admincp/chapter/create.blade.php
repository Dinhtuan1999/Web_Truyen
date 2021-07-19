@extends('layouts.app')

@section('content')

    @include('layouts.nav')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Thêm Chapter Truyện</div>
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
                        <form method="POST" action="{{route('chapter.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên chapter</label>
                                <input type="text" class="form-control" onkeyup="ChangeToSlug();" value="{{old('tieude')}}" name="tieude" id="slug"
                                       aria-describedby="emailHelp" placeholder="Tên chapter...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Slug chapter</label>
                                <input type="text" class="form-control" value="{{old('slug_chapter')}}" name="slug_chapter" id="convert_slug"
                                       aria-describedby="emailHelp" placeholder="Slug chapter...">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tóm tắt chapter truyện</label>
                                <textarea type="text" name="tomtat" class="form-control"  rows="5" style="resize: none" placeholder="Tóm tắt chapter..."></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nội dung chapter truyện</label>
                                <textarea type="text" id="noidung_chapter" name="noidung"  class="form-control" rows="5" style="resize: none" placeholder="Nội dung chapter..."></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"> Truyện</label>
                                <select class="custom-select" name="truyen_id">
                                    @foreach($truyen as $key=> $truyens)
                                        <option value="{{$truyens->id}}">{{$truyens->tentruyen}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Trạng thái hoạt động</label>
                                <select class="custom-select" name="kichhoat">
                                    <option value="1">Kích hoạt</option>
                                    <option value="2">Không kích hoạt</option>

                                </select>
                            </div>

                            <button type="submit" name="themchapter" class="btn btn-primary">Thêm</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
