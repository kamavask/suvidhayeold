<!DOCTYPE html>
<html lang="en">
<head>
		@include('admin.layout.head')

	
</head>

<body class="sb-nav-fixed">
  @include('admin.layout.navbar')
    <div id="layoutSidenav">
      @include('admin.layout.sidebar')  

        @yield('content')
    </div>
         
  </body>
</html>
