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

Route::get('/me','App\Http\Controllers\Api\UserController@me');
Route::get('/food','App\Http\Controllers\Api\FoodController@index');
Route::post('/food','App\Http\Controllers\Api\FoodController@add');
Route::post('/food/{food}','App\Http\Controllers\Api\FoodController@update');
Route::post('/food/{food}/delete','App\Http\Controllers\Api\FoodController@delete');
Route::get('/water','App\Http\Controllers\Api\WaterController@index');
Route::post('/water','App\Http\Controllers\Api\WaterController@add');
Route::post('/water','App\Http\Controllers\Api\WaterController@update');
Route::get('/sport','App\Http\Controllers\Api\SportController@index');
Route::post('/sport','App\Http\Controllers\Api\SportController@add');
Route::post('/sport/{sport}','App\Http\Controllers\Api\SportController@update');
Route::post('/sport/{sport}/delete','App\Http\Controllers\Api\SportController@delete');