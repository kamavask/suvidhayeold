{{-- <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description-gambolthemes" content="">
    <meta name="author-gambolthemes" content="">
    <title>Gambo Supermarket Admin</title>
    <link href="admin/css/styles.css" rel="stylesheet">
    <link href="admin/css/admin-style.css" rel="stylesheet">

    <!-- Vendor Stylesheets -->
    <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Tail Select Stylesheets -->
    <link href="admin/vendor/tail.select/css/bootstrap4/tail.select-default.css" rel="stylesheet">
     <!-- froala Editor Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/froala_editor.css">
    <link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/froala_style.css">
    <link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/code_view.css">
    <link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/colors.css">
    <link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/emoticons.css">
    <link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/image_manager.css">
    <link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/image.css">
    <link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/line_breaker.css">
    <link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/table.css">
    <link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/char_counter.css">
    <link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/video.css">
    <link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/fullscreen.css">
    <link rel="stylesheet" href="vendor/froala_editor_3.1.1/css/plugins/file.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
</head> --}}

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description-gambolthemes" content="">
<meta name="author-gambolthemes" content="">
<title>Suvidhaye</title>
<link rel="stylesheet" href="/old/css/app.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<link href="/admin/css/styles.css" rel="stylesheet">
<link href="/admin/css/admin-style.css" rel="stylesheet">

<!-- Vendor Stylesheets -->
<link href="/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

<script>
$(document).ready(function(){

 $('#country_name').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#countryList').fadeIn();  
                    $('#countryList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#country_name').val($(this).text());  
        $('#countryList').fadeOut();  
    });  

});
</script>