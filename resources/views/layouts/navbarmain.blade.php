<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>AlphaGuide</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/styless.css')}}" rel="stylesheet" />

    <!-- =======================================================
    * Template Name: Selecao - v4.9.1
    * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="{{route('main')}}">AlphaGuide</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="">Basty bet</a></li>
                <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="#team">Gidter</a></li>
                <li class="dropdown"><a href="#"><span>Qalalar</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>Soltu'stik Qazaqstan</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Astana</a></li>
                                <li><a href="#">Petropavl</a></li>
                                <li><a href="#">Qostanai</a></li>
                                <li><a href="#">Pavlodar</a></li>
                                <li><a href="#">Ko'kshetau</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Batys Qazaqstan</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Oral</a></li>
                                <li><a href="#">Atyrau</a></li>
                                <li><a href="#">Aqtau</a></li>
                                <li><a href="#">Aqto'be</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">On'tu'stik Qazaqstan <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{route('almaty')}}">Almaty</a></li>
                                <li><a href="#">Shymkent</a></li>
                                <li><a href="#">Turkistan</a></li>
                                <li><a href="#">Kyzylorda</a></li>
                                <li><a href="#">Taraz</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Shyg'ys Qazaqstan <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Semey</a></li>
                                <li><a href="#">O'skemen</a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Ortalyq Qazaqstan <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="">Qarag'andy</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-link scrollto">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-link scrollto">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="dropdown"><a href="#">{{ Auth::user()->name }}<i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form></li>
                        </ul>
                    </li>
                @endguest
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown"><span>AlphaGuide-ke</span> qosh keldіńіz </h2>
                <p class="animate__animated fanimate__adeInUp">Qazaqstannyń ár qalasynyń tabıǵaty men kórkem jerlerіmen, ıaǵnı týrızmіmen tanystyrý.Qazіrgі tańda týrızm salasyna qyzyǵatyn adamdardyń sany kún saıyn artyp kele jatyr. Osyǵan baılanysty bіz sіzderge ózіmіzdіń jobany usynamyz.</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp scrollto">O'tinish bildiry'</a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)"></use>
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)"></use>
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff"></use>
        </g>
    </svg>

</section><!-- End Hero -->

<main id="main">
    @yield('content')
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<br><br><br><br>
<footer id="footer">
    <div class="container">
        <h3>AlphaGuide</h3>
        <div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/alphagu1de/" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div class="copyright">
            Avtorlyq quqyq  &copy; <strong><span>AlphaGuide saiaxatshylarg'a arnalg'an 2022 </span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

<!-- Template Main JS File -->
<script src={{asset('js/main.js')}}></script>

</body>

</html>
