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
                                        {{-- <li class="menu-item">
                                            <a title="Brand" href="{{ route('owner.brands') }}">Brand</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Produk" href="{{ route('owner.brands') }}">Produk</a>
                                        </li> --}}
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
                                        <li class="menu-item">
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
                                            <a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
                                        </li>
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

                        @if (Route::has('login'))
                        @auth
                        @if (Auth::user()->utype === 'USR')
                        <div class="wrap-icon right-section">
                            <div class="wrap-icon-section wishlist">
                                <a href="#" class="link-direction">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <div class="left-info">
                                        <span class="index">0 produk</span>
                                        <span class="title">Disukai</span>
                                    </div>
                                </a>
                            </div>
                            <div class="wrap-icon-section minicart">
                                <a href="/keranjang" class="link-direction">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    <div class="left-info">
                                        @if (Cart::count() > 0)
                                        <span class="index">{{ Cart::count() }} pcs</span>
                                        @endif
                                        <span class="title">Keranjang</span>
                                    </div>
                                </a>
                            </div>
                            <div class="wrap-icon-section show-up-after-1024">
                                <a href="#" class="mobile-navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        @endif
                        @endif
                        @endif

                    </div>
                </div>

                <div class="nav-section header-sticky">
                    <div class="primary-nav-section">
                        <div class="container">
                            <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                                <li class="menu-item home-icon">
                                    <a href="/" class="link-term mercado-item-title"><i class="fa fa-home"
                                            aria-hidden="true"></i></a>
                                </li>
                                {{-- <li class="menu-item home-icon" style="background: none">
                                    <a href="/" class="link-term mercado-item-title"><i class="fa fa-home"
                                            aria-hidden="true"></i></a>
                                </li> --}}
                                @guest
                                <li class="menu-item">
                                    <a href="/toko" class="link-term mercado-item-title">TOKO</a>
                                </li>
                                @endguest
                                @if (Route::has('login'))
                                @auth
                                @if (Auth::user()->utype === 'OWN')
                                <li class="menu-item">
                                    <a href="/toko" class="link-term mercado-item-title">PRODUK</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/keranjang" class="link-term mercado-item-title">INCOMING</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/checkout" class="link-term mercado-item-title">OUTGOING</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/checkout" class="link-term mercado-item-title">WILAYAH</a>
                                </li>
                                @elseif (Auth::user()->utype === 'ADM')
                                <li class="menu-item">
                                    <a href="/toko" class="link-term mercado-item-title">PRODUK</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/keranjang" class="link-term mercado-item-title">WILAYAH</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/keranjang" class="link-term mercado-item-title">CUSTOMER</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/checkout" class="link-term mercado-item-title">INCOMING</a>
                                </li>
                                @elseif (Auth::user()->utype === 'USR')
                                <li class="menu-item">
                                    <a href="/toko" class="link-term mercado-item-title">TOKO</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/keranjang" class="link-term mercado-item-title">KERANJANG</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/checkout" class="link-term mercado-item-title">CHECKOUT</a>
                                </li>
                                @endif
                                @endif
                                @endif
                                {{-- <li class="menu-item">
                                    <a href="/checkout" class="link-term mercado-item-title"
                                        style="background: #ff2832">Checkout</a>
                                </li> --}}
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

    @livewireScripts

    @stack('scripts')

</body>

</html>