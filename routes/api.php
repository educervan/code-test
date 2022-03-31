<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\TextController;
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

Route::post('auth/login',[AuthController::class, 'login'])->name('auth.login');
Route::get('texts',[TextController::class, 'index'])->name('texts.index');

Route::group([
    'middleware' => 'apiJwt',
    'prefix' => 'user'
], function () {
    Route::get('me',[UserController::class, 'me'])->name('user.me');
});