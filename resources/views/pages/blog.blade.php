@extends('layouts.default')
@section('content')

    <!--  Banner Start -->
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="display: block;margin-left: auto; margin-right: auto;" class="banerr" src="/view/{{ $banerblog->gambar }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                        </div>
                    </div>
                </div>
        </div>
    

    
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                @foreach ($blogs as $blog)
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="/imgblog/{{ $blog->gambar }}" alt="">
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>{{ $blog->tanggal }}</small>
                                    </div>
                                    <h4 class="mb-3">{{ $blog->nama }}</h4>
                                    <p>{{ $blog->deskripsi }}</p>
                                    <a class="text-uppercase" href="{{ route('blogs.show', $blog->id) }}">Baca Blog <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                @endforeach
                {!! $blogs->links('pages.paginator') !!}
            </div>
        </div>
    </div>

@stop