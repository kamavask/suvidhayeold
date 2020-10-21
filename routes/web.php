<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BulkUploadController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\Controller;
use Melihovv\ShoppingCart\Facades\ShoppingCart as Cart;
use App\Mail\WelcomeMail;

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

Route::get('/', function () {
    return view('store.pages.homepage');
});

Route::get('/emails', function () {
    return new WelcomeMail();
});

Route::middleware(['auth:sanctum', 'verified', 'can:access-dashboard'])->get('/dashboard', function () {
    return view('admin.pages.index');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified', 'can:access-dashboard'])->get('/old-dashboard', function () {
    return view('dashboard');
})->name('old-dashboard');

Route::middleware(['auth:sanctum', 'verified', 'can:view_home'])->get('/home', function () {
    return view('store.pages.homepage');
})->name('home');



Route::prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
    Route::resource('/users', UsersController::class)->except(['show', 'create', 'store']);
});


Route::resources([
    'product' => ProductController::class,
    'category' => CategoryController::class,
    'cart' => CartController::class,
]);

Route::get('empty', function () {
    Cart::destroy();
});

//Route::delete('cart/{product}', [CartController::class, 'destroy'])->name('cart.destroy');

route::get('/logout', [AuthController::class, 'logout']);

Route::get('bulk/category', [BulkUploadController::class, 'show_bulk_category']);

Route::post('bulk/category', [BulkUploadController::class, 'upload_bulk_category']);

Route::get('bulk/product', [BulkUploadController::class, 'show_bulk_product']);

Route::post('bulk/product', [BulkUploadController::class, 'upload_bulk_product']);
/* 
Route::get('/view_dashbord', [AdminPageController::class, 'view_dashboard']); */

Route::get('/view_dashboard', [AdminPageController::class, 'view_dashboard']);

/* STORE ROUTE START */
Route::get('all_services', [StoreController::class, 'all_services']);

Route::get('homepage', [StoreController::class, 'homepage']);

Route::get('single_product', [StoreController::class, 'single_product']);

Route::get('single_service', [StoreController::class, 'single_service']);

Route::get('prodtest', [Controller::class, 'test']);

Route::get('product_category', [Controller::class, 'product_category']);

Route::post('upload_prod_image', [ImageController::class, 'store_prod_images']);
/* STORE ROUTE END */