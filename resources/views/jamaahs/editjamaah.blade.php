@extends('layouts.default2')
@section('content2')

<div style="margin-top: 100px;">
	<h3>Edit Data</h3>
 
	<a href="/jamaah"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="{{ route('jamaahs.update', $jamaah->id) }}" method="POST" enctype="multipart/form-data"
        style="margin-top: 20px;">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah:</strong>
                    <input type="number" name="jumlah" value="{{ $jamaah->jumlah }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
</div>

@stop