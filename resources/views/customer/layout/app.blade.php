<!DOCTYPE html>
<html lang="en">
  @include('customer.layout.head')

<body>
  
  @include('customer.layout.category_model')

  @include('customer.layout.search_model')

  @include('customer.layout.side_cart')

  @include('customer.layout.navbar') 

  @include('customer.layout.filter') 
  
    @yield('content')

  <!-- Footer Start -->
  @include('customer.layout.footer')
  <!-- Footer End -->

  @include('customer.layout.scripts')


</body>

</html>