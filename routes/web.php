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

Route::get('/', 'TeaController@main')->name('home');

Route::middleware('auth')->group(function () {
    //customers
    Route::get('/checkout', 'CheckOutController@index')->name('checkout');
});

Route::middleware('can:manage-users')->group(function(){
    //staff
    Route::get('/staff', 'TeaController@staffmain')->name('staffhome');

    Route::resource('/staff/orders', 'DisplayTeaController', ['except', ['create', 'store', 'edit', 'update', 'destroy']]);
    Route::resource('/staff/admins', 'UserController', ['except' => ['show', 'create', 'store'] ]);
});

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/sendOrder', 'MailController@send');
// Route::get('/test', 'HomeController@test');