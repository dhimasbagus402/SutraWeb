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

                                <table id="datatablesSimple"> 
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jumlah</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                    @foreach ($jamaah as $ja)
                                        <tr>
                                            <td>{{ $ja->id }}</td>
                                            <td>{{ $ja->nama }}</td>
                                            <td>{{ $ja->jumlah }}</td>
                                            <td>

                                                    <a href="{{ route('jamaahs.edit', $ja->id) }}">Edit</a>

                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </main>


@stop