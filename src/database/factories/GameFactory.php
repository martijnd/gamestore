<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Game;
use App\Models\Genre;
use App\Models\Publisher;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    protected $model = Game::class;

    /**
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'user_id' => User::factory(),
            'genre_id' => Genre::factory(),
            'company_id' => Company::factory(),
            'publisher_id' => Publisher::factory(),
            'released_at' => $this->faker->dateTimeBetween('-20 years')->format('Y-m-d'),
            'rating' => $this->faker->numberBetween(50, 100),
        ];
    }
}
