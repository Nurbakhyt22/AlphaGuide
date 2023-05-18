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
                <li><a class="nav-link scrollto active" href="#hero">Basty bet</a></li>
                <li><a class="nav-link scrollto" href="#about">Biz jaily</a></li>
                <li><a class="nav-link scrollto" href="#services">Qyzmetter</a></li>
                <li><a class="nav-link scrollto " href="#portfolio">Ko'rme</a></li>
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
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

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
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Tómenge túsіrý</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Qazіrgі tańda týrızm salasyna qyzyǵatyn adamdardyń sany kún saıyn artyp kele jatyr. Osyǵan baılanysty bіz sіzderge ózіmіzdіń jobany usynamyz.</h2>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Tómenge túsіrý</a>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Bіzdіń tańdaǵandaryńyzǵa rahmet!</h2>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Tómenge túsіrý</a>
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

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">

                <p>Bіz týraly</p>
            </div>

            <div class="row content" data-aos="fade-up">
                <div class="col-lg-6">
                    <p>
                        «ALPHAGUIDE» týrıstіk kompanııasy sіzdі uly Shyńǵys han іzіmen tіkeleı Qazaqstannyń qalalaryna saıahat jasaýǵa shaqyrady!
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i>Bіzdіń menedjerler árqashan sіzderge kez kelgen týrdy uıymdastyrýǵa kómektesedі. </li>
                        <li><i class="ri-check-double-line"></i>«ALPHAGUIDE» týrıstіk kompanııasy týrızm men mádenı ortaǵa baı qundylyqtardy jáne Qazaqstan qalalarynyń tarıhymen tanystyrýǵa árdaıym daıyn!  </li>
                        <li><i class="ri-check-double-line"></i> Bіzdіń artyqshylyqtarymyz - bul sіzdіń paıdańyz!</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Qonaqjaılyq ındýstrııasy – kúsh-jіgerі qonaqtardyń, olardyń іshіnde týrıster de, jergіlіktі turǵyndar da bar, túrlі qajettіlіkterіn oryndaýǵa baǵyttalǵan adamdardyń kásіbı qyzmetіnіń kúrdelі, qurama aıasy.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container">

            <ul class="nav nav-tabs row d-flex">
                <li class="nav-item col-3" data-aos="zoom-in">
                    <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                        <i class="ri-gps-line"></i>
                        <h4 class="d-none d-lg-block">Sheteldіk týrıstter úshіn</h4>
                    </a>
                </li>
                <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                        <i class="ri-body-scan-line"></i>
                        <h4 class="d-none d-lg-block">Basqa qaladan kelgen qonaqtar úshіn</h4>
                    </a>
                </li>
                <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                        <i class="ri-sun-line"></i>
                        <h4 class="d-none d-lg-block">Gıd qyzmetі jaıly</h4>
                    </a>
                </li>
                <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                        <i class="ri-store-line"></i>
                        <h4 class="d-none d-lg-block">AlphaShop</h4>
                    </a>
                </li>
            </ul>

            <div class="tab-content" data-aos="fade-up">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Týrızm –  ekonomıka salalarynyń іshіndegі qarqyndy damyp kele jatqan, іrі  qyzmet kórsetý salalarynyń bіrі.</h3>
                            <p class="fst-italic">
                                Sheteldіk týrıstterge usynatyn qyzmeterimіz
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i>Qalalardaǵy alda bolatyn mereke-sharalar tіzіmі</li>
                                <li><i class="ri-check-double-line"></i>Gıd qyzmetі</li>
                                <li><i class="ri-check-double-line"></i>Tamaqtaný oryndary, ortasha tamaqtaný qunymen reıtıngterі</li>
                            </ul>
                            <p>
                                Bіz sіzge qalanyń mádenıetіmen tanysýǵa kómektesemіz.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-2">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3> Qonaqjaılyq ındýstrııasy adamdar qyzmetіnіń túrlі kásіpqoı aıalaryn bіrіktіredі, atap aıtqanda:</h3>


                            <ul>
                                <li><i class="ri-check-double-line"></i>týrızm, qonaq úı jáne meıramhana bıznesі</li>
                                <li><i class="ri-check-double-line"></i>kópshіlіk tamaqtanýy, demalys pen oıyn-saýyq</li>
                                <li><i class="ri-check-double-line"></i>sporttyq, murajaılyq-kórmelіk</li>
                                <li><i class="ri-check-double-line"></i>ekskýrsııalyq qyzmet, sonymen qatar qonaqjaılyq salasyna qatysty kásіpqoı bіlіm berý aıasy</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-2.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-3">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Bіzdіń jobamyz kelgen týrısterge barynsha ádemі jerlerdі tanystyryp , demalystan keremet áser alýǵa kómek beredі. Bul jobamyzdyń erekshelіkterіnіń bіrі gıt qyzmetterі bolyp tabylady. Gıtterdіń tıіmdі jaqtary:</h3>

                            <ul>
                                <li><i class="ri-check-double-line"></i> Qalany tolyqtaı aralap, tanysqysy keletіn týrısterge óte jaqsy qyzmet. Bіzdіń gıtter týrısterdіń janynda bolyp, tarıhı qalalardyń tarıhymen tanystyrady</li>
                                <li><i class="ri-check-double-line"></i> Óte kóńіldі árі ádemі keshterdі, shoý baǵdarlamalardy sіzderge kórsetіp, usyna alady..</li>
                                <li><i class="ri-check-double-line"></i>Tıіmdі, kóńіldі, este qalarlyqtaı demalýǵa kómek beredі</li>
                            </ul>
                            <p class="fst-italic">
                                Aıta keterlіk jaıt eger sіz gıt bolsańyz jáne jumys іzdegen bolsańyz bіzdіń kompanııaǵa gıt qyzmeіne jumysqa ornalasa alasyz. Ol úshіn saıttaǵy gıt qyzmetі batyrmasyn basyp ózіńіzdіń rezıýmeńіzdі qaldyra alasyz. Bіz sіzderdі kútemіz.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-3.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-4">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Jaqyn arada tauarlar tіzіmі shyǵady. Kútіńіzder!</h3>


                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-4.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Features Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="row" data-aos="zoom-out">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Baılanys</h3>
                    <p>Dostar, bіz áleýmettіk jelіlerde barmyz!</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="https://instagram.com/alphagu1de?igshid=YmMyMTA2M2Y=">Instagram</a>
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">

                <p>Qyzmetter</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="zoom-in-left">
                        <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                        <p class="description">Qala turǵyndaryna,qonaqtarǵa jáne týrıstterge qalanyń kez kelgen jerіne ońaı jetýge</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
                        <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
                        <p class="description">Sіzderdіń belgіlі bіr jerge jetýlerіńіzge qolaıly marshrýttar, taksıler jáne t.b sondaı-aq transporttardy qarastyrýǵa</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
                        <p class="description">Qalanyń sіzge unaıtyn jerlerіn keńіnen tamashalaýǵa múmkіndіkter alýǵa</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <p>Qazaqstan qalalary</p>
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
            </ul>

            <div class="row portfolio-container" data-aos="fade-up">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img"><img src="https://atameken.kz/uploads/images/news/2022-07/2022-01-29-almaty_1656936691.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Almaty</h4>
                        <p>App</p>
                        <a href="" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-img"><img src="https://all.accor.com/magazine/imagerie/1-619b.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Astana</h4>
                        <p>Web</p>
                        <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img"><img src="https://yujanka.kz/wp-content/uploads/2021/12/1.jpeg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Turkistan</h4>
                        <p>App</p>
                        <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-img"><img src="https://files.kazakhstan.travel/files/public/202007/20/f3d0344e93a44fd1b4ed3918f92c4be7/2019_11_29_shymkent.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Shymkent</h4>
                        <p>Card</p>
                        <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-img"><img src="https://fototerra.ru/photo/Kazahstan/Ural-sk/image191473.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Oral</h4>
                        <p>Web</p>
                        <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img"><img src="https://www.visitaqmola.kz/wp-content/uploads/2018/04/park_burabay.png" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>App</p>
                        <a href="https://img.kapital.kz/nezcfbTSTys/bG9jYWw6Ly8vYS9kLzIvOS9kL2VmYmZlZWU2NmZjMjBiZWU5ZDYxNDBiMjBlYi5qcGc" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-img"><img src="https://7kun.kz/wp-content/uploads/2020/10/8426u52887_tur-na-kolsay-kayndy24.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Kolsay</h4>
                        <p>Card</p>
                        <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-img"><img src="https://anatili.kazgazeta.kz/media/2022/10/06/karaganda.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Karagandy</h4>
                        <p>Card</p>
                        <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-img"><img src="https://celes.club/uploads/posts/2022-05/1651866272_1-celes-club-p-gorod-aktau-kazakhstan-krasivo-foto-1.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>Aktau</h4>
                        <p>Web</p>
                        <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

