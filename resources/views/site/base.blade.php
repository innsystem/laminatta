<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('title') | Lâminas Naturais e Compostas de Alta Qualidade para Seus Projetos.">
    <!-- Title-->
    <title>@yield('title') | {{$getSettings['site_name'] ?? 'Laminatta'}}</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ $getSettings['favicon'] ?? '' ? asset('storage/' . $getSettings['favicon']) : asset('favicon.png') }}" type="image/x-icon">

    <link rel="manifest" href="{{ asset('tpl_site/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('tpl_site/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('tpl_site/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('tpl_site/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('tpl_site/css/magnific-popup.min.css') }}">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="{{ asset('tpl_site/css/swiper-bundle.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('tpl_site/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('tpl_site/css/custom_template.css?1'.rand()) }}">

    @yield('pageCSS')

    @if($getSettings['script_head'] && $getSettings['script_head'] != '')
        {!! $getSettings['script_head'] !!}
    @endif
</head>

<body class="home-luxury-hotel-2 bg-repeat">
    @if($getSettings['script_body'] && $getSettings['script_body'] != '')
        {!! $getSettings['script_body'] !!}
    @endif
    <!-- slider drag cursor -->
    <div class="slider-drag-cursor"><i class="fal fa-arrows-up-down-left-right"></i></div>

    <!--==============================
 Preloader
==============================-->
    <div class="preloader ">
        <div id="preloader" class="preloader-inner">
            <img src="{{ asset('/galerias/favicon.png') }}" alt="img">
            <div class="txt-loading">
                <span data-text-preloader="L" class="letters-loading">
                    L </span>
                <span data-text-preloader="A" class="letters-loading">
                    A </span>
                <span data-text-preloader="M" class="letters-loading">
                    M </span>
                <span data-text-preloader="I" class="letters-loading">
                    I </span>
                <span data-text-preloader="N" class="letters-loading">
                    N
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
                <span data-text-preloader="T" class="letters-loading">
                    T
                </span>
                <span data-text-preloader="T" class="letters-loading">
                    T
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
            </div>
        </div>
    </div>

    <!--==============================
    Sidemenu
============================== -->
    <div class="sidemenu-wrapper ">
        <div class="sidemenu-content allow-natural-scroll">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="sidemenu-layout">
                <div class="th-side-menu">
                    <div class="side-logo">
                        <a href="{{ route('site.index') }}"><img src="{{ asset('/galerias/logo_laminatta_white.png') }}" alt="Laminatta" style="max-width:160px;"></a>
                    </div>
                    <ul>
                        <li class="">
                            <a href="{{ route('site.index') }}">Início</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('site.about') }}">Sobre Nós</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('site.categories.index') }}">Lâminas</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('site.services') }}">Serviços</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ route('site.sustainability') }}">Sustentabilidade</a>
                        </li>
                    </ul>

                </div>
                <div class="widget side-menu-contact pt-80 footer-widget">
                    <h3 class="widget_title">Entre em Contato</h3>
                    <div class="th-widget-contact">
                        <div class="info-box">
                            <div class="box-icon">
                                <i class="fal fa-location-dot"></i>
                            </div>
                            <p class="box-text">Av. Principal, 123, Cidade, Estado, País</p>
                        </div>
                        <div class="info-box">
                            <div class="box-icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <p class="box-text">
                                <a href="tel:+01234567890" class="box-link">+01 234 567 890</a>
                                <a href="tel:+09876543210" class="box-link">+09 876 543 210</a>
                            </p>
                        </div>
                        <div class="info-box">
                            <div class="box-icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <p class="box-text">
                                <a href="mailto:mailinfo00@laminatta.com" class="box-link">contato@laminatta.com</a>
                                <a href="mailto:support24@laminatta.com" class="box-link">suporte24@laminatta.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="mt-50">
                        <a href="contact.html" class="th-btn th-icon">SOLICITAR ORÇAMENTO</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
	Header Area
