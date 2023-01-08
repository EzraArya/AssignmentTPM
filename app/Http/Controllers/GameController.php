<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;

class GameController extends Controller
{

    public function create()
    {
        $genres = Genre::all();

        return view('createGame', compact('genres'));
    }   

    public function store(Request $request)
    {
        $validated = $request->validate([
            'GameTitle'=>'required|unique:games|min:5',
            'Developer'=>'required|min:5',
            'Publisher'=>'required|min:5',
            'PublishDate'=>'required',
            'Stock'=>'required',
            'image'=>'required|mimes:jpg, png'
        ]);
        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = $request->GameTitle . '_' . $request->Developer . '.'. $extension;
        $request->file('image')->storeAs('/public/Game/', $filename);

        Game::create([
            'GameTitle' => $request->GameTitle,
            'Developer' => $request->Developer,
            'Publisher' => $request->Publisher,
            'PublishDate' => $request->PublishDate,
            'Stock' => $request ->Stock,
            'image' => $filename,
            'genre_id'=>$request->genre
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

    public function edit($id)
    {
        $game = Game::findOrFail($id);


        return view('editGame', compact('game'));
    }

    public function update(Request $request, $id)
    {
        Game::findOrFail($id)->update([
            'GameTitle' => $request->GameTitle,
            'Developer' => $request->Developer,
            'Publisher' => $request->Publisher,
            'PublishDate' => $request->PublishDate,
            'Stock' => $request ->Stock,
        ]);

        return redirect('/');
    }

    public function delete($id)
    {
        Game::destroy($id);

        return redirect('/');
    }
}
