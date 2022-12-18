<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>AlphaGuide</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom ">
    <div class="container px-5">
        <a class="navbar-brand" href="#page-top">AlphaGuide</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Kiru'</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Tirkelu'</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<!-- Header-->
<header class="masthead text-center text-white">
    <div class="masthead-content">
        <div class="container px-5">
            <h1 class="masthead-heading mb-0">AlphaGuide</h1>
            <h2 class="masthead-subheading mb-0">Sizdin' sapardag'y serigin'iz</h2>
            <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Ko'birek bilu' u'shin</a>
        </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
</header>
<!-- Content section 1-->
<section id="scroll">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5"><img class="img-fluid rounded-circle" src="https://strategy2050.kz/upload/iblock/204/60877af9e9e372a2aaf6596a3d62877f.jpg" alt="..." /></div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <h2 class="display-4">Bizdin joba jaily</h2>
                    <p>Qazaqstannyń ár qalasynyń tabıǵaty men kórkem jerlerіmen, ıaǵnı týrızmіmen tanystyrý.Qazіrgі tańda týrızm salasyna qyzyǵatyn adamdardyń sany kún saıyn artyp kele jatyr. Osyǵan baılanysty bіz sіzderge ózіmіzdіń jobany usynamyz.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <div class="p-5"><img class="img-fluid rounded-circle" src="https://www.launch-marketing.com/wp-content/uploads/2020/08/GettyImages-1140693058-1024x655.jpg" alt="..." /></div>
            </div>
            <div class="col-lg-6">
                <div class="p-5">
                    <h2 class="display-4">Bız sızder üşın nestei alamyz?</h2>
                    <p>• qalağa jañadan kelgen qonaqtarğa qalany tanystyru <br>
                        • tiımdı bağadağy ūsynystar <br>
                        • tañdalğan aqşa kölemıne bailanysty arnaiy saiahat paketterı <br>
                        • är kün saiyn bolatyn ıs-şaralardyñ( konsert, kino, festiväl, marafon ) tızımderın körsetu <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content section 3-->
<section>
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5"><img class="img-fluid rounded-circle" src="https://www.launch-marketing.com/wp-content/uploads/2020/08/GettyImages-1140693058-1024x655.jpg" alt="..." /></div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <h2 class="display-4">Bız sızder üşın nestei alamyz?</h2>
                    <p> • qalağa jañadan kelgen qonaqtarğa qalany tanystyru
                        • tiımdı bağadağy ūsynystar
                        • tañdalğan aqşa kölemıne bailanysty arnaiy saiahat paketterı
                        • är kün saiyn bolatyn ıs-şaralardyñ( konsert, kino, festiväl, marafon ) tızımderın körsetu
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer-->
<footer class="py-3 bg-black">
    <div class="container px-5"><p class="m-0 text-center text-white small">Avtorlyq quqyq  &copy; AlphaGuide saiaxatshylarg'a arnalg'an 2022</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
