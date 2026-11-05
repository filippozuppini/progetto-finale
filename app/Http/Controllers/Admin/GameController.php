<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Developer;
use App\Models\Game;
use App\Models\Genre;
use App\Models\Platform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::with('developer')->orderBy('title')->get();

        return view('admin.games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        $platforms = Platform::all();
        $developers = Developer::all();

        return view('admin.games.create', compact('genres', 'platforms', 'developers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= $request->all();

        // dd($request->all());

        $newGame = new Game();

        $newGame->title = $data['title'];
        $newGame->description = $data['description'];
        $newGame->price = $data['price'];
        $newGame->release_date = $data['release_date'];
        $newGame->developer_id = $data['developer_id'];

        if (isset($data['cover_image'])) {
            
            $img_path = Storage::putFile('/games' , $data['cover_image']); 

            $newGame->cover_image = $img_path;
        }

        
        $newGame->save();

        
        if (isset($data['genres'])) {
            $newGame->genres()->attach($data['genres']);
        }

        if (isset($data['platforms'])) {
            $newGame->platforms()->attach($data['platforms']);
        }


        return redirect()->route('admin.games.show', $newGame->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return view('admin.games.show',compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
}
