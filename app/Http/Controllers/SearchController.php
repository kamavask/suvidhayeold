<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    
    public function main_public_search(Request $request)
    {
        $data = Product::select("prod_name")
            ->where("prod_name", "LIKE", "%{{$request->terms}}%")
            ->get();
        
            return response()->json($data);
    }
}
