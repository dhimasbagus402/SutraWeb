
<!-- Modal -->
<div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="contact-form">
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Enter Title" id="nama">
                        <span class="text-danger" id="nama-error"></span>
                    </div>

                    <div class="form-group">
                        <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" id="deskripsi">
                        <span class="text-danger" id="deskripsi-error"></span>
                    </div>

                    <div class="form-group">
                        <input type="date" name="tanggal" class="form-control" id="tanggal">
                        <span class="text-danger" id="tanggal-error"></span>
                    </div>

                    <div class="form-group">
                        <input type="file" name="gambar" class="form-control" id="gambar">
                        <span class="text-danger" id="gambar-error"></span>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" id="submit">Submit</button>
                    </div>
                    <div class="form-group">
                        <b><span class="text-success" id="success-message"> </span><b>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
