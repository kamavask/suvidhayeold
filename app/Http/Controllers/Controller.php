<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
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

    /* public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $role = Auth::user()->role;

            switch ($role) {
                case 'admin':
                    return redirect('/homepage');
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
    } */

    public function add_product2()
    {
        return view('admin.pages.product.add_product2');
    }

    public function selectSearch(Request $request)
    {
        $movies = [];

        if ($request->has('q')) {
            $search = $request->q;
            $movies = Category::select("id", "name")
                ->where('name', 'LIKE', "%$search%")
                ->get();
        }
        return response()->json($movies);
    }

}



