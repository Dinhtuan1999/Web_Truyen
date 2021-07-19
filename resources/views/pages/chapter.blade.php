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
        <div class="col-md-12">
            <h4> {{$chapter->truyen->tentruyen}}</h4>
            <p>Chuong hien tai : {{$chapter->tieude}}</p>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="exampleInputEmail1">Chon chuong</label>
                    <select name="select-chapter" id="" class="custom-select select-chapter">
                        @foreach($all_chapter as $key=>$all)
                        <option value="{{url('xem-chapter/'.$all->slug_chapter)}}">{{$all->tieude}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="noidungchuong">
                {!! $chapter->noidung !!}
            </div>

            <div class="col-md-5">
                <style type="text/css">
                    .isDisabled {
                        color: currentColor;
                        pointer-events: none;
                        opacity: 0.5;
                        text-decoration: none;
                    }
                </style>
                <div class="form-group">
                    <label for="exampleInputEmail1">Chon chuong</label>
                    <p><a href="{{url('xem-chapter/'.$previous_chapter)}}" class="btn btn-primary {{$chapter->id==$min_id->id ? 'isDisabled' : ''}}">Tap truoc</a></p>
                    <select name="select-chapter" id="" class="custom-select select-chapter">
                        @foreach($all_chapter as $key=>$all)
                            <option value="{{url('xem-chapter/'.$all->slug_chapter)}}">{{$all->tieude}}</option>
                        @endforeach
                    </select>
                    <p class="mt-4"><a href="{{url('xem-chapter/'.$next_chapter)}}" class="btn btn-primary {{$chapter->id==$max_id->id ? 'isDisabled' : ''}}">Tap sau</a></p>

                </div>
            </div>
        </div>
    </div>

@endsection
