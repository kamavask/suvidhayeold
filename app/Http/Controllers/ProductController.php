<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('admin.pages.add_product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.add_product');
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
        $prod->prod_name = $request->prod_name;
        $prod->virtual = $request->virtual;
        $prod->downloadable = $request->downloadable;
        $prod->image_id = $request->image_id;
        $prod->highlight = $request->highlight;
        $prod->short_description = $request->short_desc;
        $prod->specification = $request->specification;
        $prod->brand = $request->brand;
        $prod->weight = $request->weight;
        $prod->size = $request->size;
        $prod->dimensions = $request->dimension;
        $prod->category_id = $request->cat_id;
        $prod->variant_id = $request->variant_id;
        $prod->r_price = $request->r_price;
        $prod->s_price = $request->s_price;
        $prod->tax_id = $request->tax_id;
        $prod->shipping_id = $request->shipping_id;
        $prod->sku = $request->sku;
        $prod->stock = $request->stock;
        $prod->stock_alert = $request->stock_alert;
        $prod->backorder = $request->backorder;
        $prod->bulk_order_no = $request->bulk_no;
        $prod->tags = $request->tags;
        $prod->save();

        $product = $prod;

        return view('admin.pages.product_images')/* ->with('product', $product) */; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {/* 
        $product = Product::where('id', $product)-first();
        return view('store.pages.single_product'); */
        dd($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
