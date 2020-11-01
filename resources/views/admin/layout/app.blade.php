<!DOCTYPE html>
<html lang="en">
<head>
		@include('admin.layout.head')

	
</head>

<body class="sb-nav-fixed">
  <div id="layoutSidenav">
  @include('admin.layout.navbar')
      @include('admin.layout.sidebar')  

        @yield('content')
    </div>
    @include('admin.layout.scripts') 
  </body>
</html>
