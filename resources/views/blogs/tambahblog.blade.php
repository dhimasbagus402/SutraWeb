
<!-- Modal -->
<div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form>
                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>
        
                    <div class="mb-3">
                        <label for="titleID" class="form-label">Judul:</label>
                        <input type="text" id="titleID" name="nama" class="form-control" placeholder="Judul" required="">
                    </div>
      
                    <div class="mb-3">
                        <label for="bodyID" class="form-label">Deskripsi:</label>
                        <textarea name="deskripsi" class="form-control" id="bodyID" placeholder="Deskripsi"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal:</label>
                        <input type="date" name="tanggal" class="form-control">
                    </div>

                    <div class="form-group">
                        <strong>Gambar:</strong>
                        <input 
                        type="file" 
                        name="gambar" 
                        id="inputImage"
                        class="form-control @error('gambar') is-invalid @enderror">
                    </div>
         
                    <div class="mb-3 text-center">
                        <button id="submit-btn" class="btn btn-success btn-submit btn-sm">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
