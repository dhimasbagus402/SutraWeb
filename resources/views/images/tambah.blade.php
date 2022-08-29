@extends('layouts.default2')
@section('content2')

<div class="form1">
    <div class="row" style="margin-top: 30px;">
        <div class="col-lg-12 margin-tb">
            <div style="text-align: center;">
                <h4>Add New Blog</h4>
            </div>
            <div class="pull-right" style="margin-top: 50px">
                <a class="btn btn-primary" href="/dashboard"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data"  style="margin-top: 20px;">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gambar:</strong>
                    <input 
                    type="file" 
                    name="gambar" 
                    id="inputImage"
                    multiple 
                    class="form-control @error('gambar') is-invalid @enderror">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</div>

@stop