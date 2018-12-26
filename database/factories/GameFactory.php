<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Game::class, function (Faker $faker) {
    return [
        'game_type' => 'multiplayer',
        'name' => $faker->unique()->word,
        'gender' => 'shooter',
        'launch_year' => $faker->year($max = 'now') ,
        'developer' => $faker->name,
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
        'qty' => $faker->randomDigitNotNull,
        'cover' => '/img/covers/default.jpg'
    ];
});
