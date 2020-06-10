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


//Colocando um nome pro group, e um nome padrão pras rotas dentro dela
Route::namespace('Api')->group(function() {
    Route::prefix('/users')->group(function(){
        Route::get('/', 'UserController@index')->name('index_api_user');
        Route::get('/{id}', 'UserController@show')->name('show_api_user');
        Route::post('/', 'RegisterController@store')->name('create_api_user');
        Route::put('/{id}', 'UserController@update')->name('update_api_user');
        Route::delete('/{id}', 'UserController@delete')->name('delete_api_user');
    });
});