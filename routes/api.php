<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

Route::get('/users', \App\Http\Controllers\UsersController::class);
Route::get('/countries', [ExampleController::class, 'index']);

Route::post('/create','App\Http\Controllers\MainController@create')->name('create');
Route::patch('/update/{id}','App\Http\Controllers\MainController@update');



