<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\HobyController;
use App\Http\Controllers\KeahlihanController;


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

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('app', [AppController::class, 'app'])->name('app');
Route::post('app/action', [AppController::class, 'actionapp'])->name('actionapp');

Route::get('hoby', [HobyController::class, 'hoby'])->name('hoby');
Route::post('hoby/action', [HobyController::class, 'actionhoby'])->name('actionhoby');

Route::get('keahlihan', [KeahlihanController::class, 'keahlihan'])->name('keahlihan');
Route::post('keahlihan/action', [KeahlihanController::class, 'actionkeahlihan'])->name('actionkeahlihan');


