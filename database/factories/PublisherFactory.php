<?php

/**
 * @var Factory $factory 
 */

use App\Publisher;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(
    Publisher::class, function (Faker $faker) {
        return [
        'name' => $faker->word()
        ];
    }
);
