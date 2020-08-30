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
        'genre_id' => factory(Genre::class),
        'company_id' => factory(Company::class),
        'publisher_id' => factory(Publisher::class),
        'released_at' => $faker->dateTimeBetween('-20 years'),
        'rating' => $faker->numberBetween(50, 100),
    ];
});
