﻿@extends('store.layout.app')
@section('content')

	<div class="wrapper">
		<div class="gambo-Breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item"><a href="shop_grid.html">Vegetables & Fruits</a></li>
								<li class="breadcrumb-item active" aria-current="page">Product Title</li>
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
						<div class="product-dt-view">
							<div class="row">
								<div class="col-lg-4 col-md-4">
                  <div id="sync1" class="owl-carousel owl-theme">
										@if ($product->image_id != null)
											<div class="item">
                        <img src="/{{$product->product_images->def_img}}" alt="">
											</div>
											@else
											<div class="item">
                          <img src="/store/images/product/big-2.jpg" alt="">
                      </div>
										@endif
										@if ($product->image_id != null)
										@if ($product->product_images->multi_img1 != null)
                      <div class="item">
                          <img src="/{{$product->product_images->multi_img1}}" alt="">
											</div>
										@endif
										@endif
										@if ($product->image_id != null)
										@if ($product->product_images->multi_img2 != null)
                      <div class="item">
                          <img src="/{{$product->product_images->multi_img2}}" alt="">
											</div>
											@endif
										@endif
										@if ($product->image_id != null)
										@if ($product->product_images->multi_img3 != null)
                      <div class="item">
                          <img src="/{{$product->product_images->multi_img3}}" alt="">
											</div>
											@endif
										@endif
										@if ($product->image_id != null)
										@if ($product->product_images->multi_img4 != null)
											<div class="item">
                          <img src="/{{$product->product_images->multi_img4}}" alt="">
											</div>
											@endif
										@endif
										@if ($product->image_id != null)
										@if ($product->product_images->multi_img5 != null)
											<div class="item">
                          <img src="/{{$product->product_images->multi_img5}}" alt="">
											</div>
											@endif
										@endif
										@if ($product->image_id != null)
										@if ($product->product_images->multi_img6 != null)
											<div class="item">
                          <img src="/{{$product->product_images->multi_img6}}" alt="">
											</div>
											@endif
										@endif
                  </div>
                  <div id="sync2" class="owl-carousel owl-theme">
										@if ($product->image_id != null)
                      <div class="item">
                          <img src="/{{$product->product_images->def_img}}" alt="">
											</div>
											@else
											<div class="item">
                          <img src="/store/images/product/big-2.jpg" alt="">
                      </div>
										@endif
										@if ($product->image_id != null)
											@if ($product->product_images->multi_img1 != null)
												<div class="item">
													<img src="/{{$product->product_images->multi_img1}}" alt="">
											</div>	
											@endif
										@endif
										@if ($product->image_id != null)
											@if ($product->product_images->multi_img2 != null)
													<div class="item">
                          <img src="/{{$product->product_images->multi_img2}}" alt="">
											</div>
											@endif
										@endif
										@if ($product->image_id != null)
											@if ($product->product_images->multi_img3 != null)
													<div class="item">
                          <img src="/{{$product->product_images->multi_img3}}" alt="">
											</div>
											@endif
										@endif
										@if ($product->image_id != null)
											@if ($product->product_images->multi_img4 != null)
													<div class="item">
                          <img src="/{{$product->product_images->multi_img4}}" alt="">
											</div>
											@endif
										@endif
										@if ($product->image_id != null)
											@if ($product->product_images->multi_img5 != null)
													<div class="item">
                          <img src="/{{$product->product_images->multi_img5}}" alt="">
											</div>
											@endif
										@endif
										@if ($product->image_id != null)
											@if ($product->product_images->multi_img6 != null)
												<div class="item">
                          <img src="/{{$product->product_images->multi_img6}}" alt="">
											</div>	
											@endif
										@endif
                  </div>
                </div>
								<div class="col-lg-8 col-md-8">
									<div class="product-dt-right">
										<h2>{{$product->prod_name}}</h2>
										<div class="no-stock">
											<p class="pd-no">Product No.<span>{{$product->id}}</span></p>
											<p class="stock-qty">Available<span>(Instock)</span></p>
										</div>
										<div class="product-radio">
											<ul class="product-now">
												<li>
													<input type="radio" id="p1" name="product1">
													<label for="p1">{{$product->weight}}</label>
												</li>
											</ul>
										</div>
										<p class="pp-descp">{{$product->short_description}}</p>
										
											@php
                                  $highlight = $product->highlight;
                                  $highlight_final = explode('.', $highlight);

                                  for ($i=0; $i <count($highlight_final); $i++) { 
                                     echo "<p>$highlight_final[$i]</p>";
                                  }
                                                

                               @endphp
		
										<div class="product-group-dt">
											<ul>
												<li><div class="main-price color-discount">Discount Price<span>Rs. {{$product->s_price}}</span></div></li>
												<li><div class="main-price mrp-price">MRP<span>Rs. {{$product->r_price}}</span></div></li>
											</ul>
											<ul class="gty-wish-share">
                          <li>
                              <div class="qty-product">
                                  <div class="quantity buttons_added">
                                      <input type="button" value="-" class="minus minus-btn">
                                      <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                      <input type="button" value="+" class="plus plus-btn">
                                  </div>
                              </div>
                          </li>
                          <li><span class="like-icon save-icon" title="wishlist"></span></li>
                      </ul>
											<ul class="ordr-crt-share">
												<li><button class="add-cart-btn hover-btn"><i class="uil uil-shopping-cart-alt"></i>Add to Cart</button></li>
												<li>
												  <form method="POST" action="/customer/pages/show-cart">
													@csrf
													<div class="qty-cart ">
                                        <div class="cart-icon-div ">
                                            <input type="hidden" name="prod_id" value="{{$product->id}}">
																						<input type="hidden" name="quantity" value="{{$product->quantity}}">
                                            {{-- <input type="hidden" name="name" value="{{$product->prod_name}}"> --}}
                                            {{-- <input type="hidden" name="rprice" value="{{$product->r_price}}">
                                            --}}
                                            {{-- <input type="hidden" name="s_price" value="{{$product->s_price}}">
                                            --}}
                                          
                                        </div>
                                    </div>
												     <button class="order-btn hover-btn">Order Now</button>
												  </form>
												</li>
											</ul>
										</div>
										<div class="pdp-details">
											<ul>
												<li>
													<div class="pdp-group-dt">
														<div class="pdp-icon"><i class="uil uil-usd-circle"></i></div>
														<div class="pdp-text-dt">
															<span>Lowest Price Guaranteed</span>
															<p>Get difference refunded if you find it cheaper anywhere else.</p>
														</div>
													</div>
												</li>
												<li>
													<div class="pdp-group-dt">
														<div class="pdp-icon"><i class="uil uil-cloud-redo"></i></div>
														<div class="pdp-text-dt">
															<span>Easy Returns & Refunds</span>
															<p>Return products at doorstep and get refund in seconds.</p>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
          <div class="col-lg-4 col-md-12">
              <div class="pdpt-bg">
                  <div class="pdpt-title">
                      <h4>More Like This</h4>
                  </div>
                  <div class="pdpt-body scrollstyle_4">
                      <div class="cart-item border_radius">
                          <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="cart-product-img">
                              <img src="images/product/img-6.jpg" alt="">
                              <div class="offer-badge">4% OFF</div>
                          </a>
                          <div class="cart-text">
                            <h4>Product Title Here</h4>
                            <div class="cart-radio">
                                <ul class="kggrm-now">
                                    <li>
                                        <input type="radio" id="k1" name="cart1">
                                        <label for="k1">0.50</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="k2" name="cart1">
                                        <label for="k2">1kg</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="k3" name="cart1">
                                        <label for="k3">2kg</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="k4" name="cart1">
                                        <label for="k4">3kg</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="qty-group">
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus minus-btn">
                                    <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                    <input type="button" value="+" class="plus plus-btn">
                                </div>
                                <div class="cart-item-price">$12 <span>$15</span></div>
                            </div>
                        </div>
                      </div>
                      <div class="cart-item border_radius">
                          <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="cart-product-img">
                              <img src="images/product/img-2.jpg" alt="">
                              <div class="offer-badge">6% OFF</div>
                          </a>
                          <div class="cart-text">
                              <h4>Product Title Here</h4>
                              <div class="cart-radio">
                                  <ul class="kggrm-now">
                                      <li>
                                          <input type="radio" id="k5" name="cart2">
                                          <label for="k5">0.50</label>
                                      </li>
                                      <li>
                                          <input type="radio" id="k6" name="cart2">
                                          <label for="k6">1kg</label>
                                      </li>
                                      <li>
                                          <input type="radio" id="k7" name="cart2">
                                          <label for="k7">2kg</label>
                                      </li>
                                  </ul>
                              </div>
                              <div class="qty-group">
                                  <div class="quantity buttons_added">
                                      <input type="button" value="-" class="minus minus-btn">
                                      <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                      <input type="button" value="+" class="plus plus-btn">
                                  </div>
                                  <div class="cart-item-price">$24 <span>$30</span></div>
                              </div>
                          </div>
                      </div>
                      <div class="cart-item border_radius">
                          <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="cart-product-img">
                              <img src="images/product/img-5.jpg" alt="">
                          </a>
                          <div class="cart-text">
                              <h4>Product Title Here</h4>
                              <div class="cart-radio">
                                  <ul class="kggrm-now">
                                      <li>
                                          <input type="radio" id="k8" name="cart3">
                                          <label for="k8">0.50</label>
                                      </li>
                                      <li>
                                          <input type="radio" id="k9" name="cart3">
                                          <label for="k9">1kg</label>
                                      </li>
                                      <li>
                                          <input type="radio" id="k10" name="cart3">
                                          <label for="k10">1.50kg</label>
                                      </li>
                                  </ul>
                              </div>
                              <div class="qty-group">
                                  <div class="quantity buttons_added">
                                      <input type="button" value="-" class="minus minus-btn">
                                      <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                      <input type="button" value="+" class="plus plus-btn">
                                  </div>
                                  <div class="cart-item-price">$15</div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-8 col-md-12">
              <div class="pdpt-bg">
                  <div class="pdpt-title">
                      <h4>Product Details</h4>
                  </div>
                  <div class="pdpt-body scrollstyle_4">
                      <div class="pdct-dts-1">
                          <div class="pdct-dt-step">
                              <h4>Specification</h4>
															@php
                                  $Specification = $product->specification;
                                  $Specification_final = explode('/', $Specification);

                                  for ($i=0; $i <count($Specification_final); $i++) { 
                                     echo "<p>$Specification_final[$i]</p>";
                                  }
                                                

                               @endphp
															{{-- <p>
																 @php
                                  $Specification = $product->specification;
                                  $Specification_final = explode('/', $Specification);

                                  for ($i=0; $i <count($Specification_final); $i++) { 
                                     echo "$Specification_final[$i]<br>";
                                  }
                                                

                               @endphp
															</p> --}}
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
			</div>
		</div>
		<!-- Featured Products Start -->
		<div class="section145">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="main-title-tt">
							<div class="main-title-left">
								<span>For You</span>
								<h2>Top Featured Products</h2>
							</div>
							<a href="#" class="see-more-btn">See All</a>
						</div>
					</div>
					<div class="col-md-12">
						<div class="owl-carousel featured-slider owl-theme">
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="store/images/product/img-1.jpg" alt="">
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
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="store/images/product/img-2.jpg" alt="">
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
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="store/images/product/img-3.jpg" alt="">
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
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="store/images/product/img-4.jpg" alt="">
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
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="store/images/product/img-5.jpg" alt="">
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
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="store/images/product/img-6.jpg" alt="">
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
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="store/images/product/img-7.jpg" alt="">
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
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="store/images/product/img-8.jpg" alt="">
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
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Featured Products End -->
	</div>
	</div>
<!-- New Products End -->
</div>








@endsection