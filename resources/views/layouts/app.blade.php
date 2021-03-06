<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"--}}
{{--            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"--}}
{{--            crossorigin="anonymous"></script>--}}


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background: linear-gradient(135deg, #1709e9, #ae80f1, #2685d2)">
            <div class="container" >
                <a class="navbar-brand" href="{{ route('welcome') }}"   >
{{--                    {{ config('app.name', 'Laravel') }}--}}
                    Di???n ????n h???i ????p

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
{{--                                    can xu ly--}}
                                    @if(Auth::user()->type === 2)
                                        <a class="dropdown-item" href="{{route('taophien')}}">
                                           T???o phi??n h???i ????p
                                        </a>
                                        <a class="dropdown-item" href="{{route('taophien2')}}">
                                            T???o phi??n kh???o s??t
                                        </a>
                                    @endif()

                                    @if(Auth::user()->type === 0)
                                        <a class="dropdown-item" href="{{route('taophien')}}">
                                            T???o phi??n h???i ????p
                                        </a>
                                        <a class="dropdown-item" href="{{route('taophien2')}}">
                                            T???o phi??n kh???o s??t
                                        </a>

                                        <a class="dropdown-item" href="{{route('makegiaovien')}}">
                                            T???o t??i kho???n gi??o vi??n
                                        </a>
                                    @endif()
{{--                                    het xu ly--}}

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>



                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
{{--            --}}
            <section class="homeContent">
                <div class="container-fluid">
                    <div class="container-fluid">
                        <div class="row">
                            <!--thanh menu trai-->
                            <div class="col-md leftBar" style="margin-top: 30px">

                                <!---->
                                @guest()
                                @else
                                <nav class="nav flex-column bigMenu" >
                                    <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home"></i>Phi??n h???i ????p</a>

                                    <a class="nav-link" href="{{ route('home2') }}"><i class="fas fa-poll-h"></i> Phi???u kh???o s??t</a>
                                    <!-- <a class="nav-link" href="#"><i class="fas fa-question-circle"></i> Phi??n c???a t??i</a>
                                    <a class="nav-link" href="#"><i class="fas fa-check-square"></i> Phi???u kh???o s??t c???a t??i</a> -->
                                </nav>
                                @endguest
                            </div>
                            <!--phan noi dung giua-->
                            <div class="col-md-8 centerBar">
                                @yield('content')
                            </div>
                            <!--thanh ben phai-->
                            <div class="col-md rightBar">

                                <div class="extraInformation">
                                    <div class="thumbnail">

                                        @yield('thongtin')
{{--                                        <p>PHI??N H???I ????P</p>--}}
{{--                                        <h2>{{ $phiens->count() }}</h2>--}}
{{--                                        <P>PHI??N KH???O S??T</P>--}}
{{--                                        <H2>2</H2>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>


    <!-- Footer -->
    <footer class="page-footer font-small blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">?? 2019 Copyright:
            <a href="#">Nhom 18</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->


    @yield('js')


</body>


</html>
