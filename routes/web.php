<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'Authentication'], function () {
    Route::post('/register', [AuthenticationController::class, 'store'])->name('register');
    Route::post('/login', [AuthenticationController::class, 'customLogin'])->name('login');
    Route::get('/logout',[AuthenticationController::class,'logout'])->name('logout');
});