
    
    if ($("#contactUsForm").length > 0) {
        $("#contactUsForm").validate({
        rules: {
            nama: {
                required: true,
                maxlength: 50
            },
            deskripsi: {
                required: true
            },  
            tanggal: {
                required: true
            },   
            gambar: {
                required: true
            },  
        },
        messages: {
            name: {
                required: "Please enter title",
                maxlength: "Your name maxlength should be 50 characters long."
            },
            deskripsi: {
                required: "Please enter deskripsi"
            },   
            tanggal: {
                required: "Please enter valid Date"
            },
            gambar: {
                required: "Please input Image"
            },
        },
        submitHandler: function(form) {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $('#submit').html('Please Wait...');
        $("#submit"). attr("disabled", true);
        
        $.ajax({
            url: "{{ route('blogs.store') }}",
            type: "POST",
            data: $('#contactUsForm').serialize(),
            success: function( response ) {
            $('#submit').html('Submit');
            $("#submit"). attr("disabled", false);
            alert('Ajax form has been submitted successfully');
            document.getElementById("contactUsForm").reset(); 
            }
        });
        }
        })
    }
