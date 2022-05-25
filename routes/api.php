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

// Users
Route::get('/users', [\App\Http\Controllers\Api\UserController::class, 'index']);
Route::get('/users/{user}', [\App\Http\Controllers\Api\UserController::class, 'show']);

// Cars
Route::get('/cars', [\App\Http\Controllers\Api\CarController::class, 'index']);
Route::get('/cars/{car}', [\App\Http\Controllers\Api\CarController::class, 'show']);