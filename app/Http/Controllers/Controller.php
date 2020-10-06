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

    public function add_cupons()
    {
        return view('admin.pages.add_cupons');
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

    public function index()
    {
        return view('admin.pages.index');
    }
    /* ADMIN */

   
}
