<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MarcReichel\IGDBLaravel\Models\Game;

class GameController extends Controller
{
    public function index(){
        $newones = Game::whereHas('cover')->whereHas('platforms')->with(['cover', 'platforms'])->where('total_rating_count', '>=', 25)->orderByDesc('first_release_date')->get();
        $best = Game::whereHas('cover')->whereHas('platforms')->with(['cover', 'platforms'])->where('total_rating_count', '>=', 100)->where('first_release_date', '>', 1438476836)->orderByDesc('total_rating')->get();

        return view('home', [
            'newones' => $newones,
            'best' => $best
        ]);
    }

    public function search(){
        $games = Game::whereHas('cover')->whereHas('platforms')->with(['cover', 'platforms'])->where('total_rating_count', '>=', 25)->search('%' . request('name') . '%')->take(500)->orderByDesc('total_rating')->get();

        return view('result', [
            'games' => $games
        ]);
    }

    public function all(){
        $games = Game::whereHas('cover')->whereHas('platforms')->with(['cover', 'platforms'])->where('total_rating_count', '>=', 25)->all();

        return view('result', [
            'games' => $games
        ]);
    }

    public function game($game_slug){
        $game = Game::where('slug', $game_slug)->with(['cover', 'platforms', 'websites', 'genres', 'collection', 'dlcs', 'parent_game', 'videos', 'screenshots'])->get();

        return view('game', [
            'game' => $game[0]
        ]);
    }
}
