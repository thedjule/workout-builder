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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'pivot'
    ];

    public function exercises()
    {
        return $this->belongsToMany('App\Exercise');
    }

}
