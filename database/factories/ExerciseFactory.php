<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Exercise::class, function (Faker $faker) {
    return [
        'name' => $faker->words($nb = 3, $asText = true),
        'video' => $faker->url,
        'description' => $faker->text(200),
        'exercise_type_id' => random_int(1, 3)
    ];
});
