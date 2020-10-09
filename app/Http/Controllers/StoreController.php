<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller

{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function all_services()
    {
        return view('store.pages.all_services');
    }

    public function homepage()
    {
        return view('store.pages.homepage');
    }

    public function single_product()
    {
        return view('store.pages.single_product');
    }

    public function single_service()
    {
        return view('store.pages.single_service');
    }
}
