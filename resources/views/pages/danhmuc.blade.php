@extends('../layout')

{{--@section('slide')--}}
{{--    @include('pages.slide')--}}
{{--@endsection--}}


@section('content')

    <!-------------------------Sach mới cập nhật----------------------------->
    <h3></h3>
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                @php
                  echo $count = count($truyen);
                @endphp
                @if($count == 0)
                    <div class="col-md-12">
                        <div class="card mb-12 shadow-sm">

                            <div class="card-body">

                                <p class="card-text"> Truyện đang cập nhât ...</p>

                            </div>
                        </div>
                    </div>
                @else
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

                    @endif


            </div>
            <a href="" class="btn btn-success ">Đọc ngay</a>
        </div>
    </div>


@endsection
