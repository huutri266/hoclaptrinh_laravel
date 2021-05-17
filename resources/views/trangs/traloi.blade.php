@extends('layouts/app')

@section('content')
    <div class="content" style="margin-top: 10px;">
        <div class="container col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-2">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8th4oKCZDPEVmlrSBv-Yhu2wmrz-Z8sb8YmhqkTFXY238am2WIw&s"
                            style="width: 100%; height: auto;"
                        />
                    </div>
                    <div class="col-md-10">
                        <h3>{{$phien->tieude}}</h3>
                        <h4>Mô tả: {{$phien->gioithieu}}</h4>
                        <p>Đăng bởi: {{$phien->ten_nguoitao}}</p>
                        @if($phien->gioihan ==1 )
                            <p>Thời gian từ: {{$phien->batdau}}, kết thúc: {{$phien->ketthuc}}</p>
                        @endif()
                    </div>
                </div>
            </div>

            {{--            <div>--}}
            {{--                <a href="{{ redirect()->back()->getTargetUrl() }}" class="backbtn">&laquo; Trở lại</a>--}}
            {{--            </div>--}}

            <div class="card" style="margin-top: 20px;">
                <div class="card-header">
                    <h4>Nội dung câu hỏi</h4>
                </div>
                <div
                    class="card-body"
                    style="margin-top: 10px;background-color:rgb(183, 231, 247)"
                >
                    <div class="container">
                        <div class="col-12">
                            <div class="card" style="margin-bottom: 10px;">
                                <div class="row">
                                    <div class="col-2">
                                        <img
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnwUxIb7qgzAdw01fBmX60pLJ4ks6tnlpYAK7qfeHJxI_4VPoM&s"
                                            style="height: 100px; width: 100px; display: block; margin-left: auto; margin-right: auto;"
                                        />
                                    </div>
                                    <div class="col-10">
                                        <h5>Câu hỏi: {{$hoiHoidap->cauhoi}}</h5>
                                        <p>Đăng bởi: {{$hoiHoidap->ten_nguoitao}}</p>
                                        <p>{{$hoiHoidap->created_at}}</p>
                                        <p>Số câu trả lời: {{$hoiHoidap->so_cautraloi}}</p>

                                    </div>
                                </div>
                            </div>

                            {{--                            ///bat dau--}}
                            @foreach($tralois as $traloi)
                                <div class="col-12">
                                    <div class="card" style="margin-bottom: 10px ;">
                                        <div class="card-header row">

                                            <div class="col-md-11">
                                                <h5>{{$traloi->ten_nguoitao}}  </h5>
                                            </div>
                                            @guest
                                            @else
                                                @if(Auth::user()->id == $traloi->nguoitao || Auth::user()->id == $phien->nguoitao )
                                                    <div class="col-md-1">
                                                        <a href="{{ route('xoaTraloi', $traloi->id) }}">Xóa</a>
                                                    </div>
                                                @endif
                                            @endguest
                                        </div>
                                        <div class="card-body">

                                            <p>Trả lời: {{$traloi->cautraloi}}</p>
                                            <h6>{{$traloi->created_at}}</h6>
                                            <button style="margin-bottom: 5px;">
                                                <i class="fas fa-thumbs-up"></i> Like
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{--///ket thuc--}}

                            {{-- nhap tra loi moi--}}
                            @guest
                            @else
                                <div class="col-12">
                                    <div class="card" style="margin-bottom: 10px ;">

                                        <div class="card-body">
                                            <form action="{{route('traloicauhoi', $hoiHoidap->id)}}" method="POST"
                                                  role="form">
                                                {{ csrf_field()}}
                                                <div class="row">
                                                    <div class="col-10">
                                                        <div class="card">
                                                            <textarea type="text" name="traloi"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-2">
                                                        {{--                                                    <input type="submit">--}}
                                                        <button type="submit" class="btn btn-primary">trả lời</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endguest

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
