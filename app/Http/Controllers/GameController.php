<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MarcReichel\IGDBLaravel\Models\Game;

class GameController extends Controller
{
    public function index(){
        $games = Game::with(['cover', 'websites', 'platforms'])->where('total_rating', '>=', 80)->where('total_rating_count', '>=', 1000)->whereHas('cover')->whereNull('parent_game')->orderByDesc('total_rating')->all();
        
        return view('home', [
            'games' => $games
        ]);
    }

    public function search(){
        $games = Game::with(['cover', 'websites'])->search('%' . request('search') . '%')->orderByDesc('total_rating')->all();

        return view('home', [
            'games' => $games
        ]);
    }
}
