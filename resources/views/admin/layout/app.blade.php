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
</html>
