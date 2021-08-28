<?php

use App\Http\Controllers\QuoteUIController;
use App\Http\Livewire\Quotes\Add;
use App\Http\Livewire\Quotes\Dashboard;
use App\Http\Livewire\Quotes\Edit;
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
        Route::get('/quotes/new', Add::class)->name('quotes.new');
        Route::get('/quotes/{id}/edit', Edit::class)->name('quotes.edit');
    });
});
