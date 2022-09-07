@extends('layouts.default4')
@section('content')


    <div class="container-xl">
        <!-- Account page navigation-->
        <br>
        <div class="row" style="margin-top: 120px;">
            <form  action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="col-xl-8" style="margin-left: auto; margin-right: auto;">
                    <!-- Profile picture card-->
                    <div class="card1 mb-4 mb-xl-0">
                        <div class="card-header1">Profile Picture</div>
                        <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <img id="category-img-tag" class="img-account-profile1 rounded-circle1 mb-2" src="{{asset('/storage/userimg/'. $user->image )}}" alt="">
                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-4">Jpg atau Png Tidak Lebih dari 2 MB</div>
                            <!-- Profile picture upload button-->
                            <input id="file-btn" type="file" class="form-control" name="image" hidden/>
                            
                            <label class="btn btn-primary" for="file-btn" style="margin-bottom: 10px;">Upload Gambar</label>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8" style="margin-left: auto; margin-right: auto; margin-top: 20px;">
                    <!-- Account details card-->
                    <div class="card1 mb-4">
                        <div class="card-header1">Detail Akun</div>
                        
                            <div class="card-body">
                                <!-- Form Group (username)-->
                                <div class="mb-3">
                                    <label class="small mb-1">Nama</label>
                                    <input class="form-control1"type="text" name="name" placeholder="" value="{{ $user->name }}">
                                </div>
                                <!-- Form Group (email address)-->
                                <div class="mb-3">
                                    <label class="small mb-1">Email</label>
                                    <input class="form-control1" type="email" name="email" placeholder="" value="{{$user->email}}">
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (phone number)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1">Nomor Hp +62</label>
                                        <input class="form-control1" name="hp" type="tel" placeholder="" value="{{$user->hp}}">
                                    </div>
                                    <!-- Form Group (birthday)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1">Tanggal Lahir</label>
                                        <input class="form-control1" type="date" name="tanggal_lahir" placeholder="" value="{{$user->tanggal_lahir}}">
                                    </div>
                                </div>
                                <!-- Save changes button-->
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                    </div>
                </div>
            <form>
        </div>
    </div>

    

@stop