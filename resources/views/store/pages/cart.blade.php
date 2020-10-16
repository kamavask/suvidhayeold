@extends('store.layout.app')
@section('content')

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