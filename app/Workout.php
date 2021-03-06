<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'notes'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'pivot'
    ];


    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function exercises()
    {
        return $this->belongsToMany('App\Exercise');
    }
}
