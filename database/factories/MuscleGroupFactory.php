<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\MuscleGroup::class, function (Faker $faker) {
    $muscleGroup = App\MuscleGroup::find(random_int(1, 13));

    return [
        'name' => $muscleGroup->name
    ];
});
