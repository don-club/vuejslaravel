<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

Route::get('/users', \App\Http\Controllers\UsersController::class);
Route::get('/examples', [ExampleController::class, 'index']);

