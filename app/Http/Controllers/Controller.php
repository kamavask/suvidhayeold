<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public  function product_test()
    {
        $prod = Product::all();
        return view('test')->with('prod', $prod);
    }

    public  function product_category()
    {
        $product = Product::all();
        return view('store.pages.product_category')->with('product', $product);
    }

}
