<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Waslni') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <!-- Steal Link -->
    <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/comment.css') }}">

</head>
<body>

<!-- NAVBAR-->
<nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a href="#" class="navbar-brand">
            <!-- Logo Image -->
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRI5fS8QzfU6L-GweLNUVZ0R3DBOaowhlu6ev8lysRu_IKwWdZf" width="60" alt="" class="d-inline-block align-middle mr-2">
            <!-- Logo Text -->
            <span class="text-uppercase font-weight-bold">Waslni</span>
        </a>

        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

        <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{route('category.index')}}" class="nav-link">Home <span class="sr-only">(current)</span></a></li>
                <li class="nav-item"><a href="/about-us" class="nav-link">About</a></li>
                <li class="nav-item"><a href="/add" class="nav-link">Add your activity</a></li>
            </ul>
            <div class="header_extra ml-auto">

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto  ">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle"
                               href="#" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right"
                                 aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="/profile">
                                    {{ Auth::user()->name }}
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>



                                <form id="logout-form" action="{{ route('logout') }}"
                                      method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>

        </div>
    </div>
</nav>


@yield('content')




<div class="footer_extra">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="footer_extra_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
                    <div class="footer_social">
                        <div class="footer_social_title">Follow us on Social Media</div>
                        <ul class="footer_social_list">
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="footer_extra_right ml-lg-auto text-lg-right">
                        <div class="footer_extra_links">
                            <ul>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                        <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">LocalGuide Team</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>

</div>


</body>

</html>



