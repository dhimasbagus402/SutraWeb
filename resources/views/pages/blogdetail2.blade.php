

@extends('layouts.default')
@section('content')
<style>
    .display-comment .display-comment {
        margin-left: 40px
    }
</style>

        <!--  Banner Start -->
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="banerr" src="/view/{{ $banerblog->gambar }}" alt="Image">
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
                <div>
                    <!-- Blog Detail Start -->

                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="/imgblog/{{ $blog->gambar }}" alt="">
                        <h1 style="margin-bottom: 0px">{{ $blog->nama }} </h1>
                        <p style="font-size: 14px">{{ $blog->tanggal }}</p>
                        <p style="font-size: 22px">
                            {{ $blog->deskripsi }}
                        </p>
                    </div>
                    <!-- Blog Detail End -->
                    
                    <!-- Comment List Start -->
                    <div class="mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Comments</h3>
                        </div>

                        @include('post.partials.replies', ['comments' => $blog->comments, 'blog_id' => $blog->id])
                        
                    </div>
                    <!-- Comment List End -->
                    @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                    @endif

                    <!-- Comment Form Start -->
                    <div class="bg-light rounded p-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Leave A Comment</h3>
                        </div>
                        <form method="post" action="{{ route('comments.store') }}">
                        @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <textarea class="form-control bg-white border-0" rows="5" name="comment" placeholder="Comment"></textarea>
                                    <input type="hidden" name="blog_id" value="{{ $blog->id }}" />
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Leave Your Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Comment Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

@stop