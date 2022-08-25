@extends('layouts.default2')
@section('content2')

<div class="row" style="margin-top:100px;">
        <div class="col-lg-12">
            <div style="text-align: center;">
                <h4>Jumlah Jamaah</h4>
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

@stop