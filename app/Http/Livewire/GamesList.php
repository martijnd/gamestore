<?php

namespace App\Http\Livewire;

use App\Game;
use Livewire\Component;

class GamesList extends Component
{
    public function delete(int $id)
    {
        $game = Game::findOrFail($id);
        $game->delete();
    }

    public function render()
    {
        return view('livewire.games-list', ['games' => Game::with(['company', 'genre', 'publisher'])->get()]);
    }
}
