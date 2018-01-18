<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExerciseMuscleGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise_muscle_group', function (Blueprint $table) {
            $table->integer('exercise_id')->unsigned();
            $table->foreign('exercise_id')->references('id')
                ->on('exercises')->onDelete('cascade');

            $table->integer('muscle_group_id')->unsigned();
            $table->foreign('muscle_group_id')->references('id')
                ->on('muscle_groups')->onDelete('cascade');

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
        Schema::dropIfExists('exercise_muscle_group');
    }
}
