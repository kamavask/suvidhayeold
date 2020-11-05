<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_products = Product::paginate(20);
        return view('admin.pages.product.show_product')->with('show_prod', $all_products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.product.add_product');
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
        if ($prod->prod_name != null) {
            $prod->prod_name = $request->prod_name;
        }
        if ($prod->virtual != null) {
            $prod->virtual = $request->virtual;
        }
        if ($prod->downloadable != null) {
            $prod->downloadable = $request->downloadable;
        }
        if ($prod->image_id != null) {
            $prod->image_id = $request->image_id;
        }
        if ($prod->highlight != null) {
            $prod->highlight = $request->highlight;
        }
        if ($prod->short_desc != null) {
            $prod->short_description = $request->short_desc;
        }
        if ($prod->specification != null) {
            $prod->specification = $request->specification;
        }
        if ($prod->brand != null) {
            $prod->brand = $request->brand;
        }
        if ($prod->weight != null) {
            $prod->weight = $request->weight;
        }
        if ($prod->size != null) {
            $prod->size = $request->size;
        }
        if ($prod->dimensions != null) {
            $prod->dimensions = $request->dimensions;
        }
        if ($prod->cat_id != null) {
            $prod->category_id = $request->cat_id;
        }
        if ($prod->varient_id != null) {
            $prod->varient_id = $request->varient_id;
        }
        if ($prod->r_price != null) {
            $prod->r_price = $request->r_price;
        }
        if ($prod->s_price != null) {
            $prod->s_price = $request->s_price;
        }
        if ($prod->tax_id != null) {
            $prod->tax_id = $request->tax_id;
        }
        if ($prod->shipping_id != null) {
            $prod->shipping_id = $request->shipping_id;
        }
        if ($prod->sku != null) {
            $prod->sku = $request->sku;
        }
        if ($prod->stock != null) {
            $prod->stock = $request->stock;
        }
        if ($prod->stock_alert != null) {
            $prod->stock_alert = $request->stock_alert;
        }
        if ($prod->backorder != null) {
            $prod->backorder = $request->backorder;
        }
        if ($prod->bulk_no != null) {
            $prod->bulk_order_no = $request->bulk_no;
        }
        if ($prod->tags != null) {
            $prod->tags = $request->tags;
        }
        $prod->save();

        $product = $prod;  

        return view('admin.pages.product.add_product') ->with('product', $product) ;
  }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $prod = $product;
        return view('store.pages.single_product')
            ->with('product', $prod);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $prod = Product::find($id);
        return view('admin.pages.category.edit_product', ['data' =>$data]);
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
       /*  $this->validate($request, [
            'prod_name' => 'required',
            'virtual' => 'required',
            'downloadable' => 'required',
            'image_id' => 'required',
            'highlights' => 'required',
            'short_desc' => 'required',
            'specification' => 'required',
            'brand' => 'required',
            'weight' => 'required',
            'size' => 'required',
            'dimensions' => 'required',
            'cat_id' => 'required',
            'varient_id' => 'required',
            'r_price' => 'required',
            's_price' => 'required',
            'tax_id' => 'required',
            'shipping_id' => 'required',
            'sku' => 'required',
            'stock' => 'required',
            'stock_alert' => 'required',
            'backorder' => 'required',
            'bulk_no' => 'required',
            'tags' => 'required'
        ]);
        $prod = Product::find(request ->id);
        $prod->prod_name = $request->get('prod_name');
        $prod->virtual = $request->get('virtual');
        $prod->downloadable = $request->get('downloadable');
        $prod->image_id = $request->get('image_id');
        $prod->highlight = $request->get('highlight');
        $prod->short_description = $request->get('short_desc');
        $prod->specification = $request->get('specification');
        $prod->brand = $request->get('brand');
        $prod->weight = $request->get('weight');
        $prod->size = $request->get('size'); 
        $prod->dimensions = $request->get('dimensions');
        $prod->category_id = $request->get('cat_id');
        $prod->variant_id = $request->get('variant_id'); 
        $prod->r_price = $request->get('r_price');
        $prod->s_price = $request->get('s_price');
        $prod->tax_id = $request->get('tax_id');
        $prod->shipping_id = $request->get('shipping_id'); 
        $prod->sku = $request->get('sku');
        $prod->stock = $request->get('stock');
        $prod->stock_alert = $request->get('stock_alert');
        $prod->backorder = $request->get('backorder');
        $prod->bulk_order_no = $request->get('bulk_no');
        $prod->tags = $request->get('tags');
        $prod->save();
        return redirect()->route('admin.pages.product.add_product')->with('success', 'Data Updated'); */
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
