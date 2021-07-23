<?php

use App\Http\Controllers\TicketController;
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
    return view('index');
});
Auth::routes();

Route::resource('/tickets', TicketController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/bookinglist', [App\Http\Controllers\AdminController::class, 'bookinglist']);
Route::get('/customer', [App\Http\Controllers\AdminController::class, 'customer']);
Route::get('/ticketsetup', [App\Http\Controllers\AdminController::class, 'ticketsetup']);
