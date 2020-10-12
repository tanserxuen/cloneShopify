<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Middleware\CheckAuth;

Route::get('/', 'TeaController@main')->name('home');

Route::middleware('auth')->group(function () {
    //customers
    Route::get('/checkout', 'CheckOutController@index')->name('checkout');
});

Route::middleware('can:manage-users')->group(function(){
    //staff
    Route::get('/staff', 'TeaController@staffmain')->name('staffhome');
    Route::prefix('/staff')->group(function(){
        Route::resource('/orders', 'DisplayTeaController', ['only'=> ['index', 'show'] ]);
        Route::resource('/admins', 'UserController', ['except' => ['show', 'create', 'store'] ]);
    });
});

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/sendOrder', 'MailController@send');
// Route::get('/test', 'HomeController@test');


Route::group(['namespace' => 'authh'], function (){
    Route::get('/loginn', 'LoginnController@loginn');
    Route::get('/registerr', 'RegisterrController@registerr');
    Route::get('/fgtpwd', 'FgtpwdController@fgtpwd');
    Route::get('/conf', 'LoginnController@checkAuth');
    Route::put('/reset', 'FgtpwdController@reset');
    Route::post('/store', 'RegisterrController@store');
    // Route::group(['middleware' => 'CheckAuth'], function(){
    Route::middleware(['CheckAuth'])->group(function(){
        // Route::resource('/registerr', 'authh\RegisterrController@registerr', ['only'=> ['store'] ]);
        Route::post('/logoutt', 'LoginnController@logout');
    });
});

Route::view('/test','test')->middleware('CheckAuth');
// Route::get('/test', function () {
//     session('logged_in');
// })-;