<?php

namespace App\Http\Controllers;

use App\Models\ProductImage;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store_prod_images(REQUEST $request)
    {
        $path1 = $request->file('def_img')->store('public');
        /* $path2 = $request->file('multi1')->store('public');
        $path3 = $request->file('multi2')->store('public');
        $path4 = $request->file('multi3')->store('public');
        $path5 = $request->file('multi4')->store('public');
        $path6 = $request->file('multi5')->store('public');
        $path7 = $request->file('multi6')->store('public');
 */

        $prod_img = new ProductImage;

        $prod_img->def_img = $path1;
        /* $prod_img->multi_img1 = $path2;
        $prod_img->multi_img2 = $path3;
        $prod_img->multi_img3 = $path4;
        $prod_img->multi_img4 = $path5;
        $prod_img->multi_img5 = $path6;
        $prod_img->multi_img6 = $path7; */
        $prod_img->save();
    }
}
