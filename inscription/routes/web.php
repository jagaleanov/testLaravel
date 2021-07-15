<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\WebController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\dashboard\PhaseController;
use App\Http\Controllers\dashboard\ShirtController;
use App\Http\Controllers\dashboard\PromocodeController;
use App\Http\Controllers\dashboard\InscriptionController;

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


Route::get('/', [WebController::class,'index'])->name('index');

Auth::routes();

Route::group(['prefix' => 'dashboard'], function () {
    Route::resource('phase', PhaseController::class);
    Route::resource('shirt', ShirtController::class);
    Route::resource('promocode', PromocodeController::class);
    Route::resource('inscription', InscriptionController::class);
    Route::resource('user', UserController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/',function(){return view('welcome');})->name('home');
