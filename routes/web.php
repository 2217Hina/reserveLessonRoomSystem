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
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', function () {
    return view('RLR/myPage');
});
});

require __DIR__.'/auth.php';



//ログイン画面からマイページに遷移
// Route::get('/', function () {
//     return view('RLR/myPage');
// });





//マイページからユーザー登録に遷移
Route::get('/rlr/register', [RLRController::class, 'register']);
//ユーザー情報登録
Route::POST('/rlr/register/confirm',[RLRController::class, 'confirm']);
Route::get('/rlr/register/confirm/{user}',[RLRController::class, 'confirmUserInfo']);
Route::POST('/rlr/register/complete',[RLRController::class, 'complete']);


//マイページから予約画面に遷移
Route::get('/rlr/reserve', [RLRController::class, 'reserveDate']);
//予約画面
Route::POST('/rlr/reserve/time', [RLRController::class, 'time']);
Route::POST('/rlr/reserve/room', [RLRController::class, 'room']);
Route::POST('/rlr/reserve/detail', [RLRController::class, 'detail']);
Route::POST('/rlr/reserve/confirm', [RLRController::class, 'reserve_confirm']);
Route::POST('/rlr/reserve/complete', [RLRController::class, 'reserve_complete']);


//マイページから予約履歴に遷移
Route::get('/rlr/history', [RLRController::class, 'history_all']);
//予約履歴表示・キャンセル
Route::delete('/rlr/history/cancel/{reserve}', [RLRController::class, 'cancel']);

//管理者画面（日付）
Route::get('/rlr/manage/date', [RLRController::class, 'manage_date']);
Route::POST('/rlr/manage/detail', [RLRController::class, 'manage_detail']);