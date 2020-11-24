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
						<div class="col-lg-3 col-md-6">
						 <div class="owl-carousel featured-slider owl-theme ">
                        @foreach ($featured as $item)
                        <div class="item ">
                            <div class="product-item ">
                                <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html "
                                    class="product-img ">
                                    <img src="/storage/images/products/{{$item->prod_name}}.jpg" alt=" ">
                                    <div class="product-absolute-options ">
                                        <span class="offer-badge-1">
                                            @php
                                            $r_price = $item->r_price;
                                            $s_price = $item->s_price;
                                            $subtranct = $r_price - $s_price;
                                            $multi = 100;
                                            $percent = ( $subtranct / $r_price ) * $multi;
                                            echo $percent . " %";
                                            @endphp
                                        </span>
                                        <span class="like-icon " title="wishlist "></span>
                                    </div>
                                {{-- </a> --}}
                                <div class="product-text-dt ">
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4 class="title_name">{{$item->prod_name}}</h4>
                                    @if($item->s_price = $item->r_price)
                                    <div class="product-price ">₹ {{$item->s_price}}</div>
                                    @else
                                    <div class="product-price ">₹ {{$item->s_price}}<span>₹ {{$item->r_price}}</span>
                                    </div>
                                    @endif
                                    <div class="qty-cart ">
                                        <div class="quantity buttons_added ">
                                            <input type="button " value="- " class="minus minus-btn ">
                                            <input type="number " step="1 " name="quantity " value="1 "
                                                class="input-text qty text ">
                                            <input type="button " value="+ " class="plus plus-btn ">
                                        </div>
                                        <div class="cart-icon-div ">
                                            <form action="{{route('customer.pages.cart.store')}}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="prod_id" value="{{$item->id}}">
                                                {{-- <input type="hidden" name="name" value="{{$item->prod_name}}"> --}}
                                                {{-- <input type="hidden" name="rprice" value="{{$product->r_price}}">
                                                --}}
                                                {{-- <input type="hidden" name="s_price" value="{{$item->s_price}}">
                                                --}}
                                                <button class="cart-btn-short ">
                                                    <span class="cart-icon ">
                                                        <i class="uil uil-shopping-cart-alt "></i>
                                                    </span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
						</div>
					{{-- 	<div class="col-lg-3 col-md-6">
							<div class="product-item mb-30">
								<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
									<img src="images/product/img-2.jpg" alt="">
									<div class="product-absolute-options">
										<span class="offer-badge-1">2% off</span>
										<span class="like-icon" title="wishlist"></span>
									</div>
								</a>
								<div class="product-text-dt">
									<p>Available<span>(In Stock)</span></p>
									<h4>Product Title Here</h4>
									<div class="product-price">$10 <span>$13</span></div>
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
						<div class="col-lg-3 col-md-6">
							<div class="product-item mb-30">
								<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
									<img src="images/product/img-3.jpg" alt="">
									<div class="product-absolute-options">
										<span class="offer-badge-1">5% off</span>
										<span class="like-icon" title="wishlist"></span>
									</div>
								</a>
								<div class="product-text-dt">
									<p>Available<span>(In Stock)</span></p>
									<h4>Product Title Here</h4>
									<div class="product-price">$5 <span>$8</span></div>
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
						<div class="col-lg-3 col-md-6">
							<div class="product-item mb-30">
								<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
									<img src="images/product/img-4.jpg" alt="">
									<div class="product-absolute-options">
										<span class="offer-badge-1">3% off</span>
										<span class="like-icon" title="wishlist"></span>
									</div>
								</a>
								<div class="product-text-dt">
									<p>Available<span>(In Stock)</span></p>
									<h4>Product Title Here</h4>
									<div class="product-price">$15 <span>$20</span></div>
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
						<div class="col-lg-3 col-md-6">
							<div class="product-item mb-30">
								<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
									<img src="images/product/img-5.jpg" alt="">
									<div class="product-absolute-options">
										<span class="offer-badge-1">2% off</span>
										<span class="like-icon" title="wishlist"></span>
									</div>
								</a>
								<div class="product-text-dt">
									<p>Available<span>(In Stock)</span></p>
									<h4>Product Title Here</h4>
									<div class="product-price">$9 <span>$10</span></div>
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
						<div class="col-lg-3 col-md-6">
							<div class="product-item mb-30">
								<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
									<img src="images/product/img-6.jpg" alt="">
									<div class="product-absolute-options">
										<span class="offer-badge-1">2% off</span>
										<span class="like-icon" title="wishlist"></span>
									</div>
								</a>
								<div class="product-text-dt">
									<p>Available<span>(In Stock)</span></p>
									<h4>Product Title Here</h4>
									<div class="product-price">$7 <span>$8</span></div>
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
						<div class="col-lg-3 col-md-6">
							<div class="product-item mb-30">
								<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
									<img src="images/product/img-7.jpg" alt="">
									<div class="product-absolute-options">
										<span class="offer-badge-1">1% off</span>
										<span class="like-icon" title="wishlist"></span>
									</div>
								</a>
								<div class="product-text-dt">
									<p>Available<span>(In Stock)</span></p>
									<h4>Product Title Here</h4>
									<div class="product-price">$6.95 <span>$7</span></div>
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
						<div class="col-lg-3 col-md-6">
							<div class="product-item mb-30">
								<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
									<img src="images/product/img-11.jpg" alt="">
									<div class="product-absolute-options">
										<span class="offer-badge-1">6% off</span>
										<span class="like-icon" title="wishlist"></span>
									</div>
								</a>
								<div class="product-text-dt">
									<p>Available<span>(In Stock)</span></p>
									<h4>Product Title Here</h4>
									<div class="product-price">$12 <span>$15</span></div>
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
						<div class="col-lg-3 col-md-6">
							<div class="product-item mb-30">
								<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
									<img src="images/product/img-12.jpg" alt="">
									<div class="product-absolute-options">
										<span class="offer-badge-1">2% off</span>
										<span class="like-icon" title="wishlist"></span>
									</div>
								</a>
								<div class="product-text-dt">
									<p>Available<span>(In Stock)</span></p>
									<h4>Product Title Here</h4>
									<div class="product-price">$10 <span>$13</span></div>
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
						<div class="col-lg-3 col-md-6">
							<div class="product-item mb-30">
								<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
									<img src="images/product/img-13.jpg" alt="">
									<div class="product-absolute-options">
										<span class="offer-badge-1">5% off</span>
										<span class="like-icon" title="wishlist"></span>
									</div>
								</a>
								<div class="product-text-dt">
									<p>Available<span>(In Stock)</span></p>
									<h4>Product Title Here</h4>
									<div class="product-price">$5 <span>$8</span></div>
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
						<div class="col-lg-3 col-md-6">
							<div class="product-item mb-30">
								<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
									<img src="images/product/img-14.jpg" alt="">
									<div class="product-absolute-options">
										<span class="offer-badge-1">1% off</span>
										<span class="like-icon" title="wishlist"></span>
									</div>
								</a>
								<div class="product-text-dt">
									<p>Available<span>(In Stock)</span></p>
									<h4>Product Title Here</h4>
									<div class="product-price">$6.95 <span>$7</span></div>
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
						<div class="col-lg-3 col-md-6">
							<div class="product-item mb-30">
								<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
									<img src="images/product/img-8.jpg" alt="">
									<div class="product-absolute-options">
										<span class="offer-badge-1">3% off</span>
										<span class="like-icon" title="wishlist"></span>
									</div>
								</a>
								<div class="product-text-dt">
									<p>Available<span>(In Stock)</span></p>
									<h4>Product Title Here</h4>
									<div class="product-price">$8 <span>$10</span></div>
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
						<div class="col-md-12">
							<div class="more-product-btn">
								<button class="show-more-btn hover-btn" onclick="window.location.href = '#';">Show More</button>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
 
@endsection