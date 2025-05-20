<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/ping', function () {
    return response()->json(['message' => 'pong']);
});

// connects URLs to the controller methods
Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);