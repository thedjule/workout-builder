<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Workout::class, function (Faker $faker) {
    return [
        'name' => $faker->words(4, true),
        'notes' => $faker->text(200)
    ];
});
