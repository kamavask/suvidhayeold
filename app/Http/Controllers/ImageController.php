<?php

namespace App\Http\Controllers;

use App\Models\ProductImage;
use App\Models\Product;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Upload_Product_image_show($id)
    {
        $test = Product::where("id", $id)->first();
        return view('admin.pages.product_image.add_product_image')->with('product', $test);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Product_image_create(REQUEST $request)
    {
        /* * Validateing the Form 
        * making default image required
        * making regular validation on all other images
        * if statment to check if the img was selected on slot
        * store when if statment passes to /storage/app/public/product/images/
        */
        $request->validate(
            [
            'def_img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'Multi_File1' => 'image|mimes:jpeg,png,jpg|max:2048',
            'Multi_File2' => 'image|mimes:jpeg,png,jpg|max:2048',
            'Multi_File3' => 'image|mimes:jpeg,png,jpg|max:2048',
            'Multi_File4' => 'image|mimes:jpeg,png,jpg|max:2048',
            'Multi_File5' => 'image|mimes:jpeg,png,jpg|max:2048',
            'Multi_File6' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]
        );
        if ($request->file('def_img') != null) {
            $path1 = $request->file('def_img')->store('public/images/products');
        }
        if ($request->file('Multi_File1') != null) {
            $path2 = $request->file('Multi_File1')->store('public/images/products');
        }
        if ($request->file('Multi_File2') != null) {
            $path3 = $request->file('Multi_File2')->store('public/images/products');
        }
        if ($request->file('Multi_File3') != null) {
            $path4 = $request->file('Multi_File3')->store('public/images/products');
        }
        if ($request->file('Multi_File4') != null) {
            $path5 = $request->file('Multi_File4')->store('public/images/products');
        }
        if ($request->file('Multi_File5') != null) {
            $path6 = $request->file('Multi_File5')->store('public/images/products');
        }
        if ($request->file('Multi_File6') != null) {
            $path7 = $request->file('Multi_File6')->store('public/images/products');
        }
        /* * Insrting Path 
        * Storing Path Of Stored File in Product_images Table
        * if statment to check if the img was selected on slot
        * insert when if statment passes.
        */
        $prod_img = new ProductImage;
        if ($request->file('def_img') != null) {
            $prod_img->def_img      =   $path1;
        }
        if ($request->file('Multi_File1') != null) {
            $prod_img->multi_img1   =   $path2;
        }
        if ($request->file('Multi_File2') != null) {
            $prod_img->multi_img2   =   $path3;
        }
        if ($request->file('Multi_File3') != null) {
            $prod_img->multi_img3   =   $path4;
        }
        if ($request->file('Multi_File4') != null) {
            $prod_img->multi_img4   =   $path5;
        }
        if ($request->file('Multi_File5') != null) {
            $prod_img->multi_img5   =   $path6;
        }
        if ($request->file('Multi_File6') != null) {
            $prod_img->multi_img6   =   $path7; 
        }
        $prod_img->save();
        
        /* * Updating Image id
        * storing id of just uploaded in $inserted_id.
        * updating image_id to selected product data.
        */
        $inserted_id = $prod_img->id; 

        $prod_image_id_update = Product::find($request->id);
        $prod_image_id_update->image_id = $inserted_id; 
        $prod_image_id_update->save();   
        
        /* * Return to addproduct form
        * returning with sucess message.
        * updating image_id to selected product data.
        */
        return view('admin.pages.product.add_product')
            ->with(
                'success_message_with_img', 
                "Product Is Successfully Uploaded With Images. Great Work ;)"
            );
    }
}
