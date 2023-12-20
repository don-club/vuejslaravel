<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','App\Http\Controllers\MainController@index')->name('home');
Route::get('/create_page','App\Http\Controllers\MainController@add')->name('add');
Route::get('/update/{id}','App\Http\Controllers\MainController@update_component');
Route::get('/delete/{id}','App\Http\Controllers\MainController@delete');

