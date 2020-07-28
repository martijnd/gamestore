<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use App\Game;
use App\Genre;
use App\Publisher;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        'title' => $faker->words(3),
        'genre_id' => factory(Genre::class),
        'company_id' => factory(Company::class),
        'publisher_id' => factory(Publisher::class),
        'release_date' => $faker->dateTimeBetween('-20 years'),
        'rating' => $faker->numberBetween(1, 100),
    ];
});
