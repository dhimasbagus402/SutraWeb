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
    <!-- Why Choose Us Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Sutra Tour Hidayah</h5>
                <h1 class="mb-0">Kenapa Memilih Kami?</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6">
                    <h4 class="text-primary">Berpengalaman</h4>
                    <p class="mb-4">Dengan rahmat Allah SWT, kami telah berhasil menjadi penyelenggara Hajj & Umrah selama lebih dari 5 tahun.
                        Selama periode ini kita telah memfalisitasi lebih dari 3.500 jamaah setiap tahunnya.
                    </p>

                    <h4 class="text-primary">Banyak Cabang</h4>
                    <p class="mb-4">Tersebar sebanyak 23 Cabang resmi di Jawa Timur dan Jawa Tengah. Memenuhi kebutuhan jamaah di banyak kota.
                    </p>

                    <h4 class="text-primary">Variasi Paket</h4>
                    <p class="mb-4">Kami memahami setiap jamaah mempunyai kondisi yang berbeda-beda, oleh karena itu kami menghadirkan
                        pilihan oaket yang bervariasi sesuai dengan kebutuhan.
                    </p>

                    <h4 class="text-primary">Banyak Tanggal</h4>
                    <p class="mb-4">Untuk mengakomodir banyaknya permintaan keberangkatan, kami menyediakan banyak tanggal yang memudahkan
                        anda sekeluarga memilih tanggal yang tepat.
                    </p>

                    <h4 class="text-primary">Diskon</h4>
                    <p class="mb-4">Salah satu bentuk apresiasi kami kepada jamaah, kami memberikan diskon menarik di setiap paket.
                    </p>

                    <h4 class="text-primary">Legalitas & Perijinan Yang Lengkap & Resmi</h4>
                    <p class="mb-4">Sutra Tour Hidayah merupakan penyelenggara Umrah yang memiliki ijin resmi.<br>
                    SK DEPAG NO 617 Tahun 2016 <br>
                    SK DEPAG NO 127 Tahun 2020
                    </p>
                </div>
                <div class="col-lg-6">
                    <h4 class="text-primary">Perlengkapan Komplit</h4>
                    <p class="mb-4">Perjalanan tidak sempurna tanpa perlengkapan yang memadai. Kami telah beropersai bertahun-tahun
                        dan memgerti apa saja kebutuhan yang diperlukan jamaah. Kami memberikan perlengkapan Umrah untuk mempermudah 
                        perjalanan anda.
                    </p>

                    <h4 class="text-primary">Fleksibilitas</h4>
                    <p class="mb-4">Kami menyediakan paket khusus yakni paket Privat dimana anda bebas memilih Tanggal Keberangkatan, Durasi, Akomodasi
                        , Transportasi dan Rute. Mengizinkan anda membuat paket sesuai keinginan.
                    </p>

                    <h4 class="text-primary">Reputasi</h4>
                    <p class="mb-4">Salah satu kelebihan kami yakni reputasi. itulah mengapa paket-paket yang tersedia sangat cepat terjual
                        . Lebih dari 90% Jamaah kami mengenal Sutra berdasarkan rekomendasi.
                    </p>

                    <h4 class="text-primary">Kejujuran & Komitmen</h4>
                    <p class="mb-4">Kami akan selalu melakukan yang terbaik untuk memberikan apa yang telah kami janjikan. Kami berkomitmen untuk memastikan
                        bahwa Hajj & Umrah anda selesai dengan cara yang tepat. Ini lebih dari sekedar bisnis untuk kami.
                    </p>

                    <h4 class="text-primary">Edukasi</h4>
                    <p class="mb-4">Salah satu tujuan kami adalah untuk membuat perjalanan anda lebih bermakna secara keseluruhan. Mulai
                        dari Manasik sebelum keberangkatan, Tausyiah ketika di tanah suci dan Edukasi selama diperjalanan.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Pelayanan Kami</h5>
                <h1 class="mb-0">Pelayanan Prima & Amanah</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <!-- Categories grid-->
                <div class="snip1404 row g-0 justify-content-center">
                    <!-- <div class="plan">
                        <header>
                            <h4 class="plan-title">
                                Hajj Plus
                            </h4>
                            <div class="plan-cost"><span class="plan-price">$19</span><span class="plan-type">/month</span></div>
                        </header>
                        <ul class="plan-features">
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>5GB Linux Web Space</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>5 MySQL Databases</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>Unlimited Email</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>250Gb mo Transfer</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>24/7 Tech Support</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>Daily Backups</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>250Gb mo Transfer</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>24/7 Tech Support</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>Daily Backups</li>
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
                            <li><i class="ion-checkmark"  style="color: goldenrod;"> </i>10GB Linux Web Space</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>10 MySQL Databases</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>Unlimited Email</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>500Gb mo Transfer</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>24/7 Tech Support</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>Daily Backups</li>
                        </ul>

                    </div>-->
                    <div class="plan">
                        <header>
                            <h4 class="plan-title">

                                Umrah
                            </h4>
                            <div class="plan-cost"><span class="plan-price">26jt - 43jt</span><span class="plan-type"></span></div>
                        </header>
                        <ul class="plan-features">
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>Hotel (Mekkah & Maddinah)</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>Airport tax & Handling</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>Perlengkapan (Koper, Tas Dll)</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>Tiket Pesawat</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>Visa Umrah</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>Umrah 3x Selama di Makkah</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>Makan 3x Sehari Menu Indonesia</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>Tour Leader dan Muthawif</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>Asuransi Perjalanan Umrah</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>Air Zam-Zam 5 Liter</li>
                            <li><i class="ion-checkmark" style="color: goldenrod;"> </i>Akomodasi Snack dan Transportasi Ziarah & Tour Selama di Saudi</li>
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
                <h5 class="fw-bold text-primary text-uppercase">Promo Kami</h5>
                <h1 class="mb-0">Lihat Penawaran Terbaik Kami</h1>
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
    <!--
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
-->
<!-- Testimonial End -->

@stop