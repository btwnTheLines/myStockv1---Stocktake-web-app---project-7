<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StocktakeItemsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
---
Home page route
---
*/
Route::get('/', function () {
    return view('welcome');
})->name('home');


/*
---
Category page routes
---
*/
Route::middleware('auth')->group( function () {
    Route::get('/kitchen-supplies', function () { return view('kitchen'); })->name('kitchen');

    Route::post('/kitchen-supplies', [StocktakeItemsController::class, 'store']);

    Route::put('/kitchen-supplies', [StocktakeItemsController::class, 'update']);

    Route::delete('/kitchen-supplies', [StocktakeItemsController::class, 'destroy']);



    Route::get('/office-supplies', function () { return view('office'); })->name('office');

    Route::post('/office-supplies', [StocktakeItemsController::class, 'store']);

    Route::put('/office-supplies', [StocktakeItemsController::class, 'update']);

    Route::delete('/office-supplies', [StocktakeItemsController::class, 'destroy']);



    Route::get('/raw-materials', function () { return view('materials'); })->name('materials');

    Route::post('/raw-materials', [StocktakeItemsController::class, 'store']);

    Route::put('/raw-materials', [StocktakeItemsController::class, 'update']);

    Route::delete('/raw-materials', [StocktakeItemsController::class, 'destroy']);



    Route::get('/fuel-supply', function () { return view('fuel'); })->name('fuel');

    Route::post('/fuel-supply', [StocktakeItemsController::class, 'store']);

    Route::put('/fuel-supply', [StocktakeItemsController::class, 'update']);

    Route::delete('/fuel-supply', [StocktakeItemsController::class, 'destroy']);
});


/*
---
User page routes
---
*/
Route::get('/dashboard', function () {
    return view('dashboard'); })
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
    ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
    ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
    ->name('profile.destroy');
});

require __DIR__.'/auth.php';
