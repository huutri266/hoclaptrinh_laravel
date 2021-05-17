@extends('layouts.app')



@section('content')
    <div>
        <div class="MainHeader clearfix">
            <h3 class="float-left" style="margin-left: 20px">Phiên hỏi đáp</h3>
            {{--        <form class="form float-right">--}}
            <form class="form float-right" action="{{ route('timkiemPhienHoidap') }}" method="POST" role="form">
                {{ csrf_field()}}
                <div class="input-group searchbox">
                    <input name="input" type="search" class="form-control sinput" placeholder="Tìm kiếm...">
                    <div class="input-group-append">
                        <button type="submit" class="btn searchbtn" type="button"><i
                                class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>


        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card" >

                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('home') }}">Mới nhất</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('dathamgia') }}">Đã tham gia</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Sắp tới</a>
                                </li>
                            </ul>
                        </div>


                        <div class="card-body" style="padding-left: 0; padding-right: 0">
                        {{--                    @if (session('status'))--}}
                        {{--                        <div class="alert alert-success" role="alert">--}}
                        {{--                            {{ session('status') }}--}}
                        {{--                        </div>--}}
                        {{--                    @endif--}}


                        <!-- bat dau-->
                            @foreach($phiens as $phien)
                                <div class="card" style="background-color:rgb(230, 238, 255)">
                                    <div class="card-header">
                                        <!-- Tên phiên hỏi đáp-->
                                        {{--                                    <h5 >{{$phien->tieude}}  </h5>--}}
                                        {{--                                    <p> tạo lúc {{ $phien->created_at }}</p>--}}
                                        <div class="row">
                                            <h5>  {{$phien->tieude}} |</h5>
                                            <p> tạo lúc {{ $phien->created_at }}</p>
                                        </div>
                                    </div>
                                    <!-- Mô tả về phiên-->
                                    <div class="card-body" >
                                        <!-- Tên người tạo phiên-->
                                        <h5 class="card-title">Chủ toạ: {{$phien->getNguoitao->name}}</h5>
                                        <!-- Mô tả ...-->
                                        <p class="card-text">Giới thiệu: {{$phien->gioithieu}}</p>
                                        <!-- Thời gian-->
                                    {{--                                    @if($phien->gioihan ===1)--}}
                                    {{--                                        <p class="card-text">Thời gian từ: {{$phien->batdau}}--}}
                                    {{--                                            đến: {{$phien->ketthuc}}</p>--}}
                                    {{--                                    @endif()--}}

                                    {{--                                    @if($phien->co_mk === 1)--}}
                                    {{--                                        <a href="" class="btn btn-primary" style="background-color: orange">Tham gia</a>--}}
                                    {{--                                        <br>--}}
                                    {{--                                    @else--}}
                                    {{--                                        <a href="{{route('showphien', $phien->id)}}" class="btn btn-primary">Tham--}}
                                    {{--                                            gia</a> <br>--}}
                                    {{--                                    @endif()--}}

                                    <!-- Thời gian-->
                                        @if($phien->gioihan ===1)
                                            <p class="card-text">thời gian từ: {{$phien->batdau}}
                                                đến: {{$phien->ketthuc}}</p>
                                        @endif()

                                        @if($phien->nguoitao == \Illuminate\Support\Facades\Auth::user()->id)
                                            <a href="{{route('showphien', $phien->id)}}" class="btn btn-primary"
                                               style="background-color: green">Phiên của bạn</a> <br>
                                        @else

                                            @if($phien->gioihan ===1)
                                                @if( strtotime($phien->batdau) < time() && strtotime($phien->ketthuc) > time())

                                                    @if($phien->co_mk === 1)
                                                        <a href="{{route('passOfPhien', $phien->id)}}"
                                                           class="btn btn-primary"
                                                           style="background-color: orange">Nhập mật khẩu</a> <br>
                                                    @else
                                                        <a href="{{route('showphien', $phien->id)}}"
                                                           class="btn btn-primary">Tham gia phiên</a> <br>
                                                    @endif()
                                                @else
                                                    <button class="btn btn-primary"
                                                            style="background-color: rgb(102, 51, 153)">Ngoài thời gian
                                                    </button>
                                                    {{--                                                                            <a href="#" class="btn btn-primary" style="background-color: red">Ngoài thời gian</a> <br>--}}
                                                @endif
                                            @else
                                                @if($phien->co_mk === 1)
                                                    <a href="{{route('passOfPhien', $phien->id)}}"
                                                       class="btn btn-primary"
                                                       style="background-color: orange">Nhập mật khẩu</a> <br>
                                                @else
                                                    <a href="{{route('showphien', $phien->id)}}"
                                                       class="btn btn-primary">Tham gia phiên</a> <br>
                                                @endif()
                                            @endif()
                                        @endif()

                                    </div>
                                </div>
                                <br>
                            @endforeach()
                            {{--                        ket thuc--}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('thongtin')
    <div style="margin-top: 50px">
        <hr>
        <h5>Số thành viên</h5>
        <h2>{{ \App\User::all()->count() }}</h2>
        <hr>
        <h5>Phiên hỏi đáp</h5>
        <h2>{{ $phiens->count() }}</h2>
        <hr>
    </div>
@endsection
