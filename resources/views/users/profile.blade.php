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
                                <div style="display: flex; justify-content: space-between;">
                                    <!-- Save changes button-->
                                    <button class="btn btn-primary" type="submit">Simpan</button>

                                    <!-- Delete button-->
                                    <a id="test-link" class="btn btn-primary" href="#">Hapus Akun !</a>
                                </div>
                            </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
 
    $('#test-link').click(function(e) {
        e.preventDefault(); 
        
        var userResult = function(result) {
            if (result === 1) {
                $('#test-text').text('The user confirmed!');
            } else {
                $('#test-text').text('The user did not confirm!');
            }
        }
        $.ajax({
                url: "{{ route('profile.delete') }}",
                type: 'DELETE',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (data) {
                    if (data['success']) {
                        $("#" + data['tr']).slideUp("slow");
                        alert(data['success']);
                    } else if (data['error']) {
                        alert(data['error']);
                    } else {
                        alert('Whoops Something went wrong!!');
                    }
                },
                error: function (data) {
                    alert(data.responseText);
                }
            });
        
        toggleModal('Apakah anda yakin ingin menghapus akun anda?.', userResult);
    });

    function toggleModal(text, callback) {
        
        $wrapper = $('<div id="modal-wrapper"></div>').appendTo('body');
        
        $modal = $('<div id="modal-confirmation"><div id="modal-header"><h3 style="color: white; font-size: 18px;"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Apakah Anda Yakin? </h3><span data-confirm=0 class="modal-action" id="modal-close"><i class="fa fa-times" aria-hidden="true"></i></span></div><div id="modal-content"><p>' 
        + text + '</p></div><div id="modal-buttons"><button class="modal-action" data-confirm=0 id="modal-button-no">Tidak</button><button class="modal-action" data-confirm=1 id="modal-button-yes">Iya</button></div></div>').appendTo($wrapper);
        
        setTimeout(function() {
            $wrapper.addClass('active');
        }, 100);
        
        $wrapper.find('.modal-action').click(function() {
            var result = $(this).data('confirm');
            $wrapper.removeClass('active').delay(500).queue(function() {
            $wrapper.remove();
            callback(result);
            });
        });

    }

    </script>

@stop