<?php

namespace App\Http\Livewire;

use App\Game;
use Livewire\Component;

class GamesList extends Component
{
    public $search = '';

    public function delete(int $id)
    {
        $game = Game::findOrFail($id);
        $game->delete();
    }

    public function render()
    {
        return view('livewire.games-list', [
            'games' => Game::with(['company', 'genre', 'publisher'])
                ->where('name', 'LIKE', "%{$this->search}%")->paginate(20)
        ]);
    }
}
