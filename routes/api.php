<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/land/list',[landController::class,'Landlist']);
Route::post('/land/create',[landController::class,'landCreate']);
Route::post('/land/update',[landController::class,'landUpdate']);
Route::post('/land/delete',[landController::class,'landDelete']);
Route::get('/land/search',[landController::class,'landSearchByCode']);
