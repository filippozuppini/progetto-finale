<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Game;

class GameController extends Controller
{
        // lista di tutti i giochi, con le informazioni collegate
    public function index()
    {
        $games = Game::with('developer', 'genres', 'platforms')->orderBy('title')->get();

        return response()->json([
            'success' => true,
            'data' => $games,
        ]);
    }

    // dettaglio di un singolo gioco
    public function show(Game $game)
    {
        $game->load('developer', 'genres', 'platforms');

        return response()->json([
            'success' => true,
            'data' => $game,
        ]);
    }
}
