<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TopDataController;
use App\Http\Controllers\DataOrderController;
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

Route::group(['middleware' => ['auth']], function () {

    Route::get('customers/store', [CustomerController::class, 'store']);
    Route::get('customers/list', [CustomerController::class, 'list']);
    Route::get('customers/destroy/{id}', [CustomerController::class, 'destroy']);
    Route::get('customers/edit/{id}', [CustomerController::class, 'edit']);
    Route::get('customers/update/{id}', [CustomerController::class, 'update']);
    Route::resource('customers', CustomerController::class)->except(['show'])->parameters(['customers' => 'customers']);

    Route::get('top_data/top_product', [TopDataController::class, 'top_product'])->name('top_product');
    Route::get('top_data/top_customer', [TopDataController::class, 'top_customer'])->name('top_customer');
    Route::get('top_data/top_agents', [TopDataController::class, 'top_agents'])->name('top_agents');

    Route::get('data_order', [DataOrderController::class, 'index'])->name('data_order');
});
