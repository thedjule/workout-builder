<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExerciseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Add Exercise Types */

        DB::table('exercise_types')->insert([
            ['name' => 'Strength'],
            ['name' => 'Flexibility'],
            ['name' => 'Cardio']
        ]);

    }
}
