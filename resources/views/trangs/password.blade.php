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
            <div class="card" style="margin-top: 20px;">
                <div class="card-header">
                    <h4>Nhập mật khâu để vào phiên</h4>
                </div>
                <div class="card-body" style="margin-top: 10px;background-color:rgb(183, 231, 247)">
                    <div class="container">

                        @guest
                            <form action="{{ route('showphienPassNotUser', $phien->id) }}" method="POST" role="form" enctype="multipart/form-data">
                                {{ csrf_field()}}
                                <div class="modal-body">

                                    <div class="form-group">
                                        {{--                                        <label class="col-form-label">Tên phiếu khảo sát:</label>--}}
                                        {{--                                        <input type="text" class="form-control" name="tenphong">--}}
                                        <div class="row">
                                            <div class="col-md">
                                                <label class="col-form-label">Mật khẩu:</label>
                                                <input type="password" class="form-control"
                                                       name="matkhau" id="matkhau">
                                                {{--                                                <small id="matkhau" class="form-text"--}}
                                                {{--                                                       style="color: #007bff">Để trống nếu không đặt mật khẩu</small>--}}
                                            </div>
                                        </div>

                                        {{--                                        <label class="col-form-label">Mô tả:</label>--}}
                                        {{--                                        <textarea class="form-control" rows="3"></textarea>--}}
                                    </div>
                                    @if(session()->has('message'))
                                        <p style="color: red">{{ session()->get('message') }}</p>
                                    @endif

                                </div>
                                <div class="modal-footer">
                                    {{--                                <button type="button" class="btn btn-secondary"--}}
                                    {{--                                        data-dismiss="modal"></button>--}}
                                    <a href="{{route('welcome')}}" class="btn btn-primary" style="background-color: orange">Quay lại</a> <br>
                                    <input type="submit" class="btn btn-primary" id="taopks" value="Vào phiên">
                                </div>
                            </form>
                        @else
                        <form action="{{ route('showphienPass', $phien->id) }}" method="POST" role="form" enctype="multipart/form-data">
                            {{ csrf_field()}}
                            <div class="modal-body">

                                    <div class="form-group">
{{--                                        <label class="col-form-label">Tên phiếu khảo sát:</label>--}}
{{--                                        <input type="text" class="form-control" name="tenphong">--}}
                                        <div class="row">
                                            <div class="col-md">
                                                <label class="col-form-label">Mật khẩu:</label>
                                                <input type="password" class="form-control"
                                                       name="matkhau" id="matkhau">
{{--                                                <small id="matkhau" class="form-text"--}}
{{--                                                       style="color: #007bff">Để trống nếu không đặt mật khẩu</small>--}}
                                            </div>
                                        </div>

{{--                                        <label class="col-form-label">Mô tả:</label>--}}
{{--                                        <textarea class="form-control" rows="3"></textarea>--}}
                                    </div>
                                @if(session()->has('message'))
                                    <p style="color: red">{{ session()->get('message') }}</p>
                                @endif

                            </div>
                            <div class="modal-footer">
{{--                                <button type="button" class="btn btn-secondary"--}}
{{--                                        data-dismiss="modal"></button>--}}
                                <a href="{{route('welcome')}}" class="btn btn-primary" style="background-color: orange">Quay lại</a> <br>
                                <input type="submit" class="btn btn-primary" id="taopks" value="Vào phiên">
                            </div>
                        </form>
                        {{--                        ///cac cau hoi--}}
                        @endguest




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
