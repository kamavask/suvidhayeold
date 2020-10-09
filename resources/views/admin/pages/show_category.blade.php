@extends('admin.layout.app')
@section('content')
@foreach ($cat as $cat)
echo {{$cat->category_name}}
<br>
@endforeach
@endsection