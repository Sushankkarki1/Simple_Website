<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [ItemController::class, 'index']);
Route::post('/store', [ItemController::class, 'store']);
Route::get('/edit/{id}', [ItemController::class, 'edit']);
Route::post('/update/{id}', [ItemController::class, 'update']);
Route::get('/delete/{id}', [ItemController::class, 'destroy']);
