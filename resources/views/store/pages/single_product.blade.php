@extends('store.layout.app')
@section('content')


@php
		$test = $product->product_images->def_img;

		echo $test;
@endphp






@endsection