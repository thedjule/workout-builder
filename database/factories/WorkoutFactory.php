<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Workout::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'notes' => $faker->text(200)
    ];
});
