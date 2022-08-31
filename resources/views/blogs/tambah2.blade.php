
<!-- Modal -->
<div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                    <div class="card-body">
                        <div class="alert alert-danger error-msg" style="display:none">
                            <ul></ul>
                        </div>
                        <form action="" id="createmodal" name="catmodal" class="form-horizontal">
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="cname">Title:</label>
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Title">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="cdes">Deskripsi:</label>
                                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Deskripsi"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Tanggal:</strong>
                                        <input type="date" name="tanggal" id="tanggal" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Gambar:</strong>
                                        <input type="file" name="gambar" id="gambar">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-success mt-2" type="submit" id="savebtn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

            </div>
        </div>
    </div>
</div>


    <script type="text/javascript">
        $(document).ready(function() {
            $('body').on('click','#savebtn',function(e){
                e.preventDefault();
                var _token = $("input[name='_token']").val();
                var nama = $('#nama').val();
                var deskripsi = $('#deskripsi').val();
                var tanggal = $('#tanggal').val();
                var gambar = $('#gambar').val();
                $.ajax({
                    type:'POST',
                    url:'{{ route('blogs.store') }}',
                    dataType: 'json',
                    data:{
                        _token:_token,
                        nama:nama,
                        deskripsi:deskripsi,
                        tanggal:tanggal,
                        gambar:gambar,
                    },
                    success:function (data) {
                        if ($.isEmptyObject(data.error)) {
                            alert(data.success);
                            $('#nama').val('');
                            $('#deskripsi').val('');
                            $('#tanggal').val('');
                            $('#gambar').val('');
                        }else{
                            printErrorMsg(data.error)
                        }
                        table.draw();
                    }
                });
            });

            function printErrorMsg(msg) {
                $('.error-msg').find('ul').html('');
                $('.error-msg').css('display','block');
                $.each( msg, function( key, value ) {
                    $(".error-msg").find("ul").append('<li>'+value+'</li>');
                });
            }
        });
    </script>