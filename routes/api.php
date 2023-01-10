<?php

use App\Http\Controllers\PenumpangController;
use App\Models\Penumpang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/penumpang', [PenumpangController::class, 'store']);
Route::put('/penumpang/{id}',[PenumpangController::class, 'update']);
Route::get('/penumpang/{id}',[PenumpangController::class, 'show']);
Route::get('/penumpang',[PenumpangController::class, 'index']);
Route::delete('/penumpang/{id}',[PenumpangController::class, 'destroy']);
//  Route::apiResource('penumpang',PenumpangController::class);
