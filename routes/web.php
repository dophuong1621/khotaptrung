<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bus\ItemController;
use App\Http\Controllers\Bus\CategoryController;
use App\Http\Controllers\ManagerController;

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

Route::get('/', [ManagerController::class, 'home'])->name('home');

Route::GET('recharge', [ManagerController::class, 'recharge'])->name('recharge');
Route::GET('repassword', [ManagerController::class, 'repass'])->name('repass');
Route::GET('info', [ManagerController::class, 'info'])->name('info');
Route::GET('notification', [ManagerController::class, 'notification'])->name('notification');
Route::GET('withdraw-items', [ManagerController::class, 'withdrawItems'])->name('withdrawItems');
Route::GET('voucher', [ManagerController::class, 'voucher'])->name('voucher');
Route::GET('history/game', [ManagerController::class, 'historyGame'])->name('historyGame');
Route::GET('history/add_card', [ManagerController::class, 'historyAddCard'])->name('historyAddCard');
Route::GET('history/transaction', [ManagerController::class, 'historyTransaction'])->name('historyTransaction');
Route::GET('history/items', [ManagerController::class, 'historyItems'])->name('historyItems');
Route::GET('history/service', [ManagerController::class, 'historyService'])->name('historyService');

//bus
Route::resource('bus-item', ItemController::class);
Route::resource('bus-category', CategoryController::class);

//driver
Route::resource('driver-item', \App\Http\Controllers\Driver\ItemController::class);
Route::resource('driver-category', \App\Http\Controllers\Driver\CategoryController::class);

//garage
Route::resource('garage-item', \App\Http\Controllers\Garage\ItemController::class);
Route::resource('garage-category', \App\Http\Controllers\Garage\CategoryController::class);

//user
Route::resource('user', \App\Http\Controllers\User\UserController::class);
Route::get('trashed', [\App\Http\Controllers\User\TrashedController::class,'index'])->name('trashed.index');
Route::get('/trashed/restore/{id}', [\App\Http\Controllers\User\TrashedController::class,'restore'])->name('trashed.restore');
// Route::delete('/trashed/force-delete/{id}', [\App\Http\Controllers\User\TrashedController::class,'forceDelete'])->name('trashed.force-delete');
Route::get('/trashed/restore-all', [\App\Http\Controllers\User\TrashedController::class,'restoreAll'])->name('trashed.restore-all');
