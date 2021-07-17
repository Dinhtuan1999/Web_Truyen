@extends('../layout')

{{--@section('slide')--}}
{{--    @include('pages.slide')--}}
{{--@endsection--}}


@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-3">
                    <img class=" card-img-top" width="100%" height="225"
                         src="{{asset('public/uploads/truyen/crush5.jpg')}}">
                </div>

                <div class="col-md-9">
                    <style type="text/css">
                        .info{
                            list-style: none;
                        }
                    </style>
                    <ul class="info">
                        <li> Tac gia : tuan</li>
                        <li> the loai : tuan</li>
                        <li> so chapter : 123</li>
                        <li> so luot xem : 123</li>
                        <li><a href="">xem muc luc</a></li>
                        <li><a href="" class="btn btn-primary">doc online</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <p>
                    Bạn trai bị cướp, cha mẹ xem thường sỉ nhục, tống cô ra nước ngoài du học không quản không hỏi tới! Tất cả mọi người đều cho rằng cô vị vứt bỏ chỉ có thể tự sinh tự diệt….
                    mới lạ! 5 năm sau Ninh Tịch hoa lệ quay về, cùng với tổng tài bá đạo Lục Đình Kiêu viết một đoạn nhân duyên hoan hỷ, vợ chồng liên thủ giẫm tất cả kẻ thù dưới chân! Cùng xem
                    con đường ảnh hậu truyền kì của cựu lính đánh thuê Ninh Tịch! Cải biên từ tiểu thuyết [Cho em muôn trượng hào quang]
                </p>
            </div>

            <hr>
            <h4>Muc Luc</h4>
                <ul class="mucluc">
                    <li><a href="">phan 1</a></li>
                    <li><a href="">phan 1</a></li>
                    <li><a href="">phan 1</a></li>
                    <li><a href="">phan 1</a></li>
                    <li><a href="">phan 1</a></li>
                    <li><a href="">phan 1</a></li>
                </ul>
            <h4>sach cung the loai</h4>
            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img class=" card-img-top" width="100%" height="225"
                             src="{{asset('public/uploads/truyen/crush5.jpg')}}">
                        <div class="card-body">
                            <h5>This is a wider card with supporting</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img class=" card-img-top" width="100%" height="225"
                             src="{{asset('public/uploads/truyen/crush5.jpg')}}">
                        <div class="card-body">
                            <h5>This is a wider card with supporting</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img class=" card-img-top" width="100%" height="225"
                             src="{{asset('public/uploads/truyen/crush5.jpg')}}">
                        <div class="card-body">
                            <h5>This is a wider card with supporting</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <img class=" card-img-top" width="100%" height="225"
                             src="{{asset('public/uploads/truyen/crush5.jpg')}}">
                        <div class="card-body">
                            <h5>This is a wider card with supporting</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-3">
            <h3>danh sach truyen hay</h3>
        </div>

    </div>

@endsection
