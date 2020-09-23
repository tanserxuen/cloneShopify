<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//teas
Route::resource('teas', 'TeaController');

//orders
Route::resource('orders', 'OrderController');
Route::get('orders/getTea/{id}', 'OrderController@getTea');

// //List Articles
// Route::get('articles','ArticleController@index');

// //List single article
// Route::get('article/{id}','ArticleController@show');

// //Create new article
// Route::post('article','ArticleController@store');

// //Update articles
// Route::put('article', 'ArticleController@store');

// //Delete Article
// Route::delete('article/{id}','ArticleController@destroy');
