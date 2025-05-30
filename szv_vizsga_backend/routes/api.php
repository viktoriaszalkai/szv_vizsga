<?php

use App\Http\Controllers\SzavakController;
use App\Http\Controllers\TemaController;
use App\Models\szavak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/szavak',[SzavakController::class,'index']);
Route::get('/tema',[TemaController::class,'index']);
Route::get('/szavak/{tema}',[SzavakController::class,'szavak_temaval']);