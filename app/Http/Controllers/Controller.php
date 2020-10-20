<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;
use App\Models\Flag;
use App\Models\Role;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public  function test()
    {
        //$features = Product::all();
        $flag = flag::find(1)->Product;
        return view('test')->with('featured',  $flag);
    }

    public  function product_category()
    {
        $product = Product::all();
        $prod_random = $product->shuffle()
        return view('store.pages.product_category')->with('product', $prod_random);
    }

}
