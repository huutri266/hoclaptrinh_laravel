@extends('layouts.app')

@section('content')


{{--    <script>--}}
{{--        var btn = $('#BTTbutton');--}}
{{--        $(window).scroll(function () {--}}
{{--            if ($(window).scrollTop() > 300) {--}}
{{--                btn.addClass('show');--}}
{{--            } else {--}}
{{--                btn.removeClass('show');--}}
{{--            }--}}
{{--        });--}}
{{--        btn.on('click', function (e) {--}}
{{--            e.preventDefault();--}}
{{--            $('html, body').animate({ scrollTop: 0 }, '300');--}}
{{--        });--}}

{{--        function marked() {--}}
{{--            if (document.getElementById("heart").style.color == "rgb(231, 7, 112)") {--}}
{{--                document.getElementById("heart").style.color = "rgba(184, 206, 230, 0.5)";--}}
{{--            } else {--}}
{{--                document.getElementById("heart").style.color = "rgb(231, 7, 112)";--}}
{{--            }--}}
{{--        }--}}

{{--        var i = 2;--}}
{{--        function add(a) {--}}
{{--            if (a == i) {--}}
{{--                i++;--}}
{{--                $("#answerField").append('<div class="col-md-6"><label class= "col-form-label">Đáp án ' + i + ':</label ><input type="text" class="form-control form-control-sm" name="answer[]" id="answer" onfocus="add(' + i + ')"></div>')--}}
{{--            }--}}
{{--        }--}}
{{--    </script>--}}

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



            <!---->
        </div>
        <div class="surveys">
            <div class="title">
                <h4>Kết quả phiên khảo sát</h4>
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
{{--                                    <input type="radio" name="dapancauhoi-{{ $cauhoi->id }}" value={{$traloi->id }}>--}}
                                    <p>Đáp án: {{ $traloi->cautraloi }}</p>

                                </li>
                                <li>
                                    <p>Thống kê đáp án: {{ $traloi->countChon() }} / {{ $cauhoi->countTralois() }}</p>
                                </li>
                                <hr>
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
                            <li>
{{--                                <input type="radio" name="dapancauhoiYN-{{ $cauhoi->id }}" value="1">--}}
                                <p>Đúng</p>
                            </li>

                            <li>
                                <p>Thống kê đáp án: {{ $cauhoi->countYes() }} / {{ $cauhoi->countAll() }}</p>
                            </li>
                            <hr>
                            <li>
{{--                                <input type="radio" name="dapancauhoiYN-{{ $cauhoi->id }}" value="0">--}}
                                <p>Sai</p>
                            </li>
                            <li>
                                <p>Thống kê đáp án: {{ $cauhoi->countNo() }} / {{ $cauhoi->countAll() }}</p>
                            </li>
                        </ul>
                    </div>
                @endforeach()


                @foreach($cauhoiTxts as $cauhoi)
                    <div class="question">
                        <div class="qTitle">Câu hỏi: {{$cauhoi->cauhoi}}</div>
                        <hr>
                        <div class="qTitle">danh sach cau tra loi: </div>
                        <div>
                            <ul>
                                @foreach( $cauhoi->getTralois as $traloi)
                                    <li><p>{{ $traloi->getNguoitao->name }} : {{ $traloi->cautraloi }}</p></li>
                                    <hr>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                @endforeach

{{--                <div class="buttons">--}}
{{--                    <input type="submit" class="btn btn-primary" id="taophong" name="xacnhan" value="Xác nhận">--}}
{{--                    <button type="button" class="btn btn-secondary">Hủy</button>--}}
{{--                </div>--}}



            </form>
        </div>
    </div>
@endsection
