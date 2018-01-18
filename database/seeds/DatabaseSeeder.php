<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Create Exercise Types and Muscle Groups */

        $this->call(ExerciseTypeSeeder::class);

        $this->call(MuscleGroupsSeeder::class);

        /**
         * Create Exercises and assign to them Muscle Groups and Exercise Type */

        factory(App\Exercise::class, 100)->create()->each(function ($e) {
            $e->muscleGroups()->sync(
                App\MuscleGroup::all()->random(random_int(1, 5))
            );
        });

        /**
         * Create Users and for every User create and assign Workouts and for every Workout assign Exercises */

        factory(App\User::class, 20)->create()->each(function($u) {
            $u->workouts()->saveMany(factory(App\Workout::class, random_int(3, 15))->create()->each(function ($w) {
                $w->exercises()->sync(
                    App\Exercise::all()->random(random_int(3, 16))
                );
            }
            ));
        });

    }
}
