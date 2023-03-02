<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bus\ItemController;
use App\Http\Controllers\Bus\CategoryController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChangePassController;
use App\Http\Controllers\RechargeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\CheckLogged;
use App\Http\Middleware\CheckLogin;

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

Route::GET('home', [HomeController::class, 'index'])->name('home');

Route::middleware([CheckLogged::class])->group(function () {
    Route::POST('register', [RegisterController::class, 'register'])->name('register');
    Route::POST('login', [LoginController::class, 'login'])->name('login');
});

Route::middleware([CheckLogin::class])->group(function () {
    Route::GET('logout', [LoginController::class, 'logout'])->name('logout');

    Route::GET('recharge', [RechargeController::class, 'recharge'])->name('recharge');
    Route::POST('recharge-prs', [RechargeController::class, 'rechargePrs'])->name('rechargePrs');
    Route::GET('repassword', [ChangePassController::class, 'repass'])->name('repass');
    Route::POST('repassword', [ChangePassController::class, 'updatePass'])->name('updatePass');
    Route::GET('info', [ManagerController::class, 'info'])->name('info');
    Route::GET('notification', [ManagerController::class, 'notification'])->name('notification');
    Route::GET('withdraw-items', [ManagerController::class, 'withdrawItems'])->name('withdrawItems');
    Route::GET('voucher', [ManagerController::class, 'voucher'])->name('voucher');
    Route::GET('history/game', [ManagerController::class, 'historyGame'])->name('historyGame');
    Route::GET('history/add_card', [ManagerController::class, 'historyAddCard'])->name('historyAddCard');
    Route::GET('history/recharge', [ManagerController::class, 'historyRecharge'])->name('historyRecharge');
    Route::GET('history/transaction', [ManagerController::class, 'historyTransaction'])->name('historyTransaction');
    Route::GET('history/buy_items', [ManagerController::class, 'historyItems'])->name('historyItems');
    Route::GET('history/buy_nick', [ManagerController::class, 'historyBuyNick'])->name('historyBuyNick');
    Route::GET('history/service', [ManagerController::class, 'historyService'])->name('historyService');
});


                                            //  Admin
//bus
Route::resource('bus-item', ItemController::class);
Route::resource('bus-category', CategoryController::class);

//driver
Route::resource('driver-item', \App\Http\Controllers\Driver\ItemController::class);
Route::resource('driver-category', \App\Http\Controllers\Driver\CategoryController::class);

//garage
Route::resource('garage-item', \App\Http\Controllers\Garage\ItemController::class);
Route::resource('garage-category', \App\Http\Controllers\Garage\CategoryController::class);

//recharge
Route::resource('recharge-auto', \App\Http\Controllers\Recharge\AutoController::class);
Route::resource('recharge-statistical', \App\Http\Controllers\Recharge\StatisticalController::class);

//user
Route::resource('user', \App\Http\Controllers\User\UserController::class);
Route::get('trashed', [\App\Http\Controllers\User\TrashedController::class, 'index'])->name('trashed.index');
Route::get('/trashed/restore/{id}', [\App\Http\Controllers\User\TrashedController::class, 'restore'])->name('trashed.restore');
// Route::delete('/trashed/force-delete/{id}', [\App\Http\Controllers\User\TrashedController::class,'forceDelete'])->name('trashed.force-delete');
Route::get('/trashed/restore-all', [\App\Http\Controllers\User\TrashedController::class, 'restoreAll'])->name('trashed.restore-all');
