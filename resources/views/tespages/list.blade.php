<!DOCTYPE html>
<html>
<head>
  <title>Laravel 9 DataTable Ajax Books CRUD Example</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

</head>
<body>

<div class="container mt-4">
  
  <div class="col-md-12 mt-1 mb-2"><button type="button" id="addNewBook" class="btn btn-success">Add</button></div>

  <div class="card">

    <div class="card-header text-center font-weight-bold">
      <h2>Laravel 9 Ajax Book CRUD with DataTable Example Tutorial</h2>
    </div>

    <div class="card-body">

        <table class="table table-bordered" id="datatable-ajax-crud">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Image</th>
                 <th>Title</th>
                 <th>Deskripsi</th>
                 <th>Tanggal</th>
                 <th>Created at</th>
                 <th>Action</th>
              </tr>
           </thead>
        </table>

    </div>

  </div>
  <!-- boostrap add and edit book model -->
    <div class="modal fade" id="ajax-book-model" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="ajaxBookModel"></h4>
          </div>
          <div class="modal-body">
            <form action="javascript:void(0)" id="addEditBookForm" name="addEditBookForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" id="id">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Title" maxlength="50" required="">
                </div>
              </div>  

              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Deskripsi</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Enter Book Code" maxlength="50" required="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal</label>
                <div class="col-sm-12">
                  <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Enter author Name" required="">
                </div>
              </div>             

               <div class="form-group">
                <label class="col-sm-2 control-label">Book Image</label>
                <div class="col-sm-6 pull-left">
                  <input type="file" class="form-control" id="gambar" name="gambar" required="">
                </div>               
                <div class="col-sm-6 pull-right">
                  <img id="preview-image" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                        alt="preview image" style="max-height: 250px;">
                </div>
              </div>

              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="btn-save" value="addNewBook">Save changes
                </button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>
<!-- end bootstrap model -->

<script type="text/javascript">
     
 $(document).ready( function () {

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#gambar').change(function(){
           
    let reader = new FileReader();

    reader.onload = (e) => { 

      $('#preview-image').attr('src', e.target.result); 
    }

    reader.readAsDataURL(this.files[0]); 
  
   });

    $('#datatable-ajax-crud').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('blog-list') }}",
           columns: [
                    {data: 'id', name: 'id', 'visible': false},
                    { data: 'gambar', name: 'gambar' , orderable: false},
                    { data: 'nama', name: 'nama' },
                    { data: 'deskripsi', name: 'deskripsi' },
                    { data: 'tanggal', name: 'tanggal' },
                    { data: 'created_at', name: 'created_at' },
                    {data: 'action', name: 'action', orderable: false},
                 ],
          order: [[0, 'desc']]
    });


    $('#addNewBook').click(function () {
       $('#addEditBookForm').trigger("reset");
       $('#ajaxBookModel').html("Add Book");
       $('#ajax-book-model').modal('show');
       $("#gambar").attr("required", "true");
       $('#id').val('');
       $('#preview-image').attr('src', 'https://www.riobeauty.co.uk/images/product_image_not_found.gif');


    });
 
    $('body').on('click', '.edit', function () {

        var id = $(this).data('id');
         
        // ajax
        $.ajax({
            type:"POST",
            url: "{{ url('edit-blog') }}",
            data: { id: id },
            dataType: 'json',
            success: function(res){
              $('#ajaxBookModel').html("Edit Book");
              $('#ajax-book-model').modal('show');
              $('#id').val(res.id);
              $('#nama').val(res.nama);
              $('#deskripsi').val(res.deskripsi);
              $('#tanggal').val(res.tanggal);
              $('#gambar').removeAttr('required');

           }
        });

    });

    $('body').on('click', '.delete', function () {

       if (confirm("Delete Record?") == true) {
        var id = $(this).data('id');
         
        // ajax
        $.ajax({
            type:"POST",
            url: "{{ url('delete-blog') }}",
            data: { id: id },
            dataType: 'json',
            success: function(res){

              var oTable = $('#datatable-ajax-crud').dataTable();
              oTable.fnDraw(false);
           }
        });
       }

    });

   $('#addEditBookForm').submit(function(e) {

     e.preventDefault();
  
     var formData = new FormData(this);
  
     $.ajax({
        type:'POST',
        url: "{{ url('add-blog')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
          $("#ajax-book-model").modal('hide');
          var oTable = $('#datatable-ajax-crud').dataTable();
          oTable.fnDraw(false);
          $("#btn-save").html('Submit');
          $("#btn-save"). attr("disabled", false);
        },
        error: function(data){
           console.log(data);
         }
       });
   });
});
</script>
</div>  
</body>
</html>