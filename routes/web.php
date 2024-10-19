<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\MessageController;
use App\Http\Controllers\DashboardsController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardsController::class, 'index']);
Route::resource('messages', MessageController::class);

Route::get('index', [DashboardsController::class, 'index']);