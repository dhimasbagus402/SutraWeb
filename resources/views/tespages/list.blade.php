<!DOCTYPE html>
  
<html lang="en">
<head>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Laravel Ajax Crud Example with Image Upload Tutorial - Tuts Make</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
 
  <a href="javascript:void(0)" class="btn btn-info ml-3" id="create-new-blog">Add New</a>
  <br><br></br><br>
   
  <table class="table table-bordered table-striped" id="laravel_datatable">
    <thead>
      <tr>
        <th>ID</th>
        <th>S. No</th>
        <th>Image</th>
        <th>Title</th>
        <th>Description</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
  </table>
</div>
 
<div class="modal fade" id="ajax-blog-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="blogCrudModal"></h4>
            </div>
            <div class="modal-body">

                <form id="blogForm" name="blogForm" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="blog_id" id="blog_id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-12">
                        <input type="text" class="form-control" id="title" name="nama" placeholder="Enter Tilte" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-12">
                        <input type="text" class="form-control" id="blog_code" name="deskripsi" placeholder="Enter Tilte" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Tanggal</label>
                        <div class="col-sm-12">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Image</label>
                        <div class="col-sm-12">
                        <input id="gambar" type="file" name="gambar" accept="gambar/*" onchange="readURL(this);">
                        <input type="hidden" name="hidden_gambar" id="hidden_gambar">
                        </div>
                    </div>
            
                    <img id="modal-preview" src="https://via.placeholder.com/150" alt="Preview" class="form-group hidden" width="100" height="100">
            
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="btn-save" value="create">Save Changes
                        </button>
                    </div>
                </form>
                
        </div>
        <div class="modal-footer">
            
        </div>
        </div>
    </div>
</div> 
 

<script>
   
    var SITEURL = '{{URL::to('')}}';
    
    $(document).ready( function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        
    $('#laravel_datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
            url: SITEURL + "blog-list",
            type: 'GET',
            },
            columns: [
                    {data: 'id', name: 'id', 'visible': false},
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false,searchable: false},
                    {data: 'gambar', name: 'gambar', orderable: false},
                    { data: 'nama', name: 'nama' },
                    { data: 'deskripsi', name: 'deskripsi' },
                    { data: 'tanggal', name: 'tanggal' },
                    {data: 'action', name: 'action', orderable: false},
                ],
            order: [[0, 'desc']]
        });
    
        /*  When user click add user button */
        $('#create-new-blog').click(function () {
            $('#btn-save').val("create-blog");
            $('#blog_id').val('');
            $('#blogForm').trigger("reset");
            $('#blogCrudModal').html("Add New Blog");
            $('#ajax-blog-modal').modal('show');
            $('#modal-preview').attr('src', 'https://via.placeholder.com/150');
        });
    
    /* When click edit user */
        $('body').on('click', '.edit-blog', function () {
        var blog_id = $(this).data('id');
        $.get('blog-list/' + blog_id +'/edit', function (data) {
            $('#title-error').hide();
            $('#description-error').hide();
            $('#blogCrudModal').html("Edit Blog");
            $('#btn-save').val("edit-blog");
            $('#ajax-blog-modal').modal('show');
            $('#blog_id').val(data.id);
            $('#title').val(data.title);
            $('#description').val(data.description);
    
            $('#modal-preview').attr('alt', 'No image available');
            if(data.gambar){
                $('#modal-preview').attr('src', SITEURL +'imgblog/'+data.gambar);
                $('#hidden_gambar').attr('src', SITEURL +'imgblog/'+data.gambar);
            }
            
        })
    });
        $('body').on('click', '#delete-blog', function () {
    
            var blog_id = $(this).data("id");
            
            if(confirm("Are You sure want to delete !")){
            $.ajax({
                type: "get",
                url: SITEURL + "blog-list/delete/"+blog_id,
                success: function (data) {
                var oTable = $('#laravel_datatable').dataTable(); 
                oTable.fnDraw(false);
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
            }
        });  
    
    });
    
    
    $('body').on('submit', '#blogForm', function (e) {
    
        e.preventDefault();
    
        var actionType = $('#btn-save').val();
        $('#btn-save').html('Sending..');
    
        var formData = new FormData(this);
    
        $.ajax({
            type:'POST',
            url: SITEURL + "blog-list/store",
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            success: (data) => {
                
                $('#blogForm').trigger("reset");
                $('#ajax-blog-modal').modal('hide');
                $('#btn-save').html('Save Changes');
                var oTable = $('#laravel_datatable').dataTable();
                oTable.fnDraw(false);
            },
            error: function(data){
                console.log('Error:', data);
                $('#btn-save').html('Save Changes');
            }
        });
    });
    
    function readURL(input, id) {
    id = id || '#modal-preview';
        if (input.files && input.files[0]) {
            var reader = new FileReader();
        
            reader.onload = function (e) {
                $(id).attr('src', e.target.result);
            };
        
            reader.readAsDataURL(input.files[0]);
            $('#modal-preview').removeClass('hidden');
            $('#start').hide();
        }
    }
</script>


</body>
 
</html>