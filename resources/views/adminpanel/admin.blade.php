@extends('layouts.default2')
@section('content2')


<main>
    <div class="container-fluid px-4" style="margin-top: 30px;">
        <h1 class="mt-4">Blog</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                List Blog
            </div>
            <br>
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                Session::forget('success');
                @endphp
            </div>
            @endif
            <div class="card-body">
                <div class="pull-right">
                    <a class="btn btn-success float-end" href="/tambahblog" style="margin-left: 20px;">
                        Tambah Blog
                    </a>
                </div>

                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>@sortablelink('id')</th>
                            <th>Gambar</th>
                            <th>@sortablelink('nama')</th>
                            <th>@sortablelink('deskripsi')</th>
                            <th>@sortablelink('tanggal')</th>
                            <th>@sortablelink('created_at')</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>@sortablelink('id')</th>
                            <th>Gambar</th>
                            <th>@sortablelink('nama')</th>
                            <th>@sortablelink('deskripsi')</th>
                            <th>@sortablelink('tanggal')</th>
                            <th>@sortablelink('created_at')</th>
                            <th width="280px">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($blogs as $blog)

                        <tr>
                            <td>{{ $blog->id }}</td>
                            <td><img src="/imgblog/{{ $blog->gambar }}" width="100px"></td>
                            <td>{{ $blog->nama }}</td>
                            <td>{{ $blog->deskripsi }}</td>
                            <td>{{ $blog->tanggal }}</td>
                            <td>{{ $blog->created_at->format('d-m-Y') }}</td>
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
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</main>


@stop