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
        return view('admin.pages.add_product');
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
        $prod->Product_Name = $req->prod_name;
        $prod->Virtuals = $req->virtual;
        $prod->Downloadable = $req->downloadable;
        $prod->Image_ID = $req->image_id;
        $prod->Highlights = $req->highlights;
        $prod->Short_Desc = $req->s_desc;
        $prod->Specifications = $req->specification;
        $prod->Brand = $req->brand;
        $prod->Weights = $req->weight;
        $prod->Sizes = $req->size;
        $prod->Dimensions = $req->dimension;
        $prod->Category_ID = $req->cat_id;
        $prod->Varient_ID = $req->varient_id;
        $prod->Regular_Price = $req->r_price;
        $prod->Sales_Price = $req->s_price;
        $prod->Tax_ID = $req->tax_id;
        $prod->Shipping_ID = $req->shippin_id;
        $prod->SKU = $req->sku;
        $prod->Stock = $req->stock;
        $prod->Stock_Alert = $req->stock_alert;
        $prod->Backorder_Options = $req->backorder;
        $prod->Bulk_Order = $req->bulk_no;
        $prod->Tags = $req->tags;
        $emp->save();
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
