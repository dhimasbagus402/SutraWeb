@extends('layouts.default2')
@section('content2')

        
                <main>
                    <div class="container-fluid px-4" style="margin-top: 30px;">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <br>
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                            <div class="card-body">
                            <div class="pull-right">
                            <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#postModal">
                                Create Post
                            </button> 
                            </div>
                                <table id="datatablesSimple"> 
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

                                                    <a class="btn btn-info" target="_blank" href="{{ route('blogs.show', $blog->id) }}">Show</a>

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
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create Blog</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form name="contactUsForm" id="contactUsForm" method="post" action="javascript:void(0)">
                                @csrf
                        
                                    <div class="alert alert-danger print-error-msg" style="display:none">
                                        <ul></ul>
                                    </div>
                            
                                    <div class="mb-3">
                                        <label for="namaID" class="form-label">Title:</label>
                                        <input type="text" id="namaID" name="nama" class="form-control" placeholder="Title" required="">
                                    </div>
                        
                                    <div class="mb-3">
                                        <label for="deskripsiID" class="form-label">Deskripsi:</label>
                                        <textarea name="deskripsi" class="form-control" id="deskripsiID"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="tanggalID" class="form-label">Tanggal:</label>
                                            <input type="date" name="tanggal" id="tanggalID" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for="gambarID" class="form-label">Gambar:</label>
                                            <input 
                                            type="file" 
                                            name="gambar" 
                                            id="gambarID"
                                            multiple 
                                            class="form-control @error('gambar') is-invalid @enderror">
                                    </div>

                                    <div class="mb-3 text-center">
                                        <button class="btn btn-success btn-submit">Submit</button>
                                    </div>
                            
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>
                        </div>

                </main>
       

@stop