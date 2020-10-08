<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /* ADMIN */

    public function add_category()
    {
        return view('admin.pages.add_category');
    }

    public function add_coupons()
    {
        return view('admin.pages.add_coupons');
    }

    public function add_customer()
    {
        return view('admin.pages.add_customer');
    }

    public function add_deliveryman()
    {
        return view('admin.pages.add_deliveryman');
    }

    public function add_employee()
    {
        return view('admin.pages.add_employee');
    }

    public function add_product()
    {
        return view('admin.pages.add_product');
    }

    public function add_serviceman()
    {
        return view('admin.pages.add_serviceman');
    }

    public function add_services()
    {
        return view('admin.pages.add_services');
    }

    public function add_vendors()
    {
        return view('admin.pages.add_vendors');
    }

    public function add_order()
    {
        return view('admin.pages.add_order');
    }
    public function add_offer()
    {
        return view('admin.pages.add_offer');
    }

    public function index()
    {
        return view('admin.pages.index');
    }
    /* ADMIN */


    public function show_category()
    {
        return view('admin.pages.show_category');
    }

    public function show_coupon()
    {
        return view('admin.pages.show_coupon');
    }

    public function show_deliveryman()
    {
        return view('admin.pages.show_deliveryman');
    }

    public function show_order()
    {
        return view('admin.pages.show_order');
    }

    public function show_offer()
    {
        return view('admin.pages.show_offer');
    }

    public function show_product()
    {
        return view('admin.pages.show_product');
    }

    public function show_servicemen()
    {
        return view('admin.pages.show_servicemen');
    }

    public function show_service()
    {
        return view('admin.pages.show_service');
    }

    public function show_vendor()
    {
        return view('admin.pages.show_vendor');
    }
}
