<!DOCTYPE html>
<html lang="en">
  @include('store.layout.head')

<body>
  
  @include('store.layout.category_model')

  @include('store.layout.search_model')

  @include('store.layout.side_cart')

  @include('store.layout.navbar') 

  @include('store.layout.filter') 
  
    @yield('content')

  <!-- Footer Start -->
  @include('store.layout.footer')
  <!-- Footer End -->

  @include('store.layout.scripts')


</body>

</html>