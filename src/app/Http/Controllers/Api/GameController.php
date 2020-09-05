<?php

namespace App\Http\Controllers\Api;

use App\Game;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateGameRequest;
use App\Http\Requests\DeleteGameRequest;
use App\Http\Requests\UpdateGameRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return response(Game::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateGameRequest $request
     * @return Application|ResponseFactory|Response
     */
    public function store(CreateGameRequest $request)
    {
        return response(
            Auth::user()->games()->create(
                $request->validated()
            ),
            201
        );
    }

    /**
     * Display the specified resource.
     *
     * @param Game $game
     * @return Response
     */
    public function show(Game $game)
    {
        return response($game);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateGameRequest $request
     * @param Game $game
     * @return Response
     */
    public function update(UpdateGameRequest $request, Game $game)
    {
        $game->update($request->validated());
        return response($game);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DeleteGameRequest $request
     * @param Game $game
     * @return Response
     * @throws \Exception
     */
    public function destroy(DeleteGameRequest $request, Game $game)
    {
        $game->delete();
        return response()->noContent();
    }
}
