<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flag;


class StoreController extends Controller

{
    

    public function all_services()
    {
        return view('store.pages.all_services');
    }

    public function homepage()
    {
        $flag = flag::find(1)->Product;
        return view('store.pages.homepage')->with('featured',  $flag);
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
