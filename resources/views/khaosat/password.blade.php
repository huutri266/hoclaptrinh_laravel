@extends('layouts.app')

@section('content')


    <script>
        var btn = $('#BTTbutton');
        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });
        btn.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, '300');
        });

        function marked() {
            if (document.getElementById("heart").style.color == "rgb(231, 7, 112)") {
                document.getElementById("heart").style.color = "rgba(184, 206, 230, 0.5)";
            } else {
                document.getElementById("heart").style.color = "rgb(231, 7, 112)";
            }
        }

        var i = 2;
        function add(a) {
            if (a == i) {
                i++;
                $("#answerField").append('<div class="col-md-6"><label class= "col-form-label">Đáp án ' + i + ':</label ><input type="text" class="form-control form-control-sm" name="answer[]" id="answer" onfocus="add(' + i + ')"></div>')
            }
        }
    </script>



    <div class="col-md-12 centerBar">
        <div class="MainContent">
            <div class="roomTitle">
                <h3>{{ $phien->tieude }}</h3>

            </div>
            <div class="roomDescribe">
                <p> {{ $phien->gioithieu }}</p>
                <hr>
            </div>
            <div>
                @if($phien->gioihan ===1)
                    <p class="card-text">thời gian từ: {{$phien->batdau}} đến: {{$phien->ketthuc}}</p>
                @endif()
            </div>
            <div class="roomFooter">
                <div class="ratingBox clearfix">
                    <div class="float-left">

                    </div>

                </div>
                <div class="userBox">
                    <div style="margin-right: 10px">
                        <a href="#">{{ $phien->getNguoitao->name }}</a>
                        <p>Ngày tạo: {{ $phien->created_at }}</p>
                    </div>

                </div>
            </div>
            <!---->
            <!---->
        </div>

        <div class="card" style="margin-top: 20px;">
            <div class="card-header">
                <h4>Nhập mật khâu để vào phiên</h4>
            </div>
            <div class="card-body" style="margin-top: 10px;background-color:rgb(183, 231, 247)">
                <div class="container">


                    <form action="{{ route('showphienKhaosatPass', $phien->id) }}" method="POST" role="form" enctype="multipart/form-data">
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
                            <a href="{{route('home2')}}" class="btn btn-primary" style="background-color: orange">Quay lại</a> <br>
                            <input type="submit" class="btn btn-primary" id="taopks" value="Vào phiên">
                        </div>
                    </form>
                    {{--                        ///cac cau hoi--}}




                </div>
            </div>
        </div>

    </div>
@endsection
