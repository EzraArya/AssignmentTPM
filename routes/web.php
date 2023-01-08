<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\GenreController;
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

Route::get('/', [GameController::class, 'index'])->name('index');
Route::get('/search', [GameController::class, 'search'])->name('search');

Route::get('/create-game', [GameController::class, 'create'])->name('create');

Route::post('/store-game', [GameController::class, 'store'])->name('store');

Route::get('/show-game/{id}', [GameController::class, 'show'])->name('show');

Route::get('/edit-book/{id}', [GameController::class, 'edit'])->name('edit');

Route::patch('/update-book/{id}', [GameController::class, 'update']);

Route::delete('/delete-book/{id}', [GameController::class, 'delete']);

Route::get('/create-genre', [GenreController::class, 'create'])->name('createGenre');

Route::post('/store-genre', [GenreController::class, 'store']);



