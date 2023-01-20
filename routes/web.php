<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RLRController;

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
Route::get('/rooms', [RoomController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);

Route::get('/rlr/top', [RLRController::class, 'top']);


Route::get('/rlr/register', [RLRController::class, 'register']);

Route::POST('/rlr/register/confirm',[RLRController::class, 'confirm']);

Route::get('/rlr/register/confirm/{user}',[RLRController::class, 'confirmUserInfo']);

Route::POST('/rlr/register/complete',[RLRController::class, 'complete']);

Route::get('/rlr/myPage', [RLRController::class, 'myPage']);
