<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;


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
Route::get('add_category', [Controller::class, 'add_category']);

Route::get('add_cupons', [Controller::class, 'add_cupons']);

Route::get('add_customer', [Controller::class, 'add_customer']);

Route::get('add_deliveryman', [Controller::class, 'add_deliveryman']);

Route::get('add_employee', [Controller::class, 'add_employee']);

Route::get('add_product', [Controller::class, 'add_product']);

Route::get('add_serviceman', [Controller::class, 'add_serviceman']);

Route::get('add_services', [Controller::class, 'add_services']);

Route::get('add_vendors', [Controller::class, 'add_vendors']);

Route::get('index', [Controller::class, 'index']);
/* ADMIN */

/* STORE */
Route::get('all_services', [PageController::class, 'all_services']);


Route::get('single_product', [PageController::class, 'single_product']);

Route::get('single_service', [PageController::class, 'single_service']);
/* STORE */