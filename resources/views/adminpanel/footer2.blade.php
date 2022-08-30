
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
 

<script type="text/javascript">
      
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    
      $("#submit-btn").click(function(e){
      
          e.preventDefault();
       
          var name = $("#titleID").val();
          var detail = $("#bodyID").val();
       
          $.ajax({
             type:'POST',
             url:"{{ route('blogs.store') }}",
             data:{name:name, detail:detail, tanggal:tanggal},
             success:function(data){
                  if($.isEmptyObject(data.error)){
                      alert(data.success);
                      location.reload();
                  }else{
                      printErrorMsg(data.error);
                  }
             }
          });
      });
    
      function printErrorMsg (msg) {
          $(".print-error-msg").find("ul").html('');
          $(".print-error-msg").css('display','block');
          $.each( msg, function( key, value ) {
              $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
          });
      }
    
</script>

            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>