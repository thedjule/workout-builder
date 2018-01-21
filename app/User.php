<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'pivot'
    ];

    public function workouts()
    {
        return $this->belongsToMany('App\Workout');
    }

    public function generateApiToken()
    {
        $this->api_token = bin2hex(openssl_random_pseudo_bytes(30));
        $this->save();

        return $this->api_token;
    }
}
