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


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin')->middleware('Admin');
// Route::get('vendor', [App\Http\Controllers\HomeController::class, 'vendor'])->name('vendor')->middleware('vendor');
Route::get('/vendor/register', [App\Http\Controllers\vendor\VendorController::class, 'register']);
Route::post('/vendor/register', [App\Http\Controllers\vendor\VendorController::class, 'register_create']);



Route::middleware('vendor')->group(function () {
Route::get('/vendor/profile', [App\Http\Controllers\vendor\VendorController::class, 'profile']);

Route::get('vendor', [App\Http\Controllers\HomeController::class, 'vendor'])->name('vendor');
// Route::get('/product/type/list', [App\Http\Controllers\vendor\type\TypeController::class, 'index']);
// Route::get('/product/type/create', [App\Http\Controllers\vendor\type\TypeController::class, 'create']);
// Route::post('/product/type/add', [App\Http\Controllers\vendor\type\TypeController::class, 'add']);
// Route::get('/product/type/delete/{id}', [App\Http\Controllers\vendor\type\TypeController::class, 'delete']);
// Route::get('/product/type/edit/{id}', [App\Http\Controllers\vendor\type\TypeController::class, 'edit']);
// Route::post('/product/type/update', [App\Http\Controllers\vendor\type\TypeController::class, 'update']);

// Route::get('/product/type/sub_type/{id}', [App\Http\Controllers\vendor\SubTypeController::class, 'index']);
// Route::get('/product/type/sub_type/create/{id}', [App\Http\Controllers\vendor\SubTypeController::class, 'create']);
// Route::post('/product/type/sub_type/add', [App\Http\Controllers\vendor\SubTypeController::class, 'add']);
// Route::get('/product/type/sub_type_list/delete/{id}', [App\Http\Controllers\vendor\SubTypeController::class, 'delete']);
// Route::get('/product/type/sub_type_list/edit/{id}', [App\Http\Controllers\vendor\SubTypeController::class, 'edit']);
// Route::post('/product/type/sub_type/update', [App\Http\Controllers\vendor\SubTypeController::class, 'update']);

Route::get('/product/list', [App\Http\Controllers\vendor\ProductController::class, 'index']);
Route::get('/product/create', [App\Http\Controllers\vendor\ProductController::class, 'create']);
Route::post('/product/add', [App\Http\Controllers\vendor\ProductController::class, 'add']);
Route::get('/subcategories/{id}', [App\Http\Controllers\vendor\ProductController::class, 'subcategories']);
Route::get('/sub_types/{id}', [App\Http\Controllers\vendor\ProductController::class, 'sub_types']);
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

});
