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

Route::get('/', [GameController::class, 'index']);
Route::get('/search', [GameController::class, 'search']);
Route::get('/collections', [GameController::class, 'collections']);
Route::get('/games', [GameController::class, 'all']);
Route::get('/games/{game:slug}', [GameController::class, 'game']);

Route::get('/info', fn() => view('info'));
Route::get('/contact', fn() => view('contact'));
