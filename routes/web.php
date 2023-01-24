<?php

use App\Http\Controllers\ProfileController;
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

//Breeze
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



//ログイン画面からマイページに遷移
Route::get('/rlr/myPage', function () {
    return view('RLR/myPage');
});



//マイページから予約画面に遷移
Route::get('/rlr/reserve', [RLRController::class, 'reserve']);
//マイページから予約履歴に遷移
Route::get('/rlr/history', [RLRController::class, 'history']);
//マイページからユーザー登録に遷移
Route::get('/rlr/register', [RLRController::class, 'register']);


//ユーザー情報登録
Route::POST('/rlr/register/confirm',[RLRController::class, 'confirm']);
Route::get('/rlr/register/confirm/{user}',[RLRController::class, 'confirmUserInfo']);
Route::POST('/rlr/register/complete',[RLRController::class, 'complete']);
