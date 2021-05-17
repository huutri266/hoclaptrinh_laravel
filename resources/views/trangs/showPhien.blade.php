@extends('layouts/app')

@section('content')
    <div class="content " style="margin-top: 10px;">
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
                        <h3>Tiêu đề: {{$phien->tieude}}</h3>
                        <h4>Giới thiệu: {{$phien->gioithieu}}</h4>
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

{{--            hai nut--}}
            <hr>
            <div class="row">
                <div class="col-md-10" style="margin-left: 10px">
                    <a href=" ">Trở lại</a>
                </div>
                @guest()
                @else
                <div class="col" style="margin-right:10px ">
                    <a href="{{ route('outphien', $phien->id) }}">Rời khỏi phiên</a>
                </div>
                @endguest
            </div>

            <div class="card" style="margin-top: 20px;">
                <div class="card-header">
                    <h4>Danh sách câu hỏi trong phiên</h4>
                </div>
                <div
                    class="card-body"
                    style="margin-top: 10px;background-color:rgb(183, 231, 247)"
                >
                    <div class="container">
                        {{--                        ///cac cau hoi--}}

                        @foreach($hoiHoidaps as $hoiHoidap)
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
                                            <a href="{{route('showTraloi', $hoiHoidap->id)}}">Xem câu trả lời </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach()
                        {{--                        ///dat cau hoi--}}
                        {{--                        <div class="col-12">--}}
                        {{--                            <div class="row">--}}
                        {{--                                <div class="col-10">--}}
                        {{--                                    <div class="card">--}}
                        {{--                                        <textarea placeholder="Đăng câu hỏi mới"></textarea>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="col-2">--}}
                        {{--                                    <button type="button" class="btn btn-info">Đăng</button>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        {{--                        viet cau hoi--}}

                        @guest
                        @else
                            <div class="col-12">
                                <div class="card" style="margin-bottom: 10px ;">

                                    <div class="card-body">
                                        <form action="{{route('datcauhoi', $phien->id)}}" method="POST" role="form">
                                            {{ csrf_field()}}
                                            <div class="row">
                                                <div class="col-10">
                                                    <div class="card">
                                                        <textarea type="text" name="cauhoi"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-2">
                                                    {{--                                                    <input type="submit">--}}
                                                    <button type="submit" class="btn btn-primary">Gửi câu hỏi</button>
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
@endsection()
