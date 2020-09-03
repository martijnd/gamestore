<?php

namespace App\Http\Controllers;

use App\Game;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke()
    {

        return view(
            'home', [
            'latestGames' => Game::query()
                ->where('released_at', '>', Carbon::parse('2 years ago'))
                ->orderBy('released_at', 'desc')
                ->get()
            ]
        );
    }
}
