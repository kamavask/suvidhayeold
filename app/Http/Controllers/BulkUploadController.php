<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;

class BulkUploadController extends Controller
{
    public function show_bulk_category()
    {
        return view('admin.pages.category.bulk_add');
    }


    public function upload_bulk_category(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $file = $request->file('file');
        $csvData = file_get_contents($file);
        $rows = array_map('str_getcsv', explode("\n", $csvData));
        $header = array_shift($rows);

        foreach ($rows as $row) {
            $row = array_combine($header, $row);

            Category::create([
                'id' => $row['id'],

                'category_name' => $row['category_name'],
                //'category_desc' => $row['category_desc'],
                'category_type' => $row['category_type'],
                'slug' => $row['slug'],
                //'tags' => $row['tags'],
                'pent_cat_id' => $row['pent_cat_id']
                //'created_at' => $row['created_at'],
                //'updated_at' => $row['updated_at'],
            ]);
        }


        flash('Category Inserted');
        return redirect()->back();
    }

    public function show_bulk_product()
    {
        return view('admin.pages.product.bulk_add');
    }


    public function upload_bulk_product(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $file = $request->file('file');
        $csvData = file_get_contents($file);
        $rows = array_map('str_getcsv', explode("\n", $csvData));
        $header = array_shift($rows);

        foreach ($rows as $row) {
            $row = array_combine($header, $row);

            Product::create([
                ///* 'id' => $row['id'], */
                //'prod_code' => $row['prod_code'],
                'prod_name' => $row['prod_name'],
                //'category_id' => $row['category_id'],
                'brand'    => $row['brand'],
                'highlight'    => $row['highlight'],
                'short_description'    => $row['short_description'],
                //'specification'    => $row['specification'],
                //'image_id' => $row['image_id'],
                //'dimensions' => $row['dimensions'],
                'weight' => $row['weight'],
                //'size' => $row['size'],
                //'virtual' => $row['virtual'],
                //'downloadable' => $row['downloadable'],
                'r_price' => $row['r_price'],
                's_price' => $row['s_price'],
                //'variant_id' => $row['variant_id'],
                'sku' => $row['sku'],
                'stock' => $row['stock'],
                'stock_alert' => $row['stock_alert'],
                'backorder'    => $row['backorder'],
                //'tax_id' => $row['tax_id'],
                //'shipping_id' => $row['shipping_id'],
                //'bulk_order_no'    => $row['bulk_order_no'],
                'tags' => $row['tags']
                //'created_at' => $row['created_at'],
                //'updated_at' => $row['updated_at'],


            ]);
        }


        flash('Product Inserted');
        return redirect()->back();
    }
}
