@extends('layouts.default4')
@section('content')


    <div class="container-xl">
        <!-- Account page navigation-->
        <br>
        <div class="row" style="margin-top: 120px;">
            <form id="editForm" action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">@csrf
            @method('PUT')</form>
            <form id="deleteForm" action="{{ route('profile.delete', $user->id) }}" method="POST">@csrf
            @method('DELETE')</form>
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
            @endif
            @csrf
            @method('PUT')
                <div class="col-xl-8" style="margin-left: auto; margin-right: auto;">
                    <!-- Profile picture card-->
                    <div class="card1 mb-4 mb-xl-0">
                        <div class="card-header1">Profile Picture</div>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <?php
                            if(!file_exists('/storage/userimg/'. $user->image))
                                $fileName = $user->image;
                            else
                                $fileName = "user.png";
                            ?>
                            <img id="category-img-tag" class="img-account-profile1 rounded-circle1 mb-2" src="{{asset('/storage/userimg/'. $fileName)}}" alt="">
                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-4">Jpg atau Png Tidak Lebih dari 2 MB</div>
                            <!-- Profile picture upload button-->
                            <input id="file-btn" type="file" class="form-control" form="editForm" name="image" hidden/>
                            
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
                                    <input class="form-control1"type="text" name="name" form="editForm" placeholder="" value="{{ $user->name }}">
                                </div>
                                <!-- Form Group (email address)-->
                                <div class="mb-3">
                                    <label class="small mb-1">Email</label>
                                    <input class="form-control1" type="email" name="email" form="editForm" placeholder="" value="{{$user->email}}">
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (phone number)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1">Nomor Hp +62</label>
                                        <input class="form-control1" name="hp" type="tel" form="editForm" placeholder="" value="{{$user->hp}}">
                                    </div>
                                    <!-- Form Group (birthday)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1">Tanggal Lahir</label>
                                        <input class="form-control1" type="date" name="tanggal_lahir" form="editForm" placeholder="" value="{{$user->tanggal_lahir}}">
                                    </div>
                                </div>

                                <div style="display: flex; justify-content: space-between;">
                                    <!-- Save changes button-->
                                    <button class="btn btn-primary" type="submit" name="button1" value="buttonVal1" form="editForm">Simpan</button>

                                    <!-- Button trigger modal -->
                                    <a href="#myModal" class="btn btn-primary" data-toggle="modal">Hapus Akun !</a>
                                    <!-- Modal HTML -->
                                    
                                        <div id="myModal" class="modal fade">
                                            <div class="modal-dialog modal-confirm">
                                                <div class="modal-content">
                                                    <div class="modal-header flex-column">			
                                                        <h4 class="modal-title w-100">Apakah Anda Yakin?</h4>	
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Semua data terkait akun anda akan terhapus. Apakan anda yakin?.</p>
                                                    </div>
                                                    <div class="modal-footer justify-content-center">
                                                        <button type="button" class="btn" data-dismiss="modal">Batal</button>
                                                        <button class="btn btn-danger" type="submit" name="button2" value="buttonVal2" form="deleteForm">Hapus</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div> 
                                    
                            </div>
                    </div>
                </div>
        </div>

    </div>

@stop