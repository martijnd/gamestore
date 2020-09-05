<?php

/**
 * @var \Illuminate\Database\Eloquent\Factory $factory
 */

use App\Company;
use App\Game;
use App\Genre;
use App\Publisher;
use App\User;
use Faker\Generator as Faker;

$factory->define(
    Game::class, function (Faker $faker) {
        return [
        'name' => $faker->sentence(3),
        'user_id' => factory(User::class)->create(),
        'genre_id' => factory(Genre::class)->create(),
        'company_id' => factory(Company::class)->create(),
        'publisher_id' => factory(Publisher::class)->create(),
        'released_at' => $faker->dateTimeBetween('-20 years')->format('Y-m-d'),
        'rating' => $faker->numberBetween(50, 100),
        ];
    }
);
