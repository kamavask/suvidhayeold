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
        $prod->Product_Name = $request->prod_name;
        $prod->Virtuals = $request->virtual;
        $prod->Downloadable = $request->downloadable;
        $prod->Image_ID = $request->image_id;
        $prod->Highlights = $request->highlights;
        $prod->Short_Desc = $request->s_desc;
        $prod->Specifications = $request->specification;
        $prod->Brand = $request->brand;
        $prod->Weights = $request->weight;
        $prod->Sizes = $request->size;
        $prod->Dimensions = $request->dimension;
        $prod->Category_ID = $request->cat_id;
        $prod->Varient_ID = $request->varient_id;
        $prod->Regular_Price = $request->r_price;
        $prod->Sales_Price = $request->s_price;
        $prod->Tax_ID = $request->tax_id;
        $prod->Shipping_ID = $request->shippin_id;
        $prod->SKU = $request->sku;
        $prod->Stock = $request->stock;
        $prod->Stock_Alert = $request->stock_alert;
        $prod->Backorder_Options = $request->backorder;
        $prod->Bulk_Order = $request->bulk_no;
        $prod->Tags = $request->tags;
        $prod->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.pages.show_product');
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
