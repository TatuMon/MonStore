<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MarcReichel\IGDBLaravel\Models\Game;

class GameController extends Controller
{
    public function index(){
        $newones = Game::whereHas('cover')->whereHas('websites')->whereHas('platforms')->with(['cover', 'websites', 'platforms'])->where('total_rating_count', '>=', 25)->orderByDesc('first_release_date')->get();
        
        return view('home', [
            'newones' => $newones
        ]);
    }

    public function search(){
        $games = Game::with(['cover', 'websites'])->search('%' . request('search') . '%')->orderByDesc('total_rating')->all();

        return view('home', [
            'games' => $games
        ]);
    }
}
