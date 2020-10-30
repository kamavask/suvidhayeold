@extends('store.layout.app')
@section('content')

<div class="wrapper">
    <!--<div class="gambo-Breadcrumb">
            <div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Checkout</li>
							</ol>
						</nav>
					</div>
				</div>
			</div> 
        </div>-->
    <div class="all-product-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    @if(Cart::count()>0)
                    <h2>{{Cart::count()}} item(s) in Shopping Cart</h2>
                    <div class="pdpt-bg mt-0">
                        <div class="pdpt-title">
                            <h4>Order Summary</h4>
                        </div>
                        <div class="right-cart-dt-body">
                            @foreach(Cart::content() as $item)
                            <?php
                            var_dump(Cart::content());
                            ?>
                            <div class="cart-product-img">
                                <div class="cart-item border_radius" style="border-bottom: 1px solid #e5e5e5;">
                                    <img src="images/product/img-11.jpg" alt="">
                                    {{-- <div class="offer-badge">4% OFF</div> --}}
                                    <div style="text-align: center; padding-top: 10px;">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1"
                                                class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                            <button
                                                style="border: none; background: none; margin-left: 30px;padding: 10px; font-size: 16px; ">Save
                                                For Later</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="cart-text">
                                    <h2>$item->prod_name</h2>
                                    {{-- <p>Delivery by Fri Oct 23 | Free₹40</p> --}}
                                    <!-- <div class="cart-item-price">Delivery by Fri Oct 23 | Free₹40
																					<span>$18</span></div> -->
                                    <button type="button" class="cart-close-btn"><i
                                            class="uil uil-multiply"></i></button>
                                    <div class="cart-item-price">

                                        <div class="cart-item-price">$item->s_price{{-- <span>$15</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="pdpt-bg mt-0">
                        <div class="pdpt-title">
                            <h4>Cart total</h4>
                        </div>
                        <div class="total-checkout-group">
                            <div class="cart-total-dil">
                                <h4>Gambo Super Market</h4>
                                <span>$15</span>
                            </div>
                            <div class="cart-total-dil pt-3">
                                <h4>Delivery Charges</h4>
                                <span>$1</span>
                            </div>
                        </div>
                        <div class="cart-total-dil saving-total ">
                            <h4>Total Saving</h4>
                            <span>$3</span>
                        </div>
                        <div class="main-total-cart">
                            <h2>Total</h2>
                            <span>$16</span>
                        </div>
                        <div class="payment-secure">
                            <button class="payment-secure-btn">
                                <i class="uil uil-padlock"></i>Secure checkout
                            </button>
                        </div>
                    </div>
                    <a href="#" class="promo-link45">Have a promocode?</a>
                    <div class="checkout-safety-alerts">
                        <p><i class="uil uil-sync"></i>100% Replacement Guarantee</p>
                        <p><i class="uil uil-check-square"></i>100% Genuine Products</p>
                        <p><i class="uil uil-shield-check"></i>Secure Payments</p>
                    </div>
                </div>
                @else
                <h3>No items in the cart !</h3>
                @endif
            </div>
            {{var_dump($cart)}}
        </div>
    </div>
</div>

@endsection