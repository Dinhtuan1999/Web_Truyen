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
                         src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}">
                </div>

                <div class="col-md-9">
                    <style type="text/css">
                        .info {
                            list-style: none;
                        }
                    </style>
                    <ul class="info">
                        <li>Ten sach : {{$truyen->tentruyen}}</li>
                        <li> Tac gia : {{$truyen->tacgia}}</li>
                        <li> Danh muc truyen : <a href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}">{{$truyen->danhmuctruyen->tendanhmuc}}</a></li>
                        <li> so chapter : 123</li>
                        <li> so luot xem : 123</li>
                        <li><a href="">xem muc luc</a></li>
                        @if($chapter_dau)
                            <li><a href="{{url('xem-chapter/'.$chapter_dau->slug_chapter)}}" class="btn btn-primary">doc online</a></li>
                        @else
                            <li><a href="" class="btn btn-danger"> Hien tai chua co chuong de doc</a></li>
                        @endif

                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <p>{!! $truyen->tomtat !!} </p>
            </div>

            <hr>
            <h4>Muc Luc</h4>
            <ul class="mucluc">
                @php
                    $mucluc = count($chapter);
                @endphp
                @if($mucluc > 0)
                    @foreach($chapter as $key => $chap)
                        <li><a href="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</a></li>
                    @endforeach
                @else
                    <li>Muc luc dang cap nhat ...</li>
                @endif
            </ul>
            <h4>sach cung the loai</h4>
            <div class="row">
                @foreach($cungdanhmuc as $key => $value)
                    <div class="col-md-3">
                        <div class="card mb-3 shadow-sm">
                            <img class=" card-img-top" width="100%" height="225"
                                 src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">
                            <div class="card-body">
                                <h5>{{$value->tentruyen}}</h5>
                                <p class="card-text"> {{$value->tomtat}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{url('xem-truyen/'.$value->slug_truyen)}}"
                                           class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                                        <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>1</a>
                                    </div>
                                    <small class="text-muted">9 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="col-md-3">
            <h3>danh sach truyen hay</h3>
        </div>

    </div>

@endsection
