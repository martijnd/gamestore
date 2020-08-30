<?php

namespace App\Http\Controllers;

use App\Company;
use App\Game;
use App\Genre;
use App\Publisher;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {

        return view('games.index', ['games' => Game::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $game = Game::create($request->validate([
            'name' => 'required|max:200',
            'genre_id' => 'exists:genre'
        ]));

        return response($game, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Game $game
     * @return View
     */
    public function show(Game $game)
    {
        return view('games.show', ['game' => $game]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Game $game
     * @return Response
     */
    public function update(Request $request, Game $game)
    {
        $game->update($request->input());

        return response($game);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Game $game
     * @return Response
     * @throws Exception
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return response(null, 204);
    }
}
