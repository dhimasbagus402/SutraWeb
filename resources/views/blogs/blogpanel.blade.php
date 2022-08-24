@extends('layouts.default2')
@section('content')
@push('style')

<!--  Banner Start -->
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-50" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>
                        </div>
                    </div>
                </div>
            </div>
</div>


<div class="row" style="margin-top:50px;">
        <div class="col-lg-12">
            <div style="text-align: center;">
                <h4>Laravel 9 CRUD Application with Image Upload</h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/tambahblog"> 
                    Add New Blog
                </a>
            </div>
        </div>
    </div>

    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered" style="margin-top: 20px;">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Tanggal</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($blogs as $blog)
            <tr>
                <td>{{ ++$i }}</td>
                <td><img src="/imgblog/{{ $blog->gambar }}" width="100px"></td>
                <td>{{ $blog->nama }}</td>
                <td>{{ $blog->deskripsi }}</td>
                <td>{{ $blog->tanggal }}</td>
                <td>
                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('blogs.show', $blog->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('blogs.edit', $blog->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
	<div class="d-flex justify-content-center">
    {!! $blogs->links('pages.paginator') !!}
	</div>
@stop