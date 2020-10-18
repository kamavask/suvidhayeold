<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;
use App\Models\Flag;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public  function test()
    {
        //$features = Product::all();
        $flag = Flag::find(1);
        return view('test')->with('flag', $flag);
    }

    public  function product_category()
    {
        $product = Product::all();
        return view('store.pages.product_category')->with('product', $product);
    }

}
