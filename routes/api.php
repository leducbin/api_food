<?php

use Illuminate\Http\Request;

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

Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
Route::post('register', 'Auth\RegisterController@register');

Route::get('test',function()
{
	return view('welcome');
});
Route::group(['middleware' => 'token'], function() {
	Route::get('category', 'CategoryController@index');
    Route::get('category/{category}', 'CategoryController@show');
    Route::post('category', 'CategoryController@store');
    Route::put('category/{category}', 'CategoryController@update');
    Route::delete('category/{category}', 'CategoryController@delete');

    Route::get('category/{category}/food', 'FoodController@index');
    Route::get('category/{category}/food/{food}', 'FoodController@show');
    Route::post('category/{category}/food', 'FoodController@store');
    Route::put('category/{category}/food/{food}', 'FoodController@update');
    Route::delete('category/{category}/food/{food}', 'FategoryController@delete');

});