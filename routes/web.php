<?php

use App\Http\Controllers\QuoteUIController;
use App\Http\Livewire\Quotes\Dashboard;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('documentation');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('admin')->middleware('role:admin')->as('admin.')->group(function () {
        // Route::resource('quotes', QuoteUIController::class);
        Route::get('/quotes', Dashboard::class)->name('quotes.index');
    });
});
