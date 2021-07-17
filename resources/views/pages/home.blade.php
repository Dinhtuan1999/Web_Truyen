@extends('../layout')

@section('slide')
    @include('pages.slide')
@endsection


@section('content')

    <!-------------------------Sach mới cập nhật----------------------------->
    <h3>Sách Mới Cập Nhật</h3>
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                @foreach($truyen as $key => $value)
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img class=" card-img-top" width="100%" height="225"
                             src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">
                        <div class="card-body">
                            <h5>{{$value->tentruyen}}</h5>
                            <p class="card-text"> {{$value->tomtat}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                    <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>1</a>
                                </div>
                                <small class="text-muted">9 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
            <a href="" class="btn btn-success ">Đọc ngay</a>
        </div>
    </div>

    <!-------------------------Sach có lượt đọc nhiều nhất----------------------------->
    <h3>Sách Có Lượt Đọc Nhiều Nhất</h3>
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img class=" card-img-top" width="100%" height="225"
                             src="{{asset('public/uploads/truyen/crush5.jpg')}}">
                        <div class="card-body">
                            <h3>This is a wider card with supporting</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                    <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>1</a>
                                </div>
                                <small class="text-muted">9 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img class=" card-img-top" width="100%" height="225"
                             src="{{asset('public/uploads/truyen/crush5.jpg')}}">
                        <div class="card-body">
                            <h3>This is a wider card with supporting</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                    <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>1</a>
                                </div>
                                <small class="text-muted">9 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img class=" card-img-top" width="100%" height="225"
                             src="{{asset('public/uploads/truyen/crush5.jpg')}}">
                        <div class="card-body">
                            <h3>This is a wider card with supporting</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                    <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>1</a>
                                </div>
                                <small class="text-muted">9 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img class=" card-img-top" width="100%" height="225"
                             src="{{asset('public/uploads/truyen/crush5.jpg')}}">
                        <div class="card-body">
                            <h3>This is a wider card with supporting</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                    <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>1</a>
                                </div>
                                <small class="text-muted">9 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <a href="" class="btn btn-success">Đọc ngay</a>

        </div>
    </div>


    <!-------------------------Blog----------------------------->
    <h3>Blog</h3>
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img class=" card-img-top" width="100%" height="225"
                             src="{{asset('public/uploads/truyen/crush5.jpg')}}">
                        <div class="card-body">
                            <h3>This is a wider card with supporting</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                    <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>1</a>
                                </div>
                                <small class="text-muted">9 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img class=" card-img-top" width="100%" height="225"
                             src="{{asset('public/uploads/truyen/crush5.jpg')}}">
                        <div class="card-body">
                            <h3>This is a wider card with supporting</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                    <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>1</a>
                                </div>
                                <small class="text-muted">9 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img class=" card-img-top" width="100%" height="225"
                             src="{{asset('public/uploads/truyen/crush5.jpg')}}">
                        <div class="card-body">
                            <h3>This is a wider card with supporting</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                    <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>1</a>
                                </div>
                                <small class="text-muted">9 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img class=" card-img-top" width="100%" height="225"
                             src="{{asset('public/uploads/truyen/crush5.jpg')}}">
                        <div class="card-body">
                            <h3>This is a wider card with supporting</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                    <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>1</a>
                                </div>
                                <small class="text-muted">9 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <a href="" class="btn btn-success">Đọc ngay</a>
        </div>
    </div>

@endsection
