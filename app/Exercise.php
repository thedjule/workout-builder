<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'video'
    ];

    public function workouts()
    {
        return $this->belongsToMany('App\Workout');
    }

    public function muscleGroups()
    {
        return $this->belongsToMany('App\MuscleGroup');
    }

    public function exerciseType()
    {
        return $this->belongsTo('App\ExerciseType');
    }
}
