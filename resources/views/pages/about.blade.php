@extends('layouts.default')
@section('content')

<!--  Banner Start -->
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="/view/{{ $banerabout->gambar }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Sutra Tour Hidayah</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Tentang Kami</h1>
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
                    <h1 class="mb-0">Latar Belakang</h1>
                </div>
                <p class="mb-4">PT Sutra Tour Hidayah adalah sebuah perusahaan yang bergerak dibidang jasa perjalanan wisata yang berdiri sejak tahun 2014.
                    Sutra terdaftar sebagai penyelenggara resmi Umrah sebagai berikut: <br><br>

                    <i class="ion-checkmark" style="color: goldenrod;"> </i> SK DEPAG NO 6017 Tahun 2016. Untuk Penyelenggara Umrah (Waktu awal)<br>
                    <i class="ion-checkmark" style="color: goldenrod;"> </i> SK DEPAG NO 127 Tahun 2020. Untuk Penyelenggara Umrah (Sekarang)<br><br>

                    Berdiri lebih dari 6 tahun dalam dunia pariwisata dan sudah memiliki ijin resmi, kami berfokus pada keunggulan layanan
                    dalam memenuhi kebutuhan jamaah dan menjaga standar yang tinggi untuk kepuasan setiap jamaah.<br><br>

                    Setiap tahunnya Sutra Tour Hidayah melayani ribuan jamaah Umrah ke Arab Saudi, dan kami telah menjadi ahli dalam
                    menentukan kebutuhan dan persyaratan untuk setiap group keberangkatan. Kami juga telah berpengalaman melayani Umrah
                    untuk perusahaan, baik itu swasta ataupun instansi pemerintah.<br><br>

                    Sutra Tour Hidayah memiliki jaringan yang kuat dalam industri perhotelan. Sarana perhotelan yang baik tentunya menjamin
                    ketersediaan kamar juga menjadi salah satu fasilitas yang kami utamakan guna menjamin kenyamanan para jamaah umrah.<br><br>

                    Sutra selalu berusaha maksimal untuk memberi kemudahan kepada pelanggan yang akan melakukan perjalanan wisata atau ibadah
                    dengan menyediakan semua kebutuhan pelanggan. Mulai dari Pesawat, Reservasi Hotel, Paket Tour Domestik maupun Internasional
                    Pengurusan Paspor, Visa, sampai penukaran mata Uang Asing.<br><br>

                    Sebagai bukti dedikasi dalam industri ini, Sutra Tour Hidayah telah menjadi anggota afiliasi seperti AMPHURI
                    (Asosiasi Muslim Penyelenggara Hajj dan Umrah Republik Indonesia).
                </p>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);" class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Tentang Kami</h5>
                <h1 class="mb-0">Visi & Misi</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-5" style="min-height: 300px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.5s" src="img/about.jpg" style="object-fit: cover; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);">
                    </div>
                </div>
                <div class="col-lg-7">
                    <h4>Visi</h4>
                    <p class="mb-4">
                    <i class="ion-checkmark" style="color: goldenrod;"> </i> Menjadi tujuan utama para tamu Allah SWT sebagai penyedia layanan Hajj & Umrah dengan mengedepankan Kepuasan, Kekhusyukan, dan Kenyamanan.<br>
                    <i class="ion-checkmark" style="color: goldenrod;"> </i> Dan menjadi penyelenggara Hajj & Umrah terpercaya.
                    </p>
            
                    <h4>Misi</h4>
                    <p class="mb-4">
                    <i class="ion-checkmark" style="color: goldenrod;"> </i>Memberikan kemudahan bagi seluruh jamaah dengan menghadirkan pilihan layanan yang bervariasi sesuai kebutuhan.<br>
                    <i class="ion-checkmark" style="color: goldenrod;"> </i> Memberikan kekhusyuan, Kepuasan, dan Kenyamanan dalam perjalanan dengan mengedepankan pelayanan prima.<br>
                    <i class="ion-checkmark" style="color: goldenrod;"> </i> Memberikan kepuasaan kepada pelanggan dan mempertahankannya.<br>
                    <i class="ion-checkmark" style="color: goldenrod;"> </i> Menjadi penyelenggara Umrah yang Amanah, Profesional yang berfokus pada kepuasan pelanggan.<br>
                    <i class="ion-checkmark" style="color: goldenrod;"> </i> Menyelenggarakan perjalanan ibadah Hajj dan Umrah dengan kualitas layanan terbaik untuk mencapai kesempurnaan ibadah.<br>
                    <i class="ion-checkmark" style="color: goldenrod;"> </i> Mengembangkan wisata regular dan religi sebagai sebuah alternatif perjalanan wisata bagi pelanggan.
                    </p>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- About End -->


@stop