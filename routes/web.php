<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContentController::class, 'index']);
Route::get('/content', [ContentController::class, 'index']);
Route::get('/content/create', [ContentController::class, 'create']);
Route::get('/content/{id}/edit', [ContentController::class, 'edit']);
Route::get('/vote', [VoteController::class, 'index']);
Route::get('/vote/{id}/create', [VoteController::class, 'create']);

Route::post('/content', [ContentController::class, 'store']);
Route::post('/vote/{id}', [VoteController::class, 'store']);

Route::put('/content/{id}', [ContentController::class, 'update']);

Route::delete('/content/{id}', [ContentController::class, 'destroy']);



