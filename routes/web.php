<?php

use App\Http\Controllers\GameController;
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

Route::get('/create-game', [GameController::class, 'create'])->name('create');

Route::post('/store-game', [GameController::class, 'store'])->name('store');

Route::get('/show-game/{id}', [GameController::class, 'show'])->name('show');



