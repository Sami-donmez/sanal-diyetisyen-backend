<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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



Auth::routes(['register' => false]);


Route::middleware(['auth'])->group(function (){
    Route::get('/','App\Http\Controllers\Admin\CurrencyController@index')->name('admin.dashboard');
    Route::get('/detay/{id}','App\Http\Controllers\Admin\CurrencyController@detail')->name('admin.detail');
    Route::post('/detay/{id}','App\Http\Controllers\Admin\CurrencyController@update')->name('admin.detail.post');
    Route::get('/cikis','App\Http\Controllers\Admin\CurrencyController@logout');
});

Route::get('/cron','App\Http\Controllers\Admin\CurrencyController@cron');

