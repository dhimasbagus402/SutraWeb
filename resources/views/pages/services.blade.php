@extends('layouts.default')
@section('content')


<!--  Banner Start -->

<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="/view/{{ $banerservices->gambar }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Sutra Tour Hidayah</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Services</h5>
                <h1 class="mb-0">Pelayanan Prima & Amanah</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <!-- Categories grid-->
                <div class="snip1404 row g-0 justify-content-center">
                    <div class="plan">
                        <header>
                            <h4 class="plan-title">
                                Hajj Plus
                            </h4>
                            <div class="plan-cost"><span class="plan-price">$19</span><span class="plan-type">/month</span></div>
                        </header>
                        <ul class="plan-features">
                            <li><i class="ion-checkmark"> </i>5GB Linux Web Space</li>
                            <li><i class="ion-checkmark"> </i>5 MySQL Databases</li>
                            <li><i class="ion-checkmark"> </i>Unlimited Email</li>
                            <li><i class="ion-checkmark"> </i>250Gb mo Transfer</li>
                            <li><i class="ion-checkmark"> </i>24/7 Tech Support</li>
                            <li><i class="ion-checkmark"> </i>Daily Backups</li>
                            <li><i class="ion-checkmark"> </i>250Gb mo Transfer</li>
                            <li><i class="ion-checkmark"> </i>24/7 Tech Support</li>
                            <li><i class="ion-checkmark"> </i>Daily Backups</li>
                        </ul>

                    </div>
                    <div class="plan">
                        <header>
                            <h4 class="plan-title">

                                Hajj
                            </h4>
                            <div class="plan-cost"><span class="plan-price">$29</span><span class="plan-type">/month</span></div>
                        </header>
                        <ul class="plan-features">
                            <li><i class="ion-checkmark"> </i>10GB Linux Web Space</li>
                            <li><i class="ion-checkmark"> </i>10 MySQL Databases</li>
                            <li><i class="ion-checkmark"> </i>Unlimited Email</li>
                            <li><i class="ion-checkmark"> </i>500Gb mo Transfer</li>
                            <li><i class="ion-checkmark"> </i>24/7 Tech Support</li>
                            <li><i class="ion-checkmark"> </i>Daily Backups</li>
                        </ul>

                    </div>
                    <div class="plan">
                        <header>
                            <h4 class="plan-title">

                                Umroh
                            </h4>
                            <div class="plan-cost"><span class="plan-price">$49</span><span class="plan-type">/month</span></div>
                        </header>
                        <ul class="plan-features">
                            <li><i class="ion-checkmark"> </i>25GB Linux Web Space</li>
                            <li><i class="ion-checkmark"> </i>25 MySQL Databases</li>
                            <li><i class="ion-checkmark"> </i>Unlimited Email</li>
                            <li><i class="ion-checkmark"> </i>2000Gb mo Transfer</li>
                            <li><i class="ion-checkmark"> </i>24/7 Tech Support</li>
                            <li><i class="ion-checkmark"> </i>Daily Backups</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Promo</h5>
                <h1 class="mb-0">We are Offering Competitive Prices for Our Clients</h1>
            </div>
            <div class="row g-0 justify-content-center">
                @foreach ($promos as $promo)
                <div class="col-lg-5 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px; margin: 15px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3)">
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
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

@stop