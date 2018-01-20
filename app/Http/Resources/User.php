<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class User extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'age' => $this->age,
            'gender' => $this->gender,
            'height' => $this->height,
            'weight' => $this->weight,
            'workouts' => $this->workouts
        ];
    }

    public function with($request)
    {
        return [
            'version' => '1.0.0',
            'author_url' => url('http://www.srdjan.cc')
        ];
    }
}
