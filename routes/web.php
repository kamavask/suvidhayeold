<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
/* 
Route::get('/view_dashbord', [AdminPageController::class, 'view_dashboard']); */

Route::get('/view_dashbord', [AdminPageController::class, 'view_dashboard']);
