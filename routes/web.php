<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bus\ItemController;
use App\Http\Controllers\Bus\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

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
