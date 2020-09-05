<?php

namespace Seeders;

use App\Company;
use App\Game;
use App\Genre;
use App\Publisher;
use App\User;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gameTitles = collect(
            [
            "Snoopy",
            "Fraxxon",
            "Hopper",
            "Venom Wing",
            "Flimbo's Quest",
            "Hoi",
            "Borobodur: The Planet Of Doom",
            "Cognition",
            "Alien Gate",
            "Eggbert in Eggciting Adventure",
            "Clockwiser",
            "Jazz Jackrabbit",
            "Coala",
            "A2 Racer",
            "A2 Racer II",
            "Age of Wonders",
            "Jazz Jackrabbit 2",
            "London Racer",
            "Moorhuhn",
            "Hooligans: Storm Over Europe",
            "A2 Racer III Europa Tour",
            "Vakantie Racer",
            "Toki Tori",
            "Worms World Party",
            "Tiny Toon Adventures: Dizzy's Candy Quest",
            "Keep the Balance",
            "Europe Racer",
            "A2 Racer IV The Cop's Revenge",
            "Age of Wonders II: The Wizard's Throne",
            "Knight Rider: The Game",
            "Miniconomy",
            "Age of Wonders: Shadow Magic",
            "Knight Rider 2: The Game",
            "Killzone",
            "Shellshock: Nam '67",
            "Wade Hixton's Counter Punch",
            "London Racer Destruction/Police Madness",
            "Ship simulator",
            "Bonk's Return",
            "Xyanide",
            "Killzone Liberation",
            "Garfield: A Tail of Two Kitties",
            "Delicious",
            "Overlord",
            "My Horse and Me",
            "Delicious 2",
            "Puzzle Quest: Challenge of the Warlords",
            "Xyanide Resurrection",
            "Worms: Open Warfare 2",
            "Iron Grip: Warlord",
            "Efteling Tycoon",
            "The Chronicles of Spellborn",
            "Rubik's Puzzle World",
            "Toki Tori",
            "Bang Attack",
            "GoPets: Vacation Island",
            "Overlord: Raising Hell",
            "Delicious: Emily's Tea Garden",
            "de Blob",
            "Star Defense",
            "Iron Grip: Lords of War",
            "Adam's Venture",
            "Killzone 2",
            "Rush Rush Rally Racing",
            "Heron: Steam Machine",
            "Delicious: Emily's Taste of Fame",
            "Swords & Soldiers",
            "Overlord II",
            "Rocket Riot",
            "Campfire Legends - The Hookman",
            "Fairytale Fights",
            "Greed Corp",
            "Club Galactik",
            " HoopWorld BasketBrawl",
            "Super Crate Box",
            "Iron Grip: Marauders",
            "Serious Sam: The Random Encounter",
            "Nuclear Dawn",
            "Killzone 3",
            "Gatling Gears",
            "EnerCities",
            "Awesomenauts",
            "EDGE",
            "Ridiculous Fishing",
            "Terraria",
            "Toki Tori 2",
            "Reus",
            "Halo: Spartan Assault",
            "ibb & obb",
            "Killzone: Shadow Fall",
            "Luftrausers",
            "Age of Wonders III",
            "Bounden",
            "Metrico",
            "Lethal League",
            "Halo: Spartan Strike",
            "Sword & Soldiers II",
            "RIVE",
            "Verdun",
            "Nuclear Throne",
            "FRU",
            "Cross of the Dutchman",
            "SpeedRunners",
            "Arizona Sunshine",
            "Tricky Towers",
            "Horizon Zero Dawn",
            "Herald: An Interactive Period Drama",
            "We Were Here",
            "We Were Here Too",
            "We Were Here Together",
            "Tannenberg",
            "Good Job!"
            ]
        );

        $gameTitles->map(
            fn ($name) => factory(Game::class)->create(
                [
                'name' => $name,
                'user_id' => User::all(['id'])->random(),
                'genre_id' => Genre::all(['id'])->random(),
                'company_id' => Company::all(['id'])->random(),
                'publisher_id' => Publisher::all(['id'])->random(),
                ]
            )
        );
    }
}
