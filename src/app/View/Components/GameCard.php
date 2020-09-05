<?php

namespace App\View\Components;

use App\Game;
use Illuminate\View\Component;

class GameCard extends Component
{

    public Game $game;

    public function __construct($game)
    {
        $this->game = $game;
    }

    public function render()
    {
        return view('components.game-card');
    }
}
