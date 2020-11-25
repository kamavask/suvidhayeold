@extends('store.layout.app')
@section('content')

	<div class="wrapper">
		<div class="gambo-Breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Vegetables & Fruits</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="all-product-grid">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="product-top-dt">
							<div class="product-left-title">
								<h2>Vegetables & Fruits</h2>
							</div>
							<a href="#" class="filter-btn pull-bs-canvas-right">Filters</a>
							<div class="product-sort">
								<div class="ui selection dropdown vchrt-dropdown">
									<input name="gender" type="hidden" value="default">
									<i class="dropdown icon d-icon"></i>
									<div class="text">Popularity</div>
									<div class="menu">
										<div class="item" data-value="0">Popularity</div>
										<div class="item" data-value="1">Price - Low to High</div>
										<div class="item" data-value="2">Price - High to Low</div>
										<div class="item" data-value="3">Alphabetical</div>
										<div class="item" data-value="4">Saving - High to Low</div>
										<div class="item" data-value="5">Saving - Low to High</div>
										<div class="item" data-value="6">% Off - High to Low</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="product-list-view">
					<div class="row">
						@foreach ($category as $item)
						<div class="col-lg-3 col-md-6">
							<div class="product-item mb-30">
								<a href="" class="product-img">
									<img src="images/product/img-12.jpg" alt="">
									<div class="product-absolute-options">
										<span class="offer-badge-1">2% off</span>
										<span class="like-icon" title="wishlist"></span>
									</div>
								</a>
								<div class="product-text-dt">
									<p>Available<span>(In Stock)</span></p>
								<h4 class="title_name">{{$item->prod_name}}</h4>
									<div class="product-price"> Rs. {{$item->s_price}} <span>Rs. {{$item->r_price}}</span></div>
									<div class="qty-cart">
										<div class="quantity buttons_added">
											<input type="button" value="-" class="minus minus-btn">
											<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
											<input type="button" value="+" class="plus plus-btn">
										</div>
										<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						<div class="col-md-12">
							<div class="more-product-btn">
								<button class="show-more-btn hover-btn" onclick="window.location.href = '#';">Show More</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection