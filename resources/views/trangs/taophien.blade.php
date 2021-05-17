@extends('layouts/app')

@section('content')
    <div class="content" style="margin-top: 10px;">
{{--        <div style="text-align: center;">--}}
{{--            <h2>HỆ THỐNG HỎI - ĐÁP</h2>--}}
{{--            <h3>ĐẠI HỌC CÔNG NGHỆ</h3>--}}
{{--            <H4><hr /></H4>--}}
{{--        </div>--}}
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between" id="headingOne">
                        <h5 class="mt-2">Tạo phiên hỏi đáp</h5>

{{--                        nut back--}}
{{--                        <a href="http://127.0.0.1:8000/home"><button  class="btn btn-danger">Back</button></a>--}}
{{--                        het nut back--}}
                    </div>


                    <div class="card-body">
                        <form action="{{ route('taophien.store') }}" method="POST" role="form">
                            {{ csrf_field()}}

{{--                            du lieu khong hop le--}}
                            <div class="row">
                                @if( count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
{{--                            het du lieu khong hop le--}}

                            <div class="form-group">
                                <label for="tieude">Tiêu đề</label>
                                <input
                                    name="tieude"
                                    type="text"
                                    class="form-control"
                                    id="tieude"
                                    placeholder="Tiêu đề phiên hỏi đáp"
                                />
                            </div>
                            <div class="form-group">
                                <label for="gioithieu">Mô tả</label>
                                <input
                                    name="gioithieu"
                                    type="text"
                                    class="form-control"
                                    id="gioithieu"
                                    placeholder="Mô tả nội dung"
                                    value="Phiên có nội dung ..."
                                />
                            </div>
                            <div class="form-group">
                                <label for="pwd">Mật khẩu</label>
                                <div id="mk">
                                    <input id="mk_1" type="radio" name="co_mk" value=1 onclick="nhapmk_1()">Có yêu cầu mật khẩu<br>
                                    <input id='mk_0' type="radio" name="co_mk" value=0 onclick="nhapmk_0()" checked="checked">Không yêu cầu mật khẩu<br>
                                </div>
                                <div id="showmk" style="display: none;">
                                    <input
                                        name = "matkhau"
                                        type="password"
                                        class="form-control"
                                        placeholder="Mật khẩu cho phiên"
                                    />

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="time">Thời gian</label>
                                <div >
                                    <input id="time_1" type="radio" name="time" value=1 onclick="nhaptime_1()">Có giới hạn thời gian<br>
                                    <input id='time_0' type="radio" name="time" value=0 onclick="nhaptime_0()" checked="checked">Không giới hạn thời gian<br>
                                </div>
                                <div id="batdau_ketthuc" class="row" style="display: none; margin-left: 5px;" >
                                    <label
                                        for="batdau"
                                        style="margin-right: 10px;"
                                    >Từ
                                    </label>
                                    <input
                                        name="batdau"
                                        type="datetime-local"
                                        class="form-control"
                                        style="width: 250px"
                                    />
                                    <label
                                        for="ketthuc"
                                        style="margin-right: 10px;margin-left: 10px;"
                                    >Đến
                                    </label>
                                    <input
                                        name="ketthuc"
                                        type="datetime-local"
                                        class="form-control"
                                        style="width: 250px"
                                    />
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Tạo phiên</button>
                        </form>


                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
@endsection()

@section('js')
    <script>
        function nhapmk_1(){
            // document.getElementById('mk').style.display = "none";
            document.getElementById('showmk').style.display = 'block';
        }
        function nhapmk_0(){
            // document.getElementById('mk').style.display = "none";
            document.getElementById('showmk').style.display = 'none';
        }

        function nhaptime_1(){
            // document.getElementById('mk').style.display = "none";
            document.getElementById('batdau_ketthuc').style.display = 'block';
        }
        function nhaptime_0(){
            // document.getElementById('mk').style.display = "none";
            document.getElementById('batdau_ketthuc').style.display = 'none';
        }
    </script>
@endsection()
