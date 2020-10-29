<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function checkauth()
    {
        //$user = Auth::user();
        return view('store.pages.homepage');
    }

    public function add_cupon()
    {
        return view('admin.pages.add_cupon');
    }

    public function add_customer()
    {
        return view('admin.pages.add_customer');
    }

    public function add_deliverymen()
    {
        return view('admin.pages.add_deliverymen');
    }

    public function add_employee()
    {
        return view('admin.pages.add_employee');
    }

    public function add_offer()
    {
        return view('admin.pages.add_offer');
    }

    public function add_order()
    {
        return view('admin.pages.add_order');
    }

    public function add_servicemen()
    {
        return view('admin.pages.add_servicemen');
    }

    public function add_services()
    {
        return view('admin.pages.add_services');
    }
}
