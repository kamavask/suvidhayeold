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

    public function admin_homepage()
    {
        $flag = flag::find(1)->Product;
        return view('store.pages.homepage')->with('featured',  $flag);
    }

    public function user_homepage()
    {
       
        return view('store.pages.user_homepage');
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
