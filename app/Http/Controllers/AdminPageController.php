<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    /*  taxes Start */

        public function create()
        {
            //
        }

    /*  taxes end */

    /*  shipping Start */

    public function show_shipping_class()
    {
        return view('admin.pages.show_shipping_class');
    }

    /*  shipping End */

    /*  provider Start */


    
    /*  provider End */

    /*  descriptin Start */

    public function description()
    {
        return view('admin.pages.description');
    }

    /*  descriptin Start */


}
