<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MuscleGroup extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function exercises()
    {
        return $this->belongsToMany('App\Exercise');
    }

}
