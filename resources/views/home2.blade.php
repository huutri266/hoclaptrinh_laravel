@extends('layouts.app')

@section('content')
    <div class="MainHeader clearfix">
        <h3 class="float-left" style="margin-left: 10px">Phiếu khảo sát</h3>

        <form class="form float-right" action="{{ route('timkiemPhienLuachon') }}" method="POST" role="form">
            {{ csrf_field()}}
            <div class="input-group searchbox">
                <input name="input" type="search" class="form-control sinput" placeholder="Tìm kiếm...">
                <div class="input-group-append">
                    <button type="submit" class="btn searchbtn" type="button"><i
                            class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
{{--        <form class="form float-right">--}}
{{--            <div class="input-group searchbox">--}}
{{--                <input type="search" class="form-control sinput" placeholder="Tìm kiếm...">--}}
{{--                <div class="input-group-append">--}}
{{--                    <button class="btn searchbtn" type="button"><i--}}
{{--                            class="fas fa-search"></i></button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
    </div>
    <div class="MainContent">
        <div class="menu clearfix">
            <ul class="nav nav-tabs float-left" id="myTab">
                <li class="nav-item">
                    <a class="nav-link" href="#">Mới nhất</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('phienKhaosatDaThamgia') }}">Đã tham gia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sắp tới</a>
                </li>
            </ul>
            <ul class="nav float-right">
                <li class="nav-item">
                    <label for="numP" style="color: black">Kết quả / Trang: </label>
                    <select class="form-control-sm mx-3 my-2 numP" name="numP">
                        <option>5</option>
                        <option>10</option>
                        <option>20</option>
                        <option>50</option>
                    </select>
                </li>
            </ul>
        </div>
        <!--liet ke phong-->
        <div id="lietkephong">

            @foreach($phiens as $phien)
                <div class="card room" >

                    <div class="card-header">
                        <div class="row">
                            <h5 ><a href="room.html">{{ $phien->tieude }} </a>   | </h5>
                            <p >tạo lúc: {{ $phien->created_at }}</p>

                        </div>

                    </div>


                    <div class="card-body">
                        <div>
                            <h5>Chủ tọa: {{ $phien->getNguoitao->name }}</h5>
                        </div>
                        <div>
                            <p>{{ $phien->gioithieu }}</p>
                            <hr>
                        </div>

                        <!-- Thời gian-->
                        @if($phien->gioihan ===1)
                            <p class="card-text">thời gian từ: {{$phien->batdau}}
                                đến: {{$phien->ketthuc}}</p>
                        @endif()

                        @if($phien->nguoitao == \Illuminate\Support\Facades\Auth::user()->id)
                            <a href="{{route('showphieukhaosat', $phien->id)}}" class="btn btn-primary" style="background-color: green">Phiên của bạn</a> <br>
                        @else

                        @if($phien->gioihan ===1)
                            @if( strtotime($phien->batdau) < time() && strtotime($phien->ketthuc) > time())

                                @if($phien->co_mk === 1)
                                    <a href="{{route('passOfPhienKhaosat', $phien->id)}}" class="btn btn-primary"
                                       style="background-color: orange">Nhập mật khẩu</a> <br>
                                @else

                                @endif()
                            @else

                                    <button class="btn btn-primary" style="background-color: rgb(102, 51, 153)">Ngoài thời gian</button>


                            @endif
                        @else
                            @if($phien->co_mk === 1)
                                <a href="{{route('passOfPhienKhaosat', $phien->id)}}" class="btn btn-primary"
                                   style="background-color: orange">Nhập mật khẩu</a> <br>
                            @else
                                <a href="{{route('showphieukhaosat', $phien->id)}}" class="btn btn-primary">Tham gia phiên</a> <br>
                            @endif()
                            @endif()
                        @endif()


                    </div>
                    <div class="card-footer roomfoot clearfix">

                    </div>
                </div>

                <hr>
            @endforeach()
            <nav>
                <ul class="pagination pagination-sm justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection

@section('thongtin')
    <div style="margin-top: 50px">
        <hr>
        <h5>Số thành viên</h5>
        <h2>{{ \App\User::all()->count() }}</h2>
        <hr>
        <h5>Phiên khảo sát</h5>
        <h2>{{ $phiens->count() }}</h2>
        <hr>
    </div>
@endsection
