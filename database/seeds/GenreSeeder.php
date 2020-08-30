<?php

namespace Seeders;

use App\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = collect([
            "Platformer",
            "Shooter",
            "Fighting",
            "Beat-em up",
            "Stealth",
            "Survival",
            "Rhythm",
            "Survival horror",
            "Metroidvania",
            "Text adventures",
            "Graphic adventures",
            "Visual novels",
            "Interactive movie",
            "Real-time 3D",
            "Action RPG",
            "MMORPG",
            "Rouguelikes",
            "Tactical RPG",
            "Sandbox RPG",
            "First-person party-based RPG",
            "Construction and management simulation",
            "Life simulation",
            "Vehicle simulation",
            "Artillery",
            "Real-time strategy (RTS)",
            "Real-time tactics (RTT)",
            "Multiplayer online&nbsp;battle arena (MOBA)",
            "Tower defense",
            "Turn-based strategy (TBS)",
            "Turn-based tactics (TBT)",
            "Wargame",
            "Grand strategy wargame",
            "Racing",
            "Team sports",
            "Competitive",
            "Sports-based fighting",
            "Logic game",
            "Trivia game",
            "Idle gaming",
            "Casual game",
            "Party game",
            "Programming game",
            "Board game/card game",
            "Massive multiplayer online (MMO)",
            "Advergame",
            "Art game",
            "Educational game",
            "Exergame"
        ]);

        $titles->map(fn ($title) => factory(Genre::class)->create([
            'name' => $title
        ]));
    }
}
