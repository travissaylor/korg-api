<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\QuoteController;
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

Route::middleware(['auth:sanctum', 'cors'])->group(function () {
    Route::get('/quotes', [QuoteController::class, 'index'])->name('quotes.all');
    Route::get('/quotes/random', [QuoteController::class, 'random']);
    Route::get('/quotes/{id}', [QuoteController::class, 'show']);

    Route::get('characters', [CharacterController::class, 'index']);
    Route::get('characters/{id}', [CharacterController::class, 'show']);
});