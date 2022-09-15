@extends('layouts.default')
@section('content')


<!--  Banner Start -->
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="/view/{{ $baner1->gambar }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Sutra Tour HIDAYAH</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Hajj & Umroh Services</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0" style="align-items: center; justify-content: center;">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Hajj</h5>
                            <h1 class="mb-0" data-toggle="counter-up">{{ $hajj?->jumlah }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Umroh</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">{{ $umroh?->jumlah }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Tentang Kami</h5>
                        <h1 class="mb-0">
                            PT. SUTRA TOUR HIDAYAH
                        </h1>
                    </div>
                    <p class="mb-4">Kami adalah Biro Perjalanan Hajj dan Umroh yang memfokuskan diri sebagai biro perjalanan yang bisa menjadi sahabat perjalanan ibadah anda. Dengan tekad kuat dan tagline “Umroh Hemat, Pasti Berangkat” kami berkomitmen untuk merangkul jamaah dari semua lapisan masyarakat Indonesia.</p>
                </div>
                <div class="col-lg-5" style="min-height: 300px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.5s" src="/view/{{ $aboutus->gambar }}" style="object-fit: cover; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Kenapa Memilih Kami?</h5>
                <h1 class="mb-0">PT. SUTRA TOUR HIDAYAH</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-5" style="min-height: 300px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.5s" src="/view/{{ $aboutus2->gambar }}" style="object-fit: cover; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);">
                    </div>
                </div>
                <div class="col-lg-7">
                    <h4>Pelayanan Terbaik</h4>
                    <p class="mb-4">Kami sudah melayani lebih dari 5000 jamaah hajj dan umroh. Kami siap melayani perjalanan hajj dan umroh anda dengan pelayanan yang prima dan amanah.</p>
                </div>

            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Pelayanan Kami</h5>
                <h1 class="mb-0"> PT. SUTRA TOUR HIDAYAH</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); height: 300px;" class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <img class="icon2" src="{{ asset('img/tour.png') }}">
                        </div>
                        <h4 class="mb-3" style="color: whitesmoke;">Hajj Plus</h4>
                        <p class="m-0"> Bla bla bla Bla bla bla Bla bla bla</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); height: 300px;" class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <img class="icon2" src="{{ asset('img/tour.png') }}">
                        </div>
                        <h4 class="mb-3" style="color: whitesmoke;">Hajj </h4>
                        <p class="m-0"> Bla bla bla Bla bla bla Bla bla bla</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                    <div style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); height: 300px;" class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <img class="icon2" src="{{ asset('img/tour.png') }}">
                        </div>
                        <h4 class="mb-3" style="color: whitesmoke;">Umroh</h4>
                        <p class="m-0"> Bla bla bla Bla bla bla Bla bla bla Bla bla bla</p>

                    </div>
                </div>
                <div class=" text-center position-relative pb-3 mb-5 mx-auto wow zoomIn" data-wow-delay="0.5s" style="max-width: 600px; margin-top: 10px;">
                <a class="text-uppercase" href="/services" style="text-decoration: none; font-size: 20px;">Lihat Lebih Detail <i class="bi bi-arrow-right"></i> </a>
            </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Promo Kami</h5>
                <h1 class="mb-0"></h1>
            </div>
            <div class="row g-0 justify-content-center">
                @foreach ($promos as $promo)
                <div class="col-lg-5 wow zoomIn" data-wow-delay="0.5s" style="min-height: 350px; margin: 15px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);">
                    <div class="position-relative h-100 images">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="/promo/{{ $promo->gambar }}" style="object-fit: cover;">
                    </div>
                </div>
                @endforeach
                <div id="image-viewer">
                    <span class="close">&times;</span>
                    <img class="images-content" id="full-image">
                </div>
            </div>
            <div class=" text-center position-relative pb-3 mb-5 mx-auto wow zoomIn" data-wow-delay="0.5s" style="max-width: 600px; margin-top: 10px;">
                <a class="text-uppercase" href="/services" style="text-decoration: none; font-size: 20px;">Promo Lainnya <i class="bi bi-arrow-right"></i> </a>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Blog Terbaru</h5>
                <h1 class="mb-0">Baca Berita Terkini</h1>
            </div>
            <div class="row g-5">
                @foreach ($blogs as $blog)
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="/imgblog/{{ $blog->gambar }}" alt="">
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>{{ $blog->tanggal }}</small>
                            </div>
                            <h4 class="mb-3">{{ $blog->nama }}</h4>
                            <div style="height: 80px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                <p>{{ $blog->deskripsi }}</p>
                            </div>
                            <a class="text-uppercase" style="text-decoration: none;" href="{{ route('blogs.show', $blog->id) }}">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog Start -->


    @stop