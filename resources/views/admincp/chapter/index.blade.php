@extends('layouts.app')

@section('content')

    @include('layouts.nav')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Liệt Kê Chapter Truyện</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên chapter</th>
                                <th scope="col">Slug chapter</th>
                                <th scope="col">Truyện</th>
                                <th scope="col">Tóm tắt</th>
                                <th scope="col">Nội dung</th>
                                <th scope="col">Kích Hoạt</th>
                                <th scope="col">Quản Lý</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($chapter as $key => $chapters)
                                <tr>
                                    <th scope="row">{{$key}}</th>
                                    <td>{{$chapters->tieude}}</td>
                                    <td>{{$chapters->slug_chapter}}</td>
                                    <td>{{$chapters->truyen->tentruyen}}</td>
                                    <td>{{$chapters->tomtat}}</td>
                                    <td>{{$chapters->noidung}}</td>

                                    <td>
                                        @if ($chapters->kichhoat ==1)
                                            <span class="text text-success">Kích hoạt</span>
                                        @else
                                            <span class="text text-danger">Không kích hoạt</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('chapter.edit',[$chapters->id])}}" class="btn btn-primary">Edit</a>
                                        <form action="{{route('chapter.destroy',[$chapters->id])}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button onclick="return confirm('bạn có muốn xóa không ?');" class="btn btn-danger"> Delete </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
