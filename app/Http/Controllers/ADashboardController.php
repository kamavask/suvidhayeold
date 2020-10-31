<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ADashboardController extends Controller
{
    public function show_index()
    {
        return view('admin.pages.index');
    }
}
