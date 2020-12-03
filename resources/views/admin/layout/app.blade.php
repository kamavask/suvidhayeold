<!DOCTYPE html>
<html lang="en">
<head>
		@include('admin.layout.head')

	
</head>

<body class="sb-nav-fixed">
  @include('admin.layout.navbar')
    <div id="layoutSidenav">
      @include('admin.layout.sidebar')  
      <div id="layoutSidenav_content">
          <main>
            @yield('content')
          </main>
        @include('admin.layout.footer')
      </div>
    </div>
    @include('admin.layout.scripts') 
  </body>
  
  <script type="text/javascript">
    $('.livesearch').select2({
        placeholder: 'Select Category',
        ajax: {
            url: '/ajax-autocomplete-search',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.name,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });
</script>
</html>
