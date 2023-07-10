<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sidoli Motor</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets') }}/images/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css') }}/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css') }}/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css') }}/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css') }}/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css') }}/flexslider.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css') }}/chosen.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css') }}/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css') }}/color-01.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css"
        integrity="sha512-KRrxEp/6rgIme11XXeYvYRYY/x6XPGwk0RsIC6PyMRc072vj2tcjBzFmn939xzjeDhj0aDO7TDMd7Rbz3OEuBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    @livewireStyles
</head>

<body class="home-page home-01 ">

    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    <header id="header" class="header header-style-1">
        <div class="container-fluid">
            <div class="row">
                <div class="topbar-menu-area">
                    <div class="container">
                        <div class="topbar-menu left-menu">
                            <ul>
                                <li class="menu-item">
                                    <a title="Hotline: (+62) 123 456 789" href="#"><span
                                            class="icon label-before fa fa-mobile"></span>WhatsApp: (+62) 123 456
                                        789</a>
                                </li>
                            </ul>
                        </div>
                        <div class="topbar-menu right-menu">
                            <ul>
                                @if (Route::has('login'))
                                @auth
                                @if (Auth::user()->utype === 'OWN')
                                <li class="menu-item menu-item-has-children parent">
                                    <a title="{{ Auth::user()->name }}" href="#">{{ Auth::user()->name }}<i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu curency">
                                        <li class="menu-item">
                                            <a title="Dashboard" href="{{ route('owner.dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Logout" href="{{ route('owner.dashboard') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
                                        </li>
                                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                                @elseif (Auth::user()->utype === 'ADM')
                                <li class="menu-item menu-item-has-children parent">
                                    <a title="{{ Auth::user()->name }}" href="#">{{ Auth::user()->name }}<i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu curency">
                                        <li class="menu-item" @if(Request::is('admin.dashboard')) style="color: red;"
                                            @endif>
                                            <a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Kategori" href="{{ route('admin.kategori') }}">Data Kategori</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Produk" href="{{ route('admin.produk') }}">Data Produk</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Manajemen Slider" href="{{ route('admin.slider') }}">Manajemen
                                                Slider</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Manajemen Kategori"
                                                href="{{ route('admin.manajemenkategori') }}">Manajemen Kategori</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Logout" href="{{ route('admin.dashboard') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
                                        </li>
                                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                                @else
                                <li class="menu-item menu-item-has-children parent">
                                    <a title="Akun Saya ({{ Auth::user()->name }})" href="#">Akun Saya ({{
                                        Auth::user()->name }})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu curency">
                                        <li class="menu-item">
                                            <a title="Logout" href="{{ route('user.dashboard') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
                                        </li>
                                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                                @endif
                                @else
                                <li class="menu-item"><a title="Masuk" href="{{ route('login') }}">Masuk</a>
                                </li>
                                <li class="menu-item"><a title="Daftar" href="{{ route('register') }}">Daftar</a></li>
                                @endif
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="mid-section main-info-area">

                        <div class="wrap-logo-top left-section">
                            <a href="/" class="link-to-home"><img src="{{ asset('/assets/images') }}/Sidoli Motor.png"
                                    alt="SIDOLI MOTOR"></a>
                        </div>

                        @livewire('header-search-component')

                        @if (Auth::guest() || Auth::user()->utype === 'USR')
                        <div class="wrap-icon right-section">
                            @livewire('cart-count-component')

                            <div class="wrap-icon-section show-up-after-1024">
                                <a href="#" class="mobile-navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>

                <div class="nav-section header-sticky">
                    <div class="primary-nav-section">
                        <div class="container">
                            <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                                <li class="menu-item home-icon" @if(Request::is('/')) style="background: #ff2832" @else
                                    style="background: none" @endif>
                                    <a href="/" class="link-term mercado-item-title"><i class="fa fa-home"
                                            aria-hidden="true"></i></a>
                                </li>
                                @guest
                                <li class="menu-item" @if(Request::is('toko')) style="background: #ff2832" @endif>
                                    <a href="/toko" class="link-term mercado-item-title">TOKO</a>
                                </li>
                                @endguest
                                @if (Route::has('login'))
                                @auth
                                @if (Auth::user()->utype === 'OWN')
                                <li class="menu-item" @if(Request::is('admin.kategori')) style="background: #ff2832"
                                    @endif>
                                    <a href="{{ route('admin.kategori') }}"
                                        class="link-term mercado-item-title">Kategori</a>
                                </li>
                                <li class="menu-item" @if(Request::is('admin.produk')) style="background: #ff2832"
                                    @endif>
                                    <a href="{{ route('admin.produk') }}"
                                        class="link-term mercado-item-title">Produk</a>
                                </li>
                                <li class="menu-item" @if(Request::is('#')) style="background: #ff2832" @endif>
                                    <a href="#" class="link-term mercado-item-title">Transaksi</a>
                                </li>
                                @elseif (Auth::user()->utype === 'ADM')
                                <li class="menu-item" @if(Request::is('admin.kategori')) style="background: #ff2832"
                                    @endif>
                                    <a href="{{ route('admin.kategori') }}"
                                        class="link-term mercado-item-title">Kategori</a>
                                </li>
                                <li class="menu-item" @if(Request::is('admin.produk')) style="background: #ff2832"
                                    @endif>
                                    <a href="{{ route('admin.produk') }}"
                                        class="link-term mercado-item-title">Produk</a>
                                </li>
                                <li class="menu-item" @if(Request::is('#')) style="background: #ff2832" @endif>
                                    <a href="#" class="link-term mercado-item-title">Transaksi</a>
                                </li>
                                @elseif (Auth::user()->utype === 'USR')
                                <li class="menu-item" @if(Request::is('toko')) style="background: #ff2832" @endif>
                                    <a href="/toko" class="link-term mercado-item-title">TOKO</a>
                                </li>
                                <li class="menu-item" @if(Request::is('keranjang') || Request::is('checkout'))
                                    style="background: #ff2832" @endif>
                                    <a href="/keranjang" class="link-term mercado-item-title">KERANJANG</a>
                                </li>
                                <li class="menu-item" @if(Request::is('user/dashboard')) style="background: #ff2832"
                                    @endif>
                                    <a href="/user/dashboard" class="link-term mercado-item-title">TRANSAKSI</a>
                                </li>
                                @endif
                                @endif
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{ $slot }}

    <footer id="footer">
        <div class="wrap-footer-content footer-style-1">

            <div class="coppy-right-box">
                <div class="container d-flex">
                    <div class="coppy-right-item">
                        <strong>Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | <a href="/">Sidoli Motor</a></strong>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('/assets/js') }}/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
    <script src="{{ asset('/assets/js') }}/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
    <script src="{{ asset('/assets/js') }}/bootstrap.min.js"></script>
    <script src="{{ asset('/assets/js') }}/jquery.flexslider.js"></script>
    {{-- <script src="{{ asset('/assets/js') }}/chosen.jquery.min.js"></script> --}}
    <script src="{{ asset('/assets/js') }}/owl.carousel.min.js"></script>
    <script src="{{ asset('/assets/js') }}/jquery.countdown.min.js"></script>
    <script src="{{ asset('/assets/js') }}/jquery.sticky.js"></script>
    <script src="{{ asset('/assets/js') }}/functions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js"
        integrity="sha512-EnXkkBUGl2gBm/EIZEgwWpQNavsnBbeMtjklwAa7jLj60mJk932aqzXFmdPKCG6ge/i8iOCK0Uwl1Qp+S0zowg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @livewireScripts

    @stack('scripts')

</body>

</html>