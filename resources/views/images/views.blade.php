@extends('layouts.default2')
@section('content2')

        
                <main>
                    <div class="container-fluid px-4" style="margin-top: 30px;">
                        <h1 class="mt-4">Edit Tampilan</h1>
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
                                <table id="datatablesSimple"> 
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Gambar</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                    @foreach ($images as $image)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $image->nama }}</td>
                                            <td><img src="/view/{{ $image->gambar }}" width="100px"></td>
                                            <td>
                                                <form action="{{ route('images.destroy', $image->id) }}" method="POST">

                                                    <a class="btn btn-primary" href="{{ route('images.edit', $image->id) }}">Edit</a>

                                                    @csrf
        
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            
       
       

@stop