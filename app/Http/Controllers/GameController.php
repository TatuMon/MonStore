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
        $games = Game::whereHas('cover')->whereHas('platforms')->with(['cover', 'platforms'])->where('total_rating_count', '>=', 25)->search('%' . request('search') . '%')->take(500)->orderByDesc('total_rating')->get();

        return view('result', [
            'games' => $games
        ]);
    }
}
