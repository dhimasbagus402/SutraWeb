@extends('layouts.default2')
@section('content2')

        
                <main>
                    <div class="container-fluid px-4" style="margin-top: 100px;">
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
                                <a class="btn btn-success" href="/tambahblog" style="margin-bottom: 20px;"> 
                                    Tambah Blog Baru
                                </a>
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
                            </div>
                        </div>
                    </div>
                </main>
            
       
       

@stop