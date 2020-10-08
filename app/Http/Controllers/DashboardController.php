<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Service;
use App\Models\Description;

class DashboardController extends Controller
{
    public function store_product(Request $req)
    {
        $prod = new Product;
        $prod->prod_Name = $req->prod_name;
        $prod->highlights = $req->highlight;
        $prod->short_des = $req->short_desc;
        $prod->brand = $req->brand;
        $prod->specifications = $req->specification;
        //$prod->providers = $req->Product6;
        $prod->weight = $req->weight;
        $prod->size = $req->size;
        $prod->dimensions = $req->dimensions;
        $prod->category_id = $req->cat_id;
        //$prod->variant_id = $req->variant_id;
        $prod->r_Price = $req->r_price;
        $prod->s_Price = $req->s_price;
        $prod->tax_id = $req->tax_id;
        $prod->shipping_id = $req->shipping_id;
        $prod->sku = $req->sku;
        //$prod->vendor_code = $req->Product17;
        $prod->stock = $req->stock;
        $prod->stock_alert = $req->stock_alert;
        $prod->backorder = $req->backorder;
        $prod->bulk_no = $req->bulk_no;
        $prod->tags = $req->tags;
        $prod->save();
    }

    public function store_service(Request $req)
    {
        $data = new Service;
        $data->service_name = $req->service_name;
        $data->category_id = $req->category_ID;
        $data->highlights = $req->high;
        $data->short_des = $req->short_desc;
        $data->long_des = $req->long_desc;
        $data->specifications = $req->speci;
        $data->duration = $req->duration;
        $data->save();
    }

    public function store_description(Request $req)
    {
        $desc = new Description;
        $desc->content1 = $req->content1;
        $desc->content2 = $req->content2;
        $desc->content3 = $req->content3;
        $desc->content4 = $req->content4;
        $desc->content5 = $req->content5;
        $desc->images1 = $req->image1;
        $desc->images2 = $req->image2;
        $desc->images3 = $req->image3;
        $desc->images4 = $req->image4;
        $desc->images5 = $req->image5;
        $desc->save();
    }
}
