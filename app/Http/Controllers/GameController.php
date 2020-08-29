<?php

namespace App\Http\Controllers;

use App\Game;
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
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $game = Game::create($request->input());

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
