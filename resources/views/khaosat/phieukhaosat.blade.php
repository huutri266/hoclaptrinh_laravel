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
            <div class="phienlc-header" >
            <div class="roomTitle">
                <h3>{{ $phien->tieude }}</h3>

            </div>
            <div class="roomDescribe">
                <h5> {{ $phien->gioithieu }}</h5>
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
            </div>

            {{--            hai nut--}}
            <hr>
            <div class="row">
                <div class="col-md-10" style="margin-left: 10px">
                    <a href=" ">Trở lại</a>
                </div>
                <div class="col" style="margin-right:10px ">
                    <a href="{{ route('outphienluachon', $phien->id) }}">Rời khỏi phiên</a>
                </div>
            </div>
            <hr>



            @if( $phien->nguoitao == \Illuminate\Support\Facades\Auth::user()->id )
            <!--Cho admin phong-->
            <div class="admin float-left" style="display: flex; margin-top: 1rem">
                <button class="btn btn-sm btn-primary" style="margin-right: 1rem;" type="button"
                        data-toggle="collapse" data-target="#addquestion" aria-expanded="false"
                        aria-controls="addquestion">Thêm câu hỏi <i class="fas fa-plus"></i></button>
                <a href="{{ route('thongke', $phien->id) }}" role="button" class="btn btn-sm btn-success" style="margin-right: 1rem;">Xem kết quả <i class="fas fa-poll"></i></a>
                <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit"
                        data-whatever="@mdo" style="margin-right: 1rem">Chỉnh sửa <i class="fas fa-pen"></i></button>
                <button class="btn btn-sm btn-danger">Đóng khảo sát<i class="fas fa-door-closed"></i></button>
                <!--Khung sua phong-->
                <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="color: black">
                            <form action="" method="" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="taophong">Sửa</h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label class="col-form-label">Tên phiếu khảo sát:</label>
                                            <input type="text" class="form-control" name="tenphong"
                                                   value="Tên phòng">
                                            <div class="row">
                                                <div class="col-md">
                                                    <label class="col-form-label">Mật
                                                        khẩu:</label>
                                                    <input type="text" class="form-control"
                                                           name="matkhau" id="matkhau" value="matkhaucu">
                                                    <small id="matkhau" class="form-text"
                                                           style="color: #007bff">Để trống nếu không đặt mật khẩu</small>
                                                </div>
                                            </div>
                                            <label class="col-form-label">Mô tả:</label>
                                            <textarea class="form-control"
                                                      rows="3">Mô tả của phiên</textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Hủy</button>
                                    <input type="submit" class="btn btn-info" id="edit" name="sua"
                                           value="Cập nhật">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!---->
            </div>
            <div class="clearfix"></div>
            <!--Khung them cau hoi-->
            <div class="collapse" id="addquestion">
                <div class="card card-body">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                               href="#pills-home" role="tab" aria-controls="pills-home"
                               aria-selected="true">Nhiều đáp án</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                               href="#pills-profile" role="tab" aria-controls="pills-profile"
                               aria-selected="false">Đúng sai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill"
                               href="#pills-contact" role="tab" aria-controls="pills-contact"
                               aria-selected="false">Đáp án văn bản</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab">
                            <form class="form-group" action="{{ route('taocauhoi.store', $phien->id) }}" method="POST" role="form">
                                    {{ csrf_field()}}
                                <div class="form-group">

                                    <label class="col-form-label">Câu hỏi:</label>
                                    <input type="text" class="form-control form-control-sm" name="cauhoi">
                                    <div class="row" id="answerField">
                                        <div class="col-md-6">
                                            <label class="col-form-label">Đáp án 1:</label>
                                            <input type="text" class="form-control form-control-sm"
                                                   name="dapan1" id="answer1">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Đáp án 2:</label>
                                            <input type="text" class="form-control form-control-sm"
                                                   name="dapan2" id="answer1">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Đáp án 3:</label>
                                            <input type="text" class="form-control form-control-sm"
                                                   name="dapan3" id="answer1">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Đáp án 4:</label>
                                            <input type="text" class="form-control form-control-sm"
                                                   name="dapan4" id="answer1">
                                        </div>
{{--                                        <div class="col-md-6">--}}
{{--                                            <label class="col-form-label">Đáp án 2:</label>--}}
{{--                                            <input type="text" class="form-control form-control-sm"--}}
{{--                                                   name="answer[]" id="answer" onfocus="add(2)">--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                                <div class="buttons">
                                    <input type="submit" class="btn btn-primary" id="taopks" name="tao" value="Tạo">
                                    <button type="button" class="btn btn-secondary">Hủy</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                             aria-labelledby="pills-profile-tab">
{{--                            <form class="form-group" action="" method="" enctype="multipart/form-data">--}}
                            <form class="form-group" action="{{ route('taocauhoiYN.store', $phien->id) }}" method="POST" role="form">
                                {{ csrf_field()}}
                                <div class="form-group">
                                    <label class="col-form-label">Câu hỏi:</label>
                                    <input type="text" class="form-control form-control-sm" name="cauhoiYN">
                                </div>
                                <div class="buttons">
                                    <input type="submit" class="btn btn-primary" id="taopks" name="tao" value="Tạo">
                                    <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Hủy</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                             aria-labelledby="pills-contact-tab">
{{--                            <form class="form-group" action="" method="" enctype="multipart/form-data">--}}
                                <form class="form-group" action="{{ route('taocauhoiTxt.store', $phien->id) }}" method="POST" role="form">
                                    {{ csrf_field()}}

                                <div class="form-group">
                                    <label class="col-form-label">Câu hỏi:</label>
                                    <input type="text" class="form-control form-control-sm" name="cauhoiTxt">
                                </div>
                                <div class="buttons">
                                    <input type="submit" class="btn btn-primary" id="taopks" name="tao" value="Tạo">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endif()
            <!---->
            <!---->
        </div>
        <div class="surveys">
            <div class="title">
                <h5>Danh sách câu hỏi</h5>
            </div>
{{--            <form action="" method="" enctype="multipart/form-data" class="surveysList">--}}
            <form class="form-group surveysList" action="{{ route('guiphieu', $phien->id) }}" method="POST" role="form"   enctype="multipart/form-data">
                    {{ csrf_field()}}

                @foreach($cauhois as $cauhoi)
                <div class="question">
                    <div class="qTitle">Câu hỏi: {{ $cauhoi->cauhoi }}</div>
                    <ul>
{{--                        <li style="visibility: hidden;">--}}
{{--                            <input  type="radio" name="dapancauhoi-{{ $cauhoi->id }}" value={{$cauhoi->id."@0" }}>--}}
{{--                        </li>--}}
                        @foreach($cauhoi->getTralois as $traloi)
                        <li>
                            <input type="radio" name="dapancauhoi-{{ $cauhoi->id }}" value={{$traloi->id }}>
                            <p>Đáp án: {{ $traloi->cautraloi }}</p>
                        </li>
                        @endforeach

{{--                        <li>--}}
{{--                            <input type="radio" name="multi">--}}
{{--                            <p>Đáp án số 2</p>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <input type="radio" name="multi">--}}
{{--                            <p>Đáp án số 3</p>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <input type="radio" name="multi">--}}
{{--                            <p>Đáp án số 4</p>--}}
{{--                        </li>--}}
                    </ul>
                </div>
                @endforeach


                @foreach($cauhoiYNs as $cauhoi)
                <div class="question">
                    <div class="qTitle">Câu hỏi: {{ $cauhoi->cauhoi }}</div>
                    <ul>
{{--                        <input type="hidden" name="dapancauhoiYN-{{ $cauhoi->id }}" value="1"  >--}}
                        <li>
                            <input type="radio" name="dapancauhoiYN-{{ $cauhoi->id }}" value="1">
                            <p>Đúng</p>
                        </li>
                        <li>
                            <input type="radio" name="dapancauhoiYN-{{ $cauhoi->id }}" value="0">
                            <p>Sai</p>
                        </li>
                    </ul>
                </div>
                @endforeach()


                @foreach($cauhoiTxts as $cauhoi)
                <div class="question">
                    <div class="qTitle">Câu hỏi: {{$cauhoi->cauhoi}}</div>
                    <textarea name="dapancauhoiTxt-{{ $cauhoi->id }}" class="form-control" rows="3"></textarea>
                </div>
                @endforeach

                <div class="buttons">
                    <input type="submit" class="btn btn-primary" id="taophong" name="xacnhan" value="Xác nhận">
                    <button type="button" class="btn btn-secondary">Hủy</button>
                </div>



            </form>
        </div>
    </div>
@endsection
