<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [PageController::class, 'homepage']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/* ADMIN */

Route::get('index', [Controller::class, 'index']);

Route::get('add_coupons', [Controller::class, 'add_coupons']);

Route::get('add_customer', [Controller::class, 'add_customer']);

Route::get('add_deliveryman', [Controller::class, 'add_deliveryman']);

Route::get('add_employee', [Controller::class, 'add_employee']);

);

/* ADMIN */

/* STORE */



/* order start */

Route::get('/add_order', [PageController::class, 'add_order']);
Route::get('/show_order', [PageController::class, 'show_order']);

/* order end */

/* offer start */

Route::get('/add_offer', [PageController::class, 'add_offer']);
Route::get('/show_offer', [PageController::class, 'show_offer']);

/* offer end */

Route::get('/add_taxes', [PageController::class, 'add_taxes']);

Route::get('/add_shipping_class', [PageController::class, 'add_shipping_class']);

/* Vendor Start */

Route::get('add_vendors', [Controller::class, 'add_vendors']
Route::get('/show_vendor', [PageController::class, 'show_vendor']);

/* Vendor End */

Route::get('/show_deliveryman', [PageController::class, 'show_deliveryman']);





Route::get('/show_coupon', [PageController::class, 'show_coupon']);

/* ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- */

/*  Category Start */

Route::get('/show_category', [PageController::class, 'show_category']);

<<<<<<< HEAD
Route::get('add_category', [Controller::class, 'add_category']);

/*  Category End */

/*  Products Start */

        /* ADMIN */

Route::get('add_product', [Controller::class, 'add_product']);

Route::get('/show_product', [PageController::class, 'show_product']);

        /* Store */

Route::get('single_product', [PageController::class, 'single_product']);

/*  Products End */

/*  Services Start */

        /* ADMIN */


Route::get('add_services', [Controller::class, 'add_services']);

Route::get('all_services', [PageController::class, 'all_services']);

Route::get('single_service', [PageController::class, 'single_service']);

Route::get('/show_service', [PageController::class, 'show_service']);


/*  Services End */


Route::get('add_serviceman', [Controller::class, 'add_serviceman']);
Route::get('/show_servicemen', [PageController::class, 'show_servicemen']);



=======
/* Resource ProductController  */

Route::name('product.')->group(function () {
    Route::resource('/product_dashboard', ProductController::class)->except(['show', 'create']);
});;
>>>>>>> 3b2c8fa70fa97b8790e450fac5672ab611f093df
