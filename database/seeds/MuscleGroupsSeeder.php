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
            'name' => 'Abdominals'
        ]);
        DB::table('muscle_groups')->insert([
            'name' => 'Arms'
        ]);
        DB::table('muscle_groups')->insert([
            'name' => 'Back'
        ]);
        DB::table('muscle_groups')->insert([
            'name' => 'Chest'
        ]);
        DB::table('muscle_groups')->insert([
            'name' => 'Full Body'
        ]);
        DB::table('muscle_groups')->insert([
            'name' => 'Hamstrings'
        ]);
        DB::table('muscle_groups')->insert([
            'name' => 'Hips'
        ]);
        DB::table('muscle_groups')->insert([
            'name' => 'Legs'
        ]);
        DB::table('muscle_groups')->insert([
            'name' => 'Low Back'
        ]);
        DB::table('muscle_groups')->insert([
            'name' => 'Lower Legs'
        ]);
        DB::table('muscle_groups')->insert([
            'name' => 'Neck'
        ]);
        DB::table('muscle_groups')->insert([
            'name' => 'Quadriceps'
        ]);
        DB::table('muscle_groups')->insert([
            'name' => 'Shoulders'
        ]);
    }
}
