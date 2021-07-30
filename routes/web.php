<?php

use Illuminate\Support\Facades\Route;
use MarcReichel\IGDBLaravel\Models\Game;
use MarcReichel\IGDBLaravel\Models\Artwork;
use MarcReichel\IGDBLaravel\Models\Cover;

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
    return view('home');
});

Route::post('games', function(){
    $game = Game::with(['cover'])->where('total_rating', '>=', 80)->whereHas('cover')->all();
    return view('test', [
        'games' => $game
    ]);
});
