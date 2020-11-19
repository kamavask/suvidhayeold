<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
        /* $prod_random = $product->shuffle(); */
        return view('store.pages.product_category')->with('category', $product);
    }

    public function search_test()
    {
        return view('search-test');
    }

    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $role = Auth::user()->role;

            switch ($role) {
                case 'admin':
                    return redirect('/admin_homepage');
                    break;
                case 'customer':
                    return redirect('/user_homepage');
                    break;

                default:
                    return redirect('/user_homepage');
                    break;
            }
        }
        return $next($request);
    }

}



