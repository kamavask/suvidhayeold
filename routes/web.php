<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\Controller;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/* Route::resource([
    'category' => CategoryController::class,
    'product' => ProductController::class,
]); */

Route::resources([
    'product' => ProductController::class,
    'category' => CategoryController::class,
]);

/* 
Route::get('/view_dashbord', [AdminPageController::class, 'view_dashboard']); */

Route::get('/view_dashboard', [AdminPageController::class, 'view_dashboard']);

/* STORE ROUTE START */
Route::get('all_services', [StoreController::class, 'all_services']);

Route::get('homepage', [StoreController::class, 'homepage']);

Route::get('single_product', [StoreController::class, 'single_product']);

Route::get('single_service', [StoreController::class, 'single_service']);

Route::get('prodtest', [Controller::class, 'product_test']);

Route::post('upload_prod_image', [ImageController::class, 'store_prod_images']);
/* STORE ROUTE END */