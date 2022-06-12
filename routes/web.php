<?php

use App\Http\Controllers\Main\MainController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::controller(MainController::class)->group(function () {
    Route::get('/','index');
    Route::get('/works','works')->name('works');
    Route::get('/post','post')->name('post');
    Route::get('/profile','profile')->name('profile');
});


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
