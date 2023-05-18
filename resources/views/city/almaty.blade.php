@extends('layouts.navbarmain')
@section('content')
    <div class="container">
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://t3.ftcdn.net/jpg/01/70/49/58/360_F_170495868_iD0aAcooewfmkdqbNGzLoqLWT83gXNq6.jpg" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Almaty</h1>
                    <p>Almaty – Ile Alataýynyń etegіnde ornalasqan Qazaqstannyń іrі megapolısі. 1997 jylǵa deıіn memleketke sіńіp, álі kúnge deıіn saýda jáne mádenı ortalyq bolyp qala beredі. Qalanyń basty kórіktі jerlerіnіń bіrі – Ortalyq memlekettіk murajaı, onda súıіktі elderіńіzden qol jetіmdі qyzyqty jádіgerler qoıylǵan. Qala ortalyǵynda 28 gvardııashy-panfılovshylar atyndaǵy saıabaq bar. Onyń aýmaǵynda ashyq sary pravoslavıe shіrkeýі - patsha zamanyndaǵy Voznesenskıı sobory kóterіledі.</p>
                    <a class="btn btn-primary" href="{{route('almaty.events')}}">Is-sharalar</a>
                </div>
            </div>
            <section id="portfolio" class="portfolio">
                <div class="container">

                    <div class="section-title" data-aos="zoom-out">
                        <p>Almaty</p>
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
                            <div class="portfolio-img"><img src="https://realkz.com/admin/upload/images/1646048641-6be0d7ee-f66b-12df-1032-e061e7b77e95.JPG" class="img-fluid" alt=""></div>
                            <div class="portfolio-info">
                                <p>Web</p>
                                <a href="https://m.ticketon.kz/files/images/72_main.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-img"><img src="https://olympic.kz/images/1529641448.jpg" class="img-fluid" alt=""></div>
                            <div class="portfolio-info">
                                <p>App</p>
                                <a href="https://static.365info.kz/uploads/2018/09/babe5adc66b4310b55873ccea75f03a5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-img"><img src="https://sxodim.com/uploads/almaty/2018/04/optimized/photo_246517_1400x790-q-85.jpg" class="img-fluid" alt=""></div>
                            <div class="portfolio-info">
                                <p>Card</p>
                                <a href="https://sxodim.com/uploads/almaty/2018/04/optimized/photo_246517_1400x790-q-85.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-img"><img src="https://sxodim.com/uploads/almaty/2018/04/optimized/photo_246517_1400x790-q-85.jpg" class="img-fluid" alt=""></div>
                            <div class="portfolio-info">
                                <p>Web</p>
                                <a href="https://wordpress-network.prod.aws.skyscnr.com/wp-content/uploads/2018/05/lake-kaindy-in-tien-shan-mountains-kazakhstan.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-img"><img src="https://wordpress-network.prod.aws.skyscnr.com/wp-content/uploads/2018/05/lake-kaindy-in-tien-shan-mountains-kazakhstan.jpg" class="img-fluid" alt=""></div>
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <a href="https://img.kapital.kz/nezcfbTSTys/bG9jYWw6Ly8vYS9kLzIvOS9kL2VmYmZlZWU2NmZjMjBiZWU5ZDYxNDBiMjBlYi5qcGc" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-img"><img src="https://ticketon.kz/files/media/shymbulak2029.jpg" class="img-fluid" alt=""></div>
                            <div class="portfolio-info">
                                <p>Card</p>
                                <a href="http://sun9-58.userapi.com/impf/c846218/v846218560/c5a37/bETuTUgVIbQ.jpg?size=604x572&quality=96&sign=476f194c9d28528d680e0a513673dcc2&type=album" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-img"><img src="http://sun9-58.userapi.com/impf/c846218/v846218560/c5a37/bETuTUgVIbQ.jpg?size=604x572&quality=96&sign=476f194c9d28528d680e0a513673dcc2&type=album" class="img-fluid" alt=""></div>
                            <div class="portfolio-info">
                                <p>Card</p>
                                <a href="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/39/d3/0d/20180609-141818-largejpg.jpg?w=1200&h=1200&s=1" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-img"><img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/39/d3/0d/20180609-141818-largejpg.jpg?w=1200&h=1200&s=1" class="img-fluid" alt=""></div>
                            <div class="portfolio-info">
                                <p>Web</p>
                                <a href="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/39/d3/0d/20180609-141818-largejpg.jpg?w=1200&h=1200&s=1" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Portfolio Section -->

            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0"><b>Almaty qalasyndaǵy jergilikti Gidter</b></p></div>
            </div>
            <!-- Content Row-->
            <section id="team" class="team">
                <div class="container">

                    <div class="section-title" data-aos="zoom-out">
                        <h2>Gidtar</h2>
                        <p>Tizimder</p>
                    </div>

                    <div class="row">

                        <div class="row">
                            @foreach($resumes as $resume)
                                @if($resume->active)
                                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                        <div class="member" data-aos="fade-up">
                                            <div class="member-img">
                                                <img src="https://i.stack.imgur.com/l60Hf.png" class="img-fluid" alt="">
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="member-info">
                                                <h4>{{$resume->name}} {{$resume->surname}}</h4>
                                                <span>Guide</span>

                                                <a href="{{route('resume.show' , $resume->id)}}" class="btn btn-outline-primary">Tolygyraq</a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                    </div>

                </div>
            </section><!-- End Team Section -->
        </div>
    </div>

@endsection

