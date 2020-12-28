<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function show_cart(Request $request)
    {
        ShoppingCart::updateOrCreate([
            'user_id' => Auth::user()->id,
            'product_id' => $request->get('prod_id'),
            'quantity' => $request->get('quantity'),
        ]);
        return view('store.pages.cart')->with('cart', $cart_item);;
        /* return redirect()->route('home')->with('success_message', "Item is added to your cart"); */
    }
}
