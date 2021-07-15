<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\RunnerController;
use App\Http\Controllers\api\InscriptionController;
use App\Http\Controllers\api\CountryController;
use App\Http\Controllers\api\StateController;
use App\Http\Controllers\api\CityController;
use App\Http\Controllers\api\ShirtController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('runners/{runner_id}/inscriptions', [InscriptionController::class, 'fromRunner'])->name('runners.inscriptions');
Route::get('states/{state_id}/cities', [CityController::class, 'fromState'])->name('states.cities');

Route::get('countries', [CountryController::class, 'index'])->name('countries');
Route::get('states', [StateController::class, 'index'])->name('countries');
Route::get('shirts', [ShirtController::class, 'index'])->name('shirts');
Route::resource('runners', RunnerController::class);
Route::resource('inscriptions', InscriptionController::class);
