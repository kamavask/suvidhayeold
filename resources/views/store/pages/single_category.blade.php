{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$category->category_name}}</title>
</head>

<body>
  @foreach($category as $cat)
  <h1>{{$cat->category_name}}</h1>
</body>

</html> --}}

@extends('store.layout.app')
@section('content')
  <div class="wrapper">
      @foreach($category as $cat)
      <h1>{{$cat->category_name}}</h1>
  </div>  
@endsection