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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Users

Route::get('users', "App\Http\Controllers\UsersController@index");
Route::post('user/register', "App\Http\Controllers\UsersController@store");
Route::patch('user/{user}', "App\Http\Controllers\UsersController@update");
Route::delete('user/{user}', "App\Http\Controllers\UsersController@remove");
