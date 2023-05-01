<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('schedule', 'Api\MotorcyclesSchedulesController@getSchdules')->name('schedule');
Route::get('schedule-add/{schedule_id}', 'Api\MotorcyclesSchedulesController@addMotocycle')->name('schedule_add');
Route::get('schedule-rest/{schedule_id}', 'Api\MotorcyclesSchedulesController@restMotocycle')->name('schedule_rest');