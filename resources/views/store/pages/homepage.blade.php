@extends('store.layout.app')
@section('content')
<div class="wrapper">
    <!-- Offers Start -->
    {{-- <div class="main-banner-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel offers-banner owl-theme">
                            <div class="item">
                                <div class="offer-item">
                                    <div class="offer-item-img">
                                        <div class="gambo-overlay"></div>
                                        <img src="store/images/offers/offer (1).jpg" alt="">
                                    </div>
                                    <div class="offer-text-dt">
                                        <div class="offer-top-text-banner">
                                            <p>6% Off</p>
                                            <div class="top-text-1">Buy More & Save More</div>
                                            <span>Fresh Vegetables</span>
                                        </div>
                                        <a href="#" class="Offer-shop-btn hover-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="offer-item">
                                    <div class="offer-item-img">
                                        <div class="gambo-overlay"></div>
                                        <img src="store/images/offers/offer (2).jpg" alt="">
                                    </div>
                                    <div class="offer-text-dt">
                                        <div class="offer-top-text-banner">
                                            <p>6% Off</p>
                                            <div class="top-text-1">Buy More & Save More</div>
                                            <span>Fresh Vegetables</span>
                                        </div>
                                        <a href="#" class="Offer-shop-btn hover-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="offer-item">
                                    <div class="offer-item-img">
                                        <div class="gambo-overlay"></div>
                                        <img src="store/images/offers/offer (3).jpg" alt="">
                                    </div>
                                    <div class="offer-text-dt">
                                        <div class="offer-top-text-banner">
                                            <p>6% Off</p>
                                            <div class="top-text-1">Buy More & Save More</div>
                                            <span>Fresh Vegetables</span>
                                        </div>
                                        <a href="#" class="Offer-shop-btn hover-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="offer-item">
                                    <div class="offer-item-img">
                                        <div class="gambo-overlay"></div>
                                        <img src="store/images/offers/offer (4).jpg" alt="">
                                    </div>
                                    <div class="offer-text-dt">
                                        <div class="offer-top-text-banner">
                                            <p>6% Off</p>
                                            <div class="top-text-1">Buy More & Save More</div>
                                            <span>Fresh Vegetables</span>
                                        </div>
                                        <a href="#" class="Offer-shop-btn hover-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="offer-item">
                                    <div class="offer-item-img">
                                        <div class="gambo-overlay"></div>
                                        <img src="store/images/offers/offer (5).jpg" alt="">
                                    </div>
                                    <div class="offer-text-dt">
                                        <div class="offer-top-text-banner">
                                            <p>6% Off</p>
                                            <div class="top-text-1">Buy More & Save More</div>
                                            <span>Fresh Vegetables</span>
                                        </div>
                                        <a href="#" class="Offer-shop-btn hover-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!-- Offers End -->

    <!-- Categories Start -->
    <div class="section145 ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 ">
                    <div class="main-title-tt ">
                        <div class="main-title-left ">
                            <span>Shop By</span>
                            <h2>Categories</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 ">
                    <div class="owl-carousel cate-slider owl-theme ">
                        <div class="item ">
                            <a href="category/" class="category-item ">
                                <div class="cate-img ">
                                    <img src="store/images/category/icon-1.svg" alt=" ">
                                </div>
                                <h4 class="title_name">Vegetables</h4>
                            </a>
                        </div>
                        <div class="item ">
                            <a href="category/1001" class="category-item ">
                                <div class="cate-img ">
                                    <img src="store/images/category/icon-2.svg" alt=" ">
                                </div>
                                <h4 class="title_name">Fruits</h4>
                            </a>
                        </div>
                        <div class="item ">
                            <a href="category/1001" class="category-item ">
                                <div class="cate-img ">
                                    <img src="store/images/category/icon-3.svg" alt=" ">
                                </div>
                                <h4 class="title_name">Grocery</h4>
                            </a>
                        </div>
                        <div class="item ">
                            <a href="product_category" class="category-item ">
                                <div class="cate-img ">
                                    <img src="store/images/category/icon-4.svg" alt=" ">
                                </div>
                                <h4 class="title_name">Dairy</h4>
                            </a>
                        </div>
                        <div class="item ">
                            <a href="category" class="category-item ">
                                <div class="cate-img ">
                                    <img src="store/images/category/icon-5.svg" alt=" ">
                                </div>
                                <h4 class="title_name">Poojan Samagri</h4>
                            </a>
                        </div>
                        <div class="item ">
                            <a href="category/1001" class="category-item ">
                                <div class="cate-img ">
                                    <img src="store/images/category/icon-6.svg" alt=" ">
                                </div>
                                <h4 class="title_name">Plastic Ware</h4>
                            </a>
                        </div>
                        <div class="item ">
                            <a href="category" class="category-item ">
                                <div class="cate-img ">
                                    <img src="store/images/category/icon-7.svg" alt=" ">
                                </div>
                                <h4 class="title_name">Clothing</h4>
                            </a>
                        </div>
                        <div class="item ">
                            <a href="category/1001" class="category-item ">
                                <div class="cate-img ">
                                    <img src="store/images/category/icon-4.svg" alt=" ">
                                </div>
                                <h4 class="title_name">Stationary</h4>
                            </a>
                        </div>
                        <div class="item ">
                            <a href="product_category" class="category-item ">
                                <div class="cate-img ">
                                    <img src="store/images/category/icon-8.svg" alt=" ">
                                </div>
                                <h4 class="title_name">Deodorants & Perfumes</h4>
                            </a>
                        </div>
                        <div class="item ">
                            <a href="product_category" class="category-item ">
                                <div class="cate-img ">
                                    <img src="store/images/category/icon-9.svg" alt=" ">
                                </div>
                                <h4 class="title_name">Beauty Products</h4>
                            </a>
                        </div>
                        <div class="item ">
                            <a href="product_category" class="category-item ">
                                <div class="cate-img ">
                                    <img src="store/images/category/icon-10.svg" alt=" ">
                                </div>
                                <h4 class="title_name">Footwear</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories End -->
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
                        <a href="# " class="see-more-btn">See All</a>
                    </div>
                </div>
				<div class="col-md-12">
					<div class="owl-carousel featured-slider owl-theme">
                        @foreach ($featured as $item)
                            <div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="images/product/img-1.jpg" alt="">
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
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured Products End -->
    <!-- Best Values Offers Start -->
    <div class="section145">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title-tt">
                        <div class="main-title-left">
                            <span>Offers</span>
                            <h2>Best Values</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="best-offer-item">
                        <img src="images/offers/white-logo.jpg" alt=" ">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="best-offer-item">
                        <img src="images/offers/yes-we-are-open.jpg" alt=" ">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="best-offer-item offr-none">
                        <img src="images/offers/big-orrange-sale.jpg" alt=" ">
                        <div class="cmtk_dt">
                            <div class="product_countdown-timer offer-counter-text " data-countdown="2021/01/06"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12 ">
                    <a href="#" class="code-offer-item">
                        <img src="images/offers/bigsaleonglass.jpg" alt=" ">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Best Values Offers End -->
    <!-- Vegetables and Fruits Start -->
    <div class="section145">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title-tt">
                        <div class="main-title-left">
                            <span>For You</span>
                            <h2>Fresh Vegetables</h2>
                        </div>
                        <a href="#" class="see-more-btn">See All</a>
                    </div>
                </div>
                <div class="col-md-12 ">
                    <div class="owl-carousel featured-slider owl-theme ">
                       @foreach ($vegetables as $item)
                            <div class="item ">
                            <div class="product-item ">
                                <a href="/product/{{$item->id}}" class="product-img ">
                                    <img src="/storage/images/products/{{$item->prod_name}}.jpg" alt=" ">
                                    <div class="product-absolute-options ">
                                        <span class="offer-badge-1">
                                            @php
                                            $r_price = $item->r_price;
                                            $s_price = $item->s_price;
                                            $subtranct = $r_price - $s_price;
                                            $multi = 100;
                                            $percent_cal = ( $subtranct / $r_price ) * $multi;
                                            $numberAsString = number_format($percent_cal, 2);
                                            echo $numberAsString . " %";
                                            @endphp
                                        </span>
                                        <span class="like-icon " title="wishlist "></span>
                                    </div>
                                </a>
                                {{-- </a> --}}
                                <div class="product-text-dt ">
                                <a href="/product/{{$item->id}}" >
                                    <p>Available<span>(In Stock)</span></p>
                                    <h4 class="title_name">{{$item->prod_name}}</h4>
                                    @if($item->s_price = $item->r_price)
                                    <div class="product-price ">₹ {{$item->s_price}}</div>
                                    @else
                                    <div class="product-price ">₹ {{$item->s_price}}<span>₹ {{$item->r_price}}</span>
                                    </div>
                                    @endif
                                </a>
                                    <form action="{{route('customer.pages.cart.store')}}" method="POST">
                                    {{ csrf_field() }}
                                        <div class="qty-cart ">
                                            <div class="quantity buttons_added ">
                                                <input type="button " value="- " class="minus minus-btn ">
                                                <input type="number " step="1" name="quantity" value="1" class="input-text qty text ">
                                                <input type="button " value="+ " class="plus plus-btn ">
                                            </div>
                                            <div class="cart-icon-div ">
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
                                            </div>
                                        </div>
                                    </form>            
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vegetables and Fruits Products End -->
<!-- New Products Start -->
<div class="section145">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title-tt">
                    <div class="main-title-left">
                        <span>For You</span>
                        <h2>Added New Products</h2>
                    </div>
                    <a href="#" class="see-more-btn">See All</a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel featured-slider owl-theme">
                    @for ($i = 0; $i <=15; $i++) <div class="item">
                        <div class="product-item ">
                            <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html"
                                class="product-img">
                                <img src="store/images/product/img-10.jpg" alt=" ">
                                <div class="product-absolute-options">
                                    <span class="offer-badge-1">New</span>
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
                                        <input type="number" step="1 " name="quantity" value="1"
                                            class="input-text qty text">
                                        <input type="button" value="+" class="plus plus-btn">
                                    </div>
                                    <span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
                                </div>
                            </div>
                        </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>
</div>
<!-- New Products End -->
</div>








@endsection