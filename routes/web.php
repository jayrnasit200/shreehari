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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin')->middleware('Admin');
// Route::get('vendor', [App\Http\Controllers\HomeController::class, 'vendor'])->name('vendor')->middleware('vendor');
Route::get('/vendor/register', [App\Http\Controllers\vendor\VendorController::class, 'register']);
Route::post('/vendor/register', [App\Http\Controllers\vendor\VendorController::class, 'register_create']);



Route::middleware('vendor')->group(function () {
Route::get('/vendor/profile', [App\Http\Controllers\vendor\VendorController::class, 'profile']);

Route::get('vendor', [App\Http\Controllers\HomeController::class, 'vendor'])->name('vendor');
Route::get('/product/type/list', [App\Http\Controllers\vendor\type\TypeController::class, 'index']);
Route::get('/product/type/create', [App\Http\Controllers\vendor\type\TypeController::class, 'create']);
Route::post('/product/type/add', [App\Http\Controllers\vendor\type\TypeController::class, 'add']);
Route::get('/product/type/delete/{id}', [App\Http\Controllers\vendor\type\TypeController::class, 'delete']);
Route::get('/product/type/edit/{id}', [App\Http\Controllers\vendor\type\TypeController::class, 'edit']);
Route::post('/product/type/update', [App\Http\Controllers\vendor\type\TypeController::class, 'update']);

Route::get('/product/type/sub_type/{id}', [App\Http\Controllers\vendor\SubTypeController::class, 'index']);
Route::get('/product/type/sub_type/create/{id}', [App\Http\Controllers\vendor\SubTypeController::class, 'create']);
Route::post('/product/type/sub_type/add', [App\Http\Controllers\vendor\SubTypeController::class, 'add']);
Route::get('/product/type/sub_type_list/delete/{id}', [App\Http\Controllers\vendor\SubTypeController::class, 'delete']);
Route::get('/product/type/sub_type_list/edit/{id}', [App\Http\Controllers\vendor\SubTypeController::class, 'edit']);
Route::post('/product/type/sub_type/update', [App\Http\Controllers\vendor\SubTypeController::class, 'update']);

Route::get('/product/list', [App\Http\Controllers\vendor\ProductController::class, 'index']);
Route::get('/product/create', [App\Http\Controllers\vendor\ProductController::class, 'create']);
Route::post('/product/add', [App\Http\Controllers\vendor\ProductController::class, 'add']);
Route::get('/subcategories/{id}', [App\Http\Controllers\vendor\ProductController::class, 'subcategories']);
Route::get('/sub_types/{id}', [App\Http\Controllers\vendor\ProductController::class, 'sub_types']);
Route::get('/product_data', [App\Http\Controllers\vendor\ProductController::class, 'product_data'])->name('product_data');

});

// Route::get('admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin')->middleware('Admin');

// Route::get('admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin')->middleware('Admin');

Route::group(['middleware' => ['auth','Admin'],'prefix' => 'admin'], function() {
Route::get('test', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');

});