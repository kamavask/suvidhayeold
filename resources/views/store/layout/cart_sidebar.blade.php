<!-- Cart Sidebar Offset Start-->
<div class="bs-canvas bs-canvas-left position-fixed bg-cart h-100">
    <div class="bs-canvas-header side-cart-header p-3 ">
        <div class="d-inline-block  main-cart-title">My Cart <span>(2 Items)</span></div>
        <button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
    </div>
    <div>
        @if(session()->has('success_messgae'))
        <div class="alert alert-success">
            {{ session()->get('success_message') }}
        </div>
        @endif

        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(Cart::count() > 0)

        <h2>{{Cart::count() }} item(s) in Shopping Cart</h2>

    </div>
    <div class="bs-canvas-body">
        <div class="cart-top-total">
            <div class="cart-total-dil">
                <h4>Gambo Super Market</h4>
                <span>$34</span>
            </div>
            <div class="cart-total-dil pt-2">
                <h4>Delivery Charges</h4>
                <span>$1</span>
            </div>
        </div>
        <div class="side-cart-items">
            <div class="cart-item">
                <div class="cart-product-img">
                    <img src="store/images/product/img-1.jpg" alt="">
                    <div class="offer-badge">6% OFF</div>
                </div>
                <div class="cart-text">
                    <h4>Product Title Here</h4>
                    <div class="cart-radio">
                        <ul class="kggrm-now">
                            <li>
                                <input type="radio" id="a1" name="cart1">
                                <label for="a1">0.50</label>
                            </li>
                            <li>
                                <input type="radio" id="a2" name="cart1">
                                <label for="a2">1kg</label>
                            </li>
                            <li>
                                <input type="radio" id="a3" name="cart1">
                                <label for="a3">2kg</label>
                            </li>
                            <li>
                                <input type="radio" id="a4" name="cart1">
                                <label for="a4">3kg</label>
                            </li>
                        </ul>
                    </div>
                    <div class="qty-group">
                        <div class="quantity buttons_added">
                            <input type="button" value="-" class="minus minus-btn">
                            <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                            <input type="button" value="+" class="plus plus-btn">
                        </div>
                        <div class="cart-item-price">$10 <span>$15</span></div>
                    </div>
                    <form action="{{route('cart.destroy',$item->rowId) }}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
                    </form>
                </div>
            </div>
            <div class="cart-item">
                <div class="cart-product-img">
                    <img src="store/images/product/img-2.jpg" alt="">
                    <div class="offer-badge">6% OFF</div>
                </div>
                <div class="cart-text">
                    <h4>Product Title Here</h4>
                    <div class="cart-radio">
                        <ul class="kggrm-now">
                            <li>
                                <input type="radio" id="a5" name="cart2">
                                <label for="a5">0.50</label>
                            </li>
                            <li>
                                <input type="radio" id="a6" name="cart2">
                                <label for="a6">1kg</label>
                            </li>
                            <li>
                                <input type="radio" id="a7" name="cart2">
                                <label for="a7">2kg</label>
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
                    <button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="bs-canvas-footer">
        <div class="cart-total-dil saving-total ">
            <h4>Subtotal</h4>
            <span>{{Cart::subtotal()}}</span>
            <span>{{Cart::tax()}}</span>
        </div>
        <div class="main-total-cart">
            <h2>Total</h2>
            <span>{{Cart::total()}}</span>
        </div>
        <div class="checkout-cart">
            <a href="#" class="promo-code">Have a promocode?</a>
            <a href="#" class="cart-checkout-btn hover-btn">Proceed to Checkout</a>
        </div>
    </div>

    @else

    <h3>No items in the Cart !</h3>
    <div class="spacer"></div>
    <a href="{{ route('shop.index')}}">Continue Shopping</a>
</div>
<!-- Cart Sidebar Offsetl End-->