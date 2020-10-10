<?php

namespace App\Http\Controllers;

use App\Models\ProductImage;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store_prod_images(REQUEST $request)
    {
        $prod_img = new ProductImage;
        $prod_img->def_img = $request->file('');
        $prod_img->multi_img1 = $request->file('');
        $prod_img->multi_img2 = $request->file('');
        $prod_img->multi_img3 = $request->file('');
        $prod_img->multi_img4 = $request->file('');
        $prod_img->multi_img5 = $request->file('');
        $prod_img->multi_img6 = $request->file('');
    }
}
