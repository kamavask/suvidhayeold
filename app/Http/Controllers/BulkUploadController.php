<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BulkUploadController extends Controller
{
    public function show_category()
    {
        return view('admin.pages.category.bulk_add');
    }


    public function upload_category(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required',
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }

        $file = $request->file('file');
        $csvData = file_get_contents($file);
        $rows = array_map('str_getcsv', explode("\n", $csvData));
        $header = array_shift($rows);

        foreach ($rows as $row) {
            $row = array_combine($header, $row);

            Category::create([
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
}
