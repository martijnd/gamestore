<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Livewire\Component;
use Livewire\WithPagination;

class GamesList extends Component
{
    use WithPagination;

    public string $search = '';

    public function delete(int $id)
    { 
        $game = Game::findOrFail($id);
        $game->delete();
    }

    public function render()
    {
        return view(
            'livewire.games-list',
            [
            'games' => Game::with(['company', 'genre', 'publisher'])
                ->where('name', 'LIKE', "%{$this->search}%")->paginate(20)
            ]
        );
    }
}
