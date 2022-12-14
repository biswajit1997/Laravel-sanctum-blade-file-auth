<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});





Route::post('login', [AuthController::class , 'login'])->name('login');
Route::post('register', [AuthController::class , 'register'])->name('register');

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('logout', [AuthController::class , 'logout'])->name('logout');
    Route::get('user', [AuthController::class , 'user']);
});
