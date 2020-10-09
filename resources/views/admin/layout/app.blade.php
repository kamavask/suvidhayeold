<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')
 <body class="sb-nav-fixed">

    @include('admin.layout.navbar')
    @include('admin.layout.right_sidebar')
    @yield('content')
    

    @include('admin.layout.footer')

   @include('admin.layout.scripts')
</body>
</html>