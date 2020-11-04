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

    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('categories')
        ->where('category_name', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= ' <li><a href="#">' .$row->category.' </a> </li>';
      }
      $output .= '</ul>';
      echo $output;
     }
    }
}
