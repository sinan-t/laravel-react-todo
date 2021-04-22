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

Route::get('todos', 'TodoController@getAll');
Route::get('todos/{id}', 'TodoController@getById');
Route::post('todos', 'TodoController@add');
Route::put('todos/{id}', 'TodoController@changeStatus');
Route::delete('todos/{id}', 'TodoController@removeById');
