<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ADashboardController extends Controller
{
    public function show_dashboard()
    {
        return view('admin.pages.dashboard');
    }

    public function show_prod_edit_choice()
    {
        return view('admin.pages.product.show_edit_product');
    }

    public function show_edit_page(Request $request)
    {
        $request->validate(['prod_id' => 'required',]);

        return redirect()->route('admin.pages.product.edit', [$request->prod_id]);

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
