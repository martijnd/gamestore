<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use App\Game;
use App\Genre;
use App\Publisher;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'genre_id' => Genre::all(['id'])->random(),
        'company_id' => Company::all(['id'])->random(),
        'publisher_id' => Publisher::all(['id'])->random(),
        'released_at' => $faker->dateTimeBetween('-20 years'),
        'rating' => $faker->numberBetween(50, 100),
    ];
});
