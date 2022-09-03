@extends('layouts.default2')
@section('content2')

<div class="form1">
	<div class="row" style="margin-top: 30px;">
        <div class="col-lg-12 margin-tb">
            <div style="text-align: center;">
                <h4>Edit User</h4>
            </div>
            <div class="pull-right" style="margin-top: 50px">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
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

    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data"
        style="margin-top: 20px;">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" class="form-control" name="email" value="{{$user->email}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Type:</strong>
                    <div>
                        <select id="type" name="type" class="form-control" value="">
                            <option value=""> - Select - </option>
                            <option value="0">User</option>
                            <option value="1">Admin</option>
                            <option value="2">Manajer</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gambar:</strong>
                    <input type="file" name="image" value="{{$user->image}}" class="form-control" placeholder="image">
                    <br>
                    <img src="/storage/userimg/{{ $user->image }}" width="100px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
</div>

@stop