<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
=======
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class PageController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function all_services()
    {
        return view('store.pages.all_services');
    }

    public function homepage()
    {
        return view('store.pages.homepage');
    }

    public function single_product()
    {
        return view('store.pages.single_product');
    }

    public function single_service()
    {
        return view('store.pages.single_service');
    }
>>>>>>> Frontend_side
}
