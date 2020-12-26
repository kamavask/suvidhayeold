<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\ADashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BulkUploadController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SearchController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;


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
    return view('store.pages.homepage');
}); */

Route::get('/', [StoreController::class, 'user_homepage'])->name('home');

Route::get('/homepage', [StoreController::class, 'homepage'])->name('home');

/* Route::get('/user_homepage', [StoreController::class, 'user_homepage'])->name('home'); */


/* Route::get('/emails', function () {
    Mail::to('kgmavask@gmail.com')->send(new WelcomeMail());
    return "Mail sent successfully";
}); */
/* 
Route::middleware(['auth:sanctum', 'verified'])->get('/home', [AdminPageController::class], 'checkauth')->name('home'); */

Route::get('/home', function () {
    return redirect('/');
});



Route::middleware(['auth:sanctum', 'verified', 'can:access-dashboard'])->get('/old-dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('/admin/pages')->name('admin.pages.')
    ->middleware('auth:sanctum', 'verified', 'can:access-dashboard')
    ->group(
        function (){

        Route::get('/admin-dashboard', [ADashboardController::class, 'show_dashboard']);

        Route::post('/show/product/edit_by_id', [ADashboardController::class, 'show_dashboard']);;

        Route::get('/product/show/edit/choices', [ADashboardController::class, 'show_prod_edit_choice']);

        Route::get('/Product_Image/create/show/{id}', 
            [ImageController::class, 'Upload_Product_image_show']
        )->name('productImage.create.show');
        Route::post('/productImage/create', 
            [ImageController::class, 'Product_image_create']
        );
        Route::get('/test_add_product', [ADashboardController::class, 'test_add_product']);

        Route::post('/autocomplete/fetch', [ADashboardController::class, 'fetch'])->name('autocomplete.fetch');
        
        Route::resources([
            'product' => ProductController::class,
            'category' => CategoryController::class,
        ]);
    });

Route::prefix('/customer/pages')->name('customer.pages.')
    ->middleware('auth:sanctum', 'verified')
    ->group(function () {
        Route::resource('cart', CartController::class,);
        Route::resource('product', ProductController::class)->only(['show']);

    });


/* Route::middleware(['auth:sanctum', 'verified', 'can:view_home'])->get('/home', function () {
    return view('store.pages.homepage');
})->name('home'); */



/* Route::prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
    Route::resource('/users', UsersController::class)->except(['show', 'create', 'store']);
}); */
Route::resource('category', CategoryController::class)->only(['show']);

Route::resource('product', ProductController::class)->only(['show']);

/* Route::resource('cart', CartController::class)->names([
    'cart' => 'cart.index'
]);
 */


//Route::delete('cart/{product}', [CartController::class, 'destroy'])->name('cart.destroy');

route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('bulk/category', [BulkUploadController::class, 'show_bulk_category']);

Route::post('bulk/category', [BulkUploadController::class, 'upload_bulk_category']);

Route::get('bulk/product', [BulkUploadController::class, 'show_bulk_product']);

Route::post('bulk/product', [BulkUploadController::class, 'upload_bulk_product']);
/* 
Route::get('/view_dashbord', [AdminPageController::class, 'view_dashboard']); */

Route::get('/view_dashboard', [AdminPageController::class, 'view_dashboard']);

Route::get('/add_cupon', [AdminPageController::class, 'add_cupon']);

Route::get('/add_customer', [AdminPageController::class, 'add_customer']);

Route::get('/add_deliverymen', [AdminPageController::class, 'add_deliverymen']);

Route::get('/add_employee', [AdminPageController::class, 'add_employee']);

Route::get('/add_offer', [AdminPageController::class, 'add_offer']);

Route::get('/add_order', [AdminPageController::class, 'add_order']);

Route::get('/add_product2', [Controller::class, 'add_product2']);
Route::get('/ajax-autocomplete-search', [Controller::class, 'selectSearch']);

Route::get('/add_services', [AdminPageController::class, 'add_services']);



/* STORE ROUTE START */
Route::get('all_services', [StoreController::class, 'all_services']);

Route::get('homepage', [StoreController::class, 'homepage']);

Route::get('single_product', [StoreController::class, 'single_product']);

Route::get('single_service', [StoreController::class, 'single_service']);

Route::get('prodtest', [Controller::class, 'test']);

Route::get('searchtest', [Controller::class, 'search_test']);

Route::get('product_category', [Controller::class, 'product_category']);

Route::post('upload_prod_image', [ImageController::class, 'store_prod_images']);

Route::get('/main_public_search', [SearchController::class, 'main_public_search'])->name('main_public_search');

Route::get('search', [SearchController::class, 'search']);

Route::get('autocomplete', [SearchController::class, 'autocomplete'])->name('autocomplete');
/* STORE ROUTE END */

Route::get('/edit', 'ProductController@edit');

Route::post('/edit', 'ProductController@update');

