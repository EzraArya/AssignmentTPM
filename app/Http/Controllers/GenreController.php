<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function create()
    {
        return view('createGenre');
    }

    public function store(Request $request )
    {
        $validated = $request->validate([
            'GenreName'=>'required'
        ]);

        Genre::create([
            'GenreName'=>$request->GenreName
        ]);

        return redirect('/');
    }
}
