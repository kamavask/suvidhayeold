<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BulkUploadController extends Controller
{
    public function show_category()
    {
        return view('admin.pages.category.bulk_add');
    }
}
