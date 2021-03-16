<?php

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
Route::get('/clear_cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    return "All cache cleared";
});
Route::get('/cache_config_clear', function() {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    return "All cache cleared";
});
Route::get('/cache_clear', function() {
    Artisan::call('cache:clear');
});
Route::get('/view_cache', function() {
    Artisan::call('view:clear');
});
Route::get('/route_clear', function() {
    Artisan::call('route:clear');
});
Route::get('/config_cache', function() {
    Artisan::call('config:cache');
});


Auth::routes();

// Route::get('login2',  [App\Http\Controllers\Auth\LoginController::class, 'index']);

// Route::get('admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin')->middleware('Admin');
// Route::get('vendor', [App\Http\Controllers\HomeController::class, 'vendor'])->name('vendor')->middleware('vendor');
Route::get('/vendor/register', [App\Http\Controllers\vendor\VendorController::class, 'register']);
Route::post('/vendor/register', [App\Http\Controllers\vendor\VendorController::class, 'register_create']);


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product/{code}', [App\Http\Controllers\ProductController::class, 'index']);
Route::post('/product/review', [App\Http\Controllers\ProductController::class, 'review']);
Route::get('/category/{cat_id}/{subcategory_name}', [App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/term-and-conditions', [App\Http\Controllers\HomeController::class, 'term_and_conditions'])->name('term-and-conditions');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [App\Http\Controllers\HomeController::class, 'contact_submit']);


Route::group(['middleware' => ['auth']], function() {
    Route::get('/cart', [App\Http\Controllers\CartController::class, 'index']);
    Route::post('/add_cart', [App\Http\Controllers\CartController::class, 'add_cart'])->name('add_cart');
    Route::get('/cart_remove/{id}', [App\Http\Controllers\CartController::class, 'cart_remove']);
    Route::post('/cart_update', [App\Http\Controllers\CartController::class, 'cart_update']);
    Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index']);
    Route::post('/checkout_address_chake', [App\Http\Controllers\CheckoutController::class, 'checkout_address_chake'])->name('checkout_address_chake');
    Route::post('/Razorpay_payment', [App\Http\Controllers\PaymentController::class, 'Razorpay_payment'])->name('Razorpay_payment');
    Route::get('/payment_success', [App\Http\Controllers\PaymentController::class, 'payment_success']);
    Route::post('/payment_cod', [App\Http\Controllers\PaymentController::class, 'payment_cod'])->name('payment_cod');
    Route::get('/myaccount', [App\Http\Controllers\HomeController::class, 'myaccount'])->name('myaccount');
    Route::post('/myaccount', [App\Http\Controllers\HomeController::class, 'myaccount_update']);
    Route::get('/order-history', [App\Http\Controllers\OrderController::class, 'index']);
    Route::get('/change-password', [App\Http\Controllers\HomeController::class, 'change_password']);
    Route::post('/change_password', [App\Http\Controllers\HomeController::class, 'change_password_submit']);
    
});


Route::group(['middleware' => ['auth','vendor'],'prefix' => 'vendor'], function() {

Route::get('/vendor/profile', [App\Http\Controllers\vendor\VendorController::class, 'profile']);

Route::get('vendor', [App\Http\Controllers\HomeController::class, 'vendor'])->name('vendor');

Route::get('/product/list', [App\Http\Controllers\vendor\ProductController::class, 'index']);
Route::get('/product/create', [App\Http\Controllers\vendor\ProductController::class, 'create']);
Route::post('/product/add', [App\Http\Controllers\vendor\ProductController::class, 'add']);
Route::post('/product/delete', [App\Http\Controllers\vendor\ProductController::class, 'delete']);
Route::get('/product/view/{id}', [App\Http\Controllers\vendor\ProductController::class, 'view']);
Route::get('/product/edit/{id}', [App\Http\Controllers\vendor\ProductController::class, 'edit']);
Route::post('/product/update', [App\Http\Controllers\vendor\ProductController::class, 'update']);
Route::post('/product/img/delete', [App\Http\Controllers\vendor\ProductController::class, 'img_delete']);
Route::post('/product/img/add', [App\Http\Controllers\vendor\ProductController::class, 'img_add']);
Route::get('/subcategories/{id}', [App\Http\Controllers\vendor\ProductController::class, 'subcategories']);
// Route::get('/sub_types/{id}', [App\Http\Controllers\vendor\ProductController::class, 'sub_types']);
Route::get('/product_data', [App\Http\Controllers\vendor\ProductController::class, 'product_data'])->name('product_data');

});

// Route::get('admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin')->middleware('Admin');

Route::get('admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin')->middleware('Admin');

Route::group(['middleware' => ['auth','Admin'],'prefix' => 'admin'], function() {

Route::get('categories', [App\Http\Controllers\Admin\CategoriesController::class, 'index']);
Route::get('categories_data', [App\Http\Controllers\Admin\CategoriesController::class, 'categories_data'])->name('categories_data');
Route::post('categories_delete', [App\Http\Controllers\Admin\CategoriesController::class, 'categories_delete']);
Route::get('categories/create', [App\Http\Controllers\Admin\CategoriesController::class, 'create']);
Route::post('categories/add', [App\Http\Controllers\Admin\CategoriesController::class, 'add']);
Route::get('categories/edit/{id}', [App\Http\Controllers\Admin\CategoriesController::class, 'edit']);
Route::post('categories/update', [App\Http\Controllers\Admin\CategoriesController::class, 'update']);


Route::get('categories/subcategories/{id}', [App\Http\Controllers\Admin\SubcategoriesController::class, 'index']);
Route::get('categories/subcategories', [App\Http\Controllers\Admin\SubcategoriesController::class, 'index']);
Route::get('Subcategory_data/{id}', [App\Http\Controllers\Admin\SubcategoriesController::class, 'Subcategory_data']);
Route::get('/categories/subcategories/create/{id}', [App\Http\Controllers\Admin\SubcategoriesController::class, 'create']);
Route::post('/categories/subcategories/add', [App\Http\Controllers\Admin\SubcategoriesController::class, 'add']);
Route::post('/categories/subcategories/delete', [App\Http\Controllers\Admin\SubcategoriesController::class, 'delete']);
Route::get('/categories/subcategories/edit/{id}', [App\Http\Controllers\Admin\SubcategoriesController::class, 'edit']);
Route::post('/categories/subcategories/update', [App\Http\Controllers\Admin\SubcategoriesController::class, 'update']);

Route::get('/product', [App\Http\Controllers\Admin\ProductsController::class, 'index']);
Route::get('/all_product', [App\Http\Controllers\Admin\ProductsController::class, 'all_product'])->name('all_product');
Route::get('/product/subcategories/{id}', [App\Http\Controllers\Admin\ProductsController::class, 'subcategories']);
Route::get('/product/create', [App\Http\Controllers\Admin\ProductsController::class, 'create']);
Route::post('/product/add', [App\Http\Controllers\Admin\ProductsController::class, 'add']);
Route::post('/product/delete', [App\Http\Controllers\Admin\ProductsController::class, 'delete']);
Route::get('/product/view/{id}', [App\Http\Controllers\Admin\ProductsController::class, 'view']);
Route::get('/product/edit/{id}', [App\Http\Controllers\Admin\ProductsController::class, 'edit']);
Route::post('/product/update', [App\Http\Controllers\Admin\ProductsController::class, 'update']);
Route::post('/product/img/delete', [App\Http\Controllers\Admin\ProductsController::class, 'img_delete']);
Route::post('/product/img/add', [App\Http\Controllers\Admin\ProductsController::class, 'img_add']);
Route::get('/product/update_status/{id}/{status}', [App\Http\Controllers\Admin\ProductsController::class, 'update_status']);
Route::get('/product/update_verify/{id}/{status}', [App\Http\Controllers\Admin\ProductsController::class, 'update_verify']);

Route::get('/product/review', [App\Http\Controllers\Admin\ProductReviewcontroller::class, 'index']);

Route::get('/banners', [App\Http\Controllers\Admin\BannerController::class, 'index']);
Route::get('/banners_data', [App\Http\Controllers\Admin\BannerController::class, 'banners_data'])->name('banners_data');
Route::get('/banners/create', [App\Http\Controllers\Admin\BannerController::class, 'create']);
Route::post('/banners/add', [App\Http\Controllers\Admin\BannerController::class, 'add']);
Route::post('/banners/delete', [App\Http\Controllers\Admin\BannerController::class, 'delete']);
Route::get('/banners/edit/{id}', [App\Http\Controllers\Admin\BannerController::class, 'edit']);
Route::post('/banners/update', [App\Http\Controllers\Admin\BannerController::class, 'update']);

});
