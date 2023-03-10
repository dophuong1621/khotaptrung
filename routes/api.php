<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    // Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::get('user-profile', [AuthController::class, 'userProfile']);
});

// Route::group(['middleware' => 'auth.jwt'], function () {


// });
Route::apiResource('post', \App\Http\Controllers\Api\PostController::class);
Route::apiResource('recharge', \App\Http\Controllers\Api\RechargeController::class);
Route::apiResource('user', \App\Http\Controllers\Api\UserController::class);


//trashed
Route::delete('trashed', [\App\Http\Controllers\Api\TrashedController::class, 'index']);
Route::delete('forceDelete/{id}', [\App\Http\Controllers\Api\TrashedController::class, 'forceDelete']);
Route::delete('restore/{id}', [\App\Http\Controllers\Api\TrashedController::class, 'restore']);
Route::get('restoreAll', [\App\Http\Controllers\Api\TrashedController::class, 'restoreAll']);

Route::get('top-card', [\App\Http\Controllers\Api\TopcardController::class, 'topCard']);
Route::get('robloxReputation', [\App\Http\Controllers\Api\TopcardController::class, 'robloxReputation']);
Route::get('superDeliciousAccount', [\App\Http\Controllers\Api\TopcardController::class, 'superDeliciousAccount']);
Route::get('openingGame', [\App\Http\Controllers\Api\TopcardController::class, 'openingGame']);
Route::get('ortherGame', [\App\Http\Controllers\Api\TopcardController::class, 'ortherGame']);
