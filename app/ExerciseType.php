<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExerciseType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'created_at', 'updated_at'
    ];

    public function exercises()
    {
        return $this->hasMany('App\Exercise');
    }
}
