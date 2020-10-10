<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    /* Admin base Start */

    /**
     * Show the admin dashboard home page.
     */
    public function view_dashboard()
    {
        return view('admin.pages.index');
    }

    /* Admin base End */
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
