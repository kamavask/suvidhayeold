<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller

{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function()
    {
        return view('store.pages.all_services');
    }

    public function()
    {
        return view('store.pages.homepage');
    }

    public function()
    {
        return view('store.pages.single_product');
    }

    public function()
    {
        return view('store.pages.single_service');
    }
}
