@extends('layouts.default2')
@section('content2')

        
                <main>
                    <div class="container-fluid px-4" style="margin-top: 30px;">
                        <h1 class="mt-4">Edit Promo</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                
                            </div>
                            <br>
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                            <div class="card-body">
                                <div class="pull-right">
                                    <a class="btn btn-success float-end" href="/tambahpromo" style="margin-left: 20px;">
                                        Tambah Promo
                                    </a>
                                </div>
                                <table id="datatablesSimple"> 
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Gambar</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                    @foreach ($promos as $promo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $promo->nama }}</td>
                                            <td><img src="/promo/{{ $promo->gambar }}" width="100px"></td>
                                            <td>
                                                <form action="{{ route('promos.destroy', $promo->id) }}" method="POST">

                                                    <a class="btn btn-primary" href="{{ route('promos.edit', $promo->id) }}">Edit</a>

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger">Delete</button>
        
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