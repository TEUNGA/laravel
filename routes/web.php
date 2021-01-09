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
Route::get('/', function () {
    return view('welcome');
});


Route::get('/','App\Http\Controllers\HomeController@date');
//Route::get('/about','App\Http\Controllers\HomeController@about');
Route::get('/services','App\Http\Controllers\HomeController@service');
Route::get('/create_service', 'App\Http\Controllers\TaskController@create');
Route::get('/edit_service/{id}', 'App\Http\Controllers\TaskController@edit');
Route::post('/service/{id}/edit', 'App\Http\Controllers\TaskController@edit');
Route::post('/service/{id}', 'App\Http\Controllers\TaskController@update');
Route::get('/create_class', 'App\Http\Controllers\TaskController@newcreate');
Route::resource('/service', 'App\Http\Controllers\TaskController');
Route::get('/details','App\Http\Controllers\HomeController@details');





