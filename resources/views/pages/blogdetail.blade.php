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
                    <img class="w-100" src="/view/{{ $banerblog->gambar }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Sutra Tour</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>
                        </div>
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
                        <img class="img-fluid2 w-100 rounded mb-5" src="/imgblog/{{ $blog->gambar }}" alt="">
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
                            <h3 class="mb-0">Komentar</h3>
                        </div>

                        @include('post.partials.replies', ['comments' => $blog->comments, 'blog_id' => $blog->id])
                        
                    </div>
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <div class="bg-light rounded p-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Kirim Komentar Anda</h3>
                        </div>
                        
                        <form id="commentForm">
                        @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <textarea class="form-control bg-white border-0" rows="5" name="comment" id="comment" placeholder="Comment"></textarea>
                                    <span class="text-danger" id="comment-error"></span>
                                    <input type="hidden" name="blog_id" value="{{ $blog->id }}" />
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" id="submit">Kirim</button>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        
        (function($){
            function processComment( e ){
                $.ajax({
                    url: "{{ route('comments.store') }}",
                    type: 'post',
                    data: $(this).serialize(),
                    success: function( data, response ){
                        $('#success-message').text(response.success); 
                        $("#commentForm")[0].reset();
                        window.location.reload();
                    },
                    error: function( response ){
                        $('#comment-error').text(response.responseJSON.errors.comment);
                    }

                    
                });

                e.preventDefault();
            }

            $('#commentForm').submit( processComment );
        })(jQuery);


       /* (function($){
            function processReplies( e ){
                $.ajax({
                    url: "{{ route('reply.add') }}",
                    type: 'post',
                    data: $(this).serialize(),
                    success: function( data, response ){
                        $('#success-message').text(response.success); 
                        $("#replyForm")[0].reset();
                        window.location.reload();
                    },
                    error: function( response ){
                        $('#comment-error').text(response.responseJSON.errors.comment);
                    }

                    
                });

                e.preventDefault();
            }

            $('#replyForm').submit( processReplies );
        })(jQuery); */
        
       

    </script>


@stop