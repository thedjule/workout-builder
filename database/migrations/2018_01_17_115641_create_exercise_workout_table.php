<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExerciseWorkoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise_workout', function (Blueprint $table) {
            $table->integer('exercise_id')->unsigned();
            $table->foreign('exercise_id')->references('id')
                ->on('exercises')->onDelete('cascade');

            $table->integer('workout_id')->unsigned();
            $table->foreign('workout_id')->references('id')
                ->on('workouts')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercise_workout');
    }
}
