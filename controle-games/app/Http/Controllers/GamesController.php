<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;
class GamesController extends Controller
{
    public function index(Request $request)
    {
        $games = Games::all();

        return view('games.index', compact('games'));
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        Games::create($request->all());

        return to_route('games.index');
    }

    public function destroy(Request $request)
    {
        Games::destroy($request->game);
        return to_route('games.index');
    }
}
