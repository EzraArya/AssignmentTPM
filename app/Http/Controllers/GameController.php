<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{

    public function create()
    {
        return view('createGame');
    }   

    public function store(Request $request)
    {
        Game::create([
            'GameTitle' => $request->GameTitle,
            'Genre' => $request->Genre,
            'Publisher' => $request->Publisher,
            'PublishDate' => $request->PublishDate,
            'Stock' => $request ->Stock,
        ]);

        return redirect('/');
    }

    public function index()
    {
        $games = Game::all();

        return view('welcome', compact('games'));
    }

    public function show($id)
    {
        $game = Game::findOrFail($id);

        return view('showgame', compact('game'));
    }
}
