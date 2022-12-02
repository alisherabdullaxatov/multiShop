<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
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


Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('n-home');
    Route::get('/admin/dashboard', 'dashboard')->name('dashboard');
});
Route::controller(AuthController::class)->group(function () {
    Route::get('/user', 'user')->name('a-user');
    Route::get('/user-create', 'createUser')->name('a-create');
    Route::post('/user-create', 'userStore')->name('a-store');
    Route::post('/user', 'userId')->name('a-userId');
});