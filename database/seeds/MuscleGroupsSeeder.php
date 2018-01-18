<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuscleGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Add All Muscle Groups */

        DB::table('muscle_groups')->insert([
            ['name' => 'Full Body'],
            ['name' => 'Abdominals'],
            ['name' => 'Arms'],
            ['name' => 'Back'],
            ['name' => 'Chest'],
            ['name' => 'Hamstrings'],
            ['name' => 'Hips'],
            ['name' => 'Legs'],
            ['name' => 'Low Back'],
            ['name' => 'Lower Legs'],
            ['name' => 'Neck'],
            ['name' => 'Quadriceps'],
            ['name' => 'Shoulders']
        ]);

    }
}
