<?php

use App\Http\Controllers\RpController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::get('/', [RpController::class, 'index']);
Route::post('/upload-excel', [RpController::class, 'uploadExcel']);
