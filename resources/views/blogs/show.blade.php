@extends('layouts.default2')
@section('content2')

    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-12 margin-tb">
            <div style="text-align: center;">
                <h4>Show Blog</h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('blogs.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 20px;text-align: center;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong><br>
                {{ $blog->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
            <div class="form-group">
                <strong>Deskripsi:</strong><br>
                {{ $blog->deskripsi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
            <div class="form-group">
                <strong>Tanggal:</strong><br>
                {{ $blog->tanggal }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
            <div class="form-group">
                <strong>Gambar:</strong><br>
                <img src="/imgblog/{{ $blog->gambar }}" width="200px">
            </div>
        </div>
    </div>

@stop