==============================-->
    <header class="th-header header-layout4 ">
        <div class="header-top d-none d-lg-block">
            <div class="container th-container2">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto">
                        <div class="header-links d-none d-lg-inline-block">
                            <ul>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container th-container2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto d-xxl-none d-block">
                            <div class="header-wrapp">
                                <div class="header-button">
                                    <a href="#" class="simple-btn sideMenuToggler"><i
                                            class="fa-sharp-duotone far fa-bars me-2"></i><span
                                            class="menu">MENU</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto ms-auto d-none d-xl-block">
                            <div class="header-wrapp">
                                <nav class="main-menu">
                                    <ul>
                                        <li>
                                            <a href="{{ route('site.about') }}">EMPRESA</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('site.categories.index') }}">LÂMINAS</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{ route('site.index') }}">
                                    <img src="{{ asset('/galerias/logo_laminatta_white.png') }}" alt="Laminatta">
                                </a>
                                <div class="bg-shape" data-mask-src="{{ asset('tpl_site/img/logo-shape2.png') }}"></div>
                            </div>
                        </div>
                        <div class="col-auto me-auto d-none d-xl-block">
                            <div class="header-wrapp">
                                <nav class="main-menu style3">
                                    <ul>
                                        <li>
                                            <a href="{{ route('site.services') }}">SERVIÇOS</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('site.sustainability') }}">SUSTENTABILIDADE</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer-wrapper footer-layout1 footer-layout1-2 bg-light2">
        <div class="container">
            <div class="footer-logo">
                <img class="bg-light2" src="{{ asset('/galerias/logo_laminatta_white.png') }}" alt="Laminatta">
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget footer-line">
                            <h3 class="widget_title">Sobre a Laminatta</h3>
                            <div class="th-widget-about style2">
                                <p class="footer-text">Com mais de 30 anos de experiência, a Laminatta é líder no mercado de lâminas naturais e compostas, oferecendo produtos de alta qualidade e serviços especializados de prensagem. Nosso objetivo é transformar seus projetos em realidade, com excelência e durabilidade. Explore um mundo de possibilidades e tenha uma experiência agradável ao escolher a Laminatta.</p>
                                <div class="th-social">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Entre em Contato</h3>
                            <div class="th-widget-contact">
                                <div class="info-box">
                                    <div class="box-icon">
                                        <i class="fal fa-location-dot"></i>
                                    </div>
                                    <p class="box-text">Av. Principal, 123, Cidade, Estado, País</p>
                                </div>
                                <div class="info-box">
                                    <div class="box-icon">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <p class="box-text">
                                        <a href="tel:+01234567890" class="box-link">+01 234 567 890</a>
                                        <a href="tel:+09876543210" class="box-link">+09 876 543 210</a>
                                    </p>
                                </div>
                                <div class="info-box">
                                    <div class="box-icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <p class="box-text">
                                        <a href="mailto:mailinfo00@laminatta.com" class="box-link">contato@laminatta.com</a>
                                        <a href="mailto:support24@laminatta.com" class="box-link">suporte24@laminatta.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row gy-2 align-items-center">
                    <div class="col-lg-5">
                        <p class="copyright-text">Direitos Autorais <i class="fal fa-copyright"></i> 2025 <a
                                href="{{ route('site.index') }}">Laminatta</a>. Todos os Direitos Reservados.</p>
                    </div>
                    <div class="col-lg-7 text-end">
                        <p class="copyright-text mb-0">Desenvolvido por <a href="https://innsystem.com.br" target="_Blank" class="text-reset fw-semibold"><img src="{{ asset('/innsystem-logo-light.png') }}" alt="InnSystem" style="max-width: 100px;"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @yield('pageMODAL')

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="{{ asset('tpl_site/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <!-- Swiper Js -->
    <script src="{{ asset('tpl_site/js/swiper-bundle.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('tpl_site/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('tpl_site/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('tpl_site/js/jquery.counterup.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('tpl_site/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('tpl_site/js/isotope.pkgd.min.js') }}"></script>

    <!-- Gsap Animation -->
    <script src="{{ asset('tpl_site/js/gsap.min.js') }}"></script>
    <!-- ScrollTrigger -->
    <script src="{{ asset('tpl_site/js/ScrollTrigger.min.js') }}"></script>
    <!-- SplitText -->
    <script src="{{ asset('tpl_site/js/SplitText.min.js') }}"></script>

    <!-- 360 degree Js start -->
    <script src="{{ asset('tpl_site/js/360.min.js') }}"></script>
    <script src="{{ asset('tpl_site/js/panolens.min.js') }}"></script>

    <!-- 360 degree Js end -->
    <!-- Main Js File -->
    <script src="{{ asset('tpl_site/js/main.js') }}"></script>

    @yield('pageJS')
</body>

</html>