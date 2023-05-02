<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;

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

// Route::get('/', function () {
//     return view('template.main');
// });

//route dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dash');

//route customer
Route::resource('customer', CustomerController::class);
//route delete customer
Route::get('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');




