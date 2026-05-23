<?php

use App\Http\Controllers\Api\BarangApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// CRUD Barang
Route::apiResource('barang', BarangApiController::class);