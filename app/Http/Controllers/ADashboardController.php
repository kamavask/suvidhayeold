<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ADashboardController extends Controller
{
    public function show_index()
    {
        return view('admin.pages.index');
    }

    public function test_add_product()
    {
        return view('admin.pages.product.test_add_product');
    }
}
