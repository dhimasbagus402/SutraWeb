@extends('layouts.default2')
@section('content2')

<div class="form1">
	<div class="row" style="margin-top: 30px;">
        <div class="col-lg-12 margin-tb">
            <div style="text-align: center;">
                <h4>Edit Blog</h4>
            </div>
            <div class="pull-right" style="margin-top: 50px">
                <a class="btn btn-primary" href="{{ route('blogs.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger" style="margin-top: 20px;">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data"
        style="margin-top: 20px;">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" value="{{ $blog->nama }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Deskripsi:</strong>
                    <textarea class="form-control" style="height:150px" name="deskripsi" value="{{$blog->deskripsi}}">
                    {{ $blog->deskripsi }}</textarea>
                </div>
            </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">7
                    <strong>Tanggal:</strong>
                    <input type="date" id="tanggal" name="tanggal" value="{{$blog->tanggal}}">{{ $blog->tanggal }}
                </div>
            </div>

            <?php
                if(file_exists('imgblog/'. $blog->gambar))
                    $fileName = $blog->gambar;
                else
                    $fileName = "user.png";
            ?>
            <img id="category-img-tag" class="img-account-profile2 rounded-circle1 mb-2" src="{{asset('imgblog/'. $fileName)}}" alt="">
            <div class="small font-italic text-muted mb-4">Jpg atau Png Tidak Lebih dari 2 MB</div>
                    <!-- Profile picture upload button-->
                    <input id="file-btn" type="file" class="form-control" name="gambar" hidden/>
                            
                    <label class="btn btn-primary uploadgan" for="file-btn">Upload Gambar</label>
                    
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
</div>

@stop