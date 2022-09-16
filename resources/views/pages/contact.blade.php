@extends('layouts.default')
@section('content')


<!--  Banner Start -->
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="/view/{{ $banercontact->gambar }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Sutra Tour Hidayah</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Kontak Kami</h5>
            <h1 class="mb-0">Jika Anda Memiliki Pertanyaan, Silahkan Kontak Kami</h1>
        </div>
        <div class="row g-5" style="justify-content: space-between;">
            <div class="col-lg-6">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 70px; height: 70px;">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Kantor Pusat</h5>
                        <h5 class="text-primary mb-0">Jl. Raya Sukodadi Banjarwati Kec Paciran Kab Lamongan</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 70px; height: 70px;">
                        <i class="fa fa-envelope-open text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Email Kami</h5>
                        <h5 class="text-primary mb-0">sutratourhidayahlamongan @ gmail.com</h5>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-lg-6">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 70px; height: 70px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">HOTLINE</h5>
                        <h5 class="text-primary mb-0">+62 81331914646 / Tlp Fax : (0322) 4661766</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5" style="margin-top: 50px;">
            <div style="height: 400px;" class="map col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                <iframe class="position-relative rounded w-100 h-100" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d350.10631577972197!2d112.39093516381132!3d-6.890496263591593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77e82faa873bc9%3A0x28d3d97714968957!2sPT.%20SUTRA%20TOUR%20HIDAYAH%20(PUSAT)!5e0!3m2!1sid!2sid!4v1661753669043!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

        </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">PT Sutra Tour Hidayah</h5>
                <h1 class="mb-0">Kantor Cabang</h1>
            </div>
            <div class="row g-5 justify-content-center ">
                <div class="col-lg-5" style="min-height: 300px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.5s" src="img/about.jpg" style="object-fit: cover; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);">
                    </div>
                </div>
                <div class="col-lg-4">
                    <p class="mb-4">
                    <a style="color: goldenrod; margin-right:5px;">1 </a> Sutra Tour Cabang Tanggerang.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">2 </a> Sutra Tour Cabang Surabaya.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">3 </a> Sutra Tour Cabang Sidoarjo.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">4 </a> Sutra Tour Cabang Lamongan Kota.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">5 </a> Sutra Tour Cabang Tuban.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">6 </a> Sutra Tour Cabang Bojonegoro.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">7 </a> Sutra Tour Cabang Mojokerto.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">8 </a> Sutra Tour Cabang Ngawi.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">9 </a> Sutra Tour Cabang Demak.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">10 </a> Sutra Tour Cabang Semarang.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">11 </a> Sutra Tour Cabang Rembang.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">12 </a> Sutra Tour Cabang Blora.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">13 </a> Sutra Tour Cabang Purwodadi.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">14 </a> Sutra Tour Cabang Kayen Pati.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">15 </a> Sutra Tour Cabang Kudus.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">16 </a> Sutra Tour Cabang Surakarta.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">17 </a> Sutra Tour Cabang Sukoharjo.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">18 </a> Sutra Tour Cabang Jepara.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">19 </a> Sutra Tour Cabang Yogyakarta.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">20 </a> Sutra Tour Cabang Kendal.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">21 </a> Sutra Tour Cabang Kebumen.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">22 </a> Sutra Tour Cabang Purwokerto.<br>
                    <a style="color: goldenrod; line-height:30px; margin-right:5px;">23 </a> Sutra Tour Cabang Palembang.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@stop