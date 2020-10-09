<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.add_product');
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
        $prod = new Product;
        $prod->prod_Name = $request->prod_name;
        $prod->highlights = $request->highlight;
        $prod->short_des = $request->short_desc;
        $prod->brand = $request->specification;
        //$prod->providers = $req->Product6;
        $prod->weight = $request->weight;
        $prod->size = $request->size;
        $prod->dimensions = $request->dimensions;
        $prod->category_id = $request->cat_id;
        $prod->variant_id = $request->variant_id;
        $prod->r_Price = $request->r_price;
        $prod->s_Price = $request->s_price;
        $prod->tax_id = $request->tax_id;
        $prod->shipping_id = $request->shipping_id;
        $prod->sku = $request->sku;
        //$prod->vendor_code = $req->Product17;
        $prod->stock = $request->stock;
        $prod->stock_alert = $request->stock_alert;
        $prod->backorder = $request->backorder;
        $prod->bulk_no = $request->bulk_no;
        $prod->tags = $request->tags;
        $prod->save();

        return view('admin.pages.product_images');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * @param  \Illuminate\Http\Request  $req
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prod_update = Product::all()->find($id);

        $prod_update->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
