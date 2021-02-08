<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsupplierController;

use App\Http\Controllers\cammandgestion;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/supplier/add', [SupplierController::class, 'add']);
Route::post('/supplier/save', [SupplierController::class, 'store']);
Route::get('/supplier/showall', [SupplierController::class, 'showAll']);
Route::get('/supplier/{id}/more', [SupplierController::class, 'showMore']);
Route::get('/supplier/delete/{id}', [SupplierController::class, 'destroy']);
Route::post('/supplier/update/{id}', [SupplierController::class, 'update']);



Route::get('/Product/add', [ProductController::class, 'add']);
Route::post('/product/save', [ProductController::class, 'store']);
Route::get('/Product/showall', [ProductController::class, 'showAll']);
Route::get('/Product/{id}/more', [ProductController::class, 'showMore']);
Route::get('/product/delete/{id}', [ProductController::class, 'destroy']);
Route::post('/product/update/{id}', [ProductController::class, 'update']);

Route::get('/stock/showall', [ProductsupplierController::class, 'showAll']);
Route::get('/stock/add', [ProductsupplierController::class, 'add']);
Route::post('/stock/save', [ProductsupplierController::class, 'store']);
Route::get('/stock/delete/{id}', [ProductsupplierController::class, 'destroy']);

Route::get('/command/new', [cammandgestion::class, 'new']);

Route::post('/command/destination', [cammandgestion::class, 'saveDestination']);
Route::get('/command/detail' , [cammandgestion::class, 'CommandDetail' ]);
Route::post('/command/orderd_by' , [cammandgestion::class, 'saveOrderd' ]);
Route::post('/command/save' , [cammandgestion::class, 'store' ]);