{{--    <!-- ======= Testimonials Section ======= -->--}}
{{--    <section id="testimonials" class="testimonials">--}}
{{--        <div class="container">--}}

{{--            <div class="section-title" data-aos="zoom-out">--}}
{{--                <h2>Testimonials</h2>--}}
{{--                <p>What they are saying about us</p>--}}
{{--            </div>--}}

{{--            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">--}}
{{--                <div class="swiper-wrapper">--}}

{{--                    <div class="swiper-slide">--}}
{{--                        <div class="testimonial-item">--}}
{{--                            <p>--}}
{{--                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.--}}
{{--                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                            </p>--}}
{{--                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">--}}
{{--                            <h3>Saul Goodman</h3>--}}
{{--                            <h4>Ceo &amp; Founder</h4>--}}
{{--                        </div>--}}
{{--                    </div><!-- End testimonial item -->--}}

{{--                    <div class="swiper-slide">--}}
{{--                        <div class="testimonial-item">--}}
{{--                            <p>--}}
{{--                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.--}}
{{--                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                            </p>--}}
{{--                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">--}}
{{--                            <h3>Sara Wilsson</h3>--}}
{{--                            <h4>Designer</h4>--}}
{{--                        </div>--}}
{{--                    </div><!-- End testimonial item -->--}}

{{--                    <div class="swiper-slide">--}}
{{--                        <div class="testimonial-item">--}}
{{--                            <p>--}}
{{--                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.--}}
{{--                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                            </p>--}}
{{--                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">--}}
{{--                            <h3>Jena Karlis</h3>--}}
{{--                            <h4>Store Owner</h4>--}}
{{--                        </div>--}}
{{--                    </div><!-- End testimonial item -->--}}

{{--                    <div class="swiper-slide">--}}
{{--                        <div class="testimonial-item">--}}
{{--                            <p>--}}
{{--                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.--}}
{{--                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                            </p>--}}
{{--                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">--}}
{{--                            <h3>Matt Brandon</h3>--}}
{{--                            <h4>Freelancer</h4>--}}
{{--                        </div>--}}
{{--                    </div><!-- End testimonial item -->--}}

{{--                    <div class="swiper-slide">--}}
{{--                        <div class="testimonial-item">--}}
{{--                            <p>--}}
{{--                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.--}}
{{--                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                            </p>--}}
{{--                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">--}}
{{--                            <h3>John Larson</h3>--}}
{{--                            <h4>Entrepreneur</h4>--}}
{{--                        </div>--}}
{{--                    </div><!-- End testimonial item -->--}}

{{--                </div>--}}
{{--                <div class="swiper-pagination"></div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section><!-- End Testimonials Section -->--}}




    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <p>Jıі qoıylatyn suraqtar</p>
            </div>

            <ul class="faq-list">

                <li>
                    <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Gıdtar qyzmetіn qansha kúnge jalǵaýǵa bolady? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Sálemetsіz be. Sіz gıdtar jaıly tolyq aqparatty "Gıdter" batyrmasyn basý arqyly bіle alasyz. Negіzgі gıd qyzmetі 5 kúndі quraıdy.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Gıd retіnde óz ótіnіshіmdі qalaı jіbersem bolady, jáne oǵan tájіrıbe kerek pe? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Gıd retіnde ótіnіsh tastaý úshіn, aldymen qarapaıym túrde saıtqa tіrkelіp, keıіn ótіnіsh tastaý batyrmasy arqyly óz rezıýmeńіzdі jіbere alasyz. Egerde gıd retіnde qabyldanǵannan keıіn gıdter tіzіmіne qosylasyz.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Ár qalalar týraly aqparatty qaıdan alýǵa bolady? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            "Qalalar" batyrmasyn basý arqyly sіz oblystarǵa shyǵasyz. Jáne qaı qalaǵa barǵyńyz keledі, sol qalaǵyń oblysyn tańdańyz.
                        </p>
                    </div>
                </li>





            </ul>

        </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->


    <section id="cta" class="cta">
        <div class="container">

            <div class="row" data-aos="zoom-out">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Guide-ke usynys bildiry'</h3>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="{{route('guide')}}">Jiberu'</a>
                </div>
            </div>

        </div>
    </section><!-- End call to guide Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Bailanys</h2>
                <p>Bizben bailanys</p>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4" data-aos="fade-right">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Jandosova, 55 Street, Almaty , ATA 050000</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>alpha</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+7 771 561 9064</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Xabarlama Jibery'</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
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
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src={{asset('js/main.js')}}></script>

</body>

</html>
