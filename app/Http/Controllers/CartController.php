<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ShoppingCart;
use App\Models\User;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     * For a route with the following URI: profile/{id}
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $user_id = Auth::user()->id;
       return redirect()->route('/customer/pages/cart', $user_id);
       //return redirect('/customer/pages/cart/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ShoppingCart::updateOrCreate([
            'user_id' => Auth::user()->id,
            'product_id' => $request->get('prod_id'),
        ]);

        return redirect()->route('home')->with('success_message', "Item is added to your cart");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);
        // $cartitem = ShoppingCart::where('user_id', $id)->get();
        $cartitem = User::find($id)->Product_cart;
        ($cartitem);
        return Redirect::back()->with('cart', $cartitem);
       /*  return view('store.pages.cart'/* , compact('cartitem') */)->with('cart', $cartitem); */

        //$flag = flag::find(1)->Product;
        //return view('cart')->compact('cartitem');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
