<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MarcReichel\IGDBLaravel\Models\Game;
use MarcReichel\IGDBLaravel\Models\Genre;
use App\Http\Helpers\WebEnum;

class GameController extends Controller
{
    public function index(){
        $newones = Game::whereHas('cover')->whereHas('platforms')->with(['cover', 'platforms', 'genres'])->where('total_rating_count', '>=', 25)->orderByDesc('first_release_date')->get();
        $best = Game::whereHas('cover')->whereHas('platforms')->with(['cover', 'platforms', 'genres'])->where('total_rating_count', '>=', 100)->where('first_release_date', '>', 1438476836)->orderByDesc('total_rating')->get();

        return view('home', [
            'newones' => $newones,
            'best' => $best
        ]);
    }

    public function search(){
        //Base query
        $pages = Game::whereHas('cover')->whereHas('platforms')->with(['cover', 'platforms', 'genres'])->where('total_rating_count', '>=', 25)->where('name', 'ilike', '%'.request('name').'%')->take(500)->get()->count() / 10;
        $games = Game::whereHas('cover')->whereHas('platforms')->with(['cover', 'platforms', 'genres'])->where('total_rating_count', '>=', 25)->where('name', 'ilike', '%'.request('name').'%');

        //If order is set, order the query
        if(request('genre')){
            $games = $games->whereIn('genres', [request('genre')]);
        } elseif(request('by') && request('how')) {
            $games = $games->orderBy(request('by'), request('how'));
        }

        $games = $games->skip((request('page'))*10)->take(10)->get();
        
        //Get all the available genres and companies
        $genres = Genre::all();

        return view('result', [
            'games' => $games,
            'genres' => $genres,
            'pages' => $pages
        ]);
    }

    public function all(){
        //Base query
        $pages = Game::whereHas('cover')->whereHas('platforms')->whereHas('genres')->where('total_rating_count', '>=', 25)->with(['cover', 'platforms', 'genres'])->count() / 10; 
        $games = Game::whereHas('cover')->whereHas('platforms')->whereHas('genres')->where('total_rating_count', '>=', 25)->with(['cover', 'platforms', 'genres']);
        
        //If order is set, order the query
        if(request('by') && request('how')){
            $games = $games->orderBy(request('by'), request('how'))->skip((request('page'))*10)->take(10)->get();
        } else {
            $games = $games->skip((request('page'))*10)->take(10)->get();
        }


        //Get all the available genres
        $genres = Genre::all();

        return view('result', [
            'games' => $games,
            'genres' => $genres,
            'pages' => ceil($pages)
        ]);
    }

    public function game($game_slug){
        $game = Game::where('slug', $game_slug)->with(['cover', 'platforms', 'websites', 'genres', 'collection', 'dlcs', 'dlcs.cover', 'dlcs.platforms', 'dlcs.genres', 'expansions', 'expansions.cover', 'expansions.platforms', 'expansions.genres', 'parent_game', 'videos', 'screenshots'])->get();
        $webEnum = WebEnum::Official();

        return view('game', [
            'game' => $game[0],
            'webEnum' => compact('webEnum')
        ]);
    }
}
