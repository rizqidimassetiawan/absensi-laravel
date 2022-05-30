<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',function(){
    return view('welcome');
})->name('home');

Route::middleware('auth')->group(function() {
    
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::post('/logout',[AuthController::class,'logout']);
});

Route::get('/login',[AuthController::class,'index'])->name('login')->middleware('guest');
Route::post('/authentication',[AuthController::class,'authentication']);

Route::resource('/get',UserController::class);