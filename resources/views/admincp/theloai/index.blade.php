@extends('layouts.app')

@section('content')

    @include('layouts.nav')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Liệt Kê Thể Loại Truyện</div>

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
                                <th scope="col">Tên Thể Loại</th>
                                <th scope="col">Slug Thể Loại</th>
                                <th scope="col">Mô Tả</th>
                                <th scope="col">Kích Hoạt</th>
                                <th scope="col">Quản Lý</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($theloai as $key => $theloais)
                                <tr>
                                    <th scope="row">{{$key}}</th>
                                    <td>{{$theloais->tentheloai}}</td>
                                    <td>{{$theloais->slug_theloai}}</td>
                                    <td>{{$theloais->mota}}</td>
                                    <td>
                                        @if ($theloais->kichhoat ==1)
                                            <span class="text text-success">Kích hoạt</span>
                                        @else
                                            <span class="text text-danger">Không kích hoạt</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('theloai.edit',[$theloais->id])}}" class="btn btn-primary">Edit</a>
                                        <form action="{{route('theloai.destroy',[$theloais->id])}}" method="post">
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
