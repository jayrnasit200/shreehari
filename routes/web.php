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

Route::get('vendor', [App\Http\Controllers\HomeController::class, 'vendor'])->name('vendor');
Route::get('/product/type/list', [App\Http\Controllers\vendor\type\TypeController::class, 'index']);
Route::get('/product/type/create', [App\Http\Controllers\vendor\type\TypeController::class, 'create']);
Route::post('/product/type/add', [App\Http\Controllers\vendor\type\TypeController::class, 'add']);
Route::get('/product/type/delete/{id}', [App\Http\Controllers\vendor\type\TypeController::class, 'delete']);
Route::get('/product/type/edit/{id}', [App\Http\Controllers\vendor\type\TypeController::class, 'edit']);
Route::post('/product/type/update', [App\Http\Controllers\vendor\type\TypeController::class, 'update']);

Route::get('/product', [App\Http\Controllers\vendor\CategoryController::class, 'index']);


});

Route::middleware('Admin')->group(function () {

Route::get('admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');

});