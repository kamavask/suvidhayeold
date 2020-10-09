<!DOCTYPE html>
<html lang="en">
@include('Dashboard.layout.head')
<body>

    @include('Dashboard.layout.navbar')
    @include('Dashboard.layout.right_sidebar')
    @yield('content')
    

    @include('Dashboard.layout.footer')

   @include('Dashboard.layout.scripts')
</body>
</html>