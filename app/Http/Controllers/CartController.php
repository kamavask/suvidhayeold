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
       return redirect()->route('customer.pages.cart.show', ['cart' => $user_id]);
       //return redirect('/customer/pages/cart/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'quantity' => $request->get('quantity'),
        ]);
        return back()->with('success_message', "Item is added to your cart");
        /* return redirect()->route('home')->with('success_message', "Item is added to your cart"); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cart_item = User::find($id)->Product_cart;
        $cart_item_cout = $cart_item->count();

        if ($cart_item_cout == 0) {
            
            return view('store.pages.cart_blank');
        
        } elseif ($cart_item_cout >= 1) {

            $sale_price_cal =\ DB::select(
                \ DB::raw(
                    "select sc.*,p.s_price from shopping_cart as 
                    sc inner join products as 
                    p on p.id = sc.product_id where sc.user_id=".$id.""
                )
            );

            $real_price_cal =\ DB::select(
                \ DB::raw(
                    "select sc.*,p.r_price from shopping_cart as 
                    sc inner join products as 
                    p on p.id = sc.product_id where sc.user_id=".$id.""
                )
            );

            $sale_total_array =array();
            foreach ($sale_price_cal as  $p) {
                $total_perproduct =$p->quantity * $p->s_price;
                $sale_total_array[]=$total_perproduct;
            }

            $s_total = array_sum($sale_total_array);

            $real_total_array =array();
            foreach ($real_price_cal as  $p) {
                $total_perproduct = $p->quantity * $p->r_price;
                $real_total_array[]=$total_perproduct;
            }

            $r_total = array_sum($real_total_array);

            $discount = $r_total - $s_total;


            if ($s_total>= 700) {
                $delivery_charge = 0 ;
            } elseif ($s_total< 700 &&  $s_total> 500 ) {
                $delivery_charge = 15; 
            } elseif ($s_total< 500  && $s_total> 400) {
                $delivery_charge = 30; 
            } elseif ($s_total> 0 && $s_total< 400) {
                $delivery_charge = 60; 
            }

            $f_total = $s_total + $delivery_charge;

            $cal_data = array('delivery_charge' => $delivery_charge, 'discount' => $discount, 'f_total' => $f_total, 'r_total' => $r_total);
            
            return view('store.pages.cart')
                ->with('cart', $cart_item)->with('cal_data', $cal_data );
        }
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
