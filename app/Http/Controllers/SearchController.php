<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class SearchController extends Controller
{

    public function main_public_search(Request $request)
    {
        $data = Product::select("prod_name")
            ->where("prod_name", "LIKE", "%{$request->terms}%")
            ->get();

        return response()->json($data);
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $category = Category::where('category_name', 'LIKE', '%' . $search_text . '%')->get();

        // dd($products);
        return view('store.pages.product_category', compact('category'));
    }
}